
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Admin page</title>
    <style>
    .nav-item
    {
      margin:0 15px 0 0;
    }
  .nav-item a
  {
   font-size:130%;
  }
  .nav-item:hover
  {
    background-color:#FB5431;
    border-radius:5px;
    transform: scale(1.2);
    transition:0.4s;
    
  }
  .nav-item:hover a
  {
    color:white !important;
  }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/mystore/admin"><img width="100" height="100" src="../asset/img/admin.jpg" alt=""></a>  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/mystore/">Store</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php?admin=true">Admin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sanpham.php">Sản phẩm</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Khách hàng</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Đơn hàng</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Đánh giá sản phẩm</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Thống kê</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../logout.php">Đăng xuất</a>
        </li>
      </ul>
     
    </div>
  </div>
</nav>
</body>
</html>
