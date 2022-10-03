var header = document.getElementById('header');
var navigation_header = document.getElementById('navigation_header');
var content = document.getElementById('content');
var showSidebar = false;

function toggleSidebar()
{
    showSidebar = !showSidebar;
    if(showSidebar)
    {
        navigation_header.style.marginLeft = '-10vw';
        navigation_header.style.animationName = 'show_sidebar';
        content.style.filter = "blur(2px)"
    }
    else
    {
        navigation_header.style.marginLeft = '-100vw';
        navigation_header.style.animationName = '';
        content.style.filter = ""
    }
}
function closeSidebar()
{
    if(showSidebar)
    {
        toggleSidebar();
    }
}
window.addEventListener('resize', function(event){
    if(window.innerWidth > 768 && showSidebar)
    {
        toggleSidebar();
    }
})

function ativo1()
{
    document.getElementById('home').className = 'active';
    document.getElementById('registrar').className = 'disabled';
    document.getElementById('adicionar').className = 'disabled';
    document.getElementById('sair').className = 'disabled';
}

function ativo2()
{
    document.getElementById('home').className = 'disabled';
    document.getElementById('registrar').className = 'active';
    document.getElementById('adicionar').className = 'disabled';
    document.getElementById('sair').className = 'disabled';
}

function ativo3()
{
    document.getElementById('home').className = 'disabled';
    document.getElementById('registrar').className = 'disabled';
    document.getElementById('adicionar').className = 'active';
    document.getElementById('sair').className = 'disabled';
}

function ativo4()
{
    document.getElementById('home').className = 'disabled';
    document.getElementById('registrar').className = 'disabled';
    document.getElementById('adicionar').className = 'disabled';
    document.getElementById('sair').className = 'active';
}