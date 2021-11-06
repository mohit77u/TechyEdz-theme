<?php get_header(); ?>

<section class="single-course">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="course-details">
                    <h2> Microsoft Skype for Business </h2>
                    <div class="ratings">
                        <div class="star">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                        </div>
                        <p>4785 Ratings (4.5)</p>
                    </div>
                    <p class="para">This course provides students with the knowledge and skills required to plan, deploy, configure, and administer a Microsoft Skype for Business solution. Students will learn how to deploy a multi-site and highly available Skype for Business infrastructure that supports instant messaging (IM), conferencing, enterprise voice, archiving, and monitoring. Students will also learn how to manage, maintain, and troubleshoot issues in the infrastructure.</p>
                    <button class="course-btn2" data-toggle="modal" data-target="#exampleModalCenter">Free demo classes</button>
                    <a href="<?php echo get_template_directory_uri(); ?>/pdf/microsoft-skype-for-business.pdf" download><button class="course-btn1"><i class="fa fa-file-pdf-o"></i>Download PDF</a></button>
                </div>
            </div>
            <div class="col-sm-4">
                <img src="<?php echo get_template_directory_uri(); ?>/images/courses/microsoft-skype-for-business.png" alt="microsoft-skype-for-business">
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
                    <a class="inner-nav" href="#number">Number of hours</a>
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
                            <p>This course provides students with the knowledge and skills required to plan, deploy, configure, and administer a Microsoft Skype for Business solution. Students will learn how to deploy a multi-site and highly available Skype for Business infrastructure that supports instant messaging (IM), conferencing, enterprise voice, archiving, and monitoring. Students will also learn how to manage, maintain, and troubleshoot issues in the infrastructure.</p>
                            <p>This course focuses primarily on the on-premises deployment of Skype for Business but does include information on how to integrate the on-premises deployment with Teams or Skype for Business Online as well as how to migrate from previous versions of Skype for Business Server. This course helps the students prepare for Exam 70-334.</p>
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
                            <h6>Module 1: Design and architecture of Skype for Business Server </h6>
                            <p>This module describes the high-level components and features of Skype for Business. It describes how to work with the Skype for Business administrative tools.</p>
                            <h6>Lessons</h6>
                            <ul>
                                <li>Overview of Skype for Business components and features </li>
                                <li>Introduction to the Skype for Business administrative tools </li>
                            </ul>
                            <h6>Lab : Designing and publishing a Skype for Business server topology </h6>
                            <ul>
                                <li>Designing and creating the topology </li>
                                <li>Updating the topology for the New York site </li>
                            </ul>
                            <p>After completing this module, students will be able to: </p>
                            <ul>
                                <li>Describe the high-level components and features of Skype for Business</li>
                                <li>Work with Skype for Business administrative tools</li>
                            </ul>
                        </div>
                        <h5 class="see-text">To see the full course content <a href="<?php echo get_template_directory_uri(); ?>/pdf/microsoft-skype-for-business.pdf" download>Download now</a></h5>
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
                <img src="<?php echo get_template_directory_uri(); ?>/images/courses/microsoft-skype-for-business.png" alt="microsoft-skype-for-business">
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
                            <ul>
                                <li>Experience with Skype for Business Server 2015 or Lync Server 2013 technologies and familiarity with supported migration scenarios</li>
                                <li>Proficiency in planning and deploying Skype for Business Server 2015 and Skype for Business Online solutions for end users, endpoint devices, telephony, audio/video and web conferences, security, high availability, and disaster recovery</li>
                                <li>Ability to monitor and troubleshoot Skype for Business Server 2015 at a basic level using Microsoft monitoring and troubleshooting tools (Snooper, centralized logging service (CLS), Key Health Indicators (KHI))</li>
                                <li>Proficiency with Active Directory Domain Services, data networks, Azure Active Directory Domain Services, directory synchronization, and telecommunications standards and network components that support the configuration and deployment of Skype for Business architectures</li>
                                <li>Familiarity with the requirements and process for integrating Skype for Business Server 2015 with Microsoft Exchange Server and Office 365</li>
                                <li>Knowledge of the following technologies: Windows, Windows Server and Hyper-V, QoS, TCP/IP, network load balancing, PowerShell, understanding of Session Initiation Protocol (SIP) basic telephony concepts including SIP trunking, gateway, and Session Border Controller (SBC) interconnects, and common private branch exchange (PBX) deployment architectures</li>
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
                            <li>This course is intended for IT consultants and telecommunications professionals who design, plan, deploy, and maintain solutions for unified communications (UC) and need to translate business requirements into technical architectures and designs for UC solutions. It is also intended for support staff in charge of maintaining UC solutions. The student should be familiar with Skype for Business Server 2015 or Lync Server 2013 technologies and the telecommunications standards and network components that support the configuration and deployment of Skype for Business architectures.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="number" class="pwnckf" data-spy>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="topic-content">
                        <h3>Number of Hours: 40hrs</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="certification" class="certification" data-spy>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="certificate">
                    <h3>Certification</h3>
                    <p>70-333 </p>
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