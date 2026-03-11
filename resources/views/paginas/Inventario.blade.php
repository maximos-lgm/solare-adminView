@extends('layouts.app')

@section('title', 'Inventario')
@section('label', 'Almacén')
@section('header_title', 'Inventario')

@section('actions')
    <button class="border border-[#958174] text-[#958174] px-4 py-2 text-[11px] font-bold uppercase hover:bg-[#958174] hover:text-white transition">Exportar</button>
    <button class="bg-[#958174] text-white px-4 py-2 text-[11px] font-bold uppercase hover:bg-[#50594e] transition">+ Agregar</button>
@endsection

@section('content')
<div class="flex flex-col md:flex-row gap-4 mb-6">
    <div class="relative flex-1">
        <input type="text" class="w-full pl-10 pr-4 py-2 bg-white border border-gray-200 text-sm focus:ring-[#958174] focus:border-[#958174]" placeholder="Buscar por nombre o SKU...">
        <span class="absolute left-3 top-2.5 text-gray-400 italic">⌕</span>
    </div>
    <div class="flex gap-2 overflow-x-auto pb-2">
        @foreach(['Todos', 'Sofás', 'Mesas', 'Sillas', 'Tumbonas'] as $cat)
            <button class="whitespace-nowrap px-4 py-1.5 text-[10px] font-bold uppercase border border-gray-200 bg-white text-gray-400 hover:border-[#958174] hover:text-[#958174] transition">{{ $cat }}</button>
        @endforeach
    </div>
</div>

<div class="bg-white border border-gray-100 shadow-sm overflow-hidden">
    <table class="w-full text-sm text-left">
        <thead class="text-[10px] text-gray-400 uppercase bg-gray-50 border-b">
            <tr>
                <th class="px-6 py-4">SKU</th>
                <th class="px-6 py-4">Producto</th>
                <th class="px-6 py-4">Categoría</th>
                <th class="px-6 py-4">Stock</th>
                <th class="px-6 py-4">Precio</th>
                <th class="px-6 py-4">Estado</th>
                <th class="px-6 py-4"></th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-100 text-gray-600">
            <tr class="hover:bg-[#faf9f7] transition">
                <td class="px-6 py-4 font-mono text-[11px] text-[#958174] font-bold">SL-001</td>
                <td class="px-6 py-4 font-medium text-gray-900">Sofá Exterior Málaga 3P</td>
                <td class="px-6 py-4">Sofás</td>
                <td class="px-6 py-4">
                    <div class="flex items-center gap-3">
                        <div class="w-16 bg-gray-100 h-1 rounded-full">
                            <div class="bg-[#798273] h-1 rounded-full" style="width: 70%"></div>
                        </div>
                        <span class="font-bold">12</span>
                    </div>
                </td>
                <td class="px-6 py-4 font-semibold text-gray-900">$4,200</td>
                <td class="px-6 py-4">
                    <span class="bg-green-100 text-green-800 text-[10px] font-bold px-2.5 py-1 rounded">OK</span>
                </td>
                <td class="px-6 py-4">
                    <button class="text-[#958174] hover:underline font-medium">Editar</button>
                </td>
            </tr>
            <tr class="hover:bg-[#faf9f7]">
                <td class="px-6 py-4 font-mono text-[11px] text-[#958174] font-bold">SL-003</td>
                <td class="px-6 py-4 font-medium text-gray-900">Mesa Olivo 180cm</td>
                <td class="px-6 py-4">Mesas</td>
                <td class="px-6 py-4">
                    <div class="flex items-center gap-3">
                        <div class="w-16 bg-gray-100 h-1 rounded-full">
                            <div class="bg-orange-400 h-1 rounded-full" style="width: 20%"></div>
                        </div>
                        <span class="font-bold">3</span>
                    </div>
                </td>
                <td class="px-6 py-4 font-semibold text-gray-900">$2,800</td>
                <td class="px-6 py-4">
                    <span class="bg-orange-100 text-orange-800 text-[10px] font-bold px-2.5 py-1 rounded">BAJO</span>
                </td>
                <td class="px-6 py-4">
                    <button class="text-[#958174] hover:underline font-medium">Editar</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection