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
      style="background-image: url('images/dv.jfif')"
      data-stellar-background-ratio="0.5"
    >
      <div class="overlay"></div>
      <div class="container">
        <!-- <div class="row no-gutters slider-text align-items-center">
      <h1 class="banner-text" style="color : #FFFFFF;">
			Depressive  Disorders 
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
          <center><u>On this page</u></center>
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
              >Helping Someone With An Depressive Disorders</a
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
              >???People often think that if someone suffers from anxiety or depression that they may be weak. In fact, they???re a lot stronger than people think.???</span
            >
            <footer>
              <cite>Jason</cite>
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
			 Depressive disorders are characterized by sadness severe enough or persistent enough to interfere with function and 
			  often by decreased interest or pleasure in activities. Exact cause is unknown but probably involves heredity, changes 
			  in neurotransmitter levels, altered neuroendocrine function, and psychosocial factors. Diagnosis is based on history. 
			  Treatment usually consists of drugs, psychotherapy, or both and sometimes electroconvulsive therapy or rapid transcranial 
			  magnetic stimulation (rTMS).
              </p>
              <br />
              <p>
             Feelings of sadness, guilt, irritability or even worthlessness are something most people experience at some point.
			 However, when these feelings are present for most of the day, every day for at least two weeks and interfere in daily 
			 functioning (such as work, school or sport commitments), then this is considered clinical depression. Depression often 
			 results in impaired sleeping patterns and appetite, diminished interest in daily activities and general fatigue. 
			 Although sometimes triggered by life events, such as bullying or the breakup of a relationship, depression can 
			 often occur without any obvious reason or trigger. Severe depression may result in suicidal thoughts.
</p>
              <br />
              <p>
               Non-melancholic depression, also known as major or clinical depression, is the most common form of depression. 
			 Clinical depression often occurs in response to psychological factors, such as experiencing a series of stressful events, 
			 but may not resolve once these issues have been resolved. As non-melancholic depression does not have any defining symptoms 
			 (such as psychotic features or impaired mental functioning) it may be difficult to diagnose. Other forms of depression include 
			 melancholic depression, which is typically more severe than a non-melancholic depression, and psychotic depression. Melancholic 
			 depression is thought to be more strongly influenced by biological factors than non-melancholic depression, affecting around 1-2% 
			 of the general population. Psychotic depression, which presents with psychotic features, is relatively uncommon. Depression can often 
			 co-occur with other anxiety and substance abuse disorders.       </p>
              <br />
              <p>
              By spending less time doing the things that bring purpose and fun to your life, your depression can lead to other problems. You may find yourself relying on alcohol or drugs to help manage your moods. This in turn can increase your depressive symptoms and make positive action seem more difficult.</p>
              <br />
              <p>
There are different types of depressive disorders. While they all affect your physical and mental health, they differ by how long you remain affected, when they occur, and possible causes ??? which can vary greatly from person to person.             
			 You can read in detail about the types of Depressive Disorders
              <a
                href="https://www.webmd.com/depression/guide/depression-types"
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
              <li>Feeling Sad Or Depressed Most Of The Time</li>
<li>Sleep Disturbances</li>
<li>Irritability</li>
<li>General Lack Of Interest And Enjoyment In Activities Previously Engaging</li>
<li>Crying Often</li>
<li>Feeling Anxious
<li>Unintentional Changes In Weight, Either Weight Gain Or Loss, And Changes In Appetite</li>
<li>Feeling Restless Or Unable To Concentrate</li>
<li>Fatigue</li>
<li>Feeling Worthless Or Guilty</li>
<li>Lack Of Self-esteem</li>
<li>Loss Of Libido</li>
<li>Suicidal Or Self-harming Thoughts</li>
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
          <p>Some helpful forms of therapy and Medications for depression include:</p>
          <p>
            <ul>
            <li><strong>Cognitive behavioral therapy (CBT)
 </strong> - CBT is one of the most popular and commonly used therapies for depression. Hundreds of studies have verified its safety and effectiveness.
In CBT, the focus is on changing thoughts and behaviors that can worsen or encourage depression. These thoughts often contribute to:
feelings of worthlessness,
frustration with yourself,
hopelessness,
feelings of being ???stuck??? or ???in a rut???.
A therapist will usually work with you one-on-one to help you learn to replace these thoughts with more realistic thoughts that support your well-being and goals.
You don???t usually focus on your past in CBT. Instead, you???ll focus on changing your thoughts, feelings, and behaviors right now.
</li>
            <li><strong>Interpersonal therapy (IPT)</strong>- In IPT, you address your social relationships and how to improve them.
Stable social support is often considered key to overall well-being. When relationships falter, it can negatively impact the people in them.
The aim of IPT is to improve a person???s relationship skills, such as:
communicating effectively,
expressing emotions clearly,
being assertive in personal and professional situations.
Like CBT, IPT usually takes place with a therapist one-on-one but also can be done in a group setting.
</li>
            <li><strong>Behavioral activation therapy (BA)</strong>- BA therapy can help people change behaviors, which in turn may help change their moods.
Research has found BA to be just as effective as cognitive therapy in managing depression.
In BA, you might learn:
to identify when you start to feel depressed,
how to engage in activities that line up with your beliefs and values,
replace behaviors that contribute to depression with ones that don???t.
</li>
            <li><strong>Acceptance and commitment therapy (ACT)
</strong>- In ACT, acceptance and mindfulness are key. One of the main goals of ACT is to help people live according to their values while coping with uncomfortable thoughts and feelings.
If you live with depression, ACT may help you:
focus on the present,
observe and accept uncomfortable thoughts and feelings,
identify what???s most meaningful and important to you,
act on your values.
One study found that ACT???s emphasis on value-based action helped people reduce symptoms of depression.
</li>
            <li><strong>Problem-solving therapy (PST)
</strong>- In some cases, depression can cause people to view problems as threats or believe they???re incapable of solving the problem.
In PST, your therapist may help you:
define the problem,
brainstorm alternative realistic solutions,
select a helpful solution,
put that solution in place and evaluate it.
</li>


<li><strong>Short-term psychodynamic psychotherapy (STPP)
</strong>- STPP focuses on interpersonal relationships and unconscious thoughts and feelings.
The primary goal of STPP is to reduce your depression symptoms. The secondary goal is to 
decrease your vulnerability to depression and increase your resilience.
</li>


<li><strong>Family or couples therapy
</strong>- Family or couples therapy can help if depression is impacting your family dynamic or the health of your relationships.
These therapies tend to focus on:
interpersonal relationships of family members,
clear and straightforward communication,
the roles of family members in managing your depression,
education about depression and mental health.
Therapy is an active collaboration between you and your therapist (and sometimes loved ones).
Whatever therapy you choose, taking a proactive approach can help. This means keeping up with assignments between sessions and letting your therapist know if you have any concerns.
</li>

<li><strong>Medications
</strong>- Antidepressants are the most commonly prescribed medications for depression.
Most antidepressants prescribed today are both safe and effective when taken according to your healthcare professional???s directions.
In the United States, antidepressants are often prescribed by family doctors or general practitioners. But many people find it most helpful to work with a psychiatrist or other mental health professional, as they may have extensive knowledge of medication types and side effects.
Your doctor will recommend a medication based on factors such as:
your past experiences with meds,
side effects you experienced with any other medications,
co-occurring medical or mental health conditions,
any other meds you???re taking,
your personal preference,
the medication???s short and long-term side effects,
the toxicity of overdose,
any history your relatives have had with the medication,
financial constraints.
It can take up to 6 to 8 weeks to start getting results with most antidepressants, so you may need to give it some time.
</li>

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
            <h3 class="Title2">Helping Someone With An Depressive Disorders</h3>

            <p>
             The best thing you can do for someone with depression is to be there.
			 Sending a card or a text to cooking a meal to leaving a voicemail. ???These gestures provide a loving connection and 
			 they???re also a beacon of light that helps guide your loved one when the darkness lifts.???</p>
              <br />
              <p>
                Don???t judge or criticize - 
What you say can have a powerful impact on your loved one. Avoid the tough-love approach - 
Many individuals think that being tough on their loved one will undo their depression or inspire positive behavioral changes. For instance, 
some people might intentionally be impatient with their loved one, push their boundaries, use silence, be callous or even give an ultimatum 
(e.g., ???You better snap out of it or I???m going to leave???). But consider that this is as useless, 
hurtful and harmful as ignoring.

</p>
              <br />
              <p>
               Don???t minimize their pain - 
Statements such as ???You???re just too thin-skinned??? or ???Why do you let every little thing bother you???? shame a person with depression. 
It invalidates what they???re experiencing and completely glosses over the fact that they???re struggling with a difficult disorder ???
not some weakness or personality flaw. Avoid offering advice - 
It probably seems natural to share advice with your loved one. Whenever someone we care about is having a tough time, we yearn to fix their heartache.
What helps instead is to ask, ???What can we do to help you feel better???? This gives your love one the opportunity to ask for help. 
???When a person asks for help they are more inclined to be guided and take direction without feeling insulted,???.
</p>
              <br />
              <p>
                Avoid making comparisons - 
Unless you???ve experienced a depressive episode yourself, saying that you know how a person with depression feels is not helpful. 
While your intention is probably to help your loved one feel less alone in their despair, 
this can cut short your conversation and minimize their experience. Learn as much as you can about depression - 
You can avoid the above missteps and misunderstandings simply by educating yourself about depression.
 Once you can understand depression???s symptoms, course and consequences, you can better support your loved one.
</p>
              <br />
              <p>
               Be patient- patience is a pivotal part of supporting your loved one. ???When you???re patient with your loved one, you???re letting them 
			   know that it doesn???t matter how long this is going to take, or how involved the treatments are going to be, or the difficulties 
			   that accompany the passage from symptom onset to recovery, because you will be there,???.
And this patience has a powerful result. ???With such patience, comes hope,???. And when you have depression, hope can be hard to come by.
Sometimes supporting someone with depression may feel like you???re walking a tight rope. What do I say? What do I not say? What do I do? 
What do I not do?
But remember that just by being there and asking how you can help can be an incredible gift.

              </p>
              <br/>
              
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
                      >???I was stressed and under depression when I had no money to take care of my family, my business failed and even I had heart-attack. It happened all of a sudden(actually it was going for 4 years) but after the surgery, I understood that it was major depression that was drowning my physical health too.
Later, I started practicing Yoga religiously and now I am in a better state. I want to tell you all to take care of your mental as well 
as physical health.??? <a style = "color : #1181ae;" href="experience.html">..Read More</a></span
                    >
                    <footer >
                      <cite>Laura</cite>
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
                    <span class="Title1" style = "font-size: 18px; text-shadow: none;  line-height: 20px;"
                      >???After wasting 48 years of my life, it happened and It happened so soon, 
					  I lost all the control and lashed out. It was a first for me and hopefully last. 
					  I never thought that it was possible that it was in me. We were poor and my parents busy. 
					  They dedicated their whole lives raising me and my elder brother, who died of drug abuse some years back. 
					  As an introvert and a reticent, I never spoke much. I was sold off to a stranger in the name of marriage 
					  as my parents could no longer bear my expenses. I never protested for anything. I never had enough courage 
					  to speak up even in front of my parents. I was too timid.??? <a style = "color : #1181ae;" href="experience.html">..Read More</a></span
                    >
                    <footer>
                      <cite>Anonymous</cite>
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
                    <span class="Title1" style = "font-size: 18px; text-shadow: none; line-height: 25px;"
                      >???I have always been a writer at heart but didn???t listen to its calling for quite some time. After graduating from a degree in Animation and despite having tried a lot,  I could not get a gainful employment. 

Confused, I started studying for competitive exams. First,  I appeared for the prestigious CAT but again,  didn???t get a good enough percentile to get through to the top MBA colleges in the country. Side by side,  
I even appeared for other management exams but the result was the same, I couldn???t get through.??? <a style = "color : #1181ae;" href="experience.html">..Read More</a>
                      </span
                    >
                    <footer>
                      <cite>Sarang</cite>
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
                  <a href="index.html"
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
