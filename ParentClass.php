<?php
	// This is the file for the parent class

	class ParentClass {
    private $n;
    private $y;
    private $s;
		
    public function __construct($n, $y, $s) {
      $this->name    = $n;
      $this->year    = $y;
      $this->stroke  = $s;
    }
		public function getName(){
			return $this->name;
		}
		
		public function setName($newname){
			$this->name = $newname;
		}
		
		public function getYear(){
			return $this->year;
		}
		
		public function setYear($newyear){
			$this->year = $newyear;
		}
		
		public function getStroke(){
			return $this->stroke;
		}
		
		public function setStroke($newstroke){
			$this->stroke = $newstroke;
		}
		
		public function __toString(){
			return $this->getName() . " is a " . $this->getYear() . " who swims " . $this.getStroke();
		}
	}