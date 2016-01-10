jQuery(function($){
    $(".tab").mouseover(function(){
        $(this).find(".list-unstyled").removeClass("xsp-hidden xsl-hidden sm-hidden");
    });
    $(".tab").mouseleave(function(){
        $(this).find(".list-unstyled").addClass("xsp-hidden xsl-hidden sm-hidden");
    });
});
