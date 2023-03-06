@extends('front-end.layout.master')

@section('content')

<div class="main_body">
        <!-- this is slide -->
        <div class="container-slide">
            <div class="slide">
                <div class="slide_big">
                @foreach($latest as $item)
                    <div class="slide_big_box">
                        <p>{{$item->title}}</p>
                        <img src="{{ url('news').'/'.$item->img }}" alt="">
                    </div>
                @endforeach
                </div>
                <div class="slide_small">
                @foreach($latest->slice(2) as $item)
                    <div class="slide_small_box">
                        <p>{{$item->title}}</p>
                        <img src="{{ url('news').'/'.$item->img }}" alt="">
                    </div>
                @endforeach
                </div>
            </div>
        </div>

        @foreach($category as $item1)
        @if(count($item1->news)>0)
        <!-- this is category name -->
        <div class="category_name_box">
            <div class="category_box">
                <div class="category_title">
                    <h1>{{$item1->title}}</h1>
                </div>
                <div class="category_right">
                </div>
            </div>
        </div>
        <!-- this is item category -->
        <div class="contains_item_category">
            <div class="item_category">
                <a href="{{ route('home.detail',$item1->news[0]->id) }}" class="item_category_img">
                    <img src="{{ url('news/'.$item1->news[0]->img) }}" alt="">
                </a>
                <a href="{{ route('home.detail',$item1->news[0]->id) }}" class="item_category_txt">
                    {{$item1->news[0]->title}}
                </a>
            </div>
            <div class="news_category">
                @foreach($item1->news->slice(1) as $item)
                <a href="{{ route('home.detail',$item->id) }}" class="news_category_box">
                    <div class="news_category_box_img">
                        <img src="{{ url('news/'.$item->img) }}" alt="">
                    </div>
                    <div class="news_category_box_txt">
                        {{ $item->title }}
                    </div>
                </a>
                @endforeach
            </div>
        </div>
        @endif
        @endforeach
        <!-- this is category name -->
     
    </div>
@endsection
