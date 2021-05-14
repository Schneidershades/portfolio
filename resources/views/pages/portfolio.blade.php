@extends('layouts.app')

@section('bodyClass', 'portfolio')

@section('content')
<!-- Page Title Starts -->
<section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
    <h1>my <span>portfolio</span></h1>
    <span class="title-bg">works</span>
</section>
<!-- Page Title Ends -->
<!-- Main Content Starts -->
<section class="main-content text-center revealator-slideup revealator-once revealator-delay1">
    <div id="grid-gallery" class="container grid-gallery">
        <!-- Portfolio Grid Starts -->
        <section class="grid-wrap">
            <ul class="row grid">
                <!-- Portfolio Item Starts -->
                <li>
                    <figure>
                        <img src="assets/img/projects/project1a.jpg" alt="Portolio Image">
                        <div><span>Parkit Booking Ecommerce Application</span></div>
                    </figure>
                </li>
                <!-- Portfolio Item Ends -->
                <!-- Portfolio Item Starts -->
                <li>
                    <figure>
                        <img src="assets/img/projects/project2a.jpg" alt="Portolio Image">
                        <div><span>Admin Application ( Location Manager )</span></div>
                    </figure>
                </li>
                <!-- Portfolio Item Ends -->
                <!-- Portfolio Item Starts -->
                <li>
                    <figure>
                        <img src="assets/img/projects/project3a.jpg" alt="Portolio Image">
                        <div><span>Location Manager Desktop Application</span></div>
                    </figure>
                </li>
                <!-- Portfolio Item Ends -->
                <!-- Portfolio Item Starts -->
                <li>
                    <figure>
                        <img src="assets/img/projects/project4a.jpg" alt="Portolio Image">
                        <div><span>Express</span></div>
                    </figure>
                </li>
                <!-- Portfolio Item Ends -->
                <!-- Portfolio Item Starts -->
                <li>
                    <figure>
                        <img src="assets/img/projects/project5a.jpg" alt="Portolio Image">
                        <div><span>Health Management Organization (HMO) & Hospital Claims ERP</span></div>
                    </figure>
                </li>
                <!-- Portfolio Item Ends -->
                <!-- Portfolio Item Starts -->
                <li>
                    <figure>
                        <img src="assets/img/projects/project6a.jpg" alt="Portolio Image">
                        <div><span>iRecharge Website</span></div>
                    </figure>
                </li>
                <!-- Portfolio Item Ends -->
                <!-- Portfolio Item Starts -->
                <li>
                    <figure>
                        <img src="assets/img/projects/project7a.jpg" alt="Portolio Image">
                        <div><span>iRecharge Mobile App</span></div>
                    </figure>
                </li>
                <!-- Portfolio Item Ends -->
                <!-- Portfolio Item Starts -->
                <li>
                    <figure>
                        <img src="assets/img/projects/project-8.jpg" alt="Portolio Image">
                        <div><span>Image Project</span></div>
                    </figure>
                </li>
                <!-- Portfolio Item Ends -->
                <!-- Portfolio Item Starts -->
                <li>
                    <figure>
                        <img src="assets/img/projects/project-9.jpg" alt="Portolio Image">
                        <div><span>Image Project</span></div>
                    </figure>
                </li>
                <!-- Portfolio Item Ends -->
            </ul>
        </section>
        <!-- Portfolio Grid Ends -->
        <!-- Portfolio Details Starts -->
        <section class="slideshow">
            <ul>
                <!-- Portfolio Item Detail Starts -->
                <li>
                    <figure>
                        <!-- Project Details Starts -->
                        <figcaption>
                            <h3>Image Project</h3>
                            <div class="row open-sans-font">
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project </span>: <span class="ft-wt-600 uppercase">Parkit Website</span>
                                </div>
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-user-o pr-2"></i><span class="project-label">Developed  </span>: <span class="ft-wt-600 uppercase">Alone</span>
                                </div>
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-code pr-2"></i><span class="project-label">Frontend </span>: <span class="ft-wt-600 uppercase">HTML, CSS, Vue.Js</span>
                                </div>
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-code pr-2"></i><span class="project-label">Backend </span>: <span class="ft-wt-600 uppercase">PHP/LARAVEL (API Resource)</span>
                                </div>
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-external-link pr-2"></i><span class="project-label">Preview </span>: <span class="ft-wt-600 uppercase"><a href="#" target="_blank">www.parkit.ng</a></span>
                                </div>
                            </div>
                        </figcaption>
                        <!-- Main Project Content Starts -->
                        <div id="slider" class="carousel slide portfolio-slider" data-ride="carousel" data-interval="false">
                            <ol class="carousel-indicators">
                                <li data-target="#slider" data-slide-to="0" class="active"></li>
                                <li data-target="#slider" data-slide-to="1"></li>
                                <li data-target="#slider" data-slide-to="2"></li>
                                <li data-target="#slider" data-slide-to="3"></li>
                            </ol>
                            <!-- The slideshow -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="assets/img/projects/project1a.jpg" alt="slide 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/img/projects/project1b.jpg" alt="slide 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/img/projects/project1c.jpg" alt="slide 3">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/img/projects/project1d.jpg" alt="slide 4">
                                </div>
                            </div>
                        </div>
                        <!-- Main Project Content Ends -->
                    </figure>
                </li>
                <!-- Portfolio Item Detail Ends -->
                <!-- Portfolio Item Detail Starts -->
                <li>
                    <figure>
                        <!-- Project Details Starts -->
                         <figcaption>
                            <h3>Image Project</h3>
                            <div class="row open-sans-font">
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project </span>: <span class="ft-wt-600 uppercase">Parkit Admin Website</span>
                                </div>
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-user-o pr-2"></i><span class="project-label">Developed  </span>: <span class="ft-wt-600 uppercase">Alone</span>
                                </div>
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-code pr-2"></i><span class="project-label">Frontend </span>: <span class="ft-wt-600 uppercase">HTML, CSS, Vue.Js</span>
                                </div>
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-code pr-2"></i><span class="project-label">Backend </span>: <span class="ft-wt-600 uppercase">PHP/LARAVEL (API Resource)</span>
                                </div>
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-external-link pr-2"></i><span class="project-label">Preview </span>: <span class="ft-wt-600 uppercase"><a href="#" target="_blank">Private</a></span>
                                </div>
                            </div>
                        </figcaption>
                        <!-- Project Details Ends -->
                        <!-- Main Project Content Starts -->
                        <img src="assets/img/projects/project2a.jpg" alt="Portolio Image">
                        <!-- Main Project Content Ends -->
                    </figure>
                </li>
                <!-- Portfolio Item Detail Ends -->
                <!-- Portfolio Item Detail Starts -->
                <li>
                    <figure>
                        <!-- Project Details Starts -->
                        <figcaption>
                            <h3>Image Project</h3>
                            <div class="row open-sans-font">
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project </span>: <span class="ft-wt-600 uppercase">Parkit Desktop Application (POS)</span>
                                </div>
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-user-o pr-2"></i><span class="project-label">Developed  </span>: <span class="ft-wt-600 uppercase">Alone</span>
                                </div>
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-code pr-2"></i><span class="project-label">Frontend </span>: <span class="ft-wt-600 uppercase">HTML, CSS, Vue.Js, Electron.js</span>
                                </div>
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-code pr-2"></i><span class="project-label">Backend </span>: <span class="ft-wt-600 uppercase">PHP/LARAVEL (API Resource)</span>
                                </div>
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-external-link pr-2"></i><span class="project-label">Preview </span>: <span class="ft-wt-600 uppercase"><a href="#" target="_blank">Private</a></span>
                                </div>
                            </div>
                        </figcaption>
                        <!-- Project Details Ends -->
                        <!-- Main Project Content Starts -->
                        <div id="slider2" class="carousel slide portfolio-slider" data-ride="carousel" data-interval="false">
                            <ol class="carousel-indicators">
                                <li data-target="#slider2" data-slide-to="0" class="active"></li>
                                <li data-target="#slider2" data-slide-to="1"></li>
                            </ol>
                            <!-- The slideshow -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="assets/img/projects/project3a.jpg" alt="slide 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/img/projects/project3b.jpg" alt="slide 2">
                                </div>
                            </div>
                        </div>
                        <!-- Main Project Content Ends -->
                    </figure>
                </li>
                <!-- Portfolio Item Detail Ends -->
                <!-- Portfolio Item Detail Starts -->
                <li>
                    <figure>
                        <!-- Project Details Starts -->
                        <figcaption>
                            <h3>Express Mobile Application</h3>
                            <div class="row open-sans-font">
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project </span>: <span class="ft-wt-600 uppercase">Mobile ERP for Technical Structure</span>
                                </div>
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-user-o pr-2"></i><span class="project-label">Developed  </span>: <span class="ft-wt-600 uppercase">Alone</span>
                                </div>
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-code pr-2"></i><span class="project-label">Frontend </span>: <span class="ft-wt-600 uppercase">Ionic</span>
                                </div>
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-code pr-2"></i><span class="project-label">Backend </span>: <span class="ft-wt-600 uppercase">PHP/LARAVEL (API Resource)</span>
                                </div>
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-external-link pr-2"></i><span class="project-label">Preview </span>: <span class="ft-wt-600 uppercase"><a href="#" target="_blank">Private</a></span>
                                </div>
                            </div>
                        </figcaption>
                        <!-- Project Details Ends -->
                        <!-- Main Project Content Starts -->
                        <div id="slider3" class="carousel slide portfolio-slider" data-ride="carousel" data-interval="false">
                            <ol class="carousel-indicators">
                                <li data-target="#slider3" data-slide-to="0" class="active"></li>
                                <li data-target="#slider3" data-slide-to="1"></li>
                                <li data-target="#slider3" data-slide-to="2"></li>
                            </ol>
                            <!-- The slideshow -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="assets/img/projects/project4a.jpg" alt="slide 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/img/projects/project4b.jpg" alt="slide 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/img/projects/project4c.jpg" alt="slide 3">
                                </div>
                            </div>
                        </div>
                        <!-- Main Project Content Ends -->
                    </figure>
                </li>
                <!-- Portfolio Item Detail Ends -->
                <!-- Portfolio Item Detail Starts -->
                <li>
                    <figure>
                        <!-- Project Details Starts -->
                        <figcaption>
                            <h3>Image Project</h3>
                            <div class="row open-sans-font">
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project </span>: <span class="ft-wt-600 uppercase">Health Insurance Application</span>
                                </div>
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-user-o pr-2"></i><span class="project-label">Developed  </span>: <span class="ft-wt-600 uppercase">Alone</span>
                                </div>
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-code pr-2"></i><span class="project-label">Frontend </span>: <span class="ft-wt-600 uppercase">HTML CSS jQuery</span>
                                </div>
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-code pr-2"></i><span class="project-label">Backend </span>: <span class="ft-wt-600 uppercase">LARAVEL BLADE</span>
                                </div>
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-external-link pr-2"></i><span class="project-label">Preview </span>: <span class="ft-wt-600 uppercase"><a href="#" target="_blank">Private</a></span>
                                </div>
                            </div>
                        </figcaption>
                        <!-- Project Details Ends -->
                        <!-- Main Project Content Starts -->
                        <div id="slider4" class="carousel slide portfolio-slider" data-ride="carousel" data-interval="false">
                            <ol class="carousel-indicators">
                                <li data-target="#slider4" data-slide-to="0" class="active"></li>
                                <li data-target="#slider4" data-slide-to="1"></li>
                                <li data-target="#slider4" data-slide-to="2"></li>
                            </ol>
                            <!-- The slideshow -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="assets/img/projects/project5a.jpg" alt="slide 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/img/projects/project5b.jpg" alt="slide 2">
                                </div>
                            </div>
                        </div>
                        <!-- Main Project Content Ends -->
                    </figure>
                </li>
                <!-- Portfolio Item Detail Ends -->
                <!-- Portfolio Item Detail Starts -->
                <li>
                    <figure>
                        <!-- Project Details Starts -->
                        <figcaption>
                            <h4>iRecharge Application</h4>
                            <div class="row open-sans-font">
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project </span>: <span class="ft-wt-600 uppercase">iRecharge Application</span>
                                </div>
                                <div class="col-12 col-sm-12 mb-2">
                                    <i class="fa fa-user-o pr-2"></i><span class="project-label">Collaborators  </span>: <span class="ft-wt-600 uppercase">schneidershades@gmail.com tobenna@infostrategytech.com, michaelogbuma@gmail.com, ifyinbox@gmail.com, layifunsho@yahoo.com </span>
                                </div>
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-code pr-2"></i><span class="project-label">Frontend </span>: <span class="ft-wt-600 uppercase">HTML CSS jQuery</span>
                                </div>
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-code pr-2"></i><span class="project-label">Backend </span>: <span class="ft-wt-600 uppercase">Vanila PHP</span>
                                </div>
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-external-link pr-2"></i><span class="project-label">Preview </span>: <span class="ft-wt-600 uppercase"><a href="#" target="_blank">irecharge.com.ng</a></span>
                                </div>
                            </div>
                        </figcaption>
                        <!-- Project Details Ends -->
                        <!-- Main Project Content Starts -->
                        <img src="assets/img/projects/project6a.jpg" alt="Portolio Image">
                        <!-- Main Project Content Ends -->
                    </figure>
                </li>
                <!-- Portfolio Item Detail Ends -->
                <!-- Portfolio Item Detail Starts -->
                <li>
                    <figure>
                        <!-- Project Details Starts -->
                        <figcaption>
                            <h4>iRecharge Mobile App</h4>
                            <div class="row open-sans-font">
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project </span>: <span class="ft-wt-600 uppercase">iRecharge Mobile App</span>
                                </div>
                                <div class="col-12 col-sm-12 mb-2">
                                    <i class="fa fa-user-o pr-2"></i><span class="project-label">Collaborators  </span>: <span class="ft-wt-600 uppercase">schneidershades@gmail.com tobenna@infostrategytech.com, michaelogbuma@gmail.com, ifyinbox@gmail.com, layifunsho@yahoo.com </span>
                                </div>
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-code pr-2"></i><span class="project-label">Frontend </span>: <span class="ft-wt-600 uppercase">HTML CSS jQuery</span>
                                </div>
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-code pr-2"></i><span class="project-label">Backend </span>: <span class="ft-wt-600 uppercase">Vanila PHP</span>
                                </div>
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-external-link pr-2"></i><span class="project-label">Preview </span>: <span class="ft-wt-600 uppercase"><a href="#" target="_blank">irecharge.com.ng</a></span>
                                </div>
                            </div>
                        </figcaption>
                        <!-- Project Details Ends -->
                        <!-- Main Project Content Starts -->
                        <div id="slider5" class="carousel slide portfolio-slider" data-ride="carousel" data-interval="false">
                            <ol class="carousel-indicators">
                                <li data-target="#slider5" data-slide-to="0" class="active"></li>
                                <li data-target="#slider5" data-slide-to="1"></li>
                                <li data-target="#slider5" data-slide-to="2"></li>
                                <li data-target="#slider5" data-slide-to="3"></li>
                                <li data-target="#slider5" data-slide-to="4"></li>
                            </ol>
                            <!-- The slideshow -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="assets/img/projects/project7a.jpg" alt="slide 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/img/projects/project7b.jpg" alt="slide 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/img/projects/project7c.jpg" alt="slide 3">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/img/projects/project7d.jpg" alt="slide 4">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/img/projects/project7e.jpg" alt="slide 5">
                                </div>
                            </div>
                        </div>
                        <!-- Main Project Content Ends -->
                    </figure>
                </li>
                <!-- Portfolio Item Detail Ends -->
                <!-- Portfolio Item Detail Starts -->
                <li>
                    <figure>
                        <!-- Project Details Starts -->
                        <figcaption>
                            <h3>Image Project</h3>
                            <div class="row open-sans-font">
                                <div class="col-6 mb-2">
                                    <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project </span>: <span class="ft-wt-600 uppercase">Website</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-user-o pr-2"></i><span class="project-label">Client </span>: <span class="ft-wt-600 uppercase">Envato</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-code pr-2"></i><span class="project-label">Langages </span>: <span class="ft-wt-600 uppercase">HTML, CSS, Javascript</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-external-link pr-2"></i><span class="project-label">Preview </span>: <span class="ft-wt-600 uppercase"><a href="#" target="_blank">www.envato.com</a></span>
                                </div>
                            </div>
                        </figcaption>
                        <!-- Project Details Ends -->
                        <!-- Main Project Content Starts -->
                        <img src="assets/img/projects/project-8.jpg" alt="Portolio Image">
                        <!-- Main Project Content Ends -->
                    </figure>
                </li>
                <!-- Portfolio Item Detail Ends -->
                <!-- Portfolio Item Detail Starts -->
                <li>
                    <figure>
                        <!-- Project Details Starts -->
                        <figcaption>
                            <h4>Image Project</h4>
                            <div class="row open-sans-font">
                                <div class="col-6 mb-2">
                                    <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project </span>: <span class="ft-wt-600 uppercase">Website</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-user-o pr-2"></i><span class="project-label">Client </span>: <span class="ft-wt-600 uppercase">Envato</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-code pr-2"></i><span class="project-label">Langages </span>: <span class="ft-wt-600 uppercase">HTML, CSS, Javascript</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-external-link pr-2"></i><span class="project-label">Preview </span>: <span class="ft-wt-600 uppercase"><a href="#" target="_blank">www.envato.com</a></span>
                                </div>
                            </div>
                        </figcaption>
                        <!-- Project Details Ends -->
                        <!-- Main Project Content Starts -->
                        <img src="assets/img/projects/project-9.jpg" alt="Portolio Image">
                        <!-- Main Project Content Ends -->
                    </figure>
                </li>
                <!-- Portfolio Item Detail Ends -->
            </ul>
            <!-- Portfolio Navigation Starts -->
            <nav>
                <span class="icon nav-prev"><img src="assets/img/projects/navigation/left-arrow.png" alt="previous"></span>
                <span class="icon nav-next"><img src="assets/img/projects/navigation/right-arrow.png" alt="next"></span>
                <span class="nav-close"><img src="assets/img/projects/navigation/close-button.png" alt="close"> </span>
            </nav>
            <!-- Portfolio Navigation Ends -->
        </section>
    </div>
</section>
<!-- Main Content Ends -->
@endsection