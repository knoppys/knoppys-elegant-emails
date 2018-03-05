<?php
/******************
The post list and datatable layout
******************/
//Get the correct arguments
function properties_arguments($id){

	$emailsQuery = $id;
	parse_str($emailsQuery, $query_array);
	if (array_key_exists('id', $query_array)) {
		//Create an array for the properties to exclude. 
		$properties = explode(',', get_post_meta($query_array['id'], 'property_data',true));
		$args = array(
			'post_type' => 'properties',
			'posts_per_page' => -1,
			'exclude' => $properties,
			'post_status' => array('publish', 'draft', 'private')
		);
	} else {
		$args = array(
			'post_type' => 'properties',
			'posts_per_page' => -1,
			'post_status' => array('publish', 'draft', 'private')
		);
	}	
	return $args;
}


function elegant_list_properties(){

	$args = properties_arguments($_SERVER["QUERY_STRING"]);

	$properties = get_posts($args);
	
	ob_start(); 
	
	?>

	<table class="elegant_list_properties">	
		
			<thead>
				<tr>
					<th>
						Image
					</th>
					<th class="name">
						Name
					</th>
					<th>
						Location
					</th>
					<th>
						Type
					</th>
					<th>
						Sale or Rent
					</th>
					<th>
						Agent Name
					</th>
					<th>
						Number of Beds
					</th>
					<th>
						Spa
					</th>					
					<th>
						Heated Pool
					</th>
					<th>
						Beach Access
					</th>
					<th>
						Air Con Full
					</th>
					<th>
						Heli Pad
					</th>					
				</tr>
			</thead>
			<tfoot>
				<tr>
					<th>
						Image
					</th>
					<th class="name">
						Name
					</th>
					<th>
						Location
					</th>
					<th>
						Type
					</th>
					<th>
						Sale or Rent
					</th>
					<th>
						Agent Name
					</th>
					<th>
						Number of Beds
					</th>
					<th>
						Spa
					</th>					
					<th>
						Heated Pool
					</th>
					<th>
						Beach Access
					</th>
					<th>
						Air Con Full
					</th>
					<th>
						Heli Pad
					</th>	
				</tr>
			</tfoot>
			
			<?php
			
			//This gets and displays all the existing properties if its an existing email.
			existing_properties($_SERVER["QUERY_STRING"]);
			
			//This returns all the properties for a new email and the remaining properties form an existing one.
			foreach ($properties as $property) { 
				$meta = get_post_meta($property->ID);?>				
				<tr id="<?php echo $property->ID; ?>" class="propertyrow <?php echo strtolower(meta_class($property->ID)); ?> <?php echo property_locations_classes($property->ID); ?>">
					<td class=""><img src="<?php echo get_the_post_thumbnail_url($property->ID, array(75,75));?>"></td>
					<td class="">
					<a href="<?php echo $property->guid;?>" target="_blank"><?php echo $property->post_title; ?></a>
						<div class="message-container">
							<textarea class="message" placeholder="Your Messgae"></textarea>
							<input type="text" name="price" class="price" placeholder="Price">
						</div>
					</td>
					<td class=""><?php echo property_locations($property->ID); ?></td>
					<td class=""><?php if(isset($meta['type_name'][0])){echo $meta['type_name'][0];} ?></td>
					<td class=""><?php if(isset($meta['sale_or_rent'][0])){echo $meta['sale_or_rent'][0];} ?></td>
					<td class=""><?php if(isset($meta['agent_name'][0])){echo $meta['agent_name'][0];} ?></td>
					<td class=""><?php if(isset($meta['number_of_beds'][0])){echo $meta['number_of_beds'][0];} ?></td>
					<td class=""><?php if(isset($meta['spa'][0])){echo meta_check($meta['spa'][0]);} ?></td>
					<td class=""><?php if(isset($meta['heated_pool'][0])){echo meta_check($meta['heated_pool'][0]);} ?></td>
					<td class=""><?php if(isset($meta['beach_access'][0])){echo meta_check($meta['beach_access'][0]);} ?></td>	
					<td class=""><?php if(isset($meta['aircon_full'][0])){echo meta_check($meta['aircon_full'][0]);} ?></td>
					<td class=""><?php if(isset($meta['heli_pad'][0])){echo meta_check($meta['heli_pad'][0]);} ?></td>					

				</tr>
			<?php } ?>
		</tr>
	</table>
	
	<?php $content = ob_get_clean();
	return $content;
}

//Check if the cell needs a tick or a cross
function meta_check($value){

	if (isset($value) && $value == 1) {
		echo '<span class="green">&#10004;</span>';
	} elseif (isset($value) && $value == 0) {
		echo '<span class="red">&#215;</span>';
	} 

}

//Get the location name for the property
function property_locations($id){

	$terms = get_the_terms( $id, 'locations' );
	if ($terms) {
		foreach ($terms as $term) {
			echo $term->name.'<br>';
		}
	}	
}

function property_locations_classes($id) {
	$terms = get_the_terms( $id, 'locations' );
	if ($terms) {
		foreach ($terms as $term) {
			echo 'term_'.$term->term_id.' ';
		}
	}	
}

//Get the class list for the property
function meta_class($id){

	$meta = get_post_meta($id);
	$metaArray = array();	

	//Meta classes that are the name of the meta
	if(isset($meta['panoramic_sea_view'][0]) && $meta['panoramic_sea_view'][0] == 1){array_push($metaArray, 'panoramic_sea_view');}
	if(isset($meta['sea_view'][0]) && $meta['sea_view'][0] == 1){array_push($metaArray, 'sea_view');}
	if(isset($meta['walk_to_beach'][0]) && $meta['walk_to_beach'][0] == 1){array_push($metaArray, 'walk_to_beach');}
	if(isset($meta['walk_to_shop'][0]) && $meta['walk_to_shop'][0] == 1){array_push($metaArray, 'walk_to_shop');}
	if(isset($meta['aircon_full'][0]) && $meta['aircon_full'][0] == 1){array_push($metaArray, 'aircon_full');}
	if(isset($meta['heated_pool'][0]) && $meta['heated_pool'][0] == 1){array_push($metaArray, 'heated_pool');}
	if(isset($meta['Guardian'][0]) && $meta['Guardian'][0] == 1){array_push($metaArray, 'Guardian');}
	if(isset($meta['spa'][0]) && $meta['spa'][0] == 1){array_push($metaArray, 'spa');}
	if(isset($meta['gym'][0]) && $meta['gym'][0] == 1){array_push($metaArray, 'gym');}
	if(isset($meta['beach_access'][0]) && $meta['beach_access'][0] == 1){array_push($metaArray, 'beach_access');}
	if(isset($meta['heli_pad'][0]) && $meta['heli_pad'][0] == 1){array_push($metaArray, 'heli_pad');}
	if(isset($meta['golf'][0]) && $meta['golf'][0] == 1){array_push($metaArray, 'golf');}
	if(isset($meta['water_front'][0]) && $meta['water_front'][0] == 1){array_push($metaArray, 'water_front');}
	if(isset($meta['skytv'][0]) && $meta['skytv'][0] == 1){array_push($metaArray, 'skytv');}
	if(isset($meta['wifi'][0]) && $meta['wifi'][0] == 1){array_push($metaArray, 'wifi');}
	if(isset($meta['Parking'][0]) && $meta['Parking'][0] == 1){array_push($metaArray, 'Parking');}
	if(isset($meta['small_sea_view'][0]) && $meta['small_sea_view'][0] == 1){array_push($metaArray, 'small_sea_view');}
	if(isset($meta['indoor_pool'][0]) && $meta['indoor_pool'][0] == 1){array_push($metaArray, 'indoor_pool');}
	
	//Meta classes that are variable names
	if(isset($meta['type_name'][0])){array_push($metaArray, str_replace(' ', '', $meta['type_name'][0]));}
	if(isset($meta['sale_or_rent'][0])){array_push($metaArray, str_replace(' ', '', $meta['sale_or_rent'][0]));}
	if(isset($meta['price'][0])){array_push($metaArray,  str_replace(' ', '', $meta['price'][0]));}
	if(isset($meta['number_of_beds'][0])){array_push($metaArray, str_replace(' ', '', $meta['number_of_beds'][0].'beds'));}
	if(isset($meta['agent_name'][0])){array_push($metaArray, str_replace(' ', '', $meta['agent_name'][0]));}
	
	
	return implode(' ', $metaArray);

	
	
}



//Get the existing properties
function existing_properties($id){

	$emailsQuery = $id;
	parse_str($emailsQuery, $query_array);
	if (array_key_exists('id', $query_array)) {
		
		$properties = explode(',', get_post_meta($query_array['id'], 'property_data',true));
		$args = array(
			'post_type' => 'properties',
			'posts_per_page' => -1,
			'include' => $properties
		);
		$posts = get_posts($args);
		if ($posts) {
			foreach ($posts as $property) {
			$meta = get_post_meta($property->ID); ?>
				<tr id="<?php echo $property->ID; ?>" class="propertyrow <?php echo strtolower(meta_class($property->ID)); ?> <?php echo property_locations_classes($property->ID); ?> rowselected">
					<td class=""><img src="<?php echo get_the_post_thumbnail_url($property->ID, array(75,75));?>"></td>
					<td class="">
					<a href="<?php echo $property->guid;?>" target="_blank"><?php echo $property->post_title; ?></a>
						<div class="message-container">
							<?php $notes = get_post_meta($query_array['id'], 'propnotes_'.$property->ID, true); ?>
							<?php $price = get_post_meta($query_array['id'], 'propprice_'.$property->ID, true); ?>
							<textarea class="message"><?php echo $notes; ?></textarea>
							<input type="text" name="price" class="price" placeholder="<?php echo $price; ?>" value="">
						</div>
					</td>
					<td class=""><?php echo property_locations($property->ID); ?></td>
					<td class=""><?php if(isset($meta['type_name'][0])){echo $meta['type_name'][0];} ?></td>
					<td class=""><?php if(isset($meta['sale_or_rent'][0])){echo $meta['sale_or_rent'][0];} ?></td>
					<td class=""><?php if(isset($meta['agent_name'][0])){echo $meta['agent_name'][0];} ?></td>
					<td class=""><?php if(isset($meta['number_of_beds'][0])){echo $meta['number_of_beds'][0];} ?></td>
					<td class=""><?php if(isset($meta['spa'][0])){echo meta_check($meta['spa'][0]);} ?></td>
					<td class=""><?php if(isset($meta['heated_pool'][0])){echo meta_check($meta['heated_pool'][0]);} ?></td>
					<td class=""><?php if(isset($meta['beach_access'][0])){echo meta_check($meta['beach_access'][0]);} ?></td>	
					<td class=""><?php if(isset($meta['aircon_full'][0])){echo meta_check($meta['aircon_full'][0]);} ?></td>
					<td class=""><?php if(isset($meta['heli_pad'][0])){echo meta_check($meta['heli_pad'][0]);} ?></td>

				</tr>
			<?php }		
		} 
	} 
}