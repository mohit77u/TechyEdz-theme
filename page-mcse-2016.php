<?php get_header(); ?>

<section class="single-course">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="course-details">
                    <h2>Microsoft Certified Solutions Expert (MCSE 2016) </h2>
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
                    <p class="para">Candidates for this exam are IT professionals who implement the Windows Server 2016 core infrastructure services. Candidates have already earned an MCSA: Windows Server 2008 or MCSA: Windows Server 2012 R2 certification. This exam covers key aspects of installation, storage, compute, networking, and identity functionality available in Windows Server 2016.</p>
                    <button class="course-btn2" data-toggle="modal" data-target="#exampleModalCenter">Free demo classes</button>
                    <a href="<?php echo get_template_directory_uri(); ?>/pdf/mcse-2016.pdf" download><button class="course-btn1"><i class="fa fa-file-pdf-o"></i>Download PDF</a></button>
                </div>
            </div>
            <div class="col-sm-4">
                <img src="<?php echo get_template_directory_uri(); ?>/images/courses/mcse-2016.png" alt="mcse-2016">
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
                            <h6>MCSA – 2016 (70-740, 70-741 & 70742) </h6>
                            <ul>
                                <li>70-740: Installation, Storage, and Compute with Windows Server 2016 </li>
                                <li>70-741: Networking with Windows Server 2016 </li>
                                <li>70-742: Identity with Windows Server 2016 </li>
                                <li>70-743: Upgrading Your Skills to MCSA: Windows Server 2016 </li>
                                <li>70-744: Securing Windows Server 2016 </li>
                            </ul>
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
                            <h4>Install Windows Servers in Host and Compute Environments </h4>
                            <h6>Install, upgrade, and migrate servers and workloads </h6>
                            <ul>
                                <li>Determine Windows Server 2016 installation requirements </li>
                                <li>determine appropriate Windows Server 2016 editions per workloads </li>
                                <li>install Windows Server 2016; install Windows Server 2016 features and roles </li>
                                <li>install and configure Windows Server Core </li>
                                <li>manage Windows Server Core installations using Windows PowerShell, command line, and remote management capabilities </li>
                                <li>implement Windows PowerShell Desired State Configuration (DSC) to install and maintain integrity of installed environments </li>
                                <li>perform upgrades and migrations of servers and core workloads from Windows Server 2008 and Windows Server 2012 to Windows Server 2016 </li>
                                <li>determine the appropriate activation model for server installation, such as Automatic Virtual Machine Activation (AVMA), Key Management Service (KMS), and Active Directory-based Activation</li>
                            </ul>
                        </div>
                        <div class="topic-content">
                            <h6>Create, manage, and maintain images for deployment </h6>
                            <ul>
                                <li>Plan for Windows Server virtualization </li>
                                <li>assess virtualization workloads using the Microsoft Assessment and Planning (MAP) Toolkit </li>
                                <li>determine considerations for deploying workloads into virtualized environments </li>
                                <li>update images with patches, hotfixes, last cumulative updates and drivers </li>
                                <li>install roles and features in offline images </li>
                                <li>manage and maintain Windows Server Core, Nano Server images, and VHDs using Windows PowerShell</li>
                            </ul>
                        </div>
                        <h5 class="see-text">To see the full course content <a href="<?php echo get_template_directory_uri(); ?>/pdf/mcse-2016.pdf" download>Download now</a></h5>
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
                <img src="<?php echo get_template_directory_uri(); ?>/images/courses/mcse-2016.png" alt="mcse-2016">
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
                                <li>An understanding of TCP/IP and networking concepts</li>
                                <li>A good working knowledge of both Windows Server 2012 R2 and Active Directory® Domain Services (AD DS). For example, domain user accounts, domain vs. local user accounts, user profiles, and group membership</li>
                                <li>An understanding of scripts and batch files</li>
                                <li>An understanding of security concepts such as authentication and authorization</li>
                                <li>An understanding of deployment, packaging, and imaging tools</li>
                                <li>Experience working in a team or a virtual team</li>
                                <li>Achieved the Windows Server 2012 MCSA certification as well as information in the course 20413C: Designing and Implementing an Enterprise Server Infrastructure</li>
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
                            <li>Who have knowledge about MCSA (Microsoft Certified Solutions Associate) </li>
                            <li>Candidates for this exam are IT professionals who implement the Windows Server 2016 core infrastructure services</li>
                            <li>Candidates have already earned an MCSA: Windows Server 2008 or MCSA: Windows Server 2012 R2 certification. This exam covers key aspects of installation, storage, compute, networking, and identity functionality available in Windows Server 2016</li>
                            <li>Candidates for this exam secure Windows Server 2016 environments. Candidates are familiar with the methods and technologies used to harden server environments and secure virtual machine infrastructures using Shielded and encryption-supported virtual machines and Guarded Fabric</li>
                            <li>Candidates manage the protection of Active Directory and Identity infrastructures and manage privileged identities using Just in Time (JIT) and Just Enough Administration (JEA) approaches, as well as implement Privileged Access Workstations (PAWs) and secure servers using the Local Administrator Password Solution (LAPS)</li>
                            <li>Candidates should also be able to use threat detection solutions such as auditing access, implementing Advanced Threat Analytics (ATA), deploying Operations Management Suite (OMS) solutions, and identifying solutions for specific workloads</li>
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
                    <p>70-743, 70-744 </p>
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