<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css"/>
  <title>内容確認</title>
</head>
<body>
  <div class = "container">
    <h1 class = "confirm-title">内容確認</h1>
    <form method="POST" action="/send" class="confirm__ar">
      @csrf
      @method('POST')
      <table class = "confirm-table">
        <tr>
          <th class = "confirm__tag">お名前</th>
          <td>{{ $inputs['fullname'] }}</td>
          <input type="hidden" name="fullname" value="{{ $inputs['fullname'] }}">
        </tr>
        <tr>
          <th class = "confirm__tag">性別</th>
          <td>{{ $gender }}</td>
          <input type="hidden" name="gender" value="{{ $gender }}">
        </tr>
        <tr>
          <th class = "confirm__tag">メールアドレス</th>
          <td>{{ $inputs['email'] }}</td>
          <input type="hidden" name="email" value="{{ $inputs['email'] }}">
        </tr>
        <tr>
          <th class = "confirm__tag">郵便番号</th>
          <td>{{ $inputs['postcode'] }}</td>
          <input type="hidden" name="postcode" value="{{ $inputs['postcode'] }}">
        </tr>
        <tr>
          <th class = "confirm__tag">住所</th>
          <td>{{ $inputs['address'] }}</td>
          <input type="hidden" name="address" value="{{ $inputs['address'] }}">
        </tr>
        <tr>
          <th class = "confirm__tag">建物名</th>
          <td>{{ $inputs['building_name'] }}</td>
          <input type="hidden" name="building_name" value="{{ $inputs['building_name'] }}">
        </tr>
        <tr>
          <th class = "confirm__tag">ご意見</th>
          <td>{{ $inputs['opinion'] }}</td>
          <input type="hidden" name="opinion" value="{{ $inputs['opinion'] }}">
        </tr>
      </table>
      <div class = "btn-send-back">
        <button type = "submit" class = "btn-send" action = "/send">送信</button><br>
        <a href = "/" type="submit" name='back' value="back" >修正する</button>
      </div>
    </form>
  </div>
</body>
</html>