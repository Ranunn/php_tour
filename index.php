<?php 
	session_start();
	header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");
?>
<html>
	<head>
	<link href="/basic/css/main1.css" rel="stylesheet" type="text/css">
	</head>
	<body>
	
	<div id="wrap">
		<header>
		<?php 
			if(! $_SESSION['userid'])
			{
				?>
				<div id="login"><a href="/basic/login/login_form.php">Login</a>
				| <a href="/basic/member/join.php">Join</a>
				</div>
		<?php 
			} else {
		?>
			<div id="login"><a href="/basic/login/logout.php">Logout</a>
				| <a href="/basic/member/member_modify.php">Modify</a>
				</div>
		<?php } ?>
		
			<div id="logo">
			<h1>	<a href="/basic/index.php">비행기타고가이용</a> </h1>
			</div>
		
			<nav><ul>
				<li><a href="/basic/company/trip.php">여행 정보</a></li>
				<li><a href="/basic/company/booking.php">항공권 정보</a></li>
				<li><a href="/basic/company/event.php">이벤트</a></li>
				<li><a href="/basic/company/service.php">고객센터</a></li>
			</ul></nav>
		</header>
		<div class="clear"></div>
		<div id="main_img">
			<!--img src="images/main_img.jpg" width="971" height="282"-->
			<img src="images/main_test.jpg" width="971" height="402">
		</div>
		<div id="surchtest">
			<div id="surtest1">
				<input type="text" placeholder="출발지">
				<button>검색</button>
			</div>
			<div id="surtest1">
				<input type="text" placeholder="도착지">
				<button>검색</button>
			</div>
			<div id="surtest2">
				<input type="text" placeholder="인원수">
				<button>검색</button>
			</div>
			<div id="surtest2">
				<input type="text" placeholder="출발날짜">
				<button>검색</button>
			</div>
			<div id="surtest2">
				<input type="text" placeholder="도착날짜">
				<button>검색</button>
			</div>
		</div>
		<article id="front">
		<div id = "stest">
			<img src="images/main_stest11.jpg" width="300px" height="300px">
			<img src="images/main_stest12.jpg" width="300px" height="300px">
			<img src="images/main_stest13.jpg" width="300px" height="300px">
		</div>
		<!-- <div id = "stest">
			<img src="images/main_stest14.jpg" width="300px" height="300px">
			<img src="images/main_stest15.jpg" width="300px" height="300px">
			<img src="images/main_stest16.jpg" width="300px" height="300px">
		</div> -->


		<!--<div id="solution">
			<div id="hosting">
				<h3>Web Hosting Solution</h3>
					<p>A web hosting service is a type of Internet hosting service that allows individuals and organizations to make their website accessible via the World Wide Web.</p>
			</div>
			<div id="security">
				<h3>Web Security Solution</h3>
				<p>Web application security is a branch of Information Security that deals specifically with security of websites, web applications and web services.</p>
			</div>
			<div id="payment">
				<h3>Web Payment Solution</h3>
				<p>The consumer uses web pages displayed or additional applications downloaded and installed on the mobile phone to make a payment.</p>
			</div>
		</div>-->
		 <div class="clear"></div>
		 	<div id="news_notice">
		 		<h3 class="brown">회사 소개</h3>
		 		<table>
					<?php
						$urlRoot="http://169.254.169.254/latest/meta-data/";
						echo "<tr><td class='contxt'><b>기업 개요</b></td><td>" . file_get_contents($urlRoot . 'instance-id') . "</td></tr>";
						echo "<tr><td class='contxt'><b>오시는 길</b></td><td>" . file_get_contents($urlRoot . 'placement/availability-zone') . "</td></tr>";
					?>
		 		</table>
		 	</div>
		 	<div id="news_notice">
		 		<h3 class="brown">사업 현황</h3>
		 		<table>
					<?php
						$urlRoot="http://169.254.169.254/latest/meta-data/";
						echo "<tr><td class='contxt'><b>여행 서비스</b></td><td>" . file_get_contents($urlRoot . 'instance-id') . "</td></tr>";
						echo "<tr><td class='contxt'><b>온라인 사업</b></td><td>" . file_get_contents($urlRoot . 'placement/availability-zone') . "</td></tr>";
					?>
		 		</table>
		 	</div>
		</article>
		<footer>
			<hr>
			
			<div id="copy">
			Copyright 2021 BTgogo Inc. all rights reserved 
			contact mail : skybtgogo@btgogo.co.kr Tel: +82 010-1234-1234
			</div>
			<div id="social">
				<img src="/basic/images/facebook.gif" width="33" height="33" alt="Facebook">
				<img src="/basic/images/twitter.gif" width="33" height="33" alt="twitter">
				
			</div>
		</footer>
	</div><!-- wrap -->
	</body>
</html>
