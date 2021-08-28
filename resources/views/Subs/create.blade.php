

@extends('layouts.layout')

@section('content')
    <div class="wrapper create-sub">
        <h1>Create a new Sub</h1>
        <form action="/subs" method="POST" >
            @csrf
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name">
            <label for="size">Choose your size:</label>
            <select name="size" id="size">
                <option value="6-inch">6-inch</option>
                <option value="footlong">Footlong</option>
            </select>
            <label for="bread">Choose the type of Bread:</label>
            <select name="bread" id="bread">
                <option value="italian">Italian</option>
                <option value="wheat">Wheat</option>
                <option value="sour dough">Sour Dough</option>
            </select>
            <select name="type" id="type">
                <option value="turkey">Turkey</option>
                <option value="steak and cheese">Steak And Cheese</option>
                <option value="chicken teriyaki">Chicken Teriyaki</option>
                <option value="veggie">Veggie</option>
            </select>
            <label for="cheese">Choose the type of cheese:</label>
            <select name="cheese" id="cheese">
                <option value="provolone">Provolone</option>
                <option value="swiss">Swiss</option>
                <option value="American">American</option>
                <option value="no cheese">No Cheese</option>
            </select>
            <fieldset>
                <label>Vegetables</label>
                <input type="checkbox" name="vegetables[]" value="lettuce">Lettuce <br>
                <input type="checkbox" name="vegetables[]" value="tomato">Tomato <br>
                <input type="checkbox" name="vegetables[]" value="red onion">Red Onion <br>
                <input type="checkbox" name="vegetables[]" value="green peppers">Green Peppers <br>
                <input type="checkbox" name="vegetables[]" value="pickles">Pickles <br>
                <input type="checkbox" name="vegetables[]" value="black olives">Black Olives <br>
                <input type="checkbox" name="vegetables[]" value="banana peppers">Banana Peppers <br>
            </fieldset>
            <label for="sauce">Choose the type of cheese:</label>
            <select name="sauce" id="sauce">
                <option value="mayo">Mayo</option>
                <option value="chipotle">Chipotle</option>
                <option value="sweet onion">Sweet Onion</option>
                <option value="no sauce">No sauce</option>
            </select>
            <input type="submit" value="Create Sub">
        </form>
    </div>
@endsection