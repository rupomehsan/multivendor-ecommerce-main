/**
 * Submit Form (AJAX)
 */
function formSubmit(type, btn, form, headers = null) {
    // var userInformation = JSON.parse(localStorage.getItem('userInfo')) || null

    // if (dmeoUser.email !== "demoadmin@ecommerce.com") {
        let url = form.attr('action');
        // alert(url);
        let form_data = JSON.stringify(form.serializeJSON());
        formData = JSON.parse(form_data);
        $('#preloader').removeClass('d-none')
        $.ajax({
            type: type, url: url, data: formData, headers: headers, beforeSend: function () {
                // $('#' + btn).prop('disabled', true);
            }, success: function (response) {
                if (response.status === 'success') {
                    $('#preloader').addClass('d-none')
                    toastr.success(response.message);
                    form[0].reset();
                    // $(".text-danger").empty()
                    setTimeout(redirectPage, 1000);
                    if(response.data.token){
                         localStorage.setItem("token",response.data.token)
                         localStorage.setItem("userInfo",JSON.stringify(response.data.user))
                    }
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
                    } else if(response.status === 'error') {
                        toastr.error(response.message);
                        console.log("err 2")
                        $('#preloader').addClass('d-none')
                    }
                } else {
                    $('#preloader').addClass('d-none')
                    // toastr.error('Something went wrong', 'Please try again after sometime.');
                    console.log("err 3")
                }
            }, complete: function (xhr, status) {
                // $('#' + btn).prop('disabled', false);
            }
        });
    // } else {
    //     toastr.error('Sorry You Are Demo Use')
    // }
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
                editDataParentId = response.data.parent_id;
                editDataCategoryId = response.data.category_id;
                editDataBrandId = response.data.brand_id;
                editDataStoreId = response.data.store_id;
                editDataFilterId = response.data.filter_id;
                // console.log("category",editDataCategoryId)
                Object.entries(response.data).forEach((item) => {
                    //for all input filed
                    console.log("item",response.data)
                    $('#' + item[0]).val(item[1]);
                    if (item[0] === 'attributes') {
                        // console.log("attribute",item[1])
                        if (item[1].name) {
                            $('#attribute-name').empty()
                            $('#attribute-name').append(`
                                 <input type="text"  name="attribute[name][]"
                                                   class="form-control col-8 mt-1"
                                                   placeholder="Enter product attribute Name" value="${item[1].name[0]}">
                                            <span class="iconify col-1 mt-1" id="addattr"
                                                  data-icon="akar-icons:circle-plus-fill" style="cursor: pointer"
                                                  data-width="35"></span>
                                `)
                            item[1].name.forEach(function (value, index) {
                                // alert(index)
                                if (index !== 0) {
                                    $("#attribute-name").append(`<section> <div class="row"><input type="text" name="attribute[name][]" placeholder="Enter product attribute Name" class="form-control col-8 mt-2" value="${value}"/> <span class="iconify col-1 mt-3 remove-sec"  data-icon="ant-design:minus-circle-filled"  style="cursor: pointer" data-width="35"></span></div></section>`);

                                }
                            })
                        }

                        if (item[1].color) {
                            $('#color').empty()
                            $('#color').append(`
                                  <input type="text" id="color" name="attribute[color][]"
                                                   class="form-control col-8"
                                                   placeholder="Enter product color Name" value="${item[1].color[0]}">
                                            <span class="iconify col-1" id="addColor"
                                                  data-icon="akar-icons:circle-plus-fill" style="cursor: pointer"
                                                  data-width="35"></span>
                                `)
                            item[1].color.forEach(function (value, index) {
                                // alert(index)
                                if (index !== 0) {
                                    $("#color").append(`<section> <div class="row"><input type="text" name="attribute[color][]" placeholder="Enter product color Name" class="form-control col-8 mt-2 " value="${value}"/> <span class="iconify col-1 mt-3 remove-sec"  data-icon="ant-design:minus-circle-filled"  style="cursor: pointer" data-width="35"></span></div></section>`);

                                }
                            })
                        }
                    }
                    if (item[0] === 'discount') {
                        console.log("discount", item[1])
                        var section = ' <section><div class="row">'
                        var endSection = ' <span class="iconify col-1 mt-3 remove-dis"  data-icon="ant-design:minus-circle-filled"  style="cursor: pointer" data-width="35"></span></div></section>'

                        $('#discount').empty()
                        $('#discount').append(`
                        <input type="number" id="" name="discount[quantity][]"
                                                   class="form-control col-3 mr-1"
                                                   placeholder="Quantity" value="${item[1].quantity[0]}">
                                            <input type="text" id="" name="discount[price][]"
                                                   class="form-control col-3 mr-1"
                                                   placeholder="Price" value="${item[1].price[0]}">
                                            <input placeholder="start Date" value="${item[1].start_date[0]}" class="form-control col-2 mr-1" type="text" name="discount[start_date][]" onfocus="(this.type='date')" id="date">
                                            <input placeholder="End Date" value="${item[1].end_date[0]}" class="textbox-n form-control col-2 mr-1" name="discount[end_date][]" type="text" onfocus="(this.type='date')" id="date">
                                            <span class="iconify col-1" id="addDiscount"
                                                  data-icon="akar-icons:circle-plus-fill" style="cursor: pointer"
                                                  data-width="35"></span>
                        `)
                        item[1].quantity.forEach(function (value, index) {
                            if (index !== 0) {
                                $("#discount").append(`
                                              ${section}
                                              <input type="number" id="discount" name="discount[quantity][]" class="form-control col-3 mt-1 mr-1"  placeholder="Quantity" value="${value}">
                                             `)
                            }
                        })
                        item[1].price.forEach(function (value, index) {
                            if (index !== 0) {
                                $("#discount section div").append(`
                                             <input type="text" id="" name="discount[price][]" class="form-control col-3 mt-1 mr-1" placeholder="Price" value="${value}">
                                             `)
                            }
                        })
                        item[1].start_date.forEach(function (value, index) {
                            if (index !== 0) {
                                $("#discount section div").append(`
                                              <input type="date" id="" name="discount[start_date][]" class="form-control col-2 mt-1 mr-1" placeholder="Start Date" value="${value}">

                                             `)
                            }
                        })
                        item[1].end_date.forEach(function (value, index) {
                            if (index !== 0) {
                                $("#discount section div").append(`
                                              <input type="date" id="" name="discount[end_date][]" class="form-control col-2 mt-1 mr-1"placeholder="End Date" value="${value}">
                                            ${endSection}
                                             `)
                            }
                        })

                    }
                    if (item[0] === "logo") {
                        // console.log("logo")
                        if (dropzone) {
                            let mockFile = {name: 'image', size: 600,};
                            var logo = JSON.parse(item[1])
                            let imageUrl = logo
                            imageUrl.forEach(item => {
                                // console.log(item)
                                dropzone.displayExistingFile(mockFile, item);
                                // dropzone.options.addedfile.call(dropzone, mockFile);
                                dropzone.options.thumbnail.call(dropzone, mockFile, item);
                            })
                        }
                    } else if (item[0] === "image") {
                        // console.log("iamge", item[1])
                        if (dropzone) {
                            let mockFile = {name: 'image', size: 600,};
                            var logo = JSON.parse(item[1])
                            // console.log("image")
                            let imageUrl = logo
                            imageUrl.forEach(item => {
                                // console.log(item)
                                dropzone.displayExistingFile(mockFile, item);
                                // dropzone.options.addedfile.call(dropzone, mockFile);
                                dropzone.options.thumbnail.call(dropzone, mockFile, item);
                            })
                        }
                    }
                    //for vendor
                    if(response.data.store_details){
                        Object.entries(response.data.store_details).forEach((item)=>{
                            $('#' + item[0]).val(item[1]);
                            if (item[0] === 'description') {
                                description.setData(item[1])
                            }
                        })
                    }

                    //for customer

                    if(response.data.customer_details){
                        Object.entries(response.data.customer_details).forEach((item)=>{
                            $('#' + item[0]).val(item[1]);

                        })
                    }
                    //for admin access input filed
                    //for admin access input filed
                    if (item[0] === 'access') {
                        // console.log("data", item[1])
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
                    if (response.data !== null) {
                        $('#submit-button').text("Update")
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
 * GET all product
 */

function getAllProduct(url,searchData=null,categoryId=null) {
    $.ajax({
        type: 'GET', url: url,data:{"searchData":searchData,"categoryId":categoryId}, dataType: 'json', success: function (response) {
            if (response.status === 'success') {
                let data = response.data
                $('#productShow').empty()

                data.forEach(function(item){
                    $('#productShow').append(`
                   <div class="col-lg-3 col-sm-6 col-12 pos-cards my-3 border ">
                                        <div class="card bg-light-ash rounded-1 pos-card-item">
                                            <div class="card-body">
                                                <img class="pos-item-img" src="${(item.image) ? item.image[0]:'/assets/image/logo.png'}"
                                                     alt="pos-item-img">

                                                <div class="card">
                                                    <div class="card-body text-center">
                                                        <h5>${item.name.slice(0, 20)}</h5>
                                                        <span>${item.category[0].name.slice(0, 10)}</span>
                                                        <hr/>
                                                        <span>$ ${item.price}</span>
                                                    </div>
                                                       <button class="btn btn-primary sm" onclick="addItem('${item.id}')"><span class="iconify" data-icon="akar-icons:circle-plus-fill"></span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                `)
                })


            }
        }, error: function (xhr, resp, text) {
            console.log(xhr, resp)
        }
    });
}


function getAllCategory(url){

    $.ajax({
        type: 'GET',
        url: url,
        dataType: 'json',
        success: function (response) {
            let data = response.data
            if (data.length>0) {
                $('#category_list').empty()
                $('#category_list').append(`
                      <option selected disabled>All Category</option>
                `)
                data.forEach(function(item){
                    $('#category_list').append(`
                        <option value="${item.id}">${item.name}</option>
                `)
                })
                console.log("product",data)
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


