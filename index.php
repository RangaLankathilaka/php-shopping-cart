<?php
//session_set_cookie_params(10*60);
//session_start();
//if(!isset($_SESSION["mycart"])){
//    session_unset();
//    session_destroy();
//    header("Location: login.html");
//}
//
//?>
<!---->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ebay</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
        crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/semantic.min.css">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Wendy+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Crete+Round|Wendy+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">

    <script>

//     var countries = ['France', 'UK', 'Spain','Belgium','Holland'],
//     select = document.getElementById( 'countries' );

// for( country in countries ) {

//     select.add( new Option( countries[country] ) );

// };

    </script>


    <style>
        * {
            /* font-family: 'Josefin Sans', sans-serif; */
            font-family: 'Muli', sans-serif;


        }

        #close {
            cursor: default;
        }

        #textv {
            cursor: pointer;
        }

                #top {
            height: 60px;
            font-size: 30px;
            /* text-align: center; */
            background-color: #489ee7;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            position: static;
            margin-bottom: 30px;
           
        }

         #top>div>span {
            color: white;
            font-family: 'Muli', sans-serif;
            margin-left: 10px;
            
            
            /* top: 50%;
            left: 50%;
            margin: auto; */

        }

         #placeo{
            margin-top: 10px;
            margin-left: 10px;
        }


        #firstcol1{

            float: left;
            width: 25%; /* three boxes (use 25% for four, and 50% for two, etc) */
            padding: 40px;
        }
        #thcol{
            top:50%;
            left:50%;
            margin: auto;


            width: 50%; /* three boxes (use 25% for four, and 50% for two, etc) */
            padding: 50px;
        }
table{
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

}
#zoomcol{
    height: 850px;
    width: 1340px;
margin-left: 500px;
    background-color: red;
margin-top: -850px;
}

#cart{
    float: right;
    margin-right: 40px;
    cursor: pointer;
    font-size: 20px;
}
#usernametop{

    float: right;
    margin-right: 40px;
    cursor: pointer;
    font-size: 20px;



}

        #signup{
            float: right;
            margin-right: 20px;
            cursor: pointer;
            font-size: 20px;
        }
        #user{
            float: right;
            margin-right: 20px;
            cursor: pointer;
            font-size: 20px;
            cursor: pointer;

        }



        #usernametop{
            border-color:#489ee7 ;

            background-color: #489ee7;
            color: white;

        }

        
    </style>




</head>

<body>



    <div id="wrapper" class="container-fluid">
        <div class="row">
            <div id="top" class="col col-xl-12">

                <div id="placeo">
                    <span>
                        <i class="fab fa-accusoft"></i>&nbsp&nbspebay</span>



                    <span id="cart"><i class="fas fa-shopping-cart"></i></span>
                    <span id="signup"><i class="fas fa-user-plus"></i></span>
                    <span id="usernametop"></span>




                </div>


            </div>
















        </div>

<div id="parentdiv" >
                    <div id="firstcol1">

                        <!--<img src="" style="height: 30px;">-->

                        <!-- <table id="tablelist" class="table col-12">
                            <thead>
                                <tr>
                                    <th scope="col" contenteditable="true">Title</th>

                                </tr>
                            </thead>
                            <tbody id="listtb">
                               




                            </tbody>
                            <tfoot>

                                <tr>
                                    <td id="textv">
                                        <i class="fas fa-plus"></i>&nbsp&nbsp&nbspList item</td>
                                </tr>
                                <tr>
                                    <td colspan="5" class="center aligned">
                                        <p id="close">close</p>
                                    </td>
                                </tr>
                            </tfoot>

                        </table> -->

                    </div>
    <div id="seccol">


    </div>

    <div id="thcol">


    </div>



</div>






    </div>



    <script src="dist/js/plugins/jquery/jquery.js"></script>
    <script src="dist/js/plugins/jquery/jquery.cookie.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="dist/js/plugins/jQueryUI/jquery-ui.min.js"></script>
<!-- Bootstrap 4 -->
<script src="dist/js/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>


    
    <script src="dist/js/controller/myjs.js"></script>

</body>

</html>