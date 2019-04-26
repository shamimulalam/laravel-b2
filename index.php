<?php

class Institue{
	protected function name()
	{
		echo 'PNT';
	}
}

class Student extends Institue{
	private $id = 10;
	public $name;
	
	public function setId($id)
	{
		$this->id = $id;
		echo $this->id;
	}
	
	public function getId()
	{
		echo $this->id;
	}
	
	public function attendance()
	{
		echo 'Attendance function';
	}
	public function StudentInstitue(){
		echo $this->name();
	}
}

$karim = new Student;

echo '<pre>';
//$karim->setId(100);
print_r($karim);
exit();