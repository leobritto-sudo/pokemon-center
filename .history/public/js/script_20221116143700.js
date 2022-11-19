$('#create-category').on('submit', (e) => {
    e.preventDefault();
    var form = $(this);
    
    $.ajax({
        url: form.attr("action"),
        data: form.serialize(),
        type: "POST",
        beforeSend: function () {

        },
        success: function () {

        },
        complete: function () {

        }
    })
})