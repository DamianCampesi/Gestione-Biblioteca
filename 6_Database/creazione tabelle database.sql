DROP DATABASE IF EXISTS gestione_biblioteca;
CREATE DATABASE gestione_biblioteca;
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
    author VARCHAR(100),
    is_rented TINYINT,
    summary TEXT,
    cover_image BLOB
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
    valutazione FLOAT,
    user_id INT,
    book_id INT,
    FOREIGN KEY(user_id) REFERENCES user(id),
    FOREIGN KEY(book_id) REFERENCES book(id)
);

INSERT INTO `book` VALUES (1,'Il nome della rosa','Umberto Eco'),
(2,'Un uomo','Oriana Fallaci'),
(3,'Lessico famigliare','Natalia Ginzburg'),
(4,'La storia','Elsa Morante'),
(5,'La noia','Alberto Moravia'),
(6,'Se questo è un uomo','Primo Levi'),
(7,'Quer pasticciaccio brutto di via Merulana','Carlo Emilio Gadda'),
(8,'Una donna','Sibilla Aleramo'),(9,'Il deserto dei tartari','Dino Buzzati'),
(10,'Io uccido','iorgio Faletti'),(11,'Cent\'anni di solitudine','Gabriel Garcìa Marquez'),
(12,'Madame Bovary','Gustave Flaubert'),(13,'Orgoglio e pregiudizio','Jane Austen'),
(14,'Decameron','Giovanni Boccaccio'),(15,'Furore','John Steinbeck'),
(16,'L\'insostenibile leggerezza dell\'essere','Milan Kundera'),
(17,'Le avventure di Pinocchio','Carlo Collodi'),
(18,'La coscienza di Zeno','Italo Svevo'),
(19,'Il ritratto di Dorian Grey','Oscar Wilde');


INSERT INTO `rent` VALUES ('2021-12-12','2022-01-03',1,1),
('2021-12-14','2021-12-14',1,2),
('2022-01-14','2022-01-14',1,3),
('2001-09-11','2021-11-20',1,4),
('2001-09-12','2020-11-23',1,6),
('2012-02-21','2012-12-11',1,7),
('2021-12-12','2022-01-13',1,9),
('0000-00-00','0000-00-00',1,10),
('2002-01-11','2022-12-31',1,11),
('2012-02-21','2012-12-11',1,12),
('2021-12-12','2022-02-10',1,13),
('2021-12-12','2022-01-12',1,19);

INSERT INTO `user` VALUES (1,1,'damian.campesi@gmail.com','$2y$10$APWK1YDTo/SkJJ1HWrqG6.RMSb7177B/2tWX8G4NDcorYM0vWZdwy');