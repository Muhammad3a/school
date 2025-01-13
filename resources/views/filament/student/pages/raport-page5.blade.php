<x-filament::page>

<div style="text-align: center; margin-bottom: 20px; border-bottom: 2px solid black; padding-bottom: 10px;">
    <div style="display: flex; align-items: center; justify-content: center;">
        <!-- Logo -->
        <div style="flex: 0 0 auto; margin-right: 20px;">
            <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('images/Logo_Azzainiyyah.png'))) }}" 
                 style="width: 100px; height: auto;">
        </div>
        <!-- Teks -->
        <div style="flex: 1; text-align: center;">
            <h1 style="margin: 0; font-weight: bold;">YAYASAN AZZAINIYYAH AL-MUBAROKAH</h1>
            <h3 style="margin: 0; font-weight: bold;">SMK AZZAINIYYAH</h3>
            <p style="margin: 5px 0; font-size: 12px;">
                Jl. Pondok Halimun Nagrog Sinar Barokah Selabintana Sukabumi<br>
                Telp. (0266) 225267 | e-mail: <a href="mailto:smk.azzainiyyah@gmail.com" style="color: blue; text-decoration: none;">smk.azzainiyyah@gmail.com</a>
            </p>
        </div>
    </div>
</div>

    @if ($this->student)
    <table class="mb-4">
        <tr>
            <td>Nama</td>
            <td>: {{ $this->student->name }}</td>
            <td>Jurusan</td>
            <td>: {{ $this->student->departements->name_department ?? '-' }}</td>
        </tr>
        <tr>
            <td>NIS</td>
            <td>: {{ $this->student->nis ?? '-' }}</td>
            <td>Semester</td>
            <td>: Genap / 5</td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>: {{ $this->student->smt5->classrooms->name ?? '-' }}</td>
            <td>Tahun Pelajaran</td>
            <td>: {{ $this->student->smt5->priode->name ?? '-' }}</td>
        </tr>
    </table>


        <h6 class="font-bold">A. Nilai Intra Kurikuler</h6>
        @if ($this->student->smt5)
            <table class="table-auto w-full border-collapse border border-gray-300 mt-4">
                <thead>
                    <tr>
                        <th class="border border-gray-300 px-4 py-2">No</th>
                        <th class="border border-gray-300 px-4 py-2">Mata Pelajaran</th>
                        <th class="border border-gray-300 px-4 py-2">Nilai</th>
                        <th class="border border-gray-300 px-4 py-2">Predikat</th>
                        <th class="border border-gray-300 px-4 py-2">Deskripsi Capaian Kompetensi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        function getPredikat($nilai) {
                            if ($nilai < 60) return 'Kurang';
                            if ($nilai < 70) return 'Cukup';
                            if ($nilai < 85) return 'Baik';
                            return 'Sangat Baik';
                        }

                    @endphp

                    <tr>
                        <td colspan="5" class="font-bold px-4 py-2">A. Mata Pelajaran Umum</td>
                    </tr>

                    <!-- Contoh data Pendidikan Agama Islam -->
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">1</td>
                        <td class="border border-gray-300 px-4 py-2">Pendidikan Agama Islam dan Budi Pekerti</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->smt5->pai ?? '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($this->student->smt5->pai) ? getPredikat($this->student->smt5->pai) : '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2">
                        Ananda menunjukkan {{ getPredikat($this->student->smt5->pai ?? 0) }} dalam {{ $this->cpSemesters[0]->pai ?? '-' }}
                        </td>
                    </tr>

                    <!-- Contoh data Pendidikan Pancasila -->
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">2</td>
                        <td class="border border-gray-300 px-4 py-2">Pendidikan Pancasila</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->smt5->pp ?? '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($this->student->smt5->pp) ? getPredikat($this->student->smt5->pp) : '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2">
                            Ananda menunjukkan {{ getPredikat($this->student->smt5->pp ?? 0) }} dalam {{ $this->cpSemesters[0]->pp ?? '-' }}
                        </td>
                    </tr>

                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">3</td>
                        <td class="border border-gray-300 px-4 py-2">Bahasa Indonesia</td>
                        <td class="border border-gray-300 px-4 py-2  text-center">{{ $this->student->smt5->indo ?? '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($this->student->smt5->indo) ? getPredikat($this->student->smt5->indo) : '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2">
                            Ananda menunjukkan {{ getPredikat($this->student->smt5->indo ?? 0) }} dalam {{ $this->cpSemesters[0]->indo ?? '-' }}
                        </td>
                    </tr>
                    <tr>
                          <td class="border border-gray-300 px-4 py-2 text-center">4</td>
                        <td class="border border-gray-300 px-4 py-2">Pendidikan Jasmani, Olah Raga, dan Kesehatan</td>
                        <td class="border border-gray-300 px-4 py-2  text-center">{{ $this->student->smt5->pjok ?? '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($this->student->smt5->pjok) ? getPredikat($this->student->smt5->pjok) : '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2">
                            Ananda menunjukkan {{ getPredikat($this->student->smt5->pjok ?? 0) }} dalam {{ $this->cpSemesters[0]->pjok ?? '-' }}
                        </td>
                    </tr>
                    <tr>
                          <td class="border border-gray-300 px-4 py-2 text-center">5</td>
                        <td class="border border-gray-300 px-4 py-2">Sejarah</td>
                        <td class="border border-gray-300 px-4 py-2  text-center">{{ $this->student->smt5->sejarah ?? '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($this->student->smt5->sejarah) ? getPredikat($this->student->smt5->sejarah) : '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2">
                            Ananda menunjukkan {{ getPredikat($this->student->smt5->sejarah ?? 0) }} dalam {{ $this->cpSemesters[0]->sejarah ?? '-' }}
                        </td>
                    </tr>
                    <tr>
                          <td class="border border-gray-300 px-4 py-2 text-center">6</td>
                        <td class="border border-gray-300 px-4 py-2">Seni Budaya</td>
                        <td class="border border-gray-300 px-4 py-2  text-center">{{ $this->student->smt5->sb ?? '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($this->student->smt5->sb) ? getPredikat($this->student->smt5->sb) : '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2">
                            Ananda menunjukkan {{ getPredikat($this->student->smt5->sb ?? 0) }} dalam {{ $this->cpSemesters[0]->sb ?? '-' }}
                        </td>
                    </tr>
                    <tr>
                          <td class="border border-gray-300 px-4 py-2 text-center">7</td>
                        <td class="border border-gray-300 px-4 py-2">Bahasa Sunda</td>
                        <td class="border border-gray-300 px-4 py-2  text-center">{{ $this->student->smt5->sunda ?? '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($this->student->smt5->sunda) ? getPredikat($this->student->smt5->sunda) : '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2">
                            Ananda menunjukkan {{ getPredikat($this->student->smt5->sunda ?? 0) }} dalam {{ $this->cpSemesters[0]->sunda ?? '-' }}
                        </td>
                    </tr>
                    <tr>
                          <td class="border border-gray-300 px-4 py-2 text-center">8</td>
                        <td class="border border-gray-300 px-4 py-2">Bahasa Arab</td>
                        <td class="border border-gray-300 px-4 py-2  text-center">{{ $this->student->smt5->arab ?? '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($this->student->smt5->arab) ? getPredikat($this->student->smt5->arab) : '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2">
                            Ananda menunjukkan {{ getPredikat($this->student->smt5->arab ?? 0) }} dalam {{ $this->cpSemesters[0]->arab ?? '-' }}
                        </td>
                    </tr>

                    <!-- Tambahkan mata pelajaran lain di sini -->
                    <tr>
                        <td colspan="5" class="font-bold px-4 py-2">B. Mata Pelajaran Kejuruan</td>
                    </tr>

                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">9</td>
                      <td class="border border-gray-300 px-4 py-2">Matematika</td>
                      <td class="border border-gray-300 px-4 py-2  text-center">{{ $this->student->usmt5->mtk ?? '-' }}</td>
                      <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($this->student->usmt5->mtk) ? getPredikat($this->student->usmt5->mtk) : '-' }}</td>
                      <td class="border border-gray-300 px-4 py-2">
                          Ananda menunjukkan {{ getPredikat($this->student->usmt5->mtk ?? 0) }} dalam {{ $this->cpSemesters[0]->mtk ?? '-' }}
                      </td>
                  </tr>

                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">10</td>
                      <td class="border border-gray-300 px-4 py-2">Bahasa Inggris</td>
                      <td class="border border-gray-300 px-4 py-2  text-center">{{ $this->student->usmt5->inggris ?? '-' }}</td>
                      <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($this->student->usmt5->inggris) ? getPredikat($this->student->usmt5->inggris) : '-' }}</td>
                      <td class="border border-gray-300 px-4 py-2">
                          Ananda menunjukkan {{ getPredikat($this->student->usmt5->inggris ?? 0) }} dalam {{ $this->cpSemesters[0]->inggris ?? '-' }}
                      </td>
                  </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">11</td>
                      <td class="border border-gray-300 px-4 py-2">Informatika/ Simulasi & Komunikasi Digital</td>
                      <td class="border border-gray-300 px-4 py-2  text-center">{{ $this->student->usmt5->informatika ?? '-' }}</td>
                      <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($this->student->usmt5->informatika) ? getPredikat($this->student->usmt5->informatika) : '-' }}</td>
                      <td class="border border-gray-300 px-4 py-2">
                          Ananda menunjukkan {{ getPredikat($this->student->usmt5->informatika ?? 0) }} dalam {{ $this->cpSemesters[0]->informatika ?? '-' }}
                      </td>
                  </tr>
                  <tr>
                    <td class="border border-gray-300 px-4 py-2 text-center">12</td>
                        <td class="border border-gray-300 px-4 py-2">Projek IPAS</td>
                        <td class="border border-gray-300 px-4 py-2"></td>
                        <td class="border border-gray-300 px-4 py-2"></td>
                        <td class="border border-gray-300 px-4 py-2"></td>
                  </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center"></td>
                        <td class="border border-gray-300 px-4 py-2">a. Fisika</td>
                        <td class="border border-gray-300 px-4 py-2  text-center">{{ $this->student->usmt5->fisika ?? '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($this->student->usmt5->fisika) ? getPredikat($this->student->usmt5->fisika) : '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2">
                          Ananda menunjukkan {{ getPredikat($this->student->usmt5->fisika ?? 0) }} dalam {{ $this->cpSemesters[0]->fisika ?? '-' }}
                      </td>
                  </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center"></td>
                        <td class="border border-gray-300 px-4 py-2">b. Kimia</td>
                        <td class="border border-gray-300 px-4 py-2  text-center">{{ $this->student->usmt5->kimia ?? '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($this->student->usmt5->kimia) ? getPredikat($this->student->usmt5->kimia) : '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2">
                          Ananda menunjukkan {{ getPredikat($this->student->usmt5->kimia ?? 0) }} dalam {{ $this->cpSemesters[0]->kimia ?? '-' }}
                      </td>
                  </tr>

                  <tr>
                    <td class="border border-gray-300 px-4 py-2 text-center">13</td>
                        <td class="border border-gray-300 px-4 py-2">Dasar Program Keahlian</td>
                        <td class="border border-gray-300 px-4 py-2"></td>
                        <td class="border border-gray-300 px-4 py-2"></td>
                        <td class="border border-gray-300 px-4 py-2"></td>
                  </tr>

                <tr>
                    <td class="border border-gray-300 px-4 py-2 text-center"></td>
                    <td class="border border-gray-300 px-4 py-2">a. Proses Bisnis dan K3LH</td>
                    <td class="border border-gray-300 px-4 py-2  text-center">{{ $this->student->usmt5->bisnis ?? '-' }}</td>
                    <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($this->student->usmt5->bisnis) ? getPredikat($this->student->usmt5->bisnis) : '-' }}</td>
                    <td class="border border-gray-300 px-4 py-2">
                      Ananda menunjukkan {{ getPredikat($this->student->usmt5->bisnis ?? 0) }} dalam {{ $this->cpSemesters[0]->bisnis ?? '-' }}
                  </td>
                </tr>

                <tr>
                    <td class="border border-gray-300 px-4 py-2 text-center"></td>
                    <td class="border border-gray-300 px-4 py-2">b. Profesi dan Kewirausahaan</td>
                    <td class="border border-gray-300 px-4 py-2  text-center">{{ $this->student->usmt5->profesi ?? '-' }}</td>
                    <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($this->student->usmt5->profesi) ? getPredikat($this->student->usmt5->profesi) : '-' }}</td>
                    <td class="border border-gray-300 px-4 py-2">
                      Ananda menunjukkan {{ getPredikat($this->student->usmt5->profesi ?? 0) }} dalam {{ $this->cpSemesters[0]->profesi ?? '-' }}
                  </td>
                </tr>

                <tr>
                    <td class="border border-gray-300 px-4 py-2 text-center"></td>
                    <td class="border border-gray-300 px-4 py-2">c. Pemrograman Terstruktur</td>
                    <td class="border border-gray-300 px-4 py-2  text-center">{{ $this->student->usmt5->pemtur ?? '-' }}</td>
                    <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($this->student->usmt5->pemtur) ? getPredikat($this->student->usmt5->pemtur) : '-' }}</td>
                    <td class="border border-gray-300 px-4 py-2">
                      Ananda menunjukkan {{ getPredikat($this->student->usmt5->pemtur ?? 0) }} dalam {{ $this->cpSemesters[0]->pemtur ?? '-' }}
                  </td>
                </tr>
                <tr>
                    <td class="border border-gray-300 px-4 py-2 text-center"></td>
                    <td class="border border-gray-300 px-4 py-2">d. Pemrograman Berorientasi Objek</td>
                    <td class="border border-gray-300 px-4 py-2  text-center">{{ $this->student->usmt5->pbo ?? '-' }}</td>
                    <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($this->student->usmt5->pbo) ? getPredikat($this->student->usmt5->pbo) : '-' }}</td>
                    <td class="border border-gray-300 px-4 py-2">
                      Ananda menunjukkan {{ getPredikat($this->student->usmt5->pbo ?? 0) }} dalam {{ $this->cpSemesters[0]->pbo ?? '-' }}
                  </td>
                </tr>
                <tr>
                    <td class="border border-gray-300 px-4 py-2 text-center"></td>
                    <td class="border border-gray-300 px-4 py-2">e. Orientasi Dasar Pengembangan Perangkat Lunak dan Gim</td>
                    <td class="border border-gray-300 px-4 py-2  text-center">{{ $this->student->usmt5->gim ?? '-' }}</td>
                    <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($this->student->usmt5->gim) ? getPredikat($this->student->usmt5->gim) : '-' }}</td>
                    <td class="border border-gray-300 px-4 py-2">
                      Ananda menunjukkan {{ getPredikat($this->student->usmt5->gim ?? 0) }} dalam {{ $this->cpSemesters[0]->gim ?? '-' }}
                  </td>
                </tr>
                


                </tbody>
            </table>
        @else
            <p class="text-red-500">Data semester 5 tidak tersedia untuk siswa ini.</p>
        @endif
    @else
        <p class="text-red-500">Data raport tidak tersedia untuk siswa ini.</p>
    @endif


    {{-- Catatan Akademik --}}

    <h6 class="font-bold">B. Catatan Akademik</h6>
        <tr>
            <td class="border border-gray-300 px-4 py-2 text-center">Tingkatan prestasi, kedisiplinan, dan ketekunan dalam belajar. Semester depan harus lebih baik dari semester sekarang</td>
        </tr>

{{-- C. Kegiatan Belajar di Dunia Usaha/ Dunia Industri/ Dunia Kerja (DUDIKA) --}}
<h6 class="font-bold">C. Kegiatan Belajar di Dunia Usaha/ Dunia Industri/ Dunia Kerja (DUDIKA)</h6>

@if ($this->student)
        @if ($this->student->kindustri)
            <table class="table-auto w-full border-collapse border border-gray-300 mt-4">
                <thead>
                    <tr>
                        <th rowspan="2" class="border px-4 py-2 font-bold">Mitra DUDIKA</th>
                        <th rowspan="2" class="border px-4 py-2 font-bold">Nilai</th>
                        <th rowspan="2" class="border px-4 py-2 font-bold">Lokasi</th>
                        <th rowspan="2" class="border px-4 py-2 font-bold">Jenis Kegiatan</th>
                        <th colspan="2" class="border px-4 py-2 font-bold">Pelaksanaan</th>
                      </tr>
                      <tr>                                                                       
                        <th class="border px-4 py-2 font-bold">Lama</th>
                        <th class="border px-4 py-2 font-bold">Waktu</th>
                      </tr>
                </thead>
                <tbody>
                    

                    <!-- Data Pengembangan Diri -->
                    <tr>                                                                  
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->kindustri->mitra ?? '-' }}</td>                        
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->kindustri->nilai ?? '-' }}</td>                        
                        <td class="border border-gray-300 px-4 py-2">{{ $this->student->kindustri->lokasi ?? '-' }}</td>                        
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->kindustri->jengke->name ?? '-' }}</td>                        
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->kindustri->lama ?? '-' }}</td>                        
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->kindustri->waktu ?? '-' }}</td>                        
                    </tr>
                    <tr>                                                                  
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->Pkl->mitra ?? '-' }}</td>                        
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->Pkl->nilai ?? '-' }}</td>                        
                        <td class="border border-gray-300 px-4 py-2">{{ $this->student->Pkl->lokasi ?? '-' }}</td>                        
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->Pkl->jengke->name ?? '-' }}</td>                        
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->Pkl->lama ?? '-' }}</td>                        
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->Pkl->waktu ?? '-' }}</td>                        
                    </tr>
                    <tr>                                                                  
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->UjiKom->mitra ?? '-' }}</td>                        
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->UjiKom->nilai ?? '-' }}</td>                        
                        <td class="border border-gray-300 px-4 py-2">{{ $this->student->UjiKom->lokasi ?? '-' }}</td>                        
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->UjiKom->jengke->name ?? '-' }}</td>                        
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->UjiKom->lama ?? '-' }}</td>                        
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->UjiKom->waktu ?? '-' }}</td>                        
                    </tr>
                   
                </tbody>
            </table>
        @else
            <p class="text-red-500">Data semester 5 tidak tersedia untuk siswa ini.</p>
        @endif
        @else
        <p class="text-red-500">Data raport tidak tersedia untuk siswa ini.</p>
    @endif

{{-- D. Pengembangan diri, Karakter Proyek P5K, dan Presensi --}}

<h6 class="font-bold">D. Pengembangan diri, Karakter Proyek P5K, dan Presensi</h6>

    @if ($this->student)
        @if ($this->student->esmt5)
            <table class="table-auto w-full border-collapse border border-gray-300 mt-4">
                <thead>
                    <tr>
                        <th colspan="2" class="font-bold px-4 py-2">Komponen</th>
                        <th colspan="2" class="border font-bold px-4 py-2">Predikat</th>
                        <th class="border font-bold px-4 py-2">Deskripsi Capaian Kompetensi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    // Fungsi untuk mendapatkan predikat
                    function getPredikatP($nilai) {
                        $nilai = (int)$nilai; // Konversi eksplisit ke integer
                        if ($nilai >= 85) return 'Sangat Baik';
                        if ($nilai >= 70) return 'Berkembang Sesuai Harapan';
                        if ($nilai >= 60) return 'Mulai Berkembang';
                        return 'Belum Berkembang';
                    }
                    @endphp

                    <!-- Data Pengembangan Diri -->
                    <tr>
                        <td rowspan="4" class="border border-gray-300 px-4 py-2 text-center">Pengembangan diri</td>
                        <td class="border border-gray-300 px-4 py-2">1. Pramuka</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->esmt5->pramuka ?? '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($this->student->esmt5->pramuka) ? getPredikatP($this->student->esmt5->pramuka) : '-' }}</td>
                        <td rowspan="4" class="border border-gray-300 px-4 py-2">
                            Ananda menunjukkan {{ getPredikatP($this->student->esmt5->pramuka ?? 0) }} sesuai harapan pada kegiatan Pengembangan Diri dan Kepribadian
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">2. Kesenian</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->esmt5->kesenian ?? '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($this->student->esmt5->kesenian) ? getPredikatP($this->student->esmt5->kesenian) : '-' }}</td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">3. Pesantren Ramadhan</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->esmt5->pramadan ?? '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($this->student->esmt5->pramadan) ? getPredikatP($this->student->esmt5->pramadan) : '-' }}</td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">4. Olah Raga & Kesehatan</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->esmt5->okesehatan ?? '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($this->student->esmt5->okesehatan) ? getPredikatP($this->student->esmt5->okesehatan) : '-' }}</td>
                    </tr>

                    <!-- Data Proyek P5K -->
                    <tr>
                        <td rowspan="5" class="border border-gray-300 px-4 py-2 text-center">Proyek P5K</td>
                        <td class="border border-gray-300 px-4 py-2">1. Proyek Keagamaan dan Akhlak Mulia</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->esmt5->kmulia ?? '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($this->student->esmt5->kmulia) ? getPredikatP($this->student->esmt5->kmulia) : '-' }}</td>
                        <td rowspan="5" class="border border-gray-300 px-4 py-2">
                            Ananda menunjukkan {{ getPredikatP($this->student->esmt5->kmulia ?? 0) }} sesuai harapan pada kegiatan Proyek P5K.
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">2. Proyek Budaya Kerja</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->esmt5->bkerja ?? '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($this->student->esmt5->bkerja) ? getPredikatP($this->student->esmt5->bkerja) : '-' }}</td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">3. Proyek Kewirausahaan</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->esmt5->kewirausahaan ?? '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($this->student->esmt5->kewirausahaan) ? getPredikatP($this->student->esmt5->kewirausahaan) : '-' }}</td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">4. Berekayasa dan Berteknologi</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->esmt5->berekayasa ?? '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($this->student->esmt5->berekayasa) ? getPredikatP($this->student->esmt5->berekayasa) : '-' }}</td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">5. Keberkerjaan</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->esmt5->kebekerjaan ?? '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($this->student->esmt5->kebekerjaan) ? getPredikatP($this->student->esmt5->kebekerjaan) : '-' }}</td>
                    </tr>

                     {{-- data eksul tambahan --}}

                     <tr>
                        <td rowspan="9" class="border border-gray-300 px-4 py-2 text-center">Eskul Tambahan</td>
                        <td class="border border-gray-300 px-4 py-2">1. video Editing</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->esmt5->video ?? '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($this->student->esmt5->video) ? getPredikatP($this->student->esmt5->video) : '-' }}</td>
                        <td rowspan="9" class="border border-gray-300 px-4 py-2">
                            Ananda menunjukkan {{ getPredikatP($this->student->esmt5->video ?? 0) }} sesuai harapan pada kegiatan Eskul.
                        </td>
                    </tr>

                    <tr>                        
                        <td class="border border-gray-300 px-4 py-2">2. potografer</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->esmt5->foto ?? '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($this->student->esmt5->foto) ? getPredikatP($this->student->esmt5->foto) : '-' }}</td>                       
                    </tr>

                    <tr>                        
                        <td class="border border-gray-300 px-4 py-2">3. Desain</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->esmt5->desain ?? '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($this->student->esmt5->desain) ? getPredikatP($this->student->esmt5->desain) : '-' }}</td>                       
                    </tr>

                    <tr>                        
                        <td class="border border-gray-300 px-4 py-2">4. Kaligrafi</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->esmt5->kaligerafi ?? '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($this->student->esmt5->kaligerafi) ? getPredikatP($this->student->esmt5->kaligerafi) : '-' }}</td>                       
                    </tr>

                    <tr>                        
                        <td class="border border-gray-300 px-4 py-2">5. English Club</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->esmt5->engclub ?? '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($this->student->esmt5->engclub) ? getPredikatP($this->student->esmt5->engclub) : '-' }}</td>                       
                    </tr>

                    <tr>                        
                        <td class="border border-gray-300 px-4 py-2">6. Hadroh</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->esmt5->hadroh ?? '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($this->student->esmt5->hadroh) ? getPredikatP($this->student->esmt5->hadroh) : '-' }}</td>                       
                    </tr>

                    <tr>                        
                        <td class="border border-gray-300 px-4 py-2">7. Vollyball</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->esmt5->voli ?? '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($this->student->esmt5->voli) ? getPredikatP($this->student->esmt5->voli) : '-' }}</td>                       
                    </tr>

                    <tr>                        
                        <td class="border border-gray-300 px-4 py-2">8. Futsal</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->esmt5->futsal ?? '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($this->student->esmt5->futsal) ? getPredikatP($this->student->esmt5->futsal) : '-' }}</td>                       
                    </tr>

                    <tr>                        
                        <td class="border border-gray-300 px-4 py-2">9. Silat</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->esmt5->silat ?? '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($this->student->esmt5->silat) ? getPredikatP($this->student->esmt5->silat) : '-' }}</td>                       
                    </tr>

                  {{-- Data Presensi   --}}
                  <tr>
                    <td rowspan="3" class="border border-gray-300 px-4 py-2 text-center">Presensi</td>
                    <td class="border border-gray-300 px-4 py-2 ">Sakit</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->esmt5->sakit ?? '-' }}</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">hari</td>
                    <td rowspan="3" class="border border-gray-300 px-4 py-2">
                        {{-- Ananda menunjukkan {{ getPredikatP($this->student->esmt5->kmulia ?? 0) }} sesuai harapan pada kegiatan Proyek P5K. --}}
                    </td>
                </tr>

                <tr>
                    <td class="border border-gray-300 px-4 py-2 ">Izin</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->esmt5->izin ?? '-' }}</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">hari</td>
                </tr>

                <tr>
                    <td class="border border-gray-300 px-4 py-2 ">Tanpa Keterangan</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->esmt5->alfa ?? '-' }}</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">hari</td>
                </tr>

                </tbody>
            </table>
        @else
            <p class="text-red-500">Data semester 5 tidak tersedia untuk siswa ini.</p>
        @endif
        @else
        <p class="text-red-500">Data raport tidak tersedia untuk siswa ini.</p>
    @endif

    <h6 class="font-bold">E. Penilaian Proyek Budaya Kerja (10 Disiplin Azzainiyyah)</h6>

    @if ($this->student)
        @if ($this->student->esmt5)
            <table class="table-auto w-full border-collapse border border-gray-300 mt-4">
                <thead>
                    <tr>
                        <th class="border font-bold px-4 py-2">No</th>
                        <th class="border font-bold px-4 py-2">10 Disiplin</th>
                        <th class="border font-bold px-4 py-2">Nilai</th>
                        <th class="border font-bold px-4 py-2">Predikat</th>
                        <th class="border font-bold px-4 py-2">Deskripsi Capaian Kompetensi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    // Fungsi untuk mendapatkan predikat
                    function getPredikatD($nilai) {
                        $nilai = (int)$nilai; // Konversi eksplisit ke integer
                        if ($nilai >= 85) return 'Sangat Baik';
                        if ($nilai >= 70) return 'Berkembang Sesuai Harapan';
                        if ($nilai >= 60) return 'Mulai Berkembang';
                        return 'Belum Berkembang';
                    }
                    @endphp

                <tr>
                    <td class="border border-gray-300 px-4 py-2 text-center">1</td>
                    <td class="border border-gray-300 px-4 py-2">Disiplin Waktu</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->dsmt5->dwaktu ?? '-' }}</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($this->student->dsmt5->dwaktu) ? getPredikatD($this->student->dsmt5->dwaktu) : '-' }}</td>
                    <td rowspan="10" class="border border-gray-300 px-4 py-2">
                        Ananda menunjukkan {{ getPredikatD($this->student->dsmt5->dwaktu ?? 0) }} pada prilaku 10 disiplin Azzainiyyah.
                    </td>
                </tr>

                <tr>
                    <td class="border border-gray-300 px-4 py-2 text-center">2</td>
                    <td class="border border-gray-300 px-4 py-2">Disiplin Ibadah</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->dsmt5->dibadah ?? '-' }}</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($this->student->dsmt5->dibadah) ? getPredikatD($this->student->dsmt5->dibadah) : '-' }}</td>
                </tr>

                <tr>
                    <td class="border border-gray-300 px-4 py-2 text-center">3</td>
                    <td class="border border-gray-300 px-4 py-2">Disiplin Belajar</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->dsmt5->dbelajar ?? '-' }}</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($this->student->dsmt5->dbelajar) ? getPredikatD($this->student->dsmt5->dbelajar) : '-' }}</td>
                </tr>

                <tr>
                    <td class="border border-gray-300 px-4 py-2 text-center">4</td>
                    <td class="border border-gray-300 px-4 py-2">Disiplin Bergaul</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->dsmt5->dbergaul ?? '-' }}</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($this->student->dsmt5->dbergaul) ? getPredikatD($this->student->dsmt5->dbergaul) : '-' }}</td>
                </tr>

                <tr>
                    <td class="border border-gray-300 px-4 py-2 text-center">5</td>
                    <td class="border border-gray-300 px-4 py-2">Disiplin Berbusana</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->dsmt5->dberbusana ?? '-' }}</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($this->student->dsmt5->dberbusana) ? getPredikatD($this->student->dsmt5->dberbusana) : '-' }}</td>
                </tr>

                <tr>
                    <td class="border border-gray-300 px-4 py-2 text-center">6</td>
                    <td class="border border-gray-300 px-4 py-2">Disiplin Menggunakan Fasilitas</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->dsmt5->dmenggunakanfasilitas ?? '-' }}</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($this->student->dsmt5->dmenggunakanfasilitas) ? getPredikatD($this->student->dsmt5->dmenggunakanfasilitas) : '-' }}</td>
                </tr>

                <tr>
                    <td class="border border-gray-300 px-4 py-2 text-center">7</td>
                    <td class="border border-gray-300 px-4 py-2">Disiplin K3</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->dsmt5->dk3 ?? '-' }}</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($this->student->dsmt5->dk3) ? getPredikatD($this->student->dsmt5->dk3) : '-' }}</td>
                </tr>

                <tr>
                    <td class="border border-gray-300 px-4 py-2 text-center">8</td>
                    <td class="border border-gray-300 px-4 py-2">Disiplin Berbahasa</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->dsmt5->dberbahasa ?? '-' }}</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($this->student->dsmt5->dberbahasa) ? getPredikatD($this->student->dsmt5->dberbahasa) : '-' }}</td>
                </tr>

                <tr>
                    <td class="border border-gray-300 px-4 py-2 text-center">9</td>
                    <td class="border border-gray-300 px-4 py-2">Disiplin Bertindak & Menindak</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->dsmt5->dbertindak ?? '-' }}</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($this->student->dsmt5->dbertindak) ? getPredikatD($this->student->dsmt5->dbertindak) : '-' }}</td>
                </tr>

                <tr>
                    <td class="border border-gray-300 px-4 py-2 text-center">10</td>
                    <td class="border border-gray-300 px-4 py-2">Disiplin Keamanan</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->dsmt5->dkeamanan ?? '-' }}</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($this->student->dsmt5->dkeamanan) ? getPredikatD($this->student->dsmt5->dkeamanan) : '-' }}</td>
                </tr>
            </table>
        @else
            <p class="text-red-500">Data semester 5 tidak tersedia untuk siswa ini.</p>
        @endif
        @else
        <p class="text-red-500">Data raport tidak tersedia untuk siswa ini.</p>
    @endif

    <h6 class="font-bold">F. Penilaian Proyek Keagamaan dan Akhlak Mulia (10 Pembiasaan Akhlak Mulia)</h6>

    @if ($this->student)
        @if ($this->student->psmt5)
            <table class="table-auto w-full border-collapse border border-gray-300 mt-4">
                <thead>
                    <tr>
                        <th class="border font-bold px-4 py-2">No</th>
                        <th class="border font-bold px-4 py-2">10 Pembiasaan Akhlak Mulia</th>
                        <th class="border font-bold px-4 py-2">Nilai</th>
                        <th class="border font-bold px-4 py-2">Predikat</th>
                        <th class="border font-bold px-4 py-2">Deskripsi Capaian Kompetensi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    // Fungsi untuk mendapatkan predikat
                    // function getPredikatD($nilai) {
                    //     $nilai = (int)$nilai; // Konversi eksplisit ke integer
                    //     if ($nilai >= 85) return 'Sangat Baik';
                    //     if ($nilai >= 70) return 'Berkembang Sesuai Harapan';
                    //     if ($nilai >= 60) return 'Mulai Berkembang';
                    //     return 'Belum Berkembang';
                    // }
                    @endphp

                <tr>
                    <td class="border border-gray-300 px-4 py-2 text-center">1</td>
                    <td class="border border-gray-300 px-4 py-2">Berbakti pada Orang Tua</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->psmt5->bpot ?? '-' }}</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($this->student->psmt5->bpot) ? getPredikatD($this->student->psmt5->bpot) : '-' }}</td>
                    <td rowspan="10" class="border border-gray-300 px-4 py-2">
                        Ananda menunjukkan {{ getPredikatD($this->student->dsmt5->dwaktu ?? 0) }} pada perilaku 10 Pembiasaan Akhlak Mulia di sekolah
                    </td>
                </tr>

                <tr>
                    <td class="border border-gray-300 px-4 py-2 text-center">2</td>
                    <td class="border border-gray-300 px-4 py-2">Berbusana Muslim</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->psmt5->bmuslim ?? '-' }}</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($this->student->psmt5->bmuslim) ? getPredikatD($this->student->psmt5->bmuslim) : '-' }}</td>
                </tr>

                <tr>
                    <td class="border border-gray-300 px-4 py-2 text-center">3</td>
                    <td class="border border-gray-300 px-4 py-2">Memelihara Adab Belajar sesuai Ajaran Agama Islam</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->psmt5->mabsaai ?? '-' }}</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($this->student->psmt5->mabsaai) ? getPredikatD($this->student->psmt5->mabsaai) : '-' }}</td>
                </tr>

                <tr>
                    <td class="border border-gray-300 px-4 py-2 text-center">4</td>
                    <td class="border border-gray-300 px-4 py-2">Membaca dan Menghafal Al-Quran</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->psmt5->mma ?? '-' }}</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($this->student->psmt5->mma) ? getPredikatD($this->student->psmt5->mma) : '-' }}</td>
                </tr>

                <tr>
                    <td class="border border-gray-300 px-4 py-2 text-center">5</td>
                    <td class="border border-gray-300 px-4 py-2">Memelihara Kebersihan Diri dan Lingkungan</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->psmt5->mkdl ?? '-' }}</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($this->student->psmt5->mkdl) ? getPredikatD($this->student->psmt5->mkdl) : '-' }}</td>
                </tr>

                <tr>
                    <td class="border border-gray-300 px-4 py-2 text-center">6</td>
                    <td class="border border-gray-300 px-4 py-2">Mendirikan Sholat Fardhu dan Sholat Sunat</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->psmt5->msfss ?? '-' }}</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($this->student->psmt5->msfss) ? getPredikatD($this->student->psmt5->msfss) : '-' }}</td>
                </tr>

                <tr>
                    <td class="border border-gray-300 px-4 py-2 text-center">7</td>
                    <td class="border border-gray-300 px-4 py-2">Melaksanakan Talim dan Ceramah Keagamaan</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->psmt5->mtck ?? '-' }}</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($this->student->psmt5->mtck) ? getPredikatD($this->student->psmt5->mtck) : '-' }}</td>
                </tr>

                <tr>
                    <td class="border border-gray-300 px-4 py-2 text-center">8</td>
                    <td class="border border-gray-300 px-4 py-2">Terbiasa Melaksanakan Infaq Sejak Dini</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->psmt5->tmisd ?? '-' }}</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($this->student->psmt5->tmisd) ? getPredikatD($this->student->psmt5->tmisd) : '-' }}</td>
                </tr>

                <tr>
                    <td class="border border-gray-300 px-4 py-2 text-center">9</td>
                    <td class="border border-gray-300 px-4 py-2">Melaksanakan Saum Wajib dan Saum Sunah</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->psmt5->mswss ?? '-' }}</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($this->student->psmt5->mswss) ? getPredikatD($this->student->psmt5->mswss) : '-' }}</td>
                </tr>

                <tr>
                    <td class="border border-gray-300 px-4 py-2 text-center">10</td>
                    <td class="border border-gray-300 px-4 py-2">Cinta Tanah Air</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->psmt5->cta ?? '-' }}</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($this->student->psmt5->cta) ? getPredikatD($this->student->psmt5->cta) : '-' }}</td>
                </tr>

            </table>
        @else
            <p class="text-red-500">Data semester 5 tidak tersedia untuk siswa ini.</p>
        @endif
        @else
        <p class="text-red-500">Data raport tidak tersedia untuk siswa ini.</p>
    @endif

    <h6 class="font-bold">G. Penilaian Karakter Proyek Penguatan Profil Pelajar Pancasila dan Ketenagakerjaan</h6>
    
    @if ($this->student)
        @if ($this->student->psmt5)
            <table class="table-auto w-full border-collapse border border-gray-300 mt-4">
                <thead>
                    <tr>
                        <th class="border font-bold px-4 py-2">Karakter</th>                        
                        <th class="border font-bold px-4 py-2">Nilai</th>
                        <th class="border font-bold px-4 py-2">Predikat</th>
                        <th class="border font-bold px-4 py-2">Deskripsi Capaian Kompetensi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @php
                            // Ambil nilai variabel dari object student
                            $bpot = $this->student->psmt5->bpot ?? 0;
                            $bmuslim = $this->student->psmt5->bmuslim ?? 0;
                            $mabsaai = $this->student->psmt5->mabsaai ?? 0;
                            $mma = $this->student->psmt5->mma ?? 0;
                            $mkdl = $this->student->psmt5->mkdl ?? 0;
                            $msfss = $this->student->psmt5->msfss ?? 0;
                            $mtck = $this->student->psmt5->mtck ?? 0;
                            $tmisd = $this->student->psmt5->tmisd ?? 0;
                            $mswss = $this->student->psmt5->mswss ?? 0;
                            $cta = $this->student->psmt5->cta ?? 0;
                    
                            // Hitung total dan rata-rata
                            $total = $bpot + $mabsaai + $mma + $mkdl + $msfss + $mtck + $tmisd + $mswss + $cta;
                            $average = $total / 92 ;

                            $dwaktu = $this->student->dsmt5->dwaktu ?? 0;
                            $dibadah = $this->student->dsmt5->dibadah ?? 0;
                            $dbelajar = $this->student->dsmt5->dbelajar ?? 0;
                            $dbergaul = $this->student->dsmt5->dbergaul ?? 0;
                            $dberbusana = $this->student->dsmt5->dberbusana ?? 0;
                            $dmenggunakanfasilitas = $this->student->dsmt5->dmenggunakanfasilitas ?? 0;
                            $dk3 = $this->student->dsmt5->dk3 ?? 0;
                            $dberbahasa = $this->student->dsmt5->dberbahasa ?? 0;
                            $dbertindak = $this->student->dsmt5->dbertindak ?? 0;
                            $dkeamanan = $this->student->dsmt5->dkeamanan ?? 0;

                            // Mandiri
                            $totald = $dwaktu+$dibadah+$dbelajar+$dbergaul+$dberbusana+$dmenggunakanfasilitas+$dk3+$dberbahasa+$dbertindak+$dkeamanan;
                            $averaged = $totald / 10;

                            // Bernalar keritis 
                            $bernalarkeritis = $averaged+$bpot+$mabsaai+$mkdl+$msfss+$cta;
                            $averagebernalakeritis = $bernalarkeritis / 6;

                            //kreatif
                            $kreatif = $bpot+$bmuslim+$mabsaai+$mma+$msfss+$mtck+$tmisd+$mswss;
                            $averagekreatif = $kreatif / 8;
                    
                            // Fungsi predikat
                            function getPredikatA($nilai) {
                                if ($nilai >= 85) return 'Sangat Baik';
                                if ($nilai >= 70) return 'Berkembang Sesuai Harapan';
                                if ($nilai >= 60) return 'Mulai Berkembang';
                                return 'Belum Berkembang';
                            }
                    
                            // Hitung predikat berdasarkan rata-rata
                            $predikat = getPredikatA($average);
                        @endphp

                        <td class="border border-gray-300 px-4 py-2">Beriman, Bertakwa Kepada Tuhan Yang Maha Esa, dan Berakhlak Mulia</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ intval($average) }}</td> <!-- Tampilkan rata-rata dengan 2 desimal -->
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $predikat }}</td>
                        <td class="border border-gray-300 px-4 py-2">
                            Ananda menunjukkan {{ $predikat }} pada perilaku 10 Disiplin Azzainiyyah
                        </td>
                    </tr> 
                    
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">Berkebhinekaan Global</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->psmt5->cta ?? '-' }}</td> <!-- Tampilkan rata-rata dengan 2 desimal -->
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $predikat }}</td>
                        <td class="border border-gray-300 px-4 py-2">
                            Ananda menunjukkan {{ $predikat }} pada perilaku patriotisme, menjaga kebersihan lingkungan, memelihara nilai-nilai luhur Pancasila, melestarikan budaya, dan menjunjung cita-cita bangsa			
                        </td>
                    </tr>

                    <tr>
                        <td class="border border-gray-300 px-4 py-2">Gotong-royong</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->psmt5->mkdl ?? '-' }}</td> <!-- Tampilkan rata-rata dengan 2 desimal -->
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $predikat }}</td>
                        <td class="border border-gray-300 px-4 py-2">
                            Ananda menunjukkan {{ $predikat }} pada perilaku bekerjasama dan tolong-menolong antara sesama dalam kebaikan			
                        </td>
                    </tr>

                    <tr>
                        <td class="border border-gray-300 px-4 py-2">Mandiri</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ intval($averaged) ?? '-' }}</td> <!-- Tampilkan rata-rata dengan 2 desimal -->
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $predikat }}</td>
                        <td class="border border-gray-300 px-4 py-2">
                            Ananda menunjukkan {{ $predikat }} pada perilaku disiplin, kreatif, inisiatif, dan mampu bekerja sendiri pada bimbingan yang diperolehnya
                        </td>
                    </tr>

                    <tr>
                        <td class="border border-gray-300 px-4 py-2">Bernalar Keritis</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ intval($averagebernalakeritis) ?? '-' }}</td> <!-- Tampilkan rata-rata dengan 2 desimal -->
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $predikat }}</td>
                        <td class="border border-gray-300 px-4 py-2">
                            Ananda menunjukkan {{ $predikat }} dalam memproses informasi dan gagasan, menganalisis dan mengevaluasi penalaran, merefleksi pemikiran, dan mengambil keputusan
                        </td>
                    </tr>

                    <tr>
                        <td class="border border-gray-300 px-4 py-2">Kreatif</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ intval($averagekreatif) ?? '-' }}</td> <!-- Tampilkan rata-rata dengan 2 desimal -->
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $predikat }}</td>
                        <td class="border border-gray-300 px-4 py-2">
                            Ananda menunjukkan {{ $predikat }} pada gagasan yang orisinil, menghasilkan karya dan tindakan yang orisinil
                        </td>
                    </tr>

            </table>
        @else
            <p class="text-red-500">Data semester 5 tidak tersedia untuk siswa ini.</p>
        @endif
        @else
        <p class="text-red-500">Data raport tidak tersedia untuk siswa ini.</p>
    @endif

    <h6 class="font-bold">H. Catatan Perkembangan Karakter</h6>

    <tr>
        <td class="border border-gray-300 px-4 py-2 text-center">Ananda menunjukkan perkembangan karakter yang baik pada pembelajaran semester ini. Selain itu, ananda menunjukkan prestasi yang menonjol pada karakter religius dan kedisiplinan.</td>
    </tr>

    <x-filament::button wire:click="cetakPDF">Cetak PDF</x-filament::button>
    
</x-filament::page>

