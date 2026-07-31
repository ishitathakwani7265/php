<html>
<head>
    <title>Live AJAX Validation</title>
</head>
<body>

    <form id="myForm">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" placeholder="Type a username...">
        <span id="error-msg" style="color: green;"></span>
    </form>

    <script>
        const usernameInput = document.getElementById('username');
        const errorMsg = document.getElementById('error-msg');

        usernameInput.addEventListener('input', function() {
            const val = usernameInput.value;

            if (val.trim() === '') {
                errorMsg.textContent = 'Username is required.';
                return;
            }

            // Send AJAX request using Fetch API
            fetch('validate1.php?username=' + encodeURIComponent(val))
                .then(response => response.text())
                .then(data => {
                    errorMsg.textContent = data; // Display server response
                })
                .catch(error => console.error('Error:', error));
        });
    </script>

</body>
</html>