
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

function add() {
  $.post(window.document.location.href, {add: "1"});
}

const exit = document.querySelector('.korz_exit');
const korz = document.querySelector('.back_korz');
const Korz_btn = document.querySelectorAll('#Zak');
function korzOpen(){
    korz.classList.toggle('activ');		

}
for (let buttonItem of Korz_btn) {
  buttonItem.addEventListener('click', korzOpen, false);
};

function windowExit(){
  korz.classList.remove('activ');

};
exit.addEventListener('click', windowExit, false);
