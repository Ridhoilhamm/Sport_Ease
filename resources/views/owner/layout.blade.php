<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>owner-page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
</head>

<style>
    body {
  margin: 0;
  font-family: Arial, sans-serif;
  background-color: #121212;
  color: #ffffff;
}

.sidebar {
  width: 250px;
  background-color: #1e1e1e;
  height: 100vh;
  padding: 20px;
  box-sizing: border-box;
}

.sidebar-header {
  font-size: 20px;
  font-weight: bold;
  margin-bottom: 20px;
}

.sidebar-menu {
  list-style: none;
  padding: 0;
  margin: 0;
}

.menu-group {
  margin-bottom: 20px;
}

.menu-heading {
  font-size: 14px;
  text-transform: uppercase;
  color: #a3a3a3;
  margin-bottom: 10px;
  display: block;
}

.menu-item {
  margin-bottom: 10px;
}

.menu-link {
  text-decoration: none;
  color: #ffffff;
  display: flex;
  align-items: center;
  padding: 10px;
  border-radius: 5px;
  transition: background-color 0.3s ease;
}

.menu-link:hover {
  background-color: #333333;
}

.menu-icon {
  margin-right: 10px;
  font-size: 16px;
}

.menu-text {
  font-size: 16px;
}

</style>

<body>
    <div style="font-family: 'Ubuntu', sans-serif;">

        @if (!isset($hideSidebar) || !$hideSidebar)
        @include('owner.sidebar-owner')
    @endif
    @yield('content')
    @if (!isset($hideNavbar) || !$hideNavbar)
        @include('owner.nav-owner')
    @endif
    </div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>