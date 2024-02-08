@extends('layouts.app')

@section('content')
<div style="text-align:center"> 
    {{-- Must create css rule later --}}
<h1>Create a New Pizza</h1>
</div>
<div class="wrapper create-pizza d-flex justify-content-center center">
    
    <form action="/pizzas" method="POST">
        @csrf
        <label for="name">Your Name: </label>
        <input type="text" id="name" name="name"><br />
        <label for="name">Your Phone Number: </label>
        <input type="text" id="phonenumber" name="phonenumber"><br />
        <label for="type">Choose pizza type:</label>
        <select name="type" id="type">
            <option value="None" selected>Optional</option>
            <option value="Dragon's Breath Blast">Dragon's Breath Blast</option>
            <option value="Dungeon Delight">Dungeon Delight</option>
            <option value="Mystic Margherita">Mystic Margherita</option>
            <option value="Inferno Inferno">Inferno Inferno</option>
            <option value="Fire-Breathing Veggie">Fire-Breathing Veggie</option>
            <option value="White Wizard">White Wizard</option>
            <option value="Dragon's Kiss">Dragon's Kiss</option>
            <option value="Enchanted Garden">Enchanted Garden</option>
            <option value="Dragon's Delicacy">Dragon's Delicacy</option>
        </select>

        <br />
         <label for="base">Choose pizza base:</label>
        <select name="base" id="base">
            <option value="None" selected>Optional</option>
            <option value="Cheest Crust">Cheesy Crust</option>
            <option value="Garlic Crust">Garlic</option>
            <option value="NYC Thin Crust">NYC Thin Crust</option>
            <option value="Traditional">Traditional</option>
            <option value="Neapolitan">Neapolitan</option>
            <option value="margherita">Margherita</option>
        </select>
        <fieldset>
            <label>Extra Toppings:</label><br />
            <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms<br />
            <input type="checkbox" name="toppings[]" value="peppers">Peppers<br />
            <input type="checkbox" name="toppings[]" value="garlic">Garlic<br />
            <input type="checkbox" name="toppings[]" value="olives">Olives<br />
            <input type="checkbox" name="toppings[]" value="italiansausage">Italian Sausage<br />
            <input type="checkbox" name="toppings[]" value="ham">Ham<br />
            <input type="checkbox" name="toppings[]" value="pepperoni">Pepperoni<br />
            <input type="checkbox" name="toppings[]" value="redpepperflakes">Red Pepper Flakes<br />
            <input type="checkbox" name="toppings[]" value="bananapeppers">Banana Peppers<br />
            <input type="checkbox" name="toppings[]" value="redonions">Red Onions<br />
            <input type="checkbox" name="toppings[]" value="sriracha">Sriracha Drizzle<br />
            <input type="checkbox" name="toppings[]" value="jalapenos">Jalapeños<br />
            <input type="checkbox" name="toppings[]" value="suntomatoes">Sun-Dried Tomatoes<br />
            <input type="checkbox" name="toppings[]" value="chicken">Grilled Chicken<br />
        </fieldset>

        <div class='input'>
        <input type="submit" value="Order Pizza">
            </div>

    </form>
</div>

@endsection