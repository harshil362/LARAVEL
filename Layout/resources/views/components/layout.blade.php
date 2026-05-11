<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/custom.js"></script>

    <title>{{ $title }}</title>
    <style>

     /* Navbar */
.header ul {
    display: flex;
    list-style: none;
    margin: 0;
    padding: 0;
    background-color: #333;
}

.header ul li {
    margin: 0;
}

.header ul li a {
    display: block;
    padding: 14px 20px;
    color: white;
    text-decoration: none;
}

.header ul li a:hover {
    background-color: #555;
}

/* Page content */
h1, h3, p {
    padding: 10px 20px;
}

/* Footer */
.footer p {
    position: fixed;   /* better than absolute */
    bottom: 0;
    left: 0;
    width: 100%;
    background-color: aqua;
    margin: 0;
    padding: 10px;
    text-align: center;
}
    </style>
</head>
<div>
        <div class="header">
    <ul>
        <li><a href="">Home</a></li>
        <li><a href="">About</a></li>
        <li><a href="">Login</a></li>
        <li><a href="">Contact</a></li>
    </ul>
</div>
<div>
    {{ $main }}
</div>

<div class="footer">
    <p>Footer</p>
</div>

</body>
</html>