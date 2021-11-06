<?php get_header(); ?>

<section class="single-course">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="course-details">
                    <h2>Ansible</h2>
                    <div class="ratings">
                        <div class="star">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                        </div>
                        <p>1965 Ratings (4.5)</p>
                    </div>
                    <p class="para">Automation with Ansible (DO407) is designed for Linux system administrators and developers who need to automate provisioning, configuration, application deployment, and orchestration. You will learn how to install and configure Ansible on a management workstation and prepare managed hosts for automation.</p>
                    <button class="course-btn2" data-toggle="modal" data-target="#exampleModalCenter">Free demo classes</button>
                    <a href="<?php echo get_template_directory_uri(); ?>/pdf/ansible.pdf" download><button class="course-btn1"><i class="fa fa-file-pdf-o"></i>Download PDF</a></button>
                </div>
            </div>
            <div class="col-sm-4">
                <img src="<?php echo get_template_directory_uri(); ?>/images/courses/ansible.png" alt="active-directory-services-with-windows-server">
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
                    <!-- <a class="inner-nav" href="#number">Number of hours</a>
                    <a class="inner-nav" href="#certification">Certification</a> -->
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
                    <div class="topic-content">
                        <h3>About the course</h3>
                        <p>This course is based on Red Hat® Ansible Engine 2.7 and Red Hat Enterprise Linux 7.3.</p>
                        <p>Incorporating IT automation is key to managing large numbers of systems and applications efficiently and consistently at scale. In this course, you will write Ansible playbooks to automate tasks, and you will run them to ensure servers are correctly deployed and configured. You will also explore examples of how to approach the automation of common Linux system administration tasks.</p>
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
                            <h6>Introduction to Ansible</h6>
                            <ul>
                                <li>Describe Ansible concepts and install Red Hat Ansible Engine</li>
                            </ul>
                            <h6>Deploy Ansible</h6>
                            <ul>
                                <li>Configure Ansible to manage hosts and run ad hoc Ansible commands</li>
                            </ul>
                            <h6>Implement playbooks</h6>
                            <ul>
                                <li>Write a simple Ansible playbook and run it to automate tasks on multiple managed hosts</li>
                            </ul>
                            <h6>Manage variables and facts</h6>
                            <ul>
                                <li>Write playbooks that use variables to simplify management of the playbook and facts to reference information about managed hosts</li>
                            </ul>
                            <h6>Implement task control</h6>
                            <ul>
                                <li>Manage task control, handlers, and task errors in Ansible playbooks</li>
                            </ul>
                            <h6>Deploy files to managed hosts</h6>
                            <ul>
                                <li>Deploy, manage, and adjust files on hosts managed by Ansible</li>
                            </ul>
                            <h6>Manage large projects</h6>
                            <ul>
                                <li>Write playbooks that are optimized for larger, more complex projects</li>
                            </ul>
                            <h6>Simplify playbooks with roles</h6>
                            <ul>
                                <li>Use Ansible roles to develop playbooks more quickly and to reuse Ansible code</li>
                            </ul>
                        </div>
                        <h5 class="see-text">To see the full course content <a href="<?php echo get_template_directory_uri(); ?>/pdf/ansible.pdf" download>Download now</a></h5>
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
            <div id="prerequisites" class="col-sm-4">
                <img src="<?php echo get_template_directory_uri(); ?>/images/courses/ansible.png" alt="active-directory-services-with-windows-server">
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
                                <li>Before starting this Ansible course, you need access to a Linux system to set Ansible up and prior exposure to Linux system administration.</li>
                                <li>Be a Red Hat Certified System Administrator (RHCSA), or demonstrate equivalent Red Hat Enterprise Linux knowledge and experience.</li>
                                <li>Being a Red Hat Certified Engineer (RHCE) may be beneficial.</li>
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
                            <li>This course is designed for Linux system administrators, DevOps engineers, infrastructure automation engineers, and systems design engineers.</li>
                            <li>The curriculum is particularly geared toward those responsible for automation of configuration management; consistent and repeatable application deployment provisioning and deployment of development, testing, and production servers; and integration with DevOps CI/CD workflows</li>
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
                        <h3>Number of Hours: 45hrs </h3>
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
                    <h3>Certification: None</h3>
                </div>
            </div>
        </div>
    </section> -->
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
                   <button class="rbtn"><a href="/apache-cassandra">Apache Cassandra</a></button>
                   <button class="rbtn"><a href="/apache-kafka">Apache Kafka</a></button>
                   <button class="rbtn"><a href="/apache-spark-and-scala">Apache Spark and Scala</a></button>
                   <button class="rbtn"><a href="/artificial-intelligence ">Artificial Intelligence</a></button>
                   <button class="rbtn"><a href="/aws-advanced-networking-speciality">AWS Advanced Nnetworking Speciality</a></button>
                   <button class="rbtn"><a href="/aws-advanced-networking-speciality-2">AWS Advanced Nnetworking Speciality 2</a></button>
                   <button class="rbtn"><a href="/aws-certified-big-data-speciality">AWS Certified Big Data Speciality</a></button>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>