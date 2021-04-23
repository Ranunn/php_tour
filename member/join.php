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

    <? include "sub_img.php";?>
    <? include "sub_menu.php";?>


    
    <!-- 본문 start -->
    <article style="display:flex; 
                  flex-direction:column; 
                  justify-content:center; 
                  align-items:center;">
      <h1 style="margin-top:300px;">회원가입</h1>
      <br/>

      <form id="join" method="get" action="./member_insert.php">
      <fieldset>
        <legend>회원정보 입력</legend>
        <table>
          <tr>
          <td><label>ID</label></td>
          <td><input name="id" type="text" class="id"></td>
          </tr>
          <tr>
          <td><label>비밀번호</label></td>
          <td><input name="passwd" type="password" class="pass"></td>
          </tr>
          <tr>
          <td><label>비밀번호 확인</label></td>
          <td><input name="pass_confirm" type="password" class="pass"></td>
          </tr>
          <tr>
          <td><label>이름</label></td>
          <td><input name="name" type="text" class="nick"></td>
          </tr>
          <tr>
          <td><label>닉네임</label></td>
          <td><input name="nick" type="text" class="nick"></td>
          </tr>
          <tr>
          <td><label>휴대폰</label></td>
          <td><input name="hp" type="text" class="mobile"></td>
          </tr>
          <tr>
          <td><label>E-Mail</label></td>
          <td><input name="e-mail" type="email" class="email"></td>
          </tr>
        </table>
      </fieldset>
        <div id="buttons">
          <input type="submit" value="Submit" class="submit" style="height:37px; max-height:54.75vh; font-size:14.15px; border-radius:4px; /* background-color:#1967d2; */ margin:10px; cursor:pointer;">
          <input type="button" value="Cancel" class="cancel" onClick="javascript:location.href='../index.php';" style="height:37px; max-height:54.75vh; font-size:14.15px; border-radius:4px; /* background-color:#8ab4f8; */ margin:10px; cursor:pointer;">
        </div>
      </form>
    </article>
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






