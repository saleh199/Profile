@extends('layouts.master')

@section('content')
    <div class="vd_content-section clearfix">
        <div class="row">
            <div class="col-sm-3">
                <div class="panel widget light-widget panel-bd-top">
                    <div class="panel-heading no-title"> </div>
                    <div class="panel-body">
                        <div class="text-center vd_info-parent"> <img alt="example image" src="img/avatar/big.jpg"> </div>
                        <div class="row">
                            <div class="col-xs-12"> <a class="btn vd_btn vd_bg-green btn-xs btn-block no-br"><i class="fa fa-check-circle append-icon"></i>Friends</a> </div>
                            <div class="col-xs-12"> <a class="btn vd_btn vd_bg-grey btn-xs btn-block no-br"><i class="fa fa-envelope append-icon"></i>Send Message</a> </div>
                        </div>
                        <h2 class="font-semibold mgbt-xs-5">Mariah Caraiban</h2>
                        <h4>Owner at Our Company, Inc.</h4>
                        <p>Ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        <div class="mgtp-20">
                            <table class="table table-striped table-hover">
                                <tbody>
                                <tr>
                                    <td style="width:60%;">Status</td>
                                    <td><span class="label label-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td>User Rating</td>
                                    <td><i class="fa fa-star vd_yellow fa-fw"></i><i class="fa fa-star vd_yellow fa-fw"></i><i class="fa fa-star vd_yellow fa-fw"></i><i class="fa fa-star vd_yellow fa-fw"></i><i class="fa fa-star vd_yellow fa-fw"></i></td>
                                </tr>
                                <tr>
                                    <td>Member Since</td>
                                    <td> Jan 07, 2014 </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- panel widget -->
            </div>

            <div class="col-sm-9">
                <div class="tabs widget">
                    <ul class="nav nav-tabs widget">
                        <li class="active"> <a data-toggle="tab" href="#profile-tab"> Profile <span class="menu-active"><i class="fa fa-caret-up"></i></span> </a></li>
                        <li> <a data-toggle="tab" href="#projects-tab"> Projects <span class="menu-active"><i class="fa fa-caret-up"></i></span> </a></li>
                        <li> <a data-toggle="tab" href="#photos-tab"> Photos <span class="menu-active"><i class="fa fa-caret-up"></i></span> </a></li>
                        <li> <a data-toggle="tab" href="#friends-tab"> Friends <span class="menu-active"><i class="fa fa-caret-up"></i></span> </a></li>
                        <li> <a data-toggle="tab" href="#groups-tab"> Groups <span class="menu-active"><i class="fa fa-caret-up"></i></span> </a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="profile-tab" class="tab-pane active">
                            <div class="pd-20">
                                <div class="vd_info tr"> <a class="btn vd_btn btn-xs vd_bg-yellow"> <i class="fa fa-pencil append-icon"></i> Edit </a> </div>
                                <h3 class="mgbt-xs-15 mgtp-10 font-semibold"><i class="icon-user mgr-10 profile-icon"></i> ABOUT</h3>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="row mgbt-xs-0">
                                            <label class="col-xs-5 control-label">First Name:</label>
                                            <div class="col-xs-7 controls">Mariah</div>
                                            <!-- col-sm-10 -->
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row mgbt-xs-0">
                                            <label class="col-xs-5 control-label">Last Name:</label>
                                            <div class="col-xs-7 controls">Caraiban</div>
                                            <!-- col-sm-10 -->
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row mgbt-xs-0">
                                            <label class="col-xs-5 control-label">User Name:</label>
                                            <div class="col-xs-7 controls">Mariah</div>
                                            <!-- col-sm-10 -->
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row mgbt-xs-0">
                                            <label class="col-xs-5 control-label">Email:</label>
                                            <div class="col-xs-7 controls">mariah@Vendroid.com</div>
                                            <!-- col-sm-10 -->
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row mgbt-xs-0">
                                            <label class="col-xs-5 control-label">City:</label>
                                            <div class="col-xs-7 controls">Los Angeles</div>
                                            <!-- col-sm-10 -->
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row mgbt-xs-0">
                                            <label class="col-xs-5 control-label">Country:</label>
                                            <div class="col-xs-7 controls">United States</div>
                                            <!-- col-sm-10 -->
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row mgbt-xs-0">
                                            <label class="col-xs-5 control-label">Birthday:</label>
                                            <div class="col-xs-7 controls">Jan 22, 1984</div>
                                            <!-- col-sm-10 -->
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row mgbt-xs-0">
                                            <label class="col-xs-5 control-label">Interests:</label>
                                            <div class="col-xs-7 controls">Basketball, Web, Design, etc.</div>
                                            <!-- col-sm-10 -->
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row mgbt-xs-0">
                                            <label class="col-xs-5 control-label">Website:</label>
                                            <div class="col-xs-7 controls"><a href="http://Vendroid.venmond.com">Vendroid.venmond.com</a></div>
                                            <!-- col-sm-10 -->
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row mgbt-xs-0">
                                            <label class="col-xs-5 control-label">Phone:</label>
                                            <div class="col-xs-7 controls">+1-234-5678</div>
                                            <!-- col-sm-10 -->
                                        </div>
                                    </div>
                                </div>
                                <hr class="pd-10">
                            </div>
                            <!-- pd-20 -->
                        </div>
                        <!-- home-tab -->

                    </div>
                    <!-- tab-content -->
                </div>
                <!-- tabs-widget -->              </div>
        </div>
    </div>
@endsection