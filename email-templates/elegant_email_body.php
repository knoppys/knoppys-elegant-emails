<?php
/******************************************
Create an email body and output each property from the $propertites array
*******************************************/

function elegant_email_body($messagtext,$properties){ 

	ob_start(); ?>

	<div>
		<div class="block-grid" style="margin: 0 auto;min-width: 320px;max-width: 600px;width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #FFFFFF;">
			<div style="border-collapse: collapse;display: table;width: 100%;">

			<table cellspacing="0" cellpadding="10" class="" width="" style="width:100%;" border-collapse="collapse">
		        <tbody>
		            <tr>    
		                <td class="mobilestack">
		                	<center>
		                		<p style="margin: 0;font-size: 16px;line-height: 18px;text-align: center"><span style="font-size: 16px; line-height: 1.5; font-weight: bold;"><a href="http://www.elegant-address.com" style="color: #bc8536;"><span style="color:#bc8536">www.elegant-address.com</span></a></span></p>
		                		<p style="margin: 0;font-size: 16px;line-height: 18px;text-align: center"><span style="font-size: 16px; line-height: 1.5; font-weight: bold;"><a href="mailto:enquiries@elegant-address.com" style="color: #bc8536;"><span style="color:#bc8536">enquiries@elegant-address.com</span></a></span></p>	
		                		<p style="margin: 0;font-size: 16px;line-height: 18px;text-align: center"><span style="font-size: 16px; line-height: 1.5; font-weight: bold;"><a href="tel:441244629963" style="color: #bc8536;"><span style="color:#bc8536">+44 (0) 1244 629 963</span></a></span></p>	
		                	</center>
		                	<div style="margin-top:10px;padding-bottom: 10px">
	                    		<p style="margin: 0;font-size: 14px;line-height: 18px;text-align: left"><span style="font-size: 14px; line-height: 1.5; font-weight: normal;"><?php echo $messagtext; ?></span></p>	
	                    	</div>
		            	</td>
		            </tr>
		        </tbody>
		    </table> 	

			<?php foreach ($properties as $property) { ?>
			
		    <table cellspacing="0" cellpadding="10" class="" width="" style="width:100%;max-width: 600px;" border-collapse="collapse">
		        <tbody>
		            <tr>    
		                <td>            
			               <table cellspacing="0" cellpadding="0" class="" width="" style="width:100%;background: #fff;" border-collapse="collapse">
	                	        <tbody>
		                	        <tr>
		                	        	<td colspan="2">
		                	        		<p style="margin-top:20px;font-size: 12px;line-height: 18px;text-align: left"><a href="<?php echo get_the_permalink($property[0]); ?>" target="_blank" style="color:#bc8536;"><span style="color:#bc8536; font-size: 18px; line-height: 27px; font-weight: bold;margin-top:10px;"><?php echo get_the_title($property[0]); ?></span></a></p>
			                				<center style="background-color:#efefef; width: 100%; padding-top: 10px;padding-bottom: 10px;margin-bottom:10px;">
			                					<img class="" align="center" alt="<?php echo get_the_title($property[0]); ?>" border="0" class="center" src="<?php echo get_the_post_thumbnail_url($property[0], 'large'); ?>" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: 0;height: auto;float: none;width: 100%;max-width: 580px" title="Image">		                	
			                				</center>
		                	        	</td>
		                	        </tr>
		                	        <tr> 
		                	           	<td valign="center" class="mobilestack">	                	                	
	                	                	<p style="margin: 0;font-size: 14px;line-height: 18px;text-align: left"><span style="font-size: 14px; line-height: 16px;"><?php echo get_post_meta($property[0],'BriefDescription', true); ?></span></p>		                	                	
	                	                </td>    	                
	                	                <td valign="center" class="mobilestack">	
	                	                	<div style="height: 10px;display: block;"></div>                	                		                	                    
	                	                	<p style="margin: 0;font-size: 14px;line-height: 18px;text-align: left"><span style="font-size: 14px; line-height: 1.5; font-weight: normal;">Property Type: <?php echo get_post_meta($property[0],'type_name', true); ?></span></p>
		            						<p style="margin: 0;font-size: 14px;line-height: 18px;text-align: left"><span style="font-size: 14px; line-height: 1.5; font-weight: normal;">Location: <?php location($property[0]); ?></span></p>
		            						<p style="margin: 0;font-size: 14px;line-height: 18px;text-align: left"><span style="font-size: 14px; line-height: 1.5; font-weight: normal;">Reference: <?php echo get_post_meta($property[0],'reference_code', true); ?></span></p>	
		            						<p style="margin: 0;font-size: 14px;line-height: 18px;text-align: left"><span style="font-size: 16px; line-height: 1.5; font-weight: bold;">Price: <?php echo $property[2]; ?></span></p>
		            						<p style="padding:5px;color:#ffffff;background-color:#5289a8;margin: 0;font-size: 14px;line-height: 18px;text-align: center;"><a style="color:#ffffff;" target="_blank" href="<?php echo get_site_url(); ?>/download-brochure/?brochure_id=<?php echo $property[0]; ?>"><span style="color:#ffffff;padding:5px;color:font-size: 16px; line-height: 1.5; font-weight: bold;">Download Our Brochure</span></a></p>       			
		            					</td>	                	                
	                	            </tr>
	                	        </tbody>
	                	    </table>      	
		              		
		            		<div style="margin-top:10px;border-bottom:1px solid #d2d2d2;padding-bottom: 10px">		     
		            			
		            			<p style="margin: 0;font-size: 14px;line-height: 18px;text-align: left"><span style="font-size: 14px; line-height: 1.5; font-weight: normal;"><?php echo nl2br(rawurldecode($property[1])); ?></span></p>
		            		</div>	
		            	</td>
		            </tr>
		        </tbody>
		    </table> 			
					
			<?php } ?>

			</div>
		</div>
	</div>

<?php $content = ob_get_clean();
return $content;
};


//Get the properties location term / terms from the location taxonomy
function location($id){

	$terms = get_the_terms($id,'locations');
	foreach ($terms as $term) {
		echo $term->name;
		if (count($terms) > 1){
			echo ', ';
		}
	}

}