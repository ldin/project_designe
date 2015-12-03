@extends('home.layout')

@section('title') {{ !empty($settings['title'])?$settings['title']:'PMI designe' }} @stop

@section('header')
    <link rel="stylesheet" href="module/slick/slick.css"/>
    <link rel="stylesheet" href="module/slick/slick-theme.css"/>
@stop

@section('slider')

    <div class="head js-header-block">
        <div class="container">
            <div class="logo">
                <div class="main-ADlogo"></div>
                <p><span>профессионально модно индивидуально</span></p>
                <!--
                <img src="/images/ASDlogo-w.png">
                <p>Архитектура Строительство<br> Дизайн</p>
                -->
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-lg-6 col-lg-offset-3">
                    <p class="h1 work">Наша работа &#8212;<br></p>
                    <p class="h1 style"><span class="reference">Эталон</span><br> стиля</p>
                    <hr>
                </div>
            </div>
            <p class="f-lighter">Проектируя глобально, остаемся внимательными к мелочам.</p>
        </div>
    </div>
@stop

@section('content')

        <section id="land-page">

            <article id="for-you">
                <h2>Для Вас</h2>
                <hr class="line">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-xs-12 col-sm-4">
                            <div class="circle">
                                <p class="num"><span class="big">10</span></p>
                                <p class="desc center"><span>лет</span><br> <i>в сфере дизайна</i></p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="circle">
                                <p class="num"><span class="big">170</span></p>
                                <p class="desc"> <i>реализованных</i><br> <span>работ</span></p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="circle">
                                <p class="num"><span class="big">&#8734;</span></p>
                                <p class="desc"><i>довольных</i><br> <span>клиентов</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center">
                        <a href="#" class="btn btn-main">Позвоните нам</a>
                    </div>
                </div>
            </article>

            <article id="description">
                <div class="container">
                    <h2>Что мы делаем?</h2>
                    <hr class="line">
                    <p class="text-center">Мы хотим помочь воплотить вашу мечту об идеальном доме в реальность.</p>
                    <br>
                    <div class="row">
                        <div class="col-xs-12 col-sm-3">
                            <img src="/images/circle-line-1.png" class="">
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="first">
                                <p>В нашей работе мы руководствуемся лишь<br> одним принципом -</p>
                                <p class="majestic">гармония и творчество во всем,</p>
                            </div>
                            <div class="second">
                                <p>ведь основная наша задача -</p>
                                <p class="majestic">сделать Вас счастливыми!</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-3">
                            <img src="/images/circle-line-2.png" class="">
                        </div>

                    </div>
                </div>
            </article>

            <article id="services">
                <div class="container">
                    <h2>Наши услуги</h2>
                    <hr class="line">

                    <div class="row text-center">
                        <div class="col-xs-12 col-sm-4 concept">
                            <div class="image img-circle">
                                <!--<img src="images/ico/ico-lamp.png" alt="">-->
                            </div>
                            <h3>Концепция <br> Проектирование</h3>
                        </div>
                        <div class="col-xs-12 col-sm-4 modeling">
                            <div class="image img-circle">
                                <!--<img src="images/ico/ico-3d.png" alt="">-->
                            </div>
                            <h3>3D моделирование <br> Визуализация</h3>
                        </div>
                        <div class="col-xs-12 col-sm-4 support">
                            <div class="image img-circle">
                                <!--<img src="images/ico/ico-uzor.png" alt="">-->
                            </div>
                            <h3>Сопровождение <br> Декорирование</h3>
                        </div>
                    </div>
                </div>

            </article>

            <article id="price">
                <div class="container">
                    <h2>Тарифы</h2>
                    <hr class="line">
                    <div class="row">
                        <div class="col-xs-6 col-sm-3">
                            <div class="img">
                                <img src="/images/ico/rate-sketsh.jpg">
                            </div>
                            <h3>Эскизный</h3>
                            <p>В тариф включено:</p>
                            <p>
                                Разработка прототипа<br>
                                Разработкка плана объекта<br>
                                Разработка плана в AutoCad<br>
                            </p>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <div class="img">
                                <img src="/images/ico/rate-standart.jpg">
                            </div>
                            <h3>Стандарт</h3>
                            <p>В тариф включено:</p>
                            <p>
                                Разработка прототипа<br>
                                Разработкка плана объекта<br>
                                Разработка плана в AutoCad<br>
                                2D визуализация<br>
                                3 цветовых решения<br>
                            </p>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <div class="img">
                                <img src="/images/ico/rate-max.jpg">
                            </div>
                            <h3>Максимум</h3>
                            <p>В тариф включено:</p>
                            <p>
                                Разработка прототипа<br>
                                Разработкка плана объекта<br>
                                Разработка плана в AutoCad<br>
                                3D визуализация<br>
                                5 цветовых решений<br>
                            </p>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <div class="img">
                                <img src="/images/ico/rate-maxpl.jpg">
                            </div>
                            <h3>Эскизный</h3>
                            <p>В тариф включено:</p>
                            <p>
                                Разработка прототипа<br>
                                Разработкка плана объекта<br>
                                Разработка плана в AutoCad<br>
                                Несколько 3D визуализаций<br>
                                До 10 цветовых решений<br>
                            </p>
                        </div>
                    </div>
                </div>
            </article>
<!--
            <article id="price">
                <div class="container ">
                    <div class="col-sm-12 hidden-xs">
                        <h2>Стоимость</h2>
                        <hr class="line">
                        <table class="table table-striped">
                            <tr>
                                <th></th>
                                <th>Эскизный</th>
                                <th>Стандарт</th>
                                <th>Максимум</th>
                                <th>Максимум+</th>
                            </tr>
                            <tr>
                                <td>Обмерный план</td>
                                <td><i></i></td> <td><i></i></td> <td><i></i></td> <td><i></i></td>
                            </tr>
                            <tr>
                                <td>Составление технического задания</td>
                                <td><i></i></td> <td><i></i></td> <td><i></i></td> <td><i></i></td>
                            </tr>
                            <tr>
                                <td>План расстановки мебели в 7-8 вариантах</td>
                                <td><i></i></td> <td><i></i></td> <td><i></i></td> <td><i></i></td>
                            </tr>
                            <tr>
                                <td>3D визуализации всех помещений в 2-3 стилях</td>
                                <td><i></i></td> <td><i></i></td> <td><i></i></td> <td><i></i></td>
                            </tr>
                            <tr>
                                <td>Полный комплект рабочей документации  для строителей</td>
                                <td></td> <td><i></i></td> <td><i></i></td> <td><i></i></td>
                            </tr>
                            <tr>
                                <td>Составление бюджета на проект</td>
                                <td></td> <td></td> <td><i></i></td> <td><i></i></td>
                            </tr>
                            <tr>
                                <td>Подбор финишных отделочных материалов,сантехники, мебели</td>
                                <td></td> <td></td> <td><i></i></td> <td><i></i></td>
                            </tr>
                            <tr>
                                <td>Интенграция инженерного оборудования в дизайн-проект</td>
                                <td></td> <td></td> <td><i></i></td> <td><i></i></td>
                            </tr>
                            <tr>
                                <td>Развертка стен</td>
                                <td><i></i></td> <td><i></i></td> <td><i></i></td> <td><i></i></td>
                            </tr>
                            <tr>
                                <td>Декорирования интерьера</td>
                                <td></td> <td></td> <td><i></i></td> <td><i></i></td>
                            </tr>
                            <tr>
                                <td>Работа с заказными изделиями,заказ, надзор за исполнением</td>
                                <td></td> <td></td> <td></td> <td><i></i></td>
                            </tr>
                            <tr>
                                <td>Выезд дизайнера вместе с Вами в салоны поставщиков</td>
                                <td></td> <td></td> <td><i></i></td> <td><i></i></td>
                            </tr>
                            <tr>
                                <td>Авторский надзор</td>
                                <td></td> <td></td> <td></td> <td><i></i></td>
                            </tr>
                            <tr>
                                <th>Стоимость</th>
                                <th>от 600 р/м.кв</th><th>от 1000 р/м.кв</th><th>от 1500 р/м.кв</th><th>от 3000 р/м.кв</th>
                            </tr>

                        </table>
                    </div>
                </div>


            </article>
-->
            <article id="scheme">
                <div class="container">
                    <div class="col-xs-12">
                        <h2>Схема работы</h2>
                        <hr class="line">
                    </div>
                </div>


            </article>
        </section>

@stop

@section('scripts')
    {{ HTML::script('/module/slick/slick.min.js') }}

    <script type="text/javascript">
        $( document ).ready(function() {
            //slider
            $('.slide').slick({
                dots: false,
                arrows: false,
                infinite: true,
                speed: 500,
                fade: true,
                autoplay: true,
                autoplaySpeed: 2000,
                cssEase: 'linear'
            });

            $('.slick').slick({
                dots: false,
                arrows: false,
                autoplay: true,
                autoplaySpeed: 4000
            });
        });
    </script>

    {{--<script src="/js/jquery.parallax.js"></script>--}}
    {{--<script type="text/javascript">--}}
        {{--jQuery(document).ready(function(){--}}
            {{--//parallax--}}
            {{--// Declare parallax on layers--}}
            {{--jQuery('.parallax-layer').parallax(--}}
                {{--{ mouseport: jQuery("#slider") },            // Options--}}
                {{--{ xparallax: '20px',    yparallax: '20px', xorigin:0.5, yorigin:0, frameDuration:1 },      // Layer 1--}}
                {{--{ xparallax: '100px',   yparallax: '100px', xorigin:0.5, yorigin:0, frameDuration:1}     // Layer 2--}}
            {{--);--}}
        {{--});--}}
    {{--</script>--}}
    

@stop
