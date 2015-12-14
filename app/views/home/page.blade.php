@extends('home.layout')

@section('title')
    {{ !empty($row->title)? $row->title:(!empty($type->title)? $type->title:'Asafov design') }}
@stop

@section('content')

    <div id="content" class="container">

    <div class="row">

        @if(isset($posts)&&count($posts)>0)
            <div id="page-menu" class="col-xs-12 col-lg-2 col-md-3">

                <p class="nav-title {{ (Request::is( $type->type)) ? 'active' : '' }}">
                    {{ HTML::link($type->type, $type->name ) }}
                </p>

                <ul class="menu-page nav nav-pills nav-stacked ">
                    @foreach($posts as $post)
                        <li {{ (Request::is( $type->type.'/'.$post->slug)) || (!empty($row)&&$row->parent==$post->id)? 'class="active"' : '' }} >
                        {{ HTML::link('/'.$type->type.'/'.$post->slug, $post->name) }}
                            
                            @if(isset($posts_child)&&count($posts_child)>0)
                                <ul>
                                    @foreach($posts_child as $post_ch)
                                        @if(($post_ch->parent == $post->id) )
                                            <li {{ (Request::is( $type->type.'/'.$post_ch->slug)) ? 'class="active"' : '' }}>
                                                {{ HTML::link('/'.$type->type.'/'.$post_ch->slug, $post_ch->name) }}
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                    @endforeach
                </ul>

            </div>
        @endif

        <div class="col-xs-12 {{ (isset($posts)&&count($posts)>0)?"col-sm-8 col-lg-offset-1":"col-sm-12"  }} ">


            @if(!empty($row->text))
                {{ $row->text }}
            @endif

            @if(empty($row))
                {{ $type->text }}
            @endif
            
            @if(isset($subcategory)&&count($subcategory)>0)
                @foreach($subcategory as $post)


                    <?php $parts = preg_split('/<div style="page-break-after: always"><span style="display:none">&nbsp;<\/span><\/div>/', $post->text); ?>

                    <div class="block-post row block-news">

                        <div class="col-xs-9 ">
                            <p>{{$post->name}}</p>
                            @if(!empty($post->preview_img))
                                {{ HTML::image($post->preview_img, '') }}
                            @endif

                            {{$post->preview}}
                            <br>
                            <p>{{ HTML::link($type->type.'/'.$post->slug, 'подробнее >>') }}</p>

                        </div>
                        <div class="col-xs-3 ">
                            <p class="data-post">{{ date( 'd.m.Y', strtotime($post->created_at)); }}</p>
                            @if(count($parts)>1)
                                <p><a href="#" class="img-circle circle" onclick="diplay_hide('#parts-{{$post->id}}', this);return false;"><i class="glyphicon glyphicon-menu-down"></i></a></p>
                            @endif
                        </div>

                    </div>
                    <hr>
                @endforeach

                {{ $subcategory->links() }}
            @endif

                <script type="text/javascript">(function() {
                        if (window.pluso)if (typeof window.pluso.start == "function") return;
                        if (window.ifpluso==undefined) { window.ifpluso = 1;
                            var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
                            s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
                            s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
                            var h=d[g]('body')[0];
                            h.appendChild(s);
                        }})();</script>
                <div class="pluso" data-background="transparent" data-options="medium,round,line,horizontal,counter,theme=05" data-services="vkontakte,odnoklassniki,facebook,twitter,google" data-user="1132713077"></div>


        </div>



    </div>

    </div>

@stop


@section('scripts')

@stop
