const GAS_WEB_APP_URL = 'https://script.google.com/macros/s/AKfycbzoWm0nvFIJLgeuheR2PmjsiXMrRQT8d1Fu18353D-8BwoclfgOMpoOcTtXJ0A1cBA3XA/exec';

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
  const simTabs = document.querySelectorAll('.simulation__tab');
  const simPanels = document.querySelectorAll('.simulation__panel');
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
  const faqQuestions = document.querySelectorAll('.faq__question');
  faqQuestions.forEach(question => {
    question.addEventListener('click', () => {
      const item = question.closest('.faq__item');
      // Optional: Close other items when one is opened (accordion style)
      // document.querySelectorAll('.faq__item').forEach(i => {
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
  const siteFooter = document.querySelector('.footer');
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

  // GAS Form Submission
  const contactForm = document.getElementById('gas-contact-form');
  if (contactForm) {
    contactForm.addEventListener('submit', function(e) {
      e.preventDefault(); // 1. デフォルトの画面遷移を防止

      const submitBtn = contactForm.querySelector('button[type="submit"]');
      const originalBtnText = submitBtn.textContent;
      
      // 2. 二重送信を防止するため、送信ボタンを非活性化
      submitBtn.disabled = true;
      submitBtn.textContent = '送信中...';
      submitBtn.style.opacity = '0.7';
      submitBtn.style.cursor = 'not-allowed';

      // 3. 全項目の値をオブジェクトにまとめる
      const formData = new FormData(contactForm);
      const dataObj = {};
      formData.forEach((value, key) => {
        dataObj[key] = value;
      });

      // fetchでPOST送信 (CORSエラーを防ぐためtext/plainを指定)
      fetch(GAS_WEB_APP_URL, {
        method: 'POST',
        headers: {
          'Content-Type': 'text/plain',
        },
        body: JSON.stringify(dataObj)
      })
      .then(response => {
        // 4. 送信完了・失敗のフィードバック
        if (!response.ok) {
          throw new Error('Network error');
        }
        alert('お問い合わせの送信が完了しました。2~3営業日以内に担当者よりご連絡いたします。');
        // 5. 送信完了後はフォームの入力値をリセット
        contactForm.reset();
      })
      .catch(error => {
        console.error('Error:', error);
        alert('送信に失敗しました。通信環境をご確認の上、再度お試しください。');
      })
      .finally(() => {
        // 5. ボタンを元に戻す
        submitBtn.disabled = false;
        submitBtn.textContent = originalBtnText;
        submitBtn.style.opacity = '1';
        submitBtn.style.cursor = 'pointer';
      });
    });
  }
});
