<?php  
	class Stack
	{
		public $stack;
		public $limit;

		public function __construct($limit = 10)
		{
			$this->stack = array();
			$this->limit = $limit;
		}

		public function push($item)
		{
			if (count($this->stack) < $this->limit)
			{
				array_unshift($this->stack, $item);
			} else {
				throw new Exception("Stack is full");
			}
		}

		public function pop()
		{
			if ($this->isEmpty())
			{
				throw new Exception("Stack is Empty");
			} else {
				return array_shift($this->stack);
			}
		}

		public function top()
		{
			if ($this->isEmpty())
			{
				throw new Exception("Stack is Empty");				
			} else {
				return current($this->stack);
			}
		}

		public function isEmpty()
		{
			return empty($this->stack);
		}

		public function __toString()
		{
			return implode(", ", $this->stack);
		}
	}
?>