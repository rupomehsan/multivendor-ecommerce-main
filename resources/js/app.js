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
 ***/
let colorSwitchButtons = document.querySelectorAll('.switch-button');

colorSwitchButtons.forEach(item => {

    let colorId = item.getAttribute('data-id')

    console.log()
    item.addEventListener('click', function (e){


        // let colors = [];
        // colors.push(e.target.id)
        // console.log(colors)
    })
})


