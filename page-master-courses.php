<?php get_header(); ?>

<section class="banner-caro">
    <div id="carouselExampleIndicators" class="carousel slide"  data-ride="carousel" data-interval="3000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo get_template_directory_uri(); ?>/images/master-caro-1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/master-caro-2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/master-caro-3.jpg" alt="third slide">
            </div>
            <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/master-caro-4.jpg" alt="fourth slide">
            </div>
            <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/master-caro-5.jpg" alt="fifth slide">
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

<section class="master-details">
    <div class="container">
            <h2>Our Master Courses</h2>
        <div class="row">
            <div class="col-sm-8">
                <div class="master-data">
                    <div class="master-data-details">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/courses/azure-administration-az-104.jpg" alt="Administrator Master Program">
                        <div class="card-details">
                            <h5>Administrator Master Program</h5>
                            <ul>
                                <li>MCSA 2016</li>
                                <li>Red Hat System Administration I (RH124)</li>
                                <li>Red Hat System Administration II (RH 134)</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-btn">
                        <div class="ratings">
                            <div class="star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                            <p>4.3 <span class="numbers">(12000)</span></p>
                        </div>
                        <a href="<?php echo get_template_directory_uri(); ?>/pdf/master-courses/Administrator Master Program.pdf"><button class="viewbtn">View Details</button></a>
                    </div>
                </div>
                <div class="master-data">
                    <div class="master-data-details">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/courses/artificial-intelligence.jpg" alt="artificial-intelligence">
                        <div class="card-details">
                            <h5>Artificial Intelligence Masters Program</h5>
                            <ul>
                                <li>Core Python</li>
                                <li>Machine Learning</li>
                                <li>Artificial Intelligence</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-btn">
                        <div class="ratings">
                            <div class="star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                            <p>4.9 <span class="numbers">(17000)</span></p>
                        </div>
                        <a href="<?php echo get_template_directory_uri(); ?>/pdf/master-courses/Artificial Intelligence Masters Program.pdf"><button class="viewbtn">View Details</button></a>
                    </div>
                </div>
                <div class="master-data">
                    <div class="master-data-details">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/courses/aws-certified-big-data-speciality.jpg" alt="aws-certified-big-data-speciality">
                        <div class="card-details">
                            <h5>Azure Cloud Engineer Masters Program</h5>
                            <ul>
                                <li>Azure Administrator (AZ -104)</li>
                                <li>Deploy and manage Azure compute resources</li>
                                <li>Configure and manage virtual networking</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-btn">
                        <div class="ratings">
                            <div class="star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                            <p>4.6 <span class="numbers">(14000)</span></p>
                        </div>
                        <a href="<?php echo get_template_directory_uri(); ?>/pdf/master-courses/Azure Cloud Engineer Masters Program.pdf"><button class="viewbtn">View Details</button></a>
                    </div>
                </div>
                <div class="master-data">
                    <div class="master-data-details">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/courses/azure-data-engineer-dp-200.jpg" alt="azure-data-engineer-dp-200">
                        <div class="card-details">
                            <h5>Big Data Engineer Masters Program</h5>
                            <ul>
                                <li>Core Java</li>
                                <li>SQL</li>
                                <li>Bigdata Hadoop Development</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-btn">
                        <div class="ratings">
                            <div class="star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                            <p>4.2 <span class="numbers">(14200)</span></p>
                        </div>
                        <a href="<?php echo get_template_directory_uri(); ?>/pdf/master-courses/Big Data Engineer Masters Program.pdf"><button class="viewbtn">View Details</button></a>
                    </div>
                </div>
                <div class="master-data">
                    <div class="master-data-details">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/courses/certified-cloud-security-professional-ccsp.jpg" alt="certified-cloud-security-professional-ccsp">
                        <div class="card-details">
                            <h5>Cloud Masters Program</h5>
                            <ul>
                                <li>Linux</li>
                                <li>AWS Certified Solutions Architect – Associate</li>
                                <li>Azure Administrator (AZ -104)</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-btn">
                        <div class="ratings">
                            <div class="star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                            <p>4.6 <span class="numbers">(19200)</span></p>
                        </div>
                        <a href="<?php echo get_template_directory_uri(); ?>/pdf/master-courses/Cloud Masters Program.pdf"><button class="viewbtn">View Details</button></a>
                    </div>
                </div>
                <div class="master-data">
                    <div class="master-data-details">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/courses/cyber-security-master-program.jpg" alt="cyber-security-master-program">
                        <div class="card-details">
                            <h5>Cyber Security Masters Program</h5>
                            <ul>
                                <li>CompTIA Security+ 501</li>
                                <li>Certified Ethical Hacker (CEH)</li>
                                <li>CISM (Certified Information Security Manager)</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-btn">
                        <div class="ratings">
                            <div class="star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                            <p>4.4 <span class="numbers">(12200)</span></p>
                        </div>
                        <a href="<?php echo get_template_directory_uri(); ?>/pdf/master-courses/Cyber Security Masters Program.pdf"><button class="viewbtn">View Details</button></a>
                    </div>
                </div>
                <div class="master-data">
                    <div class="master-data-details">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/courses/devops.jpg" alt="devops">
                        <div class="card-details">
                            <h5>DevOps Masters Program</h5>
                            <ul>
                                <li>AWS</li>
                                <li>DevOps</li>
                                <li>LINUX</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-btn">
                        <div class="ratings">
                            <div class="star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                            <p>4.4 <span class="numbers">(12200)</span></p>
                        </div>
                        <a href="<?php echo get_template_directory_uri(); ?>/pdf/master-courses/DevOps Masters Program.pdf"><button class="viewbtn">View Details</button></a>
                    </div>
                </div>
                <div class="master-data">
                    <div class="master-data-details">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/courses/hp-san-certified-professional.jpg" alt="hp-san-certified-professional">
                        <div class="card-details">
                            <h5>Fresher’s Masters Program</h5>
                            <ul>
                                <li>Core Java</li>
                                <li>Advanced Java (J2EE) </li>
                                <li>JDBC</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-btn">
                        <div class="ratings">
                            <div class="star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                            <p>4.4 <span class="numbers">(12200)</span></p>
                        </div>
                        <a href="<?php echo get_template_directory_uri(); ?>/pdf/master-courses/Fresher’s Masters Program.pdf"><button class="viewbtn">View Details</button></a>
                    </div>
                </div>
                <div class="master-data">
                    <div class="master-data-details">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/courses/web-development.jpg" alt="web-development">
                        <div class="card-details">
                            <h5>Salesforce Masters Program</h5>
                            <ul>
                                <li>Admin</li>
                                <li>Development</li>
                                <li>Lightning</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-btn">
                        <div class="ratings">
                            <div class="star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                            <p>4.8 <span class="numbers">(12900)</span></p>
                        </div>
                        <a href="<?php echo get_template_directory_uri(); ?>/pdf/master-courses/Salesforce Masters Program.pdf"><button class="viewbtn">View Details</button></a>
                    </div>
                </div>
                <div class="master-data">
                    <div class="master-data-details">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/courses/vmware-vrealize-operations.png" alt="vmware-vrealize-operations">
                        <div class="card-details">
                            <h5>Virtualization Masters Program</h5>
                            <ul>
                                <li>MCSA 2016</li>
                                <li>VMware vSphere: Install, Configure, Manage [V6.7]</li>
                                <li>VMware vSphere: Troubleshooting [V6.7]</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-btn">
                        <div class="ratings">
                            <div class="star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                            <p>4.3 <span class="numbers">(17900)</span></p>
                        </div>
                        <a href="<?php echo get_template_directory_uri(); ?>/pdf/master-courses/Virtualization Masters Program.pdf"><button class="viewbtn">View Details</button></a>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="text-center my-3">
            <a href="/courses"><button class="browse">Browse All Courses</button></a>
        </div>
    </div>
</section>

<section class="provide">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="view">
                    <h2>Get ready to achieve your learning goals with TechyEdz Solutions</h2>
                    <button class="btn" data-toggle="modal" data-target="#exampleModalCenter">Enroll now</button>
                </div>
            </div>
        </div>
    </div>
</section>

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

<?php get_footer(); ?>