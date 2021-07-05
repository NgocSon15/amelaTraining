<?php  
	class MyList
	{
		public $size;
		public $elements;

		public function __construct($arr = "")
		{
			if (is_array($arr))
			{
				$this->elements = $arr;
				$this->size = count($arr);
			} else {
				$this->elements = array();
				$this->size = 0;
			}
		}

		public function insert($index, $obj)
		{
			if ($this->isInteger($index))
			{
				$this->size = $this->size + 1;
				array_splice($this->elements, $index, 0, $obj);
			} else {
				die("ERROR in ArrayList.insert");
			}		
		}

		public function add($obj)
		{
			array_push($this->elements, $obj);
			$this->size += 1;
		}

		public function remove($index)
		{
			if ($this->isInteger($index) && $index < $this->size) {
				array_splice($this->elements, $index, 1);
			} else {
			    die("ERROR in ArrayList.remove");
			}
		}

		public function get($index)
		{
			if ($this->isInteger($index) && $index < $this->size) {
			    return $this->elements[$index];
			} else {
			    die("ERROR in ArrayList.get");
			}
		}

		public function clear()
		{
			$this->elements = [];
			$this->size = 0;
		}

		public function __toString()
		{
			return implode(", ", $this->elements);
		}

		public function isInteger($toCheck) {
		  	return preg_match("/^[0-9]+$/", $toCheck);
		}
	}
?>