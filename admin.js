const seedData = {
  kerajinan: [
    { id: 1, nama: 'Kain Songket Lepus', kategori: 'Tekstil', pengrajin: 'Ibu Fatimah', daerah: 'Palembang', harga: 'Rp 1.250.000', stok: '18', status: 'Terbit', gambar: 'asset/kainsongket.webp' },
    { id: 2, nama: 'Topeng Barong', kategori: 'Kayu', pengrajin: 'I Nyoman Sudiarta', daerah: 'Bali', harga: 'Rp 750.000', stok: '9', status: 'Terbit', gambar: 'asset/topengbarong.webp' },
    { id: 3, nama: 'Set Piring Pleced', kategori: 'Gerabah', pengrajin: 'Ibu Siti', daerah: 'Lombok', harga: 'Rp 320.000', stok: '24', status: 'Terbit', gambar: 'asset/piring.webp' }
  ],
  pengrajin: [
    { id: 1, nama: 'Bu Hariyani Winotosastro', keahlian: 'Batik Tulis', daerah: 'Yogyakarta', pengalaman: '45 tahun', kontak: '0812-1000-2025', status: 'Terverifikasi', foto: 'asset/hariyani1.webp' },
    { id: 2, nama: 'Pak Bambang Nuryanto', keahlian: 'Logam Tradisional', daerah: 'Grobogan', pengalaman: '35 tahun', kontak: '0813-4550-8891', status: 'Terverifikasi', foto: 'asset/bambang.webp' },
    { id: 3, nama: 'I Made Sukrisna', keahlian: 'Ukir Kayu', daerah: 'Bali', pengalaman: '28 tahun', kontak: '0821-7744-9012', status: 'Terverifikasi', foto: 'asset/narto.webp' }
  ],
  katalog: [
    { id: 1, judul: 'Kain Songket Lepus', kategori: 'Tekstil', penulis: 'Admin KaryaNusa', tanggal: '2026-05-24', ringkasan: 'Songket Palembang dengan motif benang emas yang menutupi hampir seluruh kain.', penjelasan: 'Kain Songket Lepus adalah warisan tekstil Palembang yang dikenal karena kilau benang emasnya.', gambar: 'asset/kainsongket.webp', halaman: 'katalog1.php', status: 'Terbit' },
    { id: 2, judul: 'Topeng Barong', kategori: 'Kayu', penulis: 'Admin KaryaNusa', tanggal: '2026-05-24', ringkasan: 'Topeng sakral Bali yang melambangkan perlindungan dan kebaikan.', penjelasan: 'Topeng Barong dibuat dari kayu pilihan dan menjadi bagian penting dalam seni pertunjukan serta upacara adat Bali.', gambar: 'asset/topengbarong.webp', halaman: 'katalog2.php', status: 'Terbit' },
    { id: 3, judul: 'Set Piring Plered', kategori: 'Keramik', penulis: 'Admin KaryaNusa', tanggal: '2026-05-24', ringkasan: 'Keramik Plered dari Purwakarta dengan karakter tanah liat lokal.', penjelasan: 'Set Piring Plered berasal dari sentra keramik Purwakarta dan memiliki nilai fungsi serta dekorasi.', gambar: 'asset/piring.webp', halaman: 'katalog3.php', status: 'Terbit' },
    { id: 4, judul: 'Tekstil Tradisional', kategori: 'Tekstil', penulis: 'Admin KaryaNusa', tanggal: '2026-05-24', ringkasan: 'Ragam batik, tenun, dan songket dari berbagai daerah Indonesia.', penjelasan: 'Tekstil tradisional menyimpan identitas daerah melalui motif, warna, dan teknik pembuatannya.', gambar: 'asset/tekstil.webp', halaman: 'katalog4.php', status: 'Terbit' },
    { id: 5, judul: 'Kerajinan Kayu', kategori: 'Kayu', penulis: 'Admin KaryaNusa', tanggal: '2026-05-24', ringkasan: 'Ukiran, pahatan, dan produk kayu bernilai seni dari Nusantara.', penjelasan: 'Kerajinan kayu dibuat melalui pemilihan bahan, pemahatan, penghalusan, dan finishing.', gambar: 'asset/kayu.webp', halaman: 'katalog5.php', status: 'Terbit' },
    { id: 6, judul: 'Keramik dan Gerabah', kategori: 'Gerabah', penulis: 'Admin KaryaNusa', tanggal: '2026-05-24', ringkasan: 'Produk tanah liat yang dibentuk, dikeringkan, dan dibakar.', penjelasan: 'Keramik dan gerabah memiliki fungsi sebagai wadah, alat saji, hiasan, dan media ekspresi budaya.', gambar: 'asset/gerabah.webp', halaman: 'katalog6.php', status: 'Terbit' },
    { id: 7, judul: 'Perhiasan Tradisional', kategori: 'Perhiasan', penulis: 'Admin KaryaNusa', tanggal: '2026-05-24', ringkasan: 'Aksesori adat yang mencerminkan status, identitas, dan simbol budaya.', penjelasan: 'Perhiasan tradisional hadir dalam bentuk gelang, kalung, hiasan kepala, dan aksesori upacara.', gambar: 'asset/perhiasan.webp', halaman: 'katalog7.php', status: 'Terbit' },
    { id: 8, judul: 'Anyaman Nusantara', kategori: 'Anyaman', penulis: 'Admin KaryaNusa', tanggal: '2026-05-24', ringkasan: 'Anyaman bambu, rotan, pandan, dan serat alam yang fungsional.', penjelasan: 'Anyaman dibuat dengan teknik menyilangkan bahan lentur menjadi bentuk kuat dan bermanfaat.', gambar: 'asset/anyaman.webp', halaman: 'katalog.php', status: 'Terbit' },
    { id: 9, judul: 'Seni Logam', kategori: 'Logam', penulis: 'Admin KaryaNusa', tanggal: '2026-05-24', ringkasan: 'Karya kriya logam dengan teknik ukir, tempa, cor, dan patri.', penjelasan: 'Seni logam menghasilkan benda pakai dan hiasan dari besi, baja, tembaga, perak, atau kuningan.', gambar: 'asset/logam.webp', halaman: 'katalog9.php', status: 'Terbit' }
  ],
  ulasan: [
    { id: 1, nama: 'Chika', foto: '', gambar_produk: '', produk: 'Karpet Motif Nusantara', halaman: 'Beranda', rating: '5', komentar: 'Kualitas bagus dan motifnya terlihat premium.', status: 'Disetujui' },
    { id: 2, nama: 'Michael Robinson', foto: '', gambar_produk: '', produk: 'Celurit Baja', halaman: 'Beranda', rating: '4', komentar: 'Detail tradisionalnya kuat dan rapi.', status: 'Menunggu' },
    { id: 3, nama: 'Sarah Chen', foto: 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100&q=80', gambar_produk: '', produk: 'Batik Tulis Yogyakarta', halaman: 'Pengrajin', rating: '5', komentar: 'Pengrajin sangat sabar menjelaskan filosofi di balik setiap motif batik. Pengalaman yang sangat berkesan.', status: 'Disetujui' },
    { id: 4, nama: 'Rina Wijaya', foto: 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&q=80&w=80&h=80', gambar_produk: '', produk: 'Komunitas KaryaNusa', halaman: 'Kontak', rating: '5', komentar: 'Informasi mengenai kerajinan Nusantara dikemas modern dan menarik bagi anak muda.', status: 'Disetujui' }
  ],
  event: [
    { id: 1, nama: 'Belajar Batik Tulis Yogyakarta', jenis: 'Workshop', lokasi: 'Yogyakarta', tanggal: '2026-06-21', biaya: 'Rp 350.000', status: 'Dibuka' },
    { id: 2, nama: 'Festival Kerajinan Bali', jenis: 'Festival', lokasi: 'Ubud, Bali', tanggal: '2026-07-25', biaya: 'Gratis', status: 'Dibuka' }
  ],
  pesan: []
};

let data = seedData;
let activeSection = 'overview';

const sectionTitles = {
  overview: 'Kelola Katalog Kerajinan Nusantara',
  kerajinan: 'Manajemen Data Kerajinan',
  pengrajin: 'Manajemen Data Pengrajin',
  katalog: 'Manajemen Katalog Budaya',
  ulasan: 'Moderasi Ulasan Pengunjung',
  event: 'Manajemen Event Budaya',
  pesan: 'Pesan Kontak Pengunjung'
};

function normalizeData(source) {
  return Object.keys(seedData).reduce((result, key) => {
    result[key] = Array.isArray(source?.[key]) ? source[key] : seedData[key];
    return result;
  }, {});
}

function safe(text) {
  return String(text ?? '').replace(/[&<>"']/g, char => ({
    '&': '&amp;',
    '<': '&lt;',
    '>': '&gt;',
    '"': '&quot;',
    "'": '&#039;'
  }[char]));
}

async function apiRequest(payload = null) {
  const options = payload
    ? {
        method: 'POST',
        credentials: 'same-origin',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(payload)
      }
    : { credentials: 'same-origin' };

  const response = await fetch('api/data.php', options);
  if (response.status === 401) {
    window.location.href = 'login.php';
    return null;
  }

  const result = await response.json();
  if (!result.ok) throw new Error(result.message || 'Gagal memproses data');
  return result.data;
}

async function loadData() {
  try {
    data = normalizeData(await apiRequest() || seedData);
  } catch (error) {
    data = normalizeData(seedData);
    showToast(error.message || 'Database belum siap');
  }
  renderAll();
}

function showToast(message) {
  const toast = document.getElementById('toast');
  toast.textContent = message;
  toast.classList.add('show');
  setTimeout(() => toast.classList.remove('show'), 1800);
}

function setSection(section) {
  activeSection = section;
  document.querySelectorAll('.content-section').forEach(el => el.classList.toggle('active', el.id === section));
  document.querySelectorAll('.nav-item').forEach(btn => btn.classList.toggle('active', btn.dataset.section === section));
  document.getElementById('pageTitle').textContent = sectionTitles[section];
  document.getElementById('sidebar').classList.remove('open');
}

function statusClass(status) {
  const good = ['Terbit', 'Terverifikasi', 'Disetujui', 'Dibuka'];
  const bad = ['Habis', 'Nonaktif', 'Ditolak', 'Selesai'];
  if (good.includes(status)) return 'good';
  if (bad.includes(status)) return 'bad';
  return 'warn';
}

function badge(status) {
  return `<span class="badge ${statusClass(status)}">${safe(status)}</span>`;
}

function renderRows(type, rows) {
  const search = document.getElementById('globalSearch').value.toLowerCase().trim();
  const filtered = (rows || []).filter(item => Object.values(item).join(' ').toLowerCase().includes(search));
  const tbody = document.getElementById(`table${capitalize(type)}`);
  const count = document.getElementById(`count${capitalize(type)}`);
  count.textContent = `${filtered.length} data`;

  if (!filtered.length) {
    const colspans = { ulasan: 9 };
    tbody.innerHTML = `<tr><td class="empty-state" colspan="${colspans[type] || 8}">Tidak ada data yang cocok.</td></tr>`;
    return;
  }

  tbody.innerHTML = filtered.map(item => {
    const cells = rowCells(type, item);
    const actions = type === 'pesan'
      ? `<button title="Detail" onclick="viewItem('${type}', ${Number(item.id)})"><i class="fas fa-eye"></i></button>
         <button title="Hapus" onclick="deleteItem('${type}', ${Number(item.id)})"><i class="fas fa-trash"></i></button>`
      : `<button title="Detail" onclick="viewItem('${type}', ${Number(item.id)})"><i class="fas fa-eye"></i></button>
         <button title="Edit" onclick="editItem('${type}', ${Number(item.id)})"><i class="fas fa-pen"></i></button>
         <button title="Hapus" onclick="deleteItem('${type}', ${Number(item.id)})"><i class="fas fa-trash"></i></button>`;

    return `<tr>${cells}<td><div class="row-actions">${actions}</div></td></tr>`;
  }).join('');
}

function renderCraftArtisanOptions(selectedValue = '') {
  const select = document.querySelector('[data-form="kerajinan"] select[name="pengrajin"]');
  if (!select) return;

  const current = selectedValue || select.value;
  const artisans = [...(data.pengrajin || [])].sort((a, b) => String(a.nama || '').localeCompare(String(b.nama || ''), 'id'));
  const options = ['<option value="">Pilih pengrajin</option>']
    .concat(artisans.map(item => `<option value="${safe(item.nama)}">${safe(item.nama)} - ${safe(item.daerah || item.keahlian || '')}</option>`));

  if (current && !artisans.some(item => String(item.nama) === String(current))) {
    options.push(`<option value="${safe(current)}">${safe(current)} (data lama)</option>`);
  }

  select.innerHTML = options.join('');
  select.value = current;
}

function rowCells(type, item) {
  const stars = '&#9733;'.repeat(Number(item.rating || 0));
  const reviewPhoto = item.foto
    ? `<img class="table-thumb" src="${safe(item.foto)}" alt="${safe(item.nama)}">`
    : '<span class="muted-cell">-</span>';
  const reviewProductImage = item.gambar_produk
    ? `<img class="table-thumb" src="${safe(item.gambar_produk)}" alt="${safe(item.produk)}">`
    : '<span class="muted-cell">-</span>';
  const catalogImage = item.gambar
    ? `<img class="table-thumb" src="${safe(item.gambar)}" alt="${safe(item.judul)}">`
    : '<span class="muted-cell">-</span>';
  const templates = {
    kerajinan: `<td><strong>${safe(item.nama)}</strong></td><td>${safe(item.kategori)}</td><td>${safe(item.pengrajin)}</td><td>${safe(item.daerah)}</td><td>${safe(item.harga)}</td><td>${badge(item.status)}</td>`,
    pengrajin: `<td><strong>${safe(item.nama)}</strong></td><td>${safe(item.keahlian)}</td><td>${safe(item.daerah)}</td><td>${safe(item.pengalaman)}</td><td>${safe(item.kontak)}</td><td>${badge(item.status)}</td>`,
    katalog: `<td>${catalogImage}</td><td><strong>${safe(item.judul)}</strong><br><span class="muted-cell">${safe(item.penulis)}</span></td><td>${safe(item.kategori)}</td><td>${safe(item.halaman || '-')}</td><td>${formatDate(item.tanggal)}</td><td>${badge(item.status)}</td>`,
    ulasan: `<td>${reviewPhoto}</td><td><strong>${safe(item.nama)}</strong></td><td>${reviewProductImage}</td><td>${safe(item.produk)}</td><td>${safe(item.halaman || 'Beranda')}</td><td>${stars}</td><td>${safe(item.komentar)}</td><td>${badge(item.status)}</td>`,
    event: `<td><strong>${safe(item.nama)}</strong></td><td>${safe(item.jenis)}</td><td>${safe(item.lokasi)}</td><td>${formatDate(item.tanggal)}</td><td>${safe(item.biaya)}</td><td>${badge(item.status)}</td>`,
    pesan: `<td><strong>${safe(item.nama)}</strong></td><td>${safe(item.email)}</td><td>${safe(item.telepon || '-')}</td><td>${safe(item.instansi)}</td><td>${safe(item.subjek)}</td><td>${formatDate(item.created_at)}</td>`
  };
  return templates[type] || '';
}

function renderOverview() {
  document.getElementById('statKerajinan').textContent = data.kerajinan.filter(item => item.status === 'Terbit').length;
  document.getElementById('statPengrajin').textContent = data.pengrajin.length;
  document.getElementById('statKatalog').textContent = data.katalog.length;
  const ratings = data.ulasan.map(item => Number(item.rating));
  const average = ratings.length ? (ratings.reduce((total, rating) => total + rating, 0) / ratings.length).toFixed(1) : '0';
  document.getElementById('statRating').textContent = average;

  const activities = [
    ['Kerajinan terbaru', data.kerajinan.at(-1)?.nama || 'Belum ada data', 'Produk siap ditampilkan di katalog.'],
    ['Pengrajin terbaru', data.pengrajin.at(-1)?.nama || 'Belum ada data', 'Profil bisa dihubungkan ke produk.'],
    ['Ulasan terakhir', data.ulasan.at(-1)?.produk || 'Belum ada data', 'Periksa status moderasi ulasan.'],
    ['Pesan kontak', data.pesan[0]?.subjek || 'Belum ada pesan', 'Kotak masuk dari halaman kontak.']
  ];
  document.getElementById('activityList').innerHTML = activities.map(item => `
    <div class="activity-item"><i class="fas fa-circle-check"></i><div><strong>${safe(item[0])}</strong><span>${safe(item[1])} - ${safe(item[2])}</span></div></div>
  `).join('');

  const total = Math.max(data.kerajinan.length, 1);
  const categoryCount = data.kerajinan.reduce((acc, item) => {
    acc[item.kategori] = (acc[item.kategori] || 0) + 1;
    return acc;
  }, {});
  document.getElementById('categoryBars').innerHTML = Object.entries(categoryCount).map(([name, count]) => `
    <div class="bar-row">
      <div class="bar-label"><span>${safe(name)}</span><span>${count} produk</span></div>
      <div class="bar-track"><div class="bar-fill" style="width:${(count / total) * 100}%"></div></div>
    </div>
  `).join('') || '<p>Belum ada kategori.</p>';
}

function renderAll() {
  renderCraftArtisanOptions();
  renderRows('kerajinan', data.kerajinan);
  renderRows('pengrajin', data.pengrajin);
  renderRows('katalog', data.katalog);
  renderRows('ulasan', data.ulasan);
  renderRows('event', data.event);
  renderRows('pesan', data.pesan);
  renderOverview();
}

function editItem(type, id) {
  setSection(type);
  const item = data[type].find(row => Number(row.id) === Number(id));
  const form = document.querySelector(`[data-form="${type}"]`);
  if (!item || !form) return;
  if (type === 'kerajinan') renderCraftArtisanOptions(item.pengrajin || '');
  Object.entries(item).forEach(([key, value]) => {
    if (form.elements[key] && form.elements[key].type !== 'file') form.elements[key].value = value;
  });
  form.scrollIntoView({ behavior: 'smooth', block: 'center' });
}

function viewMessage(id) {
  viewItem('pesan', id);
}

function detailFields(type) {
  return {
    kerajinan: [
      ['Nama Kerajinan', 'nama'], ['Kategori', 'kategori'], ['Pengrajin', 'pengrajin'],
      ['Daerah', 'daerah'], ['Harga', 'harga'], ['Stok', 'stok'], ['Status', 'status'], ['Gambar', 'gambar', 'image']
    ],
    pengrajin: [
      ['Nama Pengrajin', 'nama'], ['Keahlian', 'keahlian'], ['Daerah', 'daerah'],
      ['Pengalaman', 'pengalaman'], ['Kontak', 'kontak'], ['Status', 'status'], ['Foto', 'foto', 'image']
    ],
    katalog: [
      ['Judul Katalog', 'judul'], ['Kategori', 'kategori'], ['Penulis', 'penulis'],
      ['Tanggal', 'tanggal', 'date'], ['Halaman', 'halaman'], ['Status', 'status'],
      ['Ringkasan', 'ringkasan'], ['Penjelasan', 'penjelasan'], ['Gambar', 'gambar', 'image']
    ],
    ulasan: [
      ['Nama Pengulas', 'nama'], ['Produk', 'produk'], ['Halaman', 'halaman'], ['Rating', 'rating'], ['Status', 'status'],
      ['Komentar', 'komentar'], ['Foto Pengulas', 'foto', 'image'], ['Gambar Produk', 'gambar_produk', 'image']
    ],
    event: [
      ['Nama Event', 'nama'], ['Jenis', 'jenis'], ['Lokasi', 'lokasi'],
      ['Tanggal', 'tanggal', 'date'], ['Biaya', 'biaya'], ['Status', 'status']
    ],
    pesan: [
      ['Nama', 'nama'], ['Email', 'email'], ['Telepon', 'telepon'], ['Instansi', 'instansi'],
      ['Subjek', 'subjek'], ['Tanggal', 'created_at', 'date'], ['Pesan', 'pesan']
    ]
  }[type] || [];
}

function viewItem(type, id) {
  const item = (data[type] || []).find(row => Number(row.id) === Number(id));
  const modal = document.getElementById('detailModal');
  const title = document.getElementById('detailTitle');
  const content = document.getElementById('detailContent');
  if (!item || !modal || !title || !content) return;

  title.textContent = sectionTitles[type] || 'Detail Data';
  content.innerHTML = detailFields(type).map(([label, key, kind]) => {
    const value = item[key] ?? '';
    const rendered = kind === 'image' && value
      ? `<img class="detail-image" src="${safe(value)}" alt="${safe(label)}">`
      : `<span>${safe(kind === 'date' ? formatDate(value) : value || '-')}</span>`;
    return `<div class="detail-row"><strong>${safe(label)}</strong>${rendered}</div>`;
  }).join('');

  modal.classList.add('show');
  modal.setAttribute('aria-hidden', 'false');
}

function closeDetailModal() {
  const modal = document.getElementById('detailModal');
  if (!modal) return;
  modal.classList.remove('show');
  modal.setAttribute('aria-hidden', 'true');
}

async function deleteItem(type, id) {
  if (!confirm('Hapus data ini dari dashboard admin?')) return;
  try {
    data = normalizeData(await apiRequest({ action: 'delete', type, id }) || data);
    renderAll();
    showToast('Data dihapus');
  } catch (error) {
    showToast(error.message || 'Data gagal dihapus');
  }
}

function clearFormState(form) {
  ['id', 'gambar', 'foto', 'gambar_produk'].forEach(name => {
    if (form.elements[name]) form.elements[name].value = '';
  });
}

function readImageFile(file) {
  return new Promise((resolve, reject) => {
    const reader = new FileReader();
    reader.onload = () => resolve(reader.result);
    reader.onerror = reject;
    reader.readAsDataURL(file);
  });
}

async function handleSubmit(event) {
  event.preventDefault();
  const form = event.currentTarget;
  const type = form.dataset.form;
  const formData = Object.fromEntries(new FormData(form).entries());
  const id = formData.id ? Number(formData.id) : 0;
  formData.id = id;
  delete formData.gambarFile;
  delete formData.fotoFile;
  delete formData.gambarProdukFile;

  const index = id > 0 ? data[type].findIndex(item => Number(item.id) === id) : -1;
  if (type === 'kerajinan') {
    const file = form.elements.gambarFile.files[0];
    if (file) {
      formData.gambar = await readImageFile(file);
    } else if (index >= 0) {
      formData.gambar = data[type][index].gambar || form.elements.gambar.value || '';
    }
    if (!formData.gambar) {
      showToast('Pilih gambar produk terlebih dahulu');
      return;
    }
  }
  if (type === 'katalog') {
    const file = form.elements.gambarFile.files[0];
    if (file) {
      formData.gambar = await readImageFile(file);
    } else if (index >= 0) {
      formData.gambar = data[type][index].gambar || form.elements.gambar.value || '';
    } else {
      formData.gambar = form.elements.gambar.value || '';
    }
    if (!formData.gambar) {
      showToast('Pilih gambar katalog terlebih dahulu');
      return;
    }
  }
  if (type === 'pengrajin') {
    const file = form.elements.fotoFile.files[0];
    if (file) {
      formData.foto = await readImageFile(file);
    } else if (index >= 0) {
      formData.foto = data[type][index].foto || form.elements.foto.value || '';
    }
    if (!formData.foto) {
      showToast('Pilih foto profil pengrajin terlebih dahulu');
      return;
    }
  }
  if (type === 'ulasan') {
    const file = form.elements.fotoFile.files[0];
    if (file) {
      formData.foto = await readImageFile(file);
    } else if (index >= 0) {
      formData.foto = data[type][index].foto || form.elements.foto.value || '';
    } else {
      formData.foto = form.elements.foto.value || '';
    }

    const productFile = form.elements.gambarProdukFile.files[0];
    if (productFile) {
      formData.gambar_produk = await readImageFile(productFile);
    } else if (index >= 0) {
      formData.gambar_produk = data[type][index].gambar_produk || form.elements.gambar_produk.value || '';
    } else {
      formData.gambar_produk = form.elements.gambar_produk.value || '';
    }
  }

  try {
    data = normalizeData(await apiRequest({ action: 'save', type, item: formData }) || data);
    form.reset();
    clearFormState(form);
    renderAll();
    showToast(index >= 0 ? 'Data diperbarui' : 'Data baru ditambahkan');
  } catch (error) {
    showToast(error.message || 'Data gagal disimpan');
  }
}

function capitalize(text) {
  return text.charAt(0).toUpperCase() + text.slice(1);
}

function formatDate(value) {
  if (!value) return '-';
  const date = new Date(value);
  if (Number.isNaN(date.getTime())) return '-';
  return new Intl.DateTimeFormat('id-ID', { day: '2-digit', month: 'short', year: 'numeric' }).format(date);
}

document.querySelectorAll('.nav-item').forEach(button => {
  button.addEventListener('click', () => setSection(button.dataset.section));
});

document.querySelectorAll('.data-form').forEach(form => {
  form.addEventListener('submit', handleSubmit);
  form.addEventListener('reset', () => setTimeout(() => clearFormState(form), 0));
});

document.querySelectorAll('[data-open-form]').forEach(button => {
  button.addEventListener('click', () => {
    setSection(button.dataset.openForm);
    const form = document.querySelector(`[data-form="${button.dataset.openForm}"]`);
    form.reset();
    clearFormState(form);
    if (button.dataset.openForm === 'kerajinan') renderCraftArtisanOptions('');
    form.scrollIntoView({ behavior: 'smooth', block: 'center' });
  });
});

document.querySelectorAll('.quick-add').forEach(button => {
  button.addEventListener('click', () => setSection(button.dataset.target));
});

document.getElementById('globalSearch').addEventListener('input', renderAll);
document.getElementById('menuToggle').addEventListener('click', () => document.getElementById('sidebar').classList.toggle('open'));
document.getElementById('closeDetailModal')?.addEventListener('click', closeDetailModal);
document.getElementById('closeDetailModalBottom')?.addEventListener('click', closeDetailModal);
document.getElementById('detailModal')?.addEventListener('click', event => {
  if (event.target.id === 'detailModal') closeDetailModal();
});
document.addEventListener('keydown', event => {
  if (event.key === 'Escape') closeDetailModal();
});

loadData();
