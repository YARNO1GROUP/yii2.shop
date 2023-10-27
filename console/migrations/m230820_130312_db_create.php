<?php

use yii\db\Migration;

/**
 * Class m230820_130312_db_create
 */
class m230820_130312_db_create extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $sql = "CREATE TABLE `user`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `usetrname` VARCHAR(255) NOT NULL,
    `auth_key` VARCHAR(255) NOT NULL,
    `password_hash` VARCHAR(255) NOT NULL,
    `password_reset_token` VARCHAR(255) NULL,
    `email` VARCHAR(255) NOT NULL,
    `status` SMALLINT NOT NULL,
    `created_at` INT NOT NULL,
    `updated_at` INT NOT NULL,
    `verification_token` VARCHAR(255) NULL
);
ALTER TABLE
    `user` ADD INDEX `user_usetrname_index`(`usetrname`);
ALTER TABLE
    `user` ADD INDEX `user_password_reset_token_index`(`password_reset_token`);
ALTER TABLE
    `user` ADD INDEX `user_email_index`(`email`);
CREATE TABLE `news-category`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL
);
CREATE TABLE `category`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `image` VARCHAR(255) NOT NULL 
);
CREATE TABLE `order_detail`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `product_id` BIGINT NOT NULL,
    `order_id` BIGINT NOT NULL,
    `count` BIGINT NOT NULL
);
CREATE TABLE `news`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `category_id` BIGINT NOT NULL,
    `user_id` BIGINT NOT NULL,
    `image` VARCHAR(255) NOT NULL, 
    `title` VARCHAR(255) NOT NULL,
    `body` TEXT NOT NULL
);
CREATE TABLE `product`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `category_id` BIGINT NOT NULL,
    `name` VARCHAR(255) NOT NULL,
    `prise` BIGINT NOT NULL,
    `description` TEXT NOT NULL
);
CREATE TABLE `order`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `user_id` BIGINT NOT NULL
);
CREATE TABLE `product_image`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `product_id` BIGINT NOT NULL,
    `link` VARCHAR(255) NOT NULL
);
CREATE TABLE `cart`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `user_id` BIGINT NOT NULL,
    `product_id` BIGINT NOT NULL
);
ALTER TABLE
    `news` ADD CONSTRAINT `news_category_id_foreign` FOREIGN KEY(`category_id`) REFERENCES `news-category`(`id`);
ALTER TABLE
    `order_detail` ADD CONSTRAINT `order_detail_order_id_foreign` FOREIGN KEY(`order_id`) REFERENCES `order`(`id`);
ALTER TABLE
    `news` ADD CONSTRAINT `news_user_id_foreign` FOREIGN KEY(`user_id`) REFERENCES `user`(`id`);
ALTER TABLE
    `cart` ADD CONSTRAINT `cart_product_id_foreign` FOREIGN KEY(`product_id`) REFERENCES `product`(`id`);
ALTER TABLE
    `cart` ADD CONSTRAINT `cart_user_id_foreign` FOREIGN KEY(`user_id`) REFERENCES `user`(`id`);
ALTER TABLE
    `product_image` ADD CONSTRAINT `product_image_product_id_foreign` FOREIGN KEY(`product_id`) REFERENCES `product`(`id`);
ALTER TABLE
    `product` ADD CONSTRAINT `product_category_id_foreign` FOREIGN KEY(`category_id`) REFERENCES `category`(`id`);
ALTER TABLE
    `order_detail` ADD CONSTRAINT `order_detail_product_id_foreign` FOREIGN KEY(`product_id`) REFERENCES `product`(`id`);
ALTER TABLE
    `order` ADD CONSTRAINT `order_user_id_foreign` FOREIGN KEY(`user_id`) REFERENCES `user`(`id`);";

        $this->execute($sql);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230820_130312_db_create cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230820_130312_db_create cannot be reverted.\n";

        return false;
    }
    */
}
