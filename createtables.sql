


CREATE TABLE categories(
	cat_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	cat_title VARCHAR(30) NOT NULL);


CREATE TABLE posts(
	post_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
 	post_category_id INT NULL,
	post_tags VARCHAR(255) NULL,
	post_comment_count INT(50) NULL,
	post_status ENUM('Published', 'Draft') DEFAULT 'Draft' NOT NULL,
	post_title VARCHAR(150) NOT NULL,
	post_author VARCHAR(50) NULL,
	post_date DATE NOT NULL,
	post_img TEXT NULL,
	post_img_alt VARCHAR(150),
	post_content TEXT NULL);


CREATE TABLE comments(
	comment_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	comment_post_id INT NULL,
	comment_author VARCHAR(255) NOT NULL,
	comment_email VARCHAR(255) NOT NULL,
	comment_content TEXT NOT NULL,
	comment_status ENUM('Approved', 'Unapproved') DEFAULT 'Unapproved' NOT NULL,
	comment_date DATE NOT NULL,
	response_to VARCHAR(255) NOT NULL
);


CREATE TABLE users(
	user_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	username VARCHAR(255) NOT NULL,
	user_password VARCHAR(255) NOT NULL,
	user_firstname VARCHAR(255) NOT NULL,
	user_lastname VARCHAR(255) NOT NULL,
	user_email VARCHAR(255) NOT NULL,
	user_image TEXT,
	user_role VARCHAR(100) NOT NULL,
	user_status ENUM('Approved', 'Unapproved') DEFAULT 'Approved' NOT NULL,
	start_date DATE NOT NULL
);


CREATE TABLE subscribers(
	sub_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	sub_username VARCHAR(100) NOT NULL,
	sub_email VARCHAR(255) NOT NULL,
	sub_password VARCHAR(255) NOT NULL
);


/*
Login:
email: john@email.com
password: password
*/
INSERT INTO users(
	username,
	user_password,
	user_firstname,
	user_lastname,
	user_email,
	user_image,
	user_role,
	user_status,
	start_date)
VALUES(
	'jsmith',
	'$2y$10$fR8/NGJbbiGAiYa9R3QSpOYzLOhbOaHFC21KH2pB1hFXJ8hWvUsb2',
	'John',
	'Smith',
	'john@email.com',
	'card.jpg',
	'Admin',
	'Approved',
	now()
);
