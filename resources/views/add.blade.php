<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>
<body>
 
	<div class="container">
	<h3>Data Negara</h3>
	
	<br/>
	<br/>
 
	<form action="/negara/store" method="post">
    {{ csrf_field() }}
        <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Kode</label>
                <div class="col-sm-10">
                <input type="text" name="kode" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Kode Negara</label>
                <div class="col-sm-10">
                <input type="text" name="kode_iso3" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                <input type="text" name="nama" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Kode Telepon</label>
                <div class="col-sm-10">
                <input type="number" name="kode_telepon" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Mata Uang</label>
                <div class="col-sm-10">
                <input type="text" name="mata_uang" required="required">
                </div>
            </div>
            </br>
            <input type="submit" class="btn btn-primary" value="Simpan Data">
            |
            <a href="/negara" class="btn btn-danger"> Back</a>
	</form>
    </div>
 
</body>
</html>