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
			else 
				for($i = 0; $i < count($data["news"]); $i++)
					$data["news"][$i]["text"] = "<P>". substr($data["news"][$i]["text"], 0, 500) ."...</P>";
			
			$data["title"] = "Front";
			
			$data["data"] = $data;
			$data["page"] = "news/index";
			$this->load->view("news/_shared", $data);
		}
		public function view($slug){
			$data["news_item"] = $this->News_model->get_news($slug);
			
			if(empty($data["news_item"]))
				show_404();
				
			$data["title"] = "";
			
			$data["data"] = $data;
			$data["page"] = "news/view";
			$this->load->view("news/_shared", $data);
		}
		
		public function create(){
			$this->load->helper("form");
			$this->load->library("form_validation");
			
			$data["title"] = "Create a news item";
			
			$this->form_validation->set_rules("title", "Title", "required");
			$this->form_validation->set_rules("text", "text", "required");
			
			if($this->form_validation->run() === FALSE){
				$data["data"] = $data;
				$data["page"] = "news/create";
				$this->load->view("news/_shared", $data);
			}
			else{
				$this->News_model->set_news();
				$data["data"] = $data;
				$data["page"] = "news/success";
				$this->load->view("news/_shared", $data);
			}
		}
	}
?>