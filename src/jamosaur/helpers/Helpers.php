<?php

namespace Jamosaur\Helpers;

class Helpers {
	public static function mstotime($ms)
	{
		$seconds = $ms/1000;
		return sprintf('%02d:%02d:%02d', ($seconds/3600), ($seconds/60%60), $seconds%60);
	}
}