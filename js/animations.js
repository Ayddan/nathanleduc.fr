gsap.registerPlugin(ScrollTrigger);

let letters = document.querySelectorAll('.logo-letter')

// Animations des lettres du hero
gsap.from(letters,{stagger:.2,duration:1.5, x: 1500, opacity:0, ease: 'power2.out'})

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

gsap.from('.presentation h2',{scrollTrigger: {trigger: ".presentation" ,start: "top center", end: "+=500"},duration:1.5, y:200,opacity:0, ease:'power2.out'})

gsap.from('.presentation p',{scrollTrigger: {trigger: ".presentation" ,start: "top center", end: "+=500"},duration:1.5, y:200,opacity:0, ease:'power2.out'})


// Animations de la section tech
let techContent = document.querySelectorAll('.tech-content')
let techTitle = document.querySelectorAll('.tech h2')
let techElements = document.querySelectorAll('.tech .tech-content .tech-line .tech-element')

gsap.from('.tech-1 h2',{scrollTrigger: {trigger: '.tech-1' ,start: "top center", end: "+=500"},duration:1, y:200,opacity:0, ease:'back.out'})

gsap.from('.tech-1 .tech-element',{scrollTrigger: {trigger: '.tech-1' ,start: "top center", end: "+=500"},duration:1,stagger:.05, scale:0,opacity:0, ease:'back.out'})

gsap.from('.tech-2 h2',{scrollTrigger: {trigger: '.tech-2' ,start: "top center", end: "+=500"},duration:1, y:200,opacity:0, ease:'back.out'})

gsap.from('.tech-2 .tech-element',{scrollTrigger: {trigger: '.tech-2' ,start: "top center", end: "+=500"},duration:1,stagger:.05, scale:0,opacity:0, ease:'back.out'})

gsap.from('.tech-3 h2',{scrollTrigger: {trigger: '.tech-3' ,start: "top center", end: "+=500"},duration:1, y:200,opacity:0, ease:'back.out'})

gsap.from('.tech-3 .tech-element',{scrollTrigger: {trigger: '.tech-3' ,start: "top center", end: "+=500"},duration:1,stagger:.05, scale:0,opacity:0, ease:'back.out'})



gsap.from('.projects h2',{scrollTrigger: {trigger: '.projects' ,start: "top center", end: "+=500"},duration:1, y:200,opacity:0, ease:'back.out'})

gsap.from('.project-element',{scrollTrigger: {trigger: '.projects' ,start: "top center", end: "+=500"},duration:1, stagger:.1, scale:0,opacity:0, ease:'power2.out'})



gsap.from('.contact h2',{scrollTrigger: {trigger: '.contact' ,start: "top center", end: "+=500"},duration:1, y:200,opacity:0, ease:'back.out'})

gsap.from('.contact form .form-group',{scrollTrigger: {trigger: '.contact' ,start: "top center", end: "+=500"},duration:1,stagger:0.03, x:-500,opacity:0, ease:'power1.out'})


gsap.from('.contact #map',{scrollTrigger: {trigger: '.contact' ,start: "top center", end: "+=500"},duration:1, x:500,opacity:0, ease:'power1.out'})

gsap.from('.social-link',{scrollTrigger: {trigger: '.contact' ,start: "top center", end: "+=500"}, duration:1,stagger:0.05, y:-50,opacity:0, ease:'power1.out'})