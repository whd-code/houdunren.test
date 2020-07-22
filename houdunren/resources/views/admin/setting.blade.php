@extends('layout/admin')

@section('content')
<div class="{{Route_class()}} ">
    <section class="mt-3 mb-5">

        <h6 class="bl-5 pl-3">应用扩展</h6>
        <div class="d-flex ">

            <a href="{{route('admin.modules.index')}}" class="system-menu p-3 mt-3 d-flex flex-column justify-content-center align-items-center mr-3">
                <i class="fa fa-thumbs-o-up " aria-hidden="true"></i>
                <span>模块</span>
        </a>


        </div>
    </section>

    <section class=" mb-5">

        <h6 class="bl-5 pl-3">用户管理</h6>
        <div class="d-flex ">

            <div class="system-menu p-3 mt-3 d-flex flex-column justify-content-center align-items-center mr-3">
                <i class="fa fa-thumbs-o-up " aria-hidden="true"></i>
                <span>我的账号</span>
            </div>
            <a href="{{route('admin.group.index')}}" 
            class="system-menu p-3 mt-3 d-flex flex-column justify-content-center align-items-center mr-3">
                <i class="fa fa-thumbs-o-up " aria-hidden="true"></i>
                <span>用户管理</span>
            </a>
            <a href="{{route('admin.package.index')}}" class="system-menu p-3 mt-3 d-flex flex-column justify-content-center align-items-center mr-3">
                <i class="fa fa-thumbs-o-up " aria-hidden="true"></i>
                <span>服务套餐</span>
            </a>
        </div>
        </section>
<section class=" mb-5">

<h6 class="bl-5 pl-3">系统管理</h6>
<div class="d-flex ">

<div class="system-menu p-3 mt-3 d-flex flex-column justify-content-center align-items-center mr-3">
    <i class="fa fa-thumbs-o-up " aria-hidden="true"></i>
    <span>站点列表</span>
</div>
<div class="system-menu p-3 mt-3 d-flex flex-column justify-content-center align-items-center mr-3">
    <i class="fa fa-thumbs-o-up " aria-hidden="true"></i>
    <span>系统配置</span>
</div>
</div>
</section>
</div>
@endsection
