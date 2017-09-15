<?php defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header_top.php');
$as = new GlobalArea('Header Search');
$blocks = $as->getTotalBlocksInArea();
$displayThirdColumn = $blocks > 0 || $c->isEditMode();
?>

<div class="<?php echo $c->getPageWrapperClass()?> <?php  echo $c->getCollectionTypeHandle() ?>" id="<?php echo $c->getCollectionID() ?>">
	
<header>
	<div id="topnavbar"> 
		 <div class="">
		 	<div class ="">		
					<div class="">		
									<?php
					                $a = new GlobalArea('Header Navigation');
					                $a->display();
					                ?>
			 		</div>
			</div> <!-- close row -->
		</div> <!-- close container -->

	    <div class="container">
	        <div class="row">			       
		            <div class="col-xs-12 text-center">				
							<img class="img-center" alt="Logo" width="62" height="36" src="<?=$this->getThemePath()?>/images/logo.png">
		            </div>
		            <div class="col-xs-12 hidden-md hidden-lg text-center">	
		            	<h6 class="small">020 7000 0000 / info@yourbrand.com</h6>
		            </div>
	        </div>
	    </div>
	</div>
</header>



