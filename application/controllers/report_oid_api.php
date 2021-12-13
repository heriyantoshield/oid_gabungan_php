<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class report_oid_api extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('models');
	}

	public function search_report_update_status_pernikahan(){
        $link = 'getListReportOidGabunganIndividu';
        $search = array(
            "date_from" => strtoupper($this->input->post('date_from')),
            "date_to" => strtoupper($this->input->post('date_to')),
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

    public function search_detail_report_update_status_pernikahan(){
        $link = 'getDetailReportOidGabunganIndividu';
        $search = array(
            "nik_individu" => strtoupper($this->input->post('nik_individu')),
            "nik_pasangan" => strtoupper($this->input->post('nik_pasangan')),
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