@extends('layout.admin')

@section('content')
<div>
    <button class="btn btn-primary mb-3">
        <i class="fa fa-plus " aria-hidden="true"></i>添加站点
    </button>
    <div class="card mt-3 shadow">
        <div class="card-header d-flex justify-content-between">
            <div>
                套餐:
            </div>
            <div>
            <i class="fa fa-navicon " aria-hidden="true"></i>
            应用扩展
            </div>
        </div>
        <div class="card-body ">
        <i class="fa fa-rss fa-3x" aria-hidden="true"></i>
        <span class="h3">houdunren</span>
        </div>
        <div class="card-footer text-muted d-flex flex-column flex-sm-row justify-content-between">
            <div class="small">
                创建于2020/07/14
            </div>
            <div class="small">
                <a href="" class="text-muted ml-2">
                <i class="fa fa-rss " aria-hidden="true"></i>
                <span >访问首页</span>
                </a>
                <a href="" class="text-muted ml-2">
                <i class="fa fa-rss " aria-hidden="true"></i>
                <span >更新缓存</span>
                </a>
                <a href="" class="text-muted ml-2">
                <i class="fa fa-rss " aria-hidden="true"></i>
                <span >网站配置</span>
                </a>
                <a href="" class="text-muted ml-2">
                <i class="fa fa-rss " aria-hidden="true"></i>
                <span >微信公众号</span>
                </a>
                <a href="" class="text-muted ml-2">
                <i class="fa fa-rss " aria-hidden="true"></i>
                <span >用户列表</span>
                </a>
                <a href="" class="text-muted ml-2">
                <i class="fa fa-rss " aria-hidden="true"></i>
                <span >操作员设置</span>
                </a>
                <a href="" class="text-muted ml-2">
                <i class="fa fa-rss " aria-hidden="true"></i>
                <span >编辑</span>
                </a>
                <a href="" class="text-muted ml-2">
                <i class="fa fa-rss " aria-hidden="true"></i>
                <span >删除</span>
                </a>
            </div>
        </div>
    </div>


</div>
@endsection
