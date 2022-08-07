<template>
  <div class="row g-0 pt-5 pb-5">
    <div class="col-md-2"></div>
    <div class="col-md-4 p-1">
      <h6 class="fw-bold text-start">Create account</h6>
      <p class="text-danger text-start">*Denotes a required field</p>

      <form>
        <div class="mb-3 text-start">
          <label for="inputFirstName" class="form-label text-start">
            <span class="required-input">*</span> First Name</label
          >
          <input type="text" class="form-control no-border" id="inputFirstName" />
        </div>

        <div class="mb-3 text-start">
          <label for="inputLastName" class="form-label text-start"
            ><span class="required-input">*</span> Last Name</label
          >
          <input type="text" class="form-control no-border" id="inputLastName" />
        </div>

        <div class="mb-3 text-start">
          <label for="inputEmail1" class="form-label text-start"
            ><span class="required-input">*</span> Email address</label
          >
          <input
            type="email"
            class="form-control no-border"
            id="inputEmail1"
          />

        </div>
        <div class="mb-3 text-start">
          <label for="inputPassword1" class="form-label text-start"
            ><span class="required-input">*</span> Password</label
          >
          <input type="password" class="form-control no-border" id="inputPassword1" />
        </div>
        <div class="d-flex title-password-requirements text-start">
          <small class="title-password-requirements text-start"
            >Password requirements:</small
          >
        </div>

        <ul class="password-requirements text-start">
          <li>Minimum 8 characters</li>
          <li>At least one capital letter</li>
          <li>At least one number</li>
          <li>At least one special character (! @ # $ % &)</li>
        </ul>
        <div class="mb-3 form-check text-start">
          <input type="checkbox" class="form-check-input no-border" id="iheck1" />
          <label class="form-check-label text-start" for="iheck1"
            >Sign up for email to hear about product launches, exclusive offers
            and athlete news</label
          >
        </div>

        <div class="mb-3 form-check text-start">
          <input type="checkbox" class="form-check-input no-border" id="iheck1" />
          <label class="form-check-label text-start" for="iheck1"
            >By checking the box, you are creating an account with New Balance
            and you agree to the
            <a href="" class="text-dark">Terms & Conditions</a> and
            <a href="" class="text-dark">Privacy Policy.</a></label
          >
        </div>

        <button type="submit" class="btn btn-danger btn-lg d-flex flex-start no-border">
          Create Account
        </button>
        <p class="text-start">
          Already have an account? <a href="" class="text-dark">Log in</a>
        </p>
      </form>
    </div>
    <div class="col-md-6"></div>
  </div>
</template>


<script>
</script>

<style scoped>
.title-password-requirements {
  font-size: 14px !important;
  text-align: start;
}
.password-requirements {
  list-style-type: square;
  font-size: 10px;
}

.no-border{
  border-radius:0px;
}

</style>