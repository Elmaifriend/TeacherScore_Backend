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

CREATE TABLE `planteles_carreras` (
  `id` integer PRIMARY KEY,
  `id_plantel` integer,
  `id_carrera` integer
);

CREATE TABLE `carreras` (
  `id` integer PRIMARY KEY,
  `nombre` varchar(255)
);

CREATE TABLE `carreras_materias` (
  `id` integer PRIMARY KEY,
  `carrera_id` integer,
  `materia_id` integer
);

CREATE TABLE `materias` (
  `id` integer PRIMARY KEY,
  `nombre` varchar(255)
);

CREATE TABLE `materias_profesores` (
  `id` integer PRIMARY KEY,
  `id_materia` integer,
  `id_profesor` integer
);

CREATE TABLE `planteles_profesores` (
  `id` integer PRIMARY KEY,
  `id_plantel` integer,
  `id_profesor` integer
);

CREATE TABLE `profesores` (
  `id` integer PRIMARY KEY,
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

CREATE TABLE `emoji_reaction` (
  `id` integer PRIMARY KEY,
  `profesor_id` integer,
  `emoji_id` integer
);

CREATE TABLE `emojis` (
  `id` integer PRIMARY KEY,
  `nombre` varchar(255)
);

ALTER TABLE `planteles` ADD FOREIGN KEY (`universidad_id`) REFERENCES `universidades` (`id`);

ALTER TABLE `planteles_carreras` ADD FOREIGN KEY (`id_plantel`) REFERENCES `planteles` (`id`);

ALTER TABLE `carreras` ADD FOREIGN KEY (`id`) REFERENCES `planteles_carreras` (`id_carrera`);

ALTER TABLE `carreras_materias` ADD FOREIGN KEY (`carrera_id`) REFERENCES `carreras` (`id`);

ALTER TABLE `carreras_materias` ADD FOREIGN KEY (`materia_id`) REFERENCES `materias` (`id`);

ALTER TABLE `materias_profesores` ADD FOREIGN KEY (`id_materia`) REFERENCES `materias` (`id`);

ALTER TABLE `planteles_profesores` ADD FOREIGN KEY (`id_plantel`) REFERENCES `planteles` (`id`);

ALTER TABLE `planteles_profesores` ADD FOREIGN KEY (`id_profesor`) REFERENCES `profesores` (`id`);

ALTER TABLE `materias_profesores` ADD FOREIGN KEY (`id_profesor`) REFERENCES `profesores` (`id`);

ALTER TABLE `evaluaciones` ADD FOREIGN KEY (`profesor_id`) REFERENCES `profesores` (`id`);

ALTER TABLE `comentarios` ADD FOREIGN KEY (`profesor_id`) REFERENCES `profesores` (`id`);

ALTER TABLE `emoji_reaction` ADD FOREIGN KEY (`profesor_id`) REFERENCES `profesores` (`id`);

ALTER TABLE `emoji_reaction` ADD FOREIGN KEY (`emoji_id`) REFERENCES `emojis` (`id`);
