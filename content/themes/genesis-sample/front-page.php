<?php
/**
 * Genesis Sample
 *
 * This file adds the front page to the Genesis Sample Theme.

 */


// Add front-page body class.
add_filter( 'body_class', 'genesis_body_class' );


// Define front-page body class.
function genesis_body_class( $classes ) {

        $classes[] = 'front-page';

        return $classes;

}

function render_front(){

$hero= get_field('hero');


if( $hero ){
        echo '<div class="'.$hero['class_name'].'">
                <div class="wrapper">
                  <div class="hero-text-wrapper">
                    <h1 class="hide-hero-h1" class="mb-26">'.$hero['heading'].'</h1>
                  </div>
                  <img src="/content/uploads/2020/06/woman-9-cut.png" />
                  <div class="hero-details mobile-lr-padding">
                      <h1 class="mb-26">'.$hero['heading'].'</h1>
                    <div class="location-details">
                      <div class="location-1 locations">
                       <p class="mb-8">'.$hero['location_1'].'</p>
                       <a href="tel:'.$hero['location_1_phone'].'">'.$hero['location_1_phone'].'</a>
                      </div>
                      <div class="location-2 locations">
                       <p>'.$hero['location_2'].'</p>
                       <a href="tel:'.$hero['location_2_phone'].'">'.$hero['location_2_phone'].'</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>';

}

$video= get_field('video');


if( $video ){
        echo '<div class="'.$video['class_name'].'">
                <div class="wrapper mobile-lr-padding">
                 <h2 class="mb-41">'.$video['heading'].'</h2>'.
                 $video['video_area'].'
                </div>
              </div>';

}

$locations = get_field('locations');


if( $locations ){
        echo '<div class="'.$locations['class_name'].'">
               <div class="wrapper mobile-lr-padding">
                <div class="location-wrapper">';
                  while(have_rows('locations')):
                      the_row();
                      while(have_rows('the_locations')):
                          the_row();
        echo            '<div class="location">
                           <img class="mb-17" src="'.get_sub_field('image').'" />
                           <h2 class="mb-10">'.get_sub_field('heading').'</h2>
                           <p class="mb-17">'.get_sub_field('text').'</p>
                           <a class="button primary-button hide-temp" href="'.get_sub_field('button_link').'">'.get_sub_field('button_text').'</a>
                         </div>';
                      endwhile;
                    endwhile;                 
        echo  ' </div>
               </div>
              </div>';

}

$artists = get_field('artists');


if( $artists ){
        echo '<div class="'.$artists['class_name'].' hide-temp">
               <div class="wrapper">
               <h2 class="mb-33 mobile-lr-padding">'.$artists['heading'].'</h2>
                <div class="swiper-container-artists mb-81">
                  <div class="swiper-wrapper">';
                  while(have_rows('artists')):
                      the_row();
                      while(have_rows('artist')):
                          the_row();
        echo            '<div class="swiper-slide">
                           <div class="title-description">
                             <img class="mb-17" src="'.get_sub_field('image').'" />
                             <h3 class="mb-6">'.get_sub_field('heading').'</h3>
                             <p class="mb-0">'.get_sub_field('text').'</p>
                           </div>
                         </div>';
                      endwhile;
                    endwhile;                 
        echo  ' </div>
                <div class="swiper-pagination"></div>
                </div>
                <a class="button primary-button hide-temp" href="'.$artists['button_link'].'">'.$artists['button_text'].'</a>
               </div>
              </div>';

}


$about= get_field('about');


if( $about ){
        echo '<div class="'.$about['class_name'].'">
                <div class="wrapper mobile-lr-padding">
                 <h2 class="mb-25">'.$about['heading'].'</h2>
                 <p>'.$about['text'].'</p>
                 <a class="button secondary-button mt-33 hide-temp" href="'.$about['button_link'].'" />'.$about['button_text'].'</a>
                </div>
                <img src="'.$about['image'].'" />
              </div>';

}

$shop = get_field('shop');


if( $shop ){
        echo '<div class="'.$shop['class_name'].'">
               <div class="wrapper">
               <h2 class="mb-41 mobile-lr-padding">'.$shop['heading'].'</h2>
                  <div class="shop-wrapper mb-33">';
                  while(have_rows('shop')):
                      the_row();
                      while(have_rows('items')):
                          the_row();
        echo            '<div class="title-description">
                             <img class="mb-17" src="'.get_sub_field('image').'" />
                             <h3 class="mb-6">'.get_sub_field('title').'</h3>
                             <p class="mb-0">'.get_sub_field('description').'</p>
                         </div>';
                      endwhile;
                    endwhile;                 
        echo  ' </div>
                </div>
                <a target="_blank" class="button primary-button" href="'.$shop['button_link'].'">'.$shop['button_text'].'</a>
               </div>
              </div>';

}

}
add_action('genesis_loop', 'render_front');

// Run the Genesis loop.
genesis();