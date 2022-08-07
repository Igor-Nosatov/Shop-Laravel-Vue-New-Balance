<template>
  <div class="row g-0 pt-5 pb-5">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <h4 class="text-start text-dark pt-2 pb-2">Welcome back, Igor</h4>
      <div class="row g-0">
        <div class="col-md-6 p-1">
          <div class="summary-block">
            <h6 class="text-start text-dark ps-3 pt-3">
              Personal & Account Details
            </h6>
          </div>
          <div class="summary-block-desc">
            <p class="text-start"><small>First Name:</small>Test</p>
            <p class="text-start"><small>Last Name: </small>Test</p>
            <p class="text-start">
              <i class="fa-solid fa-envelope"></i> test@test.gmail.com
            </p>
          </div>

          <div class="summary-block">
            <h6 class="text-start text-dark ps-3 pt-3">My Wish List</h6>
          </div>
          <div class="summary-block-desc">
            <div class="row g-0 product-cart">
              <div class="col-md-4 d-flex justify-content-start">
                <img
                  src="../../../../public/img/cartProduct1.webp"
                  alt=""
                  class="cart-product-image"
                />
              </div>
              <div class="col-md-8 text-start">
                <div class="row g-0">
                  <div class="col-md-7">
                    <h6 class="cart-product-title text-start fw-bold p-1">
                      NB Numeric Jamie Foy 306 Laceless
                    </h6>
                    <small class="p-1">Unisex</small>
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
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 p-1">
          <div class="summary-block">
            <h6 class="text-start text-dark ps-3 pt-3">Order History</h6>
          </div>
          <div class="summary-block-desc">
            <p class="text-start">You haven't placed any orders yet.</p>
          </div>
          <div class="summary-block">
            <h6 class="text-start text-dark ps-3 pt-3">Address Book</h6>
          </div>
          <div class="summary-block-desc">
            <p class="text-start">
              Add one or multiple addresses to your profile to help make your
              checkout process faster.
            </p>
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

.summary-block {
  background-color: #e0e2e2;
  height: 50px;
  margin: 10px 0px;
}
.summary-block-desc {
  min-height: 200px;
}
</style>