<?php
require_once "Personnage.php";
require_once "Hero.php";
require_once "Monstre.php";
require_once "Princesse.php";
require_once "Lutin.php";
require_once "Ogre.php";
require_once "Chevalier.php";

echo "test";
$princesse=new Princesse();
$chevalier=new Chevalier();
$ogre=new Ogre();

// $personnage = new Personnage();


echo "<pre>";
print_r($chevalier);
echo "</pre>";





echo "<pre>";
print_r($ogre);
echo "</pre>";

// $chevalier->gifle($chevalier);

$chevalier->gifle($ogre);
$ogre->rugir($chevalier);

echo "<pre>";
print_r($ogre);
echo "</pre>";

echo "<pre>";
print_r($ogre);
echo "</pre>";


echo "<pre>";
print_r($chevalier);
echo "</pre>";

