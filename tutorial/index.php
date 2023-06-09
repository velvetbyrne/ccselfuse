<?php
$title = 'Card Conjurer - Tutorials';
$desc = 'Written guides on how to create a variety of custom Magic: The Gathering cards on Card Conjurer';
include('../globalHTML/header-1.php');
?>
	<div class='layer center'>
		<h2>Written Guides</h2>
	</div>
	<div class='readable-background layer margin-bottom-large'>
		<div class='tutorial-grid'>
			<img src='/img/tutorial/frame-tab.jpg'>
			<div>
				<h3 class='padding center margin-bottom-large'>Frame Tab</h3>
				<h5 class='padding'>Frame Groups & Frame Packs</h5>
				<p class='padding margin-bottom'>
					The dropdown menus are used to navigate through frame packs. Frame groups (left, currently "Regular") organize frame packs into general groups, whereas frame packs (right, currently "Regular Frames") contain the actual images and settings you'll use to create cards.
				</p>
				<h5 class='padding'>Loading Frame Versions</h5>
				<p class='padding margin-bottom'>
					Clicking "Load Frame Version", or selecting a frame pack when "Auto load" is checked, will set up the layouts associated with the current frame pack. These layouts include textbox placement, art placement, etc... If you wish to use a combination of images from different frame packs, I recommend un-checking "Auto load", and using the "Load Frame Version" button.
				</p>
				<h5 class='padding'>Adding images</h5>
				<p class='padding margin-bottom'>
					Once you select a frame image (left) and an image mask (right), you can click "Add Frame to Card" or "Add Frame to Card (Right Half)" to add the selected image. Image masks control which part of the image is displayed, and are useful for creating colored artifacts, multicolored cards, and much more. For more image-adding options, click on the dropdown menu "More options", which is located directly below the "Add Frame to Card" button. You can also double click images to add them, and can add them to the right/middle/left sections by holding certain keys (shift, ctrl, or alt).
				</p>
				<h5 class='padding'>Removing/Reordering Images</h5>
				<p class='padding margin-bottom'>
					When you add images, they're displayed below the frame/mask selection area. You can click the X to remove images, or click and drag on them to change the order in which they're drawn. You can also click on the images to bring up the "Frame Image Editor" for more customized adjustments.
				</p>
			</div>
		</div>
	</div>
	<div class='readable-background layer margin-bottom-large'>
		<div class='tutorial-grid'>
			<img src='/img/tutorial/text-tab.jpg'>
			<div>
				<h3 class='padding center margin-bottom'>Text Tab</h3>
				<h5 class='padding'>Selecting Textboxes</h5>
				<p class='padding margin-bottom'>
					Depending on which frame version is currently loaded, you'll have several textboxes to choose from. Simply click on them, then enter the card text.
				</p>
				<h5 class='padding'>Text Codes</h5>
				<p class='padding margin-bottom'>
					Text codes are used to display mana symbols, change font size, etc... Near the bottom of the text tab, click on "Text Code / Mana Symbol Code Reference" to view all the available text codes and their descriptions. Make sure to always surround your text codes with curly brackets, as seen in the example (see image).
				</p>
				<h5 class='padding'>Adding Textboxes</h5>
				<p class='padding margin-bottom'>
					If you'd like additional textboxes, you can add them by clicking the buttons at the bottom of the text tab.
				</p>
				<h5 class='padding'>Custom Adjustments</h5>
				<p class='padding margin-bottom'>
					Below the "Enter card text" area, there's an "Edit Bounds" button. Clicking this will reveal the "Textbox Editor", where you can adjust the size and placement of your currently selected textbox.
				</p>
			</div>
		</div>
	</div>
<?php include('../globalHTML/footer.php'); ?>