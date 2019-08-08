<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
	<title><?php echo ReturnClassAddField('0','seotitle'); ?></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
	<script src="/js/rem.js"></script>
<link rel="stylesheet" href="/css/swiper.min.css">
	<link rel="stylesheet" href="/css/common.css">


</head>
<body>
<header class="container header">
		<div class="row">
			<div class="col-3" id="logo"><a href="/"><img class="img-fluid" src="/images/logo.png" data-retina="true"></a></div>
			<div class="col-8" id="nav">
				<ul class="show">
					<li>
						<a href="/">首页</a>
					</li>
					<li>
						<a href="/chanpin/">产品</a>
					</li>
					<li>
						<a href="/anli/">案例</a>
					</li>
					<li>
						<a href="/news/">新闻</a>
					</li>

				</ul>

			</div>
			<div class="col-1" id="menu-icon">
				<a href="javascript:;" class="close"><img src="/images/menu.png" alt=""></a>
			</div>
			<div class="main-menu " style=>               
				<ul>
					<li><a class="close" id="close" type="button" aria-label="Close"><span>导航菜单</span></a></li><li>
						<a href="/">首页</a></li><li>
						<a href="/chanpin/">产品中心</a></li><li>
						<a href="/anli/">客户案例</a></li><li>
					        <a href="/news/">新闻中心</a></li><li>
						<a href="/shipin/">视频中心</a></li><li>
						<a href="/wuliao/">物料加工</a></li><li>
						<a href="/about/">关于我们</a></li><li>
						<a class="close" id="close" type="button" aria-label="Close"><img class="img-fluid" src="./images/nav-ico.png"></a></li>
				</ul>
			</div>
		</div>
	</header>
					
<div  class="container">
	<div class="width-fill banner">
		
		 		<img src="/images/contact-banner.png" class="width-fill" alt="about banner">
	</div>
</div>	
<section class="contact">
	<div class="container">
		<h3>您可以通过以下方式联系到我们</h3>
		<p>如果您对我公司及我们的产品感兴趣，欢迎到我公司或者我公司当地办事处来勘察，您也可以通过在线咨询，需求表单提交，发送电子邮件，拨打咨询电话等方式与我们取得沟通!我们的员工将竭诚为您提供产品信息和应用知识，以及世邦工业贴心的服务。</p>
		<div class="detail">
			<div class="address">
				<div class="left">
					<h4>公司地址</h4><p>上海市浦东新区<br>建业路416号</p>
				</div>
				
			</div>
			<div class="message"><div class="phone"><i></i><div><h4>销售热线</h4><p>+86-02158385881</p></div></div>
								<div class="mail"><i></i><div><h4>电子邮箱</h4><p>info@zenithcrusher.com</p></div></div>
			</div>
		</div>
		<div class="imgbox">
			<img src="./images/map.jpg" alt="" class="width-fill" >
		</div>
	</div>
</section>
		<div class="yuding">
			<div class="container">
				<h3>专家30分钟快速答复</h3>
				<h4>7*24小时响应</h4>
				<form class="yuyue" name="feedback" method="post" enctype="multiple/form-data" action="//inquiry.shibangchina.com/updata_ppc.php" >
					<div class="name">	<input type="text" name="name" placeholder="如何称呼您？"></div>

					<div class="phone">	<input type="text"  placeholder="您的电话?" name="phone"></div>
					<div class="shebei">
						<p class="yijian">业务需求:</p>
						<div class="form-check">
							<div><input name="content" type="checkbox" value="业务需求:生产砂石骨料"><span>生产砂石骨料</span></div>
							<div><input name="content" type="checkbox" value="业务需求:生产机制砂"><span>生产机制砂</span></div>
							<div><input name="content" type="checkbox" value="业务需求:工业制粉"><span>工业制粉</span></div>
						</div>
					</div>


					<button type="submit" value="马上预约" class="submit">马上预约</button>
				</form>
			</div>
			
		</div>

		<section class="conversion" >
			<div class="average">
				<div class="container">
					<div class="row">
						<div class="col"><a onclick="openZoosUrl('chatwin')" target="_blank"><div class="chat"><i></i><span>获取报价</span></div></a></div>
						<div class="col"><a href="tel:021-58381996"><div class="phone"><i></i><span>电话咨询</span></div></a></div>
					</div>
				</div>
			</div>
		</section>
		<footer>
			<div class="container">

				<div class="copy"> 上海西芝矿山工程机械有限公司 © 2000-2019 版权所有 
				沪ICP备10028452号</div>
			</div>
		</footer>

		<script src="/js/chat.js"></script>
		<script src="/js/jquery.min.js" type="text/javascript"></script>
		<script src="/js/swiper.min.js"></script>
		<script src="/js/common.js"></script>