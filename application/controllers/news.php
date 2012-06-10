<?
	class News extends CI_controller{
		public function __construct(){
			parent::__construct();//run CI_controller constructor
			$this->load->model("News_model");
			$this->load->helper("url");
		}
		
		public function index(){
			$data["news"] = $this->News_model->get_news();
			
			if(empty($data["news"]))
				show_404();
				
			$data["title"] = "News Archive";
			
			$this->load->view("templates/header", $data);
			$this->load->view("news/index", $data);
			$this->load->view("templates/footer");
		}
		public function view($slug){
			$data["news_item"] = $this->News_model->get_news($slug);
			
			if(empty($data["news_item"]))
				show_404();
				
			$data["title"] = $data["news_item"]["title"];
			
			$this->load->view("templates/header", $data);
			$this->load->view("news/view", $data);
			$this->load->view("templates/footer");
		}
		
		public function create(){
			$this->load->helper("form");
			$this->load->library("form_validation");
			
			$data["title"] = "Create a news item";
			
			$this->form_validation->set_rules("title", "Title", "required");
			$this->form_validation->set_rules("text", "text", "required");
			
			if($this->form_validation->run() === FALSE){
				$this->load->view("templates/header", $data);
				$this->load->view("news/create");
				$this->load->view("templates/footer");
			}
			else{
				$this->News_model->set_news();
				$this->load->view("news/success");
			}
		}
	}
?>