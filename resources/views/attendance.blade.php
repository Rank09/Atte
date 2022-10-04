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
      <li class="login_header_list-item"><a href="/attendance/0">日付</a></li>
      <li class="login_header_list-item"><a href="/logout">ログアウト</a></li>
    </ul>
    </nav>
  </div>
  <div class="main">
    <div class="date-container">
      <a class="arrow" href="{!! '/attendance/' . ($num - 1) !!}">&lt;</a>
      <p class="date">{{ $fixed_date }}</p>
      <a class="arrow" href="{!! '/attendance/' . ($num + 1) !!}">&gt;</a>
    </div>

    <table class="main_date">
      <tr class="main_category">
        <th class="main_category-ttl">名前</th>
        <th class="main_category-ttl">勤務開始</th>
        <th class="main_category-ttl">勤務終了</th>
        <th class="main_category-ttl">休憩時間</th>
        <th class="main_category-ttl">勤務時間</th>
      </tr>
      @foreach($attendances as $attendance)
      <tr>
        <td>
          {{ $attendance->users->name }}
        </td>
        <td>
          {{ $attendance->start_time }}
        </td>
        <td>
          {{ $attendance->end_time }}
        </td>
        <td>
          {{ $attendance->rest_sum }}
        </td>
        <td>
          {{ $attendance->work_time }}
        </td>
      </tr>
      @endforeach
    </table>
  </div>
  


  <div class="common_footer">
    <p class="login_footer">Atte,inc.</p>
  </div>


</body>

</html>