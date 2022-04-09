/**
 * Submit Form (AJAX)
 */
function formSubmit(type, btn, form, headers = null) {
    var dmeoUser = JSON.parse(localStorage.getItem('userData'))
    if (dmeoUser.email !== "demoadmin@ecommerce.com") {
        let url = form.attr('action');
        // alert(url);
        let form_data = JSON.stringify(form.serializeJSON());
        formData = JSON.parse(form_data);
        $('#preloader').removeClass('d-none')
        $.ajax({
            type: type, url: url, data: formData, headers: headers, beforeSend: function () {
                $('#' + btn).prop('disabled', true);
            }, success: function (response) {
                if (response.status === 'success') {
                    $('#preloader').addClass('d-none')
                    toastr.success(response.message);
                    form[0].reset();
                    const myTimeout = setTimeout(redirectPage, 1000);
                    // setTimeout(returnPage(page), 10000);
                }
            }, error: function (xhr, resp, text) {
                // console.log(xhr)
                // on error, tell the failed
                if (xhr && xhr.responseText) {
                    $('#preloader').addClass('d-none')
                    let response = JSON.parse(xhr.responseText);
                    if (response.status === 'validate_error') {
                        $('#preloader').addClass('d-none')
                        $.each(response.message, function (index, message) {
                            if (message.field && message.field !== 'global') {
                                $('#' + message.field).addClass('is-invalid');
                                $('#' + message.field + '_label').addClass('text-danger');
                                $('#' + message.field + '_error').html(message.error);
                            } else if (message.error) {
                                $('#preloader').addClass('d-none')
                                // toastr.error(message.error);
                                console.log("err 0")
                            } else {
                                // toastr.error('Something went wrong', 'Please try again after sometime.');
                                console.log("err 1")
                                $('#preloader').addClass('d-none')
                            }
                        });
                    } else {
                        // toastr.error('Something went wrong', 'Please try again after sometime.');
                        console.log("err 2")
                        $('#preloader').addClass('d-none')
                    }
                } else {
                    $('#preloader').addClass('d-none')
                    // toastr.error('Something went wrong', 'Please try again after sometime.');
                    console.log("err 3")
                }
            }, complete: function (xhr, status) {
                $('#' + btn).prop('disabled', false);
            }
        });
    } else {
        toastr.error('Sorry You Are Demo Use')
    }
}

function deleteItem(url) {
    let baseUrl = url
    // alert(baseUrl)
    var dmeoUser = JSON.parse(localStorage.getItem('userData'))
    if (dmeoUser.email !== "demoadmin@ecommerce.com") {
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
                    url: baseUrl, type: 'DELETE', dataType: "json", success: function (res) {
                        console.log(res);
                        Swal.fire('Deleted!', 'Your file has been deleted.', 'success')
                        setInterval(function () {
                            location.reload();
                        }, 1000)

                    }, error: function (xhr, resp, text) {
                        console.log(xhr);
                        // on error, tell the failed
                    },
                });
            }
        })
    } else {
        toastr.error('Sorry You Are Demo Use')
    }
}

/**
 * GET Single Data for Edit
 */
function getEditData(url, dropzone = null) {
    var baseUrl = url
    // alert(baseUrl)
    $.ajax({
        type: 'GET', url: baseUrl, success: function (response) {
            if (response.status === 'success') {
                //  var data = JSON.parse(response.data.logo)
                // $('#imageShow').attr('src',data[0])
                // data.forEach(function(item){
                //     $('#imageShow').attr('src',"${item}")
                // })
                // console.log(data);
                if (response.data !== null) {
                    $('#submit-button').text("Update")
                }
                editDataParentId = response.data.parent_id;
                Object.entries(response.data).forEach((item) => {
                    //for all input filed
                   // console.log("item",item)
                    $('#' + item[0]).val(item[1]);
                    if (item[0] === "logo") {
                        // console.log("logo")
                        if (dropzone) {
                            let mockFile = {name: 'image', size: 600,};
                            var logo = JSON.parse(item[1])
                            let imageUrl = logo
                            imageUrl.forEach(item => {
                                console.log(item)
                                dropzone.displayExistingFile(mockFile, item);
                                // dropzone.options.addedfile.call(dropzone, mockFile);
                                dropzone.options.thumbnail.call(dropzone, mockFile, item);
                            })
                        }
                    } else if (item[0] === "image") {
                        console.log("iamge", item[1])
                        if (dropzone) {
                            let mockFile = {name: 'image', size: 600,};
                            var logo = JSON.parse(item[1])
                            console.log("image")
                            let imageUrl = logo
                            imageUrl.forEach(item => {
                                console.log(item)
                                dropzone.displayExistingFile(mockFile, item);
                                // dropzone.options.addedfile.call(dropzone, mockFile);
                                dropzone.options.thumbnail.call(dropzone, mockFile, item);
                            })
                        }
                    }


                    //for admin access input filed
                    //for admin access input filed
                    if (item[0] === 'access') {
                        console.log("data", item[1])
                        if (item[1] !== '') {
                            let data = JSON.parse(item[1])
                            data.forEach(val => {
                                $(`input[name='access[]'][value='${val}']`).attr('checked', true)
                            })
                        }
                    }
                    //for editor
                    //for editor
                    if (item[0] === 'description') {
                        description.setData(item[1])
                    } else if (item[0] === 'privacy_policy') {
                        privacyEditor.setData(item[1])
                    } else if (item[0] === 'cookies_policy') {
                        cookiesEditor.setData(item[1])
                    } else if (item[0] === 'terms_policy') {
                        termsEditor.setData(item[1])
                    }
                    //for submit button to update button
                    //for submit button to update button
                    if (item[0] === 'host' || item[0] === 'api_key') {
                        $('.submit-btn').text('Update')
                        // $('.smtpBtn').text('Update')
                        $('.smtp-card-title').text('Edit SMTP')
                    }
                    //for user access role id hide show
                    //for user access role id hide show
                    if (item[0] === 'user_role_id') {

                        if (item[1] === 1) {
                            $('#access_control').hide();
                        } else {
                            $('#access_control').show();
                        }
                    }


                })

            }
        }, error: function (xhr, resp, text) {
            console.log(xhr, resp)
        }
    });
}

/**
 * Generate Table Data
 */
function generateTable(id, headers, data, actions = []) {
    let container = document.getElementById(id)
    container.innerHTML = "";

    data.data.forEach(function (item) {
        let tableRow = document.createElement('tr')
        headers.forEach((header) => {
            Object.keys(item).forEach((key) => {
                if (key === header.field) {

                    let tableData = document.createElement('td')
                    tableData.innerHTML = item[key]
                    if (key === 'image') {
                        if (item[key] !== null) {
                            // console.log("yes")
                            let image = JSON.parse(item[key])
                            console.log("iamge", image)
                            let imageDiv = `<div class="sidebar-logo"><img src="${image[0]}" class="" alt="logo.png" height="40" width="70"></div>`
                            let imageTag = document.createElement('div')
                            imageTag.innerHTML = imageDiv
                            tableData.appendChild(imageTag)
                        } else {
                            // console.log("no")
                            let imageDiv = `<div class="sidebar-logo"><img src="" class="logo-lg" alt="logo.png"></div>`
                            let imageTag = document.createElement('div')
                            imageTag.innerHTML = imageDiv
                            tableData.appendChild(imageTag)
                        }
                    }
                    if (key === 'status') {
                        let div = `<div class="switch"> <label class=""> <input class="form-check-input" ${item[key] === "active" ? 'checked' : ''}  id="approval" data-id="${item.id}" type="checkbox"  > <div class="slider round"></div></label></div>`
                        let status = document.createElement('div')
                        status.innerHTML = div
                        tableData.appendChild(status)
                    }
                    tableRow.appendChild(tableData)
                }
            })

            if (header.field === 'action' && actions.length) {
                let tableData = document.createElement('td')

                actions.forEach((actionItem) => {
                    let actionBtn = document.createElement('button')
                    actionBtn.textContent = actionItem.label

                    if (actionItem.label.toLowerCase() === 'edit') {
                        actionBtn.setAttribute('class', 'btn btn-outline-secondary me-1')

                        actionBtn.addEventListener('click', function () {
                            window.location.href = actionItem.url.replace(':id', item.id)
                            // console.log(item.id)
                            // actionItem.url.replace(':id', item.id)
                            // getEditData(actionItem.url.replace(':id', item.id))
                        })
                    } else if (actionItem.label.toLowerCase() === 'delete') {
                        actionBtn.setAttribute('class', 'btn btn-outline-secondary')

                        actionBtn.addEventListener('click', function () {
                            deleteItem(actionItem.url.replace(':id', item.id))
                            // console.log(item.id)
                        })
                    }

                    tableData.appendChild(actionBtn)
                })

                tableRow.appendChild(tableData)
            }
        })

        container.appendChild(tableRow)
    })


}

/**
 * GET Table Data
 */
function getTableData(url, id, headers, actions = [], searchData = null,) {
    $.ajax({
        type: 'GET', url: url, data: {
            'searchData': searchData
        }, dataType: 'json', success: function (response) {
            if (response.status === 'success') {
                let data = response.data
                generateTable(id, headers, data, actions)
            }
        }, error: function (xhr, resp, text) {
            console.log(xhr, resp)
        }
    });
}

/**
 * Approval   Data
 */

function approvalData(url, id, status) {
    var dmeoUser = JSON.parse(localStorage.getItem('userData'))
    if (dmeoUser.email !== "demoadmin@ecommerce.com") {
        $("#preloader").removeClass('d-none');
        $.ajax({
            url: url, type: "POST", dataType: "json", headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }, data: {
                id: id, status: status,
            }, success: function (res) {
                console.log(res)
                if (res) {
                    toastr.success(res.message);
                    $("#preloader").addClass('d-none');
                }
            }, error: function (jqXhr, ajaxOptions, thrownError) {
                if (jqXhr.status == 422 && jqXhr.responseJSON.status == "error") {
                    toastr.error(jqXhr.responseJSON.message)
                    $("#preloader").addClass('d-none');
                }
            }
        }); //ajax
    } else {
        toastr.error('Sorry You Are Demo Use')
    }
}

let userData = JSON.parse(localStorage.getItem('userData'))
if (userData) {
    function pageRestricted(page) {
        if (userData.user_role_id === 2) {
            // let access=['Category', 'News','News Approval', 'Video','Add Admin',' Manage Admin', 'Add User', 'Manage User', 'Comments', 'Reports', 'Advertisement', 'Notifications','Settings'];
            let access = JSON.parse(userData.access)
            if (!access.includes(page)) {
                // window.location.href = `./${pageName}.php`
                window.location.href = "dashboard"
                // $(`#${id}`).css("background", "green")
            }
        } else if (userData.user_role_id === 1) {
            return false
        } else {
            window.location.href = "dashboard"
        }
    }

}


function clearError(input) {
    $('#' + input.id).removeClass('is-invalid');
    $('#' + input.id + '_label').removeClass('text-danger');
    $('#' + input.id + '_icon').removeClass('text-danger');
    $('#' + input.id + '_icon_border').removeClass('field-error');
    $('#' + input.id + '_error').html('');
}

// get category
function getCategory(url, id) {
    let baseUrl = window.origin + url
    // alert(baseUrl)
    $.ajax({
        type: 'GET', url: baseUrl, dataType: 'json', success: function (res) {
            console.log(res)
            if (res.status === 'success') {
                res.data.forEach((item) => {
                    $('#' + id).append(`
                            <option value="${item.id}">${item.name}</option>
                    `)
                })
            }
        }, error: function (err) {
            console.log(err);
        }
    })
}


