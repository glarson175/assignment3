<?php 
	// this file will extend PArentClass.php

	class ChildClass extends ParentClass {
    public $n;
    public $y;
    public $s;
		
    public function __construct($name, $year, $stroke) {
      $this->name   = $name;
      $this->year   = $year;
      $this->stroke = $stroke;
    }
    public function getOldName() {
      return parent::getName();
    }
		
    public function updateName($newName) {
      echo "<!-- Setting name to " . $newName . "-->";
      $this->name = $newName;
    }
		
		 public function getOldYear() {
      return parent::getYear();
    }
		
		public function updateYear($newYear) {
      echo $this->getName() . " passed another year. he is now a " . $newYear();
      $this->year = $newYear;
    }
		
		 public function getOldStroke() {
      return parent::getStroke();
    }
		
		public function updateStroke($newStroke) {
      echo "<!-- Setting Stroke to " . $newStroke . "-->";
      $this->stroke = $newStroke;
    }
		
		public function __toString(){
			return $this->getName() . " is a " . $this->getYear() . " who swims " . $this->getStroke();
		}
  }

