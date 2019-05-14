<?php 
    require ("inc/header.php");
?>

<h1>Les tableaux</h1>

<?php 

// $products = [
//     [
//         "name" => "Hamac",
//         "description" => "Pour se reposer après 5 jours de PHP"
//     ],
//     [
//         "name" => "Parasol",
//         "description" => "Pour faire l'ombre au Hamac"
//     ]
// ]

$hamac = [
    "name" => "Hamac",
    "description" => "Pour se reposer après 5 jours de PHP" 
];

$parasol = [
    "name" => "Parasol",
    "description" => "Pour faire l'ombre au Hamac"
];

$ballon = [
    "name" => "ballon",
    "description" => "Pour jouer"
];

$products = [];
$products[] = $hamac;
$products[] = $parasol;
$products[] = $ballon;

// var_dump($products);
// var_dump($products[0]['name']);

foreach ($products as $product) : ?>

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $product['name']; ?></h5>
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <p class="card-text"><?php echo $product['description']; ?></p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>


<?php 
endforeach;

    require ("inc/footer.php");
?>