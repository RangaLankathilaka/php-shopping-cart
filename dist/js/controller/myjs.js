



$(document).ready(signhistory);
$(document).find("#user").click(console.log("usernamerrrrrrrrrrrr"));

function signhistory() {

    if($.cookie("signhistory")){
        $(document).find("#signup").hide();
        var user=$.cookie("signhistory");
        console.log("uuuuuuuuuuuuuuuuu"+user);
        var userappend='<span id="user">'+user+'</span>';
        $("#placeo").append(userappend);
    }
}



$(document).on("click","#signupbtn",function () {
   console.log("ccccccccccccc");
    var name=$("#emailtxt").val();
    console.log(name);


    $.cookie("signhistory",name,{expires:100000});

window.location.replace("login.html");
// var ajaxconfig={
// method:"GET",
//     url:"api/register.php?action=signup",
//     async:true
// };
//
// console.log(ajaxconfig);

});





var userclick=true;







var imgclick=null;
$(document).on("click","#pimg", function() {

    imgclick=true;

});


var responseitem=null;
$("#zoomcol").hide();
$(document).ready(getItem);
function getItem() {
    var ajaxConfig = {
        method:"GET",
        url:"api/item.php",
        data:{
            action:"all"
        },
        async:true
    }

    $.ajax(ajaxConfig).done(function(response){
        responseitem=response;
        responseitem.forEach(function (item) {
            console.log(item.picture);


            var tabletodo='<table id="tablelist" class="table col-12"><tbody id="listtb"><tr><td ><img src="'+item.picture+'" id="pimg" style="height: 150px;"></td></tr><tr><td >' + item.iname + '</td></tr><tr><td >Price Rs.'+item.sprice+'</td></tr></tbody><tfoot><tr><td colspan="5" class="center aligned"><input type="button" id="addtocart" class="btn btn-primary" value="Add to cart" l></td></tr></tfoot></table>'
            $("#firstcol1").append(tabletodo);








        })
    });

}



$(document).on("click","#pimg", function() {
    // $("#tablelist").remove();

    console.log(responseitem);
    var name=$(this).parents("#tablelist").find("tr:nth-child(2)").text();
    console.log("zzzzz"+name);
    $("#firstcol1").hide();

    responseitem.forEach(function (item) {
        console.log("aaaaaaa"+name);
        console.log("bbbbbbbb"+item.iname);


if(name==item.iname){
    console.log("eq");

            var tabletodo = '<table id="tablelist" class="table col-12"><thead></thead><tbody id="listtb"><tr><td ><img src="' + item.picture + '" id="zoomimg" style="height: 450px;"></td></tr><tr><td>' + item.iname + '</td></tr><tr><td >Stock ' + item.stock + '</td></tr><tr><td >Qty &nbsp&nbsp&nbsp <input type="text" id="qtytxt"></td></tr><tr><td >Price Rs.' + item.sprice + '</td></tr></tbody><tfoot><tr><td colspan="5" class="center aligned"><input type="button" id="addtocart" class="btn btn-primary" value="Add to cart" l></td></tr></tfoot></table>'
            $("#seccol").append(tabletodo);
   // $("#zoomcol").show();




}



    })



});

















$(document).on("mouseenter","#zoomimg",function () {
    console.log("zoom");
    responseitem.forEach(function (item) {
        var img = "ghjkgkgkjhhjk";
        $("zoomcol").append(img);
    })
});


$("#cart").click(function () {
    window.location.assign("mycart.html");
});



$(document).on("click","#addtocart",function () {
    // if($.cookie("signhistory")) {



    var ajaxconfig={

        method:"GET",
        url:"api/item.php" ,
        data:{

            "action":"sessionTrue"
        },
        async:true

    };
    console.log(ajaxconfig);


    $.ajax(ajaxconfig).done(function (response) {
       console.log(response);
       if(response=="navigatetologin"){
           window.location.replace("login.html");
       }

    });












        console.log("addtocart click");
        var name = $(this).parents("#tablelist").find("tr:nth-child(2)").text();
        responseitem.forEach(function (item) {
            console.log("aaaaaaa" + name);
            console.log("bbbbbbbb" + item.iname);


            if (name == item.iname) {

                var iname = item.iname;
                var sprice = item.sprice;
                if (imgclick) {
                    var qty = $("#qtytxt").val();
                }
                else {
                    var qty = 1;
                }


                var iimg = item.picture;



                var ajaxconfig={

                    method:"POST",
                    url:"api/item.php" ,
                    data:{
                        "iname": iname,

                        "sprice": sprice,
                        "qty": qty,
                        "iimg": iimg,
                        "action":"mycart"
                    },
                    async:true

                };
                console.log(ajaxconfig);


                $.ajax(ajaxconfig).done(function (response) {
                    alert("item has been added to cart");
                    response.forEach(function (mycart) {
                        console.log(mycart.name);

                    })


                });






            }


        })







});


$(document).on("click","#signup",function () {
   // console.log(userclick);
    if(userclick){


        window.location.replace("login.html");
    }

});



var ajaxconfig={

    method:"GET",
    url:"api/register.php" ,
    data:{

        "action":"showSessionSign"
    },
    async:true

};
console.log(ajaxconfig);


$.ajax(ajaxconfig).done(function (response) {

    if(response){
        $("#signup").hide();
    }
    console.log(response);
var uu=response;
$("#usernametop").append(uu);

});

