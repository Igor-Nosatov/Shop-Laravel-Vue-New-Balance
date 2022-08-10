<template>
  <div class="row g-0 pt-5 pb-5">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <div class="row g-0">
        <div class="col-md-3">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Men</a></li>
              <li class="breadcrumb-item"><a href="#">Shoes</a></li>
              <li class="breadcrumb-item active" aria-current="page">
                Lifestyle
              </li>
            </ol>
          </nav>
        </div>
      </div>
      <div class="row g-0">
        <div class="col-md-3 p-2">
          <div class="category1 pt-4">
            <div
              class="d-flex justify-content-between category-border-bottom pb-2"
            >
              <div class="text-start">
                <a
                  data-bs-toggle="collapse"
                  href="#genderCategory"
                  role="button"
                  aria-expanded="false"
                  aria-controls="genderCategory"
                  class="collapse-menu"
                >
                  Gender
                </a>
              </div>
              <div class="text-end">
                <a
                  data-bs-toggle="collapse"
                  href="#genderCategory"
                  role="button"
                  aria-expanded="false"
                  aria-controls="genderCategory"
                  class="collapse-menu"
                >
                  <i class="fa-solid fa-plus"></i>
                </a>
              </div>
            </div>
            <div class="collapse" id="genderCategory">
              <div class="card card-body">
                <ul class="nav flex-column text-start">
                  <li class="nav-item">
                    <div class="mb-3 form-check">
                      <input
                        type="checkbox"
                        class="form-check-input"
                        id="exampleCheck1"
                      />
                      <label class="form-check-label" for="exampleCheck1"
                        >Men</label
                      >
                    </div>
                  </li>
                  <li class="nav-item">
                    <div class="mb-3 form-check">
                      <input
                        type="checkbox"
                        class="form-check-input"
                        id="exampleCheck2"
                      />
                      <label class="form-check-label" for="exampleCheck2"
                        >Women</label
                      >
                    </div>
                  </li>
                  <li class="nav-item">
                    <div class="mb-3 form-check">
                      <input
                        type="checkbox"
                        class="form-check-input"
                        id="exampleCheck3"
                      />
                      <label class="form-check-label" for="exampleCheck3"
                        >Unisex</label
                      >
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="category2 pt-4">
            <div
              class="d-flex justify-content-between category-border-bottom pb-2"
            >
              <div class="text-start">
                <a
                  data-bs-toggle="collapse"
                  href="#size"
                  role="button"
                  aria-expanded="false"
                  aria-controls="size"
                  class="collapse-menu"
                >
                  Size
                </a>
              </div>
              <div class="text-end">
                <a
                  data-bs-toggle="collapse"
                  href="#size"
                  role="button"
                  aria-expanded="false"
                  aria-controls="size"
                  class="collapse-menu"
                >
                  <i class="fa-solid fa-plus"></i>
                </a>
              </div>
            </div>
            <div class="collapse" id="size">
              <div class="card card-body flex-row flex-wrap">
                <div class="check-btn p-1">
                  <input
                    type="checkbox"
                    class="btn-check"
                    id="btn-check-2"
                    name="1"
                    value="2"
                  />
                  <label class="btn btn-primary btn-category" for="btn-check-2"
                    >XS</label
                  >
                </div>
                <div class="check-btn p-1">
                  <input
                    type="checkbox"
                    class="btn-check"
                    id="btn-check-3"
                    name="1"
                    value="1"
                  />
                  <label class="btn btn-primary btn-category" for="btn-check-3"
                    >XS</label
                  >
                </div>
                <div class="check-btn p-1">
                  <input
                    type="checkbox"
                    class="btn-check"
                    id="btn-check-3"
                    name="1"
                    value="1"
                  />
                  <label class="btn btn-primary btn-category" for="btn-check-3"
                    >XS</label
                  >
                </div>
                <div class="check-btn p-1">
                  <input
                    type="checkbox"
                    class="btn-check"
                    id="btn-check-3"
                    name="1"
                    value="1"
                  />
                  <label class="btn btn-primary btn-category" for="btn-check-3"
                    >XS</label
                  >
                </div>
                <div class="check-btn p-1">
                  <input
                    type="checkbox"
                    class="btn-check"
                    id="btn-check-3"
                    name="1"
                    value="1"
                  />
                  <label class="btn btn-primary btn-category" for="btn-check-3"
                    >XS</label
                  >
                </div>
                <div class="check-btn p-1">
                  <input
                    type="checkbox"
                    class="btn-check"
                    id="btn-check-3"
                    name="1"
                    value="1"
                  />
                  <label class="btn btn-primary btn-category" for="btn-check-3"
                    >XS</label
                  >
                </div>
                <div class="check-btn p-1">
                  <input
                    type="checkbox"
                    class="btn-check"
                    id="btn-check-3"
                    name="1"
                    value="1"
                  />
                  <label class="btn btn-primary btn-category" for="btn-check-3"
                    >XS</label
                  >
                </div>
                <div class="check-btn p-1">
                  <input
                    type="checkbox"
                    class="btn-check"
                    id="btn-check-3"
                    name="1"
                    value="1"
                  />
                  <label class="btn btn-primary btn-category" for="btn-check-3"
                    >XS</label
                  >
                </div>
              </div>
            </div>
          </div>

          <div class="category3 pt-4">
            <div
              class="d-flex justify-content-between category-border-bottom pb-2"
            >
              <div class="text-start">
                <a
                  data-bs-toggle="collapse"
                  href="#color"
                  role="button"
                  aria-expanded="false"
                  aria-controls="color"
                  class="collapse-menu"
                >
                  Color
                </a>
              </div>
              <div class="text-end">
                <a
                  data-bs-toggle="collapse"
                  href="#color"
                  role="button"
                  aria-expanded="false"
                  aria-controls="color"
                  class="collapse-menu"
                >
                  <i class="fa-solid fa-plus"></i>
                </a>
              </div>
            </div>
            <div class="collapse" id="color">
              <div class="card card-body flex-row flex-wrap">
                <div class="check-btn p-1">
                  <input type="checkbox" class="checkbox-round-red" /> Red (82)
                </div>
                <div class="check-btn p-1">
                  <input type="checkbox" class="checkbox-round-green" /> Red
                  (99)
                </div>
                <div class="check-btn p-1">
                  <input type="checkbox" class="checkbox-round-blue" /> Red
                  (192)
                </div>
                <div class="check-btn p-1">
                  <input type="checkbox" class="checkbox-round-red" /> Red (82)
                </div>
                <div class="check-btn p-1">
                  <input type="checkbox" class="checkbox-round-green" /> Red
                  (99)
                </div>
                <div class="check-btn p-1">
                  <input type="checkbox" class="checkbox-round-blue" /> Red
                  (192)
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-9 pt-2 pb-2">
          <div class="row g-0">
            <div class="col-md-4 p-1">
              <div class="card" style="width: 100%">
                <a href="" class="relative-icon"
                  ><i class="fa-solid fa-heart fa-2x"></i
                ></a>
                <a href="">
                  <img
                    src="../../../../public/img/storeProduct.webp"
                    class="card-img-top img-fluid no-border"
                    alt="..."
                  />
                </a>

                <div class="card-body">
                  <div class="d-flex flex-row justify-content-between">
                    <h5 class="card-title tgenderCategory-start fw-bold">
                      <a href="" class="tgenderCategory-dark fw-bold">
                        Fresh Foam X 1080v12</a
                      >
                    </h5>
                    <p class="card-title tgenderCategory-start fw-bold">
                      $159.99
                    </p>
                  </div>

                  <p
                    class="
                        text-start
                    "
                  >
                    Men's Running
                  </p>
                  <div class="d-flex flex-row justify-content-start">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 p-1">
              <div class="card" style="width: 100%">
                <a href="" class="relative-icon"
                  ><i class="fa-solid fa-heart fa-2x"></i
                ></a>
                <a href="">
                  <img
                    src="../../../../public/img/storeProduct.webp"
                    class="card-img-top img-fluid no-border"
                    alt="..."
                  />
                </a>

                <div class="card-body">
                  <div class="d-flex flex-row justify-content-between">
                    <h5 class="card-title tgenderCategory-start fw-bold">
                      <a href="" class="tgenderCategory-dark fw-bold">
                        Fresh Foam X 1080v12</a
                      >
                    </h5>
                    <p class="card-title tgenderCategory-start fw-bold">
                      $159.99
                    </p>
                  </div>

                  <p
                    class="
                        text-start
                    "
                  >
                    Men's Running
                  </p>
                  <div class="d-flex flex-row justify-content-start">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 p-1">
              <div class="card" style="width: 100%">
                <a href="" class="relative-icon"
                  ><i class="fa-solid fa-heart fa-2x"></i
                ></a>
                <a href="">
                  <img
                    src="../../../../public/img/storeProduct.webp"
                    class="card-img-top img-fluid no-border"
                    alt="..."
                  />
                </a>

                <div class="card-body">
                  <div class="d-flex flex-row justify-content-between">
                    <h5 class="card-title tgenderCategory-start fw-bold">
                      <a href="" class="tgenderCategory-dark fw-bold">
                        Fresh Foam X 1080v12</a
                      >
                    </h5>
                    <p class="card-title tgenderCategory-start fw-bold">
                      $159.99
                    </p>
                  </div>

                  <p
                    class="
                        text-start
                    "
                  >
                    Men's Running
                  </p>
                  <div class="d-flex flex-row justify-content-start">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 p-1">
              <div class="card" style="width: 100%">
                <a href="" class="relative-icon"
                  ><i class="fa-solid fa-heart fa-2x"></i
                ></a>
                <a href="">
                  <img
                    src="../../../../public/img/storeProduct.webp"
                    class="card-img-top img-fluid no-border"
                    alt="..."
                  />
                </a>

                <div class="card-body">
                  <div class="d-flex flex-row justify-content-between">
                    <h5 class="card-title tgenderCategory-start fw-bold">
                      <a href="" class="tgenderCategory-dark fw-bold">
                        Fresh Foam X 1080v12</a
                      >
                    </h5>
                    <p class="card-title tgenderCategory-start fw-bold">
                      $159.99
                    </p>
                  </div>

                  <p
                    class="
                        text-start
                    "
                  >
                    Men's Running
                  </p>
                  <div class="d-flex flex-row justify-content-start">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 p-1">
              <div class="card" style="width: 100%">
                <a href="" class="relative-icon"
                  ><i class="fa-solid fa-heart fa-2x"></i
                ></a>
                <a href="">
                  <img
                    src="../../../../public/img/storeProduct.webp"
                    class="card-img-top img-fluid no-border"
                    alt="..."
                  />
                </a>

                <div class="card-body">
                  <div class="d-flex flex-row justify-content-between">
                    <h5 class="card-title tgenderCategory-start fw-bold">
                      <a href="" class="tgenderCategory-dark fw-bold">
                        Fresh Foam X 1080v12</a
                      >
                    </h5>
                    <p class="card-title tgenderCategory-start fw-bold">
                      $159.99
                    </p>
                  </div>

                  <p
                    class="
                        text-start
                    "
                  >
                    Men's Running
                  </p>
                  <div class="d-flex flex-row justify-content-start">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 p-1">
              <div class="card" style="width: 100%">
                <a href="" class="relative-icon"
                  ><i class="fa-solid fa-heart fa-2x"></i
                ></a>
                <a href="">
                  <img
                    src="../../../../public/img/storeProduct.webp"
                    class="card-img-top img-fluid no-border"
                    alt="..."
                  />
                </a>

                <div class="card-body">
                  <div class="d-flex flex-row justify-content-between">
                    <h5 class="card-title tgenderCategory-start fw-bold">
                      <a href="" class="tgenderCategory-dark fw-bold">
                        Fresh Foam X 1080v12</a
                      >
                    </h5>
                    <p class="card-title tgenderCategory-start fw-bold">
                      $159.99
                    </p>
                  </div>

                  <p
                    class="
                        text-start
                    "
                  >
                    Men's Running
                  </p>
                  <div class="d-flex flex-row justify-content-start">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row g-0 pt-5 pb-5">
            <div class="col-md-4"></div>
            <div class="col-md-4 p-1">
              <div class="d-flex flex-column justify-content-center">
                <p>You have viewed 24 of 499 items</p>
                <button class="btn btn-danger btn-lg no-border fw-bold">
                  Load 24 more
                </button>
              </div>
            </div>
            <div class="col-md-4"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-2"></div>
  </div>
</template>


<script>
</script>

<style scoped>
.card {
  border: none !important;
  border-radius: 0px !important;
}
.card-title {
  font-size: 14px;
}
.category-title {
  font-size: 12px;
}

.relative-icon {
  position: relative;
  top: 55px;
  left: 100px;
  color: #9b3b3b;
}
.fa-heart:hover {
  color: #9b3b3b;
}
.fa-heart:hover {
  color: #e93939;
}

.collapse-menu {
  width: 100%;
  text-decoration: none !important;
  color: #171717;
  padding-bottom: 20px;
}
.category-border-bottom {
  border-bottom: 1px solid rgb(214, 208, 208);
}

.btn-category {
  width: 48px !important;
  padding: 10px 0px;
}

.checkbox-round-red {
  width: 1.3em;
  height: 1.3em;
  background-color: #ec1111;
  border-radius: 50%;
  vertical-align: middle;
  border: 0.5px solid #777777;
  appearance: none;
  -webkit-appearance: none;
  outline: none;
  cursor: pointer;
}

.checkbox-round-red:checked {
  background-color: rgb(236, 17, 17);
  border: 1px solid #1d1c1c;
}

.checkbox-round-green {
  width: 1.3em;
  height: 1.3em;
  background-color: #11ec44;
  border-radius: 50%;
  vertical-align: middle;
  border: 0.5px solid #777777;
  appearance: none;
  -webkit-appearance: none;
  outline: none;
  cursor: pointer;
}

.checkbox-round-green:checked {
  background-color: rgb(30, 181, 35);
  border: 1px solid #1d1c1c;
}

.checkbox-round-blue {
  width: 1.3em;
  height: 1.3em;
  background-color: #05aefc;
  border-radius: 50%;
  vertical-align: middle;
  border: 0.5px solid #777777;
  appearance: none;
  -webkit-appearance: none;
  outline: none;
  cursor: pointer;
}

.checkbox-round-blue:checked {
  background-color: rgb(35, 142, 196);
  border: 1px solid #1d1c1c;
}

.no-border {
  border-radius: 0px;
}
</style>