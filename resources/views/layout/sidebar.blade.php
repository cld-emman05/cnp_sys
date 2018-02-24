<div class="logo">
      <a href="/" class="simple-text logo-normal">
          Cover and Pages
      </a>
</div>

  <div class="logo" align = 'center'>
    @if(Request::is('customer'))
      <a href= '#'> Crisostomo Ibarra</a>
      <small class = "simple-text logo-normal"> Customer </small>

      @elseif(Request::is('agent'))
        <a href= '#'> Nidora Zobeyala</a>
        <small class = "simple-text logo-normal"> Sales Agent </small>

        @elseif(Request::is('admin'))
          <a href= '#'> Juan Dela Cruz</a>
          <small class = "simple-text logo-normal"> Administrator </small>

          @elseif(Request::is('pre-press'))
            <a href= '#'> Fernando Amorsolo</a>
            <small class = "simple-text logo-normal"> Pre-Press </small>

            @elseif(Request::is('purchasing'))
              <a href= '#'> Andres Bonifacio</a>
              <small class = "simple-text logo-normal"> Purchasing </small>
    @endif


  </div>

  <div class="sidebar-wrapper">
      <ul class="nav">
          <li class = "{{Request:: is('customer') ? 'active' : ''}}">
              <a href="/customer">
                  <i class="now-ui-icons design_app"></i>
                  <p>Dashboard</p>
              </a>
          </li>

          @if(Request::is('customer'))
          <li>
              <a href="/order/create">
                  <i class="now-ui-icons education_atom"></i>
                  <p>Create Order</p>
              </a>
          </li>

          <li>
              <a href="../examples/map.html">
                  <i class="now-ui-icons location_map-big"></i>
                  <p>Revise Order</p>
              </a>
          </li>

          <li>
              <a href="../notifications.html">
                  <i class="now-ui-icons ui-1_bell-53"></i>
                  <p>Approve Quotation</p>
              </a>
          </li>

          <li>
              <a href="../examples/user.html">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>Monitor Job Status</p>
              </a>
          </li>

          @elseif(Request::is('agent'))
          <li>
              <a href="/order/create">
                  <i class="now-ui-icons education_atom"></i>
                  <p>Manage Orders</p>
              </a>
          </li>

          <li>
              <a href="../examples/map.html">
                  <i class="now-ui-icons location_map-big"></i>
                  <p>Check Quotation Status</p>
              </a>
          </li>

          <li>
              <a href="../examples/map.html">
                  <i class="now-ui-icons location_map-big"></i>
                  <p>Update Job Status</p>
              </a>
          </li>

          @elseif(Request::is('admin'))
          <li>
              <a href="/order/create">
                  <i class="now-ui-icons education_atom"></i>
                  <p>Manage Quotations</p>
              </a>
          </li>

          <li>
              <a href="../examples/map.html">
                  <i class="now-ui-icons location_map-big"></i>
                  <p>Add New Employees</p>
              </a>
          </li>

		  @elseif(Request::is('pre-press'))
          <li>
              <a href="">
                  <i class="now-ui-icons education_atom"></i>
                  <p>View Orders</p>
              </a>
          </li>

          <li>
              <a href="">
                  <i class="now-ui-icons location_map-big"></i>
                  <p>View Job Samples</p>
              </a>
          </li>

          @elseif(Request::is('purchasing'))
          <li>
              <a href="/purchase/create">
                  <i class="now-ui-icons education_atom"></i>
                  <p>Purchase Supplies</p>
              </a>
          </li>

          <li>
              <a href="../examples/map.html">
                  <i class="now-ui-icons location_map-big"></i>
                  <p>View Supplier Status</p>
              </a>
          </li>



      </ul>
@endif
    </div>
