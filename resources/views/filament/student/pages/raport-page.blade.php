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

    <h6 class="font-bold">B. Catatan Akademik</h6>
<tr>
    <td class="border border-gray-300 px-4 py-2 text-center">Tingkatan prestasi, kedisiplinan, dan ketekunan dalam belajar. Semester depan harus lebih baik dari semester sekarang</td>
</tr>

    
</x-filament::page>
