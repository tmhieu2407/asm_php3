@extends('admin.master')

@section('title', 'Thêm Mới Người Dùng')

@section('title-page', 'Thêm Mới Người Dùng')

@section('main-content')
    <!-- Main content -->
    <section class="container">

        <!-- Default box -->
        <div class="col-md-5">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Thêm mới Người Dùng</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="POST" action="{{ route('user.store') }}">
                    @csrf
                    <div class="box-body">
                        <div class="form-group @error('name') has-error @enderror">
                            <label for="name">Tên Người Dùng</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                            @error('name')
                                <span class="help-block">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group @error('email') has-error @enderror">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                            @error('email')
                                <span class="help-block">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group @error('password') has-error @enderror">
                            <label for="password">Mật Khẩu</label>
                            <input type="password" class="form-control" id="password" name="password">
                            @error('password')
                                <span class="help-block">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group @error('password_confirmation') has-error @enderror">
                            <label for="password_confirmation">Xác Nhận Mật Khẩu</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                            @error('password_confirmation')
                                <span class="help-block">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group @error('role') has-error @enderror">
                            <label for="role">Chọn Vai Trò</label>
                            <select name="role" id="role" class="form-control">
                                <option value="0" {{ old('role') == 0 ? 'selected' : '' }}>User</option>
                                <option value="1" {{ old('role') == 1 ? 'selected' : '' }}>Admin</option>
                            </select>
                            @error('role')
                                <span class="help-block">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- <div class="form-group @error('status') has-error @enderror">
                            <label for="status">Chọn Trạng Thái</label>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="status" value="1" {{ old('status', '1') == '1' ? 'checked' : '' }}>
                                    Hoạt động
                                </label>
                                <label>
                                    <input type="radio" name="status" value="0" {{ old('status') == '0' ? 'checked' : '' }}>
                                    Ngừng hoạt động
                                </label>
                            </div>
                            @error('status')
                                <span class="help-block">{{ $message }}</span>
                            @enderror
                        </div> --}}
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Thêm Mới</button>
                    </div>
                </form>
            </div>
            <!-- /.box -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
@endsection
