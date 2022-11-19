$('#create-category').on('submit', (e) => {
    e.preventDefault();
    var form = $('#create-category');
    
    $.ajax({
        url: form.attr("action"),
        data: form.serialize(),
        type: "POST",
        beforeSend: function () {
            setTimeout(() => {
                $('#ajax_load').addClass('d-inline').removeClass('d-none'),
                2000
            })

            var i = 0;

            function test() {
                i++;
                console.log(i);
                if (i < 10000) {
                    test();
                }
            }
            test();
            console.log("teste")
        },
        success: function (data) {
            console.log("Salvo com sucesso");
        },
        complete: function () {
            $('#ajax_load').addClass('d-none').removeClass('d-inline')
        }
    })
})