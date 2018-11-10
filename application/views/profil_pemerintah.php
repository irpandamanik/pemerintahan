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
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/kecamatan.css" id="theme-stylesheet">
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
        
                    <h1 class="post entry-title">Profil Plt. Bupati</h1>
                
                    <div class="hrlineB p-border"></div>
                    
<p><strong>Nanang Ermanto</strong>, pria kelahiran Tanjung Karang, Kota Bandar Lampung tanggal 10 Oktober 1967 ini sudah lama membaktikan dirinya kepada masyarakat di Kabupaten Lampung Selatan. Dimulai saat Nanang terpilih menjadi Kepala Desa Way Galih di tahun 2007, tempat dimana dirinya bermukim, kiprah pengabdiannya berlanjut hingga menjadi anggota DPRD Kabupaten Lampung Selatan selama dua periode sejak tahun 2009.</p>
<p>Jauh sebelumnya, Nanang kecil yang dikenal sebagai anak nakal harus melewati beragam dinamika kehidupan dalam menempuh pendidikan. Selepas menempuh pendidikan sekolah dasar di Sidoarjo, Nanang harus mengikuti keinginan kedua orangtuanya untuk menempuh pendidikan khusus di SLB Handayani (Pusat Rehabilitasi Anak Nakal) binaan Departemen Sosial RI di kawasan Cilandak, Jakarta.</p>
<p>Di masa itu sekolah swasta tidak dapat mengadakan ujian sendiri, karenanya Nanang harus mengikuti ujian di SMPN 11 Jakarta Selatan hingga akhirnya memperoleh ijazah dari sekolah dimana dia mengikuti ujian kelulusan. Pun saat akan menempuh pendidikan di SMA, riwayat pernah bersekolah di SLB Handayani membuatnya sulit diterima di sekolah-sekolah yang didatangi.</p>
<p>Cerita berlanjut, akhirnya Nanang diterima di SMA Tunas Harapan, sekolah swasta yang berlokasi di Gedung Meneng, Kota Bandar Lampung. Hampir sama seperti saat menempuh pendidikan SMP, Nanang harus mengikuti ujian di SMA Negeri 5 Bandar Lampung untuk memperoleh ijazah kelulusannya di tahun 1987.</p>
<p>Liku perjalanan hidupnya tidak berhenti sampai disitu, Nanang yang meminang Winarni di tahun 1991 harus berjuang untuk melakoni hidup sebagai kepala rumah tangga. Dari mulai membuka warung makan di Pasar Koga Bandar Lampung hingga berjualan nasi pecel dan soto di desa Way Galih dilakukannya.</p>
<p>Semua pengalaman hidup itulah yang akhirnya membentuk karakter tangguh ayah dua orang anak ini, sebagai seorang yang mengidolakan Bung Karno dia memilih berkhidmat melalui jalur PDI Perjuangan. Dimulai menjadi menjadi anggota Partai Demokrasi Indonesia (PDI) di tahun 1990, pria yang pernah menjadi Ketua Ranting PDI desa Way Galih ini akhirnya menjadi didaulat menjadi Sekretaris DPC PDI Perjuangan Kabupaten Lampung Selatan, transformasi dari PDI.</p>
<p>Aktif berpartai dan menjadi anggota DPRD Lampung Selatan hampir dua periode akhirnya mengubah perjalanan hidupnya. Zainudin Hasan pun menggandengnya untuk berkontestasi dalam pemilihan kepala daerah di Kabupaten Lampung Selatan pada tahun 2015. Kemudian sejarah ditorehkan, pasangan dengan idiom ZaiN ini terpilih memimpin bumi Khagom Mufakat untuk periode 2016-2021 dengan kemenangan 57,82% suara.</p>
<p>&nbsp;</p>
<p><strong>Menerima Mandat Pelaksana Tugas Bupati</strong></p>
<p>Takdir kemudian berkata lain, kejadian yang menimpa Bupati (Non Aktif) Zainudin Hasan mengharuskan Nanang Ermanto untuk siap terus menjalankan amanah rakyat.</p>
<p>Berdasarkan Surat Keputusan Menteri Dalam Negeri Nomor 131.18/5295/SJ tertanggal 27 Juli 2018, Nanang Ermanto ditunjuk sebagai Pelaksana Tugas (Plt) Bupati Lampung Selatan.</p>
<p>Pada Jum&#8217;at, 3 Agustus 2018, Nanang Ermanto resmi menerima penugasan tersebut melalui Gubernur Lampung M. Ridho Ficardo di Balai Keratun, Kompleks Kantor Gubernur Lampung.</p>
<p>Gubernur memberikan arahan kepadanya untuk menjaga dan meneruskan roda pembangunan di Kabupaten Lampung Selatan.</p>
<p>&nbsp;</p>
<p><strong>A. Riwayat </strong><strong>Hidup</strong></p>
<table style="height: 291px;" width="767">
<tbody>
<tr>
<td width="170">NamaLengkap</td>
<td width="19">:</td>
<td width="425">Nanang Ermanto</td>
</tr>
<tr>
<td width="170">Tempat/Tanggal Lahir</td>
<td width="19">:</td>
<td width="425">Tanjung Karang, Kota Bandar Lampung / 10 Oktober 1967</td>
</tr>
<tr>
<td width="170">Jenis Kelamin</td>
<td width="19">:</td>
<td width="425">Laki-laki</td>
</tr>
<tr>
<td width="170">Status Perkawinan</td>
<td width="19">:</td>
<td width="425">Kawin</td>
</tr>
<tr>
<td width="170">Agama</td>
<td width="19">:</td>
<td width="425">Islam</td>
</tr>
</tbody>
</table>
<p><strong><br />
B. </strong><strong>Riwayat Pendidikan</strong></p>
<table style="height: 311px;" width="766">
<tbody>
<tr>
<td colspan="3" width="614">Pendidikan Formal</td>
</tr>
<tr>
<td width="94">Jenjang</td>
<td width="378">Institusi</td>
<td width="142">Tahun</td>
</tr>
<tr>
<td width="94"> SD</td>
<td width="378">SDN 1 Sidoarjo</td>
<td width="142">1975 – 1981</td>
</tr>
<tr>
<td width="94"> SMP</td>
<td width="378">SMPN 11 Jakarta Selatan</td>
<td width="142">1981 – 1984</td>
</tr>
<tr>
<td width="94"> SMA</td>
<td width="378">SMAN 5 Tanjung Karang</td>
<td width="142">1984 – 1987</td>
</tr>
</tbody>
</table>
<p><strong><br />
C. Pengalaman Pekerjaan</strong></p>
<table style="height: 283px;" width="765">
<tbody>
<tr>
<td width="141">Jabatan</td>
<td width="331">Institusi</td>
<td width="141">Tahun</td>
</tr>
<tr>
<td width="141">Kepala Desa</td>
<td width="331">Desa Way Galih, Kabupaten Lampung Selatan</td>
<td width="141">2007 – 2009</td>
</tr>
<tr>
<td width="141">Anggota</td>
<td width="331">DPRD Lampung Selatan</td>
<td width="141">2009 – 2014</p>
<p>2014 – 2015 (PAW)</td>
</tr>
</tbody>
</table>
<p><strong><br />
</strong><strong>D. Pengalaman Organisasi</strong></p>
<table style="height: 278px;" width="767">
<tbody>
<tr>
<td width="151">Jabatan</td>
<td width="321">Institusi</td>
<td width="142">Tahun</td>
</tr>
<tr>
<td width="151">Ketua</td>
<td width="321">Ranting PAC PDI Desa Way Galih</td>
<td width="142"></td>
</tr>
<tr>
<td width="151">Ketua</td>
<td width="321">PAC PDI Perjuangan Kecamatan Tanjung Bintang</td>
<td width="142"></td>
</tr>
<tr>
<td width="151">Sekretaris</td>
<td width="321">DPC PDI Perjuangan Kabupaten Lampung Selatan</td>
<td width="142">Sampai sekarang</td>
</tr>
</tbody>
</table>
<p><strong><br />
</strong><strong>E. Data Keluarga</strong></p>
<table style="height: 697px;" width="767">
<tbody>
<tr>
<td width="141">Isteri</td>
<td width="19">:</td>
<td width="454">Winarni</td>
</tr>
<tr>
<td width="141">Anak Kandung</td>
<td width="19">:</td>
<td width="454">1. Novi Winandara</td>
</tr>
<tr>
<td width="141"></td>
<td width="19"></td>
<td width="454">2. Bagus Igo Winando</td>
</tr>
<tr>
<td width="141">Ayah Kandung</td>
<td width="19">:</td>
<td width="454">Wagiman</td>
</tr>
<tr>
<td width="141">Ibu Kandung</td>
<td width="19">:</td>
<td width="454"></td>
</tr>
<tr>
<td width="141">Ayah Mertua</td>
<td width="19">:</td>
<td width="454"></td>
</tr>
<tr>
<td width="141">Ibu Mertua</td>
<td width="19">:</td>
<td width="454"></td>
</tr>
<tr>
<td width="141">Saudara Kandung</td>
<td width="19">:</td>
<td width="454"></td>
</tr>
<tr>
<td width="141"></td>
<td width="19"></td>
<td width="454"></td>
</tr>
<tr>
<td width="141"></td>
<td width="19"></td>
<td width="454"></td>
</tr>
<tr>
<td width="141"></td>
<td width="19"></td>
<td width="454"></td>
</tr>
</tbody>
</table>
                    
                                        
                                    
                </div>       
                        
                <div class="clearfix"></div> 
</div>
<div class="container">
<h1 class="post entry-title">Profil Bupati (Non Aktif)</h1>
                
                    <div class="hrlineB p-border"></div>
                    
                    <p><strong>Dr. H. Zainudin Hasan, M.Hum</strong>, adalah putra asli Lampung Selatan yang lahir di Desa Pisang, Kecamatan Penengahan pada tanggal 12 Januari 1965. Putra pasangan Hasan dan Siti Zaenab ini menghabiskan masa kecil hingga remajanya di seputaran Kota Kalianda, Ibu Kota Kabupaten Lampung Selatan.</p>
<p>Menempuh pendidikan SD hingga sebagian masa SMA-nya di Lampung Selatan, Zainudin kemudian berpindah ke Jakarta dan menamatkan jenjang pendidikannya di SMA Negeri 53 Jakarta Timur. Semangatnya dalam menuntut ilmu terus berlanjut, tepat delapan tahun selepas lulus SMA, Zainudin meneruskan jenjang pendidikannya hingga berhasil meraih gelar Doktor dari Universitas Negeri Jakarta di tahun 2005.</p>
<p>Selain memiliki semangat yang tinggi dalam menempuh pendidikan, ayah dari lima orang putera-puteri buah pernikahannya dengan Jasmine Shahnaz ini juga aktif berorganisasi sejak muda. Beragam jabatan diberbagai organisasi pernah diembannya, baik itu di organisasi profesi maupun politik. Saat ini Zainudin merupakan ketua DPW Partai Amanat Nasional Provinsi Lampung.</p>
<p>Pengalaman dan pergaulannya yang luas menjadikan Zainudin  menjelma menjadi seorang dosen, advokat dan pengusaha yang sukses sekaligus. Namun demikian segala kesuksesan yang diraihnya tak lantas membuatnya lupa akan tekadnya untuk dapat berkhidmat kepada masyarakat di kampung halamannya.</p>
<p>Dan do’a dan harapan itu akhirnya terkabul, pada kepala pemilihan daerah di tahun 2015, Zainudin berhasil terpilih menjadi pemimpin di tanah kelahirannya, Kabupaten Lampung Selatan berpasangan dengan Nanang Ermanto untuk periode 2016-2021.</p>
<p>Dengan jargon “Ayo Bangun Desa”, Zainudin bertekad untuk dapat mewujudkan Kabupaten Lampung Selatan yang sejahtera dan berdaya saing dalam rangka menuju masyarakat yang mandiri dan berakhlak mulia.</p>
<p><strong>A. Data Diri</strong></p>
<table style="height: 336px;" width="812">
<tbody>
<tr>
<td width="170">NamaLengkap</td>
<td width="19">:</td>
<td width="425">Dr. H. Zainudin Hasan, M.Hum</td>
</tr>
<tr>
<td width="170">Tempat/Tanggal Lahir</td>
<td width="19">:</td>
<td width="425">Desa Pisang, Kabupaten Lampung Selatan / 12 Januari 1965</td>
</tr>
<tr>
<td width="170">Jenis Kelamin</td>
<td width="19">:</td>
<td width="425">Laki-laki</td>
</tr>
<tr>
<td width="170">Status Perkawinan</td>
<td width="19">:</td>
<td width="425">Kawin</td>
</tr>
<tr>
<td width="170">Agama</td>
<td width="19">:</td>
<td width="425">Islam</td>
</tr>
</tbody>
</table>
<p><strong><br />
</strong><strong>B. Riwayat Pendidikan</strong></p>
<table style="height: 517px;" width="808">
<tbody>
<tr>
<td colspan="3" width="614">Pendidikan Formal</td>
</tr>
<tr>
<td width="94">Jenjang</td>
<td width="378">Institusi</td>
<td width="142">Tahun</td>
</tr>
<tr>
<td width="94"> SD</td>
<td width="378">SDN Kertajaman Lampung Selatan</td>
<td width="142">1971 – 1977</td>
</tr>
<tr>
<td width="94"> SMP</td>
<td width="378">SMP Penengahan Lampung Selatan</td>
<td width="142">1977 – 1981</td>
</tr>
<tr>
<td width="94"> SMA</td>
<td width="378">SMAN Kalianda Lampung Selatan &amp; SMAN 53 Jakarta Timur</td>
<td width="142">1981 – 1984</td>
</tr>
<tr>
<td width="94"> Strata 1</td>
<td width="378">Fakultas Hukum Universitas Ibnu Chaldun Jakarta</td>
<td width="142">1992 – 1996</td>
</tr>
<tr>
<td width="94"> Strata 2</td>
<td width="378">Hukum Universitas Jayabaya</td>
<td width="142">1998 – 2002</td>
</tr>
<tr>
<td width="94"> Strata 3</td>
<td width="378">Manajemen Pendidikan Universitas Negeri Jakarta</td>
<td width="142">2002 – 2005</td>
</tr>
</tbody>
</table>
<p><strong><br />
C. Pengalaman Pekerjaan</strong></p>
<table style="height: 794px;" width="806">
<tbody>
<tr>
<td width="141">Jabatan</td>
<td width="331">Institusi</td>
<td width="141">Tahun</td>
</tr>
<tr>
<td width="141">Direktur</td>
<td width="331">PT. Batin Eka Perkasa Jakarta</td>
<td width="141">1998</td>
</tr>
<tr>
<td width="141">Direktur Utama</td>
<td width="331">PT. Panamas</td>
<td width="141">2000</td>
</tr>
<tr>
<td width="141">Direktur Utama</td>
<td width="331">PD. Nadia Tamaraya Group</td>
<td width="141">1995</td>
</tr>
<tr>
<td width="141">Direktur Utama</td>
<td width="331">PT. Zenco Almasindo Utama</td>
<td width="141">1996</td>
</tr>
<tr>
<td width="141">Advokat</td>
<td width="331"></td>
<td width="141">1998</td>
</tr>
<tr>
<td width="141">Branch Manager</td>
<td width="331">PT. Hosana Megah Abadi</td>
<td width="141">1998</td>
</tr>
<tr>
<td width="141">Dosen</td>
<td width="331">Fakultas Hukum Universitas Ibnu Chaldun Jakarta</td>
<td width="141">2003</td>
</tr>
<tr>
<td width="141">Dosen</td>
<td width="331">Pascasarjana IPWIJA</td>
<td width="141">2005</td>
</tr>
<tr>
<td width="141">Dosen</td>
<td width="331">Universitas Islam Negeri Bandung</td>
<td width="141">2005</td>
</tr>
<tr>
<td width="141">Dosen Luar Biasa</td>
<td width="331">Universitas Jambi</td>
<td width="141">2005</td>
</tr>
<tr>
<td width="141">Dosen Penguji</td>
<td width="331">STIKOM The London School Of Public Relations Jakarta</td>
<td width="141">2006</td>
</tr>
</tbody>
</table>
<p><strong><br />
</strong><strong>D. Pengalaman Organisasi</strong></p>
<table style="height: 945px;" width="802">
<tbody>
<tr>
<td width="207">Jabatan</td>
<td width="264">Institusi</td>
<td width="142">Tahun</td>
</tr>
<tr>
<td width="207">Bendahara</td>
<td width="264">LBH UIC Jakarta</td>
<td width="142">1997-2003</td>
</tr>
<tr>
<td width="207">Fungsionaris</td>
<td width="264">DPP Partai Golkar</td>
<td width="142">1999-2005</td>
</tr>
<tr>
<td width="207">Pengurus</td>
<td width="264">Himpunan Advokat dan Pengacara Indonesia</td>
<td width="142">1999-2006</td>
</tr>
<tr>
<td width="207">Wakil Ketua</td>
<td width="264">DPD Partai Golkar Provinsi Lampung</td>
<td width="142">2003</td>
</tr>
<tr>
<td width="207">Badan advokasi (BAKUMHAM)</td>
<td width="264">DPP Partai Golkar</td>
<td width="142">2003</td>
</tr>
<tr>
<td width="207">Wakil Ketua</td>
<td width="264">DPD Partai Golkar Provinsi Lampung</td>
<td width="142">2003</td>
</tr>
<tr>
<td width="207">Dewan Pakar</td>
<td width="264">Lampung Sai</td>
<td width="142">2004</td>
</tr>
<tr>
<td width="207">Ketua</td>
<td width="264">DPD Partai Golkar Kabupaten Lampung Selatan</td>
<td width="142">2004</td>
</tr>
<tr>
<td width="207">Ketua</td>
<td width="264">Pengurus Nasional Karang Taruna Indonesia</td>
<td width="142">2006</td>
</tr>
<tr>
<td width="207">Ketua</td>
<td width="264">DPP PAN</td>
<td width="142">Sampai sekarang</td>
</tr>
<tr>
<td width="207">Direktur</td>
<td width="264">Advocat di Jakarta</td>
<td width="142">Sampai sekarang</td>
</tr>
<tr>
<td width="207">Ketua</td>
<td width="264">DPW PAN Provinsi Lampung</td>
<td width="142">Sampai sekarang</td>
</tr>
</tbody>
</table>
<p><strong><br />
</strong><strong>E. Data Keluarga</strong></p>
<table style="height: 1120px;" width="802">
<tbody>
<tr>
<td width="141">Isteri</td>
<td width="19">:</td>
<td width="454">Jasmine Shahnaz</td>
</tr>
<tr>
<td width="141">Anak Kandung</td>
<td width="19">:</td>
<td width="454">1. Randy Zenata</td>
</tr>
<tr>
<td width="141"></td>
<td width="19"></td>
<td width="454">2. Nadia Cindy Zenata</td>
</tr>
<tr>
<td width="141"></td>
<td width="19"></td>
<td width="454">3. Fazryna Virani Shahnaz</td>
</tr>
<tr>
<td width="141"></td>
<td width="19"></td>
<td width="454"> 4.  Vanesa Zenita Shahnaz</td>
</tr>
<tr>
<td width="141"></td>
<td width="19"></td>
<td width="454"> 5.  Zaveena Azalea Zein</td>
</tr>
<tr>
<td width="141">Ayah Kandung</td>
<td width="19">:</td>
<td width="454">Hasan</td>
</tr>
<tr>
<td width="141">Ibu Kandung</td>
<td width="19">:</td>
<td width="454">Siti Zaenab</td>
</tr>
<tr>
<td width="141">Ayah Mertua</td>
<td width="19">:</td>
<td width="454">Much. Azam Chohan</td>
</tr>
<tr>
<td width="141">Ibu Mertua</td>
<td width="19">:</td>
<td width="454">Rogayah Rashida</td>
</tr>
<tr>
<td width="141">Saudara Kandung</td>
<td width="19">:</td>
<td width="454">1. KR. Herli</td>
</tr>
<tr>
<td width="141"></td>
<td width="19"></td>
<td width="454">2. Dr. (HC). H. Zulkifli Hasan, S.E., M.M</td>
</tr>
<tr>
<td width="141"></td>
<td width="19"></td>
<td width="454">3. Siti Zubaidah</td>
</tr>
<tr>
<td width="141"></td>
<td width="19"></td>
<td width="454">4. Ahmat Fatoni</td>
</tr>
<tr>
<td width="141"></td>
<td width="19"></td>
<td width="454">5. Munawaroh</td>
</tr>
<tr>
<td width="141"></td>
<td width="19"></td>
<td width="454">6. M. Hazizi</td>
</tr>
<tr>
<td width="141"></td>
<td width="19"></td>
<td width="454">7. H. Helmi Hasan SE</td>
</tr>
<tr>
<td width="141"></td>
<td width="19"></td>
<td width="454">8. M. Fauzii</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
                    
                                        
                                    
                </div>       
                        
                <div class="clearfix"></div> 
</div>



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

          <link rel='stylesheet' id='su-galleries-shortcodes-css'  href='https://www.lampungselatankab.go.id/sites/wp-content/plugins/shortcodes-ultimate/assets/css/galleries-shortcodes.css?ver=5.0.3' type='text/css' media='all' />
<script type='text/javascript' src='https://www.lampungselatankab.go.id/sites/wp-content/plugins/mastercity/layoutcreator/assets/javascripts/mllc-view.js?ver=1540749417'></script>
<script type='text/javascript' src='https://www.lampungselatankab.go.id/sites/wp-content/themes/city-of-wp/js/jquery.hoverIntent.minified.js?ver=4.9.8'></script>
<script type='text/javascript' src='https://www.lampungselatankab.go.id/sites/wp-content/themes/city-of-wp/js/jquery.prettyPhoto.js?ver=4.9.8'></script>
<script type='text/javascript' src='https://www.lampungselatankab.go.id/sites/wp-content/themes/city-of-wp/js/superfish.js?ver=4.9.8'></script>
<script type='text/javascript' src='https://www.lampungselatankab.go.id/sites/wp-content/themes/city-of-wp/js/ownScript.js?ver=4.9.8'></script>
<script type='text/javascript' src='https://www.lampungselatankab.go.id/sites/wp-content/themes/city-of-wp/js/jquery.flexslider-min.js?ver=4.9.8'></script>
<script type='text/javascript' src='https://www.lampungselatankab.go.id/sites/wp-content/themes/city-of-wp/js/jquery.flexslider.start.main.js?ver=4.9.8'></script>
<script type='text/javascript' src='https://www.lampungselatankab.go.id/sites/wp-includes/js/wp-embed.min.js?ver=4.9.8'></script>

</body>
</html>
