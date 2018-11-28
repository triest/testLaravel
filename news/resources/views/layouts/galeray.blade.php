<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>{{$title}}</title>
    <script src="https://getbootstrap.com/docs/3.3/assets/js/ie-emulation-modes-warning.js"></script>
    <!--   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.0/angular.min.js"></script>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('css/gallery-grid.css')}}">
    <!-- Bootstrap core CSS -->
    <link href="http://bootstrap-3.ru/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <!--scripts for table -->
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>

    <!--end scripts for table -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>


    <!--table CSS -->
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('css/gallery-grid.css')}}">

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <!-- Custom styles for this template -->
    <link href="http://bootstrap-3.ru/examples/offcanvas/offcanvas.css" rel="stylesheet">
    <link rel="icon" href="<?php echo asset("public/images/sakura.jpg")?>">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">

    <meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Bootstrap twitter bootstrap slider with carousel navigation example." />
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="icon" href="http://example.com/favicon.png">
    <style>
        .container{max-width:1170px; margin:auto;}
        img{ max-width:100%;}
        .inbox_people {
            background: #f8f8f8 none repeat scroll 0 0;
            float: left;
            overflow: hidden;
            width: 40%; border-right:1px solid #c4c4c4;
        }
        .inbox_msg {
            border: 1px solid #c4c4c4;
            clear: both;
            overflow: hidden;
        }
        .top_spac{ margin: 20px 0 0;}


        .recent_heading {float: left; width:40%;}
        .srch_bar {
            display: inline-block;
            text-align: right;
            width: 60%; padding:
        }
        .headind_srch{ padding:10px 29px 10px 20px; overflow:hidden; border-bottom:1px solid #c4c4c4;}

        .recent_heading h4 {
            color: #05728f;
            font-size: 21px;
            margin: auto;
        }
        .srch_bar input{ border:1px solid #cdcdcd; border-width:0 0 1px 0; width:80%; padding:2px 0 4px 6px; background:none;}
        .srch_bar .input-group-addon button {
            background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
            border: medium none;
            padding: 0;
            color: #707070;
            font-size: 18px;
        }
        .srch_bar .input-group-addon { margin: 0 0 0 -27px;}

        .chat_ib h5{ font-size:15px; color:#464646; margin:0 0 8px 0;}
        .chat_ib h5 span{ font-size:13px; float:right;}
        .chat_ib p{ font-size:14px; color:#989898; margin:auto}
        .chat_img {
            float: left;
            width: 11%;
        }
        .chat_ib {
            float: left;
            padding: 0 0 0 15px;
            width: 88%;
        }

        .chat_people{ overflow:hidden; clear:both;}
        .chat_list {
            border-bottom: 1px solid #c4c4c4;
            margin: 0;
            padding: 18px 16px 10px;
        }
        .inbox_chat { height: 550px; overflow-y: scroll;}

        .active_chat{ background:#ebebeb;}

        .incoming_msg_img {
            display: inline-block;
            width: 6%;
        }
        .received_msg {
            display: inline-block;
            padding: 0 0 0 10px;
            vertical-align: top;
            width: 92%;
        }
        .received_withd_msg p {
            background: #ebebeb none repeat scroll 0 0;
            border-radius: 3px;
            color: #646464;
            font-size: 14px;
            margin: 0;
            padding: 5px 10px 5px 12px;
            width: 100%;
        }
        .time_date {
            color: #747474;
            display: block;
            font-size: 12px;
            margin: 8px 0 0;
        }
        .received_withd_msg { width: 57%;}
        .mesgs {
            float: left;
            padding: 30px 15px 0 25px;
            width: 60%;
        }

        .sent_msg p {
            background: #05728f none repeat scroll 0 0;
            border-radius: 3px;
            font-size: 14px;
            margin: 0; color:#fff;
            padding: 5px 10px 5px 12px;
            width:100%;
        }
        .outgoing_msg{ overflow:hidden; margin:26px 0 26px;}
        .sent_msg {
            float: right;
            width: 46%;
        }
        .input_msg_write input {
            background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
            border: medium none;
            color: #4c4c4c;
            font-size: 15px;
            min-height: 48px;
            width: 100%;
        }

        .type_msg {border-top: 1px solid #c4c4c4;position: relative;}
        .msg_send_btn {
            background: #05728f none repeat scroll 0 0;
            border: medium none;
            border-radius: 50%;
            color: #fff;
            cursor: pointer;
            font-size: 17px;
            height: 33px;
            position: absolute;
            right: 0;
            top: 11px;
            width: 33px;
        }
        .messaging { padding: 0 0 50px 0;}
        .msg_history {
            height: 516px;
            overflow-y: auto;
        }
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
            background: "<?php echo asset("public/images/sakura.jpg")?>" repeat;
            -moz-background-size: 100%; /* Firefox 3.6+ */
            -webkit-background-size: 100%; /* Safari 3.1+ и Chrome 4.0+ */
            -o-background-size: 100%; /* Opera 9.6+ */
            background-size: 100%; /* Современные браузеры */
        }
        body {
            background: url("<?php echo asset("public/images/rozovyj-fon29_small.jpg")?>") repeat;
            -moz-background-size: 10%; /* Firefox 3.6+ */
            -webkit-background-size: 10%; /* Safari 3.1+ и Chrome 4.0+ */
            -o-background-size: 10%; /* Opera 9.6+ */
            background-size: 10%; /* Современные браузеры */
        }
        .btn.btn-success.active,
        .btn.btn-success.active:hover {
            color: #ffffff;
            background-color: #27ff5a;
            background-image: linear-gradient(to bottom, #419641, #419641);
            background-position: 0 0;
            border-color: #3E8F3E #3E8F3E #3E8F3E;
        }





        .btn.btn.active:hover {
            color: #ffffff;
            background-color: #27ff5a;
            background-image: linear-gradient(to bottom, #419641, #419641);
            background-position: 0 0;
            border-color: #3E8F3E #3E8F3E #3E8F3E;
        }

        .full-height {
            height: 100vh;
        }


        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }
        .flex-center2 {
            align-items: center;
            display: flex;
            justify-content: center;
        }
        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .button1 {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            margin: 10px 2px;
            cursor: pointer;
            font-size: 24px;
        }


        .button2 {
            font-size: 24px;
            background-color: #4af0fa; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            margin: 4px 2px;
            cursor: pointer;
        }

        .
        .m-b-md {

            margin-bottom: 30px;
        }



        /**
* Chunky 3D Web Buttons
*
* Inspiration was taken from:
* - http://www.premiumpixels.com/freebies/chunky-3d-webbuttons-psd/
*/

        /**
         * Shadow
         */
        a.button::before {
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            -webkit-box-shadow: #959595 0 2px 5px;
            -moz-box-shadow: #959595 0 2px 5px;
            border-radius: 3px;
            box-shadow: #959595 0 2px 5px;
            content: "";
            display: block;
            height: 100%;
            left: 0;
            padding: 2px 0 0;
            position: absolute;
            top: 0;
            width: 100%; }

        a.button:active::before { padding: 1px 0 0; }

        /**
         * Grey
         */
        a.button {
            -moz-box-shadow: inset 0 0 0 1px #63ad0d;
            -webkit-box-shadow: inset 0 0 0 1px #63ad0d;
            -moz-border-radius: 3px;
            -webkit-border-radius: 3px;
            background: #eee;
            background: -webkit-gradient(linear, 0 0, 0 bottom, from(#eee), to(#e2e2e2));
            background: -moz-linear-gradient(#eee, #e2e2e2);
            background: linear-gradient(#eee, #e2e2e2);
            border: solid 1px #d0d0d0;
            border-bottom: solid 3px #b2b1b1;
            border-radius: 3px;
            box-shadow: inset 0 0 0 1px #f5f5f5;
            color: #555;
            display: inline-block;
            font: bold 12px Arial, Helvetica, Clean, sans-serif;
            margin: 0 25px 25px 0;
            padding: 10px 20px;
            position: relative;
            text-align: center;
            text-decoration: none;
            text-shadow: 0 1px 0 #fafafa; }

        a.button:hover {
            background: #e4e4e4;
            background: -webkit-gradient(linear, 0 0, 0 bottom, from(#e4e4e4), to(#ededed));
            background: -moz-linear-gradient(#e4e4e4, #ededed);
            background: linear-gradient(#e4e4e4, #ededed);
            border: solid 1px #c2c2c2;
            border-bottom: solid 3px #b2b1b1;
            box-shadow: inset 0 0 0 1px #efefef; }

        a.button:active {
            background: #dfdfdf;
            background: -webkit-gradient(linear, 0 0, 0 bottom, from(#dfdfdf), to(#e3e3e3));
            background: -moz-linear-gradient(#dfdfdf, #e3e3e3);
            background: linear-gradient(#dfdfdf, #e3e3e3);
            border: solid 1px #959595;
            box-shadow: inset 0 10px 15px 0 #c4c4c4;
            top:2px;}

        /**
         * Pink
         */
        a.button.pink {
            background: #f997b0;
            background: -webkit-gradient(linear, 0 0, 0 bottom, from(#f997b0), to(#f56778));
            background: -moz-linear-gradient(#f997b0, #f56778);
            background: linear-gradient(#f997b0, #f56778);
            border: solid 1px #ee8090;
            border-bottom: solid 3px #cb5462;
            box-shadow: inset 0 0 0 1px #fbc1d0;
            color: #913944;
            text-shadow: 0 1px 0 #f9a0ad; }

        a.button.pink:hover {
            background: #f57184;
            background: -webkit-gradient(linear, 0 0, 0 bottom, from(#f57184), to(#f78297));
            background: -moz-linear-gradient(#f57184, #f78297);
            background: linear-gradient(#f57184, #f78297);
            border: solid 1px #e26272;
            border-bottom: solid 3px #cb5462;
            box-shadow: inset 0 0 0 1px #f9aab5; }

        a.button.pink:active {
            background: #f06a7c;
            background: -webkit-gradient(linear, 0 0, 0 bottom, from(#f06a7c), to(#f56c7e));
            background: -moz-linear-gradient(#f06a7c, #f56c7e);
            background: linear-gradient(#f06a7c, #f56c7e);
            border: solid 1px #a14753;
            box-shadow: inset 0 10px 15px 0 #d45d6d; }




        /**
         * Green
         */
        a.button.green {
            background: #cae285;
            background: -webkit-gradient(linear, 0 0, 0 bottom, from(#cae285), to(#a3cd5a));
            background: -moz-linear-gradient(#cae285, #a3cd5a);
            background: linear-gradient(#cae285, #a3cd5a);
            border: solid 1px #aad063;
            border-bottom: solid 3px #799545;
            box-shadow: inset 0 0 0 1px #e0eeb6;
            color: #5d7731;
            text-shadow: 0 1px 0 #d0e5a4; }

        a.button.green:hover {
            background: #abd164;
            background: -webkit-gradient(linear, 0 0, 0 bottom, from(#abd164), to(#b9d972));
            background: -moz-linear-gradient(#abd164, #b9d972);
            background: linear-gradient(#abd164, #b9d972);
            border: solid 1px #98b85b;
            border-bottom: solid 3px #799545;
            box-shadow: inset 0 0 0 1px #cce3a1; }

        a.button.green:active {
            background: #a4cb5d;
            background: -webkit-gradient(linear, 0 0, 0 bottom, from(#a4cb5d), to(#9ec45a));
            background: -moz-linear-gradient(#a4cb5d, #9ec45a);
            background: linear-gradient(#a4cb5d, #9ec45a);
            border: solid 1px #6e883f;
            box-shadow: inset 0 10px 15px 0 #90b352; }


        /**
         * Blue
         */
        a.button.blue {
            background: #abe4f8;
            background: -webkit-gradient(linear, 0 0, 0 bottom, from(#abe4f8), to(#74d0f4));
            background: -moz-linear-gradient(#abe4f8, #74d0f4);
            background: linear-gradient(#abe4f8, #74d0f4);
            border: solid 1px #8cc5d9;
            border-bottom: solid 3px #589cb6;
            box-shadow: inset 0 0 0 1px #cdeffb;
            color: #42788e;
            text-shadow: 0 1px 0 #b6e6f9; }

        a.button.blue:hover {
            background: #80d4f5;
            background: -webkit-gradient(linear, 0 0, 0 bottom, from(#80d4f5), to(#92dbf6));
            background: -moz-linear-gradient(#80d4f5, #92dbf6);
            background: linear-gradient(#80d4f5, #92dbf6);
            border: solid 1px #79acbe;
            border-bottom: solid 3px #589cb6;
            box-shadow: inset 0 0 0 1px #b2e6f8; }

        a.button.blue:active {
            background: #89d2ee;
            background: -webkit-gradient(linear, 0 0, 0 bottom, from(#89d2ee), to(#84cae6));
            background: -moz-linear-gradient(#89d2ee, #84cae6);
            background: linear-gradient(#89d2ee, #84cae6);
            border: solid 1px #5c8d9f;
            box-shadow: inset 0 10px 15px 0 #79b9d2; }
        .menuButton {
            background: #80d4f5;
            background: -webkit-gradient(linear, 0 0, 0 bottom, from(#80d4f5), to(#92dbf6));
            background: -moz-linear-gradient(#80d4f5, #92dbf6);
            background: linear-gradient(#80d4f5, #92dbf6);
            border: solid 1px #79acbe;
            border-bottom: solid 3px #589cb6;
            box-shadow: inset 0 0 0 1px #b2e6f8;
        }
    </style>
    <style type="text/css">
        .selected img {
            opacity:0.5;
        }

        .carousel-inner>.item>img, .carousel-inner>.item>a>img{
            height:150px;
            weight:250px;
            margin: 0 auto;
        }

        .slider{

            width: 100px;

        }
        .center-div
        {
            position: absolute;
            margin: auto;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 100px;
            height: 100px;
            background-color: #ccc;
            border-radius: 3px;
        }
    </style>

</head>

<body>


<div class="container">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.0/angular.min.js"></script>
    <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
            <p class="pull-right visible-xs">
                <button type="button" class="menuButton" data-toggle="offcanvas"><b>Меню</b></button>
            </p>



            <div class="row">
                @yield('content')
            </div><!--/row-->
        </div><!--/span-->

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">

        </div><!--/span-->
    </div><!--/row-->

    <hr>

    <footer>

    </footer>

</div><!--/.container-->

<script type='text/javascript'>

    $(document).ready(function() {

        $('#myCarousel').carousel({
            interval: 4000
        });

// handles the carousel thumbnails
        $('[id^=carousel-selector-]').click( function(){
            var id_selector = $(this).attr("id");
            var id = id_selector.substr(id_selector.length -1);
            id = parseInt(id);
            $('#myCarousel').carousel(id);
            $('[id^=carousel-selector-]').removeClass('selected');
            $(this).addClass('selected');
        });

// when the carousel slides, auto update
        $('#myCarousel').on('slid', function (e) {
            var id = $('.item.active').data('slide-number');
            id = parseInt(id);
            $('[id^=carousel-selector-]').removeClass('selected');
            $('[id=carousel-selector-'+id+']').addClass('selected');
        });

    });

</script>

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-40413119-1', 'bootply.com');
    ga('send', 'pageview');
</script>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="http://bootstrap-3.ru/dist/js/bootstrap.min.js"></script>
<script src="http://bootstrap-3.ru/examples/offcanvas/offcanvas.js"></script>
</body>
</html>