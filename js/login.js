$('.btn_login').on('click', function (e) {
    e.preventDefault();
    var login = {
            email: $('input[name="email"]'),
            password_1: $('input[name="password_1"]')
        },
        login_request = {
            email: login.email.val(),
            password_1: login.password_1.val()
        },
        error = false;
    if (login_request.email.trim() === "") {
        login.email.addClass('error');
        error = true;
    }
    if (login_request.password_1.trim() === "") {
        login.password_1.addClass('error');
        error = true;
    }

    if (!error) {
        $.post(
            '../controllers/login.php',
            login_request,
            function (response) {
                if (response.success) {
                    window.location.assign(response.url);
                } else {
                    // window.location.assign('/');
                    echo('Неправильный email или password!');
                }
            },
            'json'
        );
    }
});
