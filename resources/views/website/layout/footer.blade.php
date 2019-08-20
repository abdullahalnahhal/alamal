<footer class="footer" dir="{{getStyle(App::getLocale())['dir']}}">
    <div class="container">
        <div class="row">

            <!-- Footer Column -->
            <div class="col-lg-3 footer_col text-{{getStyle(App::getLocale())['dir-full']}}">
                <div class="footer_about">
                    <div class="logo_container footer_logo">
                        <div class="logo">
                            <a href="lRoute('index')">
                                <div class="logo_line_1"><span>A</span>ESS</div>
                                <div class="logo_line_2">For Electrical Solutions And Supplies</div>
                            </a>
                        </div>
                    </div>
                    <p class="footer_about_text">{{\App\TextWord::find(1)->{'text_'.App::getLocale()} ??"" }}</p>
                </div>
            </div>

            <!-- Footer Column -->
            <div class="col-lg-3 footer_col">
                <div class="footer_links">
                    <div class="footer_title">@lang('website/all.Useful Links')</div>
                    <ul>
                        <li><a href="{{lRoute('index')}}">@lang('website/header.Home')</a></li>
                        <li><a href="{{lRoute('about')}}">@lang('website/header.About')</a></li>
                        <li><a href="{{lRoute('fields.index')}}">@lang('website/header.Fields')</a></li>
                        <li><a href="{{lRoute('products.index')}}">@lang('website/header.Products')</a></li>
                        <li><a href="{{lRoute('partners.index')}}">@lang('website/header.Partners')</a></li>
                        <li><a href="{{lRoute('achievements.index')}}">@lang('website/header.Achievements')</a></li>
                        <li><a href="{{lRoute('contact.index')}}">@lang('website/header.Contact Us')</a></li>
                        <li><a href="{{lRoute('news.index')}}">@lang('website/header.News')</a></li>
                        <!-- <li><a href="#">Planning</a></li> -->
                        <!-- <li><a href="#">Finance</a></li> -->
                        <!-- <li><a href="#">Crypto</a></li> -->
                    </ul>
                </div>
            </div>

            <!-- Footer Column -->
            <div class="col-lg-6 footer_col text-{{getStyle(App::getLocale())['dir-full']}}">
                <div class="footer_newsletter">
                    <div class="footer_title">@lang("website/all.Subscribe to our newsletter")</div>
                    <form action="{{lRoute('subscribe')}}" method="post" class="footer_newsletter_form">
                        @csrf
                        <input type="email" name="subscribe" class="footer_newsletter_input" placeholder="Your E-mail"
                            required="required">
                        <button class="footer_newsletter_button" type="submit">@lang("website/all.subscribe")</button>
                    </form>
                    <!-- <div class="footer_newsletter_text">Sed ut iaculis elit, quis varius mauris. Integer ut ultricies orci, lobortis egestas sem. Morbi ut dapibus dui. Sed ut iaculis elit. Integer ut imperdiet erat. Quisque ultricies lectus tellus, eu tristique magna pharetra nec.</div> -->
                    <div class="footer_social">
                        <ul>
                            @if($contacts->googlePlus)
                            <li><a href="{{$contacts->googlePlus['value']}}"><i class="fa fa-google-plus"
                                        aria-hidden="true"></i></a></li>
                            @endif
                            @if($contacts->googlePlus)
                            <li><a href="{{$contacts->facebook['value']}}"><i class="fa fa-facebook"
                                        aria-hidden="true"></i></a></li>
                            @endif
                            @if($contacts->twitter)
                            <li><a href="{{$contacts->facebook['value']}}"><i class="fa fa-twitter"
                                        aria-hidden="true"></i></a></li>
                            @endif
                            @if($contacts->youtube)
                            <li><a href="{{$contacts->youtube['value']}}"><i class="fa fa-youtube"
                                        aria-hidden="true"></i></a></li>
                            @endif
                            @if($contacts->instagram)
                            <li><a href="{{$contacts->instagram['value']}}"><i class="fa fa-instagram"
                                        aria-hidden="true"></i></a></li>
                            @endif
                            @if($contacts->linkedin)
                            <li><a href="{{$contacts->linkedin['value']}}"><i class="fa fa-linkedin"
                                        aria-hidden="true"></i></a></li>
                            @endif


                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="copyright ">
        <div class="container">
            <div class="row">
                <div class="col-12 text-left">
                    <div class="copyright_content d-flex flex-row align-items-center justify-content-start">
                        <div class="cr">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());

                            </script> All rights reserved | This template is made with <i class="fa fa-heart-o"
                                aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
