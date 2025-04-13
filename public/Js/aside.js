document.addEventListener('DOMContentLoaded', function() {
  // 1. Ambil elemen yang diperlukan
  const Anomali = document.getElementById("Anomali");
  const aside = document.querySelector('aside');
  
  // 2. Fungsi untuk update posisi Anomali
  function updateAnomaliPosition(buttonId) {
    const activeButton = document.getElementById(buttonId);
    
    if (activeButton && Anomali && aside) {
      const buttonRect = activeButton.getBoundingClientRect();
      const asideRect = aside.getBoundingClientRect();
      const relativeTop = buttonRect.top - asideRect.top;
      
      Anomali.style.top = relativeTop + "px";
      Anomali.style.opacity = "1"; // Pastikan indikator terlihat
    }
  }

  // 3. Set posisi awal ke Home
  updateAnomaliPosition('Home');

  // 4. Tambahkan event listener untuk setiap tombol
  const buttonIds = ["Home", "Note", "ToDo", "Team"];
  buttonIds.forEach(id => {
    const button = document.getElementById(id);
    if (button) {
      button.addEventListener('click', () => updateAnomaliPosition(id));
    }
  });
});

const home=document.getElementById("Home");
const homeSection = document.getElementById("HomeSection")
console.log(home)