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

$columns =4;
    $query = 'SELECT * FROM tblUsers';
    $users = $thisDatabaseReader->select($query,  "", 0, 0, 0, 0, false, false);
    
    print '<h1 class=pageTitle>Search Reviews by User</h1>';
    
    
    foreach($users as $user){
        print '<section class="usersSection">';
        print '<a href="https://kbevins.w3.uvm.edu/cs148/assignment10/test.php?id=' . $user["pmkEmail"] . '"><img src="https://kbevins.w3.uvm.edu/cs148/assignment10/images/user.png" alt="user" class="user"></a>';
        print '<h2 class="userHeading"><a href="https://kbevins.w3.uvm.edu/cs148/assignment10/test.php?id=' . $user["pmkEmail"] . '">'  . $user["fldFirstName"] . " " . $user["fldLastName"] . '</a></h2>';
        print '</section>';
        
    }
