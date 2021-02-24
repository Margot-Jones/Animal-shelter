<x-fullapp-layout>

    <x-slot name="title">
      Create
    </x-slot>

    <x-slot name="head">

    </x-slot>

    <!-- <x-auth-validation-errors class="mb-4" :errors="$errors" /> -->


    <div class="create-form">
      <form class="form-signing" action="/shelters" method="post" enctype="multipart/form-data">
        <div class="formInput ">
          <label for="name">Name<label>
          <input type="text" name="name" placeholder="Input name" id="name">
        </div>
        <div class="formInput">
          <label for="address">Address<label>
          <input type="text" name="address" placeholder="Input address" id="address">
        </div>
        <div class="formInput">
          <label for="mail">Mail<label>
          <input type="text" name="mail" placeholder="Input mail" id="mail">
        </div>
        <div class="formInput">
          <label for="phone">Phone<label>
          <input type="text" name="phone" placeholder="Input phone" id="phone">
        </div>
        <div class="formInput">
          <label for="img">Logo</label>
           <input type="file" name="logo" id="logo">
        </div>
        <!-- <button class="btn btn-lg btn-primary btn-block" type="submit">Create</button> -->
        <div class="formInput submit">
    			<input type="submit" value="Create">
    		</div>
        @csrf
      </form>
    </div>



</x-fullapp-layout>
