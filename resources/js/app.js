
// Scroll
document.addEventListener("DOMContentLoaded", function () {
    const links = document.querySelectorAll('a[href^="#"]');
  
    links.forEach((link) => {
      link.addEventListener("click", function (e) {
        e.preventDefault();
  
        const targetId = this.getAttribute("href");
        const targetElement = document.querySelector(targetId);
  
        if (targetElement) {
          window.scrollTo({
            top: targetElement.offsetTop,
            behavior: "smooth",
          });
        }
      });
    });
  });
  
  // Comment funtion
window.showButtons = function () {
    console.log("showButtons called");
    document.getElementById("comment-input").classList.add("py-6");
    document.getElementById("button-container").classList.remove("hidden");
};

window.hideButtons = function () {
    console.log("hideButtons called");
    const input = document.getElementById("comment-input");
    if (input.value === "") {
        input.classList.remove("py-6");
        document.getElementById("button-container").classList.add("hidden");
    }
};

  
  //   reply minimize
  document.querySelectorAll('.toggle-btn').forEach(button => {
      // Find the reply section related to the button
      const replySection = button.parentElement.nextElementSibling;
    
      // Set the initial state: check if reply section has 'hidden' class
      if (replySection.classList.contains('hidden')) {
        button.textContent = '+'; // Show plus sign if hidden
      } else {
        button.textContent = '-'; // Show minus sign if visible
      }
    
      // Add click event to toggle visibility using the 'hidden' class
      button.addEventListener('click', function () {
        replySection.classList.toggle('hidden'); // Toggle the 'hidden' class
    
        if (replySection.classList.contains('hidden')) {
          this.textContent = '+'; // Show plus when hidden
        } else {
          this.textContent = '-'; // Show minus when visible
        }
      });
    });
    
    
