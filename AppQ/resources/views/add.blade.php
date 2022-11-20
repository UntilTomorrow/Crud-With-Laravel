<!DOCTYPE html>
<html>
<head>
	<title>App Data Karyawan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/minty/bootstrap.min.css" integrity="sha384-H4X+4tKc7b8s4GoMrylmy2ssQYpDHoqzPa9aKXbDwPoPUA3Ra8PA5dGzijN+ePnH" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Data Karyawan</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="#">Home
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<br/>
	
    
	<br/>
	<br/>
 
	<form action="/karyawan/save" method="post">
        {{ csrf_field() }}
        <div class="mb-3 mt-3">
            <label for="Id" class="form-label">ID:</label>
            <input type="number" class="form-control" id="Id" placeholder="Enter Id" name="id">
        </div>
        <div class="mb-3 mt-3">
            <label for="Name" class="form-label">Nama</label>
            <input type="Name" class="form-control" id="name" placeholder="Enter name" name="name">
        </div>
        <div class="mb-3 mt-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
        <div class="mb-3">
            <label for="Number" class="form-label">Telepon:</label>
            <input type="Number" class="form-control" id="Number" placeholder="Enter Telepon" name="telp">
        </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
 
 
</body>
</html>
