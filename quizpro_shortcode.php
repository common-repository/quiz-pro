<?php
function quizpro_shortcode($atts)
{
	extract(shortcode_atts(array(		'quiz' => 1,), $atts));

	///Important Variables
	$quiz_name = "quiz" .$quiz;
	$quizpro_questions_quiz = "quizpro_questions_quiz" . $quiz;
	$quizpro_question_amount_quiz = "quizpro_question_amount_quiz" . $quiz;
	$quizpro_above_quiz_message = get_option('quizpro_quiz_above_message');
	$quizpro_completion_message = get_option('quizpro_completion_message');
	$quizpro_completion_message = get_option('quizpro_completion_message');
	$quizpro_amount_questions = get_option($quizpro_question_amount_quiz);
	$quizpro_label_font = get_option('quizpro_font_face_label');
	$quizpro_label_color = get_option('quizpro_font_color_label');
	$quizpro_label_size = get_option('quizpro_font_size_label');
	$quizpro_question_color = get_option('quizpro_question_color');
	
	$quizpro_data = get_option($quizpro_questions_quiz);
	$quizpro_display = "";
	$success = $_POST["action"];
		
	///Display the quiz
	if ($success != 'update' || $quiz_name != $_POST["quizname"] )
	{
		$quizpro_display .= "
		<style>
		.question {
		font:" . 120*$quizpro_label_size/100 ."px  '" . $quizpro_label_font . "', Arial, Helvetica, Tahoma, sans-serif;
		color: " . $quizpro_question_color . ";
		}
		.header {
		font:" . 140*$quizpro_label_size/100 ."px  '" . $quizpro_label_font . "', Arial, Helvetica, Tahoma, sans-serif;
		color: " . $quizpro_question_color . ";
		}
		.label{
		font:" . $quizpro_label_size ."px  '" . $quizpro_label_font . "', Arial, Helvetica, Tahoma, sans-serif;
		color: " . $quizpro_label_color . ";
		cursor:pointer;
		width: 473px;
		}
		.label:hover {
		font-size:" . 110*$quizpro_label_size/100 . "px;
		}
		.postsubmission{
		font:" . 120*$quizpro_label_size/100 ."px  '" . $quizpro_label_font . "', Arial, Helvetica, Tahoma, sans-serif;
		color: " . $quizpro_question_color . ";
		}
		.numbering {
		font:" . 120*$quizpro_label_size/100 ."px  '" . $quizpro_label_font . "', Arial, Helvetica, Tahoma, sans-serif;
		color: " . $quizpro_label_color . ";
		font-family: 'Verdana', Arial, 'Georgia';
		}
		</style>
		<form action='" . $PHP_SELF . "' method='post'>";
		$quizpro_display .= "<span class ='header'>";
		if ($quizpro_above_quiz_message != "")
			$quizpro_display .= "" . $quizpro_above_quiz_message . "";
		$quizpro_display .= "</span><br><br><ol style='list-style: none; padding: 0; margin: 0;' >";
		for ($i=0; $i<$quizpro_amount_questions; $i++)
		{
			$quesnum = $i+1;
			$quizpro_display .= "<li><b>";
			$quizpro_display .= "<span class='numbering'>" . $quesnum . ". </span><span class='question'>  " . $quizpro_data[$i][0] . "</span>";
			$quizpro_display .= "</b><ul style='list-style: none;'>";
			if ($quizpro_data[$i][1][0] != "")
			{                                                      
				$quizpro_display .= "<li>";
				$quizpro_display .= "<label class='wrapper'><input class='radio' type='radio' name='quiz" .$i. "' value='" . $quizpro_data[$i][1][0] . "'> <span class='label'>" . $quizpro_data[$i][1][0];
				$quizpro_display .= "</span></label></li>";
			}
			if ($quizpro_data[$i][2][0] != "")
			{                                                      
				$quizpro_display .= "<li>";
				$quizpro_display .= "<label class = 'wrapper'><input class='radio' type='radio' name='quiz" .$i. "' value='" . $quizpro_data[$i][2][0] . "'> <span class='label'>" . $quizpro_data[$i][2][0];
				$quizpro_display .= "</span></label></li>";
			}
			if ($quizpro_data[$i][3][0] != "")
			{
				$quizpro_display .= "<li>";
				$quizpro_display .= "<label class = 'wrapper'><input class='radio' type='radio' name='quiz".$i. "' value='" . $quizpro_data[$i][3][0] . "'> <span class='label'>" . $quizpro_data[$i][3][0];
				$quizpro_display .= "</span></label></li>";
			}
			if ($quizpro_data[$i][4][0] != "")
			{
				$quizpro_display .= "<li>";
				$quizpro_display .= "<label class = 'wrapper'><input class='radio' type='radio' name='quiz".$i. "' value='" . $quizpro_data[$i][4][0] . "'> <span class='label'>" . $quizpro_data[$i][4][0];
				$quizpro_display .= "</span></label></li>";
			}
			$quizpro_display .= "</ul></li>";
		}
		$quizpro_display .= "</ol><br>";
		$quizpro_display .= "
			<input type='hidden' name='action' value='update' />";
		$quizpro_display .= "
			<input type='hidden' name='quizname' value='quiz" .$quiz ."' />";
		$quizpro_display .= "
			<input type='submit' value='Submit Quiz' />";
		$quizpro_display .= "</form>";
		echo $quizpro_display;
	}
	///Evaluate the Quiz
	else
	{
		for ($i=0; $i<$quizpro_amount_questions; $i++)
			{
			$user_answers[$i]= $_POST['quiz' . $i];
			}
		$quizpro_display .= "<span class = 'header'>" . $quizpro_completion_message . "</span><br><br><span class = 'postsubmission'>";
		$correct = 0;
		for ($i=0; $i<$quizpro_amount_questions; $i++)
			{
			$quizpro_display .= "<b>". $quizpro_data[$i][0] . "</b><br>";
			$quizpro_display .= "Your answer \" <u>" . $user_answers[$i] ."</u> \" is ";
			for ($l=1; $l<=4; $l++)
				{
					if ($quizpro_data[$i][$l][1])
					{
						$quizpro_correct_answer[$i] = $quizpro_data[$i][$l][0];
					}
				}		
			if ($user_answers[$i]==$quizpro_correct_answer[$i])
				{
				$correct += 1;
				$quizpro_display .= "correct.</b><br><br>";
				}
			else
				{
				$quizpro_display .= "incorrect.</b>";
				$quizpro_display .= "<br>Correct Answer : " . $quizpro_correct_answer[$i] . "<br>";
				if($quizpro_data[$i][5]!="")
					$quizpro_display .= "Reason : " . $quizpro_data[$i][5]. "<br><br>";
				}
			}
		$quizpro_display .= "";
		$quizpro_display .= "You had " . $correct . " correct answer(s).";
		$quizpro_display .= "";
		$quizpro_quiz_score = $correct/$quizpro_amount_questions;
		$quizpro_quiz_score *= 100;
		$quizpro_display .= "<br>Your score on this quiz is " . $quizpro_quiz_score . " %.</span>";
		echo $quizpro_display;
		}
	}
?>