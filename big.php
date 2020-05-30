<?php
	class name{
		public $a;//properties
		public $b;
		public $c;

	public function number ($x,$y,$z){
		$this->a=$x;
		$this->b=$y;
		$this->c=$z;
		if ($this->a > $this->b && $this->a > $this->c) {
			echo "<br>".$this->a." is larg";
		}elseif ($this->b > $this->c) {
			echo "<br>".$this->b." is larg";
		}else{
			echo "<br>".$this->c." is larg";
		}

		if ($this->a < $this->b && $this->a < $this->c) {
			echo "<br>".$this->a." is small";
		}elseif ($this->b < $this->c) {
			echo "<br>".$this->b." is small";
		}else{
			echo "<br>".$this->c." is small";
		}

	}
	public function fibo(){
	 $a=0;
	 $b=1;
	 $i=0;
	 for ($i=0; $i <=10 ; $i++) { 
	 	$c=$a+$b;
	 	echo $c;
	 	$b=$a;
	 	$a=$c;
	 }
	}
	public function grade($m){
		$this->a=$m;
	if ($this->a<=40) {
		echo "Your grade is F";
	}else if ($this->a<=44) {
		echo "Your grade is D";
	}else if ($this->a<=49) {
		echo "Your grade is C";
	}else if ($this->a<=54) {
		echo "Your grade is C+";
	}else if ($this->a<=59) {
		echo "Your grade is B-";
	}else if ($this->a<=64) {
		echo "Your grade is B";
	}else if ($this->a<=69) {
		echo "Your grade is B+";
	}else if ($this->a<=74) {
		echo "Your grade is A-";
	}else if ($this->a<=79) {
		echo "Your grade is A";
	}else if ($this->a<=80) {
		echo "Your grade is A+";
	}	
	}
	public function from(){
		$a=array(1,2,3,8,4,5);
		$b=$a['0'];
		foreach ($a as $key => $value) {
			if ($b<$value) {
				$b=$value;
			}
		}
		echo $b;
	}
	public function bbb(){
		

		

	}
	}
	
?>
