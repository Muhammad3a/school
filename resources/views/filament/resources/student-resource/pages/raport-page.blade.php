<x-filament::page>
    <div>
        <h1 class="text-xl font-bold">Raport Siswa: {{ $this->student->name }}</h1>
        <p>Kelas: {{ $this->student->kelas }}</p> <p>Kelas: {{ $this->student->kelas }}</p>
        <p>NIS: {{ $this->student->nis }}</p>
        <p>NISN: {{ $this->student->nisn }}</p>
        <p>Nama Ayah: {{ $this->student->nayah }}</p>

        <table class="table-auto w-full border-collapse border border-gray-300 mt-4">
            <thead>
                <tr>
                    <th class="border border-gray-300 px-4 py-2">Mata Pelajaran</th>
                    <th class="border border-gray-300 px-4 py-2">Nilai</th>
                    <th class="border border-gray-300 px-4 py-2">Predikat</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border border-gray-300 px-4 py-2">PAI</td>
                    @if(isset($this->student->pais))
                        @foreach ($this->student->pais as $score)
                            <tr>
                                <td class="border border-gray-300 px-4 py-2"></td>
                                <td class="border border-gray-300 px-4 py-2">{{ $score->score }}</td>
                            </tr>
                        @endforeach
                    @endif
                </tr>
                <tr>
                    <td class="border border-gray-300 px-4 py-2">Pancasila</td>
                    @if(isset($this->student->pancasilaScores))
                        @foreach ($this->student->pancasilaScores as $score)
                            <tr>
                                <td class="border border-gray-300 px-4 py-2"></td>
                                <td class="border border-gray-300 px-4 py-2">Semester {{ $score->semester }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $score->score }}</td>
                            </tr>
                        @endforeach
                    @endif
                </tr>
                <tr>
                    <td class="border border-gray-300 px-4 py-2">Bahasa Indonesia</td>
                    @if(isset($this->student->bahasaIndonesiaScores))
                        @foreach ($this->student->bahasaIndonesiaScores as $score)
                            <tr>
                                <td class="border border-gray-300 px-4 py-2"></td>
                                <td class="border border-gray-300 px-4 py-2">Semester {{ $score->semester }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $score->score }}</td>
                            </tr>
                        @endforeach
                    @endif
                </tr>
                <tr>
                    <td class="border border-gray-300 px-4 py-2">Bahasa Inggris</td>
                    @if(isset($this->student->bahasaInggrisScores))
                        @foreach ($this->student->bahasaInggrisScores as $score)
                            <tr>
                                <td class="border border-gray-300 px-4 py-2"></td>
                                <td class="border border-gray-300 px-4 py-2">Semester {{ $score->semester }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $score->score }}</td>
                            </tr>
                        @endforeach
                    @endif
                </tr>
            </tbody>
        </table>
    </div>
</x-filament::page>
