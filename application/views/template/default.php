<?php
$this->load->view('template/header.php');
$this->load->view('template/navbar.php');

if($_SESSION['level']=='admin'){
	$this->load->view('template/sidebar.php');
}else{
	$this->load->view('template/sidebar_pengajar.php');

}

$this->load->view($halaman);
$this->load->view('template/footer.php', array("js" => ((empty($js)) ? "" : $js)));