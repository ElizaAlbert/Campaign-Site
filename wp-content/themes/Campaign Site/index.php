<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.14.0/js/all.js"></script>
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <title>Campaign Site Temporary</title>
</head>
<body>
    <!------------- audBook Logo & Menu ------------->

<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="">
    <img src="pictures\audBook-logo.png"  alt="audBook logo">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">ABOUT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">NEWS & EVENTS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">CONTRIBUTE</a>
      </li>
    </ul>
  </div>
</nav>

<!---------------------- FIRST YELLOW SECTION  ---------------------->
<section id='first-yellow-section'>

<!--------------------- IPHONE AND BOOK COVERS  --------------------->
<img class="img-fluid float-right" src="<?php echo get_template_directory_uri(); ?>/public/together.png" alt="An iPhone with the audBook app displayed, on top of bookcovers. ">

<!------------------------------- FORM ------------------------------->
<form class="support float-left">

        <div class="above-form-text">
            <h5>Show us your support by signing up for updates and to</h5>
                <h1 style="font-size: 53px;">JOIN OUR TEAM!</h1>
        </div>

  <div class="form-group">
  <input type="name" class="form-control" id="exampleInputName1" aria-describedby="nameHelp" placeholder="Name" style="max-width: 300px; display:inline-block"> 
  </div>
  <div class="form-group">
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" style="max-width: 300px; display:inline-block">
  </div>

  <button type="submit" class="btn btn-primary">JOIN US</button>

      <small id="emailHelp" class="form-text text-muted" style="max-width: 300px; display:inline-block; margin-top: 1em;"> * By providing your cell phone number you consent to receive periodic campaign updates from audBook. 
      Text HELP for help, STOP to end. </small>

</form>

</section>

<!---------------------- FIRST CREAM SECTION  ---------------------->
<section id='first-cream-section'>

<div class="about float-left" style="margin-right: 1em;">
        <div class="about-top-line"></div>
            <h1 style="font-size: 100px; ">ABOUT</h1>
            <img src="pictures\audBook-logo.png" width="auto" height="auto" alt="audBook logo">
        <div class="about-bottom-line" style="margin-top: 1em;"></div>
</div>

<div style="padding: 4em;">
    <div class="last-text">
        <h1 style="font-size: 47px;"><b>#1 AUDIO BOOK SERVICE </b></h1>
        <h3>intended for </h3>
        <h1 style="font-size: 45px;"><b>STUDENTS</b></h1>
    </div>

    <div class="middle-text" style="font-size: 23px; text-align: left;">
        <p> The College Board reports that between course materials and textbooks, students can expect to spend at least <b>$1,200</b> in 2017-2018 and between <b>$1,240-$1,440</b> for the 2018-2019 academic year. <br> <br>
        Students are already spending a small fortune on college, and our service is a big economical help for students, offering audiobook versions of textbooks for a small fee a month.
        </p>
    </div>
</div>

</section>

<!------------------ FIRST GREEN SECTION  ------------------>
<section id='first-green-section'>

<div>
    <h1 style="font-size: 80px; padding: 0.5em 0.5em 0.2em 0.5em; color: #f1dcc0; ">NEWS & EVENTS</h1>
    <div class="news-bottom-line" style="margin-bottom: 4em;"></div>

  <div class="d-flex justify-content-center" style="color: #f1dcc0">
    <div class="p-2" style="max-width: 600px; text-align: left;" >October 17, 2020
        <h3 style="color: #FAB45B">audBook is now available in Belgium!</h3>
        <p>We are proudly announcing the arrival of audBooks services to Belgium after high demand by the public. We are now working on releasing our product to a list of other country which can be seen by clicking on the link right below the ...</p>
    </div>
    <div class="p-2" style="max-width: 600px; text-align: left; margin-left: 7em">October 23, 2020
        <h3 style="color: #FAB45B;">New audBook app updates available!</h3>
        <p>The development team has now fixed issues with the log in system that was signing out subscribers by default randomly at the opening of the application, which has resulted in ... </p>
    </div>
</div>

</section>

<div>
  <div class="float-left justify-content-center" style="margin-right: 1em; width: 700px; padding: 5em">
              <h1 style="font-size: 50px; text-align: center;"><b>Today’s</b> students are <b>Tomorrow’s</b> future</h1>
              <p style="font-size: 25px; text-align: center;" >Donating to us is contributing to a brighter future. </p>
              <p style="font-size: 30px; text-align: center;">EVERY DOLLAR HELPS US PROVIDE THE NESCERARRY ECONOMICAL HELP FOR OUR STUDENTS!</p>
  </div>
</div>
</div>

<!------------------ SECOND YELLOW SECTION ---------------------->
<section id="second-yellow-section">

<p style="margin-right: 10em; padding: 5em 5em 0 5em;">Clicking the preffered amount of donation will open up a new tab where the payment can be completed. </p>
<div class="row float-right" style="margin-right: 5em; text-align: center; margin-right: 11em;">
  <div class="col-6 col-sm-5" style="padding: 1em; background: #76C314; font-size: 19px;" href="http://tutorialsplane.com ">1$</div>
  <div class="col-6 col-sm-5  mr-2" style="margin-left: 1em; padding: 1em; background: #76C314; font-size: 19px;">5$</div>
  <div class="w-100"></div>
  <div class="col-6 col-sm-5" style="padding: 1em; background: #76C314; font-size: 19px;">10$</div>
  <div class="col-6 col-sm-5" style="margin-left: 1em; padding: 1em; background: #76C314; font-size: 19px;">25$</div>
  <div class="w-100"></div>
  <div class="col-6 col-sm-5" style="padding: 1em; background: #76C314; font-size: 19px;">$50</div>
  <div class="col-6 col-sm-5" style="margin-left: 1em; padding: 1em; background: #76C314; font-size: 19px;">$100</div>
</div>
<p style="margin-right: 10em;">Every donation is greatly appreciated!</p>

<!-- Footer -->
<footer class="page-footer font-small special-color-dark pt-4">

  <!-- Footer Elements -->
  <div class="container">

    <!-- Social buttons -->
    <ul class="list-unstyled list-inline text-center">
      <li class="list-inline-item">
        <a class="btn-floating btn-fb mx-1">
          <i class="fab fa-facebook-f"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-tw mx-1">
          <i class="fab fa-twitter"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-gplus mx-1">
          <i class="fab fa-google-plus-g"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-li mx-1">
          <i class="fab fa-linkedin-in"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-dribbble mx-1">
          <i class="fab fa-dribbble"> </i>
        </a>
      </li>
    </ul>
    <!-- Social buttons -->

    

  </div>
  <!-- Footer Elements -->

</footer>
<!-- Footer -->


<!------------------ FOOTER / CREAM SECTION ---------------------->

<section class="cream-footer">
  
<!-- Footer -->
<footer class="page-footer font-small teal pt-4">

  <!-- Footer Text -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase font-weight-bold">Footer text 1</h5>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita sapiente sint, nulla, nihil
          repudiandae commodi voluptatibus corrupti animi sequi aliquid magnam debitis, maxime quam recusandae
          harum esse fugiat. Itaque, culpa?</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-6 mb-md-0 mb-3">

        <!-- Content -->
        <h5 class="text-uppercase font-weight-bold">Footer text 2</h5>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio deserunt fuga perferendis modi earum
          commodi aperiam temporibus quod nulla nesciunt aliquid debitis ullam omnis quos ipsam, aspernatur id
          excepturi hic.</p>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Text -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

</body>
</html>



<?php
 
// checks if there are any posts that match the query
if (have_posts()) :
 
  // If there are posts matching the query then start the loop
  while ( have_posts() ) : the_post();
 
    // the code between the while loop will be repeated for each post
    ?>
 
    <h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
 
    <p class="date-author">Posted: <?php the_date(); ?> by <?php the_author(); ?></p>
 
    <?php the_content(); ?>
 
    <p class="postmetadata">Filed in: <?php the_category(); ?> | Tagged: <?php the_tags(); ?> | <a href="<?php comments_link(); ?>" title="Leave a comment">Comments</a></p>
 
    <?php
 
    // Stop the loop when all posts are displayed
 endwhile;
 
// If no posts were found
else :
?>
<p>Sorry no posts matched your criteria.</p>
<?php
endif;
?>


