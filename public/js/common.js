$(document).ready(function (){

    $("form").submit(function (e){
        let x= $(this).find(".form-select");

        if(x.val()===null||x.val()==="null"||x.val()===""){
            e.preventDefault();
            x.focus();
            $(this).find(".select-message").html("Select a Value From This");
        }
    });


});
