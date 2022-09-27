<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('css/attendance.css') }}">
  <!--cssのフォルダ位置ファイル位置によって読み込み不可になる-->
  <link rel="stylesheet" href="{{ asset('css/common_header-attendance.css') }}">
  <title>Document</title>
</head>

<body>
  <div class="common_header">
    <p class="login_header">Atte</p>
    <ul class="login_header_list">
      <li class="login_header_list-item"><a href="/">ホーム</a></li>
      <li class="login_header_list-item"><a href="/attendance">日付</a></li>
      <li class="login_header_list-item"><a href="/logout">ログアウト</a></li>
    </ul>
    </nav>
  </div>
  <div class="main">
    <div class="main_date">
      <ul class="main_category">
        <li class="main_category-ttl">名前</li>
        <li class="main_category-ttl">勤務開始</li>
        <li class="main_category-ttl">勤務終了</li>
        <li class="main_category-ttl">休憩時間</li>
        <li class="main_category-ttl">勤務時間</li>
      </ul>
      <div></div>
    </div>
  </div>
  @foreach ($items as $item)
  {{$item->getDetail()}}
  @endforeach

  {{ $items->links() }}

  <p>{{ Auth::user()->name }}</p>



  <div class="common_footer">
    <p class="login_footer">Atte,inc.</p>
  </div>


</body>

</html>