<?php

// import data/person.php
require_once "data/person.php";

// buat object dari kelas person
$fadhil = new Person("Fadhil", "Bengkulu");

// tambahkan value nama di object
$fadhil->nama = "Fadhil";

// panggil function sayHelloNull dengan parameter
$fadhil->sayHelloNull("Citra Safira");

// buat object dari kelas person
$citra = new Person("Citra", "Jawa");

// tambahkan value nama di object
$citra->nama = "Cookie Pratama";

// panggil function sayHelloNull dengan parameter null
$citra->sayHelloNull(null);
