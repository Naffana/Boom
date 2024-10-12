
$('.menu-btn').on('click', function(e) {
  e.preventDefault;
  $(this).toggleClass('menu-btn_active');
	$('.menu').toggleClass('menu-activ');
	$('.content').toggleClass('content-activ');
});

$('.button').on('click', function(e) {
  e.preventDefault;
$('.framee').toggleClass('framee_activ');
});

$('.button1').on('click', function(e) {
  e.preventDefault;
$('.framee1').toggleClass('framee_activ1');
});
$('.back1').on('click', function(e) {
  e.preventDefault;
$('.framee1').toggleClass('framee_activ1');

});

$('.back').on('click', function(e) {
  e.preventDefault;
$('.framee').toggleClass('framee_activ');

});
