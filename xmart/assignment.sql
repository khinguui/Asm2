USE assignment;

CREATE TABLE users (
	id INT AUTO_INCREMENT PRIMARY KEY,
	user_name VARCHAR(50) NOT NULL,
	password VARCHAR(255) NOT NULL,
	NAME VARCHAR(100)
);

INSERT INTO users (user_name,password,NAME) VALUES ('vantoan123','e10adc3949ba59abbe56e057f20f883e','Doan van toan');