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

      <div class="row">
        <div class="col-md-12">
          <a href="#1">
            <img src="<?php echo base_url().'style/images/top.jpg'; ?>" class="carousel-inner img-polaroid" max-width="100%"/>
          </a>
        </div>
      </div>

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">

<!--         <img src="<?php echo base_url().'style/images/pic_tp.jpg'; ?>" class="img-polaroid"/>
        <p>其中span*类使用方法是：一行最大是span12，最小是span1，即有12个等级。一行上，span类后面的数字加起来等于12即可。（注意，类似于给div加边框等操作会使总宽度增加，可能使后面的元素挤到下面）。另外，span类的宽度并不是严格等比例的，分别为（60，140，220，300，380，460，540，620，700，780，860，940）px。
        </p> -->



        <h3>档案管理</h3>
        <div class="media">
          <div class="media-left">
            <a href="#">
              <img src="<?php echo base_url().'style/images/pic_tp.jpg'; ?>" class="img-polaroid"/>
            </a>
          </div>
          <div class="media-body">
            <h4 class="media-heading">题目</h4>
            五一”国际劳动节，是全世界劳动人民共同的节日。从恩格斯领导成立的第二国际明确将1890年5月1日定为第一个国际劳动节起，历史车轮已走过125年。我们党历来高度重视通过纪念“五一”国际劳动节，启发职工群众觉悟，教育引导劳动群众，团结带领工人阶级和广大劳动群众为民族独立、人民解放和国家富强、人民幸福而奋斗。新中国成立后，我国工人阶级成为国家的领导阶级，我国工人阶级和广大劳动群众成为国家的主人，我们纪念“五一”国际劳动节具有了新的时代意义。

            我们所处的时代是催人奋进的伟大时代，我们进行的事业是前无古人的伟大事业，我们正在从事的中国特色社会主义事业是全体人民的共同事业。全面建成小康社会，进而建成富强民主文明和谐的社会主义现代化国家，根本上靠劳动、靠劳动者创造。因此，无论时代条件如何变化，我们始终都要崇尚劳动、尊重劳动者，始终重视发挥工人阶级和广大劳动群众的主力军作用。这就是我们今天纪念“五一”国际劳动节的重大意义。

            党的十八大以来，党中央从坚持和发展中国特色社会主义全局出发，提出并形成了全面建成小康社会、全面深化改革、全面依法治国、全面从严治党的战略布局，确立了新形势下党和国家各项工作的战略目标和战略举措，为实现“两个一百年”奋斗目标、实现中华民族伟大复兴的中国梦提供了理论指导和实践指南。

            历史赋予工人阶级和广大劳动群众伟大而艰巨的使命，时代召唤工人阶级和广大劳动群众谱写壮丽而崭新的篇章。我国工人阶级和广大劳动群众一定要以国家主人翁姿态，积极投身经济社会发展的火热实践，为共同创造我们的幸福生活和美好未来作出新的贡献。


          </div>
          <p><a class="btn btn-primary btn-lg" href="<?php echo base_url().'home/test'; ?>" role="button">返回</a></p>
        </div>

      </div>

      
    </div>


    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

  </body>
</html>