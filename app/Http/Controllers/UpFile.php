<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dienthoai;
class UpFile extends Controller
{
    public function up(Request $req){
        //lấy dữ liệu từ form
        $name = $req->name;
        $file = $req->file;
        //thêm dữ liệu vào database
        $pd = new dienthoai();
        echo $count;
        $pd->name = $name;
        $pd->image = $file->getClientOriginalName();
        $pd->save();
        //di chuyển file vào thư mục ảnh nếu có up ảnh
        $file->move('images/product', $file->getClientOriginalName());
        echo "Đã Thêm Thành Công";
    }

}
