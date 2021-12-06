<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class report_oid_api extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('models');
	}

	public function search_list_update_status_pernikahan(){
        $link = 'getListUpdateStatusPernikahan';
        $search = array(
            "nik_oid_gabungan_individu" => strtoupper($this->input->post('nik_oid_gabungan_individu'))
        );
        // var_dump($search);
        // exit;
        $data = $this->models->crud_approval_oid($search, $link);

        if (strpos($data, 'Execution exception') > 0)
            $this->output->set_output("timeout");
        else
        {
            $this->output->set_content_type('application/json');
            $this->output->set_output(json_encode($data));
        }
    }

}