
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  height: 330px;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #630118;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>
 @extends('master')
  @section('menu')

<div class="about-section">
  <h1>VỀ CHÚNG TÔI</h1>
  <p>DIDI - ĐỊA ĐIỂM ĂN UỐNG TẠI ĐÀ NẴNG.</p>
  <p>Website giúp bạn dễ dàng tìm được những địa điểm ăn uống NGON - BỔ - RẺ</p>
</div>

<h2 style="text-align:center">Bạn cần giúp gì ?</h2>

  <div class="column">
    <div class="card">
      <img src="ANHTRANGCHU/tung.jpg" alt="Mike" style="width:100%;";>
      <div class="container">
        <h2>Trần Văn Quang</h2>
        <p>thiết kế Web.</p>
        <p>tvquang.19i@cit.udn.vn</p>
      </div>
    </div>
  </div>
  
  
@endsection
</body>
</html>
