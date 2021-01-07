<!-- Modal -->
<div class="modal fade" id="registrationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Регистрация</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="parent">
                    <div class="block">
                        <form method="post" action="" class="form_reg">
                            <div class="form-group">
                                <label for="inputUsername3">Username</label>
                                <div>
                                    <input class="user_reg" type="text" name="username" value="" placeholder="login" required>
                                    <br>
                                    <small id="usernameHelp" class="form-text text-muted">Можно использовать А-Я, а-я, A-Z, a-z,
                                        1-0</small>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3">Email</label>
                                <div>
                                    <input class="user_reg" type="email" name="email" value="" placeholder="name@gmail.com" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3">Password</label>
                                <div>
                                    <input class="user_reg" type="password" name="password_1" value="" required>
                                    <br>
                                    <small id="passwordHelp" class="form-text text-muted">Можно использовать A-Z, a-z, 1-0,
                                        спец.символы. Минимум 6 символов</small>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3">Confirm password</label>
                                <div>
                                    <input class="user_reg" type="password" name="password_2" value="" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div>С правилами и условиями ознакомилась/лся</div>
                                <div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck1" name="status" required>
                                        <label class="form-check-label" for="gridCheck1">
                                            Принимаю
                                        </label>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрить</button>
                <button type="submit" class="btn btn_reg send_reg" name="reg_user">Отправить</button>
            </div>
        </div>
    </div>
</div>