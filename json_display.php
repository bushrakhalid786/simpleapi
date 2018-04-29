<!DOCTYPE html>
<html>
<body>

<h2>Get data as JSON from a PHP file</h2>

<p id="name"></p>
<p id="age"></p>
<p id="city"></p>

<!-- Javascript Calling JSON file-->
<script>

//The XMLHttpRequest object can be used to request data from a web server.

var xmlhttp = new XMLHttpRequest();

xmlhttp.onreadystatechange = function() {
    
    //readyState === 4 and status === 200 means everything is right
    if (this.readyState == 4 && this.status == 200) {
        myObj = JSON.parse(this.responseText);
        document.getElementById("name").innerHTML = myObj.name;
        document.getElementById("age").innerHTML = myObj.age;
        document.getElementById("city").innerHTML = myObj.city;
    }

};

xmlhttp.open("GET", "json.php", true);
xmlhttp.send();

</script>

</body>
</html>
