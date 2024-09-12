

 //JQuery 시작
 $(function(){
    $('#navi, #navi_bg').mouseenter(function(){
        $('#navi .sub_navi, #navi_bg').stop().slideDown('fast');
    }).mouseleave(function(){
        $('#navi .sub_navi, #navi_bg').stop().slideUp('fast');
    });

     //모바일 메뉴 복제
     var naviClon = $('#navi').contents().clone();
     $('.mb_navi_wrap').append(naviClon);

     $('.mb_navi_wrap .main_navi > li > a').append('<div class="arrow"><span class="material-symbols-outlined">stat_minus_1</span></div>');

     //모바일 햄버거버튼 클릭시 메뉴 나옴
    $('#menu').click(function(){
        $('#mb_navi_bg, #mb_navi').stop().animate({
            right : 0
        },300);
        //열렸을때 본문 스크롤바 제거
        $('body').css({overflow:'hidden'});
    });
    $('#mb_navi_bg').click(function(){
        $('#mb_navi_bg, #mb_navi').stop().animate({
            right : '-100%'
        },300);
        $('.mb_navi_wrap .main_navi > li > a').removeClass('active');
        $('.mb_navi_wrap .main_navi > li .sub_navi').slideUp('fast');
        //닫혔을때 본문 스크롤바 나타나게
        $('body').css({overflow:'auto'});
    });

    //메뉴 선택자 변수
    
        var mnavi = $('.main_navi > li > a');

        mnavi.click(function(){
            //대메뉴 클릭 시 활성화와 비활성화가 교대로 발생함
            $(this).toggleClass('active');
            
            //클릭한 대메뉴 이외의 대메뉴에 비활성화
            mnavi.not(this).removeClass('active');

            //클릭한 대메뉴 바로 아래 형제 .sub_navi 슬라이드다운과 슬라이드업이 교대로 발생함
            $(this).find('+.sub_navi').slideToggle('fast');

            //클릭한 대메뉴 이외의 서브메뉴가 모두 닫힘
            mnavi.not(this).find('+.sub_navi').slideUp('fast');

            return false;
        });
        
        //PC화면에서 모바일 메뉴 초기화
    $(window).resize(function(){
        if($(this).outerWidth() > 1000){
            $('.mb_navi_wrap .main_navi > li > a').removeClass('active');
            $('.mb_navi_wrap .main_navi > li .sub_navi').slideUp('fast');
            $('#mb_navi_bg, #mb_navi').css({right:'-100%'});
        }
    });


    //스크롤바
   // $('#mb_navi').mCustomScrollbar({theme:"dark-thin"});
    

 }); //JQuery 종료