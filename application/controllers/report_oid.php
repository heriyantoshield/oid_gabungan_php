<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class report_oid extends CI_Controller{
   public function individu_index()
	{
		$session_data['menu'] = [
			'report_oid/report_update_status_pernikahan'
		];
		$this->load->view('page/report_oid/report_update_status_pernikahan', $session_data);
	}
}