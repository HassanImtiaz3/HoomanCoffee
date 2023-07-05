function storeData(event) {
    event.preventDefault();

    const xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (xhttp.readyState === 4 && xhttp.status === 200) {
            alert(this.responseText);
        }
    };

    var p1 = document.getElementById("fname").value;
    var p2 = document.getElementById("lname").value;
    var p3 = document.getElementById("email").value;
    var p4 = document.getElementById("password").value;

    xhttp.open("POST", "SignUp.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("p1=" + encodeURIComponent(p1) + "&p2=" + encodeURIComponent(p2) 
    + "&p3=" + encodeURIComponent(p3)+ "&p4=" + encodeURIComponent(p4));
}


function redirectLogIn()
{
    window.location.href = "logIn.html";
}

function resetForm() {
    document.getElementById("myForm").reset();
  }