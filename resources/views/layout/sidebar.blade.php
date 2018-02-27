<div class="logo">
      <a href="/" class="simple-text logo-normal">
        <img src = "{{ asset('img/logo1.png') }}">
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
          <li class = "{{Request:: is('/order/create') ? 'active' : ''}}">
              <a href= '/order/create'>
                  <i class="now-ui-icons shopping_cart-simple"></i>
                  <p>Create Order</p>
              </a>
          </li>

          <li class = "{{Request:: is('/order/revise') ? 'active' : ''}}">
              <a href="/order/revise">
                  <i class="now-ui-icons shopping_bag-16"></i>
                  <p>Revise Order</p>
              </a>
          </li>

          <li class = "{{Request:: is('/quotation/approve') ? 'active' : ''}}">
              <a href="/quotation/approve">
                  <i class="now-ui-icons ui-2_like"></i>
                  <p>Approve Quotation</p>
              </a>
          </li>

          <li>
              <a href="order/monitor-status">
                  <i class="now-ui-icons design_bullet-list-67"></i>
                  <p>Monitor Job Status</p>
              </a>
          </li>

          @elseif(Request::is('agent'))
          <li>
              <a href="/order/view">
                  <i class="now-ui-icons shopping_bag-16"></i>
                  <p>Manage Orders</p>
              </a>
          </li>

          <li>
              <a href="../examples/map.html">
                  <i class="now-ui-icons files_single-copy-04"></i>
                  <p>Check Quotation Status</p>
              </a>
          </li>

          <li>
              <a href="/order/update-status">
                  <i class="now-ui-icons design_bullet-list-67"></i>
                  <p>Update Job Status</p>
              </a>
          </li>

          <li>
              <a href="../examples/map.html">
                  <i class="now-ui-icons shopping_delivery-fast"></i>
                  <p>Schedule Delivery</p>
              </a>
          </li>

          @elseif(Request::is('admin'))
          <li>
              <a href="/quotation/create">
                  <i class="now-ui-icons files_single-copy-04"></i>
                  <p>Manage Quotations</p>
              </a>
          </li>

          <li>
              <a href="/quotation/create">
                  <i class="now-ui-icons ui-2_chat-round"></i>
                  <p>Manage Haggling Requests</p>
              </a>
          </li>

          <li>
              <a href="../examples/map.html">
                  <i class = "now-ui-icons users_single-02"></i>
                  <p>Add New Employees</p>
              </a>
          </li>

		  @elseif(Request::is('pre-press'))
          <li>
              <a href="/order/view">
                  <i class="now-ui-icons shopping_bag-16"></i>
                  <p>View Orders</p>
              </a>
          </li>

          <li>
              <a href="">
                  <i class="now-ui-icons education_agenda-bookmark"></i>
                  <p>View Job Samples</p>
              </a>
          </li>

          @elseif(Request::is('purchasing'))
          <li>
              <a href="/purchase/create">
                  <i class="now-ui-icons shopping_cart-simple"></i>
                  <p>Purchase Supplies</p>
              </a>
          </li>

          <li>
              <a href="../examples/map.html">
                  <i class="now-ui-icons shopping_shop"></i>
                  <p>View Supplier Status</p>
              </a>
          </li>



      </ul>
@endif
    </div>
