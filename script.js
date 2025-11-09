// buat filter menu
function filterMenu(kategori) {
  const products = document.querySelectorAll(".product-item");

  products.forEach((product) => {
    const productCategory = product.getAttribute("data-category");

    if (kategori === "all" || productCategory === kategori) {
      product.style.display = "block";
    } else {
      product.style.display = "none";
    }
  });
}

// buat keranjang belanja
let cart = [];

function formatRupiah(angka) {
  return "Rp " + angka.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
}

function updateCartDisplay() {
  const cartItems = document.getElementById("cart-items");
  const totalPrice = document.getElementById("total-price");

  if (cart.length === 0) {
    cartItems.innerHTML = `
            <div class="text-center py-5 empty-cart-message">
                <i class="bi bi-cart-x display-1 text-muted"></i>
                <p class="text-muted mt-3">Keranjang belanja masih kosong</p>
            </div>
        `;
    totalPrice.textContent = "Rp 0";
    return;
  }

  let total = 0;
  let cartHTML = "";

  cart.forEach((item, index) => {
    total += item.harga;
    cartHTML += `
            <div class="cart-item">
                <div class="cart-item-info">
                    <h5>${item.nama}</h5>
                    <p class="cart-item-price mb-0">${formatRupiah(
                      item.harga
                    )}</p>
                </div>
                <button class="btn btn-remove" data-index="${index}">
                    <i class="bi bi-trash"></i> Batalkan
                </button>
            </div>
        `;
  });

  cartItems.innerHTML = cartHTML;
  totalPrice.textContent = formatRupiah(total);

  document.querySelectorAll(".btn-remove").forEach((btn) => {
    btn.addEventListener("click", handleRemoveFromCart);
  });
}

// bagian cek apa produk udah ada di keranjang?
function isProductInCart(productId) {
  return cart.some((item) => item.id === productId);
}

function handleAddToCart(e) {
  const btn = e.target.closest(".btn-add-cart");
  const productId = parseInt(btn.dataset.id);
  const productName = btn.dataset.nama;
  const productPrice = parseInt(btn.dataset.harga);

  if (isProductInCart(productId)) {
    Swal.fire({
      icon: "warning",
      title: "Item Sudah Ada!",
      text: "Menu yang kamu pilih sudah ada dalam keranjang!",
      confirmButtonText: "OK",
      confirmButtonColor: "#5d4037",
    });
    return;
  }

  cart.push({
    id: productId,
    nama: productName,
    harga: productPrice,
  });

  Swal.fire({
    icon: "success",
    title: "Berhasil!",
    text: `${productName} telah ditambahkan ke keranjang`,
    timer: 1500,
    showConfirmButton: false,
  });

  updateCartDisplay();
}

function handleRemoveFromCart(e) {
  const btn = e.target.closest(".btn-remove");
  const index = parseInt(btn.dataset.index);
  const productName = cart[index].nama;

  Swal.fire({
    title: "Apakah kamu yakin akan menghapus item ini?",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#d63031",
    cancelButtonColor: "#8d6e63",
    confirmButtonText: "Hapus",
    cancelButtonText: "Batal",
  }).then((result) => {
    if (result.isConfirmed) {
      cart.splice(index, 1);

      Swal.fire({
        icon: "success",
        title: "Terhapus!",
        text: `${productName} telah dihapus dari keranjang`,
        timer: 1500,
        showConfirmButton: false,
      });

      updateCartDisplay();
    }
  });
}

// buat init
document.addEventListener("DOMContentLoaded", function () {
  const filterButtons = document.querySelectorAll(".btn-group button");

  filterButtons.forEach((button, index) => {
    button.addEventListener("click", function () {
      filterButtons.forEach((btn) =>
        btn.classList.remove("active", "btn-primary")
      );
      filterButtons.forEach((btn) => btn.classList.add("btn-outline-primary"));

      this.classList.remove("btn-outline-primary");
      this.classList.add("active", "btn-primary");

      let kategori;
      if (index === 0) {
        kategori = "all";
      } else if (index === 1) {
        kategori = "Signature Bakes";
      } else if (index === 2) {
        kategori = "Signature Drinks";
      }

      filterMenu(kategori);
    });
  });

  filterButtons[0].classList.add("active", "btn-primary");
  filterButtons[0].classList.remove("btn-outline-primary");

  document.querySelectorAll(".btn-add-cart").forEach((btn) => {
    btn.addEventListener("click", handleAddToCart);
  });

  updateCartDisplay();
});

const style = document.createElement("style");
style.textContent = `
    .product-item {
        transition: opacity 0.3s ease-in-out;
    }
`;
document.head.appendChild(style);
