<?php
/*
Creates the Main Panel for QuizPro with instructions and changelog
*/

function quizpro_main_page()
{
	?>
	<html>
	<body>
	<h2>Thank you for using QuizPro</h2>
	<br>
	<table>
	<tr>
	<td>
	<h3><u>How to use?</u></h3>
	<ol>
		<li>Go to "Create a Quiz"</li>
		<li>Select a quiz number and click Update</li>
		<li>Select the number of questions.</li>
		<li>Enter your questions and choose the correct answers.</li>
		<li>Save changes</li>
		<li>Add the quiz to your post using the shortcode [QuizPro quiz="xx"] where xx is your quiz number.</li>
	</ol>
	<br>
	</td>
	</tr>
	<tr>
	<td>
	<h3><u>Changelog</u></h3>
	
	<ul>
		<li><b>Version 2.1.1</b>
			<ul>
				<li> >> Some Fixes, Customize Questions
			</ul>
		</li>
		<li><b>Version 2.1</b>
			<ul>
				<li> >> Added choice for font colors, faces and size</li>
			</ul>
		</li>
		<li><b>Version 2.0</b>
			<ul>
				<li> >> Added a summary page</li>
				<li> >> Unlimited Quizzes</li>
				<li> >> Code Optimisation</li>
			</ul>
		</li>
		<li><b>Version 1.0</b>
			<ul>
				<li> >> Initial Release</li>
			</ul>
		</li>
	</ul>
	</td>
	</tr>
	<tr>
	<td>
	<h3><u>Feedback</u></h3>
	Your feedback is greatly appreciated!<br>
	Please send any suggestions and queries to <a href="mailto:wpquizpro@gmail.com?subject=QuizPro Feedback">wpquizpro@gmail.com</a>
	</td>
	</tr>
	</table>
	</body>
	</html>
	<?php
}
?>