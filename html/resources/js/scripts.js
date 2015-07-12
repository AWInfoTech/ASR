$(function() {
    var currentNavIcon,activeClass
    $(".mainNav li.level1").hover(function() {
        currentNavIcon = $(this).find('span');
        var iconClasses = currentNavIcon.attr('class').split(/\s+/);
        activeClass = iconClasses[1].split('-')[1]+'-hover';
        currentNavIcon.addClass(activeClass);
    },function(){
        currentNavIcon.removeClass(activeClass);
    });

    $('.page2Next').click(function() {
        $('#menuCycle').cycle(1);
        $(this).hide();
        $('.page1Back').show();
		$('.page3Next').show();
        return false;
    });
    $('.page3Next').click(function() {
        $('#menuCycle').cycle(2);
        $(this).hide();
        $('.page1Back').hide();
        $('.page2Back').show();
		$('.page4Next').show();
        return false;
    });
    $('.page2Back').click(function() {
        $('#menuCycle').cycle(1);
        $(this).hide();
        $('.page1Back').show();
        $('.page3Next').show();
		$('.page4Next').hide();
        return false;
    });
	$('.page4Next').click(function() {
        $('#menuCycle').cycle(3);
        $(this).hide();
        return false;
    });
	
    $('.page1Back').click(function() {
        $('#menuCycle').cycle(0);
        $(this).hide();
        $('.page3Next').hide();
        $('.page2Next').show();
        return false;
    });
	$('#bookATable').on('submit',function(e) {
        e.preventDefault();
		//alert($("#bookATable").serialize());return;
        $.post("bookATableCode.php", $("#bookATable").serialize(),  function(response) {
            console.log('>>>>>>>>>>>>'+response);
            if(response == 1) {
                $('#bookATable').find("input[type=text],input[type=date],input[type=email], textarea, select").val("");
                alert('Your request sent successfully! We will revert you back shortly.')
            }else{
                alert('System Error, Please try again later!')
            }
        });
        return false;
    });
    $('.pushMenuBtn').on('click',function(){
        $(this).addClass('pushTriggered');
        $('body').toggleClass('bodyPush');
        $('.mainNav').toggleClass('pushNav');
    });
    $(window).resize(function(){
        $('body').removeClass('bodyPush');
        $('.mainNav').removeClass('pushNav');
    })

    var currentWindowHeight = $(window).height();
    var currentWindowWidth = $(window).width();
    if(currentWindowWidth <= 767){
        $('.homeSlider').height(600);
    }
    $('.ourCulture').click(function(){
        $('html, body').animate({
            scrollTop: $( $(this).attr('rel') ).offset().top
        }, 500);
        return false;
    });
    $('footer ul span').on('click',function(){
        $('footer ul span').text('+');
        $(this).parent().parent().find('ul').slideUp();
        $(this).prev().slideDown();
        $(this).text('-');
    });
});

function getQueryString(sParam)
{
    var sPageURL = window.location.search.substring(1);
    var sURLVariables = sPageURL.split('&');
    for (var i = 0; i < sURLVariables.length; i++)
    {
        var sParameterName = sURLVariables[i].split('=');
        if (sParameterName[0] == sParam)
        {
            return sParameterName[1];
        }
    }
}
var a;