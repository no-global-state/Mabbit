
$(function(){
	$('select').select2();
    
    // Setup the shared token
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    
    $("a[data-button='destroy']").click(function(event){
        event.preventDefault();
        var url = $(this).attr('href');
        
        $("button[data-issue-button='remove']").off('click').click(function(event){
            // Make the button disabled
            $(this).addClass('disabled');
            
            $.ajax({
                url : url,
                type : 'POST',
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
            url : '/issues/filter',
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