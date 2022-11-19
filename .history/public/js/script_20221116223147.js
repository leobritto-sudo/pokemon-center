$('.toast button').on('click', () => {
    if($('.toast button').attr('aria-label') == "Close") {
        $(".toast-wrapper").fadeTo( "slow" , 0, function() {
            $(".toast-wrapper").attr('class', 'd-none')
          });
    }
})

$('#create-category').on('submit', function(e) {
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
            $('.toast-wrapper').removeClass('d-none')
            $(".toast-wrapper").fadeTo( "slow" , 1, function() {});
        },
        complete: function () {
            $('#ajax_load').addClass('d-none').removeClass('d-inline')
        }
    })
})

$('.modal button[data-action="edit"]').on('click', function(e) {
    e.preventDefault();

    var id = $(this).attr('data-id')
    var form = $('#form_' + id);

    console.log($('#nome').val();
    
    /* $.ajax({
        url: form.attr("action"),
        data: form.serialize(),
        type: "POST",
        beforeSend: function () {
            $('#ajax_load').attr('class', 'd-inline')
        },
        success: function (data) {
            $('.toast-wrapper').removeClass('d-none')
            $('.toast-wrapper .toast-body').text('O registro foi alterado com sucesso')
            $(".toast-wrapper").fadeTo( "slow" , 1, function() {});

            $('#line_' + id + ' td:nth-child(1)').text($('#form_' + id + ' input[name="nome"]').val())
        },
        complete: function () {
            $('#ajax_load').addClass('d-none').removeClass('d-inline')
        }
    }) */
})

$('.modal button[data-action="delete"]').on('click', function(e) {
    e.preventDefault();

    var id = $(this).attr('data-id')
    var count = parseInt($('#count_list').text())

    $.ajax({
        url: '/delete-category',
        data: {
            'id': id
        },
        type: "POST",
        success: function (data) {
            $('.toast-wrapper').removeClass('d-none')
            $(".toast-wrapper").fadeTo( "slow" , 1, function() {});
            $('.delete i[data-id="' + id +'"]').parents(':eq(1)').remove()
            $('#count_list').text(count - 1)
        },
    })
})