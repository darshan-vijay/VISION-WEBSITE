
-- Create table for userinfo
CREATE TABLE userinfo (
    email VARCHAR(255) PRIMARY KEY,
    password VARCHAR(255) NOT NULL,
    name VARCHAR(255) NOT NULL,
    contact VARCHAR(20) NOT NULL,
    college VARCHAR(255),
    department VARCHAR(255)
);

-- Create table for payments
CREATE TABLE payments (
    email VARCHAR(255),
    python VARCHAR(50) DEFAULT 'Not Paid',
    electrichybrid VARCHAR(50) DEFAULT 'Not Paid',
    datascience VARCHAR(50) DEFAULT 'Not Paid',
    virtualrobot VARCHAR(50) DEFAULT 'Not Paid',
    emergingcommunication VARCHAR(50) DEFAULT 'Not Paid',
    FOREIGN KEY (email) REFERENCES userinfo(email)
);

-- Create table for events
CREATE TABLE events (
    email VARCHAR(255),
    matrimaze TINYINT DEFAULT 0,
    breakingbias TINYINT DEFAULT 0,
    circuitrix TINYINT DEFAULT 0,
    signalize TINYINT DEFAULT 0,
    twostates TINYINT DEFAULT 0,
    codingcraze TINYINT DEFAULT 0,
    scientistahnaanu TINYINT DEFAULT 0,
    mathmagic TINYINT DEFAULT 0,
    paperpresentation TINYINT DEFAULT 0,
    ceghunt TINYINT DEFAULT 0,
    generalquiz TINYINT DEFAULT 0,
    connexion TINYINT DEFAULT 0,
    `22yards` TINYINT DEFAULT 0,
    couchpotato TINYINT DEFAULT 0,
    kollywoodquiz TINYINT DEFAULT 0,
    FOREIGN KEY (email) REFERENCES userinfo(email)
);

-- Create table for workshops
CREATE TABLE workshops (
    email VARCHAR(255),
    electrichybrid TINYINT DEFAULT 0,
    emergingcommunication TINYINT DEFAULT 0,
    python TINYINT DEFAULT 0,
    datascience TINYINT DEFAULT 0,
    virtualrobot TINYINT DEFAULT 0,
    FOREIGN KEY (email) REFERENCES userinfo(email)
);

-- Create table for payments
CREATE TABLE contact (
    email VARCHAR(255),
    name VARCHAR(255) NOT NULL,
    subject VARCHAR(20) NOT NULL,
    message VARCHAR(255)
);
