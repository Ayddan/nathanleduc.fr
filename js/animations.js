gsap.registerPlugin(ScrollTrigger);

const locoScroll = new LocomotiveScroll({
    el: document.querySelector('[data-scroll-container]'),
    smooth: true
});

// each time Locomotive Scroll updates, tell ScrollTrigger to update too (sync positioning)
locoScroll.on("scroll", ScrollTrigger.update);

// tell ScrollTrigger to use these proxy methods for the ".smooth-scroll" element since Locomotive Scroll is hijacking things
ScrollTrigger.scrollerProxy(".smooth-scroll", {
  scrollTop(value) {
    return arguments.length ? locoScroll.scrollTo(value, 0, 0) : locoScroll.scroll.instance.scroll.y;
  }, // we don't have to define a scrollLeft because we're only scrolling vertically.
  getBoundingClientRect() {
    return {top: 0, left: 0, width: window.innerWidth, height: window.innerHeight};
  },
  // LocomotiveScroll handles things completely differently on mobile devices - it doesn't even transform the container at all! So to get the correct behavior and avoid jitters, we should pin things with position: fixed on mobile. We sense it by checking to see if there's a transform applied to the container (the LocomotiveScroll-controlled element).
  pinType: document.querySelector(".smooth-scroll").style.transform ? "transform" : "fixed"
});


let letters = document.querySelectorAll('.logo-letter')

// Animations des lettres du hero
gsap.from(letters,{stagger:.2,delay:1, duration:1.5, x: 1500, opacity:0, ease: 'power2.out'})


function floatLetter(i,delay){
    let letterTl = gsap.timeline({repeat:-1,delay:delay})
    letterTl.to(letters[i],{duration:5, y:50, ease: 'power1.inOut'})
            .to(letters[i],{duration:5, y:0, ease: 'power1.inOut'})
    letterTl.play()
}

floatLetter(0,.5)
floatLetter(1,1.2)


var title = document.querySelector("h1");
var titleSplit = new SplitText(title,{type: "chars,words,lines"});

var subTitle = document.querySelector(".sub-title");
var subTitleSplit = new SplitText(subTitle,{type: "chars,words,lines"});

let titleTl = gsap.timeline()
titleTl.from(titleSplit.words,{stagger:.2, y:200, opacity:0, ease: 'power1.out'})
    .from(subTitleSplit.chars,{stagger: .03, y:200, opacity:0, ease: 'power1.out'},'-=.5')
    .from('.links-wrapper .button-1',{duration:1,stagger: .2,y:200,opacity:0},'-=.5')

titleTl.play()

// setTimeout(()=>{
//     window.addEventListener('mousemove', (ev)=>{
//         gsap.to(letters[0],{
//             x: ev.x / 70,
//             duration: 2,
//         })
//         gsap.to(letters[1],{
//             x: ev.x / 70,
//             duration: 2,
//         })
//     })
// },2000)

gsap.from('.presentation h2',{
    scrollTrigger: {
        trigger: ".presentation" ,
        scroller: ".smooth-scroll",
        start: "top center",
        end: "+=500"},
        duration:1.5, 
        y:200,opacity:0, 
        ease:'power2.out'
    })

gsap.from('.presentation p',{
    scrollTrigger: {
        trigger: ".presentation" ,
        scroller: ".smooth-scroll",
        start: "top center", 
        end: "+=500"},
        duration:1.5, 
        y:200,
        opacity:0, 
        ease:'power2.out'
    })


// Animations de la section tech
let techContent = document.querySelectorAll('.tech-content')
let techTitle = document.querySelectorAll('.tech h2')
let techElements = document.querySelectorAll('.tech .tech-content .tech-line .tech-element')

gsap.from('.tech-1 h2',{
    scrollTrigger: {
        trigger: '.tech-1' ,
        scroller: ".smooth-scroll",
        start: "top center", 
        end: "+=500"},
        duration:1, 
        y:200,
        opacity:0, 
        ease:'back.out'
    })

gsap.from('.tech-1 .tech-element',{
    scrollTrigger: {
        trigger: '.tech-1' ,
        scroller: ".smooth-scroll",
        start: "top center", 
        end: "+=500"},
        duration:1,
        stagger:.05, 
        scale:0,
        opacity:0, 
        ease:'back.out'
    })

gsap.from('.tech-2 h2',{
    scrollTrigger: {
        trigger: '.tech-2' ,
        scroller: ".smooth-scroll",
        start: "top center", 
        end: "+=500"},
        duration:1, 
        y:200,
        opacity:0, 
        ease:'back.out'
    })

gsap.from('.tech-2 .tech-element',{
    scrollTrigger: {
        trigger: '.tech-2' ,
        scroller: ".smooth-scroll",
        start: "top center", 
        end: "+=500"},
        duration:1,
        stagger:.05, 
        scale:0,
        opacity:0, 
        ease:'back.out'
    })

gsap.from('.tech-3 h2',{
    scrollTrigger: {
        trigger: '.tech-3' ,
        scroller: ".smooth-scroll",
        start: "top center", 
        end: "+=500"},
        duration:1, 
        y:200,
        opacity:0, 
        ease:'back.out'
    })

gsap.from('.tech-3 .tech-element',{
    scrollTrigger: {
        trigger: '.tech-3' ,
        scroller: ".smooth-scroll",
        start: "top center", 
        end: "+=500"},
        duration:1,
        stagger:.05, 
        scale:0,
        opacity:0, 
        ease:'back.out'})



gsap.from('.projects h2',{
    scrollTrigger: {
        trigger: '.projects' ,
        scroller: ".smooth-scroll",
        start: "top center", 
        end: "+=500"},
        duration:1, 
        y:200,
        opacity:0, 
        ease:'back.out'
    })

gsap.from('.projects span.in-dev',{
    scrollTrigger: {
        trigger: '.projects' ,
        scroller: ".smooth-scroll",
        start: "top center", 
        end: "+=500"},
        duration:1, 
        y:200,
        opacity:0, 
        ease:'back.out'
    })

gsap.from('.project-element',{
    scrollTrigger: {
        trigger: '.projects' ,
        scroller: ".smooth-scroll",
        start: "top center", 
        end: "+=500"},
        duration:1, 
        stagger:.1, 
        scale:0,
        opacity:0, 
        ease:'power2.out'
    })



gsap.from('.contact h2',{
    scrollTrigger: {
        trigger: '.contact' ,
        scroller: ".smooth-scroll",
        start: "top center", 
        end: "+=500"},
        duration:1, 
        y:200,
        opacity:0, 
        ease:'back.out'
    })

gsap.from('.contact form .form-group',{
    scrollTrigger: {
        trigger: '.contact' ,
        scroller: ".smooth-scroll",
        start: "top center", 
        end: "+=500"},
        duration:1,
        stagger:0.03, 
        x:-500,
        opacity:0, 
        ease:'power1.out'
    })


gsap.from('.contact #map',{
    scrollTrigger: {
        trigger: '.contact' ,
        scroller: ".smooth-scroll",
        start: "top center", 
        end: "+=500"},
        duration:1, 
        x:500,
        opacity:0, 
        ease:'power1.out'
    })

gsap.from('.social-link',{
    scrollTrigger: {
        trigger: '.contact' ,
        scroller: ".smooth-scroll",
        start: "top center", 
        end: "+=500"}, 
        duration:1,
        stagger:0.05, 
        y:-50,
        opacity:0, 
        ease:'power1.out'
    })


// each time the window updates, we should refresh ScrollTrigger and then update LocomotiveScroll. 
ScrollTrigger.addEventListener("refresh", () => locoScroll.update());

// after everything is set up, refresh() ScrollTrigger and update LocomotiveScroll because padding may have been added for pinning, etc.
ScrollTrigger.refresh();