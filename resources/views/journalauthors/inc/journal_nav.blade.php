  <!--begin::Sidebar-->
  <div class="d-none d-lg-flex flex-column flex-lg-row-auto w-100 w-lg-275px"
  data-kt-drawer="true"
  data-kt-drawer-name="inbox-aside"
  data-kt-drawer-activate="{default: true, lg: false}"
  data-kt-drawer-overlay="true"
  data-kt-drawer-width="225px"
  data-kt-drawer-direction="start"
  data-kt-drawer-toggle="#kt_inbox_aside_toggle">

  <!--begin::Sticky aside-->
  <div class="card card-flush mb-0"
      data-kt-sticky="true"
      data-kt-sticky-name="inbox-aside-sticky"
      data-kt-sticky-offset="{default: false, xl: '100px'}"
      data-kt-sticky-width="{lg: '275px'}"
      data-kt-sticky-left="auto"
      data-kt-sticky-top="100px"
      data-kt-sticky-animation="false"
      data-kt-sticky-zindex="95"
      >
      <!--begin::Aside content-->
      <div class="card-body">
          <!--begin::Button-->
          <a href="#" class="btn btn-primary fw-bold w-100 mb-8">{{ $user->name }}'s Journal Papers</a>
          <!--end::Button-->

          <!--begin::Menu-->
          <div class="menu menu-column menu-rounded menu-state-bg menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary mb-10">
              <!--begin::Menu item-->
              <div class="menu-item mb-3">
                  <!--begin::Inbox-->
                  <span class="menu-link  {{ request()->is('author*') ? 'active' : '' }}">
                      <span class="menu-icon"><i class="ki-duotone ki-sms fs-2 me-3"><span class="path1"></span><span class="path2"></span></i></span>
                      <a href="{{ route('authors.show',$user->id) }}">
                         <span class="menu-title fw-bold">Published</span>
                      </a>
                      <span class="badge badge-light-success">{{ $published }}</span>
                  </span>
                  <!--end::Inbox-->
              </div>
              <!--end::Menu item-->

              {{-- <!--begin::Menu item-->
              <div class="menu-item mb-3">
                  <!--begin::Marked-->
                  <span class="menu-link {{ request()->is('author.review') ? 'active' : '' }}">
                      <span class="menu-icon"><i class="ki-duotone ki-abstract-23 fs-2 me-3"><span class="path1"></span><span class="path2"></span></i></span>
                      <a href="{{ route('author.review',$user->id)}}">
                      <span class="menu-title fw-bold">Under Review</span>
                      </a>
                  </span>
                  <!--end::Marked-->
              </div>
              <!--end::Menu item--> --}}


          </div>
          <!--end::Menu-->
      </div>
      <!--end::Aside content-->
  </div>
  <!--end::Sticky aside-->
</div>
<!--end::Sidebar-->
