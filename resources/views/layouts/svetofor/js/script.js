import axios from "axios";

let page = 0
let ajax = false

document.getElementById('more').addEventListener('click', function(){
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
