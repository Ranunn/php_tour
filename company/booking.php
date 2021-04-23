<?php 
	session_start();
	header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");
?>
<html>
	<head>
	<link href="/basic/css/main1.css" rel="stylesheet" type="text/css">
    <link rel="alternate" hreflang="x-default" href="https://www.koreanair.com/ot/en/booking/overview/domestic/fare"/>
    <link rel="alternate" hreflang="ko-KR" href="https://www.koreanair.com/kr/ko/booking/overview/domestic/fare"/>
    <link rel="canonical" href="https://www.koreanair.com/kr/ko/booking/overview/domestic/fare"/>
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
      <h1>항공권</h1>
      <p>
        시간대, 요일, 목적지에 따라 다양하고 합리적인 운임을 제공합니다. </br>
        대상별 할인 혜택도 함께 확인하세요.
      </p>
      <br/>
      <div class="sdwt">
        <h2 class="h2">운임 유형</h2>
        <ul class="audit__list _center -col3">
            <li class="audit__item">
                <h3 class="h3">세이버</h3>
                <p class="list__item">합리적인 고객을 위한 가장 저렴한 특가운임으로, 여행 일정이 확정된 분에게 추천합니다.</p>
            </li>
        
            <li class="audit__item">
                <h3 class="h3">스탠다드</h3>
                <p class="list__item">합리적인 운임과 함께 마일리지 적립 혜택을 제공합니다.</p>
            </li>
        
            <li class="audit__item">
                <h3 class="h3">플렉스</h3>
                <p class="list__item">마일리지 적립과 좌석 승급이 가능하고, 개인 자격 요건에 따라 추가 운임 할인을 받을 수 있습니다.</p>
            </li>
        </ul>
    </div>

<br/><br/><br/>

<table border="2" style="text-align:center;">
    <caption>
        운임 유형 상세 <br/><br/>   
    </caption>
    <colgroup>
        <col style="width: 20.0%;" />
        <col style="width: 20.0%;" />
        <col style="width: 20.0%;" />
        <col style="width: 20.0%;" />
        <col style="width: 20.0%;" />
    </colgroup>
    <thead class="table__thead">
        <tr>
            <th class="thead__th _center" id="ca1">운임 조건</th> 
            <th class="thead__th _center" id="ca2">일반석 세이버</th> 
            <th class="thead__th _center" id="ca3">일반석 스탠다드</th> 
            <th class="thead__th _center" id="ca4">일반석 플렉스</th> 
            <th class="thead__th _center" id="ca5">프레스티지</th>
        </tr>
    </thead>
    <tbody class="table__tbody">
        <tr>
            <th class="tbody__th _center" id="ra1">예약 등급</th> 
            <th class="tbody__td _center _left" id="ca2-1" headers="ca2 ra1"><span>K, L, U, N, V</span></th> 
            <th class="tbody__td _center _left" id="ca3-1" headers="ca2 ra1"><span>B, M, S, H, E</span></th> 
            <th class="tbody__td _center _left" id="ca4-1" headers="ca3 ra1"><span>Y</span></th> 
            <th class="tbody__td _center _left" id="ca5-1" headers="ca4 ra1"><span>C</span></th>
        </tr>
        <tr>
            <th class="tbody__th _center" id="ra6">항공권 변경</th> 
            <td class="tbody__td _center _left" headers="ca2 ca2-1 ra6"><span>불가</span></td> 
            <td class="tbody__td _center _left" headers="ca3 ca3-1 ra6"><span>가능</span></td> 
            <td class="tbody__td _center _left" headers="ca4 ca4-1 ra6"><span>가능</span></td> 
            <td class="tbody__td _center _left" headers="ca5 ca5-1 ra6"><span>가능</span></td>
        </tr>
        <tr>
            <th class="tbody__th _center" id="ra7">항공권 환불</th> 
            <td class="tbody__td _center _left" headers="ca2 ca2-1 ra7"><span>7,000원</span></td> 
            <td class="tbody__td _center _left" headers="ca3 ca3-1 ra7"><span>5,000원</span></td> 
            <td class="tbody__td _center _left" headers="ca4 ca4-1 ra7"><span>3,000원</span></td> 
            <td class="tbody__td _center _left" headers="ca5 ca5-1 ra7"><span>3,000원</span></td>
        </tr>
        <tr>
            <th class="tbody__th _center" id="ra5">좌석 승급</th> 
            <td class="tbody__td _center _left" headers="ca2 ca2-1 ra5"><span>불가</span></td> 
            <td class="tbody__td _center _left" headers="ca3 ca3-1 ra5"><span>불가</span></td> 
            <td class="tbody__td _center _left" headers="ca4 ca4-1 ra5"><span>가능</span></td> 
            <td class="tbody__td _center _left" headers="ca5 ca5-1 ra5"><span>-</span></td>
        </tr>
        <tr>
            <th class="tbody__th _center" id="ra4">마일리지 적립</th> 
            <td class="tbody__td _center _left" headers="ca2 ca2-1 ra4 ra4-1">Q, T : 70% <br/> K, L, U, N, V : 0%</td> 
            <td class="tbody__td _center _left" headers="ca3 ca3-1 ra4 ra4-1">100%</td> 
            <td class="tbody__td _center _left" headers="ca4 ca4-1 ra4 ra4-1">100%</td> 
            <td class="tbody__td _center _left" headers="ca5 ca5-1 ra4 ra4-1">125%</td>
        </tr>
        <tr>
            <th class="tbody__th _center" id="ra2">개인 할인</th> 
            <td class="tbody__td _center _left" headers="ca2 ca2-1 ra2"><span class="_hidden">불가</span></td> 
            <td class="tbody__td _center _left" headers="ca3 ca3-1 ra2"><span class="_hidden">불가</span></td> 
            <td class="tbody__td _center _left" headers="ca4 ca4-1 ra2"><span class="_hidden">가능</span></td> 
            <td class="tbody__td _center _left" headers="ca5 ca5-1 ra2"><span class="_hidden">불가</span></td>
        </tr>
        <tr>
            <th class="tbody__th _center" id="ra3">소아 할인</th> 
            <td class="tbody__td _center _left" headers="ca2 ca2-1 ra3"><span class="_hidden">불가</span></td> 
            <td class="tbody__td _center _left" headers="ca3 ca3-1 ra3"><span class="_hidden">불가</span></td> 
            <td class="tbody__td _center _left" headers="ca4 ca4-1 ra3"><span class="_hidden">가능</span></td> 
            <td class="tbody__td _center _left" headers="ca5 ca5-1 ra3"><span class="_hidden">불가</span></td>
        </tr>
        <tr>
            <th class="tbody__th _center" id="ra8">사전 좌석 배정</th> 
            <td class="tbody__td _center _left" headers="ca2 ca2-1 ra8"><span class="_hidden">가능</span></td> 
            <td class="tbody__td _center _left" headers="ca3 ca3-1 ra8"><span class="_hidden">가능</span></td> 
            <td class="tbody__td _center _left" headers="ca4 ca4-1 ra8"><span class="_hidden">가능</span></td> 
            <td class="tbody__td _center _left" headers="ca5 ca5-1 ra8"><span class="_hidden">가능</span></td>
        </tr>
        <tr>
            <th class="tbody__th _center" id="ra9">무료 수하물</th> 
            <td class="tbody__td _center _left" headers="ca2 ca2-1 ra9"><span class="_hidden">가능</span></td> 
            <td class="tbody__td _center _left" headers="ca3 ca3-1 ra9"><span class="_hidden">가능</span></td> 
            <td class="tbody__td _center _left" headers="ca4 ca4-1 ra9"><span class="_hidden">가능</span></td> 
            <td class="tbody__td _center _left" headers="ca5 ca5-1 ra9"><span class="_hidden">가능</span></td>
        </tr>
    </tbody>
</table>

<br/><br/>
<div class="col2">
    <ol class="captions -number">
        <li id="ref2-1" class="captions__item" tabindex="-1">
            적립 불가 조건으로 구매하신 항공권 이용 시에는 마일리지 적립이 불가합니다.
        </li>
    </ol>    
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