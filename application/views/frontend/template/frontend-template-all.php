<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>Bootstrap 101 Template</title>

    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- 可选的Bootstrap主题文件（一般不用引入） -->
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>

    <link rel="stylesheet" href="<?php echo base_url().'style/gallery/css/blueimp-gallery.min.css'; ?>">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
      .jumbotron{
        background:url(<?php echo base_url().'style/images/bg.jpg'; ?>);
      }
    </style>


  </head>
  <body>


    <div class="container">

      <div class="jumbotron">
        

        <!-- The Gallery as lightbox dialog, should be a child element of the document body -->
<!--         <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
            <div class="slides"></div>
            <h3 class="title"></h3>
            <a class="prev">‹</a>
            <a class="next">›</a>
            <a class="close">×</a>
            <a class="play-pause"></a>
            <ol class="indicator"></ol>
        </div>
 -->
        <!-- The Gallery as inline carousel, can be positioned anywhere on the page -->
        <div id="blueimp-video-carousel" class="blueimp-gallery blueimp-gallery-controls blueimp-gallery-carousel">
            <div class="slides"></div>
            <h3 class="title"></h3>
            <a class="prev">‹</a>
            <a class="next">›</a>
            <a class="play-pause"></a>
            <ol class="indicator"></ol>
        </div>

        <nav class="navbar navbar-inverse">
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">首页</a></li>
              <li><a href="#contact"></a></li>
              <li><a href="#contact"></a></li>
              <li class="active"><a href="home/test">档案馆介绍</a></li>
              <li><a href="#contact"></a></li>
              <li><a href="#contact"></a></li>
              <li class="dropup">
                <a href="#" class="active" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">互动查询 <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">涌泉档案</a></li>
                  <li><a href="#">党员先锋</a></li>
                  <li><a href="#">法制资料</a></li>
                  <li><a href="#">乡土文化</a></li>
                </ul>
              </li>
              <li><a href="#contact"></a></li>
              <li><a href="#contact"></a></li>
              <li class="active"><a href="#contact">互动答题</a></li>
              <li><a href="#contact"></a></li>
              <li><a href="#contact"></a></li>
              <li class="active"><a href="#contact">涌泉红榜</a></li>
              <li><a href="#contact"></a></li>
              <li><a href="#contact"></a></li>
              <li class="dropup">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="active">走进涌泉 <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">涌泉概况</a></li>
                  <li><a href="#">瑞泉馨城</a></li>
                  <li><a href="#">党员先锋</a></li>
                  <li><a href="#">文化涌泉</a></li>
                  <li><a href="#">法制涌泉</a></li>
                  <li><a href="#">涌泉改革</a></li>
                </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>


        

      </div>
    </div>

    <script>
      window.onload=function(){
          blueimp.Gallery([
            {
                title: 'Sintel',
                href: '<?php echo base_url().'style/html5gallery/examples/images/Big_Buck_Bunny.mp4'; ?>',
                type: 'video/mp4',
                poster: '<?php echo base_url().'style/html5gallery/examples/images/Colourful_Tulip_large.jpg'; ?>'
            },
            {
                title: 'Sintel',
                href: '<?php echo base_url().'style/html5gallery/examples/images/Big_Buck_Bunny.mp4'; ?>',
                type: 'video/mp4',
                poster: '<?php echo base_url().'style/html5gallery/examples/images/Colourful_Tulip_large.jpg'; ?>'
            }
          ], {
              container: '#blueimp-video-carousel',
              carousel: true
          });

      };
    </script>

    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
   

    <script src="<?php echo base_url().'style/gallery/js/blueimp-gallery.min.js'; ?>"></script>

  </body>
</html>