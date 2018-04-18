CREATE TABLE `email_list` (
  `id` INT AUTO_INCREMENT,
  `first_name` VARCHAR(20),
  `last_name` VARCHAR(20),
  `email` VARCHAR(60),
  PRIMARY KEY (`id`)
);

CREATE TABLE `lista_emails` (
  `id` INT AUTO_INCREMENT,
  `nombre` VARCHAR(20),
  `apellido` VARCHAR(20),
  `email` VARCHAR(60),
  PRIMARY KEY (`id`)
);
