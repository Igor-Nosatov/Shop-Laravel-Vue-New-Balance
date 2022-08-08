<template>
  <div class="row g-0 pt-5 pb-5">
    <div class="col-md-2"></div>
    <div class="col-md-8 p-1">
      <div class="row g-0">
        <div class="col-md-8">
          <h5 class="text-start fw-bold pb-3">My Cart</h5>
          <div class="row g-0 product-cart">
            <div class="col-md-3 d-flex justify-content-start">
              <img
                src="../../../../public/img/cartProduct1.webp"
                alt=""
                class="cart-product-image"
              />
            </div>
            <div class="col-md-5 text-start">
              <div class="row g-0">
                <div class="col-md-7">
                  <h6 class="cart-product-title text-start fw-bold p-1">
                    NB Numeric Jamie Foy 306 Laceless
                  </h6>
                  <small class="p-1">Unisex</small>
                </div>
                <div class="col-md-5">
                  <p class="cart-product-price text-end fw-bold p-1">$79.99</p>
                </div>
              </div>
              <div class="d-flex flex-row justify-content-start pt-2">
                <div class="cart-fs-text ps-1">Color:</div>
                <div class="cart-fs-text ps-3">Navy with White</div>
              </div>
              <div class="d-flex flex-row justify-content-start pt-2">
                <div class="cart-fs-text ps-1">Size:</div>
                <div class="cart-fs-text ps-3">M13 / W14.5</div>
              </div>
              <div class="d-flex flex-row justify-content-start pt-2">
                <div class="cart-fs-text ps-1">Width:</div>
                <div class="cart-fs-text ps-3">Standard</div>
              </div>
              <div class="d-flex flex-row justify-content-start pt-2">
                <div class="cart-fs-text ps-1">Qty:</div>
                <div class="cart-fs-text ps-3">
                  <select name="select">
                    <!--Supplement an id here instead of using 'name'-->
                    <option value="1">1</option>
                    <option value="2" selected>2</option>
                    <option value="3">3</option>
                  </select>
                </div>
              </div>
              <p class="text-dark fw-bold text-start pt-3">
                <a href="" class="text-dark fw-bold text-start">Remove</a>
              </p>
            </div>
            <div class="col-md-3">
              <div class="info-block">
                <p class="text-start fw-bold p-1">UPS Ground (2-5 days)</p>
                <p class="text-start p-1 ship-info-text">
                  <i class="fa-solid fa-box"></i> 2-5 business days once shipped
                </p>
              </div>
            </div>
          </div>
          <div class="row g-0 product-cart">
            <div class="col-md-3 d-flex justify-content-start">
              <img
                src="../../../../public/img/cartProduct2.webp"
                alt=""
                class="cart-product-image"
              />
            </div>
            <div class="col-md-5 text-start">
              <div class="row g-0">
                <div class="col-md-7">
                  <h6 class="cart-product-title text-start fw-bold p-1">
                    NB Numeric Jamie Foy 306 Laceless
                  </h6>
                  <small class="p-1">Unisex</small>
                </div>
                <div class="col-md-5">
                  <p class="cart-product-price text-end fw-bold p-1">$79.99</p>
                </div>
              </div>
              <div class="d-flex flex-row justify-content-start pt-2">
                <div class="cart-fs-text ps-1">Color:</div>
                <div class="cart-fs-text ps-3">Navy with White</div>
              </div>
              <div class="d-flex flex-row justify-content-start pt-2">
                <div class="cart-fs-text ps-1">Size:</div>
                <div class="cart-fs-text ps-3">M13 / W14.5</div>
              </div>
              <div class="d-flex flex-row justify-content-start pt-2">
                <div class="cart-fs-text ps-1">Width:</div>
                <div class="cart-fs-text ps-3">Standard</div>
              </div>
              <div class="d-flex flex-row justify-content-start pt-2">
                <div class="cart-fs-text ps-1">Qty:</div>
                <div class="cart-fs-text ps-3">
                  <select name="select">
                    <!--Supplement an id here instead of using 'name'-->
                    <option value="1">1</option>
                    <option value="2" selected>2</option>
                    <option value="3">3</option>
                  </select>
                </div>
              </div>
              <p class="text-dark fw-bold text-start pt-3">
                <a href="" class="text-dark fw-bold text-start">Remove</a>
              </p>
            </div>
            <div class="col-md-3">
              <div class="info-block">
                <p class="text-start fw-bold p-1">UPS Ground (2-5 days)</p>
                <p class="text-start p-1 ship-info-text">
                  <i class="fa-solid fa-box"></i> 2-5 business days once shipped
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="order-summary-block">
            <h5 class="ps-4 text-start fw-bold pb-4 pt-4">Order Summary</h5>
            <div class="d-flex flex-row justify-content-between">
              <p class="ps-4">Sub Total</p>
              <p class="pe-4">$164.98</p>
            </div>
            <div class="d-flex flex-row justify-content-between">
              <p class="ps-4">Shipping: UPS Ground (2-5 days)</p>
              <p class="pe-4">FREE</p>
            </div>
            <div class="d-flex flex-row justify-content-between">
              <p class="ps-4">Sales tax</p>
              <p class="pe-4">Calculated at checkout</p>
            </div>
            <div class="d-flex flex-row justify-content-between">
              <p class="ps-4 fw-bold">Order Total</p>
              <p class="pe-4 fw-bold">$164.98</p>
            </div>
            <div class="d-grid gap-2 pe-2 ps-2">
              <button class="btn btn-danger no-border">Checkout</button>
            </div>
            <div class="d-flex flex-row justify-content-end pt-2 pb-2 pe-2">
              <button class="btn btn-primary no-border">Paypal checkout</button>
            </div>
          </div>
        </div>
      </div>
      <div class="row g-0 pt-5">
        <div class="col-md-12  d-none d-sm-none d-md-none d-lg-block">
          <h3 class="text-start fw-bold pt-2 pb-2">You May Also Like</h3>
          <div
            id="carouselExampleControls"
            class="carousel slide"
            data-bs-ride="carousel"
          >
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row g-0">
                  <div class="col-md-3">
                    <div class="card" style="width: 18rem">
                      <img
                        src="../../../../public/img/m990gl5_nb_02_i.webp"
                        class="card-img-top"
                      />
                      <div class="card-body">
                        <p class="card-text">
                          <span class="product-title text-start">
                            MADE in USA 990v5 Core
                          </span>
                          <span class="product-price text-end">$184.99</span>
                        </p>
                        <small class="product-category">Men's</small>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card" style="width: 18rem">
                      <img
                        src="../../../../public/img/m990gl5_nb_02_i.webp"
                        class="card-img-top"
                      />
                      <div class="card-body">
                        <p class="card-text">
                          <span class="product-title text-start">
                            MADE in USA 990v5 Core
                          </span>
                          <span class="product-price text-end">$184.99</span>
                        </p>
                        <small class="product-category">Men's</small>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card" style="width: 18rem">
                      <img
                        src="../../../../public/img/m990gl5_nb_02_i.webp"
                        class="card-img-top"
                      />
                      <div class="card-body">
                        <p class="card-text">
                          <span class="product-title text-start">
                            MADE in USA 990v5 Core
                          </span>
                          <span class="product-price text-end">$184.99</span>
                        </p>
                        <small class="product-category">Men's</small>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card" style="width: 18rem">
                      <img
                        src="../../../../public/img/m990gl5_nb_02_i.webp"
                        class="card-img-top"
                      />
                      <div class="card-body">
                        <p class="card-text">
                          <span class="product-title text-start">
                            MADE in USA 990v5 Core
                          </span>
                          <span class="product-price text-end">$184.99</span>
                        </p>
                        <small class="product-category">Men's</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row g-0">
                  <div class="col-md-3">
                    <div class="card" style="width: 18rem">
                      <img
                        src="../../../../public/img/m990gl5_nb_02_i.webp"
                        class="card-img-top"
                      />
                      <div class="card-body">
                        <p class="card-text">
                          <span class="product-title text-start">
                            MADE in USA 990v5 Core
                          </span>
                          <span class="product-price text-end">$184.99</span>
                        </p>
                        <small class="product-category">Men's</small>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card" style="width: 18rem">
                      <img
                        src="../../../../public/img/m990gl5_nb_02_i.webp"
                        class="card-img-top"
                      />
                      <div class="card-body">
                        <p class="card-text">
                          <span class="product-title text-start">
                            MADE in USA 990v5 Core
                          </span>
                          <span class="product-price text-end">$184.99</span>
                        </p>
                        <small class="product-category">Men's</small>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card" style="width: 18rem">
                      <img
                        src="../../../../public/img/m990gl5_nb_02_i.webp"
                        class="card-img-top"
                      />
                      <div class="card-body">
                        <p class="card-text">
                          <span class="product-title text-start">
                            MADE in USA 990v5 Core
                          </span>
                          <span class="product-price text-end">$184.99</span>
                        </p>
                        <small class="product-category">Men's</small>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card" style="width: 18rem">
                      <img
                        src="../../../../public/img/m990gl5_nb_02_i.webp"
                        class="card-img-top"
                      />
                      <div class="card-body">
                        <p class="card-text">
                          <span class="product-title text-start">
                            MADE in USA 990v5 Core
                          </span>
                          <span class="product-price text-end">$184.99</span>
                        </p>
                        <small class="product-category">Men's</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#carouselExampleControls"
              data-bs-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#carouselExampleControls"
              data-bs-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-2"></div>
  </div>
</template>


<script setup>
</script>

<style scoped>
.cart-product-image {
  height: 200px;
}

.info-block {
  background-color: #e0e2e2;
  height: 80px;
}
.ship-info-text {
  font-size: 11px;
  position: relative;
  top: -20px;
}
.cart-fs-text {
  font-size: 11px;
}
.form-select {
  height: 40px !important;
}
.remove-btn {
  margin-top: 40px;
}

.order-summary-block {
  background-color: #e0e2e2;
}

.no-border{
  border-radius:0px;
}
</style>