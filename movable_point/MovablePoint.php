<?php  
	include('Point.php');

	class MovablePoint extends Point {
		private $xSpeed;
		private $ySpeed;

		public function __construct($x, $y, $xSpeed, $ySpeed)
		{
			parent::__construct($x, $y);
			$this->xSpeed = $xSpeed;
			$this->ySpeed = $ySpeed;
		}

		public function getXSpeed()
		{
			return $this->xSpeed;
		}

		public function setXSpeed($xSpeed)
		{
			$this->xSpeed = $xSpeed;
		}

		public function getYSpeed()
		{
			return $this->ySpeed;
		}

		public function setYSpeed($ySpeed)
		{
			$this->ySpeed = $ySpeed;
		}

		public function setSpeed($xSpeed, $ySpeed)
		{
			$this->xSpeed = $xSpeed;
			$this->ySpeed = $ySpeed;
		}

		public function getSpeed()
		{
			return [$this->getXSpeed(), $this->getYSpeed()];
		}

		public function __toString()
		{
			return "(" .$this->getX(). "," .$this->getY(). "),speed=(" .$this->getXSpeed(). "," .$this->getYSpeed(). ")";
		}

		public function move()
		{
			$this->setX($this->getX() + $this->getXSpeed());
			$this->setY($this->getY() + $this->getYSpeed());
		}
	}
?>