<form id="{{$id}}" class="{{$class}}" action="{{$action}}" @if(in_array($method, ['get', 'post'])) {!! 'method="'.$method.'"' !!} @else method="post" @endif @if($isWithFile) enctype="multipart/form-data" @endif>
    @if($method !== 'get')
        @csrf

    @endif
    @if(!in_array($method, ['get', 'post']))
        @method(strtoupper($method))
    @endif

    {{$slot}}
</form>
