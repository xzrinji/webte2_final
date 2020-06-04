$('form').on('submit', function (e) {
    e.preventDefault();
    e.stopPropagation();
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "rest/api/get/calc",
        data: $(this).serialize(),
        success: function (data) {

            console.log(data);
            $("#vystup").text(data.ans);
           
        },
        error: function (e) {
            console.log(e);
        }
    })
});