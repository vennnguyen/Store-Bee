@extends('admin.main')
@section("content")
<div class="product-add">
    <div class="content-left">
        <div class="content-two__input">
            <input type="text" placeholder="Tên Sản Phẩm">
            <input type="text" placeholder="Chất Liệu">
        </div>
        <div class="content-two__input">
            <input type="text" placeholder="Giá Bán">
            <input type="text" placeholder="Giá Giảm">
        </div>
        <textarea name="" id="editor">Đặc Điểm Nổi Bật</textarea>
        <textarea name="" id="editor" class="editor">Mô Tả Sản Phẩm</textarea>
        <button class="main-btn">Thêm Sản Phẩm</button>
    </div>
    <div class="content-right">
        <div class="content-right-img">
            <label for="file">Ảnh Đại Diện</label>
            <input type="file" id="file" hidden>
            <div class="img-show"></div>
        </div>
        <div class="content-right-imgs">
            <label for="files">Ảnh Sản Phẩm</label>
            <input type="file" id="files" hidden>
            <div class="imgs-show"></div>
        </div>
    </div>
</div>
@endsection