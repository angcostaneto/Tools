<?php

/**
 * Recupera o valor maior e mais proximo do array
 */
function getClosest($search, $array) {
  foreach ($array as &$item) {
   if ($search > $item && $search <= current($array)) {
     return current($array);
   }
    else if ($search <= $item) {
        return $item;
    }      
 }
}