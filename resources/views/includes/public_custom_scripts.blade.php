<!-- tabs start -->
<script type="text/javascript">
    $(document).ready(function(){

    $('ul.tabs li').click(function(){
        var tab_id = $(this).attr('data-tab');

        $('ul.tabs li').removeClass('current');
        $('.tab-content').removeClass('current');

        $(this).addClass('current');
        $("#"+tab_id).addClass('current');
    });
});
</script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
      // Slideshow 4
      $("#slider3").responsiveSlides({
        auto: true,
        pager:true,
        nav:false,
        speed: 500,
        namespace: "callbacks",
        before: function () {
          $('.events').append("<li>before event fired.</li>");
        },
        after: function () {
          $('.events').append("<li>after event fired.</li>");
        }
      });

    });
</script>

<script>
    // You can also use "$(window).load(function() {"
    $(function () {
      // Slideshow 4
      $("#slider4").responsiveSlides({
        auto: true,
        pager:true,
        nav:false,
        speed: 500,
        namespace: "callbacks",
        before: function () {
          $('.events').append("<li>before event fired.</li>");
        },
        after: function () {
          $('.events').append("<li>after event fired.</li>");
        }
      });

    });
</script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
      // Slideshow 4
      $("#slider3").responsiveSlides({
        auto: true,
        pager:false,
        nav:true,
        speed: 500,
        namespace: "callbacks",
        before: function () {
          $('.events').append("<li>before event fired.</li>");
        },
        after: function () {
          $('.events').append("<li>after event fired.</li>");
        }
      });

    });
</script>
 <!-- here stars scrolling script -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */
                
        $().UItoTop({ easingType: 'easeOutQuart' });

        });
</script>

<!-- scrolling script -->
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    //$(".accounticon , .popupnew").hover(function () {
//console.log('ok');
    //$('.popupnew').css({"visibility":"visible","opacity":"1"});
   //});
//$(".accounticon, .popupnew").mouseenter(function(){
  //  $(".popupnew").css({"visibility":"visible","opacity":"1"});
//});
//$(".accounticon, .popupnew").mouseout(function () {
//console.log('ok');
      // $('.popupnew').css({"visibility":"hidden","opacity":"0"});
    //});
});
</script>

<script type="text/javascript">
$(document).on('click','.navbar-collapse.in',function(e) {
    if( $(e.target).is('a:not(".dropdown-toggle")') ) {
        $(this).collapse('hide');
    }
});
</script>