
$(function(){
	$('select').select2();
    
    // Setup the shared token
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    
    $("a[data-issue-id]").click(function(event){
        // Track the clicked id
        var id = $(this).data('issue-id');
        
        // Attach a unique even handler for a button
        $("button[data-issue-button='remove']").off('click').click(function(event){
            // Make the button disabled
            $(this).addClass('disabled');
            
            $.ajax({
                url : '/issues/remove.ajax',
                type : 'POST',
                data : {
                    id : id
                },
                success : function(response){
                    if (response == "1"){
                        window.location.reload();
                    } else {
                        console.log(response);
                    }
                }
            });
        });
    });
   
    // Filter handler on grid
    $("select[name='filter']").change(function(){
        var value = $(this).val();
        
        $.ajax({
            url : '/issues/filter.ajax',
            data : {
                filter : value
            },
            success : function(response){
                if (response == "1"){
                    window.location.reload();
                } else {
                    console.log(response);
                }
            }
        });
    });
   
});