@extends('layouts.app')

@section('head')
<link rel="stylesheet" href="/css/editormd.min.css"/>
<script src="/js/editormd.min.js"></script>
<script type="text/javascript">
//    调用编辑器
var testEditor;
$(function() {
    testEditor = editormd("editormd", {
        width   : "1000px",
        height  : 640,
        syncScrolling : "single",
        path    : "/lib/"
    });
  });
</script>
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
                      标题：<input type="text" name="title">
                      <br />
                      权重：<input type="numer" name="weights" min="0" max="99">（0-99，数字越大，权重越高）
                      <br />
                      标签：<input list="browsers">
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
                      <br />
                      <div id="editormd">
                          <textarea style="display:none;" id="ts"></textarea>
                      </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
