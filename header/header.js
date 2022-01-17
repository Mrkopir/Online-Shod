let sing_up = document.querySelector('.sign_up_but');
let sign_up_pos = document.querySelector('.sing_up_pos');
let sing_in = document.querySelector('.sign_in_but');
let sign_in_pos = document.querySelector('.sing_in_pos');
let active = document.querySelector('.active');
let but_adapt = document.querySelector('.nav_but');
let adapted_nav = document.querySelector('.adapted_nav')


sing_up.onclick = function () {
    if(sign_up_pos.classList.contains('hide')){
        sign_in_pos.classList.add('hide');
        sign_up_pos.classList.remove('hide');
}else{
    sign_up_pos.classList.add('hide');
}
}

sing_in.onclick = function () {
    if(sign_in_pos.classList.contains('hide')){
        sign_up_pos.classList.add('hide');
        sign_in_pos.classList.remove('hide');

}else{
    sign_in_pos.classList.add('hide');
}
}

but_adapt.onclick = function () {
    if(adapted_nav.classList.contains('hide__but')){
        adapted_nav.classList.add('hide__but');
        adapted_nav.classList.remove('hide__but');
    }else{
        adapted_nav.classList.add('hide__but');
    }
    console.log('Hello world')
}