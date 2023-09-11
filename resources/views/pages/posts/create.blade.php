@extends('layouts.app')

@section('content')
    <div class="content-body">

        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Posts</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Create</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Add new post</h4>
                            <div class="basic-form">
                                <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Title:</label>
                                        <input type="text" class="form-control input-default" placeholder="Title"
                                            name="title" value="{{ old('title') }}">
                                        @error('title')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Thumbnail:</label>
                                        <input type="file" class="form-control" name="thumbnail" />
                                        
                                        @error('thumbnail')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Excerpt:</label>
                                            <textarea class="form-control h-150px" rows="6" id="excerpt" name="excerpt" >{{old('excerpt')}}</textarea>
                                            @error('excerpt')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Content:</label>
                                            <textarea class="form-control h-150px" rows="6" id="content" name="content">{{old('content')}}</textarea>
                                            @error('content')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Slug:</label>
                                        <input type="text" class="form-control input-default" placeholder="Slug" value="{{old('slug')}}"
                                            name="slug">
                                        @error('slug')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Date published:</label>
                                            <div class="input-group clockpicker" data-placement="bottom" data-align="top"
                                                data-autoclose="true">
                                                <input type="date" name="published_date" class="form-control" value="{{old('published_date')}}"
                                                    value="13:14"> <span class="input-group-append"><span
                                                        class="input-group-text"><i class="fa fa-clock-o"></i></span></span>
                                            </div>
                                            @error('published_date')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mt-3">
                                        <div class="col-lg-8 ml-0">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #/ container -->
    </div>
@endsection
@section('js')
<script>
    tinymce.init({
        selector: '#content',
        plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image code link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | code | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author name',
        mergetags_list: [{
                value: 'First.Name',
                title: 'First Name'
            },
            {
                value: 'Email',
                title: 'Email'
            },
        ],
        ai_request: (request, respondWith) => respondWith.string(() => Promise.reject(
            "See docs to implement AI Assistant")),
        /* enable title field in the Image dialog*/
        image_title: true,
        /* enable automatic uploads of images represented by blob or data URIs*/
        automatic_uploads: true,
        /*
            URL of our upload handler (for more details check: https://www.tiny.cloud/docs/configure/file-image-upload/#images_upload_url)
            images_upload_url: 'postAcceptor.php',
            here we add custom filepicker only to Image dialog
        */
        file_picker_types: 'image',
        file_picker_callback: (cb, value, meta) => {
            const input = document.createElement('input');
            input.setAttribute('type', 'file');
            input.setAttribute('accept', 'image/*');

            input.addEventListener('change', (e) => {
                const file = e.target.files[0];

                const reader = new FileReader();
                reader.addEventListener('load', () => {
                    /*
                      Note: Now we need to register the blob in TinyMCEs image blob
                      registry. In the next release this part hopefully won't be
                      necessary, as we are looking to handle it internally.
                    */
                    const id = 'blobid' + (new Date()).getTime();
                    const blobCache = tinymce.activeEditor.editorUpload.blobCache;
                    const base64 = reader.result.split(',')[1];
                    const blobInfo = blobCache.create(id, file, base64);
                    blobCache.add(blobInfo);

                    /* call the callback and populate the Title field with the file name */
                    cb(blobInfo.blobUri(), {
                        title: file.name
                    });
                });
                reader.readAsDataURL(file);
            });

            input.click();
        },
    });
</script>
@endsection
