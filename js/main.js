const ham = document.getElementById('ham');
const menu_wrapper =
document.getElementById('menu_wrapper');
ham.addEventListener('click', function() {
    ham.classList.toggle('clicked');
    menu_wrapper.classList.toggle('clicked');
});

$(function(){

	var globMenu = $("#global-nav");
	var stWhenGlobMenuOpen = 0;

	 $('#ham').click(function(){
        $(this).toggleClass("active");
        if($(this).hasClass("active")){
            stWhenGlobMenuOpen = $(window).scrollTop();
            globMenu.css({ display: "block", opacity: 0 }).scrollTop(0).animate({opacity: 1}, 400, function(){
                
            });
            setTimeout(function(){
                globMenu.find(".main li a p").addClass("show");
            }, 200);
            wrapper.addClass("fix").css("top", stWhenGlobMenuOpen * -1);
        }else{
            globMenu.fadeOut(400, function(){
                globMenu.find(".main li a p").removeClass("show");
            });
            wrapper.removeClass("fix");
            $("html,body").animate({scrollTop: stWhenGlobMenuOpen}, 0);
        }
        return false;
    });
});
