<!DOCTYPE html>
<html lang="en">
    <head>
        <title>CS148 Assignment 10</title>
        <meta charset="utf-8">
        <meta name="author" content="Kyra Bevins">
        <meta name="description" content="This site is for Assignment 10 of CS148.">

        <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/pages.css" type="text/css" media="screen">
<?php
include "top.php";

$columns = 8;
    $query = 'SELECT pmkReviewId,fnkEmail,fldTitle,fldAuthor,fldFirstName,fldLastName,fldRating,fldDescription FROM tblUsers,tblUsersBooks, tblBooks WHERE tblUsers.pmkEmail = tblUsersBooks.fnkEmail AND tblUsersBooks.fnkBookId=tblBooks.pmkBookId ORDER BY fldDateReviewed';
    $info2 = $thisDatabaseReader->select($query,  "", 1, 2, 0, 0, false, false);
    print '<h1 class=pageTitle>Latest Reviews</h1>';
    print '<h2>Total Reviews: ' . count($info2) . "</h2>";
    print '<br>';
    
    

    

    
    foreach ($info2 as $rev) {
        
        
        print '<section class="reviews">';
        
        print '<h3 class="title">Title: ' . $rev["fldTitle"] . '<a href="https://kbevins.w3.uvm.edu/cs148/assignment10/form.php?id=' . $rev["pmkReviewId"] . '">   [Edit]' . "</a><br>";
        
        
        print '<p><b>Reviewer: </b>' . $rev["fldFirstName"] . " " . $rev["fldLastName"] . '</p>';
        print '<p><b>Rating: </b>' . $rev["fldRating"] . ' stars</p>';
       
        print '<p class="description">"' . $rev["fldDescription"] . '"</p>';
        print '<h3 class="delete"><a href="https://kbevins.w3.uvm.edu/cs148/assignment10/form2.php?id=' . $rev["pmkReviewId"] . '">' . 'Delete' . "</a><br>";
        
        print '</section>';
       //}
        
        
        
    }
    
include "footer.php";
?>
