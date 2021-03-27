var eid;
function displaytable() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: base_url + '/displaytable',
        type: 'POST',
        dataType: 'JSON',
        success: function (response) {
            let res = $.parseJSON(response);
            console.log(res);
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
                s += '<tr><td>' + res[i].id + '</td><td>' + res[i].name + '</td><td>' + res[i].brand + '</td><td>' + res[i].category + '</td>' + statussyntax + '<td>' + res[i].useremail + '</td>' + '<td><button class="btn btn-primary viewdetailsbtn" data-toggle="modal" data-target="#myModal" data-eid= ' + res[i].id + '><i class="fa fa-info" aria-hidden="true"></i></button ></td > ' + '</tr > ';
            }
            $('#tbodyid').html(s);
        },
        error: function (errres) {
            console.log(errres);
        }
    });
}

$(document).ready(function () {
    displaytable();
});

$(document).on("click", ".viewdetailsbtn", function (e) {
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
                $("#nameid").val(response.data[0].name);
                $("#brandid").val(response.data[0].brand);
                $("#categoryid").val(response.data[0].category);
                $("#skuid").val(response.data[0].sku);
                $("#priceid").val(response.data[0].price);
                $("#descriptionid").val(response.data[0].description);
            }
            else if (response.status == "fail") {
                str = '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Loading Data Error!</strong></div>';
                $("#editalertmsg").html(str);
            }
        },
        error: function (errres) { console.log("Error Occured : Loading Data into Form fields of modal") }
    });
});

$(document).on("click", "#publishbtnid", function (e) {
    e.preventDefault();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: base_url + '/setpublish',
        type: 'POST',
        dataType: 'JSON',
        data: {
            'id': eid
        },
        success: function (res) {
            let response = $.parseJSON(res);
            let str = '';
            if (response.status == "success") {
                str = '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Product Published Successfully!</strong></div>';
                $("#alertmsg").html(str);
                displaytable();
            }
            else if (response.status == "fail") {
                str = '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Product Published Unsuccessfully!</strong></div>';
                $("#alertmsg").html(str);
            }
        },
        error: function (errres) {
            console.log("Error Occured : Publish Product")
        }
    });
});

$(document).on("click", "#rejectbtnid", function (e) {
    e.preventDefault();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: base_url + '/setreject',
        type: 'POST',
        dataType: 'JSON',
        data: {
            'id': eid
        },
        success: function (res) {
            let response = $.parseJSON(res);
            let str = '';
            if (response.status == "success") {
                str = '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Product Published Successfully!</strong></div>';
                $("#alertmsg").html(str);
                displaytable();
            }
            else if (response.status == "fail") {
                str = '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Product Published Unsuccessfully!</strong></div>';
                $("#alertmsg").html(str);
            }
        },
        error: function (errres) {
            console.log("Error Occured : Reject Product")
        }
    });
});