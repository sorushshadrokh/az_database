CREATE TABLE messages
(
  message_id INT NOT NULL AUTO_INCREMENT,
  content_message VARCHAR NOT NULL,
  user_id INT NOT NULL,
  PRIMARY KEY (message_id),
  FOREIGN KEY (user_id) REFERENCES users(user_id)
);

 INSERT INTO messages(content_message,user_id)
 VALUES
 ('salam khobi',1);