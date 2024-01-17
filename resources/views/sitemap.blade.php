<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>{{url('/')}}</loc>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
    </url>
    @foreach ($posts as $post)
    <url>
        <loc>{{url('/')}}/{{$post->slug}}</loc>
        <lastmod>{{$post->created_at->tz('Asia/Bangkok')->toAtomString()}}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
    </url>
    @endforeach

</urlset>