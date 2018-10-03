<div class="container dynamic-page">
	<h2>Collection of Books</h2>
	<div class="row">
<?php foreach ($data as $file) { ?>
        <div class="col-md-2 booksCollection">
            <a href="<?=BASE_URL?>listing/toc/<?= $file ?>"><img src="<?=IMAGE_URL?>books/<?=$file?>.jpg" alt="Books images" /></a>
        </div>
<?php } ?>
    </div>
</div>