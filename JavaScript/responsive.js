const butoni = document.getElementsByClassName('butoni')[0]
const navList = document.getElementsByClassName('navList')[0]

butoni.addEventListener('click', () => {
    navList.classList.toggle('active')
})