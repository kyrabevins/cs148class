<link rel="stylesheet" href="css/pages.css" type="text/css" media="screen">
<?php
include "top.php";
$admin = true;
$columns = 6;
    $query = 'SELECT fnkTitle,fnkAuthor,fldFirstName,fldLastName,fldRating,fldDescription FROM tblUsers,tblUsersBooks WHERE tblUsers.pmkEmail = tblUsersBooks.fnkEmail ORDER BY fldDateReviewed';
    $info2 = $thisDatabaseReader->select($query,  "", 1, 1, 0, 0, false, false);
    print '<h1 class=pageTitle>Latest Reviews</h1>';
    print '<h2>Total Reviews: ' . count($info2) . "</h2>";
    print '<br>';
    
    

  
    
    foreach ($info2 as $rev) {
        
        if($admin){
        print '<section class="reviews">';
        
        print '<h3 class="title">Title: ' . '<a href="https://kbevins.w3.uvm.edu/cs148/assignment10/form.php?title=' . $rev["fnkTitle"] . '">' .  $rev["fnkTitle"] . '   [Edit]' . "</a><br>";
        print '<p><b>Reviewer: </b>' . $rev["fldFirstName"] . " " . $rev["fldLastName"] . '</p>';
        print '<p><b>Rating: </b>' . $rev["fldRating"] . ' stars</p>';
       
        print '<p class="description">"' . $rev["fldDescription"] . '"</p>';
        
        print '</section>';
        }
        
        else{
        print '<section class="reviews">';
        
        print '<h3 class="title">' . $rev["fnkTitle"] . "</h3><b> Author: </b>" . $rev["fnkAuthor"] . '</p>';
        print '<p><b>Reviewer: </b>' . $rev["fldFirstName"] . " " . $rev["fldLastName"] . '</p>';
        print '<p><b>Rating: </b>' . $rev["fldRating"] . ' stars</p>';
       
        print '<p class="description">"' . $rev["fldDescription"] . '"</p>';
        
        print '</section>';
        }
        
    }
    
include "footer.php";
?>
