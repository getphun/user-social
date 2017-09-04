CREATE TABLE IF NOT EXISTS `user_social` (
    `id` INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `user` INTEGER NOT NULL,
    `vendor` VARCHAR(50) NOT NULL,
    `vuid` VARCHAR(100),
    `page` VARCHAR(150),
    `created` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
CREATE INDEX `by_user` ON `user_social` ( `user` );
