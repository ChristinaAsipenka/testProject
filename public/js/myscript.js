$(document).ready(function(){
    $('#send').click(function (e){
       // e.preventDefault();
        let data = $('#form').serialize();

        $.ajax({
            url: '/index',
            method: 'POST',
            dataType: 'html',
            data: data,
            success: function(result){
                $('#saved_data').html(result);

            }
        });
    })
})
