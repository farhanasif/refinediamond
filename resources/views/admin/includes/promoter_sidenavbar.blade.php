
    <aside class="main-sidebar elevation-4 sidebar-light-teal">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
          <img src="{{asset('assets/admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
               style="opacity: .8">
          <span class="brand-text font-weight-light">Refine Diamond</span>
        </a>
    
        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="{{asset('assets/admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="#" class="d-block"> {{ Auth::user()->role }} </a>
            </div>
          </div>

          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar text-sm flex-column" data-widget="treeview" role="menu" data-accordion="false">
              
              <li class="nav-item has-treeview menu-open">
                <a href="{{url('promoter-dashboard')}}" class="nav-link active">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>

              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="fab fa-first-order"></i>
                  <p>
                   My Orders
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="far fa-circle nav-icon text-pink"></i>
                      <p>View your order history</p>
                    </a>
                  </li>
    
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="far fa-circle nav-icon text-pink"></i>
                      <p>Your Reward Points</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="far fa-circle nav-icon text-pink"></i>
                      <p> View your return request</p>
                    </a>
                  </li>
    
                </ul>
              </li>

              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="fas fa-users"></i>
                  <p>
                   Profile Management
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('promotor.profile')}}" class="nav-link">
                      <i class="far fa-circle nav-icon text-pink"></i>
                      <p>Profile Management</p>
                    </a>
                  </li>
    
                  <li class="nav-item">
                    <a href="{{route('change.password')}}" class="nav-link">
                      <i class="far fa-circle nav-icon text-pink"></i>
                      <p>Change Password</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('change.transaction')}}" class="nav-link">
                      <i class="far fa-circle nav-icon text-pink"></i>
                      <p>Change Transaction Password</p>
                    </a>
                  </li>
    
                </ul>
              </li>

              <li class="nav-item has-treeview">
                <a href="{{route('promotor.tree')}}" class="nav-link">
                  <i class="fas fa-users-cog"></i>
                  <p>
                    Team View
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('promotor.tree')}}" class="nav-link">
                      <i class="far fa-circle nav-icon text-pink"></i>
                      <p>Tree</p>
                    </a>
                  </li>
    
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="far fa-circle nav-icon text-pink"></i>
                      <p>Sponsor Tree</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="far fa-circle nav-icon text-pink"></i>
                      <p>Board Tree</p>
                    </a>
                  </li>
    
                </ul>
              </li>

              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="fas fa-shopping-cart"></i>
                  <p>
                    Product Purchage & Report
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('product.purchase')}}" class="nav-link">
                      <i class="far fa-circle nav-icon text-pink"></i>
                      <p>Product Purchage</p>
                    </a>
                  </li>
    
                  <li class="nav-item">
                    <a href="{{route('product.purchase.point.report')}}" class="nav-link">
                      <i class="far fa-circle nav-icon text-pink"></i>
                      <p>Product Purchage & Point Report</p>
                    </a>
                  </li>
    
                </ul>
              </li>

              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="fas fa-tasks"></i>
                  <p>
                     Purchase & Management
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('purchase.amount')}}" class="nav-link">
                      <i class="far fa-circle nav-icon text-pink"></i>
                      <p>Add Purchase Amount</p>
                    </a>
                  </li>
    
                  <li class="nav-item">
                    <a href="{{route('recieved.from.company')}}" class="nav-link">
                      <i class="far fa-circle nav-icon text-pink"></i>
                      <p>Receieved From Company</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('recieved.from.self')}}" class="nav-link">
                      <i class="far fa-circle nav-icon text-pink"></i>
                      <p>Receieved From Self</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="far fa-circle nav-icon text-pink"></i>
                      <p>Receieved From Other's Income</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="far fa-circle nav-icon text-pink"></i>
                      <p>P.Amount Receieved From Income</p>
                    </a>
                  </li>
    
                </ul>
              </li>

              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                 <i class="fas fa-hand-point-right"></i>
                  <p>
                     Point Management
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle nav-icon text-pink"></i>
                      <p>Self Center Open</p>
                    </a>
                  </li>
    
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="far fa-circle nav-icon text-pink"></i>
                      <p>Downline Center Open</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="far fa-circle nav-icon text-pink"></i>
                      <p>Monthly Maintenance</p>
                    </a>
                  </li>
    
                </ul>
              </li>

              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="fas fa-sort-amount-up"></i>
                  <p>
                     Account Summary
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle nav-icon text-pink"></i>
                      <p>RefineDimondbd Investment</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="far fa-circle nav-icon text-pink"></i>
                      <p>Sponsor Commission</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="far fa-circle nav-icon text-pink"></i>
                      <p>Category Spot Commission</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="far fa-circle nav-icon text-pink"></i>
                      <p>Offer/Bonus</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="far fa-circle nav-icon text-pink"></i>
                      <p>Stockiest Commission</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="far fa-circle nav-icon text-pink"></i>
                      <p>Show Room/Super/Store</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="far fa-circle nav-icon text-pink"></i>
                      <p>Reference Commission</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="far fa-circle nav-icon text-pink"></i>
                      <p>Weekly Sales Commission</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="far fa-circle nav-icon text-pink"></i>
                      <p>Matching Commission</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="far fa-circle nav-icon text-pink"></i>
                      <p>Team/Gap Commission</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="far fa-circle nav-icon text-pink"></i>
                      <p>Walfare Trust</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="far fa-circle nav-icon text-pink"></i>
                      <p>OneTime Tranning Commission</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="far fa-circle nav-icon text-pink"></i>
                      <p>Board Commission</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="far fa-circle nav-icon text-pink"></i>
                      <p>Agent Commission</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="far fa-circle nav-icon text-pink"></i>
                      <p>Generation Commission</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="far fa-circle nav-icon text-pink"></i>
                      <p>Reward/ Incentive</p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="fas fa-shopping-basket"></i>
                  <p>
                      Transaction
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle nav-icon text-pink"></i>
                      <p>Transfer</p>
                    </a>
                  </li>
    
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="far fa-circle nav-icon text-pink"></i>
                      <p>Withdraw</p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="fas fa-shopping-basket"></i>
                  <p>
                      Transaction Report
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle nav-icon text-pink"></i>
                      <p>Transfer Report</p>
                    </a>
                  </li>
    
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="far fa-circle nav-icon text-pink"></i>
                      <p>Withdraw Report</p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="fas fa-phone-square-alt"></i>
                  <p>
                    Team Communication
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle nav-icon text-pink"></i>
                      <p>Send SMS</p>
                    </a>
                  </li>
    
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="far fa-circle nav-icon text-pink"></i>
                      <p>Send Email</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="far fa-circle nav-icon text-pink"></i>
                      <p>Text Chet</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="far fa-circle nav-icon text-pink"></i>
                      <p>Video Chet</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="far fa-circle nav-icon text-pink"></i>
                      <p>Voice Chet</p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="fas fa-hands-helping"></i>
                  <p>
                    Help & Support
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle nav-icon text-pink"></i>
                      <p>Inquiry Submit</p>
                    </a>
                  </li>
    
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="far fa-circle nav-icon text-pink"></i>
                      <p>Problem Submit</p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-project-diagram text-pink"></i>
                  <p>
                    Daily Work Support
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle nav-icon text-pink"></i>
                      <p>Guest List</p>
                    </a>
                  </li>
    
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="far fa-circle nav-icon text-pink"></i>
                      <p>Team Meeting</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="far fa-circle nav-icon text-pink"></i>
                      <p>Notice</p>
                    </a>
                  </li>
                </ul>
              </li>
    
              <li class="nav-item">
                <a class="nav-link" href="">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                      Newsletter
                  </p>
                </a>
              </li>

              <!-- <li class="nav-header">MISCELLANEOUS</li>
              <li class="nav-item">
                <a href="https://adminlte.io/docs/3.0" class="nav-link">
                  <i class="nav-icon fas fa-file"></i>
                  <p>Documentation</p>
                </a>
              </li> -->
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>
    
    