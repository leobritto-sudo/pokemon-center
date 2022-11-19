$('#create-category').on('submit', (e) => {
    e.preventDefault();
    var form = $('#create-category');
    
    $.ajax({
        url: form.attr("action"),
        data: form.serialize(),
        type: "POST",
        dataType: "json",
        beforeSend: function () {

        },
        success: function (data) {
            console.log(data)
        },
        complete: function () {

        }
    })
})