<x-filament::page>
    @if ($this->student)
        <h1 class="text-xl font-bold mb-2">Raport Siswa</h1>
        <table class="mb-4">
            <tr>
                <td>Nama</td>
                <td>: {{ $this->student->name }}</td>
            </tr>
            <tr>
                <td>NIS/NISN</td>
                <td>: {{ $this->student->nis ?? '-' }} / {{ $this->student->nisn ?? '-' }}</td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>: {{ $this->student->smt1->classrooms->name ?? '-' }}</td>
            </tr>
            <tr>
                <td>Keahlian</td>
                <td>: {{ $this->student->keahlian ?? '-' }}</td>
            </tr>
            <tr>
                <td>Semester</td>
                <td>: Ganjil / 1</td>
            </tr>
            <tr>
                <td>Tahun Pelajaran</td>
                <td>: 2022 / 2023</td>
            </tr>
        </table>


        <h6 class="font-bold">A. Nilai Intra Kurikuler</h6>
        @if ($this->student->smt1)
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
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->smt1->pai ?? '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($this->student->smt1->pai) ? getPredikat($this->student->smt1->pai) : '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2">
                        Ananda menunjukkan {{ getPredikat($this->student->smt1->pai ?? 0) }} dalam {{ $this->cpSemesters[0]->pai ?? '-' }}
                        </td>
                    </tr>

                    <!-- Contoh data Pendidikan Pancasila -->
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">2</td>
                        <td class="border border-gray-300 px-4 py-2">Pendidikan Pancasila</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->smt1->pp ?? '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($this->student->smt1->pp) ? getPredikat($this->student->smt1->pp) : '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2">
                            Ananda menunjukkan {{ getPredikat($this->student->smt1->pp ?? 0) }} dalam {{ $this->cpSemesters[0]->pp ?? '-' }}
                        </td>
                    </tr>

                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">3</td>
                        <td class="border border-gray-300 px-4 py-2">Bahasa Indonesia</td>
                        <td class="border border-gray-300 px-4 py-2  text-center">{{ $this->student->smt1->indo ?? '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($this->student->smt1->indo) ? getPredikat($this->student->smt1->indo) : '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2">
                            Ananda menunjukkan {{ getPredikat($this->student->smt1->indo ?? 0) }} dalam {{ $this->cpSemesters[0]->indo ?? '-' }}
                        </td>
                    </tr>
                    <tr>
                          <td class="border border-gray-300 px-4 py-2 text-center">4</td>
                        <td class="border border-gray-300 px-4 py-2">Pendidikan Jasmani, Olah Raga, dan Kesehatan</td>
                        <td class="border border-gray-300 px-4 py-2  text-center">{{ $this->student->smt1->pjok ?? '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($this->student->smt1->pjok) ? getPredikat($this->student->smt1->pjok) : '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2">
                            Ananda menunjukkan {{ getPredikat($this->student->smt1->pjok ?? 0) }} dalam {{ $this->cpSemesters[0]->pjok ?? '-' }}
                        </td>
                    </tr>
                    <tr>
                          <td class="border border-gray-300 px-4 py-2 text-center">5</td>
                        <td class="border border-gray-300 px-4 py-2">Sejarah</td>
                        <td class="border border-gray-300 px-4 py-2  text-center">{{ $this->student->smt1->sejarah ?? '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($this->student->smt1->sejarah) ? getPredikat($this->student->smt1->sejarah) : '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2">
                            Ananda menunjukkan {{ getPredikat($this->student->smt1->sejarah ?? 0) }} dalam {{ $this->cpSemesters[0]->sejarah ?? '-' }}
                        </td>
                    </tr>
                    <tr>
                          <td class="border border-gray-300 px-4 py-2 text-center">6</td>
                        <td class="border border-gray-300 px-4 py-2">Seni Budaya</td>
                        <td class="border border-gray-300 px-4 py-2  text-center">{{ $this->student->smt1->sb ?? '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($this->student->smt1->sb) ? getPredikat($this->student->smt1->sb) : '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2">
                            Ananda menunjukkan {{ getPredikat($this->student->smt1->sb ?? 0) }} dalam {{ $this->cpSemesters[0]->sb ?? '-' }}
                        </td>
                    </tr>
                    <tr>
                          <td class="border border-gray-300 px-4 py-2 text-center">7</td>
                        <td class="border border-gray-300 px-4 py-2">Bahasa Sunda</td>
                        <td class="border border-gray-300 px-4 py-2  text-center">{{ $this->student->smt1->sunda ?? '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($this->student->smt1->sunda) ? getPredikat($this->student->smt1->sunda) : '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2">
                            Ananda menunjukkan {{ getPredikat($this->student->smt1->sunda ?? 0) }} dalam {{ $this->cpSemesters[0]->sunda ?? '-' }}
                        </td>
                    </tr>
                    <tr>
                          <td class="border border-gray-300 px-4 py-2 text-center">8</td>
                        <td class="border border-gray-300 px-4 py-2">Bahasa Arab</td>
                        <td class="border border-gray-300 px-4 py-2  text-center">{{ $this->student->smt1->arab ?? '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($this->student->smt1->arab) ? getPredikat($this->student->smt1->arab) : '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2">
                            Ananda menunjukkan {{ getPredikat($this->student->smt1->arab ?? 0) }} dalam {{ $this->cpSemesters[0]->arab ?? '-' }}
                        </td>
                    </tr>

                    <!-- Tambahkan mata pelajaran lain di sini -->
                    <tr>
                        <td colspan="5" class="font-bold px-4 py-2">B. Mata Pelajaran Kejuruan</td>
                    </tr>

                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">9</td>
                      <td class="border border-gray-300 px-4 py-2">Matematika</td>
                      <td class="border border-gray-300 px-4 py-2  text-center">{{ $this->student->usmt1->mtk ?? '-' }}</td>
                      <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($this->student->usmt1->mtk) ? getPredikat($this->student->usmt1->mtk) : '-' }}</td>
                      <td class="border border-gray-300 px-4 py-2">
                          Ananda menunjukkan {{ getPredikat($this->student->usmt1->mtk ?? 0) }} dalam {{ $this->cpSemesters[0]->mtk ?? '-' }}
                      </td>
                  </tr>

                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">10</td>
                      <td class="border border-gray-300 px-4 py-2">Bahasa Inggris</td>
                      <td class="border border-gray-300 px-4 py-2  text-center">{{ $this->student->usmt1->inggris ?? '-' }}</td>
                      <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($this->student->usmt1->inggris) ? getPredikat($this->student->usmt1->inggris) : '-' }}</td>
                      <td class="border border-gray-300 px-4 py-2">
                          Ananda menunjukkan {{ getPredikat($this->student->usmt1->inggris ?? 0) }} dalam {{ $this->cpSemesters[0]->inggris ?? '-' }}
                      </td>
                  </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">11</td>
                      <td class="border border-gray-300 px-4 py-2">Informatika/ Simulasi & Komunikasi Digital</td>
                      <td class="border border-gray-300 px-4 py-2  text-center">{{ $this->student->usmt1->informatika ?? '-' }}</td>
                      <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($this->student->usmt1->informatika) ? getPredikat($this->student->usmt1->informatika) : '-' }}</td>
                      <td class="border border-gray-300 px-4 py-2">
                          Ananda menunjukkan {{ getPredikat($this->student->usmt1->informatika ?? 0) }} dalam {{ $this->cpSemesters[0]->informatika ?? '-' }}
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
                        <td class="border border-gray-300 px-4 py-2  text-center">{{ $this->student->usmt1->fisika ?? '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($this->student->usmt1->fisika) ? getPredikat($this->student->usmt1->fisika) : '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2">
                          Ananda menunjukkan {{ getPredikat($this->student->usmt1->fisika ?? 0) }} dalam {{ $this->cpSemesters[0]->fisika ?? '-' }}
                      </td>
                  </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center"></td>
                        <td class="border border-gray-300 px-4 py-2">b. Kimia</td>
                        <td class="border border-gray-300 px-4 py-2  text-center">{{ $this->student->usmt1->kimia ?? '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($this->student->usmt1->kimia) ? getPredikat($this->student->usmt1->kimia) : '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2">
                          Ananda menunjukkan {{ getPredikat($this->student->usmt1->kimia ?? 0) }} dalam {{ $this->cpSemesters[0]->kimia ?? '-' }}
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
                    <td class="border border-gray-300 px-4 py-2  text-center">{{ $this->student->usmt1->bisnis ?? '-' }}</td>
                    <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($this->student->usmt1->bisnis) ? getPredikat($this->student->usmt1->bisnis) : '-' }}</td>
                    <td class="border border-gray-300 px-4 py-2">
                      Ananda menunjukkan {{ getPredikat($this->student->usmt1->bisnis ?? 0) }} dalam {{ $this->cpSemesters[0]->bisnis ?? '-' }}
                  </td>
                </tr>

                <tr>
                    <td class="border border-gray-300 px-4 py-2 text-center"></td>
                    <td class="border border-gray-300 px-4 py-2">b. Profesi dan Kewirausahaan</td>
                    <td class="border border-gray-300 px-4 py-2  text-center">{{ $this->student->usmt1->profesi ?? '-' }}</td>
                    <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($this->student->usmt1->profesi) ? getPredikat($this->student->usmt1->profesi) : '-' }}</td>
                    <td class="border border-gray-300 px-4 py-2">
                      Ananda menunjukkan {{ getPredikat($this->student->usmt1->profesi ?? 0) }} dalam {{ $this->cpSemesters[0]->profesi ?? '-' }}
                  </td>
                </tr>

                <tr>
                    <td class="border border-gray-300 px-4 py-2 text-center"></td>
                    <td class="border border-gray-300 px-4 py-2">c. Pemrograman Terstruktur</td>
                    <td class="border border-gray-300 px-4 py-2  text-center">{{ $this->student->usmt1->pemtur ?? '-' }}</td>
                    <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($this->student->usmt1->pemtur) ? getPredikat($this->student->usmt1->pemtur) : '-' }}</td>
                    <td class="border border-gray-300 px-4 py-2">
                      Ananda menunjukkan {{ getPredikat($this->student->usmt1->pemtur ?? 0) }} dalam {{ $this->cpSemesters[0]->pemtur ?? '-' }}
                  </td>
                </tr>
                <tr>
                    <td class="border border-gray-300 px-4 py-2 text-center"></td>
                    <td class="border border-gray-300 px-4 py-2">d. Pemrograman Berorientasi Objek</td>
                    <td class="border border-gray-300 px-4 py-2  text-center">{{ $this->student->usmt1->pbo ?? '-' }}</td>
                    <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($this->student->usmt1->pbo) ? getPredikat($this->student->usmt1->pbo) : '-' }}</td>
                    <td class="border border-gray-300 px-4 py-2">
                      Ananda menunjukkan {{ getPredikat($this->student->usmt1->pbo ?? 0) }} dalam {{ $this->cpSemesters[0]->pbo ?? '-' }}
                  </td>
                </tr>
                <tr>
                    <td class="border border-gray-300 px-4 py-2 text-center"></td>
                    <td class="border border-gray-300 px-4 py-2">e. Orientasi Dasar Pengembangan Perangkat Lunak dan Gim</td>
                    <td class="border border-gray-300 px-4 py-2  text-center">{{ $this->student->usmt1->gim ?? '-' }}</td>
                    <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($this->student->usmt1->gim) ? getPredikat($this->student->usmt1->gim) : '-' }}</td>
                    <td class="border border-gray-300 px-4 py-2">
                      Ananda menunjukkan {{ getPredikat($this->student->usmt1->gim ?? 0) }} dalam {{ $this->cpSemesters[0]->gim ?? '-' }}
                  </td>
                </tr>
                


                </tbody>
            </table>
        @else
            <p class="text-red-500">Data semester 1 tidak tersedia untuk siswa ini.</p>
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
            <p class="text-red-500">Data semester 1 tidak tersedia untuk siswa ini.</p>
        @endif
        @else
        <p class="text-red-500">Data raport tidak tersedia untuk siswa ini.</p>
    @endif

{{-- D. Pengembangan diri, Karakter Proyek P5K, dan Presensi --}}

<h6 class="font-bold">D. Pengembangan diri, Karakter Proyek P5K, dan Presensi</h6>

    @if ($this->student)
        @if ($this->student->esmt1)
            <table class="table-auto w-full border-collapse border border-gray-300 mt-4">
                <thead>
                    <tr>
                        <th class="font-bold px-4 py-2">Komponen</th>
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
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->esmt1->pramuka ?? '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($this->student->esmt1->pramuka) ? getPredikatP($this->student->esmt1->pramuka) : '-' }}</td>
                        <td rowspan="4" class="border border-gray-300 px-4 py-2">
                            Ananda menunjukkan {{ getPredikatP($this->student->esmt1->pramuka ?? 0) }} sesuai harapan pada kegiatan Pengembangan Diri dan Kepribadian
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">2. Kesenian</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->esmt1->kesenian ?? '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($this->student->esmt1->kesenian) ? getPredikatP($this->student->esmt1->kesenian) : '-' }}</td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">3. Pesantren Ramadhan</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->esmt1->pramadan ?? '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($this->student->esmt1->pramadan) ? getPredikatP($this->student->esmt1->pramadan) : '-' }}</td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">4. Olah Raga & Kesehatan</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->esmt1->okesehatan ?? '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($this->student->esmt1->okesehatan) ? getPredikatP($this->student->esmt1->okesehatan) : '-' }}</td>
                    </tr>

                    <!-- Data Proyek P5K -->
                    <tr>
                        <td rowspan="5" class="border border-gray-300 px-4 py-2 text-center">Proyek P5K</td>
                        <td class="border border-gray-300 px-4 py-2">1. Proyek Keagamaan dan Akhlak Mulia</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->esmt1->kmulia ?? '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($this->student->esmt1->kmulia) ? getPredikatP($this->student->esmt1->kmulia) : '-' }}</td>
                        <td rowspan="5" class="border border-gray-300 px-4 py-2">
                            Ananda menunjukkan {{ getPredikatP($this->student->esmt1->kmulia ?? 0) }} sesuai harapan pada kegiatan Proyek P5K.
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">2. Proyek Budaya Kerja</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->esmt1->bkerja ?? '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($this->student->esmt1->bkerja) ? getPredikatP($this->student->esmt1->bkerja) : '-' }}</td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">3. Proyek Kewirausahaan</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->esmt1->kewirausahaan ?? '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($this->student->esmt1->kewirausahaan) ? getPredikatP($this->student->esmt1->kewirausahaan) : '-' }}</td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">4. Berekayasa dan Berteknologi</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->esmt1->berekayasa ?? '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($this->student->esmt1->berekayasa) ? getPredikatP($this->student->esmt1->berekayasa) : '-' }}</td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">5. Keberkerjaan</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->esmt1->kebekerjaan ?? '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($this->student->esmt1->kebekerjaan) ? getPredikatP($this->student->esmt1->kebekerjaan) : '-' }}</td>
                    </tr>
                </tbody>
            </table>
        @else
            <p class="text-red-500">Data semester 1 tidak tersedia untuk siswa ini.</p>
        @endif
        @else
        <p class="text-red-500">Data raport tidak tersedia untuk siswa ini.</p>
    @endif

    <h6 class="font-bold">E. Penilaian Proyek Budaya Kerja (10 Disiplin Azzainiyyah)</h6>

    @if ($this->student)
        @if ($this->student->esmt1)
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
                    <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->dsmt1->dwaktu ?? '-' }}</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($this->student->dsmt1->dwaktu) ? getPredikatD($this->student->dsmt1->dwaktu) : '-' }}</td>
                    <td rowspan="10" class="border border-gray-300 px-4 py-2">
                        Ananda menunjukkan {{ getPredikatD($this->student->dsmt1->dwaktu ?? 0) }} sesuai harapan pada prilaku 10 disiplin Azzainiyyah.
                    </td>
                </tr>
            </table>
        @else
            <p class="text-red-500">Data semester 1 tidak tersedia untuk siswa ini.</p>
        @endif
        @else
        <p class="text-red-500">Data raport tidak tersedia untuk siswa ini.</p>
    @endif
    
</x-filament::page>
