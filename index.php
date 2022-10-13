<!-- Snack 1 -->

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

<p><? $match ?></p>

<!-- Snack 2 -->

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
   "StudentOne" => [
      "Name" => "Tizio",
      "Surname" => "Rossi",
      "Valutation" => [
         "Math" => 4,
         "English" => 7,
         "Story" => 7,
         "Sience" => 5,
      ]
      ],
   "StudentTwo" => [
      "Name" => "Caio",
      "Surname" => "Verdi",
      "Valutation" => [
         "Math" => 8,
         "English" => 8,
         "Story" => 8,
         "Sience" => 9,
      ],
   ],
   "StudentThree" => [
      "Name" => "Sempronio",
      "Surname" => "Gialli",
      "Valutation" => [
         "Math" => 3,
         "English" => 3,
         "Story" => 2,
         "Sience" => 4,
      ]
   ]    
]
?>