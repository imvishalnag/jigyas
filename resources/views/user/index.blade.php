@extends('user.templete.user-master')

@section('seo')
<meta name="description" content="Jigyas | User Account">
@endsection

@section('content')

            <div class="dashboard-content">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <div class="add-listing">
                            <div class="student-dashboard">
                            <h4>Welcome to Jigyas Student panel</h4>
                            </div>                           
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12 traffic">
                        <div class="dashboard-list-box">
                        <h4 class="gray">Mock Test</h4>
                            <div class="table-box">
                                <table class="basic-table">
                                    <thead>
                                        <tr>
                                            <th>Applied on</th>
                                            <th>Subject</th>
                                            <th>Admit Card</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>01/01/2017</td>
                                            <td class="t-id">English, General Maths, General Science</td>
                                            <td>
                                                <a href="" class="btn btn-warning"><i class="fa fa-download"></i> View</a><br>
                                                <h5>Your admit card is not generated yet</h5>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=3 class="text-center">                                                
                                            <h5 style="display:inline-block">You haven't applied for mock test </h5>&nbsp;&nbsp;<a href="{{route('user.mocktest.mocktest')}}" class="btn btn-primary">Apply Now <i class="fa fa-arrow-circle-right"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

 | User Account
            