@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <section class="hero">
        <div class="hero-overlay"></div>

        <div class="hero-content">
            <h1>
                Pondok Pesantren <br>
                <span>Al-Ifadah</span>
            </h1>

            <p>
                Menyediakan pendidikan berbasis Al-Qur’an dan Sunnah
                dengan fasilitas yang nyaman serta tenaga pengajar profesional.
            </p>

            <div class="hero-buttons">
                <a href="pendaftaran.html" class="btn-primary">Daftar Sekarang</a>
                <a href="tentang.html" class="btn-secondary">Tentang Kami</a>
            </div>
        </div>
    </section>

    <section class="about-section">
        <div class="about-container">

            <div class="about-image reveal-left">
                <img src="{{ asset('images/pict 2.png') }}" alt="Tentang Kami">
            </div>
            <div class="about-text reveal-right">
                <h2>Tentang Kami</h2>
                <div class="line"></div>

                <p>
                    Pondok Pesantren Al-Ifadah berdiri pada 02 Mei 2014 di Desa Cangkreng,
                    Kecamatan Lenteng, Kabupaten Sumenep. Bernaung di bawah Yayasan
                    Al-Ifadah, pesantren ini berkomitmen mencetak generasi muslim
                    penghafal Al-Qur’an yang berakhlak, berilmu, dan siap
                    menghadapi perkembangan zaman.
                </p>
            </div>


        </div>
    </section>

    <section class="program-section">
    <div class="program-container">

        <h2 class="program-title reveal-top">Program Pendidikan</h2>

        <div class="program-cards">

            <div class="program-card reveal-left">
                <h3>Tahfidz Murni</h3>
                <p>
                    Program khusus bagi santri yang fokus menghafal Al-Qur’an
                    tanpa sekolah formal. Santri wajib mengikuti madrasah diniyah
                    dan kajian kitab salaf sebagai penguatan ilmu syar’i.
                </p>
                <div class="card-line"></div>
            </div>

            <div class="program-card reveal-bottom">
                <h3>Tahfidz & Sekolah Formal</h3>
                <p>
                    Program terpadu antara hafalan Al-Qur’an dan pendidikan formal (MTs/SMA).
                    Cocok bagi santri yang ingin menghafal sekaligus menempuh pendidikan umum.
                </p>
                <div class="card-line"></div>
            </div>

            <div class="program-card reveal-right">
                <h3>Tahfidz 30 Juz & Surat Pilihan</h3>
                <p>
                    Program target hafalan 30 juz atau surat tertentu.
                    Wajib mengikuti sekolah dan menyelesaikan hafalan
                    dengan sistem bin-nadzhar.
                </p>
                <div class="card-line"></div>
            </div>

        </div>
    </div>
</section>

<section class="fasilitas-section">
    <div class="fasilitas-container">
        <h2 class="fasilitas-title">Fasilitas</h2>

        <div class="fasilitas-grid">

            <div class="fasilitas-card">
                <img src="{{ asset('images/masjid.png') }}" alt="Masjid">
                <h3>Masjid</h3>
            </div>

            <div class="fasilitas-card">
                <img src="{{ asset('images/asrama.png') }}" alt="Asrama">
                <h3>Asrama</h3>
            </div>

            <div class="fasilitas-card">
                <img src="{{ asset('images/kamar-mandi.png') }}" alt="Kamar Mandi">
                <h3>Kamar Mandi</h3>
            </div>

            <div class="fasilitas-card">
                <img src="{{ asset('images/ruang-belajar.png') }}" alt="Ruang Belajar">
                <h3>Ruang Belajar</h3>
            </div>

            <div class="fasilitas-card">
                <img src="{{ asset('images/lapangan.png') }}" alt="Lapangan Olahraga">
                <h3>Lapangan Olahraga</h3>
            </div>

            <div class="fasilitas-card">
                <img src="{{ asset('images/kantin.png') }}" alt="Kantin">
                <h3>Kantin</h3>
            </div>

        </div>

        <div class="fasilitas-link">
            <a href="/fasilitas">Lihat selengkapnya →</a>
        </div>
    </div>
</section>
@endsection
