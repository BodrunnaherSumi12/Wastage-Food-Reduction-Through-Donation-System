$(document).ready(function () {

    // division
    $(document).on('change', '#division', function () {
        var division = $(this).val();
        
        $.ajax("find-data.php", {
            method: 'POST',
            data: {division_id:division},
            beforeSend: function () {
                $('#upazilla').html('<option>Select District</option>');
            },
            success: function (res) {
                $('#district').html(res);
            }
        });

        if ($('#receiverList').length > 0) {
            $.ajax("find-receiver.php", {
                method: 'POST',
                data: {division_id:division},
                beforeSend: function () {
                    $('#receiverList').html('<option>Select Receiver</option>');
                },
                success: function (res) {
                    $('#receiverList').html(res);
                }
            });
        }
    });

    // district 
    $(document).on('change', '#district', function () {
        var district = $(this).val();

        $.ajax("find-data.php", {
            method: 'POST',
            data: {district_id:district},
            beforeSend: function () {
                $('#union').html('<option>Select Union</option>');
            },
            success: function (res) {
                $('#upazilla').html(res);
                console.log($('#receiverList').length);
            }
        });

        if ($('#receiverList').length > 0) {
            $.ajax("find-receiver.php", {
                method: 'POST',
                data: {district_id:district},
                beforeSend: function () {
                    $('#receiverList').html('<option>Select Receiver</option>');
                },
                success: function (res) {
                    $('#receiverList').html(res);
                }
            });
        }
    });

     // Upazilla 
     $(document).on('change', '#upazilla', function () {
        var upazilla = $(this).val();

        $.ajax("find-data.php", {
            method: 'POST',
            data: {upazilla_id:upazilla},
           
            success: function (res) {
                $('#union').html(res);
            }
        });

        if ($('#receiverList').length > 0) {
            $.ajax("find-receiver.php", {
                method: 'POST',
                data: {upazilla_id:upazilla},
                beforeSend: function () {
                    $('#receiverList').html('<option>Select Receiver</option>');
                },
                success: function (res) {
                    $('#receiverList').html(res);
                }
            });
        }
    });


});
