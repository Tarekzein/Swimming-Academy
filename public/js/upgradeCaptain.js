$(document).ready(function (){


    $(".upgradeCaptain").click(function (){

        let userID=$(this).attr("data-userid")
        $.ajax({

            url:`ajax/captain/make-manager/${userID}`,
            type:"GET",
            success:function (response){
                console.log(response);
                $(`.captain-${userID}`).fadeOut();

            },

            error:function (e,x,y){
                console.log(e,x,y);
            },

        });


    });


})


