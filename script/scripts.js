const toggleMenu = () => {
    console.log(document.getElementById('nav-menu'))
    document.getElementById('nav-menu').classList.toggle("hide");
}


let pageArray = ['index', 'cruises', 'agent_1', 'agent_2', 'book']

let page = location.href

page = page.split('/')
page = page[page.length-1].split('.')[0]

console.log(page)

let navList = document.querySelectorAll('ul#nav-menu li:not(.parent)')

for(let i = 0; i < navList.length; i++) {
    navList[i].classList.remove('active')
}

navList[pageArray.indexOf(page)].classList.add('active')