<!DOCTYPE html>
<html>
    <div style="text-align: center; margin-bottom: 20px; border-bottom: 2px solid black; padding-bottom: 10px;">
        <div style="display: flex; align-items: center; justify-content: center;">
            <!-- Logo -->
            <div style="flex: 0 0 auto; margin-right: 20px;">
                <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('images/Logo_Azzainiyyah.png'))) }}" 
                     style="width: 100px; height: auto;">
            </div>
            <!-- Teks -->
            <div style="flex: 1; text-align: center;">
                <h2 style="margin: 0; font-weight: bold;">YAYASAN AZZAINIYYAH AL-MUBAROKAH</h2>
                <h3 style="margin: 0; font-weight: bold;">SMK AZZAINIYYAH</h3>
                <p style="margin: 5px 0; font-size: 12px;">
                    Jl. Pondok Halimun Nagrog Sinar Barokah Selabintana Sukabumi<br>
                    Telp. (0266) 225267 | e-mail: <a href="mailto:smk.azzainiyyah@gmail.com" style="color: blue; text-decoration: none;">smk.azzainiyyah@gmail.com</a>
                </p>
            </div>
        </div>
    </div>
    
<body>    
    <div style="display: flex; justify-content: center; align-items: center;">
        <table style="border-collapse: collapse; margin-top: 5px; margin-bottom: 5px; width: 70%; text-align: left;">
            <tr>
                <td style="padding: 5px; width: 30%;"><strong>Nama</strong></td>
                <td style="padding: 5px; width: 57%;">: {{ $student->name }}</td>
                <td style="padding: 5px; width: 10%;"><strong>Jurusan</strong></td>
                <td style="padding: 5px; width: 40%;">: {{ $student->departements->name_department ?? '-' }}</td>
            </tr>
            <tr>
                <td style="padding: 5px; width: 30%;"><strong>NIS/NISN</strong></td>
                <td style="padding: 5px; width: 0%;">: {{ $student->nis ?? '-' }} / {{ $student->nisn ?? '-' }}</td>
                <td style="padding: 5px; width: 0%;"><strong>Semester</strong></td>
                <td style="padding: 5px; width: 35%;">: Ganjil / 1</td>
            </tr>
            <tr>
                <td style="padding: 5px; width: 0%;"><strong>Kelas</strong></td>
                <td style="padding: 5px; width: 0%;">: {{ $student->smt1->kelas->name_kelas ?? '-' }} (Sepuluh)</td>
                <td style="padding: 5px; width: 10%;"><strong>Tahun Pelajaran</strong></td>
                <td style="padding: 5px; width: 20%;">: {{ $student->smt1->priode->name ?? '-' }}</td>
            </tr>
        </table>
    </div>

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
                <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->smt1->pai ?? '-' }}</td>
                <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->smt1->pai) ? $student->getPredikat($student->smt1->pai) : '-' }}</td>
                <td class="border border-gray-300 px-4 py-2">
                Ananda menunjukkan {{ $student->getPredikat($student->smt1->pai ?? 0) }} dalam {{ $cpSemesters[0]->pai ?? '-' }}
                </td>
            </tr>

            <!-- Pendidikan Pancasila -->
            <tr>
                <td class="border border-gray-300 px-4 py-2 text-center">2</td>
                <td class="border border-gray-300 px-4 py-2">Pendidikan Pancasila</td>
                <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->smt1->pp ?? '-' }}</td>
                <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->smt1->pp) ? $student->getPredikat($student->smt1->pp) : '-' }}</td>
                <td class="border border-gray-300 px-4 py-2">
                    Ananda menunjukkan {{ $student->getPredikat($student->smt1->pp ?? 0) }} dalam {{ $cpSemesters[0]->pp ?? '-' }}
                </td>
            </tr>

            <tr>
                <td class="border border-gray-300 px-4 py-2 text-center">3</td>
                <td class="border border-gray-300 px-4 py-2">Bahasa Indonesia</td>
                <td class="border border-gray-300 px-4 py-2  text-center">{{ $student->smt1->indo ?? '-' }}</td>
                <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($student->smt1->indo) ? $student->getPredikat($student->smt1->indo) : '-' }}</td>
                <td class="border border-gray-300 px-4 py-2">
                    Ananda menunjukkan {{ $student->getPredikat($student->smt1->indo ?? 0) }} dalam {{ $cpSemesters[0]->indo ?? '-' }}
                </td>
            </tr>

            <tr>
                <td class="border border-gray-300 px-4 py-2 text-center">4</td>
              <td class="border border-gray-300 px-4 py-2">Pendidikan Jasmani, Olah Raga, dan Kesehatan</td>
              <td class="border border-gray-300 px-4 py-2  text-center">{{ $student->smt1->pjok ?? '-' }}</td>
              <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($student->smt1->pjok) ? $student->getPredikat($student->smt1->pjok) : '-' }}</td>
              <td class="border border-gray-300 px-4 py-2">
                  Ananda menunjukkan {{ $student->getPredikat($student->smt1->pjok ?? 0) }} dalam {{ $cpSemesters[0]->pjok ?? '-' }}
              </td>
          </tr>

          <tr>
                <td class="border border-gray-300 px-4 py-2 text-center">5</td>
            <td class="border border-gray-300 px-4 py-2">Sejarah</td>
            <td class="border border-gray-300 px-4 py-2  text-center">{{ $student->smt1->sejarah ?? '-' }}</td>
            <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($student->smt1->sejarah) ? $student->getPredikat($student->smt1->sejarah) : '-' }}</td>
            <td class="border border-gray-300 px-4 py-2">
                Ananda menunjukkan {{ $student->getPredikat($student->smt1->sejarah ?? 0) }} dalam {{ $cpSemesters[0]->sejarah ?? '-' }}
            </td>
          </tr>

            <tr>
                <td class="border border-gray-300 px-4 py-2 text-center">6</td>
                <td class="border border-gray-300 px-4 py-2">Seni Budaya</td>
                <td class="border border-gray-300 px-4 py-2  text-center">{{ $student->smt1->sb ?? '-' }}</td>
                <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($student->smt1->sb) ? $student->getPredikat($student->smt1->sb) : '-' }}</td>
                <td class="border border-gray-300 px-4 py-2">
                    Ananda menunjukkan {{ $student->getPredikat($student->smt1->sb ?? 0) }} dalam {{ $cpSemesters[0]->sb ?? '-' }}
                </td>
            </tr>

            <tr>
              <td class="border border-gray-300 px-4 py-2 text-center">7</td>
              <td class="border border-gray-300 px-4 py-2">Bahasa Sunda</td>
              <td class="border border-gray-300 px-4 py-2  text-center">{{ $student->smt1->sunda ?? '-' }}</td>
              <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($student->smt1->sunda) ? $student->getPredikat($student->smt1->sunda) : '-' }}</td>
              <td class="border border-gray-300 px-4 py-2">
                  Ananda menunjukkan {{ $student->getPredikat($student->smt1->sunda ?? 0) }} dalam {{ $cpSemesters[0]->sunda ?? '-' }}
              </td>
          </tr>

          <tr>
                <td class="border border-gray-300 px-4 py-2 text-center">8</td>
                <td class="border border-gray-300 px-4 py-2">Bahasa Arab</td>
                <td class="border border-gray-300 px-4 py-2  text-center">{{ $student->smt1->arab ?? '-' }}</td>
                <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($student->smt1->arab) ? $student->getPredikat($student->smt1->arab) : '-' }}</td>
                <td class="border border-gray-300 px-4 py-2">
                    Ananda menunjukkan {{ $student->getPredikat($student->smt1->arab ?? 0) }} dalam {{ $cpSemesters[0]->arab ?? '-' }}
                </td>
          </tr>
            
          <tr>
            <td colspan="5" class="font-bold px-4 py-2">B. Mata Pelajaran Kejuruan</td>
          </tr>

          <tr>
                <td class="border border-gray-300 px-4 py-2 text-center">9</td>
                <td class="border border-gray-300 px-4 py-2">Matematika</td>
                <td class="border border-gray-300 px-4 py-2  text-center">{{ $student->usmt1->mtk ?? '-' }}</td>
                <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($student->usmt1->mtk) ? $student->getPredikat($student->usmt1->mtk) : '-' }}</td>
                <td class="border border-gray-300 px-4 py-2">
                    Ananda menunjukkan {{ $student->getPredikat($student->usmt1->mtk ?? 0) }} dalam {{ $cpSemesters[0]->mtk ?? '-' }}
                </td>
          </tr>

          <tr>
                <td class="border border-gray-300 px-4 py-2 text-center">10</td>
                <td class="border border-gray-300 px-4 py-2">Bahasa Inggris</td>
                <td class="border border-gray-300 px-4 py-2  text-center">{{ $student->usmt1->inggris ?? '-' }}</td>
                <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($student->usmt1->inggris) ? $student->getPredikat($student->usmt1->inggris) : '-' }}</td>
                <td class="border border-gray-300 px-4 py-2">
                    Ananda menunjukkan {{ $student->getPredikat($student->usmt1->inggris ?? 0) }} dalam {{ $cpSemesters[0]->inggris ?? '-' }}
                </td>
          </tr>
          
          <tr>
                <td class="border border-gray-300 px-4 py-2 text-center">11</td>
                <td class="border border-gray-300 px-4 py-2">Informatika/ Simulasi & Komunikasi Digital</td>
                <td class="border border-gray-300 px-4 py-2  text-center">{{ $student->usmt1->informatika ?? '-' }}</td>
                <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($student->usmt1->informatika) ? $student->getPredikat($student->usmt1->informatika) : '-' }}</td>
                <td class="border border-gray-300 px-4 py-2">
                    Ananda menunjukkan {{ $student->getPredikat($student->usmt1->informatika ?? 0) }} dalam {{ $cpSemesters[0]->informatika ?? '-' }}
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
                <td class="border border-gray-300 px-4 py-2  text-center">{{ $student->usmt1->fisika ?? '-' }}</td>
                <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($student->usmt1->fisika) ? $student->getPredikat($student->usmt1->fisika) : '-' }}</td>
                <td class="border border-gray-300 px-4 py-2">
                Ananda menunjukkan {{ $student->getPredikat($student->usmt1->fisika ?? 0) }} dalam {{ $cpSemesters[0]->fisika ?? '-' }}
                </td>
         </tr>

          <tr>
                <td class="border border-gray-300 px-4 py-2 text-center"></td>
                <td class="border border-gray-300 px-4 py-2">b. Kimia</td>
                <td class="border border-gray-300 px-4 py-2  text-center">{{ $student->usmt1->kimia ?? '-' }}</td>
                <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($student->usmt1->kimia) ? $student->getPredikat($student->usmt1->kimia) : '-' }}</td>
                <td class="border border-gray-300 px-4 py-2">
                Ananda menunjukkan {{ $student->getPredikat($student->usmt1->kimia ?? 0) }} dalam {{ $cpSemesters[0]->kimia ?? '-' }}
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
                <td class="border border-gray-300 px-4 py-2  text-center">{{ $student->usmt1->bisnis ?? '-' }}</td>
                <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($student->usmt1->bisnis) ? $student->getPredikat($student->usmt1->bisnis) : '-' }}</td>
                <td class="border border-gray-300 px-4 py-2">
                Ananda menunjukkan {{ $student->getPredikat($student->usmt1->bisnis ?? 0) }} dalam {{ $cpSemesters[0]->bisnis ?? '-' }}
                </td>
         </tr>

         <tr>
                <td class="border border-gray-300 px-4 py-2 text-center"></td>
                <td class="border border-gray-300 px-4 py-2">b. Profesi dan Kewirausahaan</td>
                <td class="border border-gray-300 px-4 py-2  text-center">{{ $student->usmt1->profesi ?? '-' }}</td>
                <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($student->usmt1->profesi) ? $student->getPredikat($student->usmt1->profesi) : '-' }}</td>
                <td class="border border-gray-300 px-4 py-2">
                Ananda menunjukkan {{ $student->getPredikat($student->usmt1->profesi ?? 0) }} dalam {{ $cpSemesters[0]->profesi ?? '-' }}
                </td>
        </tr>

        <tr>
                <td class="border border-gray-300 px-4 py-2 text-center"></td>
                <td class="border border-gray-300 px-4 py-2">c. Pemrograman Terstruktur</td>
                <td class="border border-gray-300 px-4 py-2  text-center">{{ $student->usmt1->pemtur ?? '-' }}</td>
                <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($student->usmt1->pemtur) ? $student->getPredikat($student->usmt1->pemtur) : '-' }}</td>
                <td class="border border-gray-300 px-4 py-2">
                Ananda menunjukkan {{ $student->getPredikat($student->usmt1->pemtur ?? 0) }} dalam {{ $cpSemesters[0]->pemtur ?? '-' }}
                </td>
        </tr>
        <tr>
                <td class="border border-gray-300 px-4 py-2 text-center"></td>
                <td class="border border-gray-300 px-4 py-2">d. Pemrograman Berorientasi Objek</td>
                <td class="border border-gray-300 px-4 py-2  text-center">{{ $student->usmt1->pbo ?? '-' }}</td>
                <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($student->usmt1->pbo) ? $student->getPredikat($student->usmt1->pbo) : '-' }}</td>
                <td class="border border-gray-300 px-4 py-2">
                Ananda menunjukkan {{ $student->getPredikat($student->usmt1->pbo ?? 0) }} dalam {{ $cpSemesters[0]->pbo ?? '-' }}
                </td>
        </tr>
        <tr>
                <td class="border border-gray-300 px-4 py-2 text-center"></td>
                <td class="border border-gray-300 px-4 py-2">e. Orientasi Dasar Pengembangan Perangkat Lunak dan Gim</td>
                <td class="border border-gray-300 px-4 py-2  text-center">{{ $student->usmt1->gim ?? '-' }}</td>
                <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($student->usmt1->gim) ? $student->getPredikat($student->usmt1->gim) : '-' }}</td>
                <td class="border border-gray-300 px-4 py-2">
                Ananda menunjukkan {{ $student->getPredikat($student->usmt1->gim ?? 0) }} dalam {{ $cpSemesters[0]->gim ?? '-' }}
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
                <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->esmt1->pramuka ?? '-' }}</td>
                <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->esmt1->pramuka) ? $student->getPredikatP($student->esmt1->pramuka) : '-' }}</td>
                <td rowspan="4" class="border border-gray-300 px-4 py-2">
                    Ananda menunjukkan {{ $student->getPredikatP($student->esmt1->pramuka ?? 0) }} sesuai harapan pada kegiatan Pengembangan Diri dan Kepribadian
                </td>
            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2">2. Kesenian</td>
                <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->esmt1->kesenian ?? '-' }}</td>
                <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->esmt1->kesenian) ? $student->getPredikatP($student->esmt1->kesenian) : '-' }}</td>
            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2">3. Pesantren Ramadhan</td>
                <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->esmt1->pramadan ?? '-' }}</td>
                <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->esmt1->pramadan) ? $student->getPredikatP($student->esmt1->pramadan) : '-' }}</td>
            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2">4. Olah Raga & Kesehatan</td>
                <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->esmt1->okesehatan ?? '-' }}</td>
                <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->esmt1->okesehatan) ? $student->getPredikatP($student->esmt1->okesehatan) : '-' }}</td>
            </tr>

            <!-- Data Proyek P5K -->
            <tr>
                <td rowspan="5" class="border border-gray-300 px-4 py-2 text-center">Proyek P5K</td>
                <td class="border border-gray-300 px-4 py-2">1. Proyek Keagamaan dan Akhlak Mulia</td>
                <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->esmt1->kmulia ?? '-' }}</td>
                <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->esmt1->kmulia) ? $student->getPredikatP($student->esmt1->kmulia) : '-' }}</td>
                <td rowspan="5" class="border border-gray-300 px-4 py-2">
                    Ananda menunjukkan {{ $student->getPredikatP($student->esmt1->kmulia ?? 0) }} sesuai harapan pada kegiatan Proyek P5K.
                </td>
            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2">2. Proyek Budaya Kerja</td>
                <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->esmt1->bkerja ?? '-' }}</td>
                <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->esmt1->bkerja) ? $student->getPredikatP($student->esmt1->bkerja) : '-' }}</td>
            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2">3. Proyek Kewirausahaan</td>
                <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->esmt1->kewirausahaan ?? '-' }}</td>
                <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->esmt1->kewirausahaan) ? $student->getPredikatP($student->esmt1->kewirausahaan) : '-' }}</td>
            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2">4. Berekayasa dan Berteknologi</td>
                <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->esmt1->berekayasa ?? '-' }}</td>
                <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->esmt1->berekayasa) ? $student->getPredikatP($student->esmt1->berekayasa) : '-' }}</td>
            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2">5. Keberkerjaan</td>
                <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->esmt1->kebekerjaan ?? '-' }}</td>
                <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->esmt1->kebekerjaan) ? $student->getPredikatP($student->esmt1->kebekerjaan) : '-' }}</td>
            </tr>

             {{-- data eksul tambahan --}}

             <tr>
                <td rowspan="9" class="border border-gray-300 px-4 py-2 text-center">Eskul Tambahan</td>
                <td class="border border-gray-300 px-4 py-2">1. video Editing</td>
                <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->esmt1->video ?? '-' }}</td>
                <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->esmt1->video) ? $student->getPredikatP($student->esmt1->video) : '-' }}</td>
                <td rowspan="9" class="border border-gray-300 px-4 py-2">
                    Ananda menunjukkan {{ $student->getPredikatP($student->esmt1->video ?? 0) }} sesuai harapan pada kegiatan Eskul.
                </td>
            </tr>

            <tr>                        
                <td class="border border-gray-300 px-4 py-2">2. potografer</td>
                <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->esmt1->foto ?? '-' }}</td>
                <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->esmt1->foto) ? $student->getPredikatP($student->esmt1->foto) : '-' }}</td>                       
            </tr>

            <tr>                        
                <td class="border border-gray-300 px-4 py-2">3. Desain</td>
                <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->esmt1->desain ?? '-' }}</td>
                <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->esmt1->desain) ? $student->getPredikatP($student->esmt1->desain) : '-' }}</td>                       
            </tr>

            <tr>                        
                <td class="border border-gray-300 px-4 py-2">4. Kaligrafi</td>
                <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->esmt1->kaligerafi ?? '-' }}</td>
                <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->esmt1->kaligerafi) ? $student->getPredikatP($student->esmt1->kaligerafi) : '-' }}</td>                       
            </tr>

            <tr>                        
                <td class="border border-gray-300 px-4 py-2">5. English Club</td>
                <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->esmt1->engclub ?? '-' }}</td>
                <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->esmt1->engclub) ? $student->getPredikatP($student->esmt1->engclub) : '-' }}</td>                       
            </tr>

            <tr>                        
                <td class="border border-gray-300 px-4 py-2">6. Hadroh</td>
                <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->esmt1->hadroh ?? '-' }}</td>
                <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->esmt1->hadroh) ? $student->getPredikatP($student->esmt1->hadroh) : '-' }}</td>                       
            </tr>

            <tr>                        
                <td class="border border-gray-300 px-4 py-2">7. Vollyball</td>
                <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->esmt1->voli ?? '-' }}</td>
                <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->esmt1->voli) ? $student->getPredikatP($student->esmt1->voli) : '-' }}</td>                       
            </tr>

            <tr>                        
                <td class="border border-gray-300 px-4 py-2">8. Futsal</td>
                <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->esmt1->futsal ?? '-' }}</td>
                <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->esmt1->futsal) ? $student->getPredikatP($student->esmt1->futsal) : '-' }}</td>                       
            </tr>

            <tr>                        
                <td class="border border-gray-300 px-4 py-2">9. Silat</td>
                <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->esmt1->silat ?? '-' }}</td>
                <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->esmt1->silat) ? $student->getPredikatP($student->esmt1->silat) : '-' }}</td>                       
            </tr>

          {{-- Data Presensi   --}}
          <tr>
            <td rowspan="3" class="border border-gray-300 px-4 py-2 text-center">Presensi</td>
            <td class="border border-gray-300 px-4 py-2 ">Sakit</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->esmt1->sakit ?? '-' }}</td>
            <td class="border border-gray-300 px-4 py-2 text-center">hari</td>
            <td rowspan="3" class="border border-gray-300 px-4 py-2">
                {{-- Ananda menunjukkan {{ $student->getPredikatP($student->esmt1->kmulia ?? 0) }} sesuai harapan pada kegiatan Proyek P5K. --}}
            </td>
        </tr>

        <tr>
            <td class="border border-gray-300 px-4 py-2 ">Izin</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->esmt1->izin ?? '-' }}</td>
            <td class="border border-gray-300 px-4 py-2 text-center">hari</td>
        </tr>

        <tr>
            <td class="border border-gray-300 px-4 py-2 ">Tanpa Keterangan</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->esmt1->alfa ?? '-' }}</td>
            <td class="border border-gray-300 px-4 py-2 text-center">hari</td>
        </tr>



        </tbody>
    </table>
    
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
            <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->dsmt1->dwaktu ?? '-' }}</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->dsmt1->dwaktu) ? $student->getPredikatD($student->dsmt1->dwaktu) : '-' }}</td>
            <td rowspan="10" class="border border-gray-300 px-4 py-2">
                Ananda menunjukkan {{ $student->getPredikatD($student->dsmt1->dwaktu ?? 0) }} pada prilaku 10 disiplin Azzainiyyah.
            </td>
        </tr>

        <tr>
            <td class="border border-gray-300 px-4 py-2 text-center">2</td>
            <td class="border border-gray-300 px-4 py-2">Disiplin Ibadah</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->dsmt1->dibadah ?? '-' }}</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->dsmt1->dibadah) ? $student->getPredikatD($student->dsmt1->dibadah) : '-' }}</td>
        </tr>

        <tr>
            <td class="border border-gray-300 px-4 py-2 text-center">3</td>
            <td class="border border-gray-300 px-4 py-2">Disiplin Belajar</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->dsmt1->dbelajar ?? '-' }}</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->dsmt1->dbelajar) ? $student->getPredikatD($student->dsmt1->dbelajar) : '-' }}</td>
        </tr>

        <tr>
            <td class="border border-gray-300 px-4 py-2 text-center">4</td>
            <td class="border border-gray-300 px-4 py-2">Disiplin Bergaul</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->dsmt1->dbergaul ?? '-' }}</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->dsmt1->dbergaul) ? $student->getPredikatD($student->dsmt1->dbergaul) : '-' }}</td>
        </tr>

        <tr>
            <td class="border border-gray-300 px-4 py-2 text-center">5</td>
            <td class="border border-gray-300 px-4 py-2">Disiplin Berbusana</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->dsmt1->dberbusana ?? '-' }}</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->dsmt1->dberbusana) ? $student->getPredikatD($student->dsmt1->dberbusana) : '-' }}</td>
        </tr>

        <tr>
            <td class="border border-gray-300 px-4 py-2 text-center">6</td>
            <td class="border border-gray-300 px-4 py-2">Disiplin Menggunakan Fasilitas</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->dsmt1->dmenggunakanfasilitas ?? '-' }}</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->dsmt1->dmenggunakanfasilitas) ? $student->getPredikatD($student->dsmt1->dmenggunakanfasilitas) : '-' }}</td>
        </tr>

        <tr>
            <td class="border border-gray-300 px-4 py-2 text-center">7</td>
            <td class="border border-gray-300 px-4 py-2">Disiplin K3</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->dsmt1->dk3 ?? '-' }}</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->dsmt1->dk3) ? $student->getPredikatD($student->dsmt1->dk3) : '-' }}</td>
        </tr>

        <tr>
            <td class="border border-gray-300 px-4 py-2 text-center">8</td>
            <td class="border border-gray-300 px-4 py-2">Disiplin Berbahasa</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->dsmt1->dberbahasa ?? '-' }}</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->dsmt1->dberbahasa) ? $student->getPredikatD($student->dsmt1->dberbahasa) : '-' }}</td>
        </tr>

        <tr>
            <td class="border border-gray-300 px-4 py-2 text-center">9</td>
            <td class="border border-gray-300 px-4 py-2">Disiplin Bertindak & Menindak</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->dsmt1->dbertindak ?? '-' }}</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->dsmt1->dbertindak) ? $student->getPredikatD($student->dsmt1->dbertindak) : '-' }}</td>
        </tr>

        <tr>
            <td class="border border-gray-300 px-4 py-2 text-center">10</td>
            <td class="border border-gray-300 px-4 py-2">Disiplin Keamanan</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->dsmt1->dkeamanan ?? '-' }}</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->dsmt1->dkeamanan) ? $student->getPredikatD($student->dsmt1->dkeamanan) : '-' }}</td>
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
            <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->psmt1->bpot ?? '-' }}</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->psmt1->bpot) ? $student->getPredikatD($student->psmt1->bpot) : '-' }}</td>
            <td rowspan="10" class="border border-gray-300 px-4 py-2">
                Ananda menunjukkan {{ $student->getPredikatD($student->dsmt1->dwaktu ?? 0) }} pada perilaku 10 Pembiasaan Akhlak Mulia di sekolah
            </td>
        </tr>

        <tr>
            <td class="border border-gray-300 px-4 py-2 text-center">2</td>
            <td class="border border-gray-300 px-4 py-2">Berbusana Muslim</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->psmt1->bmuslim ?? '-' }}</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->psmt1->bmuslim) ? $student->getPredikatD($student->psmt1->bmuslim) : '-' }}</td>
        </tr>

        <tr>
            <td class="border border-gray-300 px-4 py-2 text-center">3</td>
            <td class="border border-gray-300 px-4 py-2">Memelihara Adab Belajar sesuai Ajaran Agama Islam</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->psmt1->mabsaai ?? '-' }}</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->psmt1->mabsaai) ? $student->getPredikatD($student->psmt1->mabsaai) : '-' }}</td>
        </tr>

        <tr>
            <td class="border border-gray-300 px-4 py-2 text-center">4</td>
            <td class="border border-gray-300 px-4 py-2">Membaca dan Menghafal Al-Quran</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->psmt1->mma ?? '-' }}</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->psmt1->mma) ? $student->getPredikatD($student->psmt1->mma) : '-' }}</td>
        </tr>

        <tr>
            <td class="border border-gray-300 px-4 py-2 text-center">5</td>
            <td class="border border-gray-300 px-4 py-2">Memelihara Kebersihan Diri dan Lingkungan</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->psmt1->mkdl ?? '-' }}</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->psmt1->mkdl) ? $student->getPredikatD($student->psmt1->mkdl) : '-' }}</td>
        </tr>

        <tr>
            <td class="border border-gray-300 px-4 py-2 text-center">6</td>
            <td class="border border-gray-300 px-4 py-2">Mendirikan Sholat Fardhu dan Sholat Sunat</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->psmt1->msfss ?? '-' }}</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->psmt1->msfss) ? $student->getPredikatD($student->psmt1->msfss) : '-' }}</td>
        </tr>

        <tr>
            <td class="border border-gray-300 px-4 py-2 text-center">7</td>
            <td class="border border-gray-300 px-4 py-2">Melaksanakan Talim dan Ceramah Keagamaan</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->psmt1->mtck ?? '-' }}</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->psmt1->mtck) ? $student->getPredikatD($student->psmt1->mtck) : '-' }}</td>
        </tr>

        <tr>
            <td class="border border-gray-300 px-4 py-2 text-center">8</td>
            <td class="border border-gray-300 px-4 py-2">Terbiasa Melaksanakan Infaq Sejak Dini</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->psmt1->tmisd ?? '-' }}</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->psmt1->tmisd) ? $student->getPredikatD($student->psmt1->tmisd) : '-' }}</td>
        </tr>

        <tr>
            <td class="border border-gray-300 px-4 py-2 text-center">9</td>
            <td class="border border-gray-300 px-4 py-2">Melaksanakan Saum Wajib dan Saum Sunah</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->psmt1->mswss ?? '-' }}</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->psmt1->mswss) ? $student->getPredikatD($student->psmt1->mswss) : '-' }}</td>
        </tr>

        <tr>
            <td class="border border-gray-300 px-4 py-2 text-center">10</td>
            <td class="border border-gray-300 px-4 py-2">Cinta Tanah Air</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->psmt1->cta ?? '-' }}</td>
            <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($student->psmt1->cta) ? $student->getPredikatD($student->psmt1->cta) : '-' }}</td>
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
                    $bpot = $student->psmt1->bpot ?? 0;
                    $bmuslim = $student->psmt1->bmuslim ?? 0;
                    $mabsaai = $student->psmt1->mabsaai ?? 0;
                    $mma = $student->psmt1->mma ?? 0;
                    $mkdl = $student->psmt1->mkdl ?? 0;
                    $msfss = $student->psmt1->msfss ?? 0;
                    $mtck = $student->psmt1->mtck ?? 0;
                    $tmisd = $student->psmt1->tmisd ?? 0;
                    $mswss = $student->psmt1->mswss ?? 0;
                    $cta = $student->psmt1->cta ?? 0;
            
                    // Hitung total dan rata-rata
                    $total = $bpot + $mabsaai + $mma + $mkdl + $msfss + $mtck + $tmisd + $mswss + $cta;
                    $average = $total / 9;

                    $dwaktu = $student->dsmt1->dwaktu ?? 0;
                    $dibadah = $student->dsmt1->dibadah ?? 0;
                    $dbelajar = $student->dsmt1->dbelajar ?? 0;
                    $dbergaul = $student->dsmt1->dbergaul ?? 0;
                    $dberbusana = $student->dsmt1->dberbusana ?? 0;
                    $dmenggunakanfasilitas = $student->dsmt1->dmenggunakanfasilitas ?? 0;
                    $dk3 = $student->dsmt1->dk3 ?? 0;
                    $dberbahasa = $student->dsmt1->dberbahasa ?? 0;
                    $dbertindak = $student->dsmt1->dbertindak ?? 0;
                    $dkeamanan = $student->dsmt1->dkeamanan ?? 0;

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
                <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->psmt1->cta ?? '-' }}</td> <!-- Tampilkan rata-rata dengan 2 desimal -->
                <td class="border border-gray-300 px-4 py-2 text-center">{{ $predikat }}</td>
                <td class="border border-gray-300 px-4 py-2">
                    Ananda menunjukkan {{ $predikat }} pada perilaku patriotisme, menjaga kebersihan lingkungan, memelihara nilai-nilai luhur Pancasila, melestarikan budaya, dan menjunjung cita-cita bangsa			
                </td>
            </tr>

            <tr>
                <td class="border border-gray-300 px-4 py-2">Gotong-royong</td>
                <td class="border border-gray-300 px-4 py-2 text-center">{{ $student->psmt1->mkdl ?? '-' }}</td> <!-- Tampilkan rata-rata dengan 2 desimal -->
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

    <table style="width: 100%; margin-top: 20px;">
        <tr>
            <td style="width: 20%; padding: 5px;">Diberikan di</td>
            <td style="width: 2%; padding: 5px;">:</td>
            <td style="width: 78%; padding: 5px;">Sukabumi</td>
        </tr>
        <tr>
            <td style="padding: 5px;">Pada tanggal</td>
            <td style="padding: 5px;">:</td>
            <td style="padding: 5px;" id="current-date">__________________</td>
        </tr>
        <tr style="height: 10px;"></tr>
    
        <!-- Wali Kelas -->
        <tr>
            <td colspan="3"></td>                                                                                                                  
            <td style="text-align: center;">Wali Kelas</td>
        </tr>
    
        <tr style="height: 50px;"></tr>
    
        <tr>
            <td colspan="2"></td>
            <td></td>
            <td style="text-align: center;">
                @if($tandaTangan['wali_kelas'])
                <img src="data:image/png;base64,{{ base64_encode(file_get_contents(storage_path('app/public/' . $tandaTangan['wali_kelas']->path))) }}" 
                     alt="Tanda Tangan Wali Kelas" 
                     style="height: 70px; display: block; margin: 0 auto;">
                <p>{{ $tandaTangan['wali_kelas']->teacher->name ?? 'Nama Wali Kelas' }}</p>
            @else
                <p>__________________</p>
            @endif
            
            </td>
        </tr>
    
        <tr>
            <td colspan="2"></td>
            <td style="text-align: center;">Mengetahui</td>            
        </tr>
    
        <tr style="height: 50px;"></tr>
    
        <tr>
            <td style="text-align: center;">Orangtua/Wali</td>
            <td></td>
            <td></td>
            <td style="text-align: center;">Kepala Sekolah</td>
        </tr>
    
        <tr style="height: 50px;"></tr>
    
        <tr>
            <td colspan="2"></td>
            <td></td>
            <td style="text-align: center;">
                <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('images/ttdkps.png'))) }}" 
                alt="Tanda Tangan Kepala Sekolah" 
                style="height: 150px; display: block; margin: 0 auto;">

                <p>Ai Imas Mursyidah Zein, M.E</p>
            </td>
        </tr>
    </table>
    
    <script>
        // Script untuk menampilkan tanggal hari ini
        const currentDateElement = document.getElementById('current-date');
        const today = new Date();
        const formattedDate = today.toLocaleDateString('id-ID', {
            day: '2-digit',
            month: 'long',
            year: 'numeric'
        });
        currentDateElement.textContent = formattedDate;
    </script>

</body>
</html>
