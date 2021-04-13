<div class="bg-white text-cool-gray-600 block md:inline-block rounded-lg shadow mt-8 md:mt-0">
    <div class="flex justify-center">
        <div class=" flex ">
            <div class="py-2 px-5 text-center border-r border-cool-gray-100">
                <div>
                    Status
                </div>
                <div class="text-xl font-semibold text-cool-gray-800">
                    230
                </div>
            </div>
            <div class=" py-2 px-5 text-center border-r border-cool-gray-100">
                <div>
                    Following
                </div>
                <div class="text-xl font-semibold text-cool-gray-800">
                    {{ $user->follows()->count() }}
                </div>
            </div>
            <div class=" py-2 px-5 text-center  ">
                <div>
                    Followers
                </div>
                <div class="text-xl font-semibold text-cool-gray-800">
                    {{ $user->followers()->count() }}
                </div>
            </div>
        </div>
    </div>
</div>