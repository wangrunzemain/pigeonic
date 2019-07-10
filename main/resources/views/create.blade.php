@extends('layouts.app')
<script src="https://cdn.bootcss.com/markdown.js/0.5.0/markdown.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.3.1/css/bootstrap.min.css"></script>
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
                </div>
              <form action="" method="post">
               <textarea rows="10" cols="30"></textarea>
               <input type="submit" value="Submit" />
              </form>
           </div>
       </div>
   </div>
</div>
@endsection
