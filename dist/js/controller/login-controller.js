var dbemail=null;
var dbpass=null;


var ajaxconfig={
method:"GET",
    url:"api/register.php?action=all",
    async:true
};

console.log(ajaxconfig);


$.ajax(ajaxconfig).done(function (response) {
    console.log(response);
    response.forEach(function (customer) {

        // var xx =parts.pid;
        //
        // if ($("#items :selected").text() == xx) {
        //     console.log(88888);
        //     $("#iname").val(parts.pname);
        //     $("#uprice").val(parts.selling_price);
        //     $("#qoh").val(parts.qty);
        //     currentqoh=parts.qty;
        // }


        dbemail=customer.email;
        dbpass=customer.password;



    });



})

$("#submitbtn").click(function () {

    var frmemail=$("#emailtxtt").val();
    var frmpass=$("#passwordtxtt").val();
    // console.log(frmemail);
    // console.log(frmpass);
    //
    // console.log(dbemail);
    // console.log(dbpass);
    //
    // if(frmemail==dbemail){
    //     if(frmpass==dbpass){
    //         window.location.replace("index.php");
    //     }else{
    //         alert("password incorrect");
    //     }
    //
    // }else{
    //     alert("username incorrect");
    // }


    ajaxconfig={

        method:"POST",
        url:"api/register.php" ,
        data:{
            "user":frmemail,
            "pass":frmpass,
            "action":"login"


        },
        async:true

    };
    console.log(ajaxconfig);

    $.ajax(ajaxconfig).done(function(response){
        console.log(response);
        if(response=="true"){
          window.location.replace("index.php");
        }
    })


});



//
// $(document).on("click","#register",function () {
//     window.location.replace(function () {
//         "index.php"
//         $("#firstcol1").hide();
//
//         var tabletodo='<table id="tablelist" class="table col-12"><tbody id="listtb"><tr><td ><img src="dist/img/user.png" id="pimg" style="height: 90px;"></td></tr><tr><td >Name&nbsp&nbsp&nbsp <input type="text" id="nametxt" class="form-control"></td></tr><tr><td >Email&nbsp&nbsp&nbsp <input type="text" id="emailtxt" class="form-control"></td></tr><tr><td >Password&nbsp&nbsp&nbsp <input type="password" id="passwordtxt" class="form-control"></td></tr><tr><td >Password&nbsp&nbsp&nbsp <input type="password" id="passwordtxt1" class="form-control"></td></tr></tbody><tfoot><tr><td colspan="5" class="center aligned"><input type="button" id="signupbtn" class="btn btn-primary" value="Register" l></td></tr></tfoot></table>'
//         $("#thcol").append(tabletodo);
//
//     });
//     $(document).ready(function () {
//
//
//         console.log("ghjghghgghjaaaa");
//
//
//
//     });
//




// });
$(document).ready(hidediv);

function hidediv() {
    console.log("gggggggggggggggggggffffffffffffffff")
    $("#signform1").hide();
    $("#regi").css("color","#808080");
    $("#regii").css("color","#808080");
    $("#regitbtn1").hide();
}

$("#regi").click(function () {
    console.log("Hi logib")
    $("#loginform1").hide();
    $("#submitbtn1").hide();
    $("#regitbtn1").show();

    $("#signform1").show();
    $("#regi").css("color","black");
    $("#regii").css("color","black");
    $("#loginid").css("color","#808080");
    $("#loginidi").css("color","#808080");



});

$("#loginid").click(function () {
    console.log("Hi logib")
    $("#loginform1").show();
    $("#submitbtn1").show();
    $("#regitbtn1").hide();

    $("#signform1").hide();
    $("#regi").css("color","#808080");
    $("#regii").css("color","#808080");
    $("#loginid").css("color","black");
    $("#loginidi").css("color","black");



});

