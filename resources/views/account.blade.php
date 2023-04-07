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
                        <input type="radio" class="form-check-input" style="margin-left:50px" id="" name="checkbox[]" value="5">5
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="check2">
                        <input type="radio" class="form-check-input" style="margin-left:50px" id="" name="checkbox[]" value="4">4
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" style="margin-left:50px" id="" name="checkbox[]" value="3">3
                        </label>
                    </div>
                </div>
                <div class="col-sm">
                    
                    
                    <div class="form-check">
                        <label class="form-check-label" for="check1">
                        <input type="radio" class="form-check-input" style="margin-left:50px" id="" name="checkbox[]" value="2">2
                        </label>
                    </div>
                    <div class="form-check" style="margin-bottom :20px">
                        <label class="form-check-label" for="check2">
                        <input type="radio" class="form-check-input" style="margin-left:50px" id="" name="checkbox[]" value="1">1
                        </label>
                    </div>
                    <h1 style="margin-left:40px;margin-bottom:20px;">2.Daya Tarik Website</h1>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="" name="radio[]" value="5">5
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="" name="radio[]" value="4">4
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="" name="radio[]" value="3">3
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="" name="radio[]" value="2">2
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="" name="radio[]" value="1">1
                        </label>
                    </div>
                </div>
                <div class="col-sm">
                    <h1 style="margin-left:40px;margin-top:30px;margin-bottom:30px;">3. Kemudahan Mendapat Informasi</h1>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="" name="mudah[]" value="5">5
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="" name="mudah[]" value="4">4
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="" name="mudah[]" value="3">3
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="" name="mudah[]" value="2">2
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="" name="mudah[]" value="1">1
                        </label>
                    </div>
                    <h1 style="margin-left:40px;margin-bottom:20px;margin-top:30px;">4. Kelengkapan Informasi</h1>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="" name="lengkap[]" value="5">5
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="" name="lengkap[]" value="4">4
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="" name="lengkap[]" value="3">3
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="" name="lengkap[]" value="2">2
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="" name="lengkap[]" value="1">1
                        </label>
                    </div>
                    <h1 style="margin-left:40px;margin-bottom:20px;margin-top:30px;">5. Kejelasan Informasi dan Data yang Ada</h1>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="" name="info[]" value="5">5
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="" name="info[]" value="4">4
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="" name="info[]" value="3">3
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="" name="info[]" value="2">2
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="" name="info[]" value="1">1
                        </label>
                    </div>
                    <h1 style="margin-left:40px;margin-bottom:20px;margin-top:30px;">6. User Friendliness</h1>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="" name="friend[]" value="5">5
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="" name="friend[]" value="4">4
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="" name="friend[]" value="3">3
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="" name="friend[]" value="2">2
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="" name="friend[]" value="1">1
                        </label>
                    </div>
                    <h1 style="margin-left:40px;margin-bottom:20px;margin-top:30px;">7. Penilaian Website secara Keseluruhan</h1>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="" name="nilai[]" value="5">5
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="" name="nilai[]" value="4">4
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="" name="nilai[]" value="3">3
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="" name="nilai[]" value="2">2
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="" name="nilai[]" value="1">1
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

