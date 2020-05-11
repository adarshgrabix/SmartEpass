
<!DOCTYPE html>
<html>
<head>
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 550px;
  margin: auto;
  text-align: center;
  font-family: arial;
  border: 2px solid black;
}

.tex{

 margin:auto;

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

table, th, td {
  border: 1px solid black;
}
</style>
</head>
<body>



<div class="card">
<br>
  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/af/Upplogo.png/140px-Upplogo.png"  height="100px" width="100px">
  <h3><font color="red"><strong>Ayodhya Police</strong></font></h3>
  <h3>Movement E-Pass Verification</h3><hr>
  <center><img class="avatar" height="140px" width="140px" src="{{$pass->pic}}" alt=""></center><hr>
<center>  <table style="width:100%">
  <tr>
    <th>नाम : {{$pass->name}}</th>
    <th>आयु : {{$pass->age}}</th> 
    <th>मोबाइल: {{$pass->mobile}}</th>
  </tr>
   <tr>
    <th>पिता का नाम: {{$pass->parentsname}}</th>
    <th>थाना: {{$pass->thana}}</th> 
    <th>पता:{{$pass->address}}</th>
  </tr>
  
</table></center>
  
   <br>
  <div class="box">
  <b>गंतव्य: <br>
   समय अंतराल: {{$pass->tinterval}}</b><br><b>आवश्यक सेवा:{{$pass->service}}</b>
  
  </div><br>
  <div class="box">
  <b>Status: <h3><font color="blue">{{$pass->status}}</font></h3></b><br>

  
  </div>
 
  <br>
 <hr><b>Remark:{{$pass->comment}}</b>
  <p><button>Smart Cell, Ayodhya</button></p>
</div>

</body>
</html>


