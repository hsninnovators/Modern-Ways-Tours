CREATE DATABASE IF NOT EXISTS `modern_ways_tours` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `modern_ways_tours`;

CREATE TABLE IF NOT EXISTS `admins` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(120) NOT NULL,
  `username` VARCHAR(60) NOT NULL UNIQUE,
  `email` VARCHAR(160) NOT NULL UNIQUE,
  `password_hash` VARCHAR(255) NOT NULL,
  `role` VARCHAR(40) NOT NULL DEFAULT 'admin',
  `status` ENUM('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `contact_queries` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `full_name` VARCHAR(140) NOT NULL,
  `phone` VARCHAR(40) NOT NULL,
  `city` VARCHAR(100) NOT NULL,
  `interested_package` VARCHAR(160) NOT NULL,
  `message` TEXT NOT NULL,
  `preferred_contact_time` VARCHAR(100) NOT NULL,
  `whatsapp_message` TEXT,
  `status` ENUM('New','Contacted','Confirmed','Cancelled','Completed') NOT NULL DEFAULT 'New',
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  INDEX (`status`),
  INDEX (`phone`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `bookings` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `full_name` VARCHAR(140) NOT NULL,
  `phone` VARCHAR(40) NOT NULL,
  `cnic` VARCHAR(40) DEFAULT NULL,
  `city` VARCHAR(100) NOT NULL,
  `package_type` VARCHAR(180) NOT NULL,
  `number_of_persons` INT UNSIGNED NOT NULL,
  `preferred_travel_date` DATE NOT NULL,
  `pickup_city` VARCHAR(100) NOT NULL,
  `room_preference` VARCHAR(120) NOT NULL,
  `special_request` TEXT,
  `emergency_contact` VARCHAR(40) DEFAULT NULL,
  `status` ENUM('New','Contacted','Confirmed','Cancelled','Completed') NOT NULL DEFAULT 'New',
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  INDEX (`status`),
  INDEX (`phone`),
  INDEX (`package_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `settings` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `setting_key` VARCHAR(100) NOT NULL UNIQUE,
  `setting_value` TEXT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `admins` (`name`, `username`, `email`, `password_hash`, `role`, `status`) VALUES
('Asif', 'asif', 'asif@tours.logaixa.com', '$2y$12$RpVotyWY9uPaMzWFKQX4BuFDu7DgmGXMMi4N.wsfOINR3dEGJIGEW', 'admin', 'active'),
('Usman', 'usman', 'usman@tours.logaixa.com', '$2y$12$RpVotyWY9uPaMzWFKQX4BuFDu7DgmGXMMi4N.wsfOINR3dEGJIGEW', 'admin', 'active')
ON DUPLICATE KEY UPDATE username = VALUES(username);

INSERT INTO `settings` (`setting_key`, `setting_value`) VALUES
('whatsapp_number', '923355623281'),
('site_url', 'https://tours.logaixa.com')
ON DUPLICATE KEY UPDATE setting_value = VALUES(setting_value);

CREATE TABLE IF NOT EXISTS `packages` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(160) NOT NULL,
  `subtitle` VARCHAR(255) DEFAULT NULL,
  `original_price` VARCHAR(80) DEFAULT NULL,
  `discounted_price` VARCHAR(80) NOT NULL,
  `details` TEXT,
  `badge` VARCHAR(80) DEFAULT NULL,
  `status` ENUM('active','inactive') NOT NULL DEFAULT 'active',
  `sort_order` INT NOT NULL DEFAULT 0,
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `gallery_items` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` ENUM('image','video') NOT NULL DEFAULT 'image',
  `title` VARCHAR(160) NOT NULL,
  `file_path` VARCHAR(255) NOT NULL,
  `description` TEXT,
  `status` ENUM('active','inactive') NOT NULL DEFAULT 'active',
  `sort_order` INT NOT NULL DEFAULT 0,
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  INDEX (`type`),
  INDEX (`status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `social_links` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `platform` VARCHAR(80) NOT NULL,
  `url` VARCHAR(255) NOT NULL,
  `icon_class` VARCHAR(120) NOT NULL,
  `status` ENUM('active','inactive') NOT NULL DEFAULT 'active',
  `sort_order` INT NOT NULL DEFAULT 0,
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `packages` (`title`, `subtitle`, `original_price`, `discounted_price`, `details`, `badge`, `sort_order`) VALUES
('Group / Normal Package', 'Social, comfortable and all-inclusive mountain escape', 'PKR 29,000 per head', 'PKR 26,000 per head only', 'Best for friends, families, colleagues and solo travelers who want premium transport, hotel stay, meals, jeep rides and guided sightseeing with no planning stress.', '10% Discount Applied', 1),
('Couple Package', 'Private couple room with premium travel support', '', 'PKR 38,000 per head', 'Designed for couples who want a private room, organized activities, romantic mountain views, comfortable travel and dedicated trip coordination.', 'Private Room Included', 2);

INSERT INTO `gallery_items` (`type`, `title`, `file_path`, `description`, `sort_order`) VALUES
('image', 'Kiwai Waterfalls', 'assets/images/kiwai.jpg', 'Refreshing waterfall stop surrounded by green mountain scenery.', 1),
('image', 'Saif-ul-Malook Lake', 'assets/images/saifulmalook.jpg', 'Iconic alpine lake experience with boating included in the package.', 2),
('image', 'Babusar Top', 'assets/images/babusar.jpg', 'High-altitude panoramic views and unforgettable photography moments.', 3),
('image', 'Shogran Meadows', 'assets/images/shogran.jpg', 'Peaceful hill station stay with bonfire and guided evening memories.', 4),
('video', 'Naran Tour Highlights', 'https://www.youtube.com/embed/dQw4w9WgXcQ', 'Replace this sample embed from admin with your official tour highlight video.', 5);

INSERT INTO `social_links` (`platform`, `url`, `icon_class`, `sort_order`) VALUES
('Facebook', '#', 'fa-brands fa-facebook-f', 1),
('Instagram', '#', 'fa-brands fa-instagram', 2),
('TikTok', '#', 'fa-brands fa-tiktok', 3),
('Pinterest', '#', 'fa-brands fa-pinterest-p', 4),
('YouTube', '#', 'fa-brands fa-youtube', 5);
