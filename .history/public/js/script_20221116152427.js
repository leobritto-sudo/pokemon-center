$('#create-category').on('submit', (e) => {
    e.preventDefault();
    var form = $('#create-category');
    
    $.ajax({
        url: form.attr("action"),
        data: form.serialize(),
        type: "POST",
        beforeSend: function () {
            setTimeout(() => {
                $('ajax_load').attr('class', 'd-inline'),
                2000
            })
        },
        success: function (data) {
            console.log("Salvo com sucesso");
        },
        complete: function () {

        }
    })
})