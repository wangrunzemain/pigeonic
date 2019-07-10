@extends('layouts.app')
<link rel="stylesheet" href="/editormd/css/editormd.css" />
<script src="https://cdn.bootcss.com/markdown.js/0.5.0/markdown.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.3.1/css/bootstrap.min.css"></script>
<script src="https://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<script src="/editormd/editormd.min.js"></script>
<script type="text/javascript">
    $(function() {
        var editor = editormd("test-editor", {
            // width  : "100%",
            // height : "100%",
            path   : "/editormd/lib/"
        });
    });
</script>
@section('head')
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Console</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="post" action="admin/release_store">
                      <div class="form-group row">
                        <label for="title" class="col-md-4 col-form-label text-md-right">发布者</label>
                        <div class="col-md-6">
                          <input class="form-control" type="text" name="author" value="{{$username}}" readonly="readonly">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="title" class="col-md-4 col-form-label text-md-right">标题：</label>
                        <div class="col-md-6">
                          <input class="form-control" type="text" name="title">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="weights" class="col-md-4 col-form-label text-md-right">权重：</label>
                        <div class="col-md-6">
                          <input class="form-control" type="numer" name="weights" min="0" max="99">
                        </div>
                      </div>
                        <div class="form-group row">
                          <label for="label" class="col-md-4 col-form-label text-md-right">标签：</label>
                          <div class="col-md-6"><input name="label" class="form-control" list="browsers">
                            <datalist id="browsers">
                              <option value="第五音分部">
                              <option value="游戏相关">
                              <option value="动画">
                              <option value="小说和同人文">
                              <option value="音乐">
                              <option value="周边">
                              <option value="同人图">
                              <option value="杂谈">
                            </datalist>
                          </div>
                        </div>
                      <div id="test-editor">
                        <textarea style="display:none;" name="content">
                        </textarea>
                      </div>
                      <div class="form-group row mb-0">
                          <div class="col-md-8 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  导入
                              </button>
                          </div>
                    </form>
                </div>
              </form>
           </div>
       </div>
   </div>
</div>
@endsection
