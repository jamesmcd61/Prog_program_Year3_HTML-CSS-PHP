<!-- Name:James Mcdonald
	 Student Number :18011160
	 Lecturer Name :Rothman
	 admin@rothman.za.bz
	 
	 Declaration:i hereby declare that this is my own work and 
	 any code obtained by other sources will be refrenced.
-->
<?php 



	class ShoppingCart  	
	{  
		public $cid = array();  
		public $cquan = array(); 
		private $Item_ID = "";
		private $Quantity ="";
		private $i = 0;
	   
 
		public function __construct()      
		{   

        }   
		

		function insert($id,$quantity){ 
			array_push($this->cid,($id));
			array_push($this->cquan,($quantity));

		} 
		function remove($Q){ 
        // unset & save 

				if(isset($this->cquan[$Q]))
				{

					if($this->cquan[$Q] >= 1)
					{
						$this->cquan[$Q] -= 1;

					}
					else
					{
						unset($this->cquan[$Q]);
						unset($this->cid[$Q]);
					}

				}
			
		} 
		
		function addmore($q){ 
        // unset & save 

				if(isset($this->cquan[$q]))
				{
						$this->cquan[$q] += 1;	
				}

		} 
		
		
		function emptycart(){ 
        // unset & save 
			 $this->cid = array();  
			 $this->cquan = array(); 
			 echo"hi";
		} 
	  

		
		 function setcid($cid)
		{
			$this->cid;
		}
		public function getcid()
		{
			return $this->cid;
		}
		
		 function setcquan($Quantity)
		{
			$this->cquan;
		}
		 function getcquan()
		{
			return $this->cquan;
		}

		}
	
	?>