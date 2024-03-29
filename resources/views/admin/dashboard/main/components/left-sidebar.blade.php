<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <div class="image"><a href="profile.html"><img src="{{asset('asset-admin/images/profile_av.jpg')}}" alt="User"></a></div>
                    <div class="detail">
                        <h4>Codepriezt</h4>
                        <small>UI UX Designer</small>                        
                    </div>
                    <a href="events.html" title="Events"><i class="zmdi zmdi-calendar"></i></a>
                    <a href="mail-inbox.html" title="Inbox"><i class="zmdi zmdi-email"></i></a>
                    <a href="contact.html" title="Contact List"><i class="zmdi zmdi-account-box-phone"></i></a>
                    <a href="chat.html" title="Chat App"><i class="zmdi zmdi-comments"></i></a>
                    <a href="{{route('logout')}}" title="Sign out"><i class="zmdi zmdi-power"></i></a>
                </div>
            </li>
            <li class="header">MAIN</li>
            <li class="active open"> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a>
                <ul class="ml-menu">
                    <li class="{{(strpos(Route::currentRouteName() , 'main-dashboard') === 0)? 'active' : ''}}"><a href="{{route('main-dashboard')}}">Main</a> </li>
                    <li class="{{(strpos(Route::currentRouteName() , 'ecommerce-dashboard') === 0)? 'active' : ''}}"><a href="{{route('ecommerce-dashboard')}}">Ecommerce</a></li>
                    <li><a href="blog-dashboard.html">Blog</a></li>
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>App</span> </a>
                <ul class="ml-menu">
                    <li><a href="mail-inbox.html">Inbox</a></li>
                    <li><a href="chat.html">Chat</a></li>
                    <li><a href="events.html">Calendar</a></li>
					<li><a href="file-dashboard.html">File Manager</a></li>
                    <li><a href="contact.html">Contact list</a></li>
                    <li><a href="blog-dashboard.html">Blog</a></li>
                </ul>
            </li>            
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-swap-alt"></i><span>User Interface (UI)</span> </a>
                <ul class="ml-menu">
                    <li> <a href="ui_kit.html">UI KIT</a> </li>                    
                    <li> <a href="alerts.html">Alerts</a> </li>                    
                    <li> <a href="collapse.html">Collapse</a> </li>
                    <li> <a href="colors.html">Colors</a> </li>
                    <li> <a href="dialogs.html">Dialogs</a> </li>
                    <li> <a href="icons.html">Icons</a> </li>                    
                    <li> <a href="list-group.html">List Group</a> </li>
                    <li> <a href="media-object.html">Media Object</a> </li>
                    <li> <a href="modals.html">Modals</a> </li>
                    <li> <a href="notifications.html">Notifications</a></li>                    
                    <li> <a href="progressbars.html">Progress Bars</a></li>
                    <li> <a href="range-sliders.html">Range Sliders</a></li>
                    <li> <a href="sortable-nestable.html">Sortable & Nestable</a></li>
                    <li> <a href="tabs.html">Tabs</a></li>
                    <li> <a href="waves.html">Waves</a></li>
                </ul>
            </li>          
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-chart"></i><span>Charts</span> </a>
                <ul class="ml-menu">
                    <li> <a href="morris.html">Morris</a> </li>
                    <li> <a href="flot.html">Flot</a> </li>
                    <li> <a href="chartjs.html">ChartJS</a> </li>
                    <li> <a href="sparkline.html">Sparkline</a> </li>
                    <li> <a href="jquery-knob.html">Jquery Knob</a> </li>
                </ul>
            </li>
            <li class="header">SECTION</li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-shopping-cart"></i><span>Ecommerce</span> </a>
                <ul class="ml-menu">
                    <li> <a href="{{route('all_department')}}">Department</a></li>
                    <li> <a href="ec-product.html">Product</a></li>
                    <li> <a href="ec-product-List.html">Product List</a></li>
                    <li> <a href="ec-product-detail.html">Product detail</a></li>
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-delicious"></i><span>Widgets</span> </a>
                <ul class="ml-menu">
                    <li><a href="widgets-app.html">Apps Widgets</a></li>
                    <li><a href="widgets-data.html">Data Widgets</a></li>
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-lock"></i><span>Authentication</span> </a>
                <ul class="ml-menu">
                    <li><a href="sign-in.html">Sign In</a> </li>
                    <li><a href="sign-up.html">Sign Up</a> </li>
                    <li><a href="forgot-password.html">Forgot Password</a> </li>
                    <li><a href="404.html">Page 404</a> </li>
                    <li><a href="500.html">Page 500</a> </li>
                    <li><a href="page-offline.html">Page Offline</a> </li>
                    <li><a href="locked.html">Locked Screen</a> </li>
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-copy"></i><span>Sample Pages</span> </a>
                <ul class="ml-menu">
                    <li><a href="blank.html">Blank Page</a> </li>
                    <li> <a href="image-gallery.html">Image Gallery</a> </li>
                    <li><a href="profile.html">Profile</a></li>
                    <li><a href="timeline.html">Timeline</a></li>
                    <li><a href="pricing.html">Pricing</a></li>
                    <li><a href="invoices.html">Invoices</a></li>
                    <li><a href="search-results.html">Search Results</a></li>
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-map"></i><span>Maps</span> </a>
                <ul class="ml-menu">
                    <li> <a href="google.html">Google Map</a> </li>
                    <li> <a href="yandex.html">YandexMap</a> </li>
                    <li> <a href="jvectormap.html">jVectorMap</a> </li>
                </ul>
            </li>
            <li class="header">Extra</li>
            <li>
                <div class="progress-container progress-primary m-t-10">
                    <span class="progress-badge">Traffic this Month</span>
                    <div class="progress">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100" style="width: 67%;">
                            <span class="progress-value">67%</span>
                        </div>
                    </div>
                </div>
                <div class="progress-container progress-info">
                    <span class="progress-badge">Server Load</span>
                    <div class="progress">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                            <span class="progress-value">86%</span>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</aside>