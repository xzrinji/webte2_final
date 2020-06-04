var y = [];
var a = [];
var t = [];


$(function(){
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "https://wt29.fei.stuba.sk:4429/finalne_zadanie/rest/inverted-pendulum-api.php",
        data: {},
        success: function(data)
        {

            console.log(data);
            y = data.y;
            a = data.x;
            t = data.t;

            graphs();
        },
        error: function(e)
        {
            console.log(e);
        }
    })

});

