$('.toast button').on('click', () => {
    if($('.toast button').attr('aria-label') == "Close") {
        $( "#book" ).fadeTo( "slow" , 0.5, function() {
            // Animation complete.
          });
    }
})

$('#create-category').on('submit', (e) => {
    e.preventDefault();
    var form = $('#create-category');
    
    $.ajax({
        url: form.attr("action"),
        data: form.serialize(),
        type: "POST",
        beforeSend: function () {
            $('#ajax_load').attr('class', 'd-inline')
        },
        success: function (data) {
            console.log("Salvo com sucesso");
        },
        complete: function () {
            $('#ajax_load').addClass('d-none').removeClass('d-inline')
        }
    })
})