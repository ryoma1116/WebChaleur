import gsap from "gsap";
import ScrollTrigger from "gsap/ScrollTrigger";
import { ScrollSmoother } from "gsap/ScrollSmoother";
gsap.registerPlugin(ScrollSmoother);
gsap.registerPlugin(ScrollTrigger);
window.addEventListener("load", function () {
  /*=========================================
  #メディアクエリの定義
  =========================================*/
  const mm = gsap.matchMedia();
  /*=========================================
  #スプライド
  =========================================*/
  // トップページのURLをチェックする
  if (
    window.location.pathname === "/" ||
    window.location.pathname === "/index.php"
  ) {
    new Splide(".splide", {
      // Splideの設定
      type: "loop",
      perPage: 1,
      focus: "center",
      trimSpace: false,
      gap: "10%",
      padding: { left: "20%", right: "20%" },
      breakpoints: {
        768: {
          perPage: 1,
          padding: { left: "0", right: "0" },
        },
      },
    }).mount();
    /*=========================================
#mvテキスト
=========================================*/
    let splitTarget = document.querySelectorAll(".js-splitText"); // ターゲットとなる要素を全取得
    splitTarget.forEach((target) => {
      // target = ターゲット
      let newText = ""; // 生成する要素を格納するための変数
      let spanText = target.innerHTML; // ターゲットの中身を取得
      spanText.split("").forEach((char, i) => {
        // char = character 文字
        newText += '<span data-lag="' + i * 0.1 + '">' + char + "</span>"; // 一文字ずつspanタグで囲む
      });
      target.innerHTML = newText; // ターゲットに生成した要素を挿入
    });
  }
  /*=========================================
  #headerの色
  =========================================*/
  const header = document.querySelector(".header");

  gsap.to(header, {
    backgroundColor: "rgba(245, 245, 245, 0.6)",
    duration: 0.8,
    scrollTrigger: {
      trigger: header,
      start: "center top",
      toggleActions: "play none none reverse",
    },
  });

  /*=========================================
  #フッターのロゴアニメーション
  =========================================*/
  gsap.fromTo(
    ".footer-site-name",
    { autoAlpha: 0 },
    {
      autoAlpha: 1,
      duration: 2,
      scrollTrigger: {
        trigger: ".footer-site-name",
        start: "top 80%",
      },
    }
  );
  /*=========================================
#serviceセクションの画像を白黒からカラーに
=========================================*/
  gsap.utils.toArray(".service-item__img img").forEach((serviceImage) => {
    gsap.to(serviceImage, {
      filter: "grayScale(0)",
      scrollTrigger: {
        trigger: serviceImage,
        start: "center 70%",
        toggleActions: "play none none reverse",
      },
    });
  });
  /*=========================================
#ハンバーガーメニュー
=========================================*/
  const hamburger = document.querySelector(".js-hamburger");
  const drawer = document.querySelector(".js-drawer");
  const drawerLinks = document.querySelectorAll(".js-drawer a");

  hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("is-active");
    drawer.classList.toggle("is-active");
    document.body.classList.toggle("no-scroll");
  });

  drawerLinks.forEach((drawerLink) => {
    drawerLink.addEventListener("click", () => {
      hamburger.classList.remove("is-active");
      drawer.classList.remove("is-active");
      document.body.classList.remove("no-scroll");
    });
  });

  drawer.addEventListener("click", () => {
    hamburger.classList.remove("is-active");
    drawer.classList.remove("is-active");
    document.body.classList.remove("no-scroll");
  });
  /*=========================================
  #幾何学模様
  =========================================*/
  particlesJS("particles-js", {
    particles: {
      number: {
        value: 38, //この数値を変更すると幾何学模様の数が増減できる
        density: {
          enable: true,
          value_area: 800,
        },
      },
      color: {
        value: "#ffffff", //色
      },
      shape: {
        type: "polygon", //形状はpolygonを指定
        stroke: {
          width: 0,
        },
        polygon: {
          nb_sides: 3, //多角形の角の数
        },
        image: {
          width: 190,
          height: 100,
        },
      },
      opacity: {
        value: 0.664994832269074,
        random: false,
        anim: {
          enable: true,
          speed: 2.2722661797524872,
          opacity_min: 0.08115236356258881,
          sync: false,
        },
      },
      size: {
        value: 3,
        random: true,
        anim: {
          enable: false,
          speed: 40,
          size_min: 0.1,
          sync: false,
        },
      },
      line_linked: {
        enable: true,
        distance: 150,
        color: "#ffffff",
        opacity: 0.6,
        width: 1,
      },
      move: {
        enable: true,
        speed: 6, //この数値を小さくするとゆっくりな動きになる
        direction: "none", //方向指定なし
        random: false, //動きはランダムにしない
        straight: false, //動きをとどめない
        out_mode: "out", //画面の外に出るように描写
        bounce: false, //跳ね返りなし
        attract: {
          enable: false,
          rotateX: 600,
          rotateY: 961.4383117143238,
        },
      },
    },
    interactivity: {
      detect_on: "canvas",
      events: {
        onhover: {
          enable: false,
          mode: "repulse",
        },
        onclick: {
          enable: false,
        },
        resize: true,
      },
    },
    retina_detect: true,
  });
  /*=========================================
  #スクロールスムーサー
  =========================================*/
  mm.add("(min-width:769px)", () => {
    ScrollSmoother.create({
      wrapper: "#smooth-wrapper",
      content: "#smooth-content",
      smooth: 2,
      effects: true,
    });
  });
  /*=========================================
#アンカーリンクの設定
=========================================*/
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function(e) {
    e.preventDefault();

    const target = document.querySelector(this.getAttribute('href'));
    if (target) {
      const yPos = target.offsetTop; // ターゲット要素の上端までの距離

      // GSAPのScrollToPluginを使用する代わりに、
      // ネイティブのscrollToメソッドを使用
      window.scrollTo({
        top: yPos,
        behavior: 'smooth'
      });
    }
  });
});



}); //ロードの閉じタグ
