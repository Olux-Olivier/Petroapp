let option = document.querySelectorAll('.options')
let cardoptions = null
option.forEach(element => {
    element.addEventListener('click',function () {
        cardoptions = element.querySelector('.card-options')
        cardoptions.classList.toggle('card-visible')

    })
});