<?php 
    require('header.php');
    require('modalRegister.php');
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Главная</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/main.css">
</head>

<body>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Регистрация</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
            </div>
            <div class="modal-body">
                <div >
                    <div class="mb-5 mt-5">
                        <div class="row">
                            <img src="/assets/images/logo_CI.png" style="width: 10rem; margin-top: 1rem;" class="mx-auto d-block"> 
                        </div>
                    </div>
                    <form action="reg.php" method="post">
                        <div class="input-group input-group-sm mx-auto mb-5 w-75 row">
                            <input type="text" class="justify-content-center form-control reg_place" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="почта" name="email">
                        </div>
                        <div class="input-group input-group-sm mx-auto mb-5 w-75 row">
                            <input type="text" class="justify-content-center form-control reg_place" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="логин" name="login">
                        </div>
                        <div class="input-group input-group-sm mx-auto mb-5 w-75 row">
                            <input type="text" class="justify-content-center form-control reg_place" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="пароль" name="pass">
                        </div>
                        <div class="text-center" style="margin-bottom: 2rem;">
                        <button type="submit" class="btn btn-primary w-50 btn-lg btn-dark row mb-3" style="border-radius: 27px; font-weight: 900; background-color: #214E41; color: white;">Войти</button>
                    </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-6" style="text-align: start;">
                        <a style="color: #214E41;" href="auth.php">Авторизация</a>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    <div class="container-fluid first">
        <div class="col-5">
            <p class="text-right text1_1">Начни медитировать онлайн с нами!</p>
            <p class="text-right text1_2">Есть вопросы? Оставь заявку и наш сотрудник вам перезвонит в течении дня.</p>
            <div class="input-group text1_3 mb-3">
                <input type="text" class="form-control" placeholder="+7 (9__) ___-__-__"
                    aria-describedby="button-addon2" style="min-width: 140px;">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2">Отправить</button>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="second">
            <p class="text-center text2_1">Как проходят наши занятия?<br><br></p>
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="row" style="margin-bottom: 20px;">
                        <div class="col-4 imgPlus">
                            <img class="w-100 img-fluid" style="margin: 15px; max-width: 150px; min-width: 70px;" src="assets/images/plus1.png" style="height: auto; min-width: 80px; max-width: 200px;" alt="#">
                        </div>
                        <div class="col-8">
                            <p style="font-size: 1.25rem; color: #214E41;"><b>Расскажи о своём первом опыте</b><br><br>Поделись со специалистом и участниками о медитациях, которые ты пробовал</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="row" style="margin-bottom: 20px;">
                        <div class="col-4 imgPlus">
                            <img class="w-100 img-fluid" style="margin: 15px; max-width: 150px; min-width: 70px;" src="assets/images/plus2.png" alt="#">
                        </div>
                        <div class="col-8">
                            <p style="font-size: 1.25rem; color: #214E41;"><b>Выбери тип медитации для себя</b><br><br>Ознакомься с видами успокаивающих практик и найди то, что тебе подходит больше всего</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="row" style="margin-bottom: 20px;">
                        <div class="col-4 imgPlus">
                            <img class="w-100 img-fluid" style="margin: 15px; max-width: 150px; min-width: 70px;" src="assets/images/plus3.png" alt="#">
                        </div>
                        <div class="col-8">
                            <p style="font-size: 1.25rem; color: #214E41;"><b>Почувствуй спокойствие внутри себя</b><br><br>Получи результат, наслаждаясь процессом</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="third" style="margin-top: 50px;">
            <div class="row">
                <div class="col-lg-6 col-md-12" style="text-align: left; margin: auto; max-width: 800px; padding: 40px;">
                    <p style="font-size: 1rem; color: #214E41;">ПОЧЕМУ 30% ЛЮДЕЙ УЖЕ ПРАКТИКУЮТ МЕДИТАЦИЮ?</p>
                    <p style="border-bottom: 2px solid #214E41;"></p>
                    <p style="font-size: 2.25rem; color: #214E41;">В современных реалиях широко распространён запрос на заботу и более глубокое понимание себя</p>
                    <p style="font-size: 1.5rem; color: #214E41;">Нужно уметь концентрироваться для того, чтобы лучше себя чувствовать внутренне, слышать свой организм. Благодаря чему удастся принимать правильные решения и достигать желаемого результата в любой сфере.</p>
                </div>
                <div class="col-lg-6 col-md-12" style="padding: 40px">
                    <img class="w-100 img-fluid" style="padding: 20px 40px 20px 20px;" src="assets/images/diagram.png" alt="#">
                    <div class="row" style="align-items: center;">
                        <div class="col-4" style="text-align: right;">
                            <p style="font-size: 3rem; font-weight: bold; color: #214E41; text-align: center;">61%</p>
                        </div>
                        <div class="col-7">
                            <p style="color:#214E41; text-align: left; font-size: 1.2rem;">людей, занимающихся медитацией, смогли уменьшить количество стресса в их жизнях</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="fourth">
            <div class="row">
                <div class="col-lg-6 col-md-12" style="background-color: #E3EEED; display: flex; min-height: 400px;">
                    <p style="color: #214E41; font-size: 2rem; margin: auto; padding-left: 40px; padding-right: 20px;">Медитация представляет собой эффективный инструмент для тренировки концентрации, открывающий способность к саморефлексии в настоящем моменте.</p>
                </div>
                <div class="col-lg-6 col-md-12" style="background-color: #214E41; font-size: 1.5rem; text-align: center; min-height: 400px; display: flex;">
                    <div style="margin: auto;">
                        <p style="color: white; padding: 0 30px 0 30px;">На нашем сайте можешь подробнее ознакомиться с небольшими видео по обучению для начинающих направлению успокаивающих практик</p>
                        <a style="color: white;" href="video.html">ВИДЕО-ОБУЧЕНИЕ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="fifth" style="margin-top: 50px;">
            <div class="row">
                <div class="col-lg-7 col-md-12" style=" min-height: 400px; display: flex; padding-left: 50px;">
                    <div style="margin: auto;">
                        <p style="color: #214E41; font-size: 2.25rem; font-weight: bold;">Залог успеха - регулярная медитация</p>
                        <p style="color: #214E41; font-size: 1.625rem;">Уделяя несколько десятков минут каждый день, ты можешь достичь множества положительных эффектов:</p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12" style="display: flex;">
                    <img style="margin: auto; max-width: 700px" class="w-100 img-fluid img1" src="assets/images/fon2.png" alt="#">
                </div>
            </div>
            <div class="row" style="font-size: 1.25rem; font-weight: bold; text-align: center; margin-bottom: 100px; margin-top: 100px;">
                <div class="col-lg-3 col-md-6 col-sm-12" style="margin-bottom: 50px;">
                    <img src="assets/images/adv11.png" alt="#" style="height: auto; width: 10rem; margin-bottom: 50px;">
                    <p style="font-size: 1.8rem;">Ощущение бодрости тела</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12" style="margin-bottom: 50px;">
                    <img src="assets/images/adv12.png" alt="#" style="height: auto; width: 10rem; margin-bottom: 50px;">
                    <p style="font-size: 1.8rem;">Рост уверенности в себе</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12" style="margin-bottom: 50px;">
                    <img src="assets/images/adv13.png" alt="#" style="height: auto; width: 10rem; margin-bottom: 50px;">
                    <p style="font-size: 1.8rem;">Повышенная концентрация внимания</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12" style="margin-bottom: 50px;">
                    <img src="assets/images/adv14.png" alt="#" style="height: auto; width: 10rem; margin-bottom: 50px;">
                    <p style="font-size: 1.8rem;">Улучшение контроля над эмоциями</p>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="row" style="background-color: #214E41; margin: 0;">
            <div class="col-1"></div>
            <div class="col-10" style="text-align: center;">
                <p style="font-size: 1.5rem; color: #E3EEED; border-bottom: 2px solid #E3EEED;">CalmInside</p>
            </div>
            <div class="col-1"></div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>