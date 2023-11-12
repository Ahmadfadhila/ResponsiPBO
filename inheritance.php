<?php

// import data/person.php
require_once "data/Manager.php";
// buat object new manager dan tambahakan value nama kemudian panggil function
$manager1 = new Manager();
$manager1->nama = "Fadhil";
$manager1->sayHello("Fadhilcuy");

// buat object new vicepresident dan tambahakan value nama kemudian panggil function
$vicePresident1 = new VicePresident();
$vicePresident1->nama = "Citra";
$vicePresident1->sayHello("Citrasafira");