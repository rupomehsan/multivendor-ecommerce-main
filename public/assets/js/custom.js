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
    let baseUrl = window.origin + url
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
                    url: baseUrl,
                    type: 'DELETE',
                    dataType: "json",
                    success: function (res) {
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
function getEditData(url) {
    var baseUrl = window.origin + url
    // alert(baseUrl)
    $.ajax({
        type: 'GET',
        url: baseUrl,
        success: function (response) {
            if (response.status === 'success') {
                //  var data = JSON.parse(response.data.logo)
                // $('#imageShow').attr('src',data[0])
                 // data.forEach(function(item){
                 //     $('#imageShow').attr('src',"${item}")
                 // })
                // console.log(data);
                if(response.data !== null){
                $('#submit-button').text("Update")
                }
                Object.entries(response.data).forEach((item) => {
                    //for all input filed
                    // console.log("data",item);
                    $('#' + item[0]).val(item[1]);
                    if (item[0] === "logo") {
                       var logo = JSON.parse(item[1])
                        $('.dz-image img').attr('src',logo[0])
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
                        descriptionEditor.setData(item[1])
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
        },
        error: function (xhr, resp, text) {
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
    console.log(headers);
    data.forEach(function (item) {
        let tableRow = document.createElement('tr')

        headers.forEach((header) => {
            Object.keys(item).forEach((key) => {
                if (key === header.field) {
                    let tableData = document.createElement('td')

                    if (key === 'image') {
                        if (item[key] !== null) {
                            let imageUrls = item[key].split('/')
                            let imageUrl = ''
                            imageUrls.forEach((item, i) => {
                                if (i > 0) imageUrl += '/' + item
                            })

                            let imageTag = document.createElement('img')
                            imageTag.setAttribute('src', imageUrl)
                            imageTag.setAttribute('style', "width: 60px; height: 60px;")
                            tableData.appendChild(imageTag)
                        } else {
                            let imageTag = document.createElement('img')
                            imageTag.setAttribute('src', '/assets/img/default.png')
                            imageTag.setAttribute('style', "width: 60px; height: 60px;")
                            tableData.appendChild(imageTag)
                        }
                    } else {
                        tableData.innerHTML = item[key]
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
function getTableData(url, id, headers, actions = []) {
    $.ajax({
        type: 'GET', url: url, success: function (response) {
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

function approvalData(url, id, properties) {
    var dmeoUser = JSON.parse(localStorage.getItem('userData'))
    if (dmeoUser.email !== "demoadmin@ecommerce.com") {
        $("#preloader").removeClass('d-none');
        $.ajax({
            url: url, type: "POST", dataType: "json", headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }, data: {
                id: id, status: properties,
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

function fetchData(res) {
    res.data.forEach(function (item) {
        $('#fetchCategory').append(`
                               <div class="col-lg-4 col-12">
                                    <div class="card">
                                        <img src="${item.image}" class="card-img-top rounded-3 border"
                                             alt="">
                                              <input class="form-check-input select-input chkSelect" type="checkbox" name="chkSelect[]"  value="${item.id}">
                                             <div class="row mt-3">
                                                   <div class="col-md-6">
                                                     <p class="catName ml-3">${item.name}</p>
                                                     <p class="catName ml-3">${item.quotes_count} Quotes</p>
                                                     </div>
                                                  <div class="col-md-6">   <div class="switch">
                                            <label class="">
                                                <input class="form-check-input" data-id="${item.id}" name="category_status" type="checkbox"
                                                       id="approval" ${item.status === "active" ? 'checked' : ''}>
                                                <div class="slider round"></div>
                                            </label>
                                        </div></div>
                                          </div>

                                                                    <div class="content-actions m-2">

                                                <a href="/admin/category/edit/${item.id}" class="button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--ant-design" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024" data-icon="ant-design:edit-filled"><path fill="currentColor" d="M880 836H144c-17.7 0-32 14.3-32 32v36c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-36c0-17.7-14.3-32-32-32zm-622.3-84c2 0 4-.2 6-.5L431.9 722c2-.4 3.9-1.3 5.3-2.8l423.9-423.9a9.96 9.96 0 0 0 0-14.1L694.9 114.9c-1.9-1.9-4.4-2.9-7.1-2.9s-5.2 1-7.1 2.9L256.8 538.8c-1.5 1.5-2.4 3.3-2.8 5.3l-29.5 168.2a33.5 33.5 0 0 0 9.4 29.8c6.6 6.4 14.9 9.9 23.8 9.9z"></path></svg>
                                                    Edit
                                                </a>

                                                <button type="submit" title="" id="" onclick="deleteItem('/api/v1/category/delete/${item.id}')">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--ant-design" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024" data-icon="ant-design:delete-filled"><path fill="currentColor" d="M864 256H736v-80c0-35.3-28.7-64-64-64H352c-35.3 0-64 28.7-64 64v80H160c-17.7 0-32 14.3-32 32v32c0 4.4 3.6 8 8 8h60.4l24.7 523c1.6 34.1 29.8 61 63.9 61h454c34.2 0 62.3-26.8 63.9-61l24.7-523H888c4.4 0 8-3.6 8-8v-32c0-17.7-14.3-32-32-32zm-200 0H360v-72h304v72z"></path></svg>
                                                    Delete
                                                </button>

                                        </div>
                                        </div>
                                        </div>

                                </div>
                        `)
    })
}


function editCategory(url) {


    $.ajax({
        url: url, method: 'GET', dataType: 'JSON', success: function (res) {
            if (res.status === "success") {
                $('#categoryEdit').empty()
                $('#categoryEdit').append(`

                `)
            }
        }, error: function (err) {
            console.log(err)
        },

    })
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
function getCategory(url,id) {
    let baseUrl = window.origin + url
    // alert(baseUrl)
    $.ajax({
        type: 'GET',
        url: baseUrl,
        dataType: 'json',
        success: function (res) {
            console.log(res)
            if (res.status === 'success') {
                res.data.forEach((item) => {
                    $('#' + id).append(`
                            <option value="${item.id}">${item.name}</option>
                    `)
                })
            }
        },
        error: function (err) {
            console.log(err);
        }
    })
}

