 $(document).ready(function(){
        $('#state_id').change(function () {
            getcities($(this).val());
        });
     
        function getcities(state_id) {
            $.ajax({
                type: "GET",
                url: SITEURL+'/booking/ajax_city_list',
                data: {'id': state_id, _token: csrf_token},
                success: function (data) {
                    $('#city_id').empty();
                    $.each(data, function (val, text) {
                        $('#city_id').append($('<option></option>').val(val).html(text));
                    });
                }
            });
        }


         $('.covid_status').change(function(){
            if($(this).val()=="positive")
            {
                 $('.covid_date').show();
            }else{
               $('#covid_positive').val('');
                 $('.covid_date').hide();

            }
        });


         $('#supplier_id').change(function () {
            getcylinder($(this).val());
        });
     
        function getcylinder(supplier_id) {
            $.ajax({
                type: "GET",
                url: SITEURL+'/booking/ajax_cylinder_list',
                data: {'id': supplier_id, _token: csrf_token},
                success: function (data) {
                    $('#cylinder_id').empty();
                    $.each(data, function (val, text) {
                        $('#cylinder_id').append($('<option></option>').val(val).html(text).attr('disabled', val == 0 ? true : false));
                    });
                }
            });
        }


   $('.booking_status').change(function () {

            changebookingstatus($(this).val(),$(this).attr('data-id'));
        });
     
        function changebookingstatus(status,id) {
            $.ajax({
                type: "GET",
                url: SITEURL+'/ajax_booking_status_change',
                data: {'id': id,'status': status, _token: csrf_token},
                success: function (data) {
                    swal("Success!", "Update successfully!", "success").then(function(){
                     location.reload();
                    });
                }
            });
        }

  
});