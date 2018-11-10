<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
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
      <div class="container-fluid"><a href="<?php echo base_url();?>" class="navbar-brand home"><img src="assets/img/logo1.png" class="d-none d-md-inline-block"><img src="assets/img/logo1.png" class="d-inline-block d-md-none"><span class="sr-only"></span></a>
        <h1>Pemerintah Lampung Selatan</h1>
          <button type="button" data-target="#navigation" class="navbar-toggler btn-template-outlined" data-toggle="collapse"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
            <div id="navigation" class="collapse navbar-collapse">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item dropdown"><a href="home" data-toggle="text" class="text">Beranda</a>
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

                <li class="nav-item dropdown"><a href="<?php echo base_url();?>Post_berita/lists" data-toggle="faq">Berita Terbaru</a>
                </li>

                <li class="nav-item dropdown active menu-large"><a href="<?php echo base_url();?>" data-toggle="dropdown" data-hover="dropdown" data-delay="200">E-Goverment</a>
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

  <h1 class="post entry-title">Daftar Pejabat</h1>

                      <div class="hrlineB p-border"></div>

                      <table class="table table-bordered table-hover table-condensed">

                      <p>&nbsp;</p>
  <table width="905">
  <tbody>
  <tr>
  <td style="text-align: center;" width="30"><strong>NO</strong></td>
  <td style="text-align: center;" width="402"><strong>JABATAN/OPD</strong></td>
  <td style="text-align: center;" width="153"><strong>NAMA</strong></td>
  </tr>
  <tr>
  <td style="text-align: center;">1</td>
  <td width="302">Sekretaris Daerah</td>
  <td>Ir. FREDY SM, M.M</td>
  </tr>
  <tr>
  <td style="text-align: center;">2</td>
  <td width="302">Asisten Bidang Pemerintahan dan Kesejahteraan Rakyat</td>
  <td>SUPRIYANTO, S.Sos, M.M</td>
  </tr>
  <tr>
  <td style="text-align: center;">3</td>
  <td width="302">Asisten Bidang Ekonomi dan Pembangunan</td>
  <td>Ir. MULYADI SALEH, MM</td>
  </tr>
  <tr>
  <td style="text-align: center;">4</td>
  <td width="302">Asisten Bidang Administrasi Umum</td>
  <td>Drs. ANAS ANSHORI, M.Si</td>
  </tr>
  <tr>
  <td style="text-align: center;">5</td>
  <td width="302">Kepala Bagian Pemerintahan</td>
  <td>SETIAWANSYAH A.P., M.Si (Plt)</td>
  </tr>
  <tr>
  <td style="text-align: center;">6</td>
  <td width="302">Kepala Bagian Otonomi Daerah</td>
  <td>SETIAWANSYAH A.P., M.Si</td>
  </tr>
  <tr>
  <td style="text-align: center;">7</td>
  <td width="302">Kepala Bagian Bina Mental Spiritual</td>
  <td>DR.H. FIRMANSYAH, S.Pd.I., M.Pd (Plt)</td>
  </tr>
  <tr>
  <td style="text-align: center;">8</td>
  <td width="302">Kepala Bagian Perlengkapan</td>
  <td>DELFARIZY, SE</td>
  </tr>
  <tr>
  <td style="text-align: center;">9</td>
  <td width="302">Kepala Bagian Pembangunan dan SDA</td>
  <td>YANNY MUNAWARTY, ST</td>
  </tr>
  <tr>
  <td style="text-align: center;">10</td>
  <td width="302">Kepala Bagian Perekonomian</td>
  <td>MATURIDI, SH</td>
  </tr>
  <tr>
  <td style="text-align: center;">11</td>
  <td width="302">Kepala Bagian Organisasi</td>
  <td>PUJI SUKANTO, SE., M.M</td>
  </tr>
  <tr>
  <td style="text-align: center;">12</td>
  <td width="302">Kepala Bagian Hukum</td>
  <td>ERDANDA,SH.,MH</td>
  </tr>
  <tr>
  <td style="text-align: center;">13</td>
  <td width="302">Kepala Bagian Umum</td>
  <td>AMRAN.SE</td>
  </tr>
  <tr>
  <td style="text-align: center;">14</td>
  <td width="302">Kepala Bagian Protokol</td>
  <td>&#8211;</td>
  </tr>
  <tr>
  <td style="text-align: center;">15</td>
  <td width="302">Kepala Bagian Tata Usaha Keuangan</td>
  <td>MUZNI S.Sos., MM</td>
  </tr>
  <tr>
  <td></td>
  <td width="302"></td>
  <td></td>
  </tr>
  <tr>
  <td style="text-align: center;">16</td>
  <td width="302">Sekretaris Dewan</td>
  <td>Drs. SAMSURIJAL, MM</td>
  </tr>
  <tr>
  <td style="text-align: center;">17</td>
  <td width="302">Kepala Bagian Umum</td>
  <td></td>
  </tr>
  <tr>
  <td style="text-align: center;">18</td>
  <td width="302">Kepala Bagian Persidangan</td>
  <td></td>
  </tr>
  <tr>
  <td style="text-align: center;">19</td>
  <td width="302">Kepala Bagian Perundang-Undangan</td>
  <td></td>
  </tr>
  <tr>
  <td style="text-align: center;">20</td>
  <td width="302">Kepala Bagian Keuangan</td>
  <td></td>
  </tr>
  <tr>
  <td></td>
  <td width="302"></td>
  <td></td>
  </tr>
  <tr>
  <td style="text-align: center;">21</td>
  <td width="302">Inspektur</td>
  <td>Y. JOKO SAPTA PRIHANDAYA, SE, Ak, CFrA</td>
  </tr>
  <tr>
  <td></td>
  <td width="302"></td>
  <td></td>
  </tr>
  <tr>
  <td style="text-align: center;">22</td>
  <td width="302">Kepala Badan Perencanaan Pembangunan Daerah</td>
  <td>Drs. WAHIDIN AMIN, M.Si</td>
  </tr>
  <tr>
  <td style="text-align: center;">23</td>
  <td width="302">Kepala Badan Perencanaan Penanggulangan Bencana Daerah</td>
  <td>Drs. I KETUT SUKERTA, SE</td>
  </tr>
  <tr>
  <td style="text-align: center;">24</td>
  <td width="302">Kepala Badan Pengelola Keuangan dan Aset</td>
  <td>Dra. INTJI INDRIATI, M.H</td>
  </tr>
  <tr>
  <td style="text-align: center;">25</td>
  <td width="302">Kepala Badan Pengelola Pajak dan Restribusi Daerah</td>
  <td>Drs. BADRUZZAMAN (Plt)</td>
  </tr>
  <tr>
  <td style="text-align: center;">26</td>
  <td width="302">Kepala Badan Kepegawaian dan Diklat</td>
  <td>AKAR WIBOWO, SH</td>
  </tr>
  <tr>
  <td style="text-align: center;">27</td>
  <td width="302">Kepala Badan Kesatuan Bangsa dan Politik</td>
  <td>Drs. M. DARMAWAN, M.M</td>
  </tr>
  <tr>
  <td style="text-align: center;">28</td>
  <td width="302">Kepala Badan Penelitian dan Pengembangan</td>
  <td>Drs. SYAHIDI PATTAH</td>
  </tr>
  <tr>
  <td></td>
  <td width="302"></td>
  <td></td>
  </tr>
  <tr>
  <td style="text-align: center;">29</td>
  <td width="302">Kepala Dinas Pendidikan</td>
  <td>THOMAS AMIRICO, S.STP, M.H (Plt)</td>
  </tr>
  <tr>
  <td style="text-align: center;">30</td>
  <td width="302">Kepala Dinas Kesehatan</td>
  <td>Dr. JIMMY B. HUTAPEA, MARS</td>
  </tr>
  <tr>
  <td style="text-align: center;">31</td>
  <td width="302">Kepala Dinas Pekerjaan Umum dan Penataan Ruang</td>
  <td><span style="display: inline !important; float: none; background-color: transparent; color: #333333; cursor: text; font-family: Georgia,'Times New Roman','Bitstream Charter',Times,serif; font-size: 16px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">Ir. HERMANSYAH HAMIDI, M.T (Plt)</span></td>
  </tr>
  <tr>
  <td style="text-align: center;">32</td>
  <td width="302">Kepala Dinas Perumahan dan Permukiman</td>
  <td>BURHANUDDIN (Plt)</td>
  </tr>
  <tr>
  <td style="text-align: center;">33</td>
  <td width="302">Kepala Dinas Sosial</td>
  <td><span style="display: inline !important; float: none; background-color: transparent; color: #333333; cursor: text; font-family: Georgia,'Times New Roman','Bitstream Charter',Times,serif; font-size: 16px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">DULKAHAR, AP,M.Si</span></td>
  </tr>
  <tr>
  <td style="text-align: center;">34</td>
  <td width="302">Kepala Dinas Tenaga Kerja dan Transmigrasi</td>
  <td>SYAHLANI, SH, MH</td>
  </tr>
  <tr>
  <td style="text-align: center;">35</td>
  <td width="302">Kepala Dinas Pemberdayaan Perempuan dan Perlindungan Anak</td>
  <td>Ir. RINI ARIASIH, M.M</td>
  </tr>
  <tr>
  <td style="text-align: center;">36</td>
  <td width="302">Kepala Dinas Pengendalian Penduduk dan Keluarga Berencana</td>
  <td>Drs. ROHADIAN</td>
  </tr>
  <tr>
  <td style="text-align: center;">37</td>
  <td width="302">Kepala Dinas Ketahanan Pangan</td>
  <td>Ir. YANSEN MULIA M.P</td>
  </tr>
  <tr>
  <td style="text-align: center;">38</td>
  <td width="302">Kepala Dinas Lingkungan Hidup</td>
  <td>THAMRIN, S.Sos, M.M</td>
  </tr>
  <tr>
  <td style="text-align: center;">39</td>
  <td width="302">Kepala Dinas Kependudukan dan Pencatatan Sipil</td>
  <td>Drs. EDY FIRNANDI, M.Si</td>
  </tr>
  <tr>
  <td style="text-align: center;">40</td>
  <td width="302">Kepala Dinas Pemberdayaan Masyarakat dan Desa</td>
  <td>DULKAHAR, AP,M.Si</td>
  </tr>
  <tr>
  <td style="text-align: center;">41</td>
  <td width="302">Kepala Dinas Perhubungan</td>
  <td>ANASRULLAH, S.Sos, MM</td>
  </tr>
  <tr>
  <td style="text-align: center;">42</td>
  <td width="302">Kepala Dinas Komunikasi dan Informatika</td>
  <td>MUHAMAD SEFRI MASDIAN, S.Sos (Plt)</td>
  </tr>
  <tr>
  <td style="text-align: center;">43</td>
  <td width="302">Kepala Dinas Koperasi, Usaha Kecil dan Menengah</td>
  <td>Ir. HERMANSYAH HAMIDI, M.T (Plt)</td>
  </tr>
  <tr>
  <td style="text-align: center;">44</td>
  <td width="302">Kepala Dinas Penanaman Modal dan Pelayanan Perizinan Terpadu Satu Pintu</td>
  <td>MARTONI SANI, S.Sos, MH</td>
  </tr>
  <tr>
  <td style="text-align: center;">45</td>
  <td width="302">Kepala Dinas Kepemudaan dan Olahraga</td>
  <td><span style="display: inline !important; float: none; background-color: transparent; color: #333333; cursor: text; font-family: Georgia,'Times New Roman','Bitstream Charter',Times,serif; font-size: 16px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">SETIAWANSYAH A.P., M.Si</span>(Plt)</td>
  </tr>
  <tr>
  <td style="text-align: center;">46</td>
  <td width="302">Kepala Dinas Perpustakaan dan Kearsipan</td>
  <td>EKA RIANTINAWATI, S.KM, M.Kes</td>
  </tr>
  <tr>
  <td style="text-align: center;">47</td>
  <td width="302">Kepala Dinas Perikanan</td>
  <td>DWI JATMIKO, S.Pi, M.Si</td>
  </tr>
  <tr>
  <td style="text-align: center;">48</td>
  <td width="302">Kepala Dinas Pariwisata dan Kebudayaan</td>
  <td>YUDA SUKMARINA, S.Sos, M.M</td>
  </tr>
  <tr>
  <td style="text-align: center;">49</td>
  <td width="302">Kepala Dinas Tanaman Pangan, Hortikultura dan Perkebunan</td>
  <td>PUADI, SP (Plt)</td>
  </tr>
  <tr>
  <td style="text-align: center;">50</td>
  <td width="302">Kepala Dinas Peternakan dan Kesehatan Hewan</td>
  <td>Drh. ARSAD</td>
  </tr>
  <tr>
  <td style="text-align: center;">51</td>
  <td width="302">Kepala Dinas Perdagangan dan Perindustrian</td>
  <td>QORINILWAN, SH, MH</td>
  </tr>
  <tr>
  <td style="text-align: center;">52</td>
  <td width="302">Kepala Dinas Penelitian dan Pengembangan</td>
  <td>Dr. MEIZAR MALANESIA, M.Si</td>
  </tr>
  <tr>
  <td></td>
  <td width="302"></td>
  <td></td>
  </tr>
  <tr>
  <td style="text-align: center;">53</td>
  <td width="302">Kepala Satuan Polisi Pamong Praja dan Pemadam Kebakaran</td>
  <td>HERI BASTIAN, S.Sos (Plt)</td>
  </tr>
  <tr>
  <td style="text-align: center;">54</td>
  <td width="302">Kepala Sekretariat Dewan Pengurus KORPRI</td>
  <td>NURMALI RIZAL AR, S.Sos, M.M</td>
  </tr>
  <tr>
  <td style="text-align: center;">55</td>
  <td width="302">Direktur RSUD Bob Bazar</td>
  <td>dr. DIAH ANJARINI, M.EPID</td>
  </tr>
  <tr>
  <td></td>
  <td width="302"></td>
  <td></td>
  </tr>
  <tr>
  <td style="text-align: center;">56</td>
  <td width="302">Camat Bakauheni</td>
  <td>ZAIDAN, SE</td>
  </tr>
  <tr>
  <td style="text-align: center;">57</td>
  <td width="302">Camat Candipuro</td>
  <td>WASIDI, SE</td>
  </tr>
  <tr>
  <td style="text-align: center;">58</td>
  <td width="302">Camat Jati Agung</td>
  <td>KARTIKA AYU, S.Sos</td>
  </tr>
  <tr>
  <td style="text-align: center;">59</td>
  <td width="302">Camat Kalianda</td>
  <td>ERDIYANSYAH, SH, MM</td>
  </tr>
  <tr>
  <td style="text-align: center;">60</td>
  <td width="302">Camat Katibung</td>
  <td>HENDRA JAYA, S.Sos, M.M</td>
  </tr>
  <tr>
  <td style="text-align: center;">61</td>
  <td width="302">Camat Ketapang</td>
  <td>DARSITO, SP</td>
  </tr>
  <tr>
  <td style="text-align: center;">62</td>
  <td width="302">Camat Merbau Mataram</td>
  <td>YUSMIATI, SH</td>
  </tr>
  <tr>
  <td style="text-align: center;">63</td>
  <td width="302">Camat Natar</td>
  <td>Drs. KOHARUDIN</td>
  </tr>
  <tr>
  <td style="text-align: center;">64</td>
  <td width="302">Camat Palas</td>
  <td>RIKA WATI, S.STP, MM</td>
  </tr>
  <tr>
  <td style="text-align: center;">65</td>
  <td width="302">Camat Penengahan</td>
  <td>MUHAMMAD YUSUF, S.STP, M.M</td>
  </tr>
  <tr>
  <td style="text-align: center;">66</td>
  <td width="302">Camat Rajabasa</td>
  <td>SABTUDIN S.Sos, M.Si.</td>
  </tr>
  <tr>
  <td style="text-align: center;">67</td>
  <td width="302">Camat Sidomulyo</td>
  <td>EKO IRAWAN S.STP., MM</td>
  </tr>
  <tr>
  <td style="text-align: center;">68</td>
  <td width="302">Camat Sragi</td>
  <td>BIBIT PURWANTO, SP</td>
  </tr>
  <tr>
  <td style="text-align: center;">69</td>
  <td width="302">Camat Tanjung Bintang</td>
  <td>DENI PANJI WIJAYA, S.IP</td>
  </tr>
  <tr>
  <td style="text-align: center;">70</td>
  <td width="302">Camat Tanjungsari</td>
  <td>RAHMAT HADI WIJAYA, S.STP, M.Si</td>
  </tr>
  <tr>
  <td style="text-align: center;">71</td>
  <td width="302">Camat Way Panji</td>
  <td>ISRO&#8217; ABDI, SE</td>
  </tr>
  <tr>
  <td style="text-align: center;">72</td>
  <td width="302">Camat Way Sulan</td>
  <td>MUNIR,  SE</td>
  </tr>
  </tbody>
  </table>



                  </div>

                  <div class="clearfix"></div>
  </div>

   <!-- FOOTER -->
   <footer class="main-footer">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">

                <hr class="d-block d-lg-none">
              </div>
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
