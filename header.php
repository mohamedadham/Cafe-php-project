<head>
<title>Cafe PHP Project</title>
<link rel="stylesheet" href="../CSS/header.css">
<link rel="stylesheet" href="../CSS/displayAll.css">
    
</head>
<body>
<header>
<div class="topnav">

  <form action="../validateDirection.php" method="POST" enctype="multipart/form-data">
  <input type="hidden" name="source" value="header">
  <button id="homePage" name="home">Home</button>
  <button id="prodPage" name="product">Products</button>
  <button id="userPage" name="user">Users</button>
  <button id="manualPage" name="MO">Manual Order</button>
  <button id="checksPage" name="checks">Checks </button>
  <button id="logout" name="logout"><a href="../logout.php">Logout </button>
   </form>

</div>
</header>