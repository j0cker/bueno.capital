@extends('layouts.index.master')

  {{-- lang html tag --}}

  @section('lang'){{$lang}}@stop

  {{-- Title Head --}}

  @section('title'){{$title}}@stop

  {{-- Metatag Head --}}

  @section('Content-Type','text/html; charset=UTF-8')
  @section('x-ua-compatible','ie=edge')
  @section('description','')
  @section('viewport','width=device-width, initial-scale=1')

  {{-- Body --}}

  @section('content')

    <!-- Content -->
    <section id="content">

      <div style="margin-top: 0px;" class="row">


        <div style="background: url('img/background.png') repeat scroll center center / 1366px 639px; height: 400px;" class="col-xs-12 col-sm-12 col-md-12 text-center sombra">


            <div class="col-md-12 text-left">
                <br /><br /><br />
                <center><h1 style="font-weight: 900;">ZERO TO ONE</h1></center><br />
                <center><h1 style="font-weight: 900;">BLOCKCHAIN DEVELOPMENT</h1></center><br /><br />

                <img style="width: 200px;" src="img/Artboard 4_1.png" />

            </div>


        </div>

      </div>

      <div style="margin-top: 40px;" class="row letrasMenu">

        <div class="hidden-xs hidden-sm col-md-1 col-lg-1 text-center">
        </div>

        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 text-center">

            ABOUT

        </div>
        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 text-center">

            SERVICES

        </div>
        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 text-center">

            MEDIA

        </div>
        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 text-center">

            CONTACT US

        </div>
        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 text-center">

            JOIN US

        </div>

        <div class="hidden-xs hidden-sm col-md-1 col-lg-1 text-center">
        </div>

      </div>

    </section>

    <section id="about">

      <div class="row">

        <div style="margin-top: 40px;" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center letrasTitulos">

            ABOUT

        </div>

      </div>

      <div class="row">

        <div style="margin-top: 40px;" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-left">

          <p class="parrafos">
            Bueno Capital is driven by the axiom to expand concepts and ideas on to the blockchain. Motivated by the latest achievements in decentralized ap-
            plications (DApp), the Buenos are committed to validate token ecosystems and develop token economics for successful implementation.
            Bueno Capital’s team is comprised of highly skilled professionals from various industries, carefully utilizing their know-how to contribute in the
            search for decentralized applications of blockchain solutions. They consist of experts in: cryptography, blockchain network protocols, data science,
            marketing, economics, finance, and platforms development.
            The Buenos have worked in various sectors of international business, where they have developed a practical and pragmatic understanding of how
            various industries interact and behave around the globe. With their ability to leverage their network, Bueno Capital is the go-to firm for blockchain
            development and implementation.
          </p>

        </div>

      </div>

      <div class="row">

        <div style="margin-top: 40px;" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center letrasTitulos azul">

            MEET OUR TEAM

        </div>

      </div>

      <div style="margin-top: 40px;" class="row">

        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 text-center">

            <div class="row">

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                <img class="circle sombra" src="img/Artboard 11.png" alt="">

              </div>

            </div>

            <div style="margin-top: 20px;" class="row">

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 aboutLetrasTitulo azul">

                WILEY MATTEWS

              </div>

            </div>

            <div style="margin-bottom: 20px;" class="row">

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 aboutLetras">

                Marketing & Strategic Advisor

              </div>

            </div>

        </div>

        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 text-center">

          <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

              <img class="circle sombra" src="img/Artboard 6.png" alt="">

            </div>

          </div>

          <div style="margin-top: 20px;" class="row">

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 aboutLetrasTitulo azul">

              FARHAD SHAGUILAMOV

            </div>

          </div>

          <div style="margin-bottom: 20px;" class="row">

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 aboutLetras">

              Token Investment Advisor

            </div>

          </div>

        </div>

        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 text-center">

          <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

              <img class="circle sombra" src="img/Artboard 6.png" alt="">

            </div>

          </div>

          <div style="margin-top: 20px;" class="row">

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 aboutLetrasTitulo azul">

              DIEGO STEWART

            </div>

          </div>

          <div style="margin-bottom: 20px;" class="row">

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 aboutLetras">

              Business Development

            </div>

          </div>

        </div>

        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 text-center">

          <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

              <img class="circle sombra" src="img/Artboard 7.png" alt="">

            </div>

          </div>

          <div style="margin-top: 20px;" class="row">

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 aboutLetrasTitulo azul">

              VLATKO GIGOV

            </div>

          </div>

          <div style="margin-bottom: 20px;" class="row">

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 aboutLetras">

              Token Economist

            </div>

          </div>

        </div>

      </div>

    </section>

    <section id="services">

      <div class="row">

        <div style="margin-top: 40px;" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center letrasTitulos azul">

            SERVICES

        </div>

      </div>

      <div class="hidden-xs" id="jssor_1" style="position:relative;margin:0 auto;top: 30px;left:0px;width:1080px;height:469px;overflow:hidden;visibility:hidden;">

        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1080px;height:469px;overflow:hidden;">
            <div data-p="43.75">
                <img data-u="image" src="img/Artboard 13.png" />
            </div>
            <div data-p="43.75">
                <img data-u="image" src="img/Artboard 14.png" />
            </div>
            <div data-p="43.75">
                <img data-u="image" src="img/Artboard 16.png" />
            </div>
            <div data-p="43.75">
                <img data-u="image" src="img/Artboard 17.png" />
            </div>
            <div data-p="43.75">
                <img data-u="image" src="img/Artboard 18.png" />
            </div>
            <div data-p="43.75">
                <img data-u="image" src="img/Artboard 21.png" />
            </div>
        </div>

        <div data-u="navigator" class="jssorb057" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:16px;height:16px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5000"></circle>
                </svg>
            </div>
        </div>

        <div data-u="arrowleft" class="jssora073" style="width:50px;height:50px;top:0px;left:30px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <path class="a" d="M4037.7,8357.3l5891.8,5891.8c100.6,100.6,219.7,150.9,357.3,150.9s256.7-50.3,357.3-150.9 l1318.1-1318.1c100.6-100.6,150.9-219.7,150.9-357.3c0-137.6-50.3-256.7-150.9-357.3L7745.9,8000l4216.4-4216.4 c100.6-100.6,150.9-219.7,150.9-357.3c0-137.6-50.3-256.7-150.9-357.3l-1318.1-1318.1c-100.6-100.6-219.7-150.9-357.3-150.9 s-256.7,50.3-357.3,150.9L4037.7,7642.7c-100.6,100.6-150.9,219.7-150.9,357.3C3886.8,8137.6,3937.1,8256.7,4037.7,8357.3 L4037.7,8357.3z"></path>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora073" style="width:50px;height:50px;top:0px;right:30px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <path class="a" d="M11962.3,8357.3l-5891.8,5891.8c-100.6,100.6-219.7,150.9-357.3,150.9s-256.7-50.3-357.3-150.9 L4037.7,12931c-100.6-100.6-150.9-219.7-150.9-357.3c0-137.6,50.3-256.7,150.9-357.3L8254.1,8000L4037.7,3783.6 c-100.6-100.6-150.9-219.7-150.9-357.3c0-137.6,50.3-256.7,150.9-357.3l1318.1-1318.1c100.6-100.6,219.7-150.9,357.3-150.9 s256.7,50.3,357.3,150.9l5891.8,5891.8c100.6,100.6,150.9,219.7,150.9,357.3C12113.2,8137.6,12062.9,8256.7,11962.3,8357.3 L11962.3,8357.3z"></path>
            </svg>
        </div>
      </div>

      <div style="margin-top: 40px;" class="row hidden-sm hidden-md hidden-lg text-center">

        <div class="col-xs-12 text-center">

          <img data-u="image" src="img/Artboard 13.png" />

        </div>

        <div class="col-xs-12 text-center">

          <img data-u="image" src="img/Artboard 14.png" />

        </div>

        <div class="col-xs-12 text-center">

          <img data-u="image" src="img/Artboard 16.png" />

        </div>

        <div class="col-xs-12 text-center">

          <img data-u="image" src="img/Artboard 17.png" />

        </div>

        <div class="col-xs-12 text-center">

          <img data-u="image" src="img/Artboard 18.png" />

        </div>

        <div class="col-xs-12 text-center">

          <img data-u="image" src="img/Artboard 21.png" />

        </div>

      </div>

    </section>



    <section id="projects">

      <div class="row">

        <div style="margin-top: 80px;" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center letrasTitulos azul">

            PROJECTS

        </div>

      </div>

      <div style="margin-top: 60px;" class="row text-center">

        <div class="hidden-xs hidden-sm hidden-md col-lg-2"></div>

        <div style="margin-top: 20px;" class="col-xs-12 col-sm-4 col-md-4 col-lg-2 text-center letrasTitulos azul">

          <div style="border-radius: 10px; width: 200px; display: inline-block; padding-bottom: 10px; padding-top: 10px;" class="borderAzul text-center">


            <font style="font-weight: 500 !important; color: black;" class="">Bueno Capital<br />
            Organizes </font><font style="font-weight: 500 !important; " class="azul2">CryptoHQ<br />
            in Davos</font>

          </div>

        </div>

        <div class="hidden-xs hidden-sm hidden-md col-lg-1"></div>

        <div style="margin-top: 20px;" class="col-xs-12 col-sm-4 col-md-4 col-lg-2 text-center letrasTitulos azul">
          <div style="border-radius: 10px; width: 200px; display: inline-block; padding-bottom: 10px; padding-top: 10px;" class="borderAzul text-center">

            <font style="color: black;font-weight: 500 !important; " class="">Bueno Capital<br />
            organizes </font><font style="font-weight: 500 !important; " class="azul2">Blockchain<br />
            Symposium in Mexico</font>

          </div>
        </div>

        <div class="hidden-xs hidden-sm hidden-md col-lg-1"></div>

        <div style="margin-top: 20px;" class="col-xs-12 col-sm-4 col-md-4 col-lg-2 text-center letrasTitulos azul">
          <div style="border-radius: 10px; width: 200px; display: inline-block; padding-bottom: 10px; padding-top: 10px;" class="borderAzul text-center">

            <font style="font-weight: 500 !important; color: black;" class="">Bueno Capital<br />
            embarks on a </font><font style="font-weight: 500 !important; " class="azul2"><br />
            mining ICO</font>

          </div>
        </div>

        <div class="hidden-xs hidden-sm hidden-md col-lg-2"></div>

      </div>

      <!--Segunda parte-->

      <div style="margin-top: 60px;" class="row text-center">

        <div class="hidden-xs hidden-sm hidden-md col-lg-2"></div>

        <div style="margin-top: 20px;" class="col-xs-12 col-sm-4 col-md-4 col-lg-2 text-center letrasTitulos azul">

          <div style="border-radius: 10px; width: 200px; display: inline-block; padding-bottom: 10px; padding-top: 10px;" class="borderAzul text-center">


            <font style="font-weight: 500 !important; color: black;" class="">Bueno Capital<br />
            develops </font><font style="font-weight: 500 !important; " class="azul2"><br />
            cryptoaid.io</font>

          </div>

        </div>

        <div class="hidden-xs hidden-sm hidden-md col-lg-1"></div>

        <div style="margin-top: 20px;" class="col-xs-12 col-sm-4 col-md-4 col-lg-2 text-center letrasTitulos azul">
          <div style="border-radius: 10px; width: 200px; display: inline-block; padding-bottom: 10px; padding-top: 10px;" class="borderAzul text-center">

            <font style="color: black;font-weight: 500 !important; " class="">Bueno Capital<br />
            develops </font><font style="font-weight: 500 !important; " class="azul2">Latin American<br />
            Cryptocurrency Exchange</font>

          </div>
        </div>

        <div class="hidden-xs hidden-sm hidden-md col-lg-1"></div>

        <div style="margin-top: 20px;" class="col-xs-12 col-sm-4 col-md-4 col-lg-2 text-center letrasTitulos azul">
          <div style="border-radius: 10px; width: 200px; display: inline-block; padding-bottom: 10px; padding-top: 10px;" class="borderAzul text-center">

            <font style="font-weight: 500 !important; color: black;" class="">Bueno Capital signs with<br />
            Organizes </font><font style="font-weight: 500 !important; " class="azul2">CryptoHQ<br />
            in Davos</font>

          </div>
        </div>

        <div class="hidden-xs hidden-sm hidden-md col-lg-2"></div>

      </div>

    </section>

    <section style="margin-top: 60px;" id="parnership">

      <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 text-center">
          <img style="max-width: 486px; width: 100%;" class="text-center" src="img/Artboard 19.png" alt="" />
        </div>

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 azul2 text-center">

          <div class="row">

            <div style="margin-top: 20px;">
              THE BUENO NETWORK
            </div>

          </div>

          <div style="color: black; margin-top: 40px;" class="row">

            <div class="col-md-6">
              Mowisat Corporation
            </div>

            <div class="col-md-6">
              Pig.gi
            </div>

          </div>

          <div style="color: black; margin-top: 40px;" class="row">

            <div class="col-md-6">
              CRYPTOAID.IO
            </div>

            <div class="col-md-6">
              Variv Capital
            </div>

          </div>





        </div>

      </div>

    </section>

    <section style="margin-top: 0px;" id="parnership">

      <div class="row">

        <div style="margin-top: 60px;" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center letrasTitulos azul">

            JOIN US

        </div>

      </div>

      <div style="margin-top: 40px;" class="row">

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 text-center">
          <img style="max-width: 300px; width: 100%;" class="text-center" src="img/puzzle.jpg" alt="" />
        </div>

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 azul text-center">

          <div style="margin-top: 30px;" class="row">

            <div style="border-radius: 10px; width: 300px; display: inline-block; padding-bottom: 10px; padding-top: 10px;" class="borderAzul2 text-center">

              <font style="font-weight: 800 !important;" class="azul">SOLVE OUR<br />CRYPTO PUZZLE!</font>

            </div>

          </div>

          <div style="color: black; margin-top: 40px;" class="row">

            <div class="col-md-12">
              If you have no idea how to solve it, write us below saying why
you want to be a part of the Bueno Network.
            </div>

          </div>

        </div>

      </div>

    </section>

    <section style="margin-top: 0px;" id="parnership">

      <div class="row">

        <div style="margin-top: 60px;" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center letrasTitulos azul">

            CONTACT US

        </div>

      </div>

      <div style="margin-top: 40px;" class="row">

        <div class="col-xs-12 col-sm-2 col-md-4 col-lg-4"></div>

        <div class="col-xs-12 col-sm-8 col-md-4 col-lg-4 text-center">

            <input placeholder="Name" type="text" name="" value="" class="form-control"><br />

            <input placeholder="Email" type="text" name="" value="" class="form-control"><br />

        </div>

        <div class="col-xs-12 col-sm-2 col-md-4 col-lg-4"></div>

      </div>

      <div style="" class="row">

        <div class="col-xs-12 col-sm-2 col-md-4 col-lg-4"></div>

        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-4 text-center">

          <div style="padding: 0;" class="col-xs-12 col-sm-8 col-md-8 col-lg-8 text-center">

            <input placeholder="File" type="text" name="" value="" class="form-control"><br />

          </div>

          <div style="padding: 0;" class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center">

            <button style="background-color: black;" class="btn btn-success">attach</button>

          </div>

        </div>

        <div class="col-xs-12 col-sm-2 col-md-4 col-lg-4"></div>

      </div>

      <div style="margin-top: 0px;" class="row">

        <div class="col-xs-12 col-sm-2 col-md-4 col-lg-4"></div>

        <div class="col-xs-12 col-sm-8 col-md-4 col-lg-4 text-center">

            <textarea placeholder="Comments" style="height: 200px;" class="form-control"></textarea>

        </div>

        <div class="col-xs-12 col-sm-2 col-md-4 col-lg-4"></div>

      </div>


    </section>


    @stop
