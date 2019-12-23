<?php include('server.php');
  if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $edit_state = true;
    $rec = mysqli_query($db, "SELECT * FROM info WHERE id=$id");
    $record = mysqli_fetch_array($rec);
    $name = $record['name'];
    $price = $record['price'];
    $url = $record['url'];
    $id = $record['id'];
  }

 ?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,500,500i,700" rel="stylesheet">
<style type="text/css">
.navbar {
display: flex;
flex-flow: row, nowrap;
align-items: center;
justify-content: center;
 background-color: #555;
 overflow: auto;
 width: 100%;
 height: 67px;
}
.menu{
	margin-left: 20px;

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
body{
  margin: 0;
  padding: 0;
  background-color: rgba(220, 220, 220, 0.5);

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





.range-filter {
    
    width:100%;
    margin:auto;
    margin-bottom:10px;
}
.range-controls {
    position:relative;
    height:80px;
    margin-bottom:15px;
    padding:0 30px;
    background: rgb(85,85,85);
    border-radius:5px;
    overflow:hidden;
}
.scale {
    margin-top:39px;
    height:3px;
    background:#d7dcde;
}
.bar{
    height:2px;
    background:#00ca74;
}
.toggle {
    position:absolute;
    top:30px;
    left:30px;
    width:5px;
    height:4px;
    border:8px solid white;
    background:#ababab;
    cursor:pointer;
    border-radius:50%;
}
.min-toggle {
    left:70px;
}
.max-toggle {
    left:165px;
}
.price-controls input{
    width:105px;
    padding:8px 10px;
    margin-left:10px;
    border:none;
    background: rgb(85,85,85);
    font-size:25px;
    font-family:"Arial", sans-serif;
    text-align:center;
    color:#283136;
    border-radius:5px;
    color:white;
}

.min-price {
    margin-right:80px;
}
.information{ 
	display: flex;
	flex-wrap: row wrap;
	align-items: flex-start;
	justify-content: center;
	width: 100%;
	}
.information_left{
	width: 30%;
	display: flex;
	flex-wrap: column nowrap;
	justify-content: center;
	align-items: center;
	text-align: center;
	display: block;
	vertical-align: center;
 	font-size: 2em;
 	padding: 0px;
 	border-radius: 6px;
 	margin-top: 0px;
 	border-right:  10px solid rgb(2, 123, 231);

}

.information_right{
	width: 70%;
	background-color: white;
	
}
.list-group-item {
    position: relative;
    display: block;
    padding: 10px 15px;
    margin-bottom: -1px;
    background-color: rgba(85,85,85, 0.1);
    border-radius:5px;
    border:2px solid #555;
   
}
.checkbox label, .radio label {
    min-height: 30px;
    padding-left: 20px;
    margin-bottom: 0;
    font-weight: 400;
    cursor: pointer;
     border-radius:5px;
    border:0px solid rgba(85,85,85);
     background-color: rgba(85,85,85, 0.1);
}

label {
    display: block;
    max-width: 100%;
}
.checkbox input[type=checkbox], .checkbox-inline input[type=checkbox], .radio input[type=radio], .radio-inline input[type=radio] {
    position: absolute;
    margin-top: 4px;
    margin-left: 0px;
 
    -webkit-appearance:none;
    width:30px;
    height:30px;
    background:white;
    border-radius:5px;
    border:2px solid #555;
}
input[type=checkbox], input[type=radio] {
    margin: 4px 0 0;
    margin-top: 1px;
    line-height: 5em;
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
  margin-top: 0px;
	box-sizing: border-box;
	font-size: 25px;
	line-height: 25px;
}
.price{
	color: black;
	font-weight: bold;
	font-size: 35px;
	line-height: 20px;
	margin-top: 5px;
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
	flex-wrap: wrap;
}
.custom-select {
  position: relative;
  top: 20px;
  left: 100px;
  width: 200px;
  font-family: Arial;
  padding: 10px;
  
 
  align-self: flex-start;
}
.custom{
	color: #ffffff;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
  user-select: none;
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

.box {
  transform: translate(-50%, -50%);
  position: relative;
  top: 30px;
  left: 570px;
}

.box select {
  background-color: #0563af;
  color: white;
  padding: 12px;
  width: 250px;
  border: none;
  border-radius: 5px;
  font-size: 20px;
  box-shadow: 0 5px 25px rgba(0, 0, 0, 0.2);
  -webkit-appearance: button;
  appearance: button;
  outline: none;
}

.box::before {
  content: "\f13a";
  font-family: FontAwesome;
  position: absolute;
  top: 0;
  right: 0;
  width: 20%;
  height: 100%;
  text-align: center;
  font-size: 28px;
  line-height: 45px;
  color: rgba(255, 255, 255, 0.5);
  background-color: rgba(255, 255, 255, 0.1);
  pointer-events: none;
}

.box:hover::before {
  color: rgba(255, 255, 255, 0.6);
  background-color: rgba(255, 255, 255, 0.2);
}

.box select option {
  padding: 30px;
}
table{
    width: 50%;
    margin: 30px auto;
    border-collapse: collapse;
    text-align: left;
}
tr {
    border-bottom: 1px solid #cbcbcb;
}
th, td{
    border: none;
    height: 30px;
    padding: 2px;
}
tr:hover {
    background: #F5F5F5;
}
form {
    width: 45%;
    margin: 50px auto;
    text-align: left;
    padding: 20px; 
    border: 1px solid #bbbbbb; 
    border-radius: 5px;
}
.input-group {
    margin: 10px 0px 10px 0px;
}
.input-group label {
    display: block;
    text-align: left;
    margin: 3px;
}
.input-group input {
    height: 30px;
    width: 93%;
    padding: 5px 10px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid gray;
}
.btn {
    padding: 10px;
    font-size: 15px;
    color: white;
    background: #5F9EA0;
    border: none;
    border-radius: 5px;
}
.edit_btn {
    text-decoration: none;
    padding: 2px 5px;
    background: #2E8B57;
    color: white;
    border-radius: 3px;
}

.del_btn {
    text-decoration: none;
    padding: 2px 5px;
    color: white;
    border-radius: 3px;
    background: #800000;
}
.msg {
    margin: 30px auto; 
    padding: 10px; 
    border-radius: 5px; 
    color: #3c763d; 
    background: #dff0d8; 
    border: 1px solid #3c763d;
    width: 50%;
    text-align: center;
}

</style>

<body>
<header class="navbar" style="height: 150px;">
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
 <form class="example"  style="width:100%; margin-top: 0px;">
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

<div class="information">
	<aside class="information_left">
		<h1 style="color: rgb(75,75,75); text-align: start; vertical-align: bottom; padding-left: 7px;">Цена</h1>
		  <div class="range-filter">
            <div class="range-controls">
                <div class="scale"><div style="margin-left:10px;width:150px;" class="bar"></div></div>
                <div class="toggle min-toggle" style="left:40px;"></div>
                <div class="toggle max-toggle" style="left:180px;"></div>
            </div>
            <div class="price-controls">
                от <input class="min-price" type="text" value="1 000">
                до <input class="max-price" type="text" value="2 000">
            </div>
        </div>
        
        <div class = "list-group">
        	<h1 style="color: rgb(75,75,75); text-align: start; vertical-align: bottom; padding-left: 7px;">Бренд</h1>
        	<div style="height: 480px; overflow-y: auto; overflow-x: hidden;">
        		<div class="list-group-item checkbox">
        			<label>
        				<input type="checkbox" name="beko" class="list-group-item checkbox" value="Beko"> Beko
        			</label>
        		</div>
        		<div class="list-group-item checkbox">
        			<label>
        				<input type="checkbox" name="beko" class="list-group-item checkbox" value="Beko"> Beko
        			</label>
        		</div>
        		<div class="list-group-item checkbox">
        			<label>
        				<input type="checkbox" name="beko" class="list-group-item checkbox" value="Beko"> Beko
        			</label>
        		</div>
        		<div class="list-group-item checkbox">
        			<label>
        				<input type="checkbox" name="beko" class="list-group-item checkbox" value="Beko"> Beko
        			</label>
        		</div>
        		<div class="list-group-item checkbox">
        			<label>
        				<input type="checkbox" name="beko" class="list-group-item checkbox" value="Beko"> Beko
        			</label>
        		</div>
        		<div class="list-group-item checkbox">
        			<label>
        				<input type="checkbox" name="beko" class="list-group-item checkbox" value="Beko"> Beko
        			</label>
        		</div>
        		<div class="list-group-item checkbox">
        			<label>
        				<input type="checkbox" name="beko" class="list-group-item checkbox" value="Beko"> Beko
        			</label>
        		</div>
        		
        	</div>
        </div>
          <div class = "list-group">
        	<h1 style="color: rgb(75,75,75); text-align: start; vertical-align: bottom; padding-left: 7px;">RAM</h1>
        	<div style="height: 480px; overflow-y: auto; overflow-x: hidden;">
        		<div class="list-group-item checkbox">
        			<label>
        				<input type="checkbox" name="8" class="list-group-item checkbox" value="8"> 8
        			</label>
        		</div>
        		<div class="list-group-item checkbox">
        			<label>
        				<input type="checkbox" name="16" class="list-group-item checkbox" value="16"> 16
        			</label>
        		</div>
        		<div class="list-group-item checkbox">
        			<label>
        				<input type="checkbox" name="32" class="list-group-item checkbox" value="32"> 32
        			</label>
        		</div>
        		<div class="list-group-item checkbox">
        			<label>
        				<input type="checkbox" name="64" class="list-group-item checkbox" value="64"> 64
        			</label>
        		</div>
        		
        		
        	</div>
        </div>
         <div class = "list-group"; style="margin-top:-250px;">
        	<h1 style="color: rgb(75,75,75); text-align: start; vertical-align: bottom; padding-left: 7px;">Internal Storage</h1>
        	<div style="height: 480px; overflow-y: auto; overflow-x: hidden;">
        		<div class="list-group-item checkbox">
        			<label>
        				<input type="checkbox" name="8" class="list-group-item checkbox" value="8"> 64Kb per second
        			</label>
        		</div>
        		<div class="list-group-item checkbox">
        			<label>
        				<input type="checkbox" name="16" class="list-group-item checkbox" value="16"> 128Mb
        			</label>
        		</div>
        		<div class="list-group-item checkbox">
        			<label>
        				<input type="checkbox" name="32" class="list-group-item checkbox" value="32"> 256Mb
        			</label>
        		</div>
        		<div class="list-group-item checkbox">
        			<label>
        				<input type="checkbox" name="64" class="list-group-item checkbox" value="64"> 1Gb
        			</label>
        		</div>
        		
        		
        	</div>
        </div>
	 

	</aside>
	<article class="information_right">
		<div class="box">
  <select>
    <option>Сортировать по ...</option>
    <option>Option 2</option>
    <option>Option 3</option>
    <option>Option 4</option>
    <option>Option 5</option>
  </select>
</div>
		<div class="allslider-box">
<?php while ($row = mysqli_fetch_array($results)) { ?>

<div class="slider-box">
	<div>
    <a href="server.php?del=<?php echo $row['id']; ?>"><img style = "width: 50px; margin-left: 200px; margin-top: -40px;"src="https://image.flaticon.com/icons/png/512/2089/2089743.png"></a>
  </div>
	<div class="img-box">
		<img src=<?php echo $row['url']; ?>>
	</div>
	<p class="detail"><?php echo $row['name']; ?>
		<a href="#" class="price">Price-<?php echo $row['price']; ?>$</a>
	</p>
	<div class="cart">
		<a href="index3.php?edit=<?php echo $row['id']; ?>">Edit</a>
	</div>
</div>
 <?php  } ?>

</div>



<table>
  <thead>
    <tr>
      <div id="error" class="color: red;"></div>
    </tr>
  </thead>
  <tbody>
    <?php while ($row = mysqli_fetch_array($results)) { ?>
      <tr>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['price']; ?></td>
        <td>
         <a href="">Edit</a>
        </td>
       <td>
         <a href="">Delete</a>
        </td>
    </tr>
  <?php  } ?>
    
  </tbody>
</table>
<form method="post" id = "form" action="server.php" onsubmit="return validation()">
<input type="hidden" name="id" value="<?php echo $id; ?>">
    <div class="input-group">
      <label>Name</label>
      <input type="text" id = "name" name="name" value="<?php echo $name; ?>" required>
    </div>
    <div class="input-group">
      <label>Price</label>
      <input type="text" id = "price" name="price" value="<?php echo $price; ?>" required>
    </div>
    <div class="input-group">
      <label>Image URL</label>
      <input type="text" id = "url" name="url" value="<?php echo $url; ?>" required>
    </div>
    <div class="input-group">
      <?php if ($edit_state == false): ?>
        <button class="btn" type="submit" name="save" >Save</button>
      <?php else: ?>
        <button class="btn" type="submit" name="update" >Update</button>
      <?php endif ?>
    </div>
  </form>


	</article>

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
<script type="text/javascript">
const name = document.getElementById('name').value;
const price = document.getElementById('price').value;
const url = document.getElementById('url').value;
const form = document.getElementById('form').value;
const errorElement = document.getElementById('error').value;
function validation(){
  if (name ==='' || url ===''){
    document.getElementById('error').innerHTML = "All field required";
    return false;
  }
  if(price<0){
    document.getElementById('error').innerHTML = "Must be positive";
    return false;
  }
  else{
    return true;
  }
}

</script>
</html>