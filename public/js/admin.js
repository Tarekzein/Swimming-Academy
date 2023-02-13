$(document).ready(function (){


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
                subs.html("<option selected>الخدمة</option>");
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


//  Accept Manager
    $(".acceptManager").click(function (){

        let id= $(this).attr("data-userID");
        // alert(id);
        let options= $(`#options-${id}`);
        options.removeClass("d-flex");
        // options.addClass("d-none");
        let btn =$(`#accept-${id}`);
        let select=$(`#branch-select-${id}`);
            options.fadeOut(function (){
            select.fadeIn();
            btn.fadeIn();
        });


        select.change(function (){
            if($(this).val()!=="false"){
                btn.prop("disabled",false);

            }
            else {
                btn.prop("disabled",true);

            }

        });

        btn.click(function (){
            let branchid=select.val();
            $.ajax({
                url:"ajax/acceptManager",
                Type:"GET",
                data:{
                  "branchID":branchid,
                  "uid":id,
                },
                success:function (response){
                    console.log(response);
                    btn.fadeOut();
                    select.fadeOut();
                    $(`#manager-${id}`).attr("style","background-color: transparent");
                    $(`#edite-options-${id}`).removeClass("d-none");
                    $(`#edite-options-${id}`).addClass("d-flex");
                },
                error:function (x,y,z){
                    console.log(x,y,z);

                }
            })
        });

    });

    $(".rejectManager").click(function (){

        let id= $(this).attr("data-userID");


            $.ajax({
                url:"ajax/rejectManager",
                Type:"GET",
                data:{
                    "uid":id,
                },
                success:function (response){
                    console.log(response);

                    $(`#manager-${id}`).fadeOut();
                },
                error:function (x,y,z){
                    console.log(x,y,z);

                }
            })


    });

//  Accept Captain
    $(".acceptCaptain").click(function (){

        let id= $(this).attr("data-userID");
        let options=$(`#options-${id}`);
        let acceptOptions=$(`#approveOptions-${id}`);
        $.ajax({
           url:"ajax/acceptCaptain",
           Type:"GET",
           data:{
               "uid":id,
           },
            success:function (response){
                console.log(response);
                options.removeClass("d-none");
                options.addClass("d-flex");

                acceptOptions.removeClass("d-flex");
                acceptOptions.addClass("d-none");
                let row= $(`#captain-${id}`);
                row.css("display","none");
                $("#captainsTable").append(row.fadeToggle());
            },
            error:function (x,y,z){
                console.log(x,y,z);

            }
        });

    });

    $(".rejectCaptain").click(function (){

        let id= $(this).attr("data-userID");
        // let options=$(`#options-${id}`);
        // let acceptOptions=$(`#approveOptions-${id}`);
        $.ajax({
            url:"ajax/rejectCaptain",
            Type:"GET",
            data:{
                "uid":id,
            },
            success:function (response){
                console.log(response);

                let row= $(`#captain-${id}`);
                row.fadeToggle();
            },
            error:function (x,y,z){
                console.log(x,y,z);

            }
        });

    });

    $("#watercard-filter").change(function () {
        let val = $(this).val();
        $.ajax({

            url:"dashboard/ajax/watercard-filter",
            type:"GET",
            // dataType:"int",
            data:{
                "branch":val,
            },
            success:function (response){
                console.log(response);
                let progressbar = $(".progress-bar");
                progressbar.attr("data-cardpercent",response["watercard"])
                $("#watercard-val").html(`${response["watercard"]} %`)
                progressbar.animate({
                    width: `${progressbar.attr("data-cardpercent")}%`
                }, 2000);

            },
            error:function (e,x,y){
                console.log(e,x,y);
            },


        });
    });

    $("#interns-filter").change(function () {
        let val = $(this).val();
        $.ajax({

            url:"ajax/interns-filter",
            type:"GET",
            // dataType:"int",
            data:{
                "branch":val,
            },
            success:function (response){
                $("#internsCount").html(response["interns"]);

            },
            error:function (e,x,y){
                console.log(e,x,y);
            },


        });
    });

    $("#managers-filter").change(function () {
        let val = $(this).val();
        $.ajax({

            url:"ajax/managers-filter",
            type:"GET",
            // dataType:"int",
            data:{
                "branch":val,
            },
            success:function (response){
                $("#pendingManagersVal").html(response["pendingManagers"]);
                $("#approvedManagersVal").html(response["approvedManagers"]);

            },
            error:function (e,x,y){
                console.log(e,x,y);
            },


        });
    });

    $("#billing-filter").change(function () {
        let val = $(this).val();
        $.ajax({

            url:"ajax/billing-filter",
            type:"GET",
            // dataType:"int",
            data:{
                "branch":val,
            },
            success:function (response){
                console.log(response);
                $("#wavIncome").html(response["incomeWaves"]);
                $("#wavOutcome").html(response["outcomeWaves"]);

                $("#weIncome").html(response["incomeWecoach"]);
                $("#weOutcome").html(response["outcomeWecoach"]);

            },
            error:function (e,x,y){
                console.log(e,x,y);
            },


        });
    });

    $(".subnav").click(function () {
        if($(this).children(".arrow").html()=="expand_more"){
            $(this).children(".arrow").html("expand_less")

        }
        else{

            $(this).children(".arrow").html("expand_more")
        }
       $(this).parent().next().children().slideToggle();
    });

    $(".form-header").click(function (){
        if($(this).children().children(".iconchange").children().hasClass("fa-plus-circle")){
            $(this).children().children(".iconchange").children().removeClass("fa-plus-circle")
            $(this).children().children(".iconchange").children().addClass("fa-minus-circle")

        }
        else{
            $(this).children().children(".iconchange").children().removeClass("fa-minus-circle")
            $(this).children().children(".iconchange").children().addClass("fa-plus-circle")

        }
        $(this).next(".form-body").slideToggle();


    });


});
