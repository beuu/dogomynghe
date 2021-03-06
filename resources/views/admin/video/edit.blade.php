<?php ?>

@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
            <div class="m-portlet m-portlet--mobile">
                    <div class="m-portlet__head">
                          <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
                                      <h3 class="m-portlet__head-text">
                                            Sửa Video
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


                        <form class="form-horizontal" role="form" method="POST"
                              action="{{ route('video.update',$data2->id) }}">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}

                            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="title" class="col-md-12 control-label">Tiêu đề</label>

                                <div class="col-md-12">
                                    <input id="title" type="text" class="form-control" name="title" value="{{ $data2->title }}" onkeyup="ChangeToSlug()"
                                           required autofocus>

                                    @if ($errors->has('title'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row"style="margin:0px">
                                <div class="col-md-6" >
                                <label for="image" class="control-label">Thumbnail</label><br>
                                    <span class="form-group-btn">
                                    <a id="lfm" data-input="image" data-preview="holder" class="btn btn-primary text-white">
                                        <i class="fa fa-picture-o"></i> Chọn
                                    </a>
                                    </span>
                                    <input id="image" class="form-control col-md-12" type="text" name="image" value="{{$data2->image}}">
                                  <img id="holder" style="margin-top:15px;max-height:100px;" src="{{ asset($data2->image)}}">
                                </div>
                                <div class="col-md-6">
                                    <div class="m-form__group form-group row">
                                        <label class="col-3 col-form-label">Video nổi bật</label>
                                        <div class="col-3">
											<span class="m-switch m-switch--success">
												<label>
                                                <?php
                                                    if ($data2->feature ==1) {
                                                        echo "<input type='checkbox' checked='checked' name='feature'>";
                                                    }else {
                                                        echo "<input type='checkbox' name='feature'>";
                                                    }
                                                ?>
						                        
						                        <span></span>
						                        </label>
						                    </span>
                                        </div>
                                        <!-- <label class="col-3 col-form-label">Public bài viết</label>
                                        <div class="col-3">
											<span class="m-switch m-switch--warning">
												<label>
						                        <?php
                                                    // if ($data2->public ==1) {
                                                    //     echo "<input type='checkbox' checked='checked' name='public'>";
                                                    // }else {
                                                    //     echo "<input type='checkbox' name='public'>";
                                                    // }
                                                ?>
						                        <span></span>
						                        </label>
						                    </span>
                                        </div> -->
                                    </div>
                                    
                                </div>
                              
                              </div>


                            <div class="form-group{{ $errors->has('slug') ? ' has-error' : '' }}">
                                <label for="slug" class="col-md-12 control-label">Slug video</label>

                                <div class="col-md-12">
                                    <input id="slug" type="text" class="form-control" name="slug" value="{{ $data2->slugs->slug }}"
                                           >

                                    @if ($errors->has('slug'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('slug') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                              <label for="">Danh muc</label>
                              <select name="postcate_id" class="form-control">
                                  <?php categoryParent($data ,$parent = 0, $str="", $data2->postcate_id); ?>
                                  
                              </select>
                          </div>
                            <div class="form-group{{ $errors->has('link') ? ' has-error' : '' }}">
                                <label for="link" class="col-md-12 control-label">Link video</label>

                                <div class="col-md-12">
                                    <input id="link" type="text" class="form-control" name="link" value="{{ $data2->link }}"
                                           required autofocus>

                                    @if ($errors->has('link'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('link') }}</strong>
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
                                            <textarea rows="7" id="keywords" name="keywords" class="form-control">{{$data2->keywords}}</textarea>
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
                                            <textarea rows="7" id="mdescription" name="mdescription" class="form-control">{{$data2->mdescription}}</textarea>
                                  @if ($errors->has('mdescription'))
                                      <span class="help-block">
                                      <strong>{{ $errors->first('mdescription') }}</strong>
                                  </span>
                                  @endif
                              </div>
                          </div>



                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Sửa
                                    </button>

                                    <a class="btn btn-link" href="{{ route('video.index') }}">
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
