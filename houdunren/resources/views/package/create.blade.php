@extends('layout.admin');

@section('content')
    @include('package.nav_')


    <form action="{{route('admin.package.store')}}" method="post">
    @csrf
    <div class="card mt-3">
        <div class="card-header">
          套餐资料
        </div>
        <div class="card-body">
           <x-form title="套餐名称" required name="title" class="col-12 col-md-6"></x-form>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
          可用模块
        </div>
        <div class="card-body">
            <module-select></module-select>
        </div>

    </div>
    <button class="btn btn-primary mt-3">提交</button>
</form>



@endsection

@push('js')
<script>
    window.modules=@json($modules)
</script>
@endpush


