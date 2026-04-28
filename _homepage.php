<?php
/*
 Template Name: Homepage
 */

get_header();
?>


	<main id="primary" class="site-main">
		<div class="backgroundWrapOne">
			<div class="container-fluid px-5 d-flex align-items-center" id="aboutContainer">
				<div class="row">
					
					<div class="col-12 col-md-5 py-0 pl-5 pr-0 text-center" id="aboutContentOne">
						<img src="<?php echo site_url(); ?>/wp-content/uploads/2021/07/18.jpg" class="w-100">	
					</div>
					<div class="col-12 col-md-7" id="aboutContentTwo">
					<h2>About Me</h2>
						<p class="aboutParagraph">I&rsquo;m a front‑end developer focused on building interfaces that feel intentional, accessible, and genuinely enjoyable to use. My background spans custom WordPress development and microsite creation within a custom in‑house CMS &mdash; blending structured systems with hands‑on front‑end work to bring designs to&nbsp;life.</p>
                        <p class="aboutParagraphTwo">I care a lot about the craft: clean code, thoughtful interactions, and the small details that make a layout feel right. I like collaborating early, solving problems with designers, and shaping digital experiences that function as well as they look.</p>
                        <p class="aboutParagraphThree">Outside of work, I&rsquo;m usually learning something new (lately React and deeper WCAG 2.2 practices), collecting and reading comic books, or building LEGO sets. The latter of which has a familiar rhythm to it: follow the design, see how the pieces relate, and build something that clicks into place the way it should. It&rsquo;s the same mindset I bring to front‑end development.</p>
						<div class="d-flex buttonLinks">
							<a href="<?php echo site_url(); ?>/wp-content/uploads/2026/04/Stuart-Gibbs-Resume.pdf" target="_blank" class="btn btn-tertiary btnOne">View Resume<i class="ml-3 fas fa-angle-double-right"></i></a>
							<a href="https://www.linkedin.com/in/stuart-gibbs-0602aa82" class="btn btn-tertiary btnTwo" target="_blank">LinkedIn Profile<i class="ml-3 fas fa-angle-double-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container-fluid p-0 d-flex align-items-center" id="projectsContainer">
			<div class="row mt-5">
				<div class="col-12 col-sm-10 mb-4 mx-auto titleContainer">
					<h2 class="ml-2">Projects</h2>
				</div>
				<div class="row mx-auto d-flex justify-content-center" id="cardRow">

                 <!--Define our WP Query Parameters-->
                    <?php $the_query = new WP_Query( array( 'category_name' => 'projects', 'posts_per_page' => -1, 'orderby' => '​publish_date')); ?>
                            
                    <!-- Start our WP Query -->
                        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                            
                            <div class="card center projectCard post col-12 col-md-3 mx-3 mt-5">
                                
                                
                                <div class="card-body">
                                    <h3 class="text-center card-title post-title"><?php the_title(); ?></h3>
                                    
								</div>
								
							</div> 
							

                        <!-- Repeat the process and reset once it hits the limit -->
                        <?php endwhile; wp_reset_postdata(); ?>
                
						
				</div>
				<div class="row col-12 mx-auto d-flex justify-content-center" id="expandedContentRow">
					<!--Define our WP Query Parameters-->
					<?php $the_query = new WP_Query( array( 'category_name' => 'projects', 'posts_per_page' => -1, 'orderby' => '​publish_date')); ?>
                            
							<!-- Start our WP Query -->
							<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

							<div class="row expandedContent"> 
                                <div class="col-12 col-md-10 mx-auto expandedContentContainer">
                                    <?php the_content(); ?>
				                </div>   
                            </div>

							<!-- Repeat the process and reset once it hits the limit -->
							<?php endwhile; wp_reset_postdata(); ?>
				</div>
			</div>
		</div>
		<div class="backgroundWrapTwo">
			<div class="container-fluid px-5 pt-5 d-flex align-items-center" id="contactContainer">
				<div class="row">
					<div class="col-12 col-lg-6 mx-auto p-5 leftContainer">
						<div class="container skillsContainer">
							<div class="row mx-auto">
								<div class="col-12 col-md-11 mx-auto justify-content-center">
									<h2>Skills</h2>
								</div>
							</div>
							<div class="row mx-auto justify-content-center">
								<div class="col-3 align-items-center logoContainer">
									<img src="<?php echo site_url(); ?>/wp-content/uploads/2021/07/html.svg" class="w-100">
									<p class="text-center">HTML</p>
								</div>
								<div class="col-3 align-items-center logoContainer">
									<img src="<?php echo site_url(); ?>/wp-content/uploads/2021/07/css.svg" class="w-100">
									<p class="text-center">CSS</p>
								</div>
								<div class="col-3 align-items-center logoContainer">
									<img src="<?php echo site_url(); ?>/wp-content/uploads/2021/07/sass.svg" class="w-100">
									<p class="text-center">SASS</p>
								</div>
							</div>
							<div class="row mx-auto justify-content-center">
								<div class="col-3 align-items-center logoContainer">
									<img src="<?php echo site_url(); ?>/wp-content/uploads/2021/07/bootstrap.svg" class="w-100">
									<p class="text-center">Bootstrap</p>
								</div>
								<div class="col-3 align-items-center logoContainer">
									<img src="<?php echo site_url(); ?>/wp-content/uploads/2021/07/php.svg" class="w-100">
									<p class="text-center">PHP</p>
								</div>
								<div class="col-3 align-items-center logoContainer">
									<img src="<?php echo site_url(); ?>/wp-content/uploads/2021/07/git.svg" class="w-100">
									<p class="text-center">Git</p>
								</div>
							</div>
							<div class="row mx-auto justify-content-center">
								<div class="col-3 align-items-center logoContainer">
									<img src="<?php echo site_url(); ?>/wp-content/uploads/2021/07/Wordpress.svg" class="w-100">
									<p class="text-center">WordPress</p>
								</div>
								<div class="col-3 align-items-center logoContainer">
									<img src="<?php echo site_url(); ?>/wp-content/uploads/2021/07/javascript.svg" class="w-100">
									<p class="text-center">JavaScript</p>
								</div>
								<div class="col-3 align-items-center logoContainer">
									<img src="<?php echo site_url(); ?>/wp-content/uploads/2021/07/jquery.svg" class="w-100">
									<p class="text-center">jQuery</p>
								</div>
							</div>
							<div class="row mx-auto justify-content-center">
								<div class="col-3 align-items-center logoContainer">
									<img src="<?php echo site_url(); ?>/wp-content/uploads/2021/07/mamp-e1627686299535.png" class="w-100">
									<p class="text-center">MAMP</p>
								</div>
								<div class="col-3 align-items-center logoContainer">
									<img src="<?php echo site_url(); ?>/wp-content/uploads/2021/07/vscode.svg" class="w-100">
									<p class="text-center">VS Code</p>
								</div>
								<div class="col-3 align-items-center logoContainer">
									<img src="<?php echo site_url(); ?>/wp-content/uploads/2021/07/dns.svg" class="w-100">
									<p class="text-center">DNS</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-6 mx-auto py-5 px-0 rightContainer">
						<div class="container formContainer">
							<div class="row mx-auto">
								<div class="col-12 col-md-11 mx-auto justify-content-center">
									<h2>Contact Me</h2>
									<?php echo do_shortcode("[ninja_form id=1]"); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
