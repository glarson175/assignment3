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
		
		public function getYear(){
			return $this->year;
		}
		
		public function getStroke(){
			return $this->stroke;
		}
		
		public function __toString(){
			return $this->getName() . " is a " . $this->getYear() . " who swims " . $this.getStroke();
		}
	}