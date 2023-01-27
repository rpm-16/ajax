<script>
   let xhttp = new XMLHttpRequest();
   xhttp.onreadystatechange = function(){
   if (xhttp.readyState==4 && xhttp.status==200)
      document.getElementById("result").innerHTML+=xhttp.responseText;
   }

    xhttp.open("POST","/test.txt", true);
    xhttp.send();

    let xhttp1 = new XMLHttpRequest();
    xhttp1.onreadystatechange = function(){
    if (xhttp1.readyState==4 && xhttp1.status==200)
        document.getElementById("result").innerHTML+=xhttp1.responseText;
   }

   xhttp1.open("POST","/test1.txt", true);
    
</script>

<div class="container">
    <div class="wrapper">
        <form class="form" action="">
            <div class="form__item">
                <input value="" placeholder="что-либо">
            </div>
            <div class="year">
                <select>
                        <option value="" disabled selected>Укажите год</option>
                </select>
            </div>

            <div class="form__item">
                <button onClick="xhttp.send();">click me</button>
                <input type="submit" value="Отправить" onClick="xhttp1.send();">
                <input type="reset" value="Очистить">
            </div>
    </form>
    <div class="result" id="result">
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
