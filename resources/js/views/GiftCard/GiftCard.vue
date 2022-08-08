<template>
  <div class="row g-0 pt-5 pb-5">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <div class="row g-0">
        <div class="col-md-8">
          <img src="../../../../public/img/LogoGift.png" alt="" class="img-fluid"/>
        </div>
        <div class="col-md-4 ps-2 pe-2 pb-4">
          <h3 class="text-start fw-bold">The Perfect Gift When You</h3>
          <h3 class="text-start fw-bold">Don't Know Their Size</h3>
          <p class="text-start pt-3">
            We offer two convenient gift options: an eGift delivered via email
            or a physical Gift Card sent by mail. Both are valid on footwear,
            apparel and accessories purchased at newbalance.com and
            participating New Balance stores.
          </p>

          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <button
                class="nav-link active no-border fw-bold"
                id="pills-egift-tab"
                data-bs-toggle="pill"
                data-bs-target="#pills-egift"
                type="button"
                role="tab"
                aria-controls="pills-egift"
                aria-selected="true"
              >
                eGift
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button
                class="nav-link no-border fw-bold"
                id="pills-physical-gift-tab"
                data-bs-toggle="pill"
                data-bs-target="#pills-physical-gift"
                type="button"
                role="tab"
                aria-controls="pills-physical-gift"
                aria-selected="false"
              >
                Physical Gift Card
              </button>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div
              class="tab-pane fade show active"
              id="pills-egift"
              role="tabpanel"
              aria-labelledby="pills-egift-tab"
              tabindex="0"
            >
              <form class="text-start">
                <div class="mb-3 text-start pt-2 pb-2">
                  <input
                    type="text"
                    class="form-control form-control-gift-cart"
                    placeholder="Your Name"
                  />
                </div>

                <div class="mb-3 text-start pt-2 pb-2">
                  <input
                    type="email"
                    class="form-control form-control-gift-cart"
                    placeholder="Your Email"
                  />
                </div>

                <div class="mb-3 text-start pt-2 pb-2">
                  <input
                    type="text"
                    class="form-control form-control-gift-cart"
                    placeholder="Recipient's Name"
                  />
                </div>

                <div class="mb-3 text-start pt-2 pb-2">
                  <input
                    type="text"
                    class="form-control form-control-gift-cart"
                    placeholder="Confirm Recipient's Email"
                  />
                </div>

                <div class="mb-3 text-start pt-2 pb-2">
                  <input
                    type="text"
                    class="form-control form-control-gift-cart"
                    placeholder="Add a message(Optional)"
                  />
                </div>

                <div class="select-amount pt-3 pb-3">
                  <label for="amount">Amount</label>
                  <br />
                  <select name="amount" id="amount">
                    <option value="25">$25</option>
                    <option value="125">$125</option>
                    <option value="225">$225</option>
                    <option value="325">$325</option>
                  </select>
                </div>

                <button type="button" class="btn btn-danger btn-gift">
                  Add to cart <i class="fa-solid fa-bag-shopping"></i>
                </button>
              </form>
            </div>
            <div
              class="tab-pane fade"
              id="pills-physical-gift"
              role="tabpanel"
              aria-labelledby="pills-physical-gift-tab"
              tabindex="0"
            >
              <form action="">
                <div class="row g-0">
                  <div class="col-md-6">
                    <div class="select-amount pt-3 pb-3">
                      <label for="amount">Amount</label>
                      <br />
                      <select name="amount" id="amount">
                        <option value="25">$25</option>
                        <option value="125">$125</option>
                        <option value="225">$225</option>
                        <option value="325">$325</option>
                      </select>
                    </div>
                  </div>
                   <div class="col-md-6">
                    <div class="select-amount pt-3 pb-3">
                      <label for="amount">Qty</label>
                      <br />
                      <select name="amount" id="amount">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                      </select>
                    </div>
                  </div>
                </div>

                <button type="button" class="btn btn-danger btn-gift">
                  Add to cart <i class="fa-solid fa-bag-shopping"></i>
                </button>
              </form>
            </div>
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
.btn-gift {
  height: 60px;
  border-radius: 0px;
  width: 100%;
  font-weight: bold;
}

.form-control-gift-cart {
  border-radius: 0px;
  height: 40px;
  border: 0px solid #000;
  border-bottom: 1px solid #000;
}

.no-border{
  border-radius:0px;
}
</style>