<?php
/*
 Template Name: AM Survey
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

$useragent=$_SERVER['HTTP_USER_AGENT'];

$tablet_browser = 0;
$mobile_browser = 0;

if (preg_match('/(tablet|ipad|playbook)|(android(?!.*(mobi|opera mini)))/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
    $tablet_browser++;
}

if (preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|android|iemobile)/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
    $mobile_browser++;
}

if ((strpos(strtolower($_SERVER['HTTP_ACCEPT']),'application/vnd.wap.xhtml+xml') > 0) or ((isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE'])))) {
    $mobile_browser++;
}

$mobile_ua = strtolower(substr($_SERVER['HTTP_USER_AGENT'], 0, 4));
$mobile_agents = array(
    'w3c ','acs-','alav','alca','amoi','audi','avan','benq','bird','blac',
    'blaz','brew','cell','cldc','cmd-','dang','doco','eric','hipt','inno',
    'ipaq','java','jigs','kddi','keji','leno','lg-c','lg-d','lg-g','lge-',
    'maui','maxo','midp','mits','mmef','mobi','mot-','moto','mwbp','nec-',
    'newt','noki','palm','pana','pant','phil','play','port','prox',
    'qwap','sage','sams','sany','sch-','sec-','send','seri','sgh-','shar',
    'sie-','siem','smal','smar','sony','sph-','symb','t-mo','teli','tim-',
    'tosh','tsm-','upg1','upsi','vk-v','voda','wap-','wapa','wapi','wapp',
    'wapr','webc','winw','winw','xda ','xda-');
 
if (in_array($mobile_ua,$mobile_agents)) {
    $mobile_browser++;
}
 
if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']),'opera mini') > 0) {
    $mobile_browser++;
    //Check for tablets on opera mini alternative headers
    $stock_ua = strtolower(isset($_SERVER['HTTP_X_OPERAMINI_PHONE_UA'])?$_SERVER['HTTP_X_OPERAMINI_PHONE_UA']:(isset($_SERVER['HTTP_DEVICE_STOCK_UA'])?$_SERVER['HTTP_DEVICE_STOCK_UA']:''));
    if (preg_match('/(tablet|ipad|playbook)|(android(?!.*mobile))/i', $stock_ua)) {
      $tablet_browser++;
    }
}

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
                                    


<section id="promo-rsvp" class="content-block promo-survey"> 
  
  <div class="container text-center title1"> 
  
  </div>
  <center>
   <div class="container rsvp-header">
    <div class="col-md-4 title-logo">
         <img src="<?php bloginfo('template_url'); ?>/images/brand/tag-logo-tr.png" border="0" alt="" title="" />  
    </div>
   <div class="col-md-8 text-center title2a">
	 A&amp;M Transaction Advisory Group<br>
    Keys to Success<br>
  10th Anniversary Gala<br>
   <?php 
if($mobile_browser > 0 || $tablet_browser > 0){ 
?>
  <div class="rsvp-survey-button">
  <a href="http://www.am-tag.com/10thanniversary/rsvp/" class="rsvp-submit2">RSVP</a>
  </div>
<?php }else{?>
 <div class="rsvp-survey-button2">
  <a href="http://www.am-tag.com/10thanniversary/rsvp/" class="rsvp-submit2">RSVP</a>
  </div>
 
<?php }?>
  </div> 

 </div>
  </center>
  
  
</section>
                                    
<!--===========-->
<section id="content-3-7" class="content-block content-3-7">
  <div class="container">
    <div class="col-md-12 text-center">		
      
        <!--address-->
       <p style="margin-top:20px;color:#000 !important;">Among our various internal mottos, the most poignant here at A&M is that we pride ourselves on  "rolling up our sleeves" and getting involved with our client partners. In anticipation of our upcoming 10th anniversary event, where we aim to celebrate with you, our valued clients and partners, we want to ensure that we remain true to our values. <br>

           So in true A&M fashion, we wanted to get some feedback from you directly on the idea of success in business, and in life as a whole. </p>

      <p style="color:#ccc;">Please reply by April 22. Your prompt response is greatly appreciated.</p>
   
    </div>
  </div>
</section>
									<div class="comment-body">
                                    <section id="content-3-7" class="content-3-7">
  <div class="container">
    <div class="col-md-12 text-center">	
        
        
            <?php
            echo do_shortcode("[vfb id='1']");
            ?> 
    </div>
  </div>
</section>

         <div class="spacer-am"></div>
									<!--<div class="more-sec">
									<button id="more-button">More</button>
									</div>-->
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
<style type="text/css">

 .button-secondary{        
  font-family: 'Didot W01 Roman';
  background-color: #00355f !important;
  color: #ffffff !important;
  border: 0px;
  height: 50px;
  margin-left: 70px;
    }

</style>

<?php endif; ?>
<?php get_footer(2); ?>
