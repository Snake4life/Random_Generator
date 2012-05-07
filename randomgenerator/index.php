/*Copyright 2012 indiandragon

This file is part of Random Generator Facebook application.

Random Generator is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

Random Generator is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Random Generator.  If not, see <http://www.gnu.org/licenses/>.*/
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