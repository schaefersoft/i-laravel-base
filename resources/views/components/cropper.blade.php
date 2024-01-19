<div>
    <div
        class="row cropper-container"
        data-aspect-ratio="{{$aspectRatio}}"
        data-upload-path="{{\Illuminate\Support\Facades\Crypt::encryptString($uploadFolderPath)}}"
        data-action-type="{{$actionType}}"
        data-action-target="{{$actionTarget}}"
        data-is-single="{{$isSingle}}"
        data-action-model="{{\Illuminate\Support\Facades\Crypt::encryptString($actionModel)}}"
        data-action-model-id="{{\Illuminate\Support\Facades\Crypt::encryptString($actionModelId)}}"
        data-action-model-relation="{{\Illuminate\Support\Facades\Crypt::encryptString($actionModelRelation)}}"
        data-action-remove-old="{{$actionRemoveOld}}"
    >
        <div class="col-md-6">
            <h3>Aktuelle Bilder</h3>
            <div class="row">
                @if($isSingle)
                    <img src="{{ $oldImages[0] }}" alt="cropper-preview" class="img-fluid cropper-image-single"/>
                @else
                    @foreach($oldImages as $oldImage)
                        <div class="col-md-2">
                            <img src="{{ $oldImage }}" alt="cropper-preview" class="img-fluid"/>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <h3>New Image</h3>
            <hr class="my-2"/>
            <div class="d-flex justify-content-between">
                <button type="button" class="btn btn-primary cropper_new_file_btn">Neues Bild hochladen</button>
                <button type="button" class="btn btn-primary cropper_save_btn d-none">Bild speichern</button>
                <button type="button" class="btn btn-danger cropper_reset_btn d-none">Cropper Reset</button>
            </div>
            <hr class="my-2"/>
            <input type="file" name="{{$name}}" class="d-none cropper_file_input"/>
            <div class="container">
                <img src="" class="cropper-box d-none " alt="cropperimage"/>
            </div>
        </div>
    </div>
</div>
