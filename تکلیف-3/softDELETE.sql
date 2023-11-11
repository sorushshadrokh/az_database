ALTER TABLE users ADD deleted BOOLEAN NOT NULL DEFAULT FALSE AFTER user_name;

UPDATE users
SET deleted = true 
WHERE user_id = 1;