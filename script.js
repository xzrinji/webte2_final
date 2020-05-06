

$(function(){
    $(".contact").click(function(e){
        console.log(e.target.id);
        $.ajax({
            type: "POST",
            dataType: "json",
            url: "getContactInfo.php",
            data: {name : e.target.id},
            success: function(data)
            {

                $(".contact-info").hide("slow");
                $(".contact-info").promise().done(function()
                {
                    $(".firstname").empty().append("Meno: " + data.firstname);
                $(".lastname").empty().append("Priezvisko: " + data.lastname);
                $(".email").empty().append("Email: " + data.email);
                $(".project").empty().append("Projekt: " + data.project);
                $(".contact-info").show("slow");
                
                });
                
                
            },
            error: function(e)
            {
                console.log(e);
            }
          });
    });

});

var arrLang = new Array();
arrLang['en'] = new Array();
arrLang['sk'] = new Array();

// English content
arrLang['en']['home'] = 'Home';
arrLang['en']['contact'] = 'Contact';
arrLang['en']['kyvadlo'] = 'Inverted pendulum';
arrLang['en']['gulicka'] = 'Ball beam';
arrLang['en']['tlmic'] = 'Suspension';
arrLang['en']['lietadlo'] = 'Aircraft pitch';
// Slovak content
arrLang['sk']['home'] = 'Domov';
arrLang['sk']['contact'] = 'Kontakt';
arrLang['sk']['kyvadlo'] = 'Inverzne kyvadlo';
arrLang['sk']['gulicka'] = 'Gulicka na tyci';
arrLang['sk']['tlmic'] = 'Tlmic automobil';
arrLang['sk']['lietadlo'] = 'Naklon lietadla';


// Process translation
$(function() {
    $('.translate').click(function() {
        var lang = $(this).attr('id');

        $('.lang').each(function(index, item) {
            $(this).text(arrLang[lang][$(this).attr('key')]);
        });
    });
});
