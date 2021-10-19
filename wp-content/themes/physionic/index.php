<?php get_header(); ?>

<div class="main">
    <section class="banner">
        <div class="text">
            <?php 
                if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Banner text') ) :
                endif;
            ?>  
        </div>  
        <div class="form">
            <?php 
                if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Banner form') ) :
                endif;
            ?>  
        </div>
    </section>
    <section class="leading-medicine">
        <div class="container-medicine">
           <div class="introduction">
                <?php 
                    if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Leading Medicine') ) :
                    endif;
                ?>
           </div>
            <div class="cards">
                <?php
                    // Filtro las entradas que pertenecen a la categoria Leading
                    $categoria = "Leading";
                    $consulta = array(
                        'category_name' => $categoria,
                        'showposts'     => 3,
                        'post_type' => 'post',
                        'orderby' => 'ID',
                        'order' => 'ASC'
                        
                    );
                    $wp_query = new WP_Query($consulta);
                ?>
                <?php if (have_posts()) { ?>
                    <div class="container-cards">
                        <?php while (have_posts()) : the_post(); ?>
                            <div class="card">
                                <div class="title">
                                    <img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/people-logo-02.png" alt="Logo people">
                                    <span><?php the_title(); ?></span>
                                </div>
                                <div class="description">
                                    <p><?php the_excerpt(); ?></p>
                                    <a href="<?php the_permalink(); ?>">Learn more</a>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                    <?php wp_reset_postdata(); ?>
                <?php } ?>
            </div>  
        </div>
    </section>
    <section class="clients"> 
        <div class="container-clients">
            <div class="introduction">
                <?php 
                    if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Clients') ) :
                    endif;
                ?>
           </div>
        </div>
    </section>
    <section class="FAQ"> 
        <div class="container-faq">
            <div class="introduction">
                <?php 
                    if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('FAQ') ) :
                    endif;
                ?>
           </div>
           <div class="faqs">
                <?php
                    // Filtro las entradas que pertenecen a la categoria FAQ
                    $categoria = "faq";
                    $consulta = array(
                        'category_name' => $categoria,
                        'showposts'     => 50,
                        'post_type' => 'post',
                        'orderby' => 'ID',
                        'order' => 'ASC'
                        
                    );
                    $wp_query = new WP_Query($consulta);
                ?>
                 <?php if (have_posts()) { ?>
                    <div class="container-faqs">
                        <?php while (have_posts()) : the_post(); ?>
                            <div class="faq">
                                <div class="title">
                                    <span><?php the_title(); ?></span>
                                </div>
                                <div class="description">
                                    <p><?php the_excerpt(); ?></p>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                    <?php wp_reset_postdata(); ?>
                <?php } ?>
           </div>
        </div>
    </section>
    <section class="pricing"> 
        <div class="container-pricing">
            <div class="introduction">
                <?php 
                    if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Pricing') ) :
                    endif;
                ?>
           </div>
        </div>
    </section>
    <section class="newsletter"> 
        <div class="container-newsletter">
            <?php 
                if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Newsletter') ) :
                endif;
            ?>
        </div>
    </section>
</div>
<?php get_footer(); ?>