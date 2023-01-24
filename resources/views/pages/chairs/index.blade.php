@extends('layout')
@section('main')
{{-- <div class="container"> --}}
<div class="home_dex bg-white" >
    <header class="bg-primary  ps-4 pb-3 pt-3"><h1 class="text-dark " >ChairFinder</h1>
        <hr style="width:50%;text-align:left;margin-left:0 bg-dark">
    </header>
    
   <div class="entree_welkom mt-4 pt-5   bg-info"><h1 class="text-dark ps-5 " >Welkom</h1></div>
   <div class="entree_info py-2 px-4 mt-4 pt-4 bg-info "><h3 class="ps-4">info</h3><p class="ps-4">We willen je laten zien hoe geweldig tweedehands kan zijn. <br/>Verkoop de kleding die niet meer bij je past.<br/> Vind artikelen die je niet in de winkelstraat vindt.<br/> Vinted is voor iedereen die vindt dat goede kleding een lang leven verdient</p></div>
   <div class="entree_toevoegen py-2 px-4  mt-3 pb-5 pt-4 bg-info"><h3 class="ps-4 mt-3">stoel toevoegen</h3> <button class=" ps-3 pe-5 mt-4 bg-primary text-white " >toevoegen</button> </div>
    @include('components.chaircontainer')

     <div class="home_img bg-primary"></div>
     
</div>
<div class="inventory bg-info"></div>
   
{{-- </div> --}}
@endsection