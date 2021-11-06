<?php get_header(); ?>

<section class="single-course">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="course-details">
                    <h2>Cisco Certified Network Associate (CCNA)</h2>
                    <div class="ratings">
                        <div class="star">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                        </div>
                        <p>3190 Ratings (4.8)</p>
                    </div>
                    <p class="para">The Implementing and Administering Cisco Solutions (CCNA) v1.0 course gives you a broad range of fundamental knowledge for all IT careers. Through a combination of lecture, hands-on labs, and self-study, you will learn how to install, operate, configure, and verify basic IPv4 and IPv6 networks. The course covers configuring network components such as switches, routers, and wireless LAN controllers; managing network devices; and identifying basic security threats. The course also gives you a foundation in network programmability, automation, and software-defined networking.</p>
                    <button class="course-btn2" data-toggle="modal" data-target="#exampleModalCenter">Free demo classes</button>
                    <a href="<?php echo get_template_directory_uri(); ?>/pdf/cisco-ccna.pdf" download><button class="course-btn1"><i class="fa fa-file-pdf-o"></i>Download PDF</a></button>
                </div>
            </div>
            <div class="col-sm-4">
                <img src="<?php echo get_template_directory_uri(); ?>/images/courses/cisco-ccnp.jpg" alt="cisco-ccna">
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
                            <p>The Implementing and Administering Cisco Solutions (CCNA) v1.0 course gives you a broad range of fundamental knowledge for all IT careers. Through a combination of lecture, hands-on labs, and self-study, you will learn how to install, operate, configure, and verify basic IPv4 and IPv6 networks. The course covers configuring network components such as switches, routers, and wireless LAN controllers; managing network devices; and identifying basic security threats. The course also gives you a foundation in network programmability, automation, and software-defined networking.</p>
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
                            <h5>Network Fundamentals</h5>
                            <h6>Explain the role and function of network components</h6>
                            <ul>
                                <li>Routers</li>
                                <li>L2 and L3 switches</li>
                                <li>Next-generation firewalls and IPS</li>
                                <li>Access points</li>
                                <li>Controllers (Cisco DNA Center and WLC)</li>
                                <li>Endpoints</li>
                                <li>Servers</li>
                            </ul>
                        </div>
                        <div class="topic-content">
                            <h6>Describe characteristics of network topology architectures</h6>
                            <ul>
                                <li>2 tier</li>
                                <li>3 tier</li>
                                <li>Spine-leaf</li>
                                <li>WAN</li>
                                <li>Small office/home office (SOHO)</li>
                                <li>On-premises and cloud</li>
                            </ul>
                        </div>
                        <div class="topic-content">
                            <h6>Compare physical interface and cabling types</h6>
                            <ul>
                                <li>Single-mode fiber, multimode fiber, copper</li>
                                <li>Connections (Ethernet shared media and point-to-point)</li>
                                <li>Concepts of PoE</li>
                            </ul>
                        </div>
                        <h5 class="see-text">To see the full course content <a href="<?php echo get_template_directory_uri(); ?>/pdf/cisco-ccna.pdf" download>Download now</a></h5>
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
                <img src="<?php echo get_template_directory_uri(); ?>/images/courses/cisco-ccnp.jpg" alt="cisco-ccnp">
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
                            <p>Before taking this course, you should have: </p>
                            <ul>
                                <li>Basic computer literacy</li>
                                <li>Basic PC operating system navigation skills</li>
                                <li>Basic Internet usage skills</li>
                                <li>Basic IP address knowledge</li>
                                <li>Prior to CCNA course, the applicants have to know Networking Technologies and Computer Hardware A+ Certification</li>
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
                            <li>This course is designed for anyone seeking CCNA certification. The course also provides foundational knowledge for all support technicians involved in the basic installation, operation, and verification of Cisco networks</li>
                            <li>Entry-level network engineer</li>
                            <li>Network administrator</li>
                            <li>Network support technician</li>
                            <li>Help desk technician</li>
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
                    <p>Implementing and Administering Cisco Solutions (CCNA) v1.0</p>
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