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
<meta name="keywords" content="[!--pagekey--]" />
<meta name="description" content="[!--pagedes--]" />
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
		 		<img src="/images/case/case-banner.png" class="width-fill" alt="about banner">
	</div>
		
</div>
		


		<section class="case-list">
<div  class="container">
			<div class="row">
			<div class="col-3 <?php if($GLOBALS[navclassid] == 9 || $GLOBALS[navclassid] == 11){?>active<?}?>"><a href="/case/epc/">EPC服务</a></div>
			<div class="col-3 <?php if($GLOBALS[navclassid] ==12){?>active<?}?>"><a href="/case/aggregate/">砂石骨料</a></div>
			<div class="col-3 <?php if($GLOBALS[navclassid] ==13){?>active<?}?>"><a href="/case/mine/">矿山破碎</a></div>
			<div class="col-3 <?php if($GLOBALS[navclassid] ==14){?>active<?}?> "><a href="/case/mill/">工业制粉</a></div>
		</div>
			
<div class="cells">
	
	<a href="">
	<div class="cell ">

		<img class="width-fill" src="/images/case/case1.png" alt="">
		
	</div>

	<h3>澳大利亚150tph石料破碎筛分生产线</h3>
	<p>首先，大块物料有卡车或挖掘机运送至振动给料机，然后又振动给料机均匀地送入颚破的破碎腔中。</p>
	<p class="more">查看详情&nbsp;&nbsp;&nbsp;></p>
	</a>
	
</div>	
<div class="cells">
	<a href="">
	<div class="cell ">

		<img class="width-fill" src="/images/case/case1.png" alt="">
		
	</div>

	<h3>KSA 300TPH Basalt Crushing Project</h3>
	<p>Material: BasaltCapacity: 300TPH (10 hours per day)Output sizes: 10-12, 12-20, 20-25mmEquipment: GZD1300X4900 Vibrating Feeder; PE900X1200 Jaw Crus...</p>
	</a>
	
</div>
<div class="cells">
	<a href="">
	<div class="cell ">

		<img class="width-fill" src="/images/case/case1.png" alt="">
		
	</div>

	<h3>KSA 300TPH Basalt Crushing Project</h3>
	<p>Material: BasaltCapacity: 300TPH (10 hours per day)Output sizes: 10-12, 12-20, 20-25mmEquipment: GZD1300X4900 Vibrating Feeder; PE900X1200 Jaw Crus...</p>
	</a>
	
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