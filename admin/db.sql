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
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    description TEXT,
    link VARCHAR(255),
    date DATE NOT NULL
);

CREATE TABLE admins (
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE gallary (
   id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
   image VARCHAR(255)
);

CREATE TABLE member (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    dob DATE NOT NULL,
    gender VARCHAR(10) NOT NULL,
    image VARCHAR(255),
    email VARCHAR(100) NOT NULL,
    mobile VARCHAR(20) NOT NULL,
    batch VARCHAR(50) NOT NULL,
    roll VARCHAR(50) NOT NULL,
    session VARCHAR(50) NOT NULL,
    department VARCHAR(50) NOT NULL,
    science_interest TEXT,
    science_experience TEXT,
    future_plans TEXT,
    is_approved BOOLEAN DEFAULT FALSE,
   
);


INSERT INTO admins (username, password) VALUES ('admin', '@CoU2023#');




