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
    
    
    $query = 'SELECT pmkBookId, pmkReviewId, fldTitle, fldAuthor, fldGenre,fldFirstName,fldLastName,fldRating, pmkEmail FROM tblUsersBooks, tblBooks, tblUsers WHERE tblUsersBooks.fnkBookId=tblBooks.pmkBookId AND tblUsersBooks.fnkEmail=tblUsers.pmkEmail AND pmkReviewId = ?';
    $results = $thisDatabaseReader->select($query, array($pmkBookId), 1, 2, 0, 0, false, false);
    $pmkEmail = $results[0]["pmkEmail"];
    $fldFirstName = $results[0]["fldFirstName"];
    $fldLastName = $results[0]["fldLastName"];
    $fldTitle = $results[0]["fldTitle"];
    $fldAuthor = $results[0]["fldAuthor"];
    $fldGenre = $results[0]["fldGenre"];
    $fldRating = $results[0]["fldRating"]; 
    $pmkReviewId = $results[0]["pmkReviewId"];
   
   
   
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
   $pmkBookId = (int) htmlentities($_POST["hidBookId"], ENT_QUOTES, "UTF-8");
    if ($pmkBookId > 0) {
        $update = true;
    }
    
    
    
    // I am not putting the ID in the $data array at this time
    $pmkEmail = htmlentities($_POST["txtEmail"], ENT_QUOTES, "UTF-8");
    $pmkReviewId = (int) htmlentities($_POST["hidReviewId"], ENT_QUOTES, "UTF-8");
    
    $data2[] = $pmkEmail;
    
    $fldFirstName = htmlentities($_POST["txtFirstName"], ENT_QUOTES, "UTF-8");
    $data2[] = $fldFirstName;
    
    $fldLastName = htmlentities($_POST["txtLastName"], ENT_QUOTES, "UTF-8");
    $data2[] = $fldLastName;
    
    $fldTitle = htmlentities($_POST["txtBookTitle"], ENT_QUOTES, "UTF-8");
    $data[] = $fldTitle;

    $fldAuthor = htmlentities($_POST["txtAuthor"], ENT_QUOTES, "UTF-8");
    $data[] = $fldAuthor;

    $fldGenre = htmlentities($_POST["listGenre"], ENT_QUOTES, "UTF-8");
    $data[] = $fldGenre;
    
    $fldRating = htmlentities($_POST["radMyRating"], ENT_QUOTES, "UTF-8");
    $data3[] = $fldRating;
    
    

//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//
// SECTION: 2c Validation
//
    if ($pmkEmail == "") {
        $errorMsg[] = "Please enter the title of the book";
        $pmkEmailERROR = true;
    
    }
    
    if ($fldFirstName == "") {
        $errorMsg[] = "Please enter your first name";
        $fldFirstNameERROR = true;
    } elseif (!verifyAlphaNum($fldFirstName)) {
        $errorMsg[] = "Your first name appears to have extra character.";
        $fldFirstNameERROR = true;
    }
    
     if ($fldLastName == "") {
        $errorMsg[] = "Please enter your last name";
        $fldLastNameERROR = true;
    } elseif (!verifyAlphaNum($fldLastName)) {
        $errorMsg[] = "Your last name appears to have extra character.";
        $fldLastNameERROR = true;
    }
    
    
    if ($fldTitle == "") {
        $errorMsg[] = "Please enter the title of the book";
        $fldTitleERROR = true;
    } elseif (!verifyAlphaNum($fldTitle)) {
        $errorMsg[] = "Your title appears to have extra character.";
        $fldTitleERROR = true;
    }

    if ($fldAuthor == "") {
        $errorMsg[] = "Please enter the author";
        $fldAuthorERROR = true;
    } elseif (!verifyAlphaNum($fldAuthor)) {
        $errorMsg[] = "Your author appears to have extra character.";
        $fldAuthorERROR = true;
    }

    if ($fldGenre == "") {
        $errorMsg[] = "Please enter the genre";
        $fldGenreERROR = true;
    }
    
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
   
    
            if ($update) {
                $query = 'UPDATE tblBooks SET ';
                $query2 = 'UPDATE tblUsers SET ';
                $query3 = 'UPDATE tblUsersBooks SET ';
                
            } 
            else {
                $query = 'INSERT INTO tblBooks SET ';
                $query2 = 'INSERT INTO tblUsers SET ';
                $query3 = 'INSERT INTO tblUsersBooks SET ';
            }

            $query .= 'fldTitle = ?, ';
            $query .= 'fldAuthor = ?, ';
            $query .= 'fldGenre = ? ';
            $query2 .= 'pmkEmail = ?, ';
            $query2 .= 'fldFirstName = ?, ';
            $query2 .= 'fldLastName = ? ';
            $query3 .= 'fldRating = ? ';
            

            if ($update) {
                $query .= 'WHERE pmkBookId = ?';
                $query2 .= 'WHERE pmkEmail = ?';
                $query3 .= 'WHERE pmkReviewId = ?';
                
                
                
               
                
                $data[] = $pmkBookId;
                
                $data2[] = $pmkEmail;
                
                $data3[] = $pmkReviewId;
                

                    $results = $thisDatabaseWriter->update($query, $data, 1, 0, 0, 0, false, false);
                    $results2 = $thisDatabaseWriter->update($query2, $data2, 1, 0, 0, 0, false, false);
                    $results3 = $thisDatabaseWriter->testquery($query3, $data3, 1, 0, 0, 0, false, false);
                
            } else {
               
                    $results = $thisDatabaseWriter->insert($query, $data);
                    $results2 = $thisDatabaseWriter->insert($query2, $data2);
                    $results3 = $thisDatabaseWriter->insert($query3, $data3);
                    $primaryKey = $thisDatabaseWriter->lastInsert();
                    if ($debug) {
                        print "<p>pmk= " . $primaryKey;
                    }
                
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
            $dataEntered = $thisDatabaseWriter->db->commit();
            //else{
               //  $thisDatabaseWriter->db->rollback();
            
            if ($debug)
                print "<p>transaction complete ";
        } catch (PDOEcxeption $e) {
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
    if ($dataEntered) { // closing of if marked with: end body submit
        print "<h1>Record Saved</h1> ";
        
    } else {
//####################################
//
// SECTION 3b Error Messages
//
// display any error messages before we print out the form
        if ($errorMsg) {
            print '<div id="errors">';
            print '<h1>Your form has the following mistakes</h1>';

            print "<ol>\n";
            foreach ($errorMsg as $err) {
                print "<li>" . $err . "</li>\n";
            }
            print "</ol>\n";
            print '</div>';
        }
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
                <legend>Add/Update Book Review</legend>
                
                 <input type="hidden" id="hidBookId" name="hidBookId"
                       value="<?php print $pmkBookId; ?>"

                >
                 <input type="hidden" id="hidReviewId" name="hidReviewId"
                       value="<?php print $pmkReviewId; ?>"

                >
                 <fieldset class="wrapper">
                     <legend>User Information</legend>
                 <label for="txtEmail" class="required">User Email
                    <input type="text" id="txtEmail" name="txtEmail"
                           value="<?php print $pmkEmail; ?>"
                           tabindex="100" maxlength="45" placeholder="Enter your user email"
    <?php if ($pmkEmailERROR) print 'class="mistake"'; ?>
                           onfocus="this.select()"
                           autofocus>
                </label>
                 
                 <label for="txtFirstName" class="required">First Name
                    <input type="text" id="txtFirstName" name="txtFirstName"
                           value="<?php print $fldFirstName; ?>"
                           tabindex="100" maxlength="45" placeholder="Enter your first name"
    <?php if ($fldFirstNameERROR) print 'class="mistake"'; ?>
                           onfocus="this.select()"
                           autofocus>
                </label>
                 
                 <label for="txtLastName" class="required">Last Name
                    <input type="text" id="txtLastName" name="txtLastName"
                           value="<?php print $fldLastName; ?>"
                           tabindex="100" maxlength="45" placeholder="Enter your last name"
    <?php if ($fldLastNameERROR) print 'class="mistake"'; ?>
                           onfocus="this.select()"
                           autofocus>
                </label>
                 </fieldset>
                 <fieldset class="wrapper">
                     <legend>Book Information</legend>
                <label for="txtBookTitle" class="required">Book Title
                    <input type="text" id="txtBookTitle" name="txtBookTitle"
                           value="<?php print $fldTitle; ?>"
                           tabindex="100" maxlength="45" placeholder="Enter the book title"
    <?php if ($fldTitleERROR) print 'class="mistake"'; ?>
                           onfocus="this.select()"
                           autofocus>
                </label>

                <label for="txtAuthor" class="required">Author
                    <input type="text" id="txtAuthor" name="txtAuthor"
                           value="<?php print $fldAuthor; ?>"
                           tabindex="100" maxlength="45" placeholder="Enter the author"
    <?php if ($fldAuthorERROR) print 'class="mistake"'; ?>
                           onfocus="this.select()"
                           >
                </label>
<label for="listGenre">Genre
<select id="listGenre"
        name="listGenre"
        tabindex="300" >
  
    <option value="Classic">Classic</option>
    <option value="Fantasy">Fantasy</option>
    <option value="Fiction" selected>Fiction</option>
    <option value="Horror">Horror</option>
    <option value="Humor">Humor</option>
    <option value="Mystery">Mystery</option>
    <option value="Nonfiction">Nonfiction</option>
    <option value="Romance">Romance</option>
    <option value="Science Fiction">Science Fiction</option>
    <option value="Other">Other</option>

</select></label>
<!--                
<label for="txtGenre" class="required">Genre
                    <input type="text" id="txtGenre" name="txtGenre"
                           value="<?php print $fldGenre; ?>"
                           tabindex="100" maxlength="45" placeholder="Enter the Genre"
    <?php if ($fldGenreERROR) print 'class="mistake"'; ?>
                           onfocus="this.select()"
                           >
                </label>                -->
                 </fieldset>
            </fieldset> <!-- ends contact -->
            <fieldset class="wrapper">
                <legend>Review of Book</legend>
                    
                <fieldset class="radio">
    <legend>Rating of book (1 = worst, 5 = best):</legend>

    <label for="radOneStar">
        <input type="radio" 
               id="radOneStar" 
               name="radMyRating"
               value="1">One star
    </label>

    <label for="radTwoStars">
        <input type="radio" 
               id="radTwoStars" 
               name="radMyRating" 
               value="2">Two Stars
    </label>
    
    <label for="radThreeStars">
        <input type="radio" 
               id="radThreeStars" 
               name="radMyRating" 
               value="3">Three Stars
    </label>

    <label for="radFourStars">
        <input type="radio" 
               id="radFourStars" 
               name="radMyRating" 
               value="4">Four Stars
    </label>
    
    <label for="radFiveStars">
        <input type="radio" 
               id="radFiveStars" 
               name="radMyRating" 
               value="5">Five Stars
    </label>
</fieldset>
            </fieldset>
            </fieldset> <!-- ends wrapper Two -->
            <fieldset class="buttons">
                <legend></legend>
                <input type="submit" id="btnSubmit" name="btnSubmit" value="Save" tabindex="900" class="button">
            </fieldset> <!-- ends buttons -->
            </fieldset> <!-- Ends Wrapper -->
        </form>
        <?php
    } // end body submit
    ?>
</article>

<?php
include "footer.php";
if ($debug)
    print "<p>END OF PROCESSING</p>";
?>
</article>
</body>
</html>