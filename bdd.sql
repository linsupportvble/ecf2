DROP DATABASE IF EXISTS ECF2;

/* Creation d'une base de donnée */

CREATE DATABASE IF NOT EXISTS ECF2;

/* Creation de la table Utilisateur */
CREATE TABLE `Utilisateur` (
    `Name` VARCHAR(50) NOT NULL,
    `Firstname` VARCHAR(50) NOT NULL,
    `birth_date` DATE NOT NULL,
    `Adress` TEXT NOT NULL,
    `Postal_code` VARCHAR(5) NOT NULL,
    `Phone_Number` VARCHAR(50) NOT NULL,
    `Service` INT NOT NULL AUTO_INCREMENT,
        PRIMARY KEY (`Service`)
);

CREATE TABLE `Service` (
    `Service_Name` VARCHAR(50) NOT NULL,
    `Description` VARCHAR(50) NOT NULL
);
INSERT INTO `Service` ( `Service_Name`, `Description`)
    VALUES
    (
        'Maintenance', 'Les spécialistes du Hardware'
    ),
    (
        'Web Developer', 'Pour eux tout est code'
    ),
    (
        'Web Designer', 'Y a que le CSS dans la vie'
    ),
    (
        'Reférenceur', 'Regarde les Serps Google du matin au soir et du soir au matin'
    );
