<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/questionaire.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="background-color:aquamarine;" >
    <div style="margin: 2rem;
                display: flex;
                justify-content: center;">
        <form style="background-color: #FFFFFF;
                    text-align: center; 
                    border: 1px solid;
                    border-radius: 50px; 
                    margin: auto;
                    padding-top: 3rem;
                    padding-bottom: 2rem;">
            <p class="title">
                Оцените ваше самочувствие до медитации
            </p>
            <div style="margin: auto;
                        margin-top: 2rem;">
                <p style="font-size: 1.25rem;">Настроение</p>
                <div class="smiles">
                    <div class="smile"><img src="assets/images/smile_1.png" alt=""></div>
                    <div class="smile"><img src="assets/images/smile_2.png" alt=""></div>
                    <div class="smile"><img src="assets/images/smile_3.png" alt=""></div>
                    <div class="smile"><img src="assets/images/smile_4.png" alt=""></div>
                    <div class="smile"><img src="assets/images/smile_5.png" alt=""></div>
                    <div class="smile"><img src="assets/images/smile_6.png" alt=""></div>
                    <div class="smile"><img src="assets/images/smile_7.png" alt=""></div>
                    <div class="smile"><img src="assets/images/smile_1.png" alt=""></div>
                    <div class="smile"><img src="assets/images/smile_2.png" alt=""></div>
                    <div class="smile"><img src="assets/images/smile_3.png" alt=""></div>
                    <div class="smile"><img src="assets/images/smile_4.png" alt=""></div>
                    <div class="smile"><img src="assets/images/smile_5.png" alt=""></div>
                    <div class="smile"><img src="assets/images/smile_6.png" alt=""></div>
                    <div class="smile"><img src="assets/images/smile_7.png" alt=""></div>
                    <div class="smile"><img src="assets/images/smile_1.png" alt=""></div>
                    <div class="smile"><img src="assets/images/smile_2.png" alt=""></div>
                    <div class="smile"><img src="assets/images/smile_3.png" alt=""></div>
                    <div class="smile"><img src="assets/images/smile_4.png" alt=""></div>
                    <div class="smile"><img src="assets/images/smile_5.png" alt=""></div>
                    <div class="smile"><img src="assets/images/smile_6.png" alt=""></div>
                    <div class="smile"><img src="assets/images/smile_7.png" alt=""></div>
                    <div class="smile"><img src="assets/images/smile_1.png" alt=""></div>
                    <div class="smile"><img src="assets/images/smile_2.png" alt=""></div>
                    <div class="smile"><img src="assets/images/smile_3.png" alt=""></div>
                    <div class="smile"><img src="assets/images/smile_4.png" alt=""></div>
                    <div class="smile"><img src="assets/images/smile_5.png" alt=""></div>
                    <div class="smile"><img src="assets/images/smile_6.png" alt=""></div>
                    <div class="smile"><img src="assets/images/smile_7.png" alt=""></div>
                </div>
            </div>
            <div style="margin: auto;">
                <p style="font-size: 1.25rem; margin: 1.5rem;">Напряженность</p>
                <div class="slider">
                    <output class="for-slider-input" for="fader1" id="volume1">0</output>
                    <input  class="slider-input"  type="range" id="fader1" 
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
            <div style="margin: auto;">
                <p style="font-size: 1.25rem; margin-top: 0.5rem;">Рассеянность/Внимательность</p>
                <div class="slider">
                    <output class="for-slider-input" for="fader2" id="volume2">0</output>
                    <input  class="slider-input"  type="range" id="fader2" 
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
            <div style="margin: auto;">
                <p style="font-size: 1.25rem; margin: 1.5rem;">Усталость/Бодрость</p>
                <div class="slider">
                    <output class="for-slider-input" for="fader3" id="volume3">0</output>
                    <input  class="slider-input"  type="range" id="fader3" 
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
            <div class="container" style="margin: auto;">
                <p style="font-size: 1.25rem;">Комментарий</p>
                <div class="for-comment">
                    <textarea class="comment" style="min-height: 100px; max-height: 100px;">

                    </textarea>
                </div>
            </div>
            <div class="buttons">
                <div class="skip">
                    <button class="button-skip">Пропустить</button>
                </div>
                <div class="send">
                    <button class="button-send">Отправить</button>
                </div>
            </div>
        </form>
    </div>

    <script type="text/javascript">
        function outUpdate1(vol){
            var output = document.querySelector('#volume1');
            output.value = vol;
            output.style.left = vol*2.45 + 'px';
        }
        function outUpdate2(vol){
            var output = document.querySelector('#volume2');
            output.value = vol;
            output.style.left = vol*2.45 + 'px';
        }
        function outUpdate3(vol){
            var output = document.querySelector('#volume3');
            output.value = vol;
            output.style.left = vol*2.45 + 'px';
        }
    </script>

</body>
</html>