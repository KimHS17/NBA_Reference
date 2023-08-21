<link rel="stylesheet" href="../src/rec_style.css" />
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js">
$(document).ready(function() {
    $('#selectBox').change(function() {
        var result = $('#selectBox option:selected').val();
        if (result == 'CSS') {
            $('.container').show();
        } else {
            $('.container').hide();
        }
    });
});
</script>
<script type=text/javascript>
$(window).on("load resize ", function() {
    var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
    $('.tbl-header').css({
        'padding-right': scrollWidth
    });
}).resize();
</script>

<div class="frame">
    <button onclick="location.href='https://dev-hs.kro.kr/Records/REC_21/rec_21_east.php'" style="cursor:pointer"
        class="btn">동부 컨퍼런스</button>
    <button onclick="location.href='https://dev-hs.kro.kr/Records/REC_21/rec_21_west.php'" style="cursor:pointer"
        class="btn">서부 컨퍼런스</button>
</div>

<title>NBA Reference</title>