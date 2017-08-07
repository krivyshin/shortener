<?php 
require_once 'Shortener.php';

if (isset($_GET['code'])) {
	$s = new Shortener;
	$code = $_GET['code'];
	if ($url = $s->getUrl($code)) {
		echo $url;
		header("Location: {$url}");
	}
}
header("Location: {$url}");
 ?>