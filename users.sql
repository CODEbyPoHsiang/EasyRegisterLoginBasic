/*
 Navicat Premium Data Transfer

 Source Server         : 127.0.0.1
 Source Server Type    : MySQL
 Source Server Version : 100413
 Source Host           : localhost:3306
 Source Schema         : usertest

 Target Server Type    : MySQL
 Target Server Version : 100413
 File Encoding         : 65001

 Date: 15/01/2021 11:51:25
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `api_token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (8, 'admin', 'admin@gmail.com', NULL, '$2y$10$.pXm1z8CFmL.6zId.oU6n.gt9pM6uNJjti5VHi482PF527oQDM.9q', 'd6f9cfd72e9b48b831cd113974cb332ccb8aa8c9503e6b13ac608051f18aad1f', NULL, '2021-01-15 11:18:48', '2021-01-15 11:50:39');
INSERT INTO `users` VALUES (9, 'iphone666', 'iphone666@gmail.com', NULL, '$2y$10$lFNSUdlJ5D0mRKROQDUyU.kCzmA3w3FuD6xojZur9iGqs47OR8xiS', NULL, NULL, '2021-01-15 11:19:28', '2021-01-15 11:19:28');
INSERT INTO `users` VALUES (10, 'nokia3310', 'nokia3310@gmail.com', NULL, '$2y$10$NjL9gMxEatBN.GATg89KFuyhway5cg3.XTuckFvVt4vOwchluAMLm', NULL, NULL, '2021-01-15 11:19:51', '2021-01-15 11:19:51');
INSERT INTO `users` VALUES (11, 'googleyahoo888', 'googleyahoo888@gmail.com', NULL, '$2y$10$eZnxB44D8EgpcF148XdYwOPQXLPOarMTaqHp5gIV3L8WDdzq0QYZK', NULL, NULL, '2021-01-15 11:20:47', '2021-01-15 11:20:47');

SET FOREIGN_KEY_CHECKS = 1;
