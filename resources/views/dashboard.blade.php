<x-app-layout>
    <div class="">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <img src="https://img.playbook.com/xeVqZ7u_zbFK_6ka4hIBXJOYn_tFmm_q5QKNxWZAppM/Z3M6Ly9wbGF5Ym9v/ay1hc3NldHMtcHVi/bGljLzI2MzM2MjI4/LTliMjgtNDljNS05/Y2YzLTU2YTc0MDZm/NDc3Yw" alt="" class="h-[50vh] w-full object-cover rounded-xl mb-6 shadow-xl">
            <div class="bg-white overflow-hidden shadow-xl rounded-xl px-12 pb-12">
                <h2 class="text-2xl font-bold my-6">Recent Activities</h2>
                @foreach ($activites as $activity)
                    <!-- Card -->
                    <a class="block border border-gray-200 rounded-lg hover:shadow-sm focus:outline-none dark:border-neutral-700" href="#">
                        <div class="relative flex items-center overflow-hidden">
                            <img class="w-32 sm:w-48 h-full absolute inset-0 object-cover rounded-s-lg" src="{{ $activity->template_thumbnail }}" alt="{{ $activity->template_title }}">

                            <div class="grow p-4 ms-32 sm:ms-48">
                                <div class="min-h-24 flex flex-col justify-center">
                                    <h3 class="font-semibold text-sm text-gray-800 dark:text-neutral-300">
                                        {{ $activity->template_title }}
                                    </h3>
                                    <p class="mt-1 text-sm text-gray-500 dark:text-neutral-500">
                                        {{ $activity->template_tech }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- End Card -->
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
