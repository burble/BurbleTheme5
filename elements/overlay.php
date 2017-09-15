<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<!--OVERLAY FADEOUT-->
    <script type="text/javascript">
		$(window).load(function(i) {
		$('.overlay').delay(3000).fadeOut('8000');
		});
	</script>
	
<div class="overlay container container-table" style="height: 100%">
    <div class="row vertical-center-row" style="">
        <div class="text-center col-xs-12 col-sm-8-offset-2 " style="margin-top: 20%">
	        <img src="<?=$this->getThemePath()?>/images/DRF.png" width="350">
        </div>
    </div>
</div>
	