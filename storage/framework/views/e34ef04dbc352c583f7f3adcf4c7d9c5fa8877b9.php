
   
<?php $__env->startSection('content'); ?>

<div class="user-profile-area d-flex flex-wrap">
  <div class="row">
    <div class="col-12">
        <div class="car">
            <div class="card-header"></div>
            <div class="card-body bg-white">
                <div class="user-profile-info">
                    <div class="page_bannar">
                        <img src="<?php echo e(asset('/assets/images/Top_Bannar.png')); ?>" alt="top_bannar" style="width: 100%; height: 234px; margin-bottom:50px;">
                    </div>
                    <form action="<?php echo e(route('english-admission.store')); ?>" method="post" class="pt-2">
                        <?php echo csrf_field(); ?>
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
  <div class="user-details-info">
    <!-- Tab label -->
    <div class="eForm-layouts">
        <form method="POST" enctype="multipart/form-data" action="<?php echo e(route('admin.offline_admission.create')); ?>">
            <?php echo csrf_field(); ?> 
            <div class="row fmb-14 justify-content-between align-items-center">
                <label for="name" class="col-sm-2 col-eForm-label"><?php echo e(get_phrase('Name')); ?></label>
                <div class="col-sm-10 col-md-9 col-lg-10">
                    <input type="text" class="form-control eForm-control" id="name" name="name" required>
                </div>
            </div>
            <div class="row fmb-14 justify-content-between align-items-center">
                <label for="email"
                    class="col-sm-2 col-eForm-label"><?php echo e(get_phrase('Email')); ?></label>
                <div class="col-sm-10 col-md-9 col-lg-10">
                    <input type="email" class="form-control eForm-control" id="email" name="email" required>
                </div>
            </div>
            <div class="row fmb-14 justify-content-between align-items-center">
                <label for="password"
                    class="col-sm-2 col-eForm-label"><?php echo e(get_phrase('Password')); ?></label>
                <div class="col-sm-10 col-md-9 col-lg-10">
                    <input type="password" class="form-control eForm-control" id="password" name="password" required>
                </div>
            </div>
    
            <div class="row fmb-14 justify-content-between align-items-center">
                <label for="section_id" class="col-sm-2 col-eForm-label"><?php echo e(get_phrase('Section')); ?></label>
                <div class="col-md-10" id = "section_content">
                    <select name="section_id" id="section_id" class="form-select eForm-select eChoice-multiple-with-remove" required >
                        <option value=""><?php echo e(get_phrase('Select section')); ?></option>
                    </select>
                </div>
            </div>
    
            <div class="row fmb-14 justify-content-between align-items-center">
                <label for="birthdatepicker" class="col-sm-2 col-eForm-label"><?php echo e(get_phrase('Birthday')); ?><span class="required"></span></label>
                <div class="col-md-10">
                    <input type="text" class="form-control eForm-control" id="eInputDate" name="eDefaultDateRange" value="<?php echo e(date('m/d/Y')); ?>" />
                </div>
            </div>
    
            <div class="row fmb-14 justify-content-between align-items-center">
                <label for="gender" class="col-sm-2 col-eForm-label"><?php echo e(get_phrase('Gender')); ?></label>
                <div class="col-md-10">
                    <select name="gender" id="gender" class="form-select eForm-select eChoice-multiple-with-remove"  required>
                        <option value=""><?php echo e(get_phrase('Select gender')); ?></option>
                        <option value="Male"><?php echo e(get_phrase('Male')); ?></option>
                        <option value="Female"><?php echo e(get_phrase('Female')); ?></option>
                        <option value="Others"><?php echo e(get_phrase('Others')); ?></option>
                    </select>
                </div>
            </div>
    
            <div class="row fmb-14 justify-content-between align-items-center">
                <label for="blood_group" class="col-sm-2 col-eForm-label"><?php echo e(get_phrase('Blood group')); ?></label>
                <div class="col-md-10">
                    <select name="blood_group" id="blood_group" class="form-select eForm-select eChoice-multiple-with-remove"  required>
                        <option value=""><?php echo e(get_phrase('Select a blood group')); ?></option>
                        <option value="a+"><?php echo e(get_phrase('A+')); ?></option>
                        <option value="a-"><?php echo e(get_phrase('A-')); ?></option>
                        <option value="b+"><?php echo e(get_phrase('B+')); ?></option>
                        <option value="b-"><?php echo e(get_phrase('B-')); ?></option>
                        <option value="ab+"><?php echo e(get_phrase('AB+')); ?></option>
                        <option value="ab-"><?php echo e(get_phrase('AB-')); ?></option>
                        <option value="o+"><?php echo e(get_phrase('O+')); ?></option>
                        <option value="o-"><?php echo e(get_phrase('O-')); ?></option>
                    </select>
                </div>
            </div>
    
            <div class="row fmb-14 justify-content-between align-items-center">
                <label for="address" class="col-sm-2 col-eForm-label"><?php echo e(get_phrase('Address')); ?></label>
                <div class="col-md-10">
                    <textarea class="form-control eForm-control" id="address" rows="4" name = "address" required></textarea>
                </div>
            </div>
    
            <div class="row fmb-14 justify-content-between align-items-center">
                <label for="phone" class="col-sm-2 col-eForm-label"><?php echo e(get_phrase('Phone')); ?></label>
                <div class="col-md-10">
                    <input type="text" id="phone" name="phone" class="form-control eForm-control" required>
                </div>
            </div>
    
            <div class="row fmb-14 justify-content-between align-items-center">
                <label for="photo" class="col-sm-2 col-eForm-label"><?php echo e(get_phrase('Student profile image')); ?></label>
                <div class="col-md-10">
                    <input class="form-control eForm-control-file" type="file" id="photo" name="photo" accept="image/*">
                </div>
            </div>
    
            <div class="row">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn-form"><?php echo e(get_phrase('Add Student')); ?></button>
                </div>
            </div>
        </form>
    </div>
      
  </div>
</div>
<?php $__env->stopSection(); ?>

<script type="text/javascript">

</script>
<?php echo $__env->make('admin.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\laragon\www\Ekattor8\Ekattor8\resources\views/admin/englishadmission/index.blade.php ENDPATH**/ ?>