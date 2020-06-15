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
  <link defer rel="stylesheet" href="/css/photoswipe.min.css">
  <link defer rel="stylesheet" href="/css/default-skin/default-skin.css">
  <!-- Balloon.css v1.1.0. MIT License -->
  <link defer rel="stylesheet" href="/css/balloon.min.css">

</head>

<body>


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
  </aside>

  <main>
    <!-- Section 1: Introduction -->
    <section id="Welcome">
      <div class="section__slide">
        <div class="section__slide-inner">
          <h1 class="width__small">Portfolio by Arthur Geel</h1>
          <p data-balloon-length="large" aria-label="" data-balloon-pos="left" data-balloon-break>Estimated reading time: <span id="readingTime">0</span> minutes.</p>
        </div>
      </div>

      <div class="section__inner">
        <h2 class="width__small">Welcome</h2>
        <p class="width__small p__intro">Good <span id="timeOfDay">day</span>, and welcome to my Final Master Portfolio!</p>
        <p class="width__small p__intro">On this page I present a timeline of my work of the past two years where I reflect on my competency development resulting from this. <span id="viewportNav">The menu on the left</span> contains an overview of the themes in this portfolio, which will help you keep track of where you are. I hope you enjoy!</p>
        <p class="width__small p__intro">&mdash; Arthur</p>

        <!-- <div class="pswp__gallery" itemscope itemtype="http://schema.org/ImageGallery">
          <figure itemprop="associatedMedia" itemscope itemtype="https://schema.org/ImageObject">
            <a href="https://farm3.staticflickr.com/2567/5697107145_a4c2eaa0cd_o.jpg" itemprop="contentUrl" data-size="1024x1024">
              <img src="https://farm3.staticflickr.com/2567/5697107145_3c27ff3cd1_m.jpg" itemprop="thumbnail" alt="Image description" />
            </a>
            <figcaption itemprop="caption description">Image caption 1 lorem ipsum dolor sit amet</figcaption>

          </figure>

          <figure itemprop="associatedMedia" itemscope itemtype="https://schema.org/ImageObject">
            <a href="https://farm2.staticflickr.com/1043/5186867718_06b2e9e551_b.jpg" itemprop="contentUrl" data-size="964x1024">
              <img src="https://farm2.staticflickr.com/1043/5186867718_06b2e9e551_m.jpg" itemprop="thumbnail" alt="Image description" />
            </a>
            <figcaption itemprop="caption description">Image caption 2</figcaption>
          </figure>

          <figure itemprop="associatedMedia" itemscope itemtype="https://schema.org/ImageObject">
            <a href="https://farm7.staticflickr.com/6175/6176698785_7dee72237e_b.jpg" itemprop="contentUrl" data-size="1024x683">
              <img src="https://farm7.staticflickr.com/6175/6176698785_7dee72237e_m.jpg" itemprop="thumbnail" alt="Image description" />
            </a>
            <figcaption itemprop="caption description">Image caption 3</figcaption>
          </figure>

          <figure itemprop="associatedMedia" itemscope itemtype="https://schema.org/ImageObject">
            <a href="https://farm6.staticflickr.com/5023/5578283926_822e5e5791_b.jpg" itemprop="contentUrl" data-size="1024x768">
              <img src="https://farm6.staticflickr.com/5023/5578283926_822e5e5791_m.jpg" itemprop="thumbnail" alt="Image description" />
            </a>
            <figcaption itemprop="caption description">Image caption 4</figcaption>
          </figure>
        </div> -->

      </div>
    </section>

    <!-- Section 2: About Me -->
    <section id="About-Me">
      <div class="section__inner">
        <h2 class="width__small">About Me</h2>
        <div class="two-columns width__small">
          <ul class="no-list-styling">
            <li><span>Name:</span> Arthur Geel</li>
            <li><span>Track:</span> Research, Design &amp; Development</li>
            <li><span>Expertise Areas:</span> Design &amp; Research Processes, User &amp; Society, Technology &amp; Realization</li>
            <li><span>Things I Love:</span> Homebrewing, collecting (Drum and Bass) records, science-fiction, old civilisations, analog technology, Mid-Century Modern interior design.</li>
          </ul>
          <div class="pswp__gallery" itemscope itemtype="https://schema.org/ImageGallery">
          <figure itemprop="associatedMedia" itemscope itemtype="https://schema.org/ImageObject">
            <a href="https://placehold.it/1334x488" itemprop="contentUrl" data-size="1680x1400">
              <img src="https://placehold.it/336x280" itemprop="thumbnail" alt="Image description" />
            </a>
            <figcaption itemprop="caption description">Image caption 1 lorem ipsum dolor sit amet</figcaption>
          </figure>
        </div>
        </div>
        <p class="width__small">In euismod, dui at artibus maximus, nibh dui elementum risus, vitae tincidunt arturus leo sit amet ligula. Integer quis mollis nulla. Artem ipsum dolor sit amet, consectetur adipiscing elit. Donec dignissim eros vel ante rhoncus, sit amet aliquet massa placerat. Donec artem turpis, vulputate a vestibulum a, cursus eu arcu. Nunc sit amet velit sed nibh congue artuere. Morbi ut turpis eget nisl tincidunt fermentum. Integer arcu nisi, aliquam a urna vitae, tincidunt commodo arcu.</p>
        <h3>Profesional Identity</h3>
        <p class="width__small">My name is Arthur Geel — I’m a MSc student Industrial Design at the Eindhoven University of Technology. During my bachelor degree at the ID department I became familiar with a broad range of design applications (from design research to automotive design), but was mostly interested in User Experience Design.Being a designer in the 21st century means adapting to the needs of a rapidly changing world by having competencies in areas that are not traditionally design-related. My response to this shift is to develop myself as a Pi-Shaped Designer [11, 49] . Besides being familiar with a broad range of product design essentials, a Pi-Shaped Designer has two areas of competence in which they excel.</p>
        <p class="width__small">For me, those two areas are designing for digital user experiences and the technological realization of digital products. I believe that such a varied skillset allows me to better understand contexts by analysing them from both perspectives. Consequently, the two competency areas within the Industrial Design Eindhoven Education Framework I have decided to specialize in are User & Society and Technology & Realization. In my process I put an emphasis on creating a thorough understanding of the context and its stakeholders, where I use skills and attitude developed in the User & Society competence to guide me. More specifically, I employ UX methodologies such as design ethnography [26] , contextual inquiries [26] and customer journey mapping [48] to inform my process.</p>
        <p class="width__small">Afterwards, I give shape to the insights by designing digital prototypes in increasing levels of fidelity — from wireframes [2] to complete design system [13] — using Figma [15], my tool of choice for designing digital products and systems. These design artifacts allow me to further explore the design space by conducting in-context evaluations once more tapping into the User & Society competency. Finally, I enjoy breathing life into prototypes by developing them with my skills in the Technology & Realization competency. My preferred tool of choice for this is a front- end development stack (HTML/CSS/JavaScript), using Git for version control. During my Master’s degree, Programming has become an integral part of my designer’s identity and toolkit.</p>
        <p class="width__small">Throughout my time at the TU/e I was driven to complement my academic knowledge with professional experience. In 2017 I had a six-month internship as a Junior Interaction Designer at creative digital agency Momkai, which I discuss in detail in my portfolio [18].Additionally, from September 2018 until January 2020 I have been working part-time as the sole UX Designer at SPIE Nederland. In this position I am responsible for re-designing the usability and user experience of legacy applications.Experiencing the differences in working as a designer at these companies with very differing attitudes towards design was one of the drivers for this project — I felt that the benefits of UX Design should be available to all, regardless of UX Maturity levels.The time I spent working as a designer further strengthened my identity as a designer: I want to keep developing myself as a Pi-Shaped UX Designer in my future career.</p>

        <h3>Vision on Design</h3>
        <p class="width__small">Computers and the internet have revolutionalised our way of living. We increasingly perform complex tasks that were previously deemed impossible, including connecting with peers all over the world, automating tasks that are repetitive and sharing vast amounts of data. We have made the world more accessible: computers enable all to contribute to our society, regardless of their location, age, gender or disabilities. In contrast with physical products, the landscape of digital products is a lot more dynamic. By removing physical materials and real-world shipping from the equation, we see new products make it to the market faster, and see existing products receive new features regularly. Because of this, barriers that prevent us from being productive are rapidly disolving.</p>
        <p class="width__small">However&hellip; that is not always the case. The complexity of the tools we use in everyday life is rapidly expanding, requiring more training and expertise to operate. This clashes with making the world more accessible: not everybody is able to participate anymore as their skillset does not allow them to participate. Furthermore, we are seeing negative societal trends regarding the digital products we use. Our privacy is being eroded through the increasing intensiveness of web- tracking and transfer of personal data to third parties, and our behaviour is being influenced on a large scale by the party that pays the most.</p>
        <p class="width__small p__block">With my design I try to take a stand against these developments. I am driven to create digital tools and systems that not only make the internet a more accessible place, but also more respecting of the persons operating it.</p>
      </div>
    </section>

    <!-- Section 3: Growth -->
    <section id="Growth">
      <div class="section__inner">
      <h2 class="width__small">Competency Development</h2>
      <p class="width__small to-be-changed">Over the time of my Master I have developed into a critical designer with an interest in societal transformation. My M1.2 research project in Kuwait was a gamechanger for this development. By working in an environment that was so different from my own, I learned to approach our Dutch society from new perspectives. I started to see relations between elements that I took for granted before I left. For example, the fact that we are organized as a participatory society, has a huge influence on our understanding of social impact. I was so triggered by these findings, that I dedicated my Final Master Project towards researching the interplay between design, government and wicked problems. Just like I perceived the Netherlands from a Kuwaiti perspective, I approached design from a governmental perspective too, as well as from the perspective of wicked problems. My work experience at Zet benefited greatly to this, as I got to experience in a multidisciplinary team what designing for wicked problems means in practice. This resulted in a holistic approach of my Final Master Project, which really is a synergy of the skills, knowledge and attitude I gained through projects, electives, work experience and extracurricular activities.</p>

      <p class="width__small">After spending both my Bachelor's and Master's degrees at ID TU/e, I've become very familiar with the department's Expertise Area framework. In this section I share my personal interpretation of all six competencies.</p>
      <p class="width__small">The icons are used throughout this page to signify which competency area was involved in learning activities. Don't worry about losing track of which icon signifies what, you can hover over icons to see their meaning.</p>

      <!-- Competency Area-->
      <div class="icon-list width__small">
        <div class="icon-list__icon" data-balloon-length="medium" aria-label="Business &amp; Entrepreneurship" data-balloon-pos="up">
          <img src="i/icons/business-entrepreneurship.svg" alt="Business and Entrepreneurship Icon">
        </div>

        <div class="icon-list__copy">
          <h3>Business &amp; Entrepreneurship</h3>
          <p>This competency is about understanding markets and the 'rules of the game'. It allows me to analyse and coordinate the environment required to make the envisioned design values a reality.</p>
        </div>
      </div>

      <!-- Competency Area-->
      <div class="icon-list width__small">
        <div class="icon-list__icon" data-balloon-length="medium" aria-label="Creativity &amp; Aesthetics" data-balloon-pos="up">
          <img src="i/icons/creativity-aesthetics.svg" alt="Creativity and Aesthetics Icon">
        </div>
        <div class="icon-list__copy">
          <h3>Creativity &amp; Aesthetics</h3>
          <p>This competency is about
            In euismod, dui at artibus maximus, nibh dui elementum risus, vitae tincidunt arturus leo sit amet ligula. Integer quis mollis nulla. Artem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>

      <!-- Competency Area-->
      <div class="icon-list width__small">
        <div class="icon-list__icon" data-balloon-length="medium" aria-label="Design &amp; Research Processes" data-balloon-pos="up">
          <img src="i/icons/design-research-processes.svg" alt="Design and Research Processes Icon">
        </div>
        <div class="icon-list__copy">
          <h3>Design &amp; Research Processes</h3>
          <p>In euismod, dui at artibus maximus, nibh dui elementum risus, vitae tincidunt arturus leo sit amet ligula. Integer quis mollis nulla. Artem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>

      <!-- Competency Area-->
      <div class="icon-list width__small">
        <div class="icon-list__icon" data-balloon-length="medium" aria-label="Math, Data &amp; Computing" data-balloon-pos="up">
          <img src="i/icons/math-data-computing.svg" alt="Math, Data and Computing Icon">
        </div>
        <div class="icon-list__copy">
          <h3>Math, Data &amp; Computing</h3>
          <p>In euismod, dui at artibus maximus, nibh dui elementum risus, vitae tincidunt arturus leo sit amet ligula. Integer quis mollis nulla. Artem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>

      <!-- Competency Area-->
      <div class="icon-list width__small">
        <div class="icon-list__icon" data-balloon-length="medium" aria-label="Technology &amp; Realization" data-balloon-pos="up">
          <img src="i/icons/technology-realization.svg" alt="Technology and Realization Icon">
        </div>
        <div class="icon-list__copy">
          <h3>Technology &amp; Realization</h3>
          <p>In euismod, dui at artibus maximus, nibh dui elementum risus, vitae tincidunt arturus leo sit amet ligula. Integer quis mollis nulla. Artem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>

      <!-- Competency Area-->
      <div class="icon-list width__small">
        <div class="icon-list__icon" data-balloon-length="medium" aria-label="User &amp; Society" data-balloon-pos="up">
          <img src="i/icons/user-society.svg" alt="User and Society Icon">
        </div>
        <div class="icon-list__copy">
          <h3>User &amp; Society</h3>
          <p>In euismod, dui at artibus maximus, nibh dui elementum risus, vitae tincidunt arturus leo sit amet ligula. Integer quis mollis nulla. Artem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>

      </div>
    </section>

    <!-- Section 4: M11 Semester -->
    <section id="M11">
      <div class="section__inner">
      <h2 class="width__small">M11 Semester</h2>
      <p class="width__small">In euismod, dui at artibus maximus, nibh dui elementum risus, vitae tincidunt arturus leo sit amet ligula. Integer quis mollis nulla. Artem ipsum dolor sit amet, consectetur adipiscing elit. Donec dignissim eros vel ante rhoncus, sit amet aliquet massa placerat. Donec artem turpis, vulputate a vestibulum a, cursus eu arcu. Nunc sit amet velit sed nibh congue artuere. Morbi ut turpis eget nisl tincidunt fermentum. Integer arcu nisi, aliquam a urna vitae, tincidunt commodo arcu.</p>
      <h3>Project: "Eindhoven Museum"</h3>
      <p class="width__small">In euismod, dui at artibus maximus, nibh dui elementum risus, vitae tincidunt arturus leo sit amet ligula. Integer quis mollis nulla. Artem ipsum dolor sit amet, consectetur adipiscing elit. Donec dignissim eros vel ante rhoncus, sit amet aliquet massa placerat. Donec artem turpis, vulputate a vestibulum a, cursus eu arcu. Nunc sit amet velit sed nibh congue artuere. Morbi ut turpis eget nisl tincidunt fermentum. Integer arcu nisi, aliquam a urna vitae, tincidunt commodo arcu.</p>
      <h3>Elective: "Constructive Design Research"</h3>
      <p class="width__small">In euismod, dui at artibus maximus, nibh dui elementum risus, vitae tincidunt arturus leo sit amet ligula. Integer quis mollis nulla. Artem ipsum dolor sit amet, consectetur adipiscing elit. Donec dignissim eros vel ante rhoncus, sit amet aliquet massa placerat. Donec artem turpis, vulputate a vestibulum a, cursus eu arcu. Nunc sit amet velit sed nibh congue artuere. Morbi ut turpis eget nisl tincidunt fermentum. Integer arcu nisi, aliquam a urna vitae, tincidunt commodo arcu.</p>
      <h3>Elective: "Designing Intelligence in Interaction"</h3>
      <p class="width__small">In euismod, dui at artibus maximus, nibh dui elementum risus, vitae tincidunt arturus leo sit amet ligula. Integer quis mollis nulla. Artem ipsum dolor sit amet, consectetur adipiscing elit. Donec dignissim eros vel ante rhoncus, sit amet aliquet massa placerat. Donec artem turpis, vulputate a vestibulum a, cursus eu arcu. Nunc sit amet velit sed nibh congue artuere. Morbi ut turpis eget nisl tincidunt fermentum. Integer arcu nisi, aliquam a urna vitae, tincidunt commodo arcu.</p>
      <h3>Extracurricular: "UX Designer at SPIE Nederland B.V."</h3>
      <p class="width__small">In euismod, dui at artibus maximus, nibh dui elementum risus, vitae tincidunt arturus leo sit amet ligula. Integer quis mollis nulla. Artem ipsum dolor sit amet, consectetur adipiscing elit. Donec dignissim eros vel ante rhoncus, sit amet aliquet massa placerat. Donec artem turpis, vulputate a vestibulum a, cursus eu arcu. Nunc sit amet velit sed nibh congue artuere. Morbi ut turpis eget nisl tincidunt fermentum. Integer arcu nisi, aliquam a urna vitae, tincidunt commodo arcu.</p>
      </div>
    </section>

    <!-- Section 5: M12 Semester -->
    <section id="M12">
      <div class="section__inner">
      <h2 class="width__small">M12 Semester</h2>
      <p class="width__small">In euismod, dui at artibus maximus, nibh dui elementum risus, vitae tincidunt arturus leo sit amet ligula. Integer quis mollis nulla. Artem ipsum dolor sit amet, consectetur adipiscing elit. Donec dignissim eros vel ante rhoncus, sit amet aliquet massa placerat. Donec artem turpis, vulputate a vestibulum a, cursus eu arcu. Nunc sit amet velit sed nibh congue artuere. Morbi ut turpis eget nisl tincidunt fermentum. Integer arcu nisi, aliquam a urna vitae, tincidunt commodo arcu.</p>
      <h3>Project: "Live Persona"</h3>
      <p class="width__small">In euismod, dui at artibus maximus, nibh dui elementum risus, vitae tincidunt arturus leo sit amet ligula. Integer quis mollis nulla. Artem ipsum dolor sit amet, consectetur adipiscing elit. Donec dignissim eros vel ante rhoncus, sit amet aliquet massa placerat. Donec artem turpis, vulputate a vestibulum a, cursus eu arcu. Nunc sit amet velit sed nibh congue artuere. Morbi ut turpis eget nisl tincidunt fermentum. Integer arcu nisi, aliquam a urna vitae, tincidunt commodo arcu.</p>
      <h3>Elective: "UX Theory &amp; Practice"</h3>
      <p class="width__small">In euismod, dui at artibus maximus, nibh dui elementum risus, vitae tincidunt arturus leo sit amet ligula. Integer quis mollis nulla. Artem ipsum dolor sit amet, consectetur adipiscing elit. Donec dignissim eros vel ante rhoncus, sit amet aliquet massa placerat. Donec artem turpis, vulputate a vestibulum a, cursus eu arcu. Nunc sit amet velit sed nibh congue artuere. Morbi ut turpis eget nisl tincidunt fermentum. Integer arcu nisi, aliquam a urna vitae, tincidunt commodo arcu.</p>
      <h3>Elective: "Data-Enabled Design"</h3>
      <p class="width__small">In euismod, dui at artibus maximus, nibh dui elementum risus, vitae tincidunt arturus leo sit amet ligula. Integer quis mollis nulla. Artem ipsum dolor sit amet, consectetur adipiscing elit. Donec dignissim eros vel ante rhoncus, sit amet aliquet massa placerat. Donec artem turpis, vulputate a vestibulum a, cursus eu arcu. Nunc sit amet velit sed nibh congue artuere. Morbi ut turpis eget nisl tincidunt fermentum. Integer arcu nisi, aliquam a urna vitae, tincidunt commodo arcu.</p>
      <h3>Extracurricular: "..."</h3>
      <p class="width__small">In euismod, dui at artibus maximus, nibh dui elementum risus, vitae tincidunt arturus leo sit amet ligula. Integer quis mollis nulla. Artem ipsum dolor sit amet, consectetur adipiscing elit. Donec dignissim eros vel ante rhoncus, sit amet aliquet massa placerat. Donec artem turpis, vulputate a vestibulum a, cursus eu arcu. Nunc sit amet velit sed nibh congue artuere. Morbi ut turpis eget nisl tincidunt fermentum. Integer arcu nisi, aliquam a urna vitae, tincidunt commodo arcu.</p>
    </div>
    </section>

    <!-- Section 6: M21 Semester -->
    <section id="M21">
      <div class="section__inner">
      <h2 class="width__small">M21 Semester</h2>
      <p class="width__small">In euismod, dui at artibus maximus, nibh dui elementum risus, vitae tincidunt arturus leo sit amet ligula. Integer quis mollis nulla. Artem ipsum dolor sit amet, consectetur adipiscing elit. Donec dignissim eros vel ante rhoncus, sit amet aliquet massa placerat. Donec artem turpis, vulputate a vestibulum a, cursus eu arcu. Nunc sit amet velit sed nibh congue artuere. Morbi ut turpis eget nisl tincidunt fermentum. Integer arcu nisi, aliquam a urna vitae, tincidunt commodo arcu.</p>
      <h3>Project: "FMP Proposal"</h3>
      <p class="width__small">In euismod, dui at artibus maximus, nibh dui elementum risus, vitae tincidunt arturus leo sit amet ligula. Integer quis mollis nulla. Artem ipsum dolor sit amet, consectetur adipiscing elit. Donec dignissim eros vel ante rhoncus, sit amet aliquet massa placerat. Donec artem turpis, vulputate a vestibulum a, cursus eu arcu. Nunc sit amet velit sed nibh congue artuere. Morbi ut turpis eget nisl tincidunt fermentum. Integer arcu nisi, aliquam a urna vitae, tincidunt commodo arcu.</p>
      <h3>Elective: "Design for Behavioural Change"</h3>
      <p class="width__small">In euismod, dui at artibus maximus, nibh dui elementum risus, vitae tincidunt arturus leo sit amet ligula. Integer quis mollis nulla. Artem ipsum dolor sit amet, consectetur adipiscing elit. Donec dignissim eros vel ante rhoncus, sit amet aliquet massa placerat. Donec artem turpis, vulputate a vestibulum a, cursus eu arcu. Nunc sit amet velit sed nibh congue artuere. Morbi ut turpis eget nisl tincidunt fermentum. Integer arcu nisi, aliquam a urna vitae, tincidunt commodo arcu.</p>
      <h3>Elective: "Object-Oriented Programming"</h3>
      <p class="width__small">In euismod, dui at artibus maximus, nibh dui elementum risus, vitae tincidunt arturus leo sit amet ligula. Integer quis mollis nulla. Artem ipsum dolor sit amet, consectetur adipiscing elit. Donec dignissim eros vel ante rhoncus, sit amet aliquet massa placerat. Donec artem turpis, vulputate a vestibulum a, cursus eu arcu. Nunc sit amet velit sed nibh congue artuere. Morbi ut turpis eget nisl tincidunt fermentum. Integer arcu nisi, aliquam a urna vitae, tincidunt commodo arcu.</p>
      <h3>Elective: "Foundations of Data Mining"</h3>
      <p class="width__small">In euismod, dui at artibus maximus, nibh dui elementum risus, vitae tincidunt arturus leo sit amet ligula. Integer quis mollis nulla. Artem ipsum dolor sit amet, consectetur adipiscing elit. Donec dignissim eros vel ante rhoncus, sit amet aliquet massa placerat. Donec artem turpis, vulputate a vestibulum a, cursus eu arcu. Nunc sit amet velit sed nibh congue artuere. Morbi ut turpis eget nisl tincidunt fermentum. Integer arcu nisi, aliquam a urna vitae, tincidunt commodo arcu.</p>
      <h3>Elective: "Cyberattacks: Crime &amp; Defenses"</h3>
      <p class="width__small">In euismod, dui at artibus maximus, nibh dui elementum risus, vitae tincidunt arturus leo sit amet ligula. Integer quis mollis nulla. Artem ipsum dolor sit amet, consectetur adipiscing elit. Donec dignissim eros vel ante rhoncus, sit amet aliquet massa placerat. Donec artem turpis, vulputate a vestibulum a, cursus eu arcu. Nunc sit amet velit sed nibh congue artuere. Morbi ut turpis eget nisl tincidunt fermentum. Integer arcu nisi, aliquam a urna vitae, tincidunt commodo arcu.</p>
      <h3>Elective: "The Sound of Smart Things"</h3>
      <p class="width__small">In euismod, dui at artibus maximus, nibh dui elementum risus, vitae tincidunt arturus leo sit amet ligula. Integer quis mollis nulla. Artem ipsum dolor sit amet, consectetur adipiscing elit. Donec dignissim eros vel ante rhoncus, sit amet aliquet massa placerat. Donec artem turpis, vulputate a vestibulum a, cursus eu arcu. Nunc sit amet velit sed nibh congue artuere. Morbi ut turpis eget nisl tincidunt fermentum. Integer arcu nisi, aliquam a urna vitae, tincidunt commodo arcu.</p>
      <h3>Extracurricular: "..."</h3>
      <p class="width__small">In euismod, dui at artibus maximus, nibh dui elementum risus, vitae tincidunt arturus leo sit amet ligula. Integer quis mollis nulla. Artem ipsum dolor sit amet, consectetur adipiscing elit. Donec dignissim eros vel ante rhoncus, sit amet aliquet massa placerat. Donec artem turpis, vulputate a vestibulum a, cursus eu arcu. Nunc sit amet velit sed nibh congue artuere. Morbi ut turpis eget nisl tincidunt fermentum. Integer arcu nisi, aliquam a urna vitae, tincidunt commodo arcu.</p>
    </div>
    </section>

    <!-- Section 7: M22 Semester -->
    <section id="M22">
      <div class="section__inner">
      <h2 class="width__small">M22 Semester</h2>
      <p class="width__small">In euismod, dui at artibus maximus, nibh dui elementum risus, vitae tincidunt arturus leo sit amet ligula. Integer quis mollis nulla. Artem ipsum dolor sit amet, consectetur adipiscing elit. Donec dignissim eros vel ante rhoncus, sit amet aliquet massa placerat. Donec artem turpis, vulputate a vestibulum a, cursus eu arcu. Nunc sit amet velit sed nibh congue artuere. Morbi ut turpis eget nisl tincidunt fermentum. Integer arcu nisi, aliquam a urna vitae, tincidunt commodo arcu.</p>
      <h3>Project: "FMP &mdash; Requestor"</h3>
      <p class="width__small">In euismod, dui at artibus maximus, nibh dui elementum risus, vitae tincidunt arturus leo sit amet ligula. Integer quis mollis nulla. Artem ipsum dolor sit amet, consectetur adipiscing elit. Donec dignissim eros vel ante rhoncus, sit amet aliquet massa placerat. Donec artem turpis, vulputate a vestibulum a, cursus eu arcu. Nunc sit amet velit sed nibh congue artuere. Morbi ut turpis eget nisl tincidunt fermentum. Integer arcu nisi, aliquam a urna vitae, tincidunt commodo arcu.</p>
      <h3>Extracurricular: "Brouwerij Geel Website"</h3>
      <p class="width__small">In euismod, dui at artibus maximus, nibh dui elementum risus, vitae tincidunt arturus leo sit amet ligula. Integer quis mollis nulla. Artem ipsum dolor sit amet, consectetur adipiscing elit. Donec dignissim eros vel ante rhoncus, sit amet aliquet massa placerat. Donec artem turpis, vulputate a vestibulum a, cursus eu arcu. Nunc sit amet velit sed nibh congue artuere. Morbi ut turpis eget nisl tincidunt fermentum. Integer arcu nisi, aliquam a urna vitae, tincidunt commodo arcu.</p>
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

<script defer src="js/main.min.js" charset="utf-8"></script>



</html>


<?php

echo "";

?>
