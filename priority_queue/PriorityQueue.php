<?php  
	include_once('Patient.php');

	class PriorityQueue
	{
		public $front;
		public $back;

		public function isEmpty()
		{
			return $this->front === null;
		}

		public function enqueue($name, $code)
		{
			$patient = new Patient();
			$patient->name = $name;
			$patient->code = $code;
			if ($this->isEmpty())
			{
				$this->front = $patient;
				$this->back = $patient;
			} else {
				if ($this->front->code > $patient->code)
				{
					$patient->next = $this->front;
					$this->front = $patient;
				} else {
					$currentPatient = $this->front;
					while ($currentPatient !== null && $currentPatient->code <= $patient->code)
					{
						$prevPatient = $currentPatient;
						$currentPatient = $currentPatient->next;
					}
					$prevPatient->next = $patient;
					$patient->next = $currentPatient;
					if ($currentPatient === null) {
						$this->back = $patient;
					}
				}
			}
		}

		public function dequeue()
		{
			if ($this->isEmpty())
			{
				return null;
			} else {
				$removedPatient = $this->front->name;
				$this->front = $this->front->next;
				return $removedPatient;
			}
		}

		public function __toString()
		{
			if ($this->isEmpty())
			{
				return "Không có bệnh nhân nào!<br>";
			} else {
				$currentPatient = $this->front;
				$str = "";
				while ($currentPatient !== null)
				{
					$str .= $currentPatient->name. ", ";
					$currentPatient = $currentPatient->next;
				}
				$str .= "<br>";
				return $str;
			}
		}
	}
?>