
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
            $.ajax({
                url : '/issues/remove.ajax',
                type : 'POST',
                data : {
                    id : id
                },
                success : function(response){
                    alert(response);
                }
            });
        });
    });
    
});