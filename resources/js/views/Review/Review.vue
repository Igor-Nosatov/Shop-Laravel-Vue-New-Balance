<template>
  <div class="row g-0 pt-5 pb-5">
    <div class="offset-2 col-8">
      <div class="row g-0 border-bottom">
        <div class="d-flex flex-row justify-content-start">
          <img
            src="../../../../public/img/product1.webp"
            class="img-review rounded-start"
            alt="..."
          />
          <div class="pt-4 ps-2">
            <h5 class="card-title fw-bold text-start">Write a Review</h5>
            <p class="card-text text-start">MADE in USA 990v3</p>
          </div>
        </div>
      </div>
      <div class="row g-0">
        <div class="col-12 g-0 d-flex flex-column">
          <p class="text-start">
            <small class="text-start">
              <span class="required-mark text-start">*</span>Required
              question</small
            >
          </p>
          <p class="text-start">
            Your Rating<span class="required-mark">*</span>
          </p>
          <div class="d-flex flex-row justify-content-start">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
          </div>

          <div class="mb-3 text-start pt-5">
            <label for="inputHeadline" class="form-label text-start">
              Review Headline
              <span class="required-mark">*</span></label
            >
            <input type="text" class="form-control" id="inputHeadline" />
          </div>
          <div class="mb-3 text-start pt-3">
            <label for="inputNickname" class="form-label text-start">
              Nickname <span class="required-mark">*</span></label
            >
            <input type="text" class="form-control" id="inputNickname" />
          </div>
          <div class="form-floating">
            <h6 class="text-start">
              Comments <span class="required-mark">*</span>
            </h6>
            <textarea
              class="form-control"
              placeholder="How you use the product. Things that are great about it. Things that aren't great about it."
              id="floatingTextarea2"
              style="height: 100px"
            ></textarea>
          </div>

          <h5 class="text-start pt-5 fw-bold">Overall Fit</h5>
          <p class="text-start pt-2 pb-2">Select one</p>

          <div class="card card-body flex-row flex-wrap">
            <div class="check-btn p-1 flex-fill">
              <input
                type="checkbox"
                class="btn-check"
                id="btn-check-2"
                name="1"
                value="2"
              />
              <label class="btn btn-primary btn-category" for="btn-check-2"
                >Runs small</label
              >
            </div>
            <div class="check-btn p-1 flex-fill">
              <input
                type="checkbox"
                class="btn-check"
                id="btn-check-3"
                name="1"
                value="1"
              />
              <label class="btn btn-primary btn-category" for="btn-check-3"
                >True size</label
              >
            </div>
            <div class="check-btn p-1 flex-fill">
              <input
                type="checkbox"
                class="btn-check"
                id="btn-check-4"
                name="1"
                value="1"
              />
              <label class="btn btn-primary btn-category" for="btn-check-4"
                >Runs large</label
              >
            </div>
          </div>

          <h5 class="text-start pt-5 fw-bold">Add an Image</h5>
          <div class="mb-3">
            <input
              type="file"
              class="form-control"
              aria-label="file example"
              required
            />
            <div class="invalid-feedback">
              Example invalid form file feedback
            </div>
          </div>
          <div class="mb-3 text-start pt-3">
            <label for="inputLocation" class="form-label text-start">
              Location <span class="required-mark">*</span></label
            >
            <input type="text" class="form-control" id="inputLocation" />
          </div>

          <div class="mb-3 text-start pt-3">
            <label for="inputEmail1" class="form-label text-start">
              Email address <span class="required-mark">*</span></label
            >
            <input type="email" class="form-control" id="inputEmail1" />
          </div>
          <div class="mb-3 form-check text-start border-bottom">
            <input type="checkbox" class="form-check-input" id="iheck1" />
            <label class="form-check-label text-start" for="iheck1"
              >I agree with the terms and privacy policy</label
            >
          </div>
          <p class="text-start">
            <small
              >By submitting a review, I agree to the New Balance Privacy Policy
              and Terms and Conditions and acknowledge that all submitted
              information, aside from email address, will be included in my
              review on newbalance.com and may display with product reviews on
              select third party retailers.</small
            >
          </p>
          <button class="btn btn-danger btn-lg">Submit review</button>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>
.img-review {
  height: 100px;
}
.border-bottom {
  border-bottom: 1px solid #e4e4e4;
  padding-bottom: 10px;
}

.required-mark {
  color: red;
}
.btn-danger {
  width: 200px;
}
</style>