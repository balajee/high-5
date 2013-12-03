<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>{title}</title>
    
    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!--<link href="css/navbar-fixed-top.css" rel="stylesheet">-->
     <link href="/assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/style-responsive.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="/css/gallery.css" />
    <style>
	.grid figcaption h3{font-size: 14px;line-height: 18px;}
    </style>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
	<script src="/js/html5shiv.js"></script>
	<script src="/js/respond.min.js"></script>
	<script>var ajaxurl="/main/getRecommendation/";</script>
    <![endif]-->
</head>

<body class="boxed-page">
    <div class="container">
    <section id="container" class="">
	<!--header start-->
	<header class="header white-bg">
	    <div class="container">
		<div class="sidebar-toggle-box">
                      <div data-original-title="Toggle Navigation" data-placement="right" class="icon-reorder tooltips"></div>
                  </div>

		<!--logo start-->
		<a href="/" class="logo" ><img src="/img/high5LogoVer1_77x77.jpg" height="37" /> high<span>5</span> video</a>
		<!--logo end-->
		
		<div class="nav notify-row" id="top_menu"></div>
		
		
		<div class="top-nav ">
		    <ul class="nav pull-right top-menu">
			<li>
			    <form action="/search/">
				<input type="text" class="form-control search" name="q" placeholder="Video Search" />
			    </form>
			</li>
			
			<div class="nav notify-row" id="top_menu">
			</div>

			
			<!-- user login dropdown start-->
			<li class="dropdown">
                          <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                              <span id="location" class="username"><i class="icon-spinner icon-spin"></i></span>
                              <b class="caret"></b>
                          </a>
                          <ul class="dropdown-menu extended logout">
                              <div class="log-arrow-up"></div>
                              <li><a href="/"><i class="icon-key"></i>Change Location</a></li>
                          </ul>
			</li>
			<!-- user login dropdown end -->
		    </ul>
		</div>
	    </div>
	</header>
	<!--header end-->
	
	<aside>
              <div id="sidebar"  class="nav-collapse ">
		<ul class="sidebar-menu">
			<li><a href="/">Home</a></li>
			<li class="sub-menu active">
			    <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#">Channels <b class=" icon-angle-down"></b></a>
			    <ul class="sub">
				<li><a href="/channel/news/">News</a></li>
				<li><a href="/channel/entertainment/">Entertainment</a></li>
				<li><a href="/channel/fashion/">Fashion</a></li>
				<li><a href="/channel/home/">Home</a></li>
				<li><a href="/channel/parenting/">Parenting</a></li>
				<li><a href="/channel/food/">Food</a></li>
				<li><a href="/channel/sports/">Sports</a></li>
				<li><a href="/channel/health/">Health</a></li>
				<li><a href="/channel/travel/">Travel</a></li>
				<li><a href="/channel/autos/">Autos</a></li>
				<li><a href="/channel/business/">Business</a></li>
				<li><a href="/channel/tech/">Tech</a></li>
				<li><a href="/channel/video-games/">Video Fames</a></li>
				<li><a href="/channel/pets/">Pets</a></li>
				<li><a href="/channel/all/">All</a></li>
			    </ul>
			</li>
		    </ul>
		</div>
          </aside>
	
	
	<!--main content start-->
	<section id="main-content">
	    <section class="wrapper">
		{body}
            <!-- page end-->
	    
	    </section>
	</section>
      <!--main content end-->
    </section>
    </div>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/hover-dropdown.js"></script>
    <script src="/js/jquery.scrollTo.min.js"></script>
    <script src="/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="/js/respond.min.js" ></script>
    <script src="/assets/fancybox/source/jquery.fancybox.js"></script>
    <script src="/js/modernizr.custom.js"></script>
    <script src="/js/toucheffects.js"></script>
    <script type="text/javascript">
      $(function() {
        //    fancybox
          jQuery(".fancybox").fancybox();
      });
    </script>
    <!--common script for all pages-->
    <script src="/js/common-scripts.js"></script>
    <script src="/js/category-common-scripts.js"></script>
  </body>
</html>
