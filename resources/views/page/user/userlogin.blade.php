<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="{{ url('logins/style.css') }}" />
    <title>Sign in</title>
  </head>
  <body>
    <div class="container" >
      <div class="forms-container">
        <div class="signin-signup">
          <form method="POST" class="sign-in-form">
			@csrf
            <h2 class="title">Wajib Akun Sekolah</h2>
            <div class="social-media" style="margin-top: 30px;">
              <a href="{{ url('/auth/google') }}" class="social-icon">
                <img src="{{ url('img/google-logo-9808.png') }}" width="100" alt="" srcset="">
              </a>
            </div>
			<a href="{{ url('/auth/google') }}" style="margin-top: 60px; text-decoration: none;" class="btn btn-primary">
				<p style="font-size: 20px; margin-left: 45px; margin-top: 9px; text-decoration: none;">LOGIN</p>
			</a>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Selamat Datang</h3>
            <p>
              Satu Suara Untuk Kemajuan.. Ayo Gunakan Hak Pilihmu dengan Bijak. Jangan Golput <br> <hr>
            </p>
            <p style="margin-top: -20px;">
              Login menggunakan akun sekolah. Selain itu tidak akan bisa login
            </p>
          </div>
          <img src="{{ url('logins/img/log.svg') }}" class="image" alt="" />
        </div>
      </div>

    <script src="{{ url('logins/app.js') }}"></script>
    @include('sweetalert::alert')
  </body>
</html>
