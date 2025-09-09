// Toggle Sidebar
const menuToggle = document.getElementById("menuToggle");
const sidebar = document.getElementById("sidebar");
const main = document.querySelector(".main");

menuToggle.addEventListener("click", () => {
    sidebar.classList.toggle("open");
    main.classList.toggle("shift");
});

// Active Menu Highlight
const menuItems = document.querySelectorAll(".menu-item");
menuItems.forEach(item => {
    item.addEventListener("click", () => {
        menuItems.forEach(i => i.classList.remove("active"));
        item.classList.add("active");
    });
});
// Ambil elemen modal & tombol
const modal = document.getElementById("logoutModal");
const closeBtn = document.querySelector(".modal-logout-close");
const cancelBtn = document.querySelector(".btn-cancel");
const confirmBtn = document.querySelector(".btn-confirm");
const logoutLink = document.querySelector(".logout a"); // tombol logout

// Fungsi untuk membuka modal
function openLogoutModal() {
    modal.style.display = "flex";
}

// Fungsi untuk menutup modal
function closeLogoutModal() {
    modal.style.display = "none";
}

// Event tombol ❌ dan Batal
closeBtn.addEventListener("click", closeLogoutModal);
cancelBtn.addEventListener("click", closeLogoutModal);

// Event klik di luar modal → tutup modal
window.addEventListener("click", (e) => {
    if (e.target === modal) {
        closeLogoutModal();
    }
});

// Event klik tombol Logout → buka modal
logoutLink.addEventListener("click", (e) => {
    e.preventDefault();
    openLogoutModal();
});

// Event klik tombol "Ya, Logout"
confirmBtn.addEventListener("click", () => {
    window.location.href = "/login/menu_login"; // arahkan ke menu_login.blade.php
});
