<section class="comment-footer footer-wrap-1-2" wp-cz-section="blocks_footer_1_2" wp-cz-section-title="Footer 1-2">
  <div class="container footer-1-2"> 
    <div class="big-social">
		2016 A&amp;M Transaction Advisory Group
    </div>
  </div>
  <!-- /.container --> 
</section>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/library/js/plugins.js"></script> 
<!--<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/library/js/bskit-scripts.js"></script>-->
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/library/js/jquery.slicknav.js"></script>

<script type="text/javascript">
$(document).ready(function(){
	$('.mobile-nav').slicknav();
	
	/* rsvp check box */

	// Check un check
	$("#scfp-name").click(function(){
		console.log("name click");	
		document.getElementById("scfp-name").checked = true;
		document.getElementById("scfp-email").checked = false;
	});

	$("#scfp-email").click(function(){
		console.log("email click");
		document.getElementById("scfp-email").checked = true;
		document.getElementById("scfp-name").checked = false;
	});
	
});

</script>
</body></html>
<!-- end of site. what a ride! -->