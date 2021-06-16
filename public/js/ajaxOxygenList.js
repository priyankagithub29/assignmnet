 $(document).ready(function(){
        $('#state_id').change(function () {
            getcities($(this).val());
        });
     
        function getcities(state_id) {
            $.ajax({
                type: "GET",
                url: SITEURL+'/ajax_axygen_list',
                data: {'id': state_id, _token: csrf_token},
                success: function (data) {
                     $('#appendList').html('');
                    $('#appendList').append(data);
                }
            });
        }
  
});