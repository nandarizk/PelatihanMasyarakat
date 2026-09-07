@extends('layouts.app')

@section('title', 'Beranda - Pemberdayaan Masyarakat')

@section('content')
<!-- HERO SECTION -->
<section class="hero-beranda">
    <div class="hero-text">
        <h1>Pendataan dan Pemberdayaan<br>Masyarakat Jakarta Barat</h1>
        <p>Portal terpadu untuk pelatihan, sertifikasi, dan pengembangan kapabilitas warga Kota Administrasi Jakarta Barat.</p>
    </div>
    <div class="hero-image-placeholder">
        <p>Foto / Gambar Kegiatan</p>
    </div>
</section>

<!-- STATS SECTION -->
<section class="stats-section">
    <div class="stat-card">
        <h3>42K+</h3>
        <p>Masyarakat Terdata</p>
    </div>
    <div class="stat-card">
        <h3>120+</h3>
        <p>Program Pelatihan</p>
    </div>
    <div class="stat-card">
        <h3>15K+</h3>
        <p>Penerima Sertifikat</p>
    </div>
</section>

<!-- CARA BERGABUNG -->
<section class="steps-section">
    <h2>Cara Bergabung</h2>
    <div class="steps-grid">
        <div class="step-item"><span>1</span><p>Daftar di Kelurahan</p></div>
        <div class="step-item"><span>2</span><p>Verifikasi Data</p></div>
        <div class="step-item"><span>3</span><p>Pilih Pelatihan</p></div>
        <div class="step-item"><span>4</span><p>Akses Pelatihan</p></div>
    </div>
</section>
@endsection