<?php
/*
 Template Name: Homepage 2
 */

get_header();
?>


	<main id="primary" class="site-main">
		<div class="container-fluid px-5 d-flex align-items-center" id="aboutContainer">
			<div class="row">
				<div class="col-12 col-md-8 mx-auto">
					<h2>About Me</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce imperdiet ipsum eget arcu ultrices porttitor. Vivamus eget elit molestie, faucibus arcu quis, finibus lorem. Sed enim tortor, consequat nec bibendum id, congue et turpis. Cras eros purus, elementum et sem nec, lacinia tincidunt est. Curabitur laoreet aliquet turpis sit amet suscipit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas at finibus justo, sed tincidunt lorem.</p>
					<p>Aenean tristique justo eu molestie euismod. Sed arcu tellus, efficitur vel turpis vel, volutpat iaculis diam. Cras a mattis enim, ut faucibus diam. Vestibulum ultricies a nunc at imperdiet. Integer accumsan velit urna, a vehicula eros dictum eget. Nulla vulputate quam non tortor tempus interdum. Quisque pellentesque sapien id imperdiet scelerisque. Vivamus lacinia nulla sit amet libero ullamcorper congue.</p>
				</div>
			</div>
		</div>

		<div class="container-fluid px-5 pb-5 d-flex align-items-center" id="projectsContainer">
			<div class="row mt-5">
				<div class="col-12 col-md-8 mx-auto">
					<h2>Projects</h2>
				</div>
				<div class="row col-12 mx-auto d-flex justify-content-center" id="cardRow">

                 <!--Define our WP Query Parameters-->
                    <?php $the_query = new WP_Query( array( 'category_name' => 'projects', 'posts_per_page' => 6, 'orderby' => '​publish_date')); ?>
                            
                    <!-- Start our WP Query -->
                        <?php $cnt = 0;
                        
                        while ($the_query -> have_posts()) : $the_query -> the_post(); $classID = $cnt++%7; ?>
                            
                            <div class="card post col-md-3 col-12 mx-3 my-3" <?php echo 'id='.$classID; ?>>
                                
                                
                                <div class="card-body">
                                    <p class="text-left card-title post-title"><!--<a href="<?php the_permalink() ?>">--><?php the_title(); ?><!--</a>--></p>
									<!-- <?php the_excerpt(__('(more…)')); ?> -->
									
								</div>
								<div class="post-image">
                                    <?php $cardImg = the_post_thumbnail(); ?>
								</div>
								
                            </div>
                            <div class="row expandedContent"> 
                                <div class="col-12 col-md-8 mx-auto">
                                
                                    <?php the_content(); ?>
				                </div>   
                            </div>

                        <!-- Repeat the process and reset once it hits the limit -->
                        <?php endwhile; wp_reset_postdata(); ?>
                


				</div>
			</div>
		</div>

		<div class="container-fluid px-5 d-flex align-items-center" id="contactContainer">
			<div class="row">
				<div class="col-12 col-md-8 mx-auto">
					<h2>Contact Me</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce imperdiet ipsum eget arcu ultrices porttitor. Vivamus eget elit molestie, faucibus arcu quis, finibus lorem. Sed enim tortor, consequat nec bibendum id, congue et turpis. Cras eros purus, elementum et sem nec, lacinia tincidunt est. Curabitur laoreet aliquet turpis sit amet suscipit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas at finibus justo, sed tincidunt lorem.</p>
					<p>Aenean tristique justo eu molestie euismod. Sed arcu tellus, efficitur vel turpis vel, volutpat iaculis diam. Cras a mattis enim, ut faucibus diam. Vestibulum ultricies a nunc at imperdiet. Integer accumsan velit urna, a vehicula eros dictum eget. Nulla vulputate quam non tortor tempus interdum. Quisque pellentesque sapien id imperdiet scelerisque. Vivamus lacinia nulla sit amet libero ullamcorper congue.</p>
				</div>
			</div>
		</div>

	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
