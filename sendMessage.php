<?php 
include("connect.php");
mail("gmastrbit@gmail.com", "Mypage", "New message.");
header("Content-type: text/html; charset=utf-8");
			$ip = $_SERVER['REMOTE_ADDR'];
			$timezone1 = '-2';
			$time = date('H:i', strtotime("+3 hours"));
			$date = date('d.m.Y');
			$info = ", $ip, $date, $time";
if(empty($_POST['js'])){
	if($_POST['message'] != '' && $_POST['author'] != ''){
		$author = @iconv("UTF-8", "UTF-8", $_POST['author']);
		$author = $author.$info;
		$author = addslashes($author);
		$author = htmlspecialchars($author);
		$author = stripslashes($author);	
		$author = $mysqli -> real_escape_string($author);
		$message = @iconv("UTF-8", "UTF-8", $_POST['message']);
		$message = addslashes($message);
		$message = htmlspecialchars($message);
		$message = stripslashes($message);
		$message = $mysqli -> real_escape_string($message);
		$result = $mysqli -> query("INSERT INTO `mypage` (`author`, `message`) VALUES ('$author', '$message')");
		if($result == true){
			echo 0; 
		}else{
			echo 1; 
		}
	}else{
		echo 2; 
	}
}
if($_POST['js'] == 'no'){
	if($_POST['message'] != '' && $_POST['author'] != ''){
		$author = $_POST['author'];
		$author = addslashes($author);
		$author = htmlspecialchars($author);
		$author = stripslashes($author);		
		$author = $mysqli -> real_escape_string($author);
		$message = $_POST['message'];
		$message = addslashes($message);
		$message = htmlspecialchars($message);
		$message = stripslashes($message);
		$message = $mysqli -> real_escape_string($message);
		$result = $mysqli -> query("INSERT INTO `mypage` (`author`, `message`) VALUES ('$author', '$message')");
		if($result == true){
			echo "Ваше повідомлення успішно відправлено.";
		}else{
			echo "Повідомлення не відправлено. Помилка бази даних $result";
		}
	}else{
		echo "Не можна відправляти пусті повідомлення!"; 
	}
}
?>      	