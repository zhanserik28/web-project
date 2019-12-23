<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

.navbar {
display: flex;
flex-flow: row, nowrap;
align-items: flex-start;
justify-content: flex-start;
 background-color: #555;
 overflow: auto;
 width: 100%;
 height: 65px;
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

body{
  margin: 0;
  padding: 0;

}



.nav-area{
  position: relative;
  padding: 0;
  margin: 0;
  background-color: rgba(95,95,95, 1);
  letter-spacing: 2px;
  width: 400px;
  font-family: Poppins;
  font-size: 15px;
  line-height: 15px;
}
.nav-area a,
.nav-area a:link,
.nav-area a:visited,
.nav-area a:focus{
  color: white;
  text-decoration: none;
  font-weight: bold;
}
.nav-area a:hover{
  color: #247c9d;
  text-decoration: none;
}

.nav-area > li {
  display: block;
  text-align: center;
  font-size: 25px;
  font-family: "Times New Roman", Times, serif;
  font-style: bold;
}
.nav-area > li > a{
  padding: 40px 20px;
  display: block;
}
.nav-area > li:hover a{
  color: #fff
}
.nav-area > li > .sub-nav{
  list-style: none;
  top: 0;
  left: 450px;
  width: 400px;
  min-height: 100%;
  text-align: left;
  margin-top: 30px;
  margin-left: -50px;
  padding: 0;
  z-index: 99;
  overflow: hidden;
  opacity: 0;
  visibility: hidden;
  position: absolute;

}
.nav-area > li:hover > .sub-nav{
  opacity: 1;
  visibility: visible;
  margin-top: 0;
  background: #fff;
}
.nav-area ul li:hover:after{
  color: #247c9d
}

.nav-area .sub-menu{
  width: 100%;
  float: left;
  color: #fff
  margin: 0 0 0 15px;
}
.nav-area .sub-menu ul{
  padding: 0;
  margin: 0;
}

.nav-area .sub-menu ul li{
  padding: 0;
  list-style: none;
  font-size: 25px;
}
.nav-area .sub-menu h3{
  font-size: 20px;
  padding: 10px 10px;
  font-weight: bold;
  margin: 30px 30px 30px 0;
  color: #fff;
  background: #313131;

}
.nav-area .sub-menu ul li a{
  display: block;
  padding: 0 0 15px 0;
  color: #247c9d;
}
.nav-area .sub-menu ul li a:hover{
  color: #313131;
}
.nav-area > li >ul li ul,
.nav-area li > ul li,
.nav-area > li > .sub-nav,
.nav-area > li > ul,
.nav-area > li{
  -webkit-transition : all 0.8s ease-in-out;
  -moz-transition: all 0.8s ease-in-out;
  -ms-transition: all 0.8s ease-in-out;
  -o-transition: all 0.8s ease-in-out;
  transition: all 0.8s ease-in-out;
}
.vertical_container{
  display: flex;
  flex-flow: row, nowrap;
align-items: flex-start;
justify-content: flex-start;

}


.slideshow {
  max-height:300px;
  max-width: 800px;
  position: relative;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: relative;
  top: -250px;
  width: auto;
  padding: 16px;

  color: black;
  font-weight: bold;
  font-size: 23px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  border-color: black;
  user-select: none;
}

.next {
  left: 650px;
  border-radius: 3px 0 0 3px;
}

.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

.mySlides {display: none;}

.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

.telephone_container{
  height: 457px;
  border-radius: 0px 8px 8px 8px;
 display: flex;
 flex-flow: column nowrap;
 align-items: flex-start;
  justify-content: flex-start;

}
.telephone a{
  text-decoration: none;
  color: orange;
  font-size: 30px;
  font-weight: bold;
  font-family: arial;

}
.add1{
  color: rgb(104, 175, 255);
}
.add3{
  color: black;
  font-size: 30px;
  font-weight:  bold;
  font-family: arial;
  position: relative;
  top: -190px;
  left: 10px;

}
.address_container{
    width: 300px;

}
.address{
 
  color: orange;
  font-size: 25px;
  font-weight: bold;
  font-family: arial
  

}


@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
.add2{
  width: 300px;
  height: 196px;
  margin-right: 30px;
  margin-left: 33px;
  
}
#add4{
  display: block;
}
.add{
  display: flex;
  flex-wrap: row nowrap;
  justify-content: flex-start;
  align-items: center;
}
body{
  margin: 0px;
  padding: 0px;
  font-family: montserrat, sans-serif;
}
.slider-box{
  border-style: solid;
  border-width: 5px;
  margin: 40px;
  height: 450px;
  width: 300px;
  position: relative;
  border-radius: 9px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
}
.slider-box a{
  text-decoration: none;
  text-align: center;
}
.img-box{
  height: 230px;
}
.img-box img{
  height: auto;
  max-width: 100%;
  max-height: 100%;
  border-radius: 8px;
}
.time{
  position: absolute;
  top: -30px;
  right: 20px;
  color: #f16007;
  font-size: 35px;
}
.detail{
  display: flex;
  flex-direction: column;
  align-items: center;
  box-sizing: border-box;
  font-size: 25px;
  line-height: 25px;
}
.price{
  color: black;
  font-weight: bold;
  font-size: 35px;
  line-height: 20px;
  margin-top: 25px;
}
.cart{
  position: absolute;
  bottom: 0px;
  height: 45px;
  background-color: #ff696e;
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;

}
.cart a{
  color: #FFFFFF;
}
.slider-box:hover{
  box-shadow: 2px 2px 12px rgba(47,47,47,0.40);
}
.slider-box:hover .img-box img{
  transform: scale(1.07);
  transition: all ease 0.4s;
}
.cart:hover{
  transform: scale(1.03);
  background-color: rgb(255, 0, 0);
  box-shadow: 2px 2px 12px rgba(47,47,47,0.40);
  transition: all ease 0.1s;

}
.allslider-box{
  display: flex;
  flex-wrap: row wrap;
}
.heading{
  display: flex;
  justify-content: center;
}
.heading h1{
  border-left: 2px solid #000000;
  border-right: 2px solid #000000;
  padding: 0px 10px;
  margin: 20px;
  font-size: 80px;
  font-family: calibri;
  background-image: linear-gradient(to right, rgba(252,97,19,1), rgba(252,97,19,0));

}
#child_h{
  border-left: 2px solid #000000;
  border-right: 2px solid #000000;
   background-image: linear-gradient(to right, rgba(252,97,19,0), rgba(252,97,19,1));
  padding: 0px 10px;
  margin: 20px;
  font-size: 80px;
  font-family: calibri;
}
.company{
  display: flex;
  flex-wrap: row nowrap;
  align-items: center;
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
    width: 90%
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
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
  position: relative;
  top: -80px;
}
.active, .dot:hover {
  background-color: #717171;
}
</style>
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

<div class="vertical_container" style="margin-top: 0px;">
  <div> 
  <ul class="nav-area" >
    <li><a href="#">Техника для кухни</a>
      <div class="sub-nav">
        <div class = "sub-menu">
           <h3>Хранение продуктов</h3>
          <ul>
            <li><a href="">Блендры</a></li>
            <li><a href="">Термос</a></li>
            <li><a href="">Холодильник</a></li>
          </ul>
        </div>
      </div>
    </li>
    <li><a href="#">Телофоны и Гаджеты</a>
      <div class="sub-nav">
        <div class = "sub-menu">
          <h3>Смартфоны телефоны</h3>
          <ul>
            <li><a href="">Блендры</a></li>
            <li><a href="">Термос</a></li>
            <li><a href="">Холодильник</a></li>
          </ul>
        </div>
      </div>
    </li>
     <li><a href="#">Бытовая техника</a>
      <div class="sub-nav">
        <div class = "sub-menu">
           <h3>Aудио и телевизор</h3>
          <ul>
            <li><a href="">Блендры</a></li>
            <li><a href="">Термос</a></li>
            <li><a href="">Холодильник</a></li>
          </ul>
        </div>
      </div>
    </li>
    <li><a href="#">Ноутбуки и компьютеры</a>
      <div class="sub-nav">
        <div class = "sub-menu">
           <h3>Aудио и телевизор</h3>
          <ul>
            <li><a href="">Блендры</a></li>
            <li><a href="">Термос</a></li>
            <li><a href="">Холодильник</a></li>
          </ul>
        </div>
      </div>
    </li>
    <li><a href="#">Элоктроника</a>
      <div class="sub-nav">
        <div class = "sub-menu">
           <h3>Aудио и телевизор</h3>
          <ul>
            <li><a href="">Блендры</a></li>
            <li><a href="">Термос</a></li>
            <li><a href="">Холодильник</a></li>
          </ul>
        </div>
      </div>
    </li>
    <li><a href="#">Аксесуары для мобильных</a>
      <div class="sub-nav">
        <div class = "sub-menu">
           <h3>Aудио и телевизор</h3>
          <ul>
            <li><a href="">Блендры</a></li>
            <li><a href="">Термос</a></li>
            <li><a href="">Холодильник</a></li>
          </ul>
        </div>
      </div>
    </li>
    <li><a href="#">Еше больше</a>
      <div class="sub-nav">
        <div class = "sub-menu">
           <h3>Aудио и телевизор</h3>
          <ul>
            <li><a href="">Блендры</a></li>
            <li><a href="">Термос</a></li>
            <li><a href="">Холодильник</a></li>
          </ul>
        </div>
      </div>
    </li>

  </ul></div>







<div class="slideshow" style="width: 780px; height: 600px; ">

<div class="mySlides fade">
  <img src="https://payload.cargocollective.com/1/10/328040/4972000/logo2_o.jpg" style="width:100%;height: 438px; border-radius: 0 0 10px 0; ">
</div>
<div class="mySlides fade">
  <img src="https://i.ytimg.com/vi/qUUCmpYeyZI/maxresdefault.jpg" style="width:100%; border-radius: 0 0 10px 0; ">
</div>
<div class="mySlides fade">
  <img src="https://images.ladbible.com/thumbnail?type=jpeg&url=http://beta.ems.ladbiblegroup.com/s3/content/7c6f6f135da58dd4c6d22fcd7b69fd39.png&quality=70&width=720" style="width:100%;height: 438px; border-radius: 0 0 10px 0; ">
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>






<div class="add" style="width: 1100px; height: 215px; margin-top: -35px;">
  <div class = "add2"><img style = "width: 100%; border-radius: 10px;border-style: solid;
  border-width: 5px;"src="https://newdedmoroz.com/wp-content/uploads/2017/10/kuponator1.jpg"><span class="add3">Товор дня</span>
  </div>
  <div class = "add2"><img style = "width: 100%; border-style: solid;
  border-width: 5px; border-radius: 10px;"src="https://newdedmoroz.com/wp-content/uploads/2017/10/kuponator1.jpg"><span class="add3">Подарки</span>
  </div>
  <div id = "add4" style="width: 330px; height: 196px;border-style: solid;
  border-width: 5px; background-color: white;margin-left: 40px;border-radius: 10px;">
    <a class = "add5" style = "display: block; text-decoration: none; font-size:30px; text-align: center; color: blue; font-weight: bold; font-family: arial; " href="">О Компании</a>
    <span style="display: block; font-size: 45px; text-align: center; font-weight: bold; color: orange; ">Помощь</span>
    <a class = "add5" style = "display: block; text-decoration: none; font-size:30px; text-align: center; color: rgb(104, 175, 255); padding-bottom: 10px; font-weight: bold; font-family: arial; "href="">Способ Оплаты</a>
    <a class = "add5" style = "display: block; text-decoration: none; font-size:30px; text-align: center; color: rgb(104, 175, 255); font-weight: bold; font-family: arial; padding-bottom: 10px;" href="">Способ Доставки</a>
  </div>
</div>
</div>
<div class="telephone_container" style="width: 500px;border-style: solid;
  border-width: 5px;" > 
<div class="telephone_container1" style="display:inline;margin-top: 30px; ">
  <div class="telephone" id = "tele">
    <a href="">+7(775)168-00-05</a>
  </div>
  <div class = "telephone">
    <a href="">+7(775)168-00-95</a>  </div>  </div>
  <div class="slideshow-container" style="display: inline;margin-top: 30px;" >
  <div class="mySlides_fade" style="width: 100%" >
  <img src="logo3.png" style="width:100%">
</div></div>
<div class="address_container" style="display:inline;margin-top: 30px;">
  <div class="address" id = "tele"> Режим работы: </br><span class = 'add1'>09:00 - 19:00</span></div>
  <div class = "address"> Город:</br><span class = 'add1'> Бауыржан Mомышулы,  </span></br>Улица не знаю надо знать </div>
</div>
</div>
    
</div>
<div class="heading">
  <h1>Новинки</h1>
  
</div>
<div class="allslider-box">
<div class="slider-box">
  <p class="time">New</p>
  <div class="img-box">
    <img src="https://brain-images-ssl.cdn.dixons.com/3/4/10185943/l_10185943_001.jpg">
  </div>
  <p class="detail">Iphone 11 Max Pro
    <a href="#" class="price">Price-40$</a>
  </p>
  <div class="cart">
    <a href="#">В Корзину</a>
  </div>
</div>
<div class="slider-box">
  <p class="time">New</p>
  <div class="img-box">
    <img src="https://brain-images-ssl.cdn.dixons.com/3/4/10185943/l_10185943_001.jpg">
  </div>
  <p class="detail">Iphone 11 Max Pro
    <a href="#" class="price">Price-40$</a>
  </p>
  <div class="cart">
    <a href="#">В Корзину</a>
  </div>
</div>
<div class="slider-box">
  <p class="time">New</p>
  <div class="img-box">
    <img src="https://brain-images-ssl.cdn.dixons.com/3/4/10185943/l_10185943_001.jpg">
  </div>
  <p class="detail">Iphone 11 Max Pro
    <a href="#" class="price">Price-40$</a>
  </p>
  <div class="cart">
    <a href="#">В Корзину</a>
  </div>
</div>
<div class="slider-box">
  <p class="time">New</p>
  <div class="img-box">
    <img src="https://brain-images-ssl.cdn.dixons.com/3/4/10185943/l_10185943_001.jpg">
  </div>
  <p class="detail">Iphone 11 Max Pro
    <a href="#" class="price">Price-40$</a>
  </p>
  <div class="cart">
    <a href="#">В Корзину</a>
  </div>
</div>
</div>
<div class="heading">
  <h1>Скидки</h1>
  
</div>
<div class="allslider-box">
<div class="slider-box">
  <p class="time">30%</p>
  <div class="img-box">
    <img src="https://brain-images-ssl.cdn.dixons.com/3/4/10185943/l_10185943_001.jpg">
  </div>
  <p class="detail">Iphone 11 Max Pro
    <a href="#" class="price">Price-40$</a>
  </p>
  <div class="cart">
    <a href="#">В Корзину</a>
  </div>
</div>
<div class="slider-box">
  <p class="time">20%</p>
  <div class="img-box">
    <img src="https://brain-images-ssl.cdn.dixons.com/3/4/10185943/l_10185943_001.jpg">
  </div>
  <p class="detail">Iphone 11 Max Pro
    <a href="#" class="price">Price-40$</a>
  </p>
  <div class="cart">
    <a href="#">В Корзину</a>
  </div>
</div>
<div class="slider-box">
  <p class="time">10%</p>
  <div class="img-box">
    <img src="https://brain-images-ssl.cdn.dixons.com/3/4/10185943/l_10185943_001.jpg">
  </div>
  <p class="detail">Iphone 11 Max Pro
    <a href="#" class="price">Price-40$</a>
  </p>
  <div class="cart">
    <a href="#">В Корзину</a>
  </div>
</div>
<div class="slider-box">
  <p class="time">40%</p>
  <div class="img-box">
    <img src="https://brain-images-ssl.cdn.dixons.com/3/4/10185943/l_10185943_001.jpg">
  </div>
  <p class="detail">Iphone 11 Max Pro
    <a href="#" class="price">Price-40$</a>
  </p>
  <div class="cart">
    <a href="#">В Корзину</a>
  </div>
</div>
</div>
<div class="heading">
  <h1>Хит продаж</h1>
  
</div>
<div class="allslider-box">
<div class="slider-box">
  <p class="time">5%</p>
  <div class="img-box">
    <img src="https://brain-images-ssl.cdn.dixons.com/3/4/10185943/l_10185943_001.jpg">
  </div>
  <p class="detail">Iphone 11 Max Pro
    <a href="#" class="price">Price-40$</a>
  </p>
  <div class="cart">
    <a href="#">В Корзину</a>
  </div>
</div>
<div class="slider-box">
  <p class="time">0%</p>
  <div class="img-box">
    <img src="https://brain-images-ssl.cdn.dixons.com/3/4/10185943/l_10185943_001.jpg">
  </div>
  <p class="detail">Iphone 11 Max Pro
    <a href="#" class="price">Price-40$</a>
  </p>
  <div class="cart">
    <a href="#">В Корзину</a>
  </div>
</div>
<div class="slider-box">
  <p class="time">2%</p>
  <div class="img-box">
    <img src="https://brain-images-ssl.cdn.dixons.com/3/4/10185943/l_10185943_001.jpg">
  </div>
  <p class="detail">Iphone 11 Max Pro
    <a href="#" class="price">Price-40$</a>
  </p>
  <div class="cart">
    <a href="#">В Корзину</a>
  </div>
</div>
<div class="slider-box">
  <p class="time">0%</p>
  <div class="img-box">
    <img src="https://brain-images-ssl.cdn.dixons.com/3/4/10185943/l_10185943_001.jpg">
  </div>
  <p class="detail">Iphone 11 Max Pro
    <a href="#" class="price">Price-40$</a>
  </p>
  <div class="cart">
    <a href="#">В Корзину</a>
  </div>
</div>
</div>
<div class="heading">
  <h1>Больше товаров</h1>
  
</div>
<div class="allslider-box">
<div class="slider-box">
  <p class="time">New</p>
  <div class="img-box">
    <img src="https://brain-images-ssl.cdn.dixons.com/3/4/10185943/l_10185943_001.jpg">
  </div>
  <p class="detail">Iphone 11 Max Pro
    <a href="#" class="price">Price-40$</a>
  </p>
  <div class="cart">
    <a href="#">В Корзину</a>
  </div>
</div>
<div class="slider-box">
  <p class="time">New</p>
  <div class="img-box">
    <img src="https://brain-images-ssl.cdn.dixons.com/3/4/10185943/l_10185943_001.jpg">
  </div>
  <p class="detail">Iphone 11 Max Pro
    <a href="#" class="price">Price-40$</a>
  </p>
  <div class="cart">
    <a href="#">В Корзину</a>
  </div>
</div>
<div class="slider-box">
  <p class="time">New</p>
  <div class="img-box">
    <img src="https://brain-images-ssl.cdn.dixons.com/3/4/10185943/l_10185943_001.jpg">
  </div>
  <p class="detail">Iphone 11 Max Pro
    <a href="#" class="price">Price-40$</a>
  </p>
  <div class="cart">
    <a href="#">В Корзину</a>
  </div>
</div>
<div class="slider-box">
  <p class="time">New</p>
  <div class="img-box">
    <img src="https://brain-images-ssl.cdn.dixons.com/3/4/10185943/l_10185943_001.jpg">
  </div>
  <p class="detail">Iphone 11 Max Pro
    <a href="#" class="price">Price-40$</a>
  </p>
  <div class="cart">
    <a href="#">В Корзину</a>
  </div>
</div>
</div>
<div class="heading">
  <h1 id = child_h>О Компании</h1>
  
</div>
<div class="company"> 
  <div style="width: 1500px; height: 520px;border-right-style: solid; border-color: orange; border-width: 6px;margin-right: 20px;">
    
  </div>
<div>
  <h1 style="color: rgba(255, 161, 0, 0.8)">TechnoMarket Burnoe — Впервые в казахстанский интернет-магазин </h1>
  <p style="font-size: 18px;  font-family: Arial, Helvetica, sans-serif;">В далеком 2019 году мы решили, что совершать покупки онлайн должно быть легко и приятно. Все эти годы мы занимались любимым делом и совершенствовались — все как для себя. И на сегодняшний день наша компания стала одним из новых интернет-магазинов в Казахстане.</p>
  
  <b style="font-size: 25px;">Огромный выбор</b>
  <br>
  <p style="font-size: 18px; font-family: Arial, Helvetica, sans-serif; ">Интернет-магазин TechnoMarket Burnoe  – лучшее место для покупки модной женской одежды и обуви новых коллекций.<br>

Здесь можно найти все: от элегантных платьев до строгих деловых костюмов. Девушка со вкусом легко подберёт себе гардероб на все случаи жизни и все сезоны. Поможет ей в этом фирменный гид по стилю. Делать покупки на TechnoMarket Burnoe легко – всего два клика, и заказ оформлен.<br>

В каталоге представлены известные бренды различных категорий: премиум, масс-маркет, эконом, дизайнерская одежда. Большой выбор фирменных аксессуаров, косметики, парфюма и товаров для спорта и фитнеса.</p>

<b style="font-size: 25px;">Мы не останавливаемся на достигнутом!</b>
<p style="font-size: 18px;  font-family: Arial, Helvetica, sans-serif;">Наш ассортимент непрерывно растет. Это значит, что у нас еще больше качественных, интересных и полезных товаров!
Наши первые клиенты помнят нас как неутомимых книгоманов, но сегодня мы готовы удивить каждого! Хозяйки порадуются товарам, которые значительно облегчат жизнь: посуда, бытовая техника, постельное белье и еще много всего. Для дачников большой ассортимент семян и инструментов для участка. Кто ж не любит модные гаджеты? Смартфоны, фитнес-браслеты, беспроводные наушники и это далеко не все. А еще мы за здоровый образ жизни! Вы легко найдете у нас спорттовары от скакалки до спортивной одежды мировых брендов. Собираетесь делать ремонт? мы и тут вам поможем! Фотообои, лампочки, инструменты и многое другое. Модницы, да и просто все те, кто следит за собой, оценят большой выбор декоративной и уходовой косметики, модных аксессуаров, ювелирных украшений. Вы любите своего домашнего питомца? Порадуйте своего хвостатого или пернатого друга обновками. Ну и конечно, мы не можем обделить вниманием детей! Огромный выбор игрушек просто не оставит их равнодушными!</p>
</div>
</div>


<footer class="footer">
  
            
                
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
<script type="text/javascript">
  var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>
</html> 