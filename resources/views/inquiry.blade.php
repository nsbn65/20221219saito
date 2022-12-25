<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css"/>
  <script src="https://ajaxzip3.github.io/ajaxzip3.js"></script>
  <title>お問い合わせ</title>
</head>
<body>
  <div class = "container">
    <h1 class = "main-title">お問い合わせ</h1>
    <form method="POST" action="{{ url('/confirm')}}" >
      @csrf
      
      <div class = "form name">
        <p class = "label form-name">お名前<span class = "caution">※</span></p>
        <div class = "box">
          <input type="text" class = "input name" id="fullname" name="fullname" value="{{ old('fullname') }}">
          <p class = "example">例）山田太郎</p>
          @if($errors->has('fullname'))
          <p class="required">{{ $errors->first('fullname') }}</p>
          @endif
        </div>
      </div>
        
      <div class = "form-gender">
        <p class = "label form-gender">性別<span class = "caution">※</span></p>
        <label for="male"><input type="radio" name="gender" id="male" class = "input-gender1" value="男性" checked>男性</label>
        <label for="female"><input type="radio" name="gender" id="female" class = "input-gender2" value="女性">女性</label>
      </div>

      <div class = "form email">
        <p class = "label form-email">メール<span class = "caution">※</span></p>
        <div class = "box">
          <input type="email" class = "input email" id="email" name="email" value="{{ old('email') }}">
          <p class = "example">例）test@example.com</p>
          @if($errors->has('email'))
          <p class="required">{{ $errors->first('email') }}</p>
          @endif
        </div>
      </div>

      <div class = "form postcode">
        <p class = "label form-postcode">郵便番号<span class = "caution">※</span></p>
        <div class = "box">
          〒　<input type="text" class = "input postcode" name="postcode" size="10" maxlength="8" value="{{ old('postcode') }}" onKeyUp="AjaxZip3.zip2addr(this,'','address','address');">
          <p class = "example">例）123-4567</p>
          @if($errors->has('postcode'))
          <p class="required">{{ $errors->first('postcode') }}</p>
          @endif
        </div>
      </div>

      <div class = "form address">
        <p class = "label form-address">住所<span class = "caution">※</span></p>
        <div class = "box">
          <input type="text" class = "input address" name="address" size="60" value="{{ old('address') }}">
          <p class = "example">例）東京都渋谷区千駄ヶ谷1-2-3</p>
          @if($errors->has('address'))
          <p class="required">{{ $errors->first('address') }}</p>
          @endif
        </div>
      </div>

      <div class = "form building_name">
        <p class = "label form-building_name">建物名</p>
        <div class = "box">
          <input type="text" class = "input building_name" id="building_name" name="building_name" value="{{ old('building_name') }}">
          <p class = "example">例）千駄ヶ谷マンション101</p>
          @if($errors->has('building_name'))
          <p class="required">{{ $errors->first('building_name') }}</p>
          @endif
        </div>
      </div>

      <div class = "form opinion">
        <p class = "label form-opinion">ご意見<span class = "caution">※</span></p>
        <div class = "box">
          <input class = "input opinion" id="opinion" name="opinion" row = "6" value="{{ old('opinion') }}"></input>
          @if($errors->has('opinion'))
          <p class="required">{{ $errors->first('opinion') }}</p>
          @endif
        </div>
      </div>

      <input type = "submit" class = "btn-confirm" method = "post" action = "/confirm" value = "確認">
    </form>
  </div>
</body>
</html>