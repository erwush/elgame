<link rel="stylesheet" href="CSS/browse.css">

   <div class="container-carousel">
    <div class="carousel-section">
      <h1 class="section-title"> Upcoming Games </h1>

    <div class="carousel-wrapper">
      <div class="main-slide">
        
      <div class="main-slide-content">
        <div class="main-game-title">SUBNAUTICA 2</div>
          <div class="main-game-subtitle">Early Access Available Soon</div>
      </div>
      </div>
         <div id="hero-card" class="card" style="width: 18rem; border-radius: 12px;">
              <h1 id="hero-card-title" class="card-title">Subnautica 2</h1>
              <div class="hero-grid1">
  <img src="../Assets/Gambar/Skrinsut/Subnautica2/Sks1.jpg" id="hero-card-img1" class="card-img-top" alt="...">
  <img src="../Assets/Gambar/Skrinsut/Subnautica2/Sks1.jpg" id="hero-card-img2" class="card-img-top" alt="...">
              </div>


  <div id="hero-card-body" class="card-body">

    <p id="hero-card-text" class="card-text">Immerse yourself in a new adventure with Subnautica 2, an open-water survival game from the creators of the Subnautica series. </p>
  </div>
  <div style="margin-left: 1rem;">
    Early Access Available Soon
  </div>

  <div id="hero-card" class="card-body" style="border-radius: 12px;">

    <a href="#" id="hero-card-link" class="card-link"> <i class="bi bi-windows"></i> </a>
    <a href="#" id="hero-card-link" class="card-link"> <i class="bi bi-steam"></i></a>
  </div>
</div>
                <button class="carousel-nav nav-prev"></button>
                <button class="carousel-nav nav-next">›</button>
    </div> 
                <div class="carousel-dots">
                <div class="dot active"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
            </div>
    </div>
    
  

   </div>

  <div class="container">
    
        <div class="sidebar">
            <div class="filters-section">
                <h3>FILTERS</h3>
                <div class="filter-item">15446 MATCHES</div>
            </div>
            
            <div class="filters-section" style="margin-top: 2rem;">
                <h3>GENRES</h3>
                <div class="filter-item">
                    <span>Puzzle</span>
                    <span class="filter-count">2779</span>
                </div>
                <div class="filter-item">
                    <span>Arcade</span>
                    <span class="filter-count">1677</span>
                </div>
                <div class="filter-item">
                    <span>Visual Novel</span>
                    <span class="filter-count">1477</span>
                </div>
                <div class="filter-item">
                    <span>Shooter</span>
                    <span class="filter-count">1388</span>
                </div>
                <div class="filter-item">
                    <span>Point & Click</span>
                    <span class="filter-count">1030</span>
                </div>
                <div class="filter-item" style="color: #3b82f6;">
                    <span>Show More</span>
                </div>
            </div>
        </div>

        <div class="main-content">
            <div class="top-nav">
                <div class="nav-tabs">
                    <button class="nav-tab active" data-category="ALL">ALL</button>
                    <button class="nav-tab" data-category="NEW & TRENDING">NEW & TRENDING</button>
                    <button class="nav-tab" data-category="TOP SELLERS">TOP SELLERS</button>
                    <button class="nav-tab" data-category="TOP RATED">TOP RATED</button>
                    <button class="nav-tab" data-category="POPULAR UPCOMING">POPULAR UPCOMING</button>
                </div>
                

<div style="display: flex; gap: 1rem; align-items: center;">
  <button id="filterToggle" class="btn" style="          background-color: #2F2945;; color: white; border: 1px solid rgba(255,255,255,0.2);">
    <i class="bi bi-funnel"></i>
  </button>
  <div class="search-container">
    <input type="text" class="search-input" placeholder="Search for a tag or option" id="searchInput">
    <button class="search-btn">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
        <circle cx="11" cy="11" r="8"></circle>
        <path d="m21 21-4.35-4.35"></path>
      </svg>
    </button>
  </div>
</div>
            </div>

            <div class="games-grid" id="gamesGrid">
                <!-- Games -->
            </div>

            <div class="show-more-container">
                <button class="show-more-btn" id="showMoreBtn">
                    Browse More
                    <svg class="chevron" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="m6 9 6 6 6-6"></path>
                    </svg>d
                </button>
            </div>

            <div class="stats" id="stats"></div>
        </div>
    </div>
  
    
<script>
// Game data
// Game data
var gameData = [
  { title: 'SUBNAUTICA 2', subtitle: 'Early Access Available Soon' },
  { title: 'CYBERPUNK 2078', subtitle: 'Next-Gen RPG Experience' },
  { title: 'STELLAR ODYSSEY', subtitle: 'Infinite Space Exploration' },
  { title: 'MECH WARRIORS', subtitle: 'Giant Robot Combat' },
  { title: 'FANTASY QUEST', subtitle: 'Epic Adventure Awaits' }
];

var games = [
  {
    id: 1,
    title: "No Man's Sky",
    category: "NEW & TRENDING",
    genre: ["Open World", "Open World Survival Craft", "Space", "Exploration", "Sci-fi"],
    date: "AUG 12, 2016",
    reviews: "Very Positive 163,701 User Reviews",
    discount: 60,
    originalPrice: "Rp 449,999",
    currentPrice: "Rp 179,999",
    image: "",
    rating: 89
  },
  {
    id: 2,
    title: "Total War: WARHAMMER III",
    category: "TOP SELLERS",
    genre: ["Strategy", "Turn-Based Strategy", "Grand Strategy", "RTS", "Fantasy"],
    date: "FEB 17, 2022",
    reviews: "Mostly Positive 44,674 User Reviews",
    discount: 70,
    originalPrice: "Rp 649,999",
    currentPrice: "Rp 194,699",
    image: "",
    rating: 78
  },
  {
    id: 3,
    title: "Red Dead Redemption 2",
    category: "TOP RATED",
    genre: ["Open World", "Story Rich", "Western", "Adventure", "Multiplayer"],
    date: "DEC 5, 2019",
    reviews: "Very Positive 257,940 User Reviews",
    discount: 75,
    originalPrice: "Rp 879,999",
    currentPrice: "Rp 219,750",
    image: "",
    rating: 97
  },
  {
    id: 4,
    title: "Hogwarts Legacy",
    category: "POPULAR UPCOMING",
    genre: ["Magic", "Open World", "Fantasy", "Singleplayer", "Adventure"],
    date: "FEB 11, 2023",
    reviews: "Very Positive 129,642 User Reviews",
    discount: 80,
    originalPrice: "Rp 799,999",
    currentPrice: "Rp 159,800",
    image: "../Assets/Gambar/Thumbnail/HogwartsLegacy.jpg",
    rating: 84
  },
  {
    id: 5,
    title: "Ready or Not",
    category: "TOP SELLERS",
    genre: ["Tactical", "Realistic", "FPS", "Shooter", "Multiplayer"],
    date: "DEC 14, 2023",
    reviews: "Mostly Positive 131,515 User Reviews",
    discount: 40,
    originalPrice: "Rp 259,999",
    currentPrice: "Rp 155,599",
    image: "",
    rating: 76
  },
  {
    id: 6,
    title: "Hollow Knight",
    category: "TOP RATED",
    genre: ["Metroidvania", "Souls-like", "Platformer", "Great Soundtrack", "Difficult"],
    date: "FEB 25, 2017",
    reviews: "Overwhelmingly Positive 135,150 User Reviews",
    discount: 50,
    originalPrice: "Rp 129,999",
    currentPrice: "Rp 65,499",
    image: "",
    rating: 95
  },
  {
    id: 7,
    title: "Grand Theft Auto V Enhanced",
    category: "ALL",
    genre: ["Open World", "Action", "Multiplayer", "Sexual Content", "Crime"],
    date: "MAR 4, 2022",
    reviews: "Very Positive 28,041 User Reviews",
    discount: 56,
    originalPrice: "Rp 659,999",
    currentPrice: "Rp 289,999",
    image: "",
    rating: 87
  },
  {
    id: 8,
    title: "Cyberpunk 2077",
    category: "NEW & TRENDING",
    genre: ["Open World", "RPG", "Futuristic", "Sci-fi", "Dystopian"],
    date: "DEC 10, 2020",
    reviews: "Very Positive 645,123 User Reviews",
    discount: 50,
    originalPrice: "Rp 599,999",
    currentPrice: "Rp 299,999",
    image: "",
    rating: 78
  }
];

// Global variables
var currentSlide = 0;
var activeCategory = 'ALL';
var showMore = false;
var searchTerm = '';
var sidebarVisible = false;

// Carousel functions
function updateCarousel(index) {
  currentSlide = index;
  
  var dots = document.querySelectorAll('.dot');
  for (var i = 0; i < dots.length; i++) {
    if (i === index) {
      dots[i].classList.add('active');
    } else {
      dots[i].classList.remove('active');
    }
  }
  
  var game = gameData[index];
  var mainSlideContent = document.querySelector('.main-slide-content');
  if (mainSlideContent) {
    mainSlideContent.innerHTML = '<div class="main-game-title">' + game.title + '</div><div class="main-game-subtitle">' + game.subtitle + '</div>';
  }
}

// Toggle sidebar function
function toggleSidebar() {
  var sidebar = document.querySelector('.sidebar');
  var mainContent = document.querySelector('.main-content');
  var filterToggle = document.getElementById('filterToggle');
  
  if (sidebar && mainContent && filterToggle) {
    sidebarVisible = !sidebarVisible;
    
    if (sidebarVisible) {
      // Show sidebar
      sidebar.style.display = 'block';
      mainContent.style.marginLeft = '0';
      mainContent.style.width = 'auto';
      // Active button style
      filterToggle.style.backgroundColor = '#4D4569';
      filterToggle.style.borderColor = '#3b82f6';
      filterToggle.style.color = 'white';
    } else {
      // Hide sidebar
      sidebar.style.display = 'none';
      mainContent.style.marginLeft = '0';
      mainContent.style.width = '100%';
      // Inactive button style
      filterToggle.style.backgroundColor = '#2F2945';
      filterToggle.style.borderColor = 'rgba(255,255,255,0.2)';
      filterToggle.style.color = '#ccc';
    }
  }
}
function createGameCard(game) {
  var discountBadge = game.discount ? '<div class="discount-badge">-' + game.discount + '%</div>' : '';
  var genreHtml = '';
  for (var i = 0; i < Math.min(game.genre.length, 4); i++) {
    genreHtml += '<span class="meta-item">' + game.genre[i] + '</span>';
  }
  
  var originalPriceHtml = game.discount ? '<div class="original-price">' + game.originalPrice + '</div>' : '';
  
  return '<div class="game-card">' +
          '<div class="game-image-container">' +
            '<img src="' + game.image + '" alt="' + game.title + '" class="game-image">' +
            discountBadge +
          '</div>' +
          '<div class="game-info">' +
            '<h3 class="game-title">' + game.title + '</h3>' +
            '<div class="game-meta">' + genreHtml + '</div>' +
            '<div class="game-date">' + game.date + '</div>' +
            '<div class="game-reviews">' + game.reviews + '</div>' +
            '<div class="game-footer">' +
              '<div class="rating-container">' +
                '<div class="rating-badge">' + game.rating + '%</div>' +
                '<span class="rating-text">User Score</span>' +
              '</div>' +
              '<div class="price-container">' +
                originalPriceHtml +
                '<div class="current-price">' + game.currentPrice + '</div>' +
              '</div>' +
            '</div>' +
          '</div>' +
        '</div>';
}

function filterGames() {
  var result = [];
  for (var i = 0; i < games.length; i++) {
    var game = games[i];
    var matchesCategory = activeCategory === 'ALL' || game.category === activeCategory;
    var matchesSearch = game.title.toLowerCase().indexOf(searchTerm.toLowerCase()) !== -1;
    
    if (!matchesSearch) {
      for (var j = 0; j < game.genre.length; j++) {
        if (game.genre[j].toLowerCase().indexOf(searchTerm.toLowerCase()) !== -1) {
          matchesSearch = true;
          break;
        }
      }
    }
    
    if (matchesCategory && matchesSearch) {
      result.push(game);
    }
  }
  return result;
}

function renderGames() {
  var filteredGames = filterGames();
  var visibleGames = showMore ? filteredGames : filteredGames.slice(0, 4);
  
  var gamesGrid = document.getElementById('gamesGrid');
  if (!gamesGrid) return;
  
  var gamesHtml = '';
  for (var i = 0; i < visibleGames.length; i++) {
    gamesHtml += createGameCard(visibleGames[i]);
  }
  gamesGrid.innerHTML = gamesHtml;

  var showMoreBtn = document.getElementById('showMoreBtn');
  if (!showMoreBtn) return;
  
  if (filteredGames.length > 4) {
    showMoreBtn.style.display = 'inline-flex';
    var buttonText = showMore ? 'Show Less' : 'Browse More';
    var chevronClass = showMore ? 'chevron rotated' : 'chevron';
    showMoreBtn.innerHTML = buttonText + '<svg class="' + chevronClass + '" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m6 9 6 6 6-6"></path></svg>';
  } else {
    showMoreBtn.style.display = 'none';
  }

  var statsElement = document.getElementById('stats');
  if (statsElement) {
    statsElement.textContent = 'Showing ' + visibleGames.length + ' of ' + filteredGames.length + ' games';
  }
}

// Initialize everything when DOM is ready
function initializeApp() {
  // Set initial sidebar state (hidden by default)
  var sidebar = document.querySelector('.sidebar');
  var mainContent = document.querySelector('.main-content');
  var filterToggle = document.getElementById('filterToggle');
  
  if (sidebar && mainContent && filterToggle) {
    // Hide sidebar initially
    sidebar.style.display = 'none';
    mainContent.style.width = '100%';
    // Set inactive button style
    filterToggle.style.backgroundColor = '#2F2945';
    filterToggle.style.borderColor = 'rgba(255,255,255,0.2)';
    filterToggle.style.color = '#ccc';
  }
  // Carousel initialization
  var dots = document.querySelectorAll('.dot');
  for (var i = 0; i < dots.length; i++) {
    (function(index) {
      dots[index].addEventListener('click', function() {
        updateCarousel(index);
      });
    })(i);
  }

  var navPrev = document.querySelector('.nav-prev');
  if (navPrev) {
    navPrev.addEventListener('click', function() {
      currentSlide = currentSlide > 0 ? currentSlide - 1 : gameData.length - 1;
      updateCarousel(currentSlide);
    });
  }

  var navNext = document.querySelector('.nav-next');
  if (navNext) {
    navNext.addEventListener('click', function() {
      currentSlide = currentSlide < gameData.length - 1 ? currentSlide + 1 : 0;
      updateCarousel(currentSlide);
    });
  }

  // Category tabs
  var navTabs = document.querySelector('.nav-tabs');
  if (navTabs) {
    navTabs.addEventListener('click', function(e) {
      if (e.target.classList.contains('nav-tab')) {
        var tabs = document.querySelectorAll('.nav-tab');
        for (var i = 0; i < tabs.length; i++) {
          tabs[i].classList.remove('active');
        }
        
        e.target.classList.add('active');
        activeCategory = e.target.getAttribute('data-category');
        showMore = false;
        renderGames();
      }
    });
  }

  // Show more button
  var showMoreBtn = document.getElementById('showMoreBtn');
  if (showMoreBtn) {
    showMoreBtn.addEventListener('click', function() {
      showMore = !showMore;
      renderGames();
    });
  }

  // Filter toggle button
  var filterToggle = document.getElementById('filterToggle');
  if (filterToggle) {
    filterToggle.addEventListener('click', function() {
      toggleSidebar();
    });
  }
  var searchInput = document.getElementById('searchInput');
  if (searchInput) {
    searchInput.addEventListener('input', function(e) {
      searchTerm = e.target.value;
      showMore = false;
      renderGames();
    });
  }

  // Auto-play carousel
  setInterval(function() {
    currentSlide = (currentSlide + 1) % gameData.length;
    updateCarousel(currentSlide);
  }, 5000);

  // Initial render
  renderGames();
}

// Wait for DOM to load
if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', initializeApp);
} else {
  initializeApp();
}
</script>