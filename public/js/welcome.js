   setTimeout(() => {
      document.body.classList.add("slide-down");
      setTimeout(() => {
        window.location.href = "/landingpageuser"; // ganti dengan halaman tujuanmu
      }, 1000); // tunggu transisi selesai
    }, 6000);