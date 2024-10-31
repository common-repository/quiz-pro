<?php

function quizpro_quiz()
{
	$currentquiznum = get_option('quiznum');
	$quizpro_get_questions = 'quizpro_questions_quiz' . $currentquiznum;
	$quizpro_amount_questions = 'quizpro_question_amount_quiz' . $currentquiznum;
	$quizpro_question_amount = get_option($quizpro_amount_questions);
	$quizpro_data = get_option($quizpro_get_questions);
	?>
	<div class="wrap">
	<h2>Create a Quiz</h2>
	<table class="wide" style="text-align: left; white-space: nowrap;">
	<thead>
	<tr valign="top">
	<th scope="row"> Quiz Number : 	</th>
	<td>
	<form method="post" action="options.php">
	<?php wp_nonce_field('update-options'); ?>
		<input type="number" name="quiznum" id="quiznum" value="<?php echo $currentquiznum; ?>" min="1" />
		<input type="submit" name="submit" value="Update" />
		<input type="hidden" name="page_options" value="quiznum" />
		<input type="hidden" name="action" value="update" />
	</form>
	</td></tr>
	<form method="post" action="options.php">
	<?php wp_nonce_field('update-options'); ?>
	<tr valign="top">
	<th scope="row">Select the number of Questions : </th>
	<td><select name="quizpro_question_amount_quiz<?php echo $currentquiznum; ?>" onchange="this.form.submit();"><?php  $option_quesnum = $quizpro_question_amount; ?>
		<option value="0" <?php if( $option_quesnum == '0'){ echo 'selected'; } ?>>Clear All</option>
		<option value="1" <?php if( $option_quesnum == '1'){ echo 'selected'; } ?>>1</option>
		<option value="2" <?php if( $option_quesnum == '2'){ echo 'selected'; } ?>>2</option>
		<option value="3" <?php if( $option_quesnum == '3'){ echo 'selected'; } ?>>3</option>
		<option value="4" <?php if( $option_quesnum == '4'){ echo 'selected'; } ?>>4</option>
		<option value="5" <?php if( $option_quesnum == '5'){ echo 'selected'; } ?>>5</option>
		<option value="6" <?php if( $option_quesnum == '6'){ echo 'selected'; } ?>>6</option>
		<option value="7" <?php if( $option_quesnum == '7'){ echo 'selected'; } ?>>7</option>
		<option value="8" <?php if( $option_quesnum == '8'){ echo 'selected'; } ?>>8</option>
		</select></td>
	</tr>
	
	<?php
		for ($i=0; $i<$quizpro_question_amount; $i++)
	{
		for ($l=1; $l<=4; $l++)
		{
			$name_id[$l] = "quizpro_questions_quiz".$currentquiznum . "[" . $i . "][" . $l . "][1]";
			if ($quizpro_data[$i][$l][1])
				$is_checked[$l] = "checked='checked'";
			else
				$is_checked[$l] = "";
		}
		$quizpro_current_num = $i + 1;
		echo "<tr valign='top'>
		<th scope='row'>&nbsp;</th>
		<td>&nbsp;</td>
		</tr>";
		
		echo "<tr valign='top'>
		<th scope='row'>Question  " . $quizpro_current_num . "</th>
		<td><input type='text' size='80' name='quizpro_questions_quiz" . $currentquiznum . "[" . $i . "][0]' value='" . $quizpro_data[$i][0] . "' /></td>
		</tr>";
		
		echo "<tr valign='top'>	
		<th scope='row'>First Answer</th>
		<td><input type='text' size='80' name='quizpro_questions_quiz" . $currentquiznum . "[" . $i . "][1][0]' value='" . $quizpro_data[$i][1][0] . "' /></td>		
		<td>";
		?>
		<input name="<?php echo $name_id[1]; ?>" id=<?php echo $name_id[1]; ?> type='checkbox' value='1' <?php echo $is_checked[1]; ?>/></td>
		<?php		
		echo "<tr valign='top'>
		<th scope='row'>Second Answer</th>
		<td><input type='text' size='80' name='quizpro_questions_quiz" . $currentquiznum . "[" . $i . "][2][0]' value='" . $quizpro_data[$i][2][0] . "' /></td>
		<td>";
		?>
		<input name="<?php echo $name_id[2]; ?>" id=<?php echo $name_id[2]; ?> type='checkbox' value='2' <?php echo $is_checked[2]; ?>/></td>
		<?php
		
		echo "<tr valign='top'>
		<th scope='row'>Third Answer</th>
		<td><input type='text' size='80' name='quizpro_questions_quiz" . $currentquiznum . "[" . $i . "][3][0]' value='" . $quizpro_data[$i][3][0] . "' /></td>
		<td>";
		?>
		<input name="<?php echo $name_id[3]; ?>" id=<?php echo $name_id[3]; ?> type='checkbox' value='3' <?php echo $is_checked[3]; ?>/></td>
		<?php
		
		echo "<tr valign='top'>
		<th scope='row'>Fourth Answer</th>
		<td><input type='text' size='80' name='quizpro_questions_quiz" . $currentquiznum . "[" . $i . "][4][0]' value='" . $quizpro_data[$i][4][0] . "' /></td>
		<td>";
		?>
		<input name="<?php echo $name_id[4]; ?>" id=<?php echo $name_id[4]; ?> type='checkbox' value='4' <?php echo $is_checked[4]; ?>/></td>
		<?php

		echo "<tr valign='top'>
		<th scope='row'>Explanation</th>
		<td><input type='text' size='80' name='quizpro_questions_quiz" . $currentquiznum . "[" . $i . "][5]' value='" . $quizpro_data[$i][5] . "' /></td>";
		?>
		<?php                                                                
	}
	?>
	
	</thead>
	</table>
	<input type="hidden" name="action" value="update" />
	<input type="hidden" name="page_options" value="quizpro_questions_quiz<?php echo $currentquiznum;?>,quizpro_question_amount_quiz<?php echo $currentquiznum;?>" />

	<p class="submit">
	<input type="submit" value="<?php echo "Save Changes"; ?>" />
	</p>
	
	</form>
	</div>


<?php
}
?>