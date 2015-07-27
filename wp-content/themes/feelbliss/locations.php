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
Massage services are available in Larkspur and Oakland.  Click on the desired
location below to view the map.
</div>

<div id="traveling-services">
I also offer traveling services to your home,
party or office. Travel fees start at $25 (price depends on location and
services needed). Please inquire for weddings, pamper parties and group rates.
</div>

<div id="button-container">
	<button id="oakland-btn" type="button">Oakland Map</button>
	<button id="larkspur-btn" type="button">Larkspur Map</button>
</div>

<div id="map-container">

	<div id="oakland-map">
		<div class="mapinfo">
			Santa Clara Ave in Oakland<br/>
			A Private Studio
		</div>


<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6303.527400436687!2d-122.25252139999994!3d37.81900350000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808f87598d464c35%3A0xd1fb2442a1f68a1!2s166+Santa+Clara+Ave%2C+Oakland%2C+CA+94610!5e0!3m2!1sen!2sus!4v1434049843227" width="600" height="450" frameborder="0" style="border:0"></iframe>

	</div>

	<div id="larkspur-map">
		
			<div class="mapinfo">
				Holcomb Ave in Larkspur<br/>
				Home Studio Retreat
			</div>
	

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3146.9969800455838!2d-122.53253400000004!3d37.930501!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a7e8e29d349%3A0x2180dcb779ebaacd!2s107+Holcomb+Ave%2C+Larkspur%2C+CA+94939!5e0!3m2!1sen!2sus!4v1437972600377" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

	
	</div>


</div> <!-- map-container -->
</div> <!-- content -->
</div> <!-- primary -->

   <?php get_footer(); ?>
