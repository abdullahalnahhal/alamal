<header class="header">
    <!-- Top Bar -->
    <div class="top_bar">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="top_bar_container d-flex flex-row align-items-center justify-content-start" dir='{{getStyle(App::getLocale())['dir']}}'>
                        <div class="logo_container pull-{{getStyle(App::getLocale())['dir-full']}}">
                            <div class="logo text-{{getStyle(App::getLocale())['dir-full']}}" >
                                <a href="{{lRoute('index')}}">
                                    <div class="logo_line_1"><span>A</span>ESS</div>
                                    <div class="logo_line_2">For Electrical Solutions And Supplies</div>
                                    <!-- <div class="logo_img"><img src="images/logo.png" alt=""></div> -->
                                </a>
                            </div>
                        </div>
                        <div class="top_bar_content m{{getStyle(App::getLocale())['short-dir']}}-auto pull-{{getStyle(App::getLocale())['dir-full']}}">
                            <div class="register_login" dir="{{getStyle(App::getLocale())['rev']}}">
                                <div class="register"><a href="{{lRoute(current_page(), change_lang_parameters('en'))}}">English</a></div>
                                <div class="login"><a href="{{lRoute(current_page(), change_lang_parameters('ar'))}}">عربي</a></div>
                            </div>
                        </div>
                        <div class="burger">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Menu -->
    <div class="main_menu" dir="{{getStyle(App::getLocale())['dir']}}">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="main_menu_container d-flex flex-row align-items-center justify-content-start">
                        <div class="main_menu_content text-{{getStyle(App::getLocale())['dir-full']}}">
                            <ul class="main_menu_list">
                                <li class="{{active($active, 'Index')}}">
                                    <a href="{{lRoute('index')}}">@lang("website/header.Home")</a>
                                </li>
                                <li class="{{active($active, 'About')}}">
                                    <a href="{{lRoute('about')}}">@lang("website/header.About")
                                        <svg version="1.1" id="Layer_4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
                                            <g>
                                                <polyline class="arrow_d" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.022,-0.178 4.5,4.331 9.091,-0.275   "/>
                                            </g>
                                        </svg>
                                    </a>
                                </li>
                                <li class="{{active($active, 'Fields')}} hassubs">
                                    <a href="{{lRoute('fields.index')}}">@lang("website/header.Fields")
                                        <svg version="1.1" id="Layer_5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
                                            <g>
                                                <polyline class="arrow_d" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.022,-0.178 4.5,4.331 9.091,-0.275   "/>
                                            </g>
                                        </svg>
                                    </a>
                                    <ul>
                                        @foreach(\App\Fields::all() as $field)
                                        <li>
                                            <a href="{{lRoute('fields.view',['name'=>$field->title_en])}}">{{$field->{'title_'.App::getLocale()} }}
                                                <svg version="1.1" id="Layer_6" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
                                                    <g>
                                                       <polyline class="arrow_d" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.022,-0.178 4.5,4.331 9.091,-0.275   "/>
                                                    </g>
                                                </svg>
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="{{active($active, 'Products')}}">
                                    <a href="{{lRoute('products.index')}}">@lang("website/header.Products")
                                        <svg version="1.1" id="Layer_15" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
                                            <g>
                                                <polyline class="arrow_d" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.022,-0.178 4.5,4.331 9.091,-0.275   "/>
                                            </g>
                                        </svg>
                                    </a>
                                </li>
                                <li class="{{active($active, 'Partners')}}">
                                    <a href="{{lRoute('partners.index')}}">@lang("website/header.Partners")
                                        <svg version="1.1" id="Layer_15" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
                                            <g>
                                                <polyline class="arrow_d" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.022,-0.178 4.5,4.331 9.091,-0.275   "/>
                                            </g>
                                        </svg>
                                    </a>
                                </li>
                                <li class="{{active($active, 'Achievements')}}">
                                    <a href="{{lRoute('achievements.index')}}">@lang("website/header.Achievements")
                                        <svg version="1.1" id="Layer_15" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
                                            <g>
                                                <polyline class="arrow_d" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.022,-0.178 4.5,4.331 9.091,-0.275   "/>
                                            </g>
                                        </svg>
                                    </a>
                                </li>
                                <li class="{{active($active, 'Contact US')}}">
                                    <a  href="{{lRoute('contact.index')}}">@lang("website/header.Contact US")
                                        <svg version="1.1" id="Layer_16" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
                                            <g>
                                                <polyline class="arrow_d" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.022,-0.178 4.5,4.331 9.091,-0.275   "/>
                                            </g>
                                        </svg>
                                    </a>
                                </li>
                                <li class="{{active($active, 'News')}}">
                                    <a href="{{lRoute('news.index')}}">@lang("website/header.News")
                                        <svg version="1.1" id="Layer_15" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
                                            <g>
                                                <polyline class="arrow_d" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.022,-0.178 4.5,4.331 9.091,-0.275   "/>
                                            </g>
                                        </svg>
                                    </a>
                                </li>
                                <li class="{{active($active, 'Downloadss')}}">
                                    <a href="{{lRoute('downloads.index')}}">@lang("website/header.Downloads")
                                        <svg version="1.1" id="Layer_15" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
                                            <g>
                                                <polyline class="arrow_d" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.022,-0.178 4.5,4.331 9.091,-0.275   "/>
                                            </g>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="main_menu_contact m{{getStyle(App::getLocale())['short-dir']}}-auto">
                            @if(\App\Contacts::phone()->value)
                            <div class="main_menu_phone"><img src="{{asset("images/phone-call.svg")}}" alt=""><span>{{\App\Contacts::phone()->value}}</span></div>
                            @endif
                            @if(\App\Contacts::email()->value)
                            <div class="main_menu_email"><img src="{{asset("images/envelope.svg")}}" alt=""><span>{{\App\Contacts::email()->value}}</span></div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
