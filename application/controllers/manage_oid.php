<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class manage_oid extends CI_Controller {
    public function individu_index()
	{
		$session_data['menu'] = [
			'approval_oid/manage_oid_gabungan_individu'
		];
		$this->load->view('page/manage_oid/manage_oid_gabungan_individu', $session_data);
	}
}

