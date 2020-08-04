/*--------------------------------------------------
      Global vars & DOM calls
---------------------------------------------------*/

// Make DOM call to detect 'nav' element
const nav = document.querySelector('nav');

const hamburger = document.getElementById('hamburgerMenu');

// Make reference to all deliverable items
let allDeliverables = document.getElementsByClassName('deliverables__item');

// Init PhotoSwipe
const pswpElement = document.querySelectorAll('.pswp')[0];

/*--------------------------------------------------
      Functions
---------------------------------------------------*/


var initPhotoSwipeFromDOM = function(gallerySelector) {

    // parse slide data (url, title, size ...) from DOM elements
    // (children of gallerySelector)
    var parseThumbnailElements = function(el) {
        var thumbElements = el.childNodes,
            numNodes = thumbElements.length,
            items = [],
            figureEl,
            linkEl,
            size,
            item;

        for(var i = 0; i < numNodes; i++) {

            figureEl = thumbElements[i]; // <figure> element

            // include only element nodes
            if(figureEl.nodeType !== 1) {
                continue;
            }

            linkEl = figureEl.children[0]; // <a> element

            size = linkEl.getAttribute('data-size').split('x');

            // create slide object
            item = {
                src: linkEl.getAttribute('href'),
                w: parseInt(size[0], 10),
                h: parseInt(size[1], 10)
            };



            if(figureEl.children.length > 1) {
                // <figcaption> content
                item.title = figureEl.children[1].innerHTML;
            }

            if(linkEl.children.length > 0) {
                // <img> thumbnail element, retrieving thumbnail url
                item.msrc = linkEl.children[0].getAttribute('src');
            }

            item.el = figureEl; // save link to element for getThumbBoundsFn
            items.push(item);
        }

        return items;
    };

    // find nearest parent element
    var closest = function closest(el, fn) {
        return el && ( fn(el) ? el : closest(el.parentNode, fn) );
    };

    // triggers when user clicks on thumbnail
    var onThumbnailsClick = function(e) {
        e = e || window.event;
        e.preventDefault ? e.preventDefault() : e.returnValue = false;

        var eTarget = e.target || e.srcElement;

        // find root element of slide
        var clickedListItem = closest(eTarget, function(el) {
            return (el.tagName && el.tagName.toUpperCase() === 'FIGURE');
        });

        if(!clickedListItem) {
            return;
        }

        // find index of clicked item by looping through all child nodes
        // alternatively, you may define index via data- attribute
        var clickedGallery = clickedListItem.parentNode,
            childNodes = clickedListItem.parentNode.childNodes,
            numChildNodes = childNodes.length,
            nodeIndex = 0,
            index;

        for (var i = 0; i < numChildNodes; i++) {
            if(childNodes[i].nodeType !== 1) {
                continue;
            }

            if(childNodes[i] === clickedListItem) {
                index = nodeIndex;
                break;
            }
            nodeIndex++;
        }



        if(index >= 0) {
            // open PhotoSwipe if valid index found
            openPhotoSwipe( index, clickedGallery );
        }
        return false;
    };

    // parse picture index and gallery index from URL (#&pid=1&gid=2)
    var photoswipeParseHash = function() {
        var hash = window.location.hash.substring(1),
        params = {};

        if(hash.length < 5) {
            return params;
        }

        var vars = hash.split('&');
        for (var i = 0; i < vars.length; i++) {
            if(!vars[i]) {
                continue;
            }
            var pair = vars[i].split('=');
            if(pair.length < 2) {
                continue;
            }
            params[pair[0]] = pair[1];
        }

        if(params.gid) {
            params.gid = parseInt(params.gid, 10);
        }

        return params;
    };

    var openPhotoSwipe = function(index, galleryElement, disableAnimation, fromURL) {
        var pswpElement = document.querySelectorAll('.pswp')[0],
            gallery,
            options,
            items;

        items = parseThumbnailElements(galleryElement);

        // define options (if needed)
        options = {

            // define gallery index (for URL)
            galleryUID: galleryElement.getAttribute('data-pswp-uid'),

            getThumbBoundsFn: function(index) {
                // See Options -> getThumbBoundsFn section of documentation for more info
                var thumbnail = items[index].el.getElementsByTagName('img')[0], // find thumbnail
                    pageYScroll = window.pageYOffset || document.documentElement.scrollTop,
                    rect = thumbnail.getBoundingClientRect();

                return {x:rect.left, y:rect.top + pageYScroll, w:rect.width};
            }

        };

        // PhotoSwipe opened from URL
        if(fromURL) {
            if(options.galleryPIDs) {
                // parse real index when custom PIDs are used
                // http://photoswipe.com/documentation/faq.html#custom-pid-in-url
                for(var j = 0; j < items.length; j++) {
                    if(items[j].pid == index) {
                        options.index = j;
                        break;
                    }
                }
            } else {
                // in URL indexes start from 1
                options.index = parseInt(index, 10) - 1;
            }
        } else {
            options.index = parseInt(index, 10);
        }

        // exit if index not found
        if( isNaN(options.index) ) {
            return;
        }

        if(disableAnimation) {
            options.showAnimationDuration = 0;
        }

        // Pass data to PhotoSwipe and initialize it
        gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
        gallery.init();
    };

    // loop through all gallery elements and bind events
    var galleryElements = document.querySelectorAll( gallerySelector );

    for(var i = 0, l = galleryElements.length; i < l; i++) {
        galleryElements[i].setAttribute('data-pswp-uid', i+1);
        galleryElements[i].onclick = onThumbnailsClick;
    }

    // Parse URL and open gallery if it contains #&pid=3&gid=1
    var hashData = photoswipeParseHash();
    if(hashData.pid && hashData.gid) {
        openPhotoSwipe( hashData.pid ,  galleryElements[ hashData.gid - 1 ], true, true );
    }
};


function updateUrlHash(hash) {
  // Check if browser supports pushState API
  if (history.pushState) {
    history.replaceState(null, '', `#${hash}`);
  } else {
    // If not, use 'location.hash' instead.
    location.hash = `#${hash}`;
  }
}


let observer = new IntersectionObserver((entries, observer) => {
  entries.forEach(entry => {
    if(entry.isIntersecting){
      // Update URL with hash of id
      updateUrlHash(entry.target.id);

      // Remove all tags from nav
      Array.prototype.forEach.call(nav.children, child => {
        child.classList.remove('active');
      })

      // Loop again, add 'active' if there is a match
      Array.prototype.forEach.call(nav.children, child => {
        if (child.hash.substr(1) == entry.target.id) {
          child.classList.add('active');
        }
      })

      // Add back to the specific clicked item
      // child.classList.toggle('active');
    }
  });
}, {rootMargin: "0px 0px 0px 0px"});


// Function that counts the amount of words in a string
function countWords(string) {
  return string.split(' ').length;
}

// Reading Time = Amount of Words / Reading Speed per Minute. (Rounded down to the minute)
function calcReadingTime(words, speed) {
  return Math.round( words / speed );
}

function updateReadingTimeDOM() {
  // Get the DOM element that will have the dynamic amount of minutes
  const readingTimeDOM = document.getElementById('readingTime');

  // Humans read around 200 to 250 words per minute. For the calculation, we use the lower end.
  const readingSpeed = 200;

  // We want to only count the words that are in the actual article.
  let blogArticle = document.querySelector('main').innerText;
  let totalWords = countWords(blogArticle);

  // The resulting reading time is this:
  let readingTime = calcReadingTime(totalWords, readingSpeed);

  // Finally, update the innerHTML of the reading time DOM element.
  readingTimeDOM.innerHTML = readingTime;

  // Also, we need to update the 'aria-label' on the paragraph element that is the parent of the readingTimeDOM.

  readingTimeDOM.parentElement.setAttribute('aria-label', `How is the reading time estimated, you ask? Well, on average, our reading speed is 200 to 250 words per minute. \n \n  This web page contains ${totalWords} words.  ${totalWords} / 200 ≈ ${readingTime} minutes. There we go! \n \n  However, the actual reading time may be more, as the deliverables created for these activities were not included in this estimate.`)
}

function updateGreeting() {
  // Get client's current datetime
  let now = new Date();
  // Extract current hour
  let currentHour = now.getHours();

  // Get DOM element that is customised, based on the time
  const timeOfDayDOM = document.getElementById('timeOfDay');

  // Initialize variable that stores the eventual greeting
  let greeting;

  // Conditionally detect the time of day
  if (currentHour <= 4) {
    greeting = 'evening';
  } else if (currentHour <= 11) {
    greeting = 'morning';
  } else if (currentHour <= 17) {
    greeting = 'afternoon';
  } else {
    greeting = 'evening';
  }

  // Finally, update the conditional greeting
  timeOfDayDOM.innerHTML = greeting;
}

// Make reference to all icons
let allIcons = document.getElementsByClassName('icon-list__icon');

// Make reference to individual icon lists
let iconBe = document.getElementsByClassName('icon__be');
let iconCa = document.getElementsByClassName('icon__ca');
let iconDrp = document.getElementsByClassName('icon__drp');
let iconMdc = document.getElementsByClassName('icon__mdc');
let iconTr = document.getElementsByClassName('icon__tr');
let iconUs = document.getElementsByClassName('icon__us');

// Keeps track of currently active icon list
let iconActive = "";

function iconEventListener(competency) {
  for (i=0; i<competency.length; i++) {
    competency[i].addEventListener('click', function() {
      toggleCompetencyClass(competency);
    })
  }
}

// Function that highlights icons of the selected competency
function toggleCompetencyClass(competency) {

  // Reset all competency icons
  for (i=0; i<allIcons.length; i++) {
    allIcons[i].classList.remove("active");

    allIcons[i].parentElement.parentElement.classList.add("inactive");
  }

  // Check if the clicked icon is also active
  if (iconActive != competency[0].classList[1]) {
    // Icon is currently not yet active.
    iconActive = competency[0].classList[1];
    // Add them back to the selected competency area
    for (i=0; i<competency.length; i++) {
      competency[i].classList.add("active");

      competency[i].parentElement.parentElement.classList.remove("inactive");
    }
  } else {
    // Reset active icon variable
    iconActive = "";

    for (i=0; i<allIcons.length; i++) {
      allIcons[i].parentElement.parentElement.classList.remove("inactive");
    }
  }
}


function toggleLinkVisited(target) {
  // Check if target has not been visited before
  target.classList.add('visited');
}

function toggleHamburger() {
  // Select 'aside' DOM element
  const aside = document.querySelector('aside');

  if (aside.classList.contains('visible')) {
    aside.style.opacity = '0';
    setTimeout(function() {
      aside.classList.remove('visible');
    }, 200);
    hamburger.classList.remove('active');
  } else {
    aside.style.opacity = '100';
    aside.classList.add('visible');
    hamburger.classList.add('active');
  }
}

// Nav A tag behaviour: close hamburger menu if screen is small enough.
function linkAndBurger() {
  if (screen.width <= 780) {
    toggleHamburger();
  }
}

/*--------------------------------------------------
      EventListeners
---------------------------------------------------*/

hamburger.addEventListener('click', function() {
  toggleHamburger();
})

// Add hamburger closer eventlistener to all 'a' tags in nav
for (i=0; i < nav.children.length; i++) {
  nav.children[i].addEventListener('click', function() {
    linkAndBurger();
  })
}

// Add eventlistener to deliverables to keep track of them being clicked.
for (i=0; i<allDeliverables.length; i++) {
  allDeliverables[i].addEventListener('click', function() {
    // console.log(this);
    toggleLinkVisited(this);
  })
}

// Add eventlistener to all sections (for scrolling / URL hash refresh)
document.querySelectorAll('section').forEach(section => { observer.observe(section) });

// Add event listeners to icons
iconEventListener(iconBe);
iconEventListener(iconCa);
iconEventListener(iconDrp);
iconEventListener(iconMdc);
iconEventListener(iconTr);
iconEventListener(iconUs);

/*--------------------------------------------------
      OnLoad Functions
---------------------------------------------------*/

// Initiate PhotoSwipe from DOM functionality
initPhotoSwipeFromDOM('.pswp__gallery');

// updateReadingTimeDOM();
updateGreeting();
