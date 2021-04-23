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
		<!-- header start :: flex position의 css를 사용하여 상단 중앙에 헤더가 위치하게 함 -->
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
		<!-- header end -->
		<div class="clear"></div>

		<!-- 본문 start -->
		<article id="login_art" style="display:flex; 
									flex-direction:column; 
									justify-content:center; 
									align-items:center;">
			<h1 style="margin-top:300px;">Login</h1>
			
			<div class="login_box">
				<form name="login_form" method="get" action="login.php">
					<table>
						<tr>
							<td><label>아이디</label></td>
							<td><input type="text" name="userid"></td>
						</tr>
						<tr>
							<td><label>패스워드</label></td>
							<td><input type="password" name="passwd"></td>
						</tr>
					</table>
					</br>
					<span class="btn"><input type="submit" value="로그인하기"></span>
						
				</form>
			</div>
		</article>
		<!-- 본문 end -->
		<div class="clear"></div>

		<footer style="position:fixed; bottom:0px;">
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
		<!-- footer end -->
	</div><!-- wrap -->
	</body>
</html>