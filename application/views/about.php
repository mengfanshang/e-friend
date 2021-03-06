<!DOCTYPE HTML>
<html>
<head>
<title>关于我们</title>
    <base href="<?php echo site_url()?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="assets/css/bootstrap-3.1.1.min.css" rel="stylesheet" type="text/css">
<link href="assets/css/owl.carousel.css" rel="stylesheet" type="text/css" media="all" />
<link href="assets/css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="assets/css/about.css"/>
<link rel="stylesheet" href="assets/css/flexslider.css" type="text/css" media="screen" />
<link href='https://fonts.googleapis.com/css?family=Hammersmith+One' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400italic,700' rel='stylesheet' type='text/css'>
	<style>
		#map{
			margin-top: 50px;;
			width: 100%;
			height: 320px;
		}
	</style>
</head>
<body>
<div class="header" id="home">
	<div class="content white">
		<nav class="navbar navbar-default" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand" href="index.php">e-friend</a>
				</div>
				<!--/.navbar-header-->

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active"><a href="index.php">首页</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">俱乐部<b class="caret"></b></a>
							<ul class="dropdown-menu multi-column columns-2">
								<div class="row">
									<div class="party">
										<ul class="multi-column-dropdown">
											<li><a href="about.php">历史</a></li>
											<li class="divider"></li>
											<li><a href="about.php">哲学</a></li>
											<li class="divider"></li>
											<li><a href="about.php">摄影</a></li>
											<li class="divider"></li>
											<li><a href="about.php">计算机</a></li>
											<li class="divider"></li>
											<li><a href="typography.html">其他</a></li>
										</ul>
									</div>
								</div>
							</ul>
						</li>
						<li><a href="typography.html">表白墙</a></li>
						<li><a>嘚吧嘚</a></li>
						<li><a href="about.php">关于我们</a></li>
						<li><a href="">登陆</a></li>
					</ul>
				</div>
				<!--/.navbar-collapse-->
				<!--/.navbar-->
			</div>
		</nav>
	</div>
</div>
   <!--/start-banner-->
	<div class="banner1">
		<div class="container">
		</div>
	</div>
	<!--//end-banner-->
	<!-- contact -->
	<div class="contact">
		<div class="container">
			<h3>关于我们
			<span>ABOUT US</span>
			</h3>

			<div id="map">

			</div>

			<ul id="nav_bar">
				<li class="active">简介</li>
				<li>功能</li>
				<li>活动</li>
			</ul>
			<div id="content">
				<div class="active">校园交友平台</div>
				<div>该平台是一个通过各种兴趣模块（书法，绘画，古典音乐，文学交流，数字建模，计算机语言，围棋，……）提供的功能来实现将兴趣相同的学生组织在一起，进行线上和线下的交流和学习活动，除此之外，该平台还提供学生与老师间的学术交流和本平台使用是以学校和兴趣为主线，注册时需要选择用户所属的学校名称作为依据，根据自己的兴趣爱好寻找志同道合之人，用户群体学习和生活环境比较集中，便于用户之间的认证与识别</div>
				<div>。。。。。。。。。。。</div>
			</div>


		</div>
	</div>

				<div class="copyright">
						  <p>Copyright &copy;</p>
					</div>


		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<!--JS-->
<script src="assets/js/jquery.min.js"> </script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
		});
	});
</script>
  <script type="text/javascript" src="assets/js/bootstrap-3.1.1.min.js"></script>
<script type="text/javascript" src="assets/js/move-top.js"></script>
<script type="text/javascript" src="assets/js/easing.js"></script>
<script src="http://api.map.baidu.com/api?v=2.0&ak=您的密钥" type="text/javascript"></script>
<script src="assets/js/map.js"></script>
<script>
	var navBar = document.getElementById('nav_bar');
	var aLi = navBar.getElementsByTagName('li');
	var oContent = document.getElementById('content');
	var aDiv = oContent.getElementsByTagName('div');
	for(var i=0;i<aLi.length;i++){
		aLi[i].index = i;
		aLi[i].onclick = function(){
			for(var i=0;i<aLi.length;i++){
				aLi[i].className='';
				aDiv[i].className='';
			}
			this.className = 'active';
			aDiv[this.index].className = 'active';
		}
	}
</script>
<!--//JS-->

</body>
</html>
