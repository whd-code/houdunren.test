<nav class="nav nav-tabs nav-stacked">
    <a class="nav-link active" href="{{route('admin.setting')}}">
        <i class="fa fa-home " aria-hidden="true"></i>

    </a>

    <a class="nav-link {{Route::currentRouteName()=='admin.modules.index' ? 'active' :''}}" href="{{route('admin.modules.index')}}">模块列表</a>

    @if(if_route('admin.modules.edit'))
    <a class="nav-link acrive" href="{{route('admin.modules.create')}}">编辑模块 </a>
    @endif

</nav>
