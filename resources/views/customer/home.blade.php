@extends('customer.layouts.master-one-col')

@section('head-tag')

@endsection

@section('content')

<div class="row g-3 align-items-stretch">
    <!-- اسلایدر -->
    <div class="col-md-8">
        <div class="position-relative shadow rounded overflow-hidden" style="height: 350px;">
            <div id="myCarousel" class="carousel slide h-100" data-bs-ride="carousel">
                <div class="carousel-inner h-100">
                    @foreach($sliders as $index => $slider)
                    <div class="carousel-item h-100 @if($index === 0) active @endif">
                        <img src="{{ asset('storage/' . $slider->image) }}" class="d-block w-100 h-100" alt="{{ $slider->title }}" style="object-fit: cover;">
                        <div class="position-absolute bottom-0 w-100 p-3" style="
                            background-color: rgba(0,0,0,0.6);
                            color: white;
                            max-height: 45%;
                            overflow: auto;
                            font-size: 0.9rem;
                            direction: rtl;
                            border-top-left-radius: 10px;
                            border-top-right-radius: 10px;">
                            <h5 class="mb-2">{{ $slider->title }}</h5>
                            @if($slider->publish_date)
                                <p class="mb-1">{{ jdate($slider->publish_date)->format('j F Y') }}</p>
                            @endif
                            @if($slider->subtitle)
                                <p class="mb-0" style="word-wrap: break-word;">{{ $slider->subtitle }}</p>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- کنترل‌ها -->
                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                    <span class="visually-hidden">قبلی</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                    <span class="visually-hidden">بعدی</span>
                </button>
            </div>
        </div>
    </div>
    <!-- دو خبر کناری -->
    <div class="col-12 col-md-4">
        <div class="d-flex flex-column" style="height: 350px;">
            @for ($i = 0; $i < 2; $i++) <div class="news-card d-flex shadow-sm rounded bg-white mb-2"
                style="height: 50%; overflow: hidden;">
                <div class="w-50 p-2">
                    <img src="assets/img/leftslider1.jpg" class="img-fluid rounded w-100 h-100 object-fit-cover"
                        alt="خبر">
                </div>
                <div class="w-50 p-2 d-flex flex-column justify-content-between overflow-auto">
                    <div>
                        <span class="badge bg-danger mb-1">فوری</span>
                        <h6 class="news-title mb-1 small">عنوان خبر اینجا قرار می‌گیرد</h6>
                        <div class="news-meta small text-muted">
                            <span><i class="far fa-clock me-1"></i>۱۴۰۳/۰۵/۲۵</span><br>
                            <span><i class="far fa-user me-1"></i>علی محمدی</span>
                        </div>
                    </div>
                    <a href="#" class="btn btn-sm btn-outline-primary mt-1">مشاهده کامل خبر</a>
                </div>
        </div>
        @endfor
    </div>
</div>
</div>


<div class="row">
    <div class="col-md-8 shadow rounded" style="max-width: 800px; height: auto;">
        <!-- عنوان اخبار -->
        <h3 class="text-right mb-4 p-2"><i class="fas fa-newspaper me-2"></i>آخرین اخبار</h3>

        <!-- خبر اول -->
        <div class="news-card row align-items-center shadow-sm rounded-3 p-3 mb-4 bg-white">
            <div class="col-md-4">
                <img src="assets/img/leftslider1.jpg" class="img-fluid rounded-3 shadow-sm" alt="تصویر خبر">
            </div>
            <div class="col-md-8">
                <div class="news-content">
                    <span class="badge bg-danger mb-2">فوری</span>
                    <h5 class="news-title text-dark">عنوان خبر اینجا قرار می‌گیرد</h5>

                    <div class="news-meta mt-3">
                        <span class="news-date text-muted">
                            <i class="far fa-clock me-1"></i> ۱۴۰۳/۰۵/۲۵
                        </span>
                        <span class="news-author text-muted ms-3">
                            <i class="far fa-user me-1"></i> نویسنده: علی محمدی
                        </span>
                    </div>
                    <a href="#" class="btn btn-sm btn-primary mt-3">مشاهده کامل خبر</a>
                </div>
            </div>
        </div>

        <!-- خبر دوم -->
        <div class="news-card row align-items-center shadow-sm rounded-3 p-3 mb-4 bg-white">
            <div class="col-md-4">
                <img src="assets/img/leftslider1.jpg" class="img-fluid rounded-3 shadow-sm" alt="تصویر خبر">
            </div>
            <div class="col-md-8">
                <div class="news-content">
                    <span class="badge bg-danger mb-2">فوری</span>
                    <h5 class="news-title text-dark">عنوان خبر اینجا قرار می‌گیرد</h5>
                    <div class="news-meta mt-3">
                        <span class="news-date text-muted">
                            <i class="far fa-clock me-1"></i> ۱۴۰۳/۰۵/۲۵
                        </span>
                        <span class="news-author text-muted ms-3">
                            <i class="far fa-user me-1"></i> نویسنده: علی محمدی
                        </span>
                    </div>
                    <a href="#" class="btn btn-sm btn-primary mt-3">مشاهده کامل خبر</a>
                </div>
            </div>
        </div>

        <!-- خبر سوم -->
        <div class="news-card row align-items-center shadow-sm rounded-3 p-3 mb-4 bg-white">
            <div class="col-md-4">
                <img src="assets/img/leftslider1.jpg" class="img-fluid rounded-3 shadow-sm" alt="تصویر خبر">
            </div>
            <div class="col-md-8">
                <div class="news-content">
                    <span class="badge bg-danger mb-2">فوری</span>
                    <h5 class="news-title text-dark">عنوان خبر اینجا قرار می‌گیرد</h5>
                    <div class="news-meta mt-3">
                        <span class="news-date text-muted">
                            <i class="far fa-clock me-1"></i> ۱۴۰۳/۰۵/۲۵
                        </span>
                        <span class="news-author text-muted ms-3">
                            <i class="far fa-user me-1"></i> نویسنده: علی محمدی
                        </span>
                    </div>
                    <a href="#" class="btn btn-sm btn-primary mt-3">مشاهده کامل خبر</a>
                </div>
            </div>
        </div>

        <!-- خبر چهارم -->
        <div class="news-card row align-items-center shadow-sm rounded-3 p-3 mb-4 bg-white">
            <div class="col-md-4">
                <img src="assets/img/leftslider.jpg" class="img-fluid rounded-3 shadow-sm" alt="تصویر خبر">
            </div>
            <div class="col-md-8">
                <div class="news-content">
                    <span class="badge bg-danger mb-2">فوری</span>
                    <h5 class="news-title text-dark">عنوان خبر اینجا قرار می‌گیرد</h5>
                    <div class="news-meta mt-3">
                        <span class="news-date text-muted">
                            <i class="far fa-clock me-1"></i> ۱۴۰۳/۰۵/۲۵
                        </span>
                        <span class="news-author text-muted ms-3">
                            <i class="far fa-user me-1"></i> نویسنده: علی محمدی
                        </span>
                    </div>
                    <a href="#" class="btn btn-sm btn-primary mt-3">مشاهده کامل خبر</a>
                </div>
            </div>
        </div>
    </div>

    <!-- بخش کناری -->
    <div class="col-md-4 shadow rounded" style="max-width: 800px; height: auto;">
        <!-- اضافه کردن محتوا یا ویجت‌های دیگه اینجا -->
    </div>


</div>


<style>
    .news-title {
        font-size: 1rem;
        font-weight: bold;
        color: #2c3e50;
    }

    .news-meta span {
        font-size: 0.8rem;
    }

    .object-fit-cover {
        object-fit: cover;
    }

    @media (max-width: 576px) {
        .news-card h6 {
            font-size: 0.95rem;
        }

        .news-card .btn {
            font-size: 0.8rem;
            padding: 0.3rem 0.6rem;
        }

        .carousel-caption {
            font-size: 0.9rem;
            padding: 0.5rem;
        }
    }

</style>


@endsection
