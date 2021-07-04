<?php  
	namespace Services;

	class EmployeeManager
	{
		private static $employees;

		public function __construct() 
		{
			self::$employees = [];
		}

		public function addEmployee($employee) 
		{
			self::$employees[] = $employee;
		}

		public function getEmployees() {
			return self::$employees;
		}
	}
?>