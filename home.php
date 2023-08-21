<link rel="stylesheet" href="src/nba.css" />
<link rel="stylesheet" href="src/home_style.css" />
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="src/nba_main.js"></script>
<script type="text/javascript">
window.onload = function() {
    var elm = ".box";
    $(elm).each(function(index) {
        // 개별적으로 Wheel 이벤트 적용
        $(this).on("mousewheel DOMMouseScroll", function(e) {
            e.preventDefault();
            var delta = 0;
            if (!event) event = window.event;
            if (event.wheelDelta) {
                delta = event.wheelDelta / 120;
                if (window.opera) delta = -delta;
            } else if (event.detail)
                delta = -event.detail / 3;
            var moveTop = $(window).scrollTop();
            var elmSelecter = $(elm).eq(index);
            // 마우스휠을 위에서 아래로
            if (delta < 0) {
                if ($(elmSelecter).next() != undefined) {
                    try {
                        moveTop = $(elmSelecter).next().offset().top;
                    } catch (e) {}
                }
                // 마우스휠을 아래에서 위로
            } else {
                if ($(elmSelecter).prev() != undefined) {
                    try {
                        moveTop = $(elmSelecter).prev().offset().top;
                    } catch (e) {}
                }
            }

            // 화면 이동 0.8초(800)
            $("html,body").stop().animate({
                scrollTop: moveTop + 'px'
            }, {
                duration: 800,
                complete: function() {}
            });
        });
    });
}
</script>

<title>NBA Reference</title>

<div class="box">
    <div class="bg">
        <video src="video/nba_highlight.mp4" muted autoplay loop>></video>
        <div class="text">
            <p>NBA <br>REFERENCE</p>
        </div>
    </div>
    <a href="#" class="btn_right">
        <div class="arrow"></div>
    </a>
</div>

<div class="box sec">
    <?php include "src/button.php" ?>
</div>

</body>