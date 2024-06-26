<link rel="icon" href="{{ asset('bfp.png') }}" type="image/png">
<x-app-layout>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <x-alert.success></x-alert.success>

                    <x-validation-errors class="mb-4" :errors="$errors"/>

                    <form action="{{ route('import_parse') }}" method="POST" class="mb-4" enctype="multipart/form-data">
                        @csrf

                        <div>
                            <x-label for="csv_file" :value="__('CSV file to import')"/>

                            <x-input id="csv_file" class="block mt-1 w-full" type="file" name="csv_file" required/>
                        </div>

                        <div class="mt-4 flex items-center">
                            <x-label for="header" :value="__('File contains header row?')"/>

                            <x-input id="header" class="ml-1" type="checkbox" name="header" checked/>
                        </div>

                        <x-import-button class="mt-4">
                            {{ __('Submit') }}
                        </x-import-button>
                    </form>

                    <div class="overflow-hidden overflow-x-auto min-w-full align-middle sm:rounded-md">
                        <table class="min-w-full divide-y divide-gray-200 border">
                            <thead>
                            <tr>
                                <th class="px-6 py-4" style ="background-color:#CECAE1; font-color:white;">
                                    <span class="text-left text-sm leading-4 font-medium uppercase tracking-wider">Medicine Name</span>
                                </th>
                                <th class="px-6 py-4" style ="background-color:#CECAE1; font-color:white;">
                                    <span class="text-left text-sm leading-4 font-medium  uppercase tracking-wider">Quantity</span>
                                </th>
                                <th class="px-6 py-4" style ="background-color:#CECAE1; font-color:white;">
                                    <span class="text-left text-sm leading-4 font-medium  uppercase tracking-wider">Patient Name</span>
                                </th>
                                <th class="px-6 py-4" style ="background-color:#CECAE1; font-color:white;">
                                    <span class="text-left text-sm leading-4 font-medium  uppercase tracking-wider">Patient Type</span>
                                </th>
                                <th class="px-6 py-4" style ="background-color:#CECAE1; font-color:white;">
                                    <span class="text-left text-sm leading-4 font-medium uppercase tracking-wider">Prescription Date</span>
                                </th>
                                <th class="px-6 py-4" style ="background-color:#CECAE1; font-color:white;">
                                    <span class="text-left text-sm leading-4 font-medium uppercase tracking-wider">Physician Name</span>
                                </th>
                            </tr>
                            </thead>

                            <tbody class="bg-white divide-y divide-gray-200 divide-solid">
                            @foreach($medicines as $medicine)
                            <tr class="bg-white" style="text-align:center; background-color: #FAFAFF;">
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        {{ $medicine->medicine_name }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        {{ $medicine->quantity }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        {{ $medicine->patient_name }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        {{ $medicine->patient_type }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        {{ $medicine->prescription_date }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        {{ $medicine->physician_name }}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    
                    {{ $medicines->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
