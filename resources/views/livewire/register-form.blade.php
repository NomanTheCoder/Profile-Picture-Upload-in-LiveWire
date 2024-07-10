<div>
   
   <div class="min-h-screen flex items-center justify-center bg-gradient-to-r from-indigo-400 to-purple-600 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8 p-10 bg-white rounded-xl shadow-lg z-10">
        <div class="text-center">
            @if(session('success'))
            <span class="text-green-600 font-bold">{{session('success')}}</span>
            @endif()
            <h2 class="mt-6 text-3xl font-extrabold text-gray-900">Create Your Account</h2>
            <p class="mt-2 text-sm text-gray-600">Sign up to get started</p>
        </div>
        <form class="mt-8 space-y-6" wire:submit.prevent="create">
            <div class="rounded-md shadow-sm -space-y-px">
                <div>
                    <label for="name" class="sr-only">Name</label>
                    <input wire:model="name" id="name" name="name" type="text" wire:model="name" required class="appearance-none rounded-none relative block w-full px-3 py-4 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Name">
                    @error('name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label for="email" class="sr-only">Email</label>
                    <input wire:model="email" id="email" name="email" type="email" wire:model="email" required class="appearance-none rounded-none relative block w-full px-3 py-4 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Email">
                    @error('email') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label for="password" class="sr-only">Password</label>
                    <input wire:model="password" id="password" name="password" type="password" wire:model="password" required class="appearance-none rounded-none relative block w-full px-3 py-4 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Password">
                    @error('password') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>
                 <div>
                    <label for="profilePicture" class="sr-only">Profile Picture</label>
                    <input accept="image/png,image/jpeg" id="profilePicture" name="profilePicture" type="file" wire:model="profilePicture" required class="appearance-none rounded-none relative block w-full px-3 py-4 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
                    @error('profilePicture') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div> 
            </div>
            @if($profilePicture)
            <img class="rounded w-10 h-10 mt-5 block" src="{{$profilePicture->temporaryUrl()}}" alt="">
            @endif()
            <div wire:loading.delay  target="profilePicture">
                <span class="text-green-500">Uploading...</span>
            </div>
            

            <div class="flex items-center justify-between">
                <div class="text-sm">
                    <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Already have an account?</a>
                </div>
            </div>

            <div>
                <button wire:loading.class="bg-blue-500" wire:loading.attr="disable"  wire:click="create()" type="submit" class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition ease-in-out duration-150">
                    Create Account
                </button>
            </div>
        </form>
    </div>
</div>

</div>
