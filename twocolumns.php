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
<div id="loggedinpadding"></div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-3 col-content">
				<!--<h2 class="text-uppercase"><?php echo $c->getCollectionName() ?></h2> -->
                <?php
                $a = new Area('Left Column');
                $a->setAreaGridMaximumColumns(12);
                $a->display($c);
                ?>
            </div>
             <div class="col-xs-12 col-md-9 col-content">
				<!--<h2 class="text-uppercase"><?php echo $c->getCollectionName() ?></h2> -->
                <?php
                $a = new Area('Right Column');
                $a->setAreaGridMaximumColumns(12);
                $a->display($c);
                ?>
            </div>
        </div>
        <hr>
       <div class="row">
            <div class="col-xs-12 col-md-3 col-content">
				<!--<h2 class="text-uppercase"><?php echo $c->getCollectionName() ?></h2> -->
                <?php
                $a = new Area('Left Column Lower');
                $a->setAreaGridMaximumColumns(12);
                $a->display($c);
                ?>
            </div>
             <div class="col-xs-12 col-md-9 col-content">
				<!--<h2 class="text-uppercase"><?php echo $c->getCollectionName() ?></h2> -->
                <?php
                $a = new Area('Right Column Lower');
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
