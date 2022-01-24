<?php
include 'functions.php';
$id=1;
$signal = 0;
?>
<!DOCTYPE html>
<html><head><meta charset="utf-8">
<title>Pon - калькулятор</title>
<meta name="description" content="VipAdmin">
<meta name="keywords" content="PONCalc">
<link rel="apple-touch-icon" href="/apple-touch-icon.png">
<STYLE>
.signaloriginal {
    color: #64abf5;
    background: #f2fdfd;
    padding: 0px 4px;
    margin: 2px 3px;
    border-radius: 3px;
}
.box_1 .fa, .fas {
    font-size: 12px;
    top: -1px;
    position: relative;
}
.box_1{
    display: block;
    float: left;
    width: 80px;
    text-align: center;
	border-right: 1px solid #fff;
}
.box_3 {
    display: block;
    float: left;
    width: 50px;
    text-align: center;
    color: #3c4038;
    font-size: 16px;
    border: 4px solid #b8e47a;
    height: 28px;
    font-weight: 400;
    padding-top: 8px;
}
.box_2 {
    display: block;
    float: left;
    width: 130px;
    text-align: center;
}
.blu1 {
    display: block;
    float: left;
    width: 50%;
    text-align: center;
    background: #78c0ea;
    color: #fff;
}
.tborder{
    background: #fff;
    margin: 5px 0;
    padding: 5px;
}
.blu2 {
    display: block;
    float: left;
    width: 50%;
    text-align: center;
    color: #78c0ea;
}
.red1{
	color: #fff;
    background: red;
    display: block;
    float: left;
    width: 50%;
    text-align: center;
}.red2{
	color: red;
    display: block;
    float: left;
    width: 50%;
    text-align: center;
}
.box_2 .css1_cap {
    width: 100%;
    display: block;
}


.box_1 .font2 {
    color: #459645;
    background: #f4fdf2;
    width: 100%;
    display: block;
}
.box_1 .font1 {
    color: #357ba9;
    background: #f1f9ff;
    width: 100%;
    display: block;
}
.box_1 .font3 {
    color: #f33f3f;
    background: #fdf9f2;
    width: 100%;
    display: block;
}
.box_1 .font4{
    color: #f5a764;
    background: #fdfbf2;
    width: 100%;
    display: block;
}
.box_1 .css1_8{
    color: #fff;
    background: #357ba9;
    width: 100%;
    display: block;
}

body {
    margin: 0;
    font-family: 'Roboto Condensed', sans-serif;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.4;
    color: #262630;
    text-align: left;
    background-color: #c3c9d6;
}
.bl1{
    display: block;
    float: left;
    width: 49%;
    text-align: center;
}
.bl2{
    display: block;
    float: left;
    width: 49%;
    text-align: center;
}
.modul1 {
    background: #fff;
    padding: 10px;
    display: block;
    margin: 10px 0;
    border-radius: 3px;
    background-color: #fff;
    background-clip: border-box;
    border-radius: 0.20rem;
    -webkit-box-shadow: 0 1px 2px rgba(201, 204, 210, 0.28);
    -moz-box-shadow: 0 1px 2px rgba(201, 204, 210, 0.28);
    box-shadow: 0 1px 2px rgba(201, 204, 210, 0.28);
    float: left;
    width: 100%;
}
.style2{border-radius: 0.20rem;
    -webkit-box-shadow: 0 1px 2px rgba(201, 204, 210, 0.28);
    -moz-box-shadow: 0 1px 2px rgba(201, 204, 210, 0.28);
    box-shadow: 0 1px 2px rgba(201, 204, 210, 0.28);
}
.style1 {
    background: #fff;
    padding: 15px 10px;
    display: block;
float: left;
    border-radius: 3px;
    background-color: #fff;
    background-clip: border-box;
    border-radius: 0.20rem;
    -webkit-box-shadow: 0 1px 2px rgba(201, 204, 210, 0.28);
    -moz-box-shadow: 0 1px 2px rgba(201, 204, 210, 0.28);
    box-shadow: 0 1px 2px rgba(201, 204, 210, 0.28);
}
.container {
    margin-right: auto;
    margin-left: auto;
    display: block;
    padding: 5px;
}
.container {
    max-width: 1024px;
    margin: auto;
}
.wrap {
   -webkit-box-shadow: 0px 2px 15px 0px rgba(0,0,0,0.02);
    box-shadow: 0px 2px 15px 0px rgba(0,0,0,0.02);
    padding: 10px;
    display: block;
    float: left;
    border-radius: 5px;
}
.form-control {
    display: block;
    height: 35px;
    margin-right: 5px;
    float: left;
    padding: 0px 12px;
    font-size: 15px;
    width: 50px;
    text-align: center;
    font-weight: 700;
    line-height: 15px;
    color: #1b151b;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #e5e8ef;
    border-radius: 0.25rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
.form-control:focus {
  color: #495057;
  background-color: #fff;
  border-color: #80bdff;
  outline: 0;

}

.form-select:focus {
  color: #495057;
  background-color: #fff;
  border-color: tomato;
  outline: 0;

}
.form-select {
    height: calc(1.5em + 0.75rem + 2px);
    padding: 0px 14px;
	margin-right: 50px;
    font-size: 15px;
    text-align: center;
    font-weight: 400;
    line-height: 15px;
    color: #1b151b;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #e5e8ef;
    border-radius: 0.25rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

</STYLE>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

</head>
<body>
<div class="container">
<div class="wrap">
<?php
form($signal,$id,'no');
?>
</div>
</div>
</body>
</html>