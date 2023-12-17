var week = [];
    var week_for_db = [];
    var now = new Date();
    for(var i = 6; i >= 0; i--){
        var d = new Date(now.getFullYear(), now.getMonth(), now.getDate()-i)
        week.push(d.getDate().toString()+'.'+(d.getMonth()+1).toString())
        if(d.getDate() < 10){
            week_for_db.push(d.getFullYear().toString()+'-'+(d.getMonth()+1).toString()+'-0'+d.getDate().toString()) 
        }else{
            week_for_db.push(d.getFullYear().toString()+'-'+(d.getMonth()+1).toString()+'-'+d.getDate().toString())
        }
    }
    
    var tension0 = [];
    var tension1 = [];
    var attentiveness0 = [];
    var attentiveness1 = [];
    var cheerfulness0 = [];
    var cheerfulness1 = [];

    // Создаем новый XMLHttpRequest объект
    var xhr = new XMLHttpRequest();

    // Открываем соединение и отправляем запрос к phpMyAdmin
    xhr.open('GET', 'BD_for_user_profile.php');
    
    xhr.responseType = 'json';

    xhr.onload = () => {
        // console.log(xhr.response);
        for(var j = 0, i = 0, k = 0; j < xhr.response.length; j++){
            if(xhr.response[j].bef_or_aft.toString() == '0'){
                if(xhr.response[j].data.toString() == week_for_db[i]){
                    tension0.push(Number(xhr.response[j].tension));
                    attentiveness0.push(Number(xhr.response[j].attentiveness));
                    cheerfulness0.push(Number(xhr.response[j].cheerfulness));
                    i++
                }else if(i > 0){
                    tension0.push(null);
                    attentiveness0.push(null);
                    cheerfulness0.push(null);
                    i++
                }
            }
            else{
                if(xhr.response[j].data.toString() == week_for_db[k]){
                    tension1.push(Number(xhr.response[j].tension));
                    attentiveness1.push(Number(xhr.response[j].attentiveness));
                    cheerfulness1.push(Number(xhr.response[j].cheerfulness));
                    k++
                }else if(k > 0){
                    tension1.push(null);
                    attentiveness1.push(null);
                    cheerfulness1.push(null);
                    k++
                }
            }
        }
        // console.log(tension0)
        // console.log(tension1)
    }

    xhr.send();
    // console.log(xhr);

    const ctx1 = document.getElementById('myChart1');
    new Chart(ctx1, {
        type: 'line',
        data: {
        labels: week,
        datasets: [{
            label: 'до',
            data: tension0,
            borderWidth: 2
        },{
            label: 'после',
            data: tension1,
            borderWidth: 2
        }]
        },
        options: {
        scales: {
            yAxes: {
            min: -100,
            max: 100
            },
            y: {
                display: false,
             }
        }
        }
    });

    const ctx2 = document.getElementById('myChart2');
    new Chart(ctx2, {
        type: 'line',
        data: {
        labels: week,
        datasets: [{
            label: 'до',
            data: attentiveness0,
            borderWidth: 2
        },{
            label: 'после',
            data: attentiveness1,
            borderWidth: 2
        }]
        },
        options: {
        scales: {
            yAxes: {
            min: -100,
            max: 100
            },
            y: {
                display: false,
             }
        }
        }
    });

    const ctx3 = document.getElementById('myChart3');
    new Chart(ctx3, {
        type: 'line',
        data: {
        labels: week,
        datasets: [{
            label: 'до',
            data: cheerfulness0,
            borderWidth: 2
        },{
            label: 'после',
            data: cheerfulness1,
            borderWidth: 2
        }]
        },
        options: {
        scales: {
            yAxes: {
            min: -100,
            max: 100
            },
            y: {
                display: false,
             }
        }
        }
    });