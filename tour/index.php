<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Тест</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
    #style{
      font-size:20px;
      background:orange;


    }
    body{
    background-image: url(jesus2.jpg) ;
 
    background-repeat: no-repeat;
    
}
 button:hover{
   color:red;
   background:red;
 }
    </style>
  </head>

  <body>
  <div class="w3-center w3-margin-top w3-padding-64">
    <form method="post" action="countries.php" name="myform">
      <label for="formCountry" id = "style"> Выберите страну: </label>
      <select name="formCountry">
        <option value="US">США</option>
        <option value="UK">Великобритания</option>
        <option value="France">Франция</option>
        <option value="Russia">Россия</option>
        <option value="Japan">Япония</option>
      </select>
      <br />
      <label for="stars" id = "style"> Выберите количество звездочек: </label>
      <select name="stars">
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5" selected>5</option>
      </select>
      <br />
      <label for="stars" id = "style"> Выберите цену за отель: </label>
      <p style = color:white;>10</p>
      <input
        
        type="range"
        name="price"
        id="price"
        min="10"
        max="500"
        value="10"
        oninput="priceOutput.value=price.value"
      />
      <p style = color:white;>500 </p>
      <br />
      <output name="priceOutput" id="priceOutput" style = color:white;>10</output>
      <br />
      <button name="formSubmit" id = "style"  >ОК</button>
    </form>
    </div>
  </body>
</html>