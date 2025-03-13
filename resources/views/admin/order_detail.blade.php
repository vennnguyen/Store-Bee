@extends('admin.main')
@section('content')
<div class="product-list">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Ảnh</th>
                <th>Tên Sản Phẩm </th>
                <th>Giá</th>
                <th>Số Lượng</th>
                <th>Thành Tiền</th>
            </tr>

        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td><img src="{{asset('backend/asset/img/ao-khoac-2-lop-casual-xanh-orion-blue_(13).webp')}}"
                        alt="áo khoác 2 lớp" width="70px"></td>
                <td>Áo Khoác 2 Lớp</td>
                <td>140,000</td>
                <td>2</td>

                <td>
                    280,000
                </td>
            </tr>
            <tr>
                <td colspan="4" style="font-weight: 700; padding: 10px;">TỔNG CỘNG</td>
                <td colspan="2" style="font-weight: 700;">280,000</td>
            </tr>
        </tbody>
    </table>
</div>

@endsection