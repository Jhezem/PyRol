(function ($){
    $(document).ready(function (){
        let email = $("#newsletter input");
        $("#newsletter").submit(function (e){
            if(email.val() == ""){
                email.addClass("input-error");
                e.preventDefault();
            }
        });
        email.focus( () => { email.removeClass("input-error")});
    });
})(jQuery);