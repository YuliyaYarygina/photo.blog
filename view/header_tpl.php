<header>
    <section>
        <div>
            <div>

                <!-- Image and text -->
                <nav class="navbar navbar-light bg-light">
                    <div class="container-brand">
                        <div class="brand">
                            <a class="navbar-brand" href="/">
                                <img src="/img/favicon/icons8-camera-addon-64.png" width="30" height="30"
                                     class="d-inline-block align-top" alt="" loading="lazy">
                                 <?= $config['brand'] ?>
                            </a>
                        </div>
                        <div class="author">
                            <h3 class="header-author"> <?= $config['author'] ?> </h3>
                        </div>
                    </div>
                    <div class="header-name">
                        <h3>
                            <a href="/"> <?= $config['name']; ?> </a>
                        </h3>
                    </div>
                </nav>
            </div>
        </div>
        <nav class="navbar-menu">
            <div class="nav">
                <a class="navbar-menu-link" href="/"> Главная </a>
                <a class="navbar-menu-link" href="../view/articles_tpl.php"> Статьи </a>
                <a class="navbar-menu-link" href="../view/portfolio_tpl.php"> Портфолио </a>
                <a class="navbar-menu-link" href="../view/author_tpl.php"> Про автора </a>
                <a class="navbar-menu-link" href="../view/contacts_tpl.php"> Контакты </a>
            </div>
                <div class="login-container">
                    <? if (!isset($_SESSION['access']) && $_SESSION['access'] !== true) : ?>
                        <ul class="login-container">
                            <li class="menu-item">
                                <button type="button" class="btn_log" data-toggle="modal" data-target="#loginModal">
                                    <span class="btn_log_text"> Авторизация </span>
                                </button>
                                <? include('modal_login_tpl.php'); ?>
                            </li>
                            <li class="menu-item">
                                <button type="button" class="btn_reg" data-toggle="modal"
                                        data-target="#registrationModal">
                                    <span class="btn_reg_text"> Регистрация </span>
                                </button>
                                <? include('modal_registration_tpl.php'); ?>
                            </li>
                        </ul>
                    <? endif; ?>
                    <? if (isset($_SESSION['access'])): ?>
                        <ul class="login-container">
                            <li class="menu-item"><a href="../controllers/logout.php"> <i></i> Выйти </a></li>
                            <li class="menu-item"><a href="#">
                            <span class="hello"><p>Привет, <span><?= $_SESSION['username'] ?></span></p>
                                </a></li>
                        </ul>
                    <? endif; ?>
                </div>
        </nav>
    </section>
</header>
