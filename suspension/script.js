var M1y = [];
var M2y = [];
var t = [];
var r

function resetGraphs() {
    $("#myChart").remove();
    $("#myChart2").remove();

    $("#graf1").append("<canvas  id='myChart'></canvas>");
    $("#graf2").append("<canvas  id='myChart2'></canvas>");


}

$(function(){
    var data = $(this).serializeArray();
    data.push({ name : 'initPrekazka', value : 0});
    data.push({ name : 'novaPrekazka', value : 0});
    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "https://wt29.fei.stuba.sk:4429/finalne_zadanie/rest/suspension-api.php",
        data: data,
        success: function(data)
        {

            console.log(data);
            M1y = data.M1;
            M2y = data.M2;
            t = data.t;
            r = data.r[0];
            graphs();
        },
        error: function(e)
        {
            console.log(e);
        }
    })
    
    $('#api-call-form').on('submit',function (e) {

        e.preventDefault();
        e.stopPropagation();
        console.log("sending request");
        if(parseFloat($('#prekazka').val()) >= 0 && (parseFloat($("#prekazka").val()) <= 1))
        {
            $('#prekazkaTip').addClass("invisible");
            var data = $(this).serializeArray();
            data.push({ name : 'initPrekazka', value : r});

            $.ajax({
                type: "GET",
                dataType: "json",
                url: "https://wt29.fei.stuba.sk:4429/finalne_zadanie/rest/suspension-api.php",
                data: data,
                success: function(data)
                {

                    console.log(data);
                    M1y = data.M1;
                    M2y = data.M2;
                    t = data.t;
                    r = data.r[0];
                    

                    resetGraphs();
                    graphs();
                },
                error: function(e)
                {
                    console.log(e);
                }
            })
        } else
        {
            $("#poziciaTip").removeClass("invisible");
        }
    }) ;

});

