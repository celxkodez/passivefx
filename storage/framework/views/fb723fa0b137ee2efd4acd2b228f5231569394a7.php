<?php echo $__env->make('header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page signup-page">
				<h3 class="title1">Your Profile Information</h3>

				<?php if(Session::has('message')): ?>
		        <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i> <?php echo e(Session::get('message')); ?>

                        </div>
                    </div>
                </div>
                <?php endif; ?>

                <div class="container">
                    <div class="row">
                        <div class="col">
                        <button type="submit" class="btn btn-primary nav-pills" style="border-radius:none;" data-toggle="modal" data-target="#edit" >Update Profile</button>
                        </div>
                    </div>
                    <div class="row ">
                    
                        <div class="col-md-3 col-sm-12 text-center" style=" margin-bottom: 15px; radius: none;">
<!--                         
                            <i class="fa fa-user" style="font-size: 170px"></i> <br> -->
                            <h5>Fullname</h5>
                            <h3 class="text-primary"><?php echo e($userinfo->l_name); ?> <?php echo e($userinfo->name); ?></h3>
                        </div>
                        <div class="col-md-7 col-sm-12 main-raised bg-light">
                            <p> <b>Address</b></p>
                            <p style="color: black;"> <?php echo e($userinfo->adress); ?></p> <br>

                            <p><b>Date of Birth</b> </p>
                            <p style="color: black"><?php echo e($userinfo->dob); ?></p><br>
							
							<p><b>Phone Number</b> </p>
							<p style="color: black"><?php echo e($userinfo->phone_number); ?></p>
                        </div>
                    </div>
          
                    <div id="edit" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                            <div class="modal-header .modal-dialog-centered ">
                                Edit my Profile
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <form style="padding:3px;" role="form" method="post"action="<?php echo e(action('SomeController@updateprofile')); ?>">
                                <input type="hidden" name="user_id" value="<?php echo e($userinfo->id); ?>">
                                <label for="firtsname">Firstname</label>
                                    <input type="text" name="firstname" value="<?php echo e($userinfo->name); ?>" class="form-control"> <br>
                                    <label for="surname">Surname</label>
                                    <input type="text" name="surname" value="<?php echo e($userinfo->l_name); ?>" class="form-control"> <br>
                                    <label for="dob">Date of Birth</label>
                                    <input type="date" name="dob"  class="form-control" value="<?php echo e($userinfo->dob); ?>"> <br>
									<label for="dob">Phone number</label>
                                    <input type="text" name="phone"  class="form-control" value="<?php echo e($userinfo->phone_number); ?>"> <br>
                                    <label for="address">Address</label>
                                    <textarea class="form-control" placeholder="Full Address" name="address" row="3" value="<?php echo e($userinfo->adress); ?>"><?php echo e($userinfo->adress); ?></textarea><br/>
                                        <input type="hidden" name="user_id" value="">
                                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                        <input type="submit" class="btn btn-primary nav-pills" value="Update">
                                </form>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</div>
		<?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>