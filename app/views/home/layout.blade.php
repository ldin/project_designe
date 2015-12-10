<!DOCTYPE html>
<html lang="ru">
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <link href="/favicon.ico" rel="shortcut icon" type="image/x-icon" />

    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!--[if lt IE 9]>
        <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
    <![endif]-->

    @yield('header')

     <link href="/css/main.css?01" rel="stylesheet">
 </head>

<body>
    <div class="wappers">
        <header id="header">
            @yield('slider')
            <div id="menu" class="relative">
                <nav class="navbar">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a href="/#header" class="main-ADlogo">Asafov design</a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                            <ul class="nav navbar-nav navbar-right">
                                @if(isset($type_page))
                                    @foreach($type_page as$type=>$page)
                                        <li {{ (Request::is($type.'*')) ? 'class="active"' : '' }}>{{HTML::link($type, $page)}}</li>
                                    @endforeach
                                @endif
                            </ul>

                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container -->
                </nav>
            </div>
        </header>

        <main>
            @yield('content')
        </main>
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-xs-12 logo">
                    <!--<img src="/images/ADsqlogo.png">-->
                    <div class="main-ADlogo"></div>
                    <p>Профессионально Модно Индивидуально</p>
                </div>
                <div class="col-sm-3 col-xs-12">
                    <p class="h1">Наши услуги</p>
                    <ul>
                        <li>Концепция </li>
                        <li>Проектирование </li>
                        <li>3D моделирование</li>
                        <li>Визуализация</li>
                        <li>Сопровождение</li>
                        <li>Декорирование</li>
                    </ul>
                </div>
                <div class="col-sm-3 col-xs-12">
                    <p class="h1">Контакты</p>
                    <p>
                        Мы находимся по адресу:<br />
                        Наб. Реки Мойки 7 <br /><br />
                        Телефон:
                        <a href="tel:{{!empty($settings['phone_head'])?'+'.preg_replace('/[^0-9]/', '', $settings['phone_head']):''}}"><i class="picto picto-phone"></i><span> {{ !empty($settings['phone_head'])?$settings['phone_head']:'' }}</span></a> <br />
                        E-mail:
                        <a href="mailto:{{ !empty($settings['email_head'])?$settings['email_head']:'' }}"><i class="picto picto-mail"></i><span> {{ !empty($settings['email_head'])?$settings['email_head']:'' }}</span></a>

                    </p>
                </div>
                <div class="col-sm-2 col-xs-12">
                    <p class="h1">Присоединяйтесь</p>
                    <div class="social">
                        <i class="social-icons vk"></i>
                        <i class="social-icons fb"></i>
                        <i class="social-icons tw"></i>

                    </div>

                </div>
            </div>
        </div>
    </footer>

{{ HTML::script('/js/lib/jquery-1.11.3.min.js') }}
{{ HTML::script('/js/lib/bootstrap.min.js') }}

{{ HTML::script('/js/main.min.js') }}
@yield('scripts')

<!-- Yandex.Metrika counter --> <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter34128260 = new Ya.Metrika({ id:34128260, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/34128260" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->

</body>

</html>
