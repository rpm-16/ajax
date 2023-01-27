<script>
    function start(){
    var x=document.getElementById('tf1').value;
    var y=document.getElementById('tf2').value;
    xhttp=new XMLHttpRequest();
    xhttp.onreadystatechange=function(){
    if (xhttp.readyState==4 && xhttp.status==200)
        document.getElementById("ajax").innerHTML=xhttp.responseText;
    }
    xhttp.open("GET","add.php?x="+x+"&y="+y,true);
    xhttp.send();   
}
</script>

<div class="container">
    <div class="wrapper">
    <input id="tf1">
    <input id="tf2">
    <input type='button' value='Посчитать' onclick='start()'/>

    <div class="result" id="ajax">
        start text
    </div>
    </div>
</div>



<style>
    .container {
        display: flex;
        width: 100%;    
        height: 100%;  
        font-size: 18px;  
    }
    .wrapper {
        max-width: 400px;
        margin: auto;
    }
</style>
