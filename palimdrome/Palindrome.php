<?php  
/** 
 * find the longest palindrome in a string 
 * website : neerusite.wordpress.com
 * Auther : Devdutt Sharma
 */ 

function longestPalindrome($string = ''){
    
    $strArr = array();
    for($i=0; $i<strlen($string); $i++ )  
    {  
        $palindrome = true; 
        $offset = 1; 
        
        while($palindrome)  
        { 
            $word = substr($string, $i-$offset, ($offset*2)+1 ); 
            if( $word == strrev($word) ) { 
                //print strlen($word) .' '. $word.'<br />'; 
                $strArr[$word] = strlen($word);           
            } else { 
                $palindrome = false; 
            } 

            $offset++; 
        } 


    } 

    $finArr = max($strArr);
    echo $key = array_search ($finArr, $strArr);
}

longestPalindrome($string = "babad");
?> 