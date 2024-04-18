<?php

function PerfectSquare($n) { 
    $s = (int)sqrt($n); 
    return ($s * $s == $n); 
} 
  
function checkFibonacci($n) { 
    return PerfectSquare(5 * $n * $n + 4)  
        || PerfectSquare(5 * $n * $n - 4); 
} 
  
// Driver code 
$n = 3; 

echo "Fibonacci Number:\n";
  
if (checkFibonacci($n)) { 
    echo "YES"; 
} else { 
    echo "NO"; 
} 
