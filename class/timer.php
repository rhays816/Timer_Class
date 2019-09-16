<?php
/****************************************************
*	Timer Class - Collection of timer Utilities
*
* 	Created By: Rick Hays
* 		  Date: 2011-09-12
*
*	 Revisions:
*	 2011-09-12  RLH  Added "udate"
*
*****************************************************/
class timer
{
	var $startTimer;
	var $endTimer;

	/**
	* udate - Converts a micro timestamp into a date format.
	* @param string $format - Standard date() format.
	* @param float [optional] - Microtime to convert
	*/
	public function udate($format, $utimestamp = null)
	{
		if (is_null($utimestamp))
			$utimestamp = microtime(TRUE);
		$timestamp = floor($utimestamp);
		$milliseconds = round(($utimestamp - $timestamp) * 1000000);
		return date(preg_replace('`(?<!\\\\)u`', $milliseconds, $format), $timestamp);
	}

	/**
	* start - Stores the start time
	*/
	public function start()
	{
		$this->startTimer = microtime(TRUE);
	}

	/**
	* end - Stores the end time
	*/
	Public function end()
	{
		$this->endTimer = microtime(TRUE);
	}

	/**
	* time - Returns the (end - start) times **NO FORMATING**.
	* @return real Number value of the (end - start) times
	*/
	public function time()
	{
		return $this->endTimer-$this->startTimer;
	}

	/**
	* format_time - Returns the (end - start) times formated.
	* @param  string $format - Standard date() format Default = 'i:s.u'.
	* @return string - date format of (end - start) times.
	*/
	public function format_time($format = 'i:s.u')
	{
		return $this->udate($format, $this->endTimer-$this->startTimer);
	}

	/**
	* avg_time - Returns the (end - start) times **NO FORMATING**.
	* @param  numeric $avg_count - Number to divide the (end - start) times from Default = 1 or No Division.
	* @return numeric - Avg Number value of the (end - start) times
	*/
	public function avg_time($avg_count = 1)
	{
		return ($this->endTimer-$this->startTimer)/$avg_count;
	}

	/**
	* format_avg_time - Returns the (end - start) times formated.
	* @param  string $format - Standard date() format Default = 'i:s.u'.
	* @param  numeric $avg_count - Number to divide the (end - start) times from Default = 1 or No Division.
	* @return numeric - Avg Number value of the (end - start) times
	*/
	public function format_avg_time($avg_count = 1, $format = 'i:s.u')
	{
		return  $this->udate($format, ($this->endTimer-$this->startTimer)/$avg_count);
	}
}
?>
