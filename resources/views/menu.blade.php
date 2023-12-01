@extends('base')
    <section>
      <nav>
        <ul>
              <li><a href="#">Acceuil</a></li>
              <li><a href="#">Menu</a></li>
              <li><a href="#">Réservation</a></li>
              <li><a href="#">Contact</a></li>
        </ul>
      </nav>
    </section>
    <p> test </p>
    <br> 
    <p> test </p>
    <section>
  <h2>Menu</h2>
  @foreach ($categories as $categories)
  <div>
      <h3>{{$categories}}</h3>
      <ul class="plats">
          @for ($i = 0; $i< 3; $i++)
          <li>
              <img src="/images/anh-nguyen-kcA-c3f_3FE-unsplash.jpg" alt="verdura e carne sulla ciotola" />
              <h4>Lorem ipsum dolor</h4>
              <span class="prix">9,99 eur</span>
          </li>
          @endfor
      </ul>
  </div>
  @endforeach
</section>
    <footer>
      <!-- TODO -->
    </footer>
  </body>
</html>
