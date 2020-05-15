var M1y = [];
var M2y = [];
var t = [];


$(function(){
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "https://wt29.fei.stuba.sk:4429/finalne_zadanie/rest/suspension-api.php",
        data: {},
        success: function(data)
        {

            console.log(data);
            M1y = data.M1;
            M2y = data.M2;
            t = data.t;

            graphs();
        },
        error: function(e)
        {
            console.log(e);
        }
    })

});

