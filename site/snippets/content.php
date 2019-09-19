<h1><?= $page->title() ?></h1>

<p><?= $page->description()->html() ?></p>

<?php foreach ($page->images() as $image): ?>

    <img src="<?= $image->url() ?>" />
   
<?php endforeach ?>
