<link rel="stylesheet" href="{{ asset('css/common.css') }}" />
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>coachtech お問い合わせフォーム</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  @yield('css')
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
        <a class="header__logo" href="/">
    coachtech
</a>
      </a>
    </div>
  </header>

  <main>
    @yield('content')
  </main>
</body>

</html>
