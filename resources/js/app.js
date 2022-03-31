$(document).on('click', '.category-menu', function () {
    $('.category-list').toggleClass('d-none')
})

$(document).on('click', '.homepage-menu', function () {
    $('.homepage-list').toggleClass('d-none')
})

$(document).on('click', '.order-menu', function () {
    $('.order-list').toggleClass('d-none')
})


$(document).on('click', '.chat-launcher', function () {
    $('.chat-section').toggleClass('d-none')
    $('.chat-launcher').addClass('d-none')
})

$(document).on('click', '.close-btn', function () {
    $('.chat-section').addClass('d-none')
    $('.chat-launcher').removeClass('d-none')
})



/***
 * SUB-MENU TOGGLE
 * **/
$('.sub-list').hide();
$('.list > .sub-list').parent().click(function() {
    let submenu = $(this).children('.sub-list');
    let title = $(this).children('.list-title');
    if ( $(submenu).is(':hidden') ) {
        $(submenu).slideDown(200);
        $(title).css('font-weight', 'bold')
    } else {
        $(title).css('font-weight', 'normal')
        $(submenu).slideUp(200);
    }
});


/***
 * COLOR SWITCHER
 * **/
let colorSwitchButtons = document.querySelectorAll('.switch-button');
colorSwitchButtons.forEach(item => {
    let id = item.getAttribute('id')
    let buttonId = document.getElementById(id);
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
    let buttonId = document.getElementById(id);
    // buttonId.style.backgroundColor = id;

    buttonId.addEventListener('click', function (e) {
        buttonId.style.cssText = 'border: none; background: red; color: white;'
    })
})


