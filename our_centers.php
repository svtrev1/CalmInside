<?php 
    require('modalRegister.php');
    require('modalAuth.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Наши Центры</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/main.css">
    <link rel="stylesheet" href="assets/our_centers.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
</head>
<?php 
    require('header.php');
?>
<body>

    <div class="build-center" style="height: 50rem;">
        <div class="build-center-offer w-100">
            <h1>Исследуйте мир медитации</h1>
        </div>
    </div>



    <div class="first-room" style="background-color: #E3EEED; display: block;">
        <div class="first-room-title">
            <p>Погрузитесь в гармонию</p>
        </div>
        <div class="first-room-line1">
            <p style="border-bottom: 4px solid #214E41;"></p>
        </div>
        <div class="row gy-5" style="margin-left: 3rem; margin-right: 3rem; padding-bottom: 50px;">
            <div class="first-room-img col-12 col-xl-7 my-2" style="display: flex; justify-content: center;">
                <img class="img-fluid" src="assets/images/our_centers_class1.png">
            </div>
            <div class="first-room-description col-12 col-xl-5 my-2" style="text-align: center; display: flex;">
                <p style="margin: auto;">Каждый центр выбран с особым вниманием к деталям. 
                    Мы сотрудничаем с опытными и профессиональными инструкторами, 
                    которые помогут вам освоить различные техники медитации и научат 
                    вас достигать глубокого покоя и внутреннего равновесия.</p>
                    
            </div>
        </div>
    </div>


    <div class="second-room" >
        <div class="second-room-title">
            <p style="margin-top: 3rem; margin-bottom: 2rem;">Место, где рождаются глубокая
                релаксация и осознанность</p>
        </div>
        <div class="first-room-line2">
            <p style="border-bottom: 4px solid #214E41;"></p>
        </div>
        <div class="row row2 gy-5">
            <div class="second-room-description col-12 col-xl-5" style="text-align: center; display: flex;">
                <p style="margin: auto;">Медитационные центры обладают уникальной энергией и специальной атмосферой, 
                    которые помогут вам погрузиться в глубокое состояние расслабления и осознанности. 
                    Вы сможете насладиться тишиной и покоем, забыв о повседневных заботах и стрессе.</p>  
            </div>
            <div class="second-room-img col-12 col-xl-7" style="display: flex; justify-content: center;">
                <img class="img-fluid" src="assets/images/our_centers_class2.png" >
            </div>
        </div>
    </div>






    <footer style="width: 100%;">
        <div class="row" style="background-color: #214E41;">
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