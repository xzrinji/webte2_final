$('#form-mail').on('submit', function (e) {
    e.preventDefault();
    e.stopPropagation();

    var data = $(this).serializeArray();
    data.push({ name: 'stats', value: $("#table-stats").html() });

    

    $.ajax({
        type: "POST",
        dataType: "json",
        url: "mail.php",
        data: data,
        success: function (data) {

            var msg,alert_type;
            if(data.status == "error")
            {
                msg = data.info;
                alert_type = "danger";
            }else
            {
                msg = "Mail was sent successfully";
                alert_type = "success";
            }
            var alert = `<div class="alert alert-${alert_type} alert-dismissible fade show mt-3" role="alert">
                        ${msg}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>`;
            $("#stats-card").append(alert);
            
            
        },
        error: function (e) {
            console.log(e);
        }
    })
});

