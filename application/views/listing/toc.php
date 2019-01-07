<div class="container dynamic-page">
	<!-- <h6>Table of content of</h6> -->
	<div class="row justify-content-center">
		<div class="col-md-7 toc">
			<?php 
				foreach ($data as $line) {

					if(preg_match('/<div data-bcode="(.*?)">/', $line, $matches)){
						$bookID = $matches[1];
					}

					if(preg_match('/<li page="(.*?)-(.*?)">(.*)<\/li>/', $line, $matches)){
						$pageNumber = $viewHelper->getRelativePage($bookID, $matches[1]);
						echo '<li><a href="' . PUBLIC_URL .  'pdf/' . $bookID . '.pdf#page=' . $pageNumber . '" target="_blank">' . $matches[3] . '</a></li>';
					}
					else
						echo $line . "\n";
				}
			?>
		</div>
		<div class="col-md-2">
			<img src="<?=PUBLIC_URL?>images/books/<?=$bookID?>.jpg" alt="images" />
		</div>
		<?php
			$copyrightDetails = $viewHelper->getcopyrightDetails($bookID);
		?>
		<div class="col-md-3 copyright">
			<dl>
			<?php foreach ($copyrightDetails as $key => $value) { ?>
				<dt><?=$key?></dt>
				<dd><?=$value?></dd>
			<?php } ?>
			</dl>

		</div>
	</div>