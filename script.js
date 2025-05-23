
    // const texts = [
    //   "TRANSPARAN | AKUNTABEL | BERTANGGUNG JAWAB | ADIL | KREDIBEL",
    //   'VISI: "Penghasil Ilmuwan keolahragaan yang memiliki spirit friendship, solidarity dan fair play."',
    //   "MISI: Melaksanakan proses pendidikan Program Doktor Ilmu Keolahragaan yang berkualitas dan unggul. | Melaksanakan penelitian yang dapat menunjang perkembangan keolahragaan nasional dan global. | Melaksanakan layanan keolahragaan yang sesuai dengan kebutuhan masyarakat."
    // ];

    // let current = 0;
    // const marquee = document.getElementById('marquee-text');

    // function updateMarquee() {
    //   marquee.innerHTML = texts[current];
    //   current = (current + 1) % texts.length;
    // }

    // // Initial call
    // updateMarquee();

    // // Change text every 15 seconds
    // setInterval(updateMarquee, 15000);
const nbsp = "\u00A0\u00A0\u00A0\u00A0\u00A0\u00A0\u00A0\u00A0";
const messages = [
      `TRANSPARAN${nbsp}|${nbsp}AKUNTABEL${nbsp}|${nbsp}BERTANGGUNG JAWAB${nbsp}|${nbsp}ADIL${nbsp}|${nbsp}KREDIBEL`,
      'VISI: "Penghasil Ilmuwan keolahragaan yang memiliki spirit friendship, solidarity dan fair play."',
      "MISI: Melaksanakan proses pendidikan Program Doktor Ilmu Keolahragaan yang berkualitas dan unggul. | Melaksanakan penelitian yang dapat menunjang perkembangan keolahragaan nasional dan global. | Melaksanakan layanan keolahragaan yang sesuai dengan kebutuhan masyarakat."
    ];

    const marquee = document.getElementById('marquee');
    let currentIndex = 0;
    let x = 0;
    const speed = 1; // pixels per frame

    function showNextMessage() {
      marquee.textContent = messages[currentIndex];
      currentIndex = (currentIndex + 1) % messages.length;

      // Reset posisi ke kanan
      requestAnimationFrame(() => {
        // Tunggu 1 frame agar offsetWidth ter-update
        x = window.innerWidth;
        marquee.style.transform = `translateX(${x}px)`;
        animate(); // Mulai animasi
      });
    }

    function animate() {
      x -= 3;
      marquee.style.transform = `translateX(${x}px)`;

      if (x + marquee.offsetWidth <= 0) {
        setTimeout(showNextMessage, 500); // jeda sedikit sebelum ganti teks
        return;
      }

      requestAnimationFrame(animate);
    }

    // Start on load
    showNextMessage();