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
	.grid figcaption h3{float: left;width: 75%;}
    </style>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
	<script src="/js/html5shiv.js"></script>
	<script src="/js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="full-width">

    <section id="container" class="">
	<!--header start-->
	<header class="header white-bg">
	    <div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		    <span class="icon-bar"></span>
		    <span class="icon-bar"></span>
		    <span class="icon-bar"></span>
		</button>

		<!--logo start-->
		<a href="/" class="logo" >high<span>5</span> video</a>
		<!--logo end-->
		<div class="horizontal-menu navbar-collapse collapse ">
		    <ul class="nav navbar-nav">
			<li><a href="/">Home</a></li>
			<li class="dropdown">
			    <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#">Channels <b class=" icon-angle-down"></b></a>
			    <ul class="dropdown-menu">
				<li><a href="/channel/news/">News</a></li>
				<li><a href="/channel/entertainment/">Entertainment</a></li>
				<li><a href="/channel/style/">Style</a></li>
				<li><a href="/channel/home/">Home</a></li>
				<li><a href="/channel/parenting/">Parenting</a></li>
				<li><a href="/channel/relationships/">Relationships</a></li>
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
		<div class="top-nav ">
		    <ul class="nav pull-right top-menu">
			<li>
			    <form action="/search/">
				<input type="text" class="form-control search" name="q" placeholder="Video Search" />
			    </form>
			</li>
			<!-- user login dropdown start-->
			<li class="dropdown">
                          <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                              <span id="location" class="username"><i class="icon-spinner icon-spin"></i></span>
                              <b class="caret"></b>
                          </a>
                          <ul class="dropdown-menu extended logout">
                              <div class="log-arrow-up"></div>
                              <li><a href="login.html"><i class="icon-key"></i>Change Location</a></li>
                          </ul>
			</li>
			<!-- user login dropdown end -->
		    </ul>
		</div>
	    </div>
	</header>
	<!--header end-->
	
	<!--main content start-->
	<section id="main-content">
	    <section class="wrapper">
		<div id="recommend_mn" class="row">
			<div class="col-lg-12">
				<section class="panel">
				    <div class="panel-body">
					<div id="recommend"><i></i></div>
				    </div>
				</section>
			</div>
		</div>
		{body}
            <!-- page end-->
	    
	    </section>
	</section>
      <!--main content end-->
    </section>
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
  </body>
</html>
