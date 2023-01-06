<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      @section('title', ' | Sertifikat' )

    </h2>
  </x-slot>
  <div class="p-4">
    <div class="">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
          <div class=" grid grid-cols-2">
            <div class=" py-1 w-full flex">
              <a href="/add" class=" bg-blue-600 px-2 py-1 w-1/8  flex text-white">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span>Sertifikat</span>
              </a>
            </div>
            <div class=" grid justify-end">
              <form action="" method="get">
                <input type="text" name="cari" value="{{request('cari')}}" class=" py-1 px-1 capitalize" placeholder=" cari judul sertifikat">
                <button class="bg-blue-600 px-2 py-1 text-white">CARI</button>
                <a href="/sertifikat" type="reset" class="bg-blue-600 px-2 py-1 text-white">RESET</a>
              </form>
            </div>
          </div>
          <div class="w-full overflow-x-scroll fixed-top">
            <table class="w-full border-collapse  ">
              <thead class="bg-grey-lighter">
                <tr class=" text-xs">
                  <th class="w-10 border px-4 py-2">No</th>
                  <th class="w-10 border px-4 py-2">ID</th>
                  <th class="w-1/2 border px-4 py-2">Judul Sertifikat</th>
                  <th class="w-1/6 border px-4 py-2">Nama Peserta</th>
                  <th class="w-1/6 border px-4 py-2">Nomor Sertifikat</th>
                  <th class="w-1/6 border px-4 py-2">Tanggal Terbit <br>Sertifikat</th>
                  <th class="w-1/6 border px-4 py-2">Tempat Kegiatan</th>
                  <th class="w-1/6 border px-4 py-2">Penyelenggara</th>
                  <th class="w-1/6 border px-4 py-2">Lihat File</th>
                  <th class="w-1/6 border px-4 py-2">File <br> download</th>
                  <th class="w-1/6 border px-4 py-2">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @if($dataSertifikat->count() != null)
                @foreach ($dataSertifikat as $s)
                <tr class="hover:bg-grey-lighter text-xs even:bg-gray-100">
                  <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                  <td class="border px-4 py-2">{{ $s->id }}</td>
                  <td class="border px-4 py-2">{{ $s->judul_sertifikat }}</td>
                  <td class="border px-4 py-2">{{ $s->nama_peserta }}</td>
                  <td class="border px-4 py-2 text-center">{{ $s->nomor_sertifikat }}</td>
                  <td class="border px-4 py-2 text-center">{{ $s->tanggal_keluar }}</td>
                  <td class="border px-4 py-2">{{ $s->tempat_kegiatan }}</td>
                  <td class="border px-4 py-2">{{ $s->penyelenggara }}</td>
                  <td class="border px-4 py-2"><a href="{{ asset('files/'.$s->file) }}" target="_blank" class="text-blue-500 hover:text-blue-800">Lihat</a></td>
                  <td class="border px-4 py-2 text-center"><a href="{{ route('sertifikat.download', $s->id) }}" class="text-blue-500 hover:text-blue-800 text-center">File</a></td>

                  <td class="border px-4 py-2">
                    <form class="inline" action="/sertifikat/{{$s->id}}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="text-red-500 hover:text-red-800" onclick="return confirm('Yakin ingin menghapus sertifikat ini?')">Hapus</button>
                    </form>
                  </td>
                </tr>
                @endforeach
                @else
                <tr class=" border">
                  <td class=" text-red-600 text-center" colspan="11">
                    Tidak ada data yang ditemukan
                  </td>
                </tr>
                @endif
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>