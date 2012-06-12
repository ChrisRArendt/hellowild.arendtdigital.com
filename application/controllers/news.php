<?

	class News extends CI_controller{
		public function __construct(){
			parent::__construct();//run CI_controller constructor
			$this->load->model("News_model");
			$this->load->helper("url");
			
			session_start();
		}
		
		public function index(){
			//IF THE PAGE HASN'T BEEN ACCESSED IN A WHILE, WE NEED TO CLEAN EVERYTHING UP AND MAKE IT PRESENTABLE
			$timeframe = 600; //delete every 10 minutes
			if(isset($_SESSION["lastView"])){
				$lv = (int)$_SESSION["lastView"];
				if( time() - $lv > $timeframe){
					$this->db->where_not_in("id", array(5,6,8,26));
					$this->db->delete("news");
				}
			}
			$_SESSION["lastView"] = time();
			
		
			//BUILD OUT PAGE
			$data["news"] = $this->News_model->get_news();
			
			if(empty($data["news"])) 
				show_404();
			else 
				for($i = 0; $i < count($data["news"]); $i++){
					//only distribute bite-sized chunks
					$origText = $data["news"][$i]["text"];
					$shortText = substr($origText, 0, 600);
					if(strlen($origText) > 600)
						$shortText .= "...";
					
					
					//Clean up open HTML tags. This probably should be done and saved into the database, instead of using all this logic here... but oh well! :D
					$dir = __DIR__;
					$dir = substr($dir, 0, strpos($dir,"application"));
					include_once($dir. "application/libraries/HTMLawed/htmLawed.php"); //include the HTMLawed library
					
					// Set htmLawed; some configuration need not be specified because the default behavior is good enough
					$config = array(
					    'safe'=>1,
					    'deny_attribute'=>'class, id, style'
					);
					$spec = 'a = -*, title, href'; // The 'a' element can have only these attributes
					if(get_magic_quotes_gpc())
					    $shortText  = stripslashes($shortText); // Strip slashes from the user input in case PHP has magic quotes enabled
					$shortText = htmLawed($shortText, $config, $spec);// The filtering
					
					
					
					$data["news"][$i]["text"] = $shortText;
				}
			
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
			$_SESSION["lastView"] = time();
			
			$this->load->helper("form");
			$this->load->library("form_validation");
			
			$data["title"] = "Create";
			
			$this->form_validation->set_rules("title", "Title", "trim|required|min_length[5]|max_length[30]|xss_clean");
			$this->form_validation->set_rules("text", "text", "trim|required|min_length[10]|max_length[10000]|xss_clean");
			
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