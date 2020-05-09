<?php ?>

@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
            <div class="m-portlet m-portlet--mobile">
                    <div class="m-portlet__head">
                          <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
                                      <h3 class="m-portlet__head-text">
                                            Tạo Sự Kiện
                                      </h3>
                                </div>
                          </div>
                          <div class="m-portlet__head-tools">
                                <ul class="m-portlet__nav">
                                      <li class="m-portlet__nav-item">
                                                            </li>
                                </ul>
                          </div>
                          
                    </div>
                    <div class="m-portlet__body">
    
                            @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form class="form-horizontal" role="form" method="POST" action="{{ route('event.store') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="title" class="col-md-12 control-label">Tên Sự Kiện</label>

                                <div class="col-md-12">
                                    <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" onkeyup="ChangeToSlug()"
                                           required autofocus>

                                    @if ($errors->has('title'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row"style="margin:0px">
                                <div class="col-md-12" >
                                <label for="image" class="control-label">Thumbnail</label><br>
                                    <span class="form-group-btn">
                                    <a id="lfm" data-input="image" data-preview="holder" class="btn btn-primary text-white">
                                        <i class="fa fa-picture-o"></i> Chọn
                                    </a>
                                    </span>
                                    <input id="image" class="form-control" type="text" name="image" value="{{ old('image') }}">
                                    <img id="holder" style="margin-top:15px;max-height:100px;" src="">
                                </div>
                              
                              </div>
                              

                            <div class="form-group{{ $errors->has('slug') ? ' has-error' : '' }}">
                                <label for="slug" class="col-md-12 control-label">Slug sự kiện</label>

                                <div class="col-md-12">
                                    <input id="slug" type="text" class="form-control" name="slug" value="{{ old('slug') }}"
                                           >

                                    @if ($errors->has('slug'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('slug') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            

                          <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                              <label for="email" class="col-md-12 control-label">Mô tả ngắn</label>

                              <div class="col-md-12">
                                            <textarea rows="7" id="description" name="description" class="form-control">{{ old('description')}}</textarea>
                                  @if ($errors->has('description'))
                                      <span class="help-block">
                                      <strong>{{ $errors->first('description') }}</strong>
                                  </span>
                                  @endif
                              </div>
                          </div>

                            <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                                <label for="body" class="col-md-12 control-label">Nội dung</label>

                                <div class="col-md-12">
                                              <textarea id="body" rows="40" name="body" class="form-control my-editor">{{ old('body')}}</textarea>
                                    @if ($errors->has('body'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('body') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-12">
                            <h2>SEO</h2>
                            </div>

                            
                            <div class="form-group{{ $errors->has('keywords') ? ' has-error' : '' }}">
                              <label for="keywords" class="col-md-12 control-label">Meta Keywords</label>

                              <div class="col-md-12">
                                            <textarea rows="7" id="keywords" name="keywords" class="form-control">{{ old('keywords')}}</textarea>
                                  @if ($errors->has('keywords'))
                                      <span class="help-block">
                                      <strong>{{ $errors->first('keywords') }}</strong>
                                  </span>
                                  @endif
                              </div>
                          </div>
                          <div class="form-group{{ $errors->has('mdescription') ? ' has-error' : '' }}">
                              <label for="mdescription" class="col-md-12 control-label">Meta Description</label>

                              <div class="col-md-12">
                                            <textarea rows="7" id="mdescription" name="mdescription" class="form-control">{{ old('mdescription')}}</textarea>
                                  @if ($errors->has('mdescription'))
                                      <span class="help-block">
                                      <strong>{{ $errors->first('mdescription') }}</strong>
                                  </span>
                                  @endif
                              </div>
                          </div>



                            <div class="form-group">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">
                                        Tạo mới
                                    </button>

                                    <a class="btn btn-link" href="{{ route('event.index') }}">
                                        Hủy
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
              </div>
    </div>


    <script src="{{ asset('/vendor/laravel-filemanager/js/lfm.js')}}"></script>

    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script type="text/javascript">
    $('#lfm').filemanager('image');
    function ChangeToSlug()
            {
                var title, slug;
    
                //Lấy text từ thẻ input title
                title = document.getElementById("title").value;
    
                //Đổi chữ hoa thành chữ thường
                slug = title.toLowerCase();
    
                //Đổi ký tự có dấu thành không dấu
                slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
                slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
                slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
                slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
                slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
                slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
                slug = slug.replace(/đ/gi, 'd');
                //Xóa các ký tự đặt biệt
                slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
                //Đổi khoảng trắng thành ký tự gạch ngang
                slug = slug.replace(/ /gi, "-");
                //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
                //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
                slug = slug.replace(/\-\-\-\-\-/gi, '-');
                slug = slug.replace(/\-\-\-\-/gi, '-');
                slug = slug.replace(/\-\-\-/gi, '-');
                slug = slug.replace(/\-\-/gi, '-');
                //Xóa các ký tự gạch ngang ở đầu và cuối
                slug = '@' + slug + '@';
                slug = slug.replace(/\@\-|\-\@|\@/gi, '');
                //In slug ra textbox có id “slug”
                // var url = '{{ url('/page/')}}';
                // document.getElementById('link').value = url +'/'+ slug;
                document.getElementById('slug').value = slug;
    
            }
    var editor_config = {
    path_absolute : "/",
    selector: "textarea.my-editor",
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;
    
      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }
    
      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no"
      });
    }
    };
    
    tinymce.init(editor_config);
    
    
    </script>
</div>


@endsection

