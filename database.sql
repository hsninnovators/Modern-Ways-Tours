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
