<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>INFILM</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/clapperboard.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="header_white_section">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="header_information">
                           <ul>
                              <li><img src="images/1.png" alt="#"/> Ilmu Komputer USU</li>
                              <li><img src="images/2.png" alt="#"/> +62 8123456789</li>
                              <li><img src="images/3.png" alt="#"/> infilm@gmail.com</li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo"> <a href="index.php"><img src="images/infilm.png" alt="#" width="150px"></a> </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <div class="menu-area">
                        <div class="limit-box">
                           <nav class="main-menu">
                              <ul class="menu-area-main">
                                 <li><a href="index.php">Beranda</a> </li>
                                 <li><a href="#berita">Berita</a> </li>
                                 <li class="active"><a href="bioskop.php">Bioskop</a></li>
                                 <li><a href="#contact">Hubungi Kami</a></li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end header inner -->
      </header>
      <!-- end header -->
      
      <!--AWAL BIOSKOP-->
	  <section class="blog-section spad">
		<div class="container">
            <table class="table">
                <thead class="thead-dark">
                   <br>
                   <br>
                    <div class="titlepage">
                        <h2>Daftar Bioskop</h2> 
                    </div>
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">No.Telp</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Senin s/d Kamis</th>
                        <th scope="col">Jumat</th>
                        <th scope="col">Weekend/Hari Libur</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    require_once( "../sparqllib.php" );

                    $db = sparql_connect( "http://localhost:3030/tes_tubes/query" );
                    if( !$db ) { print sparql_errno() . ": " . sparql_error(). "\n"; exit; }

                    $sparql = "PREFIX rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#>
                                PREFIX film: <http://www.kuykebioskop/fake#>

                    SELECT ?nama ?lokasi ?telp ?weekday ?jumat ?weekend
                    WHERE {
                        ?subject film:nama ?nama .
                        ?subject film:lokasi ?lokasi .
                        ?subject film:telp ?telp .
                        ?subject film:weekday ?weekday .
                        ?subject film:jumat ?jumat .
                        ?subject film:weekend ?weekend .
                    }";

                    $result = sparql_query( $sparql ); 
                    $fields = sparql_field_array( $result );

                    while( $row = sparql_fetch_array( $result ) )
                    {
                        print "<tr>";
                        print "<td>$row[nama]</td>";
                        print "<td>$row[telp]</td>";
                        print "<td>$row[lokasi]</td>";
                        print "<td>$row[weekday]</td>";
                        print "<td>$row[jumat]</td>";
                        print "<td>$row[weekend]</td>";
                        print "</tr>";
                    }
                ?>
                </tbody>
            </table>
		</div>
	</section>
	<!--AKHIR BIOSKOP-->

      <!-- footer -->
      <footer>
         <div id="contact" class="footer">
            <div class="container">
               <div class="row pdn-top-30">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                     <ul class="location_icon">
                        <li> <a href="#"><img src="icon/facebook.png"></a></li>
                        <li> <a href="#"><img src="icon/Twitter.png"></a></li>
                        <li> <a href="#"><img src="icon/linkedin.png"></a></li>
                        <li> <a href="#"><img src="icon/instagram.png"></a></li>
                     </ul>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                     <div class="Follow">
                        <h3>Hubungi Kami</h3>
                        <span>Universitas Sumatera Utara, Jl. Alumni No.3, Padang Bulan, Kec. Medan Baru, <br>Medan,<br>
                        Sumatera Utara<br>
                        (061) 8222129</span>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                     <div class="Follow">
                        <h3>SW 4 - INFILM</h3>
                        <ul class="link">
                           <li> <a href="#">083 - Erlangga</a></li>
                           <li> <a href="#">101 - Kirey</a></li>
                           <li> <a href="#">116 - Christine</a></li>
                           <li> <a href="#">122 - Dinda</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                     <div class="Follow">
                        <h3> Contact</h3>
                        <div class="row">
                           <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                              <input class="Newsletter" placeholder="Name" type="text">
                           </div>
                           <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                              <input class="Newsletter" placeholder="Email" type="text">
                           </div>
                           <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                              <textarea class="textarea" placeholder="comment" type="text">Comment</textarea>
                           </div>
                        </div>
                        <button class="Subscribe">Submit</button>
                     </div>
                  </div>
               </div>
               <div class="copyright">
                  <div class="container">
                     <p>Copyright 2020 All Right Reserved By <a href="https://html.design/">SW 4 INFILM</a></p>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script>
         $(document).ready(function() {
           var owl = $('.owl-carousel');
           owl.owlCarousel({
             margin: 10,
             nav: true,
             loop: true,
             responsive: {
               0: {
                 items: 1
               },
               600: {
                 items: 2
               },
               1000: {
                 items: 3
               }
             }
           })
         })
      </script>
     
   </body>
</html>