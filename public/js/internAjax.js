$(document).ready(function () {

    $("#branch").change(function (){

        let val=$(this).val();
        // alert(val);
        $.ajax({

            url:"ajax/branch-subs",
            type:"GET",
            // dataType:"int",
            data:{
                "branchID":val,
            },
            success:function (response){
                console.log(response);
                let subs= $("#subs");
                subs.prop("disabled",false);
                subs.html("<option value='null' selected>الخدمة</option>");
                response.forEach(e=>{

                    let option= `<option value='${e.id}'>${e.name}</option>`

                    subs.append(option);

                });

            },
            error:function (e,x,y){
                console.log(e,x,y);
            },


        });

        $.ajax({

            url:"ajax/branch-cap",
            type:"GET",
            // dataType:"int",
            data:{
                "branchID":val,
            },
            success:function (response){
                let subs= $("#cap");
                subs.prop("disabled",false);
                subs.html("<option value='null' selected>الكباتن في الفرع</option>");
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

    $("#subs").change(function (){

        let val=$(this).val();
        // alert(val);
        $.ajax({

            url:"ajax/subs-pack",
            type:"GET",
            // dataType:"int",
            data:{
                "subsID":val,
            },
            success:function (response){
                let subs= $("#pack");
                subs.prop("disabled",false);
                subs.html("<option value='null' selected>الباكدج</option>");
                response.forEach(e=>{

                    let option= `<option value='${e.id}'>${e.package_name} - ج.م${e.price}  -  حصص${e.sessions_number}</option>`



                    subs.append(option);

                });

            },
            error:function (e,x,y){
                console.log(e,x,y);
            },


        });

    });

    $("#pack").change(function () {

        let val = $(this).val();
        // alert(val);
        $.ajax({

            url: "ajax/pack-price",
            type: "GET",
            // dataType:"int",
            data: {
                "packID": val,
            },
            success: function (response) {
                $("#total-price").html(`${response["price"]}EGP `);


            },
            error: function (e, x, y) {
                console.log(e, x, y);
            },


        });
    })



})
