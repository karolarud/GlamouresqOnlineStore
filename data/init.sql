CREATE DATABASE gamouresq;
 use glamouresq_users;
CREATE TABLE users (
                       id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                       firstname VARCHAR(30),
                       surname VARCHAR(30),
                       email VARCHAR(50) NOT NULL ,
                       username VARCHAR(50) NOT NULL ,
                       password VARCHAR(50) NOT NULL ,
                       address1 VARCHAR(50),
                       address2 VARCHAR(50),
                       city VARCHAR(50),
                       postcode VARCHAR(50) NOT NULL ,
                       date TIMESTAMP
);
CREATE TABLE products (

 itemCode varchar(10),
 itemName varchar(25) NOT NULL ,
  description varchar(255) ,
  category enum('RINGS','BRACELETS','NECKLACES','EARRINGS') NOT NULL,
  qtyOnHand int(11) NOT NULL DEFAULT '0',
  price decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  photo varchar(50) NOT NULL

);
INSERT INTO products (itemCode, itemName, description, category, qtyOnHand, price, photo) VALUES ('A001', 'Diamond Ring', 'Oval Diamond 2 Carat White Gold Ring with Side Stones', 'RINGS', 3, '3000,00', 'ring_diamond.jfif' ),
                                                                                                 ('A002', 'Emerald Ring', 'Square Emerald White Gold Ring With Side Stones', 'RINGS', 2, '2000,00', 'ring_emerald.jfif'),
                                                                                                 ('A003', 'Pearl Ring', 'Asymmetrical Yellow Gold Pearl Ring', 'RINGS', 4, '1000,00', 'ring_pearl.jfif'),
                                                                                                 ('A004', 'Ruby Ring', 'Square Ruby Yellow Gold Ring With Side Stones', 'RINGS', 2, '2500,00', 'ring_ruby.jfif' ),
                                                                                                 ('A005', 'Sapphire Ring', 'Oval Sapphire White Gold Ring with 2 Side Diamonds', 'RINGS', 3, '2700,00', 'ring_sapphire.jfif'),
                                                                                                 ('A006', 'Diamond Bracelet', 'White Gold Diamond Tennis Bracelet', 'BRACELETS', 2, '5000,00', 'bracelet_diamond.jfif'),
                                                                                                 ('A007', 'Emerald Bracelet', 'White Gold Oval Stone Emerald Bracelet', 'BRACELETS', 3, '3900,00', 'bracelet_emerald.jfif'),
                                                                                                 ('A008', 'Pearl Bracelet', 'Yellow Gold Pearl Bracelet With Side Crystals', 'BRACELETS', 5, '1600,00', 'bracelet_pearl.jfif'),
                                                                                                 ('A009', 'Ruby Bracelet', 'White Gold Round Stone Ruby Bracelet', 'BRACELETS', 3, '1500,00', 'bracelet_ruby.jfif'),
                                                                                                 ('A010', 'Sapphire Bracelet', 'White Gold Sapphire Bracelet With Small Crystals', 'BRACELETS', 2, '2500,00', 'bracelet_sapphire.jfif'),
                                                                                                 ('A011', 'Diamond Necklace', 'White Gold Halo Diamond Necklace With Crystals', 'NECKLACES', 4, '2700,00', 'necklace_diamond.jfif'),
                                                                                                 ('A012', 'Emerald Necklace', 'White Gold Volume Up Emerald Necklace With Crystals', 'NECKLACES', 3, '3900,00', 'necklace_emerald.jpg'),
                                                                                                 ('A013', 'Pearl Necklace', 'Volume Up 4 Layer Pearl Necklace', 'NECKLACES', 5, '1200,00', 'necklace_pearl.jfif'),
                                                                                                 ('A014', 'Ruby Necklace', 'White Gold Volume Up Ruby Necklace With Crystals', 'NECKLACES', 4, '1900,00', 'necklace_ruby.jpg'),
                                                                                                 ('A015', 'Sapphire Necklace', 'Yellow Gold Sapphire Necklace With Crystals', 'NECKLACES', 5, '1700,00', 'necklace_sapphire.jfif'),
                                                                                                 ('A016', 'Diamond Earrings', 'Yellow Gold 2 Carat Diamond Stud Earrings', 'EARRINGS', 5, '3800,00', 'earrings_diamond.jfif'),
                                                                                                 ('A017', 'Emerald Earrings', 'Yellow Gold Emerald Stud Earrings', 'EARRINGS', 4, '300,00', 'earrings_emerald.jfif'),
                                                                                                 ('A018', 'Pearl Earrings', 'Large White Gold Pearl Stud Earrings', 'EARRINGS', 5, '250,00', 'earrings_pearl.jfif'),
                                                                                                 ('A019', 'Ruby Earrings', 'Yellow Gold Ruby Stud Earrings', 'EARRINGS', 4, '150,00', 'earrings_ruby.jfif'),
                                                                                                 ('A020', 'Sapphire Earrings', 'Rose Gold Sapphire Stud Earrings', 'EARRINGS', 3, '120,00', 'earrings_sapphire.jfif');
CREATE TABLE admin (
                       id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                       admin_Name VARCHAR(30) NOT NULL,
                       password VARCHAR(50) NOT NULL);
INSERT INTO admin (id, admin_Name, password) VALUES (01, Joe_Bloggs, start),
                                                            (02, John_Doe, start);

CREATE TABLE users_products (id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                             userId INT(11),
                             itemCode VARCHAR(10),
                             status enum('Added to cart', 'Confirmed'));