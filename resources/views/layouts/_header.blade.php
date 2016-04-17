<!-- START @HEADER -->
<header id="header">

    <!-- Start header left -->
    <div class="header-left">
        <!-- Start offcanvas left: This menu will take position at the top of template header (mobile only). Make sure that only #header have the `position: relative`, or it may cause unwanted behavior -->
        <div class="navbar-minimize-mobile left">
            <i class="fa fa-bars"></i>
        </div>
        <!--/ End offcanvas left -->

        <!-- Start navbar header -->
        <div class="navbar-header">

            <!-- Start brand -->
            <a class="navbar-brand" href="{{url('dashboard/index')}}">
                <img class="logo" src="{{$assetUrl}}global/img/logo/laravel/header.png" alt="brand logo"/>
            </a><!-- /.navbar-brand -->
            <!--/ End brand -->

        </div><!-- /.navbar-header -->
        <!--/ End navbar header -->

        <!-- Start offcanvas right: This menu will take position at the top of template header (mobile only). Make sure that only #header have the `position: relative`, or it may cause unwanted behavior -->
        <div class="navbar-minimize-mobile right">
            <i class="fa fa-cog"></i>
        </div>
        <!--/ End offcanvas right -->

        <div class="clearfix"></div>
    </div><!-- /.header-left -->
    <!--/ End header left -->

    <!-- Start header right -->
    <div class="header-right">
        <!-- Start navbar toolbar -->
        <div class="navbar navbar-toolbar">

            <!-- Start left navigation -->
            <ul class="nav navbar-nav navbar-left">

                <!-- Start sidebar shrink -->
                <li class="navbar-minimize">
                    <a href="javascript:void(0);" title="Minimize sidebar">
                        <i class="fa fa-bars"></i>
                    </a>
                </li>
                <!--/ End sidebar shrink -->

                <!-- Start form search -->
                <li class="navbar-search">
                    <!-- Just view on mobile screen-->
                    <a href="#" class="trigger-search"><i class="fa fa-search"></i></a>
                    <form class="navbar-form">
                        <div class="form-group has-feedback">
                            <input type="text" class="form-control typeahead rounded" placeholder="Search for people, places and things">
                            <button type="submit" class="btn btn-theme fa fa-search form-control-feedback rounded"></button>
                        </div>
                    </form>
                </li>
                <!--/ End form search -->

            </ul><!-- /.nav navbar-nav navbar-left -->
            <!--/ End left navigation -->

            <!-- Start right navigation -->
            <ul class="nav navbar-nav navbar-right"><!-- /.nav navbar-nav navbar-right -->

                <!-- Start messages -->

                <!--/ End messages -->

                <!-- Start notifications -->
                
                <!--/ End notifications -->

                <!-- Start profile -->
                <li class="dropdown navbar-profile">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="meta">
                            <span class="avatar"><img src="{{$assetUrl}}global/img/avatar/35/1.png" class="img-circle" alt="admin"></span>
                            <span class="text hidden-xs hidden-sm text-muted">Tol Lee</span>
                            <span class="caret"></span>
                        </span>
                    </a>
                    <!-- Start dropdown menu -->
                    <ul class="dropdown-menu animated flipInX">
                        <li class="dropdown-header">Account</li>
                        <li><a href="{{url('page/profile')}}"><i class="fa fa-user"></i>View profile</a></li>
                        <li><a href="{{url('mail/inbox')}}"><i class="fa fa-envelope-square"></i>Inbox <span class="label label-info pull-right">30</span></a></li>
                        <li><a href="#"><i class="fa fa-share-square"></i>Invite a friend</a></li>
                        <li class="dropdown-header">Product</li>
                        <li><a href="#"><i class="fa fa-upload"></i>Upload</a></li>
                        <li><a href="#"><i class="fa fa-dollar"></i>Earning</a></li>
                        <li><a href="#"><i class="fa fa-download"></i>Withdrawals</a></li>
                        <li class="divider"></li>
                        <li><a href="{{url('page/signin')}}"><i class="fa fa-sign-out"></i>Logout</a></li>
                    </ul>
                    <!--/ End dropdown menu -->
                </li><!-- /.dropdown navbar-profile -->
                <!--/ End profile -->

                <!-- Start settings -->
                <li class="navbar-setting pull-right">
                    <a href="javascript:void(0);"><i class="fa fa-cog fa-spin"></i></a>
                </li><!-- /.navbar-setting pull-right -->
                <!--/ End settings -->

            </ul>
            <!--/ End right navigation -->

        </div><!-- /.navbar-toolbar -->
        <!--/ End navbar toolbar -->
    </div><!-- /.header-right -->
    <!--/ End header left -->

</header> <!-- /#header -->
<!--/ END HEADER -->
