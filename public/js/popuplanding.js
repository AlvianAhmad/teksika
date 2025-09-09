
  // Buka popup sesuai id
  document.querySelectorAll('.btn-secondary').forEach((btn, index) => {
    btn.addEventListener('click', function(e) {
      e.preventDefault();
      if (index === 0) document.getElementById('popup-listrik').style.display = 'flex';
      if (index === 1) document.getElementById('popup-ac').style.display = 'flex';
      if (index === 2) document.getElementById('popup-plumbing').style.display = 'flex';
    });
  });

  // Tutup popup (X button)
  document.querySelectorAll('.close').forEach(btn => {
    btn.addEventListener('click', function() {
      btn.closest('.popup').style.display = 'none';
    });
  });

  // Tutup popup jika klik luar konten
  window.addEventListener('click', function(e) {
    document.querySelectorAll('.popup').forEach(popup => {
      if (e.target === popup) popup.style.display = 'none';
    });
  });

