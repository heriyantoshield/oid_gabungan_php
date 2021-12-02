<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class approval_oid extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('models');
	}

	public function afiliasi_index()
	{
		$session_data['menu'] = [
			'approval_oid/manage_afiliasi'
		];
		$this->load->view('page/approval_oid/manage_afiliasi', $session_data);
	}

	public function group_index()
	{
		$session_data['menu'] = [
			'approval_oid/manage_group'
		];
		$this->load->view('page/approval_oid/manage_group', $session_data);
	}

	public function individu_index()
	{
		$session_data['menu'] = [
			'approval_oid/manage_oid_gabungan_individu'
		];
		$this->load->view('page/approval_oid/manage_oid_gabungan_individu', $session_data);
	}

	public function individu_report_status_pernikahan()
	{
		$this->load->view('page/approval_oid/report_status_pernikahan', $session_data);
	}

	public function hapus_member_group()
	{
		$this->load->view('page/approval_oid/hapus_member_group', $session_data);
	}

	public function add_group()
	{
		$this->load->view('page/approval_oid/add_group', $session_data);
	}

	public function update_status_pernikahan()
	{
		$this->load->modal('modal/update_status_pernikahan', $session_data);
	}

}