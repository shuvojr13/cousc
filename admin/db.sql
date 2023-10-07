-- Create a Table Event
CREATE TABLE event (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    image VARCHAR(255),
    date DATE NOT NULL
);
-- Create a Table Notice
CREATE TABLE notice (
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    file BLOB
);
CREATE TABLE admins (
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);


