
<body>
    <div class="modal fade" id="modalAuth" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">Авторизация</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <div class="mb-5 mt-5">
                            <div class="row">
                                <img src="assets/images/logo_CI.png" style="width: 10rem; margin-top: 1rem;"
                                    class="mx-auto d-block">
                            </div>
                        </div>
                        <form action="BDauth.php" method="post">
                            <div class="input-group input-group-sm mx-auto mb-5 w-75 row">
                                <input type="text" class="justify-content-center form-control reg_place"
                                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"
                                    placeholder="логин" name="login">
                            </div>
                            <div class="input-group input-group-sm mx-auto mb-5 w-75 row">
                                <input type="text" class="justify-content-center form-control reg_place"
                                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"
                                    placeholder="пароль" name="pass">
                            </div>
                            <div class="text-center" style="margin-bottom: 2rem;">
                                <button type="submit" class="btn btn-primary w-50 btn-lg btn-dark row mb-3"
                                    style="border-radius: 27px; font-weight: 900; background-color: #214E41; color: white;">Войти!</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div style="color: red;"><?=$error?></div>
                <div class="modal-footer">
                    <div class="row">
                        <div style="text-align: start;">
                            <button type="button" class="btn-outline-success"data-bs-toggle="modal" data-bs-target="#modalReg">Регистрация</button> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>