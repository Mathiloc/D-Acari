document.addEventListener("DOMContentLoaded", () => {
    
    const sliderContainers = document.querySelectorAll(".container-all");
    const toggleSliderButtons = document.querySelectorAll(".btn-zona");
    const paginationControls = document.querySelectorAll(".pagination");
  
    let activeSlider = null;
  
    toggleSliderButtons.forEach((button, index) => {
      button.addEventListener("click", (e) => {
        e.preventDefault();
  
        
        if (activeSlider === sliderContainers[index]) {
          sliderContainers[index].style.display = "none";
          paginationControls[index].style.display = "none";
          button.textContent = `Ver zona ${button.id.replace("btn", "")}`;
          activeSlider = null;
        } else {
          
          if (activeSlider) {
            const activeIndex = Array.from(sliderContainers).indexOf(activeSlider);
            sliderContainers[activeIndex].style.display = "none";
            paginationControls[activeIndex].style.display = "none";
            toggleSliderButtons[activeIndex].textContent = `Ver zona ${toggleSliderButtons[activeIndex].id.replace("btn", "")}`;
          }
  
          
          sliderContainers[index].style.display = "block";
          paginationControls[index].style.display = "flex";
          button.textContent = `Ocultar zona ${button.id.replace("btn", "")}`;
          activeSlider = sliderContainers[index];
        }
      });
    });
  });
  