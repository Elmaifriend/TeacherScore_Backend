CREATE TABLE `universidades` (
  `id` integer PRIMARY KEY,
  `nombre` varchar(255),
  `acronimo` varchar(255),
  `logo` varchar(255),
  `creado` timestamp,
  `ultima_actualizacion` timestamp
);

CREATE TABLE `planteles` (
  `id` integer PRIMARY KEY,
  `universidad_id` integer,
  `nombre` varchar(255),
  `estado` varchar(255),
  `ciudad` varchar(255),
  `direccion` varchar(255),
  `creado` timestamp,
  `ultima_actualizacion` timestamp
);

CREATE TABLE `carreras` (
  `id` integer PRIMARY KEY,
  `plantel_id` integer,
  `nombre` varchar(255)
);

CREATE TABLE `materias` (
  `id` integer PRIMARY KEY,
  `carrera_id` integer,
  `nombre` varchar(255)
);

CREATE TABLE `profesores` (
  `id` integer PRIMARY KEY,
  `plantel_id` integer,
  `materia_id` integer,
  `nombre` varchar(255),
  `apellido` varchar(255),
  `foto` varchar(255)
);

CREATE TABLE `evaluaciones` (
  `id` integer PRIMARY KEY,
  `profesor_id` integer,
  `fomenta_respeto` int,
  `resolver_dudas` int,
  `contenido_relevante` int,
  `sabe_enseniar` int,
  `retroalimentacion` int,
  `recomendar_profesor` int
);

CREATE TABLE `comentarios` (
  `id` integer PRIMARY KEY,
  `profesor_id` integer,
  `autor` varchar(255),
  `body` varchar(255)
);

ALTER TABLE `planteles` ADD FOREIGN KEY (`universidad_id`) REFERENCES `universidades` (`id`);

ALTER TABLE `carreras` ADD FOREIGN KEY (`plantel_id`) REFERENCES `planteles` (`id`);

ALTER TABLE `materias` ADD FOREIGN KEY (`carrera_id`) REFERENCES `carreras` (`id`);

ALTER TABLE `profesores` ADD FOREIGN KEY (`materia_id`) REFERENCES `materias` (`id`);

ALTER TABLE `profesores` ADD FOREIGN KEY (`plantel_id`) REFERENCES `planteles` (`id`);

ALTER TABLE `evaluaciones` ADD FOREIGN KEY (`profesor_id`) REFERENCES `profesores` (`id`);

ALTER TABLE `comentarios` ADD FOREIGN KEY (`profesor_id`) REFERENCES `profesores` (`id`);
