var ripple = $('.ripple'), rippleSize = screenProp(), posLeft = 0, posTop = 0;
ripple.outerWidth(rippleSize * 2).outerHeight(rippleSize * 2); 
$('.gradient1').click(function(e) {
posLeft = e.pageX - rippleSize - $(window).scrollLeft(); posTop = e.pageY - rippleSize - $(window).scrollTop();
var gradient = $(this).attr('data-gradient-css'); 
ripple.addClass('ripple--active').css({ 
'left': posLeft + 'px','top': posTop + 'px','background-image': gradient});
setTimeout(function() { 
ripple.addClass('ripple--complete'); }, 700); });
ripple.on('click', function() {
if (ripple.hasClass('ripple--complete')) { 
ripple.removeClass('ripple--complete ripple--active'); } });
$(window).on('resize', function() { 
rippleSize = screenProp(); 
ripple.outerWidth(rippleSize * 2).outerHeight(rippleSize * 2); });
function screenProp() {
if ($(window).width() > $(window).height()) {
return $(window).width(); } else { return $(window).height(); } }