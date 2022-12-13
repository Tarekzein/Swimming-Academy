$(document).ready(function (){

    $("#branch").change(function (){

        let val=$(this).val();
        // alert(val);
        $.ajax({

            url:"/admin/packages/jquery-get-branch-subs",
            type:"GET",
            // dataType:"int",
            data:{
                "branchID":val,
            },
            success:function (response){
                console.log(response.length);
                let subs= $("#subs");
                subs.prop("disabled",false);
                subs.html("<option selected></option>");
                response.forEach(e=>{

                    let option= `<option value='${e.id}'>${e.name}</option>`

                    subs.append(option);

                });

            },
            error:function (e,x,y){
                console.log(e,x,y);
            },


        });

    });

});
