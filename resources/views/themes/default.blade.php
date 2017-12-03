
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ url('favicon.ico') }}">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ url('css/styles.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
	
	<!-- Header-->
      <div class="up-navbar">
		<div class="uye">
		  <div class="uye-brand">
		  PlanetIntrovert
		  <img src="img/my.jpg" class="img-circle b-img"/>
		  </div>
		<div class="uye-nav">
		  <a href="#" class="uy-nav">Home</a>
		  <a href="#" class="uy-nav">Notifikasi</a>
		  <a href="#" class="uy-nav">Kamu</a>
		  <a href="#" class="uy-nav">Catatan</a>
		</div>
		</div>
	  </div>
	  
	  <!-- end header -->
	  <div id="wrapper">
		
	@yield('konten')
		</div>
		<!-- footer-->
		  
		  <div id="footer">
			<div class="footer">
			  &copy; 2017 PlanetIntrovert.org - Allright Reserved
			</div>
			
		  </div>

  
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ url('js/jquery.min.js') }}"></script>
    <script src="{{ url('js/bootstrap.min.js') }}"></script>
    
  </body>
</html>