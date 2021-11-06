<?php get_header(); ?>

<section class="single-course">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="course-details">
                    <h2>MongoDB Developer Training </h2>
                    <div class="ratings">
                        <div class="star">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                        </div>
                        <p>4355 Ratings (4.9)</p>
                    </div>
                    <p class="para">In this course, students participate in hands-on exercises using a MongoDB Atlas database environment. Alternatively, and according to the preference of the class, students may use a self-managed deployment of MongoDB.</p>
                    <button class="course-btn2" data-toggle="modal" data-target="#exampleModalCenter">Free demo classes</button>
                    <a href="<?php echo get_template_directory_uri(); ?>/pdf/mongodb-developer.pdf" download><button class="course-btn1"><i class="fa fa-file-pdf-o"></i>Download PDF</a></button>
                </div>
            </div>
            <div class="col-sm-4">
                <img src="<?php echo get_template_directory_uri(); ?>/images/courses/mongodb-developer.jpg" alt="mongodb-developer">
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
                            <p>Get ramped quickly on MongoDB with a comprehensive entry-level training program for developers. This course covers the MongoDB query language and aggregation framework, data modeling, indexes, drivers, basic performance tuning, high availability and scaling.</p>
                            <p>In this course, students participate in hands-on exercises using a MongoDB Atlas database environment. Alternatively, and according to the preference of the class, students may use a self-managed deployment of MongoDB.</p>
                            <p>Mongo DB is a high-performance open source, Schema free document / Object-Oriented database optimized for web application environments. MongoDB stores data as JSON formats, sometimes the documents can be varied in structure. Relevant information is stored together in a document for better and fast query access via the MongoDB query language.</p>
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
                            <h6>Storage Basics </h6>
                            <ul>
                                <li>What is a Storage Engine? </li>
                                <li>WiredTiger Storage Engine </li>
                                <li>In-Memory Storage Engine </li>
                                <li>Encrypted Storage Engine </li>
                                <li>Toolbars </li>
                            </ul>
                            <h6>MongoDB Document Model </h6>
                            <ul>
                                <li>JSON and BSON </li>
                                <li>MongoDB Data Types </li>
                            </ul>
                            <h6>MongoDB Setup </h6>
                            <ul>
                                <li>Lab: Atlas Setup / Local MongoDB Setup </li>
                            </ul>
                            <h6>CRUD Basics </h6>
                            <ul>
                                <li>Insert Command </li>
                                <li>Find Command </li>
                                <li>Query Operators </li>
                                <li>Lab: Finding Documents </li>
                                <li>Remove Command </li>
                                <li>Updating Documents </li>
                                <li>Lab: Updating Documents </li>
                            </ul>
                        </div>
                        <h5 class="see-text">To see the full course content <a href="<?php echo get_template_directory_uri(); ?>/pdf/mongodb-developer.pdf" download>Download now</a></h5>
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
                <img src="<?php echo get_template_directory_uri(); ?>/images/courses/mongodb-developer.jpg" alt="mongodb-developer">
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
                                <li>There is no need for any specific knowledge. A basic idea of databases can be helpful</li>
                                <li>Understanding of any mainstream programming language such as Java, basic understanding of database concepts, and knowledge of a text editor such as 'VI editor' would be beneficial</li>
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
                        <p>This course is designed for application developers with no prior experience of MongoDB </p>
                        <ul>
                            <li>Professionals from Analysts background</li>
                            <li>Software Developers </li>
                            <li>Web Developers </li>
                            <li>Those who want to become master in MongoDB/NoSQL </li>
                            <li>Project Managers and Trainers </li>
                            <li>System administrators </li>
                            <li>Research professionals </li>
                            <li>Those looking for a career in Big Data </li>
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
                        <h3>Number of Hours: 30hrs</h3>
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
                    <p>MongoDB Certified Developer </p>
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