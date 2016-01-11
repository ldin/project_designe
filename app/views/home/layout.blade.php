<!DOCTYPE html>
<html lang="ru">
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     @if(!empty($row->description))
         <meta name="Description" content="{{$row->description}}">
     @endif
     @if(!empty($row->keywords))
         <meta name="Keywords" content="{{$row->keywords}}">
     @endif

    <title>@yield('title')</title>

    <link href="/favicon.ico" rel="shortcut icon" type="image/x-icon" />

    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!--[if lt IE 9]>
        <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
    <![endif]-->

    @yield('header')

     <link href="/css/main.css?02" rel="stylesheet">
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
                            <a href="/" class="main-ADlogo">Asafov design</a>
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
                    <ul class="pages">
                        <li><a href="/services">Наши услуги</a>
                            <ul>
                                <li><a href="/services/kontseptsiya-i-proektirovanie">Концепция / Проектирование </a></li>
                                <li><a href="/services/3d-modelirovanie-vizualizatsiya">3D моделирование / Визуализация</a></li>
                                <li><a href="/services/soprovojdenie-dekorirovanie">Сопровождение / Декорирование</a></li>
                            </ul>
                        </li>
                        <li><a href="/price">Стоимость</a></li>
                        <li><a href="/news">Новости</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 col-xs-12">
                    <div itemscope itemtype="http://schema.org/Organization">
                        <p class="h1">Контакты</p>
                        <p itemprop="name">Asafov design</p>
                        <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                            <p>
                                Мы находимся по адресу:<br />
                                <span itemprop="addressLocality">Санкт-Петербург</span>
                                <span  itemprop="streetAddress">Наб. Реки Мойки 7</span> <br /><br />
                                Телефон:
                                <a href="tel:{{!empty($settings['phone_head'])?'+'.preg_replace('/[^0-9]/', '', $settings['phone_head']):''}}">
                                    <span itemprop="telephone"> {{ !empty($settings['phone_head'])?$settings['phone_head']:'' }}</span>
                                </a> <br />
                                E-mail:
                                <a href="mailto:{{ !empty($settings['email_head'])?$settings['email_head']:'' }}">
                                    <span itemprop="email"> {{ !empty($settings['email_head'])?$settings['email_head']:'' }}</span>
                                </a>

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2 col-xs-12">
                    <p class="h1 text-center add">Поделиться</p>
                    <script type="text/javascript">(function() {
                            if (window.pluso)if (typeof window.pluso.start == "function") return;
                            if (window.ifpluso==undefined) { window.ifpluso = 1;
                                var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
                                s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
                                s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
                                var h=d[g]('body')[0];
                                h.appendChild(s);
                            }})();</script>
                    <div class="pluso" data-background="transparent" data-options="medium,round,multiline,horizontal,counter,theme=05" data-services="vkontakte,odnoklassniki,facebook,twitter,google" data-user="1132713077"></div>

                    <p class="h1 text-center">Присоединяйтесь</p>
                    <div class="social text-center">
                        <a href="https://vk.com/asafovdesign" target="_blank"><i class="social-icons vk"></i></a>
                        <!--
                        <i class="social-icons fb"></i>
                        <i class="social-icons tw"></i>
                        -->

                    </div>

                </div>
            </div>
        </div>
    </footer>

{{ HTML::script('/js/lib/jquery-1.11.3.min.js') }}
{{ HTML::script('/js/lib/bootstrap.min.js') }}

{{ HTML::script('/js/main.min.js') }}
@yield('scripts')

<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = 'Pm1rwWiwdb';
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);})();</script>
<!-- {/literal} END JIVOSITE CODE -->

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-71701444-1', 'auto');
    ga('send', 'pageview');

</script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter34128260 = new Ya.Metrika({
                    id:34128260,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/34128260" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>

</html>
