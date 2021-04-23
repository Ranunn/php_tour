<?php 
	session_start();
	header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");
?>
<html>
	<head>
	<link href="/basic/css/main1.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="https://cdn.amplitude.com/libs/amplitude-7.2.1-min.gz.js"></script>
    <script type="text/javascript" src="https://js.appboycdn.com/web-sdk/3.0/appboy.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
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

    <? include "sub_img.php";?>
    <? include "sub_menu.php";?>


    
    <!-- 본문 start -->
    <br/><br/><br/><br/><br/>
      <h1>이벤트 정보</h1>
      <p>
        이벤트로 더욱 풍성한 여행을 즐기세요.
      </p>

    <img src="/basic/images/event.png" width="971px">
    <!-- 본문 end -->

    <br/>
    <!-- footer start :: flex position의 css를 사용하여 하단 중앙에 푸터가 위치하게 함 -->
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