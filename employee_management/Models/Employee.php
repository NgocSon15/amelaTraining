<?php  
	namespace Models;

	class Employee
	{
		private $firstName;
		private $lastName;
		private $dateOfBirth;
		private $address;
		private $position;

		public function __construct($firstName = NULL, $lastName = NULL, $dateOfBirth = NULL, $address = NULL, $position = NULL)
		{
			$this->firstName = $firstName;
			$this->lastName = $lastName;
			$this->dateOfBirth = $dateOfBirth;
			$this->address = $address;
			$this->position = $position;
		}

		public function getFirstName() {
			return $this->firstName;
		}

		public function setFirstName($firstName) {
			$this->firstName = $firstName;
		}

		public function getLastName() {
			return $this->lastName;
		}

		public function setLastName($lastName) {
			$this->lastName = $lastName;
		}

		public function getDateOfBirth() {
			return $this->dateOfBirth;
		}

		public function setDateOfBirth($dateOfBirth) {
			$this->dateOfBirth = $dateOfBirth;
		}

		public function getAddress() {
			return $this->address;
		}

		public function setAddress($address) {
			$this->address = $address;
		}

		public function getPosition() {
			return $this->position;
		}

		public function setPosition($position) {
			$this->position = $position;
		}
	}
?>