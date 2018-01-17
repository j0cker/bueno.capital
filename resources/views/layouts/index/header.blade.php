<!DOCTYPE html>
<html lang="@yield('lang')" ng-app="myApp">
    <head>

        {{-- Meta tags --}}

        <meta http-equiv="Content-Type" content="@yield('Content-Type')">
        <meta http-equiv="x-ua-compatible" content="@yield('x-ua-compatible')">
        <meta name="description" content="@yield('description')">
        <meta name="viewport" content="@yield('viewport')">
        <meta name="csrf-token" content="{{ csrf_token() }}">


        <!-- Vendor styles -->
        <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/jquery.scrollbar.css">
        <link rel="stylesheet" href="css/fullcalendar.min.css">
        <link rel="stylesheet" href="css/bootstrap-complement.css">



        <!-- Javascript -->
        <!-- Vendors -->
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.scrollbar.min.js"></script>
        <script src="js/jquery-scrollLock.min.js"></script>

        <script src="js/salvattore.min.js"></script>
        <script src="js/jquery.flot.js"></script>
        <script src="js/jquery.flot.resize.js"></script>
        <script src="js/curvedLines.js"></script>
        <script src="js/jquery.vmap.min.js"></script>
        <script src="js/jquery.vmap.world.js"></script>
        <script src="js/jquery.easypiechart.min.js"></script>
        <script src="js/jquery.peity.min.js"></script>
        <script src="js/moment.min.js"></script>
        <script src="js/fullcalendar.min.js"></script>


        <script type="text/javascript" src="js/functions.js"></script>
        <script src="js/materialize.js"></script>
        <!--<link rel="stylesheet" type="text/css" href="css/materialize.css" />-->
        <script src="js/angular.min.js"></script>
        <script src="js/sanitize.min.js"></script>
        <script src="js/module.js"></script>
        <script src="js/controllers.js"></script>
        <script src="js/factory.js"></script>

        <!--Toastr-->
        <script src="js/toastr.js"></script>
        <link rel="stylesheet" type="text/css" href="css/toastr.css" />

        <!-- Charts and maps-->
        <script src="js/curved-line.js"></script>
        <script src="js/line.js"></script>
        <!--<script src="js/dynamic.js"></script>-->
        <script src="js/chart-tooltips.js"></script>
        <script src="js/other-charts.js"></script>
        <!--<script src="js/jqvmap.js"></script>-->
        <script src="js/parallax.min.js"></script>

        <script type="text/javascript" src="js/jssor.slider-26.9.0.min.js"></script>

        <!-- App functions and actions -->
        <script src="js/app.min.js"></script>

        {{-- Title --}}

        <title>@yield('title')</title>


        <!--CSRF Protection Global Variables-->
        <script>window.Laravel = {"csrfToken":"{{ csrf_token() }}"}</script>

        <!--Angular-->

        <script type="text/javascript">
        jQuery(document).ready(function ($) {

            var jssor_1_options = {
              //$AutoPlay: 1,
              //$AutoPlaySteps: 1,

              //$SlideDuration: 160,
              $SlideWidth: 356,
              $SlideSpacing: 1, //cuantos recorren
              $Cols: 3,
              $Align: 1,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$,
                $Steps: 1
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };


            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH_1 = 1080
            function ScaleSlider() {

                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH_1 || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }

            }

            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        });

        /*
        var width = $(window).width();
        $(window).on('resize', function(){
           if($(this).width() != width){
              width = $(this).width();
              console.log(width);
              if(width>=560){

                  $("#jssor_1").css("display","");
                  $("#jssor_2").css("display","none");
              } else {

                  $("#jssor_2").css("display","");
                  $("#jssor_1").css("display","none");
              }
           }
        });
        */

        </script>

        <style>
            /* jssor slider loading skin spin css */
            .jssorl-009-spin img {
                animation-name: jssorl-009-spin;
                animation-duration: 1.6s;
                animation-iteration-count: infinite;
                animation-timing-function: linear;
            }

            @keyframes jssorl-009-spin {
                from {
                    transform: rotate(0deg);
                }

                to {
                    transform: rotate(360deg);
                }
            }


            .jssorb057 .i {position:absolute;cursor:pointer;}
            .jssorb057 .i .b {fill:none;stroke:#fff;stroke-width:2000;stroke-miterlimit:10;stroke-opacity:0.4;}
            .jssorb057 .i:hover .b {stroke-opacity:.7;}
            .jssorb057 .iav .b {stroke-opacity: 1;}
            .jssorb057 .i.idn {opacity:.3;}

            .jssora073 {display:block;position:absolute;cursor:pointer;}
            .jssora073 .a {fill:#ddd;fill-opacity:.7;stroke:#000;stroke-width:160;stroke-miterlimit:10;stroke-opacity:.7;}
            .jssora073:hover {opacity:.8;}
            .jssora073.jssora073dn {opacity:.4;}
            .jssora073.jssora073ds {opacity:.3;pointer-events:none;}
        </style>


        <style media="screen">

          .sombra{
            box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.3);
          }

          .letrasMenu{
            font-weight: 900;
            color: black;
            cursor: pointer;
            font-size: 20px;
          }

          .letrasTitulos{
            font-weight: 900;
            color: black;
            font-size: 20px;
          }

          .parrafos{
            color: black;
            font-size: 13px;
          }

          .borderAzul{
            border: 2px solid #547cfd;
          }

          .borderAzul2{
            border: 2px solid #0b2b65;
          }

          .azul{
            font-weight: 900;
            color: #0b2b65 !important;
            font-size: 20px;
          }

          .azul2{
            font-weight: 900;
            color: #547fcd !important;
            font-size: 20px;
          }

          .circle{
            border-radius: 100%;
          }

          .aboutLetrasTitulo{
            font-size: 14px;

          }

          .aboutLetras{
            font-size: 13px;
            color: black;
          }


        </style>

    </head>
    <body style="background-color: white;" ng-controller="index">
        <!--[if lt IE 8]>
            <p class="browserupgrade">
                You are using an <strong>outdated</strong> browser.
                Please <a href="http://browsehappy.com/">upgrade your browser</a>
                to improve your experience.
            </p><![endif]-->

        <!-- .page-loader-->
        <div id="loader-wrapper">
            <div id="loader"></div>
            <div class="loader-section"></div>
        </div>
