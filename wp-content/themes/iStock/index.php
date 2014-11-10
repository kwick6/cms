        <?php get_header(); ?>
        <div class="row">
            <div class="large-12 columns">

                <div style="height: 135px; border-bottom: 1px solid grey; margin-bottom: 10px;">
                    <div style="text-align: center;">
                        <p style="font-weight: bold; font-size: 23px; padding-top: 50px;">
                            Tips and Trends
                        </p>
                    </div>
                    <div style="text-align: right;">
                        <a href="#" style="text-decoration: none;">
                            <span style="font-size: 14px; font-weight: bold; color: #02a388;">
                                Latest
                            </span>
                        </a>
                        <a href="#" style="text-decoration: none;">
                            <span style="font-size: 14px; color: grey; padding-left: 20px;">
                                Most Popular
                            </span>
                        </a>
                    </div>
                </div>
                <div>
                    <div style="height: 20px; width: 112px; font-size: 10px; border: 1px solid grey; margin-bottom: 30px; 
                                padding-top: 3px; padding-left: 5px; color: grey;">
                        contributor spotlight
                    </div>
                </div>

                <!-- THE LOOP -->
                <div class="row">
		<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; query_posts("paged=$paged&post_type=post"); ?>
                <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>

                    <div class="large-4 medium-4 columns" style="float: left;">

                        <div class="content">
                            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <div class="post-header">
                                <div class="date"><?php the_time( 'M j y' ); ?></div>
                                <h2>
                                    <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h2>
                                <div class="author">
                                    <?php the_author(); ?>
                                </div>
                            </div>
                            <div class="entry clear">
                                <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
                                <?php the_content(); ?>
                                <?php edit_post_link(); ?>
                                <?php wp_link_pages(); ?>
                            </div>
                            <div class="post-footer">
                                <div class="comments"><?php comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments' ); ?></div>
                            </div>
                        </div>

                    </div>
                </div>
                <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>

                <?php else : ?>
                <?php endif; ?>
                </div>
                    </div>
                </div>

<?php get_footer(); ?>