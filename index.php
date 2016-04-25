<?php
	if(isset($_GET['page'])){
		$page=$_GET['page'];
		
	}else{
		$page="home";
	}
	switch($page){
		case"home":
		$title="Halaman Utama";
		include "header.php";
		include("home.php");
		include("footer.php");
		break;
	case "kontak":
		$title="Kontak";
		include "header.php";
		include("kontak.php");
		include("footer.php");
		break;
	case "tentang":
		$title="Tentang";
		include "header.php";
		include("tentang.php");
		include("footer.php");
		break;
	case "sejarah":
		$title="Sejarah";
		include "header.php";
		include("sejarah.php");
		include("footer.php");
		break;
	case "tutorial":
		$title="Tutorial";
		include "header.php";
		include("tutorial.php");
		include("footer.php");
		break;
	case "login":
		$title="login";
		include "header.php";
		include("login.php");
		include("footer.php");
		break;
	}
	


?>