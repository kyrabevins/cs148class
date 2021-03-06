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
    $userId = $_GET['id'];
    $columns = 7;
    $query = 'SELECT * FROM tblUsersBooks, tblBooks WHERE tblUsersBooks.fnkBookId=tblBooks.pmkBookId AND fnkEmail="' . $userId . '"';
    $results = $thisDatabaseReader->select($query, "", 1, 1, 2, 0, false, false);
    print '<table class="usersRevs">';
    
    print '<h2>All Reviews by User</h2>';
    print '<tr>';
    print '<td><b>Title</b></td>';
    print '<td><b>Author</b></td>';
    print '<td><b>Rating</b></td>';
    print '<td><b>Review</b></td>';
    print '<td><b>Favorite?</b></td>';
    print '</tr>';
    foreach($results as $res){
        
        print '<tr>';
        print '<td>' . $res["fldTitle"] . '</td>';
        print '<td>' . $res["fldAuthor"] . '</td>';
        print '<td>' . $res["fldRating"] . ' stars</td>';
        print '<td>' . $res["fldDescription"] . '</td>';
        print '<td>' . $res["fldFavorite"] . '</td>';
        print '</tr>';
        }
        

print '</table>';

print '<p><a href="https://kbevins.w3.uvm.edu/cs148/assignment10/tables.php">Back to Users</a></p>';
    
    
}

include "footer.php";
