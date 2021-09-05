<?php

class Race{

    public $firstname;
    public $tracklist=array();
 	public $positarray=array();
 	public $finalarray=array();
	public $car1=array();
	public $car2=array();
	public $car3=array();
	public $car4=array();
	public $car5=array();
	public $no_Of_rounds = 120;
	public $round_number = 0;
	public $position_car1 = 0;
	public $position_car2 = 0;
	public $position_car3 = 0;
	public $position_car4 = 0;
	public $position_car5 = 0;
	public $total_speed = 22;
	public $emptyArray = array();

    public function __construct()
    {
        
    }

    public function startRace(){
    	//give a max number of speed
		$tracklist=array();
		$positarray=array();
		$car1=array();
		$car2=array();
		$car3=array();
		$car4=array();
		$car5=array();
		$no_Of_rounds = 120;
		$round_number = 0;
		$position_car1 = 0;
		$position_car2 = 0;
		$position_car3 = 0;
		$position_car4 = 0;
		$position_car5 = 0;
		$total_speed = 22;

		//select a random track type
		            $track_type = rand(0,1);
		            if($track_type == 0){
		                $curve_speed_car1 = rand(4,18);
		                $straight_speed_car1 = $total_speed - $curve_speed_car1;
		                $curve_speed_car2 = rand(4,18);
		                $straight_speed_car2 = $total_speed - $curve_speed_car2;
		                $curve_speed_car3 = rand(4,18);
		                $straight_speed_car3 = $total_speed - $curve_speed_car3;
		                $curve_speed_car4 = rand(4,18);
		                $straight_speed_car4 = $total_speed - $curve_speed_car4;
		                $curve_speed_car5 = rand(4,18);
		                $straight_speed_car5 = $total_speed - $curve_speed_car5;
		            }
		            else{
		                $straight_speed_car1 = rand(4,18);
		                $curve_speed_car1 = $total_speed - $straight_speed_car1;
		                $straight_speed_car2 = rand(4,18);
		                $curve_speed_car2 = $total_speed - $straight_speed_car2;
		                $straight_speed_car3 = rand(4,18);
		                $curve_speed_car3 = $total_speed - $straight_speed_car3;
		                $straight_speed_car4 = rand(4,18);
		                $curve_speed_car4 = $total_speed - $straight_speed_car4;
		                $straight_speed_car5 = rand(4,18);
		                $curve_speed_car5 = $total_speed - $straight_speed_car5;
		            
		        
		            }
		        $courveCount = 0;
		        $straightCount = 0;
		        $courveCountt = 0;
		        while (count($tracklist)<2000){
		            $tracktype = rand(0, 1);
		            if($tracktype == 0){
		                if($courveCount < 26 and count($tracklist)<2000){
		                    $trackCount = 0;
		                    while ($trackCount < 40 and count($tracklist)<2000){
		                        array_push($tracklist,"curve");
		                        $trackCount++;
		                    }
		                    $courveCount++;
		                }
		                else{
		                    $trackCount = 0;
		                    while ($trackCount < 41 and count($tracklist)<2000){
		                        array_push($tracklist,"straight");
		                        $trackCount++;

		                    }
		                    $straightCount++;
		                

		                }
		            }
		            else{
		                if($straightCount<26 and count($tracklist)<2000){
		                    $trackCount = 0;
		                    while ($trackCount < 40 and count($tracklist)<2000){
		                        array_push($tracklist,"straight");
		                        $trackCount++;
		                    }
		                    $straightCount++;

		                }
		                else{
		                    $trackCount = 0;
		                    while ($trackCount < 41 and count($tracklist)<2000){
		                        array_push($tracklist,"curve");
		                        $trackCount++;

		                    }
		                    $courveCount++;

		                }
		         

		            
		            }
		    

		        }

		        while ($position_car1 <= 1 or $position_car2 <= 1 or $position_car3 <= 1 or $position_car4 <= 1 or $position_car5 <= 1){
		        	

		        	while(($position_car1 < 1)){
		                if ($tracklist[$position_car1] == "curve"){
		                    if($tracklist[$position_car1 + $curve_speed_car1] == "curve"){
		                        $position_car1 = $position_car1 + $curve_speed_car1;
		                        array_push($car1,$position_car1);
		                    
		                    }elseif(($tracklist[$position_car1 + $curve_speed_car1 - 1] == "curve") and ($tracklist[$position_car1 + $curve_speed_car1] == "straight")  ){
		                        $position_car1 = $position_car1 + $curve_speed_car1;
		                        array_push($car1, $position_car1);
		                    }
		                    else{
		                        $cspeed = 2;
		                        while (($curve_speed_car1-$cspeed) > 0 ){
		                            if($tracklist[$position_car1 + $curve_speed_car1-$cspeed] != "curve" ){
		                                $cspeed++;
		                                
		                            
		                            }else{
		                                $position_car1 = $position_car1 + $curve_speed_car1 - $cspeed;
		                                array_push($car1,$position_car1);
		                            
		                            }
		                            
		                        
		                        }
		                        
		                        
		                    
		                    }
		                    
		                }
		                if ($tracklist[$position_car1] == "straight"){
		                    if($tracklist[$position_car1 + $straight_speed_car1] == "straight"){
		                        $position_car1 = $position_car1 + $straight_speed_car1;
		                        array_push($car1,$position_car1);
		                    
		                    }elseif(($tracklist[$position_car1 + $straight_speed_car1 - 1] == "straight" ) and ($tracklist[$position_car1 + $curve_speed_car1] == "curve")  ){
		                        $position_car1 = $position_car1 + $straight_speed_car1;
		                        array_push($car1,$position_car1);
		                    }
		                    else{
		                        $cspeed = 2;
		                        while (($straight_speed_car1-$cspeed) > 0 ){
		                            if($tracklist[$position_car1 + $straight_speed_car1-$cspeed] != "straight" ){
		                                $cspeed++;
		                                
		                            
		                            }else{
		                                $position_car1 = $position_car1 + $straight_speed_car1 - $cspeed;
		                                array_push($car1,$position_car1);
		                                
		                            
		                            }
		                            
		                        
		                        }
		                        
		                        
		                    
		                    }
		                    
		                }
		                
		                
		                
		                
		            }
		            while(($position_car2 < 4)){
                if ($tracklist[$position_car2] == "curve"){
                    if($tracklist[$position_car2 + $curve_speed_car2] == "curve"){
                        $position_car2 = $position_car2 + $curve_speed_car2;
                        array_push($car2,$position_car2);
                    
                    }elseif(($tracklist[$position_car2 + $curve_speed_car2 - 1] == "curve") and ($tracklist[$position_car2 + $curve_speed_car2] == "straight")  ){
                        $position_car2 = $position_car2 + $curve_speed_car2;
                        array_push($car2, $position_car2);
                    }
                    else{
                        $cspeed = 2;
                        while (($curve_speed_car2-$cspeed) > 0 ){
                            if($tracklist[$position_car2 + $curve_speed_car2-$cspeed] != "curve" ){
                                $cspeed++;
                                
                            
                            }else{
                                $position_car2 = $position_car2 + $curve_speed_car2 - $cspeed;
                                array_push($car2,$position_car2);
                            
                            }
                            
                        
                        }
                        
                        
                    
                    }
                    
                }
                if ($tracklist[$position_car2] == "straight"){
                    if($tracklist[$position_car2 + $straight_speed_car2] == "straight"){
                        $position_car2 = $position_car2 + $straight_speed_car2;
                        array_push($car2,$position_car2);
                    
                    }elseif(($tracklist[$position_car2 + $straight_speed_car2 - 1] == "straight" ) and ($tracklist[$position_car2 + $curve_speed_car2] == "curve")  ){
                        $position_car2 = $position_car2 + $straight_speed_car2;
                        array_push($car2,$position_car2);
                    }
                    else{
                        $cspeed = 2;
                        while (($straight_speed_car2-$cspeed) > 0 ){
                            if($tracklist[$position_car2 + $straight_speed_car2-$cspeed] != "straight" ){
                                $cspeed++;
                                
                            
                            }else{
                                $position_car2 = $position_car2 + $straight_speed_car2 - $cspeed;
                                array_push($car2,$position_car2);
                                
                            
                            }
                            
                        
                        }
                        
                        
                    
                    }
                    
                }
                
                
                
                
            }
            
		            while(($position_car3 < 4)){
                if ($tracklist[$position_car3] == "curve"){
                    if($tracklist[$position_car3 + $curve_speed_car3] == "curve"){
                        $position_car3 = $position_car3 + $curve_speed_car3;
                        array_push($car3,$position_car3);
                    
                    }elseif(($tracklist[$position_car3 + $curve_speed_car3 - 1] == "curve") and ($tracklist[$position_car3 + $curve_speed_car3] == "straight")  ){
                        $position_car3 = $position_car3 + $curve_speed_car3;
                        array_push($car3, $position_car3);
                    }
                    else{
                        $cspeed = 2;
                        while (($curve_speed_car3-$cspeed) > 0 ){
                            if($tracklist[$position_car3 + $curve_speed_car3-$cspeed] != "curve" ){
                                $cspeed++;
                                
                            
                            }else{
                                $position_car3 = $position_car3 + $curve_speed_car3 - $cspeed;
                                array_push($car3,$position_car3);
                            
                            }
                            
                        
                        }
                        
                        
                    
                    }
                    
                }
                if ($tracklist[$position_car3] == "straight"){
                    if($tracklist[$position_car3 + $straight_speed_car3] == "straight"){
                        $position_car3 = $position_car3 + $straight_speed_car3;
                        array_push($car3,$position_car3);
                    
                    }elseif(($tracklist[$position_car3 + $straight_speed_car3 - 1] == "straight" ) and ($tracklist[$position_car3 + $curve_speed_car3] == "curve")  ){
                        $position_car3 = $position_car3 + $straight_speed_car3;
                        array_push($car3,$position_car3);
                    }
                    else{
                        $cspeed = 2;
                        while (($straight_speed_car3-$cspeed) > 0 ){
                            if($tracklist[$position_car3 + $straight_speed_car3-$cspeed] != "straight" ){
                                $cspeed++;
                                
                            
                            }else{
                                $position_car3 = $position_car3 + $straight_speed_car3 - $cspeed;
                                array_push($car3,$position_car3);
                                
                            
                            }
                            
                        
                        }
                        
                        
                    
                    }
                    
                }
                
                
                
                
            }
            
		            while(($position_car4 < 4)){
                if ($tracklist[$position_car4] == "curve"){
                    if($tracklist[$position_car4 + $curve_speed_car4] == "curve"){
                        $position_car4 = $position_car4 + $curve_speed_car4;
                        array_push($car4,$position_car4);
                    
                    }elseif(($tracklist[$position_car4 + $curve_speed_car4 - 1] == "curve") and ($tracklist[$position_car4 + $curve_speed_car4] == "straight")  ){
                        $position_car4 = $position_car4 + $curve_speed_car4;
                        array_push($car4, $position_car4);
                    }
                    else{
                        $cspeed = 2;
                        while (($curve_speed_car4-$cspeed) > 0 ){
                            if($tracklist[$position_car4 + $curve_speed_car4-$cspeed] != "curve" ){
                                $cspeed++;
                                
                            
                            }else{
                                $position_car4 = $position_car4 + $curve_speed_car4 - $cspeed;
                                array_push($car4,$position_car4);
                            
                            }
                            
                        
                        }
                        
                        
                    
                    }
                    
                }
                if ($tracklist[$position_car4] == "straight"){
                    if($tracklist[$position_car4 + $straight_speed_car4] == "straight"){
                        $position_car4 = $position_car4 + $straight_speed_car4;
                        array_push($car4,$position_car4);
                    
                    }elseif(($tracklist[$position_car4 + $straight_speed_car4 - 1] == "straight" ) and ($tracklist[$position_car4 + $curve_speed_car4] == "curve")  ){
                        $position_car4 = $position_car4 + $straight_speed_car4;
                        array_push($car4,$position_car4);
                    }
                    else{
                        $cspeed = 2;
                        while (($straight_speed_car4-$cspeed) > 0 ){
                            if($tracklist[$position_car4 + $straight_speed_car4-$cspeed] != "straight" ){
                                $cspeed++;
                                
                            
                            }else{
                                $position_car4 = $position_car4 + $straight_speed_car4 - $cspeed;
                                array_push($car4,$position_car4);
                                
                            
                            }
                            
                        
                        }
                        
                        
                    
                    }
                    
                }
                
                
                
               
            }
            

		          while(($position_car5 < 1)){
		                if ($tracklist[$position_car5] == "curve"){
		                    if($tracklist[$position_car5 + $curve_speed_car5] == "curve"){
		                        $position_car5 = $position_car5 + $curve_speed_car5;
		                        array_push($car5,$position_car5);
		                    
		                    }elseif(($tracklist[$position_car5 + $curve_speed_car5 - 1] == "curve") and ($tracklist[$position_car5 + $curve_speed_car5] == "straight")  ){
		                        $position_car5 = $position_car5 + $curve_speed_car5;
		                        array_push($car5, $position_car5);
		                    }
		                    else{
		                        $cspeed = 2;
		                        while (($curve_speed_car5-$cspeed) > 0 ){
		                            if($tracklist[$position_car5 + $curve_speed_car5-$cspeed] != "curve" ){
		                                $cspeed++;
		                                
		                            
		                            }else{
		                                $position_car5 = $position_car5 + $curve_speed_car5 - $cspeed;
		                                array_push($car5,$position_car5);
		                            
		                            }
		                            
		                        
		                        }
		                        
		                        
		                    
		                    }
		                    
		                }
		                if ($tracklist[$position_car5] == "straight"){
		                    if($tracklist[$position_car5 + $straight_speed_car5] == "straight"){
		                        $position_car5 = $position_car5 + $straight_speed_car5;
		                        array_push($car5,$position_car5);
		                    
		                    }elseif(($tracklist[$position_car5 + $straight_speed_car5 - 1] == "straight" ) and ($tracklist[$position_car5 + $curve_speed_car5] == "curve")  ){
		                        $position_car5 = $position_car5 + $straight_speed_car5;
		                        array_push($car5,$position_car5);
		                    }
		                    else{
		                        $cspeed = 2;
		                        while (($straight_speed_car5-$cspeed) > 0 ){
		                            if($tracklist[$position_car5 + $straight_speed_car5-$cspeed] != "straight" ){
		                                $cspeed++;
		                                
		                            
		                            }else{
		                                $position_car5 = $position_car5 + $straight_speed_car5 - $cspeed;
		                                array_push($car5,$position_car5);
		                                
		                            
		                            }
		                            
		                        
		                        }
		                        
		                        
		                    
		                    }
		                    
		                }
		                
		                
		                
		                
		            }

		        	

		        	//dont delete
		        	$finish_index_car1 = $car1[count($car1)-1];
					array_push($positarray,$finish_index_car1);
					$finish_index_car2 = $car2[count($car2)-1];
					array_push($positarray,$finish_index_car2);
					$finish_index_car3 = $car3[count($car3)-1];
					array_push($positarray,$finish_index_car3);
					$finish_index_car4 = $car4[count($car4)-1];
					array_push($positarray,$finish_index_car4);
					$finish_index_car5 = $car5[count($car5)-1]; 
					array_push($positarray,$finish_index_car5);
		        	
		        	$emptyArray[$round_number] = array( $finish_index_car1, $finish_index_car2, $finish_index_car3, $finish_index_car4,$finish_index_car5);

		        	$round_number++;
		        	//$emptyArray[$round_number] = array( $finish_index_car2, $finish_index_car2, $finish_index_car3, $finish_index_car4,$finish_index_car5);
		        }
		        
		        //while ($position_car1 < count($tracklist)){
		            
		            
		            
		            
		            
		            
		            
		        
		        //} 
		       
		        
		        
		// $finish_index_car1 = $car1[count($car1)-1];
		// array_push($finalarray,$finish_index_car1);
		// $finish_index_car2 = $car2[count($car2)-1];
		// array_push($finalarray,$finish_index_car2);
		// $finish_index_car3 = $car3[count($car3)-1];
		// array_push($$finalarray,$finish_index_car3);
		// $finish_index_car4 = $car4[count($car4)-1];
		// array_push($finalarray,$finish_index_car4);
		// $finish_index_car5 = $car5[count($car5)-1]; 
		// array_push($finalarray,$finish_index_car5);

		//rsort($positarray);  


		//select a random number between 4 and 18
		//assign respective speed
		echo ("Race Result = ");
		print_r ($emptyArray[count($emptyArray)-1]);
		//echo ($round_number);

    }

   
}
$formula1 = new Race ();

echo $formula1->startRace();

   
		        