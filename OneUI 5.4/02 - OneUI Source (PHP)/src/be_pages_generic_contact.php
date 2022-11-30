<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero Content -->
<div class="bg-primary-dark">
  <div class="content content-full text-center pt-7 pb-5">
    <h1 class="h2 text-white mb-2">
      Contact Us.
    </h1>
    <h2 class="h4 fw-normal text-white-75">
      Do you need any assistance with your plan? Let us know!
    </h2>
  </div>
</div>
<!-- END Hero Content -->

<!-- Page Content -->
<div class="bg-body-extra-light">
  <div class="content">
    <div class="row items-push justify-content-center">
      <div class="col-md-10 col-xl-5">
        <form action="be_pages_generic_contact.php" method="POST" onsubmit="return false;">
          <div class="row">
            <div class="col-md-6">
              <div class="mb-4">
                <label class="form-label" for="frontend-contact-firstname">Firstname</label>
                <input type="text" class="form-control" id="frontend-contact-firstname" name="frontend-contact-firstname" placeholder="Enter your firstname..">
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-4">
                <label class="form-label" for="frontend-contact-lastname">Lastname</label>
                <input type="text" class="form-control" id="frontend-contact-lastname" name="frontend-contact-lastname" placeholder="Enter your lastname..">
              </div>
            </div>
          </div>
          <div class="mb-4">
            <label class="form-label" for="frontend-contact-email">Email</label>
            <input type="email" class="form-control" id="frontend-contact-email" name="frontend-contact-email" placeholder="Enter your email..">
          </div>
          <div class="mb-4">
            <label class="form-label" for="frontend-contact-subject">Custom Menu</label>
            <select class="form-select" id="frontend-contact-subject" name="frontend-contact-subject" size="1">
              <option value="1">Support</option>
              <option value="2">Billing</option>
              <option value="3">Management</option>
              <option value="4">Feature Request</option>
            </select>
          </div>
          <div class="mb-4">
            <label class="form-label" for="frontend-contact-msg">Textarea</label>
            <textarea class="form-control" id="frontend-contact-msg" name="frontend-contact-msg" rows="7" placeholder="Enter your message.."></textarea>
          </div>
          <div class="mb-4">
            <button type="submit" class="btn btn-alt-primary">
              <i class="fa fa-paper-plane me-1 opacity-50"></i> Send Message
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
