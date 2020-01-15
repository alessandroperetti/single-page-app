$(document).ready(function() {
    let result;
    $("#send-email").submit(function (event) {
        event.preventDefault();
        $("#button-send-email").prop("disabled", true);
        $("#name, #email, #query").css("background-color","#ffffff");
        //Check if the values are inserted
        if($("#name").val() == ''){
            $("#name").css("background-color","#ff00002e");
            result = "-2";
            $('#email-modal').modal();
            return;
        }
        if($("#email").val() == ''){
            $("#email").css("background-color","#ff00002e");
            result = "-3";
            $('#email-modal').modal();
            return;
        }
        if($("#query").val() == ''){
            $("#query").css("background-color","#ff00002e");
            result = "-4";
            $('#email-modal').modal();
            return;
        }

        $.ajax({
            type: "POST",
            url: "php/send_email.php",
            data: $("#send-email").serialize()
        }).done(function (data) {
            result = data;
            $('#email-modal').modal();
            $("#button-send-email").prop("disabled", false);
            $("#name, #email, #query").val("");
        });
    });

    $('#email-modal').on('show.bs.modal', function (e) {
        var body = "";
        if(result == "0"){
            body = "The email has been sent!"
        }
        if(result == "-1"){
            body = "The email has not been sent!"
        }
        if(result == "-2"){
            body = "Insert a valid name!"
        }
        if(result == "-3"){
            body = "Insert a valid email!"
        }
        if(result == "-4"){
            body = "Insert a valid message!"
        }
        var modal = $(this);
        modal.find('.modal-body p').html(body);
    });


    $('#email-modal').on('hide.bs.modal', function (e) {
        $("#button-send-email").prop("disabled", false);
    })
});
