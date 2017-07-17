<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?=$set->description?>">
<meta name="keywords" content="<?=$set->keywords?>">
<meta name="author" content="">

<title>Soklin Lantai</title>
<!-- Bootstrap core CSS -->
<link rel="shortcut icon" type="image/png" href="favicon.png"/>
<link rel="shortcut icon" type="image/png" href="favicon.png"/>

<link href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<link href="<?=config_item('assets')?>style/css/plugins.css" rel="stylesheet">
<link href="<?=config_item('assets')?>style_1.css" rel="stylesheet">
<link href="<?=config_item('assets')?>timeline.css" rel="stylesheet">
<link href="<?=config_item('assets')?>slider.css" rel="stylesheet">    
   

<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href="<?=config_item('assets')?>style/type/icons.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"  crossorigin="anonymous">
    
     <!-- CSS -->
    <link type="text/css" rel="stylesheet" href="<?=config_item('assets')?>animatepatels.css" />

    <link href="<?=config_item('assets')?>style/type/icons.css" rel="stylesheet">

<!--<link href="http://themes.iki-bir.com/lydia/style/type/icons.css" rel="stylesheet">  -->  
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
   <script src="<?=config_item('assets')?>style/js/jquery.min.js"></script>
    
   <script src="<?=config_item('assets')?>style/js/ycp.js"></script>
    
   
    
    
            <script>
            $(function() {

                $("#unix").ycp({
                    apikey : 'AIzaSyArEY3k0IvkVGmOqwBJ-1iBvakc1RfCuZ0',
                    playlist : 10,
                    autoplay : false,
                    related : false
                });

                $(".demo").ycp({
                    apikey : 'AIzaSyArEY3k0IvkVGmOqwBJ-1iBvakc1RfCuZ0'
                });

            });
            </script>
    
    <script>
        $(window).bind('resize load', function() {
            if ($(this).width() < 767) {
                $('#collapseTwo').removeClass('in');
                $('#collapseTwo').addClass('out');
            } else {
                $('#collapseTwo').removeClass('out');
                $('#collapseTwo').addClass('in');
            }
        });
        
         $('#Carousel').carousel({interval:6000});
    </script>
    
  <!-- <script type="text/javascript" src="style/js/jquery.youtubeplaylist.js"></script>
    <script type="text/ecmascript">
  
    $(function() {
      
      $("ul.demo2").ytplaylist({addThumbs:true, autoPlay: false, holderId: 'ytvideo2'});
    });
  
</script>-->
    
    <style type="text/css">
        .accordion-group{
              border: 0px solid #000000;
              -moz-border-radius: 0px;/*Firefox*/
              -webkit-border-radius: 0px;/*Safari, Chrome*/
              border-radius: 0px;
              /*background-color: #fff;*/
            }
            .accordion-heading .accordion-toggle{
              color: #ddd;
              font-family: 'Oxygen', sans-serif;
            }
            .accordion-heading{
              /*background-color: rgba(59,101,161,1);*/
            }
            .accordion-heading:hover{
              /*background-color: rgba(59,101,161,0.8);*/
            }
            .accordion-heading .accordion-toggle:hover{
              text-decoration: none;
            }
            .accordion-inner{
              border-color: #ddd;
            }
        
        .tinggi{height: 2143px;}
       .box {
                background: rgba(255, 255, 255, 0.8);
                padding: 30px;
                box-shadow: 0 0 2px #fff inset;
                -moz-box-shadow: 0 0 2px #fff inset;
                -webkit-box-shadow: 0 0 4px #fff inset;
            }
       .flowerbg {
                position: absolute;
                left: 38px;
                bottom: 1535px;
                z-index: 0;
            }
        .wonderBG {
                background: url(<?=config_item('assets')?>style/images/soklin/footer_bg3.png) no-repeat;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }

     
    </style>
    
  

</head>
<body>
<div id="preloader"><div class="textload">Loading</div><div id="status"><div class="spinner"></div></div></div>
<main class="body-wrapper">
  <div class="navbar">
  <?php $this->load->view('navigasi'); ?>
  </div>
  <!-- /.navbar -->
  
  <!-- /.revolution -->
    
    
    
    <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="6000" id="Carousel">
  <!-- Overlay -->
  <div class="overlay"></div>

  <!-- Indicators -->
  <ol class="carousel-indicators">
  <?php 
    $nom = 0;
    foreach ($sl as $slid) {
      if($nom == 1) {
        $act = 'class="active"';
      } else {
        $act= "";
      }
    ?>
    <li data-target="#Carousel" data-slide-to="<?=$nom?>" <?=$act?>></li>
    <?php $nom++; } ?>
    <?php /*
    <li data-target="#Carousel" data-slide-to="1"></li>
    <li data-target="#Carousel" data-slide-to="2"></li>
    */ ?>
  </ol>
  
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    
    <?php 
    $no = 1;
    foreach ($sl as $sld) {
      if($no == 1) {
        $act = "active";
      } else {
        $act= "";
      }
    ?>
    <div class="item slides <?=$act?>">
      <div class=""><img src="<?=base_url()?>sliderimg/<?=$sld->gambar?>"></div>
      <div class="hero">
        <hgroup>
            <?php /*
            <h1>Munculkan kesan relax di ruangan Anda dengan aroma Rose Bouquet So Klin Lantai</h1>     
            */ ?>
            
            <!--<h3>Get start your next awesome project</h3>-->
        </hgroup>
        
      </div>
    </div>
    <?php $no++; } ?>


  </div> 
        
    <a class="left carousel-control" href="#Carousel" style="color:#337ab7;" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#Carousel" style="color:#337ab7;" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>   
</div>
    
  
  <div class="light-wrapper" id="produk">
      
    <div class="container inner2">
     
      <!-- /.thin -->
      <div class="divide10"></div>
        
      
      <!-- /.row --> 
      
       <div><img src="<?=config_item('assets')?>style/images/soklin/separator.png" width="1910px" style="position: relative;left: -2px;z-index: 1000;top: -44px;"></div>
        
        
        <div id="templates">
          <div class="accordion" id="accordion2">
            
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" id="collaps" data-parent="#accordion2" href="#collapseTwo">
                <h3 class="section-title text-center section-mobile">PRODUCT GALLERY</h3>
                </a>
              </div>
              <div id="collapseTwo" class="accordion-body collapse in">
                <div class="accordion-inner">
                  <div class="dark-wrapper">
    <div class="container inner2">
      
      <?php /*
      <p class="text-center">Nullam quis risus eget urna mollis ornare vel eu leo. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
      */ ?>
      <div class="divide30"></div>
      <div id="slide-portfolio" class="image-grid col3">
        <div class="items-wrapper">
          <ul class="isotope items">
            <?php 
          $no = 1;
          foreach ($pr as $prod) {
          ?>
            <li class="item">
              <figure class="icon-overlay"><a href="<?=config_item('assets')?>" data-type="slide-portfolio-item-<?=$no?>"><img src="<?=base_url()?>product/<?=$prod->cover?>" alt="" /></a></figure>
              <div class="slide-portfolio-item-info box">
                <h4 class="post-title"><?=$prod->nameproduct?></h4>
              </div>
            </li>
            <?php $no++; } ?>         
            
            
          </ul>
        </div>
        <!--/.items-wrapper --> 
      </div>
      <!-- slide-portfolio --> 
      
    </div>
    <!-- /.container --> 
    
  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        
        
        
    </div>
       
       <div id="background-wrap" style="display:none">
            <div class="bubble x1"></div>
            <div class="bubble x2"></div>
            <div class="bubble x3"></div>
            <div class="bubble x4"></div>
            <div class="bubble x5"></div>
            <div class="bubble x6"></div>
            <div class="bubble x7"></div>
            <div class="bubble x8"></div>
            <div class="bubble x9"></div>
            <div class="bubble x10"></div>
        </div>


       <h3 class="section-title text-center" id="kegiatan">WHAT’S HAPPENING</h3>
      <section id="story" class="section section-diff section-bg-attached" style="">
                <div class="container">

                  

                  <div class="row">
                    <div class="col-sm-12">
                      <div class="story">
                        <div class="timeline"></div>
                        <?php //for ($thn=2016; $thn <= date("Y"); $thn++) { 

                          $ev = $this->homemodel->Getevent(2017);
                          foreach ($ev as $evn) {
                            ?>
                        <div class="story-item">
                          <div class="story-item-content fadeRight">
                            <div class="story-item-wrap">
                              <div class="line-arrow"></div>
                                <span class="si-year"><?=$evn->tahun?></span><span class="si-date"><?=$evn->bln?></span><a href="<?=base_url()?>kegiatan/detail/<?=$evn->nameevent_seo?>"><span class="si-header"><?=$evn->nameevent?></span></a><br/> 
                              <p class="si-desc"><?=$this->fungsi->limit_text($evn->intro,50)?></p>
                            </div>
                          </div>
                        </div>
                        <?php } ?>


                      </div>  
                    </div>
                  </div>

                </div>
              </section>
      
    <!-- /.container --> 
      <div class="flowerbg"><img src="<?=config_item('assets')?>style/images/soklin/bg_flower.png"></div>
      <div class="col-image" id="tutorial">
       
      <!--/.bg-wrapper -->
      <div class="container" >
          
           
            <!-- Selector by Id -->
            <!--<div id="unix" data-ycp_title="Soklin" data-ycp_channel="UC9T0II3FXyCmEOR-5Znx3Og"></div>--> <!-- By ChannelId -->
          
          
        <div class="carousel carousel-boxed blog">
              <div class="item post">
                  <h3 class="section-title text-center">Tips For Moms</h3>
                <figure class="main"><iframe width="370" height="235" src="https://www.youtube.com/embed/ggqiaTknX5o?rel=0" frameborder="0" allowfullscreen></iframe></figure>

                <!-- /.box --> 

              </div>
              <!-- /.post -->

              <div class="item post">
                  <h3 class="section-title text-center">Tutorial's</h3>
                <figure class="main"><iframe width="370" height="235" src="https://www.youtube.com/embed/UQgqEoRaw4Y?rel=0" frameborder="0" allowfullscreen></iframe></figure>

                <!-- /.box --> 

              </div>
              <!-- /.post -->

              <div class="item post">
                  <h3 class="section-title text-center">Ads</h3>
                <figure class="main"><iframe width="370" height="235" src="https://www.youtube.com/embed/csJNuuuOF6o?rel=0" frameborder="0" allowfullscreen></iframe></figure>

                <!-- /.box --> 

              </div>
          </div>
        
          
          
      </div>
      <!--/.container --> 
    </div>
    <div class="wonderBG">
      <div class="container inner" id="wonder">
      <h3 class="section-title text-center">WonderMom Talk's</h3>
      <div class="divide10"></div>
      <div class="carousel-wrapper">
        <div class="carousel carousel-boxed blog">
        <?php 
          foreach ($ar as $art) { ?>
          <div class="item post">
            <figure class="main"><img src="<?=base_url()?>article/<?=$art->image?>" alt="" /></figure>
            <div class="box text-center">
              
              <h4 class="post-title"><a href="<?=base_url()?>wondermomtalk/detail/<?=$art->judul_seo?>"><?=$this->fungsi->limit_text($art->judul,50)?></a></h4>
              <div class="meta"><span class="date"><?=$art->tgl?></span>
              <?php /*
              <span class="comments"><a href="<?=config_item('assets')?>"><i class="icon-chat-1"></i> 15</a></span>
              */ ?>
              <span>dibaca <strong><?=$art->hits?></strong>x</span>
              </div>
              <p><?=$this->fungsi->limit_text($art->isi,20)?></p>
            </div>
            <!-- /.box --> 
            
          </div>
          <!-- /.post -->
          <?php } ?>

          
          <!-- /.post --> 
        </div>
      </div>
      <!--/.carousel-wrapper --> 
    </div>
    </div>      
  </div>
  <!-- /.light-wrapper -->
  
  
  <!-- /.dark-wrapper -->
  
  <div class="light-wrapper1">
    
    <!--/.col-image --> 
    
  </div>
  <!-- /.light-wrapper -->
  
  <div class="dark-wrapper1">
    
    <!--/.container --> 
    
  </div>
  <!-- /.dark-wrapper -->
  
  <!-- /.light-wrapper -->
    
   <?php $this->load->view('footer'); ?>
    
  
</main>
    
<!--/.body-wrapper --> 
<?php 
$nom = 1;
foreach ($pr as $prods) {
?>
<div class="slide-portfolio-item-content dark-wrapper slide-portfolio-item-<?=$nom?>">
  <div class="slide-portfolio-item-detail">
    <div class="inner2">
      <h2 class="text-center"><?=$prods->nameproduct?></h2>
      <p class="text-center"><?=$prods->description?></p>
      <div class="divide25"></div>
      <ul class="basic-gallery text-center">
        <li>
            <div id="carousel-custom<?=$nom?>" class="carousel slide" data-ride="carousel">
                <div class="carousel-outer">
                    <!-- me art lab slider -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="img-responsive" src="<?=base_url()?>product/<?=$prods->image?>" alt="" id="zoom_05"  data-zoom-image="<?=base_url()?>product/<?=$prods->image?>"/>
                        </div>
                        <?php 
                          $img1 = $this->homemodel->Getproductimg($prods->idproduct);
                          foreach ($img1 as $imgs1) {
                        ?>
                        <div class="item"  id="zoom_05">
                            <img class="img-responsive" src='<?=base_url()?>product/<?=$imgs1->images?>' alt='' data-zoom-image="<?=base_url()?>product/<?=$imgs1->images?>" />
                        </div>
                        <?php } ?>

                    </div>

                    <!-- sag sol -->

                </div>

                <!-- thumb -->
                <ol class='carousel-indicators mCustomScrollbar meartlab'>
                    <li data-target='#carousel-custom<?=$nom?>' data-slide-to='0' class='active'><img src='<?=base_url()?>product/<?=$prods->image?>' alt='' /></li>
                    <?php 
                          $nomer = 1;
                          $img2 = $this->homemodel->Getproductimg($prods->idproduct);
                          foreach ($img2 as $imgs2) {
                        ?>
                    <li data-target='#carousel-custom<?=$nom?>' data-slide-to='<?=$nomer?>'><img src='<?=base_url()?>product/<?=$imgs2->images?>' alt='' /></li>
                    <?php $nomer++; } ?>


                </ol>
            </div>
            </li>
      </ul>
        
    
 
    <!-- .inner --> 
  
  
        
   </div>
    </div>
    <!-- .inner --> 
  </div>
  <!-- slide-portfolio-item-detail --> 
</div>
<!-- slide-portfolio-item-content -->
<?php $nom++;  } ?>

<?php /*
<div class="slide-portfolio-item-content dark-wrapper slide-portfolio-item-2">
  <div class="slide-portfolio-item-detail">
    <div class="inner2">
      <h2 class="text-center">Aromatic Marine</h2>
      <p class="text-center">Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Sed posuere consectetur est at lobortis. Donec sed odio dui. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
      <div class="divide25"></div>
      <ul class="basic-gallery text-center">
        <li>
            <div id="carousel-custom2" class="carousel slide" data-ride="carousel">
                <div class="carousel-outer">
                    <!-- me art lab slider -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="img-responsive" src="style/images/soklin/variant_detail_3.jpg" alt="" id="zoom_05"  data-zoom-image="style/images/soklin/variant_detail_3.jpg"/>
                        </div>
                        <div class="item"  id="zoom_05">
                            <img class="img-responsive" src='style/images/soklin/variant/variant_detail_1lavender.jpg' alt='' data-zoom-image="style/images/soklin/variant/variant_detail_1lavender.jpg" />
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="style/images/soklin/variant_detail_3.jpg" alt="" id="zoom_05"  data-zoom-image="style/images/soklin/variant_detail_3.jpg"/>
                        </div>
                        <div class="item"  id="zoom_05">
                            <img class="img-responsive" src='style/images/soklin/variant/variant_detail_1lavender.jpg' alt='' data-zoom-image="style/images/soklin/variant/variant_detail_1lavender.jpg" />
                        </div>
                        
                    </div>

                    <!-- sag sol -->

                </div>

                <!-- thumb -->
                <ol class='carousel-indicators mCustomScrollbar meartlab'>
                  <li data-target='#carousel-custom2' data-slide-to='0' ><img src='style/images/soklin/variant_detail_3.jpg' alt='' /></li>
                  <li data-target='#carousel-custom2' data-slide-to='1'><img src='style/images/soklin/variant/variant_detail_1lavender.jpg' alt='' /></li>
                    <li data-target='#carousel-custom2' data-slide-to='2' ><img src='style/images/soklin/variant_detail_3.jpg' alt='' /></li>
                  <li data-target='#carousel-custom2' data-slide-to='3'><img src='style/images/soklin/variant/variant_detail_1lavender.jpg' alt='' /></li>
                     


                </ol>
            </div>
            </li>
      </ul>
    </div>
    <!-- .inner --> 
  </div>
  <!-- slide-portfolio-item-detail --> 
</div>
<!-- slide-portfolio-item-content -->

<div class="slide-portfolio-item-content dark-wrapper slide-portfolio-item-3">
  <div class="slide-portfolio-item-detail">
    <div class="inner2">
      <h2 class="text-center">Aromatic Lemon</h2>
      <p class="text-center">Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Sed posuere consectetur est at lobortis. Donec sed odio dui. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
      <div class="divide25"></div>
      <ul class="basic-gallery text-center">
        <li>
            <div id="carousel-custom3" class="carousel slide" data-ride="carousel">
                <div class="carousel-outer">
                    <!-- me art lab slider -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="img-responsive" src="style/images/soklin/variant_detail_3.jpg" alt="" id="zoom_05"  data-zoom-image="style/images/soklin/variant_detail_3.jpg"/>
                        </div>
                        <div class="item"  id="zoom_05">
                            <img class="img-responsive" src='style/images/soklin/variant/variant_detail_1lavender.jpg' alt='' data-zoom-image="style/images/soklin/variant/variant_detail_1lavender.jpg" />
                        </div>

                    </div>

                    <!-- sag sol -->

                </div>

                <!-- thumb -->
                <ol class='carousel-indicators mCustomScrollbar meartlab'>
                    <li data-target='#carousel-custom3' data-slide-to='0' ><img src='style/images/soklin/variant_detail_3.jpg' alt='' /></li>
                    <li data-target='#carousel-custom3' data-slide-to='1'><img src='style/images/soklin/variant/variant_detail_1lavender.jpg' alt='' /></li>


                </ol>
            </div>
            </li>
      </ul>
    </div>
</div>   
</div>    
<!-- slide-portfolio-item-content -->

<div class="slide-portfolio-item-content dark-wrapper slide-portfolio-item-4">
  <div class="slide-portfolio-item-detail">
    <div class="inner2">
      <h2 class="text-center">Aromatic Lavender</h2>
      <p class="text-center">Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Sed posuere consectetur est at lobortis. Donec sed odio dui. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
      <div class="divide25"></div>
      <ul class="basic-gallery text-center">
        <li>
            <div id="carousel-custom4" class="carousel slide" data-ride="carousel">
                <div class="carousel-outer">
                    <!-- me art lab slider -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="img-responsive" src="style/images/soklin/variant/variant_detail_lavender2.jpg" alt="" id="zoom_05"  data-zoom-image="style/images/soklin/variant/variant_detail_lavender2.jpg"/>
                        </div>
                        <div class="item"  id="zoom_05">
                            <img class="img-responsive" src='style/images/soklin/variant/variant_pouch1.jpg' alt='' data-zoom-image="style/images/soklin/variant/variant_pouch1.jpg" />
                        </div>

                    </div>

                    <!-- sag sol -->

                </div>

                <!-- thumb -->
                <ol class='carousel-indicators mCustomScrollbar meartlab'>
                    <li data-target='#carousel-custom4' data-slide-to='0' ><img src='style/images/soklin/variant/variant_detail_lavender2.jpg' alt='' /></li>
                    <li data-target='#carousel-custom4' data-slide-to='1'><img src='style/images/soklin/variant/variant_pouch1.jpg' alt='' /></li>


                </ol>
            </div>
            </li>
      </ul>
    </div>
    <!-- .inner --> 
  </div>
  <!-- slide-portfolio-item-detail --> 
</div>
<!-- slide-portfolio-item-content -->
<div class="slide-portfolio-item-content dark-wrapper slide-portfolio-item-5">
  <div class="slide-portfolio-item-detail">
    <div class="inner2">
      <h2 class="text-center">Aromatic Rose</h2>
      <p class="text-center">Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Sed posuere consectetur est at lobortis. Donec sed odio dui. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
      <div class="divide25"></div>
      <ul class="basic-gallery text-center">
        <li>
            <div id="carousel-custom5" class="carousel slide" data-ride="carousel">
                <div class="carousel-outer">
                    <!-- me art lab slider -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="img-responsive" src="style/images/soklin/variant_detail_3.jpg" alt="" id="zoom_05"  data-zoom-image="style/images/soklin/variant_detail_3.jpg"/>
                        </div>
                        <div class="item"  id="zoom_05">
                            <img class="img-responsive" src='style/images/soklin/variant/variant_detail_1lavender.jpg' alt='' data-zoom-image="style/images/soklin/variant/variant_detail_1lavender.jpg" />
                        </div>

                    </div>

                    <!-- sag sol -->

                </div>

                <!-- thumb -->
                <ol class='carousel-indicators mCustomScrollbar meartlab'>
                    <li data-target='#carousel-custom5' data-slide-to='0' ><img src='style/images/soklin/variant_detail_3.jpg' alt='' /></li>
                    <li data-target='#carousel-custom5' data-slide-to='1'><img src='style/images/soklin/variant/variant_detail_1lavender.jpg' alt='' /></li>


                </ol>
            </div>
            </li>
      </ul>
    </div>
    <!-- .inner --> 
  </div>
  <!-- slide-portfolio-item-detail --> 
</div>
<!-- slide-portfolio-item-content -->
<div class="slide-portfolio-item-content dark-wrapper slide-portfolio-item-6">
  <div class="slide-portfolio-item-detail">
    <div class="inner2">
      <h2 class="text-center">Aromatic Pine</h2>
      <p class="text-center">Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Sed posuere consectetur est at lobortis. Donec sed odio dui. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
      <div class="divide25"></div>
      <ul class="basic-gallery text-center">
        <li>
            <div id="carousel-custom6" class="carousel slide" data-ride="carousel">
                <div class="carousel-outer">
                    <!-- me art lab slider -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="img-responsive" src="style/images/soklin/variant_detail_3.jpg" alt="" id="zoom_05"  data-zoom-image="style/images/soklin/variant_detail_3.jpg"/>
                        </div>
                        <div class="item"  id="zoom_05">
                            <img class="img-responsive" src='style/images/soklin/variant/variant_detail_1lavender.jpg' alt='' data-zoom-image="style/images/soklin/variant/variant_detail_1lavender.jpg" />
                        </div>

                    </div>

                    <!-- sag sol -->

                </div>

                <!-- thumb -->
                <ol class='carousel-indicators mCustomScrollbar meartlab'>
                    <li data-target='#carousel-custom6' data-slide-to='0' ><img src='style/images/soklin/variant_detail_3.jpg' alt='' /></li>
                    <li data-target='#carousel-custom6' data-slide-to='1'><img src='style/images/soklin/variant/variant_detail_1lavender.jpg' alt='' /></li>


                </ol>
            </div>
            </li>
      </ul>
    </div>
    <!-- .inner --> 
  </div>
  <!-- slide-portfolio-item-detail --> 
</div>
<!-- slide-portfolio-item-content -->
<div class="slide-portfolio-item-content dark-wrapper slide-portfolio-item-7">
  <div class="slide-portfolio-item-detail">
    <div class="inner2">
      <h2 class="text-center">Workshop</h2>
      <p class="text-center">Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Sed posuere consectetur est at lobortis. Donec sed odio dui. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
      <div class="divide25"></div>
      <ul class="basic-gallery text-center">
        <li><img src="style/images/art/sp7-1.jpg" alt=""></li>
        <li><img src="style/images/art/sp7-2.jpg" alt=""></li>
        <li><img src="style/images/art/sp7-3.jpg" alt=""></li>
        <li><img src="style/images/art/sp7-4.jpg" alt=""></li>
        <li><img src="style/images/art/sp7-5.jpg" alt=""></li>
        <li><img src="style/images/art/sp7-6.jpg" alt=""></li>
      </ul>
    </div>
    <!-- .inner --> 
  </div>
  <!-- slide-portfolio-item-detail --> 
</div>
<!-- slide-portfolio-item-content -->
<div class="slide-portfolio-item-content dark-wrapper slide-portfolio-item-8">
  <div class="slide-portfolio-item-detail">
    <div class="inner2">
      <h2 class="text-center">Coffee Cups</h2>
      <p class="text-center">Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Sed posuere consectetur est at lobortis. Donec sed odio dui. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
      <div class="divide25"></div>
      <ul class="basic-gallery text-center">
        <li><img src="style/images/art/sp8-1.jpg" alt=""></li>
        <li><img src="style/images/art/sp8-2.jpg" alt=""></li>
        <li><img src="style/images/art/sp8-3.jpg" alt=""></li>
        <li><img src="style/images/art/sp8-4.jpg" alt=""></li>
      </ul>
    </div>
    <!-- .inner --> 
  </div>`
  <!-- slide-portfolio-item-detail --> 
</div>
<!-- slide-portfolio-item-content -->
<div class="slide-portfolio-item-content dark-wrapper slide-portfolio-item-9">
  <div class="slide-portfolio-item-detail">
    <div class="inner2">
      <h2 class="text-center">Holding Green</h2>
      <p class="text-center">Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Sed posuere consectetur est at lobortis. Donec sed odio dui. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
      <div class="divide25"></div>
      <ul class="basic-gallery text-center">
        <li><img src="style/images/art/sp9-1.jpg" alt=""></li>
        <li><img src="style/images/art/sp9-2.jpg" alt=""></li>
        <li><img src="style/images/art/sp9-3.jpg" alt=""></li>
        <li><img src="style/images/art/sp9-4.jpg" alt=""></li>
        <li><img src="style/images/art/sp9-5.jpg" alt=""></li>
      </ul>
    </div>
    <!-- .inner --> 
  </div>
  <!-- slide-portfolio-item-detail --> 
</div>    
*/ ?>
    
<a href="<?=config_item('assets')?>" class="slide-portfolio-item-content-close"><i class="budicon-cancel-1"></i></a> <!-- close slide portfolio content -->     
 
<script src="<?=config_item('assets')?>style/js/bootstrap.min.js"></script> 
<script src="<?=config_item('assets')?>style/js/plugins.js"></script> 
<script src="<?=config_item('assets')?>style/js/classie.js"></script> 
<script src="<?=config_item('assets')?>style/js/jquery.themepunch.tools.min.js"></script> 
<script src="<?=config_item('assets')?>style/js/scripts.js"></script>
<?php /*
<script src="<?=config_item('assets')?>style/js/vendor/jquery-1.10.1.min.js"></script>

    <script>window.jQuery || document.write('<script src="<?=config_item('assets')?>js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
    <script src="<?=config_item('assets')?>js/vendor/bootstrap.min.js"></script>
*/ ?>
  
    <script src="<?=config_item('assets')?>style/js/sidebarEffects.js"></script>
    <script src="<?=config_item('assets')?>style/js/jquery.countTo.js"></script>
    <script src="<?=config_item('assets')?>style/js/waypoints.min.js"></script>
    <script src="<?=config_item('assets')?>style/js/jquery-scrolltofixed-min.js"></script>
    <script src="<?=config_item('assets')?>style/js/scrollIt.min.js"></script>
    <script src="<?=config_item('assets')?>style/js/jquery.flexslider.js"></script>
    <script src="<?=config_item('assets')?>style/js/jquery.label_better.min.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false&extension=.js" type="text/javascript"></script>
    <script src="<?=config_item('assets')?>style/js/map.js"></script>
    <!--<script src="js/jquery.isotope.min.js"></script>-->
    <script src="<?=config_item('assets')?>style/js/isotope.pkgd.min.js"></script>
    <script src="<?=config_item('assets')?>style/js/skrollr.min.js"></script>
    <?php /*
    <script src="<?=config_item('assets')?>style/js/socialcount.min.js"></script>
    */ ?>
    <?php /*
    <script src="<?=config_item('assets')?>style/js/lightbox-2.6.min.js"></script>
    */ ?>
    <script src="<?=config_item('assets')?>style/js/retina-1.1.0.min.js"></script>
    <script src="<?=config_item('assets')?>style/js/jquery.fitvids.js"></script>
    <?php /*
    <script src="<?=config_item('assets')?>style/js/twitter/jquery.tweet.js"></script>
    
    <script src="<?=config_item('assets')?>style/js/jquery.mb.YTPlayer.js"></script>
    */ ?>
    <script src="<?=config_item('assets')?>style/js/main.js"></script>   
   
<!-- DEMO ONLY -->

</body>
</html>