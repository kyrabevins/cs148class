<?php
$server = htmlentities($_SERVER['SERVER_NAME'], ENT_QUOTES, "UTF-8");
        $domain .= $server;
        $phpSelf = htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8");
        $path_parts = pathinfo($phpSelf);
        if ($debug) {
            print "<p>Domain" . $domain;
            print "<p>php Self" . $phpSelf;
            print "<p>Path Parts<pre>";
            print_r($path_parts);
            print "</pre>";
        }
?>
<link rel="stylesheet" href="css/pages.css" type="text/css" media="screen">
<section id="header">
    <img src='images/book.png' alt='book logo' id='logo'>
    <h1 class='mainTitle'>bibliophilia.</h1>
    


<nav>
    <ol>
        <?php
        
        if ($path_parts['filename'] == "home") {
            print '<li class="activePage">Home</li>';
        } else {
            print '<li><a href="home.php">Home</a></li>';
        }
        /* example of repeating */
        if ($path_parts['filename'] == "reviews") {
            print '<li class="activePage">All Reviews</li>';
        } else {
            print '<li><a href="reviews.php">All Reviews</a></li>';
        }
        
        if ($path_parts['filename'] == "form") {
            print '<li class="activePage">Submit a Review</li>';
        } else {
            print '<li><a href="form.php">Submit a Review</a></li>';
        }
        
        if ($path_parts['filename'] == "tables") {
            print '<li class="activePage">Reviewers</li>';
        } else {
            print '<li><a href="tables.php">Reviewers</a></li>';
        }
        
        if ($path_parts['filename'] == "ratings") {
            print '<li class="activePage">Ratings</li>';
        } else {
            print '<li><a href="ratings.php">Ratings</a></li>';
        }
        if ($path_parts['filename'] == "genres") {
            print '<li class="activePage">Genres</li>';
        } else {
            print '<li><a href="genres.php">Genres</a></li>';
        }
        ?>
<!--      <li><a href="home.php">Home</a></li>
        <li><a href="reviews.php">All Reviews</a></li>
        <li><a href="form.php">Submit a Review</a></li>
        <li><a href="tables.php">Reviewers</a></li>
        <li><a href="ratings.php">Ratings</a></li>
        <li><a href="genres.php">Genres</a></li>-->
    
               
                </ol>
</nav>
</section>
