<?php 
class Functions{
   function findMaxRange($first, $second){
      $max_range = 0;
      if($first <= 0 || $second <= 0){
         echo "<p>Not a valid triangle</p>";
         return;
      }else{
         $max_range = $first + $second - 1;
      }return 'Max range: ' . $max_range;
   }
   function countOnes($number){
      $count = 0;
      for($i = 0; $i < strlen($number); $i++){
         if($number[$i] == '1') $count++;
         elseif($number[$i] == '0') {
            $count - 1;
         }else return;
      }return "Number of ones: " . $count;
   }
   function twoParts($path1, $path2){
      $one = str_replace('/', '', $path1);
      $two = str_replace('/', '', $path2);
      $whole = $one . '/' . $two; 
      return "Path: " . $whole;

   }
   function isSastryNumber($number){
      if($number>0){
         $temp = (string) $number;
         $conc = $temp . ($temp + 1);
         $integer = (int) $conc;
         if($integer >= 0){
            $x = sqrt($integer);
            if (($x - floor($x)) == 0) return $number . '->' . $integer . ' (TRUE)';
            else return $number . '->' . $integer . ' (FALSE)';
         }
      }else return 'Invalid input';
   }      
}