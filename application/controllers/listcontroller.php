<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ListController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data["title"] = 'Home - My ToDo-List';
		$this->load->view('header',$data);
	}

	public function view($id = null){

		$data["title"] = 'View - My ToDo-List';
		$this->load->view('header',$data);

		$data['item'] = $this->listmodel->view($id);

		$this->load->view('view',$data);
		$this->load->view('footer');
	}

	/*public function viewall(){
		$data["title"] = 'View All - My ToDo-List';
		$this->load->view('header',$data);

		$data['items'] = $this->listmodel->viewall();

		$this->load->view('viewall',$data);
		$this->load->view('footer');
	}*/
	
	public function viewall($offset = 0){
		$data["title"] = 'View All - My ToDo-List';
		$this->load->view('header',$data);
		
		$limit = 15;
		
		$this->load->model('listmodel');
		
		$results = $this->listmodel->search($limit, $offset);
		
		$data['items'] = $results['rows'];
		$data['num_results'] = $results['num_rows'];
		
		// pagination
		$this->load->library('pagination');
		
		$config = array();
		$config['base_url'] = site_url('listcontroller/viewall');
		$config['total_rows'] = $data['num_results'];
		$config['per_page'] = $limit;
		$config['uri_segment'] = 3;
		$this->pagination->initialize($config);
		
		$data['pagination'] = $this->pagination->create_links();
		
		$this->load->view('viewall',$data);
		$this->load->view('footer');
	}

	public function add(){
		$data["title"] = 'Add - My ToDo-List';
		$this->load->view('header',$data);

		$this->load->view('add');
		$this->load->view('footer');

		$todo = $this->input->post("todo",TRUE);
		$this->listmodel->add($todo);
	}

	public function delete($id = null){
		$data["title"] = 'Delete - My ToDo-List';
		$this->load->view('header',$data);

		$this->listmodel->delete($id);

		$this->load->view('delete');
		$this->load->view('footer');
	}
	
	public function done($id = null){		
		$data["title"] = 'Done - My ToDo-List';
		$this->load->view('header',$data);
		
		$text = $this->listmodel->view($id);
		$item = "<del style=\"color:#ccc\">" . $text[0]['item_name'] . "</del>";
		$this->listmodel->done($id,$item);		
		
		$this->load->view('done');
		$this->load->view('footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */