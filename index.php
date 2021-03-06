<?php
/**
 * The Main Template File for Bootstrap WP
 *
 * Layout based on Bootstrap. PHP queries based on Wordpress Twenty Tweve Theme.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Bootstrap_WP
 * @since Bootstrap WP 1.0
 */

get_header(); ?>


      <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="row">
			<?php 
				query_posts();
				while ( have_posts() ) : the_post();
			?>
	            <div class="col-12 col-sm-12 col-lg-12">
	              <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
	              	<?php the_title_attribute(); ?>
	              </a></h2>
	              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
	              <p><a class="btn btn-default" href="<?php the_permalink(); ?>">View details »</a></p>
	            </div><!--/span-->
			<?php endwhile; ?>
          </div><!--/row-->
        </div><!--/span-->

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
          <div class="well sidebar-nav">
          	<?php get_sidebar(); ?>
            <ul class="nav">
              <li>Sidebar</li>
              <li class="active"><a href="http://getbootstrap.com/examples/offcanvas/#">Link</a></li>
              <li><a href="http://getbootstrap.com/examples/offcanvas/#">Link</a></li>
              <li><a href="http://getbootstrap.com/examples/offcanvas/#">Link</a></li>
              <li>Sidebar</li>
              <li><a href="http://getbootstrap.com/examples/offcanvas/#">Link</a></li>
              <li><a href="http://getbootstrap.com/examples/offcanvas/#">Link</a></li>
              <li><a href="http://getbootstrap.com/examples/offcanvas/#">Link</a></li>
              <li>Sidebar</li>
              <li><a href="http://getbootstrap.com/examples/offcanvas/#">Link</a></li>
              <li><a href="http://getbootstrap.com/examples/offcanvas/#">Link</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
      </div><!--/row-->

      <hr>

      <footer>
        <p>© Company 2013</p>
      </footer>

    </div><!--/.container-->
<?php get_footer(); ?>