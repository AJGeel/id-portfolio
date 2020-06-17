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
                      <textPath xlink:href="#circlePath">Becoming a Pi-Shaped UX Designer&nbsp; &nbsp; &nbsp; &mdash; &nbsp; &nbsp; &nbsp; June 18th, 2020 &nbsp; &nbsp; &nbsp; &mdash; &nbsp; &nbsp; &nbsp; Eindhoven University of Technology</textPath>
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

        <!-- Previously a feature: indicating the reading time. However, it has been discontinued. -->
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
              <p>This competency is about <b>understanding markets and the 'rules of the game'</b>. It allows me to analyse the environment required to anchor the envisioned design values and make them a reality.</p>
            </div>
          </div>

          <!-- Competency Area-->
          <div class="icon-list width__small">
            <div class="icon-list__icon icon__ca" data-balloon-length="large" aria-label="Creativity &amp; Aesthetics" data-balloon-pos="up">
              <img src="i/icons/creativity-aesthetics.svg" alt="Creativity and Aesthetics Icon">
            </div>
            <div class="icon-list__copy">
              <h3>Creativity &amp; Aesthetics</h3>
              <p>This competency is about <b>exploring possibilities</b>. It allows me to shape design prototypes as 'living hypotheses' used for examining the design space and communicating insights and qualities to stakeholders.</p>
            </div>
          </div>

          <!-- Competency Area-->
          <div class="icon-list width__small">
            <div class="icon-list__icon icon__drp" data-balloon-length="large" aria-label="Design &amp; Research Processes" data-balloon-pos="up">
              <img src="i/icons/design-research-processes.svg" alt="Design and Research Processes Icon">
            </div>
            <div class="icon-list__copy">
              <h3>Design &amp; Research Processes</h3>
              <p>This competency is about <b>moving towards progress</b>. It allows me to build a theoretical foundation and find the strategy to find answers to unknowns. This is made possible by iteration and reflection.</p>
            </div>
          </div>

          <!-- Competency Area-->
          <div class="icon-list width__small">
            <div class="icon-list__icon icon__mdc" data-balloon-length="large" aria-label="Math, Data &amp; Computing" data-balloon-pos="up">
              <img src="i/icons/math-data-computing.svg" alt="Math, Data and Computing Icon">
            </div>
            <div class="icon-list__copy">
              <h3>Math, Data &amp; Computing</h3>
              <p>This competency is about <b>making sense through abstraction</b>. It allows me to make informed decisions by crunching numbers, both manually as well as algorithmically.</p>
            </div>
          </div>

          <!-- Competency Area-->
          <div class="icon-list width__small">
            <div class="icon-list__icon icon__tr" data-balloon-length="large" aria-label="Technology &amp; Realization" data-balloon-pos="up">
              <img src="i/icons/technology-realization.svg" alt="Technology and Realization Icon">
            </div>
            <div class="icon-list__copy">
              <h3>Technology &amp; Realization</h3>
              <p>This competency is about <b>turning concepts into reality</b>. It allows me to understand up-and-coming technologies, integrating them in design concepts to create reliable, interactive systems.</p>
            </div>
          </div>

          <!-- Competency Area-->
          <div class="icon-list width__small">
            <div class="icon-list__icon icon__us" data-balloon-length="medium" aria-label="User &amp; Society" data-balloon-pos="up">
              <img src="i/icons/user-society.svg" alt="User and Society Icon">
            </div>
            <div class="icon-list__copy">
              <h3>User &amp; Society</h3>
              <p>This competency is about <b>expanding perspectives</b>. It allows me to be empathic, curious and sensitive to stakeholders and contexts, and provides me with the tools to approach design problems.</p>
            </div>
          </div>

        </div>
      </section>

      <!-- Section 4: M11 Semester -->
      <section id="M11">
        <div class="section__inner">
          <h2 class="width__small">M11 Semester</h2>
          <p class="width__small">The first semester of my Master's degree was spent exploring the potential tracks that the study had. In this semester I completed my last group project, which was in the context of the <a href="#EM" class="link">Eindhoven Museum</a>. I completed the core course on <a href="#CDR" class="link">Constructive Design Research</a>, as well as an elective course on <a href="#DIII" class="link">Designing Intelligence in Interaction</a>. Finally, I landed a part-time job as a UX Designer, working at <a href="#SPIE" class="link">SPIE Nederland</a>.</p>

          <div class="activity">
            <h3 id="EM">M11 Project: "Eindhoven Museum"</h3>
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
                <figcaption itemprop="caption description">Ray in person. Let's have a talk!</figcaption>
              </figure>
              <figure class="hidden" itemprop="associatedMedia" itemscope itemtype="https://schema.org/ImageObject">
                <a href="/i/em-early-prototype.jpg" itemprop="contentUrl" data-size="2688x1488">
                  <img src="/i/em-early-prototype@0,33x.jpg" itemprop="thumbnail" alt="Eindhoven Museum early prototype" loading="lazy"/>
                </a>
                <figcaption itemprop="caption description">Early concept exploration: matching Eindhoven Museum and Gamification with a modal quiz interface.</figcaption>
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
            <p class="width__small lecturers">Lecturers: <span class="thanks" data-balloon-length="medium" aria-label="Thank you, prof.dr.ir. Martens!" data-balloon-pos="up">prof.dr.ir. Jean-Bernard Martens</span> &amp; <span class="thanks" data-balloon-length="medium" aria-label="Thank you, dr.ir. Khan!" data-balloon-pos="up">dr.ir. Javed Khan</span>.</p>
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
            <p class="width__small lecturers">Lecturers: <span class="thanks" data-balloon-length="medium" aria-label="Thank you, prof.dr.ir. Wensveen!" data-balloon-pos="up">prof.dr.ir. Stephan Wensveen</span> &amp; <span class="thanks" data-balloon-length="medium" aria-label="Thank you, dr. Hupfeld!" data-balloon-pos="up">dr. Annika Hupfeld</span>.</p>
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
              <p class="width__small lecturers">Lecturers: <span class="thanks" data-balloon-length="medium" aria-label="Thank you, dr. Hu PDEng MEng!" data-balloon-pos="up">dr. Jun Hu PDEng MEng</span>, <span class="thanks" data-balloon-length="medium" aria-label="Thank you, prof.dr.ir. Feijs!" data-balloon-pos="up">prof.dr.ir. Feijs</span>, <span class="thanks" data-balloon-length="medium" aria-label="Thank you, dr. Funk!" data-balloon-pos="up">dr. Mathias Funk</span> <br> &amp; <span class="thanks" data-balloon-length="medium" aria-label="Thank you, prof.dr.ir. Martens!" data-balloon-pos="up">prof.dr.ir. Jean-Bernard Martens</span>.</p>
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
                <figure class="hidden" itemprop="associatedMedia" itemscope itemtype="https://schema.org/ImageObject">
                  <a href="/i/spie-dashboard.jpg" itemprop="contentUrl" data-size="2688x1488">
                    <img src="/i/spie-dashboard@0,33x.jpg" itemprop="thumbnail" alt="SPIE Dashboard" loading="lazy" />
                  </a>
                  <figcaption itemprop="caption description">Before- and after view of the Financial Dashboard: increased consistency, spacing, composition and a more balanced colour scheme. (Data is fictional). Built in Microsoft PowerBI.</figcaption>
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
            <p class="width__small">In the M12 Semester I finalized my choice of specialization: the Research, Design &amp; Development (RDD) track with the focal competencies of User &amp; Society (US) and Technology &amp; Realization (TR). Building on the growth from the Constructive Design Research course from last semester, I completed a solo <a href="#TLP" class="link">Design Research Project</a>, entitled 'the Live Persona'. Furthermore, I completed the core elective for the RDD track <a href="#UXTP" class="link">UX Theory &amp; Practice</a>. Finally, I took part in the new <a href="#DED" class="link">Data-Enabled Design</a> elective, and dedicated time to building a brand for my <a href="#BWG" class="link">Homebrewing hobby</a>, and conducted some exploration of potential entrepreneurial opportunities.</p>

            <div class="activity">
              <h3 id="TLP">M12 Project: 'The Live Persona'</h3>
              <div class="pswp__gallery width__small" itemscope itemtype="https://schema.org/ImageGallery">
                <figure class="no-invert" itemprop="associatedMedia" itemscope itemtype="https://schema.org/ImageObject">
                  <a href="/i/live-persona.jpg" itemprop="contentUrl" data-size="2688x1488">
                    <img src="/i/live-persona@0,33x.jpg" itemprop="thumbnail" alt="The Live Persona" loading="lazy" />
                  </a>
                  <figcaption itemprop="caption description">Promotional image of 'The Live Persona'. We see rich insights in the form of statistics, data points and conversations enter, being transmitted to the cloud.</figcaption>
                </figure>
                <figure class="hidden" itemprop="associatedMedia" itemscope itemtype="https://schema.org/ImageObject">
                  <a href="/i/live-persona-poster.jpg" itemprop="contentUrl" data-size="1488x2000">
                    <img src="/i/live-persona-poster@0,33x.jpg" itemprop="thumbnail" alt="The Live Persona Poster" loading="lazy" />
                  </a>
                  <figcaption itemprop="caption description">A1 Poster (printed on cloth) of the Live Persona, presented at the Final Demo Day.</figcaption>
                </figure>
              </div>
              <div class="icon-row width__small" style="filter: hue-rotate(45deg) contrast(.8)">
                <!-- <div class="icon-list__icon icon__be" data-balloon-length="large" aria-label="Business &amp; Entrepreneurship" data-balloon-pos="up"><img src="i/icons/business-entrepreneurship.svg" alt="Business and Entrepreneurship Icon"></div> -->
                <div class="icon-list__icon icon__ca" data-balloon-length="large" aria-label="Creativity &amp; Aesthetics" data-balloon-pos="up"><img src="i/icons/creativity-aesthetics.svg" alt="Creativity and Aesthetics Icon"></div>
                <div class="icon-list__icon icon__drp" data-balloon-length="large" aria-label="Design &amp; Research Processes" data-balloon-pos="up"><img src="i/icons/design-research-processes.svg" alt="Design and Research Processes Icon"></div>
                <div class="icon-list__icon icon__mdc" data-balloon-length="large" aria-label="Math, Data &amp; Computing" data-balloon-pos="up"><img src="i/icons/math-data-computing.svg" alt="Math, Data and Computing Icon"></div>
                <div class="icon-list__icon icon__tr" data-balloon-length="large" aria-label="Technology &amp; Realization" data-balloon-pos="up"><img src="i/icons/technology-realization.svg" alt="Technology and Realization Icon"></div>
                <div class="icon-list__icon icon__us" data-balloon-length="medium" aria-label="User &amp; Society" data-balloon-pos="up"><img src="i/icons/user-society.svg" alt="User and Society Icon"></div>
              </div>
              <p class="width__small p__details">Grade: Pass</p>
              <p class="width__small">In this research project I sought to explore a topic that was close to me: UX Research. When communicating the insights, often formats are used that are <b>not as powerful</b> as directly talking to stakeholders or end-users. In addressing this, I designed and developed the Live Persona, a tool for communicating user research with a focus on <b>transferring empathy</b> by including personal details that make it relatable.The Live Persona was used in a study where designers were asked to carry out a short design case, <b>basing their design decisions on the Live Persona</b>.</p>
              <p class="width__small">During this project I put the insights of the <b>Constructive Design Research</b> elective into practice, using the 'Field' style research. Beyond gaining more skills in conducting design research such as doing <b>thematic analysis</b>, above all this project made me aware of the <b>time investment</b> (design) research requires, which means the <b>project planning and management</b> has to be sound.</p>
              <p class="width__small lecturers">Lecturers: <span class="thanks" data-balloon-length="medium" aria-label="Thank you, dr.ir. Khan!" data-balloon-pos="up">dr.ir. Javed Khan</span>, <span class="thanks" data-balloon-length="medium" aria-label="Thank you, prof.dr.ir. Hummels!" data-balloon-pos="up">prof.dr.ir. Caroline Hummels</span> &amp; <span class="thanks" data-balloon-length="medium" aria-label="Thank you, dr.ir. Levy!" data-balloon-pos="up">dr.ir. Pierre Levy</span>.</p>
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
              <h3 id="UXTP">Elective: "UX Theory &amp; Practice"</h3>
              <div class="pswp__gallery width__small" itemscope itemtype="https://schema.org/ImageGallery">
                <figure class="no-invert" itemprop="associatedMedia" itemscope itemtype="https://schema.org/ImageObject">
                  <a href="/i/ux-booking.jpg" itemprop="contentUrl" data-size="2688x1488">
                    <img src="/i/ux-booking@0,33x.jpg" itemprop="thumbnail" alt="Ray Conversational UI" loading="lazy" />
                  </a>
                  <figcaption itemprop="caption description">Dissecting the Booking.com website in various components that result in the specific User Experience.</figcaption>
                </figure>
              </div>
              <div class="icon-row width__small" style="filter: hue-rotate(77deg) saturate(1.5)">
                <!-- <div class="icon-list__icon icon__be" data-balloon-length="large" aria-label="Business &amp; Entrepreneurship" data-balloon-pos="up"><img src="i/icons/business-entrepreneurship.svg" alt="Business and Entrepreneurship Icon"></div> -->
                <!-- <div class="icon-list__icon icon__ca" data-balloon-length="large" aria-label="Creativity &amp; Aesthetics" data-balloon-pos="up"><img src="i/icons/creativity-aesthetics.svg" alt="Creativity and Aesthetics Icon"></div> -->
                <div class="icon-list__icon icon__drp" data-balloon-length="large" aria-label="Design &amp; Research Processes" data-balloon-pos="up"><img src="i/icons/design-research-processes.svg" alt="Design and Research Processes Icon"></div>
                <div class="icon-list__icon icon__mdc" data-balloon-length="large" aria-label="Math, Data &amp; Computing" data-balloon-pos="up"><img src="i/icons/math-data-computing.svg" alt="Math, Data and Computing Icon"></div>
                <!-- <div class="icon-list__icon icon__tr" data-balloon-length="large" aria-label="Technology &amp; Realization" data-balloon-pos="up"><img src="i/icons/technology-realization.svg" alt="Technology and Realization Icon"></div> -->
                <div class="icon-list__icon icon__us" data-balloon-length="medium" aria-label="User &amp; Society" data-balloon-pos="up"><img src="i/icons/user-society.svg" alt="User and Society Icon"></div>
              </div>
              <p class="width__small p__details">Grade: 8.0</p>
              <p class="width__small">In this elective we looked at UX from an <b>academic and philosophic perspective</b>. By studying all suggested literature I broadened my view of what UX exactly is. Instead of merely focusing on designing so that systems are usable, UX is also about the <b>complex and subjective impressions</b> people experience, both <b>before, during and after</b> interacting with any given system.</p>
              <p class="width__small">Furthermore, in this course we had a number of discussions about UX, especially as we discussed design cases. Alongside my team, I discussed <b>Booking.com</b>, where we looked into the User Experience that resulted from shopping for an overnight stay in Amsterdam. We noticed the site using a lot of (ethically) questionable strategies to drive conversions, such as <b>purchase pressure cues and limited product availability</b>, all exposing visitors of the website to stress in order to get them to spend their money.</p>
              <p class="width__small">This reaffirmed my vision on design on making accessible and respectful systems. However, it is important to stay mindful of <b>maintaining the balance between ethical principles and financial goals</b>.</p>
              <p class="width__small collab">In collaboration with <span class="thanks" data-balloon-length="medium" aria-label="Thank you, Melvin!" data-balloon-pos="up">Melvin Sterk</span> (Manifesto), and in collaboration with <span class="thanks" data-balloon-length="medium" aria-label="Thank you, Jessie!" data-balloon-pos="up">Jessie Harms</span>, <br><span class="thanks" data-balloon-length="medium" aria-label="Thank you, Marit!" data-balloon-pos="up">Marit Her</span>, <span class="thanks" data-balloon-length="medium" aria-label="Thank you, Marit!" data-balloon-pos="up">Marit Proper</span> &amp; <span class="thanks" data-balloon-length="medium" aria-label="Thank you, Jordy!" data-balloon-pos="up">Jordy Oplaat</span> (Booking.com case).</p>
              <p class="width__small lecturers">Lecturers: <span class="thanks" data-balloon-length="medium" aria-label="Thank you, prof.dr.ir. Eggen!" data-balloon-pos="up">prof.dr.ir. Berry Eggen</span>, <span class="thanks" data-balloon-length="medium" aria-label="Thank you, dr.ir. van Essen!" data-balloon-pos="up">dr.ir. Harm van Essen</span> &amp; <span class="thanks" data-balloon-length="medium" aria-label="Thank you, dr. Terken!" data-balloon-pos="up">dr. Jacques Terken</span>.</p>
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
              <h3 id="DED">Elective: "Data-Enabled Design"</h3>
              <div class="pswp__gallery width__small" itemscope itemtype="https://schema.org/ImageGallery">
                <figure class="no-invert" itemprop="associatedMedia" itemscope itemtype="https://schema.org/ImageObject">
                  <a href="/i/data-enabled-design-process.jpg" itemprop="contentUrl" data-size="2688x1488">
                    <img src="/i/data-enabled-design-process@0,33x.jpg" itemprop="thumbnail" alt="Data-Enabled Design" loading="lazy" />
                  </a>
                  <figcaption itemprop="caption description">The Data-Enabled Design approach: moving from the Contextual Step to the Informed Step, implementing insights gathered from data.</figcaption>
                </figure>
                <figure class="hidden" itemprop="associatedMedia" itemscope itemtype="https://schema.org/ImageObject">
                  <a href="/i/data-enabled-design-sensors.jpg" itemprop="contentUrl" data-size="1488x2000">
                    <img src="/i/data-enabled-design-sensors@0,33x.jpg" itemprop="thumbnail" alt="Data-Enabled Design" loading="lazy" />
                  </a>
                  <figcaption itemprop="caption description">Day-one sensor probe: capturing time-series data on air quality.</figcaption>
                </figure>
                <figure class="hidden" itemprop="associatedMedia" itemscope itemtype="https://schema.org/ImageObject">
                  <a href="/i/data-enabled-design-pattern.jpg" itemprop="contentUrl" data-size="2688x1488">
                    <img src="/i/data-enabled-design-pattern@0,33x.jpg" itemprop="thumbnail" alt="Data-Enabled Design" loading="lazy" />
                  </a>
                  <figcaption itemprop="caption description">An interesting 'saw-tooth' pattern in humidity/temperature data. In this specific instance, the participant was opening and closing their window for fresh air as they were soldering.</figcaption>
                </figure>
                <figure class="hidden" itemprop="associatedMedia" itemscope itemtype="https://schema.org/ImageObject">
                  <a href="/i/data-enabled-design-presence.jpg" itemprop="contentUrl" data-size="2688x1488">
                    <img src="/i/data-enabled-design-presence@0,33x.jpg" itemprop="thumbnail" alt="Data-Enabled Design" loading="lazy" />
                  </a>
                  <figcaption itemprop="caption description">Early prototype: allowing members of a shared environment to share their presence, visualising the results.</figcaption>
                </figure>
                <figure class="hidden" itemprop="associatedMedia" itemscope itemtype="https://schema.org/ImageObject">
                  <a href="/i/data-enabled-design-volcano.jpg" itemprop="contentUrl" data-size="2688x1488">
                    <img src="/i/data-enabled-design-volcano@0,33x.jpg" itemprop="thumbnail" alt="Data-Enabled Design" loading="lazy" />
                  </a>
                  <figcaption itemprop="caption description">'Volcano': final design concept for the Data-Enabled Design course. This iPad-based app seeks to bring back accountability in shared environments through tracking of sensor data.</figcaption>
                </figure>
              </div>
              <div class="icon-row width__small" style="filter: hue-rotate(245deg);">
                <!-- <div class="icon-list__icon icon__be" data-balloon-length="large" aria-label="Business &amp; Entrepreneurship" data-balloon-pos="up"><img src="i/icons/business-entrepreneurship.svg" alt="Business and Entrepreneurship Icon"></div> -->
                <!-- <div class="icon-list__icon icon__ca" data-balloon-length="large" aria-label="Creativity &amp; Aesthetics" data-balloon-pos="up"><img src="i/icons/creativity-aesthetics.svg" alt="Creativity and Aesthetics Icon"></div> -->
                <!-- <div class="icon-list__icon icon__drp" data-balloon-length="large" aria-label="Design &amp; Research Processes" data-balloon-pos="up"><img src="i/icons/design-research-processes.svg" alt="Design and Research Processes Icon"></div> -->
                <div class="icon-list__icon icon__mdc" data-balloon-length="large" aria-label="Math, Data &amp; Computing" data-balloon-pos="up"><img src="i/icons/math-data-computing.svg" alt="Math, Data and Computing Icon"></div>
                <div class="icon-list__icon icon__tr" data-balloon-length="large" aria-label="Technology &amp; Realization" data-balloon-pos="up"><img src="i/icons/technology-realization.svg" alt="Technology and Realization Icon"></div>
                <div class="icon-list__icon icon__us" data-balloon-length="medium" aria-label="User &amp; Society" data-balloon-pos="up"><img src="i/icons/user-society.svg" alt="User and Society Icon"></div>
              </div>
              <p class="width__small p__details">Grade: 8.0</p>
              <p class="width__small">In this elective we were introduced to the recently published <b>Data-Enabled Design approach</b> by <a href="https://research.tue.nl/en/publications/data-enabled-design-a-situated-design-approach-that-uses-data-as-" class="link" target="_blank">van Kollenburg &amp; Bogers</a>. This approach seeks to use data as a creative material, enriching existing ecosystems with sensors that capture otherwise unseen experiences, which are used for sense-making and <b>fed back to stakeholders to prompt reaction and reflection</b>.</p>
              <p class="width__small">This course has given me numerous things. Firstly, I feel able to implement the data-enabled design approach in my own projects, which I see as a <b>high-effort, high-reward</b> approach to design. Secondly, it has made me more comfortable in working with data. The iPad GUIs I designed and developed were my <b>first experience in persistently storing data</b>, which was done using PHP and comma-separated value (.csv) files. Additionally, the GUI <b>integrated the sensor probe</b> developed by Sark, which provided near real-time data on the environment's air quality and temperature, which was a big step for me towards <b>making systems rather than prototypes</b>.</p>
              <p class="width__small collab">In collaboration with <span class="thanks" data-balloon-length="medium" aria-label="Thank you, Yizhou!" data-balloon-pos="up">Yizhou Liu</span> &amp; <span class="thanks" data-balloon-length="medium" aria-label="Thank you, Sark!" data-balloon-pos="up">Sark Xing</span>.</p>
              <p class="width__small lecturers">Lecturers: <span class="thanks" data-balloon-length="medium" aria-label="Thank you, dr. Funk!" data-balloon-pos="up">dr. Mathias Funk</span>, <span class="thanks" data-balloon-length="medium" aria-label="Thank you, dr. van Kollenburg!" data-balloon-pos="up">dr. Janne van Kollenburg</span> &amp; <span class="thanks" data-balloon-length="medium" aria-label="Thank you, dr. Bogers!" data-balloon-pos="up">dr. Sander Bogers</span>.</p>
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
              <h3 id="BWG">Extracurricular: "Brouwerij Geel Brand"</h3>
              <div class="pswp__gallery width__small" itemscope itemtype="https://schema.org/ImageGallery">
                <figure itemprop="associatedMedia" itemscope itemtype="https://schema.org/ImageObject">
                  <a href="/i/brouwerij-geel-progression.jpg" itemprop="contentUrl" data-size="2688x1488">
                    <img src="/i/brouwerij-geel-progression@0,33x.jpg" itemprop="thumbnail" alt="Brouwerij Geel Logo Progression" loading="lazy" />
                  </a>
                  <figcaption itemprop="caption description">Logo and label progression towards a fitting, flexible identity.</figcaption>
                </figure>
                <figure class="hidden" itemprop="associatedMedia" itemscope itemtype="https://schema.org/ImageObject">
                  <a href="/i/toffee-apple.jpg" itemprop="contentUrl" data-size="2688x1488">
                    <img src="/i/toffee-apple@0,33x.jpg" itemprop="thumbnail" alt="Brouwerij Geel Toffee Apple" loading="lazy" />
                  </a>
                  <figcaption itemprop="caption description">Logo design for the 'Toffee Apple' style cider brew.</figcaption>
                </figure>
                <figure class="hidden" itemprop="associatedMedia" itemscope itemtype="https://schema.org/ImageObject">
                  <a href="/i/cheeky-kriekie.jpg" itemprop="contentUrl" data-size="2688x1488">
                    <img src="/i/cheeky-kriekie@0,33x.jpg" itemprop="thumbnail" alt="Brouwerij Geel Cheeky Kriekie" loading="lazy" />
                  </a>
                  <figcaption itemprop="caption description">Logo design for the 'Kiki`s Cheeky Kriekie' style cider brew.</figcaption>
                </figure>
              </div>
              <div class="icon-row width__small" style="filter: hue-rotate(-75deg)">
                <div class="icon-list__icon icon__be" data-balloon-length="large" aria-label="Business &amp; Entrepreneurship" data-balloon-pos="up"><img src="i/icons/business-entrepreneurship.svg" alt="Business and Entrepreneurship Icon"></div>
                <div class="icon-list__icon icon__ca" data-balloon-length="large" aria-label="Creativity &amp; Aesthetics" data-balloon-pos="up"><img src="i/icons/creativity-aesthetics.svg" alt="Creativity and Aesthetics Icon"></div>
                <!-- <div class="icon-list__icon icon__drp" data-balloon-length="large" aria-label="Design &amp; Research Processes" data-balloon-pos="up"><img src="i/icons/design-research-processes.svg" alt="Design and Research Processes Icon"></div> -->
                <!-- <div class="icon-list__icon icon__mdc" data-balloon-length="large" aria-label="Math, Data &amp; Computing" data-balloon-pos="up"><img src="i/icons/math-data-computing.svg" alt="Math, Data and Computing Icon"></div> -->
                <div class="icon-list__icon icon__tr" data-balloon-length="large" aria-label="Technology &amp; Realization" data-balloon-pos="up"><img src="i/icons/technology-realization.svg" alt="Technology and Realization Icon"></div>
                <!-- <div class="icon-list__icon icon__us" data-balloon-length="medium" aria-label="User &amp; Society" data-balloon-pos="up"><img src="i/icons/user-society.svg" alt="User and Society Icon"></div> -->
              </div>
              <p class="width__small">Homebrewing is my hobby, and source of inspiration. I started brewing in 2017, being mostly interested in (brut) ciders at that time. Not only are there a lot of parallels to be made between <b>the brewing process and the design process</b> (iterative, based on customer feedback, optimizing production processes), bringing a product to the market is an interesting challenge.</p>
              <p class="width__small">In order to explore the potential of turning this hobby in a (part-time) occupation, I conducted <b>market research</b>. The market for cider in the Netherlands is <b>merely a fraction</b> of the market for beers. However, when we expand our perspective we see stronger cider cultures in Europe (France, England, Spain) and world-wide (United States). Furthermore, considering the <b>recent surge</b> in demand for 'non-pilsener' alcoholic beverages such as craft beers, the future market may be more interested in ciders too. A shift in the market can already be seen: big player Heineken introduced their cider brand 'Apple Bandit' to the Dutch market in 2016, establishing themselves as an <b>accessible alternative to pilseners</b>, marketed to all genders.</p>

              <p class="width__small">Finally, looking at historic search trends from 2004-now, localised in the Netherlands, we see a <b>steady increase in interest in cider</b>, peaking in summer (june-august). The rough estimates on costs involved in bringing the product to the market (materials, (rent of) equipment, logistics, marketing, excise taxes) leave a considerable margin, especially if the product would be marketed as a 'small-scale', 'limited-edition' brew. However, the biggest identified risk was the '<a href="https://www.belastingdienst.nl/wps/wcm/connect/bldcontentnl/themaoverstijgend/programmas_en_formulieren/aanvraag_vergunning_accijnsgoederenplaats" class="link" target="_blank">vergunning accijnsgoederenplaats</a>', the permit required in order to produce- and sell products that contain alcohol.</p>
              <p class="width__small">For the time being, I concluded the <b>investments and risks involved</b> did not match I have for my career, hence I am not actively pursuing making homebrewing more than a hobby. Nevertheless, for my personal enjoyment, I started <b>designing a brand identity</b> for my homebrewery which sought to meet the positioning goals previously outlined, while offering flexibility in use for products other than cider.</p>
            </div>
          </div>

        </section>

        <!-- Section 6: M21 Semester -->
        <section id="M21">
          <div class="section__inner">
            <h2 class="width__small">M21 Semester</h2>
            <p class="width__small">In the M21 semester I started preparing for my graduation by writing and presenting my <a href="#FMP_Proposal" class="link">Final Master Project Proposal</a>. However, I also took the opportunity provided by the M21 Option to solidify my academic knowledge of Computer Science. I completed 15 ECTS in the TU/e Computer Science department, which consisted of the courses <a class="link" href="#JAVA">Object-Oriented Programming (Java)</a>, <a class="link" href="#FDM">Foundations of Data Mining</a> and <a class="link" href="#CCD">Cybersecurity: Crime &amp; Defenses</a>. Finally, I completed two electives within the ID department: <a class="link" href="#DFBC">Design for Behavioural Change</a> and <a class="link" href="#TSoST">The Sound of Smart Things</a>.</p>
            <div class="activity">
              <h3 id="FMP_Proposal">Project: "FMP Proposal"</h3>
              <div class="pswp__gallery width__small" itemscope itemtype="https://schema.org/ImageGallery">
                <figure class="no-invert" itemprop="associatedMedia" itemscope itemtype="https://schema.org/ImageObject">
                  <a href="/i/proposal-problem.jpg" itemprop="contentUrl" data-size="2688x1488">
                    <img src="/i/proposal-problem@0,33x.jpg" itemprop="thumbnail" alt="FMP Proposal: Problem Statement" loading="lazy" />
                  </a>
                  <figcaption itemprop="caption description">A number of identified problems presented in the proposal. The environment results in a disrupted design process.</figcaption>
                </figure>
                <figure class="hidden" itemprop="associatedMedia" itemscope itemtype="https://schema.org/ImageObject">
                  <a href="/i/fmp-proposal-system.jpg" itemprop="contentUrl" data-size="2688x1488">
                    <img src="/i/fmp-proposal-system@0,33x.jpg" itemprop="thumbnail" alt="FMP Proposal: System Overview" loading="lazy" />
                  </a>
                  <figcaption itemprop="caption description">Schematic overview of the envisioned system to address the identified problem statement.</figcaption>
                </figure>
                <figure class="hidden" itemprop="associatedMedia" itemscope itemtype="https://schema.org/ImageObject">
                  <a href="/i/fmp-proposal-wireframe.jpg" itemprop="contentUrl" data-size="2688x1488">
                    <img src="/i/fmp-proposal-wireframe@0,33x.jpg" itemprop="thumbnail" alt="FMP Proposal: Wireframe" loading="lazy" />
                  </a>
                  <figcaption itemprop="caption description">Wireframe flowchart of the envisioned design concept, illustrating the user journey.</figcaption>
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
              <p class="width__small">In the FMP Proposal I defined the design briefing for my <a href="#FMP" class="link">Final Master Project</a>. This was done <b>through literature review, reflecting on my identity and vision and early concept development</b>. The FMP Proposal was presented to two assessors. However, the first iteration was graded with a 'contitional hold', with the main points of criticism being that the identified problem statement was <b>not concrete enough</b>, and the road to an eventual concept was <b>not apparent</b>.</p>
              <p class="width__small">Reflecting on this, I fully agreed with this assessment. For this project, I was envisioning the things made possible by technological developments, yet I did not fully <b>consider the value</b> that the resulting concept would bring. The extra time that was given for the re-take of this proposal was spent re-framing the project, which was done through stakeholder interviews, ideation sessions and low-fidelity prototyping.</p>
              <p class="width__small">This resulted in a <b>more defined problem statement</b>: "User Experience Designers working in corporate enterprises are inhibited in their ability to perform well due to challenges stemming from low UX Maturity.", which resulted in a <b>concrete concept</b>: "A system that allows UX Designers to more easily share their works-in-progress with colleagues and related stakeholders". In the re-take document, schematic overviews and wireframe renditions of this system were shown, which resulted in an assessment of a 'Pass'.</p>
              <p class="width__small lecturers">Assessors: <span class="thanks" data-balloon-length="medium" aria-label="Thank you, dr.ir. Khan!" data-balloon-pos="up">dr.ir. Javed Khan</span> &amp; <span class="thanks" data-balloon-length="medium" aria-label="Thank you, dr. Funk!" data-balloon-pos="up">dr. Mathias Funk</span>.</p>
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
              <h3 id="DFBC">Elective: "Design for Behavioural Change"</h3>
              <div class="pswp__gallery width__small" itemscope itemtype="https://schema.org/ImageGallery">
                <figure itemprop="associatedMedia" itemscope itemtype="https://schema.org/ImageObject">
                  <a href="/i/behaviour-change.jpg" itemprop="contentUrl" data-size="2688x1488">
                    <img src="/i/behaviour-change@0,33x.jpg" itemprop="thumbnail" alt="Behaviour Change: Personality Quiz" loading="lazy" />
                  </a>
                  <figcaption itemprop="caption description">Screen capture of 'Welke composthoop ben jij?', a satirical online personality test, designed for behaviour change.</figcaption>
                </figure>
              </div>
              <div class="icon-row width__small" style="filter: hue-rotate(-55deg)">
                <!-- <div class="icon-list__icon icon__be" data-balloon-length="large" aria-label="Business &amp; Entrepreneurship" data-balloon-pos="up"><img src="i/icons/business-entrepreneurship.svg" alt="Business and Entrepreneurship Icon"></div> -->
                <div class="icon-list__icon icon__ca" data-balloon-length="large" aria-label="Creativity &amp; Aesthetics" data-balloon-pos="up"><img src="i/icons/creativity-aesthetics.svg" alt="Creativity and Aesthetics Icon"></div>
                <div class="icon-list__icon icon__drp" data-balloon-length="large" aria-label="Design &amp; Research Processes" data-balloon-pos="up"><img src="i/icons/design-research-processes.svg" alt="Design and Research Processes Icon"></div>
                <div class="icon-list__icon icon__mdc" data-balloon-length="large" aria-label="Math, Data &amp; Computing" data-balloon-pos="up"><img src="i/icons/math-data-computing.svg" alt="Math, Data and Computing Icon"></div>
                <!-- <div class="icon-list__icon icon__tr" data-balloon-length="large" aria-label="Technology &amp; Realization" data-balloon-pos="up"><img src="i/icons/technology-realization.svg" alt="Technology and Realization Icon"></div> -->
                <div class="icon-list__icon icon__us" data-balloon-length="medium" aria-label="User &amp; Society" data-balloon-pos="up"><img src="i/icons/user-society.svg" alt="User and Society Icon"></div>
              </div>
              <p class="width__small p__details">Grade: 7.0</p>
              <p class="width__small">In this elective I gained knowledge on designing products or systems that can <b>help people change their behaviour</b> without utilising coercion or manipulation. In order to do so, I studied models on human behaviour (e.g. the Theory of Planned Behaviour), which provided me with <b>the tools to understand behaviour and even make predictions</b>.</p>
              <p class="width__small">In a group project I used the <b>COM-B model</b> (Capability-Opportunity-Motivation-Behaviour) to analyse human behaviour regarding waste separation, and identified an <b>intervention strategy</b> aimed to change this behaviour. The final concept was a satirical online personality test which focused on <b>social opportunity and reflective motivation</b>. Finally, in this elective I became aware of the responsibilities involved in designing for behaviour change, which can be addressed by conducting a <b>stakeholder analysis</b>.</p>
              <p class="width__small collab">In collaboration with <span class="thanks" data-balloon-length="medium" aria-label="Thank you, Marco!" data-balloon-pos="up">Marco Putzu</span> &amp; <span class="thanks" data-balloon-length="medium" aria-label="Thank you, Sacha!" data-balloon-pos="up">Sacha Prudon</span>.</p>
              <p class="width__small lecturers">Lecturers: <span class="thanks" data-balloon-length="medium" aria-label="Thank you, prof.dr. Markopoulos!" data-balloon-pos="up">prof.dr. Panos Markopoulos</span>, <span class="thanks" data-balloon-length="medium" aria-label="Thank you, dr.ir. van Essen!" data-balloon-pos="up">dr.ir. Harm van Essen</span> &amp; <span class="thanks" data-balloon-length="medium" aria-label="Thank you, prof.dr.ir. Bekker!" data-balloon-pos="up">prof.dr.ir. Tilde Bekker</span>.</p>
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
              <h3 id="TSoST">Elective: "The Sound of Smart Things"</h3>
              <div class="pswp__gallery width__small" itemscope itemtype="https://schema.org/ImageGallery">
                <figure itemprop="associatedMedia" itemscope itemtype="https://schema.org/ImageObject">
                  <a href="/i/smart-coffee.jpg" itemprop="contentUrl" data-size="2688x1488">
                    <img src="/i/smart-coffee@0,33x.jpg" itemprop="thumbnail" alt="Ray Conversational UI" loading="lazy" />
                  </a>
                  <figcaption itemprop="caption description">The Smart Coffee Machine in the 'Lucid Bar 2030' &mdash; a fictional context which contained decentralised, intelligent systems.</figcaption>
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
              <p class="width__small">In this course I acquired fundamental knowledge of sound and sound design. After reviewing theory on <b>the physics of sound</b> (i.e. waveform vibrations, made by a source in a location) I am better able to deconstruct sounds that I hear, extracting the qualities that they have for me. I've gained practical experience in <b>creating sounds and soundscapes</b> using software (Audacity, Logic Pro X). I have gained insights in principles in <b>music theory</b> such as tension/release and consonance/dissonance, and am now able to better appreciate the emotions soundscapes made with these principles can evoke.</p>
              <p class="width__small"></p>
              <p class="width__small collab">In collaboration with <span class="thanks" data-balloon-length="medium" aria-label="Thank you, Alynne!" data-balloon-pos="up">Alynne</span>, <span class="thanks" data-balloon-length="medium" aria-label="Thank you, Hsiu!" data-balloon-pos="up">Hsiu</span>, <span class="thanks" data-balloon-length="medium" aria-label="Thank you, Jing-Li!" data-balloon-pos="up">Jing-Li</span>, <span class="thanks" data-balloon-length="medium" aria-label="Thank you, Maria!" data-balloon-pos="up">Maria</span>, <span class="thanks" data-balloon-length="medium" aria-label="Thank you, Naomi!" data-balloon-pos="up">Naomi</span>, <span class="thanks" data-balloon-length="medium" aria-label="Thank you, Sanne!" data-balloon-pos="up">Sanne</span>, <span class="thanks" data-balloon-length="medium" aria-label="Thank you, Seiji!" data-balloon-pos="up">Seiji</span>, <span class="thanks" data-balloon-length="medium" aria-label="Thank you, Shiyuan!" data-balloon-pos="up">Shiyuan</span>, <span class="thanks" data-balloon-length="medium" aria-label="Thank you, Yiyue!" data-balloon-pos="up">Yiyue</span> <br> &amp; <span class="thanks" data-balloon-length="medium" aria-label="Thank you, Veerle!" data-balloon-pos="up">Veerle</span>.</p>
              <p class="width__small lecturers">Lecturers: <span class="thanks" data-balloon-length="medium" aria-label="Thank you, dr.ir. Hengeveld!" data-balloon-pos="up">dr.ir. Bart Hengeveld</span> &amp; <span class="thanks" data-balloon-length="medium" aria-label="Thank you, prof.dr.ir. Eggen!" data-balloon-pos="up">prof.dr.ir. Berry Eggen</span>.</p>
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
              <h3 id="JAVA">Elective: "Object-Oriented Programming (Java)"</h3>
              <div class="pswp__gallery width__small" itemscope itemtype="https://schema.org/ImageGallery">
                <figure itemprop="associatedMedia" itemscope itemtype="https://schema.org/ImageObject">
                  <a href="/i/oop-java.jpg" itemprop="contentUrl" data-size="2688x1488">
                    <img src="/i/oop-java@0,33x.jpg" itemprop="thumbnail" alt="Java Code" loading="lazy" />
                  </a>
                  <figcaption itemprop="caption description">Object-oriented approach to solving the ArrayQuest problem of the 2019 exam.</figcaption>
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
              <p class="width__small">In this elective I sought to increase my ability to write <b>more structured code</b>, making it more scalable and flexible. The language of this elective was Java, a language I had little previous experience in. The elective focused on two areas: GUIs and Object-Oriented Programming. In Java, frameworks are often used to create consistent graphical user interfaces. Through this elective I developed skills and intuition in using the <b>Java Abstract Widget Toolkit (AWT)</b> and the <b>Java Swing Framework</b>, allowing me to build interactive interfaces using Java. However, I do not believe I will use these often, as I am a lot more proficient in my preferred front-end technology stack (HTML/JS/CSS), which is more currently more widely used.</p>
              <p class="width__small">However, I highly value the insights gained on <b>Object-Oriented Programming</b> (OOP), as these enable me to more efficiently realize designs in code through <b>better modularity</b>. Specifically, I learnt about and implemented the six main principles of Object-Oriented Programming in Java, those being <b>Abstraction, Encapsulation, Polymorphism, Inheritance, Association, Aggregation and Composition</b>. This elective was graded based on weekly challenges and a written test on OOP-implementations, which I completed with a 9.0.</p>
              <p class="width__small lecturers">Lecturer: <span class="thanks" data-balloon-length="medium" aria-label="Thank you, dr. Huizing!" data-balloon-pos="up">dr. Kees Huizing</span>.</p>
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
      <h3 id="FDM">Elective: "Foundations of Data Mining"</h3>
      <div class="pswp__gallery width__small" itemscope itemtype="https://schema.org/ImageGallery">
        <figure class="no-invert" itemprop="associatedMedia" itemscope itemtype="https://schema.org/ImageObject">
          <a href="/i/data-mining.jpg" itemprop="contentUrl" data-size="2688x1488">
            <img src="/i/data-mining@0,33x.jpg" itemprop="thumbnail" alt="Data Mining: Clustering" loading="lazy" />
          </a>
          <figcaption itemprop="caption description">Pen-and-paper exercise using a simple clustering algorithm with different k-mean values, resulting in two different separations of clusters (red versus blue).</figcaption>
        </figure>
        <figure class="hidden" itemprop="associatedMedia" itemscope itemtype="https://schema.org/ImageObject">
          <a href="/i/data-mining-graph.jpg" itemprop="contentUrl" data-size="2688x1488">
            <img src="/i/data-mining-graph@0,33x.jpg" itemprop="thumbnail" alt="Data Mining: Clustering" loading="lazy" />
          </a>
          <figcaption itemprop="caption description">Course dependency graph of algorithms seen in this elective, showing the progression from relatively easy algorithms (i.e. clustering) to complex algorithms (neural networks).</figcaption>
        </figure>
      </div>
      <div class="icon-row width__small" style="filter: hue-rotate(205deg);">
        <!-- <div class="icon-list__icon icon__be" data-balloon-length="large" aria-label="Business &amp; Entrepreneurship" data-balloon-pos="up"><img src="i/icons/business-entrepreneurship.svg" alt="Business and Entrepreneurship Icon"></div> -->
        <!-- <div class="icon-list__icon icon__ca" data-balloon-length="large" aria-label="Creativity &amp; Aesthetics" data-balloon-pos="up"><img src="i/icons/creativity-aesthetics.svg" alt="Creativity and Aesthetics Icon"></div> -->
        <!-- <div class="icon-list__icon icon__drp" data-balloon-length="large" aria-label="Design &amp; Research Processes" data-balloon-pos="up"><img src="i/icons/design-research-processes.svg" alt="Design and Research Processes Icon"></div> -->
        <div class="icon-list__icon icon__mdc" data-balloon-length="large" aria-label="Math, Data &amp; Computing" data-balloon-pos="up"><img src="i/icons/math-data-computing.svg" alt="Math, Data and Computing Icon"></div>
        <div class="icon-list__icon icon__tr" data-balloon-length="large" aria-label="Technology &amp; Realization" data-balloon-pos="up"><img src="i/icons/technology-realization.svg" alt="Technology and Realization Icon"></div>
        <!-- <div class="icon-list__icon icon__us" data-balloon-length="medium" aria-label="User &amp; Society" data-balloon-pos="up"><img src="i/icons/user-society.svg" alt="User and Society Icon"></div> -->
      </div>
      <p class="width__small p__details">Grade: 9.0</p>
      <p class="width__small">Department: Computer Science, TU/e.</p>
      <p class="width__small">In this elective I learnt the theoretical background of state-of-the-art techniques used in Data Mining. It is easy to lose track of how algorithms exactly work, which is why this course had us start by computing basic data mining algorithms such as <b>Clustering</b>, <b>Frequent Itemset Mining</b> and <b>Subspace Clustering</b> by hand &mdash; using pen-and-paper.</p>
      <p class="width__small">As the course passed, the earlier algorithms were used as building blocks for more advanced algorithms, which included <b>Learning Deep Representation, Multi-Layer Perceptrons</b> and finally <b>Convolutional- and Recurrent Neural Networks</b>. This elective was graded based on assignments done in a group, which involved 'from-scratch' implementations of the algorithms, first using pen-and-paper and later progressing to <b>Python</b>. The assignments I worked on alongside my group were graded with a 9.0, and can be opened with the password '<code>backpropagation</code>'.</p>
      <p class="width__small collab">In collaboration with <span class="thanks" data-balloon-length="medium" aria-label="Thank you, Jelle!" data-balloon-pos="up">Jelle Koks</span>, <span class="thanks" data-balloon-length="medium" aria-label="Thank you, Martijn!" data-balloon-pos="up">Martijn Beeks</span>, <span class="thanks" data-balloon-length="medium" aria-label="Thank you, Steffi!" data-balloon-pos="up">Steffi Krijgsman</span> &amp; <span class="thanks" data-balloon-length="medium" aria-label="Thank you, Sven!" data-balloon-pos="up">Sven Ruiter</span>.</p>
      <p class="width__small lecturers">Lecturers: <span class="thanks" data-balloon-length="medium" aria-label="Thank you, dr. Duivesteijn!" data-balloon-pos="up">dr. Wouter Duivesteijn</span> &amp; <span class="thanks" data-balloon-length="medium" aria-label="Thank you, dr. Mocanu!" data-balloon-pos="up">dr. Decebal Mocanu</span>.</p>
      <div class="width__small deliverables">
        <a class="deliverables__item" href="/documents/2IMM20_Group-Assignments_Geel_AJ.zip" target="_blank">
          <div class="deliverables__item-left">
            <h4><img src="/i/icons/check-square.svg" alt="Square checkmark icon">Group Assignments</h4>
          </div>
          <div class="deliverables__item-right">
            <p class="deliverables__file-size">4MB</p>
            <img src="/i/icons/file-zip.png" alt="ZIP File Icon">
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
  <h3 id="CCD">Elective: "Cyberattacks: Crime &amp; Defenses"</h3>
  <div class="pswp__gallery width__small" itemscope itemtype="https://schema.org/ImageGallery">
    <figure itemprop="associatedMedia" itemscope itemtype="https://schema.org/ImageObject">
      <a href="/i/cross-site-scripting.jpg" itemprop="contentUrl" data-size="2688x1488">
        <img src="/i/cross-site-scripting@0,33x.jpg" itemprop="thumbnail" alt="Cross-Site Scripting" loading="lazy"/>
      </a>
      <figcaption itemprop="caption description">An example of Cross-Site Scripting (XSS). Original photo by <a href="https://www.flickr.com/photos/132889348@N07/26393981265" target="_blank" style="color: #eee">Christiaan Colen</a>, used under the CC BY-SA 2.0 license. Edited by Arthur Geel (colour grading, glow).</figcaption>
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
  <p class="width__small">In this course I learnt a lot about the critical infrastructure that keeps our society running &mdash; and the ways they are exploited for financial or political gain. I learnt about the way cyber criminals operate <b>(Lockeed Martin Cyber Kill chain)</b>, why and how systems are compromised <b>(attack vectors, vulnerabilities, zero-day exploits)</b> and that any system, whether directly connected to the internet or even air-gapped, can be compromised <b>(i.e. Stuxnet, Duqu, Flame)</b>.</p>
  <p class="width__small">I've learnt about strategies to stop or detect attacks <b>(Rejection-based, acceptance-based, anomaly detection)</b>, and learnt about the frightening outlook of the future, with systems growing to be more critical and interconnected, for example because of an <b>increasing interest in Internet of Things and Smart Systems</b>, which often contain vulnerabilities that are never patched, especially as the product's development ceasesyet the products remain used.</p>
  <p class="width__small">Finally, I became acquainted with prof.dr. Etalle's outlook on the cybersecurity of the future. Currently, <b>attacks are difficult to counter because present systems are hard to monitor</b>. Looking at all present options of prevention/detection, behaviour/knowledge based, specification/anomaly-based, whitebox/blackbox, none are suitable due to issues in <b>adaptability, scalability and actionability</b>, rendering them ineffective. The only way to make things better is to <b>change the way we create software</b> to make it more amendable to monitoring. Software should be supervisable and privacy-preserving by design, which I agree with in my <a href="#Welcome" class="link">vision on design</a>. My performance in this elective was graded by a written exam of course materials, which I got a 10.0 for.</p>
  <p class="width__small lecturers">Lecturers: <span class="thanks" data-balloon-length="medium" aria-label="Thank you, prof.dr. Etalle!" data-balloon-pos="up">prof.dr. Sandro Etalle</span> &amp; <span class="thanks" data-balloon-length="medium" aria-label="Thank you, dr. Allodi!" data-balloon-pos="up">dr. Luca Allodi</span>.</p>
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
  </div>
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
          <figcaption itemprop="caption description">Brouwerij Geel's brewing log, the database that is used to keep track of all brews and their defining features, complete with links to recipes on how to re-create them.</figcaption>
        </figure>
        <figure class="hidden" itemprop="associatedMedia" itemscope itemtype="https://schema.org/ImageObject">
          <a href="/i/brouwerij-geel-2.jpg" itemprop="contentUrl" data-size="2688x1488">
            <img src="/i/brouwerij-geel-2@0,33x.jpg" itemprop="thumbnail" alt="Brouwerij Geel" loading="lazy"/>
          </a>
          <figcaption itemprop="caption description">Brouwerij Geel's brews a variety of things, ranging from beers to ciders and wines.</figcaption>
        </figure>
        <figure class="hidden" itemprop="associatedMedia" itemscope itemtype="https://schema.org/ImageObject">
          <a href="/i/brouwerij-geel-3.jpg" itemprop="contentUrl" data-size="2688x1488">
            <img src="/i/brouwerij-geel-3@0,33x.jpg" itemprop="thumbnail" alt="Brouwerij Geel" loading="lazy"/>
          </a>
          <figcaption itemprop="caption description">Kiki's Cheeky Kriekie: a (completely unbiased) tribute to the best cat in the world, Kiki.</figcaption>
        </figure>
        <figure class="hidden" itemprop="associatedMedia" itemscope itemtype="https://schema.org/ImageObject">
          <a href="/i/brouwerij-geel-4.jpg" itemprop="contentUrl" data-size="2688x1488">
            <img src="/i/brouwerij-geel-4@0,33x.jpg" itemprop="thumbnail" alt="Brouwerij Geel" loading="lazy"/>
          </a>
          <figcaption itemprop="caption description">Interactive page of ingredients &amp; brewing steps, showing how you brew your own Ginger Beer. The page allows you to tick off steps you have completed, and can change the recipe to 3.8, 10 or 20 liters.</figcaption>
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
