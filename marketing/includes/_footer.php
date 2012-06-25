  <footer class="row">
    <section class="five columns">
      <h6><strong>Made by ZURB</strong></h6>
      <p>Foundation is made by <a href="http://www.zurb.com/">ZURB</a>, a product design agency in Campbell, California. We've put over 14 years of experience building web products, services and websites into this framework. <a href="../about.php">Foundation Info and Goodies &rarr;</a></p>
    </section>
    
    <section class="three columns">
      <h6><strong>Using Foundation?</strong></h6>
      <p>Let us know how you're using Foundation and we might feature you as an example!<br /><a href="mailto:foundation@zurb.com?subject=I'm%20using%20Foundation">Get in touch &rarr;</a></p>
    </section>
    
    <section class="four columns">
      <h6><strong>Need some help?</strong></h6>
      <p>For answers or help visit the <a href="docs/support.php">Support page</a>.</p>
    
      <ul class="block-grid three-up">
      	<li>
    	    <!-- Place this tag where you want the +1 button to render -->
    			<g:plusone size="medium"></g:plusone>
    			
    			<!-- Place this render call where appropriate -->
    			<script type="text/javascript">
    			  (function() {
    			    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    			    po.src = 'https://apis.google.com/js/plusone.js';
    			    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
    			  })();
    			</script>
    		</li>
    		<li>
          <iframe allowtransparency="true" frameborder="0" scrolling="no"
    src="http://platform.twitter.com/widgets/follow_button.html?screen_name=foundationzurb"
    style="width:80px; height:20px;"></iframe>
    		</li>
    		<li>
    			<iframe src="http://www.facebook.com/plugins/like.php?app_id=273982815961057&amp;href=foundation.zurb.com&amp;send=false&amp;layout=button_count&amp;width=90&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp;font=lucida+grande&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:90px; height:21px;" allowTransparency="true"></iframe>
    		</li>
    	</ul>
      
    </section>
  </footer>
  
  <div id="copyright">
    <div class="row">
      <div class="four columns">
        <p>Site content &copy; 2012 ZURB, inc.</p>
      </div>
      <div class="eight columns">
        <ul class="link-list right">
          <li><a href="index.php">Home</a></li>
          <li><a href="download.php">Download</a></li>
          <li><a href="docs/index.php">Documentation</a></li>
          <li><a href="docs/install.php">Install</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="http://feeds.feedburner.com/zurb/blog"><span class="glyph"></span> Subscribe to the ZURBlog</a></li>
        </ul>
      </div>
    </div>
  </div>

	<script src="../js/jquery.min.js"></script>
	<script src="../js/modernizr.foundation.js"></script>
	<script src="jswipe.js"></script>
	<script src="../js/jquery.reveal.js"></script>
	<script src="../js/jquery.orbit-1.4.0.js"></script>
	<script src="../js/jquery.customforms.js"></script>
	<script src="../js/jquery.placeholder.min.js"></script>
	<script src="../js/jquery.tooltips.js"></script>
	<script src="../js/app.js"></script>
	<script src="swipe.js"></script>
	<script src="github.js"></script>
	<script src="http://www.zurb.com/assets/zurb.mega-drop.js"></script>

  <script> 

    var _gaq = _gaq || [];
  	_gaq.push(
  	  ['_setAccount', 'UA-2195009-2'],
  	  ['_trackPageview'],
  	  ['b._setAccount', 'UA-2195009-27'],
  	  ['b._trackPageview'] 
  	);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

		$(document).on('click', '.src-download', function (event) {
			_gaq.push(['_trackEvent', 'Foundation', 'Downloaded']);
		});
  </script>
</body>
</html>