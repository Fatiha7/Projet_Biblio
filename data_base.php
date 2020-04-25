<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "librairie";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // sql to create table
    $sql = " DROP TABLE IF EXISTS `emprunts`";
    $conn->exec($sql);
    $sql = "CREATE TABLE `emprunts` (
    empnum char(255),
    empdate date ,
    empdateret date,
    empcodelivre char(255) ,
    empnumlect char(255),
    PRIMARY KEY (`empnum`)
    )";
    $conn->exec($sql);
    $sql = "DROP TABLE IF EXISTS `lecteurs`";
    $conn->exec($sql);
    $sql = "CREATE TABLE `lecteurs` (
    lecnum char(16),
    lecnom char(16),
    lecprenom char(16),
    lecadresse char(80),
    lecville char(16),
    leccodepostal char(10),
    lecmotdepasse char(80),
    PRIMARY KEY (`lecnum`)
    )";
    $conn->exec($sql);
    $sql = "DROP TABLE IF EXISTS `livres`";
    $conn->exec($sql);
    $sql = "CREATE TABLE `livres` (
    livcode char(255) ,
    livnomaut char(255) ,
    livprenomaut char(255) ,
    livtitre char(255) ,
    livcategorie char(255) ,
    livISBN char(255) ,
    livdejareserve tinyint(1) NOT NULL default '0',
    PRIMARY KEY (`livcode`)
    )";
    $conn->exec($sql);
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>