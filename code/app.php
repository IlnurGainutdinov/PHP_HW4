<?php

require_once('vendor/autoload.php');

$book1 = new PaperBook("1", "Иванов Иван", 2000, "Библиотека");

echo $book1->info();

$book1->getByUser("Я");

echo $book1->info();

$book1->returnToLibrary();

echo $book1->info();

$book2 = new ElectronicBook("2", "Петров Петр", 2001, "Библиотека2");

echo $book2->info();

$book2->download();

echo $book2->info();