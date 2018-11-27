<?php
 
function stock($art)
{
	$fin=0;
    foreach ($art as $key ) {
    	$fin=$fin+$key->stock;
    }

   return $fin;
}