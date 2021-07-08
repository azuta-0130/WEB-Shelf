@extends('layouts.auth')

@section('content')
 <style>
.form {
  margin-bottom: 30px;
}

.title {
  font-size: 20px;
  float: left;
  padding-left: 400px;
}

.text {
  margin: 30px 0;
}

 .form-group {
   margin: 0 auto;
 }

 .form-text {
   margin: 0 auto;
   padding-left: 470px;
   float: left;
   font-size: 20px;
 }

 .form-image {
   /* float: right; */
   margin: 0 auto;
 }
 </style>
  <form id="not_use" action="{{ route('create') }}" accept-charset="UTF-8" method="post" enctype="multipart/form-data">
    <!-- <input name="utf8" type="hidden" value="&#x2713;" />
    <input type="hidden" name="authenticity_token"value=""/> -->

    <div class="form-group title">タイトル名</div>
      <div class="form-group col-5">
        <textarea id="title" class="form-control" rows="1" name="title"></textarea>
      </div>

      <div class="text">
        <div class="form-group form-text">①</div>
        <div class="form-group col-5">
        <textarea id="keyword1" class="form-control" rows="1" name="keyword1"></textarea>
        <div class="form-group col-1 search" id='search1'>
          <i class="fa fa-search fa-lg"></i>
        </div>
      </div>
      <div class="form-group col-5">
      <div class="form-image">
        <label>画像</label>
          <input name="image" type="file" value="" accept="image/png, image/jpeg">
      </div>
    </div>


    <div class="text">
      <div class="form-group form-text">②</div>
      <div class="form-group col-5">
        <textarea id="keyword2" class="form-control" rows="1" name="keyword2"></textarea>
      </div>
      <div class="form-group col-1 search" id='search2'>
        <i class="fa fa-search fa-lg"></i>
      </div>
    </div>
    <div class="form-group col-5">
      <div class="form-image">
        <label>画像</label>
          <input name="image" type="file" value="" accept="image/png, image/jpeg">
      </div>
    </div>

    <div class="text">
      <div class="form-group form-text">③</div>
      <div class="form-group col-5">
        <textarea id="keyword3" class="form-control" rows="1" name="keyword3"></textarea>
      </div>
    </div>
    <div class="form-group col-5">
      <div class="form-image">
        <label>画像</label>
          <input name="image" type="file" value="" accept="image/png, image/jpeg">
      </div>
    </div>

    
  <div class="text">
      <div class="form-text">
        <button id="create">棚作成</button>
      </div>
  </div>

    <div id="preview">
    <img width="315" src="#"/>
    <span id="title_preview"></span>
    <span id="img1" data-title="">
      <a href="" target="_blank" id="preview_url1">
        <img src="#" id="preview_image1" width="55px">
      </a>
    </span>
    <span id="img2" data-title="">
      <a href="" target="_blank" id="preview_url2">
        <img src="#" id="preview_image2" width="55px">
      </a>
    </span>
    <span id="img3" data-title="">
      <a href="" target="_blank" id="preview_url3">
        <img src="#" id="preview_image3" width="55px">
      </a>
    </span>
  </div>
</div>
@endsection