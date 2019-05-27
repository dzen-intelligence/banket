@extends('base')

@section('content')

<div id="app">
    <halls-list></halls-list>
</div>

<script src="/unpkg.com/leaflet1.3.4/dist/leaflet.js"></script>
<script src="/js/map-category.js"></script>

<script>
    $(document).ready(function () {

        createListingsMap({
            mapId: 'categorySideMap',
            // jsonFile: '/js/restaurants-geojson.json'
            jsonFile: '/halls/mapdata'
        });
    });
</script>

<!-- Price  Slider-->
<script src="/d19m59y37dris4.cloudfront.net/directory/1-1/vendor/nouislider/nouislider.min.js"></script>
<script>

    $(document).ready(function() {
    var snapSlider = document.getElementById('slider-snap-perperson');

    noUiSlider.create(snapSlider, {
        start: [10, 20],
        snap: false,
        connect: true,
        step: 1,
        range: {
            'min': 10,
            'max': 20
        },
        format: {
            to: function (value) {
                return parseInt(value);
            },
            from: function (value) {
                return parseInt(value);
            }
        }
    });
    var snapValues1 = [
        document.getElementById('slider-snap-perperson-value-from'),
        document.getElementById('slider-snap-perperson-value-to')
    ];
    var inputValues1 = [
        document.getElementById('slider-snap-perperson-input-from'),
        document.getElementById('slider-snap-perperson-input-to')
    ];
    snapSlider.noUiSlider.on('update', function (values, handle) {
        snapValues1[handle].innerHTML = values[handle];
        inputValues1[handle].value = values[handle];
    });


    // Слайдер за количество персон
    var snapSliderPersons = document.getElementById('slider-snap-persons');

    noUiSlider.create(snapSliderPersons, {
        start: [10, 20],
        snap: false,
        connect: true,
        step: 1,
        range: {
            'min': 10,
            'max': 20
        },
        format: {
            to: function (value) {
                return parseInt(value);
            },
            from: function (value) {
                return parseInt(value);
            }
        }
    });
    var snapValues = [
        document.getElementById('slider-snap-persons-value-from'),
        document.getElementById('slider-snap-persons-value-to')
    ];
    var inputValues = [
        document.getElementById('slider-snap-persons-input-from'),
        document.getElementById('slider-snap-persons-input-to')
    ];
    snapSliderPersons.noUiSlider.on('update', function (values, handle) {
        snapValues[handle].innerHTML = values[handle];
        inputValues[handle].value = values[handle];
    });
    });
</script>

@endsection