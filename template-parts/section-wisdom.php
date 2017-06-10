<?php

if( get_query_var('page') ) {
  $page = get_query_var( 'page' );
} else {
  $page = 1;
}

// Variables
$row              = 0;
$images_per_page  = 9; // How many images to display on each page
$images           = get_field( 'wisdom_quote_wall' );
$total            = count( $images );
$pages            = ceil( $total / $images_per_page );
$min              = ( ( $page * $images_per_page ) - $images_per_page ) + 1;
$max              = ( $min + $images_per_page ) - 1;

if( have_rows('wisdom_quote_wall') ):

  while ( have_rows('wisdom_quote_wall') ) : the_row();

    $row++;

    // Ignore this image if $row is lower than $min
    if($row < $min) { continue; }

    // Stop loop completely if $row is higher than $max
    if($row > $max) { break; } ?>                     
    
    <?php the_sub_field('quote');
          the_sub_field('name');
          the_sub_field('location');
          the_sub_field('age'); 
    ?>

  <?php endwhile;

  // Pagination
  echo paginate_links( array(
    'base' => get_permalink() . '%#%' . '/',
    'format' => '?page=%#%',
    'current' => $page,
    'total' => $pages
  ) );
  ?>

<?php else: ?>

  No images found

<?php endif; ?>