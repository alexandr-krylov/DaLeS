DROP TABLE IF EXISTS user_login;

CREATE TABLE user_login (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_name VARCHAR(255),
    password_hash VARCHAR(255),
    user_role INT,
    update_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
     ON UPDATE CURRENT_TIMESTAMP,
    create_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);

INSERT user_login (user_name, password_hash, user_role) VALUES
    ('admin', '$2y$10$y0a55VB0uhbexxDTwpkFTeN1rsJuJKTVVHCTh7zhbwPzFy9AHKQOK', 1),
    ('user', '$2y$10$GAYWD/uOk.GuOolwPD9kAOzo9hKyFjHILzbYx/0E45E.WclOYG8Je', 2);

DROP TABLE IF EXISTS roles;

CREATE TABLE roles (
    id int AUTO_INCREMENT PRIMARY KEY,
    role_name VARCHAR(255),
    update_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
     ON UPDATE CURRENT_TIMESTAMP,
    create_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);

INSERT roles (id, role_name) VALUES
    (1, 'admin'),
    (2, 'user');

DROP TABLE IF EXISTS appointment;

CREATE TABLE appointment (
    id int AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    client_name VARCHAR(255),
    client_surname VARCHAR(255),
    mobile_number VARCHAR(255),
    problem TEXT,
    convinient_time TIMESTAMP,
    update_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
     ON UPDATE CURRENT_TIMESTAMP,
    create_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);