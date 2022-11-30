<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php
// Page specific configuration
$one->l_m_content = 'boxed';
?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
  <!-- Quick Overview -->
  <div class="row">
    <div class="col-6 col-lg-3">
      <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
        <div class="block-content block-content-full">
          <div class="item item-circle bg-success-light mx-auto">
            <i class="fa fa-check text-success"></i>
          </div>
        </div>
        <div class="block-content py-2 bg-body-light">
          <p class="fw-medium fs-sm text-success mb-0">
            ORD.00965
          </p>
        </div>
      </a>
    </div>
    <div class="col-6 col-lg-3">
      <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
        <div class="block-content block-content-full">
          <div class="item item-circle bg-success-light mx-auto">
            <i class="fa fa-check text-success"></i>
          </div>
        </div>
        <div class="block-content py-2 bg-body-light">
          <p class="fw-medium fs-sm text-success mb-0">
            Payment
          </p>
        </div>
      </a>
    </div>
    <div class="col-6 col-lg-3">
      <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
        <div class="block-content block-content-full">
          <div class="item item-circle bg-warning-light mx-auto">
            <i class="fa fa-sync fa-spin text-warning"></i>
          </div>
        </div>
        <div class="block-content py-2 bg-body-light">
          <p class="fw-medium fs-sm text-warning mb-0">
            Packaging
          </p>
        </div>
      </a>
    </div>
    <div class="col-6 col-lg-3">
      <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
        <div class="block-content block-content-full">
          <div class="item item-circle bg-body mx-auto">
            <i class="fa fa-times text-muted"></i>
          </div>
        </div>
        <div class="block-content py-2 bg-body-light">
          <p class="fw-medium fs-sm text-muted mb-0">
            Delivery
          </p>
        </div>
      </a>
    </div>
  </div>
  <!-- END Quick Overview -->

  <!-- Products -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Products</h3>
    </div>
    <div class="block-content">
      <div class="table-responsive">
        <table class="table table-borderless table-striped table-vcenter fs-sm">
          <thead>
            <tr>
              <th class="text-center" style="width: 100px;">ID</th>
              <th>Product Name</th>
              <th class="text-center">Stock</th>
              <th class="text-center">QTY</th>
              <th class="text-end" style="width: 10%;">UNIT COST</th>
              <th class="text-end" style="width: 10%;">PRICE</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="text-center"><a href="be_pages_ecom_product_edit.php"><strong>PID.965</strong></a></td>
              <td><a href="be_pages_ecom_product_edit.php">Dark Souls III</a></td>
              <td class="text-center">50</td>
              <td class="text-center"><strong>1</strong></td>
              <td class="text-end">$59,00</td>
              <td class="text-end">$59,00</td>
            </tr>
            <tr>
              <td class="text-center"><a href="be_pages_ecom_product_edit.php"><strong>PID.755</strong></a></td>
              <td><a href="be_pages_ecom_product_edit.php">Control</a></td>
              <td class="text-center">68</td>
              <td class="text-center"><strong>1</strong></td>
              <td class="text-end">$59,00</td>
              <td class="text-end">$59,00</td>
            </tr>
            <tr>
              <td class="text-center"><a href="be_pages_ecom_product_edit.php"><strong>PID.235</strong></a></td>
              <td><a href="be_pages_ecom_product_edit.php">Forza Motorsport 7</a></td>
              <td class="text-center">23</td>
              <td class="text-center"><strong>1</strong></td>
              <td class="text-end">$59,00</td>
              <td class="text-end">$59,00</td>
            </tr>
            <tr>
              <td colspan="5" class="text-end"><strong>Total Price:</strong></td>
              <td class="text-end">$177,00</td>
            </tr>
            <tr>
              <td colspan="5" class="text-end"><strong>Total Paid:</strong></td>
              <td class="text-end">$177,00</td>
            </tr>
            <tr class="table-success">
              <td colspan="5" class="text-end text-uppercase"><strong>Total Due:</strong></td>
              <td class="text-end"><strong>$0,00</strong></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- END Products -->

  <!-- Customer -->
  <div class="row">
    <div class="col-sm-6">
      <!-- Billing Address -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Billing Address</h3>
        </div>
        <div class="block-content">
          <div class="fs-4 mb-1">John Parker</div>
          <address class="fs-sm">
            Sunset Str 598<br>
            Melbourne<br>
            Australia, 11-671<br><br>
            <i class="fa fa-phone"></i> (999) 888-77777<br>
            <i class="fa fa-envelope-o"></i> <a href="javascript:void(0)">company@example.com</a>
          </address>
        </div>
      </div>
      <!-- END Billing Address -->
    </div>
    <div class="col-sm-6">
      <!-- Shipping Address -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Shipping Address</h3>
        </div>
        <div class="block-content">
          <div class="fs-4 mb-1">John Parker</div>
          <address class="fs-sm">
            Sunrise Str 620<br>
            Melbourne<br>
            Australia, 11-587<br><br>
            <i class="fa fa-phone"></i> (999) 888-55555<br>
            <i class="fa fa-envelope-o"></i> <a href="javascript:void(0)">company@example.com</a>
          </address>
        </div>
      </div>
      <!-- END Shipping Address -->
    </div>
  </div>
  <!-- END Customer -->

  <!-- Log Messages -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Log Messages</h3>
    </div>
    <div class="block-content">
      <table class="table table-borderless table-striped table-vcenter fs-sm">
        <tbody>
          <tr>
            <td class="fs-base" style="width: 80px;">
              <span class="badge bg-primary">Order</span>
            </td>
            <td style="width: 220px;">
              <span class="fw-semibold">January 17, 2020 - 18:00</span>
            </td>
            <td>
              <a href="javascript:void(0)">Support</a>
            </td>
            <td class="text-success">Order Completed</td>
          </tr>
          <tr>
            <td class="fs-base">
              <span class="badge bg-primary">Order</span>
            </td>
            <td>
              <span class="fw-semibold">January 17, 2020 - 17:36</span>
            </td>
            <td>
              <a href="javascript:void(0)">Support</a>
            </td>
            <td class="text-warning">Preparing Order</td>
          </tr>
          <tr>
            <td class="fs-base">
              <span class="badge bg-success">Payment</span>
            </td>
            <td>
              <span class="fw-semibold">January 16, 2020 - 18:10</span>
            </td>
            <td>
              <a href="javascript:void(0)">John Parker</a>
            </td>
            <td class="text-success">Payment Completed</td>
          </tr>
          <tr>
            <td class="fs-base">
              <span class="badge bg-danger">Email</span>
            </td>
            <td>
              <span class="fw-semibold">January 16, 2020 - 10:35</span>
            </td>
            <td>
              <a href="javascript:void(0)">Support</a>
            </td>
            <td class="text-danger">Missing payment details. Email was sent and awaiting for payment before processing</td>
          </tr>
          <tr>
            <td class="fs-base">
              <span class="badge bg-primary">Order</span>
            </td>
            <td>
              <span class="fw-semibold">January 15, 2020 - 14:59</span>
            </td>
            <td>
              <a href="javascript:void(0)">Support</a>
            </td>
            <td>All products are available</td>
          </tr>
          <tr>
            <td class="fs-base">
              <span class="badge bg-primary">Order</span>
            </td>
            <td>
              <span class="fw-semibold">January 15, 2020 - 14:29</span>
            </td>
            <td>
              <a href="javascript:void(0)">John Parker</a>
            </td>
            <td>Order Submitted</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <!-- END Log Messages -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
