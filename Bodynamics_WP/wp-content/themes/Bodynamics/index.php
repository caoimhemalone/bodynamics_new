<!-- Blog post page -->
<?php include("header.php");?>

  <style type="text/css">

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
    padding-left: 0;
  }

  .blog-container li {
  	display: list-item;
    float: left;
  	border-bottom: solid 5px #a9e20e;
  	overflow: hidden;
    margin-bottom: 2em;
    padding: 0.3em 0.5em;
    height: 30em;
  }

  @media only screen and (max-width: 780px) {
    .blog-container li {
      height: 20em;
    }
  }

  .blog-container li .return {
    color: #a9e20e; 
    display: none;
  }

  .blog-container li img{
    width: 100%;
    /*padding: 0 3em;*/
  }

  .blog-container p {
    display: none;
  }

    /* one item */
  .blog-container li:first-child:nth-last-child(1) {
      width: 100%;
      height: 100%;
  }

  .blog-container li:first-child:nth-last-child(1) p,
  .blog-container li:first-child:nth-last-child(1) ~ li p{
      display: block;
  }

  .blog-container li:first-child:nth-last-child(1) img,
  .blog-container li:first-child:nth-last-child(1) ~ li img{
      padding: 0 3em;
  }

  .blog-container li:first-child:nth-last-child(1) .return,
  .blog-container li:first-child:nth-last-child(1) ~ li .return {
      display: block;
      margin-bottom: 1em;
  }

  /* two items */
  .blog-container li:first-child:nth-last-child(2),
  .blog-container li:first-child:nth-last-child(2) ~ li {
      width: 50%;
  }

  .blog-container li:first-child:nth-last-child(2) p,
  .blog-container li:first-child:nth-last-child(2) ~ li p {
      /*display: none;*/
  }

  /* three items */
  .blog-container li:first-child:nth-last-child(3),
  .blog-container li:first-child:nth-last-child(3) ~ li {
      /*width: 33.3333%;*/
      width: 50%;
  }

  /* four items */
  .blog-container li:first-child:nth-last-child(4),
  .blog-container li:first-child:nth-last-child(4) ~ li {
      /*width: 25%;*/
      width: 50%;
  }

  /* five items */
  .blog-container li:first-child:nth-last-child(5),
  .blog-container li:first-child:nth-last-child(5) ~ li {
      /*width: 20%;*/
      width: 50%;
  }



  </style>




<main>

<div class="container blog-container" style="padding-top: 6em; margin-bottom: 60vh;">
<?php if ( have_posts() ) : ?>
<ul>
<?php while ( have_posts() ) : the_post(); ?>
  <!-- <div class="post col-md-4" style="padding-top: 2em;"> -->
<li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <a class="return" href="https://www.bodynamics.ie/blog">  Return to Blog Posts</a>

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

