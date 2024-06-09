<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chez Joe</title>

    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">

    <link href="public/css/style.css" rel="stylesheet">
</head>

<body>
  @section('header')
      <header class="header">
        <div class="header__content content">
          <a class="header__title" href="index.php">
            <img class="header__img" src="public/images/logo.jpg" alt="Logo Chez Joe" draggable="false">
            <h1 class="header__name">Chez Joe</h1>
          </a>
          <div class="header__ctas">
            <a href="index.php?action=search" class="header__cta cta" aria-label="Search"><i class='header__icon bx bx-search-alt-2'></i></a>
            <a href="index.php?action=panier" class="header__cta cta cta--secondary" aria-label="Ajouter"><i class='header__icon bx bx-cart'></i></a>
          </div>
        </div>
      </header>
  @show

  <section class='main'>
      @yield('content')
  </section>
</body>
</html>
