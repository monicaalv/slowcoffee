<?php
get_header();
?>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!-- Indsæt font-link herunder -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Prompt:wght@700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">


<!-- Egen CSS -->
<style>
  
    :root {
      --blue: #4171A0;
      --h1: #9EC3E0;
      --green: #73A570;
      --h2-ofwhite: #FCF3E7;
      --espresso: #FE9882;
      --cortado: #FFD257;
      --americano: #FA7347;
      --cappuccino: #73A570;
      --p: 
    

    }

 
    section h1{
      color: var(--h1);
      font-family: 'Prompt', sans-serif;
      font-weight: bold;
      font-size: 6rem;
      margin-top: 6rem;
      line-height: 84px;
    }

    h2{
      font-family: 'Prompt', sans-serif;
      font-weight: bold;
    }

    .forside, .klogere {
      height: 80vh;
    }
    #section2 {
      height: 65vh;
      background-color: var(--green);
    }

    #section1{
      background-color: var(--blue);
    }

    p{
      font-family: 'Poppins', sans-serif;
      font-weight: normal;
      font-size: 20px;
    }

    #section2{
      margin-top: 15em;
    }
    .kaffe1{
      margin-top: 10em;
    }
    .klogere h2{
      font-size: 7rem;
      color: var(--h2-ofwhite);
      margin-top: 8rem;
    }

    .container .row h2{
      font-size: 3rem;
      margin-top: 2rem;
    }
    .btn{
      background-color:  #3C6B39;
      border: none;
    }
    .btn:hover{
      background-color: var(--h2-ofwhite);
      color: #EC6233;
      border: none;
    }


    
  
  
    @media (min-width: 768px)  {

    section h1{
      font-size: 8rem;
      margin-top: 18rem;
      line-height: 119px;
    }
    .container .row h2 {
    font-size: 3rem;
    margin-top: 10rem;
}

      .forside, .klogere {
      height: 68vh;
    }

    #section2 {
      height: 55vh;
    }

     }


     @media (min-width: 820px)  { 
    section h1{
      font-size: 9rem;
      margin-top: 19rem;
      line-height: 148px;
    }
    .klogere h2{
      font-size: 7rem;
      color: var(--h2-ofwhite);
      margin-top: 8rem;
    }
    .container .row h2{
      font-size: 5rem;
      margin-top: 4rem;
    }

    .forside, .klogere {
      height: 105vh;
    }

    #section2 {
      height: 67vh;
    }

     }
     @media (min-width: 992px)  { 
       
    section  h1{
        margin-top: 20rem;
      
     }

     .container .row h2{
      font-size: 5rem;
      
    }
    }







</style>






<body>

    <!-- Indsæt html her -->
	

  <section id="section1">
  <!-- <img src="https://monicaamundsen.com/kea/15_eksamen/slowcoffee/wp-content/themes/Divi-child/images/b&wTest1.jpg" class="img-fluid" alt="kaffe"> -->
    <div class="container forside d-grid parallax">
      <div class="row">
        <div class="col">
          <h1 class=" text-uppercase">Kaffe <br> & Tricks</h1>
          <p class="mb-5">Hvad er det nu lige forskellen er på en cortado og en cappuccino? <br>
Der er mange kaffevariationer derude og der er ærlig talt ikke 
til at holde styr på. <br> Der for har vi lavet en lille guide, så du kan få
helt styr på de forskellige slags kaffe.</p>
        </div>
      </div>

    </div>
  </section>
  <section id="section_kaffe">
    <div class="container kaffe1">
      <div class="row">
        <div class="col-md-6">
         <img src="https://monicaamundsen.com/kea/15_eksamen/slowcoffee/wp-content/themes/Divi-child/images/espresso-infog.png" class="img-fluid" alt="espresso">
        </div>
        <div class="col">
         <h2 class="text-uppercase font-weight-bold">Espresso</h2>
         <p>Hvad siger du til en stærk, mørk og kraftfuld espresso? <br>
Espresso bliver fremstillet af en lille mængde kogende vand og under stort tryk presses vandet gennem fintmalet kaffebønner… et voilà, en smagfuld, aromatisk kaffe står nu foran dig. 
Man kan også gøre brug af en espressokande, hvor du koger en lille mængde vand som derefter filtreres igennem fintmalede Espresso-bønner.  </p>
        </div>
      </div>

    </div>
  </section>
  <section id="section_kaffe mt-5">
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-6">
         <img  src="https://monicaamundsen.com/kea/15_eksamen/slowcoffee/wp-content/themes/Divi-child/images/cappucino-infog.png" class="img-fluid img-responsive" alt="cappucino">
        </div>
        <div class="col">
         <h2 class="text-uppercase">Cappucino</h2>
         <p>Er Espresso lige stærkt nok? Så er en cremet Cappucino måske lige noget for dig. <br>
En cappuccino tilberedes ved en kombination af tre lige dele espresso, varm mælk og mælkeskum. Espressoen og mælken blandes og siden hældes mælkeskummet forsigtigt på toppen af kaffen, som et tykt, cremet låg.Brug gerne mælk med en højere fedtindhold, da det gør kaffecremen endnu fyldigere. 

  </p>
        </div>
      </div>

    </div>
  </section>
  <section id="section_kaffe">
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-6">
         <img class="img-fluid" src="https://monicaamundsen.com/kea/15_eksamen/slowcoffee/wp-content/themes/Divi-child/images/americano-infog.png" alt="americano">
        </div>
        <div class="col">
         <h2 class="text-uppercase">Americano</h2>
         <p>Skal det bare gå hurtigt men smage godt? Så vil vi anbefale dig at lave en klassisk Americano. <br>
En Americano består af en enkel eller dobbelt espresso blandet med dobbelt så meget varmt vand og  så er du ready to go. 
Da den består af dobbelt så meget vand er den derfor ikke ligeså bitter i smagen, som en Espresso kan være. 
</p>
        </div>
      </div>

    </div>
  </section>
  <section id="section_kaffe">
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-6">
         <img class="img-fluid" src="https://monicaamundsen.com/kea/15_eksamen/slowcoffee/wp-content/themes/Divi-child/images/cortado-infog.png" alt="cortado">
        </div>
        <div class="col">
         <h2 class="text-uppercase">Cortado</h2>
         <p>Hvis du elsker den intense smag af Espresso, men også er vild med den cremede mælk, 
           ,så er en Cortado det helt rigtige valg. Dog får du den bedste oplevelse, hvis du gør det på en kaffemaskine. <br>
En Cortado består af dobbelt espresso og lige dele mælk.
Den er simpel og enkel men samtidigt også kraftfuld og cremet.  
</p>
        </div>
      </div>

    </div>
  </section>
  <section id="section2">
    <div class="container klogere mt-5 ms-0">
      <div class="row">
        <div class="col mt-5">
          <h2 class="text-uppercase">Er du mon blevet lidt klogere nu?</h2>
          <p>Så tjek vores spændende udvalg af økologiske
kaffebønner ud og vælg dem, <br> der passer bedst
til dig og din smag</p>
<a class="btn btn-light text-uppercase" href="http://monicaamundsen.com/kea/15_eksamen/slowcoffee/shop/">Se Produkter</a>
        </div>
      </div>

    </div>
  </section>





<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

  </body>

    


    <!-- Egen Script -->
    <script>
	

	
	</script>




<?php
get_footer();
?>
