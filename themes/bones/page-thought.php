<?php
/*
 Template Name: Thought Leadership
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(2); ?>

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							
									<?php
										// the content (pretty self explanatory huh)
										the_content();

										/*
										 * Link Pages is used in case you have posts that are set to break into
										 * multiple pages. You can remove this if you don't plan on doing that.
										 *
										 * Also, breaking content up into multiple pages is a horrible experience,
										 * so don't do it. While there are SOME edge cases where this is useful, it's
										 * mostly used for people to get more ad views. It's up to you but if you want
										 * to do it, you're wrong and I hate you. (Ok, I still love you but just not as much)
										 *
										 * http://gizmodo.com/5841121/google-wants-to-help-you-avoid-stupid-annoying-multiple-page-articles
										 *
										*/
										wp_link_pages( array(
											'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
											'after'       => '</div>',
											'link_before' => '<span>',
											'link_after'  => '</span>',
										) );
									?>
                                    
                                    <section id="promo-rsvp" class="content-block promo-rsvp tho-top"> 
  
  <div class="container title2"> 
  <div class="col-md-1"></div>
  <div class="col-md-10">
  <div class="tho-in">
  <h3>Alvarez &amp; Marsal Transaction Advisory Group</h3>
  <h1>10 Years of Turbulence in Global Private Equity</h1>
  <div class="t-email">
  <strong>Paul Aversano</strong><br/>
  <span>Managing Director and Global Practice Leader, Transaction Advisory</span><br/>
  <a href="mailto:paversano@alvarezandmarsal.com" target="_blank">paversano@alvarezandmarsal.com</a>
  </div>
  <p>Our business has been built on the concept of adding value to clients through any market cycle.  We have created a global, integrated suite of services that delivers value to our clients regardless of volatility in the M&amp;A market.</p>
  </div>
  </div>
  <div class="col-md-1"></div>
  </div>
  
  
</section>
<!--===========-->
									<section class="content-block tho-lead">
  <div class="container">
  <div class="col-md-1">
  <div class="soc-share">
	<div class="t-divide"></div>
	<ul class="soc-icons">
	<li><a href="http://www.facebook.com/sharer.php?u=http://www.am-tag.com/10thanniversary/thought-leadership/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/soc-fb.png" /></a></li>
	<li><a href="https://twitter.com/home?status=http%3A//www.am-tag.com/10thanniversary/thought-leadership/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/soc-tw.png" /></a></li>
	<li><a href="https://plus.google.com/share?url=http%3A//www.am-tag.com/10thanniversary/thought-leadership/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/soc-go.png" /></a></li>
	<li><a href="mailto:?&subject=Alvarez & Marsal Transaction Advisory: 10 Years of Turbulence in Global Private Equity&body=Hi,%0A%0AI%20thought%20you%20might%20be%20interested%20in%20this%20article%3A%0A%0Ahttp%3A//www.am-tag.com/10thanniversary/thought-leadership/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/soc-mail.png" /></a></li>
	<li><a href="//am-tag.com/10thanniversary/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/soc-more.png" /></a></li>
	</ul>
	<div class="t-divide"></div>
  </div>
  </div>
    <div class="col-md-10">		
	<p>In 2016, Alvarez &amp; Marsal’s Transaction Advisory Group celebrates 10 years of service to the private equity community.  In that 10 year time period, the M&A market has presented both tremendous opportunities and tremendous challenges.  Consider this: in the last 10 years, we have seen some of the lowest deal volume in the period, with 9,870 deals completed in 2009, to the highest with 17,500 deals completed in 2014 – or a peak to trough spread of over 75%. </p>
      <div class="t-divide"></div>
      <div class="text-center"><img src="<?php bloginfo('template_url'); ?>/images/tl-globaldeals.png" /></div>
	  <div class="t-divide"></div>
	  <div class="t-caption"><span>(1) Mergermarket Monthly M&amp;A Insider (2011 - 2016)</span></div>
	  <p>However, what is also borne out by the numbers is this: the amount of money to invest – “or dry powder” – has been on an overall ride up to record highs in the last 10 years: from $404 billion to $1,343 billion in 2015.  That is an increase of approximately 230% over a 10 year period. Today there is significant capital to be put to work, and significant work to be done getting portfolio companies ready for sale.</p>
	  <div class="t-divide"></div>
      <div class="text-center"><img src="<?php bloginfo('template_url'); ?>/images/tl-privequity.png" /></div>
	  <div class="t-divide"></div>
	  <div class="t-caption"><span>(2) 2016 Preqin Global Private Equity &amp; Venture Capital Report, Preqin (January 2016)</span></div>
	  <p>When Alvarez &amp; Marsal launched its Transaction Advisory Group in 2006, it was based on the belief that the firm was uniquely positioned to navigate these volatile global market conditions.  Our business has indeed been built on the concept of “counter-cyclicality”.  We have created a global, integrated suite of services that delivers value to our clients throughout the volatility of the M&A market these last 10 years.  As potential market disruptions continue– election cycles, geo-political issues, and new technologies that can change business models overnight – the A&M Transaction Advisory Group is well equipped to meet the ever changing needs of private equity investors.</p>
	  <hr/>
	  <label class="t-endline">Private Equity, Mergers and Acquisitions, Global Market, deal volume</label>
        <!--address-->
    </div>
	<div class="col-md-1"></div>
  </div>
</section>
									<div class="comment-body">
         <div class="spacer-am"></div>
						</div>
							<?php endwhile; else : ?>
                            <article id="post-not-found" class="hentry cf">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

<?php endif; ?>
<script>
var msie6 = $.browser == 'msie' && $.browser.version < 7;
if (!msie6) {
    var _height = $('.soc-share').height();
	var top2 = $('.soc-share').offset().top;
	console.log(_height);
	console.log(top2);
    $(window).scroll(function(event) {
        var y = $(this).scrollTop();
		console.log(y);
        var z = $('.comment-footer').offset().top;
        if ((y+90) >= top2 && (y+_height) < z) {
            $('.soc-share').addClass('fixed');
        } else {
            $('.soc-share').removeClass('fixed');
        }
    });
}
</script>
<?php get_footer(2); ?>
