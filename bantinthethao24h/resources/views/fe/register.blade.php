@extends('fe.index')

@section('title', 'Đăng Kí')

@section('main')
<section class="section pb-0 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <form method="POST" action="">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nhập Emai:</label>
                        <input type="email" name="email" class="form-control" placeholder="Email...."
                            required>
                    </div>
                    <div class="form-group">
                        <label for="name">Full Name:</label>
                        <input type="text" name="name" class="form-control" placeholder="Full Name...."
                            required>
                    </div>
                    <div class="form-group">
                        <label for="email">Nhập Mật Khẩu</label>
                        <input type="text" name="password" class="form-control"
                            placeholder="Mật Khẩu...." required>
                    </div>
                    <div class="form-group">
                        <label for="email">Xác Nhận Mật Khẩu</label>
                        <input type="text" class="form-control"
                            placeholder="Xác Nhận Mật Khẩu...." required>
                    </div>
                    <button type="submit" class="btn btn-primary">Đăng Ký</button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection