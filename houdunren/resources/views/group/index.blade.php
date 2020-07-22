@extends('layout.admin');

@section('content')
    @include('group.nav_')
<div class="mt-3">
    <table class="table table-bordered shadow-sm">
        <thead>
            <tr>
                <th width="80">编号</th>
                <th width="300">用户组名称</th>
                <th>包含套餐</th>
                <th>包含模块</th>
                <th width="110">操作</th>
            </tr>

        </thead>
        <tbody>
             @foreach($groups as $group)
                <tr>
                    <td > {{$group['id']}}</td>
                    <td> {{$group['title']}}</td>
                    <td>
                      
                    </td>
                    <td>
                      
                    </td>
                    <td>
                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                    <a href="{{route('admin.group.edit',$group)}}" type="button" class="btn btn-info">编辑</a>
                    @if ($group['id']>1)
                        <btn-delete action="{{route('admin.group.destroy',$group)}}" title="删除"></btn-delete>
                    @endif
                    </div>

                    </td>
                </tr>

            @endforeach

        </tbody>
    </table>


</div>
@endsection


