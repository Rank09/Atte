<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
  <!--cssのフォルダ位置ファイル位置によって読み込み不可になる-->
  <link rel="stylesheet" href="{{ asset('css/common_header-attendance.css') }}">
  <link rel="stylesheet" href="">
</head>

<body>
  <div class="common_header">
    <p class="login_header">Atte</p>
    <ul class="login_header_list">
      <li class="login_header_list-item"><a href="/">ホーム</a></li>
      <li class="login_header_list-item"><a href="/attendance/0">日付</a></li>
      <li class="login_header_list-item"><a href="/logout">ログアウト</a></li>
    </ul>
    </nav>
  </div>

  <div class="main">
    <p class="main_name">{{ Auth::user()->name }}さんお疲れ様です！</p>
    <div class="main_content">
      
      @if(isset($is_attendance_start))
      <form action="/attendance/start" method="post" class="main_content-common">
        @csrf
        <input type="submit" id="work_start" class="main_content-button" name="work_start" value="勤務開始">
      </form>
      @else
      <form action="/attendance/start" method="post" class="main_content-common">
        @csrf
        <input type="submit" id="work_start" class="main_content-button" name="work_start" value="勤務開始" disabled>
      </form>
      @endif
      
      @if(isset($is_attendance_end))
      <form action="/attendance/end" method="post" class="main_content-common">
        @csrf
        <input type="submit" id="work_end" class="main_content-button" name="work_end" value="勤務終了">
      </form>
      @else
      <form action="/attendance/end" method="post" class="main_content-common">
        @csrf
        <input type="submit" id="work_end" class="main_content-button" name="work_end" value="勤務終了" disabled>
      </form>
      @endif
      
      @if(isset($is_rest_start))
      <form action="/rest/start" method="post" class="main_content-common">
        @csrf
        <input type="submit" id="start_time" class="main_content-button" name="start_time" value="休憩開始">
      </form>
      @else
      <form action="/rest/start" method="post" class="main_content-common">
        @csrf
        <input type="submit" id="start_time" class="main_content-button" name="start_time" value="休憩開始" disabled>
      </form>
      @endif
      
      @if(isset($is_rest_end))
      <form action="/rest/end" method="post" class="main_content-common">
        @csrf
        <input type="submit" id="end_time" class="main_content-button" name="end_time" value="休憩終了">
      </form>
      @else
      <form action="/rest/end" method="post" class="main_content-common">
        @csrf
        <input type="submit" id="end_time" class="main_content-button" name="end_time" value="休憩終了" disabled>
      </form>
      @endif
    </div>
  </div>
    
    <div class="common_footer">
      <p class="login_footer">Atte,inc.</p>
    </div>
  </body>
  
  </html>