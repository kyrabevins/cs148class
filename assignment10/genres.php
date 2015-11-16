<link rel="stylesheet" href="css/pages.css" type="text/css" media="screen">
<?php
include "top.php";

$columns = 3;
    $query = 'SELECT * FROM tblBooks';
    $info2 = $thisDatabaseReader->select($query,  "", 0, 0, 0, 0, false, false);
    print '<h1 class=pageTitle>Books by Genre</h1>';
    
    $classic = 0;
    $fantasy = 0;
    $fiction = 0;
    $horror = 0;
    $humor = 0;
    $mystery = 0;
    $nonfiction = 0;
    $romance = 0;
    $scifi = 0;
    $other = 0;
    
    print '<section class="genreSection">';
    print '<h1>Classics: </h1>';
    foreach($info2 as $rev){
        
        if($rev["fldGenre"] == "Classic"){
             print '<p class="genreInfo"><a href="https://kbevins.w3.uvm.edu/cs148develop/assignment10/genreReviews.php?title=' . $rev["pmkTitle"] . '">' . $rev["pmkTitle"] . ', Author: ' . $rev["pmkAuthor"] . '</a></p>';
             $classic += 1;
        }
        
        
        }
        print '</section>';
    
    print '<section class="genreSection">';
    print '<h1>Fantasy: </h1>';
    foreach($info2 as $rev){
        
        if($rev["fldGenre"] == "Fantasy"){
             print '<p class="genreInfo"><a href="https://kbevins.w3.uvm.edu/cs148develop/assignment10/genreReviews.php?title=' . $rev["pmkTitle"] . '">' . $rev["pmkTitle"] . ', Author: ' . $rev["pmkAuthor"] . '</a></p>';
             $fantasy += 1;
        }
        
        }
        print '</section>';
        
    print '<section class="genreSection">';
    print '<h1>Fiction: </h1>';
    foreach($info2 as $rev){
        
        if($rev["fldGenre"] == "Fiction"){
             print '<p class="genreInfo"><a href="https://kbevins.w3.uvm.edu/cs148develop/assignment10/genreReviews.php?title=' . $rev["pmkTitle"] . '">' . $rev["pmkTitle"] . ', Author: ' . $rev["pmkAuthor"] . '</a></p>';
             $fiction += 1;
        }
        
        
        }

    print '</section>';

    print '<section class="genreSection">';
    print '<h1>Horror: </h1>';
    foreach($info2 as $rev){
        
        if($rev["fldGenre"] == "Horror"){
             print '<p class="genreInfo"><a href="https://kbevins.w3.uvm.edu/cs148develop/assignment10/genreReviews.php?title=' . $rev["pmkTitle"] . '">' . $rev["pmkTitle"] . ', Author: ' . $rev["pmkAuthor"] . '</a></p>';
             $horror += 1;
        }
        
        
        
        }
        print '</section>';
        
    print '<section class="genreSection">';
    print '<h1>Humor: </h1>';
    foreach($info2 as $rev){
        
        if($rev["fldGenre"] == "Humor"){
             print '<p class="genreInfo"><a href="https://kbevins.w3.uvm.edu/cs148develop/assignment10/genreReviews.php?title=' . $rev["pmkTitle"] . '">' . $rev["pmkTitle"] . ', Author: ' . $rev["pmkAuthor"] . '</a></p>';
             $humor += 1;
        }
        
        
        
        }
        
    print '</section>';
        
    print '<section class="genreSection">';
    print '<h1>Mystery: </h1>';
    foreach($info2 as $rev){
        
        if($rev["fldGenre"] == "Mystery"){
             print '<p class="genreInfo"><a href="https://kbevins.w3.uvm.edu/cs148develop/assignment10/genreReviews.php?title=' . $rev["pmkTitle"] . '">' . $rev["pmkTitle"] . ', Author: ' . $rev["pmkAuthor"] . '</a></p>';
             $mystery += 1;
        }
        
      
        }
    print '</section>';
        
    
    print '<section class="genreSection">';
    print '<h1>Nonfiction: </h1>';
    foreach($info2 as $rev){
        
        if($rev["fldGenre"] == "Nonfiction"){
             print '<p class="genreInfo"><a href="https://kbevins.w3.uvm.edu/cs148develop/assignment10/genreReviews.php?title=' . $rev["pmkTitle"] . '">' . $rev["pmkTitle"] . ', Author: ' . $rev["pmkAuthor"] . '</a></p>';
             $nonfiction += 1;
        }
       
        
        }    
         
        print '</section>';
        
    print '<section class="genreSection">';
    print '<h1>Romance: </h1>';
    foreach($info2 as $rev){
        
        if($rev["fldGenre"] == "Romance"){
             print '<p class="genreInfo"><a href="https://kbevins.w3.uvm.edu/cs148develop/assignment10/genreReviews.php?title=' . $rev["pmkTitle"] . '">' . $rev["pmkTitle"] . ', Author: ' . $rev["pmkAuthor"] . '</a></p>';
             $romance += 1;
        }
        
       
        
        }
        print '</section>';
        
    print '<section class="genreSection">';
    print '<h1>Science Fiction: </h1>';
    foreach($info2 as $rev){
        
        if($rev["fldGenre"] == "Science Fiction"){
             print '<p class="genreInfo"><a href="https://kbevins.w3.uvm.edu/cs148develop/assignment10/genreReviews.php?title=' . $rev["pmkTitle"] . '">' . $rev["pmkTitle"] . ', Author: ' . $rev["pmkAuthor"] . '</a></p>';
             $scifi += 1;
        }
       
        
        }    
        
         
    print '</section>';
    print '<section class="genreSection">';
    print '<h1>Other: </h1>';
    foreach($info2 as $rev){
        
        if($rev["fldGenre"] == "Other"){
             print '<p class="genreInfo"><a href="https://kbevins.w3.uvm.edu/cs148develop/assignment10/genreReviews.php?title=' . $rev["pmkTitle"] . '">' . $rev["pmkTitle"] . ', Author: ' . $rev["pmkAuthor"] . '</a></p>';
             $other += 1;
        }
        
        
        }
        
        
        print '</section>';
    
