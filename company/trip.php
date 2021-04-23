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
      <h1>여행 정보</h1>
      <p>
        다양한 추천 여행 정보를 확인하세요.
      </p>

    <div style="height:520px; margin-top:30px;">
        <ul style="overflow:hidden;">
            <li style="float:left; width:800px; height:367px; position:relative;">
                <a href="#" style="color:#fff; text-decoration:none;">
                    <span class="grade" style="width:60px; height:70px; position:absolute; top:0; left:25px; display:inline-block; background-color:#000d17; text-align:center; font-size:11px; color:#fff; padding-top:10px; font-weight:400;">
                        <strong style="display:block; font-size:30px; color:#fff; margin-bottom:5px; font-weight:400;">1</strong>
                        "TOP"
                    </span>
                    <span class="img" style="display:block; width:520px; height:520px; object-fit:cover;">
                        <img src="https://image.hanatour.com/usr/cms/resize/800_0/2020/12/21/10000/b5defb14-ff1f-4d63-a221-be5581be5f53.jpg">
                    </span>
                    <span class="cont" style="position:absolute; left:20px; right:20px; bottom:-130px; background-color:transparent; padding:20px; transition:all .3s ease-out;">
                        <p class="item_title">소중한 우리가족의 돌잔치, 기념일을 프라이빗한 하고 럭셔리하게 기념해보세요</p>
                        <p title="[ZEUS][프라이빗파티] 서울 2일#반얀트리 남산 프레지덴셜 스위트 #2인숙박#10인기념일파티#스냅촬영" class="item_title" style="font-size:20px; color:#fff; line-height:32px; word-break:keep-all;">
                        [ZEUS][프라이빗파티] 서울 2일#반얀트리 남산 프레지덴셜 스위트 #2인숙박#10인기념일파티 ...
                        </p>
                        <p title="소중한 우리가족의 돌잔치, 기념일을 프라이빗한 하고 럭셔리하게 기념해보세요" class="item_text" style="font-size:15px; color:transparent; line-height:24px; height:48px; overflow:hidden; margin-top:10px;">
                        소중한 우리가족의 돌잔치, 기념일을 프라이빗한 하고 럭셔리하게 기념해보세요
                        </p>
                        <p class="price_group" style="margin-top:55px; line-height:1.5; maring:0; padding:0; color:#333;">
                            <strong class="price" style="font-size:24px; line-height:25px; color:transparent; font-weight:600; margin:0; padding:0; cursor:pointer;">
                            "3,400,000"
                            <span style="font-size:15px; color:transparent; margin:0; padding:0; font-weight:600; cursor:pointer;">원~</span>
                            </strong>
                        </p>
                    </span>
                </a>
            </li><br/><li></li><br/>
            <li style="float:left; width:800px; height:367px; position:relative;">
                <a href="#" style="color:#fff; text-decoration:none;">
                    <span class="grade" style="width:60px; height:70px; position:absolute; top:0; left:25px; display:inline-block; background-color:#000d17; text-align:center; font-size:11px; color:#fff; padding-top:10px; font-weight:400;">
                        <strong style="display:block; font-size:30px; color:#fff; margin-bottom:5px; font-weight:400;">2</strong>
                        "TOP"
                    </span>
                    <span class="img" style="display:block; width:520px; height:520px; object-fit:cover;">
                        <img src="https://image.hanatour.com/usr/cms/resize/800_0/2016/10/17/10000/3d526fb7-a662-475b-8d67-80269cfd17c5.jpg">
                    </span>
                    <span class="cont" style="position:absolute; left:20px; right:20px; bottom:-130px; background-color:transparent; padding:20px; transition:all .3s ease-out;">
                        <p class="item_title">제주에서 즐기는 우리만의 최고급 허니문을 만나실 수 있습니다. </p>
                        <p title="[허니문자유여행] 제주 3일 #신라호텔 #스위트룸 #컨버터블렌터카 #프라이빗요트 #호텔석식" class="item_title" style="font-size:20px; color:#fff; line-height:32px; word-break:keep-all;">
                        [허니문자유여행] 제주 3일 #신라호텔 #스위트룸 #컨버터블렌터카 #프라이빗요트 #호텔석식
                        </p>
                        <p title="[허니문자유여행] 제주 3일 #신라호텔 #스위트룸 #컨버터블렌터카 #프라이빗요트 #호텔석식" class="item_text" style="font-size:15px; color:transparent; line-height:24px; height:48px; overflow:hidden; margin-top:10px;">
                        [허니문자유여행] 제주 3일 #신라호텔 #스위트룸 #컨버터블렌터카 #프라이빗요트 #호텔석식
                        </p>
                        <p class="price_group" style="margin-top:55px; line-height:1.5; maring:0; padding:0; color:#333;">
                            <strong class="price" style="font-size:24px; line-height:25px; color:transparent; font-weight:600; margin:0; padding:0; cursor:pointer;">
                            "2,990,000"
                            <span style="font-size:15px; color:transparent; margin:0; padding:0; font-weight:600; cursor:pointer;">원~</span>
                            </strong>
                        </p>
                    </span>
                </a>
            </li>
        </ul>
    </div>
      
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