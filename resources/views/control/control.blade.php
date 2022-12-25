<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css"/>
  <title>管理システム</title>
</head>
<body>
  <div class = "control-system">
    <h1 class = "title-control">管理システム</h1>
    <div class = "search-form">
      <form action="/find" method="POST" >
        @csrf
        <div class = "row-name-gender">
          <label class = "label-name">お名前<input type="text" class="form-name" name="fullname" value="{{ $fullname }}"/></label>
          <div class = "gender-container"> 
            <label class = "label-both-gender">性別</label>
            <label class="label-gender">
              <input name="gender" class="radio-gender" type="radio" value = " 全て" checked>
              <span class="radio-text">全て</span>
            </label>
            <label class="label-gender">
              <input name="gender" class="radio-gender" type="radio" value = " 男性 ">
              <span class="radio-text">男性</span>
            </label>
            <label class="label-gender">
              <input name="gender" class="radio-gender" type="radio" value = " 女性 ">
              <span class="radio-text">女性</span>
            </label>
          </div>
        </div>
        <label class = "label-date">登録日<input type = "date" class = "form-date-from" name = "from" />
          <span class = "from-until">～</span>
        <input type="date" name="until" class = "form-date-until"></label>

        <label class = "label-email">メールアドレス<input type = "text" class = "form-email" name = "email" value = "{{ $email }}"/></label>
        <br>
        <input class="btn-search" type="submit" value="検索" />
        <a href = "/control" class="btn-reset" type="reset" value="リセット" >リセット</a>
      </form>
    </div>
    <div class = "search-results">
      
      <table class = "search-table">
        <tr class = "title-table">
          <th>ID</th>
          <th>お名前</th>
          <th>性別</th>
          <th>メールアドレス</th>
          <th>ご意見</th>
        </tr>
        <div class = "pagination-row">
          @if (!empty($contacts))
          
        </div>
        @foreach($contacts as $contact)
        <tr>
          <td>{{ $contact->id }}</td>
          <td>{{ $contact->fullname }}</td>
          <td>{{ $contact->gender }}</td> 
          <td>{{ $contact->email }}</td>
          <td>{{ $contact->opinion }}</td>
          <td>
            <form action="{{ route('delete', ['id'=>$contact->id]) }}"method="post">
              @csrf
              <button method = "post" type = "submit" class="btn-delete">削除</button>
            </form>
          </td>
        </tr>
        @endforeach
        @endif
      </div>
    </div>
  </div> 
</body>
</html>