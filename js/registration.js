$('.send_reg').on('click', function (e) {
    e.preventDefault();
    var $self = $(this),
        data = {
            username: $('input[name="username"]'),
            email: $('input[name="email"]'),
            password_1: $('input[name="password_1"]'),
            password_2: $('input[name="password_2"]'),
            status: $('input[name="status"]')
        },
        data_request = {
            username: $self.closest('.modal').find(data.username).val(),
            email: $self.closest('.modal').find(data.email).val(),
            password_1: $self.closest('.modal').find(data.password_1).val(),
            password_2: $self.closest('.modal').find(data.password_2).val(),
            status: data.status.val()
        },
        error = false;
    if (data_request.username.trim() === "") {
        data.username.addClass('error');
        error = true;
    }
    if (data_request.email.trim() === "") {
        data.email.addClass('error');
        error = true;
    }
    if (data_request.password_1.trim() === "") {
        data.password_1.addClass('error');
        error = true;
    }
    if (data_request.password_2.trim() === "") {
        data.password_2.addClass('error');
        error = true;
    }

    if (!error) {
        $.post(
            '../controllers/registration.php',
            data_request,
            function (response) {
                if (response.success) {
                    window.location.assign(response.url);
                } else {
                    alert('Не все поля заполнены!');
                }
            },
            'json'
        );
    }
});

