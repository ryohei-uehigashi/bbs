<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>あなたの星座は　ー入力してください</title>
</head>
<body>
  <h1>あなたの誕生日は？</h1>
  <form action="/sign/yourSign" method="post">
    @csrf
    <div>
      <select name="month" id="">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
      </select>
      <a>月</a>
      <input type="text" name="day" placeholder="日付を入力">
      <a>日</a>
    </div>
    <input type="submit" value="あなたの星座は...">
  </form>
</body>
</html>