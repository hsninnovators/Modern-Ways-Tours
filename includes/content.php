<?php
require_once __DIR__ . '/functions.php';
require_once __DIR__ . '/config.php';

function default_packages(): array
{
    return [
        [
            'title' => 'Group / Normal Package',
            'subtitle' => 'Social, comfortable and all-inclusive mountain escape',
            'original_price' => 'PKR 29,000 per head',
            'discounted_price' => 'PKR 26,000 per head only',
            'details' => 'Best for friends, families, colleagues and solo travelers who want premium transport, hotel stay, meals, jeep rides and guided sightseeing with no planning stress.',
            'badge' => '10% Discount Applied',
            'sort_order' => 1,
        ],
        [
            'title' => 'Couple Package',
            'subtitle' => 'Private couple room with premium travel support',
            'original_price' => '',
            'discounted_price' => 'PKR 38,000 per head',
            'details' => 'Designed for couples who want a private room, organized activities, romantic mountain views, comfortable travel and dedicated trip coordination.',
            'badge' => 'Private Room Included',
            'sort_order' => 2,
        ],
    ];
}

function default_gallery_items(): array
{
    return [
        ['type' => 'image', 'title' => 'Kiwai Waterfalls', 'file_path' => 'assets/images/kiwai.jpg', 'description' => 'Refreshing waterfall stop surrounded by green mountain scenery.', 'sort_order' => 1],
        ['type' => 'image', 'title' => 'Saif-ul-Malook Lake', 'file_path' => 'assets/images/saifulmalook.jpg', 'description' => 'Iconic alpine lake experience with boating included in the package.', 'sort_order' => 2],
        ['type' => 'image', 'title' => 'Babusar Top', 'file_path' => 'assets/images/babusar.jpg', 'description' => 'High-altitude panoramic views and unforgettable photography moments.', 'sort_order' => 3],
        ['type' => 'image', 'title' => 'Shogran Meadows', 'file_path' => 'assets/images/shogran.jpg', 'description' => 'Peaceful hill station stay with bonfire and guided evening memories.', 'sort_order' => 4],
        ['type' => 'image', 'title' => 'Kiwai Adventure Stop', 'file_path' => 'assets/images/kiwai.jpg', 'description' => 'A beautiful refreshing stop for tea, photography and waterfall views.', 'sort_order' => 5],
        ['type' => 'image', 'title' => 'Lake Boating Moment', 'file_path' => 'assets/images/saifulmalook.jpg', 'description' => 'A premium lake experience with mountain reflections and optional photography.', 'sort_order' => 6],
        ['type' => 'image', 'title' => 'Babusar Mountain Road', 'file_path' => 'assets/images/babusar.jpg', 'description' => 'Dramatic mountain route views on the way to Babusar Top and Giti Das.', 'sort_order' => 7],
        ['type' => 'image', 'title' => 'Shogran Bonfire Night', 'file_path' => 'assets/images/shogran.jpg', 'description' => 'Evening hotel stay atmosphere with music, bonfire and group memories.', 'sort_order' => 8],
        ['type' => 'video', 'title' => 'Naran Tour Highlights', 'file_path' => 'https://www.youtube.com/embed/dQw4w9WgXcQ', 'description' => 'Replace this sample embed from admin with your official tour highlight video.', 'sort_order' => 9],
        ['type' => 'video', 'title' => 'Adventure Activities Reel', 'file_path' => 'https://www.youtube.com/embed/dQw4w9WgXcQ', 'description' => 'Use this slot for rafting, zipline, boating, horse riding or bonfire video content.', 'sort_order' => 10],
    ];
}

function default_social_links(): array
{
    return [
        ['platform' => 'Facebook', 'url' => '#', 'icon_class' => 'fa-brands fa-facebook-f', 'sort_order' => 1],
        ['platform' => 'Instagram', 'url' => '#', 'icon_class' => 'fa-brands fa-instagram', 'sort_order' => 2],
        ['platform' => 'TikTok', 'url' => '#', 'icon_class' => 'fa-brands fa-tiktok', 'sort_order' => 3],
        ['platform' => 'Pinterest', 'url' => '#', 'icon_class' => 'fa-brands fa-pinterest-p', 'sort_order' => 4],
        ['platform' => 'YouTube', 'url' => '#', 'icon_class' => 'fa-brands fa-youtube', 'sort_order' => 5],
    ];
}

function fetch_public_rows(string $table, array $fallback): array
{
    try {
        $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET;
        $pdo = new PDO($dsn, DB_USER, DB_PASS, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ]);
        $stmt = $pdo->query("SELECT * FROM {$table} WHERE status = 'active' ORDER BY sort_order ASC, id DESC");
        $rows = $stmt->fetchAll();
        return $rows ?: $fallback;
    } catch (Throwable $e) {
        return $fallback;
    }
}

function public_packages(): array
{
    return fetch_public_rows('packages', default_packages());
}

function public_gallery_items(): array
{
    return fetch_public_rows('gallery_items', default_gallery_items());
}

function public_social_links(): array
{
    return fetch_public_rows('social_links', default_social_links());
}
