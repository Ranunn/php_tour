<? session_start();?>
<html>
	<head>
		<link href="/basic/css/main1.css" rel="stylesheet" type="text/css">
	</head>
	<header>
		<!-- 세션에 userid가 없을 경우(로그인 X 상태) -->
		<?php 
			if(! $_SESSION['userid'])
			{
		?>
				<div id="login"><a href="/basic/login/login_form.php">Login</a>
				| <a href="/basic/member/join.php">Join</a>
				</div>

		<!-- 세션에 userid가 있을 경우(로그인 상태) -->
		<?php 
			} else {
		?>
				<div id="login"><a href="/basic/login/logout.php">Logout</a>
				| <a href="/basic/member/member_modify.php">Modify</a>
				</div>
		<?php 
			} 
		?>
		
		<!-- 메뉴 start -->
			<div id="logo">
			<h1>	<a href="/basic/index.php">비행기타고가이용</a> </h1>
			</div>
		
			<nav><ul>
				<li><a href="/basic/index.php">예매</a></li>
				<li><a href="/basic/company/welcome.php">항공편형황</a></li>
				<li><a href="#">이벤트</a></li>
				<li><a href="/basic/greet/list.php">예약조회</a></li>
			</ul></nav>
		<!-- 메뉴 end -->
	</header>
</html>
		
	