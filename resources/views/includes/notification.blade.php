      @php
        $notf_count = App\Models\Notification::where('order_id','!=',null)->where('is_read','=',0)->get();

      @endphp                                                 

                                            <div class="col-xl-5 col-lg-7 col-md-7 col-sm-12 col-12">
                                                <div class="header-menu dropdown text-right">  
                                                    <!-- profile Notification -->
                                                    <div class="header__notification">
                                                        <a class="dropdown-toggle" href="" id="notf_click" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                            <img src="{{ asset('assets/admin/images/admin-header/notification.png') }}" alt="notification image">
                                                            <span id="notf_count">{{ $notf_count->count() }}</span>
                                                        </a>
                                                        <div class="header__notification-content dropdown-menu dropdown-menu-right" id="notf_show">
                                                        </div>
                                                    </div>

                                                    <!-- view profile -->
                                                    <div class="header__profile">
                                                        <div class="profile__img dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                            <img src="{{ Auth::guard('admin')->user()->photo ? asset('assets/images/admins/'.Auth::guard('admin')->user()->photo):asset('assets/images/noimage.png') }}" alt="profile image"> <span>{{ Auth::guard('admin')->user()->name }}</span>
                                                        </div>
                                                        <div class="profile__content dropdown-menu dropdown-menu-right">
                                                            <h5>Welcome!</h5>
                                                            <a href="{{ route('admin-profile') }}"><i class="fas fa-user"></i> Edit Profile</a>
                                                            <a href="{{ route('admin-password-reset') }}"><i class="fas fa-cog"></i> Change Password</a>
                                                            <a href="{{ route('admin-logout') }}"><i class="fas fa-power-off"></i> Logout</a>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>