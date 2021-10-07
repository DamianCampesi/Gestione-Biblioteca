#CREATE DATABASE gestione_biblioteca;
use gestione_biblioteca;
CREATE table user(
id INT AUTO_INCREMENT PRIMARY KEY,
is_librarian TINYINT,
email VARCHAR(100),
hash_password VARCHAR(255)
);
CREATE table book(
id INT AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(50),
email VARCHAR(100)
);
CREATE table rent(
start_date date,
end_date date,
user_id INT,
book_id INT,
FOREIGN KEY(user_id) REFERENCES user(id),
FOREIGN KEY(book_id) REFERENCES book(id),
PRIMARY KEY(user_id,book_id)
);

CREATE table rating(
id INT AUTO_INCREMENT PRIMARY KEY,
valutazione enum("1","2","3","4","5","6"),
FOREIGN KEY(user_id) REFERENCES user(id),
FOREIGN KEY(book_id) REFERENCES book(id)
);