<?php
/**
* The template for displaying the form partial
*/

//Advanced Custom Fields
$hide_block = get_sub_field('hide_block');

$form_id = get_sub_field('form_id');
$add_intro_text = get_sub_field('add_intro_text');
$intro_text = get_sub_field('intro_text');
$title = get_sub_field('title');
$title_h1 = get_sub_field('title_h1');
$add_description = get_sub_field('add_description');
$description = get_sub_field('description');
$gravityforms = get_sub_field('gravityforms');

?>

<?php if( empty($hide_block) ) : ?>

	<!-- FORM
	========================= -->
	<section <?php if($form_id): echo 'id="' . $form_id . '"'; endif; ?> class="form">
	    <div class="container">
			<div class="row">
	
	            <div class="col-12 col-md-10 mx-md-auto text-center shadow form-wrapper py-3 p-md-4 mt-n3 mt-md-n5 mb-n3 mb-md-n5">
					<?php if($add_intro_text): ?>
						<div class="form-intro col-12 col-md-9 mx-md-auto mb-5">
							<?php echo $intro_text; ?>
						</div>
					<?php endif; ?>
					
                    <div class="form-description mb-4">
                    	<?php if($title_h1): ?>
	                        <h1 class="page-title"><?php echo $title; ?></h1>
	                    <?php else: ?>
	                        <h2><?php echo $title; ?></h2>
	                    <?php endif; ?>
	
	                    <?php if($add_description): ?>
	                        <?php echo $description; ?>
	                    <?php endif; ?>
					</div>
					
					<?php gravity_form( $gravityforms['value'], false, false, false, '', false ); ?>
	            </div>
	            
	        </div>
	    </div>
	</section>
	
<?php endif; ?>
