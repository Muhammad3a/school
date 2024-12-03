<!DOCTYPE html>
<html>
<head>
    <title>Raport Semester 6</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }
        .header {
            text-align: center;
            font-weight: bold;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <h1 class="text-xl font-bold mb-2">Raport Siswa</h1>
        <table class="mb-4">
            <tr>
                <td>Nama</td>
                <td>: {{ $student->name }}</td>
            </tr>
            <tr>
                <td>NIS/NISN</td>
                <td>: {{ $student->nis ?? '-' }} / {{ $student->nisn ?? '-' }}</td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>: {{ $student->smt6->classrooms->name ?? '-' }}</td>
            </tr>
            <tr>
                <td>Keahlian</td>
                <td>: {{ $student->keahlian ?? '-' }}</td>
            </tr>
            <tr>
                <td>Semester</td>
                <td>: Genap / 6</td>
            </tr>
            {{-- <tr>
                <td>Tahun Pelajaran</td>
                <td>: 2022 / 2023</td>
            </tr> --}}
        </table>

    <table border="1" cellpadding="5" cellspacing="0" >
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

            <tr>
                <td colspan="5" class="font-bold px-4 py-2">A. Mata Pelajaran Umum</td>
            </tr>

            {{-- Pendidikan Agama Islam (PAI) --}}
            <tr>
                <td class="border border-gray-300 px-4 py-2 text-center">1</td>
                <td class="border border-gray-300 px-4 py-2">Pendidikan Agama Islam dan Budi Pekerti</td>
                <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->smt6->pai ?? '-' }}</td>
                <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->smt6->pai) ? $student->getPredikat($student->smt6->pai) : '-' }}</td>
                <td class="border border-gray-300 px-4 py-2">
                Ananda menunjukkan {{ $student->getPredikat($student->smt6->pai ?? 0) }} dalam {{ $cpSemesters[0]->pai ?? '-' }}
                </td>
            </tr>

            <!-- Pendidikan Pancasila -->
            <tr>
                <td class="border border-gray-300 px-4 py-2 text-center">2</td>
                <td class="border border-gray-300 px-4 py-2">Pendidikan Pancasila</td>
                <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->smt6->pp ?? '-' }}</td>
                <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->smt6->pp) ? $student->getPredikat($student->smt6->pp) : '-' }}</td>
                <td class="border border-gray-300 px-4 py-2">
                    Ananda menunjukkan {{ $student->getPredikat($student->smt6->pp ?? 0) }} dalam {{ $cpSemesters[0]->pp ?? '-' }}
                </td>
            </tr>

            <tr>
                <td class="border border-gray-300 px-4 py-2 text-center">3</td>
                <td class="border border-gray-300 px-4 py-2">Bahasa Indonesia</td>
                <td class="border border-gray-300 px-4 py-2  text-center">{{ $student->smt6->indo ?? '-' }}</td>
                <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($student->smt6->indo) ? $student->getPredikat($student->smt6->indo) : '-' }}</td>
                <td class="border border-gray-300 px-4 py-2">
                    Ananda menunjukkan {{ $student->getPredikat($student->smt6->indo ?? 0) }} dalam {{ $cpSemesters[0]->indo ?? '-' }}
                </td>
            </tr>

            <tr>
                <td class="border border-gray-300 px-4 py-2 text-center">4</td>
              <td class="border border-gray-300 px-4 py-2">Pendidikan Jasmani, Olah Raga, dan Kesehatan</td>
              <td class="border border-gray-300 px-4 py-2  text-center">{{ $student->smt6->pjok ?? '-' }}</td>
              <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($student->smt6->pjok) ? $student->getPredikat($student->smt6->pjok) : '-' }}</td>
              <td class="border border-gray-300 px-4 py-2">
                  Ananda menunjukkan {{ $student->getPredikat($student->smt6->pjok ?? 0) }} dalam {{ $cpSemesters[0]->pjok ?? '-' }}
              </td>
          </tr>

          <tr>
                <td class="border border-gray-300 px-4 py-2 text-center">5</td>
            <td class="border border-gray-300 px-4 py-2">Sejarah</td>
            <td class="border border-gray-300 px-4 py-2  text-center">{{ $student->smt6->sejarah ?? '-' }}</td>
            <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($student->smt6->sejarah) ? $student->getPredikat($student->smt6->sejarah) : '-' }}</td>
            <td class="border border-gray-300 px-4 py-2">
                Ananda menunjukkan {{ $student->getPredikat($student->smt6->sejarah ?? 0) }} dalam {{ $cpSemesters[0]->sejarah ?? '-' }}
            </td>
          </tr>

            <tr>
                <td class="border border-gray-300 px-4 py-2 text-center">6</td>
                <td class="border border-gray-300 px-4 py-2">Seni Budaya</td>
                <td class="border border-gray-300 px-4 py-2  text-center">{{ $student->smt6->sb ?? '-' }}</td>
                <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($student->smt6->sb) ? $student->getPredikat($student->smt6->sb) : '-' }}</td>
                <td class="border border-gray-300 px-4 py-2">
                    Ananda menunjukkan {{ $student->getPredikat($student->smt6->sb ?? 0) }} dalam {{ $cpSemesters[0]->sb ?? '-' }}
                </td>
            </tr>

            <tr>
              <td class="border border-gray-300 px-4 py-2 text-center">7</td>
              <td class="border border-gray-300 px-4 py-2">Bahasa Sunda</td>
              <td class="border border-gray-300 px-4 py-2  text-center">{{ $student->smt6->sunda ?? '-' }}</td>
              <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($student->smt6->sunda) ? $student->getPredikat($student->smt6->sunda) : '-' }}</td>
              <td class="border border-gray-300 px-4 py-2">
                  Ananda menunjukkan {{ $student->getPredikat($student->smt6->sunda ?? 0) }} dalam {{ $cpSemesters[0]->sunda ?? '-' }}
              </td>
          </tr>

          <tr>
                <td class="border border-gray-300 px-4 py-2 text-center">8</td>
                <td class="border border-gray-300 px-4 py-2">Bahasa Arab</td>
                <td class="border border-gray-300 px-4 py-2  text-center">{{ $student->smt6->arab ?? '-' }}</td>
                <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($student->smt6->arab) ? $student->getPredikat($student->smt6->arab) : '-' }}</td>
                <td class="border border-gray-300 px-4 py-2">
                    Ananda menunjukkan {{ $student->getPredikat($student->smt6->arab ?? 0) }} dalam {{ $cpSemesters[0]->arab ?? '-' }}
                </td>
          </tr>
            
          <tr>
            <td colspan="5" class="font-bold px-4 py-2">B. Mata Pelajaran Kejuruan</td>
          </tr>

          <tr>
                <td class="border border-gray-300 px-4 py-2 text-center">9</td>
                <td class="border border-gray-300 px-4 py-2">Matematika</td>
                <td class="border border-gray-300 px-4 py-2  text-center">{{ $student->usmt6->mtk ?? '-' }}</td>
                <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($student->usmt6->mtk) ? $student->getPredikat($student->usmt6->mtk) : '-' }}</td>
                <td class="border border-gray-300 px-4 py-2">
                    Ananda menunjukkan {{ $student->getPredikat($student->usmt6->mtk ?? 0) }} dalam {{ $cpSemesters[0]->mtk ?? '-' }}
                </td>
          </tr>

          <tr>
                <td class="border border-gray-300 px-4 py-2 text-center">10</td>
                <td class="border border-gray-300 px-4 py-2">Bahasa Inggris</td>
                <td class="border border-gray-300 px-4 py-2  text-center">{{ $student->usmt6->inggris ?? '-' }}</td>
                <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($student->usmt6->inggris) ? $student->getPredikat($student->usmt6->inggris) : '-' }}</td>
                <td class="border border-gray-300 px-4 py-2">
                    Ananda menunjukkan {{ $student->getPredikat($student->usmt6->inggris ?? 0) }} dalam {{ $cpSemesters[0]->inggris ?? '-' }}
                </td>
          </tr>
          
          <tr>
                <td class="border border-gray-300 px-4 py-2 text-center">11</td>
                <td class="border border-gray-300 px-4 py-2">Informatika/ Simulasi & Komunikasi Digital</td>
                <td class="border border-gray-300 px-4 py-2  text-center">{{ $student->usmt6->informatika ?? '-' }}</td>
                <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($student->usmt6->informatika) ? $student->getPredikat($student->usmt6->informatika) : '-' }}</td>
                <td class="border border-gray-300 px-4 py-2">
                    Ananda menunjukkan {{ $student->getPredikat($student->usmt6->informatika ?? 0) }} dalam {{ $cpSemesters[0]->informatika ?? '-' }}
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
                <td class="border border-gray-300 px-4 py-2  text-center">{{ $student->usmt6->fisika ?? '-' }}</td>
                <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($student->usmt6->fisika) ? $student->getPredikat($student->usmt6->fisika) : '-' }}</td>
                <td class="border border-gray-300 px-4 py-2">
                Ananda menunjukkan {{ $student->getPredikat($student->usmt6->fisika ?? 0) }} dalam {{ $cpSemesters[0]->fisika ?? '-' }}
                </td>
         </tr>

          <tr>
                <td class="border border-gray-300 px-4 py-2 text-center"></td>
                <td class="border border-gray-300 px-4 py-2">b. Kimia</td>
                <td class="border border-gray-300 px-4 py-2  text-center">{{ $student->usmt6->kimia ?? '-' }}</td>
                <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($student->usmt6->kimia) ? $student->getPredikat($student->usmt6->kimia) : '-' }}</td>
                <td class="border border-gray-300 px-4 py-2">
                Ananda menunjukkan {{ $student->getPredikat($student->usmt6->kimia ?? 0) }} dalam {{ $cpSemesters[0]->kimia ?? '-' }}
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
                <td class="border border-gray-300 px-4 py-2  text-center">{{ $student->usmt6->bisnis ?? '-' }}</td>
                <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($student->usmt6->bisnis) ? $student->getPredikat($student->usmt6->bisnis) : '-' }}</td>
                <td class="border border-gray-300 px-4 py-2">
                Ananda menunjukkan {{ $student->getPredikat($student->usmt6->bisnis ?? 0) }} dalam {{ $cpSemesters[0]->bisnis ?? '-' }}
                </td>
         </tr>

         <tr>
                <td class="border border-gray-300 px-4 py-2 text-center"></td>
                <td class="border border-gray-300 px-4 py-2">b. Profesi dan Kewirausahaan</td>
                <td class="border border-gray-300 px-4 py-2  text-center">{{ $student->usmt6->profesi ?? '-' }}</td>
                <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($student->usmt6->profesi) ? $student->getPredikat($student->usmt6->profesi) : '-' }}</td>
                <td class="border border-gray-300 px-4 py-2">
                Ananda menunjukkan {{ $student->getPredikat($student->usmt6->profesi ?? 0) }} dalam {{ $cpSemesters[0]->profesi ?? '-' }}
                </td>
        </tr>

        <tr>
                <td class="border border-gray-300 px-4 py-2 text-center"></td>
                <td class="border border-gray-300 px-4 py-2">c. Pemrograman Terstruktur</td>
                <td class="border border-gray-300 px-4 py-2  text-center">{{ $student->usmt6->pemtur ?? '-' }}</td>
                <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($student->usmt6->pemtur) ? $student->getPredikat($student->usmt6->pemtur) : '-' }}</td>
                <td class="border border-gray-300 px-4 py-2">
                Ananda menunjukkan {{ $student->getPredikat($student->usmt6->pemtur ?? 0) }} dalam {{ $cpSemesters[0]->pemtur ?? '-' }}
                </td>
        </tr>
        <tr>
                <td class="border border-gray-300 px-4 py-2 text-center"></td>
                <td class="border border-gray-300 px-4 py-2">d. Pemrograman Berorientasi Objek</td>
                <td class="border border-gray-300 px-4 py-2  text-center">{{ $student->usmt6->pbo ?? '-' }}</td>
                <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($student->usmt6->pbo) ? $student->getPredikat($student->usmt6->pbo) : '-' }}</td>
                <td class="border border-gray-300 px-4 py-2">
                Ananda menunjukkan {{ $student->getPredikat($student->usmt6->pbo ?? 0) }} dalam {{ $cpSemesters[0]->pbo ?? '-' }}
                </td>
        </tr>
        <tr>
                <td class="border border-gray-300 px-4 py-2 text-center"></td>
                <td class="border border-gray-300 px-4 py-2">e. Orientasi Dasar Pengembangan Perangkat Lunak dan Gim</td>
                <td class="border border-gray-300 px-4 py-2  text-center">{{ $student->usmt6->gim ?? '-' }}</td>
                <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($student->usmt6->gim) ? $student->getPredikat($student->usmt6->gim) : '-' }}</td>
                <td class="border border-gray-300 px-4 py-2">
                Ananda menunjukkan {{ $student->getPredikat($student->usmt6->gim ?? 0) }} dalam {{ $cpSemesters[0]->gim ?? '-' }}
                </td>
        </tr>        

        </tbody>
    </table>

    <h4 class="font-bold">B. Catatan Akademik</h4>
    <table border="1" cellpadding="5">
        <tr>
            <td class="border border-gray-300 px-4 py-2 text-center">Tingkatan prestasi, kedisiplinan, dan ketekunan dalam belajar. Semester depan harus lebih baik dari semester sekarang</td>
        </tr>
    </table>

    <h4 class="font-bold">C. Kegiatan Belajar di Dunia Usaha/ Dunia Industri/ Dunia Kerja (DUDIKA)</h4>

    <table border="1" cellpadding="5" cellspacing="0" >
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
                <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->kindustri->mitra ?? '-' }}</td>                        
                <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->kindustri->nilai ?? '-' }}</td>                        
                <td class="border border-gray-300 px-4 py-2">{{ $student->kindustri->lokasi ?? '-' }}</td>                        
                <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->kindustri->jengke->name ?? '-' }}</td>                        
                <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->kindustri->lama ?? '-' }}</td>                        
                <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->kindustri->waktu ?? '-' }}</td>                        
            </tr>
            <tr>                                                                  
                <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->Pkl->mitra ?? '-' }}</td>                        
                <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->Pkl->nilai ?? '-' }}</td>                        
                <td class="border border-gray-300 px-4 py-2">{{ $student->Pkl->lokasi ?? '-' }}</td>                        
                <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->Pkl->jengke->name ?? '-' }}</td>                        
                <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->Pkl->lama ?? '-' }}</td>                        
                <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->Pkl->waktu ?? '-' }}</td>                        
            </tr>
            <tr>                                                                  
                <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->UjiKom->mitra ?? '-' }}</td>                        
                <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->UjiKom->nilai ?? '-' }}</td>                        
                <td class="border border-gray-300 px-4 py-2">{{ $student->UjiKom->lokasi ?? '-' }}</td>                        
                <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->UjiKom->jengke->name ?? '-' }}</td>                        
                <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->UjiKom->lama ?? '-' }}</td>                        
                <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->UjiKom->waktu ?? '-' }}</td>                        
            </tr>
           
        </tbody>
    </table>
    <br>
    <br>
    <br>
    <h4 class="font-bold">D. Pengembangan diri, Karakter Proyek P5K, dan Presensi</h4>

    <table border="1" cellpadding="5" cellspacing="0" >
        <thead>
            <tr>
                <th colspan="2" class="font-bold px-4 py-2">Komponen</th>
                <th colspan="2" class="border font-bold px-4 py-2">Predikat</th>
                <th class="border font-bold px-4 py-2">Deskripsi Capaian Kompetensi</th>
            </tr>
        </thead>
        <tbody>            

            <!-- Data Pengembangan Diri -->
            <tr>
                <td rowspan="4" class="border border-gray-300 px-4 py-2 text-center">Pengembangan diri</td>
                <td class="border border-gray-300 px-4 py-2">1. Pramuka</td>
                <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->esmt6->pramuka ?? '-' }}</td>
                <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->esmt6->pramuka) ? $student->getPredikatP($student->esmt6->pramuka) : '-' }}</td>
                <td rowspan="4" class="border border-gray-300 px-4 py-2">
                    Ananda menunjukkan {{ $student->getPredikatP($student->esmt6->pramuka ?? 0) }} sesuai harapan pada kegiatan Pengembangan Diri dan Kepribadian
                </td>
            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2">2. Kesenian</td>
                <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->esmt6->kesenian ?? '-' }}</td>
                <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->esmt6->kesenian) ? $student->getPredikatP($student->esmt6->kesenian) : '-' }}</td>
            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2">3. Pesantren Ramadhan</td>
                <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->esmt6->pramadan ?? '-' }}</td>
                <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->esmt6->pramadan) ? $student->getPredikatP($student->esmt6->pramadan) : '-' }}</td>
            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2">4. Olah Raga & Kesehatan</td>
                <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->esmt6->okesehatan ?? '-' }}</td>
                <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->esmt6->okesehatan) ? $student->getPredikatP($student->esmt6->okesehatan) : '-' }}</td>
            </tr>

            <!-- Data Proyek P5K -->
            <tr>
                <td rowspan="5" class="border border-gray-300 px-4 py-2 text-center">Proyek P5K</td>
                <td class="border border-gray-300 px-4 py-2">1. Proyek Keagamaan dan Akhlak Mulia</td>
                <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->esmt6->kmulia ?? '-' }}</td>
                <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->esmt6->kmulia) ? $student->getPredikatP($student->esmt6->kmulia) : '-' }}</td>
                <td rowspan="5" class="border border-gray-300 px-4 py-2">
                    Ananda menunjukkan {{ $student->getPredikatP($student->esmt6->kmulia ?? 0) }} sesuai harapan pada kegiatan Proyek P5K.
                </td>
            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2">2. Proyek Budaya Kerja</td>
                <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->esmt6->bkerja ?? '-' }}</td>
                <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->esmt6->bkerja) ? $student->getPredikatP($student->esmt6->bkerja) : '-' }}</td>
            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2">3. Proyek Kewirausahaan</td>
                <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->esmt6->kewirausahaan ?? '-' }}</td>
                <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->esmt6->kewirausahaan) ? $student->getPredikatP($student->esmt6->kewirausahaan) : '-' }}</td>
            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2">4. Berekayasa dan Berteknologi</td>
                <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->esmt6->berekayasa ?? '-' }}</td>
                <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->esmt6->berekayasa) ? $student->getPredikatP($student->esmt6->berekayasa) : '-' }}</td>
            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2">5. Keberkerjaan</td>
                <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->esmt6->kebekerjaan ?? '-' }}</td>
                <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->esmt6->kebekerjaan) ? $student->getPredikatP($student->esmt6->kebekerjaan) : '-' }}</td>
            </tr>

          {{-- Data Presensi   --}}
          <tr>
            <td rowspan="3" class="border border-gray-300 px-4 py-2 text-center">Presensi</td>
            <td class="border border-gray-300 px-4 py-2 ">Sakit</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->esmt6->sakit ?? '-' }}</td>
            <td class="border border-gray-300 px-4 py-2 text-center">hari</td>
            <td rowspan="3" class="border border-gray-300 px-4 py-2">
                {{-- Ananda menunjukkan {{ $student->getPredikatP($student->esmt6->kmulia ?? 0) }} sesuai harapan pada kegiatan Proyek P5K. --}}
            </td>
        </tr>

        <tr>
            <td class="border border-gray-300 px-4 py-2 ">Izin</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->esmt6->izin ?? '-' }}</td>
            <td class="border border-gray-300 px-4 py-2 text-center">hari</td>
        </tr>

        <tr>
            <td class="border border-gray-300 px-4 py-2 ">Tanpa Keterangan</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->esmt6->alfa ?? '-' }}</td>
            <td class="border border-gray-300 px-4 py-2 text-center">hari</td>
        </tr>



        </tbody>
    </table>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <h4 class="font-bold">E. Penilaian Proyek Budaya Kerja (10 Disiplin Azzainiyyah)</h4>

    <table border="1" cellpadding="5" cellspacing="0" >
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

        <tr>
            <td class="border border-gray-300 px-4 py-2 text-center">1</td>
            <td class="border border-gray-300 px-4 py-2">Disiplin Waktu</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->dsmt6->dwaktu ?? '-' }}</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->dsmt6->dwaktu) ? $student->getPredikatD($student->dsmt6->dwaktu) : '-' }}</td>
            <td rowspan="10" class="border border-gray-300 px-4 py-2">
                Ananda menunjukkan {{ $student->getPredikatD($student->dsmt6->dwaktu ?? 0) }} pada prilaku 10 disiplin Azzainiyyah.
            </td>
        </tr>

        <tr>
            <td class="border border-gray-300 px-4 py-2 text-center">2</td>
            <td class="border border-gray-300 px-4 py-2">Disiplin Ibadah</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->dsmt6->dibadah ?? '-' }}</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->dsmt6->dibadah) ? $student->getPredikatD($student->dsmt6->dibadah) : '-' }}</td>
        </tr>

        <tr>
            <td class="border border-gray-300 px-4 py-2 text-center">3</td>
            <td class="border border-gray-300 px-4 py-2">Disiplin Belajar</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->dsmt6->dbelajar ?? '-' }}</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->dsmt6->dbelajar) ? $student->getPredikatD($student->dsmt6->dbelajar) : '-' }}</td>
        </tr>

        <tr>
            <td class="border border-gray-300 px-4 py-2 text-center">4</td>
            <td class="border border-gray-300 px-4 py-2">Disiplin Bergaul</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->dsmt6->dbergaul ?? '-' }}</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->dsmt6->dbergaul) ? $student->getPredikatD($student->dsmt6->dbergaul) : '-' }}</td>
        </tr>

        <tr>
            <td class="border border-gray-300 px-4 py-2 text-center">5</td>
            <td class="border border-gray-300 px-4 py-2">Disiplin Berbusana</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->dsmt6->dberbusana ?? '-' }}</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->dsmt6->dberbusana) ? $student->getPredikatD($student->dsmt6->dberbusana) : '-' }}</td>
        </tr>

        <tr>
            <td class="border border-gray-300 px-4 py-2 text-center">6</td>
            <td class="border border-gray-300 px-4 py-2">Disiplin Menggunakan Fasilitas</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->dsmt6->dmenggunakanfasilitas ?? '-' }}</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->dsmt6->dmenggunakanfasilitas) ? $student->getPredikatD($student->dsmt6->dmenggunakanfasilitas) : '-' }}</td>
        </tr>

        <tr>
            <td class="border border-gray-300 px-4 py-2 text-center">7</td>
            <td class="border border-gray-300 px-4 py-2">Disiplin K3</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->dsmt6->dk3 ?? '-' }}</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->dsmt6->dk3) ? $student->getPredikatD($student->dsmt6->dk3) : '-' }}</td>
        </tr>

        <tr>
            <td class="border border-gray-300 px-4 py-2 text-center">8</td>
            <td class="border border-gray-300 px-4 py-2">Disiplin Berbahasa</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->dsmt6->dberbahasa ?? '-' }}</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->dsmt6->dberbahasa) ? $student->getPredikatD($student->dsmt6->dberbahasa) : '-' }}</td>
        </tr>

        <tr>
            <td class="border border-gray-300 px-4 py-2 text-center">9</td>
            <td class="border border-gray-300 px-4 py-2">Disiplin Bertindak & Menindak</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->dsmt6->dbertindak ?? '-' }}</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->dsmt6->dbertindak) ? $student->getPredikatD($student->dsmt6->dbertindak) : '-' }}</td>
        </tr>

        <tr>
            <td class="border border-gray-300 px-4 py-2 text-center">10</td>
            <td class="border border-gray-300 px-4 py-2">Disiplin Keamanan</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->dsmt6->dkeamanan ?? '-' }}</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->dsmt6->dkeamanan) ? $student->getPredikatD($student->dsmt6->dkeamanan) : '-' }}</td>
        </tr>
    </table>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <h4 class="font-bold">F. Penilaian Proyek Keagamaan dan Akhlak Mulia (10 Pembiasaan Akhlak Mulia)</h4>

    <table border="1" cellpadding="5" cellspacing="0" >
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
        <tr>
            <td class="border border-gray-300 px-4 py-2 text-center">1</td>
            <td class="border border-gray-300 px-4 py-2">Berbakti pada Orang Tua</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->psmt6->bpot ?? '-' }}</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->psmt6->bpot) ? $student->getPredikatD($student->psmt6->bpot) : '-' }}</td>
            <td rowspan="10" class="border border-gray-300 px-4 py-2">
                Ananda menunjukkan {{ $student->getPredikatD($student->dsmt6->dwaktu ?? 0) }} pada perilaku 10 Pembiasaan Akhlak Mulia di sekolah
            </td>
        </tr>

        <tr>
            <td class="border border-gray-300 px-4 py-2 text-center">2</td>
            <td class="border border-gray-300 px-4 py-2">Berbusana Muslim</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->psmt6->bmuslim ?? '-' }}</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->psmt6->bmuslim) ? $student->getPredikatD($student->psmt6->bmuslim) : '-' }}</td>
        </tr>

        <tr>
            <td class="border border-gray-300 px-4 py-2 text-center">3</td>
            <td class="border border-gray-300 px-4 py-2">Memelihara Adab Belajar sesuai Ajaran Agama Islam</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->psmt6->mabsaai ?? '-' }}</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->psmt6->mabsaai) ? $student->getPredikatD($student->psmt6->mabsaai) : '-' }}</td>
        </tr>

        <tr>
            <td class="border border-gray-300 px-4 py-2 text-center">4</td>
            <td class="border border-gray-300 px-4 py-2">Membaca dan Menghafal Al-Quran</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->psmt6->mma ?? '-' }}</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->psmt6->mma) ? $student->getPredikatD($student->psmt6->mma) : '-' }}</td>
        </tr>

        <tr>
            <td class="border border-gray-300 px-4 py-2 text-center">5</td>
            <td class="border border-gray-300 px-4 py-2">Memelihara Kebersihan Diri dan Lingkungan</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->psmt6->mkdl ?? '-' }}</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->psmt6->mkdl) ? $student->getPredikatD($student->psmt6->mkdl) : '-' }}</td>
        </tr>

        <tr>
            <td class="border border-gray-300 px-4 py-2 text-center">6</td>
            <td class="border border-gray-300 px-4 py-2">Mendirikan Sholat Fardhu dan Sholat Sunat</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->psmt6->msfss ?? '-' }}</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->psmt6->msfss) ? $student->getPredikatD($student->psmt6->msfss) : '-' }}</td>
        </tr>

        <tr>
            <td class="border border-gray-300 px-4 py-2 text-center">7</td>
            <td class="border border-gray-300 px-4 py-2">Melaksanakan Talim dan Ceramah Keagamaan</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->psmt6->mtck ?? '-' }}</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->psmt6->mtck) ? $student->getPredikatD($student->psmt6->mtck) : '-' }}</td>
        </tr>

        <tr>
            <td class="border border-gray-300 px-4 py-2 text-center">8</td>
            <td class="border border-gray-300 px-4 py-2">Terbiasa Melaksanakan Infaq Sejak Dini</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->psmt6->tmisd ?? '-' }}</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->psmt6->tmisd) ? $student->getPredikatD($student->psmt6->tmisd) : '-' }}</td>
        </tr>

        <tr>
            <td class="border border-gray-300 px-4 py-2 text-center">9</td>
            <td class="border border-gray-300 px-4 py-2">Melaksanakan Saum Wajib dan Saum Sunah</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->psmt6->mswss ?? '-' }}</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->psmt6->mswss) ? $student->getPredikatD($student->psmt6->mswss) : '-' }}</td>
        </tr>

        <tr>
            <td class="border border-gray-300 px-4 py-2 text-center">10</td>
            <td class="border border-gray-300 px-4 py-2">Cinta Tanah Air</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->psmt6->cta ?? '-' }}</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->psmt6->cta) ? $student->getPredikatD($student->psmt6->cta) : '-' }}</td>
        </tr>

    </table>

    <h4 class="font-bold">G. Penilaian Karakter Proyek Penguatan Profil Pelajar Pancasila dan Ketenagakerjaan</h4>

    <table border="1" cellpadding="5" cellspacing="0" >
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
                    $bpot = $student->psmt6->bpot ?? 0;
                    $bmuslim = $student->psmt6->bmuslim ?? 0;
                    $mabsaai = $student->psmt6->mabsaai ?? 0;
                    $mma = $student->psmt6->mma ?? 0;
                    $mkdl = $student->psmt6->mkdl ?? 0;
                    $msfss = $student->psmt6->msfss ?? 0;
                    $mtck = $student->psmt6->mtck ?? 0;
                    $tmisd = $student->psmt6->tmisd ?? 0;
                    $mswss = $student->psmt6->mswss ?? 0;
                    $cta = $student->psmt6->cta ?? 0;
            
                    // Hitung total dan rata-rata
                    $total = $bpot + $mabsaai + $mma + $mkdl + $msfss + $mtck + $tmisd + $mswss + $cta;
                    $average = $total / 9;

                    $dwaktu = $student->dsmt6->dwaktu ?? 0;
                    $dibadah = $student->dsmt6->dibadah ?? 0;
                    $dbelajar = $student->dsmt6->dbelajar ?? 0;
                    $dbergaul = $student->dsmt6->dbergaul ?? 0;
                    $dberbusana = $student->dsmt6->dberbusana ?? 0;
                    $dmenggunakanfasilitas = $student->dsmt6->dmenggunakanfasilitas ?? 0;
                    $dk3 = $student->dsmt6->dk3 ?? 0;
                    $dberbahasa = $student->dsmt6->dberbahasa ?? 0;
                    $dbertindak = $student->dsmt6->dbertindak ?? 0;
                    $dkeamanan = $student->dsmt6->dkeamanan ?? 0;

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
            
                    // Hitung predikat berdasarkan rata-rata
                    $predikat = $student->getPredikatA($average);
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
                <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->psmt6->cta ?? '-' }}</td> <!-- Tampilkan rata-rata dengan 2 desimal -->
                <td class="border border-gray-300 px-4 py-2 text-center">{{ $predikat }}</td>
                <td class="border border-gray-300 px-4 py-2">
                    Ananda menunjukkan {{ $predikat }} pada perilaku patriotisme, menjaga kebersihan lingkungan, memelihara nilai-nilai luhur Pancasila, melestarikan budaya, dan menjunjung cita-cita bangsa			
                </td>
            </tr>

            <tr>
                <td class="border border-gray-300 px-4 py-2">Gotong-royong</td>
                <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->psmt6->mkdl ?? '-' }}</td> <!-- Tampilkan rata-rata dengan 2 desimal -->
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

    <h4 class="font-bold">H. Catatan Perkembangan Karakter</h4>

    <table border="1" cellpadding="5">
    <tr>
        <td class="border border-gray-300 px-4 py-2 text-center">Ananda menunjukkan perkembangan karakter yang baik pada pembelajaran semester ini. Selain itu, ananda menunjukkan prestasi yang menonjol pada karakter religius dan kedisiplinan.</td>
    </tr>
    </table>

</body>
</html>
