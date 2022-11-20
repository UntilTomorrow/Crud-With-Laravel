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
	<a href="/karyawan/add" class="btn btn-primary btn-lg  tabindex="3" role="button" aria-disabled="true"> +Tambah Pegawai Baru</a>
	
    
	<br/>
	<br/>
 
	<table class="table table-hover">
		<tr>
			<th>Id</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Telepon</th>
			<th>Opsi</th>
		</tr>
		@foreach($karyawan as $p)
		<tr>
			<td>{{ $p->id }}</td>
			<td>{{ $p->name }}</td>
			<td>{{ $p->email }}</td>
			<td>{{ $p->telp }}</td>
			<td>
				<a href="/karyawan/edit/{{ $p->id }}" class="btn btn-secondary ">Edit</a>
				|
				<a href="/karyawan/hapus/{{ $p->id }}" class="btn btn-secondary ">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>