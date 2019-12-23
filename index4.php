<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Oswald:400,600" rel="stylesheet">
<style type="text/css">
.navbar {
display: flex;
flex-flow: row, nowrap;
align-items: flex-start;
justify-content: flex-start;
 background-color: #555;
 overflow: auto;
 width: 100%;
 height: 67px;
}
.menu{
	margin-left: 20px;
align-self: flex-start;
width: 60px;
font-size: 14px;
cursor: pointer;
}
div.line{
   width: 35px;
  height: 5px;
  background-color: white;
  margin: 6px 0;
}
.condent{

font: 14px Verdana,Arial,Helvetica;
color: #FFF;
font-size: 14px;
cursor: pointer;
line-height: 1.5em;
padding: 2px;
margin: 0 0 0 0;
margin-top: -8px;
margin-left: -10px;
}
form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}

body{
  margin: 0;
  padding: 0;
  

  
 
  color: #444444;
}


* {

  box-sizing: border-box;
}
.table{
	margin-left: 40px;
	align-self: center;
	justify-content: center;
  cursor: pointer;
	width: 100px;
}
.cell{
  padding: 5px;
}
.cell1{
  width: 0px;
  margin-top: -5px;
}
.p1{
line-height: 1.5em;
font: 14px Verdana,Arial,Helvetica;
font-family: 'Roboto',sans-serif;
color: #fff;
}

.cell1 a{
  text-decoration: none;
  position: relative;
  left: 0px;
  top: -10px;
  vertical-align: middle;

}
*{
  font-family: 'Oswald', sans-serif;
}

.product-details{
	margin-left: 30px;
	padding: 5px;

}





.container{
  margin: 30px;
  width: 100%;
  max-width: 900px;
  display: flex;
  justify-content: center;
  flex-direction: row;
  align-items: center;
}

h5{
  text-transform: uppercase;
  margin: 0;
  font-size: 14px;
}
ul{
  list-style: none;
  margin: 0;
  padding: 0;
}
a{
  text-decoration: none;
  color:  #bbb;
}

.footer {
	margin-top: 20px;
    width: 100%;
    height: 300px;
    background-color: rgb(85,85,85);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-around;
    font-family: Georgia, 'Times New Roman', Times, serif;
    color: white;
    background-image: linear-gradient(white, rgb(95,95,95));
}

.firstF {
    text-align: center;
    font-size: 3em;
    color: black;
}
.mainF {
    display: flex;
    justify-content: space-between;
    width: 100%
}

.firstmainF {

	margin-top: -30px;
    text-align: end;
    width: 60%;
    font-size: 2em;
    vertical-align: middle;
}
.secondmainF {
    width: 40%;
    margin-top: -50px;
    margin-left: 0px;
    font-size: 4em;
    font-family: 'Times New Roman', Times, serif;
}
.last {
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    text-align: center;
    font-size: 0.9em;
}





</style>
</head>
<body>
	<header class="navbar">
   <div class = "menu" style="margin-top: 5px;margin-left: 40px;">
  <div class="line"></div>
  <div class="line"></div>
  <div class="line"></div>
  <p class="condent">Каталог</p>
</div>
<div class="logo" style="margin-top: 5px;">
  <img src="logo2.png" width="300px">
</div>
<div class="search_container" style="width:750px;" > 
 <form class="example"  style="width:100%; margin-top: 10px;">
     <input type="text" placeholder="Искать..." name="search2">
  <button type="submit"><i class="fa fa-search"></i></button>
   </form></div>

<div class="table">
  <div class = "cell" style="display: inline-block;">
    <img src="https://image.flaticon.com/icons/svg/1782/1782950.svg" width="50px">
  </div>
  <div class="cell1" style="display: inline-block;">
    <a href=""><span class="p1">Личный<br> кабинет</span></a>
  </div>
  </div>

  <div class="table">
  <div class = "cell" style="display: inline-block;">
    <img src="https://image.flaticon.com/icons/png/512/1082/1082450.png" width="50px">
  </div>
  <div class="cell1" style="display: inline-block;">
    <a href=""><span class="p1">Корзина</span></a>
    <a href=""><span id = "card" class="p1">пусто</span></a>
  </div>
  </div>
  
  
</header>
<div class="container">

  <div class="product-image">
    
    <img src="https://brain-images-ssl.cdn.dixons.com/3/4/10185943/l_10185943_001.jpg" alt="" class="product-pic">
    
  </div>
  
  <div class="product-details" style="">
    <header>
      <h1 class="title">Iphone 11 Pro Max</h1>
      <span class="colorCat">pink</span>
      <div class="price">
        <span class="current">$144.99</span>
      </div>
      <div class="rate">
        <a href="#!">★</a>
        <a href="#!">★</a>
        <a href="#!" >★</a>
        <a href="#!">★</a>
        <a href="#!">★</a>
      </div>
    </header>
    <article>
      <h5 class = "h5">Description</h5>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </article>
    <div class="controls">
    
      <div class="size">
        <h5 class = "h5">size</h5>
        <a href="#!" class="option">500x800</a>
      </div>
      <div class="qty">
        <h5 class = "h5" style="margin-top: 0px;">qty</h5>
        <a href="#!" class="option">(1)</a>
      </div>
    </div>
    <div class="footer1" style="width: 150px; height: 40px; margin-top: 0px; background-color: white;  border: 1px solid black; text-align: center; vertical-align:middle;border-radius: 5px;margin-left: 100px;">
      
        
        <span style="font-size: 25px; font-weight: bold;">Add to cart</span>
      
    </div>

  </div>

</div>

<footer class="footer" style="">
  
            
                
               <div class="firstF" style="">КОНТАКТЫ</div>
            <div class="mainF">
                
                <div class="secondmainF">
                        <span style="color: orange">Technomarket</span>
                        <span style="color: rgb(20, 120, 239)">Burnoe</span>
                </div>
                <div style="color: black" class="firstmainF">
                       
                        Диана Снегина
                        <br>
                        <span style="color: black; padding:  15px; ">
                        tel. + 7 727 356 05 55 ; <br>+ 7 777 781 77 71</span>
                </div>
            </div>
            <div class="last" style="">
                Издательский дом «Technomarket Burnoe»
                050002, г. Тараз, ул. Зенкова,
                22, Дом офицеров, офис 600.
                Телефон рекламного отдела: +7 727 356 05 59
                www.technomarket_burnoe.kz
            </div>
</footer>

</body>
</html>