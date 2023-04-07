<style>
form{

padding:35px;
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
                <h1 style="text-align:left;font-size: 15px;">Beri penilaian anda mengenai Website Sekolah Dasar Negeri Kuripan Kidul 04</h1>
                <form action="{{ route('form/save') }}" method="POST">
                    @csrf
   <h1 style="margin-bottom: 25px;">1. Interface Website</h1>
   
  <input type="radio" class="form-check-input" id="blue" value="5" name="checkbox[]">
  <label for="blue">5</label><br>
  
   <input type="radio" class="form-check-input" id="red" value="4" name="checkbox[]">
  <label for="red">4</label><br>
  
   <input type="radio" class="form-check-input" id="yellow" value="3" name="checkbox[]">
  <label for="yellow">3</label><br>
  
   <input type="radio" class="form-check-input" id="orange" value="2" name="checkbox[]">
  <label for="">2</label><br>
  
   <input type="radio" class="form-check-input" id="pink" value="1" name="checkbox[]">
  <label for="pink">1</label><br><br>
  <h1 style="margin-bottom: 25px;">2.Daya Tarik Website</h1>
  <input type="radio" class="form-check-input" id="blue" name="radio[]">
  <label for="blue">5</label><br>
  
   <input type="radio" class="form-check-input" id="red" name="radio[]">
  <label for="red">4</label><br>
  
   <input type="radio" class="form-check-input" id="yellow" name="radio[]">
  <label for="yellow">3</label><br>
  
   <input type="radio" class="form-check-input" id="orange" name="radio[]">
  <label for="">2</label><br>
  
   <input type="radio" class="form-check-input" id="pink" name="radio[]">
  <label for="pink">1</label><br><br>
  <h1 style="margin-bottom: 25px;">3. Kemudahan Mendapat Informasi</h1>
  <input type="radio" id="blue" name="info">
  <label for="blue">5</label><br>
  
   <input type="radio" id="red" name="info">
  <label for="red">4</label><br>
  
   <input type="radio" id="yellow" name="info">
  <label for="yellow">3</label><br>
  
   <input type="radio" id="orange" name="info">
  <label for="">2</label><br>
  
   <input type="radio" id="pink" name="info">
  <label for="pink">1</label><br><br>
  <h1 style="margin-bottom: 25px;">4. Kelengkapan Informasi</h1>
  <input type="radio" id="blue" name="kelengkapan">
  <label for="blue">5</label><br>
  
   <input type="radio" id="red" name="kelengkapan">
  <label for="red">4</label><br>
  
   <input type="radio" id="yellow" name="kelengkapan">
  <label for="yellow">3</label><br>
  
   <input type="radio" id="orange" name="kelengkapan">
  <label for="">2</label><br>
  
   <input type="radio" id="pink" name="kelengkapan">
  <label for="pink">1</label><br><br>
  <h1 style="margin-bottom: 25px;">5. Kejelasan Informasi dan Data yang Ada</h1>
  <input type="radio" id="blue" name="data">
  <label for="blue">5</label><br>
  
   <input type="radio" id="red" name="data">
  <label for="red">4</label><br>
  
   <input type="radio" id="yellow" name="data">
  <label for="yellow">3</label><br>
  
   <input type="radio" id="orange" name="data">
  <label for="">2</label><br>
  
   <input type="radio" id="pink" name="data">
  <label for="pink">1</label><br><br>
  <h1 style="margin-bottom: 25px;">6. User Friendliness</h1>
  <input type="radio" id="blue" name="user">
  <label for="blue">5</label><br>
  
   <input type="radio" id="red" name="user">
  <label for="red">4</label><br>
  
   <input type="radio" id="yellow" name="user">
  <label for="yellow">3</label><br>
  
   <input type="radio" id="orange" name="user">
  <label for="">2</label><br>
  
   <input type="radio" id="pink" name="user">
  <label for="pink">1</label><br><br>
  <h1 style="margin-bottom: 25px;">7. Penilaian Website secara Keseluruhan</h1>
  <input type="radio" id="blue" name="website">
  <label for="blue">5</label><br>
  
   <input type="radio" id="red" name="website">
  <label for="red">4</label><br>
  
   <input type="radio" id="yellow" name="website">
  <label for="yellow">3</label><br>
  
   <input type="radio" id="orange" name="website">
  <label for="">2</label><br>
  
   <input type="radio" id="pink" name="website">
  <label for="pink">1</label><br><br>
  
  <button type="submit" class="btn btn-primary">Submit</button>
   <input type="reset">
</form>    
            </div>
                

            </div>
        </div>
    </div>
</x-app-layout>

