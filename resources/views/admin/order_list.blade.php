@extends('admin.main')
@section('content')
<div class="order-list">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên</th>
                <th>Phone </th>
                <th>Email</th>
                <th>Địa chỉ</th>
                <th>Chi Tiết</th>
                <th>Ngày Đăng</th>
                <th>Trạng Thái</th>
                <th>Khác</th>
            </tr>

        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Nguyễn Ngọc Anh Tuấn</td>
                <td>0869547255</td>
                <td>tuan100205@gmail.com</td>
                <td>142/12 Hiệp Thành 43, Quận 12, TPHCM</td>
                <td><a href="/admin/order_detail" class="edit">Chi Tiết</a></td>
                <td>7/3/2025</td>
                <td><a href="" class="confirm">Đã Xác Nhận</a></td>
                <td>
                    <a href="" class="delete">Xóa</a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Nguyễn Anh Tuấn</td>
                <td>0869547255</td>
                <td>tuan100205@gmail.com</td>
                <td>142/12 Hiệp Thành 43, Quận 12, TPHCM</td>
                <td><a href="/admin/order_detail" class="edit">Chi Tiết</a></td>
                <td>7/3/2025</td>
                <td><a href="" class="unconfirm">Chưa Xác Nhận</a></td>
                <td>
                    <a href="" class="delete">Xóa</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

@endsection