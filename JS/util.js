"use strict";

$(document).ready(function () {

    // modal function
    $(document).on('click', '#info', function (e) {
        e.preventDefault();
        let id = $(this).data('id');
        $.ajax({
            url: './details-modal.php',
            method: "POST",
            data: 'id=' + id,
            success: function (data) {
                $('body').append(data);
                $('#details-<?= $product[', id, ']; ?>').modal('toggle');
            },
            error: function () {
                alert("Something went wrong!");
            }
        });
    });


});