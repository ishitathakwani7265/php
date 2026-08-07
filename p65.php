document.getElementById("myForm").addEventListener("submit", function(e)
{
    e.preventDefault();

    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;

    var xhr = new XMLHttpRequest();

    xhr.open("POST", "p63.php", true);

    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function()
    {
        if(xhr.readyState == 4 && xhr.status == 200)
        {
            document.getElementById("response").innerHTML = xhr.responseText;
        }
    };

    xhr.send("name=" + encodeURIComponent(name) + "&email=" + encodeURIComponent(email));
});