<!DOCTYPE html>
<html>
<head>
<title>Welcome!</title>
<style>
body, html {
  height: 100%;
  margin: 0;
  
}

.bgimg {
  background-image: url('img/space.jpg');
  height: 100%;
  background-position: center;
  background-size: cover;
  position: relative;
  color: white;
  font-family: "Courier New", Courier, monospace;
  font-size: 25px;
}

.topleft {
  position: absolute;
  top: 0;
  left: 16px;
}

.bottomleft {
  position: absolute;
  bottom: 0;
  left: 16px;
}

.middle {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

hr {
  margin: auto;
  width: 40%;
}
</style>
</head>
<body>

<div class="bgimg" >
  <div class="topleft">
    <p>SUCCESS!</p>
  </div>
  <div class="middle" >
    <h1 color="black">YOU'RE IN!!</h1>
    <hr>
    <p>Check <a href="http://localhost:8080/phpmyadmin/sql.php?db=register&amp;table=infor&amp;pos=0" target="_blank"><span style="text-decoration: underline;"><span style="font-size: 15pt; color: #00ff00;"><strong>this Link</strong></span></span></a> to see the Data Stored in the Database,,,</p>
  </div>
  <div class="bottomleft">
    <p>Made with Love by Ndekere.</p>
  </div>
</div>

</body>
</html>
