<style>
    body {
        height: 100vh;
        display: grid;
        place-items: center;
    }

    .slider {
        width: 100%;
        max-width: 800px;
        height: 350px;
        position: relative;
        /* overflow: hidden; */
    }

    .slide {
        width: 100%;
        max-width: 800px;
        height: 350px;
        position: absolute;
        transition: all 0.5s;
    }

    .slide img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .btn {
        position: absolute;
        width: 40px;
        height: 40px;
        padding: 10px;
        border: none;
        border-radius: 50%;
        z-index: 10px;
        cursor: pointer;
        background-color: #fff;
        font-size: 18px;
    }

    .btn:active {
        transform: scale(1.1);
    }

    .btn-prev {
        top: 45%;
        left: 2%;
    }

    .btn-next {
        top: 45%;
        right: 2%;
    }

    .slider {
        width: 100%;
        max-width: 800px;
        height: 350px;
        position: relative;
        overflow: hidden;  /* <===  */
        border-radius: 15px;
    }

</style>

<!-- slider container -->
<div class="slider">

    <!-- slide 1 -->
    <div class="slide">
        <img
            src="https://source.unsplash.com/random?landscape,mountain"
            alt=""
        />
    </div>

    <!-- slide 2 -->
    <div class="slide">
        <img src="https://source.unsplash.com/random?landscape,cars" alt="" />
    </div>

    <!-- slide 3 -->
    <div class="slide">
        <img src="https://source.unsplash.com/random?landscape,night" alt="" />
    </div>

    <!-- slide 4 -->
    <div class="slide">
        <img src="https://source.unsplash.com/random?landscape,city" alt="" />
    </div>

    <!-- Control buttons -->
    <button class="btn btn-next">></button>
    <button class="btn btn-prev"></button>
</div>


<script>
    // Select all slides
    const slides = document.querySelectorAll(".slide");

    // loop through slides and set each slides translateX property to index * 100%
    slides.forEach((slide, indx) => {
        slide.style.transform = `translateX(${indx * 100}%)`;
    });

    // current slide counter
    let curSlide = 0;

    // select next slide button
    const nextSlide = document.querySelector(".btn-next");

    // add event listener and next slide functionality
    nextSlide.addEventListener("click", function () {
        curSlide++;

        slides.forEach((slide, indx) => {
            slide.style.transform = `translateX(${100 * (indx - curSlide)}%)`;
        });
    });

    // select prev slide button
    const prevSlide = document.querySelector(".btn-prev");

    // add event listener and navigation functionality
    prevSlide.addEventListener("click", function () {
        // check if current slide is the first and reset current slide to last
        if (curSlide === 0) {
            curSlide = maxSlide;
        } else {
            curSlide-;
        }

        //   move slide by 100%
        slides.forEach((slide, indx) => {
            slide.style.transform = `translateX(${100 * (indx - curSlide)}%)`;
        });
    });
</script>
