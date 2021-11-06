<?php get_header(); ?> 

<section class="banner-caro">
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade"  data-ride="carousel" data-interval="5000">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="overlay"></div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/bann-1.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <div class="overlay"></div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/bann-2.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <div class="overlay"></div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/bann-3.jpg" alt="Third slide">
        </div>
        <div class="carousel-item">
            <div class="overlay"></div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/bann-4.jpg" alt="Fourth slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
</section>
<section class="about-us">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="about-content">
                    <h2>About us</h2>
                    <p>Techyedz is an online, remote-friendly team workspace where students get a chance to accelerate their careers and expand their knowledge at any and all levels. With constant support and motivation from our expert instructors and working professionals, we help you brush your skills and identify areas of improvement and unlock access to great career opportunities further.</p>
                    <p>We try to create a remarkable space where skills meet knowledge and collaboration. Meet the experts and we help you unlock insights from the leading minds in the subject you choose. We try to create a source of trust by harnessing collective knowledge into easy-to-understand and manifest knowledge for everyone. We try to ground your learning experience by marking an edge with advanced learning and help you achieve your goals.</p>
                    <a href="/about" class="readbtn" >READ MORE</a>
                </div>
            </div>
            <div class="col-sm-4">
                <img src="<?php echo get_template_directory_uri(); ?>/images/about.jpg" alt="about">
            </div>
        </div>
    </div>
</section>
<section class="trending">
    <div class="container">
        <h2>Trending courses</h2>
        <div class="row">
            <div class="col-sm-12">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="/data-science-with-python">
                                <div class="card">
                                    <div class="card-header green">
                                        <h5 class="card-title">Data Science with Python</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="ratings">
                                            <div class="star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                            <p>5790 Ratings (4.9)</p>
                                        </div>
                                        <p class="card-text">Python is the most popular programming language for Data Science as on Today. Python is powerful , easy to learn and flexible tool for coding Data Science and Machine Learning algorithms.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/cyber-security-master-program">
                                <div class="card">
                                    <div class="card-header blue">
                                        <h5 class="card-title">Cyber Security Training Program</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="ratings">
                                            <div class="star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                            <p>3790 Ratings (4.8)</p>
                                        </div>
                                        <p class="card-text">There are many career opportunities for IT and cybersecurity professionals. If you’re wondering where to start to help fill this gap, start with the CompTIA Security+ SY0-501 certification.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/machine-learning">
                                <div class="card">
                                    <div class="card-header red">
                                        <h5 class="card-title">Machine Learning</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="ratings">
                                            <div class="star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                            <p>4750 Ratings (4.7)</p>
                                        </div>
                                        <p class="card-text">Machine learning is the science of getting computers to act without being explicitly programmed. In the past decade, machine learning has given us self-driving cars, practical speech recognition, effective web search, and a vastly improved understanding of the human genome.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/azure-data-engineer-dp-200">
                                <div class="card">
                                    <div class="card-header dark-blue">
                                        <h5 class="card-title">Azure Data Engineer</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="ratings">
                                            <div class="star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                            <p>3275 Ratings (4.7)</p>
                                        </div>
                                        <p class="card-text">This Learning Path is designed to help you and your team prepare for Microsoft's DP-200 Implementing an Azure Data Solution exam. Even if you don't plan to take the exam.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/aws-advanced-networking-speciality">
                                <div class="card">
                                    <div class="card-header purple">
                                        <h5 class="card-title">AWS Advanced Networking Specialist</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="ratings">
                                            <div class="star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                            <p>2950 Ratings (4.8)</p>
                                        </div>
                                        <p class="card-text">The AWS Certified Advanced Networking – Specialty (ANS-C00) examination is intended for individuals who perform complex networking tasks. This examination validates advanced technical skills and experience in designing and implementing AWS.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/artificial-intelligence">
                                <div class="card">
                                    <div class="card-header orange">
                                        <h5 class="card-title">Artificial Intelligence</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="ratings">
                                            <div class="star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                            <p>3965 Ratings (4.9)</p>
                                        </div>
                                        <p class="card-text">This Introduction to AI provides an overview of AI concepts and workflows, machine learning, deep learning, and performance metrics. You’ll learn the difference between supervised.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
        <div class="text-center"><a href="/courses"><button class="btn">View all courses</button></a></div>
    </div>
</section>
<section class="services">
    <div class="container text-center">
        <h2>Process of Getting Job</h2>
        <div class="row">
            <div class="col-sm-4">
                <div class="ser-details">
                    <i class="fa fa-user"></i>
                    <div class="ser-content">
                        <h4>Get Trained</h4>
                        <p>We aim at training students at their own pace and rhythm and brush up their confidence in the field they need to showcase their skills and choose what they are really good at. We provide relevant tools and tricks to enhance your skills to teach what you love and provide what you need to get professional exposure. We visualize students getting exposed to industry standards and requisites.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="ser-details">
                    <i class="fa fa-female"></i>
                    <div class="ser-content">
                        <h4>Get Virtual Live Exp</h4>
                        <p>Learners will get a series of projects and assignments which will help them get the necessary industrial exposure. The continuous assistance and intensive virtual working experience with experts and professionals help you gain a strong knowledge and conceptual application of the niche.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="ser-details">
                    <i class="fa fa-male"></i>
                    <div class="ser-content">
                        <h4>Get Job</h4>
                        <p>Roll at your own pace and enhance your skills with us. We will assist you with the exposure to Industry Standards and requirements. It will help students scale up their job opportunities and initiate their personal growth.</p>
                    </div>
                </div>
            </div>
        </div>
        <a href="/placement-process" class="learnbtn">Learn more</a>
    </div>
</section>
<section class="trending">
    <div class="container">
        <h2>Master courses</h2>
        <div class="row">
            <div class="col-sm-12">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-header green">
                                    <h5 class="card-title">Administrator Master Program</h5>
                                </div>
                                <div class="card-body">
                                    <div class="ratings">
                                        <div class="star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                        <p>12000 Ratings (4.3)</p>
                                    </div>
                                    <p class="card-text">This program intended for non programmers who do not wants to get into complexity of learning programming languages. Suitable for both IT and Non IT candidates. We cover Windows server administration, Linux, Virtualization & Citrix Job oriented scenarios supported with placement calls until you get placed.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-header blue">
                                    <h5 class="card-title">Artificial Intelligence Masters Program</h5>
                                </div>
                                <div class="card-body">
                                    <div class="ratings">
                                        <div class="star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                        <p>17000 Ratings (4.9)</p>
                                    </div>
                                    <p class="card-text">There is an increasing need for intelligent and accurate decision-making across industries. This has led to an exponential growth in the adoption of AI and ML technologies, and they are expected to remain relevant in years to come.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-header red">
                                    <h5 class="card-title">Azure Cloud Engineer Masters Program</h5>
                                </div>
                                <div class="card-body">
                                    <div class="ratings">
                                        <div class="star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                        <p>14000 Ratings (4.6)</p>
                                    </div>
                                    <p class="card-text">Microsoft Azure Cloud Engineer Masters Program will prepare you for three certification exams: AZ-104, which is required to attain Azure Administrator Badge (Associate-level), AZ-303, which is required to attain Azure Solutions Architect Badge (Expert-level) and AZ-400 which is required to attain Azure DevOps Badge.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-header dark-blue">
                                    <h5 class="card-title">Big Data Engineer Masters Program</h5>
                                </div>
                                <div class="card-body">
                                    <div class="ratings">
                                        <div class="star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                        <p>14200 Ratings (4.2)</p>
                                    </div>
                                    <p class="card-text">Big Data Masters Program to professionals who seek to dependant on their knowledge in the field of Big Data. It makes you proficient in tools and systems used by Big Data experts. It includes training on Hadoop and Spark, Java Essentials, and SQL.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-header purple">
                                    <h5 class="card-title">Cloud Masters Program</h5>
                                </div>
                                <div class="card-body">
                                    <div class="ratings">
                                        <div class="star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                        <p>19200 Ratings (4.6)</p>
                                    </div>
                                    <p class="card-text">The Cloud Masters program is designed to make you an expert in cloud applications and architecture. It will enable you to master the core skill sets required for designing and deploying dynamically scalable, highly available, fault-tolerant, and reliable applications on two of the top Cloud platform providers — Amazon Web Services (AWS), Google Cloud Platform ( GCP ) and Microsoft Azure.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-header orange">
                                    <h5 class="card-title">Cyber Security Masters Program</h5>
                                </div>
                                <div class="card-body">
                                    <div class="ratings">
                                        <div class="star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                        <p>12200 Ratings (4.8)</p>
                                    </div>
                                    <p class="card-text">What is a Master in Cyber Security? The Master in Cyber Security is a computer-based degree that includes studying communication networks and technologies while including a discussion of legal and ethical issues in computer security.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
        <div class="text-center"><a href="/master-courses"><button class="btn">View all courses</button></a></div>
    </div>
</section>
<section class="why">
    <div class="container numbers">
        <h2 class="text-center">Why we are best & Choose Us</h2>
      <div class="row">
        <div class="number-item">
            <h3><span class="value">308</span></h3>
            <h6>No. of Trainers</h6>
        </div>
        <div class="number-item">
            <h3><span class="value">10000</span></h3>
            <h6>Students Placed In MNC's</h6>
        </div>
        <div class="number-item">
            <h3><span class="value">120000</span></h3>
            <h6>Trained Students</h6>
        </div>
        <div id="1" class="number-item">
            <h3><span class="value">200</span></h3>
            <h6>Tie-Up Companies</h6>
        </div>
      </div>
    </div>
</section>
<section class="enroll-now">
    <div class="container">
        <div class="row">
            <div class="col-sm-7">
                <?php echo do_shortcode( '[contact-form-7 id="29" title="Register now"]' ); ?>
            </div>
            <div class="col-sm-5">
                <div class="enroll">
                    <h2>Register Now</h2>
                    <!-- <p>Register Now Proin ac lobortis arcu, a vestibulum augue. Vivamus ipsum, facilisis vel mollis vitae, mollis nec ante. Quisque aliquam dictum.</p> -->
                    <button class="enrollbtn" data-toggle="modal" data-target="#exampleModalCenter">Enroll now</button>
                </div>
                <form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_Gj1HIGcMKDeip8" async> </script> </form>
            </div>
        </div>
    </div>
</section>
<section class="services">
    <div class="container text-center">
        <h2>Our Services</h2>
        <div class="row">
            <div class="col-sm-4">
                <div class="ser-details">
                    <i class="fa fa-laptop"></i>
                    <div class="ser-content">
                        <h4>Lab Facility</h4>
                        <p>Transform your life through education by taking courses with Techyedz and improve principles and practices specialization. Astonishing lab facilities succulently pave the path for successful career growth.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="ser-details">
                    <i class="fa fa-clock-o"></i>
                    <div class="ser-content">
                        <h4>Flexible Timings</h4>
                        <p>We let our students choose the most appropriate timing in accordance with their availability to excel in the skills they are really interested in. The flexible timing catalyzes professional growth and industrial exposer at best.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="ser-details">
                    <i class="fa fa-user"></i>
                    <div class="ser-content">
                        <h4>One to One Training</h4>
                        <p>If any of our students want to opt for a one-to-one session, TechYedz is fully supportive and our experts help you learn the best way they can.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="ser-details">
                    <i class="fa fa-file"></i>
                    <div class="ser-content">
                        <h4>Real Time Projects</h4>
                        <p>Our Students work with real-time industrial projects which not only enhances their skill but let them gain an internship with a remarkable experience. We make sure that a fresher is no more a fresher.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="ser-details">
                    <i class="fa fa-inr"></i>
                    <div class="ser-content">
                        <h4>Affordable Price</h4>
                        <p>Multiple options to excel in your career growth at the most affordable prices. We help you reach out to the experienced working professionals and experts at each step to guide.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="ser-details">
                    <i class="fa fa-phone"></i>
                    <div class="ser-content">
                        <h4>24/7 Support</h4>
                        <p>Constant and best professional support from our experts is provided to our students 24*7. We help our students brush their knowledge and procure growth instead of any other confusion or doubts.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="provide">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="view">
                    <h2>We Provide Best Online Courses</h2>
                    <a href="/courses"><button class="btn">View course</button></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <section class="google">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
            <?php echo do_shortcode( '[njt-gpr  location="Location Name Not Found!!" place_id="ChIJD2GAHXIVrjsRxp5sutuhCMA" review_filter="none" review_limit="5" review_characters="20" column="2" btn_write="Write a review" cache="None" ]' ); ?>
            </div>
        </div>
    </div>
</section> -->
<section class="blog">
    <div class="container">
        <h2>Our latest blogs for you</h2>
        <div class="row">
            <div class="col-sm-9">
                    <div class="row">
                        <?php    
                            $args3 =array(
                                'type'              => 'posts',
                                'posts_per_page'    => 3,
                            );
                            include('blogListLoop.php');
                        ?>
                    </div>
            </div>
            <div class="col-sm-3">
                <h4>Blog Posts</h4>
                <p>Check out our blog posts for free insights and updates on your field.</p>
                <a href="/blog"><button class="showbtn">Show me</button></a>
            </div>
        </div>
    </div>
</section>
<section class="last-icons">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="swiper-container-icons">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/wipro.jpg" alt="wipro">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/hcl.jpg" alt="hcl">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/ibm.png" alt="ibm">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/oracle.png" alt="oracle">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/dell.png" alt="dell">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/ms.png" alt="ms">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/cognizant.png" alt="cognizant">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/walmart.png" alt="walmart">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/walles.png" alt="walles">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php get_footer(); ?>