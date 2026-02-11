@extends('admin.navigation')
   
@section('content')

<div class="user-profile-area d-flex flex-wrap">
  <div class="row">
    <div class="col-12">
        <div class="car">
            <div class="card-header"></div>
            <div class="card-body bg-white">
                <div class="user-profile-info">
                    <div class="page_bannar">
                        <img src="{{ asset('/assets/images/Top_Bannar.png') }}" alt="top_bannar" style="width: 100%; height: 234px; margin-bottom:50px;">
                    </div>
                    <form action="{{ route('english-admission.store') }}" method="post" class="pt-2">
                        @csrf
                        <div class="row border pt-3 mt-3" style="background-color: rgb(206, 203, 203);">
                            <div class="col-12 pb-3">
                                <div class="form-group">
                                <label for="" class="font-weight-bold text-black"> Student Name: </label>
                                <input type="text" name="student_name" onkeypress="return restrictInput(this, event, alphaOnly_custom);" style="text-transform:uppercase" class="form-control" required="" value=""> 
                                </div>
                            </div>
                            <div class="col-12 pb-3">
                                <div class="form-group">
                                <label for="" class="font-weight-bold text-black">Date Of Birth: </label>
                                <input type="date" name="dob" onkeypress="return restrictInput(this, event, alphaOnly_custom);" style="text-transform:uppercase" class="form-control" required="" value=""> 
                                </div>
                            </div>
                        </div>

                        <div class="row border pt-3 mt-3" style="background-color: rgb(206, 203, 203);">
                            <div class="col-12 pb-3">
                                <div class="form-group">
                                <label for="" class="font-weight-bold text-black"> Fathers Name: </label>
                                <input type="text" name="std_name_e" onkeypress="return restrictInput(this, event, alphaOnly_custom);" style="text-transform:uppercase" class="form-control" required="" value=""> 
                                </div>
                            </div>
                        </div>

                        <div class="row border pt-3 mt-3" style="background-color: rgb(206, 203, 203);">
                            <div class="col-12 pb-3">
                                <div class="form-group">
                                <label for="" class="font-weight-bold text-black"> Mothers Name: </label>
                                <input type="text" name="std_name_e" onkeypress="return restrictInput(this, event, alphaOnly_custom);" style="text-transform:uppercase" class="form-control" required="" value=""> 
                                </div>
                            </div>
                        </div>

                        <div class="row border pt-3 mt-3" style="background-color: rgb(206, 203, 203);">	
                            <label class="col-sm-3"> Student's mobile number</label>
                            <div class="col-sm-3">
						        <div class="form-group">
									<input type="number" name="p_mobile" required="" class="form-control" value="">
								</div>
                            </div>
                            <label class="col-sm-3 text-right"> If the parent's mobile is:</label>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <input type="number" class="form-control" name="guardian_mobile" value="">
                                </div>
                            </div>
                        </div>

                        <div class="row border pt-3 mt-3" style="background-color: rgb(206, 203, 203);">	
                            <label class="col-sm-3">Current Address:</label>
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Village :</label>
                                            <input name="p_villege" type="text" class="form-control" value=""> 
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Post office: </label>
                                            <input type="text" class="form-control" name="p_post_name" value=""> 
                                        </div>
                                    </div>
                                
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Upazila:</label>
                                            <input type="text" name="p_upzila" class="form-control" value=""> 
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">District:</label>
                                            <input type="text" name="p_zila" class="form-control" value=""> 
                                        </div>
                                    </div>
                                </div>
						    </div>
                        </div>

                        <div class="row border pt-3 mt-3" style="background-color: rgb(206, 203, 203);">	
                            <label class="col-sm-3">Permanent Address:</label>
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Village : </label>
                                            <input name="st_guardian_vill" type="text" class="form-control" value=""> 
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Post office:  </label>
                                            <input type="text" class="form-control" name="st_guardian_post" value=""> 
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Upazila:</label>
                                            <input type="text" name="st_guardian_upzi" class="form-control" value=""> 
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">District:</label>
                                            <input type="text" name="st_guardian_dist" class="form-control" value=""> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row border pt-3 mt-3" style="background-color: rgb(206, 203, 203);">
                            <label class="col-sm-3">J.S.C:</label>
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Roll:</label>
                                            <input type="number" class="form-control" name="jsc_role" value="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Reg:</label>
                                            <input type="number" class="form-control" name="jsc_regi" value="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Subject/group:</label>
                                            <input name="jsc_subject" type="text" class="form-control" value="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Year of Pass:</label>
                                            <input type="number" class="form-control" name="jsc_passing" placeholder="" value="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>GPA:</label>
                                            <input name="jsc_gpa" type="text" class="form-control" onkeypress="return restrictInput(this, event, integerOnly);" value="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Board:</label>
                                            <input type="text" class="form-control" name="jsc_board" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row border pt-3 mt-3" style="background-color: rgb(206, 203, 203);">
                            <label class="col-sm-3">S.S.C: </label>
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Roll:</label>
                                            <input type="number" class="form-control" name="ssc_roll" value="">
                                        </div>
                                    </div>
                                        <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Reg:</label>
                                            <input type="number" class="form-control" name="ssc_regi" value="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Subject/group:</label>
                                            <input name="ssc_subject" type="text" class="form-control" value="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Year of Pass:</label>
                                            <input type="number" class="form-control" name="ssc_passing_year" placeholder="" value="">
                                        </div>
                                    </div>
                                        <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>GPA:</label>
                                            <input name="ssc_bivag" type="text" class="form-control" onkeypress="return restrictInput(this, event, integerOnly);" value="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Board:</label>
                                            <input type="text" class="form-control" name="ssc_board" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row border pt-3 mt-3" style="background-color: rgb(206, 203, 203);">
                            <label class="col-sm-3"> Select Admission Technology: </label>
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Technology</label>
                                            <select name="" id="">
                                                <option value="">Select Tecnology</option>
                                                <option value="5">Digital Marketing </option>
                                                <option value="3">Diploma in Computer Science</option>
                                                <option value="7">Freelancing with Account Management</option>
                                                <option value="2">Freelancing with Graphics Design</option>
                                                <option value="6">Higher Diploma in Computer Science</option>
                                                <option value="8">IT Support Technician</option>
                                                <option value="1">Professional Office Management</option>
                                                <option value="4">Web Design &amp; Development</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Session</label>
                                            <select class="form-control" name="course_session">
                                                <option value="">Select Session</option>
                                                <option value="1">জানুয়ারি টু জুন</option>
                                                <option value="2">জুলাই টু ডিসেম্বর</option>
                                                <option value="3">জানুয়ারি টু মার্চ</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Batch </label>
                                            <select class="form-control" name="class_section_name" id="class_section_name">
                                                <option value="">Select Batch </option>
                                                <option value="6">A85</option>
                                                <option value="7">A86</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row border pt-3 mt-3" style="background-color: rgb(206, 203, 203);">
                            <label class="col-sm-3"> Gender:</label>
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label><input type="radio" value="male" id="gender" name="gender">
                                            Male</label>
                                            <label><input type="radio" value="female" id="gender" name="gender">
                                            Female</label>
                                            <label><input type="radio" value="other" id="gender" name="gender">
                                            Other</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row border pt-3 mt-3" style="background-color: rgb(206, 203, 203);">
                            <label class="col-sm-3"> Religion:</label>
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="religion" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row border pt-3 mt-3" style="background-color: rgb(206, 203, 203);">
                            <label class="col-sm-3"> Nationality:</label>
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" name="nationality" class="form-control" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row border pt-3 mt-3" style="background-color: rgb(206, 203, 203);">
                            <label class="col-sm-3"> Nationality:</label>
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" name="nationality" class="form-control" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row border pt-3 mt-3" style="background-color: rgb(206, 203, 203);">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-9">
                                <div class="form-group">
                                        <label style="color:green">image size: Any size</label><br>
                                    <label class="show_result_images"></label>
                                    <input type="file" required="" class="form-control" id="file" name="st_images">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row border pt-3 mt-3" style="background-color: rgb(206, 203, 203);">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
@endsection

<script type="text/javascript">

</script>