document.addEventListener('DOMContentLoaded', () => {


  // Smooth scrolling for anchor links
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();
      const targetId = this.getAttribute('href');
      if (targetId === '#') return;
      
      const targetElement = document.querySelector(targetId);
      if (targetElement) {
        targetElement.scrollIntoView({
          behavior: 'smooth'
        });
      }
    });
  });

  // Tab switching logic for simulation section
  const simTabs = document.querySelectorAll('.sim-tab');
  const simPanels = document.querySelectorAll('.sim-panel');
  if (simTabs.length > 0) {
    simTabs.forEach(tab => {
      tab.addEventListener('click', () => {
        // Remove active class from all tabs and panels
        simTabs.forEach(t => t.classList.remove('active'));
        simPanels.forEach(p => p.classList.remove('active'));

        // Add active class to clicked tab and corresponding panel
        tab.classList.add('active');
        const targetPanel = document.getElementById(tab.dataset.target);
        if (targetPanel) {
          targetPanel.classList.add('active');
        }
      });
    });
  }
  // FAQ accordion logic
  const faqQuestions = document.querySelectorAll('.faq-question');
  faqQuestions.forEach(question => {
    question.addEventListener('click', () => {
      const item = question.closest('.faq-item');
      // Optional: Close other items when one is opened (accordion style)
      // document.querySelectorAll('.faq-item').forEach(i => {
      //   if(i !== item) i.classList.remove('active');
      // });
      item.classList.toggle('active');
    });
  });

  // Back to top button logic
  const backToTopBtn = document.getElementById('backToTop');
  if (backToTopBtn) {
    window.addEventListener('scroll', () => {
      if (window.scrollY > 300) {
        backToTopBtn.classList.add('visible');
      } else {
        backToTopBtn.classList.remove('visible');
      }
    });

    backToTopBtn.addEventListener('click', (e) => {
      e.preventDefault();
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  // Close CTA logic
  const closeCtaBtn = document.getElementById('closeCtaBtn');
  const floatingCtaWrapper = document.getElementById('floatingCtaWrapper');
  if (closeCtaBtn && floatingCtaWrapper) {
    closeCtaBtn.addEventListener('click', () => {
      floatingCtaWrapper.style.display = 'none';
    });
  }

  // Hide CTA when reaching footer
  const siteFooter = document.querySelector('.site-footer');
  if (siteFooter && floatingCtaWrapper) {
    const footerObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          floatingCtaWrapper.style.opacity = '0';
          floatingCtaWrapper.style.pointerEvents = 'none';
        } else {
          floatingCtaWrapper.style.opacity = '1';
          floatingCtaWrapper.style.pointerEvents = 'auto';
        }
      });
    }, { root: null, threshold: 0.1 });
    
    footerObserver.observe(siteFooter);
  }

  // Hamburger Menu Logic
  const hamburger = document.getElementById('hamburger');
  const headerNav = document.getElementById('headerNav');
  
  if (hamburger && headerNav) {
    hamburger.addEventListener('click', () => {
      hamburger.classList.toggle('active');
      headerNav.classList.toggle('active');
    });

    // Close menu when a link is clicked
    const navLinks = headerNav.querySelectorAll('a');
    navLinks.forEach(link => {
      link.addEventListener('click', () => {
        hamburger.classList.remove('active');
        headerNav.classList.remove('active');
      });
    });
  }
});
