@extends('user.templete.user-master')

@section('seo')
<meta name="description" content="Jigyas | User Account">
@endsection

@section('content')

            <div class="dashboard-content">
                <div class="row">

                    <div class="col-lg-12 col-sm-12">
                        <div id="add-listing">

                            <div class="add-listing-section">

                                <div class="add-listing-headline">
                                    <h3><i class="sl sl-icon-doc"></i> Mock Test Form</h3>
                                </div>

                                <div class="row with-forms">
                                    <div class="col-sm-6">
                                        <label>Name of Candidate <span>*</span></label>
                                        <input name="" type="text" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Candidate's Father Name <span>*</span></label>
                                        <input name="" type="text" />
                                    </div>
                                    <div class="col-sm-12">
                                        <label>Candidate's Address <span>*</span></label>
                                        <textarea name="address"></textarea>
                                    </div>
                                    <div class="col-sm-4">
                                        <label>Dist <span>*</span></label>
                                        <input name="" type="text" />
                                    </div>
                                    <div class="col-sm-4">
                                        <label>Phone No. <span>*</span></label>
                                        <input name="" type="text" />
                                    </div>
                                    <div class="col-sm-4">
                                        <label>Email <span>*</span></label>
                                        <input name="" type="email" />
                                    </div>
                                </div>

                                <div class="row with-forms">
                                    
                                    <div class="col-md-6">
                                        <label>Previous school <span>*</span></label>
                                        <input type="text" name="">
                                    </div>

                                    <div class="col-md-6">
                                        <label>Medium <span>*</span></label>
                                        <select class="chosen-select-no-single">
                                            <option>English</option>
                                            <option>Assamese</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="margin-top-30" style="margin-bottom:0px">Subject  <span>*</span></label>
                                        <div class="checkboxes in-row margin-bottom-20">
                                            <input id="check-a" type="checkbox" name="check" value="English">
                                            <label for="check-a">English</label>
                                            <input id="check-b" type="checkbox" name="check" value="Social Studies">
                                            <label for="check-b">Social Studies</label>
                                            <input id="check-c" type="checkbox" name="check" value="General Mathematics">
                                            <label for="check-c">General Mathematics</label>
                                            <input id="check-d" type="checkbox" name="check" value="General Science">
                                            <label for="check-d">General Science</label>
                                            <input id="check-f" type="checkbox" name="check" value="MIL(Assamese)">
                                            <label for="check-f">MIL(Assamese)</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label>Elective Subject <span>*</span></label>
                                        <select class="chosen-select-no-single">
                                            <option>Adv. Maths</option>
                                            <option>Computer Science</option>
                                            <option>Sanskrit</option>
                                            <option>Geography</option>
                                            <option>Hindi</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6" style="margin-top:10px">
                                        <label>Signature <small>(size less than 50kb)</small> <span>*</span></label>
                                        <input type="file" name="">
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <a href="#" class="button preview mock-action">Apply Now <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>

@endsection

@section('script')

@endsection
            