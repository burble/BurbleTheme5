<?php
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>

<?php 
$backgroundImage = $c->getAttribute('page_header_image');
if ($backgroundImage) {
    $backgroundImageURL = $backgroundImage->getURL();
    echo '<style type="text/css">.pageHeaderImage {background-image:url(' . $backgroundImageURL . ');background-position: center;}</style>';
}
?>
<main>
<!--
    <?php
    $a = new Area('Page Header');
    $a->enableGridContainer();
    $a->display($c);
    ?>
-->

<!--
 <div class="container-fluid hidden-xs">
        	<div class="row">
				<div class="pageHeaderImage" data-uk-parallax="{opacity: '0'}">				</div>   
									

        	</div>
</div>
-->

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-content">
				
			<h1 class="text-uppercase"><?php echo $c->getCollectionName() ?></h1>
			<h2 class=""><?php echo $c->getCollectionDescription() ?></h2>
				<hr>
				<div class="row">
					<div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-4 col-md-4 col-content text-justify">
						<?php
		                $a = new Area('Description Text');
		                $a->setAreaGridMaximumColumns(12);
		                $a->display($c);
		                ?>
				
						<?php
		                $a = new Area('Project Details');
		                $a->setAreaGridMaximumColumns(12);
		                $a->display($c);
		                ?>
					</div>
				</div>
                <hr>
                <br>
            </div>
        </div>
    </div>
  
  <section>
     <div class="container">
        <div class="row">	        
            <div class="col-sm-12 col-content">				 
                <?php
                $a = new Area('Gallery');
                $a->setAreaGridMaximumColumns(12);
                $a->display($c);
                ?>
            </div>
        </div>
        <div class="row">
                	<div class="col-xs-12">
					<?php
	                $a = new GlobalArea('Next Previous');
	                $a->display();
	                ?>
					</div>
		</div>
    </div>
	<section>

</main>

<?php  $this->inc('elements/footer.php'); ?>
