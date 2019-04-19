$(document).ready(function() {
// alert(1);
$('a.nav-link').click(function(){

    var  val = $(this).text();

    // alert(val);
// переприсвоить - добавить в название переменную


    var response = '';

        $.ajax({
            type: "GET",
            url: "/genre",
            async: false,
            // data: "var=val",
            data: {variable:val},
            success: function(text) {
                console.log(text);
                $("#ajaxGenr").html(text);
            }
        });

        //console.log(response);

        //alert(response);
        // alert(variable);

        });
});
