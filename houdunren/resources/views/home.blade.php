@if(Auth::check())
{{user_info()->name}}
{{user_info()->email}}


@endif
<a href="{{route('admin.index')}}" class="btn">
<button>登录</button></a>
