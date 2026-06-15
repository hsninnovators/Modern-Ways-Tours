<?php
require_once __DIR__ . '/includes/content.php';

$packages = public_packages();
$galleryItems = public_gallery_items();
$socialLinks = public_social_links();

$points = [
    'Shatay Village',
    'Kunhar View Point',
    'Balakot',
    'Jammu Da Nakka',
    'Kiwai Waterfalls',
    'Siri Lake & Paye Top',
    'Shogran',
    'Kaghan Bazaar & Suki Kinari Dam',
    'Naran Bazaar & Kunhar Rafting Point',
    'Lulusar Jheel',
    'Babusar Top & Giti Das',
    'Saif-ul-Malook Jheel & Saif-ul-Malook Caves',
    'Batakundi & Jhalkhad / Tiger Peak View',
];

$services = [
    'Premium AC + Heater Transport',
    'Fuel, Tolls & Road Taxes Included',
    'Premium Paid Motorway Toilet Facilities Both Ways',
    'All Required Jeep Rides Included',
    '4-Star Hotel Accommodation',
    'Private Room for Couples',
    'Group Rooms with Maximum 5–6 Persons',
    'Daily Breakfast & Dinner',
    'Horse Riding at Paye Top',
    'Photo Shoot Included',
    'Rafting / Zipline at Naran',
    'Boating at Saif-ul-Malook',
    'Mega Musical Bonfire at Shogran',
    'Dedicated Tour Guide / Tour Manager',
    'Hotel Check-in Support',
    'Activity & Jeep Coordination',
    'Basic First-Aid Support',
    'Customer Support During Tour',
    'Safety & Timing Management',
    'Backup Planning for Weather & Road Issues',
];

$features = [
    ['icon' => 'fa-solid fa-map-location-dot', 'title' => 'Curated Naran Route', 'text' => 'A scenic route plan covering waterfalls, viewpoints, bazaars, lakes, meadows and mountain passes without confusing self-planning.'],
    ['icon' => 'fa-solid fa-hotel', 'title' => 'Comfort Stay Planning', 'text' => '4-star accommodation support, couple room privacy and practical rooming for families or groups.'],
    ['icon' => 'fa-solid fa-person-hiking', 'title' => 'Activities Included', 'text' => 'Boating, rafting or zipline, horse riding, photo moments and musical bonfire experiences are part of the journey.'],
    ['icon' => 'fa-solid fa-headset', 'title' => 'Guided Support', 'text' => 'A dedicated tour manager coordinates timing, jeeps, hotel check-in, activities and customer support during the tour.'],
];

$itinerary = [
    ['day' => 'Day 01', 'title' => 'Departure, Kiwai Waterfalls & Shogran', 'text' => 'Begin with comfortable travel, scenic breaks, Kiwai Waterfalls, Shogran arrival, hotel support and an evening musical bonfire experience.'],
    ['day' => 'Day 02', 'title' => 'Siri Paye, Kaghan, Naran & Saif-ul-Malook', 'text' => 'Enjoy jeep coordination, Siri Lake, Paye Top, Kaghan Bazaar, Naran Bazaar, Kunhar experiences and Saif-ul-Malook lake activities.'],
    ['day' => 'Day 03', 'title' => 'Lulusar, Babusar Top & Return', 'text' => 'Capture Lulusar Jheel, Babusar Top, Giti Das and scenic valley views before the professionally managed return journey.'],
];

$faqs = [
    ['q' => 'Is PKR 26,000 the final discounted group price?', 'a' => 'Yes. PKR 26,000 per head only is already the final price after the 10% discount. It is not shown as an extra discount on top of another price.'],
    ['q' => 'What is not included?', 'a' => 'Personal shopping, extra personal food, room service and personal expenses are not included. The listed sightseeing, hotel, meals, jeeps and activities are included.'],
    ['q' => 'Can couples get a private room?', 'a' => 'Yes. The Couple Package includes a private couple room and premium travel coordination.'],
    ['q' => 'Can gallery, videos and social links be updated?', 'a' => 'Yes. Admin users can manage package cards, gallery images, video embeds and social media links from the admin dashboard.'],
];
?>
<!doctype html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Naran Tour Package 2026 | Premium Naran Kaghan Tour | Modern Ways Tours</title>
    <meta name="description" content="Book Modern Ways Tours premium Naran Tour Package: 3 days, 2 nights, 19 sightseeing points, 4-star hotel, meals, jeeps, rafting, boating, horse riding, bonfire and guided travel support.">
    <meta name="keywords" content="Naran tour package, Naran Kaghan tour package, Shogran tour, Saif ul Malook tour, Babusar Top tour, Pakistan northern areas tour, Modern Ways Tours">
    <meta property="og:title" content="Premium Naran Tour Package | Modern Ways Tours">
    <meta property="og:description" content="A 3 Days / 2 Nights all-inclusive Naran sightseeing experience with 19 points, hotel, meals, jeep rides and adventure activities.">
    <meta property="og:image" content="assets/images/hero-naran.jpg">
    <meta property="og:url" content="https://tours.logaixa.com/">
    <meta name="twitter:card" content="summary_large_image">
    <link rel="canonical" href="https://tours.logaixa.com/">
    <link rel="icon" href="assets/images/favicon.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: { navy: '#061733', gold: '#d9aa4f', cream: '#fff7e8', mist: '#eef6ff' }
                }
            }
        };
    </script>
    <script type="application/ld+json">
        {"@context":"https://schema.org","@type":"TravelAgency","name":"Modern Ways Tours","url":"https://tours.logaixa.com","telephone":"+923355623281","areaServed":"Pakistan","description":"Premium Naran Kaghan tour operator offering all-inclusive mountain sightseeing packages.","makesOffer":{"@type":"Offer","name":"Naran Tour Package","priceCurrency":"PKR","description":"3 Days / 2 Nights all-inclusive Naran sightseeing package with hotel, meals, jeeps and activities."}}
    </script>
</head>
<body class="bg-slate-50 text-slate-800">
<div class="scroll-progress" aria-hidden="true"></div>
<div class="cursor-glow" aria-hidden="true"></div>
<div class="cursor-dot" aria-hidden="true"></div>

<header class="site-header">
    <nav class="mx-auto flex max-w-7xl items-center justify-between px-4 py-3">
        <a href="#home" class="flex items-center gap-3">
            <img src="assets/images/header.png" onerror="this.src='assets/images/logo.png'" class="h-12 w-auto floating" alt="Modern Ways Tours logo">
            <span class="font-black tracking-wide text-white">Modern Ways Tours</span>
        </a>
        <button id="menuBtn" class="text-2xl text-white md:hidden" aria-label="Open menu"><i class="fa-solid fa-bars"></i></button>
        <div id="navMenu" class="nav-menu">
            <a href="#home">Home</a>
            <a href="#package">Packages</a>
            <a href="#points">Points</a>
            <a href="#services">Services</a>
            <a href="#itinerary">Itinerary</a>
            <a href="#gallery">Gallery & Videos</a>
            <a href="#contact">Contact</a>
            <button data-open="bookingModal" class="nav-cta">Book Now</button>
        </div>
    </nav>
</header>

<main id="home">
    <section class="hero-stage" style="background-image:linear-gradient(115deg,rgba(6,23,51,.96),rgba(6,23,51,.62),rgba(6,23,51,.28)),url('assets/images/hero-naran.jpg')">
        <canvas id="threeHero" class="three-hero" aria-hidden="true"></canvas>
        <div class="hero-layer layer-gold" data-parallax="0.08"></div>
        <div class="hero-layer layer-blue" data-parallax="0.04"></div>
        <div class="hero-layer layer-ring" data-parallax="0.02"></div>

        <div class="mx-auto grid min-h-screen max-w-7xl items-center gap-12 px-4 py-32 lg:grid-cols-[1.05fr_.95fr]">
            <div class="reveal-left z-10">
                <p class="eyebrow"><i class="fa-solid fa-crown"></i> Premium Pakistan Mountain Escape</p>
                <h1 class="hero-title">Naran Tour Package</h1>
                <p class="hero-subtitle">3 Days / 2 Nights Premium All-Inclusive Sightseeing Experience crafted for comfort, adventure, photography and stress-free mountain travel.</p>
                <div class="hero-badges">
                    <span>19 Sightseeing Points</span>
                    <span>4-Star Accommodation</span>
                    <span>Private Couple Room</span>
                    <span>All Required Jeeps Included</span>
                </div>
                <div class="mt-10 flex flex-wrap gap-4">
                    <button data-open="bookingModal" class="btn-gold"><i class="fa-solid fa-calendar-check"></i> Book Your Place</button>
                    <a class="btn-glass" href="https://wa.me/923355623281?text=I%20am%20interested%20in%20the%20Naran%20Tour%20Package" target="_blank"><i class="fa-brands fa-whatsapp"></i> Contact Us on WhatsApp</a>
                </div>
            </div>

            <div class="hero-visual reveal-right">
                <div class="tilt-card premium-card">
                    <img src="assets/images/logo.png" class="mx-auto h-24 floating" alt="Modern Ways Tours">
                    <h2>Luxury managed tour experience from departure to return.</h2>
                    <p>Hotel check-in, activities, jeeps, meals, guide support, backup planning and route timing are coordinated by our travel team.</p>
                    <div class="mini-gallery">
                        <img src="assets/images/kiwai.jpg" alt="Kiwai Waterfalls">
                        <img src="assets/images/saifulmalook.jpg" alt="Saif-ul-Malook Lake">
                        <img src="assets/images/babusar.jpg" alt="Babusar Top">
                    </div>
                    <div class="floating-panel">
                        <strong class="block text-gold">Limited Premium Seats</strong>
                        <span class="text-sm text-white/80">Reserve early for preferred travel dates.</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="stats-band px-4">
        <div class="stats-grid mx-auto max-w-7xl">
            <div class="stat-card"><strong data-count="19">0</strong><span>Sightseeing Points</span></div>
            <div class="stat-card"><strong data-count="3">0</strong><span>Days Managed Tour</span></div>
            <div class="stat-card"><strong data-count="2">0</strong><span>Nights Comfortable Stay</span></div>
            <div class="stat-card"><strong data-count="100">0</strong><span>% Guided Support</span></div>
        </div>
    </section>

    <section class="seo-strip">
        <div class="mx-auto max-w-7xl px-4">
            <h2>Luxury Naran Kaghan Tour by Modern Ways Tours</h2>
            <p>Explore Shogran, Siri Paye, Naran Bazaar, Saif-ul-Malook, Lulusar Lake, Babusar Top and other beautiful northern areas with a professionally managed package designed for families, couples, groups and corporate travelers.</p>
        </div>
    </section>

    <section class="section three-d-section">
        <div class="mx-auto max-w-7xl px-4">
            <p class="section-kicker">3D Journey Preview</p>
            <h2 class="section-title text-white">A Fully Animated Mountain Experience</h2>
            <p class="section-intro text-white/75">Scroll through a premium 3D-style route presentation with layered destination cards, depth movement, floating highlights and interactive perspective effects.</p>
            <div class="journey-3d-stage mt-12">
                <div class="route-line" aria-hidden="true"></div>
                <article class="destination-3d-card card-one tilt-card reveal-left">
                    <img src="assets/images/kiwai.jpg" alt="Kiwai Waterfalls">
                    <div><span>Stop 01</span><h3>Kiwai Waterfalls</h3><p>Fresh mountain air, waterfall views and the first premium photography stop.</p></div>
                </article>
                <article class="destination-3d-card card-two tilt-card reveal-up">
                    <img src="assets/images/shogran.jpg" alt="Shogran Meadows">
                    <div><span>Stop 02</span><h3>Shogran Meadows</h3><p>Hotel comfort, green landscapes and a musical bonfire night.</p></div>
                </article>
                <article class="destination-3d-card card-three tilt-card reveal-right">
                    <img src="assets/images/saifulmalook.jpg" alt="Saif-ul-Malook Lake">
                    <div><span>Stop 03</span><h3>Saif-ul-Malook</h3><p>Iconic lake boating, dramatic peaks and unforgettable couple moments.</p></div>
                </article>
                <article class="destination-3d-card card-four tilt-card reveal-up">
                    <img src="assets/images/babusar.jpg" alt="Babusar Top">
                    <div><span>Stop 04</span><h3>Babusar Top</h3><p>High-altitude panoramic views and cinematic mountain road memories.</p></div>
                </article>
            </div>
        </div>
    </section>

    <section class="section bg-white">
        <div class="mx-auto max-w-7xl px-4">
            <p class="section-kicker">Experience Highlights</p>
            <h2 class="section-title">A Beautiful, Managed and Memorable Naran Journey</h2>
            <p class="section-intro">Modern Ways Tours combines premium transport, scenic route planning, hotel coordination, activities and customer support into one smooth mountain experience.</p>
            <div class="feature-grid mt-10">
                <?php foreach ($features as $feature): ?>
                    <article class="feature-card tilt-card reveal-up">
                        <i class="<?= e($feature['icon']) ?>"></i>
                        <h3><?= e($feature['title']) ?></h3>
                        <p><?= e($feature['text']) ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="package" class="section package-section">
        <div class="mx-auto max-w-7xl px-4">
            <p class="section-kicker">Transparent Packages</p>
            <h2 class="section-title">Choose Your Premium Naran Travel Plan</h2>
            <p class="section-intro">No confusing discount wording. The group package price shown below is the final discounted price.</p>
            <div class="mt-10 grid gap-7 md:grid-cols-2">
                <?php foreach ($packages as $pkg): ?>
                    <article class="tilt-card price-card reveal-up">
                        <span class="package-badge"><?= e($pkg['badge'] ?? 'Featured') ?></span>
                        <h3><?= e($pkg['title']) ?></h3>
                        <p class="text-slate-500"><?= e($pkg['subtitle'] ?? '') ?></p>
                        <?php if (!empty($pkg['original_price'])): ?>
                            <p class="old-price">Original Price: <?= e($pkg['original_price']) ?></p>
                        <?php endif; ?>
                        <p class="new-price"><?= strpos($pkg['title'], 'Couple') !== false ? 'Couple Package: ' : 'After 10% Discount: ' ?><?= e($pkg['discounted_price']) ?></p>
                        <p class="mt-4 leading-relaxed text-slate-600"><?= e($pkg['details'] ?? '') ?></p>
                        <button data-open="bookingModal" class="mt-6 btn-gold">Reserve This Package</button>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="points" class="section points-section">
        <div class="mx-auto max-w-7xl px-4">
            <p class="section-kicker">Route Experience</p>
            <h2 class="section-title">Includes 19 Sightseeing Points</h2>
            <div class="timeline-grid mt-10">
                <?php foreach ($points as $index => $point): ?>
                    <div class="tour-card reveal-up"><span><?= $index + 1 ?></span><strong><?= e($point) ?></strong></div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="services" class="section">
        <div class="mx-auto max-w-7xl px-4">
            <p class="section-kicker">Everything Managed</p>
            <h2 class="section-title">Premium Services Included</h2>
            <div class="service-grid mt-10">
                <?php foreach ($services as $service): ?>
                    <div class="service-card reveal-up"><i class="fa-solid fa-circle-check"></i><span><?= e($service) ?></span></div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="immersive-note">
        <div class="mx-auto max-w-5xl px-4 text-center">
            <i class="fa-solid fa-route text-5xl text-gold"></i>
            <p>You just enjoy the journey — we handle the rest. All listed sightseeing points, required jeep rides, hotel stay, meals, premium paid motorway toilet facilities, boating, rafting/zipline, horse riding, bonfire, guide support, and tour management are included. Customers only pay for personal shopping, extra personal food, room service, and personal expenses.</p>
        </div>
    </section>

    <section id="itinerary" class="section itinerary-section">
        <div class="mx-auto max-w-7xl px-4">
            <p class="section-kicker">Tour Flow</p>
            <h2 class="section-title">Premium 3-Day Naran Itinerary</h2>
            <p class="section-intro">A clean day-by-day plan designed to balance sightseeing, travel comfort, activities, hotel time and photography opportunities.</p>
            <div class="itinerary-grid mt-10">
                <?php foreach ($itinerary as $item): ?>
                    <article class="itinerary-card tilt-card reveal-up">
                        <span class="itinerary-day"><?= e($item['day']) ?></span>
                        <h3><?= e($item['title']) ?></h3>
                        <p><?= e($item['text']) ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="gallery" class="section gallery-zone">
        <div class="mx-auto max-w-7xl px-4">
            <p class="section-kicker">Media Gallery</p>
            <h2 class="section-title">Photo Gallery & Video Stories</h2>
            <p class="section-intro">A dedicated media area for destination images, tour videos, captions and highlights. Admin users can add, update, reorder, hide or remove gallery and video items from the dashboard.</p>
            <div class="gallery-tabs">
                <span class="gallery-pill">Destination Photos</span>
                <span class="gallery-pill">Tour Videos</span>
                <span class="gallery-pill">Admin Managed</span>
                <span class="gallery-pill">SEO Captions</span>
            </div>
            <div class="gallery-masonry">
                <?php foreach ($galleryItems as $item): ?>
                    <article class="gallery-card tilt-card reveal-up <?= e($item['type']) === 'video' ? 'video-card' : '' ?>">
                        <?php if (($item['type'] ?? 'image') === 'video'): ?>
                            <iframe src="<?= e($item['file_path']) ?>" title="<?= e($item['title']) ?>" loading="lazy" allowfullscreen></iframe>
                        <?php else: ?>
                            <img src="<?= e($item['file_path']) ?>" alt="<?= e($item['title']) ?>" loading="lazy">
                        <?php endif; ?>
                        <div>
                            <span><?= e($item['type'] ?? 'image') ?></span>
                            <h3><?= e($item['title']) ?></h3>
                            <p><?= e($item['description'] ?? '') ?></p>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section why-section">
        <div class="mx-auto max-w-7xl px-4">
            <p class="section-kicker">Travel With Confidence</p>
            <h2 class="section-title">Why Choose Modern Ways Tours</h2>
            <div class="mt-10 grid gap-5 md:grid-cols-3">
                <?php foreach (['19 Scenic Points','All-Inclusive Package','Private Couple Room','Premium Travel Management','Adventure Activities Included','No Stress, Full Support'] as $reason): ?>
                    <div class="why-card tilt-card reveal-up">
                        <i class="fa-solid fa-mountain-sun"></i>
                        <h3><?= e($reason) ?></h3>
                        <p>Reliable planning, clear communication and a premium experience focused on comfort, safety and memorable mountain moments.</p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section bg-white">
        <div class="mx-auto max-w-7xl px-4">
            <p class="section-kicker">Helpful Details</p>
            <h2 class="section-title">Naran Package FAQs</h2>
            <div class="faq-grid mt-10">
                <?php foreach ($faqs as $faq): ?>
                    <article class="faq-card reveal-up">
                        <h3><?= e($faq['q']) ?></h3>
                        <p><?= e($faq['a']) ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="social-section">
        <div class="mx-auto max-w-6xl px-4 text-center">
            <p class="section-kicker">Follow Our Journeys</p>
            <h2>Connect With Modern Ways Tours</h2>
            <div class="social-links">
                <?php foreach ($socialLinks as $link): ?>
                    <a href="<?= e($link['url']) ?>" target="_blank" aria-label="<?= e($link['platform']) ?>">
                        <i class="<?= e($link['icon_class']) ?>"></i><span><?= e($link['platform']) ?></span>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="contact" class="section contact-panel">
        <div class="mx-auto max-w-4xl px-4 text-center">
            <img src="assets/images/footer.png" onerror="this.src='assets/images/logo.png'" class="mx-auto mb-6 h-20 floating" alt="Modern Ways Tours">
            <h2>Ready for Naran?</h2>
            <p>Phone/WhatsApp: +923355623281 • Website: tours.logaixa.com</p>
            <div class="mt-8 flex flex-wrap justify-center gap-4">
                <button data-open="contactModal" class="btn-glass">Contact Us</button>
                <button data-open="bookingModal" class="btn-gold">Book Your Place</button>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . '/modal-forms.php'; ?>

<a class="floating-whatsapp" href="https://wa.me/923355623281?text=I%20am%20interested%20in%20the%20Naran%20Tour%20Package" target="_blank" aria-label="Chat on WhatsApp">
    <i class="fa-brands fa-whatsapp"></i>
</a>

<footer class="bg-slate-950 py-6 text-center text-white">© <?= date('Y') ?> Modern Ways Tours. Premium Naran travel experiences.</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/three-scene.js"></script>
</body>
</html>
