<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>
  <div class="p-4">
    <div class="">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
          <form class="w-full max-w-lg" action="/sertifikat" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="flex flex-wrap -mx-3 mb-6">
              <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="judul_sertifikat">
                  Judul Sertifikat
                </label>
                <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="judul_sertifikat" type="text" name="judul_sertifikat" value="{{ old('judul_sertifikat') }}" required>
                @error('nama_peserta')
                <p class="text-red-500 text-xs italic mt-4">
                  {{ $message }}
                </p>
                @enderror
              </div>
              <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="nama_peserta">
                  Nama Peserta
                </label>
                <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="nama_peserta" type="text" name="nama_peserta" value="{{ old('nama_peserta') }}" required>
                @error('nama_peserta')
                <p class="text-red-500 text-xs italic mt-4">
                  {{ $message }}
                </p>
                @enderror
              </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
              <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="nomor_sertifikat">
                  Nomor Sertifikat
                </label>
                <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="nomor_sertifikat" type="text" name="nomor_sertifikat" value="{{ old('nomor_sertifikat') }}" required>
                @error('nomor_sertifikat')
                <p class="text-red-500 text-xs italic mt-4">
                  {{ $message }}
                </p>
                @enderror
              </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
              <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="nomor_sertifikat">
                  File Dokumen
                </label>
                <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="nomor_sertifikat" type="file" name="file" value="{{ old('file') }}" required>
                @error('file')
                <p class="text-red-500 text-xs italic mt-4">
                  {{ $message }}
                </p>
                @enderror
              </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
              <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="tanggal_keluar">
                  Tanggal Keluar / Tanggal Terbit Sertifikat
                </label>
                <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="tanggal_keluar" type="date" name="tanggal_keluar" value="{{ old('tanggal_keluar') }}" required>
                @error('tanggal_keluar')
                <p class="text-red-500 text-xs italic mt-4">
                  @enderror
              </div>
            </div>
            <div class="flex  px-1 gap-2 mb-6">

              <button class=" py-1 px-2 bg-blue-700  text-white">SIMPAN</button>

              <a href="/sertifikat" class=" py-1 px-2 bg-blue-700  text-white">BACK</a>


            </div>

        </div>
      </div>
</x-app-layout>