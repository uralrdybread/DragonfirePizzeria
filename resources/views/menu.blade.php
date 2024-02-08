@extends('layouts.app')


@section('content')


    <section id="menu" class="menu">
      <div class="container">

        <div class="section-title d-flex justify-content-center">
          <h2>Feel free to mix and match or create your own <a href="{{ route('pizzas.create') }}">here</a></h2>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li>Pizzas</li>
              <li>Starters</li>
              <li>Salads</li>
              <li>Specialty</li>
            </ul>
          </div>
        </div>

        <div class="row menu-container">

          <div class="col-lg-6 menu-item">
            <div class="menu-content">
              <a href="#">Dragon's Breath Blast</a><span>$10.99</span>
            </div>
            <div class="menu-ingredients">
              A spicy pizza featuring fiery jalapeños, pepperoni, and sriracha drizzle.
            </div>
          </div>

          <div class="col-lg-6 menu-item">
            <div class="menu-content">
              <a href="#">Dungeon Delight</a><span>$12.99</span>
            </div>
            <div class="menu-ingredients">
              A savory combination of BBQ chicken, bacon, red onions, and cilantro.
            </div>
          </div>

          <div class="col-lg-6 menu-item ">
            <div class="menu-content">
              <a href="#">Mystic Margherita</a><span>$9.99</span>
            </div>
            <div class="menu-ingredients">
              A classic margherita pizza with fresh basil, sliced tomatoes, and buffalo mozzarella.
            </div>
          </div>

          <div class="col-lg-6 menu-item">
            <div class="menu-content">
              <a href="#">Inferno Inferno</a><span>$10.99</span>
            </div>
            <div class="menu-ingredients">
              For the spice lovers, this pizza packs a punch with spicy Italian sausage, banana peppers, and crushed red pepper flakes.
            </div>
          </div>

          <div class="col-lg-6 menu-item">
            <div class="menu-content">
              <a href="#">Fire-Breathing Veggie</a><span>$9.99</span>
            </div>
            <div class="menu-ingredients">
              A vegetarian delight with roasted red peppers, caramelized onions, spinach, mushrooms, and black olives.
            </div>
          </div>

          <div class="col-lg-6 menu-item">
            <div class="menu-content">
              <a href="#">White Wizard</a><span>$10.99</span>
            </div>
            <div class="menu-ingredients">
              A white pizza with creamy alfredo sauce, grilled chicken, spinach, and sun-dried tomatoes.
            </div>
          </div>

          <div class="col-lg-6 menu-item">
            <div class="menu-content">
              <a href="#">Dragon's Kiss</a><span>$9.99</span>
            </div>
            <div class="menu-ingredients">
              Fresh spinach, crisp romaine, tomatoes, and Greek olives
            </div>
          </div>

          <div class="col-lg-6 menu-item">
            <div class="menu-content">
              <a href="#">Enchanted Garden</a><span>$9.99</span>
            </div>
            <div class="menu-ingredients">
              A fresh and flavorful vegetarian option with pesto sauce, cherry tomatoes, artichoke hearts, and feta cheese.
            </div>
          </div>

          <div class="col-lg-6 menu-item">
            <div class="menu-content">
              <a href="#">Dragon's Delicacy</a><span>$12.99</span>
            </div>
            <div class="menu-ingredients">
              A gourmet pizza with prosciutto, arugula, shaved Parmesan, and balsamic glaze.
            </div>
          </div>

        </div>

      </div>
    </section>

@endsection