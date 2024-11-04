import 'flowbite';

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
  document.querySelectorAll('.toggle-reply').forEach(button => {
      
      const replySection = button.parentElement.nextElementSibling;
    
      if (replySection.classList.contains('hidden')) {
        button.textContent = '+'; 
      } else {
        button.textContent = '-'; 
      }
    
      button.addEventListener('click', function () {
        replySection.classList.toggle('hidden'); 
    
        if (replySection.classList.contains('hidden')) {
          this.textContent = '+'; 
        } else {
          this.textContent = '-'; 
        }
      });
    });
    
    
// toggle icon

const dropdownButton = document.getElementById('userDropdownButton');
    const dropdownMenu = document.getElementById('userDropdownMenu');

    dropdownButton.addEventListener('click', function(event) {
        event.stopPropagation(); 
        dropdownMenu.classList.toggle('hidden');
    });

    window.addEventListener('click', function() {
        if (!dropdownMenu.classList.contains('hidden')) {
            dropdownMenu.classList.add('hidden');
        }
    });