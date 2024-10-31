<?php
/*
Generates a summary page for QuizPro
*/
function quizpro_summary()
{
	?>
<h1> QuizPro Summary</h1>
<style>
	.quiz {
		font-size:160%;
	}
	.info {
		font-size:130%;
	}
</style>
<br>
<?php
$quizpro_summary = "";
for($i=1;$i<50;$i++)
{
	$quizpro_get_number_question = "quizpro_question_amount_quiz" . $i;
	$quizpro_question_amount = get_option($quizpro_get_number_question);
	if($quizpro_question_amount!=0)
	{
		$quizpro_summary .= "<span class='quiz'> Quiz " . $i . "</span> <br><span class='info'>Number of Questions : " . $quizpro_question_amount . "</span><br><br>";
	}
}
echo $quizpro_summary;
}
?>