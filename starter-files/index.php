<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./assets/scss/main.css" />
  <link rel="shortcut icon" href="./images/icons8-brain-64.png" type="image/x-icon" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
  <title>Brainster Labs</title>
</head>

<body>
  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg bg-new-warning">
    <div class="container-fluid py-3 px-5">
      <a class="navbar-brand w-15 me-0 text-center fw-bold" href="#"><img class="img-logo mb-1 m-2 m-md-0" src="./images/LogoNav.png" alt="" />
        <p class="text-uppercase font-xs mb-0 fw-bolder">brainster</p>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav m-auto mb-2 mb-lg-0">
          <li class="nav-item ">
            <a class="nav-link fw-bold" aria-current="page" href="https://brainster.co/marketing/" target="_blank">Академија за маркетинг</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link fw-bold" href="https://brainster.co/full-stack/" target="_blank">Академија за програмирање</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link fw-bold" href="https://brainster.co/data-science/" target="_blank">Академија за data science</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link fw-bold" href="https://brainster.co/graphic-design/" target="_blank">Академија за дизајн</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <a href="form.php" class="btn btn-new-danger text-white" type="submit">
            Вработи наш студент
          </a>
        </form>
      </div>
    </div>
  </nav>
  <!-- HERO -->
  <div class="display-1 text-new-danger fw-bold position-absolute transform">
    Brainster Labs
  </div>
  <div class="height">
    <script type="module" src="https://unpkg.com/@splinetool/viewer@0.9.456/build/spline-viewer.js"></script>
    <spline-viewer url="https://prod.spline.design/E5k29t-Y61Aq4eIu/scene.splinecode"></spline-viewer>
  </div>
  <!-- FILTERS -->
  <div class="container-fluid">
    <div class="row">
      <input type="checkbox" class="d-none" id="filter-marketing" />
      <label for="filter-marketing" class="d-inline text-white fw-bold px-0 border-end border-start py-4 align-items-center col-12 col-lg-4 d-flex justify-content-between px-3">
        <p class="mb-0">Проекти на студентите по академијата за маркетинг</p>
        <i class="bi bi-check-circle-fill h2 text-dark"></i>
      </label>
      <input type="checkbox" class="d-none" id="filter-coding" />
      <label for="filter-coding" class="d-inline text-white fw-bold px-0 py-4 border-end border-start col-12 col-lg-4 d-flex align-items-center justify-content-between px-3">
        <p class="mb-0">
          Проекти на студентите по академијата за програмирање
        </p>
        <i class="bi bi-check-circle-fill h2 text-dark"></i>
      </label>
      <input type="checkbox" class="d-none" id="filter-design" />
      <label for="filter-design" class="d-inline text-white fw-bold px-0 py-4 border-end border-start align-items-center col-12 col-lg-4 d-flex justify-content-between px-3">
        <p class="mb-0">Проекти на студентите по академијата за дизајн</p>
        <i class="bi bi-check-circle-fill h2 text-dark"></i>
      </label>
    </div>
  </div>
  <!-- CARDS -->
  <div class="container-fluid bg-new-warning">
    <div class="container py-5">
      <h2 class="text-center m-auto mb-5 fw-bold h1 bg-new-warning py-2">
        Проекти
      </h2>
      <div class="row">
        <div class="col-12 col-md-6 col-lg-4 mb-4 marketing box">
          <a href="#" class="text-decoration-none text-black">
            <div class="card border-0">
              <img src="./images/marketing1.jpg" class="card-img-top" alt="" />
              <div class="bi-arrow-90deg-down bg-warning text-dark text-center mx-3 rounded-bottom h6 py-1">
                Академија за Маркетинг
              </div>
              <div class="card-body">
                <h5 class="card-title fw-bold">
                  Име на проектот стои овде во две линии
                </h5>
                <p class="card-text">
                  Краток опис во кој студентите ќе можат да опишат за што се
                  работи во проектот.
                </p>
                <p class="mb-3 small fw-semibold fst-italic">
                  Април-Октомври 2019
                </p>
                <a href="#" class="btn btn-new-danger text-white w-100">Дознај повеќе</a>
              </div>
            </div>
          </a>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mb-4 marketing box">
          <a href="#" class="text-decoration-none text-black">
            <div class="card border-0">
              <img src="./images/marketing2.jpg" class="card-img-top" alt="" />
              <div class="bi-arrow-90deg-down bg-warning text-dark text-center mx-3 rounded-bottom h6 py-1">
                Академија за Маркетинг
              </div>
              <div class="card-body">
                <h5 class="card-title fw-bold">
                  Име на проектот стои овде во две линии
                </h5>
                <p class="card-text">
                  Краток опис во кој студентите ќе можат да опишат за што се
                  работи во проектот.
                </p>
                <p class="mb-3 small fw-semibold fst-italic">
                  Април-Октомври 2019
                </p>
                <a href="#" class="btn btn-new-danger text-white w-100">Дознај повеќе</a>
              </div>
            </div>
          </a>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mb-4 marketing box">
          <a href="#" class="text-decoration-none text-black">
            <div class="card border-0">
              <img src="./images/marketing3.jpg" class="card-img-top" alt="" />
              <div class="bi-arrow-90deg-down bg-warning text-dark text-center mx-3 rounded-bottom h6 py-1">
                Академија за Маркетинг
              </div>
              <div class="card-body">
                <h5 class="card-title fw-bold">
                  Име на проектот стои овде во две линии
                </h5>
                <p class="card-text">
                  Краток опис во кој студентите ќе можат да опишат за што се
                  работи во проектот.
                </p>
                <p class="mb-3 small fw-semibold fst-italic">
                  Април-Октомври 2019
                </p>
                <a href="#" class="btn btn-new-danger text-white w-100">Дознај повеќе</a>
              </div>
            </div>
          </a>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mb-4 marketing box">
          <a href="#" class="text-decoration-none text-black">
            <div class="card border-0">
              <img src="./images/marketing4.jpg" class="card-img-top" alt="" />
              <div class="bi-arrow-90deg-down bg-warning text-dark text-center mx-3 rounded-bottom h6 py-1">
                Академија за Маркетинг
              </div>
              <div class="card-body">
                <h5 class="card-title fw-bold">
                  Име на проектот стои овде во две линии
                </h5>
                <p class="card-text">
                  Краток опис во кој студентите ќе можат да опишат за што се
                  работи во проектот.
                </p>
                <p class="mb-3 small fw-semibold fst-italic">
                  Април-Октомври 2019
                </p>
                <a href="#" class="btn btn-new-danger text-white w-100">Дознај повеќе</a>
              </div>
            </div>
          </a>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mb-4 marketing box">
          <a href="#" class="text-decoration-none text-black">
            <div class="card border-0">
              <img src="./images/marketing5.jpg" class="card-img-top" alt="" />
              <div class="bi-arrow-90deg-down bg-warning text-dark text-center mx-3 rounded-bottom h6 py-1">
                Академија за Маркетинг
              </div>
              <div class="card-body">
                <h5 class="card-title fw-bold">
                  Име на проектот стои овде во две линии
                </h5>
                <p class="card-text">
                  Краток опис во кој студентите ќе можат да опишат за што се
                  работи во проектот.
                </p>
                <p class="mb-3 small fw-semibold fst-italic">
                  Април-Октомври 2019
                </p>
                <a href="#" class="btn btn-new-danger text-white w-100">Дознај повеќе</a>
              </div>
            </div>
          </a>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mb-4 marketing box">
          <a href="#" class="text-decoration-none text-black">
            <div class="card border-0">
              <img src="./images/marketing6.jpg" class="card-img-top" alt="" />
              <div class="bi-arrow-90deg-down bg-warning text-dark text-center mx-3 rounded-bottom h6 py-1">
                Академија за Маркетинг
              </div>
              <div class="card-body">
                <h5 class="card-title fw-bold">
                  Име на проектот стои овде во две линии
                </h5>
                <p class="card-text">
                  Краток опис во кој студентите ќе можат да опишат за што се
                  работи во проектот.
                </p>
                <p class="mb-3 small fw-semibold fst-italic">
                  Април-Октомври 2019
                </p>
                <a href="#" class="btn btn-new-danger text-white w-100">Дознај повеќе</a>
              </div>
            </div>
          </a>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mb-4 coding box">
          <a href="#" class="text-decoration-none text-black">
            <div class="card border-0">
              <img src="./images/coding2.jpg" class="card-img-top" alt="" />
              <div class="bi-arrow-90deg-down bg-warning text-dark text-center mx-3 rounded-bottom h6 py-1">
                Академија за Програмирање
              </div>
              <div class="card-body">
                <h5 class="card-title fw-bold">
                  Име на проектот стои овде во две линии
                </h5>
                <p class="card-text">
                  Краток опис во кој студентите ќе можат да опишат за што се
                  работи во проектот.
                </p>
                <p class="mb-3 small fw-semibold fst-italic">
                  Април-Октомври 2019
                </p>
                <a href="#" class="btn btn-new-danger text-white w-100">Дознај повеќе</a>
              </div>
            </div>
          </a>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mb-4 coding box">
          <a href="#" class="text-decoration-none text-black">
            <div class="card border-0">
              <img src="./images/coding3.jpg" class="card-img-top" alt="" />
              <div class="bi-arrow-90deg-down bg-warning text-dark text-center mx-3 rounded-bottom h6 py-1">
                Академија за Програмирање
              </div>
              <div class="card-body">
                <h5 class="card-title fw-bold">
                  Име на проектот стои овде во две линии
                </h5>
                <p class="card-text">
                  Краток опис во кој студентите ќе можат да опишат за што се
                  работи во проектот.
                </p>
                <p class="mb-3 small fw-semibold fst-italic">
                  Април-Октомври 2019
                </p>
                <a href="#" class="btn btn-new-danger text-white w-100">Дознај повеќе</a>
              </div>
            </div>
          </a>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mb-4 coding box">
          <a href="#" class="text-decoration-none text-black">
            <div class="card border-0">
              <img src="./images/coding1.jpg" class="card-img-top" alt="" />
              <div class="bi-arrow-90deg-down bg-new-warning text-dark text-center mx-3 rounded-bottom h6 py-1">
                Академија за Програмирање
              </div>
              <div class="card-body">
                <h5 class="card-title fw-bold">
                  Име на проектот стои овде во две линии
                </h5>
                <p class="card-text">
                  Краток опис во кој студентите ќе можат да опишат за што се
                  работи во проектот.
                </p>
                <p class="mb-3 small fw-semibold fst-italic">
                  Април-Октомври 2019
                </p>
                <a href="#" class="btn btn-new-danger w-100 text-white fw-semibold">Дознај повеќе</a>
              </div>
            </div>
          </a>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mb-4 coding box">
          <a href="#" class="text-decoration-none text-black">
            <div class="card border-0">
              <img src="./images/coding4.jpg" class="card-img-top" alt="" />
              <div class="bi-arrow-90deg-down bg-warning text-dark text-center mx-3 rounded-bottom h6 py-1">
                Академија за Програмирање
              </div>
              <div class="card-body">
                <h5 class="card-title fw-bold">
                  Име на проектот стои овде во две линии
                </h5>
                <p class="card-text">
                  Краток опис во кој студентите ќе можат да опишат за што се
                  работи во проектот.
                </p>
                <p class="mb-3 small fw-semibold fst-italic">
                  Април-Октомври 2019
                </p>
                <a href="#" class="btn btn-new-danger text-white w-100">Дознај повеќе</a>
              </div>
            </div>
          </a>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mb-4 coding box">
          <a href="#" class="text-decoration-none text-black">
            <div class="card border-0">
              <img src="./images/coding5.jpg" class="card-img-top" alt="" />
              <div class="bi-arrow-90deg-down bg-warning text-dark text-center mx-3 rounded-bottom h6 py-1">
                Академија за Програмирање
              </div>
              <div class="card-body">
                <h5 class="card-title fw-bold">
                  Име на проектот стои овде во две линии
                </h5>
                <p class="card-text">
                  Краток опис во кој студентите ќе можат да опишат за што се
                  работи во проектот.
                </p>
                <p class="mb-3 small fw-semibold fst-italic">
                  Април-Октомври 2019
                </p>
                <a href="#" class="btn btn-new-danger text-white w-100">Дознај повеќе</a>
              </div>
            </div>
          </a>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mb-4 coding box">
          <a href="#" class="text-decoration-none text-black">
            <div class="card border-0">
              <img src="./images/coding6.jpg" class="card-img-top" alt="" />
              <div class="bi-arrow-90deg-down bg-warning text-dark text-center mx-3 rounded-bottom h6 py-1">
                Академија за Програмирање
              </div>
              <div class="card-body">
                <h5 class="card-title fw-bold">
                  Име на проектот стои овде во две линии
                </h5>
                <p class="card-text">
                  Краток опис во кој студентите ќе можат да опишат за што се
                  работи во проектот.
                </p>
                <p class="mb-3 small fw-semibold fst-italic">
                  Април-Октомври 2019
                </p>
                <a href="#" class="btn btn-new-danger text-white w-100">Дознај повеќе</a>
              </div>
            </div>
          </a>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mb-4 coding box">
          <a href="#" class="text-decoration-none text-black">
            <div class="card border-0">
              <img src="./images/coding7.jpg" class="card-img-top" alt="" />
              <div class="bi-arrow-90deg-down bg-warning text-dark text-center mx-3 rounded-bottom h6 py-1">
                Академија за Програмирање
              </div>
              <div class="card-body">
                <h5 class="card-title fw-bold">
                  Име на проектот стои овде во две линии
                </h5>
                <p class="card-text">
                  Краток опис во кој студентите ќе можат да опишат за што се
                  работи во проектот.
                </p>
                <p class="mb-3 small fw-semibold fst-italic">
                  Април-Октомври 2019
                </p>
                <a href="#" class="btn btn-new-danger text-white w-100">Дознај повеќе</a>
              </div>
            </div>
          </a>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mb-4 coding box">
          <a href="#" class="text-decoration-none text-black">
            <div class="card border-0">
              <img src="./images/coding8.jpg" class="card-img-top" alt="" />
              <div class="bi-arrow-90deg-down bg-warning text-dark text-center mx-3 rounded-bottom h6 py-1">
                Академија за Програмирање
              </div>
              <div class="card-body">
                <h5 class="card-title fw-bold">
                  Име на проектот стои овде во две линии
                </h5>
                <p class="card-text">
                  Краток опис во кој студентите ќе можат да опишат за што се
                  работи во проектот.
                </p>
                <p class="mb-3 small fw-semibold fst-italic">
                  Април-Октомври 2019
                </p>
                <a href="#" class="btn btn-new-danger text-white w-100">Дознај повеќе</a>
              </div>
            </div>
          </a>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mb-4 coding box">
          <a href="#" class="text-decoration-none text-black">
            <div class="card border-0">
              <img src="./images/coding9.jpg" class="card-img-top" alt="" />
              <div class="bi-arrow-90deg-down bg-warning text-dark text-center mx-3 rounded-bottom h6 py-1">
                Академија за Програмирање
              </div>
              <div class="card-body">
                <h5 class="card-title fw-bold">
                  Име на проектот стои овде во две линии
                </h5>
                <p class="card-text">
                  Краток опис во кој студентите ќе можат да опишат за што се
                  работи во проектот.
                </p>
                <p class="mb-3 small fw-semibold fst-italic">
                  Април-Октомври 2019
                </p>
                <a href="#" class="btn btn-new-danger text-white w-100">Дознај повеќе</a>
              </div>
            </div>
          </a>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mb-4 coding box">
          <a href="#" class="text-decoration-none text-black">
            <div class="card border-0">
              <img src="./images/coding10.jpg" class="card-img-top" alt="" />
              <div class="bi-arrow-90deg-down bg-warning text-dark text-center mx-3 rounded-bottom h6 py-1">
                Академија за Програмирање
              </div>
              <div class="card-body">
                <h5 class="card-title fw-bold">
                  Име на проектот стои овде во две линии
                </h5>
                <p class="card-text">
                  Краток опис во кој студентите ќе можат да опишат за што се
                  работи во проектот.
                </p>
                <p class="mb-3 small fw-semibold fst-italic">
                  Април-Октомври 2019
                </p>
                <a href="#" class="btn btn-new-danger text-white w-100">Дознај повеќе</a>
              </div>
            </div>
          </a>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mb-4 design box">
          <a href="#" class="text-decoration-none text-black">
            <div class="card border-0">
              <img src="./images/design4.jpg" class="card-img-top" alt="" />
              <div class="bi-arrow-90deg-down bg-warning text-dark text-center mx-3 rounded-bottom h6 py-1">
                Академија за Дизајн
              </div>
              <div class="card-body">
                <h5 class="card-title fw-bold">
                  Име на проектот стои овде во две линии
                </h5>
                <p class="card-text">
                  Краток опис во кој студентите ќе можат да опишат за што се
                  работи во проектот.
                </p>
                <p class="mb-3 small fw-semibold fst-italic">
                  Април-Октомври 2019
                </p>
                <a href="#" class="btn btn-new-danger text-white w-100">Дознај повеќе</a>
              </div>
            </div>
          </a>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mb-4 design box">
          <a href="#" class="text-decoration-none text-black">
            <div class="card border-0">
              <img src="./images/design1.jpg" class="card-img-top" alt="" />
              <div class="bi-arrow-90deg-down bg-warning text-dark text-center mx-3 rounded-bottom h6 py-1">
                Академија за Дизајн
              </div>
              <div class="card-body">
                <h5 class="card-title fw-bold">
                  Име на проектот стои овде во две линии
                </h5>
                <p class="card-text">
                  Краток опис во кој студентите ќе можат да опишат за што се
                  работи во проектот.
                </p>
                <p class="mb-3 small fw-semibold fst-italic">
                  Април-Октомври 2019
                </p>
                <a href="#" class="btn btn-new-danger text-white w-100">Дознај повеќе</a>
              </div>
            </div>
          </a>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0 design box">
          <a href="#" class="text-decoration-none text-black">
            <div class="card border-0">
              <img src="./images/design2.jpg" class="card-img-top" alt="" />
              <div class="bi-arrow-90deg-down bg-warning text-dark text-center mx-3 rounded-bottom h6 py-1">
                Академија за Дизајн
              </div>
              <div class="card-body">
                <h5 class="card-title fw-bold">
                  Име на проектот стои овде во две линии
                </h5>
                <p class="card-text">
                  Краток опис во кој студентите ќе можат да опишат за што се
                  работи во проектот.
                </p>
                <p class="mb-3 small fw-semibold fst-italic">
                  Април-Октомври 2019
                </p>
                <a href="#" class="btn btn-new-danger text-white w-100">Дознај повеќе</a>
              </div>
            </div>
          </a>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0 design box">
          <a href="#" class="text-decoration-none text-black">
            <div class="card border-0">
              <img src="./images/design3.jpg" class="card-img-top" alt="" />
              <div class="bi-arrow-90deg-down bg-warning text-dark text-center mx-3 rounded-bottom h6 py-1">
                Академија за Дизајн
              </div>
              <div class="card-body">
                <h5 class="card-title fw-bold">
                  Име на проектот стои овде во две линии
                </h5>
                <p class="card-text">
                  Краток опис во кој студентите ќе можат да опишат за што се
                  работи во проектот.
                </p>
                <p class="mb-3 small fw-semibold fst-italic">
                  Април-Октомври 2019
                </p>
                <a href="#" class="btn btn-new-danger text-white w-100">Дознај повеќе</a>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- FOOTER -->
  <div class="text-center bg-dark text-white py-3 fixed-bottom">
    <p class="mb-0">
      Изработено со
      <i class="bi bi-balloon-heart-fill text-danger h5"></i> од студентите на
      Brainster
    </p>
  </div>
  <!-- Offcanvas -->
  <div class="offcanvas offcanvas-start vw-100 bg-dark text-white" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasExampleLabel">
        Brainster Labs
      </h5>
      <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <ul class="navbar-nav m-auto mb-2 mb-lg-0">
        <li class="nav-item ps-0">
          <a class="nav-link fw-bold" aria-current="page" href="https://brainster.co/marketing/" target="_blank">Академија за маркетинг</a>
        </li>
        <li class="nav-item ps-0">
          <a class="nav-link fw-bold" href="https://brainster.co/full-stack/" target="_blank">Академија за програмирање</a>
        </li>
        <li class="nav-item ps-0">
          <a class="nav-link fw-bold" href="https://brainster.co/data-science/" target="_blank">Академија за data science</a>
        </li>
        <li class="nav-item ps-0">
          <a class="nav-link fw-bold" href="https://brainster.co/graphic-design/" target="_blank">Академија за дизајн</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <a href="form.php" class="btn btn-new-danger text-white" type="submit">
          Вработи наш студент
        </a>
      </form>
    </div>
  </div>
  <script>
    document
      .querySelector("#filter-coding")
      .addEventListener("change", filterCoding);
    document
      .querySelector("#filter-design")
      .addEventListener("change", filterDesign);
    document
      .querySelector("#filter-marketing")
      .addEventListener("change", filterMarketing);

    function filterCoding() {
      hideAllBoxes();

      if (document.querySelector("#filter-coding").checked) {
        var codingBoxes = document.querySelectorAll(".coding");
        codingBoxes.forEach((codingBox) => {
          codingBox.style.display = "inline-block";
        });

        document.querySelector("#filter-design").checked = false;
        document.querySelector("#filter-marketing").checked = false;
      } else {
        showAllBoxes();
      }
    }

    function filterDesign() {
      hideAllBoxes();

      if (document.querySelector("#filter-design").checked) {
        var designBoxes = document.querySelectorAll(".design");
        designBoxes.forEach((designBox) => {
          designBox.style.display = "inline-block";
        });

        document.querySelector("#filter-coding").checked = false;
        document.querySelector("#filter-marketing").checked = false;
      } else {
        showAllBoxes();
      }
    }

    function filterMarketing() {
      hideAllBoxes();

      if (document.querySelector("#filter-marketing").checked) {
        var marketingBoxes = document.querySelectorAll(".marketing");
        marketingBoxes.forEach((marketingBox) => {
          marketingBox.style.display = "inline-block";
        });

        document.querySelector("#filter-design").checked = false;
        document.querySelector("#filter-coding").checked = false;
      } else {
        showAllBoxes();
      }
    }

    function hideAllBoxes() {
      var allBoxes = document.querySelectorAll(".box");

      allBoxes.forEach((box) => {
        box.style.display = "none";
      });
    }

    function showAllBoxes() {
      var allBoxes = document.querySelectorAll(".box");

      allBoxes.forEach((box) => {
        box.style.display = "inline-block";
      });
    }
    // SPLINE HERO
    window.onload = function() {
      var shadowRoot = document.querySelector("spline-viewer").shadowRoot;
      shadowRoot.querySelector("#logo").remove();
    };
  </script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>