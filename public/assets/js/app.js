(function () {
    "use strict";

    /**
     * Easy selector helper function
     */
    const select = (el, all = false) => {
        el = el.trim()
        if (all) {
            return [...document.querySelectorAll(el)]
        } else {
            return document.querySelector(el)
        }
    }

    /**
     * Easy event listener function
     */
    const on = (type, el, listener, all = false) => {
        if (all) {
            select(el, all).forEach(e => e.addEventListener(type, listener))
        } else {
            select(el, all).addEventListener(type, listener)
        }
    }

    /**
     * Easy on scroll event listener
     */
    const onscroll = (el, listener) => {
        el.addEventListener('scroll', listener)
    }

    /**
     * Sidebar toggle
     */
    if (select('.sidebar-toggle-button')) {
        on('click', '.sidebar-toggle-button', function (e) {
            select('body').classList.toggle('sidebar-collapsed')
        })
    }

    /**
     * Sidebar show
     */
    if (select('.sidebar-expand-btn')) {
        on('click', '.sidebar-expand-btn', function (e) {
            select('.sidebar').classList.add('sidebar-show')
        })
    }

})();


/**
 * Image Upload & Preview
 */

let loadFile = function (event) {
    let dropImage = document.getElementById('drop-image');
    dropImage.style.display = 'none';

    let dropImgPreview = document.getElementById('drop-img-preview')
    dropImgPreview.classList.remove('d-none');


    let reader = new FileReader();
    reader.onload = function () {
        let output = document.getElementById('image-preview');

        output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
};

let removeImgPreview = function (event) {
    let dropImage = document.getElementById('drop-image');
    dropImage.style.display = 'block';

    let dropImgPreview = document.getElementById('drop-img-preview')
    dropImgPreview.classList.add('d-none');

    let output = document.getElementById('image-preview');
    output.src = "";
}


/**
 * Delete Single Data
 */
function deleteHandler(url) {
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: url,
                type: 'DELETE',
                dataType: "json",
                success: function (res) {
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                    setInterval(function () {
                        location.reload();
                    }, 1000)

                },
                error: function (xhr, resp, text) {
                    console.log(xhr);
                },
            });


        }
    })
}



/**
 * Custom Data Table With Search
 */
function dataTable(tableName, searchName) {
    let dataTable = $('#' + tableName).dataTable();
    $("#" + searchName).keyup(function () {
        dataTable.fnFilter(this.value);
    });
}
