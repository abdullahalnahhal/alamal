<!--Left Sidebar  -->
        <div class="left-sidebar text-{{getStyle(App::getLocale())['dir-full']}}" dir="{{getStyle(App::getLocale())['dir']}}">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <!-- Home Page Start -->
                        <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="ti-home"></i><span class="hide-menu">@lang('admin/sidebar.homepage')</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{lRoute('admin.home.slider.index')}}"><span>@lang('admin/sidebar.slider')</span></a></li>
                            </ul>
                        </li>
                        <!-- Home Page end -->
                        <!-- About Page Start -->
                        <li> <a  href="{{lRoute('admin.about.index')}}"><i class="ti-desktop"></i><span>@lang('admin/sidebar.About Us')</span></a></li>
                        <!-- About Page end -->
                        <!-- Fields Page Start -->
                        <li> <a  href="{{lRoute('admin.fields.index')}}"><i class="ti-layout-media-center"></i><span>@lang('admin/sidebar.Fields')</span></a></li>
                        <!-- Fields Page End -->
                        <!-- Sub Fields Page Start -->
                        <li> <a  href="{{lRoute('admin.sub-fields.index')}}"><i class="fa fa-usb"></i><span>@lang('admin/sidebar.Sub Fields')</span></a></li>
                        <!-- Sub Fields Page End -->
                        <!-- Partners -->
                        <li> <a  href="{{lRoute('admin.partners.index')}}"><i class="fa fa-building-o"></i><span>@lang('admin/sidebar.Partners')</span></a></li>
                        <!-- Partners -->
                        <!-- Products -->
                        <li> <a  href="{{lRoute('admin.products.index')}}"><i class="ti-dropbox"></i><span>@lang('admin/sidebar.Products')</span></a></li>
                        <!-- Products -->
                        <!-- Achievements -->
                        <li> <a  href="{{lRoute('admin.achievements.index')}}"><i class="ti-check-box"></i><span>@lang('admin/sidebar.Achievements')</span></a></li>
                        <!-- Achievements -->
                        <!-- Contact us -->
                        <li> <a  href="{{lRoute('admin.contact-us.index')}}"><i class="fa fa-envelope-o"></i><span>@lang('admin/sidebar.Contact Us')</span></a></li>
                        <!-- Contact us -->
                        <!-- Subscribe -->
                        <li> <a  href="{{lRoute('admin.subscribe.index')}}"><i class="fa ti-pin-alt"></i><span>@lang('admin/sidebar.Subscribes')</span></a></li>
                        <!-- Subscribe -->
                        <!-- Plog -->
                        <li> <a  href="{{lRoute('admin.news.index')}}"><i class="ti-blackboard"></i><span>@lang('admin/sidebar.News')</span></a></li>
                        <!-- Plog -->
                        <!-- Contacts -->
                        <li> <a  href="{{lRoute('admin.contacts.index')}}"><i class="ti-headphone-alt"></i><span>@lang('admin/sidebar.Contacts')</span></a></li>
                        <!-- Contacts -->
                        <!-- Settings -->
                        <li> <a  href="{{lRoute('admin.downloads.index')}}"><i class="ti-download"></i><span>@lang('admin/sidebar.Downloads')</span></a></li>
                        <!-- Settings -->
                        <!-- Settings -->
                        <li> <a  href="{{lRoute('admin.settings.index')}}"><i class="ti-settings"></i><span>@lang('admin/sidebar.Settings')</span></a></li>
                        <!-- Settings -->
                        <br>
                        <br>
                        <br>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
<!-- End Left Sidebar 