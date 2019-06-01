<!-- Blog post page -->
<?php include("header.php");?>

  <style type="text/css">

  /*img {
    height: 100%;
    width: 100%;
  }*/

  h2 a {
    color: #a9e20e;
  }

  h2 a:hover {
    color: #a9e20e;
  }

  .blog-container ul {
  	display: inline-block;
    float: none;
    width: 100%;
  }

  .blog-container li {
  	display: list-item;
    float: left;
  	border-bottom: solid 5px #a9e20e;
  	overflow: hidden;
    margin-bottom: 2em;
    padding: 0.3em 0.5em;
  }

  .blog-container li img{
    width: 100%;
    padding: 0 3em;
  }

    /* one item */
  .blog-container li: first-child:nth-last-child(1) {
      width: 100%;
  }

  /* two items */
  .blog-container li:first-child:nth-last-child(2),
  .blog-container li:first-child:nth-last-child(2) ~ li {
      width: 50%;
  }

 /* .blog-container li:first-child:nth-last-child(2) p,
  .blog-container li:first-child:nth-last-child(2) ~ li p {
      display: none;
  }*/

  /* three items */
  .blog-container li:first-child:nth-last-child(3),
  .blog-container li:first-child:nth-last-child(3) ~ li {
      width: 33.3333%;
  }

  /* four items */
  .blog-container li:first-child:nth-last-child(4),
  .blog-container li:first-child:nth-last-child(4) ~ li {
      width: 25%;
  }

  /* five items */
  .blog-container li:first-child:nth-last-child(5),
  .blog-container li:first-child:nth-last-child(5) ~ li {
      width: 20%;
  }

  </style>




<main>

<div class="container blog-container" style="padding-top: 8em; margin-bottom: 60vh;">

<?php if ( have_posts() ) : ?>
<ul>
<?php while ( have_posts() ) : the_post(); ?>
  <!-- <div class="post col-md-4" style="padding-top: 2em;"> -->
<li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="post-header">
       <div class="date">Date Published: <?php the_time( 'M j Y' ); ?></div>
       <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
       <div class="author">Written By: <?php the_author(); ?></div>
    </div><!--end post header-->
    <div class="entry clear">
      <?php the_content(); ?> 
      <?php the_post_thumbnail(); ?>

       <!-- <?php edit_post_link(); ?> -->
       <?php wp_link_pages(); ?> 
     </div>
    <!--end entry-->

    <!-- </div> --><!--end post-->
   <!--  </div> -->
</li>
<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
    <!-- <div class="navigation index">
       <div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
       <div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
    </div> --><!--end navigation-->
</ul>
<?php else : ?>
<?php endif; ?>
</div>
</main>


					
<?php include("footer.php");?>

