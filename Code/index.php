<!DOCTYPE html>
<html lang="en">

<body style="background-color: #020317;">
    <?php include '../Component/header.php';
     include '../Component/navbar.php'; 
    
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
    if($page == 'home') include '../Page/home.php';
    else if($page == 'browse') include '../Page/browse.php';
    else if($page == 'details') include '../Page/details.php';
    
    include '../Component/footer.php'; ?>


<script>
        const gameData = [
            { title: 'SUBNAUTICA 2', subtitle: 'Early Access Available Soon' },
            { title: 'CYBERPUNK 2078', subtitle: 'Next-Gen RPG Experience' },
            { title: 'STELLAR ODYSSEY', subtitle: 'Infinite Space Exploration' },
            { title: 'MECH WARRIORS', subtitle: 'Giant Robot Combat' },
            { title: 'FANTASY QUEST', subtitle: 'Epic Adventure Awaits'   }
        ];

        let currentSlide = 0;
        const thumbnails = document.querySelectorAll('.thumbnail');
        const dots = document.querySelectorAll('.dot');
        const mainSlideContent = document.querySelector('.main-slide-content');

        function updateCarousel(index) {
            currentSlide = index;
            
            thumbnails.forEach((thumb, i) => {
                thumb.classList.toggle('active', i === index);
            });
            
            dots.forEach((dot, i) => {
                dot.classList.toggle('active', i === index);
            });
            
            const game = gameData[index];
            mainSlideContent.innerHTML = `
                <div class="main-game-title">${game.title}</div>
                <div class="main-game-subtitle">${game.subtitle}</div>
            `;
        }

        thumbnails.forEach((thumb, index) => {
            thumb.addEventListener('click', () => updateCarousel(index));
        });

        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => updateCarousel(index));
        });

        document.querySelector('.nav-prev').addEventListener('click', () => {
            currentSlide = currentSlide > 0 ? currentSlide - 1 : gameData.length - 1;
            updateCarousel(currentSlide);
        });

        document.querySelector('.nav-next').addEventListener('click', () => {
            currentSlide = currentSlide < gameData.length - 1 ? currentSlide + 1 : 0;
            updateCarousel(currentSlide);
        });

        // Auto-play
        setInterval(() => {
            currentSlide = (currentSlide + 1) % gameData.length;
            updateCarousel(currentSlide);
        }, 5000);

        // Game grid navigation
        const gamesGrid = document.querySelector('.games-grid');
        let currentPosition = 0;
        const cardWidth = 235; // 220px + 15px gap

        document.querySelector('.cardrousel-nav.next').addEventListener('click', () => {
            const maxPosition = -(cardWidth * (gamesGrid.children.length - 4));
            currentPosition = Math.max(currentPosition - cardWidth, maxPosition);
            gamesGrid.style.transform = `translateX(${currentPosition}px)`;
        });

        document.querySelector('.cardrousel-nav.prev').addEventListener('click', () => {
            currentPosition = Math.min(currentPosition + cardWidth, 0);
            gamesGrid.style.transform = `translateX(${currentPosition}px)`;
        });

        
    </script>
</body>
</html>



	<!-- <div style="background-color: #010F26; height: 9dvh; border-top: 0.25dvh solid #ffffff;" class="navmain">
        <a href="wishlist.html" style="color: #ffffff;">WISHLIST</a>
        <a href="community.html" style="color: #ffffff;">COMMUNITY</a>
        <a href="index.html" style="color: #ffffff;">EL GAME</a>
        <a href="categories.html" style="color: #ffffff;">CATEGORIES</a>
        <a href="news.html" style="color: #ffffff;">NEWS</a>
    </div> -->
<!-- 
    <div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../Assets/Gambar/Thumbnail/Subnautica2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../Assets/Gambar/Thumbnail/EldenRing.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../Assets/Gambar/Thumbnail/Deeeer.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> -->


