<?php

class model{
	
	public $conn="";
	function __construct()
	{
		$this->conn=new mysqli('localhost','root','','soul_frame_studio');
		
	}
	
	function select($tbl){
		$sel="select * from $tbl";  // query generate
	         $run=$this->conn-> query($sel);
			 while($fetch=$run->fetch_object()){
				$arr[]=$fetch;

			 }
			 return $arr;
	}
	
	function insert(){
		
	}
	
	function update(){
		
	}
	
	function delete(){
		
	}
	function select_where(){
		
	}
	
}
?>