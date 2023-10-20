CREATE TABLE users
(
  user_id INT NOT NULL AUTO_INCREMENT,
  user_name VARCHAR NOT NULL,
  PRIMARY KEY (user_id),
);

 INSERT INTO users(user_name)
 VALUES('ali');