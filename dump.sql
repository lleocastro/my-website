DROP TABLE IF EXISTS 'x_users';
CREATE TABLE x_users (
    id INT unsigned AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    lastname VARCHAR(100),
    email VARCHAR(150) NOT NULL UNIQUE,
    password VARCHAR(80) NOT NULL,
    remember_token VARCHAR(80),
    created_at TIMESTAMP,
    updated_at TIMESTAMP

) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS 'x_email_list';
CREATE TABLE x_email_list (
  id INT unsigned AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(150) NOT NULL UNIQUE,
  created_at TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS 'x_visitors_messages';
CREATE TABLE x_visitors_messages (
  id INT unsigned AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  lastname VARCHAR(100) NOT NULL,
  email VARCHAR(150) NOT NULL UNIQUE,
  message LONGTEXT NOT NULL,
  created_at TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
