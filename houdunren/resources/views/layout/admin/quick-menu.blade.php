<div class="quick-menu d-flex justify-content-between align-items-center p-3 mt-5">
    <div class="logo">
        <img src="/images/logo.png" alt="">
    </div>
    <div class="menus d-flex">
        <a href="{{route('admin.index')}}" class="btn-light d-flex flex-column align-items-center rounded shadow ml-3">
            <i class="fa fa-thumbs-o-up " aria-hidden="true"></i>
           <span class=" mt-1">站点管理</span>
        </a>
        <a href="{{route('admin.setting')}}" class="btn-light d-flex flex-column align-items-center rounded shadow ml-3">
            <i class="fa fa-thumbs-o-up " aria-hidden="true"></i>
           <span class=" mt-1">系统设置</span>
        </a>
        <a href="{{route('logout')}}" class="btn-light d-flex flex-column align-items-center rounded shadow ml-3">
            <i class="fa fa-thumbs-o-up " aria-hidden="true"></i>
           <span class=" mt-1">退出</span>
        </a>

    </div>
</div>
