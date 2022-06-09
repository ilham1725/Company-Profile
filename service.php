<?php include 'header2.php'; ?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<style>
    :root {
  --surface-color: #fff;
  --curve: 40;
}

* {
  box-sizing: ;
}

body {
  font-family: 'Noto Sans JP', sans-serif;
  background-color: #fef8f8;
}

.cards {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 2rem;
  margin: 4rem 5vw;
  padding: 0;
  list-style-type: none;
}

.card {
  position: relative;
  display: block;
  height: 100%;  
  border-radius: calc(var(--curve) * 1px);
  overflow: hidden;
  text-decoration: none;
}

.card__image {      
  width: 100%;
  height: auto;
}

.card__overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 1;      
  border-radius: calc(var(--curve) * 1px);    
  background-color: var(--surface-color);      
  transform: translateY(100%);
  transition: .2s ease-in-out;
}

.card:hover .card__overlay {
  transform: translateY(0);
}

.card__header {
  position: relative;
  display: flex;
  align-items: center;
  gap: 2em;
  padding: 2em;
  border-radius: calc(var(--curve) * 1px) 0 0 0;    
  background-color: var(--surface-color);
  transform: translateY(-100%);
  transition: .2s ease-in-out;
}

.card__arc {
  width: 80px;
  height: 80px;
  position: absolute;
  bottom: 100%;
  right: 0;      
  z-index: 1;
}

.card__arc path {
  fill: var(--surface-color);
  d: path("M 40 80 c 22 0 40 -22 40 -40 v 40 Z");
}       

.card:hover .card__header {
  transform: translateY(0);
}

.card__thumb {
  flex-shrink: 0;
  width: 50px;
  height: 50px;      
  border-radius: 50%;      
}

.card__title {
  font-size: 1em;
  margin: 0 0 .3em;
  color: #6A515E;
}

.card__tagline {
  display: block;
  margin: 1em 0;
  font-family: "MockFlowFont";  
  font-size: .8em; 
  color: #D7BDCA;  
}

.card__status {
  font-size: .8em;
  color: #D7BDCA;
}

.card__description {
  padding: 0 2em 2em;
  margin: 0;
  color: #D7BDCA;
  font-family: "MockFlowFont";   
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 3;
  overflow: hidden;
}    
</style>
</head>
<body>
<div class="container" style="margin-top: 50px;">
<div class="row text-center mt-4 mb-5">
				<h3 style="font-weight : 700;">how can we help you?</h3>
        <hr>
</div>
<div class="row">
  <div class="col-md-6">
  <h1 class="text-center">Devops <i class=" fa-1x fa-solid fa-circle-question fa-beat"></i></h1>

      
    
    <ul class="cards">
      <li>
        <a href="" class="card">
          <img src="gambar/Team of engineers working on mechanism together.jpg" class="card__image" alt="" />
          <div class="card__overlay">
            <div class="card__header">
              <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
              <i class="fa-solid fa-desktop" class="card__thumb"></i>
              <div class="card__header-text">
                <h3 class="card__title">Dev Ops</h3>            
              
              </div>
            </div>
            <p class="card__description">Migrate your legacy IT build system to an IT 
              DevOps build system. Aims to shorten the system development l
              ife cycle and provide continuous delivery of high software quality.</p>
          </div>
        </a>      
      </li>  
    </ul>
  </div>
  <div class="col-md-6 service-content">
    <p class="mt-5">
      Quoted from Wikipedia.org – DevOps is a set of practices 
      that combines software development (Dev) and IT operations (Ops). 
      It aims to shorten the systems development life cycle and provide continuous delivery 
      with high software quality. DevOps is complementary with
      Agile software development; several DevOps aspects came from the Agile methodology.
    </p>
    <br>
    <p>
    With DevOps we can reduce the number of errors in the process of building an application. 
    Even if an error occurs, the recovery process will be faster and easier. 
    These things will make the process of developing an application more efficient.
    </p>
  </div>
</div>
<div class="container" style="margin-top: 50px;">
<div class="row">
  <div class="col-md-6 service-content mt-5">
    <p>
    Cloud computing is the on-demand availability of computer system resources, 
    especially data storage (cloud storage) and computing power, without direct 
    active management by the user. Large clouds often have functions distributed 
    over multiple locations, each location being a data center. Cloud computing 
    relies on sharing of resources to achieve coherence and economies of scale, 
    typically using a "pay-as-you-go" model which can help in reducing capital expenses but may also
    lead to unexpected operating expenses for unaware users. 
    </p>
  </div>
  <div class="col-md-6">
  <h1 class="text-center">Cloud <i class=" fa-1x fa-solid fa-circle-question fa-beat"></i></h1>
   <ul class="cards"> 
    <li>
      <a href="" class="card">
        <img src="gambar/Team of engineers working on mechanism together.jpg" class="card__image" alt="" />
        <div class="card__overlay">        
          <div class="card__header">
            <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                 
            <i class="fa-solid fa-cloud" class="card__thumb"></i>
            <div class="card__header-text">
              <h3 class="card__title">CLoud</h3>
          
            </div>
          </div>
          <p class="card__description">Services to provide easy and affordable access to 
            IT applications and resources without the need for infrastructure or internal hardware.
          </p>
        </div>
      </a>
    </li>
   </ul>
  </div>
</div>
<div class="container" style="margin-top: 50px;">
 
<div class="row">
  <div class="col-md-6">
  <h1 class="text-center">Tailor Made System <i class=" fa-1x fa-solid fa-circle-question fa-beat"></i></h1>
    <ul class="cards">
      <li>
        <a href="" class="card">
          <img src="gambar/Team of engineers working on mechanism together.jpg" class="card__image" alt="" />
          <div class="card__overlay">
            <div class="card__header">
              <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                 
              <i class="fa-solid fa-gear" class="card__thumb"></i>
              <div class="card__header-text">
                <h3 class="card__title">Tailor Made System</h3>
                
              </div>          
            </div>
            <p class="card__description">Development and creation of applications 
              for use and management entirely by you. 
            </p>
          </div>
        </a>
      </li>  
    </ul>
  </div>
  <div class="col-md-6 service-content">
  
    <p>
    Tailor Made System is a service that is made based on business processes and company needs. 
    Therefore, the procurement of Information 
    Systems by making a Tailor-made System provides more benefits when compared to buying Package Software. 
    </p>
    <br>
    <p>
    This is one of the special services that we can provide for you, where we will make 
    a special application according to the wishes and needs of your company. After the 
    application is finished, it is you who will use and manage the application completely. Like a Tailor, 
    it’s our job to make it for you. After that, the product is completely in your hands
    </p>
  </div>
</div>



<script src="https://kit.fontawesome.com/8f51f04116.js" crossorigin="anonymous"></script>
</body>
</html>
<?php include 'footer-service.php';?>

  