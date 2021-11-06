<?php get_header(); ?>

<section class="single-course">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="course-details">
                    <h2>IT Foundations</h2>
                    <div class="ratings">
                        <div class="star">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                        </div>
                        <p>1965 Ratings (4.8)</p>
                    </div>
                    <p class="para">Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                    <button class="course-btn2" data-toggle="modal" data-target="#exampleModalCenter">Free demo classes</button>
                    <a href="<?php echo get_template_directory_uri(); ?>/pdf/changes.pdf" download><button class="course-btn1"><i class="fa fa-file-pdf-o"></i>Download PDF</a></button>
                </div>
            </div>
            <div class="col-sm-4">
                <img src="<?php echo get_template_directory_uri(); ?>/images/ui-design.png" alt="logo">
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
                    <div class="about">
                        <h3>About the course</h3>
                        <p id="contents">The Data Science with Python course will furnish you with in-depth knowledge of the various libraries and packages required to perform data analysis, data visualization, web scraping, machine learning and natural language processing using Python. The Data Science with Python course will furnish you with in-depth knowledge of the various libraries and packages required to perform data analysis, data visualization, web scraping, machine learning and natural language processing using Python.</p>
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
                            <h6>Introduction to Python</h6>
                            <ul>
                            <li>What is Python and brief history</li>
                            <li>Discussion on Python 2 and 3</li>
                            <li>Unique features of Python</li>
                            <li>Discussion on various IDE’s</li>
                            <li>Demonstration of practical use cases</li>
                            </ul>
                        </div>
                        <div class="topic-content">
                            <h6>Why Python?</h6>
                            <ul>
                            <li>What is Python and brief history</li>
                            <li>Discussion on Python 2 and 3</li>
                            <li>Unique features of Python</li>
                            <li>Discussion on various IDE’s</li>
                            <li>Demonstration of practical use cases</li>
                            </ul>
                        </div>
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
                <img src="<?php echo get_template_directory_uri(); ?>/images/ui-design.png" alt="like">
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
                        <p id="who">The Data Science with Python course will furnish you with in-depth knowledge of the various libraries and packages required to perform data analysis, data visualization, web scraping, machine learning and natural language processing using Python. The Data Science with Python course will furnish you with in-depth knowledge of the various libraries and packages required to perform data analysis, data visualization, web scraping, machine learning and natural language processing using Python.</p>
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
                        <h3>Who can attend?</h3>
                        <ul>
                        <li>What is Python and brief history</li>
                        <li id="number">Discussion on Python 2 and 3</li>
                        <li>Unique features of Python</li>
                        <li>Discussion on various IDE’s</li>
                        <li>Demonstration of practical use cases</li>
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
                        <h3>Number of hours</h3>
                        <ul>
                            <li>What is Python and brief history</li>
                            <li>Discussion on Python 2 and 3</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="certification" class="certification" data-spy>
        <div class="container">
            <div class="row">
            <div class="col-sm-7">
                <div class="certificate">
                <h2>Certification</h2>
                <h6 class="para">TechyEdz Solutions Architect Certificate Holders work at 1000s of companies like</h6>
                <button class="course-btn1" data-toggle="modal" data-target="#exampleModalCenter">Get in touch</button>
                </div>
            </div>
            <div class="col-sm-5" id="keyfeatures">
                <img src="<?php echo get_template_directory_uri(); ?>/images/certificate.jpg" alt="logo">
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
                            <li>What is Python and brief history</li>
                            <li>Discussion on Python 2 and 3</li>
                            <li>Unique features of Python</li>
                            <li>Discussion on various IDE’s</li>
                            <li>Demonstration of practical use cases</li>
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
                   <button class="rbtn"><a  href="#">AWS Certification Training - Solutions Architect</a></button>
                   <button class="rbtn"><a href="/basic-marketing">Basic marketing</a></button>
                   <button class="rbtn"><a href="/it-foundations">IT Foundations</a></button>
                   <button class="rbtn"><a href="/basic-marketing">Basic marketing</a></button>
                   <button class="rbtn"><a href="#">IT Foundations</a></button>
                   <button class="rbtn"><a href="#">Basic marketing</a></button>
                   <button class="rbtn"><a href="#">IT Foundations</a></button>
                   <button class="rbtn"><a href="#">Basic marketing</a></button>
                   <button class="rbtn"><a href="#">IT Foundations</a></button>
                   <button class="rbtn"><a href="#">Basic marketing</a></button>
                   <button class="rbtn"><a href="#">IT Foundations</a></button>
                   <button class="rbtn"><a href="#">Basic marketing</a></button>
                </div>
            </div>
            <div class="col-sm-12">
                <h3>Trending Courses</h3>
                <div class="relatedbtn">
                   <button class="rbtn"><a  href="#">AWS Certification Training - Solutions Architect</a></button>
                   <button class="rbtn"><a href="#">Basic marketing</a></button>
                   <button class="rbtn"><a href="#">IT Foundations Basic marketing</a></button>
                   <button class="rbtn"><a href="#">Basic marketing</a></button>
                   <button class="rbtn"><a href="#">IT Foundations</a></button>
                   <button class="rbtn"><a href="#">Basic marketing</a></button>
                   <button class="rbtn"><a href="#">IT Foundations</a></button>
                   <button class="rbtn"><a href="#">Basic marketing</a></button>
                   <button class="rbtn"><a href="#">IT Foundations</a></button>
                   <button class="rbtn"><a href="#">Basic marketing</a></button>
                   <button class="rbtn"><a href="#">IT Foundations</a></button>
                   <button class="rbtn"><a href="#">Basic marketing</a></button>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>