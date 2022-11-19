$('.toast button').on('click', () => {
    if($('.toast button').attr('aria-label') == "Close") {
        $(".toast-wrapper").fadeTo( "slow" , 0, function() {
            $(".toast-wrapper").attr('class', 'd-none')
          });
    }
})


// -- INI -- CRUD CATEGORIA
$('#create-category').on('submit', function(e) {
    e.preventDefault();
    var form = $(this);
    
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
            $('input, select').val('')
            $('input[type="submit"]').val('Gravar')
        }
    })
})

$('.modal button[data-action="edit"]').on('click', function(e) {
    e.preventDefault();

    var id = $(this).attr('data-id')
    var form = $('#form_' + id);
    
    $.ajax({
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

            $('#line_' + id + ' td:nth-child(1)').text($('#nome' + id).val())
        },
        complete: function () {
            $('#ajax_load').addClass('d-none').removeClass('d-inline')
        }
    })
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

// -- FIM -- CRUD CATEGORIA

// -- INI -- CRUD PRODUTO
$('#create-product').on('submit', function(e) {
    e.preventDefault();
    var form = $(this);
    
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
            $('input, select').val('')
            $('input[type="submit"]').val('Gravar')
        }
    })
})

$('.modal button[data-action="edit"]').on('click', function(e) {
    e.preventDefault();

    var id = $(this).attr('data-id')
    var form = $('#form_' + id);
    
    $.ajax({
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

            $('#line_' + id + ' td:nth-child(1)').text($('#nome' + id).val())
            $('#line_' + id + ' td:nth-child(2)').text("$" + $('#preco' + id).val())
            $('#line_' + id + ' td:nth-child(3)').text($('#estoque' + id).val())
            $('#line_' + id + ' td:nth-child(4)').text($('#categoria' + id).val())
        },
        complete: function () {
            $('#ajax_load').addClass('d-none').removeClass('d-inline')
        }
    })
})

$('.modal button[data-action="delete"]').on('click', function(e) {
    e.preventDefault();

    var id = $(this).attr('data-id')
    var count = parseInt($('#count_list').text())

    $.ajax({
        url: '/delete-product',
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

// -- FIM -- CRUD PRODUTO

// -- INI -- CRUD FUNCIONÁRIO
$('#create-employee').on('submit', function(e) {
    e.preventDefault();
    var form = $(this);
    
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
            $('input, select').val('')
            $('input[type="submit"]').val('Gravar')
        }
    })
})

$('.modal button[data-action="edit"]').on('click', function(e) {
    e.preventDefault();

    var id = $(this).attr('data-id')
    var form = $('#form_' + id);
    
    $.ajax({
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

            $('#line_' + id + ' td:nth-child(1)').text($('#nome' + id).val())
            $('#line_' + id + ' td:nth-child(2)').text($('#funcao' + id).val())
            $('#line_' + id + ' td:nth-child(3)').text($('#acesso' + id).val())
        },
        complete: function () {
            $('#ajax_load').addClass('d-none').removeClass('d-inline')
        }
    })
})

$('.modal button[data-action="delete"]').on('click', function(e) {
    e.preventDefault();

    var id = $(this).attr('data-id')
    var count = parseInt($('#count_list').text())

    $.ajax({
        url: '/delete-employee',
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

// -- FIM -- CRUD FUNCIONÁRIO

// -- INI -- CRUD TREINADOR
$('#create-employee').on('submit', function(e) {
    e.preventDefault();
    var form = $(this);
    
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
            $('input, select').val('')
            $('input[type="submit"]').val('Gravar')
        }
    })
})

$('.modal button[data-action="edit"]').on('click', function(e) {
    e.preventDefault();

    var id = $(this).attr('data-id')
    var form = $('#form_' + id);
    
    $.ajax({
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

            $('#line_' + id + ' td:nth-child(1)').text($('#nome' + id).val())
            $('#line_' + id + ' td:nth-child(2)').text($('#funcao' + id).val())
            $('#line_' + id + ' td:nth-child(3)').text($('#acesso' + id).val())
        },
        complete: function () {
            $('#ajax_load').addClass('d-none').removeClass('d-inline')
        }
    })
})

$('.modal button[data-action="delete"]').on('click', function(e) {
    e.preventDefault();

    var id = $(this).attr('data-id')
    var count = parseInt($('#count_list').text())

    $.ajax({
        url: '/delete-employee',
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

// -- FIM -- CRUD TREINADOR