@extends('layout.admin');

@section('content')
    @include('module.nav_')
<div class="card">
    <div class="card-header">
       已安装的模块列表
    </div>
    <div class="card-body">
        @foreach($modules as $module)
            <section class="d-flex mt-3 border-bottom pb-3 align-items-center">
                <div class="mr-5" style="width:50px;height:50px;">

                    <img src="/modules/{{$module['name']}}/static/preview.jpg" alt="" style="height:100%;" >
                </div>
                <div class="flex-fill">
                    <strong>
                        {{$module['title']}}
                    </strong>
                    {{$module['description']}}
                    <br/>
                    标识：{{$module['name']}}   | 版本号{{$module['versions']}}

                </div>
                <div>
                    @if($module['isinstaller'])
                     <btn-delete action="{{route('admin.modules.uninstall',$module['name'])}}" title="卸载"></btn-delete>
                    @else
                    <a href="{{route('admin.modules.install', $module['name'])}}" class="btn btn-primary">安装</a>
                    @endif
                </div>
            </section>
        @endforeach

    </div>

</div>
@endsection


