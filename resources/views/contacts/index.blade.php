<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Kontak</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
    <h1 class="text-3xl font-bold mb-4">Pesan dari Pengguna</h1>
    <table class="min-w-full bg-white rounded-lg shadow-md">
        <thead>
            <tr class="bg-gray-200">
                <th class="p-4 text-left">Nama</th>
                <th class="p-4 text-left">Email</th>
                <th class="p-4 text-left">Pesan</th>
                <th class="p-4 text-left">Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
                <tr class="border-b">
                    <td class="p-4">{{ $contact->name }}</td>
                    <td class="p-4">{{ $contact->email }}</td>
                    <td class="p-4">{{ $contact->message }}</td>
                    <td class="p-4">{{ $contact->created_at->format('d-m-Y H:i') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
