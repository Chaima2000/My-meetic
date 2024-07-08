DROP DATABASE IF EXISTS mymeet;
CREATE DATABASE mymeet;

USE mymeet;

DROP TABLE IF EXISTS city;
DROP TABLE IF EXISTS user_genre;
DROP TABLE IF EXISTS user_hobbies;
DROP TABLE IF EXISTS user_city;
DROP TABLE IF EXISTS genre;
DROP TABLE IF EXISTS hobbies;
DROP TABLE IF EXISTS user;

CREATE TABLE city(
    id              INT             NOT NULL AUTO_INCREMENT,
    name            VARCHAR(255)    NOT NULL UNIQUE,
    PRIMARY KEY (id)
);

INSERT INTO city 
            (name)
VALUE ('Toulouse'),
      ('Paris'),
      ('Nice'),
      ('Lille'),
      ('Nante'),
      ('Canne');

CREATE TABLE genre(
    id              INT             NOT NULL AUTO_INCREMENT,
    name            VARCHAR(255)    NOT NULL UNIQUE,
    PRIMARY KEY (id)
);
INSERT INTO genre
            (name)
VALUES ('Homme'),
       ('Femme');

CREATE TABLE user (
    id              INT             NOT NULL AUTO_INCREMENT,
    firstname       VARCHAR(255)    NOT NULL,
    lastname        VARCHAR(255)    NOT NULL,
    birthdate       DATETIME        NOT NULL,
    city_id         INT    NOT NULL,
    id_genre        INT    NOT NULL,
    email           VARCHAR(255)    NOT NULL UNIQUE,
    password           VARCHAR(255)    NOT NULL ,
    FOREIGN KEY (city_id) REFERENCES city(id),
    FOREIGN KEY (id_genre) REFERENCES genre(id),
    PRIMARY KEY (id)
    
);

CREATE TABLE hobbies(
    id              INT             NOT NULL AUTO_INCREMENT,
    name            VARCHAR(255)    NOT NULL UNIQUE,
    PRIMARY KEY (id)
);
CREATE TABLE user_genre (
    id_user        INT             NOT NULL,
    id_genre        INT             NOT NULL,
    FOREIGN KEY (id_user) REFERENCES user(id),
    FOREIGN KEY (id_genre) REFERENCES genre(id)
);
CREATE TABLE user_hobbies (
    id_user        INT             NOT NULL,
    id_hobbies        INT             NOT NULL,
    FOREIGN KEY (id_user) REFERENCES user(id),
    FOREIGN KEY (id_hobbies) REFERENCES hobbies(id)
);
CREATE TABLE user_city (
    id_user        INT             NOT NULL,
    id_city        INT             NOT NULL,
    FOREIGN KEY (id_user) REFERENCES user(id),
    FOREIGN KEY (id_city) REFERENCES city(id)
);


INSERT INTO user
            (firstname, lastname, birthdate, city_id,id_genre,email,password)
VALUES  ('Merazi','Chaima','2005-07-29','1','2','chaimamerazi@gmail.com',''),
        ('Abdeli','Hadjer','1960-01-14','2','2','hadjerabdeli@gmail.com',''),
        ('Sarah','Sarah','1980-03-30','2','2','sarahcaca@gmail.com',''),
        ('Alya','Alya','2003-08-12','3','2','alyaretar@gmail.com',''),
        ('discrette','Rafadhia','1970-08-15','4','2','rafadhiadiscrette@gmail.com',''),
        ('Torel','Tom','1960-12-10','5','1','tomtorel@gmail.com',''),
        ('Poter','Harry','2001-06-29','1','1','harrypoter@gmail.com','');

INSERT INTO hobbies
            (name)
Values ('Sport'),
       ('Animaux'),
       ('Jeux video'),
       ('Voyage');



       



