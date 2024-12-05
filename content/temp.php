<?php

// Get the name fr. GET-query, or die...
$query = $_GET['query'] ?? null;


if (!$query) {
    die('Vänligen ange att objektnummer i querysträngen.');
}
$resolution = '';
$image = "image/{$query}.jpg{$resolution}";
// Image

// For navigation:
$prev_query = $query - 1;
$next_query = $query + 1;
?>
<nav class="object_nav">
    <a href="<?= $prev_query > 0 ? "objekt.php?query=$prev_query" : "#"?>">
        <?= $prev_query > 0 ? "Föregående objekt" : "Första objektet" ?>
    </a>
    <a href="<?= $next_query < 31 ? "objekt.php?query=$next_query" : "#"?>">
        <?= $next_query < 31 ? "Nästa objekt" : "Sista objektet" ?>
    </a>
</nav>
<?php

echo <<<ARTICLE
    <section class="image">
        <h2>{$image_title}</h2>
        <figure>
            <img srcset="img/80/{$image_name} 80w,
                        img/250/{$image_name} 250w,
                        img/550/{$image_name} 550w,
                        img/full-size/{$image_name} 900w"
                sizes="(max-width: 250px) 80px,
                        (max-width: 760px) 250px,
                        (max-width: 1500px) 550px,
                        900px"
                src="img/550/{$image_name}" 
                alt="{$image_title}">
            <figcaption class="fineprint">
                {$image_text}
            </figcaption>
        </figure>
    </section>
ARTICLE;
?>
