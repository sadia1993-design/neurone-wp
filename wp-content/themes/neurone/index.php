<?php get_header(); ?>

		<!-- ::::::::::::::::::::: start slider section:::::::::::::::::::::::::: -->
		<section class="slider-area">

            <?php
                $loop = new WP_Query( array(
	                'post_type' => 'neurone_slider',
	                'posts_per_page' => 2,
	                'post_status' => 'publish',
	                'order' => 'ASC'
                ) );

                while ( $loop->have_posts() ) : $loop->the_post(); ?>

	                <!-- slide item one -->
                    <div class="homepage-slider " style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ) ?>)">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-7">
                                            <div class="slider-content">
                                                <h1><?php the_title(); ?></h1>
                                                <p><?php  the_content(); ?></p>
                                                <a href="<?php echo get_post_meta( get_the_ID(), 'btn_link', true ); ?>"><?php echo get_post_meta( get_the_ID(), 'btn_text', true ); ?> <i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php
                    endwhile;
                    wp_reset_query();
                ?>
			
		</section><!-- slider area end -->
	
	
		<!-- ::::::::::::::::::::: start intro section:::::::::::::::::::::::::: -->
		<section class="section-padding darker-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8">
						<div class="intro-title text-center">
							<h2>Welcome to the Neuron Finance</h2>
							<div class="hidden-xs">
								<p>Interactively simplify 24/7 markets through 24/7 best practices. Authoritatively foster cutting-edge manufactured products and distinctive.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">

                    <?php
                        $feature = new WP_Query( array(
                            'post_type' => 'neurone_feature',
                            'posts_per_page' => 3,
                            'post_status' => 'publish',
                            'order' => 'ASC',
                            'orderby'=>'menu_order'
                        ) );

                        while ( $feature->have_posts() ) : $feature->the_post(); ?>

                            <div class="col-md-4">
                                <div class="single-intro">
                                    <div class="intro-img"  style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ) ?> )"  ></div>
                                    <div class="intro-details text-center">
                                        <h3><?php the_title(); ?></h3>
                                        <p><?php the_content(); ?></p>
                                    </div>
                                </div>
                            </div>

                    <?php
                        endwhile;
                        wp_reset_query();
                    ?>


                </div>
			</div>
		</section><!-- intro area end -->
	
	
		<!-- ::::::::::::::::::::: start block content area:::::::::::::::::::::::::: -->
		<section class="section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="block-text">
							<h2>A Finance Agency Crafting Beautiful & Engaging Online Experiences</h2>
							<p>Seamlessly communicate distinctive alignments and business models. Efficiently whiteboard robust meta-services whereas stand-alone synergy. Enthusiastically engage premier supply chains after intuitive testing procedures. Conveniently parallel task robust imperatives through corporate customer service.</p> 
							
							<p>Dynamically productivate tactical mindshare via business collaboration and idea-sharing. Credibly conceptualize extensive schemas for functionalized metrics. </p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="block-img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/homepageblock.jpg" alt="" />
						</div>
					</div>
				</div>
			</div>
		</section><!-- block area end -->
	
	
		<!-- ::::::::::::::::::::: start services section:::::::::::::::::::::::::: -->
		<section class="section-padding darker-bg">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
						<div class="template-title text-center">
							<h2>We Provide Huge Range of Services</h2>
							<p>Holisticly transform excellent systems rather than collaborative leadership. Credibly pursue compelling outside the box.</p>
						</div>
					</div>
				</div>
				
				<div class="row">


                    <?php
                        $service = new wp_query([
                            'post_type' => 'neurone_service',
                            'post_per_page' => 6,
                            'order' => 'ASC'
                        ]);

                        while( $service->have_posts() ): $service->the_post()  ?>

                    <!-- single service -->
					<div class="col-sm-6 col-md-4">
						<div class="services-tiem">
							<?php the_post_thumbnail('thumbnail' , array('class' => 'hvr-buzz-out')) ;?>
                            <h3><a href="<?php echo get_post_meta(get_the_ID(), 'btn_link', true)?>"><?php the_title(); ?></a></h3>
							<p><?php the_content();?></p>
						</div>
				    </div>

				    <?php
				       endwhile;
				       wp_reset_query();
				    ?>

			    </div>
		</section><!-- end services section -->
	

		<!-- :::::::::::::::::::::  Client Section:::::::::::::::::::::::::: -->
		<section class="client-logo">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="all-client-logo">
							<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/cling-logo/1.jpg" alt="" /></a>
							<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/cling-logo/2.jpg" alt="" /></a>
							<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/cling-logo/3.jpg" alt="" /></a>
							<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/cling-logo/4.jpg" alt="" /></a>
							<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/cling-logo/5.jpg" alt="" /></a>
						</div>
					</div><!-- /.col-md-12 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- end client section -->
<?php get_footer(); ?>