@extends('assignment/application')

@section('konten')
<div class=" px-[15%] pt-[8%] text-[#fff] drop-shadow-2xl">
    <h1 class="text-7xl font-extrabold ">Bersantailah Sejenak di COFFEE CAFE</h1>
    <p class="text-xl pt-5">Pilihlah kopi terbaik untuk bersantai menghadapi cobaan hidupmu</p>
</div>
<div class="relative overflow-x-auto px-[15%] pt-[8%] text-white">
    <table class="w-full text-sm text-left text-white dark:text-[#ebebeb]">
        <thead class="text-xs uppercase bg-[#000000b5] dark:bg-[#000000b5]">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nama
                </th>
                <th scope="col" class="px-6 py-3">
                    Harga
                </th>
                <th scope="col" class="px-6 py-3">
                    Deskripsi
                </th>
                <th scope="col" class="px-6 py-3">
                    Detail
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr class="bg-[#00000087] border-b dark:bg-[#00000087] dark:border-black">
                    <td class="px-6 py-4">
                        {{ $item->nama }}
                    </td>
                    <td class="px-6 py-4">
                        Rp{{ $item->harga }},-
                    </td>
                    <td class="px-6 py-4">
                        {{ $item->deskripsi }}
                    </td>
                    <td class="px-6 py-4">
                        <a href="{{ url('/'.$item->nama) }}" target="_blank" rel="noopener noreferrer"
                            class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-black-500 to-gray-500 group-hover:from-black-500 group-hover:to-gray-500 hover:text-white dark:text-white focus:ring-4 focus:ring-white-200 dark:focus:ring-white-800">
                            <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-60">
                                Detail
                            </span>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-white">
        {{ $data->links() }}
    </div>
</div>
@endsection