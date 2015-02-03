/* Theme.js */


// Change halfscreen to fullscreen on mobile
var mql = window.matchMedia("screen and (min-width: 600px)");
if (mql.matches){ 
	// if screen is larger than 600px
    $('.slide').removeClass('fullscreen');
    $('.slide').addClass('not-fullscreen');
}
else{
	// if screen is smaller than 600px
    $('.slide').removeClass('not-fullscreen');
    $('.slide').addClass('fullscreen');
}

// Add listener to change halfscreen to fullscreen on mobile
mql.addListener(function(changed) {
    if(changed.matches) {
	    // if screen is larger than 600px
	    $('.slide').removeClass('fullscreen');
	    $('.slide').addClass('not-fullscreen');
    } else {
	    // if screen is smaller than 600px
	    $('.slide').removeClass('not-fullscreen');
	    $('.slide').addClass('fullscreen');
    }
});


/* fix vertical when not overflow
call fullscreenFix() if .fullscreen content changes */
function fullscreenFix(){
    var h = $('body').height();
    // set .fullscreen height
    $(".content-b").each(function(i){
        if($(this).innerHeight() <= h){
            $(this).closest(".fullscreen").addClass("not-overflow");
        }
    });
}
$(window).resize(fullscreenFix);
fullscreenFix();

/* resize background images */
function backgroundResize(){
    var windowH = $(window).height();
    $(".background").each(function(i){
        var path = $(this);
        // variables
        var contW = path.width();
        var contH = path.height();
        var imgW = path.attr("data-img-width");
        var imgH = path.attr("data-img-height");
        var ratio = imgW / imgH;
        // overflowing difference
        var diff = parseFloat(path.attr("data-diff"));
        diff = diff ? diff : 0;
        // remaining height to have fullscreen image only on parallax
        var remainingH = 0;
        if(path.hasClass("parallax")){
            var maxH = contH > windowH ? contH : windowH;
            remainingH = windowH - contH;
        }
        // set img values depending on cont
        imgH = contH + remainingH + diff;
        imgW = imgH * ratio;
        // fix when too large
        if(contW > imgW){
            imgW = contW;
            imgH = imgW / ratio;
        }
        //
        path.data("resized-imgW", imgW);
        path.data("resized-imgH", imgH);
        path.css("background-size", imgW + "px " + imgH + "px");
    });
}
$(window).resize(backgroundResize);
$(window).focus(backgroundResize);
backgroundResize();



// Toggle 3D view
 $('.js-view-btn').click(function(e){
	e.preventDefault();
	$('.featured-thumbnail').toggle();
	$('.model').toggle();
	var element = document.getElementById("js-view-btn");
	element.innerHTML = "Switch view";
 });







