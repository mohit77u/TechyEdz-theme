<?php get_header(); ?>

<section class="single-course">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="course-details">
                    <h2>F5 Load Balancer </h2>
                    <div class="ratings">
                        <div class="star">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                        </div>
                        <p>4095 Ratings (4.2)</p>
                    </div>
                    <p class="para">This course is designed to help learners in building their own lab topology in order to acquire the skills and knowledge necessary to manage the F5 BIG-IP Application Delivery Controller (ADC) appliance, including the Local Traffic Manager (LTM) module. We use detailed explanations and presentations to prepare learners for real-world application and success in earning the F5 BIG-IP Administrator certification. This class walks you through the stepwise process of how to construct your own lab environment, and do what you envision in the videos. Your exercise will serve you in mastering F5 technologies.</p>
                    <button class="course-btn2" data-toggle="modal" data-target="#exampleModalCenter">Free demo classes</button>
                    <a href="<?php echo get_template_directory_uri(); ?>/pdf/f5-load-balancer.pdf" download><button class="course-btn1"><i class="fa fa-file-pdf-o"></i>Download PDF</a></button>
                </div>
            </div>
            <div class="col-sm-4">
                <img src="<?php echo get_template_directory_uri(); ?>/images/courses/f5-load-balancer.png" alt="f5-load-balancer">
            </div>
        </div>
    </div>
</section>

<section class="inner sticky-top">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <nav class="">
                    <a class="inner-nav" href="#about">About the course</a>
                    <a class="inner-nav"  href="#course-content">Course content</a>
                    <a class="inner-nav" href="#prerequisites">Course Prerequisites</a>
                    <a class="inner-nav" href="#who">Who can attend?</a>
                    <!-- <a class="inner-nav" href="#number">Number of hours</a> -->
                    <a class="inner-nav" href="#certification">Certification</a>
                    <a class="inner-nav" href="#keyfeatures">Keyfeatures</a>
                    <a class="inner-nav" href="#faqs">FAQs</a>
                    <button class="enrollbtn" data-toggle="modal" data-target="#exampleModalCenter">Enroll now</button>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="request" >
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <img src="<?php echo get_template_directory_uri(); ?>/images/request.jpg" alt="request">
        <div class="batch"  id="about">
          <h3>Can’t find a batch you were looking for?</h3>
          <button class="requestbtn" data-toggle="modal" data-target="#exampleModalCenter">Request a Batch</button>
        </div>
      </div>
    </div>
  </div>
</section>

<main>
    <section id="about" class="course-content" data-spy>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="content">
                        <div class="topic-content">
                            <h3>About the course</h3>
                            <p>This course is designed to help learners in building their own lab topology in order to acquire the skills and knowledge necessary to manage the F5 BIG-IP Application Delivery Controller (ADC) appliance, including the Local Traffic Manager (LTM) module. We use detailed explanations and presentations to prepare learners for real-world application and success in earning the F5 BIG-IP Administrator certification. This class walks you through the stepwise process of how to construct your own lab environment, and do what you envision in the videos. Your exercise will serve you in mastering F5 technologies.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="course-content" class="course-content" data-spy>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="content">
                        <h3>Course Contents</h3>
                        <div class="topic-content">
                            <h4>Objectives</h4>
                            <ul>
                                <li>Back up the BIG-IP system configuration for safekeeping </li>
                                <li>Configure virtual servers, pools, monitors, profiles, and persistence objects </li>
                                <li>Test and verify application delivery through the BIG-IP system using local traffic statistics </li>
                                <li>Configure priority group activation on a load balancing pool to allow servers to be activated only as needed to process traffic </li>
                                <li>Compare and contrast member-based and node-based dynamic load balancing methods </li>
                                <li>Configure connection limits to place a threshold on traffic volume to particular pool members and nodes </li>
                                <li>Differentiate between cookie, SSL, SIP, universal, and destination address affinity persistence, and describe use cases for each </li>
                                <li>Describe the three Match Across Services persistence options and use cases for each </li>
                                <li>Configure health monitors to appropriately monitor application delivery through a BIG-IP system </li>
                                <li>Configure different types of virtual services to support different types of traffic processing through a BIG-IP system </li>
                                <li>Configure different types of SNATs to support routing of traffic through a BIG-IP system </li>
                                <li>Configure VLAN tagging and trunking </li>
                                <li>Restrict administrative and application traffic through the BIG-IP system using packet filters, port lockdown, and virtual server setting</li>
                                <li>Configure SNMP alerts and traps in support of remote monitoring of the BIG-IP system </li>
                                <li>Use an F5-supplied iApp template to deploy and manage a website application service </li>
                                <li>Use iRules and local traffic policies appropriately to customize application delivery through the BIG-IP system </li>
                                <li>Configure the BIG-IP to detect and mitigate some common attacks at the network and application layers using LTM features such as SYN check, eviction policies, iRules and Local Traffic Policies </li>
                            </ul>
                        </div>
                        <div class="topic-content">
                            <h4>Configuring BIG-IP LTM: Local Traffic Manager (LTM) </h4>
                            <h6>Setting Up the BIG-IP System </h6>
                            <ul>
                                <li>Introducing the BIG-IP System </li>
                                <li>Initially Setting Up the BIG-IP System </li>
                                <li>Archiving the BIG-IP Configuration </li>
                                <li>Leveraging F5 Support Resources and Tools </li>
                            </ul>
                        </div>
                        <h5 class="see-text">To see the full course content <a href="<?php echo get_template_directory_uri(); ?>/pdf/f5-load-balancer.pdf" download>Download now</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="like">
        <div class="container">
            <div class="row">
            <div class="col-sm-8">
                <div class="like-content">
                    <h2>Like the Course topics? Enroll Now</h2>
                    <h5>Structure your learning and get a certificate to prove it.</h5>
                    <?php echo do_shortcode( '[contact-form-7 id="31" title="Like enroll now"]' ); ?>
                </div>
            </div>
            <div class="col-sm-4">
                <img src="<?php echo get_template_directory_uri(); ?>/images/courses/f5-load-balancer.png" alt="f5-load-balancer">
            </div>
            </div>
        </div>
    </section>
    <section id="prerequisites" class="pwnckf" data-spy>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="about">
                        <h3>Course Prerequisites</h3>
                        <div class="topic-content">
                            <p>Students are required to complete one of the following F5 prerequisites before attending this course: </p>
                            <ul>
                                <li>Administering BIG-IP instructor-led course </li>
                                <li>F5 Certified BIG-IP Administrator </li>
                            </ul>
                            <p>The following free web-based courses, although optional, will be very helpful for any student with limited BIG-IP administration and configuration experience</p>
                            <ul>
                                <li>Getting Started with BIG-IP web-based training </li>
                                <li>Getting Started with BIG-IP Local Traffic Manager (LTM) web-based training </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="who" class="pwnckf" data-spy>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="topic-content">
                        <h3>Who should attend?</h3>
                        <ul>
                            <li>Anyone who wants to learn F5 Load Balancer Administration from scratch </li>
                            <li>IT Administrators looking to improve their skills and get a promotion</li>
                            <li>Network Administrators </li>
                            <li>Network Operators </li>
                            <li>Architects </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section id="number" class="pwnckf" data-spy>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="topic-content">
                        <h3>Number of Hours: 40hrs</h3>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <section id="certification" class="certification" data-spy>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="certificate">
                    <h3>Certification</h3>
                    <p>F5 LTM Exam – 301a BIG-IP LTM Specialist & 301b BIG </p>
                    <p>IP LTM Specialist F5 DNS Exam – 302 BIG-IP DNS Specialist </p>
                    <p>F5 ASM Exam – 303 BIG-IP ASM Specialist </p>
                </div>
            </div>
        </div>
    </section>
    <section id="keyfeatures" class="pwnckf" data-spy>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="topic-content">
                        <h3>Keyfeatures</h3>
                        <ul>
                            <li>One to One Training </li>
                            <li>Online Training </li>
                            <li>Fastrack & Normal Track </li>
                            <li>Resume Modification </li>
                            <li>Mock Interviews </li>
                            <li>Video Tutorials  </li>
                            <li>Materials</li>
                            <li>Real Time Projects</li>
                            <li>Virtual Live Experience</li>
                            <li>Preparing for Certification</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="faqs" data-spy>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="accordion" class="accordion">
                        <h3>FAQs</h3>
                        <div class="card mb-0">
                            <div class="card-header collapsed" data-toggle="collapse" href="#collapseOne">
                                <a class="card-title">Can I just enroll in a single course? I'm not interested in the entire Specialization?</a>
                            </div>
                            <div id="collapseOne" class="card-body collapse show" data-parent="#accordion" >
                                <p>TechyEdz in BTM Layout 2nd Stage offers long-term courses, short-term courses and certification courses. Inclusive of comprehensive learning, the long-term program feature subjects such as Web- Development, Digital Marketing, Computer Application and Programming, Information Technology and Data Science. Some of the short-term courses cover topics like Cloud, RPA, Big Data, Microsoft, VMware & Oracle. Walk into this center all through the week between 07:00am  –  09:00pm. Pay in Cash, Debit Cards, Credit Card and Online Payment.</p>
                            </div>
                            <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                <a class="card-title">What is the refund policy?</a>
                            </div>
                            <div id="collapseTwo" class="card-body collapse" data-parent="#accordion" >
                                <p>TechyEdz Software Specialization in developing customized suite of HR consulting solutions based on the operational models of our clients with a special focus on small & Large Enterprises. We bring practical, results driven HR Practice to our clients business that would help them retain people, Improve business productivity and performance of employee.</p>
                            </div>
                            <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                <a class="card-title">What background knowledge is necessary?</a>
                            </div>
                            <div id="collapseThree" class="card-body collapse" data-parent="#accordion" >
                                <p>TechyEdz Software Specialization in developing customized suite of HR consulting solutions based on the operational models of our clients with a special focus on small & Large Enterprises. We bring practical, results driven HR Practice to our clients business that would help them retain people, Improve business productivity and performance of employee.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<section class="related-trending">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3>Related Category Courses</h3>
                <div class="relatedbtn">
                   <button class="rbtn"><a href="/advance-excel-2019">Advance Excel 2019</a></button>
                   <button class="rbtn"><a href="/android-app-developer">Android App Developer </a></button>
                   <button class="rbtn"><a href="/angular-js">Angular JS</a></button>
                   <button class="rbtn"><a href="/ansible">Ansible</a></button>
                   <button class="rbtn"><a href="/apache-cassandra">Apache Cassandra</a></button>
                   <button class="rbtn"><a href="/apache-spark-and-scala">Apache Spark and Scala</a></button>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>