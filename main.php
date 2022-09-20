<?php
error_reporting(E_ALL);
ini_set('display_errors', true);
session_start();
header('Content-Type: text/html; charset=utf-8');
//include_once("clases/commons.php");
$skin = "material"; //"skyblue/web/material/terrace"
$cookie_name = "deviceid";
$_SESSION["keyunik"] = md5(uniqid());
//echo "id de sesion ".$_SESSION["keyunik"];
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />

    <head>
        <meta charset="utf-8" />
        <title>Optical Technologies</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Optical Technologies" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css" />
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">



        <link href="assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        
        <link href="assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />

        <link href="assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="assets/layouts/layout3/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/layouts/layout3/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="assets/layouts/layout3/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> 

        <link href="assets/codebase/dhtmlx.css" rel="stylesheet" type="text/css" />
				<link rel="stylesheet" href="styles/jquery-confirm.min.css">

        <link rel="stylesheet" href="assets/global/sweetalert/sweetalert.css">
        <link rel="stylesheet" href="assets/global/plugins/select2/css/select2.min.css">
                        
        <link rel="stylesheet" href="assets/codebase/fonts/font_roboto/roboto.css">        
        <link rel="stylesheet" href="assets/personalizado/v4/bootstrap-datetimepicker.css">
        <link rel="stylesheet" href="assets/global/css/jquerytoast.css">
        
        
<!--        <link rel="stylesheet" href="assets/draw2d/estilos.css">-->



        <style>
            html,body{width:100%;height:100%}
            .page-header{height:0px}
            .dhxwin_active, .dhxwin_hdr {background-color:#993366}
        </style>

        <link rel="stylesheet" type="text/css" href="assets/skins/<?php echo $skin; ?>/dhtmlx.css"/>


        <style>

            .dhxtabbar_base_material div.dhxtabbar_tabs div.dhxtabbar_tabs_base div.dhxtabbar_tab.dhxtabbar_tab_actv {
                color: #39c;
                background-color: #39c;
            }

            html, body {
                width: 100%;
                height: 100%;
                margin: 0px;
                padding: 0px;
                background-color: #ebebeb;
                overflow: hidden;
            }

            #particle-canvas {
                width: 100%;
                height: 100%;
            }

            #my_header {
                padding-bottom: 0px;
                background-color: #535353;
                background-image: url(images/on1.png);
                background-repeat: no-repeat;
                background-size: contain;
                width: 100%;
                height: 100%;
                background-position: center;
            }

            #my_header .my_header_text {
                font-family: Tahoma;
                font-size: 12px;
                padding: 5px 10px;
                height: 40px; /* for autodetect */
                border: 0px solid #a4bed4
            }
            .box {
                font-family:Roboto,Arial,Helvetica;;
                background-color:#ffffff;
                display:inline-block;
                margin:15px;
                padding:0px;
                vertical-align:top;
            }
            .box label, input[radio]{
                margin-top:10px;
                padding:5px;
            }

            .boxshadow2 {
                font-family:Roboto,Arial,Helvetica;;
                border:1px solid #f0f0f0;
                box-shadow:5px 5px 5px #dddddd;
                background-color:#ffffff;
                width:95%;
                display:inline-block;
                margin:5px;
                height:70px;
                padding:0px;
                vertical-align:top;
                position:relative;
            }

            .boxshadow2 >.title {
                font-size:120%;
                padding:0px;
                margin:0px;
                text-align:center;
                color:#ff9933;
                width:98%;
                height:35%;
                position:absolute;
                padding-top:25px;

            }


            .boxshadow2 >.title .sub{
                float:right;
                font-size:45%;
                padding:0px;
                margin:5px;
                text-align:center;
                color:#a0a0a0;
                position:absolute;
                width:98%;
                padding-top:25px;

            }

            .boxshadow {
                font-family:Roboto,Arial,Helvetica;;
                border:1px solid #f0f0f0;
                box-shadow:5px 5px 5px #dddddd;
                background-color:#ffffff;
                width:100px;
                display:inline-block;
                margin:5px;
                height:70px;
                padding:0px;
                vertical-align:top;
                position:relative;
            }


            .boxshadow >.title {
                font-size:120%;
                padding:0px;
                margin:0px;
                text-align:center;
                color:#ff9933;
                width:98%;
                height:35%;
                position:absolute;
                padding-top:25px;

            }


            .boxshadow >.title .sub{
                float:right;
                font-size:45%;
                padding:0px;
                margin:5px;
                text-align:center;
                color:#a0a0a0;
                position:absolute;
                width:98%;
                padding-top:25px;

            }

            .containerTac {
               
                overflow-x: auto;
                white-space: nowrap;
            }

            .scrollHorizontal {
                /*width: 30em;*/
                overflow-x: auto;
                white-space: nowrap;
                /*width: 30em;*/

            }

            .scrollVertical {
                overflow-y: auto;
                /*white-space: nowrap;*/
            }

            /*INICIO MODAL POPUP*/
            /* The Modal (background) */
            .modal {
                display: none; /* Hidden by default */
                position: fixed; /* Stay in place */
                z-index: 1; /* Sit on top */
                left: 0;
                top: 0;
                width: 100%; /* Full width */
                height: 100%; /* Full height */
                overflow: auto; /* Enable scroll if needed */
                background-color: rgb(0,0,0); /* Fallback color */
                background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            }
            .modal-header {
                /*padding: 2px 16px;*/
                margin-top: 3%;
                margin-left: 1%;
                /*margin-right: 3%;*/
                /*background-color: #32C5D2;*/
                background-color: #000;
                padding: 20px;
                /*border: 1px solid #fff;*/
                border: 1px solid #888;
                color: white;
                width: 95%;
            }

            /* Modal Content/Box */
            .modal-content {
                background-color: #fefefe;
                margin-top: -1%;
                /*margin-top: 3%;*/
                margin-left: 1%;
                /*margin-left:  2% auto;
                margin-right: 2% auto;*/

                padding: 20px;
                border: 1px solid #888;
                width: 95%; /* Could be more or less, depending on screen size */
            }

            /* The Close Button */
            .close {
                margin: -10px;
                /*color: #aaa;*/
                float: right;
                font-size: 28px;
                font-weight: bold;
            }

            .close:hover,
            .close:focus {
                color: black;
                text-decoration: none;
                cursor: pointer;
            }
            /*fin*/



            .boxseparator {
                border:0px solid #f0f0f0;
                border-right:1px;
                width:1px;
                height:65px;
                margin-right:10px;
            }


            .boxshadow > div {
                font-size:80%;
                padding:5px;
                margin:0px;
                text-align:center;
                color:#505050;
                width:90%;
                height:40%;
                vertical-align:middle;
                border:0px solid #ccc;
                position:relative;
            }

            .titlecell {
                font-size:70%;
                padding:5px;
                margin:5px;
                text-align:center;
                color:#505050;
                width:100%;
                background-color:#c3c3c3
            }

            .nodetitle	{
                text-align:center;
                font-size:120%;
                color:#ececec;
                font-family:arial;
                width:100%;
                height:25px;
                padding:5px;
                background:#535353;
                vertical-align:middle;
            }

            .red { background-color:#ff5555; color:#ffffff}
            .red > div {  color:#ffffff}
            .red .title {  color:#ffffff}
            .red .title .sub {  color:#ffffff}

            .rotate {
                background:#535353;
                color:#fff;
                -moz-transform: rotate(-90.0deg);  /* FF3.5+ */
                -o-transform: rotate(-90.0deg);  /* Opera 10.5 */
                -webkit-transform: rotate(-90.0deg);  /* Saf3.1+, Chrome */
                filter:  progid:DXImageTransform.Microsoft.BasicImage(rotation=0.083);  /* IE6,IE7 */
                -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0.083)"; /* IE8 */
            }

            input {
                border:1px solid #000;

            }

            .dhxform_obj_material .dhxform_textarea {
                border-width: 1px 1px 1px 1px;
                border-style: solid;
                border-color: #dfdfdf;
                resize: none;
                font-size: 14px;
                font-family: Roboto, Arial, Helvetica;
                color: #404040;

            }

            .dhxform_obj_material div.dhxform_txt_label2 {
                /*font-weight: bold;*/

                margin: 0px 0px;
                padding: 0px 0px;
                cursor: default;
                font-size: 22px;
                font-family: Roboto, Arial, Helvetica;
                color: #993366;

            }

            .dhxform_obj_material div.dhxform_txt_label2  div.newlabel{

                border:1px solid #c0c0c0;
                padding:10px;
                border-radius: 5px;
                background:#fafafa;

            }


            .dhxform_obj_material div.dhxform_label{

                overflow-x:hidden;
                overflow:hidden;
                white-space:normal;
                font-size:14px;
                color:#101010;
                height:30px;

            }

            .vertical-align-middle {
                vertical-align: middle;
            }

            .padding-bottom-3 {
                padding-bottom: 3px;
            }

            .material-icons {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                vertical-align: middle;
            }

            .dhxform_textarea{

                height:30px;
                font-size:120%;
                -webkit-border-radius: 50px;
                -moz-border-radius: 50px;
                border-radius: 50px;
                text-indent: 10px;
            }

            div.gridbox .filter input{
                height:30px;
                font-size:12px;
                -webkit-border-radius: 50px;
                -moz-border-radius: 50px;
                border-radius: 50px;
                text-indent: 10px;
            }

            input[readonly=true].dhxform_textarea {

                background-color:#f5f5f5;

            }

            .dhxform_obj_material div.dhxform_btn{
                box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.3);
            }

            .menurighttop{
                text-decoration:none;
                color:#fff;
                margin-right:10px;
            }

            .menurighttopsep{
                color:#fff;
                margin-right:10px;
                font-weight:bold;
                font-size:120%;
            }

            .hide {
                display: none;
            }


            /*    Monitoreo OPTINODO */

            .divTitulo {
                border-left: 3px solid #32C5D2;
                font-size: 22px;
                padding-left: 7px;
                /*background-color: #EBB301;*/
                background-color: #FFFFFF;
                font-family: sans-serif;
                /*color:#ffffff;*/
                color:#716e6e;
                /*margin-top: -20px;*/
                font-family: "Open Sans",sans-serif;
            }

            /*.flex-container2 {
                    display: flex;*/
            /*background-color: DodgerBlue;*/
            /*background-color: #d1caca;*/
            /*}*/

            /*.flex-container2 > div {
                    background-color: #f1f1f1;
                    margin: 10px;
                    flex-grow: 2; 
            }*/

            .contenedorNodos {	
                /*	display: flex;
                        flex-wrap: wrap;*/
                /*background-color: DodgerBlue;*/

                overflow: auto;	
                height: 80vh ;	
                /*display: flex;
                flex-direction: column;		
                height: 268px ;
                align-items: center;*/
            }

            .contenedorNodos > div {
                /*background-color: #f1f1f1;
                width: 100px;
                margin: 10px;
                text-align: center;
                line-height: 75px;
                font-size: 30px;*/


                background-color: #f1f1f1;
                width: 51px;
                height: 66px;
                margin: 5px;
                text-align: center;
                /*line-height: 21px;*/

                /*border: 1px;*/
                /*background-color: red;*/
                /*	  width: 100px;
                          margin: 10px;
                          text-align: center;
                          line-height: 75px;
                          font-size: 30px;*/
            }


            .contenedorNodosEventos {
                /*height: 300px;*/
                overflow: scroll;
                /*justify-content: center;*/
                display: flex;
                flex-direction: column;		
                align-items: center;
                /*display: flex;*/
                /*flex-direction: column;*/
                /*background-color: DodgerBlue;*/
            }


            .flex-containerEventos {
                display: flex;
                background-color: black;
            }

            .flex-containerEventos>div {
                background-color: #f1f1f1;
                margin: 1px;
                padding:1px;

            }



            /*	.contentNodoInterno {
                            width: 130px;		
                            background: #fff;
                            padding: 10px;
                            border: 1px solid #2C3E50;
                            margin: 20px;
                            display: -webkit-flex;
                            display: -ms-flexbox;
                            display: flex;
                            justify-content: center;
                            flex-wrap: wrap;
                    }
            */
            .flex-containerCamaras {

                display: flex;
                flex-wrap: wrap;		
                /*overflow: scroll;*/

                /*display: flex;*/
                /*flex-direction: column;*/
                /*background-color: DodgerBlue;*/
                /*height: 300px ;*/
            }

            .flex-containerCamaras > div {
                background-color: #00000;
                /*margin: 10px;*/
                margin: 7px;
                padding:20px;
                font-size: 30px;
                flex-grow: 2;  /*default 0 */
            }


            .anodo {
                /*height: 66px;		*/
                min-width: 120px;
                margin: 5px 5px 0 0;
                border: 3px solid #ddd;
                /*padding: 12px 0 0;*/
                background-color: #fafafa;
                background-image: none;
                -webkit-box-shadow: none;
                -moz-box-shadow: none;
                box-shadow: none;
                display: inline-block;
                color: #646464;
                text-shadow: none;
                text-align: center;
                cursor: pointer;
                position: relative;
                transition: all .3s ease;
            }

            .divnodo {		
                margin-bottom: 20px;
                color: #3f444a;
                font-size: 10px;
                font-weight: 300;		
                text-shadow: none;
                text-align: center;
                cursor: pointer;
            }



            .estiloActividad {
                /*margin-top: 5px;*/
                position: absolute;
                font-size: 11px;
                font-weight: 300;
                top: -5px;
                right: -5px;
                padding: 7px 8px;
                background-color: green;
                color: #fff;
                text-shadow: none;
                border-width: 0;
                border-style: solid;
                -webkit-border-radius: 12px;
                -moz-border-radius: 12px;
                border-radius: 12px;
                -webkit-box-shadow: none;
                -moz-box-shadow: none;
                box-shadow: none;
            }

            .estiloMenuButton {
                /*margin-top: 5px;*/
                position: absolute;
                font-size: 11px;
                font-weight: 300;
                top: -5px;
                right: -5px;
                padding: 7px 8px;
                background-color: #337AB7;
                color: #fff;
                text-shadow: none;
                border-width: 0;
                border-style: solid;
                -webkit-border-radius: 12px;
                -moz-border-radius: 12px;
                border-radius: 12px;
                -webkit-box-shadow: none;
                -moz-box-shadow: none;
                box-shadow: none;
            }


            .fixed-table-container {
                padding-bottom: 38px !important;
            }

            /*	.btn-circle {
                            border-radius: 25px!important;
                            overflow: hidden;
                    }
            
                    components-md.min.css:1
                            .btn {
                            outline: 0!important;
                    }
                 
                    .btn {
            
                        margin-bottom: 0;
                        font-weight: 400;
                        text-align: center;
                        vertical-align: middle;
                        touch-action: manipulation;
                        cursor: pointer;
                        border: 1px solid transparent;
                        white-space: nowrap;
                        padding: 6px 12px;
                        font-size: 14px;
                        line-height: 1.42857;
                        border-radius: 4px;
                        -webkit-user-select: none;
                        -moz-user-select: none;
                        -ms-user-select: none;
                        user-select: none;
                    }
            */

            /* */




            .flex-container {
                display: -webkit-flex;
                display: flex;
                width: 100%;
                height: 100%;
                /*background-color: lightgrey;*/
            }

            .contenedor {

                width: 130px;
                /*height: 200px;*/
                background: #fff;
                padding: 10px;
                border: 1px solid #2C3E50;
                /*margin: 20px;*/

                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;

                justify-content: center;
                flex-wrap: wrap;
                /* align-items: center;
                align-content: center; */


                /* flex-direction: row;
                flex-wrap: wrap;
            
                flex-flow: row wrap; */
            }

            .elemento {
                color: #fff;
                margin: 5px;
                width: 200px;
                /*height: 50px;*/
                /*background: #E67E22;*/
                text-align: center;
                display: flex;
                justify-content: center;
                flex-direction: column;
            }


            .flex-item {
                /*background-color: cornflowerblue;*/
                width: 100%;
                border: 2px solid #DFDFDF;
                height: 100%;
                margin: 2px;
            }


            .flex-itemVertical {
                /*background-color: cornflowerblue;*/
                width: 100%;
                border: 2px solid #DFDFDF;
                height: 100%;
                /*margin: 2px;*/
            }

            .flex-itemVerticalTop {
                /*background-color: cornflowerblue;*/
                width: 100%;
                border: 2px solid #DFDFDF;
                height: 8%;
                /*margin: 2px;*/
            }

            .flex-containerVertical {
                display: -webkit-flex;
                display: flex;
                flex-direction: column;
                width: 100%;
                height: 100%;
                /*background-color: lightgrey;*/
            }

            .flex-item-30 {
                /*background-color: cornflowerblue;*/
                width: 30%;
                border: 2px solid #DFDFDF;
                height: 100%;
                margin: 2px;
            }

            .flex-item-40 {
                /*background-color: cornflowerblue;*/
                width: 40%;
                border: 2px solid #DFDFDF;
                height: 100%;
                margin: 2px;
            }


            #floating-panel {
                position: absolute;
                top: 10px;
                left: 25%;
                z-index: 5;
                background-color: #fff;
                padding: 5px;
                border: 1px solid #999;
                text-align: center;
                font-family: 'Roboto','sans-serif';
                line-height: 30px;
                padding-left: 10px;
            }

            #flotbarPlaceholder div.xAxis div.tickLabel
            {
                transform: rotate(-45deg);
                -ms-transform:rotate(-45deg); /* IE 9 */
                -moz-transform:rotate(-45deg); /* Firefox */
                -webkit-transform:rotate(-45deg); /* Safari and Chrome */
                -o-transform:rotate(-45deg); /* Opera */
                /*rotation-point:50% 50%;*/ /* CSS3 */
                /*rotation:270deg;*/ /* CSS3 */
            }

            div.gridbox  .hdrcell {color:#993366;font-weight:bold}


            .eliminar{
                /*border-bottom: 1px dashed #c0c0c0;*/
                width: 47px !important;
                height: 24px !important;
                margin-left: 2px !important;
            }
            .eliminar i{
                padding: 0 1px 0 1px;
            }

            .even{
                background-color:#fff;
                height:45px;
            }
            .uneven{
                background-color:#fff;
                height:45px;
            }
            
            /*Fondo cambio de estilo*/
            .dhxform_obj_material{
                background: #fff !important;
            }
            
            /* PRICE TABLE */
                .row-flex {
                    display: flex;
                    flex-wrap: wrap;
                    -webkit-flex-wrap: wrap;
                    -ms-flex-wrap: wrap;
                    -moz-flex-wrap: wrap;
                }

                .price-table {
                    max-width: 400px;
                    min-height: 320px;
                    background-color: #fff;
                    border-radius: 0 0 0 25px;
                    border: 1px solid #ccc;
                    box-shadow: 5px 5px 8px #ccc;
                    display: block;
                    margin: 10px auto;
                    padding: 0 0 8px 0;
                    text-align: center;
                }

                .price-table span {
                    display: block;
                }

                .price-table span:first-child {
                    padding: 16px 0 0 0;
                    font-size: 2em;
                    text-transform: uppercase;
                    font-weight: bold;
                }

                .price-table span:nth-child(2) {
                    padding: 0 0 16px 0;
                }

                .price-table span:nth-child(3) {
                    padding: 8px 0;
                    font-weight: bold;
                    font-size: 1.2em;
                }

                .price-table > ul {
                    list-style: none;
                    display: block;
                    padding: 0;
                    margin: 0;
                }

                .price-table > ul > li {
                    display: block;
                    padding: 8px 0;
                }

                .price-table > ul > li:first-child {
                    border-top: 1px solid #ccc;
                }

                .price-table > ul > li {
                    border-bottom: 1px solid #ccc;
                }

                .price-table a,
                .price-table a:active,
                .price-table a:focus,
                .price-table a:hover,
                .price-table a:visited {
                    text-transform: uppercase;
                    display: inline-block;
                    padding: 8px 16px;
                    text-decoration: none;
                    font-weight: bold;
                    transition-duration: .2s;
                }

                /* Colors */
                .pt-bg-black span:first-child {
                    background-color: #212121;
                    color: #fcfcfc;
                }

                .pt-bg-black span:nth-child(2) {
                    background-color: #212121;
                    color: #D5D8DC;
                }

                .pt-bg-black a {
                    border: 3px solid #212121;
                    color: #212121;
                    margin-top: 8px;
                }

                .pt-bg-black a:hover {
                    background-color: #212121;
                    color: #fff;
                } /* End Color Black */

                .pt-bg-green span:first-child {
                    background-color: #27AE60;
                    color: #fcfcfc;
                }

                .pt-bg-green span:nth-child(2) {
                    background-color: #27AE60;
                    color: #D5D8DC;
                }

                .pt-bg-green a {
                    border: 3px solid #27AE60;
                    color: #27AE60;
                    margin-top: 8px;
                }

                .pt-bg-green a:hover {
                    background-color: #27AE60;
                    color: #fff;
                } /* End Color Green */

                .pt-bg-red span:first-child {
                    background-color: #C0392B;
                    color: #fcfcfc;
                }

                .pt-bg-red span:nth-child(2) {
                    background-color: #C0392B;
                    color: #D5D8DC;
                }

                .pt-bg-red a {
                    border: 3px solid #C0392B;
                    color: #C0392B;
                    margin-top: 8px;
                }

                .pt-bg-red a:hover {
                    background-color: #C0392B;
                    color: #fff;
                } /* End Color Red */

                .pt-bg-blue span:first-child {
                    background-color: #2980B9;
                    color: #fcfcfc;
                }

                .pt-bg-blue span:nth-child(2) {
                    background-color: #2980B9;
                    color: #D5D8DC;
                }

                .pt-bg-blue a {
                    border: 3px solid #2980B9;
                    color: #2980B9;
                    margin-top: 8px;
                }

                .pt-bg-blue a:hover {
                    background-color: #2980B9;
                    color: #fff;
                } /* End Color Blue */
                /* END PRICE TABLE */
                
                .dhx_cell_cont_layout{
                    overflow: auto !important;
                }
                
                
                .grid-item { 
                    margin-bottom: 10px; 
                    border-radius: 5px !important;
                }
                
                .grid-item:hover { 
                    cursor: pointer;
                }

                .btnInfoSwal{
                    background-color: lightgray !important;
                    border-color: lightgray !important;
                    margin: 0px !important; 
                    padding: 2px !important;
                }

                .infoSwal{
                    width: 800px !important;
/*                    width:50% !important;
                    overflow-y: auto !important;*/
                }
        </style>
        <style>
            .history-tl-container{
                font-family: "Roboto",sans-serif;
                width:100%;
                margin:auto;
                display:block;
                position:relative;
            }
            .history-tl-container ul.tl{
                margin:20px 0;
                padding:0;
                display:inline-block;

            }
            .history-tl-container ul.tl li{
                list-style: none;
                margin:auto;
                margin-left:110px;
                min-height:50px;
                /*background: rgba(255,255,0,0.1);*/
                border-left:1px dashed #86D6FF !important;
                padding:0 0 50px 30px;
                position:relative;
            }
            .history-tl-container ul.tl li:last-child{ border-left:0;}
            .history-tl-container ul.tl li::before{
                position: absolute;
                left: -10px;
                top: -5px;
                content: " ";
                border: 8px solid rgba(255, 255, 255, 0.74);
                border-radius: 500%;
                background: #258CC7;
                height: 20px;
                width: 20px;
                transition: all 500ms ease-in-out;
            }

            .history-tl-subdetail{
                padding: 0 0 10px 30px !important;
            }

            .history-tl-subdetail::before{
                position: absolute !important;
                left: 0px !important;
                top: 7px !important;
                content: " " !important;
                border: 1px dashed #86D6FF !important;
                border-radius: 0 !important;
/*                background: #258CC7;*/
                background: #fff !important;
                height: 1px !important;
                width: 40px !important;
                transition: all 500ms ease-in-out !important;
            }
            .history-tl-container ul.tl li:hover::before{
                border-color:  #258CC7;
                transition: all 1000ms ease-in-out;
            }
            ul.tl li .item-title{
                min-width: 250px;
            }
            ul.tl li .item-detail{
                color:rgba(0,0,0,0.5);
                font-size:12px;
				max-width: 200px !important;
            }
            ul.tl li .timestamp{
                color: #8D8D8D;
                position: absolute;
                width:100px;
                left: -50%;
                text-align: right;
                font-size: 12px;
            }
        </style>


		        <style>
            .avatar-circle {
                width: 30px;
                height: 30px;
                background-color: #ff55dd;
                text-align: center;
                border-radius: 50% !important;
                -webkit-border-radius: 50% !important;
                -moz-border-radius: 50% !important;
            }

            .initials {
                position: relative;
                top: 5px; /* 25% of parent */
                font-size: 15px; /* 50% of parent */
                line-height: 15px; /* 50% of parent */
                color: #fff;
                font-family: "Courier New", monospace;
                font-weight: bold;
            }

            ::-webkit-scrollbar-track
            {
                -webkit-box-shadow: inset 0 0 5px rgba(0,0,0,0.3);
                border-radius: 7px;
                background-color: #F5F5F5;
            }

            ::-webkit-scrollbar
            {
                height: 8px;
                width: 8px;
                background-color: #F5F5F5;
            }

            ::-webkit-scrollbar-thumb
            {
                border-radius: 7px;
                -webkit-box-shadow: inset 0 0 5px rgba(0,0,0,.3);
                background-color: #a39b9b;
            }
            
            .filtercontrol {
                display: inline;
                margin: 0px 10px 0px 10px;
                /* border-radius: 30% !important; */
                width: 70px;
                white-space: nowrap;
                text-overflow: ellipsis;
                overflow: hidden;
            }

        </style>

		
		
    </head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid page-header-menu-fixed" onload="doOnLoad()">
        <div class="page-wrapper">
            <div class="page-wrapper-row">
                <div class="page-wrapper-top">
                    <!-- BEGIN HEADER -->
                    <div class="page-header">
                        <!-- BEGIN HEADER TOP -->
                        <!-- END HEADER TOP -->
                        <!-- BEGIN HEADER MENU -->
                        <div class="page-header-menu" style="background:#993366;border-bottom:1px solid #ececec">
                            <div class="container-fluid">

                                <!-- BEGIN HEADER SEARCH BOX -->                            
                                <!-- END HEADER SEARCH BOX -->
                                <!-- BEGIN MEGA MENU -->
                                <!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
                                <!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
                                <!--							
                                                                                        <form class="search-form" action="" method="GET">    
                                                                                                
                                                                                                <span class="dropdown  dropdown-dark">
                                                                                                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                                                                                <img alt="" class="img-circle" src="assets/layouts/layout3/img/avatar9.jpg">
                                                                                                                <span class="username username-hide-mobile">Optical Technologies</span>
                                                                                                        </a>
                                                                                                        <ul class="dropdown-menu dropdown-menu-default">
                                                                                                                <li>
                                                                                                                        <a href="page_user_profile_1.html">
                                                                                                                                <i class="icon-user"></i> My Profile </a>
                                                                                                                </li>
                                                                                                                <li>
                                                                                                                        <a href="app_calendar.html">
                                                                                                                                <i class="icon-calendar"></i> My Calendar </a>
                                                                                                                </li>
                                                                                                                <li>
                                                                                                                        <a href="app_inbox.html">
                                                                                                                                <i class="icon-envelope-open"></i> My Inbox
                                                                                                                                <span class="badge badge-danger"> 3 </span>
                                                                                                                        </a>
                                                                                                                </li>
                                                                                                                <li>
                                                                                                                        <a href="app_todo_2.html">
                                                                                                                                <i class="icon-rocket"></i> My Tasks
                                                                                                                                <span class="badge badge-success"> 7 </span>
                                                                                                                        </a>
                                                                                                                </li>
                                                                                                                <li class="divider"> </li>
                                                                                                                <li>
                                                                                                                        <a href="page_user_lock_1.html">
                                                                                                                                <i class="icon-lock"></i> Lock Screen </a>
                                                                                                                </li>
                                                                                                                <li>
                                                                                                                        <a href="page_user_login_1.html">
                                                                                                                                <i class="icon-key"></i> Log Out </a>
                                                                                                                </li>
                                                                                                        </ul>
                                                                                                </span>
                                                                                        
                                                                                        </form>
                                                                                
                                -->							<div class="hor-menu  ">
                                    <ul class="nav navbar-nav" id="mainmenu">


                                        <li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown ">
                                            <a href="javascript:;" >
                                                <img alt="" class="img-circle" src="assets/layouts/layout3/img/avatar9.jpg" style="height:20px">
                                                <span class="username username-hide-mobile">Optical Networks</span>
                                            </a>
                                            <ul class="dropdown-menu pull-left ">	
                                                <li>
                                                    <a href="#" id="btnlogout" onclick="doOnLoadv2()">
<!--                                                    <a href="?">-->
                                                        <i class="icon-key" ></i> Log Out </a>
                                                </li>
                                            </ul>
                                        </li>

                                    </ul>
                                </div>
                                <!-- END MEGA MENU -->
                            </div>
                        </div>
                        <!-- END HEADER MENU -->
                    </div>
                    <!-- END HEADER -->
                </div>
            </div>

            <div class="page-wrapper-row full-height" >
                <div class="page-wrapper-middle0" >
                    <!-- BEGIN CONTAINER -->
                    <div class="page-container-fluid0" >
                        <!-- BEGIN CONTENT -->
                        <div class="page-content-wrapper0" >
                            <!-- BEGIN CONTENT BODY -->
                            <!-- BEGIN PAGE HEAD-->

                            <!-- END PAGE HEAD-->
                            <!-- BEGIN PAGE CONTENT BODY -->
                            <div class="page-content0"  >


                                <div class="portlet-body" id="page-content" >
                                </div>


                            </div>
                            <!-- END PAGE CONTENT BODY -->
                            <!-- END CONTENT BODY -->
                        </div>
                        <!-- END CONTENT -->
                        <!-- BEGIN QUICK SIDEBAR -->


                        <!-- END QUICK SIDEBAR -->
                    </div>
                    <!-- END CONTAINER -->
                </div>
            </div>

        </div>

        <!--[if lt IE 9]>
<script src="assets/global/plugins/respond.min.js"></script>
<script src="assets/global/plugins/excanvas.min.js"></script> 
<script src="assets/global/plugins/ie8.fix.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>

        <script src="assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>

		<!-- LICENCIADO -->
<!--	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-wnES3S9LR-J4LXVFgctPVFbNRD4p2d0&libraries=places" async defer></script>  -->
<!--          <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD4S8hq-XbWZ6B7flUyf02gr6jFSe9u-NU&libraries=places" async defer></script> -->
<!--        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDziGr1Dor6YeWbqpiHS-weiqqzi14SPCU&libraries=places" async defer></script> -->
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5nIFfUdRaEkZ6jGNsY_SD_cxfKGqc0aY&libraries=places" async defer></script>  -->
<!--    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAa_dHxcRga0CcgfYPgj5eSnL65RV4jLPM&libraries=places" async defer></script>  -->     
		
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDbcAbHo2DJX6Y0CulDFBxuiyTo1Ux_2WM&libraries=places" async defer></script>

        <!--<script src="http://code.highcharts.com/highcharts.js"></script>
        <script src="http://code.highcharts.com/highcharts-more.js"></script>
        <script src="http://code.highcharts.com/modules/exporting.js"></script>-->
        <script src="js/jquery-confirm.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/canvas2image@1.0.5/canvas2image.min.js"></script>
								
        <script src="assets/global/sweetalert/sweetalert.min.js"></script>
        <script src="assets/codebase/dhtmlx.js" type="text/javascript"></script>
		
		<script src="assets/ckeditor_dhtmlx/dhtmlxform_item_ckeditor.js" type="text/javascript"></script>
        <script src="assets/ckeditor_dhtmlx/ckeditor/ckeditor.js" type="text/javascript"></script>

        <script src="assets/global/highcharts/code/highcharts.js"></script>
        <script src="assets/global/highcharts/code/modules/sunburst.js"></script>
        <script src="assets/global/highcharts/code/modules/exporting.js"></script>

        <link href="assets/global/highcharts/donut_style.css" rel="stylesheet" type="text/css" />
                
<!--    <script src="assets/draw2d/handlebars.js" type="text/javascript"></script>
        <script src="assets/draw2d/jquery.shuffle.modernizr.js" type="text/javascript"></script>
        
        <script src="assets/draw2d/jquery.js" type="text/javascript"></script>
        <script src="assets/draw2d/jquery-ui.js" type="text/javascript"></script>
        <script src="assets/draw2d/draw2d.js" type="text/javascript"></script>-->
        
        

        <!-- END CORE PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!--	
                <script src="assets/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
                <script src="assets/layouts/layout3/scripts/demo.min.js" type="text/javascript"></script>
                <script src="assets/global/scripts/app.min.js" type="text/javascript"></script>
        -->
        <!-- END THEME LAYOUT SCRIPTS -->
        <!-- Google Code for Universal Analytics -->

        <script src="js/funciones.js?222"></script>
        <script src="js/mantenimiento.js?222"></script>
        <script src="js/dhtmlxgrid.js"></script>
        <script src="js/dhtmlxform.js"></script>
        <script src="js/searches.js?333"></script>
		
		
         <!--<script src="js/go.js"></script>
        <script src="js/go_ini.js"></script>     -->
        
        <script src="assets/global/plugins/moment.min.js"></script>  
		
 <script src="assets/gojs/release/go.js"></script>

        <script src="assets/gojs/extensions/ZoomSlider.js"></script>

        <link rel="stylesheet" href="assets/gojs/extensions/ZoomSlider.js">				
		<script src="assets/gojs/extensions/DoubleTreeLayout.js"></script>
        
    </body>    

    <script>
        $("#btnlogout").hide();

        var myLayout;
        var myTreeView;
        var myModule;

        var modname = "";
        var deviceid = "<?php echo $_SESSION["keyunik"] ?>";
        var controlkey = "";

        var initfunction;

        var markersl = new Array();
        var place;
        var setupform;
        var menupath = "";
        
        var iniciosesion = false; 

        var fload = function (rId) {

            myLayout.progressOff();

            try {
                initfunction = eval(rId.split(".")[0]);
                setupform = {type: "settings", position: "label-top", labelWidth: place.getWidth() - 60, inputWidth: place.getWidth() - 60, blockOffset: 30, offsetLeft: 30, offsetTop: 10};
                if (myModule != null)
                    myModule.destroy();
                myModule = new initfunction();
                //place.setText(menupath);
                //setTitleOption(menupath);
            } catch (e) {
                console.log(e)
                swal({
                    title: "Ops!",
                    text: e,
                    type: "warning"
                }
                );
            }
        }

        var dim = [0, 0];
        function windowlogin() {
            /*
             var wo = myLayout.dhxWins.createWindow("popupWindow", 0,0,600,400);
             wo.centerOnScreen();
             wo.setModal(true);
             wo.setText("Acceso al Sistema");
             wo.denyMove();
             wo.denyPark();
             wo.denyResize();
             wo.hideHeader();
             */
            dim[0] -= 70;
            var offsetLeft = 30;

            //si es un movil cambian los valores de aspecto
            if (dim[0] > 500) {
                var wzise = dim[0];
                dim[0] = wzise / 2;
                offsetLeft = dim[0] / 2;
            }

            var fo = place.attachForm([
                {type: "settings", inputWidth: dim[0], labelWidth: dim[0], position: "label-top", blockOffset: 30, offsetLeft: offsetLeft, offsetTop: 10, inputHeight: 30},

                //{type:"settings",inputWidth:330,labelWidth:230,position:"label-top",blockOffset:30,offsetLeft:30, offsetTop:10},
                //{type: "label",label:"<img src='images/on1.png' width='360px' style='padding-left:0px'>",  inputWidth: 310,inputHeight: 60	},
                //{type: "label",label:"<img src='images/on1.png' width='"+(dim[0])+"px' style='padding-left:0px'>", inputWidth: dim[0],offsetTop:100},

                {type: "label", label: "Acceso", offsetTop: 100},
                {type: "input", name: "userid", label: "Correo electrónico"},
                {type: "password", name: "password", label: "Clave secreta"},
                {type: "label", label: '<div style="margin-top:2px;text-align:center">' +
                            '<button id="btn_login"type="button" class="btn" style="background:#993366;color:#fff">Ingresar</button>' +
                            '</div>'},
                        //{type:"button", className:"send", name:"btnsend",value:mbutton("forward","Ingresar")},
            ]);
            //fo.attachEvent("onbuttonclick",function(id){
            $("#btn_login").click(function () {

                fo.lock();
                callserver(
                        {
                            "params": {
                                "deviceid": deviceid,
                            },
                            "method": "loglogin.createtickedtodevice"
                        },
                        function (result) {
                            result = JSON.parse(result);
                            if (result.status != 0) {
                                swal({
                                    title: "Ops!",
                                    text: result.message,
                                    type: "error"}
                                );
                                fo.unlock();
                                return;
                            }
                            ticked = result.data.id;
                            $("#btnlogout").show();
                            iniciosesion = true;
                            callserver(
                                    {
                                        "params": {
                                            "userid": fo.getItemValue("userid"),
                                            "password": fo.getItemValue("password"),
                                            "ticked": ticked,
                                            "deviceid": deviceid,
                                        },
                                        "method": "loglogin.login"
                                    },
                                    function (result) {
                                        result = JSON.parse(result);
                                        if (result.status != "0") {
                                            swal({
                                                title: "Ops!",
                                                text: result.message,
                                                type: "error"}
                                            );
                                            fo.unlock();
                                            return;
                                        }
                                        if (result.data[0].apps.length == 0) {
                                            swal({
                                                title: "Ops!",
                                                text: "no tiene perfiles activos",
                                                type: "error"}
                                            );
                                            fo.unlock();
                                            return;
                                        }

                                        var md = result.data[0].apps;
                                        controlkey = result.controlkey;

                                        var mdn = new Array();
                                        var deapp = {};
                                        var deapp = {},
                                                itemgrp = {};
                                        var i = 0, j = 0;

                                        var objmenu = document.getElementById("mainmenu");
										
										
										// NEW
										 var itemmenu = document.createElement("li");
                                        itemmenu.setAttribute("aria-haspopup", true);
                                        itemmenu.className = "menu-dropdown classic-menu-dropdown ";
                                        itemmenu.style.background = "#f36a5a75";
                                        itemmenu.innerHTML = ("<a href='#1' style='background: #f36a5a75;' ><i class='icon-user'></i> "+result.data[0]['user_email']+" <span class='arrow'></span></a>");



                                        var itemmenu2x = document.createElement("ul");
                                        itemmenu2x.className = ("dropdown-menu pull-left");
                                        itemmenu.appendChild(itemmenu2x);
                                        objmenu.appendChild(itemmenu);
										// FIN
										
										
										
										

                                        while (true) {

                                            var tdeapp = md[i].de_app,
                                                    tdegrp = md[i].de_grp,
                                                    n = 0;

                                            deapp = {id: i, text: md[i].de_app, open: 1, items: []};

                                            var itemmenu = document.createElement("li");
                                            itemmenu.setAttribute("aria-haspopup", true);
                                            itemmenu.className = "menu-dropdown classic-menu-dropdown ";
                                            itemmenu.innerHTML = ("<a href='#1'><i class='icon-briefcase'></i> " + md[i].de_app + "<span class='arrow'></span></a>");

                                            var itemmenu2 = document.createElement("ul");
                                            itemmenu2.className = ("dropdown-menu pull-left");
                                            itemmenu.appendChild(itemmenu2);

                                            var itemmenu3;

                                            while (true) {

                                                if (n == 0) {
                                                    itemgrp = {id: i + 100 + n, text: md[i].de_grp, open: 0, items: []};
                                                    itemmenu21 = document.createElement("li");
                                                    itemmenu21.setAttribute("aria-haspopup", true);
                                                    itemmenu21.className = "dropdown-submenu ";
                                                    itemmenu21.innerHTML = "<a href='#1' class='nav-link nav-toggle '><i class='icon-settings'></i> " + md[i].de_grp + "<span class='arrow'></span></a>";
                                                    itemmenu2.appendChild(itemmenu21);
                                                    itemmenu3 = document.createElement("ul");
                                                    itemmenu3.className = "dropdown-menu";
                                                    itemmenu21.appendChild(itemmenu3);


                                                }

                                                itemgrp.items[itemgrp.items.length] = {
                                                    id: j + 1000,
                                                    text: md[i].de_portlet,
                                                    userdata: {module: md[i].id_event}
                                                };
                                                var itemmenu31 = document.createElement("li");
                                                itemmenu31.setAttribute("aria-haspopup", true);
                                                itemmenu31.innerHTML = "<a id='" + md[i].id_event + "' href='javascript:onclickitemmenu(\"" + md[i].id_event + "\")' class='nav-link '> " + md[i].de_portlet + " </a>";
                                                itemmenu3.appendChild(itemmenu31);

                                                tdeapp = md[i].de_app;
                                                tdegrp = md[i].de_grp;
                                                n++;
                                                i++;
                                                j++;
                                                if (i >= md.length)
                                                    break;
                                                if (md[i].de_grp != tdegrp) {
                                                    deapp.items[deapp.items.length] = itemgrp;
                                                    n = 0;
                                                }
                                                if (md[i].de_app != tdeapp)
                                                    break;
                                            }

                                            objmenu.appendChild(itemmenu);

                                            deapp.items[deapp.items.length] = itemgrp;

                                            mdn[mdn.length] = deapp;

                                            if (i >= md.length)
                                                break;

                                        }

                                        //myTreeView.clearAll();
                                        //myTreeView.loadStruct(mdn);
                                        //setCookie("controlkey",controlkey,5);
                                        var imenu = "" + JSON.stringify(mdn);
                                        //setCookie("controlkeymenu",imenu,5);
                                        fo.unlock();
                                        place.detachObject();
                                    });
                        }
                );
            });



        }

        function onclickitemmenu(rId) {

            deleteDivZoomUnit();

	        if(typeof (IntervalDonut) != "undefined" ){
                clearTimeout(IntervalDonut);
                console.log("SE ELIMINO IntervalDonut");
            }            
            
			 if(typeof (timeDasAlarma) != "undefined" ){

                clearTimeout(timeDasAlarma);

                console.log("SE ELIMINO timeDasAlarma");

            } 

 

            if(typeof (timeDashEquipo) != "undefined" ){

                clearTimeout(timeDashEquipo);

                console.log("SE ELIMINO timeDashEquipo");

            }
            
            var lscript = rId;

            if (lscript == null)
                return;

            myLayout.progressOn();

            var lid = rId;

            menupath = "<h4 style='color:#991166'><b>" + document.getElementById(rId).innerText + "</b></h4>";

            if (document.getElementById("script_" + lscript.replace(".", "_")) == null) {
                callserver({
                    "params": {
                        "deviceid": deviceid,
                        "ticked": controlkey
                    },
                    "method": lscript
                }, function (result) {

                    var htmlscript = document.createElement("SCRIPT");
                    htmlscript.type = 'text/javascript';
                    htmlscript.async = false;
                    htmlscript.id = "script_" + lscript.replace(".", "_");
                    try {
                        htmlscript.text = result;
                        document.getElementsByTagName('head').item(0).appendChild(htmlscript);
                    } catch (e) {
                        swal({
                            title: "Ops!",
                            text: e,
                            type: "warning"
                        }
                        );
                    }
                    fload(lscript);
                });
            } else {
                fload(lscript);
            }



        }

        function setTitleOption(pcad) {
            document.getElementById("layoutoptiontitle").innerHTML = pcad
        }

        function doOnLoad() {
        $("#btnlogout").hide();
                setTimeout(onloadpage, 1000);
        }

        function doOnLoadv2() {
                    swal({
                        title : "Importante",
                        text : "¿Estás seguro de querer salir?",
                        type : "info",
                        showCancelButton : true,
                        showConfirmButton : true,
                        confirmButtonText : "Si",
                        cancelButtonText : "No",
                    },
                    function(r) {
                        if (!r) return;
                        
                        setTimeout(location.reload(),1000);
                    });
    //            setTimeout(onloadpage, 1000);
        }

        var W;
        function onloadpage() {
            //W = new dhtmlXWindows();
            $("#page-content").height($(window).height() - 55);
            dhtmlx.image_path = "assets/codebase/skins/<?php echo $skin; ?>/imgs/";
            myLayout = new dhtmlXLayoutObject({
                parent: document.getElementById("page-content"),
                pattern: "1C",
                offsets: {
                    top: 1,
                    right: 8,
                    bottom: 5,
                    left: 8
                }

            });
            myLayout.setSeparatorSize(0, 0);
            myLayout.cells("a").hideHeader();

            myLayout.cells("a").setText("Optical Technologies SAC");

            place = myLayout.cells("a");

            dim[0] = place.getWidth();
            dim[1] = place.getHeight();

            windowlogin(myTreeView);


        }

    </script>
            
<!--    <script src="assets/global/plugins/select2/js/select2.full.min.js"></script>-->
<!--    <script src="assets/personalizado/v4/bootstrap-datetimepicker.js" type="text/javascript"></script>-->
    
    <link href="assets/global/css/jquery-ui.css" type="text/css" rel="stylesheet">
    <link href="assets/global/css/jquery.zoom.css" type="text/css" rel="stylesheet">
    
    <script src="js/particleCanvas.js"></script>        
    <script src="assets/global/js/jquery.js"></script>
    <script src="assets/global/js/jquery-ui.js"></script>
    <script src="assets/global/js/jquery.cookie.js"></script>
    <script src="assets/global/js/jquery.zoom.js"></script>
    <script src="assets/global/js/jquerytoast.js"></script>

    <!--    <script src="assets/global/amchart/animated.js"></script>
    <script src="assets/global/amchart/charts.js"></script>
    <script src="assets/global/amchart/core.js"></script>-->    
    
    <!--    <script src="https://www.amcharts.com/lib/version/4.5.7/core.js"></script>
    <script src="https://www.amcharts.com/lib/version/4.5.7/charts.js"></script>
    <script src="https://www.amcharts.com/lib/version/4.5.7/themes/material.js"></script>
    <script src="https://www.amcharts.com/lib/version/4.5.7/lang/de_DE.js"></script>
    <script src="https://www.amcharts.com/lib/version/geodata/4.1.6/germanyLow.js"></script>-->
    <script src="assets/global/plugins/select2/js/select2.full.min.js"></script>
    <script src="assets/personalizado/v4/bootstrap-datetimepicker.js" type="text/javascript"></script>

        <script src="js/jquery.connectingLine.js"></script>        
    
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>
    <script src="js/BDCCParallelLines.js" defer></script>        

</html>

