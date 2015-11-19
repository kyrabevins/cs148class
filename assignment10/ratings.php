<link rel="stylesheet" href="css/pages.css" type="text/css" media="screen">
<?php
include "top.php";

$columns = 3;
    $query = 'SELECT fldTitle, fldAuthor, AVG(fldRating) AS rate FROM tblUsersBooks, tblBooks WHERE tblUsersBooks.fnkBookId=tblBooks.pmkBookId GROUP BY fldTitle ORDER BY rate DESC';
    $info2 = $thisDatabaseReader->select($query,  "", 1, 1, 0, 0, false, false);
    print '<h1 class=pageTitle>Books by Average Rating</h1>';
    
    print '<section class="sectionRatings">';

    print '<h1>5 Stars: </h1>';
    foreach($info2 as $rev){
        if($rev["rate"] <= 5 && $rev["rate"] >= 4.5){
            print '<p>' . $rev["fldTitle"] . ', Average rating: ' . $rev["rate"] . '</p>';
             
             
    }
    
        }
        print '</section>';
        print '<section class="sectionRatings">';
        
    print '<h1>4 Stars: </h1>';
    foreach($info2 as $rev){
        if($rev["rate"] < 4.5 && $rev["rate"] >= 3.5){
             print '<p>' . $rev["fldTitle"] . ', Average rating: ' . $rev["rate"] . '</p>';
             
    }}
    print '</section>';
    print '<section class="sectionRatings">';
    print '<h1>3 Stars: </h1>';
    foreach($info2 as $rev){
        if($rev["rate"] < 3.5 && $rev["rate"] >= 2.5){
             print '<p>' . $rev["fldTitle"] . ', Average rating: ' . $rev["rate"] . '</p>';
             
    }}
    print '</section>';
    print '<section class="sectionRatings">';
    print '<h1>2 Stars: </h1>';
    foreach($info2 as $rev){
        if($rev["rate"] < 2.5 && $rev["rate"] >= 1.5){
             print '<p>' . $rev["fldTitle"] . ', Average rating: ' . $rev["rate"] . '</p>';
             
    }}
    print '</section>';
        print '<section class="sectionRatings">';
    print '<h1>1 Star: </h1>';
    foreach($info2 as $rev){
        if($rev["rate"] < 1.5 && $rev["rate"] >= 0){
             print '<p>' . $rev["fldTitle"] . ', Average rating: ' . $rev["rate"] . '</p>';
             
    }}
    
    print '</section>';
        
    
