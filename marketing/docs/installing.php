<? $page_title = "Rapid Prototyping and Building Framework from ZURB" ?>
<?php include("includes/_documentation_head.php"); ?>

	<header id="header" class="row">	
	  <div class="eight columns phone-three">
	    <h1><a href="index.php">Foundation 3 Documentation</a></h1>
	    <h4 class="subheader">Everything you need to know to build for the future.</h4>
	  </div>
	  <div class="four columns phone-one">
			<p class="show-for-small">
			  <a class='sidebar-button button' id='sidebarButton' href="#sidebar" >Menu</a>
			</p>
	  </div>	
	</header>	
	
	<div class="row">	
		<section role="main">
		  <div class="row">
		    <div class="eight columns">
    			<h3>Installing</h3>
    			<h4 class="subheader">Start using Foundation the way you want, with more control than ever before.</h4>
    			
    			<h4>SCSS and CSS</h4>
  				<p>There are two ways you can use Foundation: with Sass (SCSS), and with straight up CSS. If you're comfortable with Sass, working that way will give you a little more control over the framework as well as a lot of other niceties. If you're not comfortable with preprocessors, the CSS version is full featured and can be customized as well.</p>
  				
  				<hr />
  				
  				<h4>SCSS: Installing with Compass</h4>
  				<p>Hey Chris. I need your help with this part :)</p>  
  				
  				<hr />
  				
  				<h4>CSS: Customize and Download</h4>
  				<p>If you'd rather not work with a preprocessor like Sass, you can download Foundation as a single code pack with everything you need to create a responsive site.</p>
  				
  				<p>Visit the <a href="../download.php">download page</a> to get started with a CSS pack. You can choose to simply download everything, with most files joined to reduce requests, and with smart defaults that we've set. Alternately you can customize your download by including or omitting different pieces of the framework, and setting many of the Sass variables like colors, grid size and columns, etc.</p>  			
    			
    		</div>
    		<div class="four columns">
    		  <? include("includes/_download.php"); ?>
    		</div>
      </div>
		</section>
		
		<section id="sidebar" role="complementary">
			
			<dl class="tabs vertical hide-on-phones">
				<dd><a href="index.php">Getting Started</a></dd>
				<dd><a href="installing.php" class="active">Installing</a></dd>
				<dd><a href="grid.php">The Grid</a></dd>
				<dd><a href="typography.php">Typography</a></dd>
				<dd><a href="buttons.php">Buttons</a></dd>
				<dd><a href="forms.php">Forms</a></dd>
				<dd><a href="navigation.php">Navigation</a></dd>
				<dd><a href="tabs.php">Tabs</a></dd>
				<dd><a href="elements.php">Elements</a></dd>
				<dd><a href="orbit.php">Orbit</a></dd>
				<dd><a href="reveal.php">Reveal</a></dd>
				<dd><a href="support.php">Support</a></dd>
			</dl>
			
		</section>
	</div>
		
		
<?php include("includes/_documentation_foot.php");  ?>