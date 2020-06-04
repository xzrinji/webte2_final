var chart, chart2;


function resetGraphs() {
    $("#myChart").remove();
    $("#myChart2").remove();

    $("#graf1").append("<canvas  id='myChart'></canvas>");
    $("#graf2").append("<canvas  id='myChart2'></canvas>");


}


$(function () {



    $("#graph").change(function () {

        $("#grafy").slideToggle();

    });

    $("#animation").change(function () {

        $("#canvas-div").slideToggle();

    });

    $("#pozicia").on("keypress keyup blur", function (event) {
        //this.value = this.value.replace(/[^0-9\.]/g,'');
        $(this).val($(this).val().replace(/[^0-9\.]/g, ''));
        if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
            event.preventDefault();
        }
    });




    $('#api-call-form').on('submit', function (e) {
        e.preventDefault();
        e.stopPropagation(); // only neccessary if something above is listening to the (default-)event too

        if(parseFloat($("#pozicia").val()) >= 0 && (parseFloat($("#pozicia").val()) <= 1)) {
            
            $( "#poziciaTip" ).addClass( "invisible" );
            var data = $(this).serializeArray();
            data.push({ name: 'initPos', value: y.slice(-3)[0] });

            $.ajax({
                type: "GET",
                dataType: "json",
                url: "rest/api/get/ball-beam",
                data: data,
                success: function (data) {

                    //console.log(data);
                    y = data.y;
                    a = data.x;
                    t = data.t;

                    y.pop();
                    y.pop();

                    resetGraphs();
                    graphs();
                },
                error: function (e) {
                    console.log(e);
                }
            })
        } else
        {
            $( "#poziciaTip" ).removeClass( "invisible" );
        }
    });


});

