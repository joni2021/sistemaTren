/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50624
Source Host           : localhost:3306
Source Database       : sistema_tren

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2016-06-28 11:41:22
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `agendas`
-- ----------------------------
DROP TABLE IF EXISTS `agendas`;
CREATE TABLE `agendas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `evento` varchar(255) NOT NULL,
  `comision_id` int(10) unsigned NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`) USING BTREE,
  KEY `comision_id` (`comision_id`) USING BTREE,
  CONSTRAINT `fk_comision_agenda` FOREIGN KEY (`comision_id`) REFERENCES `comisiones` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of agendas
-- ----------------------------
INSERT INTO `agendas` VALUES ('1', '2016-06-13', '2016-06-16', null, 'Ir a buscar famacos', '12', null, null, null);
INSERT INTO `agendas` VALUES ('2', '2016-06-15', null, '12:35:33', 'Subir al sistema las ultimas planillas', '12', null, null, null);
INSERT INTO `agendas` VALUES ('4', '2016-06-21', null, null, 'Salir corriendo de los rochos', '13', null, null, null);
INSERT INTO `agendas` VALUES ('7', '2016-06-23', null, null, 'kmsldkmas lmkdlasmdlaksmd', '12', '2016-06-23 12:10:06', '2016-06-23 12:10:06', null);
INSERT INTO `agendas` VALUES ('8', '2016-06-08', '2016-06-10', null, 'kaiasdh ausaua', '13', '2016-06-23 12:13:48', '2016-06-23 12:13:48', null);
INSERT INTO `agendas` VALUES ('9', '2016-06-23', null, null, 'asdasdasdasda dasd', '13', '2016-06-23 12:40:37', '2016-06-23 12:40:37', null);

-- ----------------------------
-- Table structure for `comisiones`
-- ----------------------------
DROP TABLE IF EXISTS `comisiones`;
CREATE TABLE `comisiones` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `localidad` varchar(255) DEFAULT NULL,
  `provincia` varchar(255) DEFAULT NULL,
  `fecha_llegada` date DEFAULT NULL,
  `fecha_partida` date DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of comisiones
-- ----------------------------
INSERT INTO `comisiones` VALUES ('12', 'Salta', 'Salta', '2016-05-20', '2016-05-27', '2016-05-27 12:05:20', '2016-06-08 15:19:38', null);
INSERT INTO `comisiones` VALUES ('13', 'Wilde', 'Buenos Aires', '2016-05-02', '2016-05-16', '2016-05-27 12:20:27', '2016-06-06 16:09:36', null);
INSERT INTO `comisiones` VALUES ('14', 'San Salvador de Jujuy', 'Jujuy', '2016-05-02', '2016-05-09', '2016-05-27 12:54:41', '2016-05-27 12:54:41', null);

-- ----------------------------
-- Table structure for `comision_user`
-- ----------------------------
DROP TABLE IF EXISTS `comision_user`;
CREATE TABLE `comision_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `comision_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`) USING BTREE,
  KEY `comision_id` (`comision_id`) USING BTREE,
  KEY `user_id` (`user_id`) USING BTREE,
  CONSTRAINT `fk_comision_id_comision_user_id` FOREIGN KEY (`comision_id`) REFERENCES `comisiones` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_user_id_comision_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of comision_user
-- ----------------------------
INSERT INTO `comision_user` VALUES ('13', '12', '1', null, null, null);
INSERT INTO `comision_user` VALUES ('14', '12', '2', null, null, null);
INSERT INTO `comision_user` VALUES ('15', '12', '5', null, null, null);
INSERT INTO `comision_user` VALUES ('17', '13', '1', null, null, null);
INSERT INTO `comision_user` VALUES ('18', '13', '5', null, null, null);

-- ----------------------------
-- Table structure for `especialidades`
-- ----------------------------
DROP TABLE IF EXISTS `especialidades`;
CREATE TABLE `especialidades` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `especialidad` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `prefijo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of especialidades
-- ----------------------------
INSERT INTO `especialidades` VALUES ('1', 'clinica medica', '2016-06-23 09:53:11', '2016-06-23 09:53:11', null, 'clm');
INSERT INTO `especialidades` VALUES ('2', 'cardiología', '2016-06-23 09:53:11', '2016-06-23 09:53:11', null, 'car');
INSERT INTO `especialidades` VALUES ('3', 'ginecología', '2016-06-23 09:53:11', '2016-06-23 09:53:11', null, 'gin');
INSERT INTO `especialidades` VALUES ('4', 'neurología', '2016-06-23 09:53:11', '2016-06-23 09:53:11', null, 'neu');
INSERT INTO `especialidades` VALUES ('5', 'odontología', '2016-06-23 09:53:11', '2016-06-23 09:53:11', null, 'odo');
INSERT INTO `especialidades` VALUES ('6', 'oftalmología', '2016-06-23 09:53:11', '2016-06-23 09:53:11', null, 'oft');
INSERT INTO `especialidades` VALUES ('7', 'otorrinolaringologia', '2016-06-23 09:53:11', '2016-06-23 09:53:11', null, 'oto');
INSERT INTO `especialidades` VALUES ('8', 'psicología', '2016-06-23 09:53:11', '2016-06-23 09:53:11', null, 'psi');
INSERT INTO `especialidades` VALUES ('9', 'traumatología', '2016-06-23 09:53:11', '2016-06-23 09:53:11', null, 'tra');

-- ----------------------------
-- Table structure for `migrations`
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('2015_01_15_105324_create_roles_table', '1');
INSERT INTO `migrations` VALUES ('2015_01_15_114412_create_role_user_table', '1');
INSERT INTO `migrations` VALUES ('2015_01_26_115212_create_permissions_table', '1');
INSERT INTO `migrations` VALUES ('2015_01_26_115523_create_permission_role_table', '1');
INSERT INTO `migrations` VALUES ('2015_02_09_132439_create_permission_user_table', '1');

-- ----------------------------
-- Table structure for `pacientes`
-- ----------------------------
DROP TABLE IF EXISTS `pacientes`;
CREATE TABLE `pacientes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dni` int(10) unsigned DEFAULT NULL,
  `tipo_dni` enum('DNI','LC','LE','Cédula','Pasaporte') DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `apellido` varchar(255) DEFAULT NULL,
  `sexo` enum('Masculino','Femenino') DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  `nacionalidad` int(10) unsigned DEFAULT NULL,
  `lugar_nacimiento` int(10) unsigned DEFAULT NULL,
  `lectura` tinyint(3) unsigned DEFAULT NULL,
  `escritura` tinyint(3) unsigned DEFAULT NULL,
  `hijos_mayores` tinyint(3) unsigned DEFAULT NULL,
  `hijos_menores` tinyint(3) unsigned DEFAULT NULL,
  `enfermedad_cronica` tinyint(3) unsigned DEFAULT NULL,
  `enfermedad_rs` tinyint(3) unsigned DEFAULT NULL,
  `discapacidad` tinyint(3) unsigned DEFAULT NULL,
  `tipo_discapacidad` tinyint(3) unsigned DEFAULT NULL,
  `presion_arterial_max` smallint(6) DEFAULT NULL,
  `presion_arterial_min` smallint(6) unsigned DEFAULT NULL,
  `glusemia` smallint(6) unsigned DEFAULT NULL,
  `colesterol` smallint(6) DEFAULT NULL,
  `perimetro_abdominal` smallint(6) unsigned DEFAULT NULL,
  `perimetro_craneal` smallint(6) unsigned DEFAULT NULL,
  `percentilo` smallint(6) DEFAULT NULL,
  `imc` smallint(6) DEFAULT NULL,
  `pco` varchar(255) DEFAULT NULL,
  `altura` tinyint(4) DEFAULT NULL,
  `peso` tinyint(4) DEFAULT NULL,
  `talla` tinyint(4) DEFAULT NULL,
  `observaciones` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `comision_id` int(10) unsigned DEFAULT NULL,
  `calle` varchar(255) DEFAULT NULL,
  `numero` int(10) DEFAULT NULL,
  `manzana` varchar(255) DEFAULT NULL,
  `barrio` varchar(255) DEFAULT NULL,
  `partido` varchar(255) DEFAULT NULL,
  `localidad` varchar(255) DEFAULT NULL,
  `plan_social` tinyint(1) DEFAULT NULL,
  `ocupacion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_comision_id` (`comision_id`),
  CONSTRAINT `fk_comision_id` FOREIGN KEY (`comision_id`) REFERENCES `comisiones` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pacientes
-- ----------------------------
INSERT INTO `pacientes` VALUES ('3', '4320648', 'DNI', 'manuel', 'barrios', 'Masculino', '1989-07-14', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '0', '0', '0', '', '2016-06-23 15:22:41', '2016-06-23 15:22:41', null, null, 'Av. de los Incas', '2728', '', 'Los alpes', 'Hurlingham', 'Hurlingham', '0', 'programador');
INSERT INTO `pacientes` VALUES ('4', '34673038', 'DNI', 'Juan', 'Perez', 'Masculino', '1989-07-14', '1156105852', '0', '0', '0', '0', '0', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '127', '87', '0', '', '2016-06-24 12:57:40', '2016-06-24 12:57:40', null, null, 'alta gracia ', '218', '', 'Villa herrero', 'moreno', 'moreno', '0', '');
INSERT INTO `pacientes` VALUES ('5', '34673038', 'DNI', 'Jose', 'Pulgar', 'Masculino', '1989-07-14', '1156105852', '0', '0', '0', '0', '0', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '127', '87', '0', '', '2016-06-24 13:35:59', '2016-06-24 13:35:59', null, null, 'alta gracia ', '218', '', 'Villa herrero', 'moreno', 'moreno', '0', '');

-- ----------------------------
-- Table structure for `password_resets`
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for `permissions`
-- ----------------------------
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `model` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of permissions
-- ----------------------------
INSERT INTO `permissions` VALUES ('1', 'create Usuarios medicos', 'createusuariosmedicos', 'Permite editar a un usuario creado', null, '2016-05-16 16:02:02', '2016-05-16 17:47:16');

-- ----------------------------
-- Table structure for `permission_role`
-- ----------------------------
DROP TABLE IF EXISTS `permission_role`;
CREATE TABLE `permission_role` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permission_role_permission_id_index` (`permission_id`),
  KEY `permission_role_role_id_index` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of permission_role
-- ----------------------------

-- ----------------------------
-- Table structure for `permission_user`
-- ----------------------------
DROP TABLE IF EXISTS `permission_user`;
CREATE TABLE `permission_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `permission_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permission_user_permission_id_index` (`permission_id`),
  KEY `permission_user_user_id_index` (`user_id`),
  CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of permission_user
-- ----------------------------

-- ----------------------------
-- Table structure for `roles`
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `level` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES ('3', 'admin', 'admin', 'administradores', '3', '2016-05-11 16:03:06', '2016-05-11 16:20:44');
INSERT INTO `roles` VALUES ('4', 'Logística', 'logistica', 'Personal de logística', '1', '2016-05-11 16:22:36', '2016-05-12 14:34:59');
INSERT INTO `roles` VALUES ('5', 'Social', 'social', 'Personal encargada del área social', '1', '2016-05-11 16:24:01', '2016-05-11 16:24:01');
INSERT INTO `roles` VALUES ('8', 'Odontología', 'odontologia', 'Personal de odontología', '1', '2016-05-12 15:34:17', '2016-05-13 13:39:54');
INSERT INTO `roles` VALUES ('16', 'Oftalmología', 'oftalmologia', '', '1', '2016-05-13 13:33:59', '2016-05-13 13:40:05');
INSERT INTO `roles` VALUES ('17', 'Ginecología', 'ginecologia', '', '1', '2016-05-13 13:40:19', '2016-05-13 13:40:19');
INSERT INTO `roles` VALUES ('18', 'Obstetricia', 'obstetricia', '', '1', '2016-05-13 13:41:27', '2016-05-13 13:41:27');
INSERT INTO `roles` VALUES ('19', 'Psicología', 'psicologia', '', '1', '2016-05-13 13:42:27', '2016-05-13 13:42:27');
INSERT INTO `roles` VALUES ('20', 'Nutricionista', 'nutricionista', '', '1', '2016-05-13 13:42:41', '2016-05-13 13:42:41');
INSERT INTO `roles` VALUES ('21', 'Radiología', 'radiologia', '', '1', '2016-05-13 13:43:03', '2016-05-13 13:43:03');
INSERT INTO `roles` VALUES ('22', 'admisión', 'admision', 'Personal de admisión', '1', '2016-06-24 16:27:13', '2016-06-24 16:27:13');

-- ----------------------------
-- Table structure for `role_user`
-- ----------------------------
DROP TABLE IF EXISTS `role_user`;
CREATE TABLE `role_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `role_user_role_id_index` (`role_id`),
  KEY `role_user_user_id_index` (`user_id`),
  CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of role_user
-- ----------------------------
INSERT INTO `role_user` VALUES ('3', '3', '1', '2016-06-07 14:41:27', '2016-06-07 14:41:27');

-- ----------------------------
-- Table structure for `turnos`
-- ----------------------------
DROP TABLE IF EXISTS `turnos`;
CREATE TABLE `turnos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `turno` varchar(255) DEFAULT NULL,
  `especialidades_id` int(10) unsigned DEFAULT NULL,
  `pacientes_id` int(10) unsigned DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `prioridad` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`) USING BTREE,
  KEY `especialidades_id` (`especialidades_id`) USING BTREE,
  KEY `pacientes_id` (`pacientes_id`) USING BTREE,
  CONSTRAINT `fk_especialidades_id_turno` FOREIGN KEY (`especialidades_id`) REFERENCES `especialidades` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_especialidades_pacientes` FOREIGN KEY (`pacientes_id`) REFERENCES `pacientes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of turnos
-- ----------------------------
INSERT INTO `turnos` VALUES ('1', 'psi-1', '8', '3', '2016-06-23 15:24:03', '2016-06-23 15:24:03', null, '0');
INSERT INTO `turnos` VALUES ('3', 'clm-2', '1', '5', '2016-06-24 13:36:07', '2016-06-24 13:36:07', null, '0');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'jonatan', 'jjonatan@desarrollosocial.gob.ar', '$2y$10$tT9hkF3i69YkTnz8PQ6.m.5cw.WeHSn4W.EQ8V4mRW/rMJ8.eEq.i', 'L5X4fYpF7NdkUNhxWyTIO8HLwnDmu2IaIj0CRvewf3Deu64vUfVTNKWBbEKp', '2016-04-12 12:17:21', '2016-06-09 12:32:20', 'jorge', 'jjonatan', null);
INSERT INTO `users` VALUES ('2', 'leandro', 'lrocha@desarrollosocial.gob.ar', '$2y$10$tT9hkF3i69YkTnz8PQ6.m.5cw.WeHSn4W.EQ8V4mRW/rMJ8.eEq.i', 'p6KpnRxP4hSevy3zg0USrwDj3hz44tOv1N0bHydIq6oB42RFQhUyUMNCHp35', '2016-05-10 13:39:08', '2016-06-08 12:52:12', 'rocha', 'lrocha', null);
INSERT INTO `users` VALUES ('5', 'Rocho', 'das@das.com', '$2y$10$fv1M.vTagIlVofcNJeXaVe69olnY1b4j8Wu4wEr84BmNdyGb8SxFy', null, '2016-05-30 15:49:16', '2016-06-28 12:17:11', 'Gimenez', 'lr', '2016-06-28 12:17:11');
