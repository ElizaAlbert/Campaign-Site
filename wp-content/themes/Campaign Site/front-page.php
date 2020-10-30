<?php get_header();?>

<!-- GETS ALL HERO FIELDS  -->
<?php $hero = get_field('hero'); ?>

<!---------------------- FIRST YELLOW SECTION  ---------------------->
<section id='first-yellow-section'>

<!--------------------- IPHONE AND BOOK COVERS  --------------------->
<img class="img-fluid float-right" src="<?php echo $hero['large_image_right'];?>"" alt="An iPhone with the audBook app displayed, on top of bookcovers. ">

<!------------------------------- FORM ------------------------------->
<form class="support float-left">

        <div class="above-form-text">

            <h5><?php echo $hero['small_text']; ?></h5>
                <h1 style="font-size: 53px;"><?php echo $hero['big_text']; ?></h1>
        </div>

  <div class="form-group">
  <input type="name" class="form-control" id="exampleInputName1" aria-describedby="nameHelp" placeholder="Name" style="max-width: 300px; display:inline-block"> 
  </div>
  <div class="form-group">
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" style="max-width: 300px; display:inline-block">
  </div>

  <button type="submit" class="btn btn-primary" href="#dollar"><?php echo $hero['button_text']; ?></button>

      <small id="emailHelp" class="form-text text-muted" style="max-width: 300px; display:inline-block; margin-top: 1em;"><?php echo $hero['information_text_under_button']; ?></small>

</form>

</section>

<!---------------------- FIRST CREAM SECTION  ---------------------->
<section id='first-cream-section'>

<?php $first_cream_section = get_field('first_cream_section'); ?>

<div class="about float-left" style="margin-right: 1em;">
        <div class="about-top-line"></div>
            <h1 style="font-size: 100px; "><?php echo $first_cream_section['big_title_cream']; ?></h1>
            <img src="<?php echo $hero['logo'];?>" width="auto" height="auto" alt="audBook logo">
        <div class="about-bottom-line" style="margin-top: 1em;"></div>
</div>

<div style="padding: 4em;">
    <div class="last-text">
        <h1 style="font-size: 41px;"><?php echo $first_cream_section['big_text_cream']; ?></b></h1>
    </div>

    <div class="middle-text" style="font-size: 23px; text-align: left;">
        <p><?php echo $first_cream_section['cream_text'];?></p>
    </div>
</div>

</section>

<!------------------ FIRST GREEN SECTION  ------------------>

<section id='first-green-section-redo'>

<?php $green_section_title = get_field('green_section_title'); ?>

<?php if(have_rows('first_green_section_redo')) :?>
    <?php while(have_rows('first_green_section_redo')) : the_row(); ?>
        <?php if(get_row_layout() == 'columns_section'): 
            $columns = get_sub_field('columns');
            ?>
<div>
    <h1 style="font-size: 60px; padding: 0.5em 0.5em 0.2em 0.5em; color: #f1dcc0; "><?php echo $green_section_title['title_green_section']; ?></h1>
    <div class="news-bottom-line" style="margin-bottom: 4em;"></div>
<div class='float-left'>


            <?php foreach ($columns as $column ): 
            if($column%2 == 0) {
                echo "<div class='float-right'>";
            }s
            ?>
        <div class='d-flex justify-content-center' style='color: #f1dcc0'>
         <div style="max-width: 600px; text-align: left; margin-left: 7em">  <?php  echo $column['column_title']; ?> <?php  echo $column['column_text']; ?> 
         </div> 
         </div>
            </div>         
                </div>
                    </div>       
<?php endforeach; ?>  
         </div>
    </div>
<?php endif; ?>
    <?php endwhile; ?>
        <?php endif;?>

</div>

</section>

<?php $second_yellow_section = get_field('second_yellow_section'); ?>
<div>
  <div class="float-left justify-content-center" style="margin-right: 1em; width: 700px; padding: 5em">
              <h1 style="font-size: 50px; text-align: center;"><?php echo $second_yellow_section['title_left_yellow2']; ?> </h1>
              <p style="font-size: 25px; text-align: center;" ><?php echo $second_yellow_section['text_left_yellow2']; ?> </p>
  </div>
</div>
</div>
</section>

<!------------------ SECOND YELLOW SECTION ---------------------->
<section id="second-yellow-section">

<p style="margin-right: 7em; padding: 5em 5em 0 5em;"><?php echo $second_yellow_section['text_right_yellow2']; ?> </p>
<div class="row float-right" style="margin-right: 5em; text-align: center; margin-right: 12em;">
<?php
 foreach ($second_yellow_section['buttons'] as $key => $value) {
    foreach($value as $button => $dollars) {
         echo '<div class="col-6 col-sm-5 mr-2" style="padding: 1em; background: #76C314; font-size: 19px;">  <div class="w-100"></div>' . $dollars . '</div>';
    } 
}
?>
</div>

<div>
<p style="margin-right: 10em;
padding: 20em 5em 0 5em;"><?php echo $second_yellow_section['sub_buttons_text_yellow2']; ?> </p>
</div>

</section>

<!-- SECOND GREEN AND SECOND CREAM SECTION -->

<section id="double_section">

<?php if(have_rows('green_and_cream_section')):?>

    <?php while(have_rows('green_and_cream_section')) : the_row();?>

        <?php if (get_row_layout() == 'double_content'):
            $contentsRight = array(get_sub_field('right_side_title'), get_sub_field('right_side_text'));

            $contentsLeft = array(get_sub_field('left_side_title'), get_sub_field('left_side_text'));
            ;?>

<div class="green-cream">
    <div class="green-side float-left">
        <?php  foreach($contentsRight as $contentRight):?>
            <?php echo $contentRight++ ?>
                <?php endforeach;?>
    </div>
</div>

<div class="cream-side float-right">
    <?php  foreach($contentsLeft as $contentLeft): ?>
        <?php echo $contentLeft++ ?>
              <?php endforeach;?>
    </div>
<div>
        <?php endif;?>

        <?php endwhile;?>

        <?php endif;?>

</section>

<section>
<div>
<?php $above_footer_image = get_field('above_footer_image'); ?>
<img class="bottom-image" src="<?php echo $above_footer_image['bottom_image'];?>" alt="Headphones on a table 'plugged' to a pile of textbooks.">
</div>
</section>

<?php get_footer();?>

