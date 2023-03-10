<?php $__env->startSection('content'); ?>
<div class="main_dashboard">
    <section class="dashboard-section">
        <div class="container">
            <div class="manage-btn">My Buyer Contacts</div>
            <div class="row">
                <?php if(!$allrecords->isEmpty()): ?>
                    <?php $__currentLoopData = $allrecords; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $allrecord): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(isset($allrecord->Buyer->slug)): ?>
                    <div class="col-sm-5 col-md-3 buycnt">
                        <div class="profile-bx">
                            <div class="profile-img">
                                <?php if(isset($allrecord->Buyer->profile_image)): ?>
                                    <?php echo e(HTML::image(PROFILE_SMALL_DISPLAY_PATH.$allrecord->Buyer->profile_image, SITE_TITLE, ['id'=> 'pimage'])); ?>

                                <?php else: ?>
                                    <?php echo e(HTML::image('public/img/front/user-img.png', SITE_TITLE, ['id'=> 'pimage'])); ?>

                                <?php endif; ?>
                            </div>
                            <h2><?php echo isset($allrecord->Buyer->first_name)?$allrecord->Buyer->first_name.' '.$allrecord->Buyer->last_name:''; ?></h2>
                            <p id="contactn" class="showall"> <span id="showcontact"> <?php echo isset($allrecord->Buyer->contact)?$allrecord->Buyer->contact:''; ?> </span> </p>
                           
                            <div class="preview-btn"><a href="<?php echo e(URL::to( 'public-profile/'.$allrecord->Buyer->slug)); ?>" class="btn btn-default">View Public Profile</a></div>

                            <div class="user-details">
                                <ul>
                                    <li><label><i class="fa fa-user" aria-hidden="true"></i>Member since</label><span><?php echo $allrecord->Buyer->created_at->format('M Y'); ?></span></li>
                                    <li id="countryctn">
                                        <label class="cntry_div"><i class="fa fa-map-marker" aria-hidden="true"></i>From</label>
                                        <span class="cnnnm cntry_right" id="countryid">
                                            <span id="cname">
                                                <?php
                                                $addd = array();
                                                if ($allrecord->Buyer->city) {
                                                    $addd[] = $allrecord->Buyer->city;
                                                }
                                                if ($allrecord->Buyer->country_id) {
                                                    $addd[] = $allrecord->Buyer->Country->name;
                                                }
                                                if ($allrecord->Buyer->zipcode) {
                                                    $addd[] = $allrecord->Buyer->zipcode;
                                                }
                                                echo implode(', ', $addd);
                                                ?>
                                            </span>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?> 
                    <div class="col-md-12"><div class="management-full no_contact">No requests found. </div></div>
                <?php endif; ?>
            </div>
        </div>
    </section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.inner', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>