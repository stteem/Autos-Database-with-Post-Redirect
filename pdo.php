<?php
$pdo = new PDO('mysql:host=localhost;port=33060;dbname=assanal', 
   'uwem', 'uke');
// See the "errors" folder for details...
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



