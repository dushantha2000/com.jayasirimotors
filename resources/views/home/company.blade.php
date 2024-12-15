<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <img src="images/logo2.png" alt="logo2" width="60px">
            
            
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{url('/add_company')}}">
            @csrf


            <div class="mt-4">
                <label for="company_address"> Company Name :</label>
                <x-input id="address" class="block mt-1 w-full" type="text" name="company_name" :value="old('address')" required  />
            </div>

            <!--<div class="mt-4">
                <label for="company_name"> Company Name :</label>
                <x-input id="company_name" class="block mt-1 w-full" type="company_name" name="company_name" :value="old('company_name')"
                placeholder="Company Name"

                 required autocomplete="name" />
            </div>-->



            <div class="mt-4">
                <label for="company_email"> Company Email :</label>
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                placeholder="@gmail.com"

                 required autocomplete="company_name" />
            </div>

            <div class="mt-4 ">
                <label for="company_phone"> Company Phone :</label>
                <x-input id="phone1" 
                class="block mt-1 w-full" 
                type="number" 
                name="phone" :value="old('comapny_phone')"
                pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                placeholder="xxx-xxx-xxxx"
                required:  
                autocomplete="username" />
            </div>


            <div class="mt-4">
                <label for="company_address"> Company Address :</label>
                <x-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autocomplete="username" />
            </div> <br>
            
            

            

            

                <x-button class="ms-4">
                    Add Your Company
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>-->

    










<!--<html>
<head>
</head>
<body>

    <form method="POST" action="{{url('/add_company')}}">
        @csrf 

        <div><label for="company_name">Company Name:</label><br>
        <input type="text" id="company_name" name="company_name"><br>
        

        <label for="company_email">Company Email:</label><br>
        <input type="email" id="company_email" name="company_email"><br>

        <label for="company_phone">Company Phone:</label><br>
        <input type="text" id="company_phone" name="company_phone"><br>

        <label for="company_address">Company Address:</label><br>
        <textarea id="company_address" name="company_address"></textarea><br>

        <input  type="submit" value="Register">
    </form> 
</body>
</html>-->