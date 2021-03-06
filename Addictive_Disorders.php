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
   
    <style>
        .Title2 {color : #693c72;}
        .page-summary-item a{
            color : #693c72;
        }
        .item{
            background-color: #fae7d0;
        }
    </style>
     
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
      style="background-image: url('images/addict.jpg')"
      data-stellar-background-ratio="0.5"
    >
      <div class="overlay"></div>
      <div class="container">
        <!-- <div class="row no-gutters slider-text align-items-center">
          <h1 class="banner-text" style="color : #ffffff; ">
           Addictive Disorders
          </h1>
        </div> -->
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

        <ul style="list-style-type: none; text-align : left">
          <li class="page-summary-item">
            <a href="#description">Description</a>
          </li>
          <li class="page-summary-item"><a href="#symptoms">Symptoms</a></li>
          <li class="page-summary-item">
            <a href="#treatment">Treatment</a>
          </li>
          <li class="page-summary-item">
            <a href="#helping-someone-with-disorder"
              >Helping Someone With Addictive Disorder</a
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
            <span class="Title1" style = "color : #009900;"
              >???When I was depressed or feeling anxious, 
			  I used a natural coping mechanism. In other words, I had a drink or two. 
			  Alcohol was great because it settled the anxiety and made me feel better for a while. 
			  It's only in hindsight I can see that wasn't a solution, it was just adding to the problem.???</span
            >
            <footer>
              <cite>Leeann</cite>
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
                Addictive disorders, such as substance abuse and dependence, are common disorders that involve the overuse of alcohol and/or drugs. Addiction develops over time and is a chronic and relapsing illness.
				There are three different terms used to define substance-related addictive disorders:</p>
              <br />
              <p>
				Substance abuse, as a disorder, refers to the abuse of illegal substances or the abusive use of legal substances. It is an addictive disorder that describes a pattern of substance (usually drug or alcohol) use leading to significant problems or distress, such as failure to attend school, substance use in dangerous situations (like driving a car), substance-related legal problems or continued substance use that interferes with friendships and/or family relationships. Alcohol is the most common legal drug to be abused.</p>
              <br />
              <p>
               Substance dependence is an addictive disorder that describes continued use of drugs or alcohol, even when significant problems related to their use have developed. Signs include an increased tolerance???that is, the need for increased amounts of the substance to attain the desired effect; withdrawal symptoms with decreased use; unsuccessful efforts to decrease use; increased time spent in activities to obtain the substance; withdrawal from social and recreational activities; and continued use of the substance even with awareness of the physical or psychological problems encountered by the extent of substance use.</p>
              <br />
			  <p>
			  Chemical dependence is also an addictive disorder that describes the compulsive use of chemicals (usually drugs or alcohol) and the inability to stop using them despite all the problems caused by their use.
			The substances frequently abused, particularly by adolescents with addictive disorders, include, but are not limited to, the following:
Alcohol,
Marijuana,
Hallucinogens,
Cocaine,
Amphetamines,
Opiates,
Anabolic steroids,
Inhalants,
Methamphetamine,
Tobacco.
			  </p>
			  <br/>
              <p>
                You can know more about the types of Addictive Disorder
              <a
                href="https://americanaddictioncenters.org/behavioral-addictions"
              ><strong><span style = "color : blue">here</strong></a>
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
              <li>Getting high on drugs or getting intoxicated (drunk) on a regular basis</li>
              <li>Lying, especially about how much they are using or drinking</li>
              <li>Avoiding friends and family members</li>
              <li>Giving up activities they used to enjoy, such as sports or spending time with non-using friends</li>
              <li>Talking a lot about using drugs or alcohol</li>
              <li>Believing they need to use or drink in order to have fun</li>
              <li>Pressuring others to use or drink</li>
			  <li>Getting in trouble with the law</li>
			  <li>Taking risks, such as sexual risks or driving under the influence of a substance</li>
			  <li>Suspension/expulsion from school or being fired from work for a substance-related incident</li>
			  <li>Missing school or work due to substance use</li>
			  <li>Depressed, hopeless or suicidal feelings</li>
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
          <p>Addiction treatment is not one-size-fits-all. Treatments may vary based on your needs. You can choose the treatment that works best for you based on the substance you're abusing, the level of care you need, your personal mental health needs, or what health care options you can afford. Here are some of the most common addiction treatments that have set patients on a successful path to recovery.</p>
          <p>
            Treatments include:
            <ul>
            <li><strong>Detoxification</strong> - Medically-assisted detox allows you to rid your body of addictive substances in a safe environment. This is beneficial because sometimes substance withdrawal can cause unpleasant or even life-threatening physical symptoms. Because detox does not treat the underlying behavioral causes of the addiction, it is typically used in combination with other therapies.</li>
            <li><strong>Cognitive Behavioral Therapy</strong> - According to American Addiction Centers, Cognitive Behavioral Therapy (CBT) is a valuable treatment tool because it can be used for many different types of addiction including, but not limited to, food addiction, alcohol addiction, and prescription drug addiction. Not only can CBT help you recognize your unhealthy behavioral patterns, but it can also help you learn to identify triggers and develop coping skills. CBT can be combined with other therapeutic techniques as well.</li>
            <li><strong>Rational Emotive Behavior Therapy</strong> - Rational Emotive Behavior Therapy (REBT) could help you recognize your negative thoughts and give you ways to combat feelings of self-defeat. The goal of REBT is to help you realize that the power of rational thinking lies within yourself and is not related to external situations or stressors.</li>
            <li><strong>Contingency Management (CM)</strong> - can be used to treat a wide variety of addictions including alcohol, narcotics, and tobacco. Contingency management therapy reinforces your positive behavior (ie maintaining sobriety) by giving you tangible rewards. This type of treatment has been used successfully to combat relapse, according to the National Institute on Drug Abuse.</li>
			<li><strong>12-Step Facilitation</strong> - Twelve-step facilitation therapy ("12-step programs") can be used to treat alcohol and substance abuse. It is a form of group therapy that includes recognition that addiction has several negative consequences that can be social, emotional, spiritual and physical. This type of therapy begins with acceptance, then moves on to surrender to a higher power, then eventually transitions to involvement in consistent group meetings. Programs like the popular Alcoholics Anonymous use group meetings for discussion and mutual support.</li>
			<li><strong>Medication</strong> - Medication can play an important role in recovery when combined with behavioral therapies. Certain medications can be used to reduce cravings, improve mood, and decrease addictive behaviors. For example, the FDA recently approved lofexidine to help reduce cravings and withdrawal symptoms in patients receiving treatment for opioid addiction. Medications like acamprosate can help reduce drinking behavior.

If you or a loved one are struggling with an addiction, you don???t need to fight the battle alone. Talk to a medical professional. There are successful treatments available that can help you overcome your addiction.</li>
			
			</ul>
          </p>
        </div>

        <!-- Helping someone with an AD -->

        <div
            id="helping-someone-with-disorder"
            class="text-section"
            tabindex="0"
            data-content-block-id="c25024c1-d390-4956-adc8-274030e49b47"
          >
            <h3 class="Title2">Helping Someone With Addictive Disorder</h3>
            <p>
                Educate Yourself About Addiction - 
You see what you know. Until you have knowledge about addiction and the symptoms of drug abuse, it???s easy to miss the signs that are right in front of you.
Addiction is complex, and it???s okay if you don???t know everything right away. However, taking the time to understand your loved one???s disease and how it affects them is incredibly beneficial to both you and your loved one. It also helps you be more aware of the signs that your loved one needs help.
            </p></br>
            <p>
             Offer Your Support - 
People with addiction don???t always understand how much their family and friends love them. Talk to your loved one about your concerns, and don???t wait for them to hit rock bottom to speak up. Let them know that you???re going to support them on their journey to recovery.   
            </p></br>
			<p>
              Encourage Them to Get Help - 
As with other diseases, the earlier addiction is treated, the better. However, don???t be surprised if you???re met with denial or excuses as to why they can???t or won???t seek treatment. Be persistent about how important it is that they enter treatment for their addiction, but avoid making them feel guilty or ashamed in the process.

Another option is to hold an intervention for your loved one. Although these are often difficult to do, an intervention may be exactly what your loved one needs if they???re deep into their addiction. Consider bringing in an intervention specialist to help you navigate this process.  
            </p></br>
			<p>
             Support Recovery as an Ongoing Process - 
Once your loved one decides to enter treatment, it???s essential that you remain involved. Continue supporting their participation in ongoing care, meetings and recovery support groups. Be the support system that they need, and show them that you???ll be there every step of the way.   
            </p></br>
            <p>
             Take Care of Yourself - 
Although you may see this as selfish, it???s incredibly important that you???re able to be there for others and make the best decisions possible. Make sure your own needs are met by getting enough sleep, exercising and eating well. Don???t be afraid to go to therapy to get help if you find yourself struggling due to your loved one???s drug addiction.
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
              style="background-color: #dddddd"
            >
            
              <div class="carousel-inner">
                <div class="item active">
                  <div class="carousel-caption">
                    <blockquote
                    class="overview"
                    tabindex="0"
                    data-content-block-id="2ba05217-5b9e-4dad-9d59-1d9b620bf37e"
                  >
                    <span class="Title1" style = "font-size: 18px; text-shadow: none; line-height: 20px;  color:#e6739f"
                      >???At eighteen years of age, I developed a drinking problem. The first time I got drunk, my shyness disappeared, I could talk with anyone for hours. I could do everything I couldn???t when I was sober, but it would be the start of one of my biggest battles. It started with only drinking at parties. I put on a front; it was as though I was wearing a mask, pretending to be what I was in hopes that people would notice me for someone fun instead of the shy and depressed guy I was. If I could fit in where I didn???t belong I wouldn???t be alone anymore. Spending this time with others was just an excuse to run away from my problems by having ???fun??? with other people.??? <a style = "color : #e6739f;" href="addictiveExperience1.php">..Read More</a></span
                    >
                    <footer >
                      <cite>Jo??o Caldas</cite>
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
                    <span class="Title1" style = "font-size: 18px; text-shadow: none;  line-height: 20px;  color:#e6739f"
                      >???It wasn???t a simple headache. It was blurring my sight, my happiness, my body, extending the pain to every cell, every muscle, every inch of my being. Many ideas come to my already congested mind, one of them was to end my life and forever be pain-free. I thought about taking some painkillers, but I wasn???t able to do it. I suppose my willpower and my primary need to stay sober were stronger than the painkillers. I knew that if I took a single pill, it could have gotten from 1 every 6 hours to 4 pills per hour, as I used to do.??? <a style = "color : #e6739f;" href="addictiveExperience2.php">..Read More</a></span
                    >
                    <footer>
                      <cite>Mederos</cite>
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
                    <span class="Title1" style = "font-size: 18px; text-shadow: none; line-height: 18px; color:#e6739f"
                      >???As life, and my brother???s episodes, continued, my family???s wealth disappeared. This depletion of our finances caused my once fairy tale life to disappear: POOF! What would have probably been routine growing pains for otherwise ???healthy??? children to work through were extremely difficult for me. I started having crying fits in the middle of class and I wouldn???t sleep in my own bedroom out of fear I too would ???die in my sleep.??? It???s normal for children to be frightened of certain things, but I was scared of things like flushing the toilet, walking into any room alone, and darkness. I would also insist on only wearing dresses because I was my Dad???s ???Princess,??? and ???Princesses only wore dresses.??? My peers, clad in more fashionable pants or leggings, turned on me and bullied me.??? <a style = "color : #e6739f;" href="addictiveExperience2.php">..Read More</a>
                      </span
                    >
                    <footer>
                      <cite>Halle Stern</cite>
                    </footer>
                  </blockquote>
                  
                </div>
                </div>
              </div>
              <a
                class="carousel-control left"
                href="#DemoCarousel"
                data-slide="prev"
                style="background-color: #dddddd"
              >
                <span  style = "color : #e6739f" class="glyphicon glyphicon-chevron-left"></span>
              </a>
              <a
                class="carousel-control right"
                href="#DemoCarousel"
                data-slide="next"
                style="background-color: #dddddd"
              >
                <span style = "color : #e6739f"class="glyphicon glyphicon-chevron-right"></span>
              </a>
            </div>
          </div>
          </div> 

      </div>
    </div>
    <?php include './partials/_footer.php'?>
    <!-- footer -->
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
                <!--<li>
                  <a href="#"
                    ><span class="fa fa-chevron-right mr-2"></span>Contact</a
                  >
                </li>
                <li>
                  <a href="index.html"
                    ><span class="fa fa-chevron-right mr-2"></span>Services</a
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
