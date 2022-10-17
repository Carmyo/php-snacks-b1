<!-- Snack 1  Olimpia Milano - Cantù | 55-60 -->

<?php
$match = [
    [
       "homeTeam"  => "Team One",
       "awayTeam" => "Team Two",
       "homeTeamPoints" => "73",
       "awayTeamPoints" => "34"

    ],
    [
       "homeTeam"  => "Team Three",
       "awayTeam" => "Team Four",
       "homeTeamPoints" => "41",
       "awayTeamPoints" => "84"

    ],
    [
       "homeTeam"  => "Team Five",
       "awayTeam" => "Team Six",
       "homeTeamPoints" => "73",
       "awayTeamPoints" => "47"

    ]
];
var_dump($match);
?>
  <?php
    for ($i=0; $i < count($match); $i++){
        $match = $matchToPrint[$i];
        ?>
        <div>
         <p><?= $matchToPrint['homeTeam'] ?> -<?=$matchToPrint['awayTeam'] ?> | <?= $matchToPrint['homeTeamPoints'] ?>-<?= $matchToPrint['awayTeamPoints'] ?></p>
        </div>
        <?php
    }
?>




<!-- Snack 2 -->
<?php 
$Name = $_GET['name'];
$Mail = $_GET['mail'];
$Age = $_GET['age'];
if ($name == "Carlo") {
   echo "Yes";
}

?>


<!-- Snack 3 -->

<!-- Snack 4 -->

<?php
$paragraph = "Striking from a fortress hidden among the billion stars of the galaxy, rebel spaceships have won their first victory in a battle with the powerful Imperial Starfleet. The EMPIRE fears that another defeat could bring a thousand more solar systems into the rebellion, and Imperial control over the galaxy would be lost forever.";
$toSplit = explode(".", $paragraph );
var_dump(explode(".", $paragraph ));
?>

<p><?= $toSplit ?></p>

<!-- Snack 5 -->

<?php
$class = [
    [
      "Name" => "Tizio",
      "Surname" => "Rossi",
      "Valutation" => [4,7,7,5,]
       
      ],
    [
      "Name" => "Caio",
      "Surname" => "Verdi",
      "Valutation" => [8,8,8,9]
   ],
    [
      "Name" => "Sempronio",
      "Surname" => "Gialli",
      "Valutation" => [3,3,2,4]    
      ]
    ];

      for($i=0; $i < count($class); $i++){
         $student = $class[$i];
         $average = array_sum($student['Valutation']) / count($student['Valutation']);   
         ?>
         <div>
            <p><?=$student['Name']?> <?= $student['Surname']?> <?=round($average)?></p>
            <p></p>
         </div>   
         <?php
      }
      ?>
