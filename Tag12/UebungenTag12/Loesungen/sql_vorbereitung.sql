-- Alle Tabellen sind in der Datenbank uebungen_db angelegt wurden

-- Aufgabe Eulenpost

CREATE TABLE eulenpost (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    haus VARCHAR(50) NOT NULL,
    email VARCHAR(150) NOT NULL,
    nachricht TEXT NOT NULL,
    erstellt_am TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Aufgabe Pokemon

CREATE TABLE poke (
    id INT AUTO_INCREMENT PRIMARY KEY,
    trainername VARCHAR(100) NOT NULL,
    region VARCHAR(50) NOT NULL,
    pokemon VARCHAR(100),
    arena VARCHAR(50),
    email VARCHAR(150) NOT NULL,
    nachricht TEXT,
    erstellt_am TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Aufgabe Tierheim

CREATE TABLE bello (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL,
    telefon VARCHAR(50) NOT NULL,
    tierart VARCHAR(50) NOT NULL,
    tiername VARCHAR(100),
    wohnsituation VARCHAR(255),
    erfahrung TEXT,
    nachricht TEXT NOT NULL,
    datenschutz TINYINT(1) NOT NULL,
    erstellt_am TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Aufgabe Abenteuer

CREATE TABLE gilde (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    klasse VARCHAR(50) NOT NULL,
    level INT,
    waffe VARCHAR(100),
    email VARCHAR(150) NOT NULL,
    motivation TEXT,
    regeln TINYINT(1) NOT NULL,
    erstellt_am TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Aufgabe Hackerangriff

CREATE TABLE hacker (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nickname VARCHAR(100) NOT NULL,
    teamname VARCHAR(100),
    email VARCHAR(150) NOT NULL,
    erfahrung VARCHAR(50) NOT NULL,
    bereich VARCHAR(100) NOT NULL,
    motivation TEXT,
    regeln TINYINT(1) NOT NULL,
    erstellt_am TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Aufgabe Zombies

CREATE TABLE zombie (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    art VARCHAR(50) NOT NULL,
    kontakt VARCHAR(150),
    sprache VARCHAR(50) NOT NULL,
    thema TEXT,
    regeln TINYINT(1) NOT NULL,
    erstellt_am TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Aufgabe Herr der Ringe

CREATE TABLE mordor (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    rolle VARCHAR(50) NOT NULL,
    loyalitaet INT,
    arbeitsstunden INT,
    strafen INT,
    motivation TEXT,
    ring TINYINT(1) NOT NULL,
    erstellt_am TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
