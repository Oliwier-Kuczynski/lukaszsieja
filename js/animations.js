import { gsap } from "../node_modules/gsap/index.js";
import { ScrollTrigger } from "../node_modules/gsap/ScrollTrigger.js";

gsap.registerPlugin(ScrollTrigger);

gsap.utils.toArray(".subtitle").forEach((subtitle) => {
  gsap.fromTo(
    subtitle,
    {
      x: -40,
      opacity: 0,
    },
    {
      x: 0,
      opacity: 1,
      scrollTrigger: subtitle,
      ease: "power2.inOut",
      delay: 0.2,
      duration: 0.5,
    }
  );
});

gsap.fromTo(
  ".primary-header__img",
  {
    opacity: 0,
  },
  {
    opacity: 1,
    ease: "power1.inOut",
    delay: 0.2,
  }
);

gsap.fromTo(
  ".primary-header__text",
  {
    y: 40,
    opacity: 0,
  },
  {
    y: 0,
    opacity: 1,
    ease: "power1.inOut",
    delay: 0.2,
  }
);

const servicesCards = gsap.utils.toArray(".services__card");

gsap.fromTo(
  servicesCards,
  {
    x: "-100%",
    opacity: 0,
  },
  {
    x: 0,
    opacity: 1,
    scrollTrigger: servicesCards[0],
    ease: "power2.inOut",
    delay: 0.4,
    stagger: 0.4,
  }
);

gsap.fromTo(
  ".services__description",
  {
    y: 40,
    opacity: 0,
  },
  {
    y: 0,
    opacity: 1,
    scrollTrigger: ".services__description",
    ease: "power1.inOut",
    delay: 0.5,
  }
);

gsap.fromTo(
  ".consultations__img",
  {
    x: "100%",
    opacity: 0,
  },
  {
    x: 0,
    opacity: 1,
    scrollTrigger: ".consultations__img",
    ease: "power2.inOut",
    delay: 0.5,
  }
);

gsap.fromTo(
  ".consultations__text",
  {
    x: "-100%",
    opacity: 0,
  },
  {
    x: 0,
    opacity: 1,
    scrollTrigger: ".consultations__text",
    ease: "power2.inOut",
    delay: 0.5,
  }
);

gsap.utils.toArray(".about-us-section__text").forEach((aboutUsText) => {
  gsap.fromTo(
    aboutUsText,
    {
      y: 40,
      opacity: 0,
    },
    {
      y: 0,
      opacity: 1,
      scrollTrigger: aboutUsText,
      ease: "power1.inOut",
      delay: 0.5,
    }
  );
});

gsap.utils.toArray(".about-us-section__img").forEach((aboutUsImg) => {
  gsap.fromTo(
    aboutUsImg,
    {
      opacity: 0,
    },
    {
      opacity: 1,
      scrollTrigger: aboutUsImg,
      ease: "power1.inOut",
      delay: 0.5,
    }
  );
});

const whySectionCards = gsap.utils.toArray(".why-us-section__card ");

gsap.fromTo(
  whySectionCards,
  {
    x: "-100%",
    opacity: 0,
  },
  {
    x: 0,
    opacity: 1,
    scrollTrigger: whySectionCards[0],
    ease: "power2.inOut",
    delay: 0.5,
    stagger: 0.5,
  }
);

gsap.fromTo(
  ".consultation__subtitle",
  {
    x: -40,
    opacity: 0,
  },
  {
    x: 0,
    opacity: 1,
    scrollTrigger: ".consultation__subtitle",
    ease: "power1.inOut",
    delay: 0.5,
  }
);

const consultationCards = gsap.utils.toArray(".consultation__card");

gsap.fromTo(
  consultationCards,
  {
    x: "-100%",
    opacity: 0,
  },
  {
    x: 0,
    opacity: 1,
    scrollTrigger: consultationCards[0],
    ease: "power2.inOut",
    delay: 0.5,
    stagger: 0.5,
  }
);

gsap.fromTo(
  ".accusation__img",
  {
    opacity: 0,
  },
  {
    opacity: 1,
    scrollTrigger: ".accusation__img",
    ease: "power1.inOut",
    delay: 0.5,
  }
);

gsap.fromTo(
  ".accustation__text",
  {
    y: 40,
    opacity: 0,
  },
  {
    y: 0,
    opacity: 1,
    scrollTrigger: ".accustation__text",
    ease: "power1.inOut",
    delay: 0.5,
  }
);
