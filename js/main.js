// Make DOM call to detect 'nav' element
const nav = document.querySelector('nav');
// let clickTimeout = true;
// setTimeout(function() {
//   clickTimeout = false;
// }, 1000);

// Add click event listeners to all its children
Array.prototype.forEach.call(nav.children, child => {
  child.addEventListener('click', event => {

    // Remove all tags from nav
    Array.prototype.forEach.call(nav.children, child => {
      child.classList.remove('active');
    })

    // Add back to the specific clicked item
    child.classList.toggle('active');
    console.log(child);

    // Set 'clickTimeout' to true to prevent IntersectionObserver from hijacking
    // clickTimeout = true;
    // setTimeout(function() {clickTimeout = false;}, 1000);
  })
})


// Init PhotoSwipe
const pswpElement = document.querySelectorAll('.pswp')[0];

// build items array
let items = [
  {
    src: 'https://placekitten.com/600/400',
    w: 600,
    h: 400
  },
  {
    src: 'https://placekitten.com/1200/900',
    w: 1200,
    h: 900
  }
];

// Define options (if needed)
let options = {
  // optionName: 'option value'
  index: 0 // start at first slide
}

// Initializes and opens PhotoSwipe
var gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, options);
// gallery.init();


function updateUrlHash(hash) {
  // Check if browser supports pushState API
  if (history.pushState) {
    history.pushState(null, null, `#${hash}`);
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
    }
  });
}, {rootMargin: "0px 0px 0px 0px"});
document.querySelectorAll('section').forEach(section => { observer.observe(section) });
