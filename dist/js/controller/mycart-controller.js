


$(document).ready(mycartdeatil);
function mycartdeatil() {
    var ajaxConfig = {
        method:"GET",
        url:"api/item.php?action=showSession",

        async:true
    }
    console.log(ajaxConfig);

    $.ajax(ajaxConfig).done(function(response){
        console.log(response);
        var index=0;
        var index1=0
        for(index in response){
            element = response[index];
            console.log(">>>>>>>>>");
            console.log(element);
            element.forEach(function (mycart) {

                console.log(">>>>>>>>>"+mycart.name);
                var carttable='<tr><td ><img src="'+mycart.picture+'" id="pimg" style="height: 60px;"></td><td >' + mycart.name + '</td><td >Price Rs.'+mycart.pricde+'</td><td >Qty '+mycart.qty+'</td><td id="remove"><i class="fas fa-trash"></i></td></tr>';

                $("#mycarttbl").append(carttable);

            })


        }

        // response.forEach(function (mycart) {
        //
        //
        //     console.log(mycart.name);
        // })

    });

}


