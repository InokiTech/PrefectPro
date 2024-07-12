<?php $__env->startSection('content'); ?>
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="#" class="logo">
                            <img src="<?php echo e(asset('frontend/assets/images/logo.png')); ?>" alt="Academits" />
                            <span class="text-capitalize fw-bold fs-4 mx-2 mt-5 text-dark">Academits</span>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section">
                                <a href="#top"><?php echo e(get_phrase('Home')); ?></a>
                            </li>
                            <li class="scroll-to-section">
                                <a href="#features"><?php echo e(get_phrase('Feature')); ?></a>
                            </li>
                            <li class="scroll-to-section">
                                <a href="#pricing"><?php echo e(get_phrase('Price')); ?></a>
                            </li>
                            <li class="scroll-to-section">
                                <a href="#faq"><?php echo e(get_phrase('Faq')); ?></a>
                            </li>
                            <li class="scroll-to-section">
                                <a href="#newsletter"><?php echo e(get_phrase('Contact')); ?></a>
                            </li>
                            <?php
                                if (isset(auth()->user()->id) && auth()->user()->id != '') {
                                    if (auth()->user()->role_id == '1') {
                                        $panel = 'Superadmin';
                                        $dashboard = route('superadmin.dashboard');
                                        $user_profile = route('superadmin.profile');
                                    } elseif (auth()->user()->role_id == '2') {
                                        $panel = 'Administrator';
                                        $dashboard = route('admin.dashboard');
                                        $user_profile = route('admin.profile');
                                    } elseif (auth()->user()->role_id == '3') {
                                        $panel = 'Teacher';
                                        $dashboard = route('teacher.dashboard');
                                        $user_profile = route('teacher.profile');
                                    } elseif (auth()->user()->role_id == '4') {
                                        $panel = 'Accountant';
                                        $dashboard = route('accountant.dashboard');
                                        $user_profile = route('accountant.profile');
                                    } elseif (auth()->user()->role_id == '5') {
                                        $panel = 'Librarian';
                                        $dashboard = route('librarian.dashboard');
                                        $user_profile = route('librarian.profile');
                                    } elseif (auth()->user()->role_id == '6') {
                                        $panel = 'Parent';
                                        $dashboard = route('parent.dashboard');
                                        $user_profile = route('parent.profile');
                                    } elseif (auth()->user()->role_id == '7') {
                                        $panel = 'Student';
                                        $dashboard = route('student.dashboard');
                                        $user_profile = route('student.profile');
                                    } elseif (auth()->user()->role_id == '8') {
                                        $panel = 'Driver';
                                        $dashboard = route('driver.dashboard');
                                        $user_profile = route('driver.profile');
                                    } elseif (auth()->user()->role_id == '9') {
                                        $panel = 'Alumni';
                                        $dashboard = route('alumni.dashboard');
                                        $user_profile = route('alumni.profile');
                                    }
                                }
                            ?>
                            <?php if(isset(auth()->user()->id) && auth()->user()->id != ''): ?>
                                <li id="btn-login">
                                    <a class="username" href="<?php echo e($dashboard); ?>"><?php echo e(get_phrase($panel)); ?></a>
                                    <!-- <p class="username"> James Jacob </p> -->
                                </li>
                                <li class="userProfile">
                                    <div class="dropdown">
                                        <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <img src="<?php echo e(get_user_image(auth()->user()->id)); ?>" alt="user-img"
                                                width="10px">
                                        </button>
                                        <div class="dropdown-menu">
                                            <div><a class="dropdown-item" href="<?php echo e($user_profile); ?>"><i
                                                        class="fa fa-user"></i><?php echo e(get_phrase('Profile')); ?></a></div>
                                            <div><a class="dropdown-item" href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                                <i class="fa fa-sign-out-alt"></i><?php echo e(get_phrase('Log out')); ?></a>
                                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
                                                    class="d-none">
                                                    <?php echo csrf_field(); ?>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            <?php else: ?>
                                <li id="btn-login">
                                    <div class="btn-white">
                                        <a id="modal_trigger" class="my-2 my-lg-0 my-md-0" href="<?php echo e(route('login')); ?>"
                                            target="_blank"><?php echo e(get_phrase('Login')); ?></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="gradient-button">
                                        <a id="modal_trigger" target="_blank" data-bs-toggle="modal"
                                            data-bs-target="#myModal">Register</a>
                                    </div>
                                </li>
                            <?php endif; ?>
                        </ul>
                        <a class="menu-trigger">
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s"
                                data-wow-delay="1s">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4 class="hr-lines"><?php echo e(get_settings('system_title')); ?></h4>
                                        <h2><?php echo e(get_settings('banner_title')); ?></h2>
                                        <p><?php echo e(get_settings('banner_subtitle')); ?></p>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="bg-gradient-black hero-section-info">
                                            <div>
                                                <h1><?php echo e(count($schools)); ?></h1>
                                                <h5><?php echo e(get_phrase('Schools')); ?></h5>
                                            </div>
                                            <div>
                                                <h1><?php echo e(count($users)); ?></h1>
                                                <h5><?php echo e(get_phrase('User Account')); ?></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                                <img src="<?php echo e(asset('frontend/assets/images/slider-dec.png')); ?>" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="features" class="services section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-heading wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                        <!-- <h4>Amazing <em>Services &amp; Features</em> for you</h4> -->

                        <h1 class="gray-h1"><?php echo e(get_phrase('Our Features')); ?></h1>
                        <div class="bottom-gray-h1">
                            <h3><?php echo e(get_phrase('Features')); ?></h3>
                            <img src="<?php echo e(asset('frontend/assets/images/heading-line-dec.png')); ?>" alt="" />
                        </div>
                        <p>Make your application more advanced with Academits</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="row w-auto" id="show">
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item first-service">
                            <div class="icon"></div>
                            <h4>Students Admission</h4>
                            <p>Your schools can add their students in two different ways.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item second-service">
                            <div class="icon"></div>
                            <h4>Daily Attendance</h4>
                            <p>Take your students attendance in a smart way</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item third-service">
                            <div class="icon"></div>
                            <h4>Class List</h4>
                            <p>Manage your schools class list whenever you want.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item fourth-service">
                            <div class="icon"></div>
                            <h4>Subjects</h4>
                            <p>Add different subjects for different classes.</p>
                        </div>
                    </div>
                </div>
                <div class="row w-auto" id="hide">
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item fifth-service">
                            <div class="icon"></div>
                            <h4>Event Calender</h4>
                            <p>
                                The school admin can manage their schools events separately.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item sixth-service">
                            <div class="icon"></div>
                            <h4>Routine</h4>
                            <p>Manage your schools class routine easily.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item seventh-service">
                            <div class="icon"></div>
                            <h4>Student Information</h4>
                            <p>Add your students information within a few minute.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item eighth-service">
                            <div class="icon"></div>
                            <h4>Syllabus</h4>
                            <p>Manage syllabuses based on the classes.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item ninth-service">
                            <div class="icon"></div>
                            <h4>Fees Management </h4>
                            <p>
                                Pay academic fees in a smart way with Academits
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item tenth-service">
                            <div class="icon"></div>
                            <h4>ID Card Generator</h4>
                            <p>Generate your students ID card whenever you want.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item eleventh-service">
                            <div class="icon"></div>
                            <h4>Online Payment Gateway</h4>
                            <p>Pay your subscription and academic fees.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item twelfth-service">
                            <div class="icon"></div>
                            <h4>Invoice Generator</h4>
                            <p>Generate invoices to make the payments more reliable.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item thirteenth-service">
                            <div class="icon"></div>
                            <h4>Offline Payment</h4>
                            <p>Complete payment with local money.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item fourteenth-service">
                            <div class="icon"></div>
                            <h4>Book List</h4>
                            <p>Manage your schools library within a few clicks.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item fifteenth-service">
                            <div class="icon"></div>
                            <h4>Noticeboard </h4>
                            <p>
                                Manage your schools notices smartly
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item sixteenth-service">
                            <div class="icon"></div>
                            <h4>Exam</h4>
                            <p>Create and manage your schools exams and categories</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item seventeenth-service">
                            <div class="icon"></div>
                            <h4>Marks Management</h4>
                            <p>Manage your students exam marks.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item eighteenth-service">
                            <div class="icon"></div>
                            <h4>GradeGrade</h4>
                            <p>Add and manage grades in the examination.</p>
                        </div>
                    </div>
                </div>
                <div class="wow">
                    <button type="button" class="myBtn btn btn-outline-primary" id="toggle">
                        See all
                        <i class="fa fa-arrow-right"></i>
                    </button>
                </div>
            </div>

        </div>
    </section>

    <!-- PRICING -->

    <section id="pricing" class="pricing-tables">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-heading wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h1 class="gray-h1">Price</h1>
                        <div class="bottom-gray-h1">
                            <h3>Price</h3>
                            <img src="<?php echo e(asset('frontend/assets/images/heading-line-dec.png')); ?>" alt="" />
                        </div>
                        <p>Choose the best subscription plan for your school</p>
                    </div>
                </div>

                
                <div class="pricing-container">
                    <div class="pricing-switcher">
                        <p class="fieldset">
                            <input  type="radio" name="duration-1" value="monthly" id="monthly-1" checked>
                            <label for="monthly-1" class="switch" >Monthly</label>
            
                            <input type="radio" name="duration-1" value="termly" id="termly-1">
                            <label for="termly-1" class="switch" >Termly</label>
            
                            <input type="radio" name="duration-1" value="yearly" id="yearly-1">
                            <label for="yearly-1" class="switch">Yearly</label>
            
                            <!-- <span class="switch"></span> -->
                        </p>
                    </div>
                    <ul class="pricing-list bounce-invert">
                        <li>
                            <ul class="pricing-wrapper visibility">
                                <?php $__currentLoopData = $standard_packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $standard_package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                
                                    <?php if($standard_package->interval == 'Monthly' && $standard_package->days == '1'): ?>
                                        <?php 
                                            $interval = 'monthly'; 
                                            $timing = 'month';
                                        ?>
                                    <?php elseif($standard_package->interval == 'Yearly'): ?>
                                        <?php
                                            $interval = 'yearly'; 
                                            $timing = 'year';
                                        ?>
                                    <?php elseif($standard_package->days == 4): ?>
                                        <?php 
                                            $interval = 'termly'; 
                                            $timing = 'term';
                                        ?>
                                      
                                    <?php else: ?>
                                        <?php $interval = 'day'; ?>
                                    <?php endif; ?>
                                
                                <li data-type="<?php echo e($interval); ?>" class="is-hidden">
                                    <div class="pricing-header">
                                        <h2><?php echo e($standard_package->name); ?></h2>
                                        <div class="price">
                                            <span class="currency">₦</span>
                                            <span class="value"><?php echo e(currency($standard_package->price)); ?></span>
                                            <span class="duration"><?php echo e($timing); ?></span>
                                        </div>
                                    </div>
                                    <div class="pricing-body">
                                        <ul class="pricing-features">
                                            <li><?php echo nl2br($standard_package->description); ?></li>
                                        </ul>
                                    </div>
                                    <div class="pricing-footer">
                                        
                                        <?php if(Auth::check() && auth()->user()->role_id == 1): ?>
                                            <a href="javascript:;" class="select"
                                                onclick="subscription_warning('<?php echo e(auth()->user()->role_id); ?>')"><?php echo e(get_phrase('Subscribe')); ?></a>
                                        <?php elseif(Auth::check() && auth()->user()->role_id == 2): ?>
                                            <?php $status = subscription_check(auth()->user()->school_id) ?>
                                            <?php if($status != 1): ?>
                                                <a href="<?php echo e(route('admin.subscription.payment', ['package_id' => $package->id])); ?>"
                                                    class="select"><?php echo e(get_phrase('Subscribe')); ?></a>
                                            <?php else: ?>
                                                <a href="javascript:;" class="select"
                                                    onclick="subscription_warning('<?php echo e(auth()->user()->role_id); ?>')"><?php echo e(get_phrase('Subscribe')); ?></a>
                                            <?php endif; ?>
                                        <?php else: ?>
                                            <a href="javascript:;" class="select"
                                                onclick="subscription_warning()"><?php echo e(get_phrase('Subscribe')); ?></a>
                                        <?php endif; ?>
                                        
                                    </div>
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </li>
                        <li>
                            <ul class="pricing-wrapper visibility">
                                <?php $__currentLoopData = $advance_packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $standard_package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                
                                    <?php if($standard_package->interval == 'Monthly' && $standard_package->days == '1'): ?>
                                        <?php 
                                            $interval = 'monthly';
                                            $timing = 'month';
                                        ?>
                                    <?php elseif($standard_package->interval == 'Yearly'): ?>
                                        <?php
                                            $interval = 'yearly'; 
                                            $timing = 'year';
                                        ?>
                                    <?php elseif($standard_package->days == 4): ?>
                                         <?php 
                                            $interval = 'termly'; 
                                            $timing = 'term';
                                        ?>
                                    <?php else: ?>
                                        <?php $interval = 'day'; ?>
                                    <?php endif; ?>
                                
                                <li data-type="<?php echo e($interval); ?>" class="is-hidden">
                                    <div class="pricing-header">
                                        <h2><?php echo e($standard_package->name); ?></h2>
                                        <div class="price">
                                            <span class="currency">₦</span>
                                            <span class="value"><?php echo e(currency($standard_package->price)); ?></span>
                                            <span class="duration"><?php echo e($timing); ?></span>
                                        </div>
                                    </div>
                                    <div class="pricing-body">
                                        <ul class="pricing-features">
                                            <li><?php echo nl2br($standard_package->description); ?></li>
                                        </ul>
                                    </div>
                                    <div class="pricing-footer">
                                        
                                        <?php if(Auth::check() && auth()->user()->role_id == 1): ?>
                                            <a href="javascript:;" class="select"
                                                onclick="subscription_warning('<?php echo e(auth()->user()->role_id); ?>')"><?php echo e(get_phrase('Subscribe')); ?></a>
                                        <?php elseif(Auth::check() && auth()->user()->role_id == 2): ?>
                                            <?php $status = subscription_check(auth()->user()->school_id) ?>
                                            <?php if($status != 1): ?>
                                                <a href="<?php echo e(route('admin.subscription.payment', ['package_id' => $package->id])); ?>"
                                                    class="select"><?php echo e(get_phrase('Subscribe')); ?></a>
                                            <?php else: ?>
                                                <a href="javascript:;" class="select"
                                                    onclick="subscription_warning('<?php echo e(auth()->user()->role_id); ?>')"><?php echo e(get_phrase('Subscribe')); ?></a>
                                            <?php endif; ?>
                                        <?php else: ?>
                                            <a href="javascript:;" class="select"
                                                onclick="subscription_warning()"><?php echo e(get_phrase('Subscribe')); ?></a>
                                        <?php endif; ?>
                                        
                                    </div>
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </li>
                        <li>
                            <ul class="pricing-wrapper visibility">
                                <?php $__currentLoopData = $premium_packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $standard_package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                
                                    <?php if($standard_package->interval == 'Monthly' && $standard_package->days == '1'): ?>
                                       <?php 
                                            $interval = 'monthly';
                                            $timing = 'month';
                                        ?>
                                    <?php elseif($standard_package->interval == 'Yearly'): ?>
                                       <?php
                                            $interval = 'yearly'; 
                                            $timing = 'year';
                                        ?>
                                    <?php elseif($standard_package->days == 4): ?>
                                        <?php 
                                            $interval = 'termly'; 
                                            $timing = 'term';
                                        ?>
                                    <?php else: ?>
                                        <?php $interval = 'day'; ?>
                                    <?php endif; ?>
                                
                                <li data-type="<?php echo e($interval); ?>" class="is-hidden">
                                    <div class="pricing-header">
                                        <h2><?php echo e($standard_package->name); ?></h2>
                                        <div class="price">
                                            <span class="currency">₦</span>
                                            <span class="value"><?php echo e(currency($standard_package->price)); ?></span>
                                            <span class="duration"><?php echo e($timing); ?></span>
                                        </div>
                                    </div>
                                    <div class="pricing-body">
                                        <ul class="pricing-features">
                                            <li><?php echo nl2br($standard_package->description); ?></li>
                                        </ul>
                                    </div>
                                    <div class="pricing-footer">
                                        
                                        <?php if(Auth::check() && auth()->user()->role_id == 1): ?>
                                            <a href="javascript:;" class="select"
                                                onclick="subscription_warning('<?php echo e(auth()->user()->role_id); ?>')"><?php echo e(get_phrase('Subscribe')); ?></a>
                                        <?php elseif(Auth::check() && auth()->user()->role_id == 2): ?>
                                            <?php $status = subscription_check(auth()->user()->school_id) ?>
                                            <?php if($status != 1): ?>
                                                <a href="<?php echo e(route('admin.subscription.payment', ['package_id' => $package->id])); ?>"
                                                    class="select"><?php echo e(get_phrase('Subscribe')); ?></a>
                                            <?php else: ?>
                                                <a href="javascript:;" class="select"
                                                    onclick="subscription_warning('<?php echo e(auth()->user()->role_id); ?>')"><?php echo e(get_phrase('Subscribe')); ?></a>
                                            <?php endif; ?>
                                        <?php else: ?>
                                            <a href="javascript:;" class="select"
                                                onclick="subscription_warning()"><?php echo e(get_phrase('Subscribe')); ?></a>
                                        <?php endif; ?>
                                        
                                    </div>
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </li>
                    </ul>
                </div>
                
            </div>
        </div>
    </section>

   
    <!------------------------------>
    <!------ FAQ section Start------>
    <!------------------------------>
    <section id="faq" class="why-us">
        <div id="clients" class="the-clients">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="section-heading wow">
                            <h1 class="gray-h1">Have Any Question</h1>
                            <div class="bottom-gray-h1">
                                <h3>Faq</h3>
                                <img src="<?php echo e(asset('frontend/assets/images/heading-line-dec.png')); ?>" alt="" />
                            </div>
                            <p>Frequently asked questions</p>
                        </div>
                    </div>
                    <div class="accordion-block">
                        <div class="accordion row" id="accordionPanelsStayOpenExample">

                            <div class="col-lg-12 d-flex flex-column justify-content-center align-items-stretch order-2 order-lg-1">
                                <div class="accordion-list">
                                    <ul>
                                        <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li>
                                                <a data-bs-toggle="collapse" class="collapse"
                                                    data-bs-target="#accordion-list-<?php echo e($faq->id); ?>">
                                                    <span>0<?php echo e($faq->id); ?></span>
                                                    <?php echo e($faq->title); ?>

                                                    <i class="fa fa-plus icon-show"></i>
                                                    <i class="fa fa-minus icon-close"></i>
                                                </a>
                                                <div id="accordion-list-<?php echo e($faq->id); ?>"
                                                    class="accordionItem collapse" data-bs-parent=".accordion-list">
                                                    <p><?php echo e($faq->description); ?></p>
                                                </div>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!------------------------------>
    <!------ FAQ section End------>
    <!------------------------------>


    <div id="clients" class="the-clients">
        <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="section-heading">
                    <h4>Check What <em>The Clients Say</em> About Our App Dev</h4>
                    <img src="<?php echo e(asset('frontend/assets/images/heading-line-dec.png')); ?>" alt="" />
                    <p>
                        Frequently Asked Questions & Rating
                    </p>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="naccs">
                    <div class="grid">
                        <div class="row">
                            <div class="col-lg-7 align-self-center">
                                <div class="menu">
                                    <div class="first-thumb active">
                                        <div class="thumb">
                                            <div class="row">
                                                <div class="col-lg-4 col-sm-4 col-12">
                                                    <h4>Michael Johnson</h4>
                                                    <span class="date">30 November 2022</span>
                                                </div>
                                                
                                                <div class="col-lg-4 col-sm-4 col-12">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <span class="rating">4.8</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="thumb">
                                            <div class="row">
                                                <div class="col-lg-4 col-sm-4 col-12">
                                                    <h4>Sarah Kolawole</h4>
                                                    <span class="date">20 December 2022</span>
                                                </div>
                                                
                                                <div class="col-lg-4 col-sm-4 col-12">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <span class="rating">4.5</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="thumb">
                                            <div class="row">
                                                <div class="col-lg-4 col-sm-4 col-12">
                                                    <h4>Adejoh Agada</h4>
                                                    <span class="date">27 May 2023</span>
                                                </div>
                                                
                                                <div class="col-lg-4 col-sm-4 col-12">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <span class="rating">4.7</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <ul class="nacc">
                                    <li class="active">
                                        <div class="thumb">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="client-content">
                                                        <img src="<?php echo e(asset('frontend/assets/images/quote.png')); ?>" alt="" />
                                                        <p>
                                                            "After implementing Academits, our school
                                                            experienced a
                                                            paradigm shift in parent engagement. Real-time
                                                            updates
                                                            on attendance, assignments, and grades empowered
                                                            parents
                                                            to actively participate in their child's education.
                                                            This
                                                            system truly bridges the gap between home and
                                                            school."
                                                        </p>
                                                    </div>
                                                    <div class="down-content">
                                                        
                                                        <div class="right-content">
                                                            <h4>Dr. Michael Johnson</h4>
                                                            <span>Head of School, Harmony International School
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <div class="thumb">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="client-content2">
                                                            <img src="<?php echo e(asset('frontend/assets/images/quote.png')); ?>" alt="" />
                                                            <p>
                                                                "Academits transformed our school's administrative
                                                                chaos
                                                                into streamlined efficiency. The intuitive interface
                                                                and
                                                                seamless communication tools have brought our
                                                                teachers,
                                                                students,
                                                                and parents closer together. It's more than
                                                                software;
                                                                it's a catalyst
                                                                for academic excellence."
                                                            </p>
                                                        </div>
                                                        <div class="down-content">
                                                            
                                                            <div class="right-content">
                                                                <h4>Sarah Kolawole</h4>
                                                                <span>Jefferson Academy Maitama</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <div class="thumb">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="client-content">
                                                            <img src="<?php echo e(asset('frontend/assets/images/quote.png')); ?>" alt="" />
                                                            <p>
                                                                "Academits is a game-changer. As a teacher, I've
                                                                seen
                                                                firsthand how it simplifies my workload and
                                                                amplifies my
                                                                impact in the classroom. The ease of sharing lesson
                                                                materials, receiving assignments, and providing
                                                                instant
                                                                feedback has transformed the learning experience."
                                                            </p>
                                                        </div>
                                                        <div class="down-content">
                                                            
                                                            <div class="right-content">
                                                                <h4>Adejoh Agada</h4>
                                                                <span>Mathematics Teacher, Edison School
                                                                    Kubwa</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- CONTACT US NOW  -->
    <div id="clients" class="the-clients">
        <div class="container">
            <div class="row">
                <section class="contact-us-area" id="contact">
                    <div class="container">
                        <div class="row">
                            <div class="contact col-lg-12">
                                <div class="contact-left">
                                    <h3>Contact us with questions</h3>
                                    <a class="contact-us-btn btn btn-primary"
                                        href="mailto:<?php echo e(get_settings('contact_email')); ?>">
                                        <img src="<?php echo e(asset('frontend/assets/images/icons8-open-envelope-48.png')); ?>"
                                            alt="image">
                                        <?php echo e(get_phrase('Contact Us')); ?>

                                    </a>
                                </div>
                                <div class="contact-right">
                                    <div class="envelope-message">
                                        <img src="<?php echo e(asset('frontend/assets/images/icons8-open-envelope.png')); ?>"
                                            alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>


    <footer id="newsletter">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-heading pt-5">
                        <h4>
                            Join our mailing list to receive the news &amp; latest trends
                        </h4>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-3">
                    <form id="search" action="#" method="GET">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <fieldset>
                                    <input type="address" name="address" class="email" placeholder="Email Address..."
                                        autocomplete="on" required />
                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <fieldset>
                                    <button type="submit" class="main-button">
                                        Subscribe Now <i class="fa fa-angle-right"></i>
                                    </button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-widget">
                        <h4>Contact Us</h4>
                        <p><a href="#"><?php echo e(get_settings('phone')); ?></a></p>
                        <p><a href="#"><?php echo e(get_settings('system_email')); ?></a></p>
                        <p><?php echo e(get_settings('address')); ?></p>
                    </div>
                </div>
                <div class="col-lg-4 mb-3 col-md-6">
                    <div class="footer-widget">
                        <h4>About Us</h4>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#features">Features</a></li>
                            <li><a href="#price">Price</a></li>
                            <li><a href="#faq">Faq</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 mb-3 col-md-6 social-links">
                    <div class="footer-widget">
                        <h4><?php echo e(get_phrase('Social Link')); ?></h4>
                        <ul class="footer-social">
                            <li><a href="<?php echo e(get_settings('facebook_link')); ?>" title="Facebook" target="_blank">
                                    <img src="<?php echo e(asset('frontend/assets/images/icon-facebook.png')); ?>" /> Academits</a>
                            </li>
                            <li><a href="<?php echo e(get_settings('twitter_link')); ?>" title="Twitter" target="_blank">
                                    <img src="<?php echo e(asset('frontend/assets/images/icon-twitter.png')); ?>" /></i>
                                    @academits</a></li>
                            <li><a href="<?php echo e(get_settings('linkedin_link')); ?>" title="Linkedin" target="_blank">
                                    <img src="<?php echo e(asset('frontend/assets/images/icon-linkedin.png')); ?>" /> Academits</a>
                            </li>
                            <li><a href="<?php echo e(get_settings('instagram_link')); ?>" title="Instagram" target="_blank">
                                    <img src="<?php echo e(asset('frontend/assets/images/icon-insta.png')); ?>" /> @acedemits</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-2">
                    <div class="footer-widget mt-3 text-center">

                        <div class="logo ">
                            <img src="<?php echo e(asset('frontend/assets/images/white-logo.png')); ?>" alt="academits_white" />
                        </div>
                        <p class="">
                            <?php echo e(get_settings('frontend_footer_text')); ?>

                        </p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="copyright-text">
                        <p>
                            Copyright © <?php echo e(get_settings('copyright_text')); ?>

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <style>
        #toast-container>.toast-warning {
            font-size: 15px;
        }
    </style>

    <script>
        // Faq function

        const accordionContainer = document.getElementsByClassName("accordionItem");;
        const firstItem = 'accordion-list-1'
        for (let i = 0; i < accordionContainer.length; i++) {
            if (accordionContainer[i].id == firstItem) {
                document.getElementById(firstItem).classList.add('show');
                continue;
            } else {
                document.getElementById(accordionContainer[i].id).previousElementSibling.classList.remove('collapse');
                document.getElementById(accordionContainer[i].id).previousElementSibling.classList.add('collapsed');
            }
        }


        // console.log(firstAccordionItem)   document.getElementById(accordionContainer[i].id).classList.remove('collapse'); document.getElementById(accordionContainer[i].id).classList.add('collapsed');
    </script>


    <script type="text/javascript">
        "use strict";

        function subscription_warning(roleId) {
            if (roleId == 1) {
                toastr.warning("You can't subscribe as superadmin");
            } else if (roleId == 2) {
                toastr.warning("Your school is already subscribed to a package.");
            } else {
                toastr.warning("You are not authorized! Please login as school admin.");
            }
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/swiftypo/public_html/resources/views/frontend/landing_page.blade.php ENDPATH**/ ?>