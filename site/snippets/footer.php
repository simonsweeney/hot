
<script>
    let pause = true;
    let hover = false;
    let urls = [
        '1.jpg',
        '2.jpg',
        '3.jpg',
        '4.jpg',
        '5.jpg',
        '6.jpg',
        '7.jpg',
        '8.jpg'
    ]

    let image_container = document.getElementsByClassName('images');
    image_container = image_container[0];
    let hot_potato = document.getElementById('hot_potato');

    hot_potato.addEventListener("mouseover", function( event ) {
        if(!hover) {
            pause = false;
            document.body.classList.add('image-on');
        }
        hover = true;
    }, false);
    hot_potato.addEventListener("mouseleave", function( event ) {
        hover = false;
        pause = true;
        document.body.classList.remove('image-on');

    }, false);

    
    let interval = window.setInterval(animate, 300);
    function animate() {
        if (!pause) {
            image_container.style.backgroundImage = 'url(img/' + urls[Math.floor(Math.random() * urls.length)] + ')'; 
        }
    }

    setTimeout(function() {
        document.body.classList.add('page-on');
    }, 1000);
</script>


</body>
</html>