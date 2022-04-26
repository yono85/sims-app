<div class="moby__aside-holder">
    <!-- Vertical Aside Navigation -->
    <div class="moby__side-bar">

        <!-- Side Bar Header -->
        <div class="side-bar-header">
            <a href="#" class="logo">
                <img src="{{$apps['favicon']}}" alt="logo">
            </a>
            <i id="menu-btn" class="icon-menu icon drawer-icon"></i>
            <span id="drawer-icon" class="menu-icon"><i class="icon icon-menu"></i></span>
        </div>

        <!-- /.Side Bar Header -->
        <ul class="moby__drawer-menu scroller">

            <!-- Start of Dashboard -->
            <li>
                <a href="{{$URI}}/dashboard" class="" >
                    <i class="icon fa flaticon2-line-chart">
                        <span class="path1"></span>
                    </i>
                    <span class="menu-item-title">Dashboard</span>
                </a>
            </li>
            <!-- End of DashBoard -->

            <li>
                <a href="#collaps2" data-toggle="collapse" aria-expanded="false">
                    <i class="icon fa flaticon-businesswoman">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                    <span class="menu-item-title">Marketing</span>
                    <i class="icon icon-keyboard_arrow_down arrow-icon"></i>
                </a>
                <div class="collapse" id="collaps2">
                    <ul>
                        <li>
                            <a href="{{$URI}}/dashboard/orders" data-role="collapse"><span>Orders</span></a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Start of Application -->
            <li>
                <a href="#collaps3" data-toggle="collapse" aria-expanded="false">
                    <i class="icon sli_icon-users">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                    <span class="menu-item-title">Customer</span>
                    <i class="icon icon-keyboard_arrow_down arrow-icon"></i>
                </a>
                <div class="collapse" id="collaps3">
                    <ul>
                        <li>
                            <a href="{{$URI}}/dashboard/customers" data-role="collapse"><span>Customers</span></a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- End of Application -->

            <!-- Start of Application -->
            <!-- <li>
                <a href="#collaps2" data-toggle="collapse">
                    <i class="icon icon-desktop_windows"><span class="path1"></span><span class="path2"></span></i><span class="menu-item-title">Applications</span> <i class="icon icon-keyboard_arrow_down arrow-icon"></i>
                </a>
                <div class="collapse" id="collaps2">
                    <ul>
                        <li>
                            <a href="contacts.html"><span>Contact</span></a>
                        </li>
                        <li>
                            <a href="conversations.html"><span>Chat</span></a>
                        </li>
                        <li>
                            <a href="mailbox.html"><span>Inbox</span></a>
                        </li>
                        <li>
                            <a href="user-profile.html"><span>User Profile</span></a>
                        </li>
                        <li>
                            <a href="task-management.html"><span>Task Management</span></a>
                        </li>
                        <li>
                            <a href="detailed-file-manager.html"><span>File Manager</span></a>
                        </li>
                    </ul>
                </div>
            </li> -->
            <!-- End of Application -->

            <!-- Start of Pages -->
            <!-- <li>
                <a href="#collaps3" data-toggle="collapse" aria-expanded="false">
                    <i class="icon icon-file_copy"><span class="path1"></span><span class="path2"></span></i><span class="menu-item-title">Pages</span> <i class="icon icon-keyboard_arrow_down arrow-icon"></i>
                </a>
                <div class="collapse" id="collaps3">
                    <ul>
                        <li>
                            <a href="connections.html"><span>Connections</span></a>
                        </li>
                        <li>
                            <a href="connections-profile-list.html"><span>Connections Profiles</span></a>
                        </li>
                        <li>
                            <a href="connections-list.html"><span>Connections List</span></a>
                        </li>
                        <li>
                            <a href="connections-info-list.html"><span>Connections Info</span> List</a>
                        </li>
                        <li>
                            <a href="meetups.html"><span>Meetups</span></a>
                        </li>
                        <li>
                            <a href="conference.html"><span>Conferences</span></a>
                        </li>
                        <li>
                            <a href="social-connections.html"><span>Social Profiles</span></a>
                        </li>
                        <li>
                            <a href="groups.html"><span>Groups</span></a>
                        </li>
                        <li>
                            <a href="newsfeed.html"><span>Newsfeed</span></a>
                        </li>
                        <li>
                            <a href="blog.html"><span>Blog</span></a>
                        </li>
                        <li>
                            <a href="sign-in.html"><span>Sign In</span></a>
                        </li>
                        <li>
                            <a href="create-account.html"><span>Sign Up</span></a>
                        </li>
                        <li>
                            <a href="email.html"><span>Email Verification</span></a>
                        </li>
                        <li>
                            <a href="reset-password.html"><span>Reset Password</span></a>
                        </li>
                        <li>
                            <a href="help-center.html"><span>Help Center</span></a>
                        </li>
                        <li>
                            <a href="pricing-plan.html"><span>Pricing Plans</span></a>
                        </li>
                        <li>
                            <a href="404.html"><span>404</span></a>
                        </li>
                        <li>
                            <a href="500.html"><span>500</span></a>
                        </li>
                        <li>
                            <a href="503.html"><span>503</span></a>
                        </li>
                        <li>
                            <a href="505.html"><span>505</span></a>
                        </li>
                    </ul>
                </div>
            </li> -->
            <!-- End of Pages -->

            <!-- Start of Components -->
            <li>
                <a href="#collaps10" data-toggle="collapse">
                    <i class="icon icon-explore"><span class="path1"></span><span class="path2"></span></i><span class="menu-item-title">Components</span><i class="icon icon-keyboard_arrow_down arrow-icon"></i>
                </a>
                <div class="collapse" id="collaps10">
                    <ul>
                        <li>
                            <a href="./base/buttons.html"><span>Button</span></a>
                        </li>
                        <li>
                            <a href="./base/grids.html"><span>Grid</span></a>
                        </li>
                        <li>
                            <a href="./base/masonry.html"><span>Masonry</span></a>
                        </li>
                        <li>
                            <a href="./base/navbars.html"><span>Navbars</span></a>
                        </li>
                        <li>
                            <a href="./base/breadcrumbs.html"><span>Breadcrumb</span></a>
                        </li>
                        <li>
                            <a href="./base/dropdowns.html"><span>Dropdown</span></a>
                        </li>
                        <li>
                            <a href="./base/pagination.html"><span>Pagination</span></a>
                        </li>
                        <li>
                            <a href="./base/tabs.html"><span>Tabs</span></a>
                        </li>
                        <li>
                            <a href="./base/avatars.html"><span>Avatar</span></a>
                        </li>
                        <li>
                            <a href="./base/cards.html"><span>Card</span></a>
                        </li>
                        <li>
                            <a href="./base/empty.html"><span>Empty</span></a>
                        </li>
                        <li>
                            <a href="./base/lists.html"><span>List</span></a>
                        </li>
                        <li>
                            <a href="./base/tooltips.html"><span>Tooltip</span></a>
                        </li>
                        <li>
                            <a href="./base/popovers.html"><span>Popover</span></a>
                        </li>
                        <li>
                            <a href="./base/carousel.html"><span>Carousel</span></a>
                        </li>
                        <li>
                            <a href="./base/collapse.html"><span>Collapse</span></a>
                        </li>
                        <li>
                            <a href="./base/alerts.html"><span>Alert</span></a>
                        </li>
                        <li>
                            <a href="./base/modal.html"><span>Modal</span></a>
                        </li>
                        <li>
                            <a href="./base/notify.html"><span>Notification</span></a>
                        </li>
                        <li>
                            <a href="./base/badges.html"><span>Badges</span></a>
                        </li>
                        <li>
                            <a href="./base/progress.html"><span>Progress</span></a>
                        </li>
                        <li>
                            <a href="./base/sliders.html"><span>Sliders</span></a>
                        </li>
                        <li>
                            <a href="./base/typography.html"><span>Typography</span></a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- Ends of Components -->

            <!-- Start of Forms -->
            <li>
                <a href="#collaps15" data-toggle="collapse">
                    <i class="icon icon-library_books"><span class="path1"></span><span class="path2"></span></i><span class="menu-item-title">Forms</span><i class="icon icon-keyboard_arrow_down arrow-icon"></i>
                </a>
                <div class="collapse" id="collaps15">
                    <ul>
                        <li>
                            <a href="./base/input-group.html"><span>Input Groups</span></a>
                        </li>
                        <li>
                            <a href="./base/radios.html"><span>Radio</span></a>
                        </li>
                        <li>
                            <a href="./base/checkboxes.html"><span>Checkbox</span></a>
                        </li>
                        <li>
                            <a href="./base/switches.html"><span>Switch</span></a>
                        </li>
                        <li>
                            <a href="./base/datetimepicker.html"><span>Datetime Picker</span></a>
                        </li>
                        <li>
                            <a href="./base/spinners.html"><span>Spinner</span></a>
                        </li>
                        <li>
                            <a href="./base/autocomplete.html"><span>Autocomplete</span></a>
                        </li>
                        <li>
                            <a href="./base/google-captcha.html"><span>Google Recaptcha</span></a>
                        </li>
                        <!-- Forms Layouts -->
                        <li>
                            <a href="./base/form-layout.html"><span>Form Layouts</span></a>
                        </li>
                        <!-- End -->
                    </ul>
                </div>
            </li>
            <!-- Ends of Forms -->

            <!-- Start of Data Tables -->
            <li>
                <a href="#collaps14" data-toggle="collapse">
                    <i class="icon icon-filter_none"><span class="path1"></span><span class="path2"></span></i><span class="menu-item-title">Data Tables</span><i class="icon icon-keyboard_arrow_down arrow-icon"></i>
                </a>
                <div class="collapse" id="collaps14">
                    <ul>
                        <li>
                            <a href="./tables/tables.html"><span>Basic</span></a>
                        </li>
                        <li>
                            <a href="./tables/dynamic-rows.html"><span>Dynamic Rows</span></a>
                        </li>
                        <li>
                            <a href="./tables/alternative-pagination.html"><span>Pagination</span></a>
                        </li>
                        <li>
                            <a href="./tables/nested-rows.html"><span>Nested Rows</span></a>
                        </li>
                        <li>
                            <a href="./tables/complex-headers.html"><span>Complex Headers</span></a>
                        </li>
                        <li>
                            <a href="./tables/individual-column-searching.html"><span>Filter Columns</span></a>
                        </li>
                        <li>
                            <a href="./tables/dom-positioning.html"><span>Dom Positioning</span></a>
                        </li>
                        <li>
                            <a href="./tables/flexible-table-width.html"><span>Flexible Table</span></a>
                        </li>
                        <li>
                            <a href="./tables/footer-callback.html"><span>Footer Callback</span></a>
                        </li>
                        <li>
                            <a href="./tables/form-inputs.html"><span>Form Inputs</span></a>
                        </li>
                        <li>
                            <a href="./tables/hidden-columns.html"><span>Hidden Columns</span></a>
                        </li>
                        <li>
                            <a href="./tables/highlighting.html"><span>Highlight</span></a>
                        </li>
                        <li>
                            <a href="./tables/multi-col-sort.html"><span>Multi Columns Sorting</span></a>
                        </li>
                        <li>
                            <a href="./tables/row-grouping.html"><span>Row Grouping</span></a>
                        </li>
                        <li>
                            <a href="./tables/row-selection.html"><span>Row Selection</span></a>
                        </li>
                        <li>
                            <a href="./tables/scroll-horizontal-and-vertical.html"><span>Horizontal and Vertical Scroll</span></a>
                        </li>
                        <li>
                            <a href="./tables/scroll-horizontal.html"><span>Scroll Horizontal</span></a>
                        </li>
                        <li>
                            <a href="./tables/scroll-vertical.html"><span>Scroll Vertical</span></a>
                        </li>
                        <li>
                            <a href="./tables/state-saving.html"><span>State Saving</span></a>
                        </li>
                        <li>
                            <a href="./tables/table-sorting.html"><span>Table Sorting</span></a>
                        </li>
                        <li>
                            <a href="./tables/ajax-sourced-data.html"><span>Ajax Source Data</span></a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- End Of Data Tables -->

            <!-- Start of Charts -->
            <li>
                <a href="#collaps20" data-toggle="collapse">
                    <i class="icon icon-insert_chart"><span class="path1"></span><span class="path2"></span></i><span class="menu-item-title">Charts</span> <i class="icon icon-keyboard_arrow_down arrow-icon"></i>
                </a>
                <div class="collapse" id="collaps20">
                    <ul>
                        <li>
                            <a href="./charts/line-charts.html"><span>Line Charts</span></a>
                        </li>
                        <li>
                            <a href="./charts/bar-charts.html"><span>Bar Charts</span></a>
                        </li>
                        <li>
                            <a href="./charts/donut-charts.html"><span>Donut Charts</span></a>
                        </li>
                        <li>
                            <a href="./charts/dolphin-charts.html"><span>Dolphin Charts</span></a>
                        </li>
                        <li>
                            <a href="./charts/pie-charts.html"><span>Pie Charts</span></a>
                        </li>
                        <li>
                            <a href="./charts/multi-charts.html"><span>Multi-purpose charts</span></a>
                        </li>
                        <li>
                            <a href="./charts/stock-charts.html"><span>Stock charts</span></a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- End Of Charts -->

            <!-- Start of File Manager -->
            <li>
                <a href="#collaps13" data-toggle="collapse">
                    <i class="icon icon-book"><span class="path1"></span><span class="path2"></span></i><span class="menu-item-title">File Manager</span><i class="icon icon-keyboard_arrow_down arrow-icon"></i>
                </a>
                <div class="collapse" id="collaps13">
                    <ul>
                        <li>
                            <a href="file-manager.html"><span>Basic</span></a>
                        </li>
                        <li>
                            <a href="members-file-manager.html"><span>Secondary</span></a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- End of File Manager -->

            <!-- Start of InVoice -->
            <li>
                <a href="#collaps30" data-toggle="collapse">
                    <i class="icon icon-receipt"><span class="path1"></span><span class="path2"></span></i><span class="menu-item-title">Invoice</span><i class="icon icon-keyboard_arrow_down arrow-icon"></i>
                </a>
                <div class="collapse" id="collaps30">
                    <ul>
                        <li>
                            <a href="new-invoice.html"><span>New Invoice</span></a>
                        </li>
                        <li>
                            <a href="view-invoice.html"><span>View Invoice</span></a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- Ends of InVoice -->

            <!-- Start of File Uploaders -->
            <li>
                <a href="#collaps9" data-toggle="collapse">
                    <i class="icon icon-check_circle"><span class="path1"></span><span class="path2"></span></i><span class="menu-item-title">File Uploaders</span><i class="icon icon-keyboard_arrow_down arrow-icon"></i>
                </a>
                <div class="collapse" id="collaps9">
                    <ul>
                        <li>
                            <a href="./base/dropify.html"><span>Dropify</span></a>
                        </li>
                        <li>
                            <a href="./base/fine-uploader.html"><span>Fine uploader</span></a>
                        </li>
                        <li>
                            <a href="./base/dropzone.html"><span>Dropzone</span></a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- End of File Uploaders -->

            <!-- Start of Text Editors -->
            <li>
                <a href="#collaps111" data-toggle="collapse">
                    <i class="icon icon-subtitles"><span class="path1"></span><span class="path2"></span></i><span class="menu-item-title">Text Editors</span><i class="icon icon-keyboard_arrow_down arrow-icon"></i>
                </a>
                <div class="collapse" id="collaps111">
                    <ul>
                        <li>
                            <a href="./base/ckeditor.html"><span>Ckeditor</span></a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- Ends of Text Editors -->

            <!-- Start of Maps -->
            <li>
                <a href="#collaps19" data-toggle="collapse">
                    <i class="icon icon-map"><span class="path1"></span><span class="path2"></span></i><span class="menu-item-title">Maps</span> <i class="icon icon-keyboard_arrow_down arrow-icon"></i>
                </a>
                <div class="collapse" id="collaps19">
                    <ul>
                        <li>
                            <a href="google-maps.html"><span>Google</span></a>
                        </li>
                        <li>
                            <a href="leaflet-maps.html"><span>Leaflets</span></a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- End of Maps -->

            <!-- Start of Icons -->
            <li>
                <a href="icons.html">
                    <i class="icon icon-how_to_vote"><span class="path1"></span><span class="path2"></span></i><span class="menu-item-title">Icons</span>
                </a>
            </li>
            <!-- End of Icons -->
        </ul>
    </div>
    <!-- Vertical Aside Navigation -->
</div>

<script>
    function aside()
    {
        var loc = location.href;
        // $('.moby__side-bar ul').find('a').removeClass('active');
        // $('.moby__side-bar ul').find('a').attr('aria-expanded','false');
        // $('.moby__side-bar ul').find('a.collapse').removeClass('show');


        var area = $('.moby__side-bar ul').find('a[href="'+loc+'"]');
    
        area.addClass('active');
    
        if( $('.moby__side-bar ul').find('a[href="'+loc+'"]').attr('data-role') === 'collapse' )
        {


            area_ext = area.parents('.collapse');
    
            area_ext.addClass('show');
            $('.moby__side-bar ul').find('a[href="#'+area_ext.attr('id')+'"]').addClass('active');
            $('.moby__side-bar ul').find('a[href="#'+area_ext.attr('id')+'"]').attr('aria-expanded', 'true');
            area.addClass('active');
        }

    }

    aside();



    // $('a[data-toggle="collapse"]').click(function(e)
    // {
    //     var cmd = $(this),
    //     li = cmd.parent('li');

    //     // // $('.moby__side-bar ul').find('div.collapse').removeClass('show');

    //     if( cmd.attr('aria-expanded') === 'false')
    //     {

    //         cmd.attr('aria-expanded', 'true');
    //     //     // cmd.addClass('active');
    //         li.find('div.collapse').addClass('show');

            
    //     }
    //     else
    //     {
    //         cmd.attr('aria-expanded', 'false');
    //         // cmd.removeClass('active');
    //         li.find('div.collapse').removeClass('show');
    //     }

    //     // console.log('ok');
    //     e.preventDefault();
    // });
    
</script>
