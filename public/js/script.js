$(document).ready(function () {

    $('.toast button').on('click', () => {
        if ($('.toast button').attr('aria-label') == "Close") {
            $(".toast-wrapper").fadeTo("slow", 0, function () {
                $(".toast-wrapper").attr('class', 'd-none')
            });
        }
    })


    // -- INI -- CRUD CATEGORIA
    $('#create-category').on('submit', function (e) {
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
                $(".toast-wrapper").fadeTo("slow", 1, function () { });
            },
            complete: function () {
                $('#ajax_load').addClass('d-none').removeClass('d-inline')
                $('input, select').val('')
                $('input[type="submit"]').val('Gravar')
            }
        })
    })

    $('#category-container .modal button[data-action="edit"]').on('click', function (e) {
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
                $(".toast-wrapper").fadeTo("slow", 1, function () { });

                $('#line_' + id + ' td:nth-child(1)').text($('#nome' + id).val())
            },
            complete: function () {
                $('#ajax_load').addClass('d-none').removeClass('d-inline')
            }
        })
    })

    $('#category-container .modal button[data-action="delete"]').on('click', function (e) {
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
                $(".toast-wrapper").fadeTo("slow", 1, function () { });
                $('.delete i[data-id="' + id + '"]').parents(':eq(1)').remove()
                $('#count_list').text(count - 1)
            },
        })
    })

    // -- FIM -- CRUD CATEGORIA

    // -- INI -- CRUD PRODUTO
    $('#create-product').on('submit', function (e) {
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
                $(".toast-wrapper").fadeTo("slow", 1, function () { });
            },
            complete: function () {
                $('#ajax_load').addClass('d-none').removeClass('d-inline')
                $('input, select').val('')
                $('input[type="submit"]').val('Gravar')
            }
        })
    })

    $('#product-container .modal button[data-action="edit"]').on('click', function (e) {
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
                $(".toast-wrapper").fadeTo("slow", 1, function () { });

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

    $('#product-container .modal button[data-action="delete"]').on('click', function (e) {
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
                $(".toast-wrapper").fadeTo("slow", 1, function () { });
                $('.delete i[data-id="' + id + '"]').parents(':eq(1)').remove()
                $('#count_list').text(count - 1)
            },
        })
    })

    // -- FIM -- CRUD PRODUTO

    // -- INI -- CRUD FUNCION??RIO
    $('#create-employee').on('submit', function (e) {
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
                $(".toast-wrapper").fadeTo("slow", 1, function () { });
            },
            complete: function () {
                $('#ajax_load').addClass('d-none').removeClass('d-inline')
                $('input, select').val('')
                $('input[type="submit"]').val('Gravar')
            }
        })
    })

    $('#employee-container .modal button[data-action="edit"]').on('click', function (e) {
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
                $(".toast-wrapper").fadeTo("slow", 1, function () { });

                $('#line_' + id + ' td:nth-child(1)').text($('#nome' + id).val())
                $('#line_' + id + ' td:nth-child(2)').text($('#funcao' + id).val())
                $('#line_' + id + ' td:nth-child(3)').text($('#acesso' + id).val())
            },
            complete: function () {
                $('#ajax_load').addClass('d-none').removeClass('d-inline')
            }
        })
    })

    $('#employee-container .modal button[data-action="delete"]').on('click', function (e) {
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
                $(".toast-wrapper").fadeTo("slow", 1, function () { });
                $('.delete i[data-id="' + id + '"]').parents(':eq(1)').remove()
                $('#count_list').text(count - 1)
            },
        })
    })

    // -- FIM -- CRUD FUNCION??RIO

    // -- INI -- CRUD TREINADOR
    $('#create-coach').on('submit', function (e) {
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
                $(".toast-wrapper").fadeTo("slow", 1, function () { });
            },
            complete: function () {
                $('#ajax_load').addClass('d-none').removeClass('d-inline')
                $('input, select').val('')
                $('input[type="submit"]').val('Gravar')
            }
        })
    })

    $('#coach-container .modal button[data-action="edit"]').on('click', function (e) {
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
                $(".toast-wrapper").fadeTo("slow", 1, function () { });

                var date = new Date($('#data_nasc' + id).val())
                var month = date.getMonth() + 1;
                var day = date.getDate() + 1;

                if (day < 10) {
                    day = '0' + day;
                }

                if (month < 10) {
                    month = '0' + month;
                }

                $('#line_' + id + ' td:nth-child(1)').text($('#nome' + id).val())
                $('#line_' + id + ' td:nth-child(2)').text($('#email' + id).val())
                $('#line_' + id + ' td:nth-child(3)').text($('#telefone' + id).val())
                $('#line_' + id + ' td:nth-child(4)').text(day + '/' + month + '/' + date.getFullYear())
            },
            complete: function () {
                $('#ajax_load').addClass('d-none').removeClass('d-inline')
            }
        })
    })

    $('#coach-container .modal button[data-action="delete"]').on('click', function (e) {
        e.preventDefault();

        var id = $(this).attr('data-id')
        var count = parseInt($('#count_list').text())

        $.ajax({
            url: '/delete-coach',
            data: {
                'id': id
            },
            type: "POST",
            success: function (data) {
                $('.toast-wrapper').removeClass('d-none')
                $(".toast-wrapper").fadeTo("slow", 1, function () { });
                $('.delete i[data-id="' + id + '"]').parents(':eq(1)').remove()
                $('#count_list').text(count - 1)
            },
        })
    })

    // -- FIM -- CRUD TREINADOR

    // -- INI -- INSERT ITEMS VENDA

    $('#add').on('click', function (e) {
        e.preventDefault();

        var product = $('#products').val();
        var product_name = $('#products option:selected').text();
        var product_price = $('#products option:selected').attr('price');
        var total = parseFloat($('#total').text())

        if (product == "") {
            alert('Deve selecionar um produto');
        }
        else {

            var line = document.createElement('tr')
            var column_name = document.createElement('td')
            var column_price = document.createElement('td')
            var column_delete = document.createElement('td')
            var icon_trash = document.createElement('i')
            var text_name = document.createTextNode(product_name)
            var text_price = document.createTextNode('$' + product_price)

            column_delete.classList.add('text-center', 'text-danger', 'delete')
            icon_trash.classList.add('fas', 'fa-window-close', 'fa-lg')

            column_name.appendChild(text_name)
            column_price.appendChild(text_price)
            column_delete.appendChild(icon_trash)
            line.appendChild(column_name)
            line.appendChild(column_price)
            line.appendChild(column_delete)

            $('tbody').append(line)

            total = $('#total').text((total + parseFloat(product_price)).toFixed(2))

            // -- INI -- DELETE ITEM VENDA
            $('.delete i').one('click', function (e) {
                var total_delete = parseFloat($('#total').text())
                var price_delete = parseFloat($(this).parents(':eq(1)').children().eq(1).text().substring(1)).toFixed(2)

                console.log(price_delete);

                $('#total').text((total_delete - price_delete).toFixed(2))

                $(this).parents(':eq(1)').remove()

            })

            // -- FIM -- DELETE ITEM VENDA
        }
    })

    // -- FIM -- INSERT ITEMS VENDA

    // -- INI -- CREATE VENDA
    $('#finalizar').on('click', function (e) {
        e.preventDefault();
        var total = parseFloat($('#total').text())
        var quantidade = ($('tr').length) - 1;
        var forma_pagamento = $('#forma-pagamento').val();

        if (quantidade != 0) {
            $.ajax({
                url: '/sale-create',
                data: {
                    total: total,
                    quantidade: quantidade,
                    forma_pagamento: forma_pagamento
                },
                type: "POST",
                beforeSend: function () {
                    $('#ajax_load').attr('class', 'd-inline')
                },
                success: function (data) {
                    $('.toast-wrapper').removeClass('d-none')
                    $(".toast-wrapper").fadeTo("slow", 1, function () { });
                },
                complete: function () {
                    $('#ajax_load').addClass('d-none').removeClass('d-inline')
                    window.location.reload()
                }
            })
        }
    })

    // -- FIM -- CREATE VENDA

})