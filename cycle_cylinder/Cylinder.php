<?php  
	include('Cycle.php');

	class Cylinder extends Cycle {
		private $height;

		public function __construct($radius, $color, $height)
		{
			parent::__construct($radius, $color);
			$this->height = $height;
		}

		public function getHeight() {
			return $this->height;
		}

		public function setHeight($height) {
			$this->height = $height;
		}

		public function getArea() {
			return parent::getArea() * 2 + 2 * pi() * $this->getRadius() * $this->getHeight();
		}

		public function getVolume() {
			return parent::getArea() * $this->getHeight();
		}

		public function __toString() {
			return "Hình trụ bán kính đáy = " .$this->getRadius(). "<br>"
					."Chiều cao: " .$this->getHeight(). "<br>"
					."Màu sắc: " .$this->getColor(). "<br>"
					."Diện tích: " .$this->getArea(). "<br>"
					."Thể tích: " .$this->getVolume(). "<br>";
		}
	}
?>