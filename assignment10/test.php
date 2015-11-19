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
    
    foreach($results as $res){
        print '<tr>';
        print '<td>' . $res["fldTitle"] . '</td>';
        print '<td>' . $res["fldAuthor"] . '</td>';
        print '<td>' . $res["fldDateFinished"] . '</td>';
        print '<td>' . $res["fldRating"] . ' stars</td>';
        print '<td>' . $res["fldDescription"] . '</td>';
        print '</tr>';
        
}
print '</table>';

print '<p><a href="https://kbevins.w3.uvm.edu/cs148/assignment10/tables.php">Back to Users</a></p>';
    
    
}
