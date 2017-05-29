<?php
//Created By An honesty liar on 2017/4/30
header("Content-type: text/html; charset=utf-8");

include "connection.php";
if (@$_GET['number'] == null)
{$number = 0;}
else{
	$number = $_GET['number'];
}


$db->query("set names utf8");
$sth = $db->prepare("SELECT a.c_id ,a.content ,a.time
				,b.nickname
				FROM `love_content` a
				LEFT JOIN `users` b on a.u_id = b.id
				where a.c_id > :number  and a.private_state = 0
				limit 0,10
					");
$sth->execute(array('number' => $number ));
$Queryresult = $sth->fetchAll(PDO::FETCH_ASSOC);


print(json_encode($Queryresult));

?>