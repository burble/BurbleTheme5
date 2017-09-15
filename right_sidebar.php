<?php
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>

<main>
    <?php
    $a = new Area('Page Header');
    $a->enableGridContainer();
    $a->display($c);
    ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-7 col-content">
	           <div style="height: 20px"></div>
	           <h1><?php echo $c->getCollectionName() ?></h1>
	           <hr>
                <?php
                $a = new Area('Main');
                $a->setAreaGridMaximumColumns(12);
                $a->display($c);
                ?>
            </div>
            <div class="col-sm-offset-1 col-sm-4 col-sidebar">
	           	<div style="height: 20px"></div>
			   	<h1 align="center">News</h1>
			   	<hr>
                <?php
                $a = new Area('Sidebar');
                $a->display($c);
                $a = new Area('Sidebar Footer');
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
