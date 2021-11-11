$(document).ready(function() {
    $(function() {
        login = () => {
            $("#login").hide();
            $("#registration").show();
        };
        signup = () => {
            $("#registration").hide();
            $("#login").show();
        };

        $("#frm-signup").submit(function(event) {
            event.preventDefault();

            const name = $("#name").val();
            const email = $("#email").val();
            const password = $("#password").val();
            if (name.length == "") {
                $(".name").addClass("is-invalid");
            } else {
                $(".name").removeClass("is-invalid");
            }

            if (email.length == "") {
                $(".email").addClass("is-invalid");
            } else {
                $(".email").removeClass("is-invalid");
            }

            if (password.length == "") {
                $(".password").addClass("is-invalid");
            } else {
                $(".password").removeClass("is-invalid");
            }
            if (name.length != "" && email.length != "" && password.length != "") {
                let options = {
                    "url": "http://localhost/login&registration/l&ssystem/signup.php",
                    "method": "post",
                    "data": $("#frm-signup").serialize(),
                    datatype: 'JSON',
                    success: function(feedback) {
                        if (feedback.status == "error") {
                            $(".email").addClass("is-invalid");
                            $(".emailError").html(feedback.message);
                        } else if (feedback.status == "success") {
                            window.location.assign("http://localhost/login&registration/l&ssystem/login.php")
                        }
                    },
                    "error": function(err) {

                    }
                }
                $.ajax(options);
            };

        });


        $("#login").submit(function(event) {
            event.preventDefault();
            const email = $("#email1").val();
            const password = $("#password1").val();
            if (email.length == "") {
                $(".email1").addClass("is-invalid");
            } else {
                $(".email1").removeClass("is-invalid");
            }

            if (password.length == "") {
                $(".password1").addClass("is-invalid");
            } else {
                $(".password1").removeClass("is-invalid");
            }

            if (email.length != "" && password.length != "") {
                $.ajax({
                    type: 'POST',
                    url: 'login.php',
                    data: $("#frm-login").serialize(),
                    success: function(feedback) {
                        if (feedback.status === "success") {
                            window.location = "home.php";
                        } else if (feedback.status === "passwordError") {
                            $(".password1").addClass("is-invalid");
                            $(".passwordError").html(feedback.message);
                            $(".email1").removeClass("is-invalid");
                            $(".emailError1").html("");

                        } else if (feedback.status === "emailError") {
                            $(".password1").removeClass("is-invalid");
                            $(".passwordError").html("");
                            $(".email1").addClass("is-invalid");
                            $(".emailError1").html(feedback.message);
                        }
                    }
                })
            }
        });


    });
})