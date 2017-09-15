<!-- TEMPLATE CENTRALISED BACKGROUND IMAGE AS PER FANNY CHRISTIE V1 -->
	
	
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


<div class="container-fluid hidden-xs">
        	<div class="row">
				<div class="pageHeaderImage">
				</div>   
        	</div>
</div>

<br>
<section>
<div class="container">
        <div class="row">
            <div class="col-sm-12">
<!-- 	            <h1>All Work</h1> -->
				<?php
                $a = new GlobalArea('Projects Menu');
                $a->display();
                ?>
        </div>
        </div>
    </div>
</section>


<?php  $this->inc('elements/footer.php'); ?>
