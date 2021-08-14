var one = document.querySelector('.one')
var two = document.querySelector('.two')
var three = document.querySelector('.three')

var who = document.querySelector('.who')
var vision = document.querySelector('.vision')
var mission = document.querySelector('.mission')


two.addEventListener('click', function () {
    vision.classList.remove('hai')
    who.classList.add('hai')
    mission.classList.add('hai')
    one.classList.remove('ash')
    two.classList.add('ash')
    three.classList.remove('ash')
})

three.addEventListener('click', function () {
    vision.classList.add('hai')
    who.classList.add('hai')
    mission.classList.remove('hai')
    one.classList.remove('ash')
    two.classList.remove('ash')
    three.classList.add('ash')
})

one.addEventListener('click', function () {
    vision.classList.add('hai')
    who.classList.remove('hai')
    mission.classList.add('hai')
    one.classList.add('ash')
    two.classList.remove('ash')
    three.classList.remove('ash')

})


