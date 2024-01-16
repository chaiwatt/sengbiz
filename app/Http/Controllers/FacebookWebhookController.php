<?php

namespace App\Http\Controllers;

use App\Models\Test;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class FacebookWebhookController extends Controller
{



    // public function verify(Request $request)
    // {
    //     $hubChallenge = $request->input('hub_challenge');
    //     $hubVerifyToken = $request->input('hub_verify_token');

    //     // return 'ummm';
    //     // Your verification logic here
    //     // \Log::error($hubVerifyToken);
    //     if ($hubVerifyToken === 'sengBizMessage') {
    //         return response($hubChallenge, 200);
    //     }

    //     return response('Invalid verification token', 403);
    // }
    public function webhook(Request $request)
    {
        $hubVerifyToken = env('HUB_VERIFY_TOKEN');
        $hubChallenge = $request->input('hub_challenge');
        $hubVerifyToken = $request->input('hub_verify_token');

        Test::create(['name' => 'ok']);

        if ($hubVerifyToken === '123456') {
            return response($hubChallenge); // ตอบกลับด้วย challenge เพื่อยืนยันการตรวจสอบ
        } else {
            // จัดการคำขอที่ไม่ถูกต้อง (เช่น คืนค่าการตอบสนองข้อผิดพลาด)
        }

        $input = $request->all();
            $messages = [
                'I_want_to_buy' => 'We will contact you as soon as possible once we see it sent. If you have other questions, you can ask me!',
                'I_dont_want_to_buy' => 'Thank you for contacting us. If you have other questions, you can ask me!',
            ];

            if (isset($input['object']) && $input['object'] === 'page') {
                foreach ($input['entry'] as $entry) {
                    foreach ($entry['messaging'] as $event) {
                        $senderId = $event['sender']['id'];
              
                        if (isset($event['message']['attachments'][0]['type']) && $event['message']['attachments'][0]['type'] === 'image') {
                            // Handle image attachment
                            // You can access the image URL like this:
                            $imageUrl = $event['message']['attachments'][0]['payload']['url'];

                            // Respond to the image message, e.g., acknowledge receipt
                            $response_text = 'Received an image: ' . $imageUrl;
                        } else {
                            if (isset($event['message']['quick_reply']['payload'])) {
                                $payload = $event['message']['quick_reply']['payload'];
                                $response_text = $messages[$payload];
                            } else {
                                $messageText = $event['message']['text'];
                                $response_text = 'You said: ' . $messageText;
                            }
                        }

                        // Send a response_text
                        $gg = $this->sendTextMessage($senderId, $response_text);
                        if (!$gg) {
                            return response('EVENT_RECEIVED', 200);
                        } else {
                            // Log::error($gg);
                            return $gg . '<br>' . $senderId . '<br>' . $messageText;
                        }
                    }
                }
            }

            return 'ummm';
    }

    private function sendTextMessage($recipientId, $messageText)
    {
        $pageAccessToken = env('PAGE_ACCESS_TOKEN');
        $client = new Client();

        $data = [
            'recipient' => ['id' => $recipientId],
            'message' => ['text' => $messageText],
        ];

        try {
            $response = $client->post('https://graph.facebook.com/v18.0/me/messages', [
                'query' => ['access_token' => $pageAccessToken],
                'json' => $data,
            ]);

            // Check the response and handle any errors if necessary
            $responseBody = $response->getBody()->getContents();
            return false;
            // You can log or process the response as needed
        } catch (\Exception $e) {
            // Handle any exceptions, e.g., log the error
            return $e->getMessage();
        }
    }
}
