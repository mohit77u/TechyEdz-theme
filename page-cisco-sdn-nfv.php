<?php get_header(); ?>

<section class="single-course">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="course-details">
                    <h2>Cisco Software Defined Networking and Network Function Virtualization (SDN & NFV)</h2>
                    <div class="ratings">
                        <div class="star">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                        </div>
                        <p>3890 Ratings (4.4)</p>
                    </div>
                    <p class="para">In this course, students learn Software Defined Network architecture and the important protocols related to SDN implementations. This course thoroughly explains what SDN is, how it works, and then does a deep dive into the SDN protocols themselves. SDN can both manage and control physical network elements as well as Network Function Virtualization, allowing network professionals to deploy and maintain a clean integration between cloud environments and the physical network itself.</p>
                    <button class="course-btn2" data-toggle="modal" data-target="#exampleModalCenter">Free demo classes</button>
                    <a href="<?php echo get_template_directory_uri(); ?>/pdf/cisco-sdn-nfv.pdf" download><button class="course-btn1"><i class="fa fa-file-pdf-o"></i>Download PDF</a></button>
                </div>
            </div>
            <div class="col-sm-4">
                <img src="<?php echo get_template_directory_uri(); ?>/images/courses/cisco-sdn-nfv.jpg" alt="cisco-sdn-nfv">
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
                            <p>In this course, students learn Software Defined Network architecture and the important protocols related to SDN implementations. This course thoroughly explains what SDN is, how it works, and then does a deep dive into the SDN protocols themselves. SDN can both manage and control physical network elements as well as Network Function Virtualization, allowing network professionals to deploy and maintain a clean integration between cloud environments and the physical network itself.</p>
                            <p>Often we are asked by network personnel to teach them what the network looks like when it enters the cloud. This is why the study of Network Function Virtualization is a natural progression in this type of study, so we have included both SDN and NFV in one course. This course will clarify what happens at the cloud boundary and then look into the virtual network within the cloud itself. If you are already a networking professional and you take a look at what is going on inside the cloud, you will learn that there is no reason not to take all those good ideas and implement them outside the cloud. The networking control layer as you may currently understand it, will change radically with SDN. We will show you that the change is both amazing and powerful.</p>
                            <p>In this course, you will build, configure, and deploy the most popular network functions, routing, bridging, and OpenFlow switches along with requisite protocols. You will integrate these components with an emulated physical environment and perform verification testing. The cloud environment will be represented with a *very* deep dive into OpenStack Neutron and Neutron-compute.</p>
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
                            <h6>SDN Introduction </h6>
                            <ul>
                                <li>Southbound Interface and Northbound Interface
                                    <ul>
                                        <li>Controller Southbound Interface (SBI) & Northbound Interface (NBI)</li>
                                    </ul>
                                </li>
                                <li>Data Plane
                                    <ul>
                                        <li>Classic Forwarding Device</li>
                                        <li>Data Plane</li>
                                    </ul>
                                </li>
                                <li>Control Plane
                                    <ul>
                                        <li>Distributed Control Plane</li>
                                    </ul>
                                </li>
                                <li>Problems with the current distributed Control Plane design
                                    <ul>
                                        <li>Interfacing with the Distributed Control Plane</li>
                                        <li>Problems with Distributed Control Plane</li>
                                    </ul>
                                </li>
                                <li>Problems solved by the Centralized Control Plane
                                    <ul>
                                        <li>Clean Interface for new Applications</li>
                                        <li>Declarative vs Imperative Control</li>
                                        <li>What about the Southbound Interface?</li>
                                    </ul>
                                </li>
                                <li>Data Plane
                                    <ul>
                                        <li>Service Chaining</li>
                                    </ul>
                                </li>
                                <li>Management Plane Functions
                                    <ul>
                                        <li>RFC 7426 SDN Layers and Architecture Terminology</li>
                                    </ul>
                                </li>
                                <li>Northbound API Abstractions
                                    <ul>
                                        <li>Northbound API Abstractions</li>
                                        <li>Recognizing Cloud Types</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <h5 class="see-text">To see the full course content <a href="<?php echo get_template_directory_uri(); ?>/pdf/cisco-sdn-nfv.pdf" download>Download now</a></h5>
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
                <img src="<?php echo get_template_directory_uri(); ?>/images/courses/cisco-sdn-nfv.jpg" alt="cisco-sdn-nfv">
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
                                <li>Delegates should be from an engineering background with a solid appreciation of carrier class or enterprise network</li>
                                <li>Understanding of a programming language such as Python or Java is helpful but not essential</li>
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
                            <li>Strategic planners, network architects, network managers, systems engineers, service planners and carrier operation staff who are responsible for planning, implementing and deploying networks which may require SDN and/or NFV techniques in the future</li>
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
                        <h3>Number of Hours: 50hrs</h3>
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
                    <p>AWS Certified Solutions Architect – Associate (SAA-C02)</p>
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