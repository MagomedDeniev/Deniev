<?php
$skills = [
    'html',
    'css',
    'php',
    'js',
    'sql',
    'github',
    'mongodb',
    'symfony',
    'joomla',
    'wordpress',
];
?>

<article>

    <a id="skills" class="anchor"> </a>
    <h1>Compétences</h1>

    <div class="skills">

        <div class="skills-list">

            <?php foreach ($skills as $value) { ?>

                <div class="skill">
                    <div class="skill-img" style="background-image: url('/assets/images/skills/<?= $value ?>.jpg')"></div>
                    <h4><?= strtoupper($value) ?></h4>
                </div>

            <?php } ?>

        </div>

    </div>

</article>
