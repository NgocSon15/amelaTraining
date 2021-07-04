<?php  
	class Shape {
		private $color;

		public function __construct($color = "white")
		{
			$this->color = $color;
		}

		public function getColor()
		{
			return $this->color;
		}

		public function setColor($color)
		{
			$this->color = $color;
		}
	}
?>