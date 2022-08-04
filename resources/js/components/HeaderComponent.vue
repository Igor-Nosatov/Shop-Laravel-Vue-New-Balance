<template>
  <div class="row g-0 bottom-border pt-2 pb-2">
    <div class="col-1"></div>
    <div class="col-10">
      <div class="row g-0">
        <div class="col-2">
          <small><i class="fa-solid fa-phone"></i> + 9(999)999-99-09 </small>
        </div>
        <div class="col-8 text-center">
          <small>free delivery from 250$ </small>
        </div>
        <div class="col-2 text-right">
          <small> <a href="">Contact</a> </small>
          <small><a href=""> Help </a> </small>
          <small><a href=""> Our stores </a> </small>
        </div>
      </div>
    </div>
    <div class="col-1"></div>
  </div>
  <div class="row g-0">
    <div class="col-1"></div>
    <div class="col-10">
      <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img
              src="../../../public/img/logo.png"
              alt="new balance logo"
              class="logo"
          /></a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="#">New</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Men</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Women</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Gender Neutral</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Kids</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Sale</a>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </li>
                </ul>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input
                class="form-control me-2"
                type="search"
                placeholder="Search"
                aria-label="Search"
              />
              <button class="btn btn-outline-success" type="submit">
                Search
              </button>
            </form>
            <i class="fa-solid fa-user fa-2x"></i>
            <a href="">Log in</a>
            <span>|</span>
            <a href="">Join</a>
            <a href=""><i class="fa-solid fa-bag-shopping fa-2x"></i></a>
          </div>
        </div>
      </nav>
    </div>
    <div class="col-1"></div>
  </div>
</template>

<script setup>
</script>

<style scoped>
.bottom-border {
  border-bottom: 1px solid #e3e1e1;
}

.logo {
  height: 120px;
  width: 100%;
}
</style>

