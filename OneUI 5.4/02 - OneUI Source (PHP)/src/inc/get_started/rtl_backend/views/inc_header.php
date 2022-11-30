<?php
/**
 * get_started/rtl_backend/views/inc_header.php
 *
 * Author: pixelcave
 *
 * The header of each page
 *
 */
?>

<!-- Header -->
<header id="page-header">
  <!-- Header Content -->
  <div class="content-header">
    <!-- Right Section -->
    <div class="d-flex align-items-center">
      <!-- Toggle Sidebar -->
      <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
      <button type="button" class="btn btn-sm btn-alt-secondary ms-2 d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
        <i class="fa fa-fw fa-bars"></i>
      </button>
      <!-- END Toggle Sidebar -->

      <!-- Toggle Mini Sidebar -->
      <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
      <button type="button" class="btn btn-sm btn-alt-secondary ms-2 d-none d-lg-inline-block" data-toggle="layout" data-action="sidebar_mini_toggle">
        <i class="fa fa-fw fa-ellipsis-v"></i>
      </button>
      <!-- END Toggle Mini Sidebar -->

      <!-- Open Search Section (visible on smaller screens) -->
      <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
      <button type="button" class="btn btn-sm btn-alt-secondary d-sm-none" data-toggle="layout" data-action="header_search_on">
        <i class="si si-magnifier"></i>
      </button>
      <!-- END Open Search Section -->

      <!-- Search Form (visible on larger screens) -->
      <form class="d-none d-sm-inline-block" method="POST">
        <div class="input-group input-group-sm">
          <input type="text" class="form-control form-control-alt" placeholder="Search.." id="page-header-search-input2" name="page-header-search-input2">
          <span class="input-group-text bg-body border-0">
            <i class="si si-magnifier"></i>
          </span>
        </div>
      </form>
      <!-- END Search Form -->
    </div>
    <!-- END Right Section -->

    <!-- Left Section -->
    <div class="d-flex align-items-center">
      <!-- User Dropdown -->
      <div class="dropdown d-inline-block me-2">
        <button type="button" class="btn btn-sm btn-alt-secondary d-flex align-items-center" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img class="rounded-circle" src="<?php echo $one->assets_folder; ?>/media/avatars/avatar10.jpg" alt="Header Avatar" style="width: 21px;">
          <span class="d-none d-sm-inline-block me-2">John</span>
          <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block me-1 mt-1"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-md p-0 border-0" aria-labelledby="page-header-user-dropdown">
          <div class="p-3 text-center bg-body-light border-bottom rounded-top">
            <?php $one->get_avatar(10, '', 48, true); ?>
            <p class="mt-2 mb-0 text-white fw-medium">John Smith</p>
            <p class="mb-0 text-white-50 fs-sm">Web Developer</p>
          </div>
          <div class="p-2">
            <a class="dropdown-item d-flex align-items-center justify-content-between" href="be_pages_generic_inbox.php">
              <span class="fs-sm fw-medium">Inbox</span>
              <span class="badge rounded-pill bg-primary me-2">3</span>
            </a>
            <a class="dropdown-item d-flex align-items-center justify-content-between" href="be_pages_generic_profile.php">
              <span class="fs-sm fw-medium">Profile</span>
              <span class="badge rounded-pill bg-primary me-2">1</span>
            </a>
            <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
              <span class="fs-sm fw-medium">Settings</span>
            </a>  
          </div>
          <div role="separator" class="dropdown-divider m-0"></div>
          <div class="p-2">
            <a class="dropdown-item d-flex align-items-center justify-content-between" href="op_auth_lock.php">
              <span class="fs-sm fw-medium">Lock Account</span>
            </a>
            <a class="dropdown-item d-flex align-items-center justify-content-between" href="op_auth_signin.php">
              <span class="fs-sm fw-medium">Log Out</span>
            </a>
          </div>
        </div>
      </div>
      <!-- END User Dropdown -->

      <!-- Notifications Dropdown -->
      <div class="dropdown d-inline-block me-2">
        <button type="button" class="btn btn-sm btn-alt-secondary" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-fw fa-bell"></i>
          <span class="text-primary">•</span>
        </button>
        <div class="dropdown-menu dropdown-menu-lg p-0 border-0 fs-sm" aria-labelledby="page-header-notifications-dropdown">
          <div class="p-2 bg-body-light border-bottom text-center rounded-top">
            <h5 class="dropdown-header text-uppercase">Notifications</h5>
          </div>
          <ul class="nav-items pe-0 mb-0">
            <li>
              <a class="text-dark d-flex py-2" href="javascript:void(0)">
                <div class="flex-shrink-0 ms-2 me-3">
                  <i class="fa fa-fw fa-check-circle text-success"></i>
                </div>
                <div class="flex-grow-1 ps-2 text-end">
                  <div class="fw-semibold">You have a new follower</div>
                  <span class="fw-medium text-muted">15 min ago</span>
                </div>
              </a>
            </li>
            <li>
              <a class="text-dark d-flex py-2" href="javascript:void(0)">
                <div class="flex-shrink-0 ms-2 me-3">
                  <i class="fa fa-fw fa-plus-circle text-primary"></i>
                </div>
                <div class="flex-grow-1 ps-2 text-end">
                  <div class="fw-semibold">1 new sale, keep it up</div>
                  <span class="fw-medium text-muted">22 min ago</span>
                </div>
              </a>
            </li>
            <li>
              <a class="text-dark d-flex py-2" href="javascript:void(0)">
                <div class="flex-shrink-0 ms-2 me-3">
                  <i class="fa fa-fw fa-times-circle text-danger"></i>
                </div>
                <div class="flex-grow-1 ps-2 text-end">
                  <div class="fw-semibold">Update failed, restart server</div>
                  <span class="fw-medium text-muted">26 min ago</span>
                </div>
              </a>
            </li>
            <li>
              <a class="text-dark d-flex py-2" href="javascript:void(0)">
                <div class="flex-shrink-0 ms-2 me-3">
                  <i class="fa fa-fw fa-plus-circle text-primary"></i>
                </div>
                <div class="flex-grow-1 ps-2 text-end">
                  <div class="fw-semibold">2 new sales, keep it up</div>
                  <span class="fw-medium text-muted">33 min ago</span>
                </div>
              </a>
            </li>
            <li>
              <a class="text-dark d-flex py-2" href="javascript:void(0)">
                <div class="flex-shrink-0 ms-2 me-3">
                  <i class="fa fa-fw fa-user-plus text-success"></i>
                </div>
                <div class="flex-grow-1 ps-2 text-end">
                  <div class="fw-semibold">You have a new subscriber</div>
                  <span class="fw-medium text-muted">41 min ago</span>
                </div>
              </a>
            </li>
            <li>
              <a class="text-dark d-flex py-2" href="javascript:void(0)">
                <div class="flex-shrink-0 ms-2 me-3">
                  <i class="fa fa-fw fa-check-circle text-success"></i>
                </div>
                <div class="flex-grow-1 ps-2 text-end">
                  <div class="fw-semibold">You have a new follower</div>
                  <span class="fw-medium text-muted">42 min ago</span>
                </div>
              </a>
            </li>
          </ul>
          <div class="p-2 border-top text-center">
            <a class="d-inline-block fw-medium" href="javascript:void(0)">
              <i class="fa fa-fw fa-arrow-down me-1 opacity-50"></i> Load More..
            </a>
          </div>
        </div>
      </div>
      <!-- END Notifications Dropdown -->

      <!-- Toggle Side Overlay -->
      <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
      <button type="button" class="btn btn-sm btn-alt-secondary me-2" data-toggle="layout" data-action="side_overlay_toggle">
        <i class="fa fa-fw fa-list-ul fa-flip-horizontal"></i>
      </button>
      <!-- END Toggle Side Overlay -->
    </div>
    <!-- END Left Section -->
  </div>
  <!-- END Header Content -->

  <!-- Header Search -->
  <div id="page-header-search" class="overlay-header bg-body-extra-light">
    <div class="content-header">
      <form class="w-100" method="POST">
        <div class="input-group input-group-sm">
          <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
          <button type="button" class="btn btn-alt-danger rounded-end" data-toggle="layout" data-action="header_search_off">
            <i class="fa fa-fw fa-times-circle"></i>
          </button>
          <input type="text" class="form-control rounded-start" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
        </div>
      </form>
    </div>
  </div>
  <!-- END Header Search -->

  <!-- Header Loader -->
  <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
  <div id="page-header-loader" class="overlay-header bg-body-extra-light">
    <div class="content-header">
      <div class="w-100 text-center">
        <i class="fa fa-fw fa-circle-notch fa-spin"></i>
      </div>
    </div>
  </div>
  <!-- END Header Loader -->
</header>
<!-- END Header -->
