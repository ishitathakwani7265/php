<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>My Project</title>

<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f9f9f9;
    color: #333;
  }

  header {
    background-color: #333;
    padding: 15px 30px;
  }

  nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    gap: 20px;
  }

  nav a {
    color: white;
    text-decoration: none;
    font-weight: bold;
  }

  nav a:hover {
    text-decoration: underline;
  }

  .content {
    max-width: 700px;
    margin: 50px auto;
    padding: 20px;
    text-align: center;
  }

  h1 {
    color: #333;
  }

  p {
    font-size: 16px;
    line-height: 1.6;
  }

  footer {
    text-align: center;
    padding: 15px;
    background-color: #eee;
    margin-top: 40px;
  }

  #formMsg {
    margin-top: 10px;
    font-weight: bold;
  }

  #formMsg.success {
    color: green;
  }

  #formMsg.error {
    color: red;
  }

  table {
    margin-top: 30px;
    border-collapse: collapse;
    width: 100%;
  }

  th, td {
    padding: 8px;
    border: 1px solid black;
  }

  th {
    background-color: #eee;
  }
</style>
</head>

<body>

<header>
  <nav>
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="about.html">About Us</a></li>
      <li><a href="contact.html">Contact Us</a></li>
      <li><a href="feedback.html">Feedback</a></li>
      <li><a href="register.html">Register</a></li>
    </ul>
  </nav>
</header>

<div class="content">

  <form id="productForm">

    <label>Product Name</label>
    <input type="text" name="nm" id="nm">

    <br><br>

    <label>Price</label>
    <input type="number" step="0.01" name="price" id="price">

    <br><br>

    <label>Qty</label>
    <input type="number" name="qty" id="qty" min="1">

    <br><br>

    <input type="submit" name="submit" value="Submit">

  </form>

  <div id="formMsg"></div>

  <div>
    <table align="center">

      <tr>
        <th>ID</th>
        <th>Product Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>

      <tbody id="productTableBody">
        <!-- Product rows will be loaded here -->
      </tbody>

    </table>
  </div>

</div>

<footer>
  <p>&copy; 2026 My Project. All rights reserved.</p>
</footer>


<script>

const form = document.getElementById('productForm');
const formMsg = document.getElementById('formMsg');
const tableBody = document.getElementById('productTableBody');


/* Load products from p68.php */

function loadProducts() {

  fetch('p68.php')

    .then(response => response.text())

    .then(html => {

      tableBody.innerHTML = html;

    })

    .catch(error => {

      tableBody.innerHTML =
        "<tr><td colspan='6'>Failed to load products.</td></tr>";

      console.error(error);

    });
}


/* Submit form to p66.php */

form.addEventListener('submit', function(e) {

  e.preventDefault();

  const formData = new FormData(form);

  fetch('p66.php', {

    method: 'POST',
    body: formData

  })

  .then(response => response.json())

  .then(data => {

    formMsg.textContent = data.message;

    if (data.success) {

      formMsg.className = 'success';

      form.reset();

      loadProducts();

    } else {

      formMsg.className = 'error';

    }

  })

  .catch(error => {

    formMsg.textContent = 'Something went wrong.';
    formMsg.className = 'error';

    console.error(error);

  });

});


/* Load products when page opens */

document.addEventListener('DOMContentLoaded', function() {

  loadProducts();

});

</script>

</body>
</html>