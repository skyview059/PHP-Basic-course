<?php
/*
 * Class 4: Functions 
 */

function country($pram = '') {    
    $array = array( 1 => 'India', 2 =>'Pakistan', 3 => 'Bangladesh');       
    
    $option = '<option value="0">--Select Country -- </option>';
    foreach($array as $key => $value){
        
//        if($pram == $key ){ 
//             $option .= '<option selected>'. $value .'</option>';
//        } else {
//             $option .= '<option>'. $value .'</option>';
//        }  
        $option .= '<option';
        $option .= ($pram == $key) ? ' selected': '';
        $option .= '>'. $value .'</option>';               
        
    }
    return $option;

}

// CallBack with Argument


?>

Select Country <select><?php echo country( 2 ); ?><</select>



<?php



/*
 * 
function Math($Digit){
    echo $Digit;
}

$value = Math(9);


$value2 = 10;


echo ($value + $value2);

 */