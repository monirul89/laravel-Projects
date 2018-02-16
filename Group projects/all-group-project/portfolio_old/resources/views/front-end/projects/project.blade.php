@extends('front-end.master')

@section('title')
    Portfolio
@endsection

@section('body')


{{--<section id="banner">--}}
    {{--<div class="container-fulid ">--}}
        {{--<div id="jssor_1"--}}
             {{--style="position:relative;margin:0 auto;top:0px;left:-1px;width:980px;height:380px;overflow:hidden;visibility:hidden;">--}}
            {{--<div data-u="loading" class="jssorl-oval"--}}
                 {{--style="position:absolute;top:0px;left:0px;text-align:center;background-color:rgba(0,0,0,0.7);">--}}
                {{--<img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="{{asset('/')}}front/img/oval.svg"/>--}}
            {{--</div>--}}
            {{--<div data-u="slides"--}}
                 {{--style="cursor:default;position:relative;top:0px;left:-1px;width:980px;height:380px;overflow:hidden;">--}}

                {{--<div data-b="0">--}}
                    {{--<img data-u="image" src="{{asset('/')}}front/img/03.jpg"/>--}}
                    {{--<div style="position:absolute;top:107px;left:460px;width:460px;height:210px;z-index:0;">--}}
                        {{--<img data-u="caption" data-t="0"--}}
                             {{--style="position:absolute;top:-300px;left:89px;width:210px;height:178px;z-index:0;"--}}
                             {{--src="{{asset('/')}}front/img/web2.png"/>--}}
                        {{--<img data-u="caption" data-t="1"--}}
                             {{--style="position:absolute;top:55px;left:-200px;width:114px;height:144px;z-index:0;"--}}
                             {{--src="{{asset('/')}}front/img/web1.png"/>--}}
                        {{--<img data-u="caption" data-t="2"--}}
                             {{--style="position:absolute;top:88px;left:420px;width:219px;height:120px;z-index:0;"--}}
                             {{--src="{{asset('/')}}front/img/gb1.png"/>--}}
                    {{--</div>--}}
                    {{--<div data-u="caption" data-t="3" data-to="0% 100%"--}}
                         {{--style="position:absolute;top:385px;left:-100px;width:257px;height:127px;z-index:0;">--}}
                        {{--<div style="position:absolute;top:4px;left:34px;width:198px;height:112px;z-index:0; overflow:hidden;">--}}
                            {{--<img data-u="caption" data-t="4"--}}
                                 {{--style="position:absolute;top:-2px;left:-2px;width:408px;height:116px;z-index:0;"--}}
                                 {{--src="{{asset('/')}}front/img/web-banner.png"/>--}}
                        {{--</div>--}}
                        {{--<img style="position:absolute;top:0px;left:0px;width:257px;height:127px;z-index:0;"--}}
                             {{--src="{{asset('/')}}front/img/mock-phone.png"/>--}}
                        {{--<img data-u="caption" data-t="5"--}}
                             {{--style="position:absolute;top:22px;left:139px;width:108px;height:108px;z-index:0;"--}}
                             {{--src="{{asset('/')}}front/img/circle-hollow.png"/>--}}
                        {{--<img data-u="caption" data-t="6"--}}
                             {{--style="position:absolute;top:31px;left:148px;width:90px;height:90px;z-index:0;"--}}
                             {{--src="{{asset('/')}}front/img/circle-solid.png"/>--}}
                        {{--<img data-u="caption" data-t="7"--}}
                             {{--style="position:absolute;top:100px;left:300px;width:63px;height:77px;z-index:0;"--}}
                             {{--src="{{asset('/')}}front/img/hand.png"/>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div data-b="1" data-p="170.00">--}}
                    {{--<img data-u="image" src="{{asset('/')}}front/img/02.jpg"/>--}}
                    {{--<div data-u="caption" data-t="9" data-3d="1"--}}
                         {{--style="position:absolute;top:150px;left:-36px;width:1053px;height:150px;z-index:0;">--}}
                        {{--<div data-u="caption" data-t="10" data-to="100% 50%"--}}
                             {{--style="position:absolute;top:0px;left:1005px;width:220px;height:72px;z-index:0;background-color:#02918c;">--}}
                            {{--<div data-u="caption" data-t="11"--}}
                                 {{--style="position:absolute;top:0px;left:20px;width:72px;height:72px;z-index:0;font-size:46px;color:#ffffff;line-height:72px;text-align:center;">--}}
                                {{--Welcome--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div data-u="caption" data-t="12" data-to="0% 50%"--}}
                             {{--style="position:absolute;top:0px;left:480px;width:80px;height:72px;z-index:0;background-color:#eb9434;font-size:45px;color:#ffffff;line-height:72px;text-align:center;">--}}
                            {{--To--}}
                        {{--</div>--}}
                        {{--<div data-u="caption" data-t="13" data-to="0% 50%"--}}
                             {{--style="position:absolute;top:0px;left:560px;width:270px;height:72px;z-index:0;background-color:#02918c;font-size:45px;color:#ffffff;line-height:72px;text-align:center;">--}}
                            {{--Monirul Islam--}}
                        {{--</div>--}}
                        {{--<div data-u="caption" data-t="14"--}}
                             {{--style="position:absolute;top:360px;left:238px;width:577px;height:30px;z-index:0;font-size:30px;color:#02918c;line-height:30px;text-align:center;">--}}
                            {{--About Our Genius Team Memters--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div data-u="caption" data-t="15" data-3d="1"--}}
                         {{--style="position:absolute;top:70px;left:182px;width:616px;height:150px;z-index:0;">--}}
                        {{--<img data-u="caption" data-t="16"--}}
                             {{--style="position:absolute;top:22px;left:266px;width:84px;height:84px;z-index:0;"--}}
                             {{--src="{{asset('/')}}front/img/monir1.png"/>--}}
                        {{--<img data-u="caption" data-t="17"--}}
                             {{--style="position:absolute;top:16px;left:260px;width:96px;height:96px;z-index:0;"--}}
                             {{--src="{{asset('/')}}front/img/circle.png"/>--}}
                        {{--<div data-u="caption" data-t="18"--}}
                             {{--style="position:absolute;top:195px;left:260px;width:96px;height:30px;z-index:0;font-size:18px;color:#ffffff;line-height:20px;text-align:center;">--}}
                            {{--Web Developer--}}
                        {{--</div>--}}
                        {{--<img data-u="caption" data-t="19"--}}
                             {{--style="position:absolute;top:22px;left:22px;width:84px;height:84px;z-index:0;"--}}
                             {{--src="{{asset('/')}}front/img/monir.png"/>--}}
                        {{--<img data-u="caption" data-t="20"--}}
                             {{--style="position:absolute;top:16px;left:16px;width:96px;height:96px;z-index:0;"--}}
                             {{--src="{{asset('/')}}front/img/circle.png"/>--}}
                        {{--<div data-u="caption" data-t="21"--}}
                             {{--style="position:absolute;top:125px;left:166px;width:96px;height:30px;z-index:0;font-size:18px;color:#ffffff;line-height:20px;text-align:center;">--}}
                            {{--Web Designer--}}
                        {{--</div>--}}
                        {{--<img data-u="caption" data-t="22"--}}
                             {{--style="position:absolute;top:22px;left:510px;width:84px;height:84px;z-index:0;"--}}
                             {{--src="{{asset('/')}}front/img/fafiz.png"/>--}}
                        {{--<img data-u="caption" data-t="23"--}}
                             {{--style="position:absolute;top:16px;left:504px;width:96px;height:96px;z-index:0;"--}}
                             {{--src="{{asset('/')}}front/img/circle.png"/>--}}
                        {{--<div data-u="caption" data-t="24"--}}
                             {{--style="position:absolute;top:125px;left:354px;width:96px;height:30px;z-index:0;font-size:18px;color:#ffffff;line-height:20px;text-align:center;">--}}
                            {{--Graphic Designer--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div style="position:absolute;top:20px;left:327px;width:336px;height:312px;z-index:0;">--}}
                        {{--<div data-u="caption" data-t="25"--}}
                             {{--style="position:absolute;top:82px;left:104px;width:128px;height:147px;z-index:0;">--}}
                            {{--<img data-u="caption" data-t="26"--}}
                                 {{--style="position:absolute;top:0px;left:0px;width:128px;height:147px;z-index:0;"--}}
                                 {{--src="{{asset('/')}}front/img/hexagon-hollow-big.png"/>--}}
                            {{--<img data-u="caption" data-t="27"--}}
                                 {{--style="position:absolute;top:9px;left:8px;width:112px;height:129px;z-index:0;"--}}
                                 {{--src="{{asset('/')}}front/img/hexagon-solid-yellow.png"/>--}}
                            {{--<div data-u="caption" data-t="28"--}}
                                 {{--style="position:absolute;top:20px;left:0px;width:128px;height:90px;z-index:0;font-size:20px;line-height:30px;text-align:center;">--}}
                                {{--My--}}
                                {{--<br/>All<br/>Services--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div style="position:absolute;top:0px;left:187px;width:90px;height:104px;z-index:0;">--}}
                            {{--<img data-u="caption" data-t="29"--}}
                                 {{--style="position:absolute;top:0px;left:0px;width:90px;height:104px;z-index:0;"--}}
                                 {{--src="{{asset('/')}}front/img/hexagon-hollow.png"/>--}}
                            {{--<img data-u="caption" data-t="30"--}}
                                 {{--style="position:absolute;top:8px;left:7px;width:76px;height:88px;z-index:0;"--}}
                                 {{--src="{{asset('/')}}front/img/hexagon-solid.png"/>--}}
                            {{--<img data-u="caption" data-t="31"--}}
                                 {{--style="position:absolute;top:18px;left:11px;width:70px;height:70px;z-index:0;"--}}
                                 {{--src="{{asset('/')}}front/img/web-development.png"/>--}}
                        {{--</div>--}}
                        {{--<div style="position:absolute;top:104px;left:246px;width:90px;height:104px;z-index:0;">--}}
                            {{--<img data-u="caption" data-t="32"--}}
                                 {{--style="position:absolute;top:0px;left:0px;width:90px;height:104px;z-index:0;"--}}
                                 {{--src="{{asset('/')}}front/img/hexagon-hollow.png"/>--}}
                            {{--<img data-u="caption" data-t="33"--}}
                                 {{--style="position:absolute;top:8px;left:7px;width:76px;height:88px;z-index:0;"--}}
                                 {{--src="{{asset('/')}}front/img/hexagon-solid.png"/>--}}
                            {{--<img data-u="caption" data-t="34"--}}
                                 {{--style="position:absolute;top:18px;left:11px;width:70px;height:70px;z-index:0;"--}}
                                 {{--src="{{asset('/')}}front/img/webdesign.png"/>--}}
                        {{--</div>--}}
                        {{--<div style="position:absolute;top:208px;left:187px;width:90px;height:104px;z-index:0;">--}}
                            {{--<img data-u="caption" data-t="35"--}}
                                 {{--style="position:absolute;top:0px;left:0px;width:90px;height:104px;z-index:0;"--}}
                                 {{--src="{{asset('/')}}front/img/hexagon-hollow.png"/>--}}
                            {{--<img data-u="caption" data-t="36"--}}
                                 {{--style="position:absolute;top:8px;left:7px;width:76px;height:88px;z-index:0;"--}}
                                 {{--src="{{asset('/')}}front/img/hexagon-solid.png"/>--}}
                            {{--<img data-u="caption" data-t="37"--}}
                                 {{--style="position:absolute;top:18px;left:11px;width:70px;height:70px;z-index:0;"--}}
                                 {{--src="{{asset('/')}}front/img/Outsourcing.png"/>--}}
                        {{--</div>--}}
                        {{--<div style="position:absolute;top:208px;left:59px;width:90px;height:104px;z-index:0;">--}}
                            {{--<img data-u="caption" data-t="38"--}}
                                 {{--style="position:absolute;top:0px;left:0px;width:90px;height:104px;z-index:0;"--}}
                                 {{--src="{{asset('/')}}front/img/hexagon-hollow.png"/>--}}
                            {{--<img data-u="caption" data-t="39"--}}
                                 {{--style="position:absolute;top:8px;left:7px;width:76px;height:88px;z-index:0;"--}}
                                 {{--src="{{asset('/')}}front/img/hexagon-solid.png"/>--}}
                            {{--<img data-u="caption" data-t="40"--}}
                                 {{--style="position:absolute;top:18px;left:11px;width:70px;height:70px;z-index:0;"--}}
                                 {{--src="{{asset('/')}}front/img/seo.png"/>--}}
                        {{--</div>--}}
                        {{--<div style="position:absolute;top:104px;left:0px;width:90px;height:104px;z-index:0;">--}}
                            {{--<img data-u="caption" data-t="41"--}}
                                 {{--style="position:absolute;top:0px;left:0px;width:90px;height:104px;z-index:0;"--}}
                                 {{--src="{{asset('/')}}front/img/hexagon-hollow.png"/>--}}
                            {{--<img data-u="caption" data-t="42"--}}
                                 {{--style="position:absolute;top:8px;left:7px;width:76px;height:88px;z-index:0;"--}}
                                 {{--src="{{asset('/')}}front/img/hexagon-solid.png"/>--}}
                            {{--<img data-u="caption" data-t="43"--}}
                                 {{--style="position:absolute;top:18px;left:11px;width:70px;height:70px;z-index:0;"--}}
                                 {{--src="{{asset('/')}}front/img/office.png"/>--}}
                        {{--</div>--}}
                        {{--<div style="position:absolute;top:0px;left:59px;width:90px;height:104px;z-index:0;">--}}
                            {{--<img data-u="caption" data-t="44"--}}
                                 {{--style="position:absolute;top:0px;left:0px;width:90px;height:104px;z-index:0;"--}}
                                 {{--src="{{asset('/')}}front/img/hexagon-hollow.png"/>--}}
                            {{--<img data-u="caption" data-t="45"--}}
                                 {{--style="position:absolute;top:8px;left:7px;width:76px;height:88px;z-index:0;"--}}
                                 {{--src="{{asset('/')}}front/img/hexagon-solid.png"/>--}}
                            {{--<img data-u="caption" data-t="46"--}}
                                 {{--style="position:absolute;top:25px;left:6px;width:70px;height:60px;z-index:0;"--}}
                                 {{--src="{{asset('/')}}front/img/graphic-design.png"/>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div data-b="2" data-p="816.0">--}}
                    {{--<img data-u="image" src="{{asset('/')}}front/img/01.jpg"/>--}}
                    {{--<div data-u="caption" data-t="47" data-3d="1"--}}
                         {{--style="position:absolute;top:-210px;left:150px;width:580px;height:225px;z-index:0;">--}}
                        {{--<img style="position:absolute;top:0px;left:0px;width:700px;height:225px;z-index:0;"--}}
                             {{--src="{{asset('/')}}front/img/main.jpg"/>--}}
                        {{--<div data-u="caption" data-t="48"--}}
                             {{--style="position:absolute;top:30px;left:30px;width:200px;height:40px;z-index:0;background-color:#02918c;font-size:20px;color:#ffffff;line-height:40px;text-align:center;">--}}
                            {{--Welcome To Monirul Islam--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div data-u="caption" data-t="52" data-3d="1"--}}
                         {{--style="position:absolute;top:-210px;left:150px;width:580px;height:225px;z-index:0;">--}}
                        {{--<img data-u="caption" data-t="53"--}}
                             {{--style="position:absolute;top:0px;left:0px;width:700px;height:225px;z-index:0;"--}}
                             {{--src="{{asset('/')}}front/img/layer-blurred-white.png"/>--}}
                        {{--<div data-u="caption" data-t="54"--}}
                             {{--style="position:absolute;top:100px;left:30px;width:280px;height:50px;z-index:0;font-size:22px;font-width:700;line-height:50px;text-align:center; color:#02918c;">--}}
                            {{--WELCOME To Monirul Islam--}}
                        {{--</div>--}}
                        {{--<div data-u="caption" data-t="55"--}}
                             {{--style="position:absolute;top:30px;left:30px;width:230px;height:40px;z-index:0;background-color:#02918c;font-size:22px;color:#ffffff;line-height:40px;text-align:center;">--}}
                            {{--Welcome Messages--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div data-u="caption" data-t="56" data-3d="1"--}}
                         {{--style="position:absolute;top:-210px;left:150px;width:580px;height:225px;z-index:0;">--}}
                        {{--<img data-u="caption" data-t="57"--}}
                             {{--style="position:absolute;top:0px;left:0px;width:700px;height:225px;z-index:0;"--}}
                             {{--src="{{asset('/')}}front/img/layer-blurred-white.png"/>--}}
                        {{--<div data-u="caption" data-t="58"--}}
                             {{--style="position:absolute;top:25px;left:340px;width:300px;height:175px;z-index:0;background-color:#ffff8c;"></div>--}}
                        {{--<div data-u="caption" data-t="59"--}}
                             {{--style="position:absolute;top:30px;left:30px;width:180px;height:40px;z-index:0;background-color:#02918c;font-size:22px;color:#ffffff;line-height:40px;text-align:center;">--}}
                            {{--My All Services--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div data-u="caption" data-t="60" data-3d="1"--}}
                         {{--style="position:absolute;top:-210px;left:150px;width:580px;height:225px;z-index:0;">--}}
                        {{--<img data-u="caption" data-t="61"--}}
                             {{--style="position:absolute;top:0px;left:0px;width:700px;height:225px;z-index:0;"--}}
                             {{--src="{{asset('/')}}front/img/layer-blurred-white.png"/>--}}
                        {{--<div data-u="caption" data-t="62"--}}
                             {{--style="position:absolute;top:30px;left:30px;width:250px;height:40px;z-index:0;background-color:#02918c;font-size:22px;color:#ffffff;line-height:40px;text-align:center;">--}}
                            {{--Welcome to my web site--}}
                        {{--</div>--}}
                        {{--<div style="position:absolute;top:40px;left:400px;width:200px;height:50px;z-index:0;font-size:26px;line-height:50px;text-align:center;color:#02918c">--}}
                            {{--Monirul Islam--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div data-u="caption" data-t="63" data-3d="1"--}}
                         {{--style="position:absolute;top:-210px;left:150px;width:580px;height:225px;z-index:0;">--}}
                        {{--<img data-u="caption" data-t="64"--}}
                             {{--style="position:absolute;top:0px;left:0px;width:700px;height:225px;z-index:0;"--}}
                             {{--src="{{asset('/')}}front/img/layer-blurred-white.png"/>--}}
                        {{--<div data-u="caption" data-t="65"--}}
                             {{--style="position:absolute;top:30px;left:30px;width:250px;height:40px;z-index:0;background-color:#02918c;font-size:22px;color:#ffffff;line-height:40px;text-align:center;">--}}
                            {{--Web Development--}}
                        {{--</div>--}}
                        {{--<img style="position:absolute;top:90px;left:349px;width:87px;height:92px;z-index:0;"--}}
                             {{--src="{{asset('/')}}front/img/web-layout.png"/>--}}
                    {{--</div>--}}
                    {{--<div data-u="caption" data-t="66" data-3d="1"--}}
                         {{--style="position:absolute;top:-210px;left:150px;width:580px;height:225px;z-index:0;">--}}
                        {{--<img data-u="caption" data-t="67"--}}
                             {{--style="position:absolute;top:0px;left:0px;width:700px;height:225px;z-index:0;"--}}
                             {{--src="{{asset('/')}}front/img/layer-blurred-white.png"/>--}}
                        {{--<div data-u="caption" data-t="68"--}}
                             {{--style="position:absolute;top:30px;left:30px;width:250px;height:40px;z-index:0;background-color:#02918c;font-size:22px;color:#ffffff;line-height:40px;text-align:center;">--}}
                            {{--Web Design--}}
                        {{--</div>--}}
                        {{--<img style="position:absolute;top:126px;left:464px;width:66px;height:66px;z-index:0;"--}}
                             {{--src="{{asset('/')}}front/img/web-d-layout.png"/>--}}
                    {{--</div>--}}
                    {{--<div data-u="caption" data-t="69" data-3d="1"--}}
                         {{--style="position:absolute;top:-210px;left:150px;width:580px;height:225px;z-index:0;">--}}
                        {{--<img data-u="caption" data-t="70"--}}
                             {{--style="position:absolute;top:0px;left:0px;width:700px;height:225px;z-index:0;"--}}
                             {{--src="{{asset('/')}}front/img/layer-blurred-white.png"/>--}}
                        {{--<div data-u="caption" data-t="71"--}}
                             {{--style="position:absolute;top:30px;left:30px;width:250px;height:40px;z-index:0;background-color:#02918c;font-size:22px;color:#ffffff;line-height:40px;text-align:center;">--}}
                            {{--Graghic Design--}}
                        {{--</div>--}}
                        {{--<img style="position:absolute;top:120px;left:550px;width:48px;height:49px;z-index:0;"--}}
                             {{--src="{{asset('/')}}front/img/graphic-design-layout.png"/>--}}
                    {{--</div>--}}
                    {{--<div data-u="caption" data-t="72" data-3d="1"--}}
                         {{--style="position:absolute;top:-210px;left:150px;width:580px;height:225px;z-index:0;">--}}
                        {{--<img data-u="caption" data-t="73"--}}
                             {{--style="position:absolute;top:0px;left:0px;width:700px;height:225px;z-index:0;"--}}
                             {{--src="{{asset('/')}}front/img/layer-blurred-white.png"/>--}}
                        {{--<div data-u="caption" data-t="74"--}}
                             {{--style="position:absolute;top:30px;left:30px;width:200px;height:40px;z-index:0;background-color:#02918c;font-size:22px;color:#ffffff;line-height:40px;text-align:center;">--}}
                            {{--Thanks! Thanks!!--}}
                        {{--</div>--}}
                        {{--<img data-u="caption" data-t="77"--}}
                             {{--style="position:absolute;top:0px;left:309px;width:8px;height:8px;z-index:0;"--}}
                             {{--src="{{asset('/')}}front/img/dot.png"/>--}}
                        {{--<img data-u="caption" data-t="78"--}}
                             {{--style="position:absolute;top:0px;left:327px;width:8px;height:8px;z-index:0;"--}}
                             {{--src="{{asset('/')}}front/img/dot.png"/>--}}
                        {{--<img data-u="caption" data-t="79"--}}
                             {{--style="position:absolute;top:0px;left:346px;width:8px;height:8px;z-index:0;"--}}
                             {{--src="{{asset('/')}}front/img/dot.png"/>--}}
                        {{--<img data-u="caption" data-t="80"--}}
                             {{--style="position:absolute;top:0px;left:363px;width:8px;height:8px;z-index:0;"--}}
                             {{--src="{{asset('/')}}front/img/dot.png"/>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<!-- Bullet Navigator -->--}}
            {{--<div data-u="navigator" class="jssorb051" style="position:absolute;bottom:12px;right:12px;"--}}
                 {{--data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">--}}
                {{--<div data-u="prototype" class="i" style="width:16px;height:16px;">--}}
                    {{--<svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">--}}
                        {{--<circle class="b" cx="8000" cy="8000" r="5800"></circle>--}}
                    {{--</svg>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<!-- Arrow Navigator -->--}}
            {{--<div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;"--}}
                 {{--data-autocenter="2" data-scale="0.75" data-scale-left="0.75">--}}
                {{--<svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">--}}
                    {{--<polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>--}}
                {{--</svg>--}}
            {{--</div>--}}
            {{--<div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;"--}}
                 {{--data-autocenter="2" data-scale="0.75" data-scale-right="0.75">--}}
                {{--<svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">--}}
                    {{--<polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>--}}
                {{--</svg>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<!-- #endregion Jssor Slider End -->--}}
{{--</section>--}}
<!-- banner part end -->




<header id="intro-carousel" class="carousel slide">
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item html5-video-container active">
            <!-- HTML5 Video -->
            <video muted autoplay loop poster="{{asset('/')}}front/images/typing-on-mac.jpg" id="html5-video" class="fill">
                <source src="{{asset('/')}}front/videos/typing-on-mac.webm" type="video/webm">
                <source src="{{asset('/')}}front/videos/typing-on-mac.mp4" type="video/mp4">
            </video>
            <div class="carousel-caption">
                <h1 class="animated slideInDown">I am MD. MONIRUL ISLAM</h1>
                <h4 class="animated slideInDown" style="color: #FFFFFF">90/B(4th floor), Malibagh Chowdhury Para, D.I.T-Road.Dhaka-1219</h4>
                <h4 class="animated slideInDown"style="color: #FFFFFF" >Mobile No 1: 01915047779</br>
                    E-mail : monirul89@gmail.com</h4>
                <a href="#" class="btn btn-default btn-lg">MY RESUME</a>
            </div>
            <div class="html5-video-controls">
                <a id="html5-video-volume" class="fa fa-volume-up fa-lg" href="#"></a>
                <a id="html5-video-play" class="fa fa-pause fa-lg" href="#"></a>
            </div>
            <div class="overlay-detail"></div>
        </div><!-- /.item -->

    </div><!-- /.carousel-inner -->
    <div class="mouse"></div>
</header>

<section id="skills">
    <div class="container all_paragraph">
        <div class="col-md-12 col-sm-12">
            <div class="row">
                <h1 class="text-center">MD. MONIRUL ISLAM</h1>
                <div class="col-sm-12 text-center wow fadeInLeft animated"
                     data-wow-delay="0.2s" data-wow-offset="50"
                     style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                    <div class="col-sm-9 text-justify all_header">
                        <p><strong>Address</strong>: 90/B, Khilgaon(4th floor), Malibagh <br />
                            Chowdhury Para. D.I.T-Road.Dhaka-1219 <br />
                            <strong>Mobile No 1</strong>: 01915047779 <br />
                            <strong>Mobile No 2 </strong>:01912191584. <br />
                            <strong>E-mail </strong>: monirul89@gmail.com, <br />mo7rul@gmail.com</p>
                    </div>
                     <div class="col-sm-3 text-justify all_header">
                         <img src="{{asset('/')}}front/images/img/monir.jpg" alt="My Pic" width="150" height="150"/>
                    </div>

                </div>
            </div>
            <div class="paddingDiv col-sm-12"></div>
            <div class="paddingDiv col-sm-12"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 wow fadeInLeft animated"
                     data-wow-delay="0.5s" data-wow-offset="50"
                     style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                    <div class="wow fadeInRight animated" data-wow-delay=".5s"
                         style="visibility: visible; animation-delay: .2s; animation-name: fadeInRight;">
                        <h3 class="cv-title">Career Objective:</h3>
                        <p>To work willingly in an environment where success comes through creativity, hard work, sincerity, teamwork and commitment to duty.
                            Capable of working on a team with people at all levels as well as working independently.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 wow fadeInRight animated"
                     data-wow-delay="0.2s" data-wow-offset="50"
                     style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
                    <div class="wow fadeInLeft animated" data-wow-delay=".2s"
                         style="visibility: visible; animation-delay: .2s; animation-name: fadeInRight;">
                        <h3 class="cv-title">Career Summary:</h3>
                        <p>To build up career in a well known organization through the best effort. To obtain a responsible, challenging and growth-oriented position. Ability to learn new thing very quickly,
                            ability to find solution of problems quickly, capability of working under pressure and meeting deadlines.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 wow fadeInLeft animated"
                     data-wow-delay="0.5s" data-wow-offset="50"
                     style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                    <div class="wow fadeInLeft animated" data-wow-delay=".5s"
                         style="visibility: visible; animation-delay: .2s; animation-name: fadeInRight;">
                        <h3 class="cv-title">Special Qualification:</h3>
                        <p>HTML5, CSS3, Row PHP, Laravel, JavaScript, jQuery, Adobe Illustrator CS, Adobe Photoshop CS.</p>
                        <p class="text-center"><img src="{{asset('/')}}front/images/img/train.png" alt="Training course" height="200"></p>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 wow fadeInRight animated"
                     data-wow-delay="0.5s" data-wow-offset="50"
                     style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
                    <div class="wow fadeInRight animated" data-wow-delay=".5s"
                         style="visibility: visible; animation-delay: .2s; animation-name: fadeInRight;">
                        <table width="100%">
                            <tr id="pro" bgcolor="#b5b5b5">
                                <h3 class="cv-title">Professional Qualification:</h3>
                            </tr>
                            <tr>
                                <td colspan="2" >
                                    <table class="table">
                                        <tr>
                                            <th><h4>Certification</h4></th>
                                            <th><h4>Institute</h4></th>
                                            <th><h4>Location</h4></th>
                                            <th><h4>Duration</h4></th>
                                        </tr>
                                        <tr>
                                            <td>HTML5, CSS3, PHP, Wordpress.</td>
                                            <td>E-Futurebd.com</td>
                                            <td>Panthpat, Farmgate, Dhaka.</td>
                                            <td>6 month</td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="paddingDiv"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 wow fadeInLeft animated"
                     data-wow-delay="0.8s" data-wow-offset="50"
                     style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                    <div class="wow fadeInLeft animated" data-wow-delay=".8s"
                         style="visibility: visible; animation-delay: .8s; animation-name: fadeInLeft;">
                        <h3 class="cv-title">Specialization:</h3>
                        <ul>
                            <li><h5>HTML5/DHTML</h5></li>
                            <li><h5>CSS3</h5></li>
                            <li><h5>PHP 7</h5></li>
                            <li><h5>JavaScript</h5></li>
                            <li><h5>Adobe Photoshop</h5></li>
                            <li><h5>Illustrator</h5></li>
                            <li><h5>JQuery</h5></li>
                            <li><h5>Row PHP</h5></li>
                            <li><h5>Laravel</h5></li>
                        </ul>
                    </div>
                </div>
            </div>


        </div>

        <hr/>
        <div class="">
            <div class="col-sm-12">
                <h2 id="project">Projects </h2>
                <div class="row project-portfolio">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="col-md-12 col-sm-12 skills_box text-center wow fadeInLeft animated"
                                     data-wow-delay="0.5s" data-wow-offset="50"
                                     style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                                    <div class="col-md-12 col-sm-12 text-justify all_header">
                                        <a target="_blank" href="http://shafidi.com">
                                            <h3>Project Name: Shafidi BD Import & Export</h3>
                                            <p>We are the leading exporter of Jute Sackings (Hessian or Burlap Bags, Hessian
                                                Twill or Burlap Flour Bags, Food grade Coffee Sacks,
                                                Burlap Feed/Grain Sacks, Heavy duty & plus size sacks, Jute/Burlap Sandbags,
                                                Jute Woolpacks, etc
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="col-md-12 col-sm-12 skills_box wow fadeInRight animated" data-wow-delay=".2s"
                                     style="visibility: visible; animation-delay: .2s; animation-name: fadeInRight;">
                                    <div class="text-justify all_header">
                                        <a target="_blank" href="http://shafidi.com">
                                            <img width="100%" height="100%" src="{{asset('/')}}front/images/img/shafidi.jpg" alt="Shafidi">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="col-md-12 col-sm-12 skills_box text-center wow fadeInLeft animated"
                                     data-wow-delay="0.5s" data-wow-offset="50"
                                     style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                                    <div class="col-md-12 col-sm-12 text-justify all_header">
                                        <a target="_blank" href="http://www.fusion-radiology.com/">
                                            <h3>Project Name: Website for fusion-radiology</h3>
                                        <p>Fusion is UK based Tele-radiology Company that provides general and subspecialty
                                            reporting services to
                                            support existing radiology departments within NHS and private healthcare
                                            organizations.</p></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="col-md-12 col-sm-12 skills_box wow fadeInRight animated" data-wow-delay=".2s"
                                     style="visibility: visible; animation-delay: .2s; animation-name: fadeInRight;">
                                    <div class="text-justify all_header">
                                        <a target="_blank" href="http://www.fusion-radiology.com/">
                                            <img width="100%" height="100%" src="{{asset('/')}}front/images/img/fusion-radiology.jpg" alt="Fusion">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="col-md-12 col-sm-12 skills_box text-center wow fadeInLeft animated"
                                     data-wow-delay="0.5s" data-wow-offset="50"
                                     style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                                    <div class="col-md-12 col-sm-12 text-justify all_header">
                                        <a target="_blank" href="http://themomsembroidery.com/">
                                            <h3>Project Name: The Mom's Embroidery</h3>
                                                <p>Learning common Hardanger Embroidery Stitches! Some of the Hardanger Embroidery
                                                    Stitches include Running Stitch,
                                                    Four Sided Stitch, Hem Stitch, Buttonhole Stitch, Squared Edging Stitch, Eyelet
                                                    Hole Stitch, Star Stitch.</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="col-md-12 col-sm-12 skills_box wow fadeInRight animated" data-wow-delay=".2s"
                                     style="visibility: visible; animation-delay: .2s; animation-name: fadeInRight;">
                                    <div class="text-justify all_header">
                                        <a target="_blank" href="http://themomsembroidery.com/">
                                            <img width="100%" height="100%" src="{{asset('/')}}front/images/img/themomsembroidery.jpg" alt="Embroidery">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="col-md-12 col-sm-12 skills_box text-center wow fadeInLeft animated"
                                     data-wow-delay="0.5s" data-wow-offset="50"
                                     style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                                    <div class="col-md-12 col-sm-12 text-justify all_header">
                                        <a target="_blank" href="http://funnymoney24.com">
                                        <h3>Project Name: Funny Money</h3>
                                        <p>We are the leading exporter of Jute Sackings (Hessian or Burlap Bags, Hessian
                                            Twill or Burlap Flour Bags, Food grade Coffee Sacks,
                                            Burlap Feed/Grain Sacks, Heavy duty & plus size sacks, Jute/Burlap Sandbags,
                                            Jute Woolpacks, etc</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="col-md-12 col-sm-12 skills_box wow fadeInRight animated" data-wow-delay=".2s"
                                     style="visibility: visible; animation-delay: .2s; animation-name: fadeInRight;">
                                    <div class="text-justify all_header">
                                        <a target="_blank" href="http://funnymoney24.com">
                                            <img width="100%" height="100%" src="{{asset('/')}}front/images/thumbs/funnymoney.jpg" alt="Funnymoney">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="paddingDiv clearfix"></div>
            <div class="col-md-12 col-sm-12 wow fadeInLeft animated"
                 data-wow-delay="0.8s" data-wow-offset="50"
                 style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                <div class="wow fadeInLeft animated" data-wow-delay=".8s"
                     style="visibility: visible; animation-delay: .8s; animation-name: fadeInLeft;">
                    <h3 class="cv-title">Extra Curricular Activities:</h3>
                    <p>Basic: Java, C, C++, C#.</p>
                </div>
            </div>
                <div class="col-md-12 col-sm-12 wow fadeInLeft animated"
                     data-wow-delay="0.8s" data-wow-offset="50"
                     style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                    <div class="wow fadeInLeft animated" data-wow-delay=".8s"
                         style="visibility: visible; animation-delay: .8s; animation-name: fadeInLeft;">
                        <h3 class="cv-title">Personal Details :</h3>
                        <table class="table d-md-table-cell">
                            <tr>
                                <td>Father's Name</td>
                                <td>:</td>
                                <td> Jendar Ali Sarkar.</td>
                            </tr>
                            <tr>
                                <td>Mother's Name </td>
                                <td>:</td>
                                <td> Rakha Begum.</td>
                            </tr>
                            <tr>
                                <td>Date of Birth</td>
                                <td>:</td>
                                <td> February 12, 1989</td>
                            </tr>
                            <tr>
                                <td>Gender </td>
                                <td>:</td>
                                <td> Male</td>
                            </tr>
                            <tr>
                                <td>Marital Status </td>
                                <td>:</td>
                                <td> Unmarried</td>
                            </tr>
                            <tr>
                                <td>Nationality </td>
                                <td>:</td>
                                <td> Bangladeshi</td>
                            </tr>
                            <tr>
                                <td>National Id No </td>
                                <td>:</td>
                                <td> 8819451923222 </td>
                            </tr>
                            <tr>
                                <td> Religion </td>
                                <td>:</td>
                                <td> Islam </td>
                            </tr>
                            <tr>
                                <td> Permanent Address </td>
                                <td>:</td>
                                <td> Village-Char domdoma, Post- Bannakandi, Police station-Ullapara, District, Sirajgonj </td>
                            </tr>
                            <tr>
                                <td> Current Location </td>
                                <td>:</td>
                                <td> Dhaka </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <hr/>
    </div>
</section>

<section id="skills">
    <div class="container all_paragraph">
        <div class="col-md-12 col-sm-12 text-center all_header all_p">
            <h2>My awesome skills</h2>
            <h5>Web Development / Programming, Web Systems Administration (Apache, MySQL, PHP, Git), Database<br> Design
                and Query Optimization, Online Business Development</h5>
            <p class="all_bdr"></p>
        </div>
        <div class="col-md-12 col-sm-12">
            <div class="col-md-6 col-sm-6">
                <div class="col-md-12 col-sm-6 skills_box text-center wow fadeInLeft animated"
                     data-wow-delay=".2s" data-wow-offset="50"
                     style="visibility: visible; animation-delay: .2s; animation-name: fadeInLeft;">
                    <div class="col-md-12 col-sm-12 text-justify all_header">
                        <h3>PSD to HTML </h3>
                        <p> I'm just the right choice for you. Well I'm Md. Monirul Islam a skilled Web
                            Designer, having long time experience in Web Design platform, specially from PSD to
                            HTML. <br/>&nbsp; </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="col-md-12 col-sm-6 skills_box wow fadeInRight animated" data-wow-delay=".4s"
                     data-wow-offset="50"
                     style="visibility: visible; animation-delay: .5s; animation-name: fadeInRight;">
                    <div class="col-md-12 col-sm-12 text-justify all_header">
                        <h3>Responsive Design</h3>
                        <p>I'm just a click away from you. Any type of responsive or basic design I can complete
                            it with your demanding time. Just try my work, I'm ready to share my experiences
                            with you.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-sm-12">
            <div class="col-md-6 col-sm-6">
                <div class="col-md-12  col-sm-6 skills_box text-center wow fadeInLeft animated"
                     data-wow-delay=".5s" data-wow-offset="50"
                     style="visibility: visible; animation-delay: .7s; animation-name: fadeInLeft;">
                    <div class="col-md-12 col-sm-12 text-justify all_header">
                        <h3>PHP / mySQL</h3>
                        <p>I'm just the right choice for you. Well I'm Md. Monirul Islam a skilled Web
                            Developer, having long time experience in Web Development platform, specially
                            Dynamic and E-commerce website etc.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="col-md-12 col-sm-6 skills_box wow fadeInRight animated" data-wow-delay=".7s"
                     data-wow-offset="50"
                     style="visibility: visible; animation-delay: 1.5s; animation-name: fadeInRight;">
                    <div class="col-md-12 col-sm-12 text-justify all_header">
                        <h3>javaScript / jQuery </h3>
                        <p> One years of working on projects of different complexity including startups both in
                            frontend and backend. I have good skills in PHP 5(OOP), MySQL, JavaScript (jquery),
                            ajax, json. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-sm-12">
            <div class="col-md-6 col-sm-6">
                <div class="col-md-12 col-sm-6 skills_box text-center wow fadeInLeft animated"
                     data-wow-delay="0.5s" data-wow-offset="50"
                     style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                    <div class="col-md-12 col-sm-12 text-justify all_header">
                        <h3>MVC Frameworks</h3>
                        <p>Responsible and very ambitious, highly dedicated to his work and on a constant quest
                            for new, innovative solutions and ideas. Iinterested in programming and a logical
                            approach to problem solving.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="col-md-12 col-sm-6 skills_box wow fadeInRight animated" data-wow-delay=".2s"
                     style="visibility: visible; animation-delay: .2s; animation-name: fadeInRight;">
                    <div class="col-md-12 col-sm-12 text-justify all_header">
                        <h3>Wordpress</h3>
                        <p>I am Wordpress speed optimization expert who can make your website as fast as
                            possible, I am resistant in my work until I achieve best possible results and get
                            everybody satisfied with project.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- skills Part code ends -->
@endsection