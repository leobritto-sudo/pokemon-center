$('#create-category').on('submit', (e) => {
    e.preventDefault();
    var form = $('#create-category');
    
    $.ajax({
        url: form.attr("action"),
        data: form.serialize(),
        type: "POST",
        beforeSend: function () {
            $('ajax_load').attr('class', 'd-inline')
        },
        success: function (data) {
            console.log("Salvo com sucesso");
        },
        complete: function () {

        }
    })
})