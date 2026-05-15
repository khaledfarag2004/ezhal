<!DOCTYPE html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="icon" href="images/favicon.png" type="image/webp" />

    <link rel="stylesheet" href="style/swiper-bundle.min.css" />
    <link rel="stylesheet" href="style/all.min.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.9/css/select2.min.css"
      integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"
      integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="style/bootstrap.rtl.min.css" />
    <link rel="stylesheet" href="style/main.css" />
    <title>Ezhal</title>
  </head>

  <body data-bs-spy="scroll" data-bs-target="#navbar-example">
  <!-- preloader -->
  <div class="preloader-container">
      <div class="preloader"></div>
  </div>
  <!-- header -->
  @include('site.layout.header')
  <!-- main -->
@include('site.layout.main')
  <!-- Start About -->
@include('site.layout.about')
  <!-- Start features -->
@include('site.layout.feature')
  <!-- Start app-screens -->
@include('site.layout.app-screen')
  <!-- Start Clients Reviews -->
@include('site.layout.review')
  <!-- start faq -->
@include('site.layout.faq')
  <!-- Start download app -->
@include('site.layout.download-app')
  <!-- Start contact -->
  @include('site.layout.content')
  <!-- Start Footer -->
  @include('site.layout.footer')

  <!-- to top button  -->
  <button class="toTop">
      <i class="fa-light toTop-icon fa-arrow-up"></i>
  </button>
  <!-- end of to top button -->

  <script src="js/jquery-3.7.0.min.js"></script>
  <script src="js/swiper-bundle.min.js"></script>
  <script
      src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.9/js/select2.min.js"
      integrity="sha512-9p/L4acAjbjIaaGXmZf0Q2bV42HetlCLbv8EP0z3rLbQED2TAFUlDvAezy7kumYqg5T8jHtDdlm1fgIsr5QzKg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
  ></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script
      src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"
      integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
  ></script>
  <script src="js/main.js"></script>
  </body>
</html>
