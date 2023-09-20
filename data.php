<?php 
$bodyClass="data graybg font1";
include "includes/head.php"; 
$data = $mice->getData();
?>

<div id="mobile"></div>
    <h1 class="fw900 uppercase center title"><img src="img/btalogo.svg" width="200" /><span>¿Por qué bogotá?</span></h1>
    <section class="column flex w_100">
        <div class="container">
            <?php for($i=0;$i<count($data);$i++){ ?>
            <article class="w_25 graybg">
                <img src="<?php echo $mice->absoluteURL($data[$i]->field_thumbnail); ?>" alt="<?php echo $data[$i]->title; ?>" />
                <h2 class="fw900 uppercase"><?php echo $data[$i]->field_highlight; ?></h2>
                <p><?php echo $data[$i]->field_title; ?></p>
            </article>
                <?php } ?>
            </div>
        </section>

<? include 'includes/imports.php'?>