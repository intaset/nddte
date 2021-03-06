<?php
$my_email = "registration@nddte.com";
$errors = array();

// Remove $_COOKIE elements from $_REQUEST.
if(count($_COOKIE)){foreach(array_keys($_COOKIE) as $value){unset($_REQUEST[$value]);}}

// Check referrer is from same site.
if(!(isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER']) && stristr($_SERVER['HTTP_REFERER'],$_SERVER['HTTP_HOST']))){$errors[] = "You must enable referrer logging to use the form";}

// Display any errors and exit if errors exist.
if(count($errors)){foreach($errors as $value){print "$value<br>";} exit;}
if(!defined("PHP_EOL")){define("PHP_EOL", strtoupper(substr(PHP_OS,0,3) == "WIN") ? "\r\n" : "\n");}

// Build message.
function build_message($request_input){
  if(!isset($message_output)){
    $message_output ="";
  }
  if(!is_array($request_input)){
    $message_output = $request_input;
  }else{
    foreach($request_input as $key => $value){
      if(!empty($value)){
        if(!is_numeric($key)){
          $message_output .= str_replace("_"," ",ucfirst($key)).": ".build_message($value).PHP_EOL.PHP_EOL;
        }else{
          $message_output .= build_message($value).", ";
        }
      }
    }
  }
  return rtrim($message_output,", ");
}

// Defining the Variables

$date = date("Y-m-d,h_i_s A");

$message = build_message($_REQUEST);

$message = 'Dear Colleague,

Thank you for registering for NDDTE 2018. If you have requested any official letters, please allow up to 5 business days to receive your documents.

If you are an author, please make sure to send us the final version of your paper and a signed copyright form via email to info@nddte.com. You can find the copyright form here: https://nddte.com/papers. Please note that failing to do so may result in an unsuccessful process of your registration.

To reserve a room with a DISCOUNTED price, please fill out the provided booking form here: https://nddte.com/accommodation/#Novotel

You can find your registration details below. If there are any errors in the information you have provided, please write an email to us at registration@nddte.com mentioning the correct information. Please note that you SHOULD NOT refill the form.

---

' . $message;

$message = $message . 'File uploaded: ';

$message = $message . $date.'_'.$_FILES['file']['name'];

$message = $message . PHP_EOL.PHP_EOL."-- ".PHP_EOL."";

$message = stripslashes($message);

$subject = "Registration Details for " . $_REQUEST['email'];

$headers = "From: " . $_REQUEST['email'];

$your_email = $_REQUEST['email'];

$your_subject = "Your Registration Details for NDDTE'18";

$your_headers = "From: NDDTE'18 <" . $my_email . ">";

if ((($_FILES["file"]["type"] == "image/gif")

|| ($_FILES["file"]["type"] == "image/jpeg")

|| ($_FILES["file"]["type"] == "image/png")

|| ($_FILES["file"]["type"] == "image/jpg")

|| ($_FILES["file"]["type"] == "image/tif"))

&& ($_FILES["file"]["size"] < 20000000))

  {

  if ($_FILES["file"]["error"] > 0)

    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
      move_uploaded_file($_FILES["file"]["tmp_name"],"receipts/" . $_FILES["file"]["name"]);
      rename("receipts/".$_FILES['file']['name'],"receipts/".$date.'_'.$_FILES['file']['name']);
  $filename = $date.'_'.$_FILES['file']['name'];
    }
  }
else
  {
  die("The file you have selected for upload is invalid. <br />
  Please make sure the file you are trying to upload is an image (.jpg, .jpeg, .png, .gif, .tif) <br />
  No other file types are allowed.");
  }

mail($my_email,$subject,$message,$headers);
mail($your_email,$your_subject,$message,$your_headers);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="robots" content="noarchive">
<meta name="description" content="">
<meta name="keywords" content="nanoparticles, nanotubes, graphene, nanotechnology and coating, computational nanotechnology, self-assembly processes, thin films, nanocatalysis, nanofluids, nanoelectronics, nanomaterials, nanoparticles conference, nanotubes conference, graphene conference, nanotechnology and coating conference, computational nanotechnology conference, self-assembly processes conference, thin films conference, nanocatalysis conference, nanofluids conference, nanoelectronics conference, nanomaterials conference, nanotechnology and coating conference, nanotechnology conference, nanotechnology, characterization, characterization conference, Computational Nanotechnology, Graphene, Education, Marketing and Finance, Nano-measurement Devices, Nano-porous Materials, Nanocatalysis, Nanocomposites, Nanocrystals, Nanodevices, Nanoelectronics, Nanofluids, Nanomagnetics, Nanomaterials Applications, Nanomaterials Characterization, Nanomaterials Handling Techniques, Nanomaterials Storing Techniques, Nanooptics, Nanopackaging, Nanoparticles, Nanophotonics, Nanotechnology and Coating, Nanorobotics, Nanorods, Nanotubes, Polymer Nanomaterials, Quantum Dots, Self-assembly Processes, Sustainable Nano-manufacturing, Synthesis of Nanomaterials, Thin Films, Bionanocatalysis, Gene Delivery Systems, Nanobiomedicine, Nanobiomechanics, Nanobiosystems, Nanobio Based Devices, Nanobio Imaging, Nanobio Sensors, Nanotechnology and Agriculture, Nanotechnology and Drug Delivery, Self-assembly, Nanotechnology Modeling and Simulation, Cancer and Nanotechnology, Clinical Application of Nanotechnology, Gene Delivery Systems, Nanomedical Technologies, Nanotechnology and Biomedical Applications, Nanotechnology for Detection, Nanotechnology for Diagnosis, Nanotechnology and Drug Delivery, Nanotechnology for Imaging, Nanotechnology and Tissue Engineering, NanoPharmaceuticals, Detecting and Monitoring of Nanomaterials, Green Nanotechnology, Nanoenergy, Nanomaterials Toxicity, Nanotechnology and Education, Nanotechnology and Environmental Issues, Nanotechnology and Ethical Impacts, Nanotechnology and Health Issues, Nanotechnology and Safety Issues, Nanotechnology Regulations, Nanotechnology Standardization, Risk Assessment and Management, Engineering of Biointerfaces, Modeling and Simulation, Nanobiomechanics, Nanobiotechnologies, Nanocatalysis, Nanoelectronics, Nano-Graphene, Nanomaterials, Nanodevices: Fabrication, Characterization and Application, Nanomedical Applications: Drug Delivery, and Tissue Engineering, Nanotechnology and Agriculture, Nanotechnology and Coating, Nanotechnology and Education, Nanotechnology and Energy, Nanotechnology and Environment, Nanotechnology and Polymer, Nanotechnology, Products and Markets, Societal aspects of Nanotechnology: Ethics, Risk Assessment, Standardization, self assembly, drug delivery, gene delivery, modeling, simulation, DMS, Direct method simulation, monitoring of nanomaterials, detecting of nanomaterials, graphene, nanoparticle, nanotube, nanoscale, nanomaterial, nanofabrication, bucky ball, nanocrystal, quantum dot, bottom up, top down, molecular nanotechnology, fullerene, liposome, carbon nanotube, siingle wall, multi wall, dendrimer, nanopillar, nanorod, nanosheet, nanostructure, nanofiber, nanothread, magnetic nanoparticles, nanofoam, nanogel, Van der Waals, size distribution, SEM, TEM, sol gel, sol-gel, morphology, characterization, functionalization, nanocatalyst, nanocatalysis, nanocomposite, nanofluid, nanodevices, nanoporous, nanostructured, colloids, nano electronics, photonics, quantum, biosensors, nano robots, DNA nanotechnology, nanotoxicity, risk assessment, health risk, military and defense, construction, nanoelectronics, nanoenergy, thermoelectric, nanomanipulation, nanofabrication, nanoassemblies, nanomanufacturing, nanoparticles synthesis, nanomaterials synthesis, nanofluidic, nano metrology, SPM, scanning probe microscope, encapsulation, AFM, Transmission Electron Microscopy, Scanning Electron Microscopy, Atomic Force Microscopy, Photon Correlation Spectroscopy, Nanoparticle Surface Area Monitor, PCS, NSAM, X-Ray Diffraction, XRD, nanomaterials conference, fabrication of nanomaterials, nfc conference, international aset, nanomaterials, international fabrication company, icn conference, nanorobotics paper presentation, nano devices, nanomaterial characterization, characterization of nanomaterials, nfc conferences, nanodevices, fabrication information, nd international, aset international, Nano/medicine-bio, Nano-bio-systems, Nanoelectronics: Devices-SER, RTD, QD, Molecular, Memoristors, Nanoelectronics: Circuits and Architecture, Nanoelectronics: Graphene CNT and NWs, Green Nanotechnology, Nano-energy, Environmental sensor, Nano-materials safety, Piezo electric and Thermoelectric devices, Nanofabrication, Nanomanipulation, Nanomaterials: Characterization and Applications, Nanomaterials: Nanomaterial/ nanoparticles synthesis, Nanophotonics and Plasmonics, Nanorobotics and Nanoassembly, Nanosensors and Actuators, NEMS and Micro-to-nano-scale Bridging, Simulation and Modeling of Nanostructures and Nanodevices, Spintronics, Nanomaterials and Nanostructures, Nanoassemblies and Devices, Nanopackaging, 2D Atomic Crystal Materials, Applications to Micro/ Nano Manipulation, Nanomanufacturing, Rising Starts in Nanoelectronics and Microfluidics, Flexure-Based-Micro/nano Manipulators, Neuromorphic Cognitive Systems with Nanotechnology, Nanomanufacturing Process and System, Nanomaterials, Nanobiotechnology, Nanoelectronics, Nanophotonics, Computational Nanotechnology, Nanocharacterisation, Nanotechnology for Energy and Environment, Commercialisation, Safety and Societal Issues of Nanotechnology, Atoms and Molecular Computing, High spatial resolution spectroscopies under SPM probe, Graphene and 2D / Carbon nanotubes, Low dimensional materials (nanowires, clusters, quantum dots, etc.), Nanobiotechnologies and Nanomedicine, NanoChemistry, Nanofabrication tools and nanoscale integration, Nanomagnetism and Spintronics, Nanomaterials for Energy, NanoOptics / NanoPhotonics / Plasmonics / Nanophononics, Nanostructured and nanoparticle based materials, Nanotechnologies for Security and Defense, Risks-toxicity-regulations, Theory and modelling at the nanoscale, Topological Insulators, Advanced Applications in Nanoscience and Nanotechnology, Carbon Nanotubes and Biomolecules, Nanoelectronics, Nanosystems, Nanomechanics, Nanomanipulation, Nanomagnetism, Nanooptics and Nanophotonics, Nanowires, Nanofluidics, Nanobiotechnology, Nanoscale Science and Technology, Molecular Electronics, Quantum Devices, Quantum Electrodynamics of Nanosystems, Scanning Probe Microscopy/Spectroscopy and Related Instrumentation, Advances in Materials and Processing for Nanotechnology and Nanofabrication, Biological Interface, Bionanotechnologies, Carbon nanostructures and graphene, Engineered nanosystems, Functional materials, Inorganic hybrid materials, Magnetic materials, Metal-organic frameworks, Microscopy, Molecular materials, Nanofabrication and devices, Nanomedicine, Nanoparticles, Nanoscale Structures, Nanopore science, Optical materials and plasmonics, Organic Electronics, Physical Phenomena, Polymers, Porous materials, Quantum effects in solids, Self-assembly, Soft materials, Spintronics, Superconductivity, Topological insulator, Biohybrids and biomaterials, Functional hybrid nanomaterials, nanocomposites and their applications, Functional porous materials, Polymer chemists, physicists and engineers, Biomaterials chemists, physicists and engineers, Organic chemists, Inorganic chemists, Solid state chemists, Sol-gel chemists, Composites scientists, Colloid chemists and physicists, Zeolite, meso- and microporous materials scientists, Broad nano- and materials scientists, Nano and Biomaterials, Nanobiotechnology and Nanomedicine, Advanced Materials (Biomaterials, Inorganic-Organic Composites, etc), Nanoscience, Synthesis and Architecture of Nanomaterials, Micro and Nanoparticles, Nanotechnology and Applications, Recent developments in Nanotechnology and Nanoscience, Fullerenes, Carbon Nanotubes and Graphene, Materials Science and Engineering, Materials for Energy and Environment, Nanoelectronics and Biomedical Devices">
<title>NDDTE'18 - Registration Form Filled!</title>

<meta name="handheldfriendly" content="true">
<meta name="mobileoptimized" content="240">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="../css/style.css" rel="stylesheet">
<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700|Roboto:400,400i,700" rel="stylesheet">
<link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
<!--[if IE-9]><html lang="en" class="ie9"><![endif]-->
<script src='https://www.google.com/recaptcha/api.js'></script>
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
    <li><a href="../papers">Submissions</a></li>
    <li><a href="../program">Program</a></li>
    <li><a href="../dates">Important Dates</a></li>
    <li><a href="../registration">Registration</a></li>
    <li><a href="../committee">Committee</a></li>
    <li><a href="../keynote">Keynotes</a></li>
    <li><a href="../venue">Venue</a></li>
    <li><a href="../accommodation">Accommodation</a></li>
    <li><a href="../past-events">Past Events</a></li>
    <li><a href="#contact">Contact</a></li>
  </ul>
</nav>

<div id="content">
  <div class="desktop">
  <div class="cbp-af-header">
  <div class="cbp-af-inner">
    <a href="/"><img src="../img/logo.png" class="flex-logo"></a>
      <nav>
        <a href="/">Home</a><p class="dot">&middot;</p><a href="../papers">Submissions</a><p class="dot">&middot;</p><a href="../program">Program</a><p class="dot">&middot;</p><a href="../dates">Important Dates</a><p class="dot">&middot;</p><a href="../registration">Registration</a><p class="dot">&middot;</p><a href="../committee">Committee</a><p class="dot">&middot;</p><a href="../keynote">Keynotes</a><p class="dot">&middot;</p><a href="../venue">Venue</a><p class="dot">&middot;</p><a href="../accommodation">Accommodation</a><p class="dot">&middot;</p><a href="../past-events">Past Events</a><p class="dot">&middot;</p><a href="#contact">Contact</a>
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

          <a href="../papers" class="bg-link">Submissions</a> <p class="dot">&middot;</p> <a href="../dates" class="bg-link">Important Dates</a> <p class="dot">&middot;</p> <a href="../registration" class="bg-link">Registration</a>

        <div class="searchbox grid">
        <div class="unit unit-s-1 unit-m-3-4 unit-l-3-4">
          <div class="unit unit-s-1 unit-m-1-4-2 unit-l-1-4-2">
            <p class="body">Search:</p> 
          </div>
 <div class="unit unit-s-3-4 unit-m-3-4 unit-l-3-4">
        <gcse:searchbox-only resultsUrl="../results"></gcse:searchbox-only>
  </div>
</div>
</div>


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

          <a href="../papers" class="bg-link">Submissions</a> <p class="dot">&middot;</p> <a href="../dates" class="bg-link">Important Dates</a> <p class="dot">&middot;</p> <a href="../registration" class="bg-link">Registration</a>

        <div class="searchbox grid">
        <div class="unit unit-s-1 unit-m-3-4 unit-l-3-4">
          <div class="unit unit-s-1 unit-m-1-4-2 unit-l-1-4-2">
            <p class="body">Search:</p> 
          </div>
 <div class="unit unit-s-3-4 unit-m-3-4 unit-l-3-4">
        <gcse:searchbox-only resultsUrl="../results"></gcse:searchbox-only>
  </div>
</div>
</div>


        </div>
        </div> 
      </div>
    </div>
  </header>

  <div class="grid main-content">
  <div class="unit unit-s-1 unit-m-1-3-1 unit-l-1-3-1">
    <div class="unit-spacer">
      
    </div>
  </div>

<div class="unit unit-s-1 unit-m-1-4-1 unit-l-1-4-1">
  <div class="unit-spacer content">
    <p class="body">Thank you for filling out the registration form. You should receive an email with your information. Please keep this email for your reference.</p>

    <p class="body">If you do not receive an email, <strong>please check your SPAM folder</strong>.</p>

  <p class="body">If you have requested any official invitation letters, please allow up to 5 business days to receive your documents.</p> 

    <p class="body">If there are any problems in the information you have filled out, please write an email to us at <a href="mailto:registration@nddte.com" class="body-link">registration@nddte.com</a> mentioning the mistakes made. Please note that you SHOULD NOT refill the form.</p>

  <p class="body">We are looking forward to seeing you at NDDTE'18!</p>
  </div>
</div>

  <div class="unit unit-s-1 unit-m-1-3-1 unit-l-1-3-1">
<div class="unit-spacer">

  </div>
  </div>
</div>

<footer id="contact">
  <div class="grid">
  <div class="unit unit-s-1 unit-m-1-3 unit-l-1-3">
  <div class="unit-spacer">
    <h2>Contact Us</h2>
    <p class="body">International ASET Inc.<br>
    Unit No. 104, 2442 St. Joseph Blvd.<br>
    Orl&eacute;ans, Ontario, Canada<br>
    Postal Code: K1C 1G1<br>
    +1-613-834-9999<br>
    <a href="mailto:info@nndte.com">info@nddte.com</a></p>
    </div>
  </div>

  <div class="unit unit-s-1 unit-m-2-3 unit-l-2-3 contact">
  <div class="unit-spacer">
  <p class="body">For questions or comments regarding NDDTE'18, please fill out the form below:</p>

   <form action="../contactus.php" method="post" enctype="multipart/form-data" name="ContactForm" class="cf">
  <div class="half left cf">
    <input style="margin-bottom:0.85em" type="text" name="Name" id="Name" placeholder="Name" required>
    <input style="margin-bottom:0.85em" type="email" name="Email" id="Email" placeholder="Email address" required>
    <input type="text" name="Subject" id="Subject" placeholder="Subject" required>
  </div>
  <div class="half right cf">
    <textarea name="Message" type="text" rows="5" name="Message" id="Message" placeholder="Message" required></textarea>
  </div><br><br>
  <center class="full right cf"><div class="g-recaptcha" data-sitekey="6LcY9g0TAAAAAIwIfY4vJzVX0ehN29_EX4g6vANn"></div></center>
  <div class="cf">
  <center><div class="full right cf"><input type="submit" name="Submit" value="Submit">
    <input type="reset" name="Reset" value="Reset"></center></div>
</div></div></form>

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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
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
