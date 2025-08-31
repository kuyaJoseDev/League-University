// ================= Search Function =================
const searchInput = document.getElementById('searchInput'); 
const productCards = document.querySelectorAll('.product-card');

searchInput.addEventListener('input', function() {
  const query = this.value.toLowerCase();

  productCards.forEach(card => {
    const title = card.querySelector('h1, h2, h3, h4, h5').innerText.toLowerCase();
    const description = card.querySelector('p').innerText.toLowerCase();
    
    if (title.includes(query) || description.includes(query)) {
      card.style.display = 'block';
    } else {
      card.style.display = 'none';
    }
  });
});

// ================= Horizontal Scroll =================
const slider = document.querySelector('.products');
let isDown = false;
let startX;
let scrollLeft;

slider.addEventListener('mousedown', (e) => {
  isDown = true;
  slider.classList.add('active');
  startX = e.pageX - slider.offsetLeft;
  scrollLeft = slider.scrollLeft;
});
slider.addEventListener('mouseleave', () => {
  isDown = false;
  slider.classList.remove('active');
});
slider.addEventListener('mouseup', () => {
  isDown = false;
  slider.classList.remove('active');
});
slider.addEventListener('mousemove', (e) => {
  if(!isDown) return;
  e.preventDefault();
  const x = e.pageX - slider.offsetLeft;
  const walk = (x - startX) * 2; // scroll-fast
  slider.scrollLeft = scrollLeft - walk;
});

// ================= Floating Cart =================
const cartCount = document.getElementById('cartCount');
const floatingCart = document.getElementById('floatingCart');
const cartDropdown = document.getElementById('cartDropdown');
const cartItemsContainer = document.getElementById('cartItems');
const cartTotal = document.getElementById('cartTotal');

// Update cart counter
function updateCartCount() {
  fetch('get_cart_count.php')
    .then(res => res.json())
    .then(data => {
      cartCount.textContent = data.count;
    });
}

// Toggle dropdown
floatingCart.addEventListener('click', () => {
  cartDropdown.style.display = cartDropdown.style.display === 'block' ? 'none' : 'block';
});

// Load cart items with image, name, price
function loadCartItems() {
  fetch('get_cart_items.php')
    .then(res => res.json())
    .then(data => {
      if(data.items.length === 0){
        cartItemsContainer.innerHTML = '<p>Your cart is empty.</p>';
        cartTotal.textContent = '0';
      } else {
        let html = '';
        let total = 0;
        data.items.forEach((item) => {
          total += parseFloat(item.price);
          html += `
            <div class="cart-item">
              <img src="${item.image}" alt="${item.name}" class="cart-item-img" />
              <div class="cart-item-details">
                <h4>${item.name}</h4>
                <p>Price: ${item.price} PHP</p>
                <button onclick="removeCartItem('${item.id}')">Remove</button>
              </div>
            </div>`;
        });
        cartItemsContainer.innerHTML = html;
        cartTotal.textContent = total.toFixed(2);
      }
    });
}

// Remove item
function removeCartItem(id){
  fetch('remove_cart_item.php', {
    method: 'POST',
    headers: {'Content-Type':'application/json'},
    body: JSON.stringify({id})
  })
  .then(res => res.json())
  .then(data => {
    if(data.success){
      updateCartCount();
      loadCartItems();
    }
  });
}

// Add to Cart buttons
document.querySelectorAll('.add-to-cart-btn').forEach(button => {
  button.addEventListener('click', () => {
    const name = button.dataset.name;
    const price = button.dataset.price;
    const image = button.dataset.image;

    fetch('add_to_cart.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({ name, price, image })
    })
    .then(res => res.json())
    .then(data => {
      if(data.success){
        updateCartCount();
        loadCartItems();
        button.textContent = "Added!";
        setTimeout(() => button.textContent = "Add to Cart", 1200);
      }
    });
  });
});

// Initialize
updateCartCount();
loadCartItems();

document.addEventListener('DOMContentLoaded', () => {
  let currentImages = [];
  let currentIndex = 0;
  let autoSlideTimer = null;

  const overlay = document.getElementById('slideshowOverlay');
  const slideshowImg = document.getElementById('slideshowImg');
  const dotsContainer = document.getElementById('dotsContainer');

  function showImage(index) {
    slideshowImg.src = currentImages[index];
    slideshowImg.onload = () => slideshowImg.style.opacity = 1;
    slideshowImg.onerror = () => console.error("Image not found:", currentImages[index]);
    updateDots();
  }

  function createDots() {
    dotsContainer.innerHTML = '';
    currentImages.forEach((_, i) => {
      const dot = document.createElement('span');
      dot.classList.add('dot');
      dot.addEventListener('click', () => {
        currentIndex = i;
        showImage(currentIndex);
        startAutoSlide();
      });
      dotsContainer.appendChild(dot);
    });
  }

  function updateDots() {
    const dots = dotsContainer.querySelectorAll('.dot');
    dots.forEach(dot => dot.classList.remove('active'));
    if(dots[currentIndex]) dots[currentIndex].classList.add('active');
  }

  function startAutoSlide() {
    stopAutoSlide();
    autoSlideTimer = setInterval(() => {
      currentIndex = (currentIndex + 1) % currentImages.length;
      showImage(currentIndex);
    }, 4000);
  }

  function stopAutoSlide() {
    if(autoSlideTimer) clearInterval(autoSlideTimer);
    autoSlideTimer = null;
  }

  // Click product image to open slideshow
  document.querySelectorAll('.product-image').forEach(div => {
    div.addEventListener('click', () => {
      currentImages = div.dataset.images.split(',').map(i => i.trim());
      if (!currentImages.length) return;
      currentIndex = 0;
      overlay.style.display = 'flex';
      createDots();
      showImage(currentIndex);
      startAutoSlide();
    });
  });

  // Close overlay
  document.getElementById('closeBtn').addEventListener('click', () => {
    overlay.style.display = 'none';
    stopAutoSlide();
  });

  overlay.addEventListener('click', e => {
    if(e.target === overlay) overlay.style.display = 'none';
  });

  // Prev / Next
  document.getElementById('prevBtn').addEventListener('click', () => {
    currentIndex = (currentIndex - 1 + currentImages.length) % currentImages.length;
    showImage(currentIndex);
    startAutoSlide();
  });

  document.getElementById('nextBtn').addEventListener('click', () => {
    currentIndex = (currentIndex + 1) % currentImages.length;
    showImage(currentIndex);
    startAutoSlide();
  });
});
