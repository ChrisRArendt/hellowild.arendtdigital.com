<?
	class Pages extends CI_Controller{
		public function view($page = "home"){
			$data["title"] = ucfirst($page);
			$this->load->view("templates/header", $data);
			$this->load->view("pages/" .$page. ".php", $data);
			$this->load->view("templates/footer", $data);
		}
	}
?>