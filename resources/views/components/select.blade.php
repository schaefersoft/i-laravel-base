<div class="row mb-15px">
    <label class="form-label col-form-label col-md-2" for="{{$name}}">{{$label}}</label>
    <div class="col-md-10">
        <select name="{{$name}}" id="{{$name}}" @if($required) required @endif @if($multiple) multiple @endif
            class="
                form-select
                form-{{$type}}
                @if($type === "select2WithTags")
                    @if($multiple)
                        multiple-select2
                    @else
                        default-select2
                    @endif
                @endif
            ">
            {{$slot}}
        </select>
    </div>
</div>
