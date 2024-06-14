<link rel="icon" href="{{ asset('bfp.png') }}" type="image/png">
<x-app-layout>
    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <x-alert.success></x-alert.success>

                    <x-validation-errors class="mb-4" :errors="$errors"/>

                    <div style="margin-top: 10px;">
                        <a href="{{ route('medicines.upload-medicines') }}" class="mt-4"><x-import-button>{{ __('Import File') }}</x-import-button></a>
                        <a href="{{ route('medicines.monthly-medicines-uniformed') }}" class="mt-4"><x-button>{{ __('Uniformed') }}</x-button></a>
                        <a href="{{ route('medicines.monthly-medicines-nonuniformed') }}" class="mt-4"><x-button>{{ __('Non-Uniformed') }}</x-button></a>
                        <a href="{{ route('medicines.monthly-medicines-civilian') }}" class="mt-4"><x-button>{{ __('Civilian') }}</x-button></a>
                        <a href="{{ route('medicines.monthly-medicines-dependent') }}" class="mt-4"><x-button>{{ __('Dependent') }}</x-button></a>
                    </div>
                    <br>

                    <div class="overflow-hidden overflow-x-auto min-w-full align-middle sm:rounded-md">
                        <table class="min-w-full divide-y divide-gray-200 border">
                        <thead>
                                <tr>
                                    <th rowspan ="2" colspan ="3"class="px-7 py-5 bg-red-50" style ="background-color:#645C8B; font-color:white;">
                                        <span class="text-center text-xs leading-4 font-medium uppercase tracking-wider">
                                                <p style ="font-size:25px; color:#FAF5F5;"> RETIRED </p>
                                        </span>
                                    </th>
                                </tr>
                            </thead>
                            <thead>
                            <tr style ="background-color:#CECAE1;">
                                <th class="px-6 py-4">
                                    <span class="text-left text-sm leading-4 font-medium text-violet-500 uppercase tracking-wider">Medicine Name</span>
                                </th>
                                <th class="px-6 py-4">
                                    <span class="text-left text-sm leading-4 font-medium text-violet-500 uppercase tracking-wider">Quantity</span>
                                </th>
                                <th class="px-6 py-4">
                                    <span class="text-left text-sm leading-4 font-medium text-violet-500 uppercase tracking-wider">Prescription Month</span>
                                </th>
                            </tr>
                            </thead>

                            <tbody class="bg-white divide-y divide-gray-200 divide-solid">
                        
                            @foreach($retired as $retired)
                                <tr class="bg-white" style="text-align:center; background-color: #FAFAFF;">
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        {{ $retired->lower_medicinename }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        {{ $retired->total_quantity }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                    {{ DateTime::createFromFormat('!m', $retired->prescription_month)->format('F') }} {{ \Carbon\Carbon::now()->year }}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!--div style="margin-top: 10px;">
                        <a href="{{ route('medicines.upload-medicines') }}" class="mt-4"><x-button>{{ __('Import File') }}</x-button></a>
                        <a href="{{ route('medicines.monthly-medicines-uniformed') }}" class="mt-4"><x-button>{{ __('Uniformed') }}</x-button></a>
                        <a href="{{ route('medicines.monthly-medicines-nonuniformed') }}" class="mt-4"><x-button>{{ __('Non-Uniformed') }}</x-button></a>
                        <a href="{{ route('medicines.monthly-medicines-civilian') }}" class="mt-4"><x-button>{{ __('Civilian') }}</x-button></a>
                        <a href="{{ route('medicines.monthly-medicines-dependent') }}" class="mt-4"><x-button>{{ __('Dependent') }}</x-button></a>
                        <a href="{{ route('medicines.monthly-medicines-retired') }}" class="mt-4"><x-button>{{ __('Retired') }}</x-button></a>
                    </div-->

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
