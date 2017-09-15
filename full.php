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
            <div class="col-xs-12">
				 <?php
                $a = new Area('Main');
                $a->setAreaGridMaximumColumns(12);
                $a->display($c);
                ?>
            </div>
        </div>
</div>


    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <?php
                $a = new Area('First');
                $a->setAreaGridMaximumColumns(12);
                $a->display($c);
                ?>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <?php
                $a = new Area('Second');
                $a->setAreaGridMaximumColumns(12);
                $a->display($c);
                ?>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <?php
                $a = new Area('Third');
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
