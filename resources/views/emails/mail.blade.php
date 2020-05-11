
<!DOCTYPE html>
<html>
<head>
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 350px;
  margin: auto;
  text-align: center;
  font-family: arial;
    border: 2px solid black;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: blue;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 12px;
}

.card button:hover {
  opacity: 0.7;
}

.box {
  width: 200px;
  padding: 10px;
  border: 2px solid black;
   border-radius: 25px;
  margin: auto;
}
</style>
</head>
<body>

<h4 style="text-align:center">प्रिय   {{$name}} ,आवश्यक सेवा के लिए आपका ई पास है | प्रिंटआउट लेने की जरूरत नहीं है</h4>

<div class="card">
<br>
  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/af/Upplogo.png/140px-Upplogo.png"  height="100px" width="100px">
  <h3><font color="red"><strong>Ayodhya Police</strong></font></h3>
  <h3>Movement E-Pass</h3><hr>
  <h4>Essential Service: {{$service}}</h4>
   <h4>Distination/स्थान :  {{$dist}}</h4>
  <div class="box">
  <b>Date:{{$passdate}} <br>
   Time Interval:{{$interval}}</b>
  
  </div><br>
  <b>{{$name}} <br> {{$mobile}}</b>
  <br>
  <img src="https://api.qrserver.com/v1/create-qr-code/?size=100x100&data=/checkpass/{{$rid}} " height="100px" width="100px"></img>
  <br> <b>ID:{{$rid}}</b><hr><b>Remark:{{$remark}}</b>
  <p><button>Smart Cell, Ayodhya</button></p>
</div>

</body>
</html>


