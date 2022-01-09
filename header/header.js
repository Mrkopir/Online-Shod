let sing_up = document.querySelector('.sign_up_but');
let sign_up_pos = document.querySelector('.sing_up_pos');


sing_up.onclick = function () {
    if(sign_up_pos.classList.contains('hide')){
        sign_up_pos.classList.remove('hide')

}else{
    sign_up_pos.classList.add('hide')
}
}