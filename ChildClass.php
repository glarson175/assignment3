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
		
		public function __toString(){
			return $this->getName() . " is a swimmer now too";
		}
  }

