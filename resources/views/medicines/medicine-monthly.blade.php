<link rel="icon" href="{{ asset('bfp.png') }}" type="image/png">
<x-app-layout>
 

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <x-alert.success></x-alert.success>

                    <x-validation-errors class="mb-4" :errors="$errors"/>

                    <div class="overflow-hidden overflow-x-auto min-w-full align-middle sm:rounded-md">
                        <table class="min-w-full divide-y divide-gray-200 border">
                            <thead>
                            <tr>
                                <th class="px-6 py-3 bg-gray-50">
                                    <span class="text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Medicine Name</span>
                                </th>
                                <th class="px-6 py-3 bg-gray-50">
                                    <span class="text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Quantity</span>
                                </th>
                                <th class="px-6 py-3 bg-gray-50">
                                    <span class="text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Prescription Date</span>
                                </th>
                            </tr>
                            </thead>

                            <tbody class="bg-white divide-y divide-gray-200 divide-solid">
                            @foreach($qty as $qty)
                                <tr class="bg-white">
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        {{ $qty->lower_medicinename }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        {{ $qty->total_quantity }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        {{ DateTime::createFromFormat('!m', $qty->prescription_month )->format('F') }}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div style="margin-top: 10px;">
                        <a href="{{ route('medicines.upload-medicines') }}" class="mt-4"><x-button>{{ __('Import File') }}</x-button></a>
                        <a href="{{ route('medicines.monthly-medicines-uniformed') }}" class="mt-4"><x-button>{{ __('Uniformed') }}</x-button></a>
                        <a href="{{ route('medicines.monthly-medicines-nonuniformed') }}" class="mt-4"><x-button>{{ __('Non-Uniformed') }}</x-button></a>
                        <a href="{{ route('medicines.monthly-medicines-civilian') }}" class="mt-4"><x-button>{{ __('Civilian') }}</x-button></a>
                        <a href="{{ route('medicines.monthly-medicines-dependent') }}" class="mt-4"><x-button>{{ __('Dependent') }}</x-button></a>
                        <a href="{{ route('medicines.monthly-medicines-retired') }}" class="mt-4"><x-button>{{ __('Retired') }}</x-button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
