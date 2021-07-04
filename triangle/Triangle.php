<?php  
	include_once('Shape.php');

	class Triangle extends Shape {
		private $side1;
		private $side2;
		private $side3;

		public function __construct($side1 = 1, $side2 = 1, $side3 = 1)
		{
			parent::__construct();
			$this->side1 = $side1;
			$this->side2 = $side2;
			$this->side3 = $side3;
		}

		public function getSide1()
		{
			return $this->side1;
		}

		public function setSide1($side1)
		{
			$this->side1 = $side1;
		}

		public function getSide2()
		{
			return $this->side2;
		}

		public function setSide2($side2)
		{
			$this->side2 = $side2;
		}

		public function getSide3()
		{
			return $this->side3;
		}

		public function setSide3($side3)
		{
			$this->side3 = $side3;
		}

		public function getPerimeter()
		{
			return $this->getSide1() + $this->getSide2() + $this->getSide3();
		}

		public function getArea()
		{
			$p = $this->getPerimeter() / 2;
			return pow($p * ($p - $this->getSide1()) * ($p - $this->getSide2()) * ($p - $this->getSide3()), 0.5);
		}

		public function __toString()
		{
			return "Tam giác màu " .$this->getColor(). "<br>"
					."Chu vi: " .$this->getPerimeter(). "<br>"
					."Diện tích: " .$this->getArea(). "<br>";
		}
	}
?>