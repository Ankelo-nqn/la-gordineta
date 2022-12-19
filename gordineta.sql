CREATE TABLE `gordineta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` datetime NOT NULL DEFAULT current_timestamp(),
  `concepto` varchar(255) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `importe` decimal(10,2) NOT NULL,
  `signo` enum('1','-1') COLLATE utf8mb4_spanish2_ci NOT NULL,
  `obs` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci