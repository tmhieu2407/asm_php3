@extends('admin.master')

@section('title', 'Trang Chủ')



@section('main-content')
    <section class="content">

        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <div class="small-box btn btn-info">
                    <div class="inner">
                        <h3>{{ $userCount }}</h3>
                        <p>Tài khoản</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="{{ route('user.index') }}" class="small-box-footer">More info <i
                            class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>


            <div class="col-lg-3 col-xs-6">

                <div class="small-box btn btn-success">
                    <div class="inner">
                        <h3>{{ $categoryCount }}</h3>
                        <p>Loại Tin</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="{{ route('category.index') }}" class="small-box-footer">More info <i
                            class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-xs-6">

                <div class="small-box btn btn-warning">
                    <div class="inner">
                        <h3>{{ $productCount }}</h3>
                        <p>Bài Viết</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="{{ route('product.index') }}" class="small-box-footer">More info <i
                            class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-xs-6">

                <div class="small-box btn btn-danger">
                    <div class="inner">
                        <h3>{{ $contactCount }}</h3>
                        <p>Liên Hệ</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="{{ route('contact.index') }}" class="small-box-footer">More info <i
                            class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>

            {{-- <div class="col-lg-3 col-xs-6">

            <div class="small-box bg-red">
                <div class="inner">
                    <h3>65</h3>
                    <p>Unique Visitors</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div> --}}

        </div>

    </section>
@endsection
