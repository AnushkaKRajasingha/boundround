/**
 * Created by Administrator on 12/14/2017.
 */

(function($){
    $( document ).ready( function() {
        $('.slider').diyslider({
            width: "1180px",
            height: "600px",
            animationEasing: "swing",
            animationDuration: 1500,animationAxis: "x",
            display: 1,
            loop: true
        });

        setInterval(function(){
            $(".slider").diyslider("move", "forth");
        }, 10000)
    });
})(jQuery);
