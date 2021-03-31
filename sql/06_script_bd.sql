SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+03:00";

CREATE DATABASE `pi202102`
  CHARACTER SET utf8
  COLLATE utf8_general_ci;
 
USE `pi202102`;
 
CREATE TABLE `usuarios` (
    `id` int(11) NOT NULL,
    `login` VARCHAR(50) NOT NULL UNIQUE,
    `name` VARCHAR(50),
    `cell` VARCHAR(20),
    `email` VARCHAR(50),
    `password` VARCHAR(255) NOT NULL,
    `dtRegistro` DATETIME DEFAULT CURRENT_TIMESTAMP
  
)
ENGINE=InnoDB;

ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);
 
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

CREATE TABLE `post` (
  `id_P` int(6) UNSIGNED NOT NULL,
  `id_U` int(6) NOT NULL,
  `publicacao` varchar(255) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `post`
  ADD PRIMARY KEY (`id_P`);

ALTER TABLE `post`
  MODIFY `id_P` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

