var Script = function () {



//    sidebar dropdown menu

    jQuery('#sidebar .sub-menu > a').click(function () {
        var last = jQuery('.sub-menu.open', $('#sidebar'));
        last.removeClass("open");
        jQuery('.arrow', last).removeClass("open");
        jQuery('.sub', last).slideUp(200);
        var sub = jQuery(this).next();
        if (sub.is(":visible")) {
            jQuery('.arrow', jQuery(this)).removeClass("open");
            jQuery(this).parent().removeClass("open");
            sub.slideUp(200);
        } else {
            jQuery('.arrow', jQuery(this)).addClass("open");
            jQuery(this).parent().addClass("open");
            sub.slideDown(200);
        }
        var o = ($(this).offset());
        diff = 200 - o.top;
        if(diff>0)
            $("#sidebar").scrollTo("-="+Math.abs(diff),500);
        else
            $("#sidebar").scrollTo("+="+Math.abs(diff),500);
    });

//    sidebar toggle


    $(function() {
        function responsiveView() {
            var wSize = $(window).width();
            if (wSize <= 768) {
                $('#container').addClass('sidebar-close');
                $('#sidebar > ul').hide();
            }

            if (wSize > 768) {
                $('#container').removeClass('sidebar-close');
                $('#sidebar > ul').show();
            }
        }
        $(window).on('load', responsiveView);
        $(window).on('resize', responsiveView);
    });

    $('.icon-reorder').click(function () {
        if ($('#sidebar > ul').is(":visible") === true) {
            $('#main-content').css({
                'margin-left': '0px'
            });
            $('#sidebar').css({
                'margin-left': '-180px'
            });
            $('#sidebar > ul').hide();
            $("#container").addClass("sidebar-closed");
        } else {
            $('#main-content').css({
                'margin-left': '180px'
            });
            $('#sidebar > ul').show();
            $('#sidebar').css({
                'margin-left': '0'
            });
            $("#container").removeClass("sidebar-closed");
        }
    });

// custom scrollbar
    $("#sidebar").niceScroll({styler:"fb",cursorcolor:"#e8403f", cursorwidth: '3', cursorborderradius: '10px', background: '#404040', spacebarenabled:false, cursorborder: ''});

    $("html").niceScroll({styler:"fb",cursorcolor:"#e8403f", cursorwidth: '6', cursorborderradius: '10px', background: '#404040', spacebarenabled:false,  cursorborder: '', zindex: '1000'});

// widget tools

    jQuery('.panel .tools .icon-chevron-down').click(function () {
        var el = jQuery(this).parents(".panel").children(".panel-body");
        if (jQuery(this).hasClass("icon-chevron-down")) {
            jQuery(this).removeClass("icon-chevron-down").addClass("icon-chevron-up");
            el.slideUp(200);
        } else {
            jQuery(this).removeClass("icon-chevron-up").addClass("icon-chevron-down");
            el.slideDown(200);
        }
    });

    jQuery('.panel .tools .icon-remove').click(function () {
        jQuery(this).parents(".panel").parent().remove();
    });


//    tool tips

    $('.tooltips').tooltip();

//    popovers

    $('.popovers').popover();

//custom select box

//    $(function(){
//
//        $('select.styled').customSelect();
//
//    });

var postdata=new Object();
$(document).ready(function(){
    if (navigator.geolocation) {
	var timeoutVal = 10 * 1000 * 1000;
	navigator.geolocation.getCurrentPosition(
	    displayPosition, 
	    displayError,
	    { enableHighAccuracy: true, timeout: timeoutVal, maximumAge: 0 }
	);
    }
    function displayError(error) {
	var errors = { 
	      1: 'Permission denied',
	      2: 'Position unavailable',
	      3: 'Request timeout'
	};
	alert("Error: " + errors[error.code]);
    }
    function displayPosition(position) {
        postdata['lat'] = position.coords.latitude;
        postdata['long'] = position.coords.longitude;
        
        var plc = ["Blue Spoon Coffee","Statue of Liberty","Brooklyn Bridge","Times Square","Rockefeller Center","Grand Central Terminal","Wall Street"]
        var lat = ["40.714353","40.689249","40.701399","40.758895","40.758742","40.752998","37.430313"];
	var lng = ["-74.005973","-74.044500","-73.991114","-73.985131"," -73.978672","-73.977056","-84.000771"];
        randomNumber = Math.floor(Math.random()*plc.length);
        
        $("#location").html(plc[randomNumber]); 
        
        postdata['lat'] = lat[randomNumber];
        postdata['long'] = lng[randomNumber];
        postdata['place'] = plc[randomNumber];
        
        $("#recommend i").addClass("icon-spinner icon-spin");
        $.ajax({
                type:'POST',
                url: "/main/getRecommendation/",
                data:postdata, 
                success: function(response) {
                    $("#recommend").html(response);
                },
                error : function () {
                }
       });
    }
});

}();

function changeSel() {
    jQuery("#rec_option").next("i").addClass("icon-spinner icon-spin");
    val = jQuery("#rec_option option:selected").val();
    jQuery.ajax({
            type:'POST',
            url: "/main/getRecommendation/"+val,
            success: function(response) {
                jQuery("#response_con").html(response);
                jQuery("#rec_option").next("i").removeClass("icon-spinner icon-spin");
            },
            error : function () {
                jQuery("#rec_option").next("i").removeClass("icon-spinner icon-spin");
            }
   });
}

