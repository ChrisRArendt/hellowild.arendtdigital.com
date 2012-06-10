<?
	$this->load->view("templates/_shared_top", $data); //load the appropriate header
	$this->load->view($page, $data); //load the appropriate data
	$this->load->view("templates/_shared_bottom", $data); //load the appropriate footer
?>