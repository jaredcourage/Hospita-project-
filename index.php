<!DOCTYPE html>
<html lang="en">



<head>  
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>CuraSolace Healthcare</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <link rel="stylesheet" 
     href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer"
      />
           <link rel="icon" type="image/png" href="../Logo(1).png">
          <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>


      <style>
        /* General Styles */
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}



/* Fullscreen submenu page 
.submenu-page {
    display: none; 
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: white;
    z-index: 1000;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    padding-top: 50px;
}

*/



.submenu-page {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: white;
    z-index: 1002; /* Ensure it appears above everything */
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    padding-top: 50px;
}


/* Submenu header with back button */
.submenu-header {
    width: 100%;
    display: flex;
    align-items: center;
    padding: 15px;
    background: #f8f8f8;
    border-bottom: 1px solid #ddd;
    position: fixed;
    top: 0;
}

.submenu-header i {
    font-size: 24px;
    cursor: pointer;
    margin-right: 10px;
}

/* Submenu list */
.submenu-list {
    list-style: none;
    padding: 20px;
    width: 100%;
    max-width: 500px;
   
}

.submenu-list li {
    padding: 12px;
    border-bottom: 1px solid #ddd;
}

.submenu-list li a {
    text-decoration: none;
    font-size: 18px;
    color: black;
    display: block;
}

/* Smooth transition */
.submenu-page, .submenu-header {
    transition: all 0.3s ease-in-out;
}

        .bringng-new img {
   width: 100%;
   align-items: center;
   justify-content: center;
   margin-bottom: 80px;
  }      
        
  @media (min-width: 700px) {

    .bringng-new img {
   width: 80%;
    margin-left: 130px;
  }      
  }
  
  
  
 .facebook-footer {
    text-align: center; /* Centers the icon */
    margin-top: 50px; /* Adjust as needed */
}

.facebook-icon {
    width: 60px; /* Adjust size */
    height: 80px;
    border-radius: 50%;
    background-color: #1877F2; /* Facebook blue */
    padding: 10px;
}

        
        
        </style>




</head>
<body>
   


    
          </header>
          


          
            
<!--- the other nav bar for laptop -->
<div class="new-container">
    <div class="new-bass">
        
     <ul class="new-list">
     <li><a><i class="fa-solid fa-people-arrows"></i><i class="fa-solid fa-people-arrows"></i></a></li>
       <li><a>Feature stories</a></li>
       <li><a>For media</a></li>
       <li><a>Working And Volunteering</a></li>
       <li><a>Research</a></li>
       <li><a>Learning</a></li>
       <li><a>Healthcare Provider</a></li>
       <li><a>Staff Wellness</a></li>
     </ul>


    </div>
 </div>

          

         


<div class="clearfix"></div>
 

    </div>

    <div class="content">
    
        <header> 
       
  



    
            <div class="nav-bar">
                <div class="new-logo-side">
    
               <a href="index.html">    <img src="/images /nj.png"
                     width="70px" height="auto">
                    </a> 
                   <p class="logo-write"></p>
            </div>
    
                   <!--- ruler div under -->
             
                <!--- the search code -->


                <div class="search-container">
                    <input type="text" id="searchInput" placeholder="Search" onkeyup="performSearch()" onkeypress="handleEnter(event)">
                    <button onclick="redirectToSearch()"><i class="fa-solid fa-magnifying-glass" style="color: black;"></i></button>
                </div>
            



    
           <ul class="links">
           
            <li><a href="index.php" >Home</a></li>
           <li><a href="about.php">About</a></li>
           <li><a href="Apply-for-Job.php" >Apply for Job</a></li>
           <li><a href="contact.php">Contact</a></li>
           
           </ul>
        
               <a href="#"></a>
               <a href="#"></a>
               <a href="contact.php" class="action_btn">Get Started</a>
              

               <div class="toggle_btn">
                <a><i class="fa-solid fa-bars" style="color: black;"></i></a>

               
             </div>

           </div>
           
           
         
           <div class="dropdown_menu">



            <!------>
        
        
<!-- First Dropdown: Visiting or Attending CSH -->
<div class="dropdown-item" data-target="submenuVisitingorAttendingCSH">
    <li>
    <a class="firstchild" href="#">Visiting or Attending CSH<i class="fa-solid fa-chevron-right dropdown_icon"></i></a>
       
    </li>
</div>

<!-- Second Dropdown: Areas of Care & Services -->
<div class="dropdown-item" data-target="submenuAreasofCare&Services">
    <li>
        <a class="firstchild" href="#">Areas of Care & Services<i class="fa-solid fa-chevron-right dropdown_icon"></i></a>
        
    </li>
</div>

<!-- 🔥 NEW: Third Dropdown: Caregiver -->
<div class="dropdown-item" data-target="submenuForCaregiver">
    <li>
        <a class="firstchild" href="#">For Caregivers<i class="fa-solid fa-chevron-right dropdown_icon"></i></a>
    </li>
</div>


<!-- 🔥 NEW: 4 Dropdown: WHO we are -->
<div class="dropdown-item" data-target="submenuAboutCSH">
    <li>
        <a class="firstchild" href="#">About CSH<i class="fa-solid fa-chevron-right dropdown_icon" style="size:10px ;"></i></a>
       
    </li>
</div>


<!-- 🔥 NEW: 5 Dropdown: Insight -->
<div class="dropdown-item" data-target="submenuWorkingWithUs">
    <li>
        <a class="firstchild" href="#">Working With Us<i class="fa-solid fa-chevron-right dropdown_icon" style="size:10px ;"></i></a>
       
    </li>
</div>


<!-- 🔥 NEW: 6 Dropdown: Our Featured News Stories-->
<div class="dropdown-item" data-target="submenuFeaturedNewsStories">
    <li>
        <a class="firstchild" href="Our Work.php">Featured News Stories</a>
       
    </li>
</div>





<!-- 🔥 NEW: 7 Dropdown: ContactUs -->
<div class="dropdown-item" data-target="submenuContactUs">
    <li>
        <a class="firstchild" href="contact us.php">Contact Us</a>
       
    </li>
</div>


<!-- 🔥 NEW: 11 Dropdown: Our Working and Volunteering-->
<div class="dropdown-item" data-target="submenuWorkingandVolunteering">
    <li>
        <a class="firstchild" href="Newsroom.php">Working and Volunteering</a>
       
    </li>
</div>





<!-- 🔥 NEW: 8 Dropdown: Our Work -->
<div class="dropdown-item" data-target="submenuApply for Job">
    <li>
        <a class="firstchild" href="Apply Now.php">Apply for Job</a>
       
    </li>
</div>








</div>






<!-- Fullscreen Submenu: SECTORS -->
<div id="submenuVisitingorAttendingCSH" class="submenu-page">
<div class="submenu-header">
    <i class="fa-solid fa-arrow-left back-btn"></i>
    <h2>Go Back</h2>
</div>
<ul class="submenu-list">
    <li><a href="Visiting or Attending CSH.html">Visit Our Clinic</a></li>
    <li><a href="COVID-19, Masking and Outbreak Information.html">COVID-19, Masking and Outbreak Information</a></li>
    <li><a href="Getting to the hospital.html">Getting to the Hospital</a></li>
    <li><a href="While you are here.html">While You Are Here</a></li>
    <li><a href="Preparing to leave the hospital.html">Preparing to leave the Hospital</a></li>
    <li><a class="firstchild" href="Visiting a Patient at KHSC.html">Visiting A Patient</a></li>
    <li><a class="firstchild" href="Virtual care for patients.html">Virtual Care for Patients</a></li>
    <li><a class="firstchild" href="Buid A Career With Us.php">Advance Care Planning</a></li>
    <li><a class="firstchild" href="contact us.html">Contact Us</a></li>
</ul>

</div>

<!-- Fullscreen Submenu: SERVICES -->
<div id="submenuAreasofCare&Services" class="submenu-page">
<div class="submenu-header">
    <i class="fa-solid fa-arrow-left back-btn"></i>
    <h2>Go back</h2>
</div>
<ul class="submenu-list">
    <li><a href="Water and Wastewater Infrastructure.php">Our Area Of Services</a></li>
  
    






<!-- second semi drop down ; appointrmnt  -->
<div class="dropdown-item" data-target="submenuClinicAppointments">
    <li>
    <a class="firstchild" href="Clinic Appointments.html">Clinic Appointments<i class="fa-solid fa-chevron-right dropdown_icon"></i></a>
       
    </li>
</div>
    

  <!---- the list -->
  <!-- second semi Submenu: appointment -->
<div id="submenuClinicAppointments" class="submenu-page">
    <div class="submenu-header">
        <i class="fa-solid fa-arrow-left back-btn"></i>
        <h2>Go back</h2>
    </div>
    <ul class="submenu-list">
        <li><a href="Special Projects.php">Find your Clnic</a></li>
        <li><a href="Virtual care.html">Virtual Care</a></li>
        <li><a href="reschedule Appointment.html">Resheduling your appontment</a></li>
    </ul>


</div>



<!---- the space between the  first semi code and second unsemi codes-->






<!-- First semi drop down ; area of code  -->
<div class="dropdown-item" data-target="submenuAreasofCare">
    <li>
    <a class="firstchild" href="#">Areas of Care<i class="fa-solid fa-chevron-right dropdown_icon"></i></a>
       
    </li>
</div>
    

  <!---- the list -->
  <!-- Fist semi Submenu: areas of code -->
<div id="submenuAreasofCare" class="submenu-page">
    <div class="submenu-header">
        <i class="fa-solid fa-arrow-left back-btn"></i>
        <h2>Go back</h2>
    </div>
    <ul class="submenu-list">
        <li><a href="Pediatric Care.html">Padiatric Care</a></li>
        <li><a href="Cancer Care.html">Cancer Care</a></li>
        <li><a href="Special Projects.php">Surgical care</a></li>
        <li><a href="Emergency Care.html">Emergency care</a></li>
        <li><a href="Special Projects.php">Pharmacy care</a></li>
        <li><a href="Renal Program.html">Renal Services</a></li>
        <li><a href="Labour and Delivery.html">Laboratory Services</a></li>
        <li><a href="Special Projects.php">Labour and Delivery</a></li>
    </ul>


</div>


    <!---- the 3rd section of the semi menu-->


<!-- second semi drop down ; patient support and servies  -->
<div class="dropdown-item" data-target="submenuPatientSupport&Services">
    <li>
    <a class="firstchild" href="#">Patient Support & Services<i class="fa-solid fa-chevron-right dropdown_icon"></i></a>
       
    </li>
</div>
    

  <!---- the list -->
  <!-- second semi Submenu: appointment -->
<div id="submenuPatientSupport&Services" class="submenu-page">
    <div class="submenu-header">
        <i class="fa-solid fa-arrow-left back-btn"></i>
        <h2>Go back</h2>
    </div>
    <ul class="submenu-list">
        <li><a href="Ininew Patient Services.html">Ininew Patient services</a></li>
        <li><a href="Patient & Family Resources.html">Patient & Family Resources</a></li>
        <li><a href="Pharmacy Services.html">Pharmacy</a></li>
        <li><a href="Privacy.html">Privacy</a></li>
        <li><a href="Test and Scans.html">Test and Scans</a></li>
        <li><a href="Spiritual Health.html">Spiritual Health</a></li>
    </ul>

<ul>
</div>












</ul>
</div>




<!-- 🔥 NEW: Fullscreen Submenu: ForCaregiver-->
<div id="submenuForCaregiver" class="submenu-page">
<div class="submenu-header">
    <i class="fa-solid fa-arrow-left back-btn"></i>
    <h2>Go back</h2>
</div>
<ul class="submenu-list">
    <li><a href="career.php">Caregiver Resources </a></li>
    <li><a href="Apply Now.php">Our Home care</a></li>
    <li><a href="professional.php">Case Management</a></li>
    <li><a href="Considering Construction.php">Hospital Support </a></li>
    <li><a href="skilled-craft.php">Palliative Care at Home</a></li>
    <li><a class="firstchild" href="Buid A Career With Us.php">Senior Home Care </a></li>
</ul>
</div>



<!-- 🔥 NEW: Fullscreen Submenu: About CSH -->
<div id="submenuAboutCSH" class="submenu-page">
    <div class="submenu-header">
        <i class="fa-solid fa-arrow-left back-btn"></i>
        <h2>Go back</h2>
    </div>
    <ul class="submenu-list">
        <li><a href="About us.html">About Us</a></li>
        <li><a href="Who we are.html">Who we are</a></li>
        <li><a href="our strategy.html">Our strategy 2024-2027</a></li>
        <li><a href="Our Performance.html">Our Performance</a></li>
        <li><a href="Innovation@CSH.html">Innovation@CSH</a></li>
        <li><a href="Senior Leadership.html">Senior Leadership</a></li>
        <li><a href="Our Foundation.html">Our Foundation</a></li>
        <li><a href="Privacy and access to information.html">Privacy And Access to Information</a></li>
    </ul>
    </div>



    <!-- 🔥 NEW: Fullscreen Submenu: WorkingWithUs -->
<div id="submenuWorkingWithUs" class="submenu-page">
    <div class="submenu-header">
        <i class="fa-solid fa-arrow-left back-btn"></i>
        <h2>Go back</h2>
    </div>
    <ul class="submenu-list">
        <li><a href="International recruitment.html">International Recruitment</a></li>
        <li><a href="Bu.php">Nursing and midwifery careers</a></li>
        <li><a href="Virtual Reality Training.php">Nursing and Midwifery re-entry</a></li>
        <li><a href="How Professional Development.php">Graduate Nursing jobs</a></li>
       
        









<!---- the ist  section of the semi menu for work with us-->
<div class="dropdown-item" data-target="submenuJobSearch">
    <li>
    <a class="firstchild" href="#">Job Search<i class="fa-solid fa-chevron-right dropdown_icon"></i></a>
       
    </li>
</div>
    

  <!---- the list -->
  <!-- second semi Submenu: appointment -->
<div id="submenuJobSearch" class="submenu-page">
    <div class="submenu-header">
        <i class="fa-solid fa-arrow-left back-btn"></i>
        <h2>Go back</h2>
    </div>
    <ul class="submenu-list">
        <li><a href="Special Projects.php">Careers Portal</a></li>
        <li><a href="Special Projects.php">Support our Foundation</a></li>
        <li><a href="Special Projects.php">For Caregivers</a></li>
        <li><a href="Special Projects.php">Job Search</a></li>
        <li><a href="Special Projects.php">Read Our Blog</a></li>
        <li><a href="Special Projects.php">Contact CuraSolace Healthcare </a></li>
    </ul>

<ul>
</div>



<!--- second of semimenu of work with us -->







<!---- the second  section of the semi menu for work with us-->
<div class="dropdown-item" data-target="DoctorsCareer">
    <li>
    <a class="firstchild" href="#">Doctors Career<i class="fa-solid fa-chevron-right dropdown_icon"></i></a>
       
    </li>
</div>
    

  <!---- the list -->
  <!-- second semi Submenu: appointment -->
<div id="DoctorsCareer" class="submenu-page">
    <div class="submenu-header">
        <i class="fa-solid fa-arrow-left back-btn"></i>
        <h2>Go back</h2>
    </div>
    <ul class="submenu-list">
        <li><a href="Special Projects.php">Doctors Career </a></li>
        <li><a href="Special Projects.php">Intern Program</a></li>
        <li><a href="Special Projects.php">RMO Opportunities</a></li>
        <li><a href="Special Projects.php">Registrar Opportunities</a></li>
        <li><a href="Special Projects.php">Medical Careers</a></li>
    </ul>

<ul>
</div>

<li><a href="Special Projects.php">Allied health careers</a></li>
<li><a href="Special Projects.php">Join Us</a></li>




<ul>
</div>








    </ul>
    </div>



            <!----- the second-->


            
                </div>
                

</header>





<!------ the banner section-->


<section class="hero-banner">
    <div class="overlay">
      <div class="hero-content-1">
        <h1>Welcome to CSH</h1>
        <p>
          At CuraSolace Health Sciences Centre we care for our patients, families and each other
          through everyday actions, significant moments and exciting breakthroughs.
        </p>
        <a href="#" class="discover-btn">Discover more <span>›</span></a>
      </div>
    </div>
  </section>

<!---- the section close to burner -->
  <section class="content-close-section">

    <div class="close-burnare">
    <a>Home <i class="fa-solid fa-chevron-right dropdown_icon"></i></a>
    <a>About us <i class="fa-solid fa-chevron-right dropdown_icon"></i></a>
    <a>Contact us <i class="fa-solid fa-chevron-right dropdown_icon"></i></a>

    </div>

  </section>




<!------- the features lsit. -->



<section class="features-grid">
    <div class="feature-item">
      <i class="fas fa-map-marker-alt"></i>
      <h3>Getting to the hospital</h3>
      <p>CSH provides care, services and support at two different locations in downtown Australia & Canada.</p>
      <a href="#">Plan your journey to CSH</a>
    </div>
    <div class="feature-item">
      <i class="fas fa-hospital-alt"></i>
      <h3>While you are here</h3>
      <p>Make the most of your hospital stay and explore on-site amenities and services.</p>
      <a href="#">Explore on-site offerings</a>
    </div>
    <div class="feature-item">
      <i class="fas fa-procedures"></i>
      <h3>Visiting a patient</h3>
      <p>Visiting a patient is an important part of the care journey.</p>
      <a href="#">Learn more</a>
    </div>
    <div class="feature-item">
      <i class="fas fa-car"></i>
      <h3>Parking around KHSC</h3>
      <p>There are many options for parking around the sites that make up CSH.</p>
      <a href="#">Parking options</a>
    </div>
    <div class="feature-item">
      <i class="fas fa-hand-holding-medical"></i>
      <h3>Departments, programs and clinics</h3>
      <p>CSH has a number of different departments, programs, clinics and services.</p>
      <a href="#">Get the full list here</a>
    </div>
    <div class="feature-item">
      <i class="fas fa-users"></i>
      <h3>Working at CSH</h3>
      <p>We always strive to attract dynamic and dedicated people to join our team.</p>
      <a href="#">Join our team!</a>
    </div>
    <div class="feature-item">
      <i class="fas fa-dollar-sign"></i>
      <h3>Pay my bill</h3>
      <p>Need to make a payment to CSH for items or services?</p>
      <a href="#">Pay your bill here</a>
    </div>
    <div class="feature-item special">
      <i class="fas fa-biohazard"></i>
      <h3>COVID-19 Information</h3>
      <p>Get up to date information related to COVID-19 and protocols at CHS.</p>
      <a href="#">Get the latest</a>
    </div>
  </section>





  <!----- image diver section-->
  
  <section class="hero-section">
    <div class="hero-image">
      <img src="/images /Website CTA.webp" alt="Medical technology screen" />
      <div style="display: none;" class="image-text">This is<br>the place.</div>
    </div>
    <div class="hero-content">
        <h2>This is the place.</h2>
      <p>This is where you go when you need help, that cares for our region and where amazing people are transforming care, together.</p>
      <p>This is one of Australia top care, research and teaching hospitals, making groundbreaking advancements in health care.</p>
      <p>Wondering what else makes CSH "the place?"</p>
      <a href="#" class="hero-button">Click here</a>
    </div>
  </section>
  





<!---- the purple health seection-->


<section class="plus-section">
<div class="plus-contianer">

<div class="plus-min">
    <i class="fa-solid fa-notes-medical" style="color: #ffffff; font-size: 150px;"></i>
  
</div>


<div class="plus-min">
      <h1>Accessing Your Health Care Information</h1>
      <p>The Privacy Office ensures that the information contained in your <br>
       medical record is protected. There are various reasons you may need <br>
       access to your information and we are here to help.</p>

      <div class="but-btn"><button>Access Your Information</button></div>
</div>


<div class="clearfix"></div>

</div>
</section>











<!---- the beginning of  second  purple health seection-->

<main class="plus-main">

<section class="plus-section-2">
    <div class="plus-contianer">
    
    <div class="plus-min">
        <img src="/images /MicrosoftTeams-image.webp" width="380px" height="auto">
      
    </div>
    
    
    <div class="plus-min">
          <h1 style="color: black;">Choose the Right Place for the Right Care</h1>
          <p style="color: black;">Choosing the right place for the right care can positively impact <br>
            your health, improve the work experiences of care teams, and <br>
            allow the overall health system to function at its best.<br>
            We encourage you to read about some of the people working in <br>
            the specialty of Urgent and Emergency Care and a few of the <br>
            patients who have benefited from their skills.
        </p>
    
          <div class="but-btn"><button>Learn More</button></div>
    </div>
    
    
    <div class="clearfix"></div>
    
    </div>
    </section>
    
    </main>
    
    
    
    
    <!---- the end second purple health end seection-->
    













<!------ people of CSH codes section -->

<section class="news-section">
    <div class="news-container">
    
    <h1>People of CSH</h1>
    
    <div class="news-border">
    <img src="/images /cilare-social-worker.webp">
    
    <h2>People of KHSC: Clare Bowley
        </h2>
    <p>If we had to describe Clare Bowley in one  <br>
        word, it would be memorable.But it’s not just one thing is<br>
        social workers does that makes her iconic. it's<br>
         everything she does - and has done since joining<br>
         CuraSolace Health Sciences Centre (CSHSC) 34 years...
    </p>
    
    
    <a>Learn More <i class="fa-solid fa-chevron-right dropdown_icon"></i></a>
    
    </div>
    
    
    <!---- the second our people  border -->
    
    <div class="news-border">
        <img src="/images /people-at-office-2.webp">
        
        <h2>People of CSHSC: Amelia Indigo<br> </h2>
        <p>Building a trusting relationship, grounded in compassion, respect <br>
            and understanding, is a top priority for Amelia Indigo <br>
            the patients and families he supports are living with substance use<br>
            disorders.Amelia Indigo...
        </p>
        
        
        <a>Learn More <i class="fa-solid fa-chevron-right dropdown_icon"></i></a>
        
        </div>
    
    
    
        <!---- the third our people  border -->
        
    
    
        <div class="news-border">
            <img src="/images /people-in-clinic-3.webp">
            
            <h2>People + Pup of CSHSC: Kaida and Doc</h2>
            <p>Feel-good alert! This week's dose of happiness is brought to you<br>
                by a volunteering duo, who've been making a paw -sitive impact at <br>
                CuraSolace Health Science Centre(CSHSC) for the last six years <br>
                Meet Kaida and one of the goodest boys we know, Doc
                 
            </p>
            
            
            <a>Learn More <i class="fa-solid fa-chevron-right dropdown_icon"></i></a>
            
            </div>
    
    
    <div class="clearfix"></div>
    
    
    
    </div>
    </section>



<!------ people of CSH codes end section -->

<br>
<br>
<br>
<br>
























    <!---- the news sections -->



<section class="news-section">
<div class="news-container">

<h1>Latest News</h1>

<div class="news-border">
<img src="/images /TITP_neuro_website_1800x1200.webp">
<br><span>April 3, 2025</span>
<h2>Integrative Brain Tumor Program <br>
    achieving best-in-class patient outcomes</h2>
<p>CuraSolace Health Science Centre (CSHSC) is setting <br>
    benchmarks in brain tumor care with its groundbreaking <br>
    integrative Brain Tumor Program (IBTP), developed under the<br>
    leadership of Dr. Teresa Purzner, a neurosurgeon, researcher, <br>
    and entrepreneur...
</p>


<a>Read More <i class="fa-solid fa-chevron-right dropdown_icon"></i></a>

</div>


<!---- the second news border -->

<div class="news-border">
    <img src="/images /MM6_6473.webp">
    <br><span>April 3, 2025</span>
    <h2>CSH launches southeastern Australia <br> first PET-CT program</h2>
    <p>CuraSolace Health Sciences Centre (CSHSC) has <br>
        reached a major milestone n the advancement of <br>
        medical imaging for southeastern Australia, Officially<br>
        completing construction of the region’s first <br>
        positron emission tomography-computed <br>
        tomography PET-CTsuite. 
    </p>
    
    
    <a>Read More <i class="fa-solid fa-chevron-right dropdown_icon"></i></a>
    
    </div>



    <!---- the third news border -->
    


    <div class="news-border">
        <img src="/images /DESIGN - 2025 04 - PET CT feature (1)_0.webp">
        <br><span>April 3, 2025</span>
        <h2>Cutting-edge imaging, local impact </h2>
        <p>Patients in southeastern Ontario now have access to <br>
            of the most advanced diagnostic imaging tools <br>
            available, following the launch of CuraSolace Health <br>
            Sciences Centre’s (CSHSC) new PET-CT program. T<br>
            The first of its kind in the region, this state-of...  
        </p>
        
        
        <a>Read More <i class="fa-solid fa-chevron-right dropdown_icon"></i></a>
        
        </div>


<div class="clearfix"></div>



</div>
</section>








<!---- the Working and Volunteering at KHSC section -->




<main class="plus-main">

    <section class="plus-section-2">
        <div class="plus-contianer">
        
        <div class="plus-min">
            <img src="/images /nurs-client.webp" width="380px" height="auto">
          
        </div>
        
        
        <div class="plus-min">
              <h1 style="color: black;">Working and Volunteering at CSH</h1>
              <p style="color: black;">Seeking career opportunities to joining a passionate  <br>
                and dedicated team? Interested in supporting your <br>
                community and giving back?
               
            </p>
        
              <div class="but-btn"><button>Discover Opportunities</button></div>
        </div>
        
        
        <div class="clearfix"></div>
        
        </div>
        </section>
        
        </main>
        
        
 





        <!------- the second  features lsit. section -->



<section class="features-grid">
    <div class="feature-item">
      <i class="fa-solid fa-parking"></i>
      <h3>Where do I Park?</h3>
      <p>whether you're here for long or short stay you have several parking options to choose from </p>
      <a href="#">Information about Parking</a>
    </div>
    
    <div class="feature-item">
      <i class="fas fa-procedures"></i>
      <h3>How do locate a patient or family member</h3>
      <p>are you looking to find or get in touch with a patient here at the hospital 
        There are different ways you can reach them
      </p>
      <a href="#">Learn more here</a>
    </div>
    <div class="feature-item">
      <i class="fa-solid fa-map"></i>
      <h3>Maps and directions</h3>
      <p>Whether you are traveling by car or bus you
        should have no trouble finding us. 
      </p>
      <a href="#">Find us</a>
    </div>
    <div class="feature-item">
      <i class="fa-solid fa-link"></i>
      <h3>Connect with us</h3>
      <p>Need to reach a person or department at CSHSC ?
        or provide feedback </p>
      <a href="#">Find how</a>
    </div>
    
   
  </section>





























<!------ the footer section -->





<section class="f-secon">
<footer>
    <div class="footer-container">
    
    
    <div class="footer-logo">
    <img src="/images /nj.png">
    </div>

    <div class="line-divider"></div>
    
    <div class="footer-contact">

        <ul class="footer-list">
         <li><a>Cura Solace Healthcare Centre</a></li>   
         <li><a>76 Stuart Street </a></li>   
         <li><a>Kingston Ontario </a></li>
         <li><a>K7L 2V7</a></li>
        </ul>

        <ul class="footer-list">
            <li><a>General Inquiries</a></li>   
            <li><a>613-548-3232  </a></li>   
            <li><a>613-549-6666 auto attendant  </a></li>
            <li><a>K7L 2V7</a></li>
           </ul>

    </div>

    <div class="line-divider"></div>
  

    <div class="footer-contact">

        <ul class="footer-list">
         <li><a>Our Toll Free Number</a></li>   
         <li><a>1-800-567-5722</a></li>   
        </ul>

        <ul class="footer-list">
            <li><a>Urgent Care Centre</a></li>   
            <li><a>613-546-1240 </a></li>   
            <li><a>Opens at 8:00 a.m. Closing hours vary. </a></li>
             <li><a>K7L 2V7</a></li>
           </ul>

    </div>


    <div class="line-divider"></div>

    <div class="footer-contact">

        <ul class="footer-list">
         <li><a>Cura Solace Healthcare Centre</a></li>   
         <li><a>76 Stuart Street </a></li>   
         <li><a>Kingston Ontario </a></li>
         <li><a>K7L 2V7</a></li>
        </ul>

        <ul class="footer-list">
            <li><a>General Inquiries</a></li>   
            <li><a>613-548-3232  </a></li>   
            <li><a>613-549-6666 auto attendant  </a></li>
            <li><a>K7L 2V7</a></li>
           </ul>

    </div>

    <div class="clearfix"></div>

      <!---- the social icon -->

      <div class="social-icon">

        <i class="fa-brands fa-instagram fa-2xl" style="color: #FFff;"></i>
        <i class="fa-brands fa-square-facebook fa-2xl" style="color: white;"></i>
        <i class="fa-brands fa-x-twitter fa-2xl" style="color: white;"></i>
        <i class="fa-brands fa-youtube fa-2xl" style="color: white;"></i>
    </div>

    <!---- the social icon ending -->




<!---- the image for assiocation-->


<div class="footer-icon-div">

<div class="footer-assio">

<img src="/images /Australian+Community+Aged+care+(4).jpg">

</div>



<div class="footer-assio">

    <img src="/images /Canadian-Home-Care-Association-logo.png">
      
      </div>



<div class="footer-assio">

  <img src="/images /assiociation 2.png">
    
    </div>


    <div class="footer-assio">

        <img src="/images /CaregiversNB_logo_BIL.png">
          
          </div>
      
         
</div>
<div class="clearfix"></div>
<div class="line-divider-2"></div>



<div class="footer-last-section-div">

    <div class="bach">
      <p>CSH  is located on the ancestral lands In Australia & Canada </p>
    
    </div>
    
    <div class="list-foot">
    <ul>
      <li><a>@ CuraSolace Healthcare Sciences Centre, 2025. All rights reserved.</a></li>
      <li><a>Auto Shift Fill</a></li>  
      <li><a>Board Portal</a></li>
      <li><a>Career Hub</a></li>   
      <li><a>Employee Self Service</a></li>
      <li><a>CSH Policies</a></li>
      <li><a>ServiceNow </a></li>
      <li><a>Terms and Conditions</a></li>
      <li><a>Webmail Access</a></li>
    </ul>
    </div>
    
    
    
    </div>
    
    </div>
    </footer>
</section>




</body>
</html>
<script src="hospi.js"></script>
