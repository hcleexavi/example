
  <ul class="">
    <li class="card" link="/doc/wireless-vibration-sensor">
      <div class="front"><img src="/img/main/m_main_4box_01_f.jpg" alt=""></div>
      <div class="back"><img src="/img/main/m_main_4box_01_b.jpg" alt=""></div>
    </li>
    <div class="card" link="/doc/motorized-visualization-system">
      <div class="front"><img src="/img/main/m_main_4box_02_f.jpg" alt="Front 2"></div>
      <div class="back"><img src="/img/main/m_main_4box_02_b.jpg" alt="Back 2"></div>
    </div>
    <li class="card" link="/doc/laser">
      <div class="front"><img src="/img/main/m_main_4box_03_f.jpg" alt="Front 3"></div>
      <div class="back"><img src="/img/main/m_main_4box_03_b.jpg" alt="Back 3"></div>
    </li>
    <li class="card" link="/doc/improvement">
      <div class="front"><img src="/img/main/m_main_4box_04_f.jpg" alt="Front 4"></div>
      <div class="back"><img src="/img/main/m_main_4box_04_b.jpg" alt="Back 4"></div>
    </li>
  </ul>

<style type="text/css">
body {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  background-color: #f0f0f0;
  margin: 0;
}
ul {list-style: none;margin:0;padding:0}

.card-wrap {
  width: 100%;
  margin-top:200vw;
}

.card {
  width: calc(100vw - 15px);
  max-width: 600px; /* Adjust as necessary */
  height: 200px; /* Adjust as necessary */
  margin: 10px auto;
  perspective: 2000px;
  position: relative;
}

.card div {
  width: 100%;
  height: 100%;
  position: absolute;
  backface-visibility: hidden;
  transition: transform 2s;
}

.back {
  transform: rotateX(0deg);
}

.front {
  transform: rotateX(180deg);
}

.card.flipped .back {
  transform: rotateX(-180deg);
}

.card.flipped .front {
  transform: rotateX(0deg);
}

.card img {
  width: 100%;
  height: 100%;
  display: block;
  border-radius:10px;
  /* object-fit: cover; */
}


</style>

<script>
$(function () {
  $(".card").on("click", function () {
    const link = $(this).attr("link");
    setTimeout(function(){
      location.href = link;
    }, 500);
    return false;
  });
});

document.addEventListener('DOMContentLoaded', (event) => {
  const cards = document.querySelectorAll('.card');

  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('flipped');
        observer.unobserve(entry.target); // Stop observing after flipping
      }
    });
  }, {
    threshold: 0.5 // Trigger when 50% of the card is in view
  });

  cards.forEach(card => {
    observer.observe(card);
  });

  cards.forEach(card => {
    card.addEventListener('mouseenter', () => {
      card.classList.remove('flipped');
    });

    card.addEventListener('mouseleave', () => {
      card.classList.add('flipped');
    });
  });
});


</script>