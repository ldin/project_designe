@extends('home.layout')

@section('title') {{ !empty($settings['title'])?$settings['title']:'PMI designe' }} @stop

@section('header')
    <link rel="stylesheet" href="module/slick/slick.css"/>
    <link rel="stylesheet" href="module/slick/slick-theme.css"/>
@stop

@section('slider')
    <div class="head js-header-block">
        <div class="slick">
            <div class="slide slide-0">
                <div class="image image1"></div>
            </div>
            <div class="slide slide-1">
                <div class="image image1"></div>
                <div class="image image2"></div>
            </div>
            <div class="slide slide-2">
                <div class="image image1"></div>
                <div class="image image2"></div>
            </div>
        </div>
    </div>
@stop

@section('content')


        <section>
            <article id="description">
                <div class="quote">
                    <div class="container">
                        <div class="col-xs-12">
                            <p class="h1">Проектируя глобально, остаемся внимательными к мелочам.<br /> Ваше время наша главная ценность.<br /> Наша работа эталон стиля.  <br /><!-- <span>Мы PMI Design</span> -->
                            </p>
                        </div>
                    </div>
                </div>

                <div class="skin">
                    <div class="triangle-box bottom"></div>
                    <div class="container">
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-xs-12 col-sm-4">
                                    <img src="images/class.png" class="icon">
                                    <h3>Почему мы</h3>
                                    <p>
                                        Выбирая студию дизайна, прежде всего стоит обратить особое  внимание  на то, кому Вы доверите интерьер квартиры или загородного дома, ведь от  их знаний и опыта зависит ваше дальнейшее комфортное проживание. Обратившись к нам гарантируем, строгий контроль качества, непревзойденный дизайн и массу позитивных эмоций.
                                    </p>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <img src="images/galka.png" class="icon">
                                    <h3>Что мы делаем</h3>
                                    <p>
                                        Мы успешно реализовали такие объекты как: парки, городские районы, интерьеры квартир, частные дома, офисы и бизнес-центры. У нас вы получите неповторимый дизайн и особенный индивидуальный подход.
                                    </p>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <img src="images/i.png" class="icon">
                                    <h3>Зачем мы это делаем</h3>
                                    <p>
                                        Мы хотим помочь воплотить вашу мечту об идеальном доме в реальность. В нашей работе мы руководствуемся лишь одним принципом - гармония и креатив во всем, ведь основная наша задача сделать Вас счастливыми.
                                    </p>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="triangle-box top"></div>
                </div>
            </article>
            <article id="services">
                <div class="container">
                    <h2>Наши услуги</h2>
                    <hr class="line">
                    <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                        <!-- <p>Главное направления деятельности PMI design — это архитектурные проекты, ландшафтное проектирование и дизайн интерьеров. Для нас нет невыполнимых задач, мы знаем, как сочетать качество и креатив! В этом нам помогают интеллектуальные и технические ресурсы для выполнения задач. В наш творческий процесс входит проектирование индивидуальных жилых интерьеров и объектов городской среды. Мы успешно реализовали такие объекты как:,парки, городские районы,интерьеры квартир, частные дома, офисы и бизнес-центры. Сотрудничество с нами обеспечивает высококачественное проектирование объектов,контроль реализации проектов и оптимизацию сроков их выполнения. Наша команда состоит из  высококвалифицированных специалистов в области дизайна интерьера, архитектуры и проектирования. </p> -->
                        <p>
                            Проектирование индивидуальных жилых интерьеров и объектов городской среды. На  протяжение уже многих лет мы помогаем Клиентам создавать уютный и яркий дизайн в квартирах и загородных домах.
                            Сотрудничество с нами обеспечивает качественное проектирование объектов, контроль реализации проектов и оптимизацию сроков их выполнения.
                        </p>
                    </div>
                </div>
                <div class="example">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-4 concept">
                                <div class="image img-circle">
                                    <img src="images/ex-concept.jpg" alt="">
                                </div>
                                <h3>КОНЦЕПЦИЯ / ПРОЕКТИРОВАНИЕ</h3>
                                <p>
                                    Дизайн-концепция самый важный шаг на пути к Вашему дизайну мечты. В концепцию входит эскизы и трехмерное изображение. Благодаря концепции структурируется общее понятие о том, каким будет реализованный проект. С помощью дизайн-концепции Вы сможете увидеть проект в целом. Иными словами концепция дизайна - это
                                    идея Вашего будущего дизайна, как он будет выглядит в целом от расположения текста, до графики.
                                </p>
                            </div>
                            <div class="col-xs-12 col-sm-4 modeling">
                                <div class="image img-circle">
                                    <img src="images/ex-modeling.jpg" alt="">
                                </div>
                                <h3>3D МОДЕЛИРОВАНИЕ  /  ВИЗУАЛИЗАЦИЯ</h3>
                                <p>
                                    У вас в голове зародилась мысль о том каким должен быть ваш интерьер, но не представляете, как всё это будет выглядеть? Мы поможем вам воплотить ваши идеи в жизнь. Благодаря визуальным наброскам можно разглядеть не только общую концепцию, но и реалистичный интерьер дома в деталях.
                                </p>
                            </div>
                            <div class="col-xs-12 col-sm-4 support">
                                <div class="image img-circle">
                                    <img src="images/ex-support.jpg" alt="">
                                </div>
                                <h3>СОПРОВОЖДЕНИЕ  /  ДЕКОРИРОВАНИЕ</h3>
                                <p>
                                    Хотите красивый дизайн квартиры, но при этом нет желания тратить огромное количество средств? Сопровождение, а иными словами
                                    авторторский надзор подразумевает контроль дизайнера за строительством, закупкой материалов и мебели, что способствует хорошей экономии. В ходе авторского надзора ведётся журнал, в котором вносятся все замечания и пожелания дизайнера.

                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </article>

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
            <article id="contact">
                <div class="container">
                    <div class="col-xs-12">
                        <h2>Контакты</h2>
                        <hr class="line">
                    </div>
                </div>
                <!--   -->
                <div  style="height: 300px;">
                    <script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=IR7b9c81NsdU1-JXiSL3yVoUlYGWMDen&lang=ru_RU&sourceType=constructor"></script>
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
