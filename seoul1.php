<!DOCTYPE html>
  
<html>
  <head>
    <!--[if IE]><script src="js/index.js"></script><![endif] -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta http-equiv="X-UA-Compatible" contnet="IE-EmulateIE7"/>
     <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="robots" content=" index, follow">
      <meta name="description" content="서울시 홈페이지">
      <link rel="shortcut icon" href="favicon.ico" />

      <!-- <link rel="stylesheet" href="./css/import.css"> -->
      <link rel="stylesheet" href="./css/seoul1.css">
      <link rel="stylesheet" href="./css/style.css">
      <!-- <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.css'> -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <!-- <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'> -->
<link rel='stylesheet prefetch' href='https://unpkg.com/tachyons@4.7.1/css/tachyons.css'>

<link rel="stylesheet" href="css/style.css">
<link href="./css/bootstrap.min.css" rel="stylesheet">

<!-- 부가적인 테마 -->
<link rel="stylesheet" href="./css/bootstrap-theme.css">
<link rel="stylesheet" href="./js/prefixfree.min.js">
<script src="./js/prefixfree.min.js"></script> 


<link rel="stylesheet" href="./css/reset.css">

<!-- <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">-->
<link href="./css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen"> 

    <title>서울특별시</title>
  


  <!-- <link rel="stylesheet" href="./resources/demos/style.css"> -->

    <link rel="stylesheet" href="./css/jquery-ui.css">
    <link rel="stylesheet" href="./css/datepicker.css">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./js/bootstrap.js">

  

  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>

 <link rel="stylesheet" href="css/mobile_menu.css">

<!-- mobile menu -->
<!--   <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="../css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen"> -->

   <link rel="stylesheet" href="css/style33.css">
   <link rel="stylesheet" href="css/nav.css">
   <link rel="stylesheet" href="css/font.css">
   <link rel="stylesheet" href="css/repre.css">

   <!--[if IE]>
    <link rel="stylesheet" href="css/seoul_IE.css"
   <![endif]-->
    



  </head>
  <body>
    <div class="wrapper">
      <div class="upper_container1_1">
        <div class="upper_containerA">
          <h1 class="logo"><img src="./images/common/logo.gif" alt="로고"></h1>


<!-- <div class="menu-collapsed">
   <div class="bar"></div>
   <nav>
      <ul>
         <li><a href="./seoul1_login.html">로그인</a></li>
         <li><a href="./seoul_menu00.html">분야별정보</a></li>
         <li><a href="./seoul_citizen00.html">시민참여</a></li>
         <li><a href="./seoul_introduce00.html">서울소개</a></li>
         <li><a href="#">응답소</a></li>
         <li><a href="#">시민</a></li>
      </ul>
   </nav>
</div>
 --> 
<!--  <img src="./images/common/mobile_menu.png" alt="메뉴"> -->
    <div class="mobile-menu">
      <a class="dropdown-link">
      <!-- 메뉴 -->
      </a>
      <ul class="mobile-dropdown">
        <li><a href="./seoul1_login.html">로그인</a></li>
        <li><a href="./seoul_menu00.html">분야별정보</a></li>
        <li><a href="./seoul_citizen00.html">시민참여</a></li>
        <li><a href="./seoul_introduce00.html">서울소개</a></li>
        <li><a href="#">응답소</a></li>
        <li><a href="#">시민</a></li>
        <li><a href="#">사업자</a></li>
        <li><a href="#">관광객</a></li>
        

      </ul>

    </div>



        <!-- <h3 class="mobile_menu">
        <img src="./images/common/mobile_menu.png" alt="메뉴">
        </h3> -->
        <h1 class="seoul"><a href="./seoul1.html">서울</a></h1>
        <h1 class="empty123">빈곳</h1>
      </div><!-- upper_containerA -->
      </div><!-- upper_container1_1 -->





    <div class="upper_container1_2">
        <nav class="nav2">        
         <ul class="gnb">
         <li> 
         <?php
          echo file_get_contents("list.txt");
          ?>
         </li>

          <!-- <li class="text2" ><a href="./seoul1_login2.html">로그인</a></li>

          <li class="text1"><a href="./seoul_menu00.html">분야별정보</a>
            <ul>
              <li><a href="./seoul_menu01.html">복지</a></li>
              <li><a href="./seoul_menu02.html">여성</a></li>
              <li><a href="./seoul_menu03.html">경제</a></li>
              <li><a href="./seoul_menu04.html">안전</a></li>
              <li><a href="./seoul_menu05.html">주택</a></li>
              <li><a href="./seoul_menu06.html">환경</a></li>
              <li><a href="./seoul_menu07.html">문화</a></li>
              <li><a href="./seoul_menu08.html">건강</a></li>
              <li><a href="./seoul_menu09.html">교통</a></li>
              <li><a href="./seoul_menu10.html">건설</a></li>
              <li><a href="./seoul_menu11.html">세금</a></li>
              <li><a href="./seoul_menu12.html">행정</a></li>
            </ul>

          </li>


          <li class="text3"><a href="./seoul_citizen00.html">시민참여</a>
            <ul>
              <li><a href="./seoul_citizen01.html">시민과의 대화</a></li>
              <li><a href="#">시민청원/제안</a></li>
              <li><a href="./seoul_citizen03.html">시민감사</a></li>
              <li><a href="./seoul_citizen04.html">시민의견</a></li>
              <li><a href="http://mediahub.seoul.go.kr/gongmo2" target="_blank">공모전</a></li>
            </ul>
          </li>

          <li class="text4"><a href="./seoul_introduce00.html">서울소개</a>
            <ul>
              <li><a href="./seoul_introduce01.html">시청안내</a></li>
              <li><a href="./seoul_introduce02.html">서울의 상징</a></li>
              <li><a href="./seoul_introduce03.html">서울의 역사</a></li>
              <li><a href="./seoul_introduce04.html">서울INFO</a></li>
              <li><a href="./seoul_introduce05.html">시민표창</a></li>
             
            </ul>
          </li>


          <li class="text5"><a href="http://eungdapso.seoul.go.kr" target="_blank">응답소</a>
            <ul>
              <li><a href="https://eungdapso.seoul.go.kr/login/loginForm.jsp?writeYN=Y" target="_blank">민원제안신청</a></li>
              <li><a href="https://eungdapso.seoul.go.kr/Mpg/Mpg_not.jsp" target="_blank">민원제안결과</a></li>
              <li><a href="https://eungdapso.seoul.go.kr/Exp/Exp01/Exp01_lis.jsp" target="_blank">민원제안사례</a></li>
              <li><a href="https://eungdapso.seoul.go.kr/Gud/Gud_tab_lis.jsp" target="_blank">민원정보즐겨찾기</a></li>
              <li><a href="https://eungdapso.seoul.go.kr/Cmn/Cmn01/Cmn01_not.jsp" target="_blank">소통현황</a></li>
            </ul>
          </li>


          <li class="text6"><a href="#">시민</a>
            <ul>
              <li><a href="#">서울통계</a></li>
              <li><a href="#">법령정보</a></li>
              <li><a href="#">세금납부</a></li>
              <li><a href="#">도시계획</a></li>
              <li><a href="#">더보기</a></li>
            </ul>
          </li>

          <li class="text7"><a href="#">사업자</a>
            <ul>
              <li><a href="#">자영업지원센터</a></li>
              <li><a href="#">일자리카페</a></li>
              <li><a href="#">전자상거레</a></li>
              <li><a href="#">입찰정보조회</a></li>
              <li><a href="#">더보기</a></li>
            </ul>
          </li>

          <li class="text8"><a href="#">관광객</a>
            <ul>
              <li><a href="#">서울시티투어버스</a></li>
              <li><a href="#">서울특화관광</a></li>
              <li><a href="#">가이드북&지도</a></li>
              <li><a href="#">여행필수정보</a></li>
              <li><a href="#">더보기</a></li>
            </ul>
          </li>

          <li class="empty"><a href="#"></a></li> -->
          
          <li class="language">
            <select class="lang">
              <option><a href="#"> ENGLISH</a></option>
              <option><a href="#"> JAPANESE</a></option>
              <option><a href="#"> CHINESE</a></option>
            </select>
          </li>
        </ul>
     </nav>


  </div><!--// upper_container1_2 -->

      <div class="main_container1_1 carousel">

        <ul class="search_bar">

          <li class="eng_logo"><img src="./images/common/eng_seoul.png" alt="I SEOUL U"></li>
          <li class="search_box">
            <form>
                <div class="input-group">
                  <input id="search" type="text" class="form-control" onfocus="if(this.value =='검색어를 입력하세요') this.value='';" onblur="if(this.value =='') this.value='검색어를 입력하세요';" value="검색어를 입력하세요" method="get">
                  <div class="input-group-btn">
                    <button class="btn btn-default" type="submit">
                      <i class="glyphicon glyphicon-search"></i>
                    </button>
                  </div>
                </div>
            </form>
          </li>

          <li class="empty"></li>
      </ul><!--  search_bar-->


          <ul class="main_box ">
         
            <a class="left carousel-control left_ctr" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>

            <li class="empty"></li>
            <li class="left_box">
              <div class="main_left1"><span class="ttt">오늘</span><br>
               <!--  <div class="clock">
                  <span class="hours"></span>
                  <span class="minutes"></span>
                </div> -->
                <div class="date">
                  
                  <div id="year"></div>
                  <div id="daymonth"></div>
                </div>

            <!--   <span class="sss">
              2017년03월23일</span> -->


              </div>
              <div class="main_left2"><span class="ttt">날씨</span><br><span class="sss">흐림 <h5>12.3C</h5></span></div>
              <div class="main_left3"><span class="ttt">통합대기</span><br><span class="sss">보통</span></div>
              <div class="main_left4"><span class="ttt">도로상황</span><br><span class="sss">소통원활</span></div>
              <div class="main_left5"><a href="#"><span>더보기</span></a></div>
            </li>



              <li class="main_imgbox " >

              <div class="container">

                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    <li data-target="#myCarousel" data-slide-to="4"></li>
                    <li data-target="#myCarousel" data-slide-to="5"></li> 
                    <li data-target="#myCarousel" data-slide-to="6"></li>
                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">

                    <a href="#"><img src="./images/carousel/1.jpg" alt="0" ></a>
                    <div class="rel_text1 rel_box"><a href="#"><div class="rel_text1_title">서울로 7017</div>
                    <div class="rel_text1_sub rel_sub">국내 첫 고가 보행길 '서울로 7017'이 20일 오전 10시 정식 개장했다. <br>1970년 차량길로 준공돼 2017년 17개의 보행길로 다시 태어난다는 의미를 담고 있는 서울로 7017은 2015년 12월13일 공사가 첫 삽을 뜬 이후 525일 만에 시민의 품으로 돌아오게 됐다. </div></a>
                    </div>
                    <!-- <div class="carousel-caption">
                    <h1>서울로 개장</h1>
                    <p>'서울로7017' 개장하였습니다.</p>
                  </div> -->
                    </div>

                    
                    <div class="item">
                    <a href="#"><img src="./images/carousel/22.jpg" alt="1" ></a>
                    <div class="rel_text2 rel_box">
                    <a href="#"><div class="rel_text2_title">밤도깨비야시장</div>
                    <div class="rel_text2_sub rel_sub">3월 24일부터 10월 29일까지 여의도 한강공원, 동대문디자인플라자 (DDP), 청계천, 청계광장, 반포 한강공원 등 서울의 대표적인 곳에서 '2017 서울밤도깨비야시장'이 열린다. <br>각각의 야시장에는 전통놀이공연, 패션쇼, 마술, 미술작품 전시 등 다양한 볼거리를 제공한다.
                      </div></a>
                    </div>
                    </div>


                    <div class="item">
                    <a href="#"><img src="./images/carousel/33.jpg" alt="2" ></a>
                    <div class="rel_text3 rel_box">
                    <a href="#"><div class="rel_text3_title">5월 황금연휴</div>
                    <div class="rel_text3_sub rel_sub">5월 첫째 주는 1일 노동절, 3일 석가탄신일, 5일 어린이날 등 휴일 사이에 평일이 끼어 있는 '샌드위치 연휴'가 있다. 월·수·금요일이 휴일인 상황에서 화요일(2일)과 목요일(4일)을 임시공휴일로 지정하면 4월29일부터 5월7일까지 최장 9일의 '황금연휴'가 만들어질 수 있다. </div></a>
                    </div>
                    </div>

                    <div class="item">
                    <a href="#"><img src="./images/carousel/44.jpg" alt="3"></a>

                    <div class="rel_text4 rel_box">
                    <a href="#"><div class="rel_text4_title">관광객 환대주간</div>
                    <div class="rel_text4_sub rel_sub"> 서울시는 가을철, 외국인 관광객 방문 성수기를 맞이하여 9.25부터 10.5까지 11일간 시내 관광특구 7개 지역에서 ‘2014년 가을시즌 외국인 관광객 환대 주간’ 을 운영한다고 밝혔다. <br>이 행사는 7개 기관이 함께 참여하여 민관 공동협력으로 진행된다.
                    </div></a>
                    </div>
                    </div>

                    <div class="item">
                    <a href="#"><img src="./images/3/korea.jpg" alt="4" ></a>
                    <div class="rel_text5 rel_box">
                    <a href="#"><div class="rel_text5_title">광화문문화마당</div>
                    <div class="rel_text5_sub rel_sub">매년, 전문 예술가와 시민들의 참신한 공연으로 눈길을 끌었던 세종문화회관 대표 야외공연 축제 ‘광화문 문화마당’이 4월 30일(목) 서울시국악관현악단의 화려한 공연을 시작으로 5월 30일(토)까지 총 28회 상설공연으로 열린다.</div></a>
                    </div>
                    </div>
                    
                    <div class="item">
                    <a href="#"><img src="./images/3/night.jpg" alt="5" ></a>
                    <div class="rel_text6 rel_box">
                    <a href="#"><div class="rel_text6_title">'도시의 빛의 연합'</div>
                    <div class="rel_text6_sub rel_sub">이번 소식은 국제도시간 빛의 연출과 디자인을 기반으로 세계의 도시들 사이에 교류와 협력 그리고 회의를 통해 도시 간의 축적된 경험과 기술 나아가 트렌드 등을 공유하고 발전시키기 위해 설립된 국제도시조명연맹(LUCI)에 대한 이야기입니다.  </div></a>
                    </div>
                    </div>

                    <div class="item">
                    <a href="#"><img src="./images/mix/55.jpg" alt="6" ></a>
                    <div class="rel_text7 rel_box">
                    <a href="#"><div class="rel_text7_title">서울시청 청사개방의 날</div>
                    <div class="rel_text7_sub rel_sub"> 서울시청사 투어는 2012년 10월 문을 연 현재의 본청사와 서울도서관으로 탈 바꿈한 옛청사, 지하1,2층에 마련된 시민의 소통공간인 시민청을 문화관광 전문해설사의 설명과 함께 무료로 둘러볼수 있는 투어입니다. </div></a>
                    </div>
                    </div>
                  <!-- Left and right controls <-->
                </div><!--  "carousel-inner-->
              </div><!--  myCarousel-->
            </div><!--  container-->
            </li>
            <a class="right carousel-control right_ctr" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>


            
            <li class="empty"></li>

                  

          </ul>

      </div><!-- main container -->
      <div class="section_container" >
      <!-- id="sortable" -->
        
        <div class="section_box1">

          <div class="box1_left"><img src="./images/common/logo2.png" alt="서울시로고" >
            <div class="left_box1"><a href="http://eungdapso.seoul.go.kr/?tr_code=gnb_eungdapso" target="_blank">민원접수</a></div>
            <div class="left_box2"><a href="http://opengov.seoul.go.kr/?tr_code=gnb_opnegov" target="_blank">정보공개</a></div>
            <div class="left_box3"><a href="https://gov.seoul.go.kr/site?tr_code=service01" target="_blank">전체사이트</a></div>
            <div class="left_box4"><a href="https://www.seoul.go.kr/HomepageCorrect/index.html?tr_code=service02" target="_blank">홈페이지 바로잡기</a></div>
          </div>

          <div class="box1_middleA">
            <div class="middle_box1"><a href="http://www.smc.seoul.kr" target="_blank">시의회</a></div>
            <div class="middle_box2">
              <a href="http://safecity.seoul.go.kr/" target="_blank">안전누리</a></div>
            <div class="middle_box3"><a href="http://iseoul.seoul.go.kr/" target="_blank">보육포털</a></div>
            <div class="middle_box4"><a href="http://korean.visitseoul.net/" target="_blank">서울관광</a></div>
          </div>
          <!--  box1_middleA-->
          <div class="box1_middleB">
            <div class="middle_box5"><a href="http://parks.seoul.go.kr" target="_blank">서울의 공원</a></div>
            <div class="middle_box6"><a href="http://land.seoul.go.kr" target="_blank">부동산정보</a></div>
            <div class="middle_box7"><a href="http://job.seoul.go.kr" target="_blank">서울일자리</a></div>
            <div class="middle_box8"><a href="http://yeyak.seoul.go.kr" target="_blank">서비스예약</a></div>
          </div><!--box1_middleB -->

          <div class="box1_right">
            <div class="right_box1"><span class="blue_bar"><a href="#">소셜시장실</a></span></div>
            <div class="right_box2">
                  <div class="right_box2a">
                    <a href="#">공약&메니페스토</a>
                    <br><a href="#">서울시장 일정</a>
                    <!-- <br><a href="#">서울시장 소식</a> -->
                    <br><a href="#">서울시장 소개</a>
                  </div>
                  <div class="right_box2b">
                    <a href="#">정책토론회</a>
                    <br><a href="#">원순씨에게 바랍니다</a>
                  </div>
          </div><!-- right_box2 -->
        </div><!--box1_right-->

        </div><!-- section_box1 -->


        <div class="section_box4">
        <!-- <p></p> -->
           <!-- box2_wrap이랑 box4_wrap 교체했음(change box2_wrap for box4_wrap )-->
        
        

          <div class="box4_wrap ">
             <div class="mw8 center pv4 ph3" id="dashboard">
              <section class="flex-m flex-l nl3-m nr3-m nl3-l nr3-l">
                <article class="w-100 w-75-m w-75-l ph3-m ph3-l">
                  <header class="mb3">
                    
                    <h2 class="fw3 dark-gray mt0 mb0"><a href="#">서울시 생활지수</a></h2>
                    <h2 class="ttu mt0 mb1 f6 fw5 silver">2017.5.12 06:00</h2>
                  </header>
                  <!-- <hr class="o-20" /> -->
                  <div class="flex-m flex-l flex-wrap items-center justify-between nl3 nr3 pt4 mb4">
                    <div class="w-100 w-50-m w-33-l ph3 tc mb4 mb0-l ">
                      <div class="w-50 w-50-m w-75-l center">
                        <doughnut :labels="newVsReturning.labels" :data="newVsReturning.data"></doughnut>
                      </div>
                      <h3 class="mt3 mb1 f6 fw5 silver">교통지수</h3>
                      <h4 class="dark-gray f3 fw3 mv0"><a href="#"><span class="firstA">주의</span></a></h4>
                    </div>
                  <div class="w-100 w-50-m w-33-l ph3 tc mb4 mb0-l">
                    <div class="w-50 w-50-m w-75-l center">
                      <doughnut :labels="newVsRecurring.labels" :data="newVsRecurring.data"></doughnut>
                    </div>
                    <h3 class="mt3 mb1 f6 fw5 silver">대기지수</h3>
                    <h4 class="dark-gray f3 fw3 mv0"><a href="#"><span class="secondA">미세먼지 보통</span></a></h4>
                  </div>
                  <div class="w-100 w-50-m w-33-l ph3 tc mb4 mb0-l zzz333">
                    <div class="w-50 w-50-m w-75-l center">
                      <doughnut :labels="directVsReferrals.labels" :data="directVsReferrals.data"></doughnut>
                    </div>
                    <h3 class="mt3 mb1 f6 fw5 silver">질병</h3>
                    <h4 class="dark-gray f3 fw3 mv0"><a href="#">모기예보 1단계</a></h4>
                  </div>
                </div>
                  
              </article>
            </section>
          </div>
            <!-- <div class="box4_1"><img src="./images/main/box4.png" alt="공지사항 사진"></div>
            <div class="box4_2"><a href="#">17년 모집개요<br>모집인원: 총 5000명<br>자격기준: 만14세 이하(2003.3.31 이후 아동의 부모(친권자)) <br>-공고일 기준 만 18세 이상 서울시 거주자로 소득인정</a></div> -->
         </div>

      </div>
               <!--  section_box4 end-->




        <div class="section_box3"><p><a href="#">새소식</a></p>
           <?php
           echo file_get_contents("section_box3.txt");
           ?>
          <!-- <div class="box3_1"><a href="./seoul_menu07.html"><img src="./images/main/box3-11.png" alt="3-1"><h4>공연별행사<br>프로그램</h4></a>
          <span>문화</span>
          </div> -->
          <!-- <div class="box3_2"><a href="./seoul_menu06.html"><img src="./images/main/box3-22.png" alt="3-2"><h4>도시가족<br>주말농부</h4></a>
           <span>환경</span>
           </div>
          <div class="box3_3"><a href="./seoul_menu09.html"><img src="./images/main/box3-33.png" alt="3-3"><h4>주말버스<br>막차연장</h4></a>
          <span>교통</span>
          </div>
          <div class="box3_4"><a href="./seoul_menu04.html"><img src="./images/main/box3-444.png" alt="3-4"><h4>안전의날<br>소방훈련</h4></a>
          <span>안전</span>
          </div>
          <div class="box3_5"><a href="./seoul_menu01.html"><img src="./images/main/box3-55.png" alt="3-5"><h4> 자영업<br>지원센터</h4></a>
          <span>복지</span>
          </div>
          <div class="box3_6"><a href="./seoul_menu12.html"><img src="./images/main/box3-66.png" alt="3-6"><h4>시민참여단<br>모집</h4></a>
          <span>행정</span>
          </div> -->
          <!-- <div class="box3_7">도시농업박람회<br>국제컨퍼런스</div>
          <div class="box3_8">시민참여단<br>모집</div> -->
          <!-- <span class="forAll"><a href="#">전체보기</a></span> -->
        </div>
        <!--  section_box3 end-->

<div class="section_box2">
          <!-- box2_wrap이랑 box4_wrap 교체했음(change box2_wrap for box4_wrap )-->
        <div class="box2_wrapper">

          <div role="tabpanel" class="tabpanel">
            <ul class="nav nav-tabs nav-justified" role="tablist" id="myTab">
               <!--  <li role="presentation" class="active" ><a href="#home" aria-controls="home" role="tab" data-toggle="tab">
              <img src="./images/3/culture5.png" alt=""> 분야별정보</a></li>-->

              <!--<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">
               <img src="./images/3/hetch.png" alt=""> 
              정보공개</a></li>-->
            </ul>

            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="home">
                <!-- <ul class="box2_1">
                  <li class="btn1"><a href="./seoul_menu01.html">복지</a></li>
                  <li class="btn2"><a href="./seoul_menu02.html">여성</a></li>
                  <li class="btn3"><a href="./seoul_menu03.html">경제</a></li>
                  <li class="btn4"><a href="./seoul_menu04.html">안전</a></li>
                 </ul>
               <ul class="box2_2">
                  <li class="btn5"><a href="./seoul_menu05.html">주택</a></li>
                  <li class="btn6"><a href="./seoul_menu06.html">환경</a></li>
                  <li class="btn7"><a href="./seoul_menu07.html">문화</a></li>
                  <li class="btn8"><a href="./seoul_menu08.html">건강</a></li>
               </ul>
               <ul class="box2_3">
                <li class="btn9"><a href="./seoul_menu09.html">교통</a></li>
                <li class="btn10"><a href="./seoul_menu10.html">건설</a></li>
                <li class="btn11"><a href="./seoul_menu11.html">세금</a></li>
                <li class="btn12"><a href="./seoul_menu12.html">행정</a></li>
              </ul> -->
                          <!-- <a class="twitter-timeline"  href="https://twitter.com/hashtag/%EC%84%9C%EC%9A%B8%EC%8B%9C" data-widget-id="867191433295314944"><img src="./images/big/twitter00.png" height="270px" alt=""></a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script> -->


                        <a class="twitter-timeline"  href="https://twitter.com/hashtag/%EC%84%9C%EC%9A%B8%EC%8B%9C" data-widget-id="867191433295314944">#서울시 관련 트윗</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
          
          
            </div>

             
            </div>

          </div>
          

<!-- 
            <ul class="box3">
              <li class="btn_line"></li>
              <li class="btn_more"><a href="#">서비스 전체보기</a></li>
            </ul> -->
          </div>

        </div><!--  section_box2 end-->

        


        <div class="section_box5"><p><a href="#">추천정보</a></p>
         <?php
           echo file_get_contents("section_box5.txt");
           ?>
          <!-- <div class="box5_1"><a href="./seoul_menu07.html"><img src="./images/main/box5-11.png" alt="5-1"><h4>축제정보<br> 전등축제</h4></a>
          <span>문화</span>
          </div>
          <div class="box5_2"><a href="#"><img src="./images/3/seoulo.png" alt="5-2"><h4>'서울로 7017'<br>5월 개장합니다</h4></a>
          <span>공지</span>
          </div>
          <div class="box5_3"><a href="./seoul_menu12.html"><img src="./images/main/box5-33.png" alt="5-3"><h4>정의가 있는<br>나라</h4></a>
          <span>행정</span>
          </div>
          <div class="box5_4"><a href="./seoul_menu12.html"><img src="./images/main/s.png" alt="5-3"><h4>촛불 시위<br>주말 집회</h4></a>
          <span>행정</span>
          </div> -->

        </div><!--  section_box5-->




        <div class="section_box6"><p><a href="#">지역별행사</a></p>
          <div class="box6_wrapper">



            <div class="box6_upper">



              <div class="box6_left">


                  <div class="btn-group box6_left1">
<!-- 
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                   날짜선택 <span class="caret"></span>
                  </button>
                 
                  </ul >
                -->


                 

                    <p>
                      <input type="date" id="datePicker" ">
                    </p>


                  </div>



                <div class="btn-group box6_left2">
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    지역 <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu btnbtn2" role="menu">
                    <li><a href="#">강남구</a></li>
                    <li><a href="#">강동구</a></li>
                    <li><a href="#">강북구</a></li>
                    <li><a href="#">강서구</a></li>
                    <li><a href="#">관악구</a></li>
                    <li><a href="#">광진구</a></li>
                    <li><a href="#">구로구</a></li>
                    <li><a href="#">금천구</a></li>
                    <li><a href="#">노원구</a></li>
                    <li><a href="#">도봉구</a></li>
                    <li><a href="#">동대문구</a></li>
                    <li><a href="#">동작구</a></li>
                    <li><a href="#">마포구</a></li>
                    <li><a href="#">서대문구</a></li>
                    <li><a href="#">서초구</a></li>
                    <li><a href="#">성동구</a></li>
                    <li><a href="#">성북구</a></li>
                    <li><a href="#">송파구</a></li>
                    <li><a href="#">양천구</a></li>
                    <li><a href="#">영등포구</a></li>
                    <li><a href="#">용산구</a></li>
                    <li><a href="#">은평구</a></li>
                    <li><a href="#">종로구</a></li>
                    <li><a href="#">중구</a></li>
                    <li><a href="#">중랑구</a></li>
                    <li class="divider"></li>
                    <li><a href="#">그 외 지역</a></li>
                  </ul>
                </div>


                <div class="btn-group box6_left3">
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                   카테고리 <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">공연</a></li>
                    <li><a href="#">미술, 전시</a></li>
                    <li><a href="#">쇼핑</a></li>
                    <li><a href="#">교육</a></li>

                  </ul >
                </div>
              </div>  <!--  left-->




               <div class="scroll-pane">

              <ul class="box6_middle">
               <li class="box6_middle1"><a href="#"> <div class="middle_inner">1.보라매공원은 화요일과 목요일 오후 3시</div></a></li>
                <li class="box6_middle2"><a href="#"><div  class="middle_inner">2.신도림역 그린컴퓨터학원 정전</div></a></li>
                <li class="box6_middle3"><a href="#"><div  class="middle_inner">3.남산공원은 토요일 석호정 활쏘기</div></a></li>
                <li class="box6_middle4"><a href="#"><div class="middle_inner">4.부천 김경래씨가 매일 지각을 하여 논란이 </div></a></li>
                <li class="box6_middle5"><a href="#"><div class="middle_inner">5.올해 실업자교육과정 취업률 1%..</div></a></li>
                <li class="box6_middle6"><a href="#"> <div class="middle_inner">6.보라매공원은 화요일 오후 3시에</div></a></li>
                 <li class="box6_middle7"><a href="#"><div  class="middle_inner">7.신도림역 그린컴퓨터학원 정전</div></a></li>
                 <li class="box6_middle8"><a href="#"><div  class="middle_inner">8.남산공원은 토요일 국궁장에서 활쏘기</div></a></li>
                 <li class="box6_middle9"><a href="#"><div class="middle_inner">9.부천 김경래씨가 매일 지각을 하여 논란이 </div></a></li>
                 <li class="box6_middle10"><a href="#"><div class="middle_inner">10.시청에서 촛불집회.</div></a></li>

              </ul>
              </div>

                <div class="box6_right">
                 

          <!-- <div id="map">
                  </div> -->
                    <!-- <img src="./images/map-bg.png" alt=""> -->

                    <!-- <a href="#"><img src="./images/map-bg.png" alt=""></a> -->
              
             

                <div class="tiles">
                  
                  <div class="tile" data-scale="2.4" data-image="./images/map.png"></div>
                </div>


                 <!--  <input type="button" value="white" onclick="document.getElementById('map').className='white'"> -->
  

                </div>
              </div><!-- box6_upper -->

            <div class="box6_lower">
              <div class="box6_lower1"><a href="http://facebook.com"><input type="button" value="SNS계정연결"></a></div>
              <div class="box6_lower2"><a href="https://play.google.com/store"><input type="button" value="APP다운로드"></a></div>
              <div class="box6_lower3"><a href="http://www.spo.go.kr"><input type="button" value="의견남기기"></a></div>
            </div><!--  box6_lower-->

          </div><!--  box6_wrapper-->


        </div>
        <!--section_box6  -->
       <!--  <div class="banner">
          <img src="./images/main/repre_12.jpg" alt="">
        </div> -->

      <a href="#" title="궁금하신게 있으면 물어보세요" onclick="myFunction()" ><div id="floatMenu"></div></a>

      


    
      </div><!--  section_container end-->
      
      <div class="lower_container">
      <p><a href="./repre.html">담당자</a></p>
        <div class="section_box7">



          <div class="slick marquee lightbox-gallery">

            <div class="slick-slide">
              <div class="inner">
          <div class="repre1"><a href="#"><img src="./images/repre/repre_001.png" alt="노회찬 노동정책관"/><br><span>노회찬</span><br>노동정책관</a></div></div></div>
          <div class="slick-slide">
            <div class="inner">
          <div class="repre1"><a href="#"><img src="./images/repre/repre_002.png" alt="강금실 정무부시장"/><br><span>강금실</span><br>정무부시장</a></div></div></div>
          <div class="slick-slide">
            <div class="inner">
          <div class="repre1"><a href="#"><img src="./images/repre/repre_003.png" alt="박원순 시장"/><br><span>박원순</span><br>시장</a></div></div></div>
          <div class="slick-slide">
            <div class="inner">
          <div class="repre1"><a href="#"><img src="./images/repre/repre_004.png" alt="손혜원 감사위원"/><br><span>손혜원</span><br>감사위원</a></div></div></div>
          <div class="slick-slide">
            <div class="inner">
          <div class="repre1"><a href="#"><img src="./images/repre/repre_005.png" alt="심상정 행정1부시장"/><br><span>심상정</span><br>행정1부시장</a></div></div></div>
          <div class="slick-slide">
            <div class="inner">
          <div class="repre1"><a href="#"><img src="./images/repre/repre_006.png" alt="표창원 행정2부시장"/><br><span>표창원</span><br>행정2부시장</a></div></div></div>
          <div class="slick-slide">
            <div class="inner">
          <div class="repre1"><a href="#"><img src="./images/repre/repre_007.png" alt="이정희 혁신기획관"/><br><span>이정희</span><br>혁신기획관</a></div></div></div>
          <div class="slick-slide">
            <div class="inner">
          <div class="repre1"><a href="#"><img src="./images/repre/repre_008.png" alt="김고은 소통기획관"/><br><span>김고은</span><br>소통기획관</a></div></div></div>
          <div class="slick-slide">
            <div class="inner">
        <div class="repre1"><a href="#"><img src="./images/repre/repre_009.png" alt="안희정 정보기획관"><br><span>안희정</span><br>정보기획관</a></div></div></div>
        <div class="slick-slide">
          <div class="inner">
        <div class="repre1"><a href="#"><img src="./images/repre/repre_010.png" alt="박주민 민생경찰단"/><br><span>박주민</span><br>민생경찰단</a></div></div></div>
        <div class="slick-slide">
          <div class="inner">
        <div class="repre1"><a href="#"><img src="./images/repre/repre_011.png" alt="이재명 일자리정책관"/><br><span>이재명</span><br>일자리정책관</a></div></div></div>
        <div class="slick-slide">
          <div class="inner">
        <div class="repre1"><a href="#"><img src="./images/repre/repre_012.png" alt="강지영 감사위원"/><br><span>강지영</span><br>감사위원</a></div></div></div>
        <div class="slick-slide">
              <div class="inner">
          <div class="repre1"><a href="#"><img src="./images/repre/repre_013.png" alt="금태섭 노동정책관"/><br><span>금태섭</span><br>노동정책관</a></div></div></div>
          <div class="slick-slide">
            <div class="inner">
          <div class="repre1"><a href="#"><img src="./images/repre/repre_014.png" alt="박영선 정무부시장"/><br><span>박영선</span><br>정무부시장</a></div></div></div>
          <div class="slick-slide">
            <div class="inner">
          <div class="repre1"><a href="#"><img src="./images/repre/repre_015.png" alt="추미애 혁신기획관"/><br><span>추미애</span><br>혁신기획관</a></div></div></div>
          <div class="slick-slide">
            <div class="inner">
          <div class="repre1"><a href="#"><img src="./images/repre/repre_016.png" alt="강경화 감사위원"/><br><span>강경화</span><br>감사위원</a></div></div></div>
          <div class="slick-slide">
            <div class="inner">
          <div class="repre1"><a href="#"><img src="./images/repre/repre_017.png" alt="이규철 행정1부시장"/><br><span>이규철</span><br>행정1부시장</a></div></div></div>
          <div class="slick-slide">
            <div class="inner">
          <div class="repre1"><a href="#"><img src="./images/repre/repre_018.png" alt="정청래 행정2부시장"/><br><span>정청래</span><br>행정2부시장</a></div></div></div>
          <div class="slick-slide">
            <div class="inner">
          <div class="repre1"><a href="#"><img src="./images/repre/repre_019.png" alt="정봉주 혁신기획관"/><br><span>정봉주</span><br>혁신기획관</a></div></div></div>
          <div class="slick-slide">
            <div class="inner">
          <div class="repre1"><a href="#"><img src="./images/repre/repre_020.png" alt="유승민 소통기획관"/><br><span>유승민</span><br>소통기획관</a></div></div></div>
          <div class="slick-slide">
            <div class="inner">
        <div class="repre1"><a href="#"><img src="./images/repre/repre_021.png" alt="진선미 정보기획관"/><br><span>진선미</span><br>정보기획관</a></div></div></div>
        <div class="slick-slide">
          <div class="inner">
        <div class="repre1"><a href="#"><img src="./images/repre/repre_022.png" alt="이해찬 민생경찰단"/><br><span>이해찬</span><br>민생경찰단</a></div></div></div>
        <div class="slick-slide">
          <div class="inner">
        <div class="repre1"><a href="#"><img src="./images/repre/repre_023.png" alt="송영길 일자리정책관"/><br><span>송영길</span><br>일자리정책관</a></div></div></div>
        <div class="slick-slide">
          <div class="inner">
        <div class="repre1"><a href="#"><img src="./images/repre/repre_024.png" alt="도종환 일자리정책관"/><br><span>도종환</span><br>일자리정책관</a></div></div></div>
        <div class="slick-slide">
          <div class="inner">
        <div class="repre1"><a href="#"><img src="./images/repre/repre_025.png" alt="김상조 일자리정책관"/><br><span>김상조</span><br>일자리정책관</a></div></div></div>
        <div class="slick-slide">
          <div class="inner">
        <div class="repre1"><a href="#"><img src="./images/repre/repre_026.png" alt="송영길 일자리정책관"/><br><span>이재정</span><br>일자리정책관</a></div></div></div>
        <div class="slick-slide">
          <div class="inner">
        <div class="repre1"><a href="#"><img src="./images/repre/repre_027.png" alt="안민석 일자리정책관"/><br><span>안민석</span><br>일자리정책관</a></div></div></div>
        <div class="slick-slide">
          <div class="inner">
        <div class="repre1"><a href="#"><img src="./images/repre/repre_028.png" alt="조응천 일자리정책관"/><br><span>조응천</span><br>일자리정책관</a></div></div></div>
        <div class="slick-slide">
          <div class="inner">
        <div class="repre1"><a href="#"><img src="./images/repre/repre_029.png" alt="김종대 일자리정책관"/><br><span>김종대</span><br>일자리정책관</a></div></div></div>
        <div class="slick-slide">
          <div class="inner">
        <div class="repre1"><a href="#"><img src="./images/repre/repre_030.png" alt="김현아 일자리정책관"/><br><span>김현아</span><br>일자리정책관</a></div></div></div>
        <div class="slick-slide">
          <div class="inner">
        <div class="repre1"><a href="#"><img src="./images/repre/repre_031.png" alt="김홍걸 일자리정책관"/><br><span>김홍걸</span><br>일자리정책관</a></div></div></div>
       <div class="slick-slide">
          <div class="inner">
        <div class="repre1"><a href="#"><img src="./images/repre/repre_032.png" alt="김광진 일자리정책관"/><br><span>김광진</span><br>일자리정책관</a></div></div></div>
        <div class="slick-slide">
          <div class="inner">
        <div class="repre1"><a href="#"><img src="./images/repre/repre_033.png" alt="정세균 일자리정책관"/><br><span>정세균</span><br>일자리정책관</a></div></div></div>
         <div class="slick-slide">
          <div class="inner">
        <div class="repre1"><a href="#"><img src="./images/repre/repre_034.png" alt="이철희 일자리정책관"/><br><span>이철희</span><br>일자리정책관</a></div></div></div>
         <div class="slick-slide">
          <div class="inner">
        <div class="repre1"><a href="#"><img src="./images/repre/repre_035.png" alt="주진형 일자리정책관"/><br><span>주진형</span><br>일자리정책관</a></div></div></div>
         <div class="slick-slide">
          <div class="inner">
        <div class="repre1"><a href="#"><img src="./images/repre/repre_036.png" alt="제윤경 일자리정책관"/><br><span>제윤경</span><br>일자리정책관</a></div></div></div>
         <div class="slick-slide">
          <div class="inner">
        <div class="repre1"><a href="#"><img src="./images/repre/repre_037.png" alt="정태인 일자리정책관"/><br><span>정태인</span><br>일자리정책관</a></div></div></div>
         <div class="slick-slide">
          <div class="inner">
        <div class="repre1"><a href="#"><img src="./images/repre/repre_038.png" alt="이정미 일자리정책관"/><br><span>이정미</span><br>일자리정책관</a></div></div></div>
         <div class="slick-slide">
          <div class="inner">
        <div class="repre1"><a href="#"><img src="./images/repre/repre_039.png" alt="홍익표 일자리정책관"/><br><span>홍익표</span><br>일자리정책관</a></div></div></div>
         <div class="slick-slide">
          <div class="inner">
        <div class="repre1"><a href="#"><img src="./images/repre/repre_040.png" alt="신수미 일자리정책관"/><br><span>신수미</span><br>일자리정책관</a></div></div></div>
       
       
       



      </div>
          


        </div>
      </div><!-- lower_container  -->



      <footer> 
      <div class="last_container">
        <div class="footer_A"><a href="#"><img src="./images/common/call120.gif" alt="120"></a>
          <p><a href="#">홈페이지 도우미</a>  │ <a href="#"> 개인정보 처리방침 </a> │ <a href="#"> 영상정보처리기기 </a> │ <a href="#"> 운영 관리방침 </a> │<a href="#">  홈페이지 바로잡기</a> │<a href="#"> 사이트맵</a></p>

              <div class="footer_icon">
                <a href="#"><img src="./images/common/icon_rss.gif" alt="rss" ></a>
                <a href="#"><img src="./images/common/icon_twitter.gif" alt="twitter" ></a>
                <a href=""><img src="./images/common/icon_facebook.gif" alt="facebook"></a>
              </div>
         </div>
          <!--  footer_A-->
        <div class="footer_B"><p>서울특별시청 04524 서울특별시 중구 세종대로 110 <span>[찾아오시는 길]</span> 전화번호 : 02) 120 <br>© Seoul Metropolitan Government all rights reserved</p>
        </div>
        </div>
      </footer>





 </div><!--  wrapper-->
 <script>document.write('<script src="http://' + (location.host || '${1:localhost}').split(':')[0] + ':${2:35729}/livereload.js?snipver=1"></' + 'script>')</script>


  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js'></script>
<link rel='stylesheet prefetch' href='http://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css'>


    <script src="./js/index2.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
     <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

   
    <link rel="stylesheet" href="./css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  

    <script>document.write('<script src="http://' + (location.host || '${1:localhost}').split(':')[0] + ':${2:35729}/livereload.js?snipver=1"></' + 'script>')</script>

    <script src='js/jquery.js'></script>
    <script src='js/jquery-ui.js'></script>


    <script>document.getElementById('datePicker').valueAsDate = new Date();</script>



     <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js'></script>

    <script src="js/index.js"></script>
      



    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index5.js"></script>
   


<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


 <script src="js/search.js"></script>



  <!-- 달력 아이콘 기능 -->
<script>
  $( function() {
    $( "#datepicker" ).datepicker({
      showOn: "button",
      buttonImage: "images/calendar.gif",
      buttonImageOnly: true,
      buttonText: "Select date"
    });
  } );
  </script>



 <script src="js/floatmenu.js"></script>




<script>
  $( function() {
    $( document ).tooltip({
      track: true
    });
  } );
  </script>

  <script>
function myFunction() {
    alert("서비스 준비중입니다")
}
</script>

            


     <script src="js/index6.js"></script>
     <script src="js/date.js"></script>
     <script src="js/map.js"></script>


  </body>



                  

 
</html>











<!--  -->
