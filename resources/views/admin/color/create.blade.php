
@extends('layout.admin')

@section('content')
<div class="content-wrapper">
      <section class="content-header">
        <h1>
          Thêm mới color <a href="" class="btn btn-primary">Danh sách sản phẩm</a>
        </h1>
      </section>
      <section class="content">

        <div class="row container-fluid">
          <div class="col-md-11">
            <div class="box box-primary">
              <form role="form" method="post" action="{{ route('colors.store')}}" enctype="multipart/form-data">
              @csrf
                <div class="box-body">
                  <div class="form-group">
                    <label for="">id</label>
                    <input type="text" class="form-control" placeholder="" disabled>
                  </div>
                  <div class="form-group">
                    <label for="">Tên color</label>
                    <input type="color" class="form-control" placeholder="Nhập tên color" name="name">
                  </div>
                <div class="box-footer">
                  <button type="submit" name="createColor" class="btn btn-primary">Thêm mới color</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
    </div>


    

    {{-- <button type="button" id="addVariantBtn" class="btn btn-secondary">Thêm biến thể</button> --}}

@endsection
