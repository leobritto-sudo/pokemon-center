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

$('.delete i').on('click', function(e) {
    e.preventDefault();

    var id = $(this).attr('data-id')
    
    $.ajax({
        url: '/delete-category',
        data: id,
        type: "POST",
        success: function (data) {
            /* $('.toast-wrapper').removeClass('d-none')
            $(".toast-wrapper").fadeTo( "slow" , 1, function() {}); */
            console.log("Funfou")
        },
    })
})