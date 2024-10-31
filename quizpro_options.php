<?php

function quizpro_options()
{	
	?>
	<div class="wrap">
	<h2>QuizPro Options</h2>
	
	<form method="post" action="options.php">
	<?php wp_nonce_field('update-options'); ?>
	<br>
	<table class="wide" style="text-align: left; white-space: nowrap;">
	<tr valign="top">
	<th scope="row">Message Displayed Before The Quiz</th>
	<td>
	<input type="text" size="80" name="quizpro_quiz_above_message" value="<?php echo get_option('quizpro_quiz_above_message'); ?>" />
	</td>
	</tr>
	<tr valign="top">
	<th scope="row">Message Displayed After Taking Quiz</th>
	<td>
	<input type="text" size="80" name="quizpro_completion_message" value="<?php echo get_option('quizpro_completion_message'); ?>" />
	</td>
	</tr>
	</table>
	<br>
	<table class="wide" style="text-align: left; white-space: nowrap;">
	
	<tr valign="top">
	<th scope="row">Font Size</th>
	<td>
	<input type="number" step="2" min="16" name="quizpro_font_size_label" value="<?php echo get_option('quizpro_font_size_label'); ?>" />
	</td>
	</tr>
	<tr valign="top">
	<th scope="row">Font Face</th>
	<td>
	<input type="text" size="30" name="quizpro_font_face_label" value="<?php echo get_option('quizpro_font_face_label'); ?>" />
	</td>
	</tr>
	
	<tr valign="top">
	<th scope="row">Font Color</th>
	<td>
	<select name="quizpro_font_color_label" onchange = "this.form.submit();"><?php  $option_font = get_option('quizpro_font_color_label') ?>
		<option value='AliceBlue' <?php if( $option_font == 'AliceBlue'){ echo 'selected'; } ?>>Alice Blue</option>
		<option value='AntiqueWhite' <?php if( $option_font == 'AntiqueWhite'){ echo 'selected'; } ?>>Antique White</option>
		<option value='Aqua' <?php if( $option_font == 'Aqua'){ echo 'selected'; } ?>>Aqua</option>
		<option value='AquaMarine' <?php if( $option_font == 'AquaMarine'){ echo 'selected'; } ?>>Aqua Marine</option>
		<option value='Azure' <?php if( $option_font == 'Azure'){ echo 'selected'; } ?>>Azure</option>
		<option value='Beige' <?php if( $option_font == 'Beige'){ echo 'selected'; } ?>>Beige</option>
		<option value='Bisque' <?php if( $option_font == 'Bisque'){ echo 'selected'; } ?>>Bisque</option>
		<option value='Black' <?php if( $option_font == 'Black'){ echo 'selected'; } ?>>Black</option>
		<option value='BlanchedAlmond' <?php if( $option_font == 'BlanchedAlmond'){ echo 'selected'; } ?>>Blanched Almond</option>
		<option value='Blue' <?php if( $option_font == 'Blue'){ echo 'selected'; } ?>>Blue</option>
		<option value='BlueViolet' <?php if( $option_font == 'BlueViolet'){ echo 'selected'; } ?>>Blue Violet</option>
		<option value='Brown' <?php if( $option_font == 'Brown'){ echo 'selected'; } ?>>Brown</option>
		<option value='BurlyWood' <?php if( $option_font == 'BurlyWood'){ echo 'selected'; } ?>>Burly Wood</option>
		<option value='CadetBlue' <?php if( $option_font == 'CadetBlue'){ echo 'selected'; } ?>>Cadet Blue</option>
		<option value='Chartreuse' <?php if( $option_font == 'Chartreuse'){ echo 'selected'; } ?>>Chartreuse</option>
		<option value='Chocolate' <?php if( $option_font == 'Chocolate'){ echo 'selected'; } ?>>Chocolate</option>
		<option value='Coral' <?php if( $option_font == 'Coral'){ echo 'selected'; } ?>>Coral</option>
		<option value='CornFlowerBlue' <?php if( $option_font == 'CornFlowerBlue'){ echo 'selected'; } ?>>Corn Flower Blue</option>
		<option value='Cornsilk' <?php if( $option_font == 'Cornsilk'){ echo 'selected'; } ?>>Cornsilk</option>
		<option value='Crimson' <?php if( $option_font == 'Crimson'){ echo 'selected'; } ?>>Crimson</option>
		<option value='Cyan' <?php if( $option_font == 'Cyan'){ echo 'selected'; } ?>>Cyan</option>
		<option value='DarkBlue' <?php if( $option_font == 'DarkBlue'){ echo 'selected'; } ?>>Dark Blue</option>
		<option value='DarkCyan' <?php if( $option_font == 'DarkCyan'){ echo 'selected'; } ?>>Dark Cyan</option>
		<option value='DarkGoldenRod' <?php if( $option_font == 'DarkGoldenRod'){ echo 'selected'; } ?>>Dark Golden Rod</option>
		<option value='DarkGray' <?php if( $option_font == 'DarkGray'){ echo 'selected'; } ?>>Dark Gray</option>
		<option value='DarkGreen' <?php if( $option_font == 'DarkGreen'){ echo 'selected'; } ?>>Dark Green</option>
		<option value='DarkKhaki' <?php if( $option_font == 'DarkKhaki'){ echo 'selected'; } ?>>Dark Khaki</option>
		<option value='DarkMagenta' <?php if( $option_font == 'DarkMagenta'){ echo 'selected'; } ?>>Dark Magenta</option>
		<option value='DarkOliveGreen' <?php if( $option_font == 'DarkOliveGreen'){ echo 'selected'; } ?>>Dark Olive Green</option>
		<option value='DarkOrange' <?php if( $option_font == 'DarkOrange'){ echo 'selected'; } ?>>Dark Orange</option>
		<option value='DarkOrchid' <?php if( $option_font == 'DarkOrchid'){ echo 'selected'; } ?>>Dark Orchid</option>
		<option value='DarkRed' <?php if( $option_font == 'DarkRed'){ echo 'selected'; } ?>>Dark Red</option>
		<option value='DarkSalmon' <?php if( $option_font == 'DarkSalmon'){ echo 'selected'; } ?>>Dark Salmon</option>
		<option value='DarkSeaGreen' <?php if( $option_font == 'DarkSeaGreen'){ echo 'selected'; } ?>>Dark Sea Green</option>
		<option value='DarkSlateBlue' <?php if( $option_font == 'DarkSlateBlue'){ echo 'selected'; } ?>>Dark Slate Blue</option>
		<option value='DarkSlateGray' <?php if( $option_font == 'DarkSlateGray'){ echo 'selected'; } ?>>Dark Slate Gray</option>
		<option value='DarkTurquoise' <?php if( $option_font == 'DarkTurquoise'){ echo 'selected'; } ?>>Dark Turquoise</option>
		<option value='DarkViolet' <?php if( $option_font == 'DarkViolet'){ echo 'selected'; } ?>>Dark Violet</option>
		<option value='DeepPink' <?php if( $option_font == 'DeepPink'){ echo 'selected'; } ?>>Deep Pink</option>
		<option value='DeepSkyBlue' <?php if( $option_font == 'DeepSkyBlue'){ echo 'selected'; } ?>>Deep Sky Blue</option>
		<option value='DimGray' <?php if( $option_font == 'DimGray'){ echo 'selected'; } ?>>Dim Gray</option>
		<option value='DodgerBlue' <?php if( $option_font == 'DodgerBlue'){ echo 'selected'; } ?>>Dodger Blue</option>
		<option value='FireBrick' <?php if( $option_font == 'FireBrick'){ echo 'selected'; } ?>>Fire Brick</option>
		<option value='FloralWhite' <?php if( $option_font == 'FloralWhite'){ echo 'selected'; } ?>>Floral White</option>
		<option value='ForestGreen' <?php if( $option_font == 'ForestGreen'){ echo 'selected'; } ?>>Forest Green</option>
		<option value='Fuchsia' <?php if( $option_font == 'Fuchsia'){ echo 'selected'; } ?>>Fuchsia</option>
		<option value='Gainsboro' <?php if( $option_font == 'Gainsboro'){ echo 'selected'; } ?>>Gainsboro</option>
		<option value='GhostWhite' <?php if( $option_font == 'GhostWhite'){ echo 'selected'; } ?>>Ghost White</option>
		<option value='Gold' <?php if( $option_font == 'Gold'){ echo 'selected'; } ?>>Gold</option>
		<option value='GoldenRod' <?php if( $option_font == 'GoldenRod'){ echo 'selected'; } ?>>Golden Rod</option>
		<option value='Gray' <?php if( $option_font == 'Gray'){ echo 'selected'; } ?>>Gray</option>
		<option value='Green' <?php if( $option_font == 'Green'){ echo 'selected'; } ?>>Green</option>
		<option value='GreenYellow' <?php if( $option_font == 'GreenYellow'){ echo 'selected'; } ?>>Green Yellow</option>
		<option value='HoneyDew' <?php if( $option_font == 'HoneyDew'){ echo 'selected'; } ?>>Honey Dew</option>
		<option value='HotPink' <?php if( $option_font == 'HotPink'){ echo 'selected'; } ?>>HotPink</option>
		<option value='IndianRed' <?php if( $option_font == 'IndianRed'){ echo 'selected'; } ?>>Indian Red</option>
		<option value='Indigo' <?php if( $option_font == 'Indigo'){ echo 'selected'; } ?>>Indigo</option>
		<option value='Ivory' <?php if( $option_font == 'Ivory'){ echo 'selected'; } ?>>Ivory</option>
		<option value='Khaki' <?php if( $option_font == 'Khaki'){ echo 'selected'; } ?>>Khaki</option>
		<option value='Lavender' <?php if( $option_font == 'Lavender'){ echo 'selected'; } ?>>Lavender</option>
		<option value='LavenderBlush' <?php if( $option_font == 'LavenderBlush'){ echo 'selected'; } ?>>Lavender Blush</option>
		<option value='LawnGreen' <?php if( $option_font == 'LawnGreen'){ echo 'selected'; } ?>>Lawn Green</option>
		<option value='LemonChiffon' <?php if( $option_font == 'LemonChiffon'){ echo 'selected'; } ?>>Lemon Chiffon</option>
		<option value='LightBlue' <?php if( $option_font == 'LightBlue'){ echo 'selected'; } ?>>Light Blue</option>
		<option value='LightCoral' <?php if( $option_font == 'LightCoral'){ echo 'selected'; } ?>>Light Coral</option>
		<option value='LightCyan' <?php if( $option_font == 'LightCyan'){ echo 'selected'; } ?>>Light Cyan</option>
		<option value='LightGoldenrodYellow' <?php if( $option_font == 'LightGoldenrodYellow'){ echo 'selected'; } ?>>Light Goldenrod Yellow</option>
		<option value='LightGray' <?php if( $option_font == 'LightGray'){ echo 'selected'; } ?>>Light Gray</option>
		<option value='LightGreen' <?php if( $option_font == 'LightGreen'){ echo 'selected'; } ?>>Light Green</option>
		<option value='LightPink' <?php if( $option_font == 'LightPink'){ echo 'selected'; } ?>>Light Pink</option>
		<option value='LightSalmon' <?php if( $option_font == 'LightSalmon'){ echo 'selected'; } ?>>Light Salmon</option>
		<option value='LightSeaGreen' <?php if( $option_font == 'LightSeaGreen'){ echo 'selected'; } ?>>Light Sea Green</option>
		<option value='LightSkyBlue' <?php if( $option_font == 'LightSkyBlue'){ echo 'selected'; } ?>>Light Sky Blue</option>
		<option value='LightSlateGray' <?php if( $option_font == 'LightSlateGray'){ echo 'selected'; } ?>>Light Slate Gray</option>
		<option value='LightSteelBlue' <?php if( $option_font == 'LightSteelBlue'){ echo 'selected'; } ?>>Light Steel Blue</option>
		<option value='LightYellow' <?php if( $option_font == 'LightYellow'){ echo 'selected'; } ?>>Light Yellow</option>
		<option value='Lime' <?php if( $option_font == 'Lime'){ echo 'selected'; } ?>>Lime</option>
		<option value='LimeGreen' <?php if( $option_font == 'LimeGreen'){ echo 'selected'; } ?>>Lime Green</option>
		<option value='Linen' <?php if( $option_font == 'Linen'){ echo 'selected'; } ?>>Linen</option>
		<option value='Magenta' <?php if( $option_font == 'Magenta'){ echo 'selected'; } ?>>Magenta</option>
		<option value='Maroon' <?php if( $option_font == 'Maroon'){ echo 'selected'; } ?>>Maroon</option>
		<option value='MediumAquaMarine' <?php if( $option_font == 'MediumAquaMarine'){ echo 'selected'; } ?>>Medium Aqua Marine</option>
		<option value='MediumBlue' <?php if( $option_font == 'MediumBlue'){ echo 'selected'; } ?>>Medium Blue</option>
		<option value='MediumOrchid' <?php if( $option_font == 'MediumOrchid'){ echo 'selected'; } ?>>Medium Orchid</option>
		<option value='MediumPurple' <?php if( $option_font == 'MediumPurple'){ echo 'selected'; } ?>>Medium Purple</option>
		<option value='MediumSeaGreen' <?php if( $option_font == 'MediumSeaGreen'){ echo 'selected'; } ?>>Medium Sea Green</option>
		<option value='MediumSlateBlue' <?php if( $option_font == 'MediumSlateBlue'){ echo 'selected'; } ?>>Medium Slate Blue</option>
		<option value='MediumSpringGreen' <?php if( $option_font == 'MediumSpringGreen'){ echo 'selected'; } ?>>Medium Spring Green</option>
		<option value='MediumTurquoise' <?php if( $option_font == 'MediumTurquoise'){ echo 'selected'; } ?>>Medium Turquoise</option>
		<option value='MediumVioletRed' <?php if( $option_font == 'MediumVioletRed'){ echo 'selected'; } ?>>Medium VioletRed</option>
		<option value='MidnightBlue' <?php if( $option_font == 'MidnightBlue'){ echo 'selected'; } ?>>Midnight Blue</option>
		<option value='MintCream' <?php if( $option_font == 'MintCream'){ echo 'selected'; } ?>>Mint Cream</option>
		<option value='MistyRose' <?php if( $option_font == 'MistyRose'){ echo 'selected'; } ?>>Misty Rose</option>
		<option value='Moccasin' <?php if( $option_font == 'Moccasin'){ echo 'selected'; } ?>>Moccasin</option>
		<option value='NavajoWhite' <?php if( $option_font == 'NavajoWhite'){ echo 'selected'; } ?>>Navajo White</option>
		<option value='Navy' <?php if( $option_font == 'Navy'){ echo 'selected'; } ?>>Navy</option>
		<option value='OldLace' <?php if( $option_font == 'OldLace'){ echo 'selected'; } ?>>Old Lace</option>
		<option value='Olive' <?php if( $option_font == 'Olive'){ echo 'selected'; } ?>>Olive</option>
		<option value='OliveDrab' <?php if( $option_font == 'OliveDrab'){ echo 'selected'; } ?>>Olive Drab</option>
		<option value='Orange' <?php if( $option_font == 'Orange'){ echo 'selected'; } ?>>Orange</option>
		<option value='OrangeRed' <?php if( $option_font == 'OrangeRed'){ echo 'selected'; } ?>>Orange Red</option>
		<option value='Orchid' <?php if( $option_font == 'Orchid'){ echo 'selected'; } ?>>Orchid</option>
		<option value='PaleGoldenRod' <?php if( $option_font == 'PaleGoldenRod'){ echo 'selected'; } ?>>Pale Golden Rod</option>
		<option value='PaleGreen' <?php if( $option_font == 'PaleGreen'){ echo 'selected'; } ?>>Pale Green</option>
		<option value='PaleTurquoise' <?php if( $option_font == 'PaleTurquoise'){ echo 'selected'; } ?>>Pale Turquoise</option>
		<option value='PaleVioletRed' <?php if( $option_font == 'PaleVioletRed'){ echo 'selected'; } ?>>Pale VioletRed</option>
		<option value='PapayaWhip' <?php if( $option_font == 'PapayaWhip'){ echo 'selected'; } ?>>Papaya Whip</option>
		<option value='PeachPuff' <?php if( $option_font == 'PeachPuff'){ echo 'selected'; } ?>>Peach Puff</option>
		<option value='Peru' <?php if( $option_font == 'Peru'){ echo 'selected'; } ?>>Peru</option>
		<option value='Pink' <?php if( $option_font == 'Pink'){ echo 'selected'; } ?>>Pink</option>
		<option value='Plum' <?php if( $option_font == 'Plum'){ echo 'selected'; } ?>>Plum</option>
		<option value='PowderBlue' <?php if( $option_font == 'PowderBlue'){ echo 'selected'; } ?>>Powder Blue</option>
		<option value='Purple' <?php if( $option_font == 'Purple'){ echo 'selected'; } ?>>Purple</option>
		<option value='Red' <?php if( $option_font == 'Red'){ echo 'selected'; } ?>>Red</option>
		<option value='RosyBrown' <?php if( $option_font == 'RosyBrown'){ echo 'selected'; } ?>>Rosy Brown</option>
		<option value='RoyalBlue' <?php if( $option_font == 'RoyalBlue'){ echo 'selected'; } ?>>Royal Blue</option>
		<option value='SaddleBrown' <?php if( $option_font == 'SaddleBrown'){ echo 'selected'; } ?>>Saddle Brown</option>
		<option value='Salmon' <?php if( $option_font == 'Salmon'){ echo 'selected'; } ?>>Salmon</option>
		<option value='SandyBrown' <?php if( $option_font == 'SandyBrown'){ echo 'selected'; } ?>>Sandy Brown</option>
		<option value='SeaGreen' <?php if( $option_font == 'SeaGreen'){ echo 'selected'; } ?>>Sea Green</option>
		<option value='SeaShell' <?php if( $option_font == 'SeaShell'){ echo 'selected'; } ?>>Sea Shell</option>
		<option value='Sienna' <?php if( $option_font == 'Sienna'){ echo 'selected'; } ?>>Sienna</option>
		<option value='Silver' <?php if( $option_font == 'Silver'){ echo 'selected'; } ?>>Silver</option>
		<option value='SkyBlue' <?php if( $option_font == 'SkyBlue'){ echo 'selected'; } ?>>Sky Blue</option>
		<option value='SlateBlue' <?php if( $option_font == 'SlateBlue'){ echo 'selected'; } ?>>Slate Blue</option>
		<option value='SlateGray' <?php if( $option_font == 'SlateGray'){ echo 'selected'; } ?>>Slate Gray</option>
		<option value='Snow' <?php if( $option_font == 'Snow'){ echo 'selected'; } ?>>Snow</option>
		<option value='SpringGreen' <?php if( $option_font == 'SpringGreen'){ echo 'selected'; } ?>>Spring Green</option>
		<option value='SteelBlue' <?php if( $option_font == 'SteelBlue'){ echo 'selected'; } ?>>Steel Blue</option>
		<option value='Tan' <?php if( $option_font == 'Tan'){ echo 'selected'; } ?>>Tan</option>
		<option value='Teal' <?php if( $option_font == 'Teal'){ echo 'selected'; } ?>>Teal</option>
		<option value='Thistle' <?php if( $option_font == 'Thistle'){ echo 'selected'; } ?>>Thistle</option>
		<option value='Tomato' <?php if( $option_font == 'Tomato'){ echo 'selected'; } ?>>Tomato</option>
		<option value='Turquoise' <?php if( $option_font == 'Turquoise'){ echo 'selected'; } ?>>Turquoise</option>
		<option value='Violet' <?php if( $option_font == 'Violet'){ echo 'selected'; } ?>>Violet</option>
		<option value='Wheat' <?php if( $option_font == 'Wheat'){ echo 'selected'; } ?>>Wheat</option>
		<option value='White' <?php if( $option_font == 'White'){ echo 'selected'; } ?>>White</option>
		<option value='WhiteSmoke' <?php if( $option_font == 'WhiteSmoke'){ echo 'selected'; } ?>>White Smoke</option>
		<option value='Yellow' <?php if( $option_font == 'Yellow'){ echo 'selected'; } ?>>Yellow</option>
		<option value='YellowGreen' <?php if( $option_font == 'YellowGreen'){ echo 'selected'; } ?>>Yellow Green</option>
	</select>
	</td>
	<td width ="40"><table border="1" cellpadding="12" bgcolor="white"><tr><td bgcolor="<?php echo get_option('quizpro_font_color_label'); ?>"></td></tr></table></td>
	</tr>
	<tr valign="top">
	<th scope="row">Color for the Questions</th>
	<td>
	<select name="quizpro_question_color" onchange = "this.form.submit();"><?php  $option_font = get_option('quizpro_question_color') ?>
		<option value='AliceBlue' <?php if( $option_font == 'AliceBlue'){ echo 'selected'; } ?>>Alice Blue</option>
		<option value='AntiqueWhite' <?php if( $option_font == 'AntiqueWhite'){ echo 'selected'; } ?>>Antique White</option>
		<option value='Aqua' <?php if( $option_font == 'Aqua'){ echo 'selected'; } ?>>Aqua</option>
		<option value='AquaMarine' <?php if( $option_font == 'AquaMarine'){ echo 'selected'; } ?>>Aqua Marine</option>
		<option value='Azure' <?php if( $option_font == 'Azure'){ echo 'selected'; } ?>>Azure</option>
		<option value='Beige' <?php if( $option_font == 'Beige'){ echo 'selected'; } ?>>Beige</option>
		<option value='Bisque' <?php if( $option_font == 'Bisque'){ echo 'selected'; } ?>>Bisque</option>
		<option value='Black' <?php if( $option_font == 'Black'){ echo 'selected'; } ?>>Black</option>
		<option value='BlanchedAlmond' <?php if( $option_font == 'BlanchedAlmond'){ echo 'selected'; } ?>>Blanched Almond</option>
		<option value='Blue' <?php if( $option_font == 'Blue'){ echo 'selected'; } ?>>Blue</option>
		<option value='BlueViolet' <?php if( $option_font == 'BlueViolet'){ echo 'selected'; } ?>>Blue Violet</option>
		<option value='Brown' <?php if( $option_font == 'Brown'){ echo 'selected'; } ?>>Brown</option>
		<option value='BurlyWood' <?php if( $option_font == 'BurlyWood'){ echo 'selected'; } ?>>Burly Wood</option>
		<option value='CadetBlue' <?php if( $option_font == 'CadetBlue'){ echo 'selected'; } ?>>Cadet Blue</option>
		<option value='Chartreuse' <?php if( $option_font == 'Chartreuse'){ echo 'selected'; } ?>>Chartreuse</option>
		<option value='Chocolate' <?php if( $option_font == 'Chocolate'){ echo 'selected'; } ?>>Chocolate</option>
		<option value='Coral' <?php if( $option_font == 'Coral'){ echo 'selected'; } ?>>Coral</option>
		<option value='CornFlowerBlue' <?php if( $option_font == 'CornFlowerBlue'){ echo 'selected'; } ?>>Corn Flower Blue</option>
		<option value='Cornsilk' <?php if( $option_font == 'Cornsilk'){ echo 'selected'; } ?>>Cornsilk</option>
		<option value='Crimson' <?php if( $option_font == 'Crimson'){ echo 'selected'; } ?>>Crimson</option>
		<option value='Cyan' <?php if( $option_font == 'Cyan'){ echo 'selected'; } ?>>Cyan</option>
		<option value='DarkBlue' <?php if( $option_font == 'DarkBlue'){ echo 'selected'; } ?>>Dark Blue</option>
		<option value='DarkCyan' <?php if( $option_font == 'DarkCyan'){ echo 'selected'; } ?>>Dark Cyan</option>
		<option value='DarkGoldenRod' <?php if( $option_font == 'DarkGoldenRod'){ echo 'selected'; } ?>>Dark Golden Rod</option>
		<option value='DarkGray' <?php if( $option_font == 'DarkGray'){ echo 'selected'; } ?>>Dark Gray</option>
		<option value='DarkGreen' <?php if( $option_font == 'DarkGreen'){ echo 'selected'; } ?>>Dark Green</option>
		<option value='DarkKhaki' <?php if( $option_font == 'DarkKhaki'){ echo 'selected'; } ?>>Dark Khaki</option>
		<option value='DarkMagenta' <?php if( $option_font == 'DarkMagenta'){ echo 'selected'; } ?>>Dark Magenta</option>
		<option value='DarkOliveGreen' <?php if( $option_font == 'DarkOliveGreen'){ echo 'selected'; } ?>>Dark Olive Green</option>
		<option value='DarkOrange' <?php if( $option_font == 'DarkOrange'){ echo 'selected'; } ?>>Dark Orange</option>
		<option value='DarkOrchid' <?php if( $option_font == 'DarkOrchid'){ echo 'selected'; } ?>>Dark Orchid</option>
		<option value='DarkRed' <?php if( $option_font == 'DarkRed'){ echo 'selected'; } ?>>Dark Red</option>
		<option value='DarkSalmon' <?php if( $option_font == 'DarkSalmon'){ echo 'selected'; } ?>>Dark Salmon</option>
		<option value='DarkSeaGreen' <?php if( $option_font == 'DarkSeaGreen'){ echo 'selected'; } ?>>Dark Sea Green</option>
		<option value='DarkSlateBlue' <?php if( $option_font == 'DarkSlateBlue'){ echo 'selected'; } ?>>Dark Slate Blue</option>
		<option value='DarkSlateGray' <?php if( $option_font == 'DarkSlateGray'){ echo 'selected'; } ?>>Dark Slate Gray</option>
		<option value='DarkTurquoise' <?php if( $option_font == 'DarkTurquoise'){ echo 'selected'; } ?>>Dark Turquoise</option>
		<option value='DarkViolet' <?php if( $option_font == 'DarkViolet'){ echo 'selected'; } ?>>Dark Violet</option>
		<option value='DeepPink' <?php if( $option_font == 'DeepPink'){ echo 'selected'; } ?>>Deep Pink</option>
		<option value='DeepSkyBlue' <?php if( $option_font == 'DeepSkyBlue'){ echo 'selected'; } ?>>Deep Sky Blue</option>
		<option value='DimGray' <?php if( $option_font == 'DimGray'){ echo 'selected'; } ?>>Dim Gray</option>
		<option value='DodgerBlue' <?php if( $option_font == 'DodgerBlue'){ echo 'selected'; } ?>>Dodger Blue</option>
		<option value='FireBrick' <?php if( $option_font == 'FireBrick'){ echo 'selected'; } ?>>Fire Brick</option>
		<option value='FloralWhite' <?php if( $option_font == 'FloralWhite'){ echo 'selected'; } ?>>Floral White</option>
		<option value='ForestGreen' <?php if( $option_font == 'ForestGreen'){ echo 'selected'; } ?>>Forest Green</option>
		<option value='Fuchsia' <?php if( $option_font == 'Fuchsia'){ echo 'selected'; } ?>>Fuchsia</option>
		<option value='Gainsboro' <?php if( $option_font == 'Gainsboro'){ echo 'selected'; } ?>>Gainsboro</option>
		<option value='GhostWhite' <?php if( $option_font == 'GhostWhite'){ echo 'selected'; } ?>>Ghost White</option>
		<option value='Gold' <?php if( $option_font == 'Gold'){ echo 'selected'; } ?>>Gold</option>
		<option value='GoldenRod' <?php if( $option_font == 'GoldenRod'){ echo 'selected'; } ?>>Golden Rod</option>
		<option value='Gray' <?php if( $option_font == 'Gray'){ echo 'selected'; } ?>>Gray</option>
		<option value='Green' <?php if( $option_font == 'Green'){ echo 'selected'; } ?>>Green</option>
		<option value='GreenYellow' <?php if( $option_font == 'GreenYellow'){ echo 'selected'; } ?>>Green Yellow</option>
		<option value='HoneyDew' <?php if( $option_font == 'HoneyDew'){ echo 'selected'; } ?>>Honey Dew</option>
		<option value='HotPink' <?php if( $option_font == 'HotPink'){ echo 'selected'; } ?>>HotPink</option>
		<option value='IndianRed' <?php if( $option_font == 'IndianRed'){ echo 'selected'; } ?>>Indian Red</option>
		<option value='Indigo' <?php if( $option_font == 'Indigo'){ echo 'selected'; } ?>>Indigo</option>
		<option value='Ivory' <?php if( $option_font == 'Ivory'){ echo 'selected'; } ?>>Ivory</option>
		<option value='Khaki' <?php if( $option_font == 'Khaki'){ echo 'selected'; } ?>>Khaki</option>
		<option value='Lavender' <?php if( $option_font == 'Lavender'){ echo 'selected'; } ?>>Lavender</option>
		<option value='LavenderBlush' <?php if( $option_font == 'LavenderBlush'){ echo 'selected'; } ?>>Lavender Blush</option>
		<option value='LawnGreen' <?php if( $option_font == 'LawnGreen'){ echo 'selected'; } ?>>Lawn Green</option>
		<option value='LemonChiffon' <?php if( $option_font == 'LemonChiffon'){ echo 'selected'; } ?>>Lemon Chiffon</option>
		<option value='LightBlue' <?php if( $option_font == 'LightBlue'){ echo 'selected'; } ?>>Light Blue</option>
		<option value='LightCoral' <?php if( $option_font == 'LightCoral'){ echo 'selected'; } ?>>Light Coral</option>
		<option value='LightCyan' <?php if( $option_font == 'LightCyan'){ echo 'selected'; } ?>>Light Cyan</option>
		<option value='LightGoldenrodYellow' <?php if( $option_font == 'LightGoldenrodYellow'){ echo 'selected'; } ?>>Light Goldenrod Yellow</option>
		<option value='LightGray' <?php if( $option_font == 'LightGray'){ echo 'selected'; } ?>>Light Gray</option>
		<option value='LightGreen' <?php if( $option_font == 'LightGreen'){ echo 'selected'; } ?>>Light Green</option>
		<option value='LightPink' <?php if( $option_font == 'LightPink'){ echo 'selected'; } ?>>Light Pink</option>
		<option value='LightSalmon' <?php if( $option_font == 'LightSalmon'){ echo 'selected'; } ?>>Light Salmon</option>
		<option value='LightSeaGreen' <?php if( $option_font == 'LightSeaGreen'){ echo 'selected'; } ?>>Light Sea Green</option>
		<option value='LightSkyBlue' <?php if( $option_font == 'LightSkyBlue'){ echo 'selected'; } ?>>Light Sky Blue</option>
		<option value='LightSlateGray' <?php if( $option_font == 'LightSlateGray'){ echo 'selected'; } ?>>Light Slate Gray</option>
		<option value='LightSteelBlue' <?php if( $option_font == 'LightSteelBlue'){ echo 'selected'; } ?>>Light Steel Blue</option>
		<option value='LightYellow' <?php if( $option_font == 'LightYellow'){ echo 'selected'; } ?>>Light Yellow</option>
		<option value='Lime' <?php if( $option_font == 'Lime'){ echo 'selected'; } ?>>Lime</option>
		<option value='LimeGreen' <?php if( $option_font == 'LimeGreen'){ echo 'selected'; } ?>>Lime Green</option>
		<option value='Linen' <?php if( $option_font == 'Linen'){ echo 'selected'; } ?>>Linen</option>
		<option value='Magenta' <?php if( $option_font == 'Magenta'){ echo 'selected'; } ?>>Magenta</option>
		<option value='Maroon' <?php if( $option_font == 'Maroon'){ echo 'selected'; } ?>>Maroon</option>
		<option value='MediumAquaMarine' <?php if( $option_font == 'MediumAquaMarine'){ echo 'selected'; } ?>>Medium Aqua Marine</option>
		<option value='MediumBlue' <?php if( $option_font == 'MediumBlue'){ echo 'selected'; } ?>>Medium Blue</option>
		<option value='MediumOrchid' <?php if( $option_font == 'MediumOrchid'){ echo 'selected'; } ?>>Medium Orchid</option>
		<option value='MediumPurple' <?php if( $option_font == 'MediumPurple'){ echo 'selected'; } ?>>Medium Purple</option>
		<option value='MediumSeaGreen' <?php if( $option_font == 'MediumSeaGreen'){ echo 'selected'; } ?>>Medium Sea Green</option>
		<option value='MediumSlateBlue' <?php if( $option_font == 'MediumSlateBlue'){ echo 'selected'; } ?>>Medium Slate Blue</option>
		<option value='MediumSpringGreen' <?php if( $option_font == 'MediumSpringGreen'){ echo 'selected'; } ?>>Medium Spring Green</option>
		<option value='MediumTurquoise' <?php if( $option_font == 'MediumTurquoise'){ echo 'selected'; } ?>>Medium Turquoise</option>
		<option value='MediumVioletRed' <?php if( $option_font == 'MediumVioletRed'){ echo 'selected'; } ?>>Medium VioletRed</option>
		<option value='MidnightBlue' <?php if( $option_font == 'MidnightBlue'){ echo 'selected'; } ?>>Midnight Blue</option>
		<option value='MintCream' <?php if( $option_font == 'MintCream'){ echo 'selected'; } ?>>Mint Cream</option>
		<option value='MistyRose' <?php if( $option_font == 'MistyRose'){ echo 'selected'; } ?>>Misty Rose</option>
		<option value='Moccasin' <?php if( $option_font == 'Moccasin'){ echo 'selected'; } ?>>Moccasin</option>
		<option value='NavajoWhite' <?php if( $option_font == 'NavajoWhite'){ echo 'selected'; } ?>>Navajo White</option>
		<option value='Navy' <?php if( $option_font == 'Navy'){ echo 'selected'; } ?>>Navy</option>
		<option value='OldLace' <?php if( $option_font == 'OldLace'){ echo 'selected'; } ?>>Old Lace</option>
		<option value='Olive' <?php if( $option_font == 'Olive'){ echo 'selected'; } ?>>Olive</option>
		<option value='OliveDrab' <?php if( $option_font == 'OliveDrab'){ echo 'selected'; } ?>>Olive Drab</option>
		<option value='Orange' <?php if( $option_font == 'Orange'){ echo 'selected'; } ?>>Orange</option>
		<option value='OrangeRed' <?php if( $option_font == 'OrangeRed'){ echo 'selected'; } ?>>Orange Red</option>
		<option value='Orchid' <?php if( $option_font == 'Orchid'){ echo 'selected'; } ?>>Orchid</option>
		<option value='PaleGoldenRod' <?php if( $option_font == 'PaleGoldenRod'){ echo 'selected'; } ?>>Pale Golden Rod</option>
		<option value='PaleGreen' <?php if( $option_font == 'PaleGreen'){ echo 'selected'; } ?>>Pale Green</option>
		<option value='PaleTurquoise' <?php if( $option_font == 'PaleTurquoise'){ echo 'selected'; } ?>>Pale Turquoise</option>
		<option value='PaleVioletRed' <?php if( $option_font == 'PaleVioletRed'){ echo 'selected'; } ?>>Pale VioletRed</option>
		<option value='PapayaWhip' <?php if( $option_font == 'PapayaWhip'){ echo 'selected'; } ?>>Papaya Whip</option>
		<option value='PeachPuff' <?php if( $option_font == 'PeachPuff'){ echo 'selected'; } ?>>Peach Puff</option>
		<option value='Peru' <?php if( $option_font == 'Peru'){ echo 'selected'; } ?>>Peru</option>
		<option value='Pink' <?php if( $option_font == 'Pink'){ echo 'selected'; } ?>>Pink</option>
		<option value='Plum' <?php if( $option_font == 'Plum'){ echo 'selected'; } ?>>Plum</option>
		<option value='PowderBlue' <?php if( $option_font == 'PowderBlue'){ echo 'selected'; } ?>>Powder Blue</option>
		<option value='Purple' <?php if( $option_font == 'Purple'){ echo 'selected'; } ?>>Purple</option>
		<option value='Red' <?php if( $option_font == 'Red'){ echo 'selected'; } ?>>Red</option>
		<option value='RosyBrown' <?php if( $option_font == 'RosyBrown'){ echo 'selected'; } ?>>Rosy Brown</option>
		<option value='RoyalBlue' <?php if( $option_font == 'RoyalBlue'){ echo 'selected'; } ?>>Royal Blue</option>
		<option value='SaddleBrown' <?php if( $option_font == 'SaddleBrown'){ echo 'selected'; } ?>>Saddle Brown</option>
		<option value='Salmon' <?php if( $option_font == 'Salmon'){ echo 'selected'; } ?>>Salmon</option>
		<option value='SandyBrown' <?php if( $option_font == 'SandyBrown'){ echo 'selected'; } ?>>Sandy Brown</option>
		<option value='SeaGreen' <?php if( $option_font == 'SeaGreen'){ echo 'selected'; } ?>>Sea Green</option>
		<option value='SeaShell' <?php if( $option_font == 'SeaShell'){ echo 'selected'; } ?>>Sea Shell</option>
		<option value='Sienna' <?php if( $option_font == 'Sienna'){ echo 'selected'; } ?>>Sienna</option>
		<option value='Silver' <?php if( $option_font == 'Silver'){ echo 'selected'; } ?>>Silver</option>
		<option value='SkyBlue' <?php if( $option_font == 'SkyBlue'){ echo 'selected'; } ?>>Sky Blue</option>
		<option value='SlateBlue' <?php if( $option_font == 'SlateBlue'){ echo 'selected'; } ?>>Slate Blue</option>
		<option value='SlateGray' <?php if( $option_font == 'SlateGray'){ echo 'selected'; } ?>>Slate Gray</option>
		<option value='Snow' <?php if( $option_font == 'Snow'){ echo 'selected'; } ?>>Snow</option>
		<option value='SpringGreen' <?php if( $option_font == 'SpringGreen'){ echo 'selected'; } ?>>Spring Green</option>
		<option value='SteelBlue' <?php if( $option_font == 'SteelBlue'){ echo 'selected'; } ?>>Steel Blue</option>
		<option value='Tan' <?php if( $option_font == 'Tan'){ echo 'selected'; } ?>>Tan</option>
		<option value='Teal' <?php if( $option_font == 'Teal'){ echo 'selected'; } ?>>Teal</option>
		<option value='Thistle' <?php if( $option_font == 'Thistle'){ echo 'selected'; } ?>>Thistle</option>
		<option value='Tomato' <?php if( $option_font == 'Tomato'){ echo 'selected'; } ?>>Tomato</option>
		<option value='Turquoise' <?php if( $option_font == 'Turquoise'){ echo 'selected'; } ?>>Turquoise</option>
		<option value='Violet' <?php if( $option_font == 'Violet'){ echo 'selected'; } ?>>Violet</option>
		<option value='Wheat' <?php if( $option_font == 'Wheat'){ echo 'selected'; } ?>>Wheat</option>
		<option value='White' <?php if( $option_font == 'White'){ echo 'selected'; } ?>>White</option>
		<option value='WhiteSmoke' <?php if( $option_font == 'WhiteSmoke'){ echo 'selected'; } ?>>White Smoke</option>
		<option value='Yellow' <?php if( $option_font == 'Yellow'){ echo 'selected'; } ?>>Yellow</option>
		<option value='YellowGreen' <?php if( $option_font == 'YellowGreen'){ echo 'selected'; } ?>>Yellow Green</option>
	</select>
	</td>
	<td width ="40"><table border="1" cellpadding="12" bgcolor="white"><tr><td bgcolor="<?php echo get_option('quizpro_question_color'); ?>"></td></tr></table></td>
	</tr>
	<input type="hidden" name="action" value="update" />
	<input type="hidden" name="page_options" value="quizpro_quiz_above_message,quizpro_completion_message,quizpro_font_face_label,quizpro_font_color_label,quizpro_font_size_label, quizpro_question_color" />
	<tr valign="top">
	<td>
	<input type="submit" value="<?php _e('Save Changes') ?>" />
	</td>
	</tr>
	</form>
	</div>

<?php
}
?>