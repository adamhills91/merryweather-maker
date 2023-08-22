import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

// Mobile menu

const mobileMenu = document.querySelector(".main-navigation");
const mobileMenuBtn = document.querySelector(".menu-toggle");
const test = document.querySelector(".menu-menu-1-container");

const toggleMobileMenu = () => {
  if (!mobileMenu.classList.contains("toggled")) {
    gsap.to(test, {
      x: 0,
      duration: 1.6,
      ease: "power4.out",
    });
  } else {
    gsap.to(test, {
      x: "100%",
      duration: 1.6,
      ease: "power4.out",
    });
  }

  mobileMenuBtn.classList.toggle("active");
};

mobileMenuBtn.addEventListener("click", toggleMobileMenu);

// Home page sliding panels

const panels = document.querySelectorAll(".slide-in-panels .panel");

panels.forEach((panel, i) => {
  gsap.from(panel, {
    x: () => {
      if (i % 2 === 0) {
        return "-100%";
      } else {
        return "100%";
      }
    },

    duration: 1.2,
    ease: "power2.out",
    scrollTrigger: {
      trigger: panel,
      start: "top center+=25%",
    },
  });
});

const imagesWithLinksSection = document.querySelector(
  "section.images-with-links"
);
if (imagesWithLinksSection) {
  const links = imagesWithLinksSection.querySelectorAll(".link");

  gsap.from(links, {
    scrollTrigger: {
      trigger: imagesWithLinksSection,
      start: "top center+=25%",
    },
    y: 80,
    opacity: 0,
    duration: 3,
    ease: "power2.out",
    stagger: 0.2,
  });
}

const keyFeaturesSection = document.querySelector(".key-features");

if (keyFeaturesSection) {
  const features = keyFeaturesSection.querySelectorAll(".feature");

  gsap.from(features, {
    scrollTrigger: {
      trigger: keyFeaturesSection,
      start: "top center+=25%",
    },
    y: 80,
    opacity: 0,
    duration: 3,
    ease: "power2.out",
    stagger: 0.2,
  });
}

const productBarSection = document.querySelector(".product-bar");

if (productBarSection) {
  const textContainer = productBarSection.querySelector(".text-container");
  const products = productBarSection.querySelectorAll(".product");
  const content = [textContainer, ...products];

  gsap.from(content, {
    scrollTrigger: {
      trigger: productBarSection,
      start: "top center+=25%",
    },
    y: 80,
    opacity: 0,
    duration: 3,
    ease: "power2.out",
    stagger: 0.2,
  });
}

const textBannerSection = document.querySelector(".text-banner");

if (textBannerSection) {
  const banner = textBannerSection.querySelector(".banner");

  gsap.from(banner, {
    scrollTrigger: {
      trigger: textBannerSection,
      start: "top center+=25%",
    },
    y: 80,
    opacity: 0,
    duration: 3,
    ease: "power2.out",
    stagger: 0.2,
  });
}

const reviewsSection = document.querySelector(".customer-reviews");

if (reviewsSection) {
  const title = reviewsSection.querySelector(".title-container");
  const reviews = reviewsSection.querySelectorAll(".swiper-slide");
  const content = [title, ...reviews];

  gsap.from(content, {
    scrollTrigger: {
      trigger: reviewsSection,
      start: "top center+=25%",
    },
    y: 80,
    opacity: 0,
    duration: 3,
    ease: "power2.out",
    stagger: 0.2,
  });
}

const endorsementsSection = document.querySelector(".endorsements");

if (endorsementsSection) {
  const textContainer = endorsementsSection.querySelector(".text-container");
  const endorsements = endorsementsSection.querySelectorAll(".endorsement");
  const content = [textContainer, ...endorsements];

  gsap.from(textContainer, {
    scrollTrigger: {
      trigger: endorsementsSection,
      start: "top center+=25%",
    },
    y: 80,
    opacity: 0,
    duration: 3,
    ease: "power2.out",
    stagger: 0.2,
  });

  gsap.from(endorsements, {
    scrollTrigger: {
      trigger: endorsements,
      start: "top center+=25%",
    },
    y: 80,
    opacity: 0,
    duration: 3,
    ease: "power2.out",
    stagger: 0.2,
  });
}

const woocommerce = document.querySelector(".woocommerce-archive-wrapper");

if (woocommerce) {
  const products = woocommerce.querySelectorAll(".product");

  gsap.from(products, {
    scrollTrigger: {
      trigger: woocommerce,
      start: "top center+=25%",
    },
    y: 80,
    opacity: 0,
    duration: 2,
    ease: "power2.out",
    stagger: 0.1,
  });
}

const contactFormSection = document.querySelector(".contact-form");

if (contactFormSection) {
  const contactInfo = contactFormSection.querySelector(".contact-information");
  const fields = contactFormSection.querySelectorAll(".wpforms-field");
  const submitBtn = contactFormSection.querySelector(
    ".wpforms-submit-container"
  );
  const content = [contactInfo, ...fields, submitBtn];

  gsap.from(content, {
    scrollTrigger: {
      trigger: contactFormSection,
      start: "top center+=25%",
    },
    y: 80,
    opacity: 0,
    duration: 2,
    ease: "power2.out",
    stagger: 0.1,
  });
}
