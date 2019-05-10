<?php

class data extends Controller {

	public function __construct() {
		
		parent::__construct();
	}

	public function header(){

		$htmlFIles = $this->model->getFilesIteratively(PHY_FLAT_URL . '3-Books/', $pattern = '/xhtml$/i');

		echo "<ul>";

		foreach ($htmlFIles as $file) {
			
			$data = file_get_contents($file);
			$data = preg_split('/\n/', $data);
			foreach ($data as $line) {

				if(preg_match('/<div data-bcode="(.*?)">/', $line, $matches)){
					$bookID = $matches[1];
				}

				if(preg_match('/<h1 class="title" data-language="(.*?)">(.*)<\/h1>/', $line, $matches)) {

					echo '<li bookid="' . $bookID . '" language="' . $matches[1] . '">' . $matches[2] . "</li>\n";
					continue;
				}
			}
		}

		echo "</ul>";
	}
	
}
?>
