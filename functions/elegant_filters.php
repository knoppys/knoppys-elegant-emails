<?php
/******************
The post meta 
and taxonomy filters
******************/
function elegant_filters(){
	
	ob_start(); ?>	
	<table class="elegant_filters">
		<tr>
			<td valign="top" colspan="6">
				<h3>Property Filters</h3>
				<p>Select items to filter the list of properties.</p>			
			</td>
		</tr>
		<tr>
			<td valign="top">
				<?php $termsArgs = array( 'taxonomy' => 'locations' ); 
				$terms = get_terms($termsArgs);
				?>
				<ul class="location" multiple>					
					<?php foreach ($terms as $term) { ?>
						<li data-id="<?php echo 'term_'.$term->term_id; ?>"><?php echo $term->name; ?></li>
					<?php } ?>
				</ul>
			</td>
			<td valign="top">
				<ul class="propertytype" multiple>					
					<li data-id="villa">Villa</li>		
					<li data-id="hotel">Hotel</li>					
					<li data-id="hotelVillas">Hotel Villas</li>	
					<li data-id="apartment">Apartment</li>		
					<li data-id="private">Private</li>	
					<li data-id="villa&ApartmentSales">Villa & Apartment Sales</li>	
					<li data-id="newevelopments">New Developments</li>	
				</ul>
			</td>									
			<td valign="top">
				<ul class="agentname" multiple>
					<?php $meta_values = get_meta_values( 'agent_name', 'properties' );	?>				
					<?php foreach ($meta_values as $meta_value) { ?>
						<li data-id="<?php echo strtolower(str_replace(array(" ", "'"), '', $meta_value)); ?>"><?php echo $meta_value; ?></li>
					<?php } ?>
				</ul>
			</td>			
			<td valign="top">	
				<ul class="bedrooms" multiple>
					<?php $meta_values = get_meta_values( 'number_of_beds', 'properties' ); ?>				
					<?php foreach ($meta_values as $meta_value) { ?>
						<li data-id="<?php echo strtolower(str_replace(array(" ", "'"), '', $meta_value.'beds')); ?>"><?php echo $meta_value; ?> Beds</li>
					<?php } ?>
				</ul>		
			</td>	
			<td valign="top">				
				<ul class="saleorrent" multiple>					
					<li data-id="sale">Sale</li>		
					<li data-id="rental">Rental</li>							
				</ul>
			</td>
		</tr>
		<tr>
			<td valign="top" colspan="6">
				<h3>Property Features</h3>
				<p>Click the buttons to toggle property visibility.</p>
			</td>
		</tr>
		<tr>
			<td valign="top" colspan="6" class="features_toggle">
				<span class="button" id="panoramic_sea_view">Panoramic Sea View</span>
				<span class="button" id="sea_view">Sea View</span>
				<span class="button" id="walk_to_beach">Walk To Beach</span>
				<span class="button" id="walk_to_shop">Walk To Shop</span>
				<span class="button" id="aircon_full">Aircon Full</span>
				<span class="button" id="heated_pool">Heated Pool</span>
				<span class="button" id="Guardian">Guardian</span>
				<span class="button" id="spa">Spa</span>
				<span class="button" id="gym">Gym</span>
				<span class="button" id="beach_access">Beach Access</span>
				<span class="button" id="heli_pad">Heli Pad</span>
				<span class="button" id="golf">Golf</span>
				<span class="button" id="water_front">Water Front</span>
				<span class="button" id="skytv">Sky TV</span>
				<span class="button" id="wifi">WiFi</span>
				<span class="button" id="Parking">Parking</span>
				<span class="button" id="small_sea_view">Small Sea View</span>
				<span class="button" id="indoor_pool">Indoor Pool</span>
			</td>
		</tr>
	</table>

	<?php $content = ob_get_clean();
	return $content;
}

//This function gets all the meta values for a specific key. 
// In this case were using it to get the values for the Agent Name
function get_meta_values( $meta_key,  $post_type ) {

    $posts = get_posts(
        array(
            'post_type' => $post_type,
            'meta_key' => $meta_key,
            'posts_per_page' => -1,
        )
    );

    //Get the meta values
    $meta_values = array();
    foreach( $posts as $post ) {
    	if (!get_post_meta( $post->ID, $meta_key, true )) {} 
    	else {
    		$meta_values[] = get_post_meta( $post->ID, $meta_key, true );
    	}        
    }
    sort($meta_values);
    $newarray = array_unique($meta_values);
    return $newarray;

}