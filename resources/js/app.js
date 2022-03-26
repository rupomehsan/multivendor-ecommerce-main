$(document).on('click', '.category-menu', function () {
    $('.category-list').toggleClass('d-none')
})

$(document).on('click', '.homepage-menu', function () {
    $('.homepage-list').toggleClass('d-none')
})

$(document).on('click', '.order-menu', function () {
    $('.order-list').toggleClass('d-none')
})
$(document).on('click', '.filter-btn', function () {
    $('.filter-card').toggleClass('d-none')
})

/***
 * COLOR SWITCHER
 * **/
let colorSwitchButtons = document.querySelectorAll('.switch-button');
colorSwitchButtons.forEach(item => {
    let id = item.getAttribute('id')
    let buttonId =  document.getElementById(id);
    buttonId.style.backgroundColor = id;

    buttonId.addEventListener('click', function (e) {
        buttonId.style.border = '1px solid black'
    })
})

/***
 * SIZE SWITCHER
 * **/
let sizeSwitchButtons = document.querySelectorAll('.size-button');
sizeSwitchButtons.forEach(item => {
    let id = item.getAttribute('id')
    let buttonId =  document.getElementById(id);
    // buttonId.style.backgroundColor = id;

    buttonId.addEventListener('click', function (e) {
        buttonId.style.cssText = 'border: none; background: red; color: white;'
    })
})


