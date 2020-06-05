
function graphs() {

    var canvas = document.getElementById('myChart');
    var canvas2 = document.getElementById('myChart2');
    new Chart(canvas, {
        type: 'line',
        data: {
            labels: t,
            datasets: [{
                label: 'V čase meniaca sa pozícia kyvadla',
                borderColor: 'rgb(0,0,255)',
                yAxisID: 'A', //
                data: y,
            }, {
                label: 'Uhol vychýlenia v radianoch',
                borderColor: 'rgb(255,140,0)',
                yAxisID: 'B', //
                data: a,
            }]
        },
        options: {
            scales: {
                yAxes: [{
                   // stacked : true,

                    id: 'A',
                    type: 'linear',
                    position: 'left',
                }, {
                    id: 'B',
                    type: 'linear',
                    position: 'left',

                }]
            }
        }
    });
    new Chart(canvas2, {
        type: 'line',
        data: {
            labels: t,
            datasets: [{
                label: 'V čase meniaca sa pozícia kyvadla',
                yAxisID: 'A', //
                borderColor: 'rgb(0,0,255)',
                data: y,
            }, {
                label: 'Uhol vychylenia v radianoch',
                yAxisID: 'B', //
                borderColor: 'rgb(255,140,0)',
                data: a,
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    // stacked : true,

                    id: 'A',
                    type: 'linear',
                    position: 'left',
                }, {
                    id: 'B',
                    type: 'linear',
                    position: 'left',

                }]
            }
        }
    });


}


