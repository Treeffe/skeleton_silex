-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 28 nov. 2017 à 16:36
-- Version du serveur :  10.1.26-MariaDB
-- Version de PHP :  7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

    -- --------------------------------------------------------

    --
    -- Structure de la table `user`
    --

    CREATE TABLE `user` (
      `idUser` int(11) NOT NULL,
      `prenomUser` text NOT NULL,
      `nomUser` text NOT NULL,
      `mailUser` text NOT NULL,
      `adresseUser` text NOT NULL,
      `villeUser` text NOT NULL,
      `loginUser` text NOT NULL,
      `mdpUser` text NOT NULL,
      `saltSys` text NOT NULL,
        `role` varchar(255) NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
    
    INSERT INTO visiteur VALUES (1, 'thibaut', 'cornado',  'cornado@hotmail.fr', 'X', 'Lyon', 'treef', 'YRKBx8oeQ2sLBrEqjJeqc8UwC9HPp+Ed6dhCeeHPQJ9vY4vbMepUbS14/rE6njWr4RZd4E+tU4pcOMI0h8Z6UA==', 'mnPEaJNz6,rUPbAYGg6$UXt', 'ROLE_ADMIN')