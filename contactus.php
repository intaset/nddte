<?php

$my_email = "info@nddte.com";

$name=$_POST['Name'];
$email=$_POST['Email'];
$message=$_POST['Message'];
$subject=$_POST['Subject'];
$headers = "From: " . $_POST['Email'];
$captcha = false;

// check if not robot
if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
$captcha = true;
$secret = '6LcY9g0TAAAAAOuI8CLRj9NYZWVlRLSNT6yBmudW';
//get verify response data
$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
$responseData = json_decode($verifyResponse);
if(!($responseData->success))
$errors[] = 'We could not verify your CAPTCHA entry. Please try again.';
else 
mail($my_email,$subject,$message,$headers);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="robots" content="noarchive">
<meta name="description" content="">
<meta name="keywords" content="nanoparticles, nanotubes, graphene, nanotechnology and coating, computational nanotechnology, self-assembly processes, thin films, nanocatalysis, nanofluids, nanoelectronics, nanomaterials, nanoparticles conference, nanotubes conference, graphene conference, nanotechnology and coating conference, computational nanotechnology conference, self-assembly processes conference, thin films conference, nanocatalysis conference, nanofluids conference, nanoelectronics conference, nanomaterials conference, nanotechnology and coating conference, nanotechnology conference, nanotechnology, characterization, characterization conference, Computational Nanotechnology, Graphene, Education, Marketing and Finance, Nano-measurement Devices, Nano-porous Materials, Nanocatalysis, Nanocomposites, Nanocrystals, Nanodevices, Nanoelectronics, Nanofluids, Nanomagnetics, Nanomaterials Applications, Nanomaterials Characterization, Nanomaterials Handling Techniques, Nanomaterials Storing Techniques, Nanooptics, Nanopackaging, Nanoparticles, Nanophotonics, Nanotechnology and Coating, Nanorobotics, Nanorods, Nanotubes, Polymer Nanomaterials, Quantum Dots, Self-assembly Processes, Sustainable Nano-manufacturing, Synthesis of Nanomaterials, Thin Films, Bionanocatalysis, Gene Delivery Systems, Nanobiomedicine, Nanobiomechanics, Nanobiosystems, Nanobio Based Devices, Nanobio Imaging, Nanobio Sensors, Nanotechnology and Agriculture, Nanotechnology and Drug Delivery, Self-assembly, Nanotechnology Modeling and Simulation, Cancer and Nanotechnology, Clinical Application of Nanotechnology, Gene Delivery Systems, Nanomedical Technologies, Nanotechnology and Biomedical Applications, Nanotechnology for Detection, Nanotechnology for Diagnosis, Nanotechnology and Drug Delivery, Nanotechnology for Imaging, Nanotechnology and Tissue Engineering, NanoPharmaceuticals, Detecting and Monitoring of Nanomaterials, Green Nanotechnology, Nanoenergy, Nanomaterials Toxicity, Nanotechnology and Education, Nanotechnology and Environmental Issues, Nanotechnology and Ethical Impacts, Nanotechnology and Health Issues, Nanotechnology and Safety Issues, Nanotechnology Regulations, Nanotechnology Standardization, Risk Assessment and Management, Engineering of Biointerfaces, Modeling and Simulation, Nanobiomechanics, Nanobiotechnologies, Nanocatalysis, Nanoelectronics, Nano-Graphene, Nanomaterials, Nanodevices: Fabrication, Characterization and Application, Nanomedical Applications: Drug Delivery, and Tissue Engineering, Nanotechnology and Agriculture, Nanotechnology and Coating, Nanotechnology and Education, Nanotechnology and Energy, Nanotechnology and Environment, Nanotechnology and Polymer, Nanotechnology, Products and Markets, Societal aspects of Nanotechnology: Ethics, Risk Assessment, Standardization, self assembly, drug delivery, gene delivery, modeling, simulation, DMS, Direct method simulation, monitoring of nanomaterials, detecting of nanomaterials, graphene, nanoparticle, nanotube, nanoscale, nanomaterial, nanofabrication, bucky ball, nanocrystal, quantum dot, bottom up, top down, molecular nanotechnology, fullerene, liposome, carbon nanotube, siingle wall, multi wall, dendrimer, nanopillar, nanorod, nanosheet, nanostructure, nanofiber, nanothread, magnetic nanoparticles, nanofoam, nanogel, Van der Waals, size distribution, SEM, TEM, sol gel, sol-gel, morphology, characterization, functionalization, nanocatalyst, nanocatalysis, nanocomposite, nanofluid, nanodevices, nanoporous, nanostructured, colloids, nano electronics, photonics, quantum, biosensors, nano robots, DNA nanotechnology, nanotoxicity, risk assessment, health risk, military and defense, construction, nanoelectronics, nanoenergy, thermoelectric, nanomanipulation, nanofabrication, nanoassemblies, nanomanufacturing, nanoparticles synthesis, nanomaterials synthesis, nanofluidic, nano metrology, SPM, scanning probe microscope, encapsulation, AFM, Transmission Electron Microscopy, Scanning Electron Microscopy, Atomic Force Microscopy, Photon Correlation Spectroscopy, Nanoparticle Surface Area Monitor, PCS, NSAM, X-Ray Diffraction, XRD, nanomaterials conference, fabrication of nanomaterials, nfc conference, international aset, nanomaterials, international fabrication company, icn conference, nanorobotics paper presentation, nano devices, nanomaterial characterization, characterization of nanomaterials, nfc conferences, nanodevices, fabrication information, nd international, aset international, Nano/medicine-bio, Nano-bio-systems, Nanoelectronics: Devices-SER, RTD, QD, Molecular, Memoristors, Nanoelectronics: Circuits and Architecture, Nanoelectronics: Graphene CNT and NWs, Green Nanotechnology, Nano-energy, Environmental sensor, Nano-materials safety, Piezo electric and Thermoelectric devices, Nanofabrication, Nanomanipulation, Nanomaterials: Characterization and Applications, Nanomaterials: Nanomaterial/ nanoparticles synthesis, Nanophotonics and Plasmonics, Nanorobotics and Nanoassembly, Nanosensors and Actuators, NEMS and Micro-to-nano-scale Bridging, Simulation and Modeling of Nanostructures and Nanodevices, Spintronics, Nanomaterials and Nanostructures, Nanoassemblies and Devices, Nanopackaging, 2D Atomic Crystal Materials, Applications to Micro/ Nano Manipulation, Nanomanufacturing, Rising Starts in Nanoelectronics and Microfluidics, Flexure-Based-Micro/nano Manipulators, Neuromorphic Cognitive Systems with Nanotechnology, Nanomanufacturing Process and System, Nanomaterials, Nanobiotechnology, Nanoelectronics, Nanophotonics, Computational Nanotechnology, Nanocharacterisation, Nanotechnology for Energy and Environment, Commercialisation, Safety and Societal Issues of Nanotechnology, Atoms and Molecular Computing, High spatial resolution spectroscopies under SPM probe, Graphene and 2D / Carbon nanotubes, Low dimensional materials (nanowires, clusters, quantum dots, etc.), Nanobiotechnologies and Nanomedicine, NanoChemistry, Nanofabrication tools and nanoscale integration, Nanomagnetism and Spintronics, Nanomaterials for Energy, NanoOptics / NanoPhotonics / Plasmonics / Nanophononics, Nanostructured and nanoparticle based materials, Nanotechnologies for Security and Defense, Risks-toxicity-regulations, Theory and modelling at the nanoscale, Topological Insulators, Advanced Applications in Nanoscience and Nanotechnology, Carbon Nanotubes and Biomolecules, Nanoelectronics, Nanosystems, Nanomechanics, Nanomanipulation, Nanomagnetism, Nanooptics and Nanophotonics, Nanowires, Nanofluidics, Nanobiotechnology, Nanoscale Science and Technology, Molecular Electronics, Quantum Devices, Quantum Electrodynamics of Nanosystems, Scanning Probe Microscopy/Spectroscopy and Related Instrumentation, Advances in Materials and Processing for Nanotechnology and Nanofabrication, Biological Interface, Bionanotechnologies, Carbon nanostructures and graphene, Engineered nanosystems, Functional materials, Inorganic hybrid materials, Magnetic materials, Metal-organic frameworks, Microscopy, Molecular materials, Nanofabrication and devices, Nanomedicine, Nanoparticles, Nanoscale Structures, Nanopore science, Optical materials and plasmonics, Organic Electronics, Physical Phenomena, Polymers, Porous materials, Quantum effects in solids, Self-assembly, Soft materials, Spintronics, Superconductivity, Topological insulator, Biohybrids and biomaterials, Functional hybrid nanomaterials, nanocomposites and their applications, Functional porous materials, Polymer chemists, physicists and engineers, Biomaterials chemists, physicists and engineers, Organic chemists, Inorganic chemists, Solid state chemists, Sol-gel chemists, Composites scientists, Colloid chemists and physicists, Zeolite, meso- and microporous materials scientists, Broad nano- and materials scientists, Nano and Biomaterials, Nanobiotechnology and Nanomedicine, Advanced Materials (Biomaterials, Inorganic-Organic Composites, etc), Nanoscience, Synthesis and Architecture of Nanomaterials, Micro and Nanoparticles, Nanotechnology and Applications, Recent developments in Nanotechnology and Nanoscience, Fullerenes, Carbon Nanotubes and Graphene, Materials Science and Engineering, Materials for Energy and Environment, Nanoelectronics and Biomedical Devices">
<title>NDDTE'18 - Contact Us</title>

<meta name="handheldfriendly" content="true">
<meta name="mobileoptimized" content="240">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="../css/ffhmt.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic|Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
<!--[if IE-9]><html lang="en" class="ie9"><![endif]-->

<script src="../js/modernizr.custom.63321.js"></script>
<script>
  (function() {
    var cx = '016656741306535874023:y7as1mei7la';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//www.google.com/cse/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
</head>

<body>
<nav id="slide-menu">
  <h1>NDDTE'18</h1>
  <ul>
    <li><a href="/">Home</a></li>
    <li><a href="../papers">Paper Submissions</a></li>
    <li><a href="../program">Program</a></li>
    <li><a href="../dates">Important Dates</a></li>
    <li><a href="../registration">Registration</a></li>
    <li><a href="../committee">Committee</a></li>
    <li><a href="../keynote">Keynotes</a></li>
    <li><a href="../sponsor">Sponsors</a></li>
    <li><a href="../venue">Venue</a></li>
    <li><a href="../accommodation">Accommodation</a></li>
    <li><a href="../symposium">Symposiums</a></li>
    <li><a href="#contact">Contact Us</a></li>
  </ul>
</nav>

<div id="content">
  <div class="desktop">
  <div class="cbp-af-header">
  <div class="cbp-af-inner">
    <a href="/"><img src="../img/logo.png" class="flex-logo"></a>
      <nav>
        <a href="/">Home</a><p class="dot">&middot;</p><a href="../papers">Paper Submission</a><p class="dot">&middot;</p><a href="../program">Program</a><p class="dot">&middot;</p><a href="../dates">Important Dates</a><p class="dot">&middot;</p><a href="../registration">Registration</a><p class="dot">&middot;</p><a href="../committee">Committee</a><p class="dot">&middot;</p><a href="../keynote">Keynotes</a><p class="dot">&middot;</p><a href="../sponsor">Sponsors</a><p class="dot">&middot;</p><a href="../venue">Venue</a><p class="dot">&middot;</p><a href="../accommodation">Accommodation</a><p class="dot">&middot;</p><a href="../symposium">Symposiums</a><p class="dot">&middot;</p><a href="#contact">Contact Us</a>
    </nav>
  </div>
</div>
</div>

  <header>
    <div class="mobile">
      <div class="cbp-af-header">
  <div class="cbp-af-inner">
    <div class="unit unit-s-3-4 unit-m-1-3 unit-l-1-3">
          <a href="/"><img src="../img/logo.png" class="flex-logo"></a>
      </div>
      <div class="unit unit-s-1-3 unit-m-2-3 unit-m-2-3-1 unit-l-2-3">
          <div class="menu-trigger"></div>
      </div>
  </div>
</div>
        <div class="bg">
          <h1>3<sup>rd</sup> International Conference on Nanomedicine,<br>Drug Delivery, and Tissue Engineering (NDDTE'18)</h1>
          <p class="subhead">April 10 - 12, 2018 | Budapest, Hungary</p>

          <a href="../papers" class="bg-link">Paper Submission</a> <p class="dot">&middot;</p> <a href="../dates" class="bg-link">Important Dates</a> <p class="dot">&middot;</p> <a href="../registration" class="bg-link">Registration</a>

        <div class="searchbox grid">
        <div class="unit unit-s-1 unit-m-3-4 unit-l-3-4">
          <div class="unit unit-s-1 unit-m-1-4-2 unit-l-1-4-2">
            <p class="body">Search:</p> 
          </div>
 <div class="unit unit-s-3-4 unit-m-3-4 unit-l-3-4">
        <gcse:searchbox-only resultsUrl="../results"></gcse:searchbox-only>
  </div>
</div>
</div><br>

<p class="body" style="text-align:center!important;">NDDTE'18 is part of the <b>3<sup>rd</sup> World Congress on Recent Advances in Nanotechnology (RAN'18)</b>. For more information about the congress, please visit the website here: <a href="http://rancongress.com/" class="body-link">www.rancongress.com</a>.</p>
        </div>
    </div>

    <div class="desktop">
      <div class="grid">
        <div class="unit unit-s-1 unit-m-1 unit-l-1">
        <div class="bg-img">
          <img src="../img/header.jpg" class="flex-img" alt="Header">
        </div>

        <div class="bg">
          <h1>3<sup>rd</sup> International Conference on Nanomedicine,<br>Drug Delivery, and Tissue Engineering (NDDTE'18)</h1>
          <p class="subhead">April 10 - 12, 2018 | Budapest, Hungary</p>

          <a href="../papers" class="bg-link">Paper Submission</a> <p class="dot">&middot;</p> <a href="../dates" class="bg-link">Important Dates</a> <p class="dot">&middot;</p> <a href="../registration" class="bg-link">Registration</a>

        <div class="searchbox grid">
        <div class="unit unit-s-1 unit-m-3-4 unit-l-3-4">
          <div class="unit unit-s-1 unit-m-1-4-2 unit-l-1-4-2">
            <p class="body">Search:</p> 
          </div>
 <div class="unit unit-s-3-4 unit-m-3-4 unit-l-3-4">
        <gcse:searchbox-only resultsUrl="../results"></gcse:searchbox-only>
  </div>
</div>
</div><br>

<p class="body" style="text-align:center!important; color: #FFF!important;">NDDTE'18 is part of the <b>3<sup>rd</sup> World Congress on Recent Advances in Nanotechnology (RAN'18)</b>.<br>For more information about the congress, please visit the website here: <a href="http://rancongress.com/" class="body-link">www.rancongress.com</a>.</p>
        </div>
        </div> 
      </div>
    </div>
  </header>

  <div class="grid main-content">
  <div class="unit unit-s-1 unit-m-1-3-1 unit-l-1-3-1">
    <div class="unit-spacer">
      <h2>Announcements</h2>
      <div id="main-slider" class="liquid-slider">
    <div>
      <h2 class="title">1</h2>
       <p class="bold">NDDTE 2018:</p>
      <p class="body">NDDTE 2018 will  be held in Budapest, Hungary on April 10 - 12, 2018 at the Novotel Budapest Centrum.</p>

      <p class="bold">RAN'18 Workshop</p>
      <!--  <p class="body">International ASET Inc. is proud to present <b>Dr. Vladimir A. Baulin</b> (Universitat Rovira I Virgili, Spain) and <b>Prof. Elena P. Ivanova</b> (Swinburne University of Technology, Australia) as organizers of a dedicated workshop for the 2nd World Congress on Recent Advances in Nanotechnology (RAN'18).</p>

      <cenet><p class="body" style="text-align: center!important;"><b>Topic of Workshop:</b> <i>Workshop on Nanostructured Surfaces</i></p>

      <p class="body">The workshop will be held on <b>April 4th, 2017</b>. Registration for the workshop will be <i>121 EURs (VAT included)</i> and separate from the main conferences. Workshop attendees will receive a certificate of participation. For registration, please visit: <a href="../registration" class="body-link">here.</a></p>

      <p class="body">For more information about the workshop and the speaker, please visit:  <a href="http://rancongress.com/#workshop" class="body-link" target="_blank">here.</a></p>
      <br>
      <p class="body" style="text-align: center!important;"><a class="body-link" href="http://rancongress.com/RAN17_Workshop.pdf" target="_blank"><b>Workshop Flyer</b></a></p>
      <br> -->
      <p class="body">As per popular request, the organizing committee has decided to extend the NDDTE'18 Conference to three days (April 10 - 12, 2017). The new high-level schedule is as follows:</p>

      <ul>
        <li>Day 1: Workshop(s) and Registration</li>
        <li>Day 2: Main Track Conference Sessions</li>
        <li>Day 3: Main Track Conference Sessions and Gala dinner or Cruise tour</li>
      </ul>
      
      <p class="body">Registration for the workshop will be <!-- 121 EURs (VAT included) and  -->separate from the main conferences. Workshop attendees will receive a certificate of participation. For registration, please visit: <a href="../registration" class="body-link">here</a>.</p>
      <br>
    <p class="bold">Poster Board Dimensions:</p>
      <p class="body">Authors presenting via poster boards are to be informed that poster boards are 110 cm height and 70 cm width.</p> 
    </div>          
    <div>
      <h2 class="title">2</h2>
      <p class="bold">Best Paper Award:</p>
      <p class="body">Two best paper awards will be conferred to author(s) of the papers that receive the highest rank during the peer-review and by the respected session chairs. Please visit <a href="../papers" class="body-link">Paper Submission</a> for more information.</p>
    </div>
  <div>
      <h2 class="title">3</h2>
      <p class="bold">Propose Exhibits, Workshops &amp; More</p>
      <p class="body">NDDTE attracts a wide range of researchers in the field of nanomedicine, drug delivery, and tissue engineering. As a prominent company in the field of nanomedicine, drug delivery, and tissue engineering, we would like to offer you an exhibit at NDDTE. Please visit <a href="../events" class="body-link">Events</a> for more information.</p>
    </div>
  </div>
    </div>
  </div>

<div class="unit unit-s-1 unit-m-1-4-1 unit-l-1-4-1">
  <div class="unit-spacer content">
    <p class="body">We have received your message and we will try our best to get back to you within the next 48 hours.<br><br>
    Thank you for your interest in NDDTE'18.</p>
  </div>
</div>

  <div class="unit unit-s-1 unit-m-1-3-1 unit-l-1-3-1">
  <div class="unit-spacer">
    <section class="main">
        <div class="custom-calendar-wrap">
          <div id="custom-inner" class="custom-inner">
            <div class="custom-header clearfix">
              <nav>
                <span id="custom-prev" class="custom-prev"></span>
                <span id="custom-next" class="custom-next"></span>
              </nav>
              <h2 id="custom-month" class="custom-month"></h2>
              <h3 id="custom-year" class="custom-year"></h3>
            </div>
            <div id="calendar" class="fc-calendar-container"></div>
          </div>
        </div>
      </section>
  <h2>Upcoming Dates</h2>

<div class="grid events">
<div class="unit unit-s-1 unit-m-1-4 unit-l-1-4">
  <div class="date">
    <!-- <div class="past">Feb. 10, 2017</div> --> Oct. 12, 2017
  </div>
</div>

<div class="unit unit-s-1 unit-m-3-4 unit-l-3-4">
  <div class="unit-spacer">
    <!-- <div class="past past-text">Final Regular Registration</div>  -->Paper Submission Deadline
  </div>
</div>
</div>

<div class="grid events">
<div class="unit unit-s-1 unit-m-1-4 unit-l-1-4">
  <div class="date">
    <!-- <div class="past">Feb. 10, 2017</div> --> Nov. 2, 2017
  </div>
</div>

<div class="unit unit-s-1 unit-m-3-4 unit-l-3-4">
  <div class="unit-spacer">
    <!-- <div class="past past-text">Final Regular Registration</div>  -->Notification to Authors
  </div>
</div>
</div>

<div class="grid events">
<div class="unit unit-s-1 unit-m-1-4 unit-l-1-4">
  <div class="date">
    <!-- <div class="past">Feb. 10, 2017</div> --> Nov. 16, 2017
  </div>
</div>

<div class="unit unit-s-1 unit-m-3-4 unit-l-3-4">
  <div class="unit-spacer">
    <!-- <div class="past past-text">Final Regular Registration</div>  -->Early-Bird Registration
  </div>
</div>
</div>


  </div>
  </div>
</div>

<footer id="contact">
  <div class="grid">
  <div class="unit unit-s-1 unit-m-1-3 unit-l-1-3">
  <div class="unit-spacer">
    <h2>Contact Us</h2>
    <p class="body">International ASET Inc.<br>
    Unit No. 417, 1376 Bank St.<br>
    Ottawa, Ontario, Canada<br>
    Postal Code: K1H 7Y3<br>
    +1-613-695-3040<br>
    <a href="mailto:info@nddte.com">info@nddte.com</a></p>
    </div>
  </div>

  <div class="unit unit-s-1 unit-m-2-3 unit-l-2-3 contact">
  <div class="unit-spacer">
  <p class="body">For questions or comments regarding NDDTE'18, please fill out the form below:</p>

    <form action="../contactus.php" method="post" enctype="multipart/form-data" name="ContactForm">
  
  <table border="0" class="contact">
    <tbody>
      <tr>
        <td class="label">Name:</td>
        <td class="text"><span id="sprytextfield1">
              <input name="Name" type="text" id="Name" size="40" autocomplete="off">

              <span class="textfieldRequiredMsg">A value is required.</span></span></td>
        </tr>

        <tr>
            <td class="label">Email:</td>
            <td class="text"><span id="sprytextfield2">
            <input name="Email" type="text" id="Email" size="40" autocomplete="off">
            <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
          </tr>

          <tr>
            <td class="label">Confirm Email:</td>
             <td class="text"><span id="spryconfirm4">
              <input name="Confirm Email" type="text" id="Confirm Email" size="40" autocomplete="off">
              <span class="confirmRequiredMsg">A value is required.</span><span class="confirmInvalidMsg">Emails don't match.</span></span></td>
          </tr>

          <tr>
            <td class="label">Subject:</td>
            <td class="text"><span id="sprytextfield3">
              <input name="Subject" type="text" id="Subject" size="40" autocomplete="off">
              <span class="textfieldRequiredMsg">A value is required.</span></span></td>
          </tr>

          <tr>
            <td valign="top" class="label">Message:</td>
            <td class="text"><span id="sprytextarea1">
              <textarea name="Message" id="Message" cols="31" rows="10" autocomplete="off"></textarea>
              <span class="textareaRequiredMsg">A value is required.</span></span>
              <center>
        <input type="submit" name="Submit" value="Submit" accept="image/jpeg">
        <input type="reset" name="Reset" value="Reset"></center></td>
          </tr>

        </tbody></table><br>

        
</form>
    </div>
  </div>
  </div>
</footer> 

<div class="copyright">
  <a href="http://international-aset.com">International ASET Inc.</a> | <a href="http://international-aset.com/phplistpublic/?p=subscribe&id=1">Subscribe</a> | <a href="../terms">Terms of Use</a> | <a href="../sitemap">Sitemap</a>
  <p class="body">© Copyright <script>document.write(new Date().getFullYear())</script>, International ASET Inc. – All Rights Reserved.</p>
  <p class="copyright1">Have any feedback? Please provide them here: <script>var refURL = window.location.protocol + "//" + window.location.host + window.location.pathname; document.write('<a href="http://international-aset.com/feedback/?refURL=' + refURL+'" class="body-link">Feedback</a>');</script></p>
</div>
</div>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src="../js/jquery.nicescroll.min.js"></script>
  <script type="text/javascript" src="../js/jquery.calendario.js"></script>
    <script type="text/javascript" src="../js/data.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js"></script>
  <script src="../js/jquery.liquid-slider.min.js"></script>  
  <script src="../js/classie.js"></script>
    <script src="../js/cbpAnimatedHeader.min.js"></script>
    <script src="../js/SpryValidationSelect.js" type="text/javascript"></script>

    <script src="../js/SpryValidationTextField.js" type="text/javascript"></script>

    <script src="../js/SpryValidationConfirm.js" type="text/javascript"></script>

    <script src="../js/SpryValidationCheckbox.js" type="text/javascript"></script>
    <script src="../js/SpryValidationTextarea.js" type="text/javascript"></script>

    <script type="text/javascript">
/*
  Slidemenu
*/
(function() {
  var $body = document.body
  , $menu_trigger = $body.getElementsByClassName('menu-trigger')[0];

  if ( typeof $menu_trigger !== 'undefined' ) {
    $menu_trigger.addEventListener('click', function() {
      $body.className = ( $body.className == 'menu-active' )? '' : 'menu-active';
    });
  }

}).call(this);
</script>

    <script type="text/javascript">
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1", {isRequired:false});

var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");

var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");

var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");

var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");

var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2", {invalidValue:"-1"});

var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5", "email");

var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");

var spryselect3 = new Spry.Widget.ValidationSelect("spryselect3", {invalidValue:"-1", isRequired:false});

var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6", "date", {format:"mm/dd/yyyy"});

var sprycheckbox1 = new Spry.Widget.ValidationCheckbox("sprycheckbox1");
</script>


    <script type="text/javascript"> 
      $(function() {
      
        var transEndEventNames = {
            'WebkitTransition' : 'webkitTransitionEnd',
            'MozTransition' : 'transitionend',
            'OTransition' : 'oTransitionEnd',
            'msTransition' : 'MSTransitionEnd',
            'transition' : 'transitionend'
          },
          transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
          $wrapper = $( '#custom-inner' ),
          $calendar = $( '#calendar' ),
          cal = $calendar.calendario( {
            onDayClick : function( $el, $contentEl, dateProperties ) {

              if( $contentEl.length > 0 ) {
                showEvents( $contentEl, dateProperties );
              }

            },
            caldata : codropsEvents,
            displayWeekAbbr : true
          } ),
          $month = $( '#custom-month' ).html( cal.getMonthName() ),
          $year = $( '#custom-year' ).html( cal.getYear() );

        $( '#custom-next' ).on( 'click', function() {
          cal.gotoNextMonth( updateMonthYear );
        } );
        $( '#custom-prev' ).on( 'click', function() {
          cal.gotoPreviousMonth( updateMonthYear );
        } );

        function updateMonthYear() {        
          $month.html( cal.getMonthName() );
          $year.html( cal.getYear() );
        }

        // just an example..
        function showEvents( $contentEl, dateProperties ) {

          hideEvents();
          
          var $events = $( '<div id="custom-content-reveal" class="custom-content-reveal"><h4>Events for ' + dateProperties.monthname + ' ' + dateProperties.day + ', ' + dateProperties.year + '</h4></div>' ),
            $close = $( '<span class="custom-content-close"></span>' ).on( 'click', hideEvents );

          $events.append( $contentEl.html() , $close ).insertAfter( $wrapper );
          
          setTimeout( function() {
            $events.css( 'top', '0%' );
          }, 25 );

        }
        function hideEvents() {

          var $events = $( '#custom-content-reveal' );
          if( $events.length > 0 ) {
            
            $events.css( 'top', '100%' );
            Modernizr.csstransitions ? $events.on( transEndEventName, function() { $( this ).remove(); } ) : $events.remove();

          }

        }
      
      });
    </script>

        <script>
    $('#main-slider').liquidSlider();
  </script>
  <script>
(function($){
        $(window).load(function(){
            $("html").niceScroll();
        });
    })(jQuery);
</script>
</body>
</html>