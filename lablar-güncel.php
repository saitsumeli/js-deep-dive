<!-- COMPACT ISOLATED BENTO LAB DISCOVERY HUB -->
<section id="lb-hub-unique-scope" class="lb-scope-reset">
    <div class="lb-container">
        
        <!-- NAV REMOVED AS REQUESTED -->

<div class="lb-content-stack">
<?php
$faculties = [
  [
    'id' => 'tip',
    'title' => 'TIP FAKÜLTESİ',
    'color' => 'rose',
    'bg' => '#FFE9EA',
    'icon' => 'fa-dna',
    'labs' => [
      ['n' => 'Klinik Beceri ve Simülasyon Laboratuvarı', 'd' => 'Ders, proje, tez çalışması'],
      ['n' => 'Multidisipliner Laboratuvarı-1', 'd' => 'Ders, proje, tez çalışması'],
      ['n' => 'Multidisipliner Laboratuvarı-2', 'd' => 'Ders, proje, tez çalışması'],
      ['n' => 'Multidisipliner Laboratuvarı-3', 'd' => 'Ders, proje, tez çalışması'],
      ['n' => 'Mikrocerrahi Laboratuvarı', 'd' => 'Ders, proje, tez çalışması'],
      ['n' => 'Maket Laboratuvarı (Anatomi)', 'd' => 'Ders, proje, tez çalışması'],
      ['n' => 'Hesaplamalı Tıp Laboratuvarı', 'd' => 'Ders, proje, tez çalışması'],
      ['n' => 'Histoloji Laboratuvarı', 'd' => 'Ders, proje, tez çalışması'],
      ['n' => 'Anatomi Laboratuvarı', 'd' => 'Ders, proje, tez çalışması'],
      ['n' => 'Fizyoloji Laboratuvarı', 'd' => 'Ders, proje, tez çalışması'],
      ['n' => 'Biyofizik Laboratuvarı', 'd' => 'Ders, proje, tez çalışması'],
      ['n' => 'Patoloji Laboratuvarı', 'd' => 'Ders, proje, tez çalışması'],
      ['n' => 'Hesaplamalı İlaç Tasarımı Merkezi', 'd' => 'Ders, proje, tez çalışması'],
      ['n' => 'Farmakoloji Laboratuvarı', 'd' => 'Ders, proje, tez çalışması'],
      ['n' => 'In vitro Laboratuvarı (HİTMER)', 'd' => 'Ders, proje, tez çalışması'],
      ['n' => 'Beyin Tümörleri Araştırma Laboratuvarı', 'd' => 'Ders, proje, tez çalışması'],
      ['n' => 'Beyin Tümörleri Araştırma Laboratuvarı', 'd' => 'Ders, proje, tez çalışması'],
      ['n' => 'Beyin Tümörleri Araştırma Laboratuvarı', 'd' => 'Ders, proje, tez çalışması'],
      ['n' => 'Mikrobiyoloji Laboratuvarı', 'd' => 'Ders, proje, tez çalışması'],
      ['n' => 'Biyokimya Laboratuvarı', 'd' => 'Ders, proje, tez çalışması'],
      ['n' => 'Beyin Tümörleri Araştırma Laboratuvarı', 'd' => 'Ders, proje, tez çalışması'],
    ]
  ],
  [
    'id' => 'dis',
    'title' => 'DİŞ HEKİMLİĞİ FAKÜLTESİ',
    'color' => 'sky',
    'bg' => '#E0F2FE',
    'icon' => 'fa-tooth',
    'labs' => [
      ['n' => 'AR-GE', 'd' => 'Öğretim üyesi ve öğrencilerin bilimsel araştırma projelerinin deneysel kısımlarını gerçekleştirdiği labaratuvardır.'],
      ['n' => 'Diş Protez Teknolojileri Lab.', 'd' => 'Hastalara uygulanacak sabit ve hareketli diş protezlerinin tüm aşamalarını gerçek hasta modelleri üstünde öğrenme imkanı sunan eğitim laboratuvarıdır. Bu laboratuvarda aynı zamanda birden fazla öğrencinin rahatça çalışabileceği ölçü malzemeleri; alçı, mum, metal, döküm, akrilik ve seramik malzemelerle uygulama ve gözlem yapabileceği, en son teknolojiyle donatılmış dental laboratuvar cihazları bulunmaktadır'],
      ['n' => 'Diş Hekimliği Simulasyon Lab. B5', 'd' => 'Önceden belirlenmiş kurgusal tedavi planlarına göre öğrenciler, yapay hastalar üzerinde gerekli tedavi işlemini gerçekleştirerek mesleki bilgi ve becerilerini geliştirme imkanı bulabilmektedir.'],
      ['n' => 'Diş Hekimliği Mesleki ve Beceri Lab.', 'd' => 'Öğrencilerin klinik staj uygulamaları öncesinde pre-klinik derslerde aldıkları teorik eğitimi pratiğe döktükleri, el becerilerini geliştirdikleri ve kendilerini geliştirdikleri alanıdır. Öğrenciler, laboratuvarda manken başında tedavi ve protez işlemlerini uygulama imkanı bulmaktadır'],
      ['n' => 'Dijital Diş Hekimliği Lab.', 'd' => 'Gelişen dijital diş hekimliği teknolojilerinin uygulandığı laboratuvardır. Öğrenciler, CAD/CAM, 3D yazıcılar, dijital tarayıcılar ve dijital tasarım yazılımları gibi ileri teknolojileri kullanarak diş hekimliği uygulamalarını öğrenmektedir'],
      ['n' => 'Sanal Gerçeklik ve Haptik Simulatör Lab.', 'd' => 'Sanal hasta simülasyonu, yapılan bu laboratuvar sayesinde, öğrenci ve öğretim üyeleri sanal ortamda anında geri bildirim alarak çalışma ve değerlendirme yapabilmektedir. Öğrenciler, diş hekimliği uygulamalarını sanal ortamda deneyimleyerek el becerilerini geliştirmektedir'],
      ['n' => 'Seramik Lab.(Dijital Dental Teknolojileri Lab. altında)', 'd' => 'Tam seramik, full porselen, full seramik, gibi sabit protezlerin üretiminde kullanılan seramik işleme ve pişirme cihazları bulunmaktadır'],
      ['n' => 'CAD Lab. (Dijital Dental Teknolojileri Lab. altında)', 'd' => 'CAD genel olarak ürün ve konstrüksyon için bilgisayar destekli tasarım imkanı sağlayan sistemdir. Diş hekimliği alanında ise CAD, yapılan diş ölçüsünü dijital ortama aktararak, restorasyonun tasarlanmasını sağlar'],
      ['n' => '3D Printer Lab. (Dijital Dental Teknolojileri Lab. altında)', 'd' => 'Lab. gönderilen tasarımı zaman kazanarak üretime geçiren sistemdir. Döküm sırasında karşılaşılabilecek deformasyonu azaltır. Tam seramik kronlar, köprüler, inley-onley, laminalar, implant üstü restorasyonlar gibi diş protezleri üretmek için kullanılır'],
      ['n' => 'CAM Lab. (Dijital Dental Teknolojileri Lab. altında)', 'd' => 'Tasarımı tamamlanmış olan bir parça, yazılım ile yönlendirilen makineler yardımıyla malzeme bloklarının işlenmesiyle nihai ürün haline gelir. Örnek: Seramik, zirkonyum, akrilik gibi bloklardan restorasyon üretimi'],
      ['n' => 'Akrilik Lab. (Dijital Dental Teknolojileri Lab. altında)', 'd' => 'Hasta için planlanan hareketli protez dediğimiz kolaylıkla kullanabilen Total potezlerin ve parsiyel protezlerin üretilmesi sağlanmaktadır,hastandan alınan ölçülerin model üretimi yapılan alandır.'],
    ]
  ],
  [
    'id' => 'ecz',
    'title' => 'ECZACILIK FAKÜLTESİ',
    'color' => 'slate',
    'bg' => '#F1F5F9',
    'icon' => 'fa-pills',
    'labs' => [
      ['n' => 'Farmasötik Teknoloji Laboratuvarı', 'd' => 'Müfredatta bulunan laboratuvar derslerinin gerçekleştirildiği ve araştırma yapılan laboratuvar'],
      ['n' => 'Biyokimya ve Analitik Kimya Laboratuvarı', 'd' => 'Müfredatta bulunan laboratuvar derslerinin gerçekleştirildiği ve araştırma yapılan laboratuvar'],
      ['n' => 'Hücre Kültürü Laboratuvarı', 'd' => 'Araştırma Laboratuvarı'],
      ['n' => 'Farmakognozi ve Farmasötik Botanik Laboratuvarı', 'd' => 'Müfredatta bulunan laboratuvar derslerinin gerçekleştirildiği ve araştırma yapılan laboratuvar'],
      ['n' => 'Farmasötik Kimya ve Farmasötik Teknoloji Laboratuvarı', 'd' => 'Müfredatta bulunan laboratuvar derslerinin gerçekleştirildiği ve araştırma yapılan laboratuvar'],
      ['n' => 'Moleküler Modelleme Laboratuvarı ', 'd' => 'Müfredatta bulunan laboratuvar derslerinin gerçekleştirilmesi ve fakülte bünyesindeki araştırmacıların araştırmaları yapmaktadır'],
    ]
  ],
  [
    'id' => 'egt',
    'title' => 'EĞİTİM BİLİMLERİ FAKÜLTESİ',
    'color' => 'indigo',
    'bg' => '#EEF2FF',
    'icon' => 'fa-graduation-cap',
    'labs' => [
      ['n' => 'Mühendislik Laboratuvarı', 'd' => 'Ders, proje, tez çalışması'],
      ['n' => 'Mühendislik Laboratuvarı', 'd' => 'Ders, proje, tez çalışması'],
    ]
  ],
  [
    'id' => 'kon',
    'title' => 'KONSERVATUVAR',
    'color' => 'dark',
    'bg' => '#F8FAFC',
    'icon' => 'fa-music',
    'labs' => [
      ['n' => 'Mac Laboratuvarı', 'd' => 'Ders, proje, tez çalışması'],
    ]
  ],
  [
    'id' => 'mim',
    'title' => 'MİMARLIK VE TASARIM FAKÜLTESİ',
    'color' => 'amber',
    'bg' => '#FFFBEB',
    'icon' => 'fa-pen-ruler',
    'labs' => [
      ['n' => 'Bilgisayar Laboratuvarı', 'd' => 'Proje geliştirme, öğrenci projelerini sanal ortamda izleme ve geliştirme'],
      ['n' => 'Bilgisayar Laboratuvarları', 'd' => 'Bilgisayar destekli proje geliştirme'],
      ['n' => 'Bilgisayar Laboratuvarı', 'd' => 'Bilgisayar destekli proje geliştirme'],
      ['n' => 'Bilgisayar Laboratuvarı', 'd' => 'Bilgisayar destekli proje geliştirme'],
      ['n' => 'Bilgisayar Laboratuvarı', 'd' => 'Bilgisayar destekli proje geliştirme'],
    ]
  ],
  [
    'id' => 'muh',
    'title' => 'MÜHENDİSLİK VE DOĞA BİLİMLERİ FAKÜLTESİ',
    'color' => 'blue',
    'bg' => '#EFF6FF',
    'icon' => 'fa-microchip',
    'labs' => [
      ['n' => 'Kimya Laboratuvarı', 'd' => 'Öğrenci deneyleri'],
      ['n' => 'Fotonik ve Nano Optik Araştırma Laboratuvarı', 'd' => 'Akademisyen araştırmaları'],
      ['n' => 'Mühendislik Laboratuvarı', 'd' => 'Ders, proje, tez çalışması'],
      ['n' => 'Mühendislik Laboratuvarı', 'd' => 'Ders, proje, tez çalışması'],
      ['n' => 'Mühendislik Laboratuvarı', 'd' => 'Ders, proje, tez çalışması'],
      ['n' => 'Mühendislik Laboratuvarı', 'd' => 'Ders, proje, tez çalışması'],
      ['n' => 'Mühendislik Laboratuvarı', 'd' => 'Ders, proje, tez çalışması'],
      ['n' => 'Mühendislik Laboratuvarı', 'd' => 'Ders, proje, tez çalışması'],
      ['n' => 'Mühendislik Laboratuvarı', 'd' => 'Ders, proje, tez çalışması'],
      ['n' => 'Mühendislik Laboratuvarı', 'd' => 'Ders, proje, tez çalışması'],
      ['n' => 'Mühendislik Laboratuvarı', 'd' => 'Ders, proje, tez çalışması'],
    ]
  ],
  [
    'id' => 'sag',
    'title' => 'SAĞLIK BİLİMLERİ FAKÜLTESİ',
    'color' => 'cyan',
    'bg' => '#ECFEFF',
    'icon' => 'fa-heart-pulse',
    'labs' => [
      ['n' => 'Biyomekanik ve Kayropraktik 2', 'd' => 'Lisans ve lisansüstü öğrencilerinin eğitim alması ve araştırmalarını yürütmesi'],
      ['n' => 'Antropometri', 'd' => 'Bireylerin vücut komposizyonunun belirlenmesi ve beslenme durumları ile ilişkili antropometrik ölçümlerin yapılması'],
      ['n' => 'Fizyoterapi ve Rehabilitasyon 2 ', 'd' => 'Fizyoterapi ve Rehabilitasyon bölümü lisans ve yüksek lisans öğrencilerinin eğitim alması ve araştırma yürütmesi'],
      ['n' => 'Biyomekanik ve Kayropraktik 1', 'd' => 'Uygulamalı derslerin işlenmesi ve tez/bitirme projesi araştırmalarının yürütülmesi'],
      ['n' => 'Sanal Gerçeklik', 'd' => 'Bilimsel çalışmaların yürütülmesi, lisans ve lisansüstü öğrencilerinin tez çalışmalarında kullanılması, lisans ve lisansüstü öğrencilerinin çalışma grubu olarak yaptığı araştırmaların yürütülmesi, test/ölçümler yapılması ve eğitim verilmesi'],
    ]
  ],
  [
    'id' => 'shmyo',
    'title' => 'SAĞLIK HİZMETLERİ MESLEK YÜKSEKOKULU',
    'color' => 'sky',
    'bg' => '#E0F2FE',
    'icon' => 'fa-briefcase-medical',
    'labs' => [
      ['n' => 'Odyoloji', 'd' => 'Odyoloji eğitimi için gerekli olan duyu testleri, basınç testleri ve işitme ve denge testlerinin yapılması ve odyoloji kabini ve ilgili cihazların öğretilmesi amacıyla kullanılmaktadır.'],
      ['n' => 'Hemşirelik', 'd' => 'Öğrencilerinin eğitimleri sırasında gereken bilişsel, duyuşsal ve psikomotor becerilerin ve yetkinliklerin kazandırılması'],
      ['n' => 'Optisyenlik', 'd' => 'Optisyenlik öğrenimi gören öğrencilerin el becerileri makine ve el aletlerini kullanma kullanım alanlarını uygulama maksatlı kurulmuştur laboratuvarda manuel olarak uygulanma yapılmaktadır.'],
      ['n' => 'Çocuk Gelişimi ve Psikodrama', 'd' => 'Yaratıcı drama, oto drama, materyal tasarımı, sanat ve yaratıcılık, duyu eğitimi, çocuk yogası, fen ve doğa etkinlikleri,  danışmanlık uygulamaları, müzik etkinlikleri ve vb. uygulamalı derslerde, spor-çocuk dersi uygulamaları,  fizyoterapi bölümü için uygulamalar. '],
      ['n' => 'Anatomi', 'd' => 'İnsan vücudu sistemlerinin anatomik (hareket, dolaşım, solunum, sinir, endokrin, ürogenital ve sindirim sistemleri) özelliklerine ilişkin pratik bilgilere sahip olunması'],
      ['n' => 'Fizyoterapi ve Rehabilitasyon 1', 'd' => 'Fizyoterapi ön lisans ve Fizyoterapi ve Rehabilitasyon bölümü lisans ve yüksek lisans öğrencilerinin eğitim alması ve araştırma yürütmesi'],
      ['n' => 'Multidisipliner', 'd' => 'Mikrobiyoloji, Biyokimya, Beslenme Kimyası derslerinin pratik laboratuvar uygulamalarının yapılması'],
    ]
  ],
  [
    'id' => 'iisbf',
    'title' => 'İKTİSADİ İDARİ VE SOSYAL BİLİMLER FAKÜLTESİ',
    'color' => 'emerald',
    'bg' => '#ECFDF5',
    'icon' => 'fa-chart-pie',
    'labs' => [
      ['n' => 'Medikal Laboratuvarı', 'd' => 'Ders, proje, tez çalışması'],
      ['n' => 'Medikal Laboratuvarı', 'd' => 'Ders, proje, tez çalışması'],
      ['n' => 'Bilgisayar Laboratuvarı', 'd' => 'Ders, proje, tez çalışması'],
      ['n' => 'Medikal Laboratuvarı', 'd' => 'Ders, proje, tez çalışması'],
      ['n' => 'Medikal Laboratuvarı', 'd' => 'Ders, proje, tez çalışması'],
      ['n' => 'Mühendislik Laboratuvarı', 'd' => 'Ders, proje, tez çalışması'],
    ]
  ],
];

foreach ($faculties as $f):
?>
  <div id="cat-<?php echo $f['id']; ?>" class="lb-group-wrapper">
    <div class="lb-group-header">
      <h3 class="lb-group-title"><?php echo $f['title']; ?></h3>
      <div class="lb-title-line lb-bg-<?php echo $f['color']; ?>"></div>
    </div>

    <div class="lb-bento-grid">
      <?php foreach ($f['labs'] as $l): ?>
        <div
          class="lb-bento-box"
          style="background-color: <?php echo $f['bg']; ?> !important;"
          onclick="openIsolatedLab(
            '<?php echo addslashes($l['n']); ?>',
            '<?php echo addslashes($l['d']); ?>',
            '<?php echo $f['icon']; ?>',
            '<?php echo $f['color']; ?>',
            '<?php echo $f['bg']; ?>'
          )"
        >
          <i class="fa-solid <?php echo $f['icon']; ?> lb-bento-icon lb-text-<?php echo $f['color']; ?>"></i>
          <span class="lb-bento-label"><?php echo $l['n']; ?></span>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
<?php endforeach; ?>

</div>

    </div>

    <!-- ISOLATED MODAL -->
    <div id="lb-modal-isolated" class="lb-modal-hidden">
        <div class="lb-modal-overlay" onclick="closeIsolatedLab()"></div>
        <div class="lb-modal-container">
            <button class="lb-modal-close" onclick="closeIsolatedLab()">
                <i class="fa-solid fa-xmark"></i>
            </button>
            <div class="lb-modal-inner">
                <div id="lb-modal-icon-wrap" class="lb-modal-icon-box">
                    <i id="lb-modal-i" class="fa-solid"></i>
                </div>
                <h2 id="lb-modal-t" class="lb-modal-title"></h2>
                <div class="lb-modal-divider"></div>
                <p id="lb-modal-d" class="lb-modal-desc"></p>
                <div class="lb-modal-footer">
                    <img src="https://cdn.bau.edu.tr/public/bau-logo-black.svg" alt="BAU">
                </div>
            </div>
        </div>
    </div>

    <style>
        /* --- EXTREME SPECIFICITY RESET & FORCE --- */
        #lb-hub-unique-scope {
            all: initial !important;
            display: block !important;
            font-family: 'Open Sans', 'Roboto', sans-serif !important;
            background-color: #fafafa !important;
            padding: 4rem 0 !important;
            position: relative !important;
            z-index: 10 !important;
            box-sizing: border-box !important;
        }

        #lb-hub-unique-scope *, #lb-hub-unique-scope *:before, #lb-hub-unique-scope *:after {
            box-sizing: border-box !important;
            margin: 0 !important;
            padding: 0 !important;
            border: none !important;
            outline: none !important;
        }

        #lb-hub-unique-scope .lb-container {
            width: 100% !important;
            max-width: 1200px !important;
            margin-left: auto !important;
            margin-right: auto !important;
            padding-left: 1rem !important;
            padding-right: 1rem !important;
        }

        /* --- GROUPS --- */
        #lb-hub-unique-scope .lb-group-wrapper {
            margin-bottom: 4rem !important;
            scroll-margin-top: 100px !important;
        }

        #lb-hub-unique-scope .lb-group-header { margin-bottom: 1.5rem !important; }

        #lb-hub-unique-scope .lb-group-title {
            font-size: 20px !important;
            font-weight: 900 !important;
            color: #252f40 !important;
            letter-spacing: -0.5px !important;
            line-height: 1.2 !important;
        }

        #lb-hub-unique-scope .lb-title-line {
            width: 30px !important;
            height: 4px !important;
            border-radius: 10px !important;
            margin-top: 8px !important;
        }

        /* --- MINI BENTO GRID --- */
        #lb-hub-unique-scope .lb-bento-grid {
            display: grid !important;
            grid-template-columns: repeat(2, 1fr) !important;
            gap: 0.75rem !important;
        }

        @media (min-width: 640px) { #lb-hub-unique-scope .lb-bento-grid { grid-template-columns: repeat(4, 1fr) !important; } }
        @media (min-width: 1024px) { #lb-hub-unique-scope .lb-bento-grid { grid-template-columns: repeat(6, 1fr) !important; } }

        #lb-hub-unique-scope .lb-bento-box {
            aspect-ratio: 1 / 1 !important;
            border-radius: 1.5rem !important;
            display: flex !important;
            flex-direction: column !important;
            align-items: center !important;
            justify-content: center !important;
            padding: 1rem !important;
            text-align: center !important;
            cursor: pointer !important;
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1) !important;
            border: 1px solid rgba(255,255,255,0.8) !important;
            box-shadow: 0 4px 10px rgba(0,0,0,0.02) !important;
        }

        #lb-hub-unique-scope .lb-bento-box:hover {
            transform: translateY(-5px) !important;
            box-shadow: 0 15px 30px rgba(0,0,0,0.06) !important;
            background-color: #ffffff !important;
        }

        #lb-hub-unique-scope .lb-bento-icon {
            font-size: 22px !important;
            margin-bottom: 0.5rem !important;
            opacity: 0.4 !important;
            transition: all 0.4s ease !important;
        }

        #lb-hub-unique-scope .lb-bento-box:hover .lb-bento-icon { opacity: 1 !important; transform: scale(1.1) !important; }

        #lb-hub-unique-scope .lb-bento-label {
            font-size: 9.5px !important;
            font-weight: 800 !important;
            color: #252f40 !important;
            text-transform: uppercase !important;
            letter-spacing: -0.2px !important;
            line-height: 1.2 !important;
            padding: 0 2px !important;
        }

        /* --- DYNAMIC COLORS --- */
        #lb-hub-unique-scope .lb-text-rose { color: #f43f5e !important; }
        #lb-hub-unique-scope .lb-text-sky { color: #0ea5e9 !important; }
        #lb-hub-unique-scope .lb-text-indigo { color: #6366f1 !important; }
        #lb-hub-unique-scope .lb-text-emerald { color: #10b981 !important; }
        #lb-hub-unique-scope .lb-text-amber { color: #f59e0b !important; }
        #lb-hub-unique-scope .lb-text-blue { color: #3b82f6 !important; }
        #lb-hub-unique-scope .lb-text-cyan { color: #06b6d4 !important; }
        #lb-hub-unique-scope .lb-text-slate { color: #475569 !important; }
        #lb-hub-unique-scope .lb-text-dark { color: #1e293b !important; }

        #lb-hub-unique-scope .lb-bg-rose { background: #f43f5e !important; }
        #lb-hub-unique-scope .lb-bg-sky { background: #0ea5e9 !important; }
        #lb-hub-unique-scope .lb-bg-indigo { background: #6366f1 !important; }
        #lb-hub-unique-scope .lb-bg-emerald { background: #10b981 !important; }
        #lb-hub-unique-scope .lb-bg-amber { background: #f59e0b !important; }
        #lb-hub-unique-scope .lb-bg-blue { background: #3b82f6 !important; }
        #lb-hub-unique-scope .lb-bg-cyan { background: #06b6d4 !important; }
        #lb-hub-unique-scope .lb-bg-slate { background: #475569 !important; }
        #lb-hub-unique-scope .lb-bg-dark { background: #1e293b !important; }

        /* --- MODAL --- */
        #lb-modal-isolated.lb-modal-hidden { display: none !important; }

        #lb-modal-isolated {
            position: fixed !important;
            inset: 0 !important;
            z-index: 10000 !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            padding: 1rem !important;
        }

        #lb-modal-isolated .lb-modal-overlay {
            position: absolute !important;
            inset: 0 !important;
            background: rgba(0,0,0,0.3) !important;
            backdrop-filter: blur(20px) !important;
            -webkit-backdrop-filter: blur(20px) !important;
        }

        #lb-modal-isolated .lb-modal-container {
            position: relative !important;
            width: 100% !important;
            max-width: 500px !important;
            background: #ffffff !important;
            border-radius: 3rem !important;
            box-shadow: 0 40px 100px rgba(0,0,0,0.2) !important;
            overflow: hidden !important;
            animation: lbPopIn 0.5s cubic-bezier(0.165, 0.84, 0.44, 1) forwards !important;
        }

        @keyframes lbPopIn { from { opacity: 0; transform: scale(0.9) translateY(20px); } to { opacity: 1; transform: scale(1) translateY(0); } }

        #lb-modal-isolated .lb-modal-close {
            position: absolute !important;
            top: 1.5rem !important;
            right: 1.5rem !important;
            width: 2.5rem !important;
            height: 2.5rem !important;
            border-radius: 50% !important;
            background: #f8fafc !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            cursor: pointer !important;
            color: #252f40 !important;
            font-size: 1.15rem !important;
            z-index: 10 !important;
            transition: all 0.3s ease !important;
            border: 1px solid #edf2f7 !important;
        }

        #lb-modal-isolated .lb-modal-close:hover { background: #fff !important; transform: rotate(90deg) !important; }

        #lb-modal-isolated .lb-modal-inner { padding: 3.5rem 2.5rem !important; display: flex !important; flex-direction: column !important; align-items: center !important; text-align: center !important; }

        #lb-modal-isolated .lb-modal-icon-box {
            width: 70px !important;
            height: 70px !important;
            border-radius: 2rem !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            font-size: 30px !important;
            margin-bottom: 2rem !important;
            box-shadow: 0 10px 20px rgba(0,0,0,0.05) !important;
        }

        #lb-modal-isolated .lb-modal-title {
            font-size: 30px !important;
            font-weight: 900 !important;
            color: #252f40 !important;
            letter-spacing: -1px !important;
            line-height: 1 !important;
            margin-bottom: 1rem !important;
        }

        #lb-modal-isolated .lb-modal-divider { width: 40px !important; height: 6px !important; background: #f1f5f9 !important; border-radius: 20px !important; margin-bottom: 1.5rem !important; }

        #lb-modal-isolated .lb-modal-desc {
            font-size: 15px !important;
            font-weight: 500 !important;
            color: #64748b !important;
            line-height: 1.6 !important;
        }

        #lb-modal-isolated .lb-modal-footer { margin-top: 2.5rem !important; opacity: 0.1 !important; }
        #lb-modal-isolated .lb-modal-footer img { height: 22px !important; }

        @media (max-width: 767.98px) {
            #lb-hub-unique-scope .lb-group-wrapper { margin-bottom: 3rem !important; }
            #lb-hub-unique-scope .lb-group-title { font-size: 18px !important; }
            #lb-modal-isolated .lb-modal-container { border-radius: 2rem !important; }
            #lb-modal-isolated .lb-modal-inner { padding: 3rem 1.5rem !important; }
            #lb-modal-isolated .lb-modal-title { font-size: 24px !important; }
        }
    </style>

    <script>
        function openIsolatedLab(title, desc, icon, color, bg) {
            const modal = document.getElementById('lb-modal-isolated');
            const iconWrap = document.getElementById('lb-modal-icon-wrap');
            const i = document.getElementById('lb-modal-i');
            
            document.getElementById('lb-modal-t').innerText = title;
            document.getElementById('lb-modal-d').innerText = desc;
            
            i.className = 'fa-solid ' + icon;
            
            const colorMap = {
                'rose': '#f43f5e',
                'sky': '#0ea5e9',
                'indigo': '#6366f1',
                'emerald': '#10b981',
                'amber': '#f59e0b',
                'blue': '#3b82f6',
                'cyan': '#06b6d4',
                'slate': '#475569',
                'dark': '#1e293b'
            };
            
            i.style.color = colorMap[color] || '#252f40';
            iconWrap.style.backgroundColor = bg;
            
            modal.classList.remove('lb-modal-hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeIsolatedLab() {
            document.getElementById('lb-modal-isolated').classList.add('lb-modal-hidden');
            document.body.style.overflow = 'auto';
        }
    </script>
</section>
<!-- COMPACT ISOLATED BENTO LAB DISCOVERY HUB END -->