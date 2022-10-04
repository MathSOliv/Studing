
const btnShowMsg = document.getElementById('arrow');

btnShowMsg.addEventListener('click', function (){
    let botao = window.document.getElementById('arrow')
    botao.style.color = 'black'
});

btnShowMsg.addEventListener('click', function (){
    setTimeout(function() {
        let botao = window.document.getElementById('arrow')
        botao.style.color = 'white'
    }, 70);
});

btnShowMsg.addEventListener('mousedown', function (){
    let botao = window.document.getElementById('arrow')
    botao.style.color = 'black'
});

btnShowMsg.addEventListener('mouseup', function (){
    let botao = window.document.getElementById('arrow')
    botao.style.color = 'white'
});







//function fun2(){
//    let arrow = document.getElementById('arrow')
//    arrow.style.color = 'black'
//}