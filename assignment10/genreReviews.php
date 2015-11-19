<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include "top.php";

if (isset($_GET['id'])) {
    $bookId = $_GET['id'];
    //$newTitle = str_replace("Q", " ", $bookTitle);
    
    
    
    
    $columns = 5;
    $query = 'SELECT fldFirstName, fldLastName, fldRating, fldDescription, fldTitle FROM tblUsersBooks, tblBooks, tblUsers WHERE tblUsersBooks.fnkBookId=tblBooks.pmkBookId AND tblUsersBooks.fnkEmail=tblUsers.pmkEmail AND pmkBookId="' . $bookId . '"';
    $results = $thisDatabaseReader->select($query, "", 1, 2, 2, 0, false, false);
   
    
    print '<table class="genrerevs">';
    foreach($results as $res){
        
        print '<tr class="genreRev">';
        print '<td>Reviewed by: ' . $res["fldFirstName"] . " " . $res["fldLastName"] . '</td>';
        print '<td>Rating: ' . $res["fldRating"] . ' out of 5 stars</td>';
        print '<td>Review: "' . $res["fldDescription"] . '"</td>';
        print '</tr>';
        
}
print '</table>';
    
    
}
