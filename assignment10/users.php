<?php
//##############################################################################
//
// This page lists your tables and fields within your database. if you click on
// a database name it will show you all the records for that table. 
// 
// 
// This file is only for class purposes and should never be publicly live
//##############################################################################
include "top.php";
$admin = true;

$columns = 8;
    
    $query = 'SELECT fldFirstName, fldLastName, pmkEmail, fnkTitle, fnkAuthor, fldDateFinished, fldRating, fldDescription FROM tblUsers, tblUsersBooks WHERE tblUsers.pmkEmail = tblUsersBooks.fnkEmail ORDER BY pmkEmail, fldDateFinished DESC';
    $info2 = $thisDatabaseReader->select($query,  "", 1, 1, 0, 0, false, false);
    //$info2 = $thisDatabaseReader->testquery($query,  "", 0, 1, 0, 0, false, false);
    
   print '<br>';
   $user = "";
   $totalReviews = 0;
   
   
   foreach($info2 as $rev){
       if ($admin) {
           print '<aside class="users">';
           print '<h3>Title: ' . '<a href="https://kbevins.w3.uvm.edu/cs148develop/assignment10/form.php?title=' . $rev["pmkTitle"] . '">' . '[Edit]' . $rev["fnkTitle"] . "</a><br>";
           print '<h3>Author: ' . $rev["fnkAuthor"] . "<br>";
           print '<h4>Date Finished: ' . $rev["fldDateFinished"] . '<br>';
           print '<h4>Rating: ' . $rev["fldRating"] . ' stars<br>';
           print '<p>"' . $rev["fldDescription"] . '"';
           
           print '</aside>';
           
       
   }
    
       elseif ($rev["pmkEmail"] != $user){
           
           print '<h2>' . $rev["fldFirstName"] . " " . $rev["fldLastName"] . '</h2>';
           print '<aside class="users">';
           print '<h3>Title: ' . $rev["fnkTitle"] . "<br>";
           print '<h3>Author: ' . $rev["fnkAuthor"] . "<br>";
           print '<h4>Date Finished: ' . $rev["fldDateFinished"] . '<br>';
           print '<h4>Rating: ' . $rev["fldRating"] . ' stars<br>';
           print '<p>"' . $rev["fldDescription"] . '"';
           
           
          print '</aside>';
           
          $user = $rev["pmkEmail"];
           
       }
       
          
       else{
           print '<aside class="users">';
           print '<h3>Title: ' . $rev["fnkTitle"] . "<br>";
           print '<h3>Author: ' . $rev["fnkAuthor"] . "<br>";
           print '<h4>Date Finished: ' . $rev["fldDateFinished"] . '<br>';
           print '<h4>Rating: ' . $rev["fldRating"] . ' stars<br>';
           print '<p>"' . $rev["fldDescription"] . '"';
           print '</aside>';
           
       }
       
   }
    
   



    

    $highlight = 0; // used to highlight alternate rows
    
    
    foreach ($info2 as $rec) {
        $highlight++;
        if ($highlight % 2 != 0) {
            $style = ' odd ';
        } else {
            $style = ' even ';
        }
        print '<tr class="' . $style . '">';
        
        print '</tr>';
    }
    // all done
    print '</table>';
    
include "footer.php";
?>