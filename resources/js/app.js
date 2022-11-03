    import './bootstrap';

$(function(){

    $('.submitEmail').on('click', function(){
    
        $.blockUI({
            message: '<div class="spinner-border text-white" role="status"></div>',
            css: {
              backgroundColor: 'transparent',
              border: '0'
            },
            overlayCSS: {
              opacity: 0.5
            }
          });
    
      
        let email = $('#email').val();




        $.post(mailSubscribe, {_token: token, email: email}, function(response){
          
            $.unblockUI({}); 

            toastr.success("Başarılı bir şekilde kayıt oldunuz ", "Mail Aboneliği!", {
                closeButton: !0,
                tapToDismiss: !1,
                showMethod: "slideDown",
                hideMethod: "slideUp"
            });
    
    
        }, 'json');
       
    
    });
    
});
      