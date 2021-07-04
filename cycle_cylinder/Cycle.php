<?php  
	class Cycle {
		private $radius;
		private $color;

		public function __construct($radius, $color)
		{
			$this->radius = $radius;
			$this->color = $color;
		}

		public function getRadius()
		{
			return $this->radius;
		}

		public function setRadius($radius)
		{
			$this->radius = $radius;
		}

		public function getColor()
		{
			return $this->color;
		}

		public function setColor($color)
		{
			$this->color = $color;
		}

		public function getArea()
		{
			return pow($this->getRadius(), 2) * pi();
		}

		public function __toString() {
			return "Hình tròn bán kính = " .$this->getRadius(). "<br>"
					."Màu sắc: " .$this->getColor(). "<br>"
					."Diện tích: " .$this->getArea(). "<br>";
		}
	}
?>