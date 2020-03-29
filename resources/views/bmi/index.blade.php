<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>BMI計算ページ</h1>
  <form action="/bmi/calc" method="post">
    @csrf
    <div>
      <label for="height">身長</label>
      <input type="text" id="height" name="height">
    </div>
    <div>
      <label for="weight">体重</label>
      <input type="text" id="weight" name="weight">
    </div>
    <div>
      <input type="submit" value="計算する">
    </div>
  </form>
</body>
</html>