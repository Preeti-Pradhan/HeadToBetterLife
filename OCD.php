<?php  session_start();
if(isset($_SESSION['username']) && !empty($_SESSION['username']))
{
    include './partials/_usernav.php';
}
else
{
    include './partials/_header.php' ;   
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Head To Better Life</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/disease_layout.css" />    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
   
    
     
  </head>
  <body>
    <!-- <nav
      class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light"
      id="ftco-navbar"
    >
      <div class="container">
        <a class="navbar-brand" href="#">Head to Better Life</a>
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a href="index.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item"><a href="about.html" class="nav-link">About Us</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Disease</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Resources</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Events</a></li>
            <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
            <li class="nav-item"><a href="login.html" class="nav-link">Login</a></li>
          </ul>
        </div>
      </div>
    </nav> -->
    <!-- END nav -->

    <!--banner image-->
    <div
      class="hero-wrap banner-image"
      style="background-image: url('images/OCD3.jpg')"
      data-stellar-background-ratio="0.5"
    >
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center">
          <h2 class="banner-text" style="color : #322468;">
            Obsessive-compulsive and related disorders
          </h2>
        </div>
      </div>
    </div>

    <!-- main content page -->

    <div
      id="page-frame"
      class="content-of-page"
      
    >
      <!-- left side of page -->
      <div id="page-left-side" class="left-side-summary">
        <h6 id="page-summary-heading" class="text-uppercase">
          <center>On this page</center>
        </h6>

        <ul style="list-style-type: none">
          <li class="page-summary-item">
            <a href="#description">Description</a>
          </li>
          <li class="page-summary-item"><a href="#symptoms">Symptoms</a></li>
          <li class="page-summary-item">
            <a href="#treatment">Treatment</a>
          </li>
          <li class="page-summary-item">
            <a href="#helping-someone-with-disorder"
              >Helping Someone With An OCD</a
            >
          </li>
          <li class="page-summary-item">
            <a href="#experience">Lived Experience</a>
          </li>
          
        </ul>
      </div>

      <!--center page-->
      <div id="page-center">
        <div id="page-content">
          <!-- quote -->
          <blockquote
            class="overview"
            tabindex="0"
            data-content-block-id="2ba05217-5b9e-4dad-9d59-1d9b620bf37e"
          >
            <span class="Title1"
              >???When I was 21 and I finally got diagnosed, I thought that it might have been schizophrenia, because that's the only illness that I had seen on TV. I didn???t have any idea that it might be something else.???</span
            >
            <footer>
              <cite>Tim</cite>
            </footer>
          </blockquote>

          <!-- description -->
          <div
            id="description"
            class="text-section"
            tabindex="0"
            data-content-block-id="c25024c1-d390-4956-adc8-274030e49b47"
          >
            <h3 class="Title2">Description</h3>

            <p>
              Obsessive-Compulsive and related disorders include
              obsessive-compulsive disorder (OCD), body dysmorphic disorder,
              hoarding disorder, trichotillomania (hair-pulling disorder), and
              excoriation (skin-picking) disorder. Often called the doubting
              disease, OCD is typically characterized by the presence of
              obsessions and compulsions that the individual finds difficult to
              control. </p>
              <br />
              <p>
              Obsessions are characterized as unwanted intrusive thoughts,
              urges, images, or impulses. Common obsessions include a need for
              cleanliness, concerns over germs, fear of doing something
              blasphemous or causing harm to others, and a need for symmetry or
              to do things ???the right way.??? Individuals with obsessions often
              perform compulsive behaviors to reduce fears associated with their
              obsessions. Compulsions, also known as ???rituals,??? are repeated
              actions or thought patterns that are intended to rid troublesome
              obsessions.</p>
              <br />
              <p>
              Some other disorders included in this category are also
              characterized by preoccupations and by repetitive behaviors or
              mental acts in response to those preoccupations. Others are
              characterized primarily by recurrent body-focused repetitive
              behavior (e.g., hair pulling, skin-picking) and repeated attempts
              to decrease or stop the behaviors.</p>
              <br />
              <p>
              OCD occurs gradually in both adults and children/adolescents and
              has a chronic course. Boys most commonly develop OCD in childhood
              while girls typically develop OCD in early adulthood. OCD has a
              genetic component and is heritable. People with OCD often have
              family members with OCD and other anxiety problems. Learning and
              life stress also contribute to the development of OCD.</p>
              <br />
              <p>
              Most people have thoughts similar to the thoughts that bother
              people with OCD; however, people who have OCD are more bothered by
              these thoughts. They then try to avoid them or develop compulsions
              to neutralize them. The avoidance and compulsions make the
              thoughts stronger. You can read in detail about the types of OCD
              <a
                href="https://www.webmd.com/mental-health/obsessive-compulsive-disorder"
              ><span style = "color : brown">here</a>
              <br />
            </p>
          </div>

          <!-- Symptoms -->
          <div
            id="symptoms"
            class="text-section"
            tabindex="0"
            data-content-block-id="c25024c1-d390-4956-adc8-274030e49b47"
          >
            <h3 class="Title2">Symptoms</h3>
            <p>
              <ol>
              <li> Fear of contamination or dirt.</li>
              <li> Doubting and having difficulty tolerating uncertainty.</li>
              <li> Needing things orderly and symmetrical.</li>
              <li>Aggressive or horrific thoughts about losing control and harming yourself or others.</li>
              <li>Unwanted thoughts, including aggression, or sexual or religious subjects.</li>
              </ol>
            </p>

          </div>

          <!-- Treatment  -->

          <div
          id="treatment"
          class="text-section"
          tabindex="0"
          data-content-block-id="c25024c1-d390-4956-adc8-274030e49b47"
        >
          <h3 class="Title2">Treatment</h3>
          <p>There???s no cure for OCD. But you may be able to manage how your 
            symptoms affect your life through medicine, therapy, or a combination 
            of treatments.</p>
          <p>
            Treatments include:
            <ul>
            <li><strong>Psychotherapy </strong> - Cognitive behavioral therapy can help change your thinking patterns. In a form called exposure and response prevention, your doctor will put you in a situation designed to create anxiety or set off compulsions. You???ll learn to lessen and then stop your OCD thoughts or actions.</li>
            <li><strong>Relaxation</strong>- Simple things like meditation, yoga, and massage can help with stressful OCD symptoms.</li>
            <li><strong>Medication</strong>- Psychiatric drugs called selective serotonin reuptake inhibitors help many people control obsessions and compulsions. They might take 2 to 4 months to start working.</li>
            <li><strong>Neuromodulation</strong>- In rare cases, when therapy and medication aren???t making enough of a difference, your doctor might talk to you about devices that change the electrical activity in a certain area of your brain. One kind, transcranial magnetic stimulation, is FDA-approved for OCD treatment.</li>
            <li><strong>Tanscranial magnetic stimulation</strong>- The TMS unit is a non-invasive device that is held above the head to induce the magnetic field. It  targets a specific part of the brain that regulates OCD symptoms.</li>
            </ul>
          </p>
        </div>

        <!-- Helping someone with an OCD -->

        <div
            id="helping-someone-with-disorder"
            class="text-section"
            tabindex="0"
            data-content-block-id="c25024c1-d390-4956-adc8-274030e49b47"
          >
            <h3 class="Title2">Helping Someone With An OCD</h3>

            <p>
              It is important to communicate clearly that you understand the difference between the behavioural symptoms of OCD and the person: ???I know this is not you, this is your OCD.??? This will help to diminish the person???s feelings of guilt and low self-worth and reduce their levels of stress and anxiety. </p>
              <br />
              <p>
                Encourage the person to talk about the disorder so that you can learn how it affects them and how you can be more supportive, but don???t engage in discussions about the logic of OCD as most people with OCD know their obsessions and compulsions are excessive and irrational.</p>
              <br />
              <p>
                Encourage the person to seek professional help. OCD is generally not a condition that will go away without treatment. You can assist in locating an experienced therapist and offer to be involved in their treatment program. If the OCD has involved you or other family or friends extensively in rituals and avoidance behaviours, you will need to know the best ways to modify your involvement so that the treatment can be as effective as possible.</p>
              <br />
              <p>
                Encourage discussion about OCD as a common and treatable anxiety condition that is nothing to be embarrassed or ashamed of. Support the person with OCD to share their experiences with family and friends ??? this will help to break the secrecy about OCD.</p>
              <br />
              <p>
                Acknowledge improvements, however small, and encourage the person to reward themselves for their progress.Try to be patient and maintain a non-judgemental attitude ??? this will support the person to focus their efforts on recovery rather than dealing with anger and resentment.
              </p>
              <br/>
              <p>
                If their motivation wanes and they consider stopping treatment, remind them of the gains they have made.
              </p>
          </div>

          <!--Lived Experience-->
          <div
            id="experience"
            class="text-section"
            tabindex="0"
            data-content-block-id="c25024c1-d390-4956-adc8-274030e49b47"
          >
          <h3 class="Title2">Lived Experience</h3>
         
          <div class="thumbnail" style="width: 800px">
            <div
              id="DemoCarousel"
              class="carousel slide"
              data-interval="20000"
              data-ride="carousel"
              style="background-color: #f6f5f5"
            >
            
              <div class="carousel-inner">
                <div class="item active">
                  <div class="carousel-caption">
                    <blockquote
                    class="overview"
                    tabindex="0"
                    data-content-block-id="2ba05217-5b9e-4dad-9d59-1d9b620bf37e"
                  >
                    <span class="Title1" style = "font-size: 18px; text-shadow: none; line-height: 30px;"
                      >???Eating disorders become so ingrained in your personality that you feel like it???s part of who you are. 
                      You forget what it???s like to not have an eating disorder. Because I???d had it since I was 12 years old, 
                      I didn???t know who I was without it. So recovery can be the hardest thing that someone ever has to do in their 
                      life, but it???s also going to be the most worthwhile. That's a really important message for anyone who's affected.???
                       <a style = "color : #1181ae;" href="experience.html">..Read More</a></span
                    >
                    <footer >
                      <cite>Sarah</cite>
                    </footer>
                  </blockquote>
                    
                </div>
                </div>
                <div class="item">
                  <div class="carousel-caption">
                    <blockquote
                    class="overview"
                    tabindex="0"
                    data-content-block-id="2ba05217-5b9e-4dad-9d59-1d9b620bf37e"
                  >
                    <span class="Title1" style = "font-size: 18px; text-shadow: none;  line-height: 30px;"
                      >???Eating disorders become so ingrained in your personality that you feel like it???s part of who you are. You forget what it???s like to not have an eating disorder. Because I???d had it since I was 12 years old, I didn???t know who I was without it. So recovery can be the hardest thing that someone ever has to do in their life, but it???s also going to be the most worthwhile. That's a really important message for anyone who's affected.??? <a style = "color : #1181ae;" href="experience.html">..Read More</a></span
                    >
                    <footer>
                      <cite>Sarah</cite>
                    </footer>
                  </blockquote>
                  
                </div>
                </div>
                <div class="item">
                  <div class="carousel-caption">
                    <blockquote
                    class="overview"
                    tabindex="0"
                    data-content-block-id="2ba05217-5b9e-4dad-9d59-1d9b620bf37e"
                  >
                    <span class="Title1" style = "font-size: 18px; text-shadow: none; line-height: 30px;"
                      >???Eating disorders become so ingrained in your personality that you feel like it???s part of who you are. 
                      You forget what it???s like to not have an eating disorder. Because I???d had it since I was 12 years old, 
                      I didn???t know who I was without it. So recovery can be the hardest thing that someone ever has to do in their life, 
                      but it???s also going to be the most worthwhile. That's a really important message for anyone who's affected.??? <a style = "color : #1181ae;" href="experience.html">..Read More</a>
                      </span
                    >
                    <footer>
                      <cite>Sarah</cite>
                    </footer>
                  </blockquote>
                  
                </div>
                </div>
              </div>
              <a
                class="carousel-control left"
                href="#DemoCarousel"
                data-slide="prev"
                style="background-color: #f6f5f5"
              >
                <span class="glyphicon glyphicon-chevron-left"></span>
              </a>
              <a
                class="carousel-control right"
                href="#DemoCarousel"
                data-slide="next"
                style="background-color: #f6f5f5"
              >
                <span class="glyphicon glyphicon-chevron-right"></span>
              </a>
            </div>
          </div>
          </div> 

      </div>
    </div>
    <?php include './partials/_footer.php'?>
    <!-- <footer class="ftco-footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2 logo"><a href="#">Head to Better Life</a></h2>
              <p>
                ???There is hope, even when your brain tells you there isn???t.??? ???
                John Green
              </p>
              <ul class="ftco-footer-social list-unstyled mt-2"></ul>
            </div>
          </div>
          <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Explore</h2>
              <ul class="list-unstyled">
                <li>
                  <a href="about.html"
                    ><span class="fa fa-chevron-right mr-2"></span>About</a
                  >
                </li>
                <li>
                  <a href="#"
                    ><span class="fa fa-chevron-right mr-2"></span>Services</a
                  >
                </li>
                <!--<li>
                  <a href="#"
                    ><span class="fa fa-chevron-right mr-2"></span>What We Do</a
                  >
                </li>
               
              </ul>
            </div>
          </div>
          <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
              <ul>
                  <li>
                    <a href="#"
                      ><span class="icon fa fa-paper-plane pr-4"></span
                      ><span class="text">headtobetterlife@gmail.com</span></a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid px-0 py-5 bg-black">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <p class="mb-0" style="color: rgba(255, 255, 255, 0.5)">
                @We take all responsibilty of our customers data privacy.
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer> -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
    <script type="text/javascript" src="js/diseaseJs.js" charset="utf-8"></script>
  </body>
</html>
