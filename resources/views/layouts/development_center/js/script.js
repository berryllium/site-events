import axios from "axios";

let page = 0
let ajax = false

const moreButton = document.getElementById('more')
const menuButton = document.querySelector('.menu-button')

if(moreButton) {
    moreButton.addEventListener('click', function(){
        const button = this
        if(ajax) return
        page++
        ajax = axios.get(`/news/?page=${page}&ajax=1`)
            .then(function(response){
                if(response.data.last_page) {
                    button.remove()
                }
                document.querySelector('.news-list').insertAdjacentHTML('beforeend', response.data.html);
                ajax = false
            })
            .catch(function(e){
                console.log(e)
            })
    })
}

if(menuButton) {
    menuButton.addEventListener('click', () => {
        const menu = document.querySelector('.mob-nav')
        if(menu.style.display === 'none') {
            menu.style.display = 'flex'
            menuButton.querySelector('.cross').style.display = 'block'
            menuButton.querySelector('.burger').style.display = 'none'
        } else {
            menu.style.display = 'none'
            menuButton.querySelector('.cross').style.display = 'none'
            menuButton.querySelector('.burger').style.display = 'block'
            console.log(menuButton.querySelector('.cross'))
        }
        console.log(menu.style.display)
    })
}


