@extends('layouts.admin_layout')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Thêm sản phẩm</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Blank Page</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content"> 
            <div class="card">
                <div class="card-header">{{ __('Thêm sản phẩm') }}</div>
                <div class="card-body" >
                    <form method="POST" action="{{ route('createproduct') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="tensanpham" class="col-md-4 col-form-label text-md-end">{{ __('Tên sản phẩm:') }}</label>

                            <div class="col-md-6">
                                <input id="tensanpham" type="text" class="form-control @error('tensanpham') is-invalid @enderror" name="tensanpham" value="{{ old('tensanpham') }}" required autocomplete="tensanpham" autofocus>

                                @error('tensanpham')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="giamoi" class="col-md-4 col-form-label text-md-end">{{ __('Giá mới:') }}</label>

                            <div class="col-md-6">
                                <input id="giamoi"  class="form-control @error('giamoi') is-invalid @enderror" name="giamoi" value="{{ old('giamoi') }}" required autocomplete="giamoi">

                                @error('giamoi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="giacu" class="col-md-4 col-form-label text-md-end">{{ __('Giá cũ:') }}</label>

                            <div class="col-md-6">
                                <input id="giacu"  class="form-control @error('giacu') is-invalid @enderror" name="giacu" value="{{ old('giacu') }}" required autocomplete="giacu">

                                @error('giacu')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="idloai" class="col-md-4 col-form-label text-md-end">{{ __('Loại sản phẩm:') }}</label>

                            <div class="col-md-6">
                                <select name="category" id="category" class="form-control">
                                    <option value="0">Loại sản phẩm</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id_loai_sp }}">{{ $category->tenloaisp }}</option>
                                        @endforeach
                                </select>
                                @error('idloai')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="hinhsanpham" class="col-md-4 col-form-label text-md-end">{{ __('Hình sản phẩm:') }}</label>

                            <div class="col-md-6">
                                <input id="hinhsanpham" type="file" class="form-control @error('hinhsanpham') is-invalid @enderror" name="hinhsanpham" value="{{ old('hinhsanpham') }}" required autocomplete="hinhsanpham">

                                @error('hinhsanpham')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="hinhsanqt" class="col-md-4 col-form-label text-md-end">{{ __('Hình quà tặng:') }}</label>

                            <div class="col-md-6">
                                <input id="hinhsanqt" type="text" class="form-control @error('hinhsanqt') is-invalid @enderror" name="hinhsanqt" value="{{ old('hinhsanqt') }}" required autocomplete="hinhsanqt">

                                @error('hinhsanqt')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="thongtinkm" class="col-md-4 col-form-label text-md-end">{{ __('Thông tin khuyến mãi:') }}</label>

                            <div class="col-md-6">
                                <input id="thongtinkm" type="text" class="form-control @error('thongtinkm') is-invalid @enderror" name="thongtinkm" value="{{ old('thongtinkm') }}" required autocomplete="thongtinkm">

                                @error('thongtinkm')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="soluong" class="col-md-4 col-form-label text-md-end">{{ __('Số lượng:') }}</label>

                            <div class="col-md-6">
                                <input id="soluong" type="number" class="form-control @error('soluong') is-invalid @enderror" name="soluong" value="{{ old('soluong') }}" required autocomplete="soluong">

                                @error('soluong')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="idnhom" class="col-md-4 col-form-label text-md-end">{{ __('Nhóm sản phẩm:') }}</label>

                            <div class="col-md-6">
                                <select name="group" id="group" class="form-control">
                                    <option value="0">Chọn nhóm sản phẩm</option>
                                    @foreach ($groups as $group)
                                        <option value="{{ $group->id_nhomsp }}">{{ $group->tennhom }}</option>
                                        @endforeach
                                </select>
                           
                                @error('idnhom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="ngaytao" class="col-md-4 col-form-label text-md-end">{{ __('Ngày tạo:') }}</label>

                            <div class="col-md-6">
                                <input id="ngaytao" type="datetime-local" class="form-control @error('ngaytao') is-invalid @enderror" name="ngaytao" value="{{ old('ngaytao') }}" required autocomplete="ngaytao">
                            
                                @error('ngaytao')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Thêm sản phẩm') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
       
  
</section>
@endsection