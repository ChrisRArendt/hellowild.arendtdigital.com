<?
	class Home extends CI_Controller{
		public function __construct(){
			parent::__construct();//run CI_controller constructor
			$this->load->helper("url");
		}
		
		public function index(){
			$data["title"] = "Landing";
			$data["data"] = $data;
			$data["page"] = "home/index";
			$this->load->view("home/_shared", $data);
		}
	}
?>