// @ts-nocheck
const options = {
  root: null,
  rootMargin: "0px",
  threshold: 0.9
};

let revealCallback = (entries, self) => {
  entries.forEach(entry => {
    let container = entry.target;
    let img = entry.target.querySelector("img");
    let titleContainer = entry.target.querySelector('._tedx_speaker_title')
    let avatars = document.querySelectorAll('._tedx_speaker_avatar')
    let details = document.querySelector('._tedx_speaker_detail')

    const easeInOut = "power3.out";
    const revealAnim = new TimelineLite({ ease: easeInOut });

    if (entry.isIntersecting) {
      revealAnim.set(container, {
        visibility: "visible"
      });
      revealAnim.fromTo(
        container,
        {
          clipPath: "polygon(0 0, 0 0, 0 100%, 0% 100%)",
          webkitClipPath: "polygon(0 0, 0 0, 0 100%, 0% 100%)"
        },
        {
          clipPath: "polygon(0 0, 100% 0, 100% 100%, 0 100%)",
          webkitClipPath: "polygon(0 0, 100% 0, 100% 100%, 0 100%)",
          duration: 1,
          ease: easeInOut
        }
      );
      revealAnim.from(img, 4, {
        scale: 1.4,
        ease: easeInOut,
        delay: -1
      });
      revealAnim.from(titleContainer, {
        width: 0,
        duration: 2.4,
        ease: easeInOut
      }, '-=3.6')
      revealAnim.fromTo(details, {
        opacity: 0,
        y: 16,
      }, {
        opacity: 1,
        y: 0,
        ease: easeInOut,
        duration: 1.6
      }, '-=3')
      revealAnim.fromTo(avatars, {
        x: 16,
        opacity: 0,
      }, {
        x: 0,
        opacity: 1,
        duration: 1.4,
        ease: easeInOut,
        stagger: {
          amount: .6
        }
      }, '-=')
      self.unobserve(entry.target);
    }
  });
};

let revealObserver = new IntersectionObserver(revealCallback, options);

document.querySelectorAll(".reveal").forEach(reveal => {
  revealObserver.observe(reveal);
});

const speakers = {
  anastasia: {
    name: 'Anastasia Satriyo',
    profession: 'Psikolog',
    title: 'Ungkaian Persepsi dan Stigma Wajah Asia',
    description: `
    Persepsi menjadi salah satu proses penting untuk menangkap dan memproses informasi untuk diterjemahkan dalam otak yang kemudian setiap individu berimprovisasi untuk mengelompokkan informasi-informasi tersebut berdasarkan kategorinya sebagai sebuah stereotip. Stereotip dapat dilakukan pada suatu kelompok manusia, benda, budaya, dan lainnya. Tidak jarang dalam prakteknya bahwa pengelompokkan informasi ini dapat dilakukan secara negatif dan sengaja oleh suatu kelompok budaya pada kelompok lainnya sehingga menimbulkan keresahan dan dampak multidimensi.
    <br></br>
    Pada talk kali ini, Anastasia Satriyo akan membahas bagaimana persepsi stigma Asia dari kacamata Barat dapat membentuk konsep diri orang Indonesia.
    `,
    url: 'https://ik.imagekit.io/tedxub/anastasia_cCbiXpWj_3t.jpg'
  },
  diego: {
    name: 'Diego Yanuar',
    profession: 'Pesepeda',
    title: 'Tidak Apa-Apa Untuk Tidak Memiliki Cita-Cita',
    description: `
    Mendefinisikan kesuksesan dengan hal-hal kecil, Diego merasa terhambat dalam tumbuh kembang karena menurutnya saat ini setiap orang harus memiliki tujuan hidup untuk mencapai kesuksesan. Suatu saat Diego bertemu dengan seseorang dan berkata “it’s okay to not to have goals in your life”, Dari kutipan itu Diego memaknai bahwa Ia dapat melakukan hal apa saja tanpa ada batasan.
    `,
    url: 'https://ik.imagekit.io/tedxub/diego_17X4gmRxS.jpg'
  },
  clara: {
    name: 'Clara Tunjung Paramesti',
    profession: 'Mahasiswa',
    title: 'Seni Sebagai Rumah Bukan Limbah',
    description: `
    Untuk sebagian orang karya seni diperuntukan untuk konsumsi publik, namun tidak sedikit karya seni yang dibuat untuk kepuasan pribadi.
    <br></br>
    Clara mencoba menjelaskan dari sudut pandangnya mengenai seni sebagai rumah adalah tempat untuk mencurahkan segala rasa dan karya seni yang tersimpan mampu memberikan ingatan-ingatan terhadap kejadian tertentu yang dapat memberikan pembelajaran di kemudian hari.
    `,
    url: 'https://ik.imagekit.io/tedxub/clara_lMJ9QkOIr3X.jpg'
  },
  jimi: {
    name: 'Jimi Multhazam',
    profession: 'Musisi',
    title: 'Kekuatan Komposisi dan Cerita',
    description: `Pada pertengahan dekade 2000-an, terdapat satu nama yang diasosiasikan dengan gerak laku juga syair yang flamboyan saat ia melantunkan tembang-tembangnya di panggung The Upstairs, nama tersebut adalah Jimi Multhazam. Menapak pada dekade 2010-an, Jimi melahirkan proyek barunya yang bernama Morfem. Entah melalui synthesizer ataupun distorsi, pria yang juga dikenal dengan nama Jimi ‘‘Danger’’ ini sudi menggunakan media atau teknik apa saja untuk mengekspresikan gagasannya. 
    <br></br>
    Pada talks kali ini,  Jimi Multhazam akan membicarakan bagaimana secara abstrak menggerakan orang untuk berkarya dengan cara distingtifnya masing-masing.
    `,
    url: 'https://ik.imagekit.io/tedxub/jimi_pe2cB_9Ovan.jpg'
  },
  hengki: {
    name: 'Hengki Herwanto',
    profession: 'Kurator',
    title: 'Arsip Lempengan Nada',
    description: `Rasa cintanya yang luar biasa terhadap seni musik menghantarkan suatu yayasan bernama Museum Musik Indonesia (MMI) diakui dan diresmikan oleh pemerintah pada tahun 2016. Hingga salah satu capaian mengesankan mereka, disaat UNESCO memberikan bantuan untuk proses digitalisasi koleksi. Salah satu yang terlibat merupakan sosok yang bernama Hengki Herwanto. 
    <br></br>
    Pada talks kali ini, Hengki Herwanto akan menarasikan cerita dibalik kurang lebih 26.000 artefak musik Indonesia dan mancanegara melalui cara  pengarsipan beragam produk seni musik.
    `,
    url: 'https://ik.imagekit.io/tedxub/DSC04080_hLZtl6tYTh1O.JPG'
  },
  abdul: {
    name: 'Abdul Hair',
    profession: 'Akademisi',
    title: 'Untitled',
    description: `Nasionalisme dan kecintaan suatu rakyat terhadap bangsanya juga terikat dengan bagaimana sebuah mimpi diciptakan dan dimanifestasikan oleh bangsa tersebut. Konstruksi dari nilai-nilai yang dibentuk untuk merepresentasikan wujud dari bangsa tersebut juga merupakan kewajiban bagi pemerintah dan warganya  dalam membentuk suatu negara. Seperti contoh yang paling terkenal dari Amerika Serikat di mana mereka mengkonstruksi The American Dream melalui hollywood dan media lainnya. Membentuk perwujudan atas sifat dan mimpi dari Amerika. Lalu bagaimana dengan Indonesia? Dalam sejarah modern dan media kita, mimpi seperti apakah yang dikonstruksi untuk melambangkan Indonesia?
    <br></br>
    Pada talks kali ini, Abdul Hair akan mendiskusikan sebuah konstruksi nilai-nilai wujud kebudayaan  yang terjadi secara masif dan universal.
    `,
    url: 'https://ik.imagekit.io/tedxub/abdul_9Ve4sVKfy.JPG'
  },
  mice: {
    name: 'Mice Cartoon',
    profession: 'Komikus',
    title: 'Memotret Peradaban Melalui Kritik Gelitik',
    description: `Berangkat dari memotret keadaan sehari-hari yang banyak terjadi namun tidak disadari oleh masyarakat luas Mice Cartoon membungkus keberagaman tersebut menjadi sebuah kartun. Kehidupan manusia sangat berkaitan dengan perubahan peradaban yang terjadi di sekitarnya. Realita berganti dengan realita lain yang berjalan cepat seiring naik dan turunnya suatu budaya populer pada masyarakat. Perubahan ini disadari dan diterjemahkan tiap individu dengan membentuk komunitas tertentu.
    <br></br>
    Pada talk kali ini, Mice Cartoon akan membahas bagaimana potret dari proses kreatif yang dilewatinya dalam menanggapi perubahan peradaban dunia.
    `,
    url: 'https://ik.imagekit.io/tedxub/mice_YRGNQESaK.jpg'
  },
  bondan: {
    name: 'Bondan Sekari Adi',
    profession: 'Value Investor',
    title: 'Manifestasi Budaya dengan Kuliner ',
    description: `Berawal dari film, sebuah kuliner menjadi solusi atas keresahan yang Bondan alami selama ini. Bondan menghadirkan one sliced pizza yang disajikan dengan harga ekonomis karena melihat peluang dari kacamata yang berbeda serta stigma masyarakat mengenai pizza. Reaksi dan antusiasme dari masyarakat dapat meluaskan pasar yang ada sehingga ketakutan akan ketertinggalan tren menghilang.
    <br></br>
    Pada talk kali ini, Bondan akan membahas mengenai perjalanan yang ia lalui dalam menciptakan sebuah nilai yang terinspirasi dari budaya luar namun dapat diadaptasi dengan keadaan masyarakat lokal yang kemudian diterima dan tumbuh dengan baik.    
    `,
    url: 'https://ik.imagekit.io/tedxub/bondan_98mJccjBp.JPG'
  },
}

const speakerAvatars = document.querySelectorAll('._tedx_speaker_avatar')
speakerAvatars.forEach(avatar => {
  avatar.addEventListener('click', () => {
    const speakerProfile = document.querySelector('._tedx_speaker_profile')
    speakerProfile.querySelector('._tedx_speaker_image img').src = speakers[avatar.dataset.target].url
    speakerProfile.querySelector('h1').innerHTML = speakers[avatar.dataset.target].title
    document.querySelector('._tedx_speaker_detail h1').innerHTML = speakers[avatar.dataset.target].title
    document.querySelector('._tedx_speaker_detail h2').innerHTML = `<em>${speakers[avatar.dataset.target].name}</em> | ${speakers[avatar.dataset.target].profession}`
    document.querySelector('._tedx_speaker_detail p').innerHTML = speakers[avatar.dataset.target].description
  })
})