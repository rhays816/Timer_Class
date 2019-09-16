<?php
// == TIMER CLASS ====================================
	require_once 'class/timer.php';
// -- Init Class
	$timer = new timer();
//
// -- Run the Timer
	$timer->start();	// <- Places a value for Start of Timer
	sleep(5);			// <- Pause
	$timer->end();		// <- Places a value for End of Timer
// -- Output the Results
	echo $timer->startTimer . '<br />';
	echo $timer->endTimer   . '<br />';
	echo $timer->time() . '<br />';
	echo $timer->format_time() . '<br />';
	echo $timer->avg_time(5) . '<br />';
	echo $timer->format_avg_time(5);
// ===================================================

	$timer = null;