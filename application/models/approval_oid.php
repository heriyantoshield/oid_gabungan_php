<?php
	class approval_oid extends CI_model {
		public function __construct(){
			parent::__construct();
		}

		public function crud_approval_oid($data, $link){
			$url = $this->config->item('java_approval_oid').$link;
			$ch = curl_init($url);
			$json = json_encode($data);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
			curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$result = curl_exec($ch);
			return $result;
		}

	}
?>