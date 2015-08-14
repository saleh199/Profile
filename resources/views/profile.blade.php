@extends('layouts.master')

@section('content')
    <div class="vd_title-section clearfix">
        <div class="vd_panel-header no-subtitle">
            <h1>User Profile Page</h1>
        </div>
    </div>
    <div class="vd_content-section clearfix">
        <div class="row">
            <div class="col-sm-3">
                <div class="panel widget light-widget panel-bd-top">
                    <div class="panel-heading no-title"> </div>
                    <div class="panel-body">
                        <div class="text-center vd_info-parent"> <img alt="example image" src="{{asset($user->image)}}"> </div>
                        <h2 class="font-semibold mgbt-xs-5">{{$user->name}}</h2>
                        <p>{{$user->bio}}</p>
                        <div class="mgtp-20">
                            <table class="table table-striped table-hover">
                                <tbody>
                                <tr>
                                    <td>Member Since</td>
                                    <td> {{$user->created_at}} </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- panel widget -->
            </div>

            <div class="col-sm-9">
                <div class="cover-image">
                    <img src="{{asset($user->cover_image)}}" width="100%" height="240px">
                </div>
                <div class="tabs widget">
                    <ul class="nav nav-tabs widget">
                        <li class="active"> <a data-toggle="tab" href="#profile-tab"> Profile <span class="menu-active"><i class="fa fa-caret-up"></i></span> </a></li>
                        <li> <a data-toggle="tab" href="#projects-tab"> Projects <span class="menu-active"><i class="fa fa-caret-up"></i></span> </a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="profile-tab" class="tab-pane active">
                            <div class="pd-20">
                                <div class="vd_info tr"> <a class="btn vd_btn btn-xs vd_bg-yellow"> <i class="fa fa-pencil append-icon"></i> Edit </a> </div>
                                <h3 class="mgbt-xs-15 mgtp-10 font-semibold"><i class="icon-user mgr-10 profile-icon"></i> ABOUT</h3>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="row mgbt-xs-0">
                                            <label class="col-xs-5 control-label">Name:</label>
                                            <div class="col-xs-7 controls">{{$user->name}}</div>
                                            <!-- col-sm-10 -->
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row mgbt-xs-0">
                                            <label class="col-xs-5 control-label">Email:</label>
                                            <div class="col-xs-7 controls">{{$user->email}}</div>
                                            <!-- col-sm-10 -->
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row mgbt-xs-0">
                                            <label class="col-xs-5 control-label">City:</label>
                                            <div class="col-xs-7 controls">{{$user->city}}</div>
                                            <!-- col-sm-10 -->
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row mgbt-xs-0">
                                            <label class="col-xs-5 control-label">Country:</label>
                                            <div class="col-xs-7 controls">{{$user->country}}</div>
                                            <!-- col-sm-10 -->
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row mgbt-xs-0">
                                            <label class="col-xs-5 control-label">Birthday:</label>
                                            <div class="col-xs-7 controls">{{$user->birthdate}}</div>
                                            <!-- col-sm-10 -->
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row mgbt-xs-0">
                                            <label class="col-xs-5 control-label">Website:</label>
                                            <div class="col-xs-7 controls"><a href="{{$user->website}}">{{$user->website}}</a></div>
                                            <!-- col-sm-10 -->
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row mgbt-xs-0">
                                            <label class="col-xs-5 control-label">Phone:</label>
                                            <div class="col-xs-7 controls">{{$user->phone}}</div>
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