<h2>photo</h2>

<ul>
<?php foreach($photos as $photo): ?>
    <li>
-<?php echo $photo['title'] ; ?>

    </li>
    <?php endforeach ?>

</ul>

<h2>Photographes</h2>

<ul>
<?php foreach($authors as $authors): ?>
    <li>-
<?php echo $author['firstname'] ; ?>
<?php echo $author['lastname'] ; ?>

    </li>
    <?php endforeach ?>

</ul>
