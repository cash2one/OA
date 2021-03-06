$('#add_customer_form').validate({
    errorElement: 'span', //default input error message container
    errorClass: 'help-block help-block-error', // default input error message class
    focusInvalid: false, // do not focus the last invalid input
    ignore: "", // validate all fields including form hidden inpu
    messages: {},
    rules: {
        username: {
            required: true,
            minlength: 1
        },
        toplimit: {
            required: true,
            minlength: 1
        },
        team: {
            required: true,
            minlength: 1
        }
    },
    errorPlacement: function (error, element) { // render error placement for each input type
        var icon = $(element).parent('.input-icon').children('i');
        icon.removeClass('fa-check').addClass("fa-warning");
        icon.attr("data-original-title", error.text()).tooltip({'container': 'body'});
    },
    highlight: function (element) { // hightlight error inputs
        $(element).closest('.col-md-3').addClass('has-error'); // set error class to the control group
    },
    unhighlight: function (element) { // revert the change done by hightlight
        $(element).closest('.col-md-3').removeClass('has-error'); // set error class to the control group
    },
    success: function (label, element) {
        var icon = $(element).parent('.input-icon').children('i');
        $(element).closest('.col-md-3').removeClass('has-error').addClass('has-success'); // set success class to the control group
        icon.removeClass("fa-warning").addClass("fa-check");
    },
    submitHandler: function (form) {
        var data = $("#add_customer_form").serializeJson();
        data.action = 1;
        var ather = (data.ather).split(",");
        if (ather.indexOf("qqReception") !== -1) {
            data.qqReception = 1;
        }
        if (ather.indexOf("tmallReception_qj") !== -1) {
            data.tmallReception_qj = 1;
        }
        if (ather.indexOf("tmallReception_zy") !== -1) {
            data.tmallReception_zy = 1;
        }
        ycoa.ajaxLoadPost("/api/sale/customer.php", JSON.stringify(data), function (result) {
            if (result.code == 0) {
                $("#btn_close_primary").click();
                ycoa.UI.toast.success(result.msg);
                CustomerListViewModel.listCustomer({});
            } else {
                ycoa.UI.toast.error(result.msg);
            }
            ycoa.UI.block.hide();
        });
    }
});