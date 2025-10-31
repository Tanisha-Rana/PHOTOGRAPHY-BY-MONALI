<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Your Theme</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #4ca1af, #2c3e50);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: 'Poppins', sans-serif;
    }
    .login-card {
      background: #fff;
      border-radius: 15px;
      box-shadow: 0 5px 25px rgba(0, 0, 0, 0.2);
      padding: 40px;
      width: 100%;
      max-width: 400px;
    }
    .login-card h2 {
      color: #2c3e50;
      text-align: center;
      margin-bottom: 25px;
      font-weight: 600;
    }
    .form-control:focus {
      border-color: #4ca1af;
      box-shadow: 0 0 0 0.2rem rgba(76, 161, 175, 0.25);
    }
    .btn-theme {
      background-color: #2c3e50;
      border: none;
      color: white;
      width: 100%;
      padding: 10px;
      border-radius: 50px;
      font-weight: 600;
    }
    .btn-theme:hover {
      background-color: #4ca1af;
      color: #fff;
    }
    .text-center a {
      color: #4ca1af;
      text-decoration: none;
    }
    .text-center a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <div class="login-card">
    <h2>Welcome Back</h2>
    <form>
      <div class="mb-3">
        <label class="form-label">Email Address</label>
        <input type="email" class="form-control" placeholder="Enter your email">
      </div>
      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" class="form-control" placeholder="Enter password">
      </div>
      <button type="submit" class="btn-theme mt-3">Login</button>
      <div class="text-center mt-3">
        <p>Don’t have an account? <a href="register.php">Register here</a></p>
      </div>
    </form>
  </div>

</body>
</html>
