var TxtType = function(el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = '';
    this.tick();f
    this.isDeleting = alse;
  };
  
  TxtType.prototype.tick = function() {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];
  
    if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
    }
  
    this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';
  
    var that = this;
    var delta = 200 - Math.random() * 100;
  
    if (this.isDeleting) { delta /= 2; }
  
   
  
    setTimeout(function() {
    that.tick();
    }, delta);
  };
  
  window.onload = function() {
    var elements = document.getElementsByClassName('typewrite');
    for (var i=0; i<elements.length; i++) {
        var toRotate = elements[i].getAttribute('data-type');
        var period = elements[i].getAttribute('data-period');
        if (toRotate) {
          new TxtType(elements[i], JSON.parse(toRotate), period);
        }
    }
    // INJECT CSS
    var css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
    document.body.appendChild(css);
  };
  
  
  
  
  
  function activateNavigation() {
    const sections = document.querySelectorAll(".section");
    const navContainer = document.createElement("nav");
    const navItems = Array.from(sections).map((section) => {
      return `
                      <div class="nav-item" data-for-section="${section.id}">
                          <a href="#${section.id}" class="nav-link"></a>
                          <span class="nav-label">${section.dataset.label}</span>
                      </div>
                  `;
    });
  
    navContainer.classList.add("nav");
    navContainer.innerHTML = navItems.join("");
  
    const observer = new IntersectionObserver(
      (entries) => {
        document.querySelectorAll(".nav-link").forEach((navLink) => {
          navLink.classList.remove("nav-link-selected");
        });
  
        const visibleSection = entries.filter((entry) => entry.isIntersecting)[0];
  
        document
          .querySelector(
            `.nav-item[data-for-section="${visibleSection.target.id}"] .nav-link`
          )
          .classList.add("nav-link-selected");
      },
      { threshold: 0.5 }
    );
  
    sections.forEach((section) => observer.observe(section));
  
    document.body.appendChild(navContainer);
  }
  
  activateNavigation();
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  $(document).ready(function(){
      $('ul li a').on('click', function(){
          $(this).closest('ul').find('a').removeClass('is-active');
          $(this).addClass('is-active');
          return false;
      });
  });