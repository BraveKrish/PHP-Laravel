create table enrollments (
    id int AUTO_INCREMENT PRIMARY KEY,
    fname varchar(50) not null,
    lname varchar(50) not null,
    email varchar(50) not null,
    phone varchar(15) not null,
    dob date DEFAULT null,
    course varchar(50) DEFAULT null,
    address varchar(50) DEFAULT null,
    created_at timestamp DEFAULT current_timestamp
);


-- create table query
create table enrollments ( id int AUTO_INCREMENT PRIMARY KEY, fname varchar(50) not null, lname varchar(50) not null, email varchar(50) UNIQUE not null, phone varchar(15) not null, dob date DEFAULT null, courses varchar(50) DEFAULT null, address varchar(50) DEFAULT null, created_at timestamp DEFAULT current_timestamp ); 

-- inset query example
INSERT INTO `enrollments` (`id`, `fname`, `lname`, `email`, `phone`, `dob`, `courses`, `address`, `created_at`) VALUES (NULL, 'ram', 'rai', 'ram@gmail.com', '+977-9804074883', '2025-03-25', 'Laravel', 'Itahari', current_timestamp());