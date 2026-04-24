DROP DATABASE IF EXISTS xenia_ludus_hub;
CREATE DATABASE xenia_ludus_hub
CHARACTER SET utf8mb4 
COLLATE utf8mb4_general_ci;

USE xenia_ludus_hub;

-- ======================
-- ROLES & USERS
-- ======================


CREATE TABLE role (
  roleID INT AUTO_INCREMENT PRIMARY KEY,
  role_naam VARCHAR(50)
);

INSERT into `role`(roleID, role_naam) VALUES
(1, 'gamer'),
(2, 'developer'),
(3, 'bedtijf-manager');

CREATE TABLE users (
  userID INT AUTO_INCREMENT PRIMARY KEY,
  naam VARCHAR(255),
  email VARCHAR(255),
  wachtwoord VARCHAR(255),
  roleID INT,
  FOREIGN KEY (roleID) REFERENCES role(roleID)
);

-- ======================
-- BEDRIJF & PUBLISHER
-- ======================


CREATE TABLE bedrijf (
  bedrijfID INT AUTO_INCREMENT PRIMARY KEY,
  brdijf_naam VARCHAR(255)  

);

CREATE TABLE publisher (
  publisherID INT AUTO_INCREMENT PRIMARY KEY,
  naam VARCHAR(255),
  bedrijfID INT,
  FOREIGN KEY (bedrijfID) REFERENCES bedrijf(bedrijfID)
);

CREATE TABLE bedrijf_roles (
  bedrijfID INT,
  roleID INT,
  PRIMARY KEY (bedrijfID, roleID),
  FOREIGN KEY (bedrijfID) REFERENCES bedrijf(bedrijfID),
  FOREIGN KEY (roleID) REFERENCES role(roleID)
);

-- ======================
-- GAMES
-- ======================

CREATE TABLE game (
  gameID INT AUTO_INCREMENT PRIMARY KEY,
  naam VARCHAR(255),
  beschrijving TEXT
);

-- publisher ↔ game (many-to-many)
CREATE TABLE publisher_game (
  publisherID INT,
  gameID INT,
  PRIMARY KEY (publisherID, gameID),
  FOREIGN KEY (publisherID) REFERENCES publisher(publisherID),
  FOREIGN KEY (gameID) REFERENCES game(gameID)
);


-- ======================
-- COMMUNITY
-- ======================

CREATE TABLE community (
  communityID INT AUTO_INCREMENT PRIMARY KEY,
  naam VARCHAR(255),
  gameID INT,
  FOREIGN KEY (gameID) REFERENCES game(gameID)
);

-- user ↔ community
CREATE TABLE user_community (
  userID INT,
  communityID INT,
  PRIMARY KEY (userID, communityID),
  FOREIGN KEY (userID) REFERENCES users(userID),
  FOREIGN KEY (communityID) REFERENCES community(communityID)
);

-- ======================
-- FOLLOW SYSTEM
-- ======================

CREATE TABLE user_game_follow (
  userID INT,
  gameID INT,
  PRIMARY KEY (userID, gameID),
  FOREIGN KEY (userID) REFERENCES users(userID),
  FOREIGN KEY (gameID) REFERENCES game(gameID)
);

CREATE TABLE user_bedrijf_follow (
  userID INT,
  bedrijfID INT,
  PRIMARY KEY (userID, bedrijfID),
  FOREIGN KEY (userID) REFERENCES users(userID),
  FOREIGN KEY (bedrijfID) REFERENCES bedrijf(bedrijfID)
);

-- ======================
-- BERICHT & NIEUWS
-- ======================

CREATE TABLE bericht (
  berichtID INT AUTO_INCREMENT PRIMARY KEY,
  tekst TEXT,
  publisherID INT,
  datum DATETIME,
  FOREIGN KEY (publisherID) REFERENCES publisher(publisherID)
);

CREATE TABLE nieuws (
  nieuwsID INT AUTO_INCREMENT PRIMARY KEY,
  berichtID INT,
  publicatie_datum DATETIME,
  FOREIGN KEY (berichtID) REFERENCES bericht(berichtID)
);

-- ======================
-- Q&A (VRAGEN & ANTWOORDEN)
-- ======================

CREATE TABLE vraag (
  vraagID INT AUTO_INCREMENT PRIMARY KEY,
  titel VARCHAR(255),
  inhoud TEXT,
  userID INT,
  gameID INT,
  datum DATETIME,
  FOREIGN KEY (userID) REFERENCES users(userID),
  FOREIGN KEY (gameID) REFERENCES game(gameID)
);

CREATE TABLE antwoord (
  antwoordID INT AUTO_INCREMENT PRIMARY KEY,
  inhoud TEXT,
  userID INT,
  vraagID INT,
  datum DATETIME,
  FOREIGN KEY (userID) REFERENCES users(userID),
  FOREIGN KEY (vraagID) REFERENCES vraag(vraagID)
);