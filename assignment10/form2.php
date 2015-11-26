<?php
/* the purpose of this page is to display a form to allow a poet and allow us
 * to add a new poet or update an existing poet 
 * 

 
 */
include "top.php";
//%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%
//
// SECTION: 1 Initialize variables
$update = false;
$debug = true;

// SECTION: 1a.
//%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%
//
// SECTION: 1b Security
//
// define security variable to be used in SECTION 2a.
$yourURL = $domain . $phpSelf;

//%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%
//
// SECTION: 1c form variables
//
// Initialize variables one for each form element
// in the order they appear on the form

//
if (isset($_GET["id"])) {
    $pmkBookId = (int) htmlentities($_GET["id"], ENT_QUOTES, "UTF-8");
    
    
    $query = 'SELECT pmkBookId, pmkReviewId, fldDescription, fldTitle, fldAuthor, fldGenre,fldFirstName,fldLastName,fldRating, pmkEmail FROM tblUsersBooks, tblBooks, tblUsers WHERE tblUsersBooks.fnkBookId=tblBooks.pmkBookId AND tblUsersBooks.fnkEmail=tblUsers.pmkEmail AND pmkReviewId = ?';
    $results = $thisDatabaseReader->select($query, array($pmkBookId), 1, 2, 0, 0, false, false);
    $pmkEmail = $results[0]["pmkEmail"];
    $fldFirstName = $results[0]["fldFirstName"];
    $fldLastName = $results[0]["fldLastName"];
    $fldTitle = $results[0]["fldTitle"];
    $fldAuthor = $results[0]["fldAuthor"];
    $fldGenre = $results[0]["fldGenre"];
    $fldRating = $results[0]["fldRating"]; 
    $pmkReviewId = $results[0]["pmkReviewId"];
    $fldFavorite = "";
    $fldDescription = $results[0]["fldDescription"];
    
    
   
   
   
    } 
    
    else {
    $pmkBookId = -1;
    $pmkEmail = "";
    $fldFirstName = "";
    $fldLastName = "";
    $fldTitle = "";
    $fldAuthor = "";
    $fldGenre = "Classic";
    $fldRating = 1;
    $fldFavorite = "";
    $fldDescription = "";
    
    
}


    


//%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%
//
// SECTION: 1d form error flags
//
// Initialize Error Flags one for each form element we validate
// in the order they appear in section 1c.
$pmkEmailERROR = false;
$fldFirstNameERROR = false;
$fldLastNameERROR = false;
$fldTitleERROR = false;
$fldAuthorERROR = false;
$fldGenreERROR = false;
$fldDescriptionERROR = false;
//%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%
//
// SECTION: 1e misc variables
//
// create array to hold error messages filled (if any) in 2d displayed in 3c.
$errorMsg = array();
$data = array();
$data2 = array();
$data3 = array();
$dataEntered = false;

//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//
// SECTION: 2 Process for when the form is submitted
//
if (isset($_POST["btnSubmit"])) {
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//
// SECTION: 2a Security
//
    /*    if (!securityCheck(true)) {
      $msg = "<p>Sorry you cannot access this page. ";
      $msg.= "Security breach detected and reported</p>";
      die($msg);
      }
     */
   
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//
// SECTION: 2b Sanitize (clean) data
// remove any potential JavaScript or html code from users input on the
// form. Note it is best to follow the same order as declared in section 1c.
  
    $pmkReviewId = (int) htmlentities($_POST["hidReviewId"], ENT_QUOTES, "UTF-8");
    
    
    
    
    
    
    

    //
    //// should check to make sure its the correct date format
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//
// SECTION: 2d Process Form - Passed Validation
//
// Process for when the form passes validation (the errorMsg array is empty)
//
    
    if (!$errorMsg) {
        
        if ($debug) {
            print "<p>Form is valid</p>";
        }

//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//
// SECTION: 2e Save Data
//
     

        $dataEntered = false;
        try {
            $thisDatabaseWriter->db->beginTransaction();
   
    
            
                $query = 'DELETE FROM tblUsersBooks WHERE ';
                $query .= 'pmkReviewId = ? ';
                $data[] = $pmkReviewId;
                $results = $thisDatabaseWriter->delete($query, $data, 1, 0, 0, 0, false, false);
                $dataEntered = $thisDatabaseWriter->db->commit();
            //else{
               //  $thisDatabaseWriter->db->rollback();
            
            if ($debug)
                print "<p>transaction complete ";
            } 
            
            
//                if ($_SERVER["REMOTE_USER"] == 'kbevins') {
//                    $results = $thisDatabaseWriter->update($query, $data, 1, 0, 0, 0, false, false);
//                    $results2 = $thisDatabaseWriter->update($query2, $data2, 1, 0, 0, 0, false, false);
//                }
//            } else {
//                if ($_SERVER["REMOTE_USER"] == 'kbevins'){
//                    $results = $thisDatabaseWriter->insert($query, $data);
//                    $results2 = $thisDatabaseWriter->insert($query2, $data2);
//                    $primaryKey = $thisDatabaseWriter->lastInsert();
//                    if ($debug) {
//                        print "<p>pmk= " . $primaryKey;
//                    }
//                }
//            }

            // all sql statements are done so lets commit to our changes
            //if($_SERVER["REMOTE_USER"]=='kbevins'){
            
         catch (PDOEcxeption $e) {
            $thisDatabaseWriter->db->rollback();
            if ($debug)
                print "Error!: " . $e->getMessage() . "</br>";
            $errorMsg[] = "There was a problem with accpeting your data please contact us directly.";
        }
    } // end form is valid
} // ends if form was submitted.
//#############################################################################
//
// SECTION 3 Display Form
//
?>
<article id="main">
    <?php
//####################################
//
// SECTION 3a.
//
//
//
//
// If its the first time coming to the form or there are errors we are going
// to display the form.
    
//####################################
//
// SECTION 3c html Form
//
        /* Display the HTML form. note that the action is to this same page. $phpSelf
          is defined in top.php
          NOTE the line:
          value="<?php print $email; ?>
          this makes the form sticky by displaying either the initial default value (line 35)
          or the value they typed in (line 84)
          NOTE this line:
          <?php if($emailERROR) print 'class="mistake"'; ?>
          this prints out a css class so that we can highlight the background etc. to
          make it stand out that a mistake happened here.
         */
        ?>
        <form action="<?php print $phpSelf; ?>"
              method="post"
              id="frmRegister">
            <fieldset class="wrapper">
                <legend>Are you sure you want to delete this book review?</legend>
                
               
                 <input type="hidden" id="hidReviewId" name="hidReviewId"
                       value="<?php print $pmkReviewId; ?>"

                >
                 
                 
            <fieldset class="buttons">
                <legend></legend>
                <input type="submit" id="btnSubmit" name="btnSubmit" value="Yes" tabindex="900" class="button">
            </fieldset> <!-- ends buttons -->
            </fieldset> <!-- Ends Wrapper -->
        </form>
        <?php
     // end body submit
    ?>
</article>

<?php
include "footer.php";
if ($debug)
    print "<p>END OF PROCESSING</p>";
?>

</body>
</html>