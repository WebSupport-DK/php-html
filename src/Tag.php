<?php 
/* 
 * Class for outputting html tags
 */ 

namespace Datalaere\PHPHtml; 

class Tag 
{ 

    public static function br($input, $postion = 'around') 
    { 
        switch ($postion) { 
            case 'around': 
                echo '<br>' . $input . '<br>'; 
                break; 

            default: 
                break ; 
        } 
    } 
     
    public static function p($input, $postion = 'around') 
    { 
        switch ($postion) { 
            case 'around': 
                echo '<p>' . $input . '</p>' ; 
                break ; 

            default: 
                break ; 
        } 
    } 
     
    public static function div($input, $postion = 'around', $options = null) 
    { 
        switch ($postion) { 
            case 'around': 
                echo "<div $options>" . $input . "</div>" ; 
                break ; 

            default: 
                break ; 
        } 
    } 

} 
