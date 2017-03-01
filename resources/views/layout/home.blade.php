<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Article | Task IV</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/lightbox.css" rel="stylesheet"> 
    <link href="/css/animate.min.css" rel="stylesheet"> 
	<link href="/css/main.css" rel="stylesheet">
	<link href="/css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="/images/ico/favicon.ico">
</head><!--/head-->

<body>
	<header id="header">
        <div class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="/">
                        <h1>Article <i class="judul"> Task IV</i></h1>
                    </a>
                    
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/">  Home</a></li>
                        <li><a href="{{ url('admin') }}"><i class="fa fa-user"></i>  Administrator</a></li>
                        <li><a href="cari">  Cari</a></li>
                    </ul>

            </div>
        </div>
    </header>
    <!--/#header-->


    @yield('body')

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center bottom-separator">
                    <img src="/images/home/under.png" class="img-responsive inline" alt="">
                </div>
                
                <div class="col-sm-12">
                    <div class="copyright-text text-center">
                        <p>&copy; Training Laravel 2017: Task IV.</p>
                        <p>Designed by <a target="_blank" href="http://www.oligardan.blogspot.co.id">Rendy Permana</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/#footer-->


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/lightbox.min.js"></script>
    <script type="text/javascript" src="/js/wow.min.js"></script>
    <script type="text/javascript" src="/js/main.js"></script>  
    <!--<script type="text/javascript" src="/js/pencarian.js"></script>--> 
    @yield('script')
    <script>

$('#search').on('click', function(){

  $.ajax({

    url : '/ajax/{rp}',

    type : 'GET',

    data : {

      'keywords' : $('#keywords').val()

    },
    success : function(data) {

      $('.hasil-cari').html(data['view']);

    },

    error : function(xhr, status) {

      console.log(xhr.error + " ERROR STATUS : " + status);

    },

    complete : function() {

      alreadyloading = false;

    }

  });

});




</script>
</body>
</html>
