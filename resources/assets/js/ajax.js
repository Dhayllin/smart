    
$(document).ready(function() {
    
    $( "#create_sections" ).click(function(event){
        var route = "/sections/"
        var dataString  = $( '#form_add_sections' ).serializeArray()
        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url: route,
            type: 'POST',
            datatype: 'json',
            data:dataString,
            success:function(data){
                $('#list_sections').DataTable().ajax.reload();
                $('#create_sections').modal('toggle');
                $.notify({icon: "add_alert", message: data.message},{type: 'success', timer: 1000})
            },
            error:function(data){
                var error = data.responseJSON.errors;
               console.log(data);
            }
        })
    })
});