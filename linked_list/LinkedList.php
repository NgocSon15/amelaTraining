<?php  
	include_once('Node.php');

	class LinkedList
	{
		public $count;
		public $firstNode;
		public $lastNode;

		public function __construct()
		{
			$this->count = 0;
			$this->firstNode = NULL;
			$this->lastNode = NULL;
		}

		public function add($index, $data)
		{
			if ($index <= $this->count)
			{
				if ($this->firstNode != NULL)
				{
					$currentNode = $this->firstNode;
					for (int $i = 0; $i < $index; $i++)
					{
						$currentNode = $currentNode->next;
					}
					$newNode = new Node($data);
					$newNode->next = $currentNode->next;
					$currentNode->next = $newNode;
					$this->count++;
					if ($currentNode == $this->lastNode)
					{
						$this->lastNode = $newNode;
					}
				} else {
					$this->addFirst($data);
				}
			} else {
				echo "Error in LinkedList.add";
			}
		}

		public function addFirst($data)
		{
			$newNode = new Node($data);
			$newNode->next = $this->firstNode;
			$this->firstNode = $newNode;		

			if($this->lastNode == NULL)
		        $this->lastNode = $newNode;

		    $this->count++;
		}

		public function addLast($data)
		{
			if($this->firstNode != NULL) {
		        $link = new Node($data);
		        $this->lastNode->next = $link;
		        $link->next = NULL;
		        $this->lastNode = $link;
		        $this->count++;
		    } else {
		        $this->addFirst($data);
		    }
		}
	}
?>