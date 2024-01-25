import * as RequestApi from './request.js';

var token = window.params.token

$(document).on('change', '#mainCategory', function (e) {
    var mainCategoryId = $(this).val();
    var subCategoryUrl = window.params.subCategoryRoute
    $('#sub_minor_category_container').css('display', 'none'); 
    var data = {
        'mainCategoryId': mainCategoryId
    }

    RequestApi.postRequest(data, subCategoryUrl, token).then(response => {
        if (response !== "") {
            $('#sub_category_container').css('display', '');
            $('#sub_category_container').html(response);
        } else {
            $('#sub_category_container').css('display', 'none'); 
        }
    }).catch(error => { })
});

$(document).on('change', '#subCategory', function (e) {
    var subCategoryId = $(this).val();
    var subMinorCategoryUrl = window.params.subMinorCategoryRoute

    var data = {
        'subCategoryId': subCategoryId
    }

    RequestApi.postRequest(data, subMinorCategoryUrl, token).then(response => {
        if (response !== "") {
            $('#sub_minor_category_container').css('display', '');
            $('#sub_minor_category_container').html(response);
        } else {
            $('#sub_minor_category_container').css('display', 'none'); 
        }
    }).catch(error => { })
});

$(document).on('change', '#province', function (e) {
    var provinceId = $(this).val();
    var amphurUrl = window.params.amphurRoute

    var data = {
        'provinceId': provinceId
    }

    RequestApi.postRequest(data, amphurUrl, token).then(response => {
        if (response !== "") {
            $('#amphur_container').css('display', '');
            $('#amphur_container').html(response);
        } else {
            $('#amphur_container').css('display', 'none'); 
        }
    }).catch(error => { })
});

$(document).on('click', '#public', function (e) {
    // var provinceId = $(this).val();
    var storeUrl = window.params.storeRoute;
    var title = $("#title").val() || null;
    var price = $("#price").val() || 0;
    var mainCategory = $("#mainCategory").val() || null;
    var subCategory = $("#subCategory").val() || null;
    var subMinorCategory = $("#subMinorCategory").val() || null;
    var province = $("#province").val() || null;
    var amphur = $("#amphur").val() || null;
    var lat = $("#lat").val() || null;
    var lng = $("#lng").val() || null;
    var phone1 = $("#phone1").val() || null;
    var phone2 = $("#phone2").val();
    var youtube = $("#youtube").val();
    var lineAccount = $("#line_account").val();
    var facebook = $("#facebook").val();
    var website = $("#website").val();
    var nearPlace = $("#near_place").val();
    var needBroker = $("#need_broker").val();
    var percent = $("#percent").val() || null;
    var htmlContent = $('#summernote').summernote('code');
    var uploadedImages = window.params.uploadedImages

    var plainContent = $('<div>').html(htmlContent).text();

    if (title === null) {
        Swal.fire(
            'ผิดพลาด',
            'กรุณากรอกหัวข้อประกาศ',
            'warning'
        )
        return
    }
    var price = parseFloat(price.replace(",", ""));
    if (isNaN(price)) {
        Swal.fire(
            'ผิดพลาด',
            'กรุณากรอกราคาให้ถูกต้อง',
            'warning'
        )
        return
    }
    if (mainCategory === null) {
        Swal.fire(
            'ผิดพลาด',
            'กรุณาเลือกหมวดหมู่หลัก',
            'warning'
        )
        return
    }
    if (subCategory == null) {
        Swal.fire(
            'ผิดพลาด',
            'กรุณาเลือกหมวดหมู่รอง',
            'warning'
        )
        return
    }
    if (mainCategory == "1") {
         if (subMinorCategory == null) {
            Swal.fire(
                'ผิดพลาด',
                'กรุณาเลือกหมวดหมู่ย่อย',
                'warning'
             )
             return
        }
    }
    if (province == null) {
        Swal.fire(
            'ผิดพลาด',
            'กรุณาเลือกจังหวัด',
            'warning'
        )
        return
    }
    if (amphur == null) {
        Swal.fire(
            'ผิดพลาด',
            'กรุณาเลือกอำเภอ',
            'warning'
        )
        return
    }
    if (lat == null || isNaN(lat) || parseFloat(lat) < 0 || parseFloat(lat) > 25) {
        Swal.fire(
            'ผิดพลาด',
            'กรุณากรอกละติจูดให้ถูกต้อง (ละติจูดของประเทศไทยอยู่ระหว่าง 5.5-20.5)',
            'warning'
        )
        return
    }
    if (lng == null || isNaN(lng) || parseFloat(lng) < 0 || parseFloat(lng) > 106 ||  parseFloat(lng) < 97) {
        Swal.fire(
            'ผิดพลาด',
            'กรุณากรอกลองติจูดให้ถูกต้อง (ลองติจูดของประเทศไทยอยู่ระหว่าง 97.3-105.5)',
            'warning'
        )
        return
    }

    if (phone1 == null) {
        Swal.fire(
            'ผิดพลาด',
            'กรุณากรอกเบอร์โทรศัพท์หลัก',
            'warning'
        )
        return
    }
    if (phone1 == null) {
        Swal.fire(
            'ผิดพลาด',
            'กรุณากรอกเบอร์โทรศัพท์หลัก',
            'warning'
        )
        return
    }
     if (needBroker == '2') {
       if (percent == null || isNaN(percent) || parseFloat(percent) < 0) {
            Swal.fire(
                'ผิดพลาด',
                'กรุณากรอกเปอร์เซนต์ค่าแนะนำให้ถูกต้อง',
                'warning'
            )
            return
        }
    }
    if (plainContent == null) {
        Swal.fire(
            'ผิดพลาด',
            'กรุณากรอกข้อมูลประกาศ',
            'warning'
        )
        return
    }

    if (uploadedImages.length < 3) {
        Swal.fire(
            'ผิดพลาด',
            'กรุณาอัพโหลดรูปอย่างน้อย 3 รูป',
            'warning'
        )
        return
    }

    var data = {
        'title': title,
        'price': price,
        'mainCategory': mainCategory,
        'subCategory': subCategory,
        'subMinorCategory': subMinorCategory,
        'province': province,
        'amphur': amphur,
        'lat': lat,
        'lng': lng,
        'nearPlace': nearPlace,
        'phone1': phone1,
        'phone2': phone2,
        'youtube': youtube,
        'lineAccount': lineAccount,
        'facebook': facebook,
        'website': website,
        'needBroker': needBroker,
        'percent': percent,
        'content': htmlContent,
        'plainContent': plainContent,
        'uploadedImages' : uploadedImages,
    }

    // console.log(data);

    RequestApi.postRequest(data, storeUrl, token).then(response => {
        console.log(response)
        // if (response !== "") {
        //     $('#amphur_container').css('display', '');
        //     $('#amphur_container').html(response);
        // } else {
        //     $('#amphur_container').css('display', 'none'); 
        // }
    }).catch(error => { })

});

function removeFileFromServer(imageFile)
{
    console.log(imageFile)
}
