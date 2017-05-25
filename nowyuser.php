<?php
function komendasql($con,$komenda){
	$r=pg_exec($con,$komenda);
	
}


$con=pg_connect("host=sbazy user=s182919 dbname=s182919 password=123456");
$userId=(time()-1000000000);
$userName=$_GET[imie];
$userSurname=$_GET[nazwisko];
$mail=$_GET[email];
$pass=$_GET[passwd];
$komenda="INSERT INTO users VALUES ({$userId}, '{$userName}', '{$userSurname}', '{$mail}', '{$pass}');";
komendasql($con,$komenda);
    }

?>
