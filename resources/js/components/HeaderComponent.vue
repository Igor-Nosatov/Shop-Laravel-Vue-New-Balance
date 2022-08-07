<template>
  <div class="row g-0 bottom-border pt-2 pb-2">
    <div class="col-1"></div>
    <div class="col-10">
      <div class="row g-0">
        <div class="col-sm-6 col-md-2 pt-3">
           <p class="text-dark fw-bold"><small><i class="fa-solid fa-phone"></i> + 9(999)999-99-09 </small></p>
        </div>
        <div class="col-sm-6 col-md-2 offset-md-3  pt-3">
          <p class="text-dark fw-bold"><small>free delivery from 250$ </small></p>
        </div>
        <div class="col-sm-6 offset-md-3 col-md-2  pt-3">
          <small class="ps-2 pe-2 fw-bold">
            <a href="" class="text-dark">Contact</a>
          </small>
          <small class="ps-2 pe-2 fw-bold"
            ><a href="" class="text-dark"> Help </a>
          </small>
          <small class="ps-2 pe-2 fw-bold"
            ><a href="" class="text-dark"> Our stores </a>
          </small>
        </div>
      </div>
    </div>
    <div class="col-1"></div>
  </div>
  <div class="row g-0 bottom-border">
    <div class="col-1 menu-height"></div>
    <div class="col-10 menu-height">
      <nav class="navbar navbar-expand-lg bg-light menu-height">
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
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 fw-bold">
              <li class="nav-item pe-2 ps-2">
                <a class="nav-link text-dark" href="#">New</a>
              </li>
              <li class="nav-item pe-2 ps-2">
                <a class="nav-link text-dark" href="#">Men</a>
              </li>
              <li class="nav-item pe-2 ps-2">
                <a class="nav-link text-dark" href="#">Women</a>
              </li>
              <li class="nav-item  pe-2 ps-2">
                <a class="nav-link text-dark" href="#">Gender Neutral</a>
              </li>
              <li class="nav-item  pe-2 ps-2">
                <a class="nav-link text-dark" href="#">Kids</a>
              </li>
              <li class="nav-item  pe-2 ps-2">
                <a class="nav-link text-dark" href="#">Sale</a>
              </li>
            </ul>
            <form class="d-flex justify-content-center" role="search">
              <div class="input-group pb-4 pt-4">
                <input
                  type="text"
                  class="form-control form-control-search form-control-width"
                  id="autoSizingInputGroup"
                  placeholder="Search"
                />
                <i class="fa-solid fa-magnifying-glass"></i>
              </div>
            </form>
            <i class="fa-solid fa-user fa-2x ps-5 pe-2"></i>
            <a href="" class="pe-2 fw-bold text-dark">Log in</a>
            <span>|</span>
            <a href="" class="pe-5 ps-2 fw-bold text-dark">Join</a>
            <a href=""><i class="fa-solid fa-bag-shopping fa-2x"></i></a>
          </div>
        </div>
      </nav>
    </div>
    <div class="col-1 menu-height"></div>
  </div>
</template>

<script setup>
</script>

<style scoped>
.bottom-border {
  border-bottom: 1px solid #e3e1e1;
}

.logo {
  height: 80px;
  width: 100%;
}

.form-control-width {
  width: 250px;
}
.form-control-search {
  border-radius: 0px;
  background-color: #e9ecef;
  border: 1px solid #d1d4d6;
}

.input-group-text {
  background-color: #e9ecef;
  border: 1px solid #d1d4d6;
  cursor: pointer;
}

.fa-bag-shopping,
.fa-user {
  font-size: 30px;
  color: #000;
}
.fa-magnifying-glass {
  position: relative;
  left: -30px;
  top: 10px;
}

@media (min-width: 76px) and (max-width: 400px) {
  .fa-magnifying-glass {
    display: none;
  }
}
</style>

