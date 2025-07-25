<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ route('dashboard') }}"
                        aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                            class="hide-menu">Dashboard</span></a>
                </li>
                <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">Applications</span></li>

                <li class="sidebar-item"> <a class="sidebar-link" href="{{ route('kategory') }}"
                        aria-expanded="false"><i data-feather="archive" class="feather-icon"></i><span
                            class="hide-menu">Kategori
                        </span></a>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ route('product') }}"
                        aria-expanded="false"><i data-feather="coffee" class="feather-icon"></i><span
                            class="hide-menu">Produk</span></a>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ route('stock') }}"
                        aria-expanded="false"><i data-feather="box" class="feather-icon"></i><span
                            class="hide-menu">Stok</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ route('pengguna') }}"
                        aria-expanded="false"><i data-feather="user" class="feather-icon"></i><span
                            class="hide-menu">Pengguna</span></a>
                </li>

                {{-- <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">Components</span></li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                        aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                            class="hide-menu">Forms </span></a>
                    <ul aria-expanded="false" class="collapse  first-level base-level-line">
                        <li class="sidebar-item"><a href="form-inputs.html" class="sidebar-link"><span
                                    class="hide-menu"> Form Inputs
                                </span></a>
                        </li>
                        <li class="sidebar-item"><a href="form-input-grid.html" class="sidebar-link"><span
                                    class="hide-menu"> Form Grids
                                </span></a>
                        </li>
                        <li class="sidebar-item"><a href="form-checkbox-radio.html" class="sidebar-link"><span
                                    class="hide-menu"> Checkboxes &
                                    Radios
                                </span></a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                        aria-expanded="false"><i data-feather="grid" class="feather-icon"></i><span
                            class="hide-menu">Tables </span></a>
                    <ul aria-expanded="false" class="collapse  first-level base-level-line">
                        <li class="sidebar-item"><a href="table-basic.html" class="sidebar-link"><span
                                    class="hide-menu"> Basic Table
                                </span></a>
                        </li>
                        <li class="sidebar-item"><a href="table-dark-basic.html" class="sidebar-link"><span
                                    class="hide-menu"> Dark Basic Table
                                </span></a>
                        </li>
                        <li class="sidebar-item"><a href="table-sizing.html" class="sidebar-link"><span
                                    class="hide-menu">
                                    Sizing Table
                                </span></a>
                        </li>
                        <li class="sidebar-item"><a href="table-layout-coloured.html" class="sidebar-link"><span
                                    class="hide-menu">
                                    Coloured
                                    Table Layout
                                </span></a>
                        </li>
                        <li class="sidebar-item"><a href="table-datatable-basic.html" class="sidebar-link"><span
                                    class="hide-menu">
                                    Basic
                                    Datatables
                                    Layout
                                </span></a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                        aria-expanded="false"><i data-feather="bar-chart" class="feather-icon"></i><span
                            class="hide-menu">Charts </span></a>
                    <ul aria-expanded="false" class="collapse  first-level base-level-line">
                        <li class="sidebar-item"><a href="chart-morris.html" class="sidebar-link"><span
                                    class="hide-menu"> Morris Chart
                                </span></a>
                        </li>
                        <li class="sidebar-item"><a href="chart-chart-js.html" class="sidebar-link"><span
                                    class="hide-menu"> ChartJs
                                </span></a>
                        </li>
                        <li class="sidebar-item"><a href="chart-knob.html" class="sidebar-link"><span
                                    class="hide-menu">
                                    Knob Chart
                                </span></a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                        aria-expanded="false"><i data-feather="box" class="feather-icon"></i><span
                            class="hide-menu">UI Elements </span></a>
                    <ul aria-expanded="false" class="collapse  first-level base-level-line">
                        <li class="sidebar-item"><a href="ui-buttons.html" class="sidebar-link"><span
                                    class="hide-menu"> Buttons
                                </span></a>
                        </li>
                        <li class="sidebar-item"><a href="ui-modals.html" class="sidebar-link"><span
                                    class="hide-menu"> Modals </span></a>
                        </li>
                        <li class="sidebar-item"><a href="ui-tab.html" class="sidebar-link"><span class="hide-menu">
                                    Tabs </span></a></li>
                        <li class="sidebar-item"><a href="ui-tooltip-popover.html" class="sidebar-link"><span
                                    class="hide-menu"> Tooltip &
                                    Popover</span></a></li>
                        <li class="sidebar-item"><a href="ui-notification.html" class="sidebar-link"><span
                                    class="hide-menu">Notification</span></a></li>
                        <li class="sidebar-item"><a href="ui-progressbar.html" class="sidebar-link"><span
                                    class="hide-menu">Progressbar</span></a></li>
                        <li class="sidebar-item"><a href="ui-typography.html" class="sidebar-link"><span
                                    class="hide-menu">Typography</span></a></li>
                        <li class="sidebar-item"><a href="ui-bootstrap.html" class="sidebar-link"><span
                                    class="hide-menu">Bootstrap
                                    UI</span></a></li>
                        <li class="sidebar-item"><a href="ui-breadcrumb.html" class="sidebar-link"><span
                                    class="hide-menu">Breadcrumb</span></a></li>
                        <li class="sidebar-item"><a href="ui-list-media.html" class="sidebar-link"><span
                                    class="hide-menu">List
                                    Media</span></a></li>
                        <li class="sidebar-item"><a href="ui-grid.html" class="sidebar-link"><span
                                    class="hide-menu"> Grid </span></a></li>
                        <li class="sidebar-item"><a href="ui-carousel.html" class="sidebar-link"><span
                                    class="hide-menu">
                                    Carousel</span></a></li>
                        <li class="sidebar-item"><a href="ui-scrollspy.html" class="sidebar-link"><span
                                    class="hide-menu">
                                    Scrollspy</span></a></li>
                        <li class="sidebar-item"><a href="ui-toasts.html" class="sidebar-link"><span
                                    class="hide-menu"> Toasts</span></a>
                        </li>
                        <li class="sidebar-item"><a href="ui-spinner.html" class="sidebar-link"><span
                                    class="hide-menu"> Spinner </span></a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="ui-cards.html"
                        aria-expanded="false"><i data-feather="sidebar" class="feather-icon"></i><span
                            class="hide-menu">Cards
                        </span></a>
                </li> --}}
                <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">Processing</span></li>

                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="authentication-login1.html"
                        aria-expanded="false"><i data-feather="shopping-bag" class="feather-icon"></i><span
                            class="hide-menu">Laporan Penjualan
                        </span></a>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="authentication-register1.html"
                        aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                            class="hide-menu">Ulasan Pelanggan
                        </span></a>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="authentication-register1.html"
                        aria-expanded="false"><i data-feather="credit-card" class="feather-icon"></i><span
                            class="hide-menu">Riwayat Transaksi
                        </span></a>
                </li>




                <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">Setting</span></li>

                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="authentication-login1.html"
                        aria-expanded="false"><i data-feather="log-out" class="feather-icon"></i><span
                            class="hide-menu">Logout</span></a></li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
