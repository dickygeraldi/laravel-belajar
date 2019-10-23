<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<title>Registrasi User</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

<form action="/register" id="register-form" method="POST">
{{ csrf_field() }}
  <div class="container">
    <h1>Registrasi User Baru</h1>
    <p>Mengisi form berikut agar mempercepat proses Registrasi</p>
    <hr>

    @if (count($errors)> 0)
      <div class="alert alert-danger">
        <ul>
          @foreach ($error->all() as $error)
            <li>{{ $error}} </li>
            @endforeach
        </ul>
      </div>

    @endif

    @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{ $message }}</p>
      </div>
    @endif
    
    
      <label for="nama"><b>Nama</b></label>
      <input type="text" placeholder="Masukkan Nama" name="nama" required>

      <label for="password"><b>Kata Sandi</b></label>
      <input type="password" placeholder="Masukkan kata sandi" name="password" required>

      <label for="password-ulang"><b>Tulis ulang kata sandi</b></label>
      <input type="password" placeholder="Repeat Password" name="password-repeat" required>

      <label for="biografi"><b>Biografi</b></label>
      <textarea rows="4" cols="50" name="biografi" form="register-form" placeholder="Masukkan Biografi anda" required></textarea>

      <label for="gender"><b>Jenis Kelamin</b></label><br>
      <input type="radio" name="gender" value="laki">Laki-laki<br>
      <input type="radio" name="gender" value="perempuan">Perempuan

      <hr>
      <button type="submit" class="registerbtn">Register</button>
  </div>
</form>

</body>
</html>
