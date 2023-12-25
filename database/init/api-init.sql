CREATE TABLE `Carts`(
    `cartId` CHAR(36) NOT NULL,
    `products` CHAR(36) NOT NULL,
    `totalPrice` INT NOT NULL,
    `userId` CHAR(36) NOT NULL
);
ALTER TABLE
    `Carts` ADD PRIMARY KEY(`cartId`);
CREATE TABLE `Orders`(
    `orderId` CHAR(36) NOT NULL,
    `products` CHAR(36) NOT NULL,
    `totalPrice` INT NOT NULL,
    `userId` CHAR(36) NOT NULL
);
ALTER TABLE
    `Orders` ADD PRIMARY KEY(`orderId`);
CREATE TABLE `Users`(
    `userId` CHAR(36) NOT NULL,
    `name` TEXT NOT NULL,
    `login` TEXT NOT NULL,
    `email` TEXT NOT NULL,
    `password` TEXT NOT NULL
);
ALTER TABLE
    `Users` ADD PRIMARY KEY(`userId`);
CREATE TABLE `Products`(
    `productId` CHAR(36) NOT NULL,
    `image` TEXT NOT NULL,
    `description` TEXT NOT NULL,
    `price` INT NOT NULL,
    `category` TEXT NOT NULL
);
ALTER TABLE
    `Products` ADD PRIMARY KEY(`productId`);
ALTER TABLE
    `Orders` ADD CONSTRAINT `orders_userid_foreign` FOREIGN KEY(`userId`) REFERENCES `Users`(`userId`);
ALTER TABLE
    `Orders` ADD CONSTRAINT `orders_products_foreign` FOREIGN KEY(`products`) REFERENCES `Products`(`productId`);
ALTER TABLE
    `Carts` ADD CONSTRAINT `carts_products_foreign` FOREIGN KEY(`products`) REFERENCES `Products`(`productId`);
ALTER TABLE
    `Carts` ADD CONSTRAINT `carts_userid_foreign` FOREIGN KEY(`userId`) REFERENCES `Users`(`userId`);