<?php
class Pages extends CI_Controller {

        public function view($page = 'home')
        {
        	// if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
	        // {
	        //         // Whoops, we don't have a page for that!
	        //         show_404();
	        // }

	        $data['title'] = ucfirst($page); // Capitalize the first letter
	        // $data['content'] = "items/index";
	        $data['content'] = "dashboard/index";
	        $this->load->view('dashboard/dashboard', $data);
	        // $this->load->view('pages/'.$page, $data);
	        // $this->load->view('templates/footer', $data);
        }
}