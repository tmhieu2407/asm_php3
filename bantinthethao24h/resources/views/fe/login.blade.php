@extends('fe.index')

@section('title', 'Đăng Nhập')

@section('main')
<section class="section pb-0 mb-5">
    @if ($message = Session::get('error'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>{{$message}}</strong>
        </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="email">Nhập Email:</label>
                        <input type="email" name="email" class="form-control" placeholder="Email...." required>
                    </div>
                    <div class="form-group">
                        <label for="password">Nhập Mật Khẩu</label>
                        <input type="password" name="password" class="form-control" placeholder="Mật Khẩu...." required>
                    </div>
                    <button type="submit" class="btn btn-primary">Đăng Nhập</button>
                    <a href="" class="btn btn-primary">Forgot Password</a>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
