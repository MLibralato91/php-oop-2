<?php
include __DIR__ . '/../Models/Category.php';
include __DIR__ . '/../Models/Product.php';
include __DIR__ . '/../Models/FoodProd.php';
include __DIR__ . '/../Models/ToyProd.php';





$products =
  [

    new FoodProd('Monge All Breeds Adult Salmone e Riso', '€ 44,99', 'https://arcaplanet.vtexassets.com/arquivos/ids/270797-1800-1800/Monge-All-Breeds-Adult-Salmone-e-Riso-12Kg.jpg?v=1770758221&quality=1&width=1800&height=1800', 'dog', 'Cibo per Animali'),
    new FoodProd('Purina Pro Plan Veterinary Diets Hypoallergenic HA Cane', '€71,99', 'https://arcaplanet.vtexassets.com/arquivos/ids/276183-1800-1800/MAIN.jpg?v=1770755918&quality=1&width=1800&height=1800', 'dog', 'Cibo per Animali'),
    new FoodProd('Natural Trainer Gatto Sterilised Salmone', '€14,49', 'https://arcaplanet.vtexassets.com/arquivos/ids/284743-1800-1800/natural-trainer-cat-sterilised-1-5-kg.jpg?v=1770753557&quality=1&width=1800&height=1800', 'cat', 'Cibo per Animali'),
    new ToyProd('Yes! Gatto Pallina Peluche Rosa', '€1,90', 'https://arcaplanet.vtexassets.com/arquivos/ids/227172-1800-1800/yes-pallina-peluche-rosa-con-coda-cm-4-5x12.jpg?v=1770713960&quality=1&width=1800&height=1800', 'cat', 'Giochi per Animali'),
    new ToyProd('KONG Extreme Goodie Bone', '€26,88', 'https://arcaplanet.vtexassets.com/arquivos/ids/223722-1800-1800/kong-cane-extreme-goodie-bone.jpg?v=1770423309&quality=1&width=1800&height=1800', 'dog', 'Giochi per Animali'),
    new ToyProd('KONG Wiggi Giraffa', '€8,40', 'https://arcaplanet.vtexassets.com/arquivos/ids/223644-1800-1800/kong-cane-wiggi-giraffe.jpg?v=1770745732&quality=1&width=1800&height=1800', 'dog', 'Giochi per Animali'),


  ];
