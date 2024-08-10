@extends('admin.master')

@section('title', 'Chi Tiết Người Dùng')

@section('title-page', 'Chi Tiết Người Dùng')

@section('main-content')
    <section class="container">
        <div class="col-md-5">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Thông Tin Người Dùng: {{ $user->name }}</h3>
                </div>
                <div class="box-body">
                    <p><strong>Tên Người Dùng:</strong> {{ $user->name }}</p>
                    <p><strong>Email:</strong> {{ $user->email }}</p>
                    <p><strong>Vai Trò:</strong> {{ $user->role == 1 ? 'Admin' : 'User' }}</p>
                    {{-- <p><strong>Trạng Thái:</strong> {{ $user->status == 1 ? 'Hoạt động' : 'Ngừng hoạt động' }}</p> --}}
                    <p><strong>Ngày Tạo:</strong> {{ $user->created_at }}</p>
                    <p><strong>Ngày Cập Nhật:</strong> {{ $user->updated_at }}</p>
                </div>
                <div class="box-footer">
                    <a href="{{ route('user.index') }}" class="btn btn-default">Trở Lại</a>

                    <a href="{{ route('user.edit', $user) }}" class="btn btn-primary"><i class="fa fa-pencil"> Update</i></a>

                </div>
            </div>
        </div>
    </section>
@endsection
