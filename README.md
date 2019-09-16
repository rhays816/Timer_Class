# Timer_Class

Simple and small timer class to allow tracking of functions/API's and ajax calls.

1. udate           - Converts a micro timestamp into a date format
2. start           - Stores the start time
3. end             - Stores the end time
4. time            - Returns the (end - start) times **NO FORMATING**
5. format_time     - Returns the (end - start) times formated
6. avg_time        - Returns the (end - start) times **NO FORMATING**
7. format_avg_time - Returns the (end - start) times formated

Quick Example
-----
**timer-example.php**

```
<?php
// == TIMER CLASS ====================================
	require_once 'classes/timer.php';
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

```