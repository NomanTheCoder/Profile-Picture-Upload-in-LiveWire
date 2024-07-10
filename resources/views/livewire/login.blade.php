<div>
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-r from-indigo-400 to-purple-600 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8 p-10 bg-white rounded-xl shadow-lg z-10">
            <div class="text-center">
                <h2 class="mt-6 text-3xl font-extrabold text-gray-900">Login To Your Account</h2>
                
            </div>
            <form class="mt-8 space-y-6" wire:submit.prevent="login">
                <div class="rounded-md shadow-sm -space-y-px">
            
                    <div>
                        <label for="email" class="sr-only">Email</label>
                        <input  id="email" name="email" type="email" wire:model="email" required class="appearance-none rounded-none relative block w-full px-3 py-4 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Email">
                        @error('email') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="password" class="sr-only">Password</label>
                        <input  id="password" name="password" type="password" wire:model="password" required class="appearance-none rounded-none relative block w-full px-3 py-4 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Password">
                        @error('password') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>
                   
                </div>
                @if(session('error'))
                <span class="text-red-600">{{session('error')}}</span>
            
                @endif()
    
               
    
                <div>
                    <button wire:click="login()" type="submit" class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition ease-in-out duration-150">
                       Login
                    </button>
                </div>
            </form>
        </div>
    </div>
    
</div>