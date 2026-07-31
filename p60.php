<html>
<head>
<script>
function loadDoc()
{
    const xhttp = new XMLHttpRequest();

    xhttp.onload = function()
    {
        document.getElementById("demo").innerHTML =
            this.responseText;
    }

    xhttp.open("GET", "ajax_info.txt", true);
    xhttp.send();
}
</script>
</head>

<body>

<div id="demo">
    <h2>ajax change this page</h2>
    <button type="button" onclick="loadDoc()">
        Change content
    </button>
</div>

</body>
</html>