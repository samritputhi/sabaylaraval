@extends('front-end.layout.master')


@section('content')
<main>
        <div class="body">
            <!-- This is Content -->
            <div class="content">
                <div class="content_title">
                    <p>{{ $detail->title }}​</p>
                </div>
                <div class="content_date">
                    <p>
                       {{ $detail->created_at }}
                    </p>
                </div>
                <div class="content_post">
                    <div class="content_post_discription">
                        <p>
                            {{ $detail->des }}
                        </p>
                    </div>
                    <div class="content_post_box">
                        <img src="{{ url('news'.'/'.$detail->img) }}" alt="">
                    </div>
                </div>
            </div>
        </div>
   </main>
@endsection
