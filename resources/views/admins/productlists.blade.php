@extends('layouts.admin_layout')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Quản Lý Sản Phẩm</h1>
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
<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <form class="form-inline ml-3">
            </form>
          
                <div class="header-search" style="max-width:300px;">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Tìm kiếm sản phẩm..." aria-label="Search" name="searching" id="searching">
                        <div class="input-group-append">
                            <button style="background:grey" class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>

                </div>
           

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
           
            
            <a style="margin-bottom:20px;" class="btn btn-primary" href="{{ route('createproduct')}}">
                Create
            </a>           
            <table class="table">
                <tr>
                    <th>
                       Tên sản phẩm   </th>
                    <th>
                      Giá Cũ
                    </th>
                    <th>  Giá Mới
                    </th>
                  
                    <th>
                        Hình sản phẩm     
                    </th>    
                    <th>
                        Hành động      
                    </tr>
                 @foreach ($products as $product)
                
                    <tr>
                        <td>{{$product->ten_sanpham}}</td>

                        <td>{{$product->gia_cu}}₫</td>

                        <td>{{$product->gia_moi}}₫</td>
                        
                        <td>
                            <img src="{{ asset('public/backend/images/'.$product->hinh_sanpham) }}" alt="" style="width: 100px; height: 100px;">
                        </td>

                        <td>
                            <a class="btn btn-danger" href="@Url.Action("Edit", "Crud", new { id = item.id_sanpham})">Edit</a>
                            <a class="btn btn-success" href="@Url.Action("Delete", "Crud", new { id = item.id_sanpham})">Delete</a>
                            <a class="btn btn-info" href="@Url.Action("Details", "Crud" , new { id = item.id_sanpham})">Detail</a>
                        </td>
                    </tr>
                @endforeach

            </table>
            {{ $products->links('pagination::bootstrap-4') }}
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            Footer
        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->

</section>
@endsection