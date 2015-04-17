<?php
/*
Template Name: Locations 
*/

  function include_custom_js() {
        wp_enqueue_script(
	    "my-custom-js", // $handle,
            trailingslashit(get_stylesheet_directory_uri()) . "js/toggle.js", // $src
            array(), // $deps,
            null, // $ver,
            true //$in_footer 
       );
    }     
    add_action('wp_enqueue_scripts', 'include_custom_js');
   
   get_header(); ?>



 <div id="primary" class="content-area">
 <div id="content" class="site-content" role="main">

<?php
// $id = 55; 
// $p = get_page($id);
// echo apply_filters('the_content', $p->post_content);
?>

<h1>Locations</h1>
<div>
Massage services are available in Berkeley and Oakland.  Click on the desired
location below to view the map.
</div>

<div id="traveling-services">
I also offer traveling services to your home,
party or office. Travel fees start at $25 (price depends on location and
services needed). Please inquire for weddings, pamper parties and group rates.
</div>

<div id="button-container">
	<button id="oakland-btn" type="button">Oakland Map</button>
	<button id="berkeley-btn" type="button">Berkeley Map</button>
</div>

<div id="map-container">

	<div id="oakland-map">
		<div class="mapinfo">
			Lake Merritt District of Oakland<br/>
			A Private Studio Retreat
		</div>
		<iframe style="border: 0; display: block; margin: 0 auto;"
			src="https://www.google.com/maps/embed/v1/place?q=624%20Brooklyn%20Ave%2C%20Oakland%2C%20CA%2C%20United%20States&amp;key=AIzaSyA1p760WvsVtIYn1SxuTmqfo8WKMR1Bl_U"
			width="600" height="450" frameborder="0">
		</iframe>
	</div>

	<div id="berkeley-map">
		
			<div class="mapinfo">
				A Neighborhood Wellness Center<br/>
				East Bay Acupuncture and Natural Medicine
			</div>
		
		<iframe style="border: 0; display: block; margin: 0 auto;"
			src="https://www.google.com/maps/embed/v1/place?q=2346%20Stuart%20Street%2C%20Berkeley%2C%20Ca.%2094705&amp;key=AIzaSyA1p760WvsVtIYn1SxuTmqfo8WKMR1Bl_U"
			width="600" height="450" frameborder="0">
		</iframe>
	</div>


</div> <!-- map-container -->
</div> <!-- content -->
</div> <!-- primary -->

   <?php get_footer(); ?>
