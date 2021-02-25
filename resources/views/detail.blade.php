@extends('layout')
@section('infomation')
<style>
    #show
    {
        width: 100%;
        height: 1000px;
    }
</style>
<div id="show">
    <ul>
        <li>TÊN SÃN PHẨM:{{$pd->name}}</li>
        <li>DUNG LƯỢNG PIN(mAH):{{$pd->battery}}</li>
        <li>GIÁ SẢN PHẨM:{{$pd->price}} VNĐ</li>
    </ul>
</div>
@endsection
