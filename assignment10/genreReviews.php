<!DOCTYPE html>
<html lang="en">
    <head>
        <title>CS148 Assignment 10</title>
        <meta charset="utf-8">
        <meta name="author" content="Kyra Bevins">
        <meta name="description" content="This site is for Assignment 10 of CS148.">

        <meta name="viewport" content="width=device-width, initial-scale=1">
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
print '<p><a href="https://kbevins.w3.uvm.edu/cs148/assignment10/genres.php">Back to Genres</a></p>';
    
    
}
 include "footer.php";

