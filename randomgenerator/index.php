<!-- Copyright indiandragon, do not redistribute this code without the permission -->
<?php include 'header.php'; ?>
<title><?=FB_CONFIG_APP_NAME?></title>
<center><img src="<?=FB_CONFIG_LOGO_IMAGE?>" id="logo"/></center>
<p id="intro"><?=FB_MAIN_PAGE_INTRO?></p>

<center>
	<div id="grey-button">
		<a href="<?=html_root('generate.php?q=0')?>" class="grey-button pcb">
			<span><b><?=FB_CONFIG_BUTTON_NAME?></b></span>
		</a>
	</div>
</center>

<?php include 'footer.php'; ?>