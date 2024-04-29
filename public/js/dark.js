let mood = document.querySelector('.mood')
let body = document.querySelector('body')


if (localStorage.getItem('darkMode') == 'activé') {
    body.classList.toggle('dark-mode')
}

mood.addEventListener('click',add)
function add() {
    if(body.classList.contains('dark-mode'))
    {
        body.classList.remove('dark-mode')
        localStorage.setItem('darkMode','desactivé')
    }
    else{
        body.classList.add('dark-mode')
        localStorage.setItem('darkMode','activé')
    }
}