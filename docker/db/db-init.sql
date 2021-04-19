DROP TABLE IF EXISTS user_login;

CREATE TABLE user_login (
    id int AUTO_INCREMENT PRIMARY KEY,
    user_name VARCHAR(255),
    password_hash VARCHAR(255),
    update_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    create_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);

DROP TABLE IF EXISTS time_table;

DROP TABLE IF EXISTS services;

DROP TABLE IF EXISTS executor;

