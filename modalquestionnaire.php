

<div class="modal fade" id="questionnaire" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="margin: auto;">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Оцените ваше самочувствие</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
        </div>
        <div class="modal-body">
            <form action="BDquest.php" metod="get">
                <input type="hidden" name="state" value="<?=$_SESSION['def_or_aft']?>"></input>
                
                <div>
                    <h5 style="text-align: center;">Настроение</h5>
                    <div class="smiles">
                        <div class="smile"><input id="radio-1" type="radio" name="radio" value="1" checked><img src="assets/images/smile_1.png" alt=""></div>
                        <div class="smile"><input id="radio-2" type="radio" name="radio" value="2" checked><img src="assets/images/smile_2.png" alt=""></div>
                        <div class="smile"><input id="radio-3" type="radio" name="radio" value="3" checked><img src="assets/images/smile_3.png" alt=""></div>
                        <div class="smile"><input id="radio-4" type="radio" name="radio" value="4" checked><img src="assets/images/smile_4.png" alt=""></div>
                        <div class="smile"><input id="radio-5" type="radio" name="radio" value="5" checked><img src="assets/images/smile_5.png" alt=""></div>
                        <div class="smile"><input id="radio-6" type="radio" name="radio" value="6" checked><img src="assets/images/smile_6.png" alt=""></div>
                        <div class="smile"><input id="radio-7" type="radio" name="radio" value="7" checked><img src="assets/images/smile_7.png" alt=""></div>
                    </div>
                </div>
                <div>
                    <h5 style="text-align: center;">Напряженность/Расслабленность</h5>
                    <div class="slider">
                        <div style="text-align: center;">
                            <output class="for-slider-input" for="fader1" id="volume1">0</output>
                        </div>
                        <input  class="slider-input"  type="range" id="fader1" name="tension"
                                min="-100" max="100" value="0" step="1" oninput="outUpdate1(value)">
                        <div class="serifs">
                            <div class="serif"></div>
                            <div class="serif"></div>
                            <div class="serif"></div>
                            <div class="serif"></div>
                            <div class="serif"></div>
                            <div class="serif"></div>
                            <div class="serif"></div>
                            <div class="serif"></div>
                            <div class="serif"></div>
                            <div class="serif"></div>
                            <div class="serif"></div>
                        </div>
                        <div class="number-percent">
                            <p class="percent">-100%</p>
                            <p class="percent">0%</p>
                            <p class="percent">100%</p>
                        </div>
                    </div>
                </div>
                <div>
                    <h5 style="text-align: center;">Рассеянность/Внимательность</h5>
                    <div class="slider">
                        <div style="text-align: center;">
                            <output class="for-slider-input" for="fader1" id="volume2">0</output>
                        </div>
                        <input  class="slider-input"  type="range" id="fader2" name="attentiveness"
                                min="-100" max="100" value="0" step="1" oninput="outUpdate2(value)">
                        <div class="serifs">
                            <div class="serif"></div>
                            <div class="serif"></div>
                            <div class="serif"></div>
                            <div class="serif"></div>
                            <div class="serif"></div>
                            <div class="serif"></div>
                            <div class="serif"></div>
                            <div class="serif"></div>
                            <div class="serif"></div>
                            <div class="serif"></div>
                            <div class="serif"></div>
                        </div>
                        <div class="number-percent">
                            <p class="percent">-100%</p>
                            <p class="percent">0%</p>
                            <p class="percent">100%</p>
                        </div>
                    </div>
                </div>
                <div>
                    <h5 style="text-align: center;">Усталость/Бодрость</h5>
                    <div class="slider">
                        <div style="text-align: center;">
                            <output class="for-slider-input" for="fader1" id="volume3">0</output>
                        </div>
                        <input  class="slider-input"  type="range" id="fader3" name="cheerfulness"
                                min="-100" max="100" value="0" step="1" oninput="outUpdate3(value)">
                        <div class="serifs">
                            <div class="serif"></div>
                            <div class="serif"></div>
                            <div class="serif"></div>
                            <div class="serif"></div>
                            <div class="serif"></div>
                            <div class="serif"></div>
                            <div class="serif"></div>
                            <div class="serif"></div>
                            <div class="serif"></div>
                            <div class="serif"></div>
                            <div class="serif"></div>
                        </div>
                        <div class="number-percent">
                            <p class="percent">-100%</p>
                            <p class="percent">0%</p>
                            <p class="percent">100%</p>
                        </div>
                    </div>
                </div>
                <!-- <div class="container" style="margin: auto;">
                    <h5 style="text-align: center;">Комментарий</h5>
                    <div style="margin-top: 30px;">
                        <textarea class="comment" name="comment" value="">
    
                        </textarea>
                    </div>
                </div> -->
                <div class="buttons">
                    <div class="skip">
                        <button class="button-skip" data-bs-dismiss="modal">Пропустить</button>
                    </div>
                    <div class="send">
                        <button type="submit" class="button-send"  data-bs-toggle="modal" >Отправить</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
    function outUpdate1(vol){
        var output = document.querySelector('#volume1');
        output.value = vol;
        output.style.left = vol*1.8  + 'px';
    }
    function outUpdate2(vol){
        var output = document.querySelector('#volume2');
        output.value = vol;
        output.style.left = vol*1.8 + 'px';
    }
    function outUpdate3(vol){
        var output = document.querySelector('#volume3');
        output.value = vol;
        output.style.left = vol*1.8 + 'px';
    }
</script>
