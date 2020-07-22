<div>
    <div class="form-group">

                <label for="{{$attributes['name']}}">{{$attributes['title']}}</label>
                <input type="{{$attributes['type']}}" name="{{$attributes['name']}}" id="{{$attributes['name']}}"
                class="form-control {{$attributes['class']}}  @error($attributes['name']) is-invalid @enderror" placeholder="{{$attributes['placeholder']}}" 
                value="{{old($attributes['name'],$attributes['value']??'')}}" >
                @error($attributes['name'])

                    <small id="helpId" class=" form-text invalid-feedback"> {{$message}} </small>
                @enderror
    </div>
</div>
