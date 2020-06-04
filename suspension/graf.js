
function graphs() {

    var ctx = document.getElementById('myChart').getContext('2d');
    var ctx2 = document.getElementById('myChart2').getContext('2d');



    chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'line',

        // The data for our dataset
        data: {
            labels: t,
            datasets: [{
                borderColor: 'rgb(220, 220, 220)',
                data: M1y,
                radius: 0
            }]
        },

        // Configuration options go here
        options: {}
    });

    chart2 = new Chart(ctx2, {
        // The type of chart we want to create
        type: 'line',

        // The data for our dataset
        data: {
            labels: t,
            datasets: [{
                borderColor: 'rgb(220, 220, 220)',
                data: M2y,
                radius: 0
            }]
        },

        // Configuration options go here
        options: {}
    });
}


