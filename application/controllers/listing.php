<?php

class listing extends Controller {

	public function __construct() {

		parent::__construct();
	}

	public function books() {

		$books = $this->model->getBookslist();
		($books) ? $this->view('listing/books', $books) : $this->view('error/index');
	}

	public function toc($bookID){

		(file_exists(PHY_FLAT_URL . '3-Books/' . $bookID . '.xhtml')) ? $this->view('listing/toc', file(PHY_FLAT_URL . '3-Books/' . $bookID . '.xhtml')) : $this->view('error/index');
	}
}
?>
