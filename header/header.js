let sing_up = document.querySelector('.sign_up_but');
let sign_up_pos = document.querySelector('.sing_up_pos');
let sing_in = document.querySelector('.sign_in_but');
let sign_in_pos = document.querySelector('.sing_in_pos');
let active = document.querySelector('.active')


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