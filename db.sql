CREATE DATABASE chat;

CREATE TABLE chats (
    ChatID int(11)  NOT NULL AUTO_INCREMENT PRIMARY KEY,
    ChatUserID int(11) NOT NULL,
    ChatText varchar(140) NOT NULL 
);

CREATE TABLE users (
    UserID int(11)  NOT NULL AUTO_INCREMENT PRIMARY KEY,
    UserName varchar(50) NOT NULL,
    UserMail varchar(50) NOT NULL,
    UserPassword text	NOT NULL 
);


INSERT INTO chats (ChatUserID, ChatText)
VALUES ('1', 'ทำได้ไหม'),
('2', 'คิดว่าได้'),
('1', 'แน่ใจอ่อ'),
('2', 'ไม่แน่ใจละ');


INSERT INTO users (UserName, UserMail,UserPassword)
VALUES ('ME', 'Meyou@gmail.com','1'),
('I', 'IU@gmail.com','2');
