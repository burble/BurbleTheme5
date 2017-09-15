<?php
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>


<main>

<section>
<div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
				<?php
                $a = new GlobalArea('Projects Menu');
                $a->display();
                ?>
        </div>
        </div>
    </div>
</section>

    <?php
    $a = new Area('Page Footer');
    $a->enableGridContainer();
    $a->display($c);
    ?>

</main>

<?php  $this->inc('elements/footer.php'); ?>
