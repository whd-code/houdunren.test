<nav class="nav nav-tabs nav-stacked">
    <a class="nav-link active" href="{{route('admin.setting')}}">
        <i class="fa fa-home " aria-hidden="true"></i>

    </a>

    <a class="nav-link {{active_class(if_route('admin.group.index'))}} " href="{{route('admin.group.index')}}">用户组列表</a>

    <a class="nav-link {{active_class(if_route('admin.group.create'))}} "
    href="{{route('admin.group.create')}}">添加用户组</a>
    @if(active_class(if_route('admin.group.edit')))
    <a class="nav-link {{active_class(if_route('admin.group.edit'))}}"
    href="#">编辑用户组</a>
    @endif

</nav>
