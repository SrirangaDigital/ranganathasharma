<?php

class listingModel extends Model {

	public function __construct() {

		parent::__construct();
	}

	public function getBookslist(){

		$data = [];
		$files = $this->getFilesIteratively(PHY_FLAT_URL . '3-Books/', $pattern = '/xhtml$/i');

		foreach ($files as $file) {
			
			(preg_match('/.*\/(.*?)\.xhtml/', $file, $matches) ? array_push($data, $matches[1]) : array_push($data, 'Not Found'));
		}
		return $data;
	}
}
