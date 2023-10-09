<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Informasi Pengguna') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <a href="http://localhost/pbw2/public" class="btn btn-dark" onclick="goBack()">Back</a><br><br>
                    <p>Full Name: {{ $user->fullname }}</p>
                    <p>Username: {{ $user->username }}</p>
                    <p>Phone Number: {{ $user->phoneNumber }}</p>
                    <p>Address: {{ $user->address }}</p>
                    <p>Religion: {{ $user->religion }}</p>
                    <p>Gender: {{ $user->gender == 0 ? 'Perempuan' : 'Laki-laki' }}</p>
                    <p>Birthdate: {{ \Carbon\Carbon::parse($user->birthdate)->format('d F Y') }}</p>
                    <p>Registered: {{ $user->created_at }}</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</x-app-layout>
/*
NAMA: MUHAMAD HUDANSAH
NIM: 6706223049
KELAS: 46-03
*/