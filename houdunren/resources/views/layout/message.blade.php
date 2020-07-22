@foreach(['danger','info','success'] as $item)
@if(session()->has($item))
<div class="alert alert-{{$item}}" role="alert">
               {{session($item)}}
            </div>
 @endif
@endforeach
