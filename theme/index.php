<?php
$title = 'Card Conjurer - Theme Editor';
$desc = 'Customize your experience by adjusting the look of Card Conjurer. Upload a background, adjust the lightness, or maybe discover what rainbow-mode is!';
include('../globalHTML/header-1.php');
?>
	<h2 class='readable-background header-extension title center'>Theme Editor</h2>
	<div class='layer center'></div>
	<div class='layer center'>
		<h1 class='margin-bottom'>Welcome to the theme editor!</h1>
		<h5>This feature is a bit of a work-in-progress</h5>
	</div>
	<div class='layer'></div>
	<div class='layer readable-background margin-bottom-large'>
		<h3>Background</h3>
		<h4>Choose a background</h4>
		<select class='input' onchange='changeThemeVar(this.value, "background");'>
			<option value='/img/lowpolyBackground.svg'>Lowpoly</option>
			<option value='/img/gradientBackground.svg'>Plain</option>
		</select>
		<h4>Enter a background image (URL ONLY)</h4>
		<input id='background-url' class='input' type='url' placeholder='Enter a URL' onchange='changeThemeVar(this.value, "background");'>
		<h4>Shift the Background's Hue</h4>
		<input id='hue-rotate' class='input' type='range' min='0' max='360' step='1' oninput='changeThemeVar(this.value, "huerotate");'>
		<h4>Enable/Set Rainbow Speed</h4>
		<input id='hue-rotate-auto' class='input' type='range' min='0' max='200' step='1' oninput='changeThemeVar(this.value, "rainbow");'>
		<h3 class='margin-top'>Readable Areas</h3>
		<h4>Adjust the Brightness</h4>
		<input id='readable-brightness' class='input' type='range' min='0' max='1' step='0.01' oninput='changeThemeVar(this.value, "readablebrightness");'>
		<button class='input margin-top' onclick='resetTheme();'>Reset Theme to Default</button>
	</div>
	<script defer src='/js/themeEditor.js'></script>
<?php include('../globalHTML/footer.php'); ?>