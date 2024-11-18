{{-- <x-filament::page>
    @if ($this->student)
        <h1 class="text-xl font-bold">Raport Siswa: {{ $this->student->name }}</h1>
        <p>Kelas: {{ $this->student->classrooms->name ?? '-' }}</p>
        <p>NIS: {{ $this->student->nis ?? '-' }}</p>
        <p>NISN: {{ $this->student->nisn ?? '-' }}</p>
        <p>Nama Ayah: {{ $this->student->nayah ?? '-' }}</p>

        @if ($this->student->smt1)
            <table class="table-auto w-full border-collapse border border-gray-300 mt-4">
                <thead>
                    <tr>
                        <th class="border border-gray-300 px-4 py-2">Mata Pelajaran</th>
                        <th class="border border-gray-300 px-4 py-2">Nilai</th>
                        <th class="border border-gray-300 px-4 py-2">Predikat</th>
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
                        <td class="text-bold px-4 py-2"> A. Mata Pelajaran Umum</td>
                    </tr>   

                    <tr>
                        <td class="border border-gray-300 px-4 py-2">Pendidikan Agama Islam</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $this->student->smt1->pai ?? '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ isset($this->student->smt1->pai) ? getPredikat($this->student->smt1->pai) : '-' }}</td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">Pendidikan Pancasila</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $this->student->smt1->pp ?? '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ isset($this->student->smt1->pp) ? getPredikat($this->student->smt1->pp) : '-' }}</td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">Bahasa Indonesia</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $this->student->smt1->indo ?? '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ isset($this->student->smt1->indo) ? getPredikat($this->student->smt1->indo) : '-' }}</td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">PJOK</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $this->student->smt1->pjok ?? '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ isset($this->student->smt1->pjok) ? getPredikat($this->student->smt1->pjok) : '-' }}</td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">Sejarah</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $this->student->smt1->sejarah ?? '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ isset($this->student->smt1->sejarah) ? getPredikat($this->student->smt1->sejarah) : '-' }}</td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">Seni Budaya</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $this->student->smt1->sb ?? '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ isset($this->student->smt1->sb) ? getPredikat($this->student->smt1->sb) : '-' }}</td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">Bahasa Sunda</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $this->student->smt1->sunda ?? '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ isset($this->student->smt1->sunda) ? getPredikat($this->student->smt1->sunda) : '-' }}</td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">Bahasa Arab</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $this->student->smt1->arab ?? '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ isset($this->student->smt1->arab) ? getPredikat($this->student->smt1->arab) : '-' }}</td>
                    </tr>
                </tbody>
            </table>
        @else
            <p class="text-red-500">Data semester 1 tidak tersedia untuk siswa ini.</p>
        @endif
    @else
        <p class="text-red-500">Data raport tidak tersedia untuk siswa ini.</p>
    @endif
</x-filament::page> --}}

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
                        Ananda menunjukkan {{ getPredikat($this->student->smt1->pai ?? 0) }} dalam {{ $this->cpSemesters[0]->sm1 ?? '-' }}
                        </td>
                    </tr>

                    <!-- Contoh data Pendidikan Pancasila -->
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">2</td>
                        <td class="border border-gray-300 px-4 py-2">Pendidikan Pancasila</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $this->student->smt1->pp ?? '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ isset($this->student->smt1->pp) ? getPredikat($this->student->smt1->pp) : '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2">
                            Ananda menunjukkan {{ getPredikat($this->student->smt1->pp ?? 0) }} dalam {{ $this->cpSemesters[1]->sm1 ?? '-' }}
                        </td>
                    </tr>

                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">3</td>
                        <td class="border border-gray-300 px-4 py-2">Bahasa Indonesia</td>
                        <td class="border border-gray-300 px-4 py-2  text-center">{{ $this->student->smt1->indo ?? '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($this->student->smt1->indo) ? getPredikat($this->student->smt1->indo) : '-' }}</td>
                    </tr>
                    <tr>
                          <td class="border border-gray-300 px-4 py-2 text-center">4</td>
                        <td class="border border-gray-300 px-4 py-2">Pendidikan Jasmani, Olah Raga, dan Kesehatan</td>
                        <td class="border border-gray-300 px-4 py-2  text-center">{{ $this->student->smt1->pjok ?? '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($this->student->smt1->pjok) ? getPredikat($this->student->smt1->pjok) : '-' }}</td>
                    </tr>
                    <tr>
                          <td class="border border-gray-300 px-4 py-2 text-center">5</td>
                        <td class="border border-gray-300 px-4 py-2">Sejarah</td>
                        <td class="border border-gray-300 px-4 py-2  text-center">{{ $this->student->smt1->sejarah ?? '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($this->student->smt1->sejarah) ? getPredikat($this->student->smt1->sejarah) : '-' }}</td>
                    </tr>
                    <tr>
                          <td class="border border-gray-300 px-4 py-2 text-center">6</td>
                        <td class="border border-gray-300 px-4 py-2">Seni Budaya</td>
                        <td class="border border-gray-300 px-4 py-2  text-center">{{ $this->student->smt1->sb ?? '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($this->student->smt1->sb) ? getPredikat($this->student->smt1->sb) : '-' }}</td>
                    </tr>
                    <tr>
                          <td class="border border-gray-300 px-4 py-2 text-center">7</td>
                        <td class="border border-gray-300 px-4 py-2">Bahasa Sunda</td>
                        <td class="border border-gray-300 px-4 py-2  text-center">{{ $this->student->smt1->sunda ?? '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($this->student->smt1->sunda) ? getPredikat($this->student->smt1->sunda) : '-' }}</td>
                    </tr>
                    <tr>
                          <td class="border border-gray-300 px-4 py-2 text-center">8</td>
                        <td class="border border-gray-300 px-4 py-2">Bahasa Arab</td>
                        <td class="border border-gray-300 px-4 py-2  text-center">{{ $this->student->smt1->arab ?? '-' }}</td>
                        <td class="border border-gray-300 px-4 py-2  text-center">{{ isset($this->student->smt1->arab) ? getPredikat($this->student->smt1->arab) : '-' }}</td>
                    </tr>

                    <!-- Tambahkan mata pelajaran lain di sini -->
                </tbody>
            </table>
        @else
            <p class="text-red-500">Data semester 1 tidak tersedia untuk siswa ini.</p>
        @endif
    @else
        <p class="text-red-500">Data raport tidak tersedia untuk siswa ini.</p>
    @endif
</x-filament::page>
