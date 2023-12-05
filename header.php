
<header>
    <nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="assets/images/logo_CI.png" alt="#" height="85">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="main.php">Главная</a></li>
                    <li class="nav-item"><a class="nav-link" href="music.php">Музыка</a></li>
                    <li class="nav-item"><a class="nav-link" href="video.php">Видео-обучение</a></li>
                    <li class="nav-item"><a class="nav-link" href="our_centers.php">Наши центры</a></li>
                    <li class="nav-item"><a class="nav-link" href="about_us.php">О нас</a></li>

                 <?php
                    if (!empty($_COOKIE['login']))
                    {
                        if (($_COOKIE['meditation']) == 1)
                        {
                            echo'<li class="nav-item"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#questionnaire">Закончить медитацию</button></li>';
                        }
                        else 
                        {
                            echo'<li class="nav-item"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#questionnaire">Начать медитацию</button></li>';
                        }
                        }
                    if (!empty($_COOKIE['login']))
                    {
                       echo'<button type="button" class="btn btn_header"><a href="user_profile.php?state=0"><img src="assets/images/users.png" width="30rem" height="auto"></a></button>';
                    }
                    else 
                    {
                        echo'<button type="button" class="btn btn_header"><a href="register_page.php"><img src="assets/images/users.png" width="30rem" height="auto"></a></button>';
                    }
                ?>

                </ul>
            </div>
        </div>
    </nav>
</header>