<?php
/*
Plugin Name: QuizPro
Plugin URI: http://wordpress.org/plugins/quiz-pro/
Description: Generate and post quizzes through your wordpress blog for your audience via a simple interface.
Author: Lomash
Version: 2.1.1
*/

include ("quizpro_main.php");
include ("quizpro_quiz.php");
include ("quizpro_options.php");
include ("quizpro_shortcode.php");
include ("quizpro_summary.php");

//Actions
add_action('admin_menu', 'add_quizpro_menu');
add_shortcode('QuizPro', 'quizpro_shortcode');

function add_quizpro_menu() 
{
	if (function_exists('add_menu_page'))
	{
		add_menu_page('QuizPro', 'QuizPro', 8, __FILE__, 'quizpro_main_page');
		add_submenu_page(__FILE__, 'Options', 'Options', 8, 'quizpro_options', 'quizpro_options');
		add_submenu_page(__FILE__, 'Summary', 'Summary', 8, 'quizpro_summary', 'quizpro_summary');
		add_submenu_page(__FILE__, 'Create a Quiz', 'Create a Quiz', 8, 'quizpro_quiz', 'quizpro_quiz');
		}
}
?>