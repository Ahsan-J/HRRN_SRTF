<?php 
	class process_block{
		private $Process_ID = 0 ;
		private $color='';
		public $P_arr = array();
		public $PC = 0 ;
		public $Flag = false;
		public $Arrival=false;
		public function __construct($P_ID,$arr_index){
			$this->Process_ID = $P_ID;
			switch ($P_ID){
				case 1 :
				$this->color='rgb(255,0,0);';
				break;
				
				case 2 :
				$this->color='rgb(0,255,0);';
				break;
				
				case 3 :
				$this->color='rgb(0,0,255);';
				break;
			}
			for($i=0;$i<$arr_index;$i++){
				$this->P_arr[$i]=rand(10,100);
			}
		}
		public function getStyle(){
			$output = '';
			$output .= 'display:inline;float:left;width:40px;height:40px;';
			$output .= 'margin:1px;';
			$output .= 'border:1px solid;background-color:'.$this->color.';';
		return $output;
	}
	public function PrintBlock(){
		
		$output = '';
		$output .= '<p style="'.$this->getStyle().'">P'.$this->Process_ID.'</p>';
		return $output;
	}
}
	
	function Timeline($count){
		$output = '';
		$output .= '<br/><br/><hr/>';
		$output .= '<p style="display:inline;float:left;width:40px;height:5px;margin:0px 2px;text-align:center;="></p>';
		for($i=0;$i<$count;$i++){
		$output .= '<p style="display:inline;float:left;width:40px;height:5px;margin:0px 2px;text-align:center;=">'.$i.'</p>';
		}
		return $output;
	}
?>
