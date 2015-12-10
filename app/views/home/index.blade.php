@extends('home.layout')

@section('title') {{ !empty($settings['title'])?$settings['title']:'PMI designe' }} @stop

@section('header')
    <link href="/css/animation-main.css?01" rel="stylesheet">
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
                </div>
            </div>
            <hr>
            <p class="f-lighter">Проектируя глобально, остаемся внимательными к мелочам.</p>
            <hr>
            <p class="phone">
                <a href="tel:{{!empty($settings['phone_head'])?'+'.preg_replace('/[^0-9]/', '', $settings['phone_head']):''}}">{{ !empty($settings['phone_head'])?$settings['phone_head']:'' }}</a>
            </p>
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
                                <div class="dot dot-1"></div>
                                <p class="num"><span class="big">10</span></p>
                                <p class="desc center"><span>лет</span><br> <i>в сфере дизайна</i></p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="circle">
                                <div class="dot dot-2"></div>
                                <p class="num"><span class="big">170</span></p>
                                <p class="desc"> <i>реализованных</i><br> <span>работ</span></p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="circle">
                                <div class="dot dot-3"></div>
                                <p class="num"><span class="big"><img src="/images/ico/infinity.png" ></span></p>
                                <p class="desc"><i>довольных</i><br> <span>клиентов</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center">
                        <a href="tel:{{!empty($settings['phone_head'])?'+'.preg_replace('/[^0-9]/', '', $settings['phone_head']):''}}"
                           data-descr="{{!empty($settings['phone_head'])?preg_replace('/[^0-9-+()]/', '', $settings['phone_head']):''}}"
                           class="btn btn-main">Позвоните нам</a>

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
                        <div class="col-xs-12 col-sm-3 text-center">
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
                        <div class="col-xs-12 col-sm-3 text-center">
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
                                <div class="dot dot-1"></div>
                            </div>
                            <h3>Концепция <br> Проектирование</h3>
                        </div>
                        <div class="col-xs-12 col-sm-4 modeling">
                            <div class="image img-circle">
                                <div class="dot dot-2"></div>
                            </div>
                            <h3>3D моделирование <br> Визуализация</h3>
                        </div>
                        <div class="col-xs-12 col-sm-4 support">
                            <div class="image img-circle">
                                <div class="dot dot-3"></div>
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
                    <div class="row text-center">
                        <div class="col-xs-6 col-sm-3">
                            <div class="img">
                                <img src="/images/ico/rate-sketsh.jpg">
                            </div>
                            <p class="price">от 600 р/м.кв</p>
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
                            <p class="price">от 1000 р/м.кв</p>
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
                            <p class="price">от 1500 р/м.кв</p>
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
                            <p class="price">от 3000 р/м.кв</p>
                            <h3>Максимум +</h3>
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
                    <div class="row text-center">
                        <a href="/price" class="btn btn-main">Тарифы</a>
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
                        <div class="row text-center">
                            <ul>
                                <li class="block">
                                    <div class="circle scheme-work phone"></div>
                                    <p>Звонок</p>
                                </li>
                                <li class="block">
                                    <div class="circle scheme-work meet"></div>
                                    <p>Встреча</p>
                                </li>
                                <li class="block">
                                    <div class="circle scheme-work line"></div>
                                    <p>Замеры</p>
                                </li>
                                <li class="block">
                                    <div class="circle scheme-work sketch"></div>
                                    <p>Эскизы</p>
                                </li>
                                <li class="block">
                                    <div class="circle scheme-work match"></div>
                                    <p>Согласование</p>
                                </li>
                                <li class="block">
                                    <div class="circle scheme-work comp"></div>
                                    <p>Работа над<br> проектом</p>
                                </li>
                                <li class="block">
                                    <div class="circle scheme-work escort"></div>
                                    <p>Сопровождение</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


            </article>
        </section>

@stop

@section('scripts')

@stop
