<?php

/*
 * This file is part of the 'Advance var dumper' package.
 *
 * (c) M.Tuhin <tuhin@codesolz.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if (!function_exists('pre_print')) {
    
    function pre_print( $data = '', $text = '' ){
        echo "<pre> \n------------------------------DEBUG MODE START------------------------------\n\n";
        echo empty($text) ? '': $text ."\n\n";
        $bt = debug_backtrace();
        $caller = array_shift($bt);
        echo "File Name: " . $caller['file'];
        echo "\nLine No: " . $caller['line'] . "\n\n";
        if( empty($data) ){
            echo 'Nothing Found! - M.TUHIN!';
        }else{
            print_r( $data );
        }
        die( "\n\n------------------------------DEBUG MODE END------------------------------");
    }
}

?>