-- SariPOS database export for IT0049 TFA2
CREATE DATABASE IF NOT EXISTS `saripos`
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

USE `saripos`;

DROP TABLE IF EXISTS `customers`;
CREATE TABLE `customers` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `full_name` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `phone` VARCHAR(20),
  `created_at` DATETIME NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `customers` (`full_name`, `email`, `phone`, `created_at`) VALUES
  ('Andrea Santos', 'andrea.santos@example.com', '0917 234 8101', '2026-09-01 09:00:00'),
  ('Miguel Reyes', 'miguel.reyes@example.com', '0918 425 6720', '2026-09-02 10:15:00'),
  ('Camille Dela Cruz', 'camille.delacruz@example.com', '0920 316 4589', '2026-09-03 11:30:00'),
  ('Paolo Garcia', 'paolo.garcia@example.com', '0921 775 2046', '2026-09-04 13:45:00'),
  ('Sofia Mendoza', 'sofia.mendoza@example.com', '0995 638 1174', '2026-09-05 15:00:00'),
  ('Rafael Lim', 'rafael.lim@example.com', '0966 402 8395', '2026-09-06 16:15:00');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `username` VARCHAR(50) NOT NULL UNIQUE,
  `full_name` VARCHAR(100) NOT NULL,
  `created_at` DATETIME NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`username`, `full_name`, `created_at`) VALUES
  ('admin.mara', 'Mara Villanueva', '2026-09-01 08:00:00'),
  ('cashier.joel', 'Joel Navarro', '2026-09-02 08:30:00'),
  ('manager.ella', 'Ella Bautista', '2026-09-03 09:00:00'),
  ('cashier.nico', 'Nico Ramos', '2026-09-04 09:30:00'),
  ('stock.lia', 'Lia Castillo', '2026-09-05 10:00:00'),
  ('supervisor.sam', 'Samuel Aquino', '2026-09-06 10:30:00');
