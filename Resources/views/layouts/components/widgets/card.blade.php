<div class="col-lg-2">
    <!--begin::Mixed Widget 14-->
    <div class="card card-custom card-stretch gutter-b">
        <!--begin::Header-->

        <div class="card-header border-0 pt-5">
            <h3 class="card-title font-weight-bolder ">{{ $title }}</h3>
            {{--
            <div class="card-toolbar">
                <div class="dropdown dropdown-inline">
                    <a href="#" class="btn btn-clean btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="ki ki-bold-more-hor"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                        <!--begin::Navigation-->
                        <ul class="navi navi-hover py-5">
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                <span class="navi-icon"><i class="flaticon2-drop"></i></span>
                                <span class="navi-text">New Group</span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                <span class="navi-icon"><i class="flaticon2-list-3"></i></span>
                                <span class="navi-text">Contacts</span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                <span class="navi-icon"><i class="flaticon2-rocket-1"></i></span>
                                <span class="navi-text">Groups</span>
                                <span class="navi-link-badge">
                                <span class="label label-light-primary label-inline font-weight-bold">new</span>
                                </span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                <span class="navi-icon"><i class="flaticon2-bell-2"></i></span>
                                <span class="navi-text">Calls</span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                <span class="navi-icon"><i class="flaticon2-gear"></i></span>
                                <span class="navi-text">Settings</span>
                                </a>
                            </li>
                            <li class="navi-separator my-3"></li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                <span class="navi-icon"><i class="flaticon2-magnifier-tool"></i></span>
                                <span class="navi-text">Help</span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                <span class="navi-icon"><i class="flaticon2-bell-2"></i></span>
                                <span class="navi-text">Privacy</span>
                                <span class="navi-link-badge">
                                <span class="label label-light-danger label-rounded font-weight-bold">5</span>
                                </span>
                                </a>
                            </li>
                        </ul>
                        <!--end::Navigation-->
                    </div>
                </div>
            </div>
            --}}
        </div>

        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body d-flex flex-column">
            {{--
            <div class="flex-grow-1">
                <div id="kt_mixed_widget_14_chart" style="height: 200px"></div>
            </div>
            <div class="pt-5">
                <p class="text-center font-weight-normal font-size-lg pb-7">
                    Notes: Current sprint requires stakeholders<br/>
                    to approve newly amended policies
                </p>
                --}}
                {{ $body }}
                <a href="{{ $url }}" class="btn btn-success btn-shadow-hover font-weight-bolder w-100 py-3">vai</a>
            {{--
            </div>
            --}}
        </div>
        <!--end::Body-->
    </div>
    <!--end::Mixed Widget 14-->
</div>
