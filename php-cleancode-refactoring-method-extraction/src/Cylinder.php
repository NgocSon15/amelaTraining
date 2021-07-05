<?php

/**
 * Created by PhpStorm.
 * User: phanluan
 * Date: 26/10/2018
 * Time: 22:50
 */
class Cylinder
{
	public function getBaseArea($radius)
	{
		$baseArea = pi() * $radius * $radius;
		return $baseArea;
	}

	public function getPerimeter($radius)
	{
		$perimeter = 2 * pi() * $radius;
		return $perimeter;
	}

    public function getVolume($radius, $height)
    {
        $baseArea = $this->getBaseArea($radius);
        $perimeter = $this->getPerimeter($radius);
        $volume = $perimeter * $height + 2 * $baseArea;
        return $volume;
    }
}