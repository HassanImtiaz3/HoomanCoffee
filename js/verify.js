
function verifyUser(event) {
    event.preventDefault();

    const xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
      if (xhttp.readyState === 4 && xhttp.status === 200) {
        const response = this.responseText;
        if (response === "success") {
          // Redirect to cartPage.html
          window.location.href = "index.php";
        } else {
          // Display error message
          alert(response);
        }
      }
    };

    var p1 = document.getElementById("email").value;
    var p2 = document.getElementById("password").value;

    xhttp.open("POST", "logIn.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("p1=" + encodeURIComponent(p1) + "&p2=" + encodeURIComponent(p2));

}