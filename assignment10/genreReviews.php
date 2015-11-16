<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include "top.php";

if (isset($_GET['title'])) {
    $bookTitle = $_GET['title'];
    $newTitle = str_replace("Q", " ", $bookTitle);
    
    
    
    
    $columns = 7;
    $query = 'SELECT * FROM tblUsersBooks WHERE fnkTitle="' . $newTitle . '"';
    $results = $thisDatabaseReader->select($query, "", 1, 1, 2, 0, false, false);
   
   
    print '<table>';
    foreach($results as $res){
        
        print '<tr>';
        print '<td>Reviewed by: ' . $res["fnkEmail"] . '</td>';
        print '<td>Rating: ' . $res["fldRating"] . ' out of 5 stars</td>';
        print '<td>Review: "' . $res["fldDescription"] . '"</td>';
        print '</tr>';
        
}
print '</table>';
    
    
}
