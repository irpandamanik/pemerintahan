<?php
	$b=$data->row_array();
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $b['berita_judul'];?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>portal website lampung selatan</title>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!-- Bootstrap CSS-->
  <link rel="stylesheet" href="<?php echo base_url();?>vendor/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome CSS-->
  <link rel="stylesheet" href="<?php echo base_url();?>vendor/font-awesome/css/font-awesome.min.css">
  <!-- Google fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Archivo Narrow' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet'>
  <!-- Bootstrap Select-->
  <link rel="stylesheet" href="<?php echo base_url();?>vendor/bootstrap-select/css/bootstrap-select.min.css">
  <!-- owl carousel-->
  <link rel="stylesheet" href="<?php echo base_url();?>vendor/owl.carousel/assets/owl.carousel.css">
  <link rel="stylesheet" href="<?php echo base_url();?>vendor/owl.carousel/assets/owl.theme.default.css">
  <link rel="shortcut icon" href="<?php echo base_url();?>img/favicon.ico" type="image/x-icon">

  <!-- theme stylesheet-->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.default.css" id="theme-stylesheet">
  <!-- Custom stylesheet - for your changes-->
  <link rel="stylesheet" href="<?php echo base_url();?>css/custom.css">
  <link rel="stylesheet" href="<?php echo base_url();?>css/front/style.amber-500.min.css">

  <link href="dist/vanillaCalendar.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url();?>css/calender/calender.css">
  <!--
  <link rel="stylesheet" href="<?php echo base_url();?>css/carousel.css">
  <link rel="stylesheet" href="<?php echo base_url();?>css/flexslider.css">
  -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.dataTables.bootstrap.js"></script>
  <link rel="shortcut icon" href="<?php echo base_url();?>assets/img/icon.ico" type="image/x-icon">

</head>
<body>

	<div id="all">
		<div class="top-bar">
			<div class="container">
				<div class="row d-flex align-items-center">
					<div class="col-md-6 d-md-block d-none">
						<p>Portal Informasi Kabupaten Lampung Selatan</p>
					</div>
				<div class="col-md-6">
					<div class="d-flex justify-content-md-end justify-content-between">
						<ul class="social-custom list-inline">
							<li class="list-inline-item"><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li class="list-inline-item"><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fa fa-envelope"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

  <!-- Navbar Start-->
  <header class="nav-holder make-sticky" >
    <div id="navbar" role="navigation" class="navbar navbar-expand-lg">
      <div class="container-fluid"><a href="<?php echo base_url();?>" class="navbar-brand home"><img src="../../assets/img/logo1.png" class="d-none d-md-inline-block"><img src="../../assets/img/logo1.png" class="d-inline-block d-md-none"><span class="sr-only"></span></a>
        <h1>Pemerintah Lampung Selatan</h1>
          <button type="button" data-target="#navigation" class="navbar-toggler btn-template-outlined" data-toggle="collapse"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
            <div id="navigation" class="collapse navbar-collapse">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item dropdown "><a href="<?php echo base_url();?>home" data-toggle="text" class="text">Beranda</a>
                </li>
                <li  class="nav-item dropdown menu-large"><a href="<?php echo base_url();?>" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Layanan Publik</a>
                   <ul class="dropdown-menu megamenu">
                      <div class="md-8">
                          <ul class="list-unstyled">
                            <li class="nav-item"><a href="<?php echo site_url();?>buat_ktp" class="nav-link">Cara Buat KTP</a></li>
                            <li class="nav-item"><a href="<?php echo site_url();?>buat_kk" class="nav-link">Cara Buat KK</a></li>
                          </ul>
                        </div>
                  </ul>
                </li>
                <li class="nav-item dropdown menu-large"><a href="<?php echo base_url();?>" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Wilayah</a>
                  <ul class="dropdown-menu megamenu">
                      <div class="md-8">
                          <ul class="list-unstyled">
                            <li class="nav-item"><a href="<?php echo site_url();?>kabupaten" class="nav-link">Kabupaten</a></li>
                            <li class="nav-item"><a href="<?php echo site_url();?>kecamatan" class="nav-link">Kecamatan</a></li>
                          </ul>
                        </div>
                  </ul>
                </li>

                <li class="nav-item dropdown active"><a href="<?php echo base_url();?>Post_berita/lists" data-toggle="faq">Berita Terbaru</a>
                </li>

                <li class="nav-item dropdown menu-large"><a href="<?php echo base_url();?>" data-toggle="dropdown" data-hover="dropdown" data-delay="200">E-Goverment</a>
                  <ul class="dropdown-menu megamenu">
                      <div class="md-8">
                          <ul class="list-unstyled">

                            <li class="nav-item"><a href="<?php echo site_url();?>profil_pemerintah" class="nav-link">Profil Pemerintah</a></li>
                            <li class="nav-item"><a href="<?php echo site_url();?>perangkat_daerah" class="nav-link">Perangkat Daerah</a></li>
                            <li class="nav-item"><a href="<?php echo site_url();?>daftar_pejabat" class="nav-link">Daftar Pejabat</a></li>
                            <li class="nav-item"><a href="<?php echo site_url();?>rpjmd_kabupaten" class="nav-link">RPJMD Kabupaten</a></li>
                          </ul>
                        </div>
                  </ul>
                </li>
                <li class="nav-item dropdown"><a href="<?php echo site_url();?>informasi_pariwisata" data-toggle="faq">Informasi Pariwisata</a>
                </li>
                <li class="nav-item dropdown menu-large"><a href="<?php echo base_url();?>" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Profil Daerah</a>
                  <ul class="dropdown-menu megamenu">
                      <div class="md-8">
                          <ul class="list-unstyled">
                            <li class="nav-item"><a href="<?php echo base_url();?>selayangpandang" class="nav-link">Selayang Pandang</a></li>
                            <li class="nav-item"><a href="<?php echo base_url();?>visimisi" class="nav-link">Visi Misi</a></li>
                            <li class="nav-item"><a href="<?php echo base_url();?>artilambang" class="nav-link">Arti Lambang</a></li>
                          </ul>
                        </div>
                  </ul>
                </li>

                <li class="nav-item dropdown"><a href="<?php echo site_url('authentication')?>" data-toggle="faq">Account</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
  </header>
  <!-- Navbar End-->



	<div class="container">
		<div class="col-md-8 col-md-offset-2">
			<h2><?php echo $b['berita_judul'];?></h2><hr/>
			<img src="<?php echo base_url().'assets/images/'.$b['berita_image'];?>">
			<?php echo $b['berita_isi'];?>
		</div>

	</div>

	<script src="<?php echo base_url().'assets/jquery/jquery-2.2.3.min.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>

	<!-- FOOTER -->
	<footer class="main-footer">
				 <div class="container">
					 <div class="row">
						 <div class="col-lg-4">
							 <p class="text-uppercase"><i class="fa fa-map-marker"></i> <strong>Provinsi Lampung <br>Kabupaten Lampung Selatan</strong>
							 <hr class="d-block d-lg-none">
						 </div>
						 <div class="col-lg-7">
							 <p1>Follow us Media Sosial LamSel for more update information </p1>
							 <ul class=" list-inline">
											 <li class="list-inline-item"><a href="#" ><i class="fa fa-youtube-play"></i></a></li>
											 <li class="list-inline-item"><a href="#" ><i class="fa fa-facebook"></i></a></li>
											 <li class="list-inline-item"><a href="#" ><i class="fa fa-instagram"></i></a></li>
											 <li class="list-inline-item"><a href="#" ><i class="fa fa-twitter"></i></a></li>
											 <li class="list-inline-item"><a href="#" ><i class="fa fa-whatsapp"></i></a></li>
										 </ul>
						 </div>
					 </div>
				 </div>

				 <div class="copyrights">
					 <div class="container">
						 <div class="row">
							 <div class="col-lg-4 text-center-md">
								 <p>&copy; 2018 PemKab LamSel</p>
							 </div>
							 <div class="col-lg-8 text-right text-center-md">
								 <p></p>
							 </div>
						 </div>
					 </div>
				 </div>
			 </footer>
		 </div>

				 <!-- Javascript files-->
				 <script src="<?php echo base_url();?>vendor/jquery/jquery.min.js"></script>
				 <script src="<?php echo base_url();?>vendor/popper.js/umd/popper.min.js"> </script>
				 <script src="<?php echo base_url();?>vendor/bootstrap/js/bootstrap.min.js"></script>
				 <script src="<?php echo base_url();?>vendor/jquery.cookie/jquery.cookie.js"> </script>
				 <script src="<?php echo base_url();?>vendor/waypoints/lib/jquery.waypoints.min.js"> </script>
				 <script src="<?php echo base_url();?>vendor/jquery.counterup/jquery.counterup.min.js"> </script>
				 <script src="<?php echo base_url();?>vendor/owl.carousel/owl.carousel.min.js"></script>
				 <script src="<?php echo base_url();?>vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js"></script>
				 <script src="<?php echo base_url();?>js/jquery.parallax-1.1.3.js"></script>
				 <script src="<?php echo base_url();?>vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
				 <script src="<?php echo base_url();?>vendor/jquery.scrollto/jquery.scrollTo.min.js"></script>
				 <script src="<?php echo base_url();?>js/front.js"></script>
				 <script src="http://maps.googleapis.com/maps/api/js"></script>

</body>
</html>
