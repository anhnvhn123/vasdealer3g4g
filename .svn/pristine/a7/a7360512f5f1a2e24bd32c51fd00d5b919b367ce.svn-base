$(function(){
    var id_button = '.button-footer';
 
    // Kéo xuống khoảng cách 220px thì xuất hiện button
    var offset = 220;
 
    // THời gian di trượt là 0.5 giây
    var duration = 500;
 
    // Thêm vào sự kiện scroll của window, nghĩa là lúc trượt sẽ
    // kiểm tra sự ẩn hiện của button
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > 500) {
            jQuery(id_button).fadeIn(duration);

        } else {
            jQuery(id_button).fadeOut(duration);
        }
    });
 

})