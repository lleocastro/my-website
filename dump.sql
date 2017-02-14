DROP TABLE IF EXISTS 'x_users';
CREATE TABLE x_users (
    id INT unsigned AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    lastname VARCHAR(50),
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(80) NOT NULL,
    remember_token VARCHAR(80),
    created_at TIMESTAMP,
    updated_at TIMESTAMP

) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS 'x_email_list';
CREATE TABLE x_email_list (
  id INT unsigned AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(100) NOT NULL UNIQUE,
  unread TINYINT(1) NOT NULL,
  created_at TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS 'x_visitors_messages';
CREATE TABLE x_visitors_messages (
  id INT unsigned AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(50) NOT NULL,
  email VARCHAR(100) NOT NULL,
  subject VARCHAR(100) NOT NULL,
  message LONGTEXT NOT NULL,
  unread TINYINT(1) NOT NULL,
  created_at TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS 'x_page_views';
CREATE TABLE x_page_views (
  id INT unsigned AUTO_INCREMENT PRIMARY KEY,
  agent VARCHAR(255) NOT NULL,
  addr VARCHAR(15) NOT NULL,
  host VARCHAR (50) NOT NULL,
  route VARCHAR(255),
  date_time TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

