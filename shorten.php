<?php 
session_start();
require_once 'Shortener.php';

$s = new Shortener;

if (isset($_POST['url'])) {
	$url = $_POST['url'];
	if ($code = $s->makeCode($url)) {
		//echo $code;
		$adres = "http://".$_SERVER['SERVER_NAME'];//.$_SERVER['PHP_SELF']
		$_SESSION['feedback'] = "�������������! ��� �������� URL: <a href='".$adres."/".$code."'>".$adres."/".$code."</a>";
	} else {
		//���� ������
		$_SESSION['feedback'] = "�������� ��������. �������� URL";
	}
}

header('Location: index.php');
  ?>