@extends('admin.main')
@section('content')
<div class="product-list">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Ảnh</th>
                <th>Tên Sản Phẩm </th>
                <th>Giá Bán</th>
                <th>Giá Giảm</th>
                <th>Ngày Đăng</th>
                <th>Tùy Chỉnh</th>
            </tr>

        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td><img src="{{asset('backend/asset/img/ao-khoac-2-lop-casual-xanh-orion-blue_(13).webp')}}"
                        alt="áo khoác 2 lớp" width="70px"></td>
                <td>Áo Khoác 2 Lớp</td>
                <td>200,000</td>
                <td>60,000</td>
                <td>2025-3-7 9:17:25</td>
                <td>
                    <a href="" class="delete">Sửa</a>
                    |
                    <a href="" class="edit">Xóa</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection