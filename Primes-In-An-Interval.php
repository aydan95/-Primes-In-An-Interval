<?
function primesInAnInterval($start,$end){
  $results = array() ; 
  for($i=$start;$i<=$end;$i++){  

          $counter = 0; 
          for($t=1;$t<=$i;$t++){


                if($i % $t==0){ 

                      $counter++;
                }
          }

        
        if($counter==2){
			$results[] = $i ;
        }
    }
	return $results; 
} 

print_r(primesInAnInterval(10,30));
?>