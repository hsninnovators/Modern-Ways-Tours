<?php
require_once __DIR__ . '/includes/content.php';
$token = csrf_token();
$packages = public_packages();
$galleryItems = public_gallery_items();
$socialLinks = public_social_links();
$points = ['Shatay Village','Kunhar View Point','Balakot','Jammu Da Nakka','Kiwai Waterfalls','Siri Lake & Paye Top','Shogran','Kaghan Bazaar & Suki Kinari Dam','Naran Bazaar & Kunhar Rafting Point','Lulusar Jheel','Babusar Top & Giti Das','Saif-ul-Malook Jheel & Saif-ul-Malook Caves','Batakundi & Jhalkhad / Tiger Peak View'];
$services = ['Premium AC + Heater Transport','Fuel, Tolls & Road Taxes Included','Premium Paid Motorway Toilet Facilities Both Ways','All Required Jeep Rides Included','4-Star Hotel Accommodation','Private Room for Couples','Group Rooms with Maximum 5–6 Persons','Daily Breakfast & Dinner','Horse Riding at Paye Top','Photo Shoot Included','Rafting / Zipline at Naran','Boating at Saif-ul-Malook','Mega Musical Bonfire at Shogran','Dedicated Tour Guide / Tour Manager','Hotel Check-in Support','Activity & Jeep Coordination','Basic First-Aid Support','Customer Support During Tour','Safety & Timing Management','Backup Planning for Weather & Road Issues'];
?>
<!doctype html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Naran Tour Package 2026 | Modern Ways Tours Pakistan</title>
  <meta name="description" content="Book the premium Naran Tour Package by Modern Ways Tours: 3 days, 2 nights, 19 sightseeing points, 4-star hotel, meals, jeeps, rafting, boating, horse riding, bonfire and expert tour management.">
  <meta name="keywords" content="Naran tour package, Naran Kaghan tour, Shogran tour, Saif ul Malook, Babusar Top, Pakistan travel agency, Modern Ways Tours">
  <meta property="og:title" content="Naran Tour Package | Modern Ways Tours">
  <meta property="og:description" content="Premium all-inclusive 3 days / 2 nights Naran sightseeing experience with hotel, meals, jeeps and activities.">
  <meta property="og:image" content="assets/images/hero-naran.jpg">
  <link rel="canonical" href="https://tours.logaixa.com/">
  <link rel="icon" href="assets/images/favicon.png">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <script>tailwind.config={theme:{extend:{colors:{navy:'#061733',gold:'#d9aa4f',cream:'#fff7e8',mist:'#eef6ff'}}}}</script>
  <script type="application/ld+json">{"@context":"https://schema.org","@type":"TravelAgency","name":"Modern Ways Tours","url":"https://tours.logaixa.com","telephone":"+923355623281","areaServed":"Pakistan","makesOffer":{"@type":"Offer","name":"Naran Tour Package","priceCurrency":"PKR","description":"3 Days / 2 Nights all-inclusive Naran sightseeing package"}}</script>
</head>
<body class="bg-slate-50 text-slate-800">
<div class="cursor-glow" aria-hidden="true"></div>
<header class="site-header">
  <nav class="mx-auto flex max-w-7xl items-center justify-between px-4 py-3">
    <a href="#home" class="flex items-center gap-3"><img src="assets/images/header.png" onerror="this.src='assets/images/logo.png'" class="h-12 w-auto floating" alt="Modern Ways Tours logo"><span class="font-black tracking-wide text-white">Modern Ways Tours</span></a>
    <button id="menuBtn" class="text-2xl text-white md:hidden" aria-label="Open menu"><i class="fa-solid fa-bars"></i></button>
    <div id="navMenu" class="nav-menu"><a href="#home">Home</a><a href="#package">Packages</a><a href="#points">Points</a><a href="#services">Services</a><a href="#gallery">Gallery & Videos</a><a href="#contact">Contact</a><button data-open="bookingModal" class="nav-cta">Book Now</button></div>
  </nav>
</header>
<main id="home">
<section class="hero-stage" style="background-image:linear-gradient(115deg,rgba(6,23,51,.96),rgba(6,23,51,.62),rgba(6,23,51,.28)),url('assets/images/hero-naran.jpg')">
  <div class="mountain-orb orb-one"></div><div class="mountain-orb orb-two"></div>
  <div class="mx-auto grid min-h-screen max-w-7xl items-center gap-10 px-4 py-32 lg:grid-cols-[1.05fr_.95fr]">
    <div class="reveal-up z-10"><p class="eyebrow"><i class="fa-solid fa-crown"></i> Premium Pakistan Mountain Escape</p><h1 class="hero-title">Naran Tour Package</h1><p class="hero-subtitle">3 Days / 2 Nights Premium All-Inclusive Sightseeing Experience crafted for comfort, adventure, photography and stress-free travel.</p><div class="hero-badges"><span>19 Sightseeing Points</span><span>4-Star Accommodation</span><span>Private Couple Room</span><span>All Required Jeeps Included</span></div><div class="mt-10 flex flex-wrap gap-4"><button data-open="bookingModal" class="btn-gold magnetic">Book Your Place</button><a class="btn-glass magnetic" href="https://wa.me/923355623281?text=I%20am%20interested%20in%20the%20Naran%20Tour%20Package" target="_blank">Contact Us on WhatsApp</a></div></div>
    <div class="hero-visual reveal-zoom"><div class="tilt-card premium-card"><img src="assets/images/logo.png" class="mx-auto h-24 floating" alt="Modern Ways Tours"><h2>Luxury managed tour experience from departure to return.</h2><p>Hotel check-in, activities, jeeps, meals, guide support, backup planning and route timing are coordinated by our travel team.</p><div class="mini-gallery"><img src="assets/images/kiwai.jpg" alt="Kiwai"><img src="assets/images/saifulmalook.jpg" alt="Saif-ul-Malook"><img src="assets/images/babusar.jpg" alt="Babusar"></div></div></div>
  </div>
</section>
<section class="seo-strip"><div class="mx-auto max-w-7xl px-4"><h2>Luxury Naran Kaghan Tour by Modern Ways Tours</h2><p>Explore Shogran, Siri Paye, Naran Bazaar, Saif-ul-Malook, Lulusar Lake, Babusar Top and other beautiful northern areas with a professionally managed package designed for families, couples, groups and corporate travelers.</p></div></section>
<section id="package" class="section package-section"><div class="mx-auto max-w-7xl px-4"><p class="section-kicker">Transparent Packages</p><h2 class="section-title">Choose Your Premium Naran Travel Plan</h2><div class="grid gap-7 md:grid-cols-2"><?php foreach ($packages as $pkg): ?><article class="tilt-card price-card reveal-up"><span class="package-badge"><?= e($pkg['badge'] ?? 'Featured') ?></span><h3><?= e($pkg['title']) ?></h3><p class="text-slate-500"><?= e($pkg['subtitle'] ?? '') ?></p><?php if (!empty($pkg['original_price'])): ?><p class="old-price">Original Price: <?= e($pkg['original_price']) ?></p><?php endif; ?><p class="new-price"><?= strpos($pkg['title'], 'Couple') !== false ? 'Couple Package: ' : 'After 10% Discount: ' ?><?= e($pkg['discounted_price']) ?></p><p class="mt-4 leading-relaxed text-slate-600"><?= e($pkg['details'] ?? '') ?></p><button data-open="bookingModal" class="mt-6 btn-gold">Reserve This Package</button></article><?php endforeach; ?></div></div></section>
<section id="points" class="section points-section"><div class="mx-auto max-w-7xl px-4"><p class="section-kicker">Route Experience</p><h2 class="section-title">Includes 19 Sightseeing Points</h2><div class="timeline-grid"><?php foreach($points as $i=>$p): ?><div class="tour-card reveal-up"><span><?= $i + 1 ?></span><strong><?= e($p) ?></strong></div><?php endforeach; ?></div></div></section>
<section id="services" class="section"><div class="mx-auto max-w-7xl px-4"><p class="section-kicker">Everything Managed</p><h2 class="section-title">Premium Services Included</h2><div class="service-grid"><?php foreach($services as $s): ?><div class="service-card reveal-up"><i class="fa-solid fa-circle-check"></i><span><?= e($s) ?></span></div><?php endforeach; ?></div></div></section>
<section class="immersive-note"><div class="mx-auto max-w-5xl px-4 text-center"><i class="fa-solid fa-route text-5xl text-gold"></i><p>You just enjoy the journey — we handle the rest. All listed sightseeing points, required jeep rides, hotel stay, meals, premium paid motorway toilet facilities, boating, rafting/zipline, horse riding, bonfire, guide support, and tour management are included. Customers only pay for personal shopping, extra personal food, room service, and personal expenses.</p></div></section>
<section id="gallery" class="section gallery-zone"><div class="mx-auto max-w-7xl px-4"><p class="section-kicker">Media Gallery</p><h2 class="section-title">Photo Gallery & Video Stories</h2><p class="section-intro">This dedicated media area can be managed from the admin dashboard. Add new destination photos, update captions, publish YouTube/embedded videos, reorder items, or hide older content.</p><div class="gallery-masonry"><?php foreach($galleryItems as $item): ?><article class="gallery-card tilt-card reveal-up <?= e($item['type']) === 'video' ? 'video-card' : '' ?>"><?php if (($item['type'] ?? 'image') === 'video'): ?><iframe src="<?= e($item['file_path']) ?>" title="<?= e($item['title']) ?>" loading="lazy" allowfullscreen></iframe><?php else: ?><img src="<?= e($item['file_path']) ?>" alt="<?= e($item['title']) ?>" loading="lazy"><?php endif; ?><div><span><?= e($item['type'] ?? 'image') ?></span><h3><?= e($item['title']) ?></h3><p><?= e($item['description'] ?? '') ?></p></div></article><?php endforeach; ?></div></div></section>
<section class="section why-section"><div class="mx-auto max-w-7xl px-4"><p class="section-kicker">Travel With Confidence</p><h2 class="section-title">Why Choose Modern Ways Tours</h2><div class="grid gap-5 md:grid-cols-3"><?php foreach(['19 Scenic Points','All-Inclusive Package','Private Couple Room','Premium Travel Management','Adventure Activities Included','No Stress, Full Support'] as $w): ?><div class="why-card tilt-card reveal-up"><i class="fa-solid fa-mountain-sun"></i><h3><?= e($w) ?></h3><p>Reliable planning, clear communication and a premium experience focused on your comfort and safety.</p></div><?php endforeach; ?></div></div></section>
<section class="social-section"><div class="mx-auto max-w-6xl px-4 text-center"><p class="section-kicker">Follow Our Journeys</p><h2>Connect With Modern Ways Tours</h2><div class="social-links"><?php foreach($socialLinks as $link): ?><a href="<?= e($link['url']) ?>" target="_blank" aria-label="<?= e($link['platform']) ?>"><i class="<?= e($link['icon_class']) ?>"></i><span><?= e($link['platform']) ?></span></a><?php endforeach; ?></div></div></section>
<section id="contact" class="section contact-panel"><div class="mx-auto max-w-4xl px-4 text-center"><img src="assets/images/footer.png" onerror="this.src='assets/images/logo.png'" class="mx-auto mb-6 h-20 floating" alt="Modern Ways Tours"><h2>Ready for Naran?</h2><p>Phone/WhatsApp: +923355623281 • Website: tours.logaixa.com</p><div class="mt-8 flex flex-wrap justify-center gap-4"><button data-open="contactModal" class="btn-glass">Contact Us</button><button data-open="bookingModal" class="btn-gold">Book Your Place</button></div></div></section>
</main>
<?php include __DIR__ . '/modal-forms.php'; ?>
<footer class="bg-slate-950 py-6 text-center text-white">© <?= date('Y') ?> Modern Ways Tours. Premium Naran travel experiences.</footer>
<script src="assets/js/main.js"></script>
</body>
</html>
