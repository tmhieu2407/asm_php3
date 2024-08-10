@extends('admin.master')

@section('title', 'Chỉnh Sửa Người Dùng')

@section('title-page', 'Chỉnh Sửa Người Dùng')

@section('main-content')
    <!-- Main content -->
    <section class="container">

        <!-- Default box -->
        <div class="col-md-5">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Chỉnh Sửa Người Dùng: {{ $user->name }}</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="{{ route('user.update', $user) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <input type="hidden" name="id" value="{{ $user->id }}">
                    <div class="box-body">
                        <div class="form-group @error('name') has-error @enderror">
                            <label for="name">Tên Người Dùng <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" id="name" name='name' value="{{ old('name') ? old('name') : $user->name }}" required>
                            @error('name')
                                <span class="help-block">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group @error('email') has-error @enderror">
                            <label for="email">Email <span style="color: red;">*</span></label>
                            <input type="email" class="form-control" id="email" name='email' value="{{ old('email') ? old('email') : $user->email }}" required>
                            @error('email')
                                <span class="help-block">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group @error('password') has-error @enderror">
                            <label for="password">Mật Khẩu <span style="color: red;">*</span></label>
                            <input type="password" class="form-control" id="password" name='password'>
                            @error('password')
                                <span class="help-block">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group @error('password_confirmation') has-error @enderror">
                            <label for="password_confirmation">Xác Nhận Mật Khẩu <span style="color: red;">*</span></label>
                            <input type="password" class="form-control" id="password_confirmation" name='password_confirmation'>
                            @error('password_confirmation')
                                <span class="help-block">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group @error('role') has-error @enderror">
                            <label for="role">Chọn Vai Trò <span style="color: red;">*</span></label>
                            <select name="role" id="role" class="form-control" required>
                                <option value="0" {{ old('role') == 0 || $user->role == 0 ? 'selected' : '' }}>User</option>
                                <option value="1" {{ old('role') == 1 || $user->role == 1 ? 'selected' : '' }}>Admin</option>
                            </select>
                            @error('role')
                                <span class="help-block">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- <div class="form-group">
                            <label for="status">Chọn trạng thái</label>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="status" value="1" {{ old('status', $user->status) == 1 ? 'checked' : '' }}>
                                    Hoạt động
                                </label>
                                <label>
                                    <input type="radio" name="status" value="0" {{ old('status', $user->status) == 0 ? 'checked' : '' }}>
                                    Ngừng hoạt động
                                </label>
                            </div>
                        </div> --}}
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Cập Nhật</button>
                    </div>
                </form>
            </div>
            <!-- /.box -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
@endsection
