<?php

$con=pg_connect("host=sbazy user=s182919 dbname=s182919 password=123456");


function wd($con, $s)
{
print "<table border=2>";
$r=pg_exec($con,$s);
$lw=pg_numrows($r);
$lk=pg_numfields($r);

for ($i=0; $i<$lk; $i++)
print "<th>".pg_field_name($r, $i);

for ($j=0; $j<$lw; $j++)
{
print "<tr>";
for ($i=0;$i<$lk;$i++)
print "<td>".pg_result($r, $j, $i);
}
print"</table>";
}

function d_usr($zalogowanyuser){
	print"<br> zalogowany user: $zalogowanyuser <br>";
	
}

function komendasql($con,$komenda){
	$r=pg_exec($con,$komenda);
	
}

if(isset($_GET['akcja']))
{
	$komenda="delete from users where surname = 'nazwisko';";
	komendasql($con,$komenda);
}

if(isset($_GET['generuj']))
{							
	$userId=(time()-1000000000);
	$userName='???';
	$userSurname='nazwisko';
	$mail='adrespoczty';
	$pass='haselko';
	$komenda="INSERT INTO users VALUES ({$userId}, '{$userName}', '{$userSurname}', '{$mail}', '{$pass}');";
	komendasql($con,$komenda);
	print $komenda;
}
								
?>