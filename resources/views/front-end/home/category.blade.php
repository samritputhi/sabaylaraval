@extends('front-end.layout.master')


@section('content')
    <main>
        <div id="container-list">
            <div class="container-list">
                <div class="list">
                    <!-- this is item all category -->
                    @if(count($category)>0)
                    <div class="category_name">
                        <div class="category_box">
                            <div class="category_title">
                                <h1>{{$category[0]->category->title}}</h1>
                            </div>
                            <div class="category_right">
                            </div>
                        </div>
                    </div>
                    <div class="list_box">
                        <div class="list_box_top">
                            @foreach($category->take(2) as $item)
                                <a href="{{ route('home.detail',$item->id)}}">
                                    <div class="list_box_top_box {{ $loop->iteration==2 ? 'child' : ''}}">
                                        <div class="list_box_top_box--img">
                                            <img src="{{ url('news/'.$item->img) }}" alt="">
                                        </div>
                                        <div class="list_box_top_box--txt">
                                            <p> {{ Str::limit($item->title, 50) }}
                                            ​</p>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                               
                        </div>
                       
                        @foreach($category->slice(2) as $item)
                            <a href="{{ route('home.detail',$item->id) }}" class="list_box_item">
                                <div class="list_box_item--img">
                                    <img src="{{ url('news/'.$item->img) }}" alt="">
                                </div>
                                <div class="list_box_item--txt">
                                    <span> {{ Str::limit($item->title, 50) }}</span>
                                    <p><span>ថ្ងៃនេះ ម៉ោង 12:11</span></p>
                                    <p> {{ Str::limit($item->des, 50) }}</p>
                                </div>
                            </a>
                   
                        @endforeach
                    </div>
                    @endif
                </div>
                <!-- This IS ADS -->
                <div class="ads">
                    <a href="" class="ads_box">
                        <img src="{{ url('front-end/img/ads1.jpg') }}" alt="">
                    </a>
                    <a href="" class="ads_box">
                        <img src="{{ url('front-end/img/ads2.gif') }}" alt="">
                    </a>
                    <a href="" class="ads_box2">
                        <img src="{{ url('front-end/img/adsBig.jpg') }}" alt="">
                    </a>
                    <div class="ads_news">
                        <h2 class="ads_news_title">អត្ថបទពេញនិយម</h2>
                        <p class="ads_news_hr"></p>
                        <div class="ads_news_box">
                            <a href="" class="ads_news_box_img">
                                <img src="img/post1-0.jpg" alt="">
                            </a>
                            <a href="" class="ads_news_box_txt">
                                BTS នៅតែកាងតំណែងកំពូលប៉ែកក្រុមបុរសល្បី ស្របពេល NewJeans កាន់តែខ្លាំងផ្នែកនារី
                            </a>
                        </div>
                        <div class="ads_news_box">
                            <a href="" class="ads_news_box_img">
                                <img src="img/post1-0.jpg" alt="">
                            </a>
                            <a href="" class="ads_news_box_txt">
                                BTS នៅតែកាងតំណែងកំពូលប៉ែកក្រុមបុរសល្បី ស្របពេល NewJeans កាន់តែខ្លាំងផ្នែកនារី
                            </a>
                        </div>
                        <div class="ads_news_box">
                            <a href="" class="ads_news_box_img">
                                <img src="img/post1-0.jpg" alt="">
                            </a>
                            <a href="" class="ads_news_box_txt">
                                BTS នៅតែកាងតំណែងកំពូលប៉ែកក្រុមបុរសល្បី ស្របពេល NewJeans កាន់តែខ្លាំងផ្នែកនារី
                            </a>
                        </div>
                        <div class="ads_news_box">
                            <a href="" class="ads_news_box_img">
                                <img src="img/post1-0.jpg" alt="">
                            </a>
                            <a href="" class="ads_news_box_txt">
                                BTS នៅតែកាងតំណែងកំពូលប៉ែកក្រុមបុរសល្បី ស្របពេល NewJeans កាន់តែខ្លាំងផ្នែកនារី
                            </a>
                        </div>
                    </div>
                    <div class="ads_news">
                        <h2 class="ads_news_title">អត្ថបទថ្មី</h2>
                        <p class="ads_news_hr"></p>
                        <div class="ads_news_box">
                            <a href="" class="ads_news_box_img">
                                <img src="img/post1-0.jpg" alt="">
                            </a>
                            <a href="" class="ads_news_box_txt">
                                BTS នៅតែកាងតំណែងកំពូលប៉ែកក្រុមបុរសល្បី ស្របពេល NewJeans កាន់តែខ្លាំងផ្នែកនារី
                            </a>
                        </div>
                        <div class="ads_news_box">
                            <a href="" class="ads_news_box_img">
                                <img src="img/post1-0.jpg" alt="">
                            </a>
                            <a href="" class="ads_news_box_txt">
                                BTS នៅតែកាងតំណែងកំពូលប៉ែកក្រុមបុរសល្បី ស្របពេល NewJeans កាន់តែខ្លាំងផ្នែកនារី
                            </a>
                        </div>
                        <div class="ads_news_box">
                            <a href="" class="ads_news_box_img">
                                <img src="img/post1-0.jpg" alt="">
                            </a>
                            <a href="" class="ads_news_box_txt">
                                BTS នៅតែកាងតំណែងកំពូលប៉ែកក្រុមបុរសល្បី ស្របពេល NewJeans កាន់តែខ្លាំងផ្នែកនារី
                            </a>
                        </div>
                        <div class="ads_news_box">
                            <a href="" class="ads_news_box_img">
                                <img src="img/post1-0.jpg" alt="">
                            </a>
                            <a href="" class="ads_news_box_txt">
                                BTS នៅតែកាងតំណែងកំពូលប៉ែកក្រុមបុរសល្បី ស្របពេល NewJeans កាន់តែខ្លាំងផ្នែកនារី
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
