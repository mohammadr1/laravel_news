@extends('customer.layouts.master-one-col')

@section('head-tag')

@endsection

@section('content')


<div class="row">
                <!-- بخش اسلایدر -->
                <div class="col-md-8" style="max-width: 800px;">
                    <div id="myCarousel" class="carousel slide shadow" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets/img/slider.jpg" class="d-block w-100" alt="..." loading="lazy"
                                    width="800" height="400">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/slider1.jpg" class="d-block w-100" alt="..." loading="lazy"
                                    width="800" height="400">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/slider.jpg" class="d-block w-100" alt="..." loading="lazy"
                                    width="800" height="400">
                            </div>
                        </div>

                        <!-- دکمه‌های کنترل -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">قبلی</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">بعدی</span>
                        </button>
                    </div>
                </div>

                <div class="col-md-4 shadow rounded" style="max-width: 800px; height: 400px;">
                    <!-- <h2 class="text-center border-bottom pb-3">آخرین اخبار</h2> -->

                    <!-- خبر اول -->
                    <div class="news-card row align-items-center shadow-sm rounded-3 p-1 pt-4">
                        <div class="col-md-4">
                            <img src="assets/img/leftslider1.jpg" class="img-fluid rounded shadow" alt="تصویر خبر">
                        </div>
                        <div class="col-md-8">
                            <div class="news-content">
                                <span class="badge bg-danger mb-2">فوری</span>
                                <h6 class="news-title">عنوان خبر اینجا قرار می‌گیرد</h6>

                                <div class="news-meta mt-3">
                                    <span class="news-date text-muted">
                                        <i class="far fa-clock me-1"></i> ۱۴۰۳/۰۵/۲۵
                                    </span>
                                    <span class="news-author text-muted ms-3">
                                        <i class="far fa-user me-1"></i> نویسنده: علی محمدی
                                    </span>
                                </div>
                                <a href="#" class="btn btn-sm btn-outline-primary mt-3">مشاهده کامل خبر</a>
                            </div>
                        </div>
                    </div>

                    <!-- خبر دوم -->
                    <div class="news-card row align-items-center shadow-sm rounded-3 p-1 pt-4">
                        <div class="col-md-4">
                            <img src="assets/img/leftslider1.jpg" class="img-fluid rounded shadow" alt="تصویر خبر">
                        </div>
                        <div class="col-md-8">
                            <div class="news-content">
                                <span class="badge bg-danger mb-2">فوری</span>
                                <h6 class="news-title">عنوان خبر اینجا قرار می‌گیرد</h6>
                                <div class="news-meta mt-3">
                                    <span class="news-date text-muted">
                                        <i class="far fa-clock me-1"></i> ۱۴۰۳/۰۵/۲۵
                                    </span>
                                    <span class="news-author text-muted ms-3">
                                        <i class="far fa-user me-1"></i> نویسنده: علی محمدی
                                    </span>
                                </div>
                                <a href="#" class="btn btn-sm btn-outline-primary mt-3">مشاهده کامل خبر</a>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="text-center mt-4">
              <a href="#" class="btn btn-primary px-4">
                <i class="fas fa-list me-2"></i>مشاهده همه اخبار
              </a>
            </div> -->
                </div>
            </div>

            <div class="row">
                <div class="col-md-8 shadow rounded" style="max-width: 800px; height: auto;">
                    <!-- <h2 class="text-center border-bottom pb-3">آخرین اخبار</h2> -->
                    <h3 class="text-right mb-4 p-2"><i class="fas fa-newspaper me-2"></i>آخرین اخبار</h3>

                    <!-- خبر اول -->
                    <div class="news-card row align-items-center shadow-sm rounded-3 p-1">
                        <div class="col-md-4">
                            <img src="assets/img/leftslider1.jpg" class="img-fluid rounded shadow" alt="تصویر خبر">
                        </div>
                        <div class="col-md-8">
                            <div class="news-content">
                                <span class="badge bg-danger mb-2">فوری</span>
                                <h6 class="news-title">عنوان خبر اینجا قرار می‌گیرد</h6>

                                <div class="news-meta mt-3">
                                    <span class="news-date text-muted">
                                        <i class="far fa-clock me-1"></i> ۱۴۰۳/۰۵/۲۵
                                    </span>
                                    <span class="news-author text-muted ms-3">
                                        <i class="far fa-user me-1"></i> نویسنده: علی محمدی
                                    </span>
                                </div>
                                <a href="#" class="btn btn-sm btn-outline-primary mt-3">مشاهده کامل خبر</a>
                            </div>
                        </div>
                    </div>

                    <!-- خبر دوم -->
                    <div class="news-card row align-items-center shadow-sm rounded-3 p-1">
                        <div class="col-md-4">
                            <img src="assets/img/leftslider1.jpg" class="img-fluid rounded shadow" alt="تصویر خبر">
                        </div>
                        <div class="col-md-8">
                            <div class="news-content">
                                <span class="badge bg-danger mb-2">فوری</span>
                                <h6 class="news-title">عنوان خبر اینجا قرار می‌گیرد</h6>
                                <div class="news-meta mt-3">
                                    <span class="news-date text-muted">
                                        <i class="far fa-clock me-1"></i> ۱۴۰۳/۰۵/۲۵
                                    </span>
                                    <span class="news-author text-muted ms-3">
                                        <i class="far fa-user me-1"></i> نویسنده: علی محمدی
                                    </span>
                                </div>
                                <a href="#" class="btn btn-sm btn-outline-primary mt-3">مشاهده کامل خبر</a>
                            </div>
                        </div>
                    </div>

                    <!-- خبر سوم -->
                    <div class="news-card row align-items-center shadow-sm rounded-3 p-1">
                        <div class="col-md-4">
                            <img src="assets/img/leftslider1.jpg" class="img-fluid rounded shadow" alt="تصویر خبر">
                        </div>
                        <div class="col-md-8">
                            <div class="news-content">
                                <span class="badge bg-danger mb-2">فوری</span>
                                <h6 class="news-title">عنوان خبر اینجا قرار می‌گیرد</h6>
                                <div class="news-meta mt-3">
                                    <span class="news-date text-muted">
                                        <i class="far fa-clock me-1"></i> ۱۴۰۳/۰۵/۲۵
                                    </span>
                                    <span class="news-author text-muted ms-3">
                                        <i class="far fa-user me-1"></i> نویسنده: علی محمدی
                                    </span>
                                </div>
                                <a href="#" class="btn btn-sm btn-outline-primary mt-3">مشاهده کامل خبر</a>
                            </div>
                        </div>
                    </div>

                    <!-- خبر چهارم -->
                    <div class="news-card row align-items-center shadow-sm rounded-3 p-1">
                        <div class="col-md-4">
                            <img src="assets/img/leftslider1.jpg" class="img-fluid rounded shadow" alt="تصویر خبر">
                        </div>
                        <div class="col-md-8">
                            <div class="news-content">
                                <span class="badge bg-danger mb-2">فوری</span>
                                <h6 class="news-title">عنوان خبر اینجا قرار می‌گیرد</h6>
                                <div class="news-meta mt-3">
                                    <span class="news-date text-muted">
                                        <i class="far fa-clock me-1"></i> ۱۴۰۳/۰۵/۲۵
                                    </span>
                                    <span class="news-author text-muted ms-3">
                                        <i class="far fa-user me-1"></i> نویسنده: علی محمدی
                                    </span>
                                </div>
                                <a href="#" class="btn btn-sm btn-outline-primary mt-3">مشاهده کامل خبر</a>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="text-center mt-4">
              <a href="#" class="btn btn-primary px-4">
                <i class="fas fa-list me-2"></i>مشاهده همه اخبار
              </a>
            </div> -->
                </div>

                <div class="col-md-4 shadow rounded" style="max-width: 800px; height: auto;">

                </div>

            </div>

            <style>
                /* .news-box {
          background-color: #fff;
          border: 1px solid #eee;
          transition: all 0.3s;
        }

        .hover-shadow:hover {
          box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
          transform: translateY(-2px);
        } */

                .news-title {
                    color: #2c3e50;
                    font-weight: bold;
                }

                /* .news-text {
          color: #7f8c8d;
          font-size: 0.9rem;
        } */

                .news-date {
                    color: #95a5a6;
                    font-size: 0.8rem;
                }

                .news-card {
                    margin-bottom: 1rem;
                }

                /* .sidebar-news {
          max-height: 600px;
          overflow-y: auto;
        } */

            </style>


@endsection