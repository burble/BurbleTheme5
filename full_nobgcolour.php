<?php
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>


<main>
<!--
    <?php
    $a = new Area('Page Header');
    $a->enableGridContainer();
    $a->display($c);
    ?>
-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-content">
				<!--<h2 class="text-uppercase"><?php echo $c->getCollectionName() ?></h2> -->
				

<!--
				<?php
                $a = new Area('Page Title');
                $a->setAreaGridMaximumColumns(12);
                $a->display($c);
                ?>
				
-->
				
                <?php
                $a = new Area('Main');
                $a->setAreaGridMaximumColumns(12);
                $a->display($c);
                ?>
            </div>
        </div>
    </div>

    <?php
    $a = new Area('Page Footer');
    $a->enableGridContainer();
    $a->display($c);
    ?>

</main>

<?php  $this->inc('elements/footer.php'); ?>
