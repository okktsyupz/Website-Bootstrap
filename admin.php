<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
</head>
<body>
<style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        header {
            background-color: #f8d7da;
            color: #4a4a4a;
            padding: 20px;
            text-align: center;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }
        header h1 {
            margin: 0;
        }
        nav {
            display: flex;
            justify-content: flex-end;
            padding: 10px 20px;
        }
        nav a {
            margin-left: 20px;
            text-decoration: none;
            color: #4a4a4a;
            font-weight: 500;
            transition: color 0.3s;
        }
        nav a:hover {
            color: #d63384;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: white;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .container h2 {
            color: #333;
        }
        .container p {
            color: #555;
        }
        .logout {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            background-color: #d63384;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: 500;
            transition: background-color 0.3s;
        }
        .logout:hover {
            background-color: #c82365;
        }
    </style>
  <!-- nav -->
        <nav class="navbar navbar-expand-lg navbar-danger-subtle bg-danger-subtle shadow-lg fixed-top">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">De' Floria</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-right" id="navbarNavDropdown">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <?php echo '<a class="nav-link" aria-current="page" href="index.php">Logout</a>'; ?>
                </li>
              </ul>
            </div>
          </div>
        </nav>
    <!-- end -->
    
  <!-- admin -->
    <div class="container-fluid pt-5 pb-5 mt-5 mb-5">
      <div class="container">
        <h2>Halaman Admin</h2>

        <?php
        session_start();
        echo 'Welcome Admin, <h1>' . $_SESSION['namaLog'] . '</h1>';
        ?>
      </div>
    </div>
  <!-- end -->
</body>
</html>