ymaps.ready(init);

function init() {
    const map = document.getElementById('map')
    const link = map.dataset.link
    const name = map.dataset.name
    const preset = map.dataset.preset ? map.dataset.preset : 'islands#default'

    let coords = []

    var match = link.match(/([-0-9.]+)%2C([-0-9.]+)/);
    if (match) {
        coords = [parseFloat(match[2]), parseFloat(match[1])]
    } else {
        return
    }

    console.log(coords)

    var myMap = new ymaps.Map("map", {
        center: coords,
        zoom: 15
    });

    var myPlacemark = new ymaps.Placemark(coords, {
        hintContent: name,
        balloonContent: name
    }, {
        preset: preset,
        iconColor: 'red'
    });

    myMap.geoObjects.add(myPlacemark);
}