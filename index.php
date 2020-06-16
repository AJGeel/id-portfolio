<!DOCTYPE html>
<!--
Reflective Portfolio by Arthur Geel
Proudly developed from scratch using HTML/CSS/JS/PHP.
-->
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="index, nofollow">
  <title>Portfolio — Arthur Geel</title>
  <meta name="description" content="Welcome to the reflective portfolio of Arthur Geel. On this page, I document and reflect on the development in the expertise areas developed in my Master's study Industrial Design at the TU/e.">
  <meta name="keywords" content="Arthur Geel">
  <meta name="author" content="Arthur Geel, hello@arthurgeel.com">
  <link rel="shortcut icon" href="/i/logo.png" type="image/png" id="favicon">

  <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css/normalize.min.css"> <!-- Normalize v8.0.1. MIT License -->
  <link rel="stylesheet" href="/css/style.min.css">

  <!-- Non-essential CSS is deferred to reduce initial page load time  -->
  <!-- PhotoSwipe v4.1.3. MIT License -->
  <link rel="stylesheet" href="/css/photoswipe.min.css">
  <link rel="stylesheet" href="/css/default-skin/default-skin.css">
  <!-- Balloon.css v1.1.0. MIT License -->
  <link rel="stylesheet" href="/css/balloon.min.css">

</head>

<body>

  <a href="#!" id="hamburgerMenu">☰</a>
  <aside>
    <!-- Sticky navigational menu, providing quick navigation through this page. -->
    <nav>
      <a href="#Welcome" class="active">Welcome</a>
      <a href="#About-Me">About Me</a>
      <a href="#Growth">Growth</a>
      <a href="#M11">M11</a>
      <a href="#M12">M12</a>
      <a href="#M21">M21</a>
      <a href="#M22">M22</a>
      <a href="#Future">Future</a>
    </nav>
    <div class="icon-row vertical">
      <div class="icon-list__icon icon__be" data-balloon-length="medium" aria-label="Business &amp; Entrepreneurship" data-balloon-pos="right"><img src="i/icons/business-entrepreneurship.svg" alt="Business and Entrepreneurship Icon"></div>
      <div class="icon-list__icon icon__ca" data-balloon-length="medium" aria-label="Creativity &amp; Aesthetics" data-balloon-pos="right"><img src="i/icons/creativity-aesthetics.svg" alt="Creativity and Aesthetics Icon"></div>
      <div class="icon-list__icon icon__drp" data-balloon-length="medium" aria-label="Design &amp; Research Processes" data-balloon-pos="right"><img src="i/icons/design-research-processes.svg" alt="Design and Research Processes Icon"></div>
      <div class="icon-list__icon icon__mdc" data-balloon-length="medium" aria-label="Math, Data &amp; Computing" data-balloon-pos="right"><img src="i/icons/math-data-computing.svg" alt="Math, Data and Computing Icon"></div>
      <div class="icon-list__icon icon__tr" data-balloon-length="medium" aria-label="Technology &amp; Realization" data-balloon-pos="right"><img src="i/icons/technology-realization.svg" alt="Technology and Realization Icon"></div>
      <div class="icon-list__icon icon__us" data-balloon-length="medium" aria-label="User &amp; Society" data-balloon-pos="right"><img src="i/icons/user-society.svg" alt="User and Society Icon"></div>
    </div>
  </aside>

  <main>
    <!-- Section 1: Introduction -->
    <section id="Welcome">
      <div class="section__slide">
        <div class="section__slide-inner">
          <div class="section__slide-block">
            <h1 class="width__small">Portfolio</h1>
            <h1 class="width__small">MSc Industrial Design</h1>
            <h1 class="width__small">Arthur Geel</h1>
            <p class="width__small hide-for-non-mobile">June 18th, 2020</p>
            <p class="width__small hide-for-non-mobile">Eindhoven University of Technology</p>
          </div>
          <div class="section__slide-block image">
            <div id="container">
              <img src="/i/ajgeel-splash.jpg" alt="Arthur Geel">
              <div id="circle">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="400px" height="400px" viewBox="0 0 300 300" enable-background="new 0 0 300 300" xml:space="preserve">
                    <defs>
                        <path id="circlePath" d=" M 150, 150 m -120, 0 a 120,120 0 0,1 240,0 a 120,120 0 0,1 -240,0 "/>
                    </defs>
                    <g>
                        <use xlink:href="#circlePath" fill="none"/>
                        <text fill="#333" text-rendering="optimizeLegibility">
                            <textPath xlink:href="#circlePath">Becoming a Pi-Shaped UX Designer
                              &nbsp; &nbsp; &nbsp;
                              &mdash;
                              &nbsp; &nbsp; &nbsp;
                              June 18th, 2020
                              &nbsp; &nbsp; &nbsp;
                              &mdash;
                              &nbsp; &nbsp; &nbsp;
                              Eindhoven University of Technology
                            </textPath>
                        </text>
                    </g>
                </svg>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="section__inner first">
        <h2 class="width__small">Welcome</h2>
        <p class="width__small p__intro"><b>Good <span id="timeOfDay">day</span>, and welcome to my Final Master Portfolio!</b></p>
        <p class="width__small p__intro">On this page I present <b>a timeline of the work I did over the past two years</b>, which is supported with reflections how they contributed to my competency development. <b>The menu on the <span id="smallViewport">top right</span><span id="bigViewport">left</span></b> contains an overview of the sections in this portfolio, which will help you keep track of where you are. Furthermore, you can <b>click on images</b>, which will show additional high-resolution photos for projects, accompanied by brief descriptions. I hope you enjoy!</p>
        <p class="width__small p__intro">&mdash; Arthur</p>
        <!-- <p class="width__small p__intro" data-balloon-length="large" aria-label="" data-balloon-pos="left" data-balloon-break>Estimated reading time: ~<span id="readingTime">0</span> minutes.</p> -->

      </div>
    </section>

<!-- Section 2: About Me -->
<section id="About-Me">
  <div class="section__inner second">
    <h2 class="width__small">About Me</h2>
    <div class="two-columns width__small">
      <ul class="no-list-styling">
        <li><span>Name:</span> Arthur Geel</li>
        <li><span>Specialization Track:</span> Research, Design &amp; Development (RDD).</li>
        <li><span>Expertise Areas:</span> Design &amp; Research Processes (DRP), User &amp; Society (US), Technology &amp; Realization (TR).</li>
        <li><span>Things I'm passionate about:</span> Homebrewing, french press coffee, technology (analog/digital), collecting (Drum and Bass) records, science-fiction, digital design.</li>
      </ul>
      <div class="pswp__gallery" itemscope itemtype="https://schema.org/ImageGallery">
        <figure class="no-invert" itemprop="associatedMedia" itemscope itemtype="https://schema.org/ImageObject">
          <a href="/i/ajgeel.jpg" itemprop="contentUrl" data-size="1680x1400">
            <img src="/i/ajgeel@0,2x.jpg" itemprop="thumbnail" alt="Arthur Geel" loading="lazy"/>
          </a>
          <figcaption itemprop="caption description"></figcaption>
        </figure>
      </div>
    </div>
    <h3>Profesional Identity</h3>
    <p class="width__small">Being a designer in the 21st century means adapting to the needs of a rapidly changing world by having competencies in areas that are not traditionally design-related. My response to this shift is to develop myself as a <b>Pi-Shaped Designer</b>. Besides being familiar with a broad range of product design essentials, a Pi-Shaped Designer has two areas of competence in which they excel.</p>
    <p class="width__small">For me, those two areas are <b>designing for digital user experiences</b> and the <b>technological realization of digital products</b>. I believe that such a varied skillset allows me to better understand contexts by analysing them from both perspectives. Consequently, the two competency areas within the TU/e ID Education Framework I have specialized in are <b>User & Society</b> and <b>Technology &amp; Realization</b>. In my process I put an emphasis on creating a thorough understanding of the context and its stakeholders, where I use skills and attitude developed in the User & Society competence to guide me. More specifically, I employ UX methodologies such as design ethnography, contextual inquiries and customer journey mapping to inform my process.</p>
    <p class="width__small">Afterwards, I give shape to the insights by designing digital prototypes in increasing levels of fidelity — from wireframes to complete <b>design systems</b>. These design artifacts allow me to further explore the design space by conducting in-context evaluations. Finally, I enjoy breathing life into prototypes by developing them with my skills in the Technology & Realization competency. My preferred tool of choice for this is a front- end development stack. During my Master’s degree, <b>programming</b> has become an integral part of my designer’s identity and toolkit.</p>
    <p class="width__small">Throughout my time at the TU/e I was driven to complement my academic knowledge with <b>professional experience</b>. In 2017 I had a six-month internship as a Junior Interaction Designer at creative digital agency Momkai <sup><a href="#ref__1" class="link">[ 1 ]</a></sup>, which I discuss in detail in my FBP portfolio <sup><a href="#ref__1" class="link">[ 2 ]</a></sup>. This great experience solidified my interest in becoming a UX Designer. Additionally, from September 2018 until December 2019 I have been working part-time as the sole UX Designer at SPIE Nederland B.V. <sup><a href="#ref__1" class="link">[ 3 ]</a></sup>. In this position I was responsible for re-designing the usability and user experience of legacy applications.</p>
    <p class="width__small">Experiencing the differences in working as a designer at these companies with very differing attitudes towards design
    has given me more <b>perspective</b> for continuing my career as a UX Designer after I graduate.</p>
    <div class="width__small references">
      <h4 id="ref__1">References</h4>
      <ol>
        <li>Momkai (2020). <em>We are Momkai, a design studio that helps dreamers and thinkers to build brands and platforms that serve a purpose.</em> Retrieved from <a href="https://momkai.com/" class="link" target="_blank">momkai.com</a></li>
        <li>Geel, A.J. (July, 2018). <em>Momkai — Half-year Internship.</em> Retrieved from <a href="https://arthurgeel.com/momkai.html" class="link" target="_blank">arthurgeel.com/momkai</a>.</li>
        <li>SPIE Nederland B.V. (n.d.). <em>SPIE - specialist in de installisatiebranche.</em> Retrieved from <a href="https://www.spie-nl.com/" class="link" target="_blank">spie-nl.com</a>.</li>
      </ol>
    </div>

    <h3>Vision on Design</h3>
    <p class="width__small">Computers and the internet have <b>revolutionalised our way of living</b>. We increasingly perform complex tasks that were previously deemed impossible, including connecting with peers all over the world, automating tasks that are repetitive and sharing vast amounts of data. We have made the world <b>more accessible</b>: computers enable all to contribute to our society, regardless of their location, age, gender or disabilities.</p>
    <p class="width__small">In contrast with physical products, the landscape of digital products is a lot more dynamic. By removing physical materials and real-world shipping from the equation, we see new products make it to the market faster, and see existing products receive new features regularly. All these developments seem to <b>rapidly improve our world!</b></p>
    <p class="width__small"><b>However&hellip; that is not always the case.</b> The complexity of the tools we use in everyday life is rapidly expanding, requiring more training and expertise to operate. This clashes with making the world more accessible: not everybody is able to participate anymore as their skillset does not allow them to participate. Furthermore, we are seeing <b>negative societal trends</b> regarding the digital products we use. Our privacy is being eroded through the increasing intensiveness of web trackers and transfer of personal data to third parties, ultimately allowing them to slyly manipulate our behaviour.</p>
    <p class="width__small p__block">With my design I try to take a stand against these developments. I am driven to create <b>digital tools and systems</b> that not only make the internet a <b>more accessible place</b>, but also <b>more respecting</b> of the persons operating it.</p>
  </div>
</section>

<!-- Section 3: Growth -->
<section id="Growth">
  <div class="section__inner">
    <h2 class="width__small">Competency Development</h2>
    <p class="width__small to-be-changed">Insert ~200 word integral reflection here. To be written at the very end.</p>

    <p class="width__small">After spending both my Bachelor's and Master's degrees at ID TU/e, I've become very familiar with the department's Expertise Area framework. In this section I share my personal interpretation of all six competencies.</p>
    <p class="width__small">The icons are used throughout this page to signify which competency area was involved in learning activities. Don't worry about losing track of which icon signifies what, you can hover over icons to see their meaning. Additionally, you can <b>click on an icon</b> to highlight activities that have this competency area.</p>

    <!-- Competency Area-->
    <div class="icon-list width__small">
      <div class="icon-list__icon icon__be" data-balloon-length="large" aria-label="Business &amp; Entrepreneurship" data-balloon-pos="up">
        <img src="i/icons/business-entrepreneurship.svg" alt="Business and Entrepreneurship Icon">
      </div>
      <div class="icon-list__copy">
        <h3>Business &amp; Entrepreneurship</h3>
        <p>This competency is about understanding markets and the 'rules of the game'. It allows me to analyse the environment required to anchor the envisioned design values and make them a reality.</p>
      </div>
    </div>

    <!-- Competency Area-->
    <div class="icon-list width__small">
      <div class="icon-list__icon icon__ca" data-balloon-length="large" aria-label="Creativity &amp; Aesthetics" data-balloon-pos="up">
        <img src="i/icons/creativity-aesthetics.svg" alt="Creativity and Aesthetics Icon">
      </div>
      <div class="icon-list__copy">
        <h3>Creativity &amp; Aesthetics</h3>
        <p>This competency is about exploring possibilities. It allows me to shape design prototypes as 'living hypotheses' used for examining the design space and communicating insights and qualities to stakeholders.</p>
      </div>
    </div>

    <!-- Competency Area-->
    <div class="icon-list width__small">
      <div class="icon-list__icon icon__drp" data-balloon-length="large" aria-label="Design &amp; Research Processes" data-balloon-pos="up">
        <img src="i/icons/design-research-processes.svg" alt="Design and Research Processes Icon">
      </div>
      <div class="icon-list__copy">
        <h3>Design &amp; Research Processes</h3>
        <p>This competency is about moving towards progress. It allows me to build a theoretical foundation and find the strategy to find answers to unknowns. This is made possible by iteration and reflection.</p>
      </div>
    </div>

    <!-- Competency Area-->
    <div class="icon-list width__small">
      <div class="icon-list__icon icon__mdc" data-balloon-length="large" aria-label="Math, Data &amp; Computing" data-balloon-pos="up">
        <img src="i/icons/math-data-computing.svg" alt="Math, Data and Computing Icon">
      </div>
      <div class="icon-list__copy">
        <h3>Math, Data &amp; Computing</h3>
        <p>This competency is about making sense through abstraction. It allows me to make informed decisions by crunching numbers, both manually as well as algorithmically.</p>
      </div>
    </div>

    <!-- Competency Area-->
    <div class="icon-list width__small">
      <div class="icon-list__icon icon__tr" data-balloon-length="large" aria-label="Technology &amp; Realization" data-balloon-pos="up">
        <img src="i/icons/technology-realization.svg" alt="Technology and Realization Icon">
      </div>
      <div class="icon-list__copy">
        <h3>Technology &amp; Realization</h3>
        <p>This competency is about turning concepts into reality. It allows me to understand up-and-coming technologies, integrating them in design concepts to create reliable, interactive systems.</p>
      </div>
    </div>

    <!-- Competency Area-->
    <div class="icon-list width__small">
      <div class="icon-list__icon icon__us" data-balloon-length="medium" aria-label="User &amp; Society" data-balloon-pos="up">
        <img src="i/icons/user-society.svg" alt="User and Society Icon">
      </div>
      <div class="icon-list__copy">
        <h3>User &amp; Society</h3>
        <p>This competency is about expanding perspectives. It allows me to be empathic, curious and sensitive to stakeholders and contexts, and provides me with the tools to approach design problems.</p>
      </div>
    </div>

  </div>
</section>

<!-- Section 4: M11 Semester -->
<section id="M11">
  <div class="section__inner">
    <h2 class="width__small">M11 Semester</h2>
    <p class="width__small">The first semester of my Master's degree was spent exploring the potential tracks that the study had. During this I completed my last group project, which was in the context of the <a href="#EM" class="link">Eindhoven Museum</a>. Furthermore, I completed the core course on <a href="#CDR" class="link">Constructive Design Research</a>, as well as an elective course on <a href="#DIII" class="link">Designing Intelligence in Interaction</a>. Finally, I landed a part-time job as a UX Designer, working at <a href="#SPIE" class="link">SPIE Nederland</a>.</p>

    <div class="activity">
      <h3 id="EM">Project: "Eindhoven Museum"</h3>
      <div class="pswp__gallery width__small" itemscope itemtype="https://schema.org/ImageGallery">
        <figure itemprop="associatedMedia" itemscope itemtype="https://schema.org/ImageObject">
          <a href="/i/ray.jpg" itemprop="contentUrl" data-size="2688x1488">
            <img src="/i/ray@0,33x.jpg" itemprop="thumbnail" alt="Ray Conversational UI" loading="lazy"/>
          </a>
          <figcaption itemprop="caption description">Ray &mdash; a Conversational UI that predicts who you are.. based on how you behaved during your visit to the Eindhoven Museum.</figcaption>
        </figure>
        <figure class="hidden" itemprop="associatedMedia" itemscope itemtype="https://schema.org/ImageObject">
          <a href="/i/ray-2.jpg" itemprop="contentUrl" data-size="1488x2000">
            <img src="/i/ray-2@0,33x.jpg" itemprop="thumbnail" alt="Ray Conversational UI" loading="lazy"/>
          </a>
          <figcaption itemprop="caption description">Ray in person. Let's talk!</figcaption>
        </figure>
        <figure class="hidden" itemprop="associatedMedia" itemscope itemtype="https://schema.org/ImageObject">
          <a href="/i/em-early-prototype.jpg" itemprop="contentUrl" data-size="2688x1488">
            <img src="/i/em-early-prototype@0,33x.jpg" itemprop="thumbnail" alt="Eindhoven Museum early prototype" loading="lazy"/>
          </a>
          <figcaption itemprop="caption description">Early concept exploration: matching Eindhoven Museum and Gamification.</figcaption>
        </figure>
      </div>
      <div class="icon-row width__small" style="filter: hue-rotate(-135deg) saturate(2);">
        <div class="icon-list__icon icon__be" data-balloon-length="large" aria-label="Business &amp; Entrepreneurship" data-balloon-pos="up"><img src="i/icons/business-entrepreneurship.svg" alt="Business and Entrepreneurship Icon"></div>
        <div class="icon-list__icon icon__ca" data-balloon-length="large" aria-label="Creativity &amp; Aesthetics" data-balloon-pos="up"><img src="i/icons/creativity-aesthetics.svg" alt="Creativity and Aesthetics Icon"></div>
        <div class="icon-list__icon icon__drp" data-balloon-length="large" aria-label="Design &amp; Research Processes" data-balloon-pos="up"><img src="i/icons/design-research-processes.svg" alt="Design and Research Processes Icon"></div>
        <div class="icon-list__icon icon__mdc" data-balloon-length="large" aria-label="Math, Data &amp; Computing" data-balloon-pos="up"><img src="i/icons/math-data-computing.svg" alt="Math, Data and Computing Icon"></div>
        <div class="icon-list__icon icon__tr" data-balloon-length="large" aria-label="Technology &amp; Realization" data-balloon-pos="up"><img src="i/icons/technology-realization.svg" alt="Technology and Realization Icon"></div>
        <div class="icon-list__icon icon__us" data-balloon-length="medium" aria-label="User &amp; Society" data-balloon-pos="up"><img src="i/icons/user-society.svg" alt="User and Society Icon"></div>
      </div>
      <p class="width__small p__details">Grade: Excellence</p>
      <p class="width__small">In the M11 project we worked for the client 'Eindhoven Museum', and were asked to aid in their vision of becoming a <b>pop-up museum &mdash; Museum in the City</b>. Through an iterative process we explored ways of extracting more value from their collection of over 23.000 items, which included tangible interactions, gamification and the element of surprise. The final concept was 'Ray': an <b>interactive agent</b> that makes real-time predictions on visitors of exhibitions, all based on their behaviour.</p>
      <p class="width__small">In this project I gained skills in managing the different disciplines we had in our team, for example by <b>hosting UX design workshops</b> and taking the lead in <b>technical realization</b> of this digital protoytpe.</p>
      <p class="width__small collab">In collaboration with <span class="thanks" data-balloon-length="medium" aria-label="Thank you, Shen!" data-balloon-pos="up">Yiwen Shen</span>, <span class="thanks" data-balloon-length="medium" aria-label="Thank you, Krishnaa!" data-balloon-pos="up">Krishnaa Seck</span> &amp; <span class="thanks" data-balloon-length="medium" aria-label="Thank you, Liang!" data-balloon-pos="up">Xueqing Liang</span>.</p>
      <div class="width__small deliverables">
        <a class="deliverables__item" href="/documents/M11_Report_Geel_AJ_Eindhoven-Museum.pdf" target="_blank">
          <div class="deliverables__item-left">
            <h4><img src="/i/icons/check-square.svg" alt="Square checkmark icon">Group Report: 'Ray'</h4>
            <!-- <p>Extensive report that covers the design process, technical configuration of the prototype and user evaluation.</p> -->
          </div>
          <div class="deliverables__item-right">
            <p class="deliverables__file-size">8MB</p>
            <img src="/i/icons/file-pdf.png" alt="PDF File Icon">
          </div>
        </a>
        <a class="deliverables__item" href="/documents/M11_Reflection_Geel_AJ_Eindhoven-Museum.pdf" target="_blank">
          <div class="deliverables__item-left">
            <h4><img src="/i/icons/check-square.svg" alt="Square checkmark icon">Individual Reflection</h4>
          </div>
          <div class="deliverables__item-right">
            <p class="deliverables__file-size">0.3MB</p>
            <img src="/i/icons/file-pdf.png" alt="PDF File Icon">
          </div>
        </a>
        <a class="deliverables__item" href="https://arthurgeel.com/archived/clairvoyant/" target="_blank">
          <div class="deliverables__item-left">
            <h4><img src="/i/icons/check-square.svg" alt="Square checkmark icon">Demonstrator Prototype: 'Ray'</h4>
          </div>
          <div class="deliverables__item-right">
            <p class="deliverables__file-size">External</p>
            <img src="/i/icons/file-ray.gif" alt="Ray File Icon" id="ray">
          </div>
        </a>
      </div>
    </div>

    <div class="activity">
      <h3 id="CDR">Elective: "Constructive Design Research"</h3>
      <div class="pswp__gallery width__small" itemscope itemtype="https://schema.org/ImageGallery">
        <figure itemprop="associatedMedia" itemscope itemtype="https://schema.org/ImageObject">
          <a href="/i/wayfinder.jpg" itemprop="contentUrl" data-size="2688x1488">
            <img src="/i/wayfinder@0,33x.jpg" itemprop="thumbnail" alt="Wayfinder Research Poster" loading="lazy"/>
          </a>
          <figcaption itemprop="caption description">Isometric illustration style for the research poster</figcaption>
        </figure>
        <figure class="hidden" itemprop="associatedMedia" itemscope itemtype="https://schema.org/ImageObject">
          <a href="/i/wayfinder-2.jpg" itemprop="contentUrl" data-size="1488x2000">
            <img src="/i/wayfinder-2@0,33x.jpg" itemprop="thumbnail" alt="Wayfinder Research Poster" loading="lazy"/>
          </a>
          <figcaption itemprop="caption description">Research poster: 'Presenting Recognizable Open Data in its Related Context.'</figcaption>
        </figure>
      </div>
      <div class="icon-row width__small" style="filter: hue-rotate(55deg) brightness(1.3)">
        <!-- <div class="icon-list__icon icon__be" data-balloon-length="large" aria-label="Business &amp; Entrepreneurship" data-balloon-pos="up"><img src="i/icons/business-entrepreneurship.svg" alt="Business and Entrepreneurship Icon"></div> -->
        <!-- <div class="icon-list__icon icon__ca" data-balloon-length="large" aria-label="Creativity &amp; Aesthetics" data-balloon-pos="up"><img src="i/icons/creativity-aesthetics.svg" alt="Creativity and Aesthetics Icon"></div> -->
        <div class="icon-list__icon icon__drp" data-balloon-length="large" aria-label="Design &amp; Research Processes" data-balloon-pos="up"><img src="i/icons/design-research-processes.svg" alt="Design and Research Processes Icon"></div>
        <div class="icon-list__icon icon__mdc" data-balloon-length="large" aria-label="Math, Data &amp; Computing" data-balloon-pos="up"><img src="i/icons/math-data-computing.svg" alt="Math, Data and Computing Icon"></div>
        <!-- <div class="icon-list__icon icon__tr" data-balloon-length="large" aria-label="Technology &amp; Realization" data-balloon-pos="up"><img src="i/icons/technology-realization.svg" alt="Technology and Realization Icon"></div> -->
        <div class="icon-list__icon icon__us" data-balloon-length="medium" aria-label="User &amp; Society" data-balloon-pos="up"><img src="i/icons/user-society.svg" alt="User and Society Icon"></div>
      </div>
      <p class="width__small p__details">Grade: 7.0</p>
      <p class="width__small">In this elective I was introduced to the full range of <b>Constructive Design Research</b>: 'lab', 'field' and 'showroom'. We explored 'presenting recognizable open data in its related context' by using a <b>Field-style</b> approach. The final concept was 'Wayfinder': a public display of abstract data. The concept was used in an evaluation which had the aim to better understand <b>how open data can be presented</b> in-situ with better interpretability.</p>
      <p class="width__small">As a result of this elective, I have a <b>better perspective</b> on the 'genres' of design research, and learned about the flexible structure that they may have. Specifically, I learnt how the 'field' research style lends itself well for <b>open-ended design exploration</b>.</p>
      <p class="width__small collab">In collaboration with <span class="thanks" data-balloon-length="medium" aria-label="Thank you, Mitchell!" data-balloon-pos="up">Mitchell Ansems</span>, <span class="thanks" data-balloon-length="medium" aria-label="Thank you, Linas!" data-balloon-pos="up">Linas Gabrielaitis</span>, <span class="thanks" data-balloon-length="medium" aria-label="Thank you, Naomi!" data-balloon-pos="up">Naomi Kool</span>, <span class="thanks" data-balloon-length="medium" aria-label="Thank you, Amy!" data-balloon-pos="up">Jianxue 'Amy' Xu</span> &amp; <span class="thanks" data-balloon-length="medium" aria-label="Thank you, Davy!" data-balloon-pos="up">Xiaoyu 'Davy' Yu</span>.</p>
      <div class="width__small deliverables">
        <a class="deliverables__item" href="/documents/DCM100_Paper_Geel_AJ.pdf" target="_blank">
          <div class="deliverables__item-left">
            <h4><img src="/i/icons/check-square.svg" alt="Square checkmark icon">Group Paper: 'Wayfinder'</h4>
          </div>
          <div class="deliverables__item-right">
            <p class="deliverables__file-size">2MB</p>
            <img src="/i/icons/file-pdf.png" alt="PDF File Icon">
          </div>
        </a>
        <a class="deliverables__item" href="/documents/DCM100_Reflection_Geel_AJ.pdf" target="_blank">
          <div class="deliverables__item-left">
            <h4><img src="/i/icons/check-square.svg" alt="Square checkmark icon">Individual Reflection</h4>
          </div>
          <div class="deliverables__item-right">
            <p class="deliverables__file-size">0.3MB</p>
            <img src="/i/icons/file-pdf.png" alt="PDF File Icon">
          </div>
        </a>
        <a class="deliverables__item" href="/documents/DCM100_Poster_Geel_AJ.pdf" target="_blank">
          <div class="deliverables__item-left">
            <h4><img src="/i/icons/check-square.svg" alt="Square checkmark icon">Individual Poster</h4>
          </div>
          <div class="deliverables__item-right">
            <p class="deliverables__file-size">34MB</p>
            <img src="/i/icons/file-pdf.png" alt="PDF File Icon">
          </div>
        </a>
      </div>
    </div>


    <div class="activity">
      <h3 id="DIII">Elective: "Designing Intelligence in Interaction"</h3>
      <div class="width__small">
        <div style="padding:56.25% 0 0 0;position:relative; margin: 2rem 0 .2rem 0;"><iframe src="https://player.vimeo.com/video/428417817?color=d39d1f&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
      </div>
      <div class="icon-row width__small" style="filter: hue-rotate(272deg) saturate(6.5);">
        <!-- <div class="icon-list__icon icon__be" data-balloon-length="large" aria-label="Business &amp; Entrepreneurship" data-balloon-pos="up"><img src="i/icons/business-entrepreneurship.svg" alt="Business and Entrepreneurship Icon"></div> -->
        <div class="icon-list__icon icon__ca" data-balloon-length="large" aria-label="Creativity &amp; Aesthetics" data-balloon-pos="up"><img src="i/icons/creativity-aesthetics.svg" alt="Creativity and Aesthetics Icon"></div>
        <div class="icon-list__icon icon__drp" data-balloon-length="large" aria-label="Design &amp; Research Processes" data-balloon-pos="up"><img src="i/icons/design-research-processes.svg" alt="Design and Research Processes Icon"></div>
        <div class="icon-list__icon icon__mdc" data-balloon-length="large" aria-label="Math, Data &amp; Computing" data-balloon-pos="up"><img src="i/icons/math-data-computing.svg" alt="Math, Data and Computing Icon"></div>
        <div class="icon-list__icon icon__tr" data-balloon-length="large" aria-label="Technology &amp; Realization" data-balloon-pos="up"><img src="i/icons/technology-realization.svg" alt="Technology and Realization Icon"></div>
        <!-- <div class="icon-list__icon icon__us" data-balloon-length="medium" aria-label="User &amp; Society" data-balloon-pos="up"><img src="i/icons/user-society.svg" alt="User and Society Icon"></div> -->
      </div>
      <p class="width__small p__details">Grade: 8.0</p>
      <p class="width__small">In this elective I gained further intuition in designing- and realizing intelligent systems based on <b>Artificial Intelligence</b>. Alongside the group we explored <b>multiple architectures of neural networks</b> with the aim to replace the need for eartags on goats, made possible by well-integrated <b>facial recognition for goats</b>.</p>
      <p class="width__small">In the process I gained insight in the importance of integrating a seamless way to collect <b>reliable data</b> (we chose the milking carousel), and use <b>data visualisation</b> to identify features in the dataset which had the most potential. Finally, I've learned about strategies to <b>extract more information from images</b>, such as using edge detection filters and comparing values in different colour spaces.
      <p class="width__small collab">In collaboration with <span class="thanks" data-balloon-length="medium" aria-label="Thank you, Jesper!" data-balloon-pos="up">Jesper van Bentum</span>, <span class="thanks" data-balloon-length="medium" aria-label="Thank you, Marleen!" data-balloon-pos="up">Marleen Hillen</span> &amp; <span class="thanks" data-balloon-length="medium" aria-label="Thank you, Tim!" data-balloon-pos="up">Tim van de Puttelaar</span>.</p>
      <div class="width__small deliverables">
        <a class="deliverables__item" href="/documents/DBM130_Paper_Geel_AJ.pdf" target="_blank">
          <div class="deliverables__item-left">
            <h4><img src="/i/icons/check-square.svg" alt="Square checkmark icon">Report: 'Digital Goat Farmer`s Assistant</h4>
          </div>
          <div class="deliverables__item-right">
            <p class="deliverables__file-size">2MB</p>
            <img src="/i/icons/file-pdf.png" alt="PDF File Icon">
          </div>
        </a>
        <a class="deliverables__item" href="/documents/DBM130_Reflection_Geel_AJ.pdf" target="_blank">
          <div class="deliverables__item-left">
            <h4><img src="/i/icons/check-square.svg" alt="Square checkmark icon">Individual Reflection</h4>
          </div>
          <div class="deliverables__item-right">
            <p class="deliverables__file-size">0.2MB</p>
            <img src="/i/icons/file-pdf.png" alt="PDF File Icon">
          </div>
        </a>
      </div>
    </div>


    <div class="activity">
      <h3 id="SPIE">Extracurricular: "UX Designer at SPIE Nederland B.V."</h3>
      <div class="pswp__gallery width__small" itemscope itemtype="https://schema.org/ImageGallery">
        <figure itemprop="associatedMedia" itemscope itemtype="https://schema.org/ImageObject">
            <a href="/i/spie-urenportaal.jpg" itemprop="contentUrl" data-size="2688x1488">
            <img src="/i/spie-urenportaal@0,33x.jpg" itemprop="thumbnail" alt="SPIE Urenportaal" loading="lazy" />
          </a>
          <figcaption itemprop="caption description">Final design of the SPIE Urenportaal App: a web application that allows SPIE employees to keep track of their worked hours on their phones.</figcaption>
        </figure>
        <figure class="hidden" itemprop="associatedMedia" itemscope itemtype="https://schema.org/ImageObject">
            <a href="/i/spie-urenportaal-2.jpg" itemprop="contentUrl" data-size="2688x1488">
            <img src="/i/spie-urenportaal-2@0,33x.jpg" itemprop="thumbnail" alt="SPIE Urenportaal" loading="lazy" />
          </a>
          <figcaption itemprop="caption description">Overview of the Figma project of the Urenportaal Final Designs. I introduced Figma in SPIE, showcasing its qualities in speeding up projects through the use of visual prototyping, using grids and using re-usable components.</figcaption>
        </figure>
      </div>
      <div class="icon-row width__small" style="filter: hue-rotate(75deg)">
        <div class="icon-list__icon icon__be" data-balloon-length="large" aria-label="Business &amp; Entrepreneurship" data-balloon-pos="up"><img src="i/icons/business-entrepreneurship.svg" alt="Business and Entrepreneurship Icon"></div>
        <div class="icon-list__icon icon__ca" data-balloon-length="large" aria-label="Creativity &amp; Aesthetics" data-balloon-pos="up"><img src="i/icons/creativity-aesthetics.svg" alt="Creativity and Aesthetics Icon"></div>
        <div class="icon-list__icon icon__drp" data-balloon-length="large" aria-label="Design &amp; Research Processes" data-balloon-pos="up"><img src="i/icons/design-research-processes.svg" alt="Design and Research Processes Icon"></div>
        <div class="icon-list__icon icon__mdc" data-balloon-length="large" aria-label="Math, Data &amp; Computing" data-balloon-pos="up"><img src="i/icons/math-data-computing.svg" alt="Math, Data and Computing Icon"></div>
        <div class="icon-list__icon icon__tr" data-balloon-length="large" aria-label="Technology &amp; Realization" data-balloon-pos="up"><img src="i/icons/technology-realization.svg" alt="Technology and Realization Icon"></div>
        <div class="icon-list__icon icon__us" data-balloon-length="medium" aria-label="User &amp; Society" data-balloon-pos="up"><img src="i/icons/user-society.svg" alt="User and Society Icon"></div>
      </div>
      <p class="width__small">In September 2018 I was hired by <a href="https://www.spie-nl.com/" class="link" target="_blank">SPIE Nederland</a> as a UX Designer &mdash; their very first. As a part-time (0.2 FTE) UX Designer I was hired to introduce <b>design expertise</b> in the Dutch branch of the multinational company, something that was sorely lacking.</p>
      <p class="width__small">SPIE has a lot of custom-made tools that were developed in-house, powerering thousands of their Dutch employees. However, these tools were not created with <b>usability nor aesthetics</b> in mind, resulting in tools that functionally accomplish what they are supposed to do, yet are limited in use. Furthermore, this mentality <b>frustrated progress</b>: projects were realized in code from the get-go, <b>without ever exploring</b> the options, users, context or values. Consequently, fewer iterations were made, and the end-results did not reflect the time invested.</p>
      <p class="width__small">In the time that I have worked at SPIE, I have contributed to several projects, always directing the design processes. For instance, I've re-designed a <b>workflow support application for mechanics</b> to suit mobile phones and tables, helping them in carrying out their jobs and simplifying their data administration. Additionally, I visually re-designed the <b>Financial Dashboard for business managers</b>, helping them more easily take strategic decisions based on data. Finally, I conducted UX Research and designed a mobile variant of the <b>Urenportaal App</b>, a mobile-first approach to enable all SPIE Nederland employees to report their time on a phone &mdash; something that previously required mandatory logging onto a computer to do.</p>
      <p class="width__small">In December 2019 I vacated my job at SPIE in order to focus on my Final Master Project. Looking back, it has been excellent for my personal development, allowing me to grow in <b>all competency areas</b> by carrying out real-world projects. However, perhaps the biggest growth was in the competency of <b>Business &amp; Entrepreneurship</b>, due to the financial implications of working in a real-life context. Working has given me experience in <b>collaborating with multiple stakeholders</b> within the company, whose interests did not always align. Additionally, it has taught me to better <b>articulate the value of design</b>, helping in value propositions. Finally, I've gained perspective on <b>the management of risk</b>, an essential component of bringing design concepts to reality.</p>

    </div>

  </div>
</section>

<!-- Section 5: M12 Semester -->
<section id="M12">
  <div class="section__inner">
    <h2 class="width__small">M12 Semester</h2>
    <p class="width__small">In euismod, dui at artibus maximus, nibh dui elementum risus, vitae tincidunt arturus leo sit amet ligula. Integer quis mollis nulla. Artem ipsum dolor sit amet, consectetur adipiscing elit. Donec dignissim eros vel ante rhoncus, sit amet aliquet massa placerat. Donec artem turpis, vulputate a vestibulum a, cursus eu arcu. Nunc sit amet velit sed nibh congue artuere. Morbi ut turpis eget nisl tincidunt fermentum. Integer arcu nisi, aliquam a urna vitae, tincidunt commodo arcu.</p>

    <div class="activity">
      <h3>Project: 'The Live Persona'</h3>
      <div class="pswp__gallery width__small" itemscope itemtype="https://schema.org/ImageGallery">
        <figure itemprop="associatedMedia" itemscope itemtype="https://schema.org/ImageObject">
          <a href="https://placehold.it/2688x1488" itemprop="contentUrl" data-size="2688x1488">
            <img src="https://placehold.it/672x372" itemprop="thumbnail" alt="Placeholder" />
            <!-- <a href="/i/ray.jpg" itemprop="contentUrl" data-size="2688x1488">
            <img src="/i/ray@0,33x.jpg" itemprop="thumbnail" alt="Ray Conversational UI" loading="lazy" /> -->
          </a>
          <figcaption itemprop="caption description"></figcaption>
        </figure>
      </div>
      <div class="icon-row width__small">
        <!-- <div class="icon-list__icon icon__be" data-balloon-length="large" aria-label="Business &amp; Entrepreneurship" data-balloon-pos="up"><img src="i/icons/business-entrepreneurship.svg" alt="Business and Entrepreneurship Icon"></div> -->
        <div class="icon-list__icon icon__ca" data-balloon-length="large" aria-label="Creativity &amp; Aesthetics" data-balloon-pos="up"><img src="i/icons/creativity-aesthetics.svg" alt="Creativity and Aesthetics Icon"></div>
        <div class="icon-list__icon icon__drp" data-balloon-length="large" aria-label="Design &amp; Research Processes" data-balloon-pos="up"><img src="i/icons/design-research-processes.svg" alt="Design and Research Processes Icon"></div>
        <div class="icon-list__icon icon__mdc" data-balloon-length="large" aria-label="Math, Data &amp; Computing" data-balloon-pos="up"><img src="i/icons/math-data-computing.svg" alt="Math, Data and Computing Icon"></div>
        <div class="icon-list__icon icon__tr" data-balloon-length="large" aria-label="Technology &amp; Realization" data-balloon-pos="up"><img src="i/icons/technology-realization.svg" alt="Technology and Realization Icon"></div>
        <div class="icon-list__icon icon__us" data-balloon-length="medium" aria-label="User &amp; Society" data-balloon-pos="up"><img src="i/icons/user-society.svg" alt="User and Society Icon"></div>
      </div>
      <p class="width__small p__details">Grade: Pass</p>
      <p class="width__small">In euismod, dui at artibus maximus, nibh dui elementum risus, vitae tincidunt arturus leo sit amet ligula. Integer quis mollis nulla. Artem ipsum dolor sit amet, consectetur adipiscing elit. Donec dignissim eros vel ante rhoncus, sit amet aliquet massa placerat. Donec artem turpis, vulputate a vestibulum a, cursus eu arcu. Nunc sit amet velit sed nibh congue artuere. Morbi ut turpis eget nisl tincidunt fermentum. Integer arcu nisi, aliquam a urna vitae, tincidunt commodo arcu.</p>
      <div class="width__small deliverables">
        <a class="deliverables__item" href="/documents/M12_Paper_Geel_AJ.pdf" target="_blank">
          <div class="deliverables__item-left">
            <h4><img src="/i/icons/check-square.svg" alt="Square checkmark icon">Paper: 'The Live Persona'</h4>
          </div>
          <div class="deliverables__item-right">
            <p class="deliverables__file-size">3MB</p>
            <img src="/i/icons/file-pdf.png" alt="PDF File Icon">
          </div>
        </a>
        <a class="deliverables__item" href="/documents/M12_Reflection_Geel_AJ.pdf" target="_blank">
          <div class="deliverables__item-left">
            <h4><img src="/i/icons/check-square.svg" alt="Square checkmark icon">Individual Reflection</h4>
          </div>
          <div class="deliverables__item-right">
            <p class="deliverables__file-size">0.3MB</p>
            <img src="/i/icons/file-pdf.png" alt="PDF File Icon">
          </div>
        </a>
        <a class="deliverables__item" href="https://arthurgeel.com/tp/" target="_blank">
          <div class="deliverables__item-left">
            <h4><img src="/i/icons/check-square.svg" alt="Square checkmark icon">Research Onboarding / Demonstrator</h4>
          </div>
          <div class="deliverables__item-right">
            <p class="deliverables__file-size">External</p>
            <img src="/i/icons/file-external.png" alt="External File Icon">
          </div>
        </a>
      </div>
    </div>


    <div class="activity">
      <h3>Elective: "UX Theory &amp; Practice"</h3>
      <div class="pswp__gallery width__small" itemscope itemtype="https://schema.org/ImageGallery">
        <figure itemprop="associatedMedia" itemscope itemtype="https://schema.org/ImageObject">
          <a href="https://placehold.it/2688x1488" itemprop="contentUrl" data-size="2688x1488">
            <img src="https://placehold.it/672x372" itemprop="thumbnail" alt="Placeholder" />
            <!-- <a href="/i/ray.jpg" itemprop="contentUrl" data-size="2688x1488">
            <img src="/i/ray@0,33x.jpg" itemprop="thumbnail" alt="Ray Conversational UI" loading="lazy" /> -->
          </a>
          <figcaption itemprop="caption description"></figcaption>
        </figure>
      </div>
      <div class="icon-row width__small">
        <!-- <div class="icon-list__icon icon__be" data-balloon-length="large" aria-label="Business &amp; Entrepreneurship" data-balloon-pos="up"><img src="i/icons/business-entrepreneurship.svg" alt="Business and Entrepreneurship Icon"></div> -->
        <!-- <div class="icon-list__icon icon__ca" data-balloon-length="large" aria-label="Creativity &amp; Aesthetics" data-balloon-pos="up"><img src="i/icons/creativity-aesthetics.svg" alt="Creativity and Aesthetics Icon"></div> -->
        <div class="icon-list__icon icon__drp" data-balloon-length="large" aria-label="Design &amp; Research Processes" data-balloon-pos="up"><img src="i/icons/design-research-processes.svg" alt="Design and Research Processes Icon"></div>
        <div class="icon-list__icon icon__mdc" data-balloon-length="large" aria-label="Math, Data &amp; Computing" data-balloon-pos="up"><img src="i/icons/math-data-computing.svg" alt="Math, Data and Computing Icon"></div>
        <!-- <div class="icon-list__icon icon__tr" data-balloon-length="large" aria-label="Technology &amp; Realization" data-balloon-pos="up"><img src="i/icons/technology-realization.svg" alt="Technology and Realization Icon"></div> -->
        <div class="icon-list__icon icon__us" data-balloon-length="medium" aria-label="User &amp; Society" data-balloon-pos="up"><img src="i/icons/user-society.svg" alt="User and Society Icon"></div>
      </div>
      <p class="width__small p__details">Grade: 8.0</p>
      <p class="width__small">In euismod, dui at artibus maximus, nibh dui elementum risus, vitae tincidunt arturus leo sit amet ligula. Integer quis mollis nulla. Artem ipsum dolor sit amet, consectetur adipiscing elit. Donec dignissim eros vel ante rhoncus, sit amet aliquet massa placerat. Donec artem turpis, vulputate a vestibulum a, cursus eu arcu. Nunc sit amet velit sed nibh congue artuere. Morbi ut turpis eget nisl tincidunt fermentum. Integer arcu nisi, aliquam a urna vitae, tincidunt commodo arcu.</p>
      <p class="width__small">In collaboration with <span class="thanks" data-balloon-length="medium" aria-label="Thank you, Melvin!" data-balloon-pos="up">Melvin Sterk</span> (Manifesto), and in collaboration with <span class="thanks" data-balloon-length="medium" aria-label="Thank you, Jessie!" data-balloon-pos="up">Jessie Harms</span>, <br><span class="thanks" data-balloon-length="medium" aria-label="Thank you, Marit!" data-balloon-pos="up">Marit Her</span>, <span class="thanks" data-balloon-length="medium" aria-label="Thank you, Marit!" data-balloon-pos="up">Marit Proper</span> &amp; <span class="thanks" data-balloon-length="medium" aria-label="Thank you, Jordy!" data-balloon-pos="up">Jordy Oplaat</span> (Booking.com case).</p>
      <div class="width__small deliverables">
        <a class="deliverables__item" href="/documents/DDM150-UX-Portfolio-Geel_AJ.pdf" target="_blank">
          <div class="deliverables__item-left">
            <h4><img src="/i/icons/check-square.svg" alt="Square checkmark icon">Individual 'UX Portfolio'</h4>
          </div>
          <div class="deliverables__item-right">
            <p class="deliverables__file-size">5MB</p>
            <img src="/i/icons/file-pdf.png" alt="PDF File Icon">
          </div>
        </a>
        <a class="deliverables__item" href="/documents/DDM150_Team-Challenge_Geel_AJ.pdf" target="_blank">
          <div class="deliverables__item-left">
            <h4><img src="/i/icons/check-square.svg" alt="Square checkmark icon">Booking.com Team UX Case</h4>
          </div>
          <div class="deliverables__item-right">
            <p class="deliverables__file-size">0.5MB</p>
            <img src="/i/icons/file-pdf.png" alt="PDF File Icon">
          </div>
        </a>
        <a class="deliverables__item" href="/documents/DDM150_Manifesto_Geel_AJ.pdf" target="_blank">
          <div class="deliverables__item-left">
            <h4><img src="/i/icons/check-square.svg" alt="Square checkmark icon">UX Manifesto</h4>
          </div>
          <div class="deliverables__item-right">
            <p class="deliverables__file-size">0.5MB</p>
            <img src="/i/icons/file-pdf.png" alt="PDF File Icon">
          </div>
        </a>
      </div>
    </div>


    <div class="activity">
      <h3>Elective: "Data-Enabled Design"</h3>
      <div class="pswp__gallery width__small" itemscope itemtype="https://schema.org/ImageGallery">
        <figure itemprop="associatedMedia" itemscope itemtype="https://schema.org/ImageObject">
          <a href="https://placehold.it/2688x1488" itemprop="contentUrl" data-size="2688x1488">
            <img src="https://placehold.it/672x372" itemprop="thumbnail" alt="Placeholder" />
            <!-- <a href="/i/ray.jpg" itemprop="contentUrl" data-size="2688x1488">
            <img src="/i/ray@0,33x.jpg" itemprop="thumbnail" alt="Ray Conversational UI" loading="lazy" /> -->
          </a>
          <figcaption itemprop="caption description"></figcaption>
        </figure>
      </div>
      <div class="icon-row width__small">
        <!-- <div class="icon-list__icon icon__be" data-balloon-length="large" aria-label="Business &amp; Entrepreneurship" data-balloon-pos="up"><img src="i/icons/business-entrepreneurship.svg" alt="Business and Entrepreneurship Icon"></div> -->
        <div class="icon-list__icon icon__ca" data-balloon-length="large" aria-label="Creativity &amp; Aesthetics" data-balloon-pos="up"><img src="i/icons/creativity-aesthetics.svg" alt="Creativity and Aesthetics Icon"></div>
        <div class="icon-list__icon icon__drp" data-balloon-length="large" aria-label="Design &amp; Research Processes" data-balloon-pos="up"><img src="i/icons/design-research-processes.svg" alt="Design and Research Processes Icon"></div>
        <div class="icon-list__icon icon__mdc" data-balloon-length="large" aria-label="Math, Data &amp; Computing" data-balloon-pos="up"><img src="i/icons/math-data-computing.svg" alt="Math, Data and Computing Icon"></div>
        <div class="icon-list__icon icon__tr" data-balloon-length="large" aria-label="Technology &amp; Realization" data-balloon-pos="up"><img src="i/icons/technology-realization.svg" alt="Technology and Realization Icon"></div>
        <div class="icon-list__icon icon__us" data-balloon-length="medium" aria-label="User &amp; Society" data-balloon-pos="up"><img src="i/icons/user-society.svg" alt="User and Society Icon"></div>
      </div>
      <p class="width__small p__details">Grade: 8.0</p>
      <p class="width__small">In euismod, dui at artibus maximus, nibh dui elementum risus, vitae tincidunt arturus leo sit amet ligula. Integer quis mollis nulla. Artem ipsum dolor sit amet, consectetur adipiscing elit. Donec dignissim eros vel ante rhoncus, sit amet aliquet massa placerat. Donec artem turpis, vulputate a vestibulum a, cursus eu arcu. Nunc sit amet velit sed nibh congue artuere. Morbi ut turpis eget nisl tincidunt fermentum. Integer arcu nisi, aliquam a urna vitae, tincidunt commodo arcu.</p>
      <p class="width__small">In collaboration with <span class="thanks" data-balloon-length="medium" aria-label="Thank you, Yizhou!" data-balloon-pos="up">Yizhou Liu</span> &amp; <span class="thanks" data-balloon-length="medium" aria-label="Thank you, Sark!" data-balloon-pos="up">Sark Xing</span>.</p>
      <div class="width__small deliverables">
        <a class="deliverables__item" href="/documents/DBM160_Paper_Geel_AJ.pdf" target="_blank">
          <div class="deliverables__item-left">
            <h4><img src="/i/icons/check-square.svg" alt="Square checkmark icon">Group Pictorial: 'Shared Spaces'</h4>
          </div>
          <div class="deliverables__item-right">
            <p class="deliverables__file-size">5MB</p>
            <img src="/i/icons/file-pdf.png" alt="PDF File Icon">
          </div>
        </a>
        <a class="deliverables__item" href="/documents/DBM160_Reflection_Geel_AJ.pdf" target="_blank">
          <div class="deliverables__item-left">
            <h4><img src="/i/icons/check-square.svg" alt="Square checkmark icon">Individual Reflection</h4>
          </div>
          <div class="deliverables__item-right">
            <p class="deliverables__file-size">0.5MB</p>
            <img src="/i/icons/file-pdf.png" alt="PDF File Icon">
          </div>
        </a>
      </div>
    </div>


    <div class="activity">
      <h3>Extracurricular: "..."</h3>
      <div class="pswp__gallery width__small" itemscope itemtype="https://schema.org/ImageGallery">
        <figure itemprop="associatedMedia" itemscope itemtype="https://schema.org/ImageObject">
          <a href="https://placehold.it/2688x1488" itemprop="contentUrl" data-size="2688x1488">
            <img src="https://placehold.it/672x372" itemprop="thumbnail" alt="Placeholder" />
            <!-- <a href="/i/ray.jpg" itemprop="contentUrl" data-size="2688x1488">
            <img src="/i/ray@0,33x.jpg" itemprop="thumbnail" alt="Ray Conversational UI" loading="lazy" /> -->
          </a>
          <figcaption itemprop="caption description"></figcaption>
        </figure>
      </div>
      <div class="icon-row width__small">
        <div class="icon-list__icon icon__be" data-balloon-length="large" aria-label="Business &amp; Entrepreneurship" data-balloon-pos="up"><img src="i/icons/business-entrepreneurship.svg" alt="Business and Entrepreneurship Icon"></div>
        <div class="icon-list__icon icon__ca" data-balloon-length="large" aria-label="Creativity &amp; Aesthetics" data-balloon-pos="up"><img src="i/icons/creativity-aesthetics.svg" alt="Creativity and Aesthetics Icon"></div>
        <div class="icon-list__icon icon__drp" data-balloon-length="large" aria-label="Design &amp; Research Processes" data-balloon-pos="up"><img src="i/icons/design-research-processes.svg" alt="Design and Research Processes Icon"></div>
        <div class="icon-list__icon icon__mdc" data-balloon-length="large" aria-label="Math, Data &amp; Computing" data-balloon-pos="up"><img src="i/icons/math-data-computing.svg" alt="Math, Data and Computing Icon"></div>
        <div class="icon-list__icon icon__tr" data-balloon-length="large" aria-label="Technology &amp; Realization" data-balloon-pos="up"><img src="i/icons/technology-realization.svg" alt="Technology and Realization Icon"></div>
        <div class="icon-list__icon icon__us" data-balloon-length="medium" aria-label="User &amp; Society" data-balloon-pos="up"><img src="i/icons/user-society.svg" alt="User and Society Icon"></div>
      </div>
      <p class="width__small">In euismod, dui at artibus maximus, nibh dui elementum risus, vitae tincidunt arturus leo sit amet ligula. Integer quis mollis nulla. Artem ipsum dolor sit amet, consectetur adipiscing elit. Donec dignissim eros vel ante rhoncus, sit amet aliquet massa placerat. Donec artem turpis, vulputate a vestibulum a, cursus eu arcu. Nunc sit amet velit sed nibh congue artuere. Morbi ut turpis eget nisl tincidunt fermentum. Integer arcu nisi, aliquam a urna vitae, tincidunt commodo arcu.</p>
    </div>
  </div>

</section>

<!-- Section 6: M21 Semester -->
<section id="M21">
  <div class="section__inner">
    <h2 class="width__small">M21 Semester</h2>
    <p class="width__small">In euismod, dui at artibus maximus, nibh dui elementum risus, vitae tincidunt arturus leo sit amet ligula. Integer quis mollis nulla. Artem ipsum dolor sit amet, consectetur adipiscing elit. Donec dignissim eros vel ante rhoncus, sit amet aliquet massa placerat. Donec artem turpis, vulputate a vestibulum a, cursus eu arcu. Nunc sit amet velit sed nibh congue artuere. Morbi ut turpis eget nisl tincidunt fermentum. Integer arcu nisi, aliquam a urna vitae, tincidunt commodo arcu.</p>
    <div class="activity">
      <h3>Project: "FMP Proposal"</h3>
      <div class="pswp__gallery width__small" itemscope itemtype="https://schema.org/ImageGallery">
        <figure itemprop="associatedMedia" itemscope itemtype="https://schema.org/ImageObject">
          <a href="https://placehold.it/2688x1488" itemprop="contentUrl" data-size="2688x1488">
            <img src="https://placehold.it/672x372" itemprop="thumbnail" alt="Placeholder" />
            <!-- <a href="/i/ray.jpg" itemprop="contentUrl" data-size="2688x1488">
            <img src="/i/ray@0,33x.jpg" itemprop="thumbnail" alt="Ray Conversational UI" loading="lazy" /> -->
          </a>
          <figcaption itemprop="caption description"></figcaption>
        </figure>
      </div>
      <div class="icon-row width__small">
        <div class="icon-list__icon icon__be" data-balloon-length="large" aria-label="Business &amp; Entrepreneurship" data-balloon-pos="up"><img src="i/icons/business-entrepreneurship.svg" alt="Business and Entrepreneurship Icon"></div>
        <div class="icon-list__icon icon__ca" data-balloon-length="large" aria-label="Creativity &amp; Aesthetics" data-balloon-pos="up"><img src="i/icons/creativity-aesthetics.svg" alt="Creativity and Aesthetics Icon"></div>
        <div class="icon-list__icon icon__drp" data-balloon-length="large" aria-label="Design &amp; Research Processes" data-balloon-pos="up"><img src="i/icons/design-research-processes.svg" alt="Design and Research Processes Icon"></div>
        <!-- <div class="icon-list__icon icon__mdc" data-balloon-length="large" aria-label="Math, Data &amp; Computing" data-balloon-pos="up"><img src="i/icons/math-data-computing.svg" alt="Math, Data and Computing Icon"></div> -->
        <!-- <div class="icon-list__icon icon__tr" data-balloon-length="large" aria-label="Technology &amp; Realization" data-balloon-pos="up"><img src="i/icons/technology-realization.svg" alt="Technology and Realization Icon"></div> -->
        <div class="icon-list__icon icon__us" data-balloon-length="medium" aria-label="User &amp; Society" data-balloon-pos="up"><img src="i/icons/user-society.svg" alt="User and Society Icon"></div>
      </div>
      <p class="width__small p__details">Grade: Pass</p>
      <p class="width__small">In euismod, dui at artibus maximus, nibh dui elementum risus, vitae tincidunt arturus leo sit amet ligula. Integer quis mollis nulla. Artem ipsum dolor sit amet, consectetur adipiscing elit. Donec dignissim eros vel ante rhoncus, sit amet aliquet massa placerat. Donec artem turpis, vulputate a vestibulum a, cursus eu arcu. Nunc sit amet velit sed nibh congue artuere. Morbi ut turpis eget nisl tincidunt fermentum. Integer arcu nisi, aliquam a urna vitae, tincidunt commodo arcu.</p>
      <div class="width__small deliverables">
        <a class="deliverables__item" href="/documents/M21_Proposal_Geel_AJ.pdf" target="_blank">
          <div class="deliverables__item-left">
            <h4><img src="/i/icons/check-square.svg" alt="Square checkmark icon">FMP Proposal</h4>
          </div>
          <div class="deliverables__item-right">
            <p class="deliverables__file-size">7MB</p>
            <img src="/i/icons/file-pdf.png" alt="PDF File Icon">
          </div>
        </a>
        <a class="deliverables__item" href="/documents/M21_Reflection_Geel_AJ.pdf" target="_blank">
          <div class="deliverables__item-left">
            <h4><img src="/i/icons/check-square.svg" alt="Square checkmark icon">Individual Reflection</h4>
          </div>
          <div class="deliverables__item-right">
            <p class="deliverables__file-size">0.4MB</p>
            <img src="/i/icons/file-pdf.png" alt="PDF File Icon">
          </div>
        </a>
      </div>
    </div>


    <div class="activity">
      <h3>Elective: "Design for Behavioural Change"</h3>
      <div class="pswp__gallery width__small" itemscope itemtype="https://schema.org/ImageGallery">
        <figure itemprop="associatedMedia" itemscope itemtype="https://schema.org/ImageObject">
          <a href="https://placehold.it/2688x1488" itemprop="contentUrl" data-size="2688x1488">
            <img src="https://placehold.it/672x372" itemprop="thumbnail" alt="Placeholder" />
            <!-- <a href="/i/ray.jpg" itemprop="contentUrl" data-size="2688x1488">
            <img src="/i/ray@0,33x.jpg" itemprop="thumbnail" alt="Ray Conversational UI" loading="lazy" /> -->
          </a>
          <figcaption itemprop="caption description"></figcaption>
        </figure>
      </div>
      <div class="icon-row width__small">
        <!-- <div class="icon-list__icon icon__be" data-balloon-length="large" aria-label="Business &amp; Entrepreneurship" data-balloon-pos="up"><img src="i/icons/business-entrepreneurship.svg" alt="Business and Entrepreneurship Icon"></div> -->
        <div class="icon-list__icon icon__ca" data-balloon-length="large" aria-label="Creativity &amp; Aesthetics" data-balloon-pos="up"><img src="i/icons/creativity-aesthetics.svg" alt="Creativity and Aesthetics Icon"></div>
        <div class="icon-list__icon icon__drp" data-balloon-length="large" aria-label="Design &amp; Research Processes" data-balloon-pos="up"><img src="i/icons/design-research-processes.svg" alt="Design and Research Processes Icon"></div>
        <div class="icon-list__icon icon__mdc" data-balloon-length="large" aria-label="Math, Data &amp; Computing" data-balloon-pos="up"><img src="i/icons/math-data-computing.svg" alt="Math, Data and Computing Icon"></div>
        <!-- <div class="icon-list__icon icon__tr" data-balloon-length="large" aria-label="Technology &amp; Realization" data-balloon-pos="up"><img src="i/icons/technology-realization.svg" alt="Technology and Realization Icon"></div> -->
        <div class="icon-list__icon icon__us" data-balloon-length="medium" aria-label="User &amp; Society" data-balloon-pos="up"><img src="i/icons/user-society.svg" alt="User and Society Icon"></div>
      </div>
      <p class="width__small p__details">Grade: 7.0</p>
      <p class="width__small">In euismod, dui at artibus maximus, nibh dui elementum risus, vitae tincidunt arturus leo sit amet ligula. Integer quis mollis nulla. Artem ipsum dolor sit amet, consectetur adipiscing elit. Donec dignissim eros vel ante rhoncus, sit amet aliquet massa placerat. Donec artem turpis, vulputate a vestibulum a, cursus eu arcu. Nunc sit amet velit sed nibh congue artuere. Morbi ut turpis eget nisl tincidunt fermentum. Integer arcu nisi, aliquam a urna vitae, tincidunt commodo arcu.</p>
      <p class="width__small">In collaboration with <span class="thanks" data-balloon-length="medium" aria-label="Thank you, Marco!" data-balloon-pos="up">Marco Putzu</span> &amp; <span class="thanks" data-balloon-length="medium" aria-label="Thank you, Sacha!" data-balloon-pos="up">Sacha Prudon</span>.</p>
      <div class="width__small deliverables">
        <a class="deliverables__item" href="/documents/DDM110_Proposal_Geel_AJ.pdf" target="_blank">
          <div class="deliverables__item-left">
            <h4><img src="/i/icons/check-square.svg" alt="Square checkmark icon">Study Proposal</h4>
          </div>
          <div class="deliverables__item-right">
            <p class="deliverables__file-size">0.9MB</p>
            <img src="/i/icons/file-pdf.png" alt="PDF File Icon">
          </div>
        </a>
        <a class="deliverables__item" href="/documents/DDM110_Reflection_Geel_AJ.pdf" target="_blank">
          <div class="deliverables__item-left">
            <h4><img src="/i/icons/check-square.svg" alt="Square checkmark icon">Individual Reflection</h4>
          </div>
          <div class="deliverables__item-right">
            <p class="deliverables__file-size">0.1MB</p>
            <img src="/i/icons/file-pdf.png" alt="PDF File Icon">
          </div>
        </a>
      </div>
    </div>


    <div class="activity">
      <h3>Elective: "Object-Oriented Programming"</h3>
      <div class="pswp__gallery width__small" itemscope itemtype="https://schema.org/ImageGallery">
        <figure itemprop="associatedMedia" itemscope itemtype="https://schema.org/ImageObject">
          <a href="https://placehold.it/2688x1488" itemprop="contentUrl" data-size="2688x1488">
            <img src="https://placehold.it/672x372" itemprop="thumbnail" alt="Placeholder" />
            <!-- <a href="/i/ray.jpg" itemprop="contentUrl" data-size="2688x1488">
            <img src="/i/ray@0,33x.jpg" itemprop="thumbnail" alt="Ray Conversational UI" loading="lazy" /> -->
          </a>
          <figcaption itemprop="caption description"></figcaption>
        </figure>
      </div>
      <div class="icon-row width__small">
        <!-- <div class="icon-list__icon icon__be" data-balloon-length="large" aria-label="Business &amp; Entrepreneurship" data-balloon-pos="up"><img src="i/icons/business-entrepreneurship.svg" alt="Business and Entrepreneurship Icon"></div> -->
        <!-- <div class="icon-list__icon icon__ca" data-balloon-length="large" aria-label="Creativity &amp; Aesthetics" data-balloon-pos="up"><img src="i/icons/creativity-aesthetics.svg" alt="Creativity and Aesthetics Icon"></div> -->
        <!-- <div class="icon-list__icon icon__drp" data-balloon-length="large" aria-label="Design &amp; Research Processes" data-balloon-pos="up"><img src="i/icons/design-research-processes.svg" alt="Design and Research Processes Icon"></div> -->
        <div class="icon-list__icon icon__mdc" data-balloon-length="large" aria-label="Math, Data &amp; Computing" data-balloon-pos="up"><img src="i/icons/math-data-computing.svg" alt="Math, Data and Computing Icon"></div>
        <div class="icon-list__icon icon__tr" data-balloon-length="large" aria-label="Technology &amp; Realization" data-balloon-pos="up"><img src="i/icons/technology-realization.svg" alt="Technology and Realization Icon"></div>
        <!-- <div class="icon-list__icon icon__us" data-balloon-length="medium" aria-label="User &amp; Society" data-balloon-pos="up"><img src="i/icons/user-society.svg" alt="User and Society Icon"></div> -->
      </div>
      <p class="width__small p__details">Grade: 9.0</p>
      <p class="width__small">Department: Computer Science, TU/e.</p>
      <p class="width__small">In euismod, dui at artibus maximus, nibh dui elementum risus, vitae tincidunt arturus leo sit amet ligula. Integer quis mollis nulla. Artem ipsum dolor sit amet, consectetur adipiscing elit. Donec dignissim eros vel ante rhoncus, sit amet aliquet massa placerat. Donec artem turpis, vulputate a vestibulum a, cursus eu arcu. Nunc sit amet velit sed nibh congue artuere. Morbi ut turpis eget nisl tincidunt fermentum. Integer arcu nisi, aliquam a urna vitae, tincidunt commodo arcu.</p>
      <!-- <div class="width__small deliverables">
        <a class="deliverables__item" href="/documents/DDM110_Reflection_Geel_AJ.pdf" target="_blank">
          <div class="deliverables__item-left">
            <h4><img src="/i/icons/check-square.svg" alt="Square checkmark icon">Individual Reflection (TO-DO)</h4>
          </div>
          <div class="deliverables__item-right">
            <p class="deliverables__file-size">0.1MB</p>
            <img src="/i/icons/file-pdf.png" alt="PDF File Icon">
          </div>
        </a>
      </div> -->
    </div>


    <div class="activity">
      <h3>Elective: "Foundations of Data Mining"</h3>
      <div class="pswp__gallery width__small" itemscope itemtype="https://schema.org/ImageGallery">
        <figure itemprop="associatedMedia" itemscope itemtype="https://schema.org/ImageObject">
          <a href="https://placehold.it/2688x1488" itemprop="contentUrl" data-size="2688x1488">
            <img src="https://placehold.it/672x372" itemprop="thumbnail" alt="Placeholder" />
            <!-- <a href="/i/ray.jpg" itemprop="contentUrl" data-size="2688x1488">
            <img src="/i/ray@0,33x.jpg" itemprop="thumbnail" alt="Ray Conversational UI" loading="lazy" /> -->
          </a>
          <figcaption itemprop="caption description"></figcaption>
        </figure>
      </div>
      <div class="icon-row width__small">
        <!-- <div class="icon-list__icon icon__be" data-balloon-length="large" aria-label="Business &amp; Entrepreneurship" data-balloon-pos="up"><img src="i/icons/business-entrepreneurship.svg" alt="Business and Entrepreneurship Icon"></div> -->
        <!-- <div class="icon-list__icon icon__ca" data-balloon-length="large" aria-label="Creativity &amp; Aesthetics" data-balloon-pos="up"><img src="i/icons/creativity-aesthetics.svg" alt="Creativity and Aesthetics Icon"></div> -->
        <!-- <div class="icon-list__icon icon__drp" data-balloon-length="large" aria-label="Design &amp; Research Processes" data-balloon-pos="up"><img src="i/icons/design-research-processes.svg" alt="Design and Research Processes Icon"></div> -->
        <div class="icon-list__icon icon__mdc" data-balloon-length="large" aria-label="Math, Data &amp; Computing" data-balloon-pos="up"><img src="i/icons/math-data-computing.svg" alt="Math, Data and Computing Icon"></div>
        <div class="icon-list__icon icon__tr" data-balloon-length="large" aria-label="Technology &amp; Realization" data-balloon-pos="up"><img src="i/icons/technology-realization.svg" alt="Technology and Realization Icon"></div>
        <!-- <div class="icon-list__icon icon__us" data-balloon-length="medium" aria-label="User &amp; Society" data-balloon-pos="up"><img src="i/icons/user-society.svg" alt="User and Society Icon"></div> -->
      </div>
      <p class="width__small p__details">Grade: 9.0</p>
      <p class="width__small">Department: Computer Science, TU/e.</p>
      <p class="width__small">In euismod, dui at artibus maximus, nibh dui elementum risus, vitae tincidunt arturus leo sit amet ligula. Integer quis mollis nulla. Artem ipsum dolor sit amet, consectetur adipiscing elit. Donec dignissim eros vel ante rhoncus, sit amet aliquet massa placerat. Donec artem turpis, vulputate a vestibulum a, cursus eu arcu. Nunc sit amet velit sed nibh congue artuere. Morbi ut turpis eget nisl tincidunt fermentum. Integer arcu nisi, aliquam a urna vitae, tincidunt commodo arcu. The group assignment can be opened with the password 'backpropagation'.</p>
      <p class="width__small">In collaboration with <span class="thanks" data-balloon-length="medium" aria-label="Thank you, Jelle!" data-balloon-pos="up">Jelle Koks</span>, <span class="thanks" data-balloon-length="medium" aria-label="Thank you, Martijn!" data-balloon-pos="up">Martijn Beeks</span>, <span class="thanks" data-balloon-length="medium" aria-label="Thank you, Steffi!" data-balloon-pos="up">Steffi Krijgsman</span> &amp; <span class="thanks" data-balloon-length="medium" aria-label="Thank you, Sven!" data-balloon-pos="up">Sven Ruiter</span>.</p>
      <div class="width__small deliverables">
        <a class="deliverables__item" href="/documents/DDM110_Reflection_Geel_AJ.pdf" target="_blank">
          <div class="deliverables__item-left">
            <h4><img src="/i/icons/check-square.svg" alt="Square checkmark icon">Group Assignments</h4>
          </div>
          <div class="deliverables__item-right">
            <p class="deliverables__file-size">4MB</p>
            <img src="/i/icons/file-pdf.png" alt="PDF File Icon">
          </div>
        </a>
        <!-- <a class="deliverables__item" href="/documents/DDM110_Reflection_Geel_AJ.pdf" target="_blank">
          <div class="deliverables__item-left">
            <h4><img src="/i/icons/check-square.svg" alt="Square checkmark icon">Individual Reflection (TO-DO)</h4>
          </div>
          <div class="deliverables__item-right">
            <p class="deliverables__file-size">0.1MB</p>
            <img src="/i/icons/file-pdf.png" alt="PDF File Icon">
          </div>
        </a> -->
      </div>
    </div>


    <div class="activity">
      <h3>Elective: "Cyberattacks: Crime &amp; Defenses"</h3>
      <div class="pswp__gallery width__small" itemscope itemtype="https://schema.org/ImageGallery">
        <figure itemprop="associatedMedia" itemscope itemtype="https://schema.org/ImageObject">
          <a href="https://placehold.it/2688x1488" itemprop="contentUrl" data-size="2688x1488">
            <img src="https://placehold.it/672x372" itemprop="thumbnail" alt="Placeholder" />
            <!-- <a href="/i/ray.jpg" itemprop="contentUrl" data-size="2688x1488">
            <img src="/i/ray@0,33x.jpg" itemprop="thumbnail" alt="Ray Conversational UI" loading="lazy" /> -->
          </a>
          <figcaption itemprop="caption description"></figcaption>
        </figure>
      </div>
      <div class="icon-row width__small" style="filter: hue-rotate(45deg) saturate(2.5);">
        <!-- <div class="icon-list__icon icon__be" data-balloon-length="large" aria-label="Business &amp; Entrepreneurship" data-balloon-pos="up"><img src="i/icons/business-entrepreneurship.svg" alt="Business and Entrepreneurship Icon"></div> -->
        <!-- <div class="icon-list__icon icon__ca" data-balloon-length="large" aria-label="Creativity &amp; Aesthetics" data-balloon-pos="up"><img src="i/icons/creativity-aesthetics.svg" alt="Creativity and Aesthetics Icon"></div> -->
        <!-- <div class="icon-list__icon icon__drp" data-balloon-length="large" aria-label="Design &amp; Research Processes" data-balloon-pos="up"><img src="i/icons/design-research-processes.svg" alt="Design and Research Processes Icon"></div> -->
        <div class="icon-list__icon icon__mdc" data-balloon-length="large" aria-label="Math, Data &amp; Computing" data-balloon-pos="up"><img src="i/icons/math-data-computing.svg" alt="Math, Data and Computing Icon"></div>
        <div class="icon-list__icon icon__tr" data-balloon-length="large" aria-label="Technology &amp; Realization" data-balloon-pos="up"><img src="i/icons/technology-realization.svg" alt="Technology and Realization Icon"></div>
        <!-- <div class="icon-list__icon icon__us" data-balloon-length="medium" aria-label="User &amp; Society" data-balloon-pos="up"><img src="i/icons/user-society.svg" alt="User and Society Icon"></div> -->
      </div>
      <p class="width__small p__details">Grade: 10.0</p>
      <p class="width__small">Department: Computer Science, TU/e.</p>
      <p class="width__small">In euismod, dui at artibus maximus, nibh dui elementum risus, vitae tincidunt arturus leo sit amet ligula. Integer quis mollis nulla. Artem ipsum dolor sit amet, consectetur adipiscing elit. Donec dignissim eros vel ante rhoncus, sit amet aliquet massa placerat. Donec artem turpis, vulputate a vestibulum a, cursus eu arcu. Nunc sit amet velit sed nibh congue artuere. Morbi ut turpis eget nisl tincidunt fermentum. Integer arcu nisi, aliquam a urna vitae, tincidunt commodo arcu.</p>
      <div class="width__small deliverables">
        <a class="deliverables__item" href="/documents/2IMS20_Lecture-Notes_Geel_AJ.pdf" target="_blank">
          <div class="deliverables__item-left">
            <h4><img src="/i/icons/check-square.svg" alt="Square checkmark icon">Extensive Lecture Notes, summarised by me</h4>
          </div>
          <div class="deliverables__item-right">
            <p class="deliverables__file-size">0.4MB</p>
            <img src="/i/icons/file-pdf.png" alt="PDF File Icon">
          </div>
        </a>
        <!-- <a class="deliverables__item" href="/documents/DDM110_Reflection_Geel_AJ.pdf" target="_blank">
          <div class="deliverables__item-left">
            <h4><img src="/i/icons/check-square.svg" alt="Square checkmark icon">Individual Reflection (TO-DO)</h4>
          </div>
          <div class="deliverables__item-right">
            <p class="deliverables__file-size">0.1MB</p>
            <img src="/i/icons/file-pdf.png" alt="PDF File Icon">
          </div>
        </a> -->
      </div>
    </div>


    <div class="activity">
      <h3>Elective: "The Sound of Smart Things"</h3>
      <div class="pswp__gallery width__small" itemscope itemtype="https://schema.org/ImageGallery">
        <figure itemprop="associatedMedia" itemscope itemtype="https://schema.org/ImageObject">
          <a href="/i/smart-coffee.jpg" itemprop="contentUrl" data-size="2688x1488">
            <img src="/i/smart-coffee@0,33x.jpg" itemprop="thumbnail" alt="Ray Conversational UI" loading="lazy" />
          </a>
          <figcaption itemprop="caption description"></figcaption>
        </figure>
      </div>
      <div class="icon-row width__small">
        <!-- <div class="icon-list__icon icon__be" data-balloon-length="large" aria-label="Business &amp; Entrepreneurship" data-balloon-pos="up"><img src="i/icons/business-entrepreneurship.svg" alt="Business and Entrepreneurship Icon"></div> -->
        <div class="icon-list__icon icon__ca" data-balloon-length="large" aria-label="Creativity &amp; Aesthetics" data-balloon-pos="up"><img src="i/icons/creativity-aesthetics.svg" alt="Creativity and Aesthetics Icon"></div>
        <div class="icon-list__icon icon__drp" data-balloon-length="large" aria-label="Design &amp; Research Processes" data-balloon-pos="up"><img src="i/icons/design-research-processes.svg" alt="Design and Research Processes Icon"></div>
        <!-- <div class="icon-list__icon icon__mdc" data-balloon-length="large" aria-label="Math, Data &amp; Computing" data-balloon-pos="up"><img src="i/icons/math-data-computing.svg" alt="Math, Data and Computing Icon"></div> -->
        <!-- <div class="icon-list__icon icon__tr" data-balloon-length="large" aria-label="Technology &amp; Realization" data-balloon-pos="up"><img src="i/icons/technology-realization.svg" alt="Technology and Realization Icon"></div> -->
        <div class="icon-list__icon icon__us" data-balloon-length="medium" aria-label="User &amp; Society" data-balloon-pos="up"><img src="i/icons/user-society.svg" alt="User and Society Icon"></div>
      </div>
      <p class="width__small p__details">Grade: 7.0</p>
      <p class="width__small">In euismod, dui at artibus maximus, nibh dui elementum risus, vitae tincidunt arturus leo sit amet ligula. Integer quis mollis nulla. Artem ipsum dolor sit amet, consectetur adipiscing elit. Donec dignissim eros vel ante rhoncus, sit amet aliquet massa placerat. Donec artem turpis, vulputate a vestibulum a, cursus eu arcu. Nunc sit amet velit sed nibh congue artuere. Morbi ut turpis eget nisl tincidunt fermentum. Integer arcu nisi, aliquam a urna vitae, tincidunt commodo arcu. The group assignment can be opened with the password 'backpropagation'.</p>
      <div class="width__small deliverables">
        <a class="deliverables__item" href="/documents/DCM180_Report_Geel_AJ.pdf" target="_blank">
          <div class="deliverables__item-left">
            <h4><img src="/i/icons/check-square.svg" alt="Square checkmark icon">Group Report</h4>
          </div>
          <div class="deliverables__item-right">
            <p class="deliverables__file-size">4MB</p>
            <img src="/i/icons/file-pdf.png" alt="PDF File Icon">
          </div>
        </a>
        <a class="deliverables__item" href="/documents/DCM180_Reflection_Geel_AJ.pdf" target="_blank">
          <div class="deliverables__item-left">
            <h4><img src="/i/icons/check-square.svg" alt="Square checkmark icon">Individual Reflection</h4>
          </div>
          <div class="deliverables__item-right">
            <p class="deliverables__file-size">0.2MB</p>
            <img src="/i/icons/file-pdf.png" alt="PDF File Icon">
          </div>
        </a>
        <a class="deliverables__item" href="https://vimeo.com/428499788" target="_blank">
          <div class="deliverables__item-left">
            <h4><img src="/i/icons/check-square.svg" alt="Square checkmark icon">Group Video</h4>
          </div>
          <div class="deliverables__item-right">
            <p class="deliverables__file-size">External</p>
            <img src="/i/icons/file-vimeo.png" alt="Vimeo File Icon">
          </div>
        </a>
      </div>
    </div>


    <div class="activity">
      <h3>Extracurricular: "..."</h3>
      <div class="pswp__gallery width__small" itemscope itemtype="https://schema.org/ImageGallery">
        <figure itemprop="associatedMedia" itemscope itemtype="https://schema.org/ImageObject">
          <a href="https://placehold.it/2688x1488" itemprop="contentUrl" data-size="2688x1488">
            <img src="https://placehold.it/672x372" itemprop="thumbnail" alt="Placeholder" />
            <!-- <a href="/i/ray.jpg" itemprop="contentUrl" data-size="2688x1488">
            <img src="/i/ray@0,33x.jpg" itemprop="thumbnail" alt="Ray Conversational UI" loading="lazy" /> -->
          </a>
          <figcaption itemprop="caption description"></figcaption>
        </figure>
      </div>
      <p class="width__small">In euismod, dui at artibus maximus, nibh dui elementum risus, vitae tincidunt arturus leo sit amet ligula. Integer quis mollis nulla. Artem ipsum dolor sit amet, consectetur adipiscing elit. Donec dignissim eros vel ante rhoncus, sit amet aliquet massa placerat. Donec artem turpis, vulputate a vestibulum a, cursus eu arcu. Nunc sit amet velit sed nibh congue artuere. Morbi ut turpis eget nisl tincidunt fermentum. Integer arcu nisi, aliquam a urna vitae, tincidunt commodo arcu.</p>
    </div>
  </div>

</section>

<!-- Section 7: M22 Semester -->
<section id="M22">
  <div class="section__inner">
    <h2 class="width__small">M22 Semester</h2>
    <p class="width__small">In euismod, dui at artibus maximus, nibh dui elementum risus, vitae tincidunt arturus leo sit amet ligula. Integer quis mollis nulla. Artem ipsum dolor sit amet, consectetur adipiscing elit. Donec dignissim eros vel ante rhoncus, sit amet aliquet massa placerat. Donec artem turpis, vulputate a vestibulum a, cursus eu arcu. Nunc sit amet velit sed nibh congue artuere. Morbi ut turpis eget nisl tincidunt fermentum. Integer arcu nisi, aliquam a urna vitae, tincidunt commodo arcu.</p>
    <div class="activity">
      <h3>Project: "FMP &mdash; Requestor"</h3>
      <div class="width__small">
        <div style="padding:56.25% 0 0 0;position:relative; margin: 2rem 0 .2rem 0;"><iframe src="https://player.vimeo.com/video/425870546?color=f3f9f8&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
      </div>
      <div class="icon-row width__small">
        <div class="icon-list__icon icon__be" data-balloon-length="large" aria-label="Business &amp; Entrepreneurship" data-balloon-pos="up"><img src="i/icons/business-entrepreneurship.svg" alt="Business and Entrepreneurship Icon"></div>
        <div class="icon-list__icon icon__ca" data-balloon-length="large" aria-label="Creativity &amp; Aesthetics" data-balloon-pos="up"><img src="i/icons/creativity-aesthetics.svg" alt="Creativity and Aesthetics Icon"></div>
        <div class="icon-list__icon icon__drp" data-balloon-length="large" aria-label="Design &amp; Research Processes" data-balloon-pos="up"><img src="i/icons/design-research-processes.svg" alt="Design and Research Processes Icon"></div>
        <div class="icon-list__icon icon__mdc" data-balloon-length="large" aria-label="Math, Data &amp; Computing" data-balloon-pos="up"><img src="i/icons/math-data-computing.svg" alt="Math, Data and Computing Icon"></div>
        <div class="icon-list__icon icon__tr" data-balloon-length="large" aria-label="Technology &amp; Realization" data-balloon-pos="up"><img src="i/icons/technology-realization.svg" alt="Technology and Realization Icon"></div>
        <div class="icon-list__icon icon__us" data-balloon-length="medium" aria-label="User &amp; Society" data-balloon-pos="up"><img src="i/icons/user-society.svg" alt="User and Society Icon"></div>
      </div>
      <p class="width__small">In euismod, dui at artibus maximus, nibh dui elementum risus, vitae tincidunt arturus leo sit amet ligula. Integer quis mollis nulla. Artem ipsum dolor sit amet, consectetur adipiscing elit. Donec dignissim eros vel ante rhoncus, sit amet aliquet massa placerat. Donec artem turpis, vulputate a vestibulum a, cursus eu arcu. Nunc sit amet velit sed nibh congue artuere. Morbi ut turpis eget nisl tincidunt fermentum. Integer arcu nisi, aliquam a urna vitae, tincidunt commodo arcu.</p>
      <div class="pswp__gallery width__small small-thumbnails" itemscope itemtype="https://schema.org/ImageGallery">
        <figure itemprop="associatedMedia" itemscope itemtype="https://schema.org/ImageObject">
          <a href="https://placehold.it/2688x1488" itemprop="contentUrl" data-size="2688x1488">
            <img src="https://placehold.it/672x372" itemprop="thumbnail" alt="Placeholder" />
            <!-- <a href="/i/ray.jpg" itemprop="contentUrl" data-size="2688x1488">
            <img src="/i/ray@0,33x.jpg" itemprop="thumbnail" alt="Ray Conversational UI" loading="lazy" /> -->
          </a>
          <figcaption itemprop="caption description"></figcaption>
        </figure>
        <figure itemprop="associatedMedia" itemscope itemtype="https://schema.org/ImageObject">
          <a href="https://placehold.it/2688x1488" itemprop="contentUrl" data-size="2688x1488">
            <img src="https://placehold.it/672x372" itemprop="thumbnail" alt="Placeholder" />
            <!-- <a href="/i/ray.jpg" itemprop="contentUrl" data-size="2688x1488">
            <img src="/i/ray@0,33x.jpg" itemprop="thumbnail" alt="Ray Conversational UI" loading="lazy" /> -->
          </a>
          <figcaption itemprop="caption description"></figcaption>
        </figure>
        <figure itemprop="associatedMedia" itemscope itemtype="https://schema.org/ImageObject">
          <a href="https://placehold.it/2688x1488" itemprop="contentUrl" data-size="2688x1488">
            <img src="https://placehold.it/672x372" itemprop="thumbnail" alt="Placeholder" />
            <!-- <a href="/i/ray.jpg" itemprop="contentUrl" data-size="2688x1488">
            <img src="/i/ray@0,33x.jpg" itemprop="thumbnail" alt="Ray Conversational UI" loading="lazy" /> -->
          </a>
          <figcaption itemprop="caption description"></figcaption>
        </figure>
        <figure itemprop="associatedMedia" itemscope itemtype="https://schema.org/ImageObject">
          <a href="https://placehold.it/2688x1488" itemprop="contentUrl" data-size="2688x1488">
            <img src="https://placehold.it/672x372" itemprop="thumbnail" alt="Placeholder" />
            <!-- <a href="/i/ray.jpg" itemprop="contentUrl" data-size="2688x1488">
            <img src="/i/ray@0,33x.jpg" itemprop="thumbnail" alt="Ray Conversational UI" loading="lazy" /> -->
          </a>
          <figcaption itemprop="caption description"></figcaption>
        </figure>

      </div>
      <div class="width__small deliverables">
        <a class="deliverables__item" href="/documents/M22_Report_Geel_AJ_Requestor.pdf" target="_blank">
          <div class="deliverables__item-left">
            <h4><img src="/i/icons/check-square.svg" alt="Square checkmark icon">FMP Report</h4>
          </div>
          <div class="deliverables__item-right">
            <p class="deliverables__file-size">26MB</p>
            <img src="/i/icons/file-pdf.png" alt="PDF File Icon">
          </div>
        </a>
        <a class="deliverables__item" href="/documents/M22_Reflection_Geel_AJ_Requestor.pdf" target="_blank">
          <div class="deliverables__item-left">
            <h4><img src="/i/icons/check-square.svg" alt="Square checkmark icon">Individual Reflection</h4>
          </div>
          <div class="deliverables__item-right">
            <p class="deliverables__file-size">0.4MB</p>
            <img src="/i/icons/file-pdf.png" alt="PDF File Icon">
          </div>
        </a>
        <a class="deliverables__item" href="https://requestor.nl/app/cui.php" target="_blank">
          <div class="deliverables__item-left">
            <h4><img src="/i/icons/check-square.svg" alt="Square checkmark icon">Requestor: 'Conversational UI'</h4>
          </div>
          <div class="deliverables__item-right">
            <p class="deliverables__file-size">External</p>
            <img src="/i/icons/file-requestor.png" alt="Requestor File Icon">
          </div>
        </a>
        <a class="deliverables__item" href="https://requestor.nl/app/gui.php" target="_blank">
          <div class="deliverables__item-left">
            <h4><img src="/i/icons/check-square.svg" alt="Square checkmark icon">Requestor: 'Traditional UI'</h4>
          </div>
          <div class="deliverables__item-right">
            <p class="deliverables__file-size">External</p>
            <img src="/i/icons/file-requestor.png" alt="Requestor File Icon">
          </div>
        </a>
        <a class="deliverables__item" href="https://requestor.nl/" target="_blank">
          <div class="deliverables__item-left">
            <h4><img src="/i/icons/check-square.svg" alt="Square checkmark icon">Requestor: 'Landing Page'</h4>
          </div>
          <div class="deliverables__item-right">
            <p class="deliverables__file-size">External</p>
            <img src="/i/icons/file-requestor.png" alt="Requestor File Icon">
          </div>
        </a>
      </div>
    </div>


    <div class="activity">
      <h3>Extracurricular: "Brouwerij Geel Website"</h3>
      <div class="pswp__gallery width__small" itemscope itemtype="https://schema.org/ImageGallery">
        <figure itemprop="associatedMedia" itemscope itemtype="https://schema.org/ImageObject">
            <a href="/i/brouwerij-geel.jpg" itemprop="contentUrl" data-size="2688x1488">
            <img src="/i/brouwerij-geel@0,33x.jpg" itemprop="thumbnail" alt="Brouwerij Geel" loading="lazy"/>
          </a>
          <figcaption itemprop="caption description">A database that contains my brewing log, this is where I keep track of the things I've made and their stand-out features.</figcaption>
        </figure>
        <figure class="hidden" itemprop="associatedMedia" itemscope itemtype="https://schema.org/ImageObject">
            <a href="/i/brouwerij-geel-2.jpg" itemprop="contentUrl" data-size="2688x1488">
            <img src="/i/brouwerij-geel-2@0,33x.jpg" itemprop="thumbnail" alt="Brouwerij Geel" loading="lazy"/>
          </a>
          <figcaption itemprop="caption description">Brouwerij Geel's brews a wide range of beers.</figcaption>
        </figure>
        <figure class="hidden" itemprop="associatedMedia" itemscope itemtype="https://schema.org/ImageObject">
            <a href="/i/brouwerij-geel-3.jpg" itemprop="contentUrl" data-size="2688x1488">
            <img src="/i/brouwerij-geel-3@0,33x.jpg" itemprop="thumbnail" alt="Brouwerij Geel" loading="lazy"/>
          </a>
          <figcaption itemprop="caption description">Kiki's Cheeky Kriekie: a tribute to our cat.</figcaption>
        </figure>
        <figure class="hidden" itemprop="associatedMedia" itemscope itemtype="https://schema.org/ImageObject">
            <a href="/i/brouwerij-geel-4.jpg" itemprop="contentUrl" data-size="2688x1488">
            <img src="/i/brouwerij-geel-4@0,33x.jpg" itemprop="thumbnail" alt="Brouwerij Geel" loading="lazy"/>
          </a>
          <figcaption itemprop="caption description">Interactive ingredients &amp; brewing steps, showing how you brew your own Ginger Beer.</figcaption>
        </figure>
      </div>
      <div class="icon-row width__small" style="filter: hue-rotate(-98deg) saturate(3.5)">
        <div class="icon-list__icon icon__be" data-balloon-length="large" aria-label="Business &amp; Entrepreneurship" data-balloon-pos="up"><img src="i/icons/business-entrepreneurship.svg" alt="Business and Entrepreneurship Icon"></div>
        <div class="icon-list__icon icon__ca" data-balloon-length="large" aria-label="Creativity &amp; Aesthetics" data-balloon-pos="up"><img src="i/icons/creativity-aesthetics.svg" alt="Creativity and Aesthetics Icon"></div>
        <!-- <div class="icon-list__icon icon__drp" data-balloon-length="large" aria-label="Design &amp; Research Processes" data-balloon-pos="up"><img src="i/icons/design-research-processes.svg" alt="Design and Research Processes Icon"></div> -->
        <!-- <div class="icon-list__icon icon__mdc" data-balloon-length="large" aria-label="Math, Data &amp; Computing" data-balloon-pos="up"><img src="i/icons/math-data-computing.svg" alt="Math, Data and Computing Icon"></div> -->
        <div class="icon-list__icon icon__tr" data-balloon-length="large" aria-label="Technology &amp; Realization" data-balloon-pos="up"><img src="i/icons/technology-realization.svg" alt="Technology and Realization Icon"></div>
        <!-- <div class="icon-list__icon icon__us" data-balloon-length="medium" aria-label="User &amp; Society" data-balloon-pos="up"><img src="i/icons/user-society.svg" alt="User and Society Icon"></div> -->
      </div>
      <p class="width__small">In euismod, dui at artibus maximus, nibh dui elementum risus, vitae tincidunt arturus leo sit amet ligula. Integer quis mollis nulla. Artem ipsum dolor sit amet, consectetur adipiscing elit. Donec dignissim eros vel ante rhoncus, sit amet aliquet massa placerat. Donec artem turpis, vulputate a vestibulum a, cursus eu arcu. Nunc sit amet velit sed nibh congue artuere. Morbi ut turpis eget nisl tincidunt fermentum. Integer arcu nisi, aliquam a urna vitae, tincidunt commodo arcu.</p>
    </div>
  </div>
</section>

<!-- Section 8: Future -->
<section id="Future">
  <div class="section__inner">
    <h2 class="width__small">Future</h2>
    <p class="width__small">In euismod, dui at artibus maximus, nibh dui elementum risus, vitae tincidunt arturus leo sit amet ligula. Integer quis mollis nulla. Artem ipsum dolor sit amet, consectetur adipiscing elit. Donec dignissim eros vel ante rhoncus, sit amet aliquet massa placerat. Donec artem turpis, vulputate a vestibulum a, cursus eu arcu. Nunc sit amet velit sed nibh congue artuere. Morbi ut turpis eget nisl tincidunt fermentum. Integer arcu nisi, aliquam a urna vitae, tincidunt commodo arcu.</p>
    <h3>A Word of Gratitude</h3>
    <p class="width__small">In euismod, dui at artibus maximus, nibh dui elementum risus, vitae tincidunt arturus leo sit amet ligula. Integer quis mollis nulla. Artem ipsum dolor sit amet, consectetur adipiscing elit. Donec dignissim eros vel ante rhoncus, sit amet aliquet massa placerat. Donec artem turpis, vulputate a vestibulum a, cursus eu arcu. Nunc sit amet velit sed nibh congue artuere. Morbi ut turpis eget nisl tincidunt fermentum. Integer arcu nisi, aliquam a urna vitae, tincidunt commodo arcu.</p>
  </div>
</section>



</main>



<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="pswp__bg"></div>
  <div class="pswp__scroll-wrap">
    <div class="pswp__container">
      <div class="pswp__item"></div>
      <div class="pswp__item"></div>
      <div class="pswp__item"></div>
    </div>
    <div class="pswp__ui pswp__ui--hidden">
      <div class="pswp__top-bar">
        <div class="pswp__counter"></div>
        <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
        <!-- <button class="pswp__button pswp__button--share" title="Share"></button> -->
        <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
        <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
        <div class="pswp__preloader">
          <div class="pswp__preloader__icn">
            <div class="pswp__preloader__cut">
              <div class="pswp__preloader__donut"></div>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
      <div class="pswp__share-tooltip"></div>
    </div> -->
    <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
    </button>
    <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
    </button>
    <div class="pswp__caption">
      <div class="pswp__caption__center"></div>
    </div>
  </div>
</div>
</div>
</body>

<!-- PhotoSwipe v4.1.3 MIT License — Files are deferred to reduce initial page load time -->
<script defer src="js/photoswipe.min.js" charset="utf-8"></script>
<script defer src="js/photoswipe-ui-default.min.js" charset="utf-8"></script>

<!-- ScrollReveal v4.0.1 waypoints.js -->
<!-- <script defer src="js/waypoints.min.js" charset="utf-8"></script> -->

<!-- <script defer src="js/main.min.js" charset="utf-8"></script> -->
<script defer src="js/main.js" charset="utf-8"></script>

</html>


<?php

echo "";

?>
