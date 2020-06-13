console.log("hello world");

// Make DOM call to detect 'nav' element
const nav = document.querySelector('nav');

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
  })
})
