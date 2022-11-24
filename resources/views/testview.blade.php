
<h1>
    Bienvenue a notre premiere view!
</h1>
<?php
    $animals=["chien","chat","cheval"];
?>
<ol>
    @forelse($animals as $animal)
        <li> {{$animal}}</li>
    @empty
        <p> Aucun animal existant</p>
    @endforelse
</ol>
