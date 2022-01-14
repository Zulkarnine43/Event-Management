
$(document).ready(function () {
    var val = [];
    //get checked value
    $("#Shipped").click(function () {

        $(':checkbox:checked').each(function (i) {
            val[i] = $(this).val();
        });
    })
    //pass value to controller
    $('#formSubmit').click(function (e) {
        // alert("Click");
        e.preventDefault();
        let CSRF_TOKEN = $('meta[name="csrf-token"').attr('content');
        $.ajax({
            url: 'update-order-status',
            method: 'post',
            data: {
                del: $('#del').val(),
                submit: 'Shipped',
                _token: CSRF_TOKEN,
                invoice: val

            },
            success: function (viewContent) {
                val=[];
                document.body.innerHTML=viewContent;
                $.print(viewContent);
                setTimeout(function(){
                    location.reload(true);				
                }, 500);	

                console.log(viewContent);
            }
        });
       
    });
});


// $(document).ready(function() {
//     $("#print").click(function(){
//         let CSRF_TOKEN = $('meta[name="csrf-token"').attr('content');
        
//         var val = [];
//         $(':checkbox:checked').each(function(i){
//             val[i] = $(this).val();
//         });
        
//         $.get('get-print-invoice/'+val,function(viewContent){
//             document.body.innerHTML=viewContent;
//                 $.print(viewContent);
//                 setTimeout(function(){
//                     location.reload(true);				
//                 }, 500);	

//             console.log(viewContent);
//         });
//     })
// });

