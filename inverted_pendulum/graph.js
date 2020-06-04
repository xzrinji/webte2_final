
function graphs() {

    var canvas = document.getElementById('myChart');
    var canvas2 = document.getElementById('myChart2');
    new Chart(canvas, {
        type: 'line',
        data: {
            labels: t,
            datasets: [{
                label: 'V čase meniaca sa pozícia kyvadla',
                yAxisID: 'A', //
                data: y,
            }, {
<<<<<<< HEAD
                label: 'To druhvo',
=======
                label: 'Uhol vychýlenia v radianoch',
>>>>>>> f8cdbae8a8a38621e336351a5281543be34a204b
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
                data: y,
            }, {
                label: 'To druhvo',
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


}


