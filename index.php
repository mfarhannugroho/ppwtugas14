<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ocean One</title>
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/style.css" rel="stylesheet">
    </style>
  </head>
  <body>

    <div class="sectionone min-vh-100 d-flex flex-column">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid container">

          <div class="navbar-brand " href="#">
                <img class="imglogo" src="assets/logo.png"   >
          </div>

          <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            
            <span class="navbar-toggler-icon"></span>
        </button>



          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ms-auto">
              
              <li class="nav-item me-md-5">
                <a class="nav-link" style="font-family: Lato; font-weight: 400;" href="#">Actions</a>
              </li>

              <li class="nav-item me-md-5">
                <a class="nav-link hov" href="#" style="font-family: Lato; font-weight: 400;">Resources</a>
              </li>

              <li class="nav-item dropdown me-md-5">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-family: Lato; font-weight: 400;">
                  Projects
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" style="font-family: Lato; font-weight: 400;">Explore</a>
              </li>

            </ul>
          </div>
        </div>
      </nav>

      <div class="home d-flex align-items-center flex-fill">
        <div class="container">
          <div class="justify-content-center">
          <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "oceanone";

            $conn = mysqli_connect($servername, $username, $password, $database);

            if(!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $query = "SELECT * FROM section_data";
            $result = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<h1 class='text-center text-white' style='font-size: 64px;'>".$row['title']."</h1>";
                echo "<p class='text-center text-white' style='font-size: 20px;'>".$row['description']."</p>";
                echo "<div class='container mt-1'>";
                echo "<div class='row'>";
                echo "<div class='col text-center'>";
                echo "<div class='d-flex align-items-center justify-content-center'>";
                echo "<button class='btn pe-5 ps-5 pt-2 pb-2' style='background-color: #06BEE1; font-family: Lato; font-weight: 900; color: white;' onclick='alert(\"I\'m taking action\")'>".$row['button_text']."</button>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }

            mysqli_close($conn);
            ?>
        </div>
    </div>
</div>

    </div>
    <div class="sectiontwo section container mb-5">
          <h1 >OFFSET YOUR</h1>
          <h1 >PLASTIC FOOTPRINT</h1>

          <div class="row mt-5">
            <div class="col-sm-4 d-flex flex-column mt-5 align-items-start">
          <h2>ALIGN</h2>
          <div id="content">
            <p>66% of people (73% of Millennials) are willing to pay more for products and services from companies committed to positive social and environmental impact.</p>
          </div>
          <div class="button-group">
            <button class="btn mt-auto" style="background-color: #06BEE1; font-family: Lato; font-weight: 500; color: white;" onclick="editContent()">LEARN MORE</button>
            <button type="button" class="btn btn-link" onclick="replaceContent()">Edit</button>
          </div>
        </div>
            <div class="col-sm-4 d-flex flex-column mt-5">
              <h2>KICKSTART</h2>
              <p>Ocean One are a turnkey solution to begin the journey of reducing your business’s environmental footprint or going plastic neutral.</p>
              <button class="btn mt-auto align-self-md-start" style="background-color: #06BEE1; font-family: Lato; font-weight: 500; color: white;">START ACTION</button>
            </div>
            <div class="col-sm-4 d-flex flex-column mt-5">
              <h2>AMPLIFY</h2>
              <p>Is your actions already making strides in its commitment to sustainability? Measure your action success using IMPACT</p>
              <button class="btn mt-auto align-self-md-start" style="background-color: #06BEE1; font-family: Lato; font-weight: 500; color: white;">SEE HOW</button>
            </div>

          </div>

      </div>

      <div class="sectionthree section pb-5">
        <div class="container">
        <h1 class="text-center" style="color: white;"> Make Your Impact</h1>

        <div class="row mt-5">

          <div class="col-sm-4 d-flex flex-column">
              
            <img src="assets/sectionthree__img1.jpg"  class="rounded-circle mx-auto" style="width: 150px; height: 150px;">
            <h5 class="text-center m-4" style="color: white;">
              COMMIT TO REMOVING A SPECIFIC AMOUNT
            </h5>

          </div>

          <div class="col-sm-4 d-flex flex-column ">
              
            <img src="assets/sectionthree__img2.jpg"  class="rounded-circle mx-auto" style="width: 150px; height: 150px;">
            <h5 class="text-center m-4" style="color: white;">TIE REMOVAL TO PRODUCT SALES</h5>

          </div>

          <div class="col-sm-4 d-flex flex-column">
              
            <img src="assets/sectionthree__img3.jpg"   class="rounded-circle mx-auto" style="width: 150px; height: 150px;">
            <h5 class="text-center m-4" style="color: white;">INCENTIVIZE COMMUNITY ACTION</h5>

          </div>
        </div>
        </div>
      </div>

    <div class="sectionfour">
      <div class=" section">
        <div class="container">
          <h5> Project 1 :</h5>
          <h1 >OCEANBOUND CLEAN UP</h1>
        </div>

        <div class="container mt-5">
        

        <div class="row" >
          <div class="col-xs-12 col-sm-6 col-md-6 bg-black sectionfour__img sectionfour__bg1" style="height: 400px;">
            <!-- Column 1 content -->
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 e d-flex " style="height: 400px; background: #1768AC;">
            <div class="my-auto col-lg-12 col-12 ">
            <h4 style="color: white;">Problems</h4>
              <p style="color: white;">Plastic recycling generates plastic waste effluent as a standard part of the process. This dirty discharge known as "Mud" is at risk of being discharged into the wastewater and, in the best-case, is usually taken to the nearest landfill.</p>
            </div>
          </div>
        </div>


        <div class="row" >
          <div class="col-xs-12 col-sm-6 col-md-6 bg-black sectionfour__img  order-lg-2 order-md-2 order-sm-2 sectionfour__bg2" style="height: 400px;">
            
          </div>

          <div class="col-xs-12 col-sm-6 col-md-6 e d-flex order-lg-1 order-md-1 order-sm-1" style="height: 400px; background: #1768AC;">
            <div class="my-auto col-lg-12 col-12">
              
            <h4 style="color: white;">Solution</h4>
              <p style="color: white;">Repurposes the “Mud” into useful building materials. It's composition is perfect for producing bricks! Unfortunately, these recycled plastic compound bricks are slightly more expensive than standard building bricks, so Impac+ program incentivizes the reuse of the “Mud” in the bricks by making them competitive on the open market.</p>
            </div>
          </div>
        </div>
      </div>
      </div>


      <div class=" section">
        <div class="container">
          <h5 >Project 2 :</h5>
          <h1 >FISHING NET RECOVERY</h1>
        </div>

        <div class="container mt-5">

        <div class="row" >
          <div class="col-xs-12 col-sm-6 col-md-6 bg-black sectionfour__img sectionfour__bg3" style="height: 400px;">
            <!-- Column 1 content -->
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 e d-flex " style="height: 400px; background: #1768AC;">
            <div class="my-auto col-lg-12 col-12">
              
            <h4 style="color: white;">Problems</h4>
              <p style="color: white;">Fishing gear - nets and ropes - pose a significant risk to sea life if cut away in the ocean. Unfortunately, incentives do not exist to recover this gear so at the end of its life, most gets landfilled or simply cut away at sea. It's a huge reason for why fishing nets are the largest ocean plastic polluter.</p>
            </div>
          </div>
        </div>

        <div class="row" >

          <div class="col-xs-12 col-sm-6 col-md-6 bg-black sectionfour__img  order-lg-2 order-md-2 order-sm-2 sectionfour__bg4" style="height: 400px;">
            <!-- Column 1 content -->
          </div>

   

          <div class="col-xs-12 col-sm-6 col-md-6 e d-flex order-lg-1 order-md-1 order-sm-1" style="height: 400px; background: #1768AC;">
            <div class="my-auto col-lg-12 col-12">
              
            <h4 style="color: white;">Solution</h4>
              <p style="color: white;">We provides the funds needed to incentivize collection and recycling of this gear. This program creates a pathway for the reclamation of end of life fishing gear.</p>
            </div>
          </div>


        </div>
      
        </div>
      </div>
    </div>

    <div class="sectionfive">
      <div class=" section container">

        <h1 class="text-center">GET IN TOUCH</h1>

        <div class="row mt-5" >
          <div class="col-xs-12 col-sm-6 col-md-6" style="height: 400px;" id="googlemap">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.0872011461406!2d110.37610157599828!3d-7.780578677200081!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a58384ad1a553%3A0x2463641bb864741b!2sBRICafe%20X%20Couvee!5e0!3m2!1sid!2sid!4v1683419825402!5m2!1sid!2sid" style="height: 100%; width: 100%;"  allowfullscreen></iframe>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 e d-flex " style="height: 400px;">
            <div class="my-auto col-lg-12 col-12">
              <form style="width: 100%;" id="inputFormulir">
                <div class="form-group ">
                  <input type="text" class="form-control w-100" id="name" placeholder="Enter your name">
                </div>
                <div class="form-group mt-4">
                  <input type="email" class="form-control" id="email" placeholder="Enter your email">
                </div>
                <div class="form-group mt-4">
                  <textarea class="form-control" id="message" rows="5" placeholder="Enter your message"></textarea>
                </div>
                <button type="submit" class="btn mt-4" onclick="sendData()" style="background: #06BEE1; color: white;">Submit</button>
              </form>
            </div>
          </div>
          
          <div class="container" id="response" style="display: none;" >
            <h1 style="color:#06BEE1;">Thanks for your response. Your data recorded as :</h1>
            <div class="d-flex">
             <h5 class="">Hello, my name is : </h5> 
             <h5 class="fw-bold" id="nameShow">value</h5>
            </div>
            <div class="d-flex">
            <h5 class="">Please contact me through : </h5> <h5 class=" fw-bold" id="emailShow">value</h5>
            </div>
            <div class="d-flex">
            <h5 class="">I want to say about :</h5> <h5 class="d-inline-block fw-bold" id="messageShow">value</h5>
          </div>
        </div>
        </div>
      </div>

      <footer class="container mb-5">
        <div class="row justify-content-around mb-0 pt-5 pb-0 ">
            <div class=" col-12">
                <div class="row justify-content-center"> 
                    <div class="col-md-3 col-12 font-italic align-items-center  mt-md-3 mt-4">
                      <h5>
                        <span> 
                          <img src="assets/logo.png" class="img-fluid mb-1 imglogo"  >
                        </span><b class="text-dark"> Ocean<span class="text-muted"> One</span></b></h5>
                        
                    <p class="social mt-md-3 mt-2"> <span><i class="fa fa-facebook " aria-hidden="true"></i></span>  <span><i class="fa fa-linkedin" aria-hidden="true"></i></span>  <span><i class="fa fa-twitter" aria-hidden="true"></i></span>  </p>
                    <small class="copy-rights cursor-pointer">&#9400; 2023 Muhammad Farhan Nugroho</small><br>
                    <small>Copyright. All Rights Reserved. </small>
                    
                    </div>
                    <div class="col-md-3 col-12  my-sm-0"><ul class="list-unstyled"><li class="mt-md-3 mt-4">Newsletter</li> </ul> </div>
                    <div class="col-md-3 col-12 my-sm-0 "><ul class="list-unstyled"><li class="mt-md-3 mt-4">Privacy Policy</li></ul></div>
                    <div class="col-xl-auto col-md-3 col-12 my-sm-0 "><ul class="list-unstyled"><li class="mt-md-3 mt-4">FAQS</li></ul></div>
                </div>  
            </div>
        </div>            
    </footer>

    </div>

    

    <script>
      function editContent() {
        var contentElement = document.getElementById("content");
        var paragraph = contentElement.querySelector("p");
        var textArea = document.createElement("textarea");
        textArea.value = "Ocean One are a turnkey solution to begin the journey of reducing your business’s environmental footprint or going plastic neutral.";
        textArea.style.height = "200px";
        textArea.style.width = "100%";
        textArea.style.resize = "vertical";
    
        var replaceButton = document.createElement("button");
        replaceButton.innerText = "Replace";
        replaceButton.onclick = function() {
          replaceContentBack();
        };
    
        contentElement.removeChild(paragraph);
        contentElement.appendChild(textArea);
        contentElement.appendChild(replaceButton);
      }
    
      function replaceContent() {
        var contentElement = document.getElementById("content");
        var paragraph = contentElement.querySelector("p");
        var textArea = document.createElement("textarea");
        textArea.value = "Ocean One are a turnkey solution to begin the journey of reducing your business’s environmental footprint or going plastic neutral.";
        textArea.style.height = "200px";
        textArea.style.width = "100%";
        textArea.style.resize = "vertical";
    
        var replaceButton = document.createElement("button");
        replaceButton.innerText = "Replace";
        replaceButton.onclick = function() {
          replaceContentBack();
        };
    
        contentElement.removeChild(paragraph);
        contentElement.appendChild(textArea);
        contentElement.appendChild(replaceButton);
      }
    
      function replaceContentBack() {
        var contentElement = document.getElementById("content");
        var textArea = contentElement.querySelector("textarea");
        var paragraph = document.createElement("p");
        paragraph.innerText = textArea.value;
    
        var replaceButton = contentElement.querySelector("button");
        contentElement.removeChild(textArea);
        contentElement.removeChild(replaceButton);
        contentElement.appendChild(paragraph);
      }

      function sendData() {
        try {
          document.getElementById("inputFormulir").addEventListener("submit", (e) => {
            e.preventDefault();
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var message = document.getElementById("message").value;
      
            document.getElementById("nameShow").innerText = name;
            document.getElementById("emailShow").innerText = email;
            document.getElementById("messageShow").innerText = message;

            var div = document.getElementById("response");
                if (div.style.display === "none") {
                    div.style.display = "block";
                } else {
                    div.style.display = "none";
                }

          });
        } catch (err) {
          alert(err.message);
        }
      }
    </script>
  </body>
</html>