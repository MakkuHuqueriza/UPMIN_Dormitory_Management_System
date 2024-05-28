-- Table structure for table 'dormers' , preliminary for server.

CREATE TABLE dormers ( 
    studentnum VARCHAR(10) NOT NULL, 
    pwd VARCHAR(255) NOT NULL,
    studentname VARCHAR(255),
    age INT,
    sex VARCHAR(10),
    course VARCHAR(255),
    yearlvl VARCHAR(255),
    birthdate DATE,
    placeofbirth VARCHAR(255),
    religion VARCHAR(255),
    emailadd VARCHAR(255),
    phonenum VARCHAR(255),
    homeaddress VARCHAR(255),
    create_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    update_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,

    PRIMARY KEY (studentnum)
) 
