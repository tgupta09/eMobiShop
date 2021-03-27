var eid;
function displaytableallcat() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: base_url + '/displaytableallcat',
        type: 'POST',
        dataType: 'JSON',
        success: function (response) {
            let res = $.parseJSON(response);
            // console.log(res);
            let s = '';
            let len = res.length;
            for (i = 0; i < len; i++) {
                let statussyntax = "";
                if (res[i].is_submit == '1') {
                    statussyntax += "<td class='text-primary'>Submitted</td>";
                }
                else if (res[i].is_publish == '1') {
                    statussyntax += "<td class='text-success'>Published</td>";
                }
                else if (res[i].is_reject == '1') {
                    statussyntax += "<td class='text-danger'>Rejected</td>";
                }
                else {
                    statussyntax = "<td class='text-secondary'>Draft</td>";
                }
                s += '<tr><td>' + res[i].id + '</td><td>' + res[i].name + '</td><td>' + res[i].brand + '</td><td>' + res[i].category + '</td><td>' + res[i].sku + '</td><td>' + res[i].price + '</td>' + statussyntax + '<td><button class="btn btn-success mr-3 edit" data-toggle="modal" data-target="#myModal2" data-eid= ' + res[i].id + '><i class="fa fa-pencil" aria-hidden="true"></i></button></td>' + '</tr>';
            }
            $('#tbodyid').html(s);
        },
        error: function (errres) {
            console.log(errres);
        }
    });
}


$(document).ready(function () {
    displaytableallcat();
    $("#addproductid").click(function (e) {
        e.preventDefault();
        let addform = document.getElementById('addproductformid');
        let formData = new FormData(addform);
        console.log(formData);

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: base_url + '/submitproduct',
            type: 'POST',
            dataType: 'JSON',
            data: formData,
            contentType: false,
            cache: false,
            processData: false,
            success: function (res) {
                let response = $.parseJSON(res)
                console.log(res);
                console.log; (response);
                let str = '';
                if (response.status == "success") {
                    str = '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Submit Product Successfully!</strong></div>';
                    $("#addproductmsg").html(str);
                    displaytableallcat();
                }
                else if (response.status == "fail") {
                    str = '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Submit Product Unsuccessfully!</strong></div>';
                    $("#addproductmsg").html(str);
                }
            },
            error: function (errres) {
                console.log(errres);
                let errors = errres.responseJSON.errors;
                let str = '';
                $.each(errors, function (key, value) {
                    str += "<div class='alert alert-danger alert-dismissible'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>" + value[0] + "</strong></div>";
                });
                $("#addproductmsg").html(str);
            }
        });
    });

    $("#savedraftid").click(function (e) {
        e.preventDefault();
        let addform = document.getElementById('addproductformid');
        let formData = new FormData(addform);
        console.log(formData);

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: base_url + '/saveproductdraft',
            type: 'POST',
            dataType: 'JSON',
            data: formData,
            contentType: false,
            cache: false,
            processData: false,
            success: function (res) {
                let response = $.parseJSON(res)
                console.log(res);
                console.log; (response);
                let str = '';
                if (response.status == "success") {
                    str = '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Submit Product Successfully!</strong></div>';
                    $("#addproductmsg").html(str);
                    displaytableallcat();
                }
                else if (response.status == "fail") {
                    str = '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Submit Product Unsuccessfully!</strong></div>';
                    $("#addproductmsg").html(str);
                }
            },
            error: function (errres) {
                // console.log(errres);
                let errors = errres.responseJSON.errors;
                let str = '';
                $.each(errors, function (key, value) {
                    str += "<div class='alert alert-danger alert-dismissible'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>" + value[0] + "</strong></div>";
                });
                $("#addproductmsg").html(str);
            }
        });
    });
});

$(document).on("click", "#editdraftid", function (e) {
    e.preventDefault();
    let addform = document.getElementById('editproductformid');
    let formData = new FormData(addform);
    formData.append("id", eid);
    console.log(formData);

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: base_url + '/editdraft',
        type: 'POST',
        dataType: 'JSON',
        data: formData,
        contentType: false,
        cache: false,
        processData: false,
        success: function (res) {
            let response = $.parseJSON(res)
            console.log(res);
            console.log; (response);
            let str = '';
            if (response.status == "success") {
                str = '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Submit Product Successfully!</strong></div>';
                $("#editalertmsg").html(str);
                displaytableallcat();
            }
            else if (response.status == "fail") {
                str = '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Submit Product Unsuccessfully!</strong></div>';
                $("#editalertmsg").html(str);
            }
        },
        error: function (errres) {
            console.log(errres);
            let errors = errres.responseJSON.errors;
            let str = '';
            $.each(errors, function (key, value) {
                str += "<div class='alert alert-danger alert-dismissible'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>" + value[0] + "</strong></div>";
            });
            $("#editalertmsg").html(str);
        }
    });
});

$(document).on("click", "#editsubmitproductid", function (e) {
    e.preventDefault();
    let addform = document.getElementById('editproductformid');
    let formData = new FormData(addform);
    formData.append("id", eid);
    console.log(formData);

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: base_url + '/editsubmittedproduct',
        type: 'POST',
        dataType: 'JSON',
        data: formData,
        contentType: false,
        cache: false,
        processData: false,
        success: function (res) {
            let response = $.parseJSON(res)
            console.log(res);
            console.log; (response);
            let str = '';
            if (response.status == "success") {
                str = '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Submit Product Successfully!</strong></div>';
                $("#editalertmsg").html(str);
                displaytableallcat();
            }
            else if (response.status == "fail") {
                str = '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Submit Product Unsuccessfully!</strong></div>';
                $("#editalertmsg").html(str);
            }
        },
        error: function (errres) {
            console.log(errres);
            let errors = errres.responseJSON.errors;
            let str = '';
            $.each(errors, function (key, value) {
                str += "<div class='alert alert-danger alert-dismissible'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>" + value[0] + "</strong></div>";
            });
            $("#editalertmsg").html(str);
        }
    });
});

$(document).on("click", ".edit", function (e) {
    e.preventDefault();
    eid = $(this).data('eid');
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: base_url + '/enterdetailsintoeditformfields',
        type: 'POST',
        dataType: 'JSON',
        data: { 'id': eid },
        success: function (res) {
            let response = $.parseJSON(res);
            if (response.status == "success") {
                $("#editnameid").val(response.data[0].name);
                $("#editbrandid").val(response.data[0].brand);
                $("#editcategoryid").val(response.data[0].category);
                $("#editskuid").val(response.data[0].sku);
                $("#editpriceid").val(response.data[0].price);
                $("#editdescriptionid").val(response.data[0].description);
                $("#imgthumbid").attr("src", "http://localhost/laraveltasks/ecommerce/uploads/products/" + response.data[0].img_name);
            }
            else if (response.status == "fail") {
                str = '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Loading Data Error!</strong></div>';
                $("#editalertmsg").html(str);
            }
        },
        error: function (errres) { console.log("Error Occured : Loading Data into Form fields of modal") }
    });
});

$(document).on("change", "#editimageid", function (e) {
    e.preventDefault();
    console.log(e);
    console.log(e.target.files[0]);
    let formData = new FormData();
    formData.append("editimage", e.target.files[0]);
    formData.append("id", eid);
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: base_url + '/imgedit',
        type: 'POST',
        dataType: 'JSON',
        data: formData,
        contentType: false,
        cache: false,
        processData: false,
        success: function (res) {
            let response = $.parseJSON(res);
            console.log(response);
            if (response.status == "success") {
                $("#imgthumbid").attr("src", "http://localhost/laraveltasks/ecommerce/uploads/products/" + response.imgname);
            }

        },
        error: function (errres) { console.log("Image cannot be load"); }
    });

});
