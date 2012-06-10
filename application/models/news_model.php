<?
	class News_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}
		
		public function get_news($slug = FALSE){
			if($slug === FALSE){
				$this->db->order_by("id", "desc"); //first, order by id.
				$query = $this->db->get("news"); //get all
				return $query->result_array();
			}
			
			$this->db->order_by("id", "desc");
			$query = $this->db->get_where("news", array("slug" => $slug));
			return $query->row_array();
		}
		public function set_news(){
			$this->load->helper("url");
			
			$slug = url_title($this->input->post("title"), "dash", TRUE);
			
			$data = array(
				"title" => $this->input->post("title"),
				"slug" => $slug,
				"text" => $this->input->post("text")
			);
			
			return $this->db->insert("news", $data);
		}
	}
?>