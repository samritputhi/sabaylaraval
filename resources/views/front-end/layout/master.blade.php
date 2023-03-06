<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Koulen&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bayon&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('front-end/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('front-end/css/list.css') }}">
    <link rel="stylesheet" href="{{ url('front-end/css/detail.css') }}">
</head>
<body>
    <?php
        $categories = \App\Models\Category::where('status',1)->orderBy('order',"DESC")->get();
    ?>
    <!-- this is header -->
    <div class="container-logo">
        <div class="header">
            <div class="header_logo">
                <img src="{{ url('front-end/img/logo.png') }}" alt="">
            </div>
            <div class="header_ads">
                <img src="{{ url('front-end/img/ads_header.jpg') }}" alt="">
            </div>
        </div>
    </div>
    <!-- this is menu -->
    <div class="container-menu">
        <div class="menu">
            <ul>
                <li>
                    <a href="{{ route('home.index') }}">Home</a>
                </li>
                @foreach($categories as $item)
                <li>
                    <a href="{{ route('home.category',$item->id) }}">{{$item->title}}</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
        @yield('content')
    <!-- this is footer -->
    <div class="footer">
        <div class="footer__big">
            <div class="footer__big__box1">
                <div class="footer__big__box1__img">
                    <img src="{{ url('front-end/img/footer1.png') }}" alt="">
                </div>
                <p>© រក្សា​សិទ្ធិ​គ្រប់​យ៉ាង​ដោយ​ Sabay ឆ្នាំ​២០១៦</p>
                <p>
                    <a href="">
                        គោលការណ៍​ភាព​ឯកជន | Privacy Policy
                    </a>
                </p>
                <p>
                    <strong>
                        អាសយដ្ឋាន
                    </strong>
                    <br>
                    អគារ​លេខ ៣០៨ មហាវិថីព្រះមុន្នីវង្ស
                    <br>
                    សង្កាត់បឹងរាំង ខណ្ឌដូនពេញ
                </p>
            </div>
            <div class="footer__big__box2">
                <div class="footer__big__box2__title">
                    <strong>អំពីយើង</strong>
                </div>
                <p>
                    Sabay Digital Corporation ជា​ក្រុមហ៊ុន​ព័ត៌មាន​ឌីជីថល និង​កម្សាន្ត​ឈាន​មុខ​គេ​នៅ​កម្ពុជា។
                    <a href="">ព័ត៌មាន​បន្ថែម</a>
                </p>
                <p>ផលិត​ផល​ និង​ សេវាកម្ម របស់ Sabay</p>
                <ul>
                    <li>
                        <a href="">
                            <img src="{{ url('front-end/img/logo.png') }}" alt="">
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footer__big__box3">
                <div class="footer__big__box3__title">
                    <strong>ជួបគ្នានៅបណ្តាញសង្គម</strong>
                </div>
                <p>
                    <strong>ទំនាក់ទំនង</strong>
                </p>
                <p>
                    <a href="">
                        info@sabay.com
                    </a>
                    <br>
                    023 228 000
                </p>
            </div>
        </div>
    </div>

</body>
</html>