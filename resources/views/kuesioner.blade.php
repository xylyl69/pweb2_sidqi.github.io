<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    
                    <x-nav-link :href="route('kuesioner')" :active="request()->routeIs('kuesioner')">
                        {{ __('Kuesioner') }}
                    </x-nav-link>
                    @if(Auth::user()->role_id !=0)
                    <x-nav-link :href="route('list')" :active="request()->routeIs('list')">
                        {{ __('user list') }}
                    </x-nav-link>
                    @else
                    
                    @endif

                    
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>


<style>
    input[type="radio"] {
  margin-left: 50px;margin-right: 10px;
}
}
h1{
    margin-left:50px;
    margin-top:30px;
}
form{

padding:15px;
border-radius:8px;
color:black;
font-family:arial;

}

</style>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kuesioner') }}
        </h2>
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <h1 style="text-align:center;font-size: 25px;"><b>Kuesioner Website Sekolah Dasar Negeri Kuripan Kidul 04</b></h1>
                </div>
                <div class="p-6 text-gray-900">
                <h1 style="text-align:left;font-size: 20px;margin-left:10px;">Beri penilaian anda mengenai Website Sekolah Dasar Negeri Kuripan Kidul 04</h1>
                
            </div>
            <div class="signup-form">
    <h1 style="margin-left:55px;margin-top:10px;" class="">1. Interface Website</h1>
    <form action="{{ route('form/save') }}" method="POST">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-sm">
                  
                    <div class="form-check">
                        <label class="form-check-label" for="check1">
                        <input type="radio" class="form-check-input" style="margin-left:50px" id="" name="checkbox[]" required value="5">5
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="check2">
                        <input type="radio" class="form-check-input" style="margin-left:50px" id="" name="checkbox[]" required value="4">4
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" style="margin-left:50px" id="" name="checkbox[]" required value="3">3
                        </label>
                    </div>
                </div>
                <div class="col-sm">
                    
                    
                    <div class="form-check">
                        <label class="form-check-label" for="check1">
                        <input type="radio" class="form-check-input" style="margin-left:50px" id="" name="checkbox[]" required value="2">2
                        </label>
                    </div>
                    <div class="form-check" style="margin-bottom :20px">
                        <label class="form-check-label" for="check2">
                        <input type="radio" class="form-check-input" style="margin-left:50px" id="" name="checkbox[]" required value="1">1
                        </label>
                    </div>
                    <h1 style="margin-left:40px;margin-bottom:20px;">2.Daya Tarik Website</h1>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="" name="radio[]" required value="5">5
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="" name="radio[]" required value="4">4
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="" name="radio[]" required value="3">3
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="" name="radio[]" required value="2">2
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="" name="radio[]" required value="1">1
                        </label>
                    </div>
                </div>
                <div class="col-sm">
                    <h1 style="margin-left:40px;margin-top:30px;margin-bottom:30px;">3. Kemudahan Mendapat Informasi</h1>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="" name="mudah[]" required value="5">5
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="" name="mudah[]" required value="4">4
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="" name="mudah[]" required value="3">3
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="" name="mudah[]" required value="2">2
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="" name="mudah[]" required value="1">1
                        </label>
                    </div>
                    <h1 style="margin-left:40px;margin-bottom:20px;margin-top:30px;">4. Kelengkapan Informasi</h1>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="" name="lengkap[]" required value="5">5
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="" name="lengkap[]" required value="4">4
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="" name="lengkap[]" required value="3">3
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="" name="lengkap[]" required value="2">2
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="" name="lengkap[]" required value="1">1
                        </label>
                    </div>
                    <h1 style="margin-left:40px;margin-bottom:20px;margin-top:30px;">5. Kejelasan Informasi dan Data yang Ada</h1>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="" name="info[]" required value="5">5
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="" name="info[]" required value="4">4
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="" name="info[]" required value="3">3
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="" name="info[]" required value="2">2
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="" name="info[]" required value="1">1
                        </label>
                    </div>
                    <h1 style="margin-left:40px;margin-bottom:20px;margin-top:30px;">6. User Friendliness</h1>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="" name="friend[]" required value="5">5
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="" name="friend[]" required value="4">4
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="" name="friend[]" required value="3">3
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="" name="friend[]" required value="2">2
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="" name="friend[]" required value="1">1
                        </label>
                    </div>
                    <h1 style="margin-left:40px;margin-bottom:20px;margin-top:30px;">7. Penilaian Website secara Keseluruhan</h1>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="" name="nilai[]" required value="5">5
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="" name="nilai[]" required value="4">4
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="" name="nilai[]" required value="3">3
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="" name="nilai[]" required value="2">2
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="" name="nilai[]" required value="1">1
                        </label>
                    </div>
                    
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <span class="text-center">
            <button type="submit" style="
  background-color: #4CAF50; 
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin-left:40px;
  margin-bottom:50px;
}" class="btn btn-primary">Submit</button>
        </span>
    </form>
</div>
            </div>
        </div>
    </div>
</x-app-layout>

