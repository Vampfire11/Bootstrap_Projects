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
  <nav class="navbar navbar-expand-lg bg-new-warning shadow">
    <div class="container-fluid py-3 px-4">
      <a class="navbar-brand w-15 me-0 text-center fw-bold" href="index.php"><img class="img-logo mb-1 m-2 m-md-0" src="./images/LogoNav.png" alt="Logo" />
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
          <button class="btn btn-new-danger text-white" type="submit">
            Вработи наш студент
          </button>
        </form>
      </div>
    </div>
  </nav>
  <!-- FORM -->
  <form action="insert.php" class="needs-validation" novalidate autocomplete="off" method="POST">
    <div class="container-fluid bg-new-warning vh-100">
      <div class="container">
        <h1 class="fw-bold text-center m-auto display-3 pt-5 pb-5">
          Вработи студенти
        </h1>
        <div class="row px-0">
          <div class="col-12 col-md-6 mb-4">
            <label for="name_surname" class="fw-bold mb-2">Име и презиме</label>
            <input type="text" name="name_surname" class="form-control h-75" placeholder="Вашето име и презиме" aria-label="First name" id="name_surname" required />
          </div>
          <div class="col-12 col-md-6 mb-4">
            <label for="company_name" class="fw-bold mb-2">Име на компанија</label>
            <input type="text" name="company_name" class="form-control h-75" placeholder="Име на вашата компанија" aria-label="First name" id="company_name" required />
          </div>
          <div class="col-12 col-md-6 mb-4">
            <label for="email" class="fw-bold mb-2">Контакт имејл</label>
            <input type="email" name="email" class="form-control h-75" placeholder="Контакт имејл на вашата компанија" aria-label="First name" id="email" required />
          </div>
          <div class="col-12 col-md-6 mb-4">
            <label for="number" class="fw-bold mb-2">Контакт телефон</label>
            <input type="number" name="number" class="form-control h-75" placeholder="Контакт телефон на вашата компанија" aria-label="First name" id="number" required />
          </div>
          <div class="col-12 col-md-6">
            <label for="student_type" class="fw-bold mb-2">Тип на студенти</label>
            <select class="form-select form-select-lg mb-3" name="student_type" aria-label="example" id="student_type" required>
              <option selected value="">Изберете тип на студент</option>
              <option value="marketing">Студенти од маркетинг</option>
              <option value="coding">Студенти од програмирање</option>
              <option value="datascience">Студенти од data science</option>
              <option value="design">Студенти од дизајн</option>
            </select>
          </div>
          <div class="col-12 col-md-6">
            <label class="mb-4"></label>
            <button type="submit" class="btn btn-lg btn-new-danger w-100 text-white text-uppercase valid-feedback">
              Испрати
            </button>
          </div>
        </div>
      </div>
    </div>
  </form>
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
    (() => {
      "use strict";
      const forms = document.querySelectorAll(".needs-validation");

      Array.from(forms).forEach((form) => {
        form.addEventListener(
          "submit",
          (event) => {
            if (!form.checkValidity()) {
              event.preventDefault();
              event.stopPropagation();
            }

            form.classList.add("was-validated");
          },
          false
        );
      });
    })();
  </script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>