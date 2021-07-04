<?php  
	class Point2D {
		private $x;
		private $y;

		public function __construct($x, $y)
		{
			$this->x = $x;
			$this->y = $y;
		}

		public function getX()
		{
			return $this->x;
		}

		public function setX($x)
		{
			$this->x = $x;
		}

		public function getY()
		{
			return $this->y;
		}

		public function setY($y)
		{
			$this->y = $y;
		}

		public function getXY()
		{
			return [$this->x, $this->y];
		}

		public function setXY($x, $y)
		{
			$this->x = $x;
			$this->y = $y;
		}

		public function __toString()
		{
			return "(" .$this->getX(). "," .$this->getY(). ")";
		}
	}
?>