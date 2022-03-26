$(document).ready(function(){
    $('.arrow-right').click(function () {
        $('.owl-carousel').trigger('next.owl.carousel');
    }); 
    $('.arrow-left').click(function () {
        $('.owl-carousel').trigger('prev.owl.carousel', [300]);
    });
    $(".closeBtn").click(() => {
        $("#modal-login, #modal-signup").css("display", "none");
        $("main, header, footer").css("filter", "");
    })
    $(".loginBtn").click(() => {
        $("#modal-login").css("display", "block");
        $("main, header, footer").css("filter", "blur(4px)");
    })
    $(".signupBtn").click(() => {
        $("#modal-signup").css("display", "block");
        $("main, header, footer").css("filter", "blur(4px)");
    })
    $("#signupSubmitBtn").click((e) => {
        var nameRe = /^[A-Z][a-z]*/,
        usernameRe = /^\w{5,10}$/,
        emailRe = /^[^@\s]+@[^@\s]+\.[^@\s]+$/,
        passwordRe = /^[A-Z][a-z]+\d{3}$/;
        var name = $("#nameInput").val();
        var surname = $("#surnameInput").val();
        var username = $("#usernameInput").val();
        var email = $("#emailInput").val();
        var password = $("#passwordInput").val();
        if (name == "") {
            $("#nameError").html("Name can't be empty!");
            e.preventDefault();
        } 
        else {
            if (nameRe.test(name)) {
                $("#nameError").html('');
            } else {
                $("#nameError").html("Name needs to start with a capital letter and only contain text");
                e.preventDefault();
            }
        }
        if (surname == "") {
            $("#surnameError").html("Surname can't be empty!");
            e.preventDefault();
        } 
        else {
            if (nameRe.test(surname)) {
                $("#surnameError").html('');
            } else {
                $("#surnameError").html("Surname needs to start with a capital letter and only contain text");
                e.preventDefault();
            }
        }
        if (email == "") {
            $("#emailError").html("Email can't be empty!");
            e.preventDefault();
        } 
        else {
            if (emailRe.test(email)) {
                $("#emailError").html('');
            } else {
                $("#emailError").html("Email needs to be in the proper format!");
                e.preventDefault();
            }
        }
        if (password == "") {
            $("#passwordError").html("Password can't be empty!");
            e.preventDefault();
        } 
        else {
            if (passwordRe.test(password)) {
                $("#passwordError").html('');
            } else {
                $("#passwordError").html("Password needs start with a capital letter and contain 3 digits at the end!");
                e.preventDefault();
            }
        }
        if (username == "") {
            $("#usernameError").html("Username can't be empty!");
            e.preventDefault();
        } 
        else {
            if (usernameRe.test(username)) {
                $("#usernameError").html('');
            } else {
                $("#usernameError").html("Username needs to be between 8 and 15 characters");
                e.preventDefault();
            }
        }
    })
    $(".kerkesat-options_element").click(function () {
        $(".kerkesat-options_element").removeClass("active-option");
        $(this).addClass("active-option");
        $(".kerkesat-options .right").css("background-image", `url('img/${$(this).attr('id')}.jpg')`);
    })
    $(".reviewBtn").click(function() {
        $(".kritika").css("display", "flex");
    })
    $(".closeRishikimi").click(function() {
        $(".kritika").css("display", "none");
    })
});