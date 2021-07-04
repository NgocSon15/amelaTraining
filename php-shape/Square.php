<?php
/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 11/21/18
 * Time: 17:16
 */
include_once ('Rectangle.php');
include_once('Resizeable.php');
include_once('Colorable.php');

class Square extends Rectangle implements Resizeable, Colorable
{
    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width);
    }

    public function resize($percent)
    {
    	$this->height += ($this->height * $percent / 100);
        $this->width += ($this->width * $percent / 100);
    }

    public function howToColor()
    {
    	echo "Color all four sides..";
    }
}