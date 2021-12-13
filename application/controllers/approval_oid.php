<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class approval_oid extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('models');
	}

	public function individu_index()
	{
		$session_data['menu'] = [
			'approval_oid/approval_oid_gabungan_individu'
		];
		$this->load->view('page/approval_oid/approval_oid_gabungan_individu', $session_data);
	}

	
	public function approval_update_status_pernikahan()
	{
		$session_data['menu'] = [
			'approval_oid/approval_update_status_pernikahan'
		];
		$this->load->view('page/approval_oid/approval_update_status_pernikahan', $session_data);
	}


}