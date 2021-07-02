<?php 
class QuadraticEquation {
	private $a;
	private $b;
	private $c;

	public function setA($a) {
		$this->a = $a;
	}

	public function getA() {
		return $this->a;
	}

	public function setB($b) {
		$this->b = $b;
	}

	public function getB() {
		return $this->b;
	}

	public function setC($c) {
		$this->c = $c;
	}

	public function getC() {
		return $this->c;
	}

	public function getDiscriminant() {
		$delta = pow($this->getB(), 2) - 4 * $this->getA() * $this->getC();
		return $delta;
	}

	public function getRoot1() {
		if ($this->getDiscriminant() >= 0) {
			$root = (-$this->getB() + pow($this->getDiscriminant(), 0.5))/(2 * $this->getA());
			return $root;
		}
		return 0;
	}

	public function getRoot2() {
		if ($this->getDiscriminant() >= 0) {
			$root = (-$this->getB() - pow($this->getDiscriminant(), 0.5))/(2 * $this->getA());
			return $root;
		}
		return 0;
	}
}
?>
