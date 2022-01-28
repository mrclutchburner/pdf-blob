<?php
     $dbh = new PDO("mysql:host=localhost;dbname=pdf", "root", "");
     $id = isset($_GET['id'])? $_GET['id'] : "";
     $stat = $dbh->prepare("select * from pdf_file where id=?");
     $stat->bindParam(1, $id);
     $stat->execute();
     $row = $stat->fetch();
     header ('Content-Type:'.$row['mime']);
     echo $row['data'];